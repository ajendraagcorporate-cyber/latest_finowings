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




<style>
.button {
	background: blue;
    color: white;
    font-family: poppins;
    border: 1px solid white;
    width: 200px;
    border-radius: 3px;
	
}

.h2 {
	font-size: 22px;
    font-family: poppins;
    font-weight: 400;
    text-align: left;
    padding: 5px;
	background: #3f6791;
    width: 500px;
    border-radius: 4px;
    margin-top: 10px;
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
    
	
	<br>
	<section class="content" style="border: 2px solid white;padding-bottom: 68px; width: 1090px;">
      <form action="social_f.php">
        <!-- Info boxes -->
		 <h2 class="h2"> Facebook </h2>
		<input  type="text" size="64" name="facebook" > </input> <br> <br>
        <h2 class="h2"> instagram </h2>
		<input  size="64" name="instagram" > </input> <br> <br>
		 <h2 class="h2"> Twitter </h2>
		<input  size="64" name="twitter" > </input> <br><br> <br>
		<h2 class="h2"> Youtube </h2>
		<input  size="64" name="youtube" > </input> <br><br> <br>
		<h2 class="h2"> Pintrest </h2>
		<input  size="64" name="pintrest" > </input> <br><br> <br>
		
		
		<input type="submit" class="button"></button>
      
        </form>
        <!-- /.row -->
      <!--/. container-fluid -->
    </section>
	
	
	
	

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
