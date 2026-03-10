<?php
include('head.php');
include('config.php');
$id = $_REQUEST['i'];
$query = "SELECT * FROM courses where id='$id'";
$result = $link->query($query);
$row = $result->fetch_assoc();
$course_title = $row['course_title'];
$short_desc = $row['short_desc'];
$sale_p = $row['sale_p'];
$price = $row['price'];
$languages = $row['languages'];
$rating_numbers = $row['rating_numbers'];
$classplus_link = $row['classplus_link'];
$descr = $row['descr'];
$course_content = $row['course_content'];
$howtouse = $row['howtouse'];
$img = $row['img'];
?>

<body style="background: #FFFFFFF;">
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
        <a href="" class="btn btn-success" style="background: #cf9c0a; color: #FFFFFF; font-weight:bold;">Update Course Content</a> 
    </div>
	
	<br>
	<div align="center">
	<section class="content" style="border: 1px solid white; padding-left:30px; width: 90%; background:#FFFFFF;">
      <form method="post" action="editcourse.php" enctype="multipart/form-data">
        <!-- Info boxes -->
		<p>&nbsp;</p>
        <p align="left"><font color="#000000"><b>Title :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 500px;" name="course_title" value="<?php echo $course_title; ?>" required > </input></p> <br> <br>
		<!--<p align="left"><font color="#000000"><b>Short Desc :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="text" style="width: 500px;" name="short_desc" value="<?php //echo $short_desc; ?>" style="background: #999999;" > </input></p> <br> <br>-->
		<p align="left"><font color="#000000"><b>Sale Price :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="text" style="width: 500px;" name="sale_p" value="<?php echo $sale_p; ?>" required > </input></p> <br> <br>
		<p align="left"><font color="#000000"><b>Price :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 500px;" name="price" value="<?php echo $price; ?>" style="background: #999999;" > </input></p> <br> <br>
		<p align="left"><font color="#000000"><b>Language :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 500px;" name="languages" value="<?php echo $languages; ?>" required > </input></p> <br> <br>
		<p align="left"><font color="#000000"><b>Rating Number :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 500px;" name="rating_numbers" value="<?php echo $rating_numbers; ?>" required > </input></p> <br> <br>
		<p align="left"><font color="#000000"><b>ClassPlus Link :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 500px;" name="classplus_link" value="<?php echo $classplus_link; ?>" required > </input></p> <br> <br>
		
  <p align="left"> <font color="#000000"><b>Description :</b></font> &nbsp;&nbsp;&nbsp;
  <textarea  style="width: 500px; height:600px;" name="inp_editor1" id="inp_editor1" required><?php echo $descr; ?></textarea></p>
  <script>
            var editor1 = new RichTextEditor("#inp_editor1"); 
        </script>
  
  <br><br>
    <p align="left"> <font color="#000000"><b>Course Content :</b></font> &nbsp;&nbsp;&nbsp;
  <textarea  style="width: 500px; height:600px;" name="inp_editor2" id="inp_editor2" required><?php echo $course_content; ?></textarea></p>
  <script>
            var editor2 = new RichTextEditor("#inp_editor2"); 
        </script>
  
  <br><br>
    <p align="left"> <font color="#000000"><b>How to Use :</b></font> &nbsp;&nbsp;&nbsp;
  <textarea  style="width: 500px; height:600px;" name="inp_editor3" id="inp_editor3" required><?php echo $howtouse; ?></textarea></p>
  <script>
            var editor3 = new RichTextEditor("#inp_editor3"); 
        </script>
  
  <br><br>
  
   <p align="left"><font color="#000000"><b> Upload Image : </b></font>&nbsp;&nbsp;&nbsp;
	<input  type="file" style="width: 500px;" name="fileToUpload"> </input><img src="media/courseicons/<?php echo $img; ?>" width="100" height="100" /></p>	
     <p><input type="hidden" name="id" value="<?php echo $id; ?>"></p>
		<p><input type="submit" name="submit" value="Update" style="background:#273158; height:40px; width:150px; color:#FFFFFF; font-weight:bold; font-size:16px;"></button>
      
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
