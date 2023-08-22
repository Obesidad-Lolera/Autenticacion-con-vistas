<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Login(Request $request){
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) 
            return redirect("/");
        return redirect("/login")->with("failed",true);
    }

    public function Logout(Request $request){
        Auth::logout();
        return redirect("/login")->with("logout",true);
    }
}
