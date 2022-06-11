<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;
use Illuminate\Validation\Validator;

class CertificateController extends Controller
{
    //


    public function show_page(){
    return view ('Create_Certificate');

    }

    public function show_liste(){
    return view ('liste');

    }

    public function verified_page(){
        return view('verified_Certificate');
    }

    public function create_certificate(Request $request){
        $validated=$request->validate([
            'Nom_Orga'=>['required','max:255'],
            'ID_AC' => ['required ', 'max: 255'],
            'email_server' => ['required ', 'max: 255'],
            'id_Certificate'=>['required','max:255'],
    
            
         ]);

        $Mon_Certificate= new Certificate;
        $Mon_Certificate->Nom_Orga = $request->Nom_Orga;
        $Mon_Certificate->ID_AC = $request->ID_AC;
        $Mon_Certificate->email_server = $request->email_server;
        $Mon_Certificate->id_Certificate=$request->id_Certificate;
        $Mon_Certificate->save();
        

    }

    public function verified_certificate(){
      
        $get=Certificate::where('id_Certificate','azerty')->first();
        if ($get==TRUE){
        return redirect()->route('liste_certificat')->with('error','vous etes connecté');
    
        }

      else {
        return back()->with('votre certificat est invalide');
        }

    }
}

