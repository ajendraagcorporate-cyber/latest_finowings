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
    <section class="content" style="border: 2px solid white;padding-bottom: 68px; width: 1090px;">
      <div class="container-fluid">
	  <form action="featured_f.php">
        <!-- Info boxes -->
        <h2 class="h2"> slider Banner 1 </h2>
		<input type="text" name="file" required size="64" placeholder="Enter image url"></input><br><br><br>
		
 <h2 class="h2"> slider Banner 2 </h2>
		<input type="text" name="file_b" required size="64" placeholder="Enter image url"></input><br><br><br>
		    
        <!-- Info boxes -->
        <h2 class="h2"> slider Banner 3 </h2>
		<input type="text" size="64" name="file_c" placeholder="Enter Text Here" required> </input> <br><br><br>
		
      <!-- Info boxes -->
        <h2 class="h2"> slider Banner 4 </h2>
		<input  style="width:500px;" name="file_d"  required="true"> </input> <br><br><br>
		
		
		<input type="submit" name="upload" class="button"></input>
    
         </form>
        <!-- /.row -->
      </div><!--/. container-fluid -->
	  
	 
	  
	  
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
