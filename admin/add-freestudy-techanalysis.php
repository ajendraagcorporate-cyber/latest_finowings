<?php
include('head.php');
include('config.php');
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
        <a class="btn btn-success"><i class="fa fa-download"></i> Add New Chapter</a> 
    </div>
	
	<br>
	<div align="center">
	<section class="content" style="border: 1px solid white; padding-left:30px; width: 90%; background:#FFFFFF;">
      <form method="post" action="addfreestudytechanalysis.php" enctype="multipart/form-data">
        <!-- Info boxes -->
		<p>&nbsp;</p>
        <p align="left"><font color="#000000"><b>Choose Topic :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<select style="width: 300px;" name="topic" style="background: #FFFFFF;">
		
    <?php
	$mysqli = new mysqli("localhost", $user, $password, $dbname); 
	$query = "SELECT * FROM freestudytopic order by id asc";

	if ($result = $mysqli->query($query)) {
		
	  while ($row = $result->fetch_assoc()) {
		  $topic_id = $row['id'];
	      $topic_name = $row['topic'];
	
	?>
	<option value="<?php echo $topic_id; ?>"><?php echo $topic_name; ?></option>
	<?php
		}
	}
	?>
	
  </select><br><br>
		<p align="left"><font color="#000000"><b>Chapter Name :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 500px;" name="chapter_name" required > </input></p> <br> <br>
		 
		  <p align="left"><font color="#000000"><b> Upload Chapter Image : </b></font>&nbsp;&nbsp;&nbsp;
	<input  type="file" style="width: 500px; color: #000000;" name="fileToUpload" required> </input></p> <br> <br>	
	
  
  <br><br>
  
   	<hr color = "#cf9c0a"></hr><br /><br />

<p align="left"><font color="#000000"><b>Title :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 700px;" name="me_title"> </input></p><br><br>		

<p align="left"><font color="#000000"><b>Meta Keywords :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 700px;" name="me_keywords"> </input></p><br><br>	

<p align="left"><font color="#000000"><b>Meta Description :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <textarea name="me_desc" rows="5" cols="100"></textarea></p><br><br>

<p align="left"><font color="#000000"><b>Chapter URL :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 700px;" name="blog_url"> </input></p><br><br>
 
  

		<p><input type="submit" name="submit" value="Add Chapter" style="background: #999999;"></button>
      
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
