<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>
    <link rel="stylesheet" href="/admin/css/auth.css" />
  </head>
  <body>

    <div class="login-container">
      <div class="poster">
        <img src="/02-special-banner.webp" style="height:100%""  />
      </div>
      <div class="login-form">
        <h1>Admin Login</h1>
        <form action="/loginprocess" method="POST" id="adminlogin_form" ">
           @csrf
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required />
          </div>
          <button type="submit">Login</button>

        </form>
        <p id="error-message">

          @if(session('warning'))
            {{ session('warning') }}
          @endif

          @if(session('errors'))
             {{ session('errors') }}
          @endif

        </p>
      </div>
    </div>
  </body>
</html>
