<?php
include('head.php');
include('config.php');
?>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">


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
  <div class="content-wrapper" style="background: #FFFFFF;">
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
        <a class="btn btn-success" style="background: #cf9c0a; color: #FFFFFF; font-weight:bold;">Add New Featured-In Record</a> 
    </div>
	
	<br>
	<div align="center">
	<section class="content" style="border: 1px solid #999999; padding-left:30px; width: 70%; background:#FFFFFF;">
      <form method="post" action="addfeaturedin.php" enctype="multipart/form-data">
        <!-- Info boxes -->
		<p>&nbsp;</p>
        <p align="left"><font color="#000000"><b>Title :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 500px;" name="title" required > </input></p> <br> <br>
		<p align="left"><font color="#000000"><b>Description :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="text" style="width: 700px;" name="short_desc" required > </input></p> <br> <br>
		<p align="left"><font color="#000000"><b>Link :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 500px;" name="link" required > </input></p> <br> <br>
		
   <p align="left"><font color="#000000"><b> Upload Image : </b></font>&nbsp;&nbsp;&nbsp;
	<input  type="file" style="width: 500px;" name="fileToUpload" required> </input></p>	

		<p><input type="submit" name="submit" value="Add Featured-In" style="background:#273158; height:40px; width:150px; color:#FFFFFF; font-weight:bold; font-size:16px;"></button>
      
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
