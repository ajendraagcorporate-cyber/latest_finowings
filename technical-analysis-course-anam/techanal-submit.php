<?php
include("../DLL/config.php");
if(isset($_POST['submit']))
{
$uname = mysqli_real_escape_string($con, $_REQUEST['uname']);
$mobile = $_REQUEST['mobile'];
$created_date = date("Y-m-d h:m:s");
$sql = "INSERT INTO techanalysiscourse_leads (uname, mobile, created_date) VALUES ('$uname', '$mobile', '$created_date')";
if(mysqli_query($con, $sql)){
  header( "Location: course-terms.php" );
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
}
?>