<?php
session_start();
include('db-config.php');
if($connection)
{
    // echo "Database Connected";
}
else
{
    header("Location: dbconfig.php");
}
?>