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
<?php
$hostName = "localhost"; // host name
$username = "root";  // database username
$password = ""; // database password
$databaseName = "multi"; // database name

$Connect=mysqli_connect($hostName,$username,$password,$databaseName);
$QueryVF = mysqli_query($Connect,'SELECT * from home');



?>
 
    <!-- Main content -->
    <section class="content" style="border: 2px solid white;padding-bottom: 68px; width: 1090px;">
      <div class="container-fluid">
	 <form method="POST">
            <table border="1" class=".input">   
                        <tr>
                                <th>ID</th>
                                <th>Image File</th>
                                <th>webinar</th>
                                <th>webinar</th>
<th>Delete Data</th>
                        </tr>
                            <?php

                                while ( $row = mysqli_fetch_array($QueryVF)){
                                echo'<tr>';
                                    echo'<td>'.$row['id'].'</td>';
                                    echo'<td>'.$row['file'].'</td>';
                                    echo'<td>'.$row['webinar'].'</td>';
                                    echo'<td>'.$row['webinarc'].'</td>'; 
                                    echo "<td><button type=\"submit\" name=\"Delete\" oneclick=\"\">Drop Data</button></td>";
                                        if($_POST['Delete'])
                                           {
                                            $DelVF = mysqli_query($Connect,'TRUNCATE home');
                                            echo "row is successfully deleted";
                                                                }
                                    echo'</tr>';
                              }
                             ?>
                        </table>
        </form>
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
include('footer.php');

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
