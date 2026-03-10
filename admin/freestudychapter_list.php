<?php
include('head.php');
include("config.php");
?>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="Logo.png" alt="logo" height="60" width="60">
  </div>

  <!-- Navbar -->
 
<?php
include('sidebar.php');

?>



<style>
.button {
	background: blue;
    color: white;
    font-family: poppins;
    border: 1px solid white;
    width: 200px;
    border-radius: 3px;
	
}

.ellipsis {
	background: #3f6791;
	color: white;
    font-family: poppins;
    max-width: 40px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div><!-- /.col -->
         <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


 
 
 
    <!-- Main content -->
    <section class="content" >
      <div class="container-fluid" style="width: 100%;">
	 <div class="col-md-12 head">
    <div align="center">
        <a href="add-freestudy-chapter.php" class="btn btn-success"><i class="fa fa-download"></i> Add New Chapter</a>
    </div>
</div>  
<br>


	
<br> 


	 
	<?php 
/*$username = "root"; 
$password = ""; 
$database = "respo"; 
$mysqli = new mysqli("localhost", $username, $password, $database); */
$query = "SELECT * FROM freestudychapter where topic_id=1 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td> 
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>
			
				<?php 
/*$username = "root"; 
$password = ""; 
$database = "respo"; 
$mysqli = new mysqli("localhost", $username, $password, $database); */
$query = "SELECT * FROM freestudychapter where topic_id=2 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td> 
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>

<?php 
/*$username = "root"; 
$password = ""; 
$database = "respo"; 
$mysqli = new mysqli("localhost", $username, $password, $database); */
$query = "SELECT * FROM freestudychapter where topic_id=3 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td> 
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>
			
			<?php 
/*$username = "root"; 
$password = ""; 
$database = "respo"; 
$mysqli = new mysqli("localhost", $username, $password, $database); */
$query = "SELECT * FROM freestudychapter where topic_id=4 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td> 
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>
			
			<?php 
/*$username = "root"; 
$password = ""; 
$database = "respo"; 
$mysqli = new mysqli("localhost", $username, $password, $database); */
$query = "SELECT * FROM freestudychapter where topic_id=5 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td>
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
                  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>				  
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>

<?php 
/*$username = "root"; 
$password = ""; 
$database = "respo"; 
$mysqli = new mysqli("localhost", $username, $password, $database); */
$query = "SELECT * FROM freestudychapter where topic_id=6 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td> 
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>
			
			
			<?php 

$query = "SELECT * FROM freestudychapter where topic_id=7 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td> 
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>
			
			<br /><br />
			
			<?php 

$query = "SELECT * FROM freestudychapter where topic_id=8 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td> 
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>
			
			<br /><br />
			
			<?php 

$query = "SELECT * FROM freestudychapter where topic_id=12 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td> 
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>
			
			<br /><br />
			
			<?php 

$query = "SELECT * FROM freestudychapter where topic_id=13 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td> 
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>
			
			<br /><br />
			
			<?php 

$query = "SELECT * FROM freestudychapter where topic_id=9 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td>
                  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>				  
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>
			
			<br /><br />
			
			<?php 

$query = "SELECT * FROM freestudychapter where topic_id=10 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td> 
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>
			
			<br /><br />
			
			<?php 

$query = "SELECT * FROM freestudychapter where topic_id=11 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td> 
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>
			
			<br /><br />
			
			<?php 

$query = "SELECT * FROM freestudychapter where topic_id=14 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td> 
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>
			
			<br /><br />
			
			<?php 

$query = "SELECT * FROM freestudychapter where topic_id=15 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td> 
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>
			
				<br /><br />
			
			<?php 

$query = "SELECT * FROM freestudychapter where topic_id=16 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td> 
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>
			
			<br /><br />
			
			<?php 

$query = "SELECT * FROM freestudychapter where topic_id=17 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td> 
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>
			
			<br /><br />
			
			<?php 

$query = "SELECT * FROM freestudychapter where topic_id=18 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td> 
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>
			
			<br /><br />
			
			<?php 

$query = "SELECT * FROM freestudychapter where topic_id=19 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td> 
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>
			
			<br /><br />
			
			<?php 

$query = "SELECT * FROM freestudychapter where topic_id=20 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td> 
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>
			
			<br /><br />
			
			<?php 

$query = "SELECT * FROM freestudychapter where topic_id=21 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td> 
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>
			
			<br /><br />
			
			<?php 

$query = "SELECT * FROM freestudychapter where topic_id=22 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td> 
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>
			
			<br /><br />
			
			<?php 

$query = "SELECT * FROM freestudychapter where topic_id=23 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td> 
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>
			
			<br /><br />
			
			<?php 

$query = "SELECT * FROM freestudychapter where topic_id=24 order by id asc";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial">Sr No.</font> </td> 
          <td class="td" style="width: 250px;"> <font face="Arial">Topic Name</font> </td> 
          <td class="td" style="width: 550px;"> <font face="Arial">Chapter Name</font> </td>
		  <td class="td"> <font face="Arial">Chapter Content</font> </td>
		  <td class="td"> <font face="Arial">MCQ</font> </td>
          <td class="td"> <font face="Arial">Edit</font> </td>'; 
?>		  
<?php
if($_SESSION['user']['username'] == 'finoadmin')
{
	  
		  
		echo '<td class="td"> <font face="Arial">Delete</font> </td>'; 
      

}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $topic_id = $row["topic_id"];
        $chapter_name = $row["chapter_name"];
        	
			$query1 = "SELECT * FROM freestudytopic where id = '$topic_id'";
			$result1 = mysqli_query($link, $query1);
			$row1 = $result1->fetch_assoc();
			$topic_name = $row1['topic'];

        echo '<tr> 
                  <td><font color="black">'.$id.'</font></td> 
                  <td><font color="black">'.$topic_name.'</font></td>
				  <td><font color="black">'.$chapter_name.'</font></td> 
				  <td><a href="freestudychapter_content.php?i='.$id.'">Content</td>
				  <td><a href="chapter_quizlist.php?i='.$id.'">MCQ</td>
                  <td><a href="edit-freestudychapter.php?i='.$id.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-freestudychapter.php?i='.$id.'">Delete</td>';
				  }
            echo '</tr>';
  		
    }
    $result->free();
} 


			?>
			
			
		<br /><br />
		
	 <style>
	 
	 .tr {
		 
		 border:2px solid white;
		 
	 }
	 
	 
	 .td {
		 
		 border: 2px solid white;
		 background: #3f6791;
    font-family: poppins;
    font-weight: 600;
    text-align: left;
    text-transform: capitalize;
    font-size: 15px;
    padding: 7px;
}
	 }
	 
	 </style>
	 
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
	
	
	
	

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 <?php
//include('footer.php');

?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->


</body>
</html>
