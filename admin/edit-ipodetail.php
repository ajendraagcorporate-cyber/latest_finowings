<?php
include('head.php');
include('config.php');
$id = $_REQUEST['i'];
//$mysqli = new mysqli("localhost", $user, $password, $dbname); 
$query = "SELECT * FROM blog where id='$id'";
$result = $link->query($query);
$row = $result->fetch_assoc();
$title = $row['title'];
$ipo_price = $row['ipo_price'];
$ipo_gmp = $row['ipo_gmp'];
$ipo_size = $row['ipo_size'];
$ipo_open = $row['ipo_open'];
$ipo_openf = $row['ipo_openf'];
$ipo_close = $row['ipo_close'];
$ipo_closef = $row['ipo_closef'];
$ipo_listing = $row['ipo_listing'];
$ipo_listingf = $row['ipo_listingf'];
$drhp = $row['drhp'];
$rhp = $row['rhp'];
$is_publish = $row['is_publish'];
// For Getting Category Name
//$mysqli1 = new mysqli("localhost", $user, $password, $dbname); 
$query1 = "SELECT * FROM blog_category where id='$cat_id'";
$result1 = $link->query($query1);
$row1 = $result1->fetch_assoc();
$cat_name = $row1['cat_name'];

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
        <a class="btn btn-success" style="background: #cf9c0a; color: #FFFFFF; font-weight:bold;">Update blog</a> 
    </div>
	
	<br>
	<div align="center">
	<section class="content" style="border: 1px solid white; padding-left:30px; width: 90%; background:#FFFFFF;">
      <form method="post" action="editipodetail.php" enctype="multipart/form-data">
        <!-- Info boxes -->
		<p>&nbsp;</p>
        <p align="left"><font color="#000000"><b>Title :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 500px;" name="title" value="<?php echo $title; ?>" readonly > </input></p> <br> <br>
		
		<p align="left"><font color="#000000"><b>IPO Price :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 500px;" name="ipo_price" value="<?php echo $ipo_price; ?>"> </input></p> <br> <br>
		
		<p align="left"><font color="#000000"><b>IPO GMP :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 500px;" name="ipo_gmp" value="<?php echo $ipo_gmp; ?>"> </input></p> <br> <br>
		
		<p align="left"><font color="#000000"><b>IPO Size :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 500px;" name="ipo_size" value="<?php echo $ipo_size; ?>"> </input></p> <br> <br>
		
 <p align="left"><font color="#000000"><b>IPO Open Date :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 100px;" name="ipo_open" value="<?php echo $ipo_open; ?>"> </input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 100px;" name="ipo_openf" value="<?php echo $ipo_openf; ?>"> </input></p><br><br>

 <p align="left"><font color="#000000"><b>IPO Close Date :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 100px;" name="ipo_close" value="<?php echo $ipo_close; ?>"> </input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 100px;" name="ipo_closef" value="<?php echo $ipo_closef; ?>"> </input></p><br><br>
 
 <p align="left"><font color="#000000"><b>IPO Listing Date :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 100px;" name="ipo_listing" value="<?php echo $ipo_listing; ?>"> </input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 100px;" name="ipo_listingf" value="<?php echo $ipo_listingf; ?>"> </input></p><br><br>

<p align="left"><font color="#000000"><b>DRHP Link :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 500px;" name="drhp" value="<?php echo $drhp; ?>"> </input></p><br><br>

<p align="left"><font color="#000000"><b>RHP Link :</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  type="text" style="width: 500px;" name="rhp" value="<?php echo $rhp; ?>"> </input></p><br><br>



 <p align="left"><input type="hidden" name="id" value="<?php echo $id; ?>"></p>
		<p><input type="submit" name="submit" value="Update IPO Detail" style="background:#273158; height:40px; width:150px; color:#FFFFFF; font-weight:bold; font-size:16px;"></button>
      
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
