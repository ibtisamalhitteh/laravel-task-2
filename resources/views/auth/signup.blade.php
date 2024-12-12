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

        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif

        </div>

            <form id="registrationform" class="form-login" action="{{ route('general.signup.form.submit') }}"  method="POST">
                    @csrf

                <h2 class="form-login-heading">User Signup</h2>
                <div class="login-wrap">

                    
                    <input type="text" class="form-control" placeholder="Name" name="name" id="name" required>
                    <br/>
                    <input type="text" class="form-control" placeholder="Username" name="user_name" minlength="8"  id="username" required>
                    <br/>
                    <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                    <br>
                    <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    <span id="passwordError" class="error"></span>
                    </div>
                    <br/>
                    <div class="form-group">
                        <input type="password" id="confirmPassword" name="password_confirmation" placeholder="Confirm Password"class="form-control"  required>
                        
                        <span id="passwordConfirmError" class="error"></span>

                    </div>
                 <br/>
                    <button class="btn btn-theme btn-block"  id="submitBtn" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
                    
                    
                </div>
              </form>       
        <script>
        document.getElementById('registrationform').addEventListener('input', function () {
            validateForm();
        });

        function validateForm() {
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const submitBtn = document.getElementById('submitBtn');
            const errorElement = document.getElementById('passwordConfirmError');
            const errorPasswordElement = document.getElementById('passwordError');
            const levels = {
              1: "Very Weak",
              2: "Weak",
              3: "Medium",
              4: "Strong",
            };

            const checks = [
                /[a-z]/,     // Lowercase
                /[A-Z]/,     // Uppercase
                /\d/,        // Digit
                /[@.#$!%^&*.?]/ // Special character
              ];
            let score = checks.reduce((acc, rgx) => acc + rgx.test(password), 0);
            let isValid = true;

            if (!username || !password || !confirmPassword) {
                isValid = false;
            }
            
            if((score == 1) || (score == 2)){
                errorPasswordElement.textContent = 'Passwords '+levels[score];
                errorPasswordElement.classList.remove('success');
                errorPasswordElement.classList.add('error');
                isValid = false;
            } else {
                errorPasswordElement.textContent = 'Passwords '+levels[score];
                errorPasswordElement.classList.remove('error');
                errorPasswordElement.classList.add('success');
            }

            if (password !== confirmPassword) {
                errorElement.textContent = 'Passwords do not match';
                errorElement.classList.remove('success');
                errorElement.classList.add('error');
                isValid = false;
            } else {
                errorElement.textContent = 'Passwords match';
                errorElement.classList.remove('error');
                errorElement.classList.add('success');
            }

            if (isValid) {
                submitBtn.classList.add('enabled');
                submitBtn.disabled = false;
            } else {
                submitBtn.classList.remove('enabled');
                submitBtn.disabled = true;
            }
        }
    </script>
        </div>
      </div>


@endsection



