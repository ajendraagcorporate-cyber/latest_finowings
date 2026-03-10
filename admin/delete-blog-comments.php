<?php
include("config.php");
$c = $_REQUEST['c'];
$query = "delete from comments where id='$c'";
$result = mysqli_query($link, $query);
if($result)
{
	header("Location: blog-comments.php");
}	
?>