<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="" />

  <title>BanShop | Home</title>

  <!-- Custom Theme files -->
  <!--theme style-->
  <link href="{{ asset('main/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('main/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('main/css/memenu.css') }}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('main/css/form.css') }}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('main/css/jquery-ui.css') }}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ asset('main/css/flexslider.css') }}" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
  @include('layouts.navbar')

  @yield('content')

  @include('layouts.footer')
</body>
</html>
