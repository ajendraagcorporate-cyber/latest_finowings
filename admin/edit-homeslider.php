<?php
session_start();
if (!(isset($_SESSION['user'])) || $_SESSION['user'] == '') {
    $_SESSION['msg'] = "Please Login !!!";
    header('Location: index.php');
    die;
} else {
    include("config.php");

    $id = $_GET['id'];
    $fetch_query = "SELECT * FROM home_slider WHERE id='$id'";
    $fetch_run = mysqli_query($link, $fetch_query);
    $row = mysqli_fetch_array($fetch_run);

    if (isset($_POST['edit_slider'])) {
        $link_val = mysqli_real_escape_string($link, $_POST['link']);
        $status = mysqli_real_escape_string($link, $_POST['status']);
        $date = date("Y-m-d H:i:s");

        // Image Handling
        $target_dir = "media/";
        if (!empty($_FILES["fileToUpload1"]["name"])) {
            $filename = $_FILES["fileToUpload1"]["name"];
            $target_file = $target_dir . basename($filename);
            move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file);
            $update_img = ", image_name='$filename'";
        } else {
            $update_img = "";
        }

        $update_query = "UPDATE home_slider SET link='$link_val', status='$status', updated_date='$date' $update_img WHERE id='$id'";
        mysqli_query($link, $update_query);
        header("Location: homeslider_list.php");
    }

    include('head.php');
?>
    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">
            <?php include('sidebar.php'); ?>

            <div class="content-wrapper" style="background: #f4f6f9;">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="text-dark">Edit Home Slider</h1>
                            </div>
                            <div class="col-sm-6 text-right">
                                <a href="homeslider_list.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back to List</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="content">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card card-outline card-primary shadow-lg">
                                    <div class="card-header bg-white">
                                        <h3 class="card-title" style="color: #273158; font-weight: bold;">
                                            <i class="fas fa-edit mr-2"></i> Update Slider Details
                                        </h3>
                                    </div>
                                    <div class="card-body" style="background: #ffffff; color: #333;">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label style="color: #273158; font-weight: 600;">Banner Link (URL):</label>
                                                <input type="text" name="link" value="<?php echo $row['link']; ?>" class="form-control" placeholder="https://example.com/your-target-page" style="border-radius: 8px;">
                                                <small class="text-muted">Current link: <?php echo $row['link']; ?></small>
                                            </div>

                                            <div class="form-group mt-4">
                                                <label style="color: #273158; font-weight: 600;">Status:</label>
                                                <select name="status" class="form-control" style="border-radius: 8px;">
                                                    <option value="active" <?php if($row['status'] == 'active') echo 'selected'; ?>>Active (Visible on Homepage)</option>
                                                    <option value="inactive" <?php if($row['status'] == 'inactive') echo 'selected'; ?>>Inactive (Hidden)</option>
                                                </select>
                                            </div>

                                            <div class="form-group mt-4">
                                                <label style="color: #273158; font-weight: 600;">Current Image Preview:</label><br>
                                                <div class="p-2 border" style="background: #f8f9fa; border-radius: 8px; display: inline-block;">
                                                    <img src="media/<?php echo $row['image_name']; ?>" width="400" class="img-fluid" style="object-fit: contain; max-height: 150px;">
                                                </div>
                                            </div>

                                            <div class="form-group mt-3">
                                                <label style="color: #273158; font-weight: 600;">Change Image (Optional):</label>
                                                <input type="file" name="fileToUpload1" class="form-control" style="border-radius: 8px; height: auto; padding: 10px;">
                                                <small class="text-muted">Leave empty to keep the current image.</small>
                                            </div>

                                            <div class="text-center mt-5">
                                                <button type="submit" name="edit_slider" class="btn btn-primary btn-lg px-5 shadow" style="background: #273158; border: none; border-radius: 30px; font-weight: 600; min-width: 250px;">
                                                    <i class="fas fa-check-circle mr-2"></i> Update Slider Settings
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="dist/js/adminlte.js"></script>
    </body>
    </html>
<?php
}
?>
