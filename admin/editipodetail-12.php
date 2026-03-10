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
$ipo_price = mysqli_real_escape_string($link, $_REQUEST['ipo_price']);
$ipo_gmp = mysqli_real_escape_string($link, $_REQUEST['ipo_gmp']);
$ipo_size = mysqli_real_escape_string($link, $_REQUEST['ipo_size']);
$ipo_open = mysqli_real_escape_string($link, $_REQUEST['ipo_open']);
$ipo_openf = mysqli_real_escape_string($link, $_REQUEST['ipo_openf']);
$ipo_close = mysqli_real_escape_string($link, $_REQUEST['ipo_close']);
$ipo_closef = mysqli_real_escape_string($link, $_REQUEST['ipo_closef']);
$ipo_listing = mysqli_real_escape_string($link, $_REQUEST['ipo_listing']);
$ipo_listingf = mysqli_real_escape_string($link, $_REQUEST['ipo_listingf']);
$drhp = mysqli_real_escape_string($link, $_REQUEST['drhp']);
$rhp = mysqli_real_escape_string($link, $_REQUEST['rhp']);

$username = $_SESSION['user']['username'];
  
/* Attempt insert query execution
$sql = "UPDATE blog SET ipo_price='$ipo_price', ipo_gmp='$ipo_gmp', ipo_size='$ipo_size', ipo_open='$ipo_open', ipo_openf='$ipo_openf', ipo_close='$ipo_close', ipo_closef='$ipo_closef', ipo_listing='$ipo_listing', ipo_listingf='$ipo_listingf', drhp='$drhp', rhp='$rhp', update_user = '$username' where id='$id'";
if(mysqli_query($link, $sql)){
 header( "Location: blog_list.php" );
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 */
// Close connection
//mysqli_close($link);

$host = "127.0.0.1"; /* Host name */
$user = "abhay_fino_db"; /* User */
$password = "NewFinoMAMySRootp!2025"; /* Password */
$dbname = "mukul_agrawal"; /* Database name */
$c = mysqli_connect($host, $user, $password,$dbname);
$sql1 = "insert into ipos (title, gmp) values ('$title', '$ipo_gmp')";
if(mysqli_query($c, $sql1)){
 header( "Location: blog_list.php" );
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