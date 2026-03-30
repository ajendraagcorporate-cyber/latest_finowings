<?php
session_start();
if(!(isset($_SESSION['user'])) || $_SESSION['user']=='') 
{
	$_SESSION['msg'] = "Please Login !!!";
    header('Location: index.php');
	die;
}	
else
{	
include("config.php");
include('head.php');

?>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
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

.ellipsis {
	background: #3f6791;
	color: white;
    font-family: poppins;
    max-width: 40px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
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
    <section class="content">
      <div class="container-fluid" style="width: 100%;">
	 <div class="col-md-12 head">
    <div align="center">
        <a href="add-home-slider.php" class="btn btn-success"><i class="fa fa-download"></i> Add New Slider Image</a>
    </div>
</div>  
<br>
<br> 
	  
	<?php 
/*$username = "root"; 
$password = ""; 
$database = "respo"; 
$mysqli = new mysqli("localhost", $username, $password, $database);*/ 
$query = "SELECT * FROM home_slider order by updated_date desc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 50%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">ID</font> </td> 
          <td class="td" style="width: 200px;"> <font face="Arial">Image</font> </td> 
          <td class="td"> <font face="Arial">Link</font> </td> 
		  <td class="td" style="width: 200px;"> <font face="Arial">Updated Date</font> </td> 
          <td class="td"> <font face="Arial">Status</font> </td> 
           <td class="td"> <font face="Arial">Action</font> </td> 
      </tr>
';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["image_name"];
        $field3name = $row["updated_date"];
        $field5name = $row["link"];
        $status = $row["status"];
        	
        echo '<tr> 
                  <td><font color="black">'.$field1name.'</font></td> 
                  <td><font color="black"><img src="media/'.$field2name.'" width="250" height="100" style="object-fit: contain;"></font></td>
				  <td><font color="black">'.$field5name.'</font></td> 				  
                  <td><font color="black">'.$field3name.'</font></td> 
                  <td><font color="black">'.ucfirst($status).'</font></td> 
				  <td>
                      <a href="edit-homeslider.php?id='.$field1name.'" class="btn btn-sm btn-primary">Edit</a>
                      <a href="delete-homeslider.php?i='.$field1name.'" class="btn btn-sm btn-danger">Delete</a>
                  </td>
              </tr>';
    }
    $result->free();
} 


			?>

	
	 <style>
	 
	 .tr {
		 
		 border:2px solid white;
		 
	 }
	 
	 
	 .td {
		 
		 border: 2px solid white;
		 background: #3f6791;
    font-family: poppins;
    font-weight: 600;
    text-align: left;
    text-transform: capitalize;
    font-size: 15px;
    padding: 7px;
}
	 }
	 
	 </style>
	 
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
	
	
	
	

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


</body>
</html>

<?php
}
?>
