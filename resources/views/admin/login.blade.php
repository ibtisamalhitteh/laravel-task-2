@extends('admin.layout.login')
@section('title', 'Admin Login')
@section('content')



      <div id="login-page">
        <div class="container">
            <br/>
        <div class="col-md-12">
            @if(session()->has('errors'))
            <div class="alert alert-success">
                <ul class="text-danger">
                     @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif
        </div>

            <form id="form-login" class="form-login" action="{{ route('administrator.login.form.submit') }}"  method="POST">
                    @csrf

                <h2 class="form-login-heading">Admin Login</h2>
                <div class="login-wrap">
                    <input type="text" class="form-control" placeholder="Email" name="email" autofocus>
                    <br>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                 <br/>
                    <button class="btn btn-theme btn-block"  type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
                    
                    
                </div>
              </form>       
        
        </div>
      </div>


@endsection
