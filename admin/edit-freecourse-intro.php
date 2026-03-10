<?php
include('head.php');
include("config.php");
$id = $_REQUEST['i'];
$query = "SELECT * FROM freestudy where id='$id'";
$result = $link->query($query);
$row = $result->fetch_assoc();
$title = $row['title'];
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
    <div align="center"> <a class="btn btn-success"><i class="fa fa-download"></i> Free Study Material</a></div>
	
	
	<br>
	<div align="center">
	<section class="content" style="border: 1px solid white; padding-left:30px; width: 50%; background:#FFFFFF;">
      <form method="post" action="editfreecourseintro.php" enctype="multipart/form-data">
        <!-- Info boxes -->
		<p>&nbsp;</p>
        <p align="left"><font color="#000000"><b>Title :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 500px;" name="title" value="<?php echo $title; ?>" required > </input></p> <br> <br>
		 
          <p><input type="hidden" name="id" value="<?php echo $id; ?>"></p>

		<p><input type="submit" name="submit" value="Update" style="background: #999999;"></button>
      
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
include('footer.php');

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
