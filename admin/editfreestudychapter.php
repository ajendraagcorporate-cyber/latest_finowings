<?php
session_start();
include("head.php");
include("config.php");

// Check connection
if ($link === false) {
  die("ERROR: Could not connect. " . mysqli_connect_error());
}

//Image Upload
if (!empty($_FILES["fileToUpload"]["tmp_name"])) {
  $target_dir = "media/courseicons/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }

  // Allow certain file formats
  if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" && $imageFileType != "webp"
  ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
}

// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$topic_id = mysqli_real_escape_string($link, $_REQUEST['topic']);
$chapter_name = mysqli_real_escape_string($link, $_REQUEST['chapter_name']);
$chapter_image_name = isset($_FILES["fileToUpload"]["name"]) ? $_FILES["fileToUpload"]["name"] : '';
$chapter_image = mysqli_real_escape_string($link, $chapter_image_name);
$updated_date = date("Y-m-d h:m:s");
$me_title = mysqli_real_escape_string($link, $_REQUEST['me_title']);
$me_keywords = mysqli_real_escape_string($link, $_REQUEST['me_keywords']);
$me_desc = mysqli_real_escape_string($link, $_REQUEST['me_desc']);
$blog_url = mysqli_real_escape_string($link, $_REQUEST['blog_url']);
$chapter_schema = mysqli_real_escape_string($link, $_REQUEST['schema_markup']);
$content =  $_REQUEST['content'];
$content1 = str_replace("'", "&#039;", $content);
$username = $_SESSION['user']['username'];

// Attempt insert query execution
if (!empty($chapter_image_name)) {
  $sql = "UPDATE freestudychapter SET topic_id='$topic_id', chapter_name='$chapter_name', chapter_image='$chapter_image', content='$content1', updated_date='$updated_date', me_title='$me_title', me_keywords='$me_keywords', me_desc='$me_desc', blog_url='$blog_url', chapter_schema='$chapter_schema', update_user = '$username' where id='$id'";
} else {
  $sql = "UPDATE freestudychapter SET topic_id='$topic_id', chapter_name='$chapter_name', content='$content1', updated_date='$updated_date', me_title='$me_title', me_keywords='$me_keywords', me_desc='$me_desc', blog_url='$blog_url', chapter_schema='$chapter_schema', update_user = '$username' where id='$id'";
}
if (mysqli_query($link, $sql)) {
  header("Location: freestudychapter_list.php");
} else {
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
        <h2 align="center">Your Record is Updated. <a href="freestudychapter_list.php">Click Here</a> for Chapter Listing Page</h2>
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