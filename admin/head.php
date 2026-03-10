<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
if (!(isset($_SESSION['user'])) || $_SESSION['user'] == '') {
  $_SESSION['msg'] = "Please Login !!!";
  header('Location: index.php');
  die;
}
?>

<?php
//include('functionss.php');
/*if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: index.php');
}*/
/*if (!(isset($_SESSION['user'])) && $_SESSION['user']='') 
{
	$_SESSION['msg'] = "Please Login !!!";
    header('Location: index.php');
}			
/*if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: index.php");
}*/
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard - Mukul Agrawal</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <!--<link rel="stylesheet" href="dist/css/adminlte.min.css">-->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>




  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- CodeMirror -->
  <link rel="stylesheet" href="plugins/codemirror/codemirror.css">
  <link rel="stylesheet" href="plugins/codemirror/theme/monokai.css">
  <!-- SimpleMDE -->
  <link rel="stylesheet" href="plugins/simplemde/simplemde.min.css">
</head>