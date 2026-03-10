<?php
include('head.php');
include('config.php');

// Encoding Fix: ₹ और Â की समस्या को रोकने के लिए
mysqli_set_charset($link, "utf8mb4");

// ID चेक करें
$id = isset($_REQUEST['i']) ? mysqli_real_escape_string($link, $_REQUEST['i']) : 0;

// चैप्टर का डेटा प्राप्त करें
$query = "SELECT * FROM freestudychapter WHERE id='$id'";
$result = $link->query($query);
$row = $result ? $result->fetch_assoc() : null;

if(!$row) {
    die("<div class='alert alert-danger'>Error: Chapter Record not found (ID: $id).</div>");
}

// डेटा वेरिएबल्स
$topic_id_val = $row['topic_id'];
$chapter_name = $row['chapter_name'];
$chapter_image = $row['chapter_image'];
$content = $row['content'];
$me_title = $row['me_title'];
$me_keywords = $row['me_keywords'];
$me_desc = $row['me_desc'];
$blog_url = $row['blog_url'];
$chapter_schema = $row['chapter_schema'];

// वर्तमान टॉपिक का नाम निकालें
$topic_res = $link->query("SELECT topic FROM freestudytopic WHERE id='$topic_id_val'");
$topic_data = $topic_res->fetch_assoc();
$topic_name = ($topic_data) ? $topic_data['topic'] : "Select Topic";
?>

<body class="hold-transition dark-mode sidebar-mini layout-fixed">
<div class="wrapper">

  <?php include('sidebar.php'); ?>

  <script src="ckeditor/ckeditor.js"></script>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid text-center">
        <h2 style="color: #cf9c0a; font-weight: bold;">Update Study Chapter</h2>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="card p-4 shadow" style="background: #FFFFFF; color: #000; border-radius: 8px; width: 95%; margin: auto;">
          
          <form method="post" action="editfreestudychapter.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="row mb-3">
                <div class="col-md-6">
                    <label><b>Choose Topic :</b></label>
                    <select class="form-control" name="topic">
                        <option value="<?php echo $topic_id_val; ?>"><?php echo $topic_name; ?></option>
                        <?php
                        $all_topics = $link->query("SELECT * FROM freestudytopic ORDER BY topic ASC");
                        while($t = $all_topics->fetch_assoc()) {
                            echo "<option value='".$t['id']."'>".$t['topic']."</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label><b>Chapter Name :</b></label>
                    <input type="text" class="form-control" name="chapter_name" value="<?php echo htmlspecialchars($chapter_name); ?>" required>
                </div>
            </div>

            <div class="form-group mb-4">
                <label><b>Featured Image :</b></label><br>
                <input type="file" name="fileToUpload">
                <?php if($chapter_image) { ?>
                    <div class="mt-2">
                        <small>Current Image:</small><br>
                        <img src="media/courseicons/<?php echo $chapter_image; ?>" width="100" class="border">
                    </div>
                <?php } ?>
            </div>

            <div class="form-group mb-4">
                <label><b>Chapter Content :</b></label>
                <textarea name="content" id="chapter_editor"><?php echo $content; ?></textarea>
                <script>
                    CKEDITOR.replace('chapter_editor', {
                        height: 400,
                        filebrowserUploadUrl: "upload.php",
                        filebrowserUploadMethod: 'form'
                    });
                </script>
            </div>

            <hr style="border-top: 2px solid #cf9c0a;">
            <h4 style="color: #273158; margin-bottom: 20px;">SEO & Meta Settings</h4>

            <div class="form-group mb-3">
                <label>Meta Title :</label>
                <input type="text" class="form-control" name="me_title" value="<?php echo htmlspecialchars($me_title); ?>">
            </div>

            <div class="form-group mb-3">
                <label>Meta Keywords :</label>
                <input type="text" class="form-control" name="me_keywords" value="<?php echo htmlspecialchars($me_keywords); ?>">
            </div>

            <div class="form-group mb-3">
                <label>Meta Description :</label>
                <textarea class="form-control" name="me_desc" rows="3"><?php echo htmlspecialchars($me_desc); ?></textarea>
            </div>

            <div class="form-group mb-3">
                <label>Chapter URL Slug :</label>
                <input type="text" class="form-control" name="blog_url" value="<?php echo htmlspecialchars($blog_url); ?>">
            </div>

            <div class="form-group mb-3">
                <label>Schema Markup :</label>
                <textarea class="form-control" name="schema_markup" rows="4"><?php echo $chapter_schema; ?></textarea>
            </div>

            <div class="text-center mt-5 mb-4">
                <input type="submit" name="submit" value="UPDATE CHAPTER NOW" style="background: #273158; color: #fff; padding: 15px 60px; font-weight: bold; border: none; border-radius: 5px; cursor: pointer; font-size: 18px;">
            </div>
          </form>

        </div>
      </div>
    </section>
  </div>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>