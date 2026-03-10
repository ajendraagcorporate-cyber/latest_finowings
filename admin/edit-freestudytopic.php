<?php
include('head.php');
include('config.php');
$id = $_REQUEST['i'];
$mysqli = new mysqli("localhost", $user, $password, $dbname); 
$query = "SELECT * FROM freestudytopic where id='$id'";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
$topic = $row['topic'];
$icon = $row['icon'];
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
    <div align="center">
        <a class="btn btn-success"><i class="fa fa-download"></i> Update Topic</a> 
    </div>
	
	<br>
	<div align="center">
	<section class="content" style="border: 1px solid white; padding-left:30px; width: 50%; background:	#4169E1;">
      <form method="post" action="editfreestudytopic.php" enctype="multipart/form-data">
        <!-- Info boxes -->
		<p>&nbsp;</p>
        <p align="left"><font color="#000000"><b>Topic Name :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="text" style="width: 400px;" name="topic" value="<?php echo $topic; ?>" required> </input></p> <br> <br>
		
   <p align="left"><font color="#000000"><b> Icon : </b></font>&nbsp;&nbsp;&nbsp;
	<input  type="file" style="width: 100px;" name="fileToUpload"> </input><img src="media/courseicons/<?php echo $icon; ?>" width="50" height="50"></p>	
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
