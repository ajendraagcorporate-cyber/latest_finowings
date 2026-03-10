<?php
include('head.php');
include('config.php');
?>



<body style="background: #FFFFFF;">
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

<script src="ckeditor/ckeditor.js"></script>

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
        <a href="" class="btn btn-success" style="background: #cf9c0a; color: #FFFFFF; font-weight:bold;"> Add New Static blog</a> 
    </div>
	
	<br>
	<div align="center">
	<section class="content" style="border: 1px solid white; padding-left:30px; width: 90%; background:#FFFFFF;">
      <form method="post" action="addstaticblog.php" enctype="multipart/form-data">
        <!-- Info boxes -->
		<p>&nbsp;</p>

		<p align="left"><font color="#000000"><b>Company Name :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="text" style="width: 500px;" name="company_name" required > </input></p> <br> <br>
		<p align="left"><font color="#000000"><b>Category :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<select style="width: 300px;" name="category" style="background: #FFFFFF;">
		
    <?php
	$mysqli = new mysqli("localhost", $user, $password, $dbname); 
	$query = "SELECT * FROM blog_category where id IN(7,14) ";

	if ($result = $mysqli->query($query)) {
		
	  while ($row = $result->fetch_assoc()) {
		  $cat_id = $row['id'];
	      $cat_name = $row['cat_name'];
	
	?>
	<option value="<?php echo $cat_id; ?>"><?php echo $cat_name; ?></option>
	<?php
		}
	}
	?>
	
  </select><br><br> 
 
  <p align="left"><font color="#000000"><b>Open :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 500px;" name="open" required > </input></p><br><br>
  

	
<p align="left"><font color="#000000"><b>Close :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 700px;" name="close"> </input></p><br><br>		

<p align="left"><font color="#000000"><b>Status :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 700px;" name="status"> </input></p><br><br>	


		<p><input type="submit" name="submit" value="Add Static Blog" style="background:#273158; height:40px; width:150px; color:#FFFFFF; font-weight:bold; font-size:16px;"></button>
      
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
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- CodeMirror -->
<script src="plugins/codemirror/codemirror.js"></script>
<script src="plugins/codemirror/mode/css/css.js"></script>
<script src="plugins/codemirror/mode/xml/xml.js"></script>
<script src="plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->


<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>


</body>
</html>
