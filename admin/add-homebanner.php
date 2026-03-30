<?php
session_start();
if (!(isset($_SESSION['user'])) || $_SESSION['user'] == '') {
    $_SESSION['msg'] = "Please Login !!!";
    header('Location: index.php');
    die;
} else {
    include("config.php");

    if (isset($_POST['add_banner'])) {
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
        $filename = $_FILES["banner_img"]["name"];
        $target_file = $target_dir . basename($filename);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (move_uploaded_file($_FILES["banner_img"]["tmp_name"], $target_file)) {
            $insert_query = "INSERT INTO home_banners (heading, badge_text, price, sale_price, description, link, students_count, rating, image, delay) VALUES ('$heading', '$badge', '$price', '$sale_price', '$desc', '$course_link', '$students', '$rating', '$filename', '$delay')";
            mysqli_query($link, $insert_query);
            header("Location: homebanners_list.php");
        } else {
            echo "Error uploading file";
        }
    }

    include('head.php');
?>

    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">
            <?php include('sidebar.php'); ?>

            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <h1 class="text-dark">Add New Home Banner Card</h1>
                    </div>
                </section>

                <section class="content">
                    <div class="container-fluid">
                        <div class="card card-primary" style="color: black; background: white; padding: 20px;">
                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label>Heading</label>
                                        <input type="text" name="heading" class="form-control" required placeholder="e.g. Commodity Trading Master Class">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Badge Text</label>
                                        <input type="text" name="badge" class="form-control" placeholder="e.g. Live Class, Combo">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Price (Old)</label>
                                        <input type="text" name="price" class="form-control" placeholder="e.g. ₹22,999">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Sale Price</label>
                                        <input type="text" name="sale_price" class="form-control" placeholder="e.g. ₹19,999">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Link</label>
                                        <input type="text" name="link" class="form-control" placeholder="URL to enroll">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Students count</label>
                                        <input type="text" name="students" class="form-control" placeholder="e.g. 30k+ Students">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Rating</label>
                                        <input type="text" name="rating" class="form-control" placeholder="e.g. (4.9/5)">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Delay (AOS Animation)</label>
                                        <input type="text" name="delay" class="form-control" value="0.1" placeholder="e.g. 0.3s">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label>Banner Image</label>
                                        <input type="file" name="banner_img" class="form-control" required>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="add_banner" class="btn btn-primary mt-4">Add Card</button>
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
