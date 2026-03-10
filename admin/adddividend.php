<?php
session_start();
include("head.php");
include("config.php");

// Escape user inputs for security
$company = mysqli_real_escape_string($link, $_REQUEST['company']);
$symbol = mysqli_real_escape_string($link, $_REQUEST['symbol']);
$security_code = mysqli_real_escape_string($link, $_REQUEST['security_code']);
$record_date = mysqli_real_escape_string($link, $_REQUEST['record_date']);
$record_datef = mysqli_real_escape_string($link, $_REQUEST['record_datef']);
$ex_date = mysqli_real_escape_string($link, $_REQUEST['ex_date']);
$ex_datef = mysqli_real_escape_string($link, $_REQUEST['ex_datef']);
$dividend_type = mysqli_real_escape_string($link, $_REQUEST['dividend_type']);
$dividend_per_share = mysqli_real_escape_string($link, $_REQUEST['dividend_per_share']);
$date = date("Y-m-d h:m:s");
  
// Attempt insert query execution
$sql = "INSERT INTO dividend_mst (company, symbol, security_code, record_date, record_datef, ex_date, ex_datef, dividend_type, dividend_per_share, created_datetime, updated_datetime) VALUES ('$company', '$symbol', '$security_code', '$record_date', '$record_datef', '$ex_date', '$ex_datef', '$dividend_type', '$dividend_per_share', '$date', '$date')";
if(mysqli_query($link, $sql)){
  header( "Location: dividend_list.php" );
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
<h2 align="center">Your Record is Added. <a href="blog_list.php">Click Here</a> for Blog Listing Page</h2> 
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