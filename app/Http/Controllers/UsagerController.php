<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Usager;
use Carbon\Carbon;

class UsagerController extends Controller
{
    //

    public function show()
    {
        return view('usager.usager_login');
    }

    public function Dashboard()
    {
        return view('usager.index');
    }

    public function Login(Request $request)
    {
        $check = $request->all();
        if (Auth::guard('usager')->attempt(['email' => $check['email'], 'password' => $check['password'], 'numéroTel' => $check['numéroTel']])) {
            return redirect()->route('usager.dashboard')->with('error', 'vous etes connecté');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }



    public function UsagerLogout()
    {
        Auth::guard('usager')->logout();
        return redirect()->route('login_user')->with('error', 'usager Login Successfully');
    }


    public function UsagerRegister()
    {
        return view('usager.usager_register');
    }

    public function UsagerRegisterCreate(Request $request)
    {

        Usager::insert([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'numéroTel' => $request->numéroTel,
            'created_at' => Carbon::now(),

        ]);

        //dd($admin);

        return redirect()->route('login_user')->with('error', 'usager Created Success');
    }
}
