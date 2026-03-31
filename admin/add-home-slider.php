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
  <div class="content-wrapper" style="background: #f4f6f9;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add New Home Slider</h1>
          </div><!-- /.col -->
          <div class="col-sm-6 text-right">
             <a href="homeslider_list.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back to List</a>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card card-outline card-primary shadow-lg">
              <div class="card-header bg-white">
                <h3 class="card-title" style="color: #273158; font-weight: bold;">
                  <i class="fas fa-image mr-2"></i> Slider Details
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="background: #ffffff; color: #333;">
                <form method="post" action="addhomeslider.php" enctype="multipart/form-data">
                  
                  <div class="form-group">
                    <label for="link" style="color: #273158; font-weight: 600;">Banner Link (URL):</label>
                    <input type="text" name="link" id="link" class="form-control" placeholder="https://example.com/your-target-page" style="border-radius: 8px;">
                    <small class="text-muted">Where should the slider take the user when clicked?</small>
                  </div>

                  <div class="form-group mt-4">
                    <label for="fileToUpload1" style="color: #273158; font-weight: 600;">Slider Image:</label>
                    <div class="custom-file">
                      <input type="file" name="fileToUpload1" id="fileToUpload1" class="form-control" required style="border-radius: 8px; height: auto; padding: 10px;">
                    </div>
                    <small class="text-muted">Recommended size: 1920x600 pixels.</small>
                  </div>

                  <div class="form-group mt-4">
                    <label for="status" style="color: #273158; font-weight: 600;">Status:</label>
                    <select name="status" id="status" class="form-control" style="border-radius: 8px;">
                      <option value="active">Active (Visible on Homepage)</option>
                      <option value="inactive">Inactive (Hidden)</option>
                    </select>
                  </div>

                  <div class="text-center mt-5">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg px-5 shadow" style="background: #273158; border: none; border-radius: 30px; font-weight: 600; min-width: 250px;">
                      <i class="fas fa-save mr-2"></i> Save & Publish Slider
                    </button>
                  </div>
                  
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
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