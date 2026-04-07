<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
if (!(isset($_SESSION['user'])) || $_SESSION['user'] == '') {
  $_SESSION['msg'] = "Please Login !!!";
  header('Location: index.php');
  die;
} else {
  include("config.php");
  include('head.php');
?>


  <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" style="background-color: #FFFFFF;">

    <div class="wrapper">


      <!-- Navbar -->



      <?php
      include('sidebar.php');
      ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="background-color: #FFFFFF;">
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
          <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box" style="background: #273158;">
                  <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Total Blogs</span>
                    <span class="info-box-number">
                      <?php

                      $query = "SELECT id FROM blog ORDER BY id";
                      $query_run = mysqli_query($link, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h4> ' . $row . '</h4>';
                      ?>
                      <small></small>
                    </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3" style="background: #273158;">
                  <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-blog"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Total Finowings Academy Chapters</span>
                    <span class="info-box-number"><?php

                                                  $query = "SELECT id FROM freestudychapter ORDER BY id";
                                                  $query_run = mysqli_query($link, $query);
                                                  $row = mysqli_num_rows($query_run);
                                                  echo '<h4> ' . $row . '</h4>';

                                                  ?></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->

              <!-- fix for small devices only -->
              <div class="clearfix hidden-md-up"></div>

              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3" style="background: #273158;">
                  <span class="info-box-icon bg-success elevation-1"><i class="fa fa-headset"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Total Contact Form Inqueries</span>
                    <span class="info-box-number">

                      <?php

                      $query = "SELECT id FROM enquiry ORDER BY id";
                      $query_run = mysqli_query($link, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h4> ' . $row . '</h4>';

                      ?></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3" style="background: #273158;">
                  <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-cog"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Total HomePage Popup Enquiry</span>
                    <span class="info-box-number"><?php

                                                  $query = "SELECT id FROM popup_enquiry ORDER BY id";
                                                  $query_run = mysqli_query($link, $query);
                                                  $row = mysqli_num_rows($query_run);
                                                  echo '<h4> ' . $row . '</h4>';

                                                  ?></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->


            <!-- /.row -->

            <!-- Main row -->

            <!-- /.row -->
          </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->


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
  <?php
}
  ?>