<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\utilisateur;
use App\Models\Admin;
use App\Models\certificate;
use Illuminate\Support\Facades\Storage;

class UtilisateurController extends Controller
{
    public function Index()
    {
        return view('utilisateur.utilisateur_login');
    }

    public function Dashboard()
    {
        return view('utilisateur.index');
    }

    public function Login(Request $request)
    {
        $check = $request->all();
        if (Auth::guard('utilisateur')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('utilisateur.dashboard')->with('error', 'vous etes connecté');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }



    public function UtilisateurLogout()
    {

        Auth::guard('utilisateur')->logout();
        return redirect()->route('login_from')->with('error', 'utilisateur Login Successfully');
    }


    public function UtilisateurRegister()
    {
        return view('utilisateur.utilisateur_register');
    }

    public function UtilisateurRegisterCreate(Request $request)
    {

        utilisateur::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //dd($admin);

        return redirect()->route('login_from')->with('error', 'utlisateur  Created Success');
    }

    public function consult()
    {
        $admins = Admin::all();
        //dd($admins);
        return view('consult_voir', compact('admins'));
    }

    public function create_annuaire(Request $request)
    {
        Storage::disk('public')->putFileAs('2D-doc', $request->file('Certificat'), 'side.pem');
        $filetxt = fopen(Storage::disk('public')->path('2D-doc/side.pem'), 'r');
        $filetxt1 = fread($filetxt, filesize(Storage::disk('public')->path('2D-doc/side.pem')));
        $contain = openssl_x509_parse($filetxt1, true);
        $Pays = $contain['subject']['C'];
        $Nom_Orga = $contain['subject']['O'];
        $email_server = $contain['subject']['emailAddress'];
        $Numero_serie = $contain['serialNumberHex'];
        $DteOrigin = $contain['validFrom'];
        $Dtefin = $contain['validTo'];



        $Mon_Certificat = new certificate;
        $Mon_Certificat->Pays = $Pays;
        $Mon_Certificat->Nom_Orga = $Nom_Orga;
        $Mon_Certificat->email_server = $email_server;
        $Mon_Certificat->Numero_serie = $Numero_serie;
        $Mon_Certificat->DteOrigin = $DteOrigin;
        $Mon_Certificat->Dtefin = $Dtefin;

        $Mon_Certificat->save();
    }
}
