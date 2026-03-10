<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con;

$query = "SELECT totalview FROM dematlinks_counter WHERE view_type='zerodha'"; 
$result = mysqli_query($link, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $rows = mysqli_fetch_array($result); 
    $counter = (int)$rows['totalview'] + 1;

    $t = "UPDATE dematlinks_counter SET totalview='".$counter."' WHERE view_type='zerodha'"; 
    
    if(mysqli_query($link, $t)) {
        header("Location: https://bit.ly/ZerodhaAcOpen");
        exit();
    }
} else {
    header("Location: https://bit.ly/ZerodhaAcOpen");
    exit();
}

?>
$link = $con;
//check for count
$query = "SELECT * FROM dematlinks_counter WHERE view_type='zerodha'"; 
$result = mysqli_query($link, $query);
$rows = mysqli_fetch_array($result); 
$counter = $rows['totalview']; 
$counter = $counter + 1;
$t = "UPDATE dematlinks_counter SET totalview='".$counter."' WHERE view_type='zerodha'"; 
if(mysqli_query($link, $t))
{
 header("Location: https://bit.ly/ZerodhaAcOpen");	
}
?>
