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

            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <h1 class="text-dark">Edit Top Slider Image</h1>
                    </div>
                </section>

                <section class="content">
                    <div class="container-fluid">
                        <div class="card card-primary" style="color: black; background: white; padding: 20px;">
                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label>Link</label>
                                        <input type="text" name="link" value="<?php echo $row['link']; ?>" class="form-control" placeholder="Redirect URL">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control">
                                            <option value="active" <?php if($row['status'] == 'active') echo 'selected'; ?>>Active</option>
                                            <option value="inactive" <?php if($row['status'] == 'inactive') echo 'selected'; ?>>Inactive</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Current Image</label><br>
                                        <img src="media/<?php echo $row['image_name']; ?>" width="250" height="100" class="mb-2" style="object-fit: contain; border: 1px solid #ddd;"><br>
                                        <label>Change Image (Optional)</label>
                                        <input type="file" name="fileToUpload1" class="form-control">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="edit_slider" class="btn btn-primary mt-4">Save Changes</button>
                                </div>
                            </form>
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
