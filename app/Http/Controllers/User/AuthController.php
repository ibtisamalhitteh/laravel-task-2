<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\SignupRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginForm (){
        return view('auth.login');

    }

    public function login (LoginRequest $request){
         $credentials = $request->only('email', 'password');
        if (Auth::guard('web')->attempt($credentials)) {
            return redirect()->route('home');
        }else{
            Session::flash('message','Invalid Email or Password');
            Session::flash('alert-class', 'alert-danger'); 
            return back();
        }       
    }

    public function signupForm (){
        return view('auth.signup');
    }

    
    public function signup (SignupRequest $request){
        $input = $request->only('name','user_name' , 'email' , 'password');
        $input['password'] = Hash::make($input['password']);
        User::create($input);
        return redirect()->back()->withSuccess("User Signup Successfully!");

    }

    public function logout (Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}
