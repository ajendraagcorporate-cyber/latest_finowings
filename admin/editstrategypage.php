<?php
session_start();
include("head.php");
include("config.php");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$title = mysqli_real_escape_string($link, $_REQUEST['title']);
$short_desc = mysqli_real_escape_string($link, $_REQUEST['short_desc']);
$date = mysqli_real_escape_string($link, $_REQUEST['date']);
$p1 = mysqli_real_escape_string($link, $_REQUEST['p1']);
$p2 = mysqli_real_escape_string($link, $_REQUEST['p2']);
$p3 = mysqli_real_escape_string($link, $_REQUEST['p3']);
$p4 = mysqli_real_escape_string($link, $_REQUEST['p4']);
$p5 = mysqli_real_escape_string($link, $_REQUEST['p5']);
$p6 = mysqli_real_escape_string($link, $_REQUEST['p6']);
$p7 = mysqli_real_escape_string($link, $_REQUEST['p7']);
$community_link = mysqli_real_escape_string($link, $_REQUEST['community_link']);

$username = $_SESSION['user']['username'];
  
// Attempt insert query execution
$sql = "UPDATE intraday_landingpage SET title='$title', short_desc='$short_desc', date='$date', p1='$p1', p2='$p2', p3='$p3', p4='$p4', p5='$p5', p6='$p6', p7='$p7', community_link='$community_link' where id='$id'";
if(mysqli_query($link, $sql)){
 header( "Location: edit-strategy-page.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<?php
include('head.php');
?>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="Logo.png" alt="logo" height="60" width="60">
  </div>

  <!-- Navbar -->
 
<?php
include('sidebar.php');

?>

<!-- RichTextEditor Requirements -->
<link rel="stylesheet" href="richtexteditor/rte_theme_default.css" />  
<script type="text/javascript" src="richtexteditor/rte.js"></script>  
<script type="text/javascript" src='richtexteditor/plugins/all_plugins.js'></script>  
<!-- RichTextEditor Requirements End -->

<style>
.button {
	background: blue;
    color: white;
    font-family: poppins;
    border: 1px solid white;
    width: 200px;
    border-radius: 3px;
	
}



</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div><!-- /.col -->
         <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   
	<br /><br />
<div align="center">
<h2 align="center">Your Record is Updated. <a href="blog_list.php">Click Here</a> for Blog Listing Page</h2> 
</div>


  <!-- Main Footer -->
 <?php
//include('footer.php');

?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<


</body>
</html>