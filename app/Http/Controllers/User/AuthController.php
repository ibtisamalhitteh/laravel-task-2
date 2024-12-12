<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\SignupRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginForm (){
        return view('auth.login');

    }

    public function login (LoginRequest $request){
        
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
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
