<?php
include("config.php");
include('head.php');

?>

<body style="background: #FFFFFF;">
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

<?php
$query10 = "SELECT count(*) as rec FROM blog where is_publish='Yes'";
$result10 = mysqli_query($link, $query10);
$row10 = $result10->fetch_assoc();
$publish_blogs = $row10['rec'];
?>
 
 
 
    <!-- Main content -->
    <section class="content" >
      <div class="container-fluid" style="width: 100%;">
	 <div class="col-md-12 head">
    <div align="center">
        <a href="add-blog-static.php" class="btn btn-success" style="background: #273158; color: #FFFFFF; font-weight:bold;">Add New Static Blog</a></b>
    </div>
</div>  
<br>
<br> 
	  
	<?php 
/*$username = "root"; 
$password = ""; 
$database = "respo"; 
$mysqli = new mysqli("localhost", $username, $password, $database); */
$query = "SELECT * FROM blogs_static order by id desc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial" color="#FFFFFF">Sr No.</font> </td> 
          <td class="td"> <font face="Arial" color="#FFFFFF">Company</font> </td> 
          <td class="td"> <font face="Arial" color="#FFFFFF">Open</font> </td> 
		   <td class="td"> <font face="Arial" color="#FFFFFF">Close</font> </td>
           <td class="td"> <font face="Arial" color="#FFFFFF">Status</font> </td>'; 
?>		  
<?php
		echo '<td class="td"> <font face="Arial" color="#FFFFFF">Delete</font> </td>'; 
      


  
echo '</tr>';
if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["company"];
        $field3name = $row["open"];
        $field4name = $row["close"];
		$status = $row["status"];
		
        echo '<tr> 
                  <td><font color="black">'.$field1name.'</font></td> 
                  <td><font color="black">'.$field2name.'</font></td>
				  <td><font color="black">'.$field3name.'</font></td>					  
                  <td><font color="black">'.$field4name.'</font></td> 
				  <td><font color="black">'.$status.'</font></td>';
				  echo '<td><a href="delete-blogstatic.php?i='.$field1name.'">Delete</td>';
				  
            echo '</tr>';
			
		}
        	 
    }
    $result->free();


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
