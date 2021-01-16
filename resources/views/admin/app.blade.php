<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>School Admin @yield('title')</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('vendors/images/apple-touch-icon.png')}}">
  	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('vendors/images/favicon-32x32.png')}}">
  	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('vendors/images/favicon-16x16.png')}}">


    <!-- Custom fonts for this template -->
    
    <link href="{{asset('vendors/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/core.css')}}">
	  <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/icon-font.min.css')}}">
	  <link rel="stylesheet" type="text/css" href="{{asset('src/vendors/css/dataTables.bootstrap4.min.css')}}">
	  <link rel="stylesheet" type="text/css" href="{{asset('src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
	  <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/style.css')}}">
    <!-- Custom styles for this template -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/core.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/style.css')}}">

</head>
<body id="page-top">

      @include('admin.include.header')
        <!-- End of Topbar -->
      @yield('content')
      
    
</body>
  <script src="{{asset('vendors/js/core.js')}}"></script>
	<script src="{{asset('vendors/js/script.min.js')}}"></script>
	<script src="{{asset('vendors/js/process.js')}}"></script>
	<script src="{{asset('vendors/js/layout-settings.js')}}"></script>
	<script src="{{asset('src/plugins/apexcharts/apexcharts.min.js')}}"></script>
	<script src="{{asset('src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{asset('vendors/js/dashboard.js')}}"></script>
</html>
