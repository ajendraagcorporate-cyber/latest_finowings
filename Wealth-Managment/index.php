<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con; 

if ($con) {
    mysqli_set_charset($con, "utf8mb4");
}

include("../DLL/functions.php");

$id = 8; 
$categories = getallCategory();
$blogs = getcategoryBlog($id);
$category = getCategoryName($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Best Blogs on wealth management and personal investment</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Wealth Management" name="keywords">
    <meta content="Read everything you must know about wealth management. Blogs on Child higher education, tax planning, Asset allocation and real estate investing." name="description">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/style.css" rel="stylesheet">

    <link href="../css/category.css" rel="stylesheet">

    <script>
        function fwRedirectCategory(selectObject) {
            var value = selectObject.value;
            if (value) {
                window.location.href = "../" + value + "/";
            }
        }
    </script>
</head>

<body>

    <?php include("../top-navigation.php"); ?>
    <div class="fw-blog-section-wrapper">

        <div class="fw-top-panel">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-7 col-12">
                        <form method="post" action="../blog/blog-search.php">
                            <div class="fw-search-wrap">
                                <input type="text" class="fw-search-input" name="search" placeholder="Search blog...">
                                <button type="submit" class="fw-search-btn">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="fw-cat-wrap">
                            <select class="fw-cat-select" onchange="fwRedirectCategory(this)" style="color:#000 !important;background:#fff !important;border-color:#ddd !important;">
                                <option value="">Browse Categories</option>
                                <?php
                                if (mysqli_num_rows($categories) > 0) {
                                    mysqli_data_seek($categories, 0);
                                    while ($cat_row = mysqli_fetch_array($categories)) {
                                        $cat_id_nav = (int)$cat_row['id'];
                                        if ($cat_id_nav > 12) {
                                            continue;
                                        }
                                        $c_name = $cat_row['cat_name'];
                                        $c_link = str_replace(" ", "-", $c_name);
                                        if ($c_link == 'SME-IPO') {
                                            $c_link = 'IPO';
                                        }
                                        if ($c_link == 'Wealth-Management') {
                                            $c_link = 'Wealth-Managment';
                                        } // Typo fix folder

                                        $selected = ($c_name == $category) ? 'selected' : '';
                                        echo '<option value="' . $c_link . '" ' . $selected . '>' . $c_name . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="text-center mb-5">
                <span style="color: #cf9c0a; font-weight: bold; text-transform: uppercase;">Category</span>
                <h1 style="font-weight: 800; color: #181d38;"><?php echo $category; ?> Blogs</h1>
            </div>

            <div class="row g-4">
                <?php
                while ($row = mysqli_fetch_array($blogs)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $short_title = (strlen($title) > 50) ? substr($title, 0, 50) . "..." : $title;

                    $short_desc = strip_tags($row['short_desc']);
                    $desc = substr($short_desc, 0, 110) . "...";

                    $pic = $row['file'];
                    $cat_id = $row['cat_id'];
                    $cat_name = getCategoryName($cat_id);
                    $cat_link = str_replace(" ", "-", $cat_name);
                    if ($cat_link == 'SME-IPO') {
                        $cat_link = 'IPO';
                    }
                    if ($cat_link == 'Wealth-Management') {
                        $cat_link = 'Wealth-Managment';
                    } // Typo fix here too

                    $blog_url = $row['blog_url'];

                    // Date Logic
                    $dateArr = explode("-", explode(" ", $row['updated_date'])[0]);
                    $formattedDate = $dateArr[2] . "-" . $dateArr[1] . "-" . $dateArr[0];
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <a href="../<?php echo $cat_link; ?>/<?php echo $blog_url; ?>" class="fw-blog-card">
                            <div class="fw-card-img">
                                <img src="../admin/media/<?php echo $pic; ?>" alt="<?php echo $title; ?>">
                            </div>
                            <div class="fw-card-body">
                                <div class="fw-meta">
                                    <?php echo $cat_name; ?> <span style="color:#ccc;">|</span> <?php echo $formattedDate; ?>
                                </div>
                                <h3 class="fw-card-title"><?php echo $short_title; ?></h3>
                                <p class="fw-card-desc"><?php echo $desc; ?></p>

                                <span class="fw-read-btn">
                                    Continue Reading <i class="fas fa-arrow-right"></i>
                                </span>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>



    </div>

    <?php include("../footer.php"); ?>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>

</body>

</html>