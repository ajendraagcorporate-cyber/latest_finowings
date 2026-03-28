<?php
session_start();
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $id = mysqli_real_escape_string($link, $_POST['id']);
    $link_url = mysqli_real_escape_string($link, $_POST['link']);
    $status = mysqli_real_escape_string($link, $_POST['status']);
    
    $image_name = "";
    if (!empty($_FILES["popup_image"]["tmp_name"])) {
        $target_dir = "../img/";
        $image_name = basename($_FILES["popup_image"]["name"]);
        $target_file = $target_dir . $image_name;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image
        $check = getimagesize($_FILES["popup_image"]["tmp_name"]);
        if ($check === false) {
            $uploadOk = 0;
        }

        // Check file size (5MB limit)
        if ($_FILES["popup_image"]["size"] > 5000000) {
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "webp") {
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["popup_image"]["tmp_name"], $target_file)) {
                // Success
            } else {
                $uploadOk = 0;
            }
        }
    }

    if ($image_name != "") {
        $sql = "UPDATE home_popup SET image='$image_name', link='$link_url', status='$status' WHERE id='$id'";
    } else {
        $sql = "UPDATE home_popup SET link='$link_url', status='$status' WHERE id='$id'";
    }

    if (mysqli_query($link, $sql)) {
        header("Location: edit-home-popup.php?msg=success");
    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }
}
mysqli_close($link);
?>
