<?php
session_start();
if(!(isset($_SESSION['user'])) || $_SESSION['user']=='') 
{
	$_SESSION['msg'] = "Please Login !!!";
    header('Location: index.php');
	die;
}	
else
{	
include("config.php");
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
    <div align="center">
        <a href="" class="btn btn-success"><i class="fa fa-download"></i> Add New Slider Image</a> 
    </div>
	
	<br>
	<div align="center">
	<section class="content" style="border: 1px solid white; padding-left:30px; width: 50%; background:#FFFFFF;">
      <form method="post" action="addhomeslider.php" enctype="multipart/form-data">
        <!-- Info boxes -->
		<p>&nbsp;</p>
      
  <div class="form-group text-left" style="width: 500px;">
    <label style="color:black;">Banner Link:</label>
    <input type="text" name="link" class="form-control" placeholder="URL to redirect">
  </div>
  <div class="form-group text-left" style="width: 500px;">
    <label style="color:black;">Slider Image:</label>
    <input type="file" name="fileToUpload1" class="form-control" required>
  </div>
  <div class="form-group text-left" style="width: 500px;">
    <label style="color:black;">Status:</label>
    <select name="status" class="form-control">
      <option value="active">Active</option>
      <option value="inactive">Inactive</option>
    </select>
  </div>

 

		<p><input type="submit" name="submit" value="Add Slider Image" style="background: #999999;"></button>
      
    </form>
    </section>
	</div>
	
	
	

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->

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
<?php
}
?>