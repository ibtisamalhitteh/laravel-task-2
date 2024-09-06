<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Validator;

use App\Http\Requests\User\AuthRequest;

class UserController extends Controller
{

    

    public function showLoginForm(Request $request)
    {
        return view('user.login');
    }
       
    public function login(AuthRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            $notification = array(
                'message' => 'user login success',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'user credentials error',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }


    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return $this->loggedOut($request) ?: redirect('/');
    }
}
