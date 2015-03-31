<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin page</title>
    <link rel="stylesheet" href="./assets/css/bootstrap-3.3.4/dist/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="./assets/css/bootstrap-3.3.4/dist/css/bootstrap-theme.min.css">
    <script src="./assets/css/bootstrap-3.3.4/dist/js/jquery1.11.js"></script>
    <script src="./assets/css/bootstrap-3.3.4/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./assets/css/home.css">
  </head>

  <body>

    <div id="header">
       <div ><img src="./assets/images/logomali.jpg" style="width:120px;" /></div>
       @include('./header')
    </div>
 
    <div class="container">
       @yield('content')
    </div>
     
    <div class="sidebar">
       @yield('sidebar')
    </div>
  </body>
</html>