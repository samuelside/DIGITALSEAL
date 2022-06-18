<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\utilisateur;
use Carbon\Carbon;
use App\Models\Admin;

class UtilisateurController extends Controller
{
    //

    public function Index(){

        return view('utilisateur.utilisateur_login');
    }

    public function Dashboard(){
    return view('utilisateur.index');

    }

    public function Login(Request $request){
    $check=$request->all();
    if (Auth::guard('utilisateur')->attempt(['email'=>$check['email'],'password'=> $check ['password'] ])){
    return redirect()->route('utilisateur.dashboard')->with('error','vous etes connecté');
    }
else {
    return back()->with('error','Invalid Email or Password');
}
    }



    public function UtilisateurLogout(){

        Auth::guard('utilisateur')->logout();
        return redirect()->route('login_from')->with('error','utilisateur Login Successfully');
    }


    public function UtilisateurRegister(){
     return view ('utilisateur.utilisateur_register');

    }

    public function UtilisateurRegisterCreate(Request $request){

      utilisateur::insert([

        'name'=> $request->name,
        'email'=> $request->email,
        'password'=> Hash::make($request->password),
        'created_at'=> Carbon::now(),

     ]); 

     //dd($admin);

     return redirect()->route('login_from')->with('error','utlisateur  Created Success'); 

    }
    
    public function consult(){
        $admins=Admin::all();
        //dd($admins);
        return view('consult_voir',compact('admins'));

    }
}
