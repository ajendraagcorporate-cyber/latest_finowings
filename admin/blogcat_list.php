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
    <section class="content" >
      <div class="container-fluid" style="width: 100%;">
	 <div class="col-md-12 head">
    <div align="center">
        <a href="add-blog-cat.php" class="btn btn-success" style="background: #273158; color: #FFFFFF; font-weight:bold;">Add New Category</a> 
    </div>
</div>  
<br>
<br> 
	  
	<?php 
$mysqli = new mysqli("localhost", $user, $password, $dbname); 
$query = "SELECT * FROM blog_category";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 50%;" align="center" bgcolor="#fffff"> 
      <tr class="tr"> 
          <td class="td"> <font face="Arial" color="#FFFFFF">Sr No.</font> </td> 
          <td class="td"> <font face="Arial" color="#FFFFFF">Category</font> </td> 
          <td class="td"> <font face="Arial" color="#FFFFFF">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial" color="#FFFFFF">Delete</font> </td>'; 
      

}
  
echo '</tr>';
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["cat_name"];
        
        echo '<tr> 
                  <td><font color="black">'.$field1name.'</font></td> 
                  <td><font color="black">'.$field2name.'</font></td> 
                  <td><a href="edit-blog-cat.php?i='.$field1name.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-blog-cat.php?i='.$field1name.'">Delete</td>';
				  }
            echo '</tr>';
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
