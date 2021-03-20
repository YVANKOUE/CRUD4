<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Orientation.key Admin @yield('title')</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('vendors/images/apple-touch-icon.png')}}">
  	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('vendors/images/favicon-32x32.png')}}">
  	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('vendors/images/favicon-16x16.png')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css"></link>
    <!-- Custom fonts for this template -->
    
    <link href="{{asset('vendors/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('src/vendors/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
	 
    <!-- Custom styles for this template -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/core.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/style.css')}}">
    
  
    <!-- <script>
      function Affiche(txt, idElement){
        var elmt = document.getElementById(idElement);
        elmt.innerHTML = txt ;
        elmt.style.visibility = "visible";
      }
      function Cache(idElement){
        var elmt = document.getElementById(idElement);
        elmt.innerHTML = "&nbsp;" ;
        elmt.style.visibility = "hidden";
      }
    </script> -->

<style>
a:hover{
   text-decoration: none;
 }
 a{
   text-decoration: none;
 }
.input-file-container {
	position: relative;
	width: 225px;
}

.input-file-trigger {
	display: block;
	padding: 10px 25px;
	color: #fff;
	font-size: 1em;
	transition: all .4s;
	cursor: pointer;
}

.input-file {
	position: absolute;
	top: 0;
	left: 0;
	width: 225px;
	padding: 14px 0;
	opacity: 0;
	cursor: pointer;
}
body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 0.65rem;
    width: 90%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}

/* quelques styles d'interactions */
.input-file:hover + .input-file-trigger,
.input-file:focus + .input-file-trigger,
.input-file-trigger:hover,
.input-file-trigger:focus {
	background: #34495E;
	color: #39D2B4;
}

/* styles du retour visuel */
.file-return {
	margin: 0;
}
.file-return:not(:empty) {
	margin: 1em 0;
}

.file-return {
	font-style: italic;
	font-weight: bold;
}

/* on complète l'information d'un contenu textuel uniquement lorsque le paragraphe n'est pas vide */
.file-return:not(:empty):before {
	content: "Selected file: ";
	font-style: normal;
	font-weight: normal;
}
</style>

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
	<script src="{{asset('vendors/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('vendors/js/bootstrap-table.js')}}"></script>
	<script src="{{asset('vendors/js/bootstrap.min.js')}}"></script>
  <script>
document.querySelector("html").classList.add('js');

// initialisation des variables
var fileInput = document.querySelector( ".input-file" ),
	button = document.querySelector( ".input-file-trigger" ),
	the_return = document.querySelector(".file-return");

// action lorsque la "barre d'espace" ou "Entrée" est pressée
button.addEventListener( "keydown", function( event ) {
	if ( event.keyCode == 13 || event.keyCode == 32 ) {
		fileInput.focus();
	}
});

// action lorsque le label est cliqué
button.addEventListener( "click", function( event ) {
	fileInput.focus();
	return false;
});

// affiche un retour visuel dès que input:file change
fileInput.addEventListener( "change", function( event ) {
	the_return.innerHTML = this.value;
});

  </script>
</html>
