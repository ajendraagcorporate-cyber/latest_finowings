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
      <form action="about_f.php">
        <!-- Info boxes -->
		 <h2 class="h2"> Photo </h2>
		<input  type="text" size="64" name="photo" required="true"> </input> <br> <br>
        <h2 class="h2"> About Mukul Agrawal </h2>
		<textarea  style="width: 500px; height: 69px;" name="about_mukul" required="true"> </textarea> <br> <br>
		 <h2 class="h2"> Why Join Our Classes </h2>
		<textarea  style="width:500px;" name="why"  required="true"> </textarea> <br><br><br> <br><br> <br>
		
		<input type="submit" class="button"> </button>
      
        </form>
        <!-- /.row -->
      <!--/. container-fluid -->
    </section>
	  <script>
            CKEDITOR.replace( 'why' );
        </script>

	 
	

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
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>


</body>
</html>
