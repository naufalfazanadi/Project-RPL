<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="{{ URL::asset('login-form/css/style.css') }}" />
</head>

<body>
  <div class="login-form">
    <h1>Admin Login</h1>
    <form method="POST" action="{{ url('login-proc') }}">
      {{ csrf_field() }}
      <div class="form-group ">
      <input type="text" class="form-control" placeholder="Username " id="UserName" name="username" required>
        <i class="fa fa-user"></i>
      </div>
      <div class="form-group log-status">
        <input type="password" class="form-control" placeholder="Password" id="Passwod" name="password" required>
        <i class="fa fa-lock"></i>
      </div>
      <span class="alert">Invalid Username or Password</span>
      <input type="submit" class="log-btn" value="Login">
    </form>
  </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script type="text/javascript" src="{{ URL::asset('login-form/js/index.js') }}"></script>
</body>
</html>
