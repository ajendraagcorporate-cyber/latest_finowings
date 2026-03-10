<?php
session_start();
include("head.php");
include("config.php");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$chapter_id = mysqli_real_escape_string($link, $_REQUEST['chapter']);
$question = mysqli_real_escape_string($link, $_REQUEST['question']);
$optionA = mysqli_real_escape_string($link, $_REQUEST['optionA']);
$optionB = mysqli_real_escape_string($link, $_REQUEST['optionB']);
$optionC = mysqli_real_escape_string($link, $_REQUEST['optionC']);
$optionD = mysqli_real_escape_string($link, $_REQUEST['optionD']);
$option_right = mysqli_real_escape_string($link, $_REQUEST['option_right']);
$created_date = date("Y-m-d h:m:s");
$username = $_SESSION['user']['username'];
  
// Attempt insert query execution
$sql = "INSERT INTO chapter_quiz_master (chapter_id, question, optionA, optionB, optionC, optionD, option_right, created_date, updated_date, update_user) VALUES ('$chapter_id', '$question', '$optionA', '$optionB', '$optionC', '$optionD', '$option_right', '$created_date', '$created_date', '$username')";
if(mysqli_query($link, $sql)){
  header( "Location: chapter_quizlist.php?i=$chapter_id" );
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<?php
include('head.php');
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
   
	<br /><br />
<div align="center">
<h2 align="center">Your Record is Added. <a href="chapter_quizlist.php?i=<?php echo $chapter_id; ?>">Click Here</a> for Chapterwise Quiz Listing Page</h2> 
</div>


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