<?php
include('head.php');
include('config.php');
$id = $_REQUEST['i'];
$query = "SELECT * FROM aboutfinowings where id='$id'";
$result = $link->query($query);
$row = $result->fetch_assoc();
$title = $row['title'];
$short_desc = $row['short_desc'];
$desc = $row['descr'];
$image = $row['image1'];
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
        <a class="btn btn-success" style="background: #cf9c0a; color: #FFFFFF; font-weight:bold;">About Finowings Content</a> 
    </div>
	
	<br>
	<div align="center">
	<section class="content" style="border: 1px solid #999999; padding-left:60px; width: 90%; background:#FFFFFF;">
      <form method="post" action="editfinowings.php" enctype="multipart/form-data">
        <!-- Info boxes -->
		<p>&nbsp;</p>
        <p align="left"><font color="#000000"><b>Title :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 500px;" name="title" value="<?php echo $title; ?>" required > </input></p> <br> <br>
		
		  <p align="left"> <font color="#000000"><b>Short Description :</b></font> &nbsp;&nbsp;&nbsp;
  <textarea  style="width: 500px; height:100px;" name="short_desc" id="short_desc" required><?php echo $short_desc; ?></textarea></p>
  
  <br><br>
  <p align="left"> <font color="#000000"><b>Description :</b></font> &nbsp;&nbsp;&nbsp;
  <textarea  style="width: 500px; height:600px;" name="inp_editor1" id="inp_editor1" required><?php echo $desc; ?></textarea></p>
  <script>
            var editor1 = new RichTextEditor("#inp_editor1"); 
        </script>
  
   <p align="left"><font color="#000000"><b> Upload Image : </b></font>&nbsp;&nbsp;&nbsp;
	<input  type="file" style="width: 500px;" name="fileToUpload"> </input><img src="media/<?php echo $image; ?>" width="200" height="100"></p>	
        <p><input type="hidden" name="id" value="<?php echo $id; ?>"></p>
		
  <br><br>
		<p><input type="submit" name="submit" value="Update" style="background:#273158; height:40px; width:150px; color:#FFFFFF; font-weight:bold; font-size:16px;"></button>
   
  <br><br>   
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
