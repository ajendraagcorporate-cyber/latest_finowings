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
        <a href="" class="btn btn-success" style="background: #cf9c0a; color: #FFFFFF; font-weight:bold;"> Add New blog</a> 
    </div>
	
	<br>
	<div align="center">
	<section class="content" style="border: 1px solid white; padding-left:30px; width: 90%; background:#FFFFFF;">
      <form method="post" action="addblog.php" enctype="multipart/form-data">
        <!-- Info boxes -->
		<p>&nbsp;</p>
        <p align="left"><font color="#000000"><b>Title :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 500px;" name="title" required > </input></p> <br> <br>
		<p align="left"><font color="#000000"><b>Short Desc :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="text" style="width: 500px;" name="short_desc" required > </input></p> <br> <br>
		<p align="left"><font color="#000000"><b>Category :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<select style="width: 300px;" name="category" style="background: #FFFFFF;">
		
    <?php
  $cat_query = "SELECT * FROM blog_category";
    $cat_result = $link->query($cat_query);

    if ($cat_result) {
        while ($cat_row = $cat_result->fetch_assoc()) {
            $cid = $cat_row['id'];
            $cname = $cat_row['cat_name'];
            ?>
            <option value="<?php echo $cid; ?>"><?php echo $cname; ?></option>
            <?php
        }
    }
    ?>
	
  </select><br><br> 
  <!--<p align="left"> <font color="#000000"><b>Post Content :</b></font> &nbsp;&nbsp;&nbsp;
  
  
  
 <textarea name="editor1" id="editor1" rows="10" cols="80">
               
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
  
  
  
  
  
  
  
  
  
  
  <!--<textarea  style="width: 500px; height:600px;" name="inp_editor1" id="inp_editor1" required> </textarea></p>
  <script>
            var editor1 = new RichTextEditor("#inp_editor1"); 
        </script>-->
  
  <!--<br><br>-->
  <p align="left"><font color="#000000"><b>Tags :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 500px;" name="tags" required > </input></p><br><br>
  
   <p align="left"><font color="#000000"><b> Upload Image : </b></font>&nbsp;&nbsp;&nbsp;
	<input  type="file" style="width: 500px; color:#000000;" name="fileToUpload" required> </input></p><br /><br />
	
	<hr color = "#cf9c0a"></hr><br /><br />
	
<p align="left"><font color="#000000"><b>Image alt Tag :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 700px;" name="img_alttag"> </input></p><br><br>		

<p align="left"><font color="#000000"><b>Meta Keywords :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 700px;" name="me_keywords"> </input></p><br><br>	

<p align="left"><font color="#000000"><b>Meta Description :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <textarea name="me_desc" rows="5" cols="100"></textarea></p><br><br>

<p align="left"><font color="#000000"><b>Blog URL :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 700px;" name="blog_url"> </input></p><br><br>

		<p><input type="submit" name="submit" value="Add Blog" style="background:#273158; height:40px; width:150px; color:#FFFFFF; font-weight:bold; font-size:16px;"></button>
      
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
