<?php
include("config.php");
include('head.php');

?>

<body style="background: #FFFFFF;">
<div class="wrapper">

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
  <div class="content-wrapper" style="background: #FFFFFF;">
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

<?php
$limit = 50;
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;
$search = isset($_GET['search']) ? mysqli_real_escape_string($link, $_GET['search']) : '';

$where = "WHERE 1";
if ($search) {
    $where .= " AND title LIKE '%$search%'";
}

// Count total published blogs (for the header count)
$query10 = "SELECT count(*) as rec FROM blog where is_publish='Yes'";
$result10 = mysqli_query($link, $query10);
$row10 = $result10->fetch_assoc();
$publish_blogs = $row10['rec'];

// Count total records for pagination
$count_query = "SELECT COUNT(*) as total FROM blog $where";
$count_result = mysqli_query($link, $count_query);
$count_row = mysqli_fetch_assoc($count_result);
$total_rows = $count_row['total'];
$total_pages = ceil($total_rows / $limit);
?>
 
 
 
    <!-- Main content -->
    <section class="content" >
      <div class="container-fluid" style="width: 100%;">
	 <div class="col-md-12 head">
    <div align="center">
        <a href="add-blog.php" class="btn btn-success" style="background: #273158; color: #FFFFFF; font-weight:bold;">Add New Blog</a>&nbsp;&nbsp;&nbsp;&nbsp;<b>Total No. of Published Blogs : <?php echo $publish_blogs; ?></b>
    </div>
</div>  
<br>

<div class="row mb-3" style="width: 70%; margin: 0 auto;">
    <div class="col-md-12">
        <form method="GET" action="blog_list.php" class="form-inline justify-content-center">
            <div class="input-group" style="width: 100%; max-width: 500px;">
                <input type="text" name="search" class="form-control" placeholder="Search blogs by title..." value="<?php echo htmlspecialchars($search); ?>">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" style="background: #3f6791;">Search</button>
                    <?php if($search): ?>
                        <a href="blog_list.php" class="btn btn-secondary">Clear</a>
                    <?php endif; ?>
                </div>
            </div>
        </form>
    </div>
</div>
<br> 
	  
	<?php 
$query = "SELECT * FROM blog $where ORDER BY id DESC LIMIT $offset, $limit";

echo '<table border="1" cellspacing="2" cellpadding="2" style="width: 70%;" bgcolor="#FFFFF" align="center"> 
      <tr class="tr"> 
          <td style="width: 62px;" class="td"> <font face="Arial" color="#FFFFFF">Sr No.</font> </td> 
          <td class="td"> <font face="Arial" color="#FFFFFF">Title</font> </td> 
          <td class="td"> <font face="Arial" color="#FFFFFF">Category</font> </td> 
		   <td class="td"> <font face="Arial" color="#FFFFFF">Blog Content</font> </td>
           <td class="td"> <font face="Arial" color="#FFFFFF">IPO Detail</font> </td>		   
		  <td class="td"> <font face="Arial" color="#FFFFFF">Publish</font> </td> 
		  <td class="td"> <font face="Arial" color="#FFFFFF">Publish Date</font> </td> 
          <td class="td"> <font face="Arial" color="#FFFFFF">Edit</font> </td>'; 

if($_SESSION['user']['username'] == 'finoadmin')
{
		echo '<td class="td"> <font face="Arial" color="#FFFFFF">Delete</font> </td>'; 
}
  
echo '</tr>';

if ($result = mysqli_query($link, $query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["title"];
        $field3name = $row["cat_id"];
        $field4name = $row["content"];
		$tags = $row["tags"];
		$publish = $row["is_publish"];
		$created_date = $row["created_date"];
		$pd = explode(" ", $created_date);
		$publish_date = $pd[0];
		
		$query1 = "SELECT * FROM blog_category where id = '$field3name'";
		$result1 = mysqli_query($link, $query1);
		$row1 = $result1->fetch_assoc();
		$cat_name = isset($row1['cat_name']) ? $row1['cat_name'] : 'N/A';
			
		$bgcolor = ($publish == 'Yes') ? '' : 'bgcolor="##D3D3D3;"';
		
        echo '<tr '.$bgcolor.'> 
                  <td><font color="black">'.$field1name.'</font></td> 
                  <td><font color="black">'.$field2name.'</font></td>
									  
                  <td><font color="black">'.$cat_name.'</font></td> 
				  <td><a href="blog-content.php?i='.$field1name.'">Content</td>
				  <td><a href="edit-ipodetail.php?i='.$field1name.'">IPO Detail</td>
				  <td><font color="black">'.$publish.'</font></td>
				  <td><font color="black">'.$publish_date.'</font></td>
				  <td><a href="edit-blog.php?i='.$field1name.'">Edit</td>';
				  if($_SESSION['user']['username'] == 'finoadmin')
				  {	  
				  echo '<td><a href="delete-blog.php?i='.$field1name.'" onclick="return confirm(\'Are you sure you want to delete this blog?\')">Delete</td>';
				  }
            echo '</tr>';
    }
    $result->free();
} 
echo '</table>';
?>

<div class="pagination-container" style="width: 70%; margin: 20px auto; text-align: center;">
    <div class="btn-group">
        <?php if($page > 1): ?>
            <a href="?page=1&search=<?php echo urlencode($search); ?>" class="btn btn-outline-primary" style="border: 1px solid #3f6791; color: #3f6791;">First</a>
            <a href="?page=<?php echo $page-1; ?>&search=<?php echo urlencode($search); ?>" class="btn btn-outline-primary" style="border: 1px solid #3f6791; color: #3f6791;">Previous</a>
        <?php endif; ?>
        
        <?php
        $start_loop = max(1, $page - 2);
        $end_loop = min($total_pages, $page + 2);
        
        for($i = $start_loop; $i <= $end_loop; $i++): ?>
            <a href="?page=<?php echo $i; ?>&search=<?php echo urlencode($search); ?>" class="btn <?php echo ($i == $page) ? 'btn-primary' : 'btn-outline-primary'; ?>" style="<?php echo ($i == $page) ? 'background: #3f6791; border: 1px solid #3f6791;' : 'border: 1px solid #3f6791; color: #3f6791;'; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>
        
        <?php if($page < $total_pages): ?>
            <a href="?page=<?php echo $page+1; ?>&search=<?php echo urlencode($search); ?>" class="btn btn-outline-primary" style="border: 1px solid #3f6791; color: #3f6791;">Next</a>
            <a href="?page=<?php echo $total_pages; ?>&search=<?php echo urlencode($search); ?>" class="btn btn-outline-primary" style="border: 1px solid #3f6791; color: #3f6791;">Last</a>
        <?php endif; ?>
    </div>
    <div style="margin-top: 10px; font-family: poppins;">
        Page <?php echo $page; ?> of <?php echo $total_pages; ?> (Total <?php echo $total_rows; ?> blogs)
    </div>
</div>

	
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
