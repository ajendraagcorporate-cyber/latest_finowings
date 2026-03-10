<?php
include('head.php');
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con; 


mysqli_set_charset($link, "utf8mb4");
?>

<body class="hold-transition dark-mode sidebar-mini layout-fixed">
<div class="wrapper">

    <?php include('sidebar.php'); ?>

    <script src="ckeditor/ckeditor.js"></script>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid text-center">
                <h2 style="color: #cf9c0a; font-weight: bold;">Add New Study Chapter</h2>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card p-4 shadow" style="background: #FFFFFF; color: #000; border-radius: 10px; width: 95%; margin: auto;">
                    
                    <form method="post" action="addfreestudychapter.php" enctype="multipart/form-data">
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label><b>Choose Topic :</b></label>
                                <select class="form-control" name="topic" required>
                                    <option value="">-- Select Topic --</option>
                                    <?php
                                    $topics = $link->query("SELECT * FROM freestudytopic ORDER BY topic ASC");
                                    while($t = $topics->fetch_assoc()) {
                                        echo "<option value='".$t['id']."'>".$t['topic']."</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label><b>Chapter Name :</b></label>
                                <input type="text" class="form-control" name="chapter_name" placeholder="Enter Chapter Name" required>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label><b>Upload Chapter Image :</b></label>
                            <input type="file" name="fileToUpload" class="form-control-file" required>
                        </div>

                        <div class="form-group mb-4">
                            <label><b>Chapter Content :</b></label>
                            <textarea name="content" id="chapter_editor" rows="10"></textarea>
                            <script>
                                CKEDITOR.replace('chapter_editor', {
                                    height: 400,
                                    placeholder: 'Start writing your chapter content here...'
                                });
                            </script>
                        </div>

                        <hr style="border-top: 2px solid #cf9c0a;">
                        <h4 style="color: #273158; margin-bottom: 20px;">SEO & Meta Settings</h4>

                        <div class="form-group mb-3">
                            <label>Meta Title :</label>
                            <input type="text" class="form-control" name="me_title" placeholder="SEO Title">
                        </div>

                        <div class="form-group mb-3">
                            <label>Meta Keywords :</label>
                            <input type="text" class="form-control" name="me_keywords" placeholder="Keywords separated by commas">
                        </div>

                        <div class="form-group mb-3">
                            <label>Meta Description :</label>
                            <textarea class="form-control" name="me_desc" rows="3" placeholder="Brief description for Google Search"></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label>Chapter URL Slug :</label>
                            <input type="text" class="form-control" name="blog_url" placeholder="e.g. basics-of-finance">
                        </div>

                        <div class="text-center mt-5 mb-4">
                            <input type="submit" name="submit" value="SAVE & ADD CHAPTER" style="background: #273158; color: #fff; padding: 15px 60px; font-weight: bold; border: none; border-radius: 5px; cursor: pointer; font-size: 18px;">
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