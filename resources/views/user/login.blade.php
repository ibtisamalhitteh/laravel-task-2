@extends('layout.main')
@section('title', 'Login')
@section('content')
<main id="login_page" class=" pt-5 background_position">
    <div class="container d-flex justify-content-center align-items-center  rounded-3 login_container" id="container_1">
           
                <form action="/loginprocess" class="rounded-3 mx-auto form" method="POST" id="login_form">
                    @csrf
                    <h2 class="css-1w5k979  mb-3">Login</h2>
                    <div class="mx-auto row ">
                        <div class="col-lg-12  mt-2 mt-3  px-lg-2  ">
                            <div class="input-group mb-3">
                                <input type="email" class="css-hopnlg" name="email" id="email" placeholder="Email" value="" required>
                            </div>
                            <div class="input-group" id="show_hide_password">
                                <input class="css-hopnlg" type="password" name="password" id="password" placeholder="Password" required>
                               
                            </div>
                        </div>
                        
                        <div class="col-12 mx-auto text-center mt-3">
                            <button type="submit" class="css-1t7bcd0 ">Login</button>
                        </div>
                    </div>
                </form>
                
            
     
    </div>
</main>
@endsection
