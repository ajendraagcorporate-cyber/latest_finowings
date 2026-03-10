<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con;
$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$date = date("Y-m-d h:m:s");
  
$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$date = date("Y-m-d h:m:s");
  
 
// Attempt insert query execution
if($name !='' && $email != '' && $city != '' && $phone !='')
{
$sql = "INSERT INTO master_class_reg (name, email, city, contact, message, created_date) VALUES ('$name', '$email', '$city', '$phone', '$message', '$date')";
mysqli_query($link, $sql);
//header("Location: thanks.php");
echo '<h3 align="center" style="color:red;">You have Successfully Registered for Free Stock Market Trading Class !!!</h3>
<br /><br />
<h5 align="left">What Will You Get?</h5>

<ul align="left">
<li>You will get to know the intraday trading strategy with Trading Psychology.</li>
<li>You will also get Live Q&A Opportunity with Mukul Sir.</li>
</ul>
<span style="color: red;">
<p align="left">You will get the live class link on your email id.</p>

<p align="left"><b>Note:</b> If you are not getting mail in your email, kindly check the email Promotional Section<br />

<b>Time :</b> 11 AM - 12 PM<br />
<b>Date :</b> 09/04/2023<br />
</span>
</p>';

mysqli_close($link);  
?>


$link = $con;  
// Attempt insert query execution
if($name !='' && $email != '' && $city != '' && $phone !='')
{
$sql = "INSERT INTO master_class_reg (name, email, city, contact, message, created_date) VALUES ('$name', '$email', '$city', '$phone', '$message', '$date')";
mysqli_query($link, $sql);
//header("Location: thanks.php");
echo '<h3 align="center" style="color:red;">You have Successfully Registered for Free Stock Market Trading Class !!!</h3>
<br /><br />
<h5 align="left">What Will You Get?</h5>

<ul align="left">
<li>You will get to know the intraday trading strategy with Trading Psychology.</li>
<li>You will also get Live Q&A Opportunity with Mukul Sir.</li>
</ul>
<span style="color: red;">
<p align="left">You will get the live class link on your email id.</p>

<p align="left"><b>Note:</b> If you are not getting mail in your email, kindly check the email Promotional Section<br />

<b>Time :</b> 11 AM - 12 PM<br />
<b>Date :</b> 09/04/2023<br />
</span>
</p>';

mysqli_close($link);  
?>


