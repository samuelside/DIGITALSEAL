<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CEV;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use App\Http\Controllers\Controller;
use App\Mail\DIGITALSEAL;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Support\Facades\Storage;
use setasign\Fpdi\Fpdi;
use Illuminate\Support\Facades\Mail;



class CEVController extends Controller
{
    //
    public function show(){

        return view('DemandeCEV');
           }  
        
           /**
             * Store a new blog post.
             *
             * @param  \Illuminate\Http\Request  $request
             * @return \Illuminate\Http\Response
             */
           
           
        // Valider les données du formulaire et les envoyer dans le formulaire 
        
        public function create (Request $request){
        
        $validated=$request->validate([
           'NomOrga'=>['required','max:255'],
           'IDARTCI' => ['required ', 'max: 255'],
           'NumDoc' => ['required',  'max:255'],
           'EmailUsager' => ['required', 'max:255'],
           
        ]);
        
        Storage::disk('public')->putFileAs('2D-doc',$request->file('Document'),'side.pdf');
        $filePdf=fopen(Storage::disk('public')->path('2D-doc/side.pdf'), 'r');
        $filePdf1=fread($filePdf,filesize(Storage::disk('public')->path('2D-doc/side.pdf')));
         /*
        Storage::disk('public')->putFileAs('2D-doc',$request->file('Certificat'),'side.pem');
        $filetxt=fopen(Storage::disk('public')->path('2D-doc/side.pem'), 'r');
        $filetxt1=fread($filetxt,filesize(Storage::disk('public')->path('2D-doc/side.pem')));
        $contain=openssl_x509_parse($filetxt1, true);
        $IDdecachet = $contain['serialNumberHex'];
*/
        $lire = fopen('C:\Users\samue\rsacert.pem', 'rb');
        $lire1 = fread($lire, filesize('C:\Users\samue\rsacert.pem'));
        $voir1 = openssl_x509_parse($lire1, true);
        
        if ($filePdf==TRUE){
        $fichier = file_get_contents(Storage::disk('public')->path('2D-doc/side.pdf'));
        $pages = preg_match_all("/\/Page\W/", $fichier, $matches);
        }
        else echo 'r';
        
        $Mon_CEV= new CEV;
        $Mon_CEV->NomOrga = $request->NomOrga;
        $Mon_CEV->IDARTCI = $request->IDARTCI;
        $Mon_CEV->NumDoc = $request->NumDoc;
        $Mon_CEV->EmailUsager = $request->EmailUsager;
        
        
    
         
        $Mon_CEV->save();
        $id= $Mon_CEV->id;
        $Mon_CEV= CEV::find($id);
        
        $data = json_decode($Mon_CEV, true);
            
        
                $NomOrga = $data['NomOrga'];
                $IDARTCI = $data['IDARTCI'];
                $NumDoc = $data['NumDoc'];
                $IDdecachet = $voir1['serialNumberHex'];
               // $IDsign = $voir1['serialNumberHex'];
                $EmailUsager = $data['EmailUsager'];
                $Entete = $IDARTCI . "<GS>" . $IDdecachet . "<GS>" . "<GS>" . $NomOrga;
        
        
                if ($NumDoc == TRUE && $NomOrga == TRUE && $Entete == TRUE) {
        
                    //$publicKey  = file_get_contents('C:\Users\samue\public.key');
                    $privateKey = file_get_contents('C:\Users\samue\privée.key');
        
                    $messagecrypt = $NumDoc . $NomOrga;
        
                    // On crypte avec la clé publique
                    $h = hash("sha256", $messagecrypt);
                    openssl_private_encrypt($h, $crypted, $privateKey);
                    $decode = utf8_encode($crypted);
                    $voir = base64_encode($crypted);
                }
        
        
                // On décrypte avec la clé privée
                //openssl_public_decrypt($crypted, $decrypted, $publicKey);
                //echo $decrypted;
        
        
                if ($voir == TRUE && $Entete == TRUE && $h == TRUE) {
        
                     
                        $qr = QrCode::create($Entete . $h . "<US>" . $voir)
                        ->setEncoding(new Encoding('UTF-8'))
                        ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
                        ->setSize(200)
                        ->setMargin(0)
                        ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
                        ->setForegroundColor(new Color(0, 0, 0))
                        ->setBackgroundColor(new Color(255, 255, 255));
                        $writer = new PngWriter();
                        $result = $writer->write($qr);
                        
                        // (C) OUTPUT QR CODE
                        // (C1) SAVE TO FILE
                        $result->saveToFile(__DIR__.'/qrcode.png');
                        rename('C:\laragon\www\DIGITALSEAL\app\Http\Controllers\qrcode.png','C:\laragon\www\DIGITALSEAL\public\im.png');
                        
                   
                $fpdi = new Fpdi();
                $fpdi->setSourceFile(Storage::disk('public')->path('2D-doc/side.pdf'));

                for ($i=1; $i < $pages; $i++) { 
                    $fpdi->AddPage();
                    $file4=$fpdi->importPage($i);
                    $fpdi->useTemplate($file4,0,0);
                }
                //Mail::to($EmailUsager)->send(new DIGITALSEAL());
                        
                $fpdi->SetFont('Arial','B',14);
                $fpdi->Image('im.png',170,260,40);       
                
                $fpdi->Output();
                exit;
                           
            }
}
            public function verified(Request $request ){
               
                $get=CEV::where('IDdecachet','=',$request->IDdecachet)->first();
                if ($get!=null){
                return redirect()->route('liste_certificat');
            
                }
        
              else {
                return 'Alerte';
                }

        


            }

            public function show_page_verification(){


                return view('verified_Certificate');
            }
/*
            public function sendMail(){


                Mail::to('test@gmail.com')->send(new DIGITALSEAL());
                return view ('emails.DIGITALSEAL')

            }

            */
}

