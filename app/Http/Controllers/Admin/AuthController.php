<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Validator;
use App\Http\Requests\User\AuthRequest;

class AuthController extends Controller
{

    public function index(Request $request)
    {
        $data = null;
        if (Auth::check()) {
            return view(
                'admin.auth.dashboard',
                [
                    'admin' => Auth::guard('admin')->user()->type,
                    'data' => $data
                ]
            );
        }
        return view('admin.auth.login');
    }

    public function loginScreen()
    {
        return view('admin.auth.login');
    }

    public function login(AuthRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            $notification = array(
                'message' => 'user login success',
                'alert-type' => 'success'
            );
            return redirect()->route('administrator.dashboard');
           // return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'user credentials error',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }

    }


    public function logout(AuthRequest $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return view('admin.auth.login');
    }
}
