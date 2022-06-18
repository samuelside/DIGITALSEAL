<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Auth\SessionGuard;

class AdminController extends Controller
{
    //

    public function Index()
    {

        return view('admin.admin_login');
    }

    public function Dashboard()
    {
        return view('admin.index');
    }

    public function Login(Request $request)
    {
        $check = $request->all();
        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password'], 'identifiant' => $check['identifiant']])) {
            return redirect()->route('admin.dashboard')->with('error', 'vous etes connecté');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }



    public function AdminLogout()
    {

        Auth::guard('admin')->logout();
        return redirect()->route('login_admin')->with('error', 'Admin Login Successfully');
    }


    public function AdminRegister()
    {
        return view('admin.admin_register');
    }

    public function AdminRegisterCreate(Request $request)
    {
        $request->validate([
            'name' => ['required','string','max:30'],
            'email' => ['required','email'],
            'identifiant' => ['required','string','max:30'],
            'password' => ['required','min:8'],
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'identifiant' => $request->identifiant,
        ]);

        //dd($admin);

        return redirect()->route('login_admin')->with('error', 'Admin Created Success');
    }
}
