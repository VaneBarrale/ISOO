<!DOCTYPE html>
<html lang="en">
<head>
	<title>MANTENIMIENTO</title>

  <meta charset="utf-8" />
  <title>Color Admin | Dashboard</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  
  <!-- ================== BEGIN BASE CSS STYLE ================== -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="{{URL::asset('assets/plugins/jquery-ui-1.10.4/themes/base/minified/jquery-ui.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-3.1.1/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/font-awesome-4.1.0/css/font-awesome.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/style.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/style-responsive.min.css') }}" rel="stylesheet" />
  <!-- ================== END BASE CSS STYLE ================== -->
  
  <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
  <link href="{{ asset('assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/datepicker.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/datepicker3.css') }}" rel="stylesheet" />
   <link href="{{ asset('assets/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" />  
  <!-- ================== END PAGE LEVEL STYLE ================== -->
</head>
<body>
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<!-- end #page-loader -->
 
<!-- begin #page-container -->
<div id="page-container" class="fade">
  <!-- begin #header -->
  <div id="header" class="header navbar navbar-default navbar-fixed-top">
    <!-- Header Here -->
    @include('layouts.header')
    @show
  </div>
  <!-- end #header -->
  
  <!-- begin #sidebar -->
  <div id="sidebar" class="sidebar">
    <!-- Sidebar Here -->
    @include('layouts.sidebar')
    @show
  </div>
  <!-- end #sidebar -->
  
  <!-- begin #content -->
  <div id="content" class="content">
    <!-- Content Here -->
    <div class="panel panel-inverse">
  <div class="panel-heading">
    <div class="panel-heading-btn">
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
    </div>
    <h4 class="panel-title">Panel Title here</h4>
  </div>
  <div class="panel-body">
   @yield('content')
  </div>
</div>
  </div>
  <!-- end #content -->
  
  <!-- begin #footer -->
  <div id="footer" class="footer">
    <!-- Footer Here -->
  </div>
  <!-- end #footer -->
  
  <!-- begin scroll to top btn -->
  <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top">
    <i class="fa fa-angle-up"></i>
  </a>
  <!-- end scroll to top btn -->


	  <!-- ================== BEGIN BASE JS ================== -->
  <script src="{{ asset('assets/plugins/jquery-1.8.2/jquery-1.8.2.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery-ui-1.10.4/ui/minified/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-3.1.1/js/bootstrap.min.js') }}"></script>
  <!--[if lt IE 9]>
    <script src="assets/crossbrowserjs/html5shiv.js"></script>
    <script src="assets/crossbrowserjs/respond.min.js"></script>
    <script src="assets/crossbrowserjs/excanvas.min.js"></script>
  <![endif]-->
  <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
  <!-- ================== END BASE JS ================== -->
  
  <!-- ================== BEGIN PAGE LEVEL JS ================== -->
  <script src="{{ asset('assets/plugins/gritter/js/jquery.gritter.js') }}"></script>
  <script src="{{ asset('assets/plugins/flot/jquery.flot.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/flot/jquery.flot.time.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/flot/jquery.flot.resize.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/flot/jquery.flot.pie.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('assets/js/dashboard.min.js') }}"></script>
  <script src="{{ asset('assets/js/apps.min.js') }}"></script>
  <!-- ================== END PAGE LEVEL JS ================== -->
  <script>
    $(document).ready(function() {
      App.init();
      Dashboard.init();
    });
  </script>

</body>
</html>