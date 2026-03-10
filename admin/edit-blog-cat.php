<?php
include("config.php");
include('head.php');
$id = $_REQUEST['i'];
//$mysqli = new mysqli("localhost", $user, $password, $dbname); 
$query = "SELECT * FROM blog_category where id='$id'";
$result = $link->query($query);
$row = $result->fetch_assoc();
$cat_name = $row['cat_name'];
$icon = $row['icon_name'];
?>

<body style="background: #FFFFFFF;">
<div class="wrapper">

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
   <div align="center"> <a class="btn btn-success" style="background: #cf9c0a; color: #FFFFFF; font-weight:bold;">Edit Category</a></div>
	
	<br /><br /><br />
	
	<div align="center">
	<section class="content" style="border: 1px solid white; padding-left:30px; width: 90%; background:#FFFFFF;">
	<br>
      <form method="post" action="editblogcat.php" enctype="multipart/form-data">
        <!-- Info boxes -->
		<p>&nbsp;</p>
        <p align="left"><font color="#000000"><b>Category :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 500px;" name="category" value="<?php echo $cat_name; ?>" required > </input></p> <br> <br>
		
   <p align="left"><font color="#000000"><b> Upload Icon : </b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input  type="file" style="width: 100px;" name="fileToUpload"> </input><img src="media/<?php echo $icon; ?>" width="50" height="50" /></p></p>	
<p align="left"><input type="hidden" name="id" value="<?php echo $id; ?>"></p>
		<p><input type="submit" name="submit" value="Update Category" style="background:#273158; height:40px; width:150px; color:#FFFFFF; font-weight:bold; font-size:16px;"></button>
      
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
