<?php
session_start();
if (!(isset($_SESSION['user'])) || $_SESSION['user'] == '') {
    $_SESSION['msg'] = "Please Login !!!";
    header('Location: index.php');
    die;
} else {
    include("config.php");

    $id = $_GET['id'];
    $fetch_query = "SELECT * FROM home_banners WHERE id='$id'";
    $fetch_run = mysqli_query($link, $fetch_query);
    $row = mysqli_fetch_array($fetch_run);

    if (isset($_POST['edit_banner'])) {
        $heading = $_POST['heading'];
        $badge = $_POST['badge'];
        $price = $_POST['price'];
        $sale_price = $_POST['sale_price'];
        $desc = $_POST['description'];
        $course_link = $_POST['link'];
        $students = $_POST['students'];
        $rating = $_POST['rating'];
        $delay = $_POST['delay'];

        // Image Handling
        $target_dir = "media/";
        if (!empty($_FILES["banner_img"]["name"])) {
            $filename = $_FILES["banner_img"]["name"];
            $target_file = $target_dir . basename($filename);
            move_uploaded_file($_FILES["banner_img"]["tmp_name"], $target_file);
            $update_img = ", image='$filename'";
        } else {
            $update_img = "";
        }

        $update_query = "UPDATE home_banners SET heading='$heading', badge_text='$badge', price='$price', sale_price='$sale_price', description='$desc', link='$course_link', students_count='$students', rating='$rating', delay='$delay' $update_img WHERE id='$id'";
        mysqli_query($link, $update_query);
        header("Location: homebanners_list.php");
    }

    include('head.php');
?>
    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">
            <?php include('sidebar.php'); ?>

            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <h1 class="text-dark">Edit Home Banner Card</h1>
                    </div>
                </section>

                <section class="content">
                    <div class="container-fluid">
                        <div class="card card-primary" style="color: black; background: white; padding: 20px;">
                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label>Heading</label>
                                        <input type="text" name="heading" value="<?php echo $row['heading']; ?>" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Badge Text</label>
                                        <input type="text" name="badge" value="<?php echo $row['badge_text']; ?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Price (Old)</label>
                                        <input type="text" name="price" value="<?php echo $row['price']; ?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Sale Price</label>
                                        <input type="text" name="sale_price" value="<?php echo $row['sale_price']; ?>" class="form-control">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control" rows="3"><?php echo $row['description']; ?></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Link</label>
                                        <input type="text" name="link" value="<?php echo $row['link']; ?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Students count</label>
                                        <input type="text" name="students" value="<?php echo $row['students_count']; ?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Rating</label>
                                        <input type="text" name="rating" value="<?php echo $row['rating']; ?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Delay (AOS Animation)</label>
                                        <input type="text" name="delay" value="<?php echo $row['delay']; ?>" class="form-control">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Current Image</label><br>
                                        <img src="media/<?php echo $row['image']; ?>" width="150" height="100" class="mb-2"><br>
                                        <label>Change Image (Optional)</label>
                                        <input type="file" name="banner_img" class="form-control">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="edit_banner" class="btn btn-primary mt-4">Save Changes</button>
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
