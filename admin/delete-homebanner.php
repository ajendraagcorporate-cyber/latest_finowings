<?php
session_start();
if (!(isset($_SESSION['user'])) || $_SESSION['user'] == '') {
    $_SESSION['msg'] = "Please Login !!!";
    header('Location: index.php');
    die;
} else {
    include("config.php");
    $id = $_GET['id'];
    $delete_query = "DELETE FROM home_banners WHERE id='$id'";
    mysqli_query($link, $delete_query);
    header("Location: homebanners_list.php");
}
?>
