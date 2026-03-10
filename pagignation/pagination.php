<?php
include('db.php');
$limit = 4;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM blog ORDER BY title ASC LIMIT $start_from, $limit";  
$rs_result = mysqli_query($conn, $sql);  
?>
<table class="table table-bordered table-striped">  
<thead>  
<tr>  
<th>title</th>  
<th>body</th>  
</tr>  
</thead>  
<tbody>  
<?php  
while ($row = mysqli_fetch_assoc($rs_result)) {  
?>  
            <tr>  
            <td><?php echo $row['title']; ?></td>  
            <td><?php echo $row['short_desc']; ?></td>  
            </tr>  
<?php  
}
?>  
</tbody>  
</table>    