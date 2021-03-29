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
  <link href="{{ url('backEnd/assets/css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ url('backEnd/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ url('backEnd/assets/css/paper-dashboard.css?v=2.0.0') }}" rel="stylesheet" />
  <link href="{{ url('backEnd/assets/css/main.css') }}" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

 

</head>

<body class="" onresize="fit()" onload="fit()">
  <div class="wrapper " id="sb">
    
    <!-- sidebar -->
    @include('backEnd.temps.sidebar')
    <!-- end sidebar -->

   
      


 <div class="main-panel" id="sc">
      <!-- Navbar -->
      @include('backEnd.temps.nav')
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>


</div> -->
      <div class="content">
        <div class="row">
          @yield('content')
        </div>
        
        
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
              
              </ul>
            </nav>
           
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ url('backEnd/assets/js/core/jquery.min.js') }}"></script>
  <script src="{{ url('backEnd/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ url('backEnd/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ url('backEnd/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!-- Chart JS -->
  <script src="{{ url('backEnd/assets/js/plugins/chartjs.min.js') }}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ url('backEnd/assets/js/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ url('backEnd/assets/js/paper-dashboard.min.js?v=2.0.0') }}" type="text/javascript"></script>
  <script src="{{ url('backEnd/assets/js/main.js') }}" type="text/javascript"></script>

  
 
</body>

</html>
