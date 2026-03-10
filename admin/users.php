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


 
 
 
    <!-- Main content 
    <section class="content" >
      <div class="container-fluid" style="width: 100%;">
	 <div class="col-md-12 head">
   
	<div>
  <input type="button" class="btn btn-success" style="margin-left: 8px;" value="Print" onclick="window.print()" />
</div>
</div>  
<br>
<br> -->

 <!-- Main content -->
    <section class="content" >
      <div class="container-fluid" style="width: 100%;">
	 <div class="col-md-12 head">
    <div align="center">
        <a class="btn btn-success" style="background: #273158; color: #FFFFFF; font-weight:bold;">Admin Users List</a>
    </div>
</div>  
<br>
<br> 
	  
	<?php 
$query = "SELECT * FROM users";


echo '<table border="0" cellspacing="2" cellpadding="2" style="width: 60%;" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial" color="#fffff">Sr No.</font> </td> 
          <td class="td"> <font face="Arial" color="#fffff">Username</font> </td> 
          <td class="td"> <font face="Arial" color="#fffff">email</font> </td> 
          <td class="td"> <font face="Arial" color="#fffff">Role</font> </td> 
          <td class="td"> <font face="Arial" color="#fffff">Password</font> </td>
		
                
      </tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["username"];
        $field3name = $row["email"];
        $field4name = $row["user_type"];
        $field5name = $row["password"]; 

        echo '<tr> 
                  <td class="td">'.$field1name.'</td> 
                  <td class="td">'.$field2name.'</td> 
                  <td class="td">'.$field3name.'</td> 
                  <td class="td">'.$field4name.'</td> 
                  <td class="td">'.$field5name.'</td> 
				  
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
