<!DOCTYPE html>
<html lang="{{ App::getLocale() }}" dir="{{ App::getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>task</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
  {{-- for dispaly messages --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
</head>




<body>
    <div class="css-df21v2">
    	<div class="container">
            <div class="row col-md-12">
    	<div class="css-1dvdjlz col-md-9">
        <a class="css-h4y9tx" href="/">Home</a><a href="/login" class="css-h4y9tx">Login</a>
    </div>

    <div class="col-md-3" style="color:#fff;display: flex;
    align-items: center;">
        @if(Auth::user())
            wellcome, {{Auth::user()->email}}
        @endif

    </div>
</div>
</div>
    </div>
    @yield('content')
</body>

<footer>
<div class="css-1596sgr">
	
	<div class="container"><div class="row"><div class="col-12"><div class="css-1meq0px"><p class="css-1dcvtr7">© <!-- -->2024<a href="https://hasthemes.com/" target="_blank" rel="noopener noreferrer"> </a>. Made with  Im alhitteh</p></div></div></div></div>
</div>
    <script src="{{ asset('landing/js/jquery.js') }}"></script>
    <script src="{{ asset('landing/js/jquery-validate.min.js') }}"></script>
    <script src="{!! asset('landing/js/intlTellnput/utils.js') !!}" crossorigin="anonymous"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>   
</footer>

 <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':

                    toastr.options.timeOut = 10000;
                    toastr.info("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();
                    break;
                case 'success':

                    toastr.options.timeOut = 10000;
                    toastr.success("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();

                    break;
                case 'warning':

                    toastr.options.timeOut = 10000;
                    toastr.warning("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();

                    break;
                case 'error':

                    toastr.options.timeOut = 10000;
                    toastr.error("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();

                    break;
            }
        @endif
    </script>