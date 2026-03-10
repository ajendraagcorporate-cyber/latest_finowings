<?php
include('head.php');
include('config.php');

// सुरक्षित कनेक्शन और एन्कोडिंग फिक्स
if (isset($con)) {
    $link = $con;
}
mysqli_set_charset($link, "utf8mb4");

ini_set('display_errors', 1);
error_reporting(E_ALL);

$id = isset($_REQUEST['i']) ? mysqli_real_escape_string($link, $_REQUEST['i']) : 0;

$query = "SELECT * FROM blog where id='$id'";
$result = $link->query($query);
$row = $result ? $result->fetch_assoc() : null;

if (!$row) {
    die("<div class='alert alert-danger'>Error: Blog Record Not Found!</div>");
}

// डेटा लोड करना
$title = $row['title'];
$short_desc = $row['short_desc'];
$cat_id = $row['cat_id'];
$content = $row['content'];
$tags = $row['tags'];
$file = $row['file'];
$img_alttag = $row['img_alttag'];
$me_keywords = $row['me_keywords'];
$me_desc = $row['me_desc'];
$blog_url = $row['blog_url'];

// FAQ डेटा लोड करना
for ($i = 1; $i <= 10; $i++) {
    ${"faq$i"} = isset($row["faq$i"]) ? $row["faq$i"] : '';
    ${"ans$i"} = isset($row["ans$i"]) ? $row["ans$i"] : '';
}

$schema_markup = $row['schema_markup'];
$spotify_link = $row['spotify_link'];
$is_publish = $row['is_publish'];

// कैटेगरी का नाम
$cat_res = $link->query("SELECT cat_name FROM blog_category where id='$cat_id'");
$cat_data = $cat_res ? $cat_res->fetch_assoc() : null;
$cat_name = ($cat_data) ? $cat_data['cat_name'] : "Select Category";
?>

<body style="background: #FFFFFF; color: #000;">
    <div class="wrapper">

        <?php include('sidebar.php'); ?>

        <script src="tinymce/tinymce.min.js"></script>

        <style>
            .content-wrapper {
                background: #f4f6f9;
                padding: 20px;
            }

            .form-box {
                background: #fff;
                padding: 30px;
                border-radius: 10px;
                border: 1px solid #ddd;
                width: 95%;
                margin: auto;
            }

            .form-label {
                font-weight: bold;
                width: 150px;
                display: inline-block;
                color: #333;
            }

            .input-style {
                width: 70%;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            hr {
                border-top: 2px solid #cf9c0a;
                margin: 30px 0;
            }
        </style>

        <div class="content-wrapper">
            <div class="text-center mb-4">
                <h2 style="color: #273158; font-weight: bold;">Update Blog Post</h2>
            </div>

            <div class="form-box shadow-sm">
                <form method="post" action="editblog.php" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">

                    <p><span class="form-label">Title :</span>
                        <input type="text" class="input-style" name="title" value="<?php echo htmlspecialchars($title); ?>" required>
                    </p>

                    <p><span class="form-label">Short Desc :</span>
                        <input type="text" class="input-style" name="short_desc" value="<?php echo htmlspecialchars($short_desc); ?>" required>
                    </p>

                    <p><span class="form-label">Category :</span>
                        <select name="category" class="input-style" style="width: 300px;">
                            <option value="<?php echo $cat_id; ?>"><?php echo $cat_name; ?></option>
                            <?php
                            $all_cats = $link->query("SELECT * FROM blog_category");
                            while ($c = $all_cats->fetch_assoc()) {
                                echo "<option value='" . $c['id'] . "'>" . $c['cat_name'] . "</option>";
                            }
                            ?>
                        </select>
                    </p>

                    <p><span class="form-label">Post Content :</span><br><br>
                        <textarea name="editor1" class="advanced-editor"><?php echo $content; ?></textarea>
                    </p>

                    <p><span class="form-label">Tags :</span>
                        <input type="text" class="input-style" name="tags" value="<?php echo htmlspecialchars($tags); ?>" required>
                    </p>

                    <p><span class="form-label">Image :</span>
                        <input type="file" name="fileToUpload">
                        <?php if ($file) { ?> <img src="media/<?php echo $file; ?>" width="80" class="ml-2 border"> <?php } ?>
                    </p>

                    <hr>
                    <h4 style="color:#cf9c0a;">SEO & Meta Settings</h4>

                    <p><span class="form-label">Image alt Tag :</span>
                        <input type="text" class="input-style" name="img_alttag" value="<?php echo htmlspecialchars($img_alttag); ?>">
                    </p>

                    <p><span class="form-label">Meta Keywords :</span>
                        <input type="text" class="input-style" name="me_keywords" value="<?php echo htmlspecialchars($me_keywords); ?>">
                    </p>

                    <p><span class="form-label">Meta Description :</span><br>
                        <textarea name="me_desc" class="input-style" rows="4" style="width: 100%;"><?php echo htmlspecialchars($me_desc); ?></textarea>
                    </p>

                    <p><span class="form-label">Blog URL :</span>
                        <input type="text" class="input-style" name="blog_url" value="<?php echo htmlspecialchars($blog_url); ?>">
                    </p>

                    <hr>
                    <h4 style="color:#cf9c0a;">FAQ Section</h4>

                    <?php for ($j = 1; $j <= 10; $j++) { ?>
                        <div style="background:#f9f9f9; padding:15px; border:1px solid #eee; margin-bottom:20px;">
                            <p><span class="form-label">FAQ <?php echo $j; ?> :</span>
                                <input type="text" class="input-style" name="faq<?php echo $j; ?>" value="<?php echo htmlspecialchars(${"faq$j"}); ?>">
                            </p>

                            <p><span class="form-label">ANS <?php echo $j; ?> :</span><br>
                                <textarea name="ans<?php echo $j; ?>" class="advanced-editor"><?php echo ${"ans$j"}; ?></textarea>
                            </p>
                        </div>
                    <?php } ?>

                    <hr>
                    <p><span class="form-label">Schema Markup :</span><br>
                        <textarea name="schema_markup" class="input-style" rows="4" style="width:100%"><?php echo $schema_markup; ?></textarea>
                    </p>

                    <p><span class="form-label">Audio Link :</span>
                        <textarea name="spotify_link" class="input-style" rows="2" style="width:100%"><?php echo $spotify_link; ?></textarea>
                    </p>

                    <p><span class="form-label">Publish :</span>
                        <select name="publish" class="input-style" style="width: 200px;">
                            <option value="<?php echo $is_publish; ?>"><?php echo $is_publish; ?></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </p>

                    <div class="text-center mt-5 mb-5">
                        <input type="submit" name="submit" value="UPDATE BLOG NOW" style="background:#273158; height:50px; width:250px; color:#FFFFFF; font-weight:bold; border:none; border-radius:5px; cursor:pointer; font-size:18px;">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>

    <script>
        tinymce.init({
            selector: '.advanced-editor',
            convert_urls: false,
            relative_urls: false,
            remove_script_host: false,
            plugins: 'preview searchreplace autolink directionality code visualblocks visualchars fullscreen image link media table charmap pagebreak nonbreaking anchor insertdatetime lists wordcount emoticons',
            menubar: 'file edit view insert format tools table',
            toolbar: 'undo redo | bold italic underline | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | forecolor backcolor | table image media link | numlist bullist outdent indent | fullscreen code preview',
            height: 400,
            image_advtab: true,

            // सबसे ज़रूरी: ये 3 लाइनें आपके CSS, Table alignment और कलर्स को डिलीट होने से रोकेंगी
            valid_elements: '*[*]',
            extended_valid_elements: '*[*]',
            valid_children: '+body[style]',

            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
        });
    </script>

</body>

</html>