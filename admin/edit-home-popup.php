<?php
include('head.php');
include('config.php');
$id = 1;
$query = "SELECT * FROM home_popup where id='$id'";
$result = $link->query($query);
if($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $image = $row['image'];
    $link_url = $row['link'];
    $status = $row['status'];
} else {
    // Fallback if table doesn't exist yet or no record
    $image = 'web_popup.webp';
    $link_url = 'https://www.finowings.com/learn-intraday-strategy/';
    $status = 'active';
}
?>

<body style="background: #FFFFFF;">
<div class="wrapper">

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
.preview-img {
    max-width: 300px;
    margin-top: 10px;
    border: 1px solid #ddd;
    padding: 5px;
}
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6"></div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <div align="center">
        <a class="btn btn-success" style="background: #cf9c0a; color: #FFFFFF; font-weight:bold;">Manage Homepage Popup</a> 
    </div>
	
	<br>
	<div align="center">
	<section class="content" style="border: 1px solid white; padding-left:30px; width: 90%; background:#FFFFFF;">
      <form method="post" action="edithomepopup.php" enctype="multipart/form-data">
		<p>&nbsp;</p>
        
        <p align="left">
            <font color="#000000"><b>Current Image:</b></font><br>
            <img src="../img/<?php echo $image; ?>" class="preview-img" alt="Current Popup">
        </p>
        
        <p align="left">
            <font color="#000000"><b>Upload New Image:</b></font><br>
            <input type="file" name="popup_image" class="form-control" style="width: 500px;">
            <small class="text-muted">Recommend: WEBP/PNG/JPG (800x600 px)</small>
        </p> <br>

		<p align="left">
            <font color="#000000"><b>Popup Link :</b></font><br>
            <input type="text" style="width: 500px;" name="link" class="form-control" value="<?php echo $link_url; ?>">
        </p> <br>
		
		<p align="left">
            <font color="#000000"><b>Status:</b></font><br>
            <select name="status" class="form-control" style="width: 500px;">
                <option value="active" <?php echo ($status == 'active') ? 'selected' : ''; ?>>Active (Show Popup)</option>
                <option value="inactive" <?php echo ($status == 'inactive') ? 'selected' : ''; ?>>Inactive (Hide Popup)</option>
            </select>
        </p> <br>

        <input type="hidden" name="id" value="<?php echo $id; ?>">
		<p><input type="submit" name="submit" value="Update Popup Settings" style="background:#273158; height:40px; width:250px; color:#FFFFFF; font-weight:bold; font-size:16px; border:none; border-radius:4px;"></p>
        <p>&nbsp;</p>
    </form>
    </section>
	</div>

  </div>
</div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
