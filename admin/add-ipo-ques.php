<?php
include('head.php');
include('config.php');
$id = $_REQUEST['i'];
//$mysqli = new mysqli("localhost", $user, $password, $dbname); 
?>

<body style="background: #FFFFFFF;">
<div class="wrapper">

  <!-- Navbar -->
  
  <!-- RichTextEditor Requirements -->
<link rel="stylesheet" href="richtexteditor/rte_theme_default.css" />  
<script type="text/javascript" src="richtexteditor/rte.js"></script>  
<script type="text/javascript" src='richtexteditor/plugins/all_plugins.js'></script>  
<!-- RichTextEditor Requirements End -->

<script src="ckeditor/ckeditor.js"></script>
 
 
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
    <div align="center">
        <a class="btn btn-success" style="background: #cf9c0a; color: #FFFFFF; font-weight:bold;">Add IPO Question</a> 
    </div>
	
	<br>
	<div align="center">
	<section class="content" style="border: 1px solid white; padding-left:30px; width: 90%; background:#FFFFFF;">
      <form method="post" action="addipoques.php" enctype="multipart/form-data">
       

  <p align="left"><font color="#000000"><b>FAQ :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 500px;" name="faq1" value="<?php echo $faq1; ?>"> </input></p><br><br>
  

<p align="left"><font color="#000000"><b>ANS :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
 <textarea name="ans1" id="ans1" rows="10" cols="80">
                <?php echo $ans1; ?>
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'ans1' );
            </script>
</p>

<br><br>
		<p><input type="submit" name="submit" value="Add Question" style="background:#273158; height:40px; width:150px; color:#FFFFFF; font-weight:bold; font-size:16px;"></button>
      
    </form>
    </section>
	</div>
	
	
	

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 
</div>

<?php
//include('footer.php');

?>
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
