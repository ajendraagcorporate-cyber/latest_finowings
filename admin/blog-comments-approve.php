<?php
include("config.php");
$i = $_REQUEST['i'];
$c = $_REQUEST['c'];
if($i == 'Y')
{
$query = "update comments set approve='N' where id='$c'";
}
elseif($i == 'N')
{
$query = "update comments set approve='Y' where id='$c'";	
}
$result = mysqli_query($link, $query);
if($result)
{
	header("Location: blog-comments.php");
}	
?>