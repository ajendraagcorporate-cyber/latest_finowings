<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include("head.php");
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con;
mysqli_set_charset($link, "utf8mb4");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$uploadOk = 1;
$file = "";

if(isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["name"] != '') {
    $target_dir = "media/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check === false) { $uploadOk = 0; }
    if ($_FILES["fileToUpload"]["size"] > 5000000) { $uploadOk = 0; }
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "webp" ) { $uploadOk = 0; }

    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $file = mysqli_real_escape_string($link, $_FILES["fileToUpload"]["name"]);
        } else {
            $uploadOk = 0;
        }
    }
}

$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$title = mysqli_real_escape_string($link, $_REQUEST['title']);
$short_desc = mysqli_real_escape_string($link, $_REQUEST['short_desc']);
$short_summary = mysqli_real_escape_string($link, $_REQUEST['short_summary']);
$cat_id = mysqli_real_escape_string($link, $_REQUEST['category']);
$content = mysqli_real_escape_string($link, $_REQUEST['editor1']);
$tags = mysqli_real_escape_string($link, $_REQUEST['tags']);
$updated_date = date("Y-m-d H:i:s");
$img_alttag = mysqli_real_escape_string($link, $_REQUEST['img_alttag']);
$me_keywords = mysqli_real_escape_string($link, $_REQUEST['me_keywords']);
$me_desc = mysqli_real_escape_string($link, $_REQUEST['me_desc']);
$blog_url = mysqli_real_escape_string($link, $_REQUEST['blog_url']);
$faq1 = mysqli_real_escape_string($link, $_REQUEST['faq1']);
$ans1 = mysqli_real_escape_string($link, $_REQUEST['ans1']);
$faq2 = mysqli_real_escape_string($link, $_REQUEST['faq2']);
$ans2 = mysqli_real_escape_string($link, $_REQUEST['ans2']);
$faq3 = mysqli_real_escape_string($link, $_REQUEST['faq3']);
$ans3 = mysqli_real_escape_string($link, $_REQUEST['ans3']);
$faq4 = mysqli_real_escape_string($link, $_REQUEST['faq4']);
$ans4 = mysqli_real_escape_string($link, $_REQUEST['ans4']);
$faq5 = mysqli_real_escape_string($link, $_REQUEST['faq5']);
$ans5 = mysqli_real_escape_string($link, $_REQUEST['ans5']);
$faq6 = mysqli_real_escape_string($link, $_REQUEST['faq6']);
$ans6 = mysqli_real_escape_string($link, $_REQUEST['ans6']);
$faq7 = mysqli_real_escape_string($link, $_REQUEST['faq7']);
$ans7 = mysqli_real_escape_string($link, $_REQUEST['ans7']);
$faq8 = mysqli_real_escape_string($link, $_REQUEST['faq8']);
$ans8 = mysqli_real_escape_string($link, $_REQUEST['ans8']);
$faq9 = mysqli_real_escape_string($link, $_REQUEST['faq9']);
$ans9 = mysqli_real_escape_string($link, $_REQUEST['ans9']);
$faq10 = mysqli_real_escape_string($link, $_REQUEST['faq10']);
$ans10 = mysqli_real_escape_string($link, $_REQUEST['ans10']);
$schema_markup = mysqli_real_escape_string($link, $_REQUEST['schema_markup']);
$spotify_link = mysqli_real_escape_string($link, $_REQUEST['spotify_link']);
$publish = mysqli_real_escape_string($link, $_REQUEST['publish']);
$username = isset($_SESSION['userinfo']['name']) ? $_SESSION['userinfo']['name'] : 'Admin';

if($file != "") {
    $sql = "UPDATE blog SET title='$title', short_desc='$short_desc', short_summary='$short_summary', cat_id='$cat_id', content='$content', tags='$tags', file='$file', updated_date='$updated_date', img_alttag='$img_alttag', me_keywords='$me_keywords', me_desc='$me_desc', blog_url='$blog_url', faq1='$faq1', ans1='$ans1', faq2='$faq2', ans2='$ans2', faq3='$faq3', ans3='$ans3', faq4='$faq4', ans4='$ans4', faq5='$faq5', ans5='$ans5', faq6='$faq6', ans6='$ans6', faq7='$faq7', ans7='$ans7', faq8='$faq8', ans8='$ans8', faq9='$faq9', ans9='$ans9', faq10='$faq10', ans10='$ans10', schema_markup='$schema_markup', spotify_link='$spotify_link', is_publish='$publish', update_user = '$username' where id='$id'";
} else {
    $sql = "UPDATE blog SET title='$title', short_desc='$short_desc', short_summary='$short_summary', cat_id='$cat_id', content='$content', tags='$tags', updated_date='$updated_date', img_alttag='$img_alttag', me_keywords='$me_keywords', me_desc='$me_desc', blog_url='$blog_url', faq1='$faq1', ans1='$ans1', faq2='$faq2', ans2='$ans2', faq3='$faq3', ans3='$ans3', faq4='$faq4', ans4='$ans4', faq5='$faq5', ans5='$ans5', faq6='$faq6', ans6='$ans6', faq7='$faq7', ans7='$ans7', faq8='$faq8', ans8='$ans8', faq9='$faq9', ans9='$ans9', faq10='$faq10', ans10='$ans10', schema_markup='$schema_markup', spotify_link='$spotify_link', is_publish='$publish', update_user = '$username' where id='$id'";
}

if(mysqli_query($link, $sql)){
    header("Location: blog_list.php");
    exit();
} else {
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php'); ?>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed">
<div class="wrapper">
    <?php include('sidebar.php'); ?>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 text-center">
                        <h2>Your Record is Updated. <a href="blog_list.php">Click Here</a> for Listing</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.js"></script>
</body>
</html>