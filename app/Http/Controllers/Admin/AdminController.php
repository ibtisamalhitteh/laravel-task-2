<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function loginForm()
    {
        return view('admin.login');
    }

    //Admin login post 
    public function loginPost(LoginRequest $request)
    {

        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('administrator.dashboard');
        }else{
            Session::flash('message','Invalid Email or Password');
            Session::flash('alert-class', 'alert-danger'); 
            return back();
        }
    }



    //Admin logout 
    public function logout(Request $request){
        if(Auth::guard('admin')->check()) // this means that the admin was logged in.
        {
            Auth::guard('admin')->logout();
            return redirect()->route('administrator.dashboard');
        }

        $this->guard()->logout();
        $request->session()->invalidate();

    }

}
