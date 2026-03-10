<?php
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
    <section class="content" >
      <div class="container-fluid" style="width: 100%;">
	 <div class="col-md-12 head">
    <div align="center">
        <a class="btn btn-success" style="background: #273158; color: #FFFFFF; font-weight:bold;">About Finowings</a>
    </div>
</div>  
<br>
<br> 
	  
	<?php 
/*$username = "root"; 
$password = ""; 
$database = "respo"; 
$mysqli = new mysqli("localhost", $username, $password, $database);*/ 
$query = "SELECT * FROM aboutfinowings";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 90%;" bgcolor="#FFFFF" align="center"> 
      <tr class="tr"> 
         <td class="td" style="width:150px;"> <font face="Arial">Title</font> </td> 
          <td class="td" style="width:700px;"> <font face="Arial">Short Description</font> </td> 
		  <td class="td"> <font face="Arial">Edit</font> </td>
      </tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["title"];
        $field3name = $row["short_desc"];
			
        echo '<tr> 
                
                  <td><font color="black">'.$field2name.'</font></td>
					<td><font color="black">'.$field3name.'</font></td>				  
                  <td><a href="edit-finowings.php?i='.$field1name.'">Edit</td>
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
