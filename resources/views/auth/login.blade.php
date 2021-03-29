<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="{{ url('backEnd/assets/img/favicon.png') }}">
  <title>
    Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ url('backEnd/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ url('backEnd/assets/css/paper-dashboard.css?v=2.0.0') }}" rel="stylesheet" />
</head>

<body class="">
 
  <div class="row">
    <form class="form-group col-4 m-auto" method="POST" action="{{ url('login') }}">
      <input type="text" name="user" class="form-control">
      <input type="password" name="pass" class="form-control">
      <input type="submit" value="login">
    </form>
  </div>
    















  <!--   Core JS Files   -->
  <script src="{{ url('/assets/js/core/jquery.min.js') }}"></script>
  <script src="{{ url('/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ url('/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ url('/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!-- Chart JS -->
  <script src="{{ url('backEnd/assets/js/plugins/chartjs.min.js') }}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ url('backEnd/assets/js/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ url('backEnd/assets/js/paper-dashboard.min.js?v=2.0.0') }}" type="text/javascript"></script>
  
 
</body>

</html>
