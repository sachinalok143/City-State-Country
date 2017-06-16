<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ambulance.run || Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
      <!-- favicon -->
  <link rel="icon" type="image/icon" href="{{ asset('favicon.ico') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="{{ asset('admin_CSS/bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin_CSS/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('admin_CSS/dist/css/skins/_all-skins.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('admin_CSS/plugins/iCheck/flat/blue.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('admin_CSS/plugins/morris/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('admin_CSS/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('admin_CSS/plugins/datepicker/datepicker3.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('admin_CSS/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('admin_CSS/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    <link href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <!-- toaster css -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel='stylesheet' type='text/css'>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('admin_CSS/style.css')}}">
    <link href="{{ asset('css/lightbox.css') }}" rel='stylesheet' type='text/css'>
      <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
  @yield('your_css')
</head>
<body class="skin-red-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
   <a href="{{ url('/Dashboard/Dashboard-Stats') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>MB</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Ambulance</b>.run</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
           <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ url('admin_CSS/dist/img/avatarnew.png')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">&nbsp;<i class="fa fa-circle text-success"></i></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ url('admin_CSS/dist/img/avatarnew.png')}}" class="img-circle" alt="User Image">

                <p>
                  
                  <small>Software Developer</small>
                </p>
              </li>
              <!-- Menu Body -->
             <li class="user-footer">
                <div class="" style="margin: 0 45px;">
               
                </div>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

@include('adminpanel.layout.sidebar')
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        @yield('content')

  </div>
  <!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.0.1
    </div>
    <strong>Copyright &copy; 2016 <a href="#">GoldenHour Systems Pvt. Ltd.</a>.</strong> All rights reserved.
</footer>


  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js'> </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
      <script type="text/javascript" src="{{ asset('js/lightbox.js') }}"></script>
<!-- jQuery UI 1.11.4 -->

<script src="{{asset('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('admin_CSS/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') }}"></script>
<script src="{{ asset('admin_CSS/plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('admin_CSS/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('admin_CSS/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('admin_CSS/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('admin_CSS/plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js') }}"></script>
<script src="{{ asset('admin_CSS/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('admin_CSS/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('admin_CSS/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('admin_CSS/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin_CSS/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin_CSS/dist/js/app.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('admin_CSS/dist/js/pages/dashboard.js') }}"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin_CSS/dist/js/demo.js') }}   "></script>
<script src="https://js.pusher.com/4.0/pusher.min.js"></script>
<script type="text/javascript">
toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": true,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "3000",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "show",
  "hideMethod": "fadeOut"
}
   Pusher.logToConsole = true;
      var pusher = new Pusher('{{env("PUSHER_KEY")}}', {
        encrypted: true
    });
    var channel = pusher.subscribe("{{'Emp_Channel_'.\Auth::id()}}");
        channel.bind('App\\Events\\Assign_Employee', function(data) {
        console.log(data.ticket.content);
     
        toastr.success(data.ticket.content,{"positionClass": "toast-top-right"});
      });

    var dept_channel = pusher.subscribe("{{'Department'.\Auth::user()->departments()->first()->id}}");
        dept_channel.bind('App\\Events\\Assign_Employee', function(data) {
        console.log(data.ticket.content);
     
        toastr.success(data.ticket.content,{"positionClass": "toast-top-right"});
      });
</script>
@yield('your_script')

<!-- my script -->

<script type="text/javascript">
  $(".search-menu-box").on('input', function() {

  var filter = $(this).val();

  $(".sidebar-menu > li").each(function(){
  // console.log($(this).text());
    if ($(this).text().search(new RegExp(filter, "i")) < 0) {
    $(this).hide();
    } else {
    $(this).show();
    $(this).addClass('active');

    }
  });
});
</script>



<!-- end my script work  -->
</body>
</html>