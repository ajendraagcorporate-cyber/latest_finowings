<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$con = $con; 

mysqli_set_charset($con, "utf8mb4");

include("../DLL/functions.php");

$search = isset($_REQUEST['search']) ? trim($_REQUEST['search']) : "";
$categories = getallCategory();

$pageno = isset($_GET['pageno']) ? (int)$_GET['pageno'] : 1;
if ($pageno < 1) $pageno = 1;
$no_of_records_per_page = 9;
$offset = ($pageno - 1) * $no_of_records_per_page;

$search_escaped = mysqli_real_escape_string($con, $search);

if (!empty($search)) {
    $count_sql = "SELECT COUNT(*) FROM blog WHERE (title LIKE '%$search_escaped%' OR short_desc LIKE '%$search_escaped%' OR content LIKE '%$search_escaped%') AND is_publish='Yes'";
    $query_sql = "SELECT * FROM blog WHERE (title LIKE '%$search_escaped%' OR short_desc LIKE '%$search_escaped%' OR content LIKE '%$search_escaped%') AND is_publish='Yes' ORDER BY created_date DESC LIMIT $offset, $no_of_records_per_page";
} else {
    $count_sql = "SELECT COUNT(*) FROM blog WHERE is_publish='Yes'";
    $query_sql = "SELECT * FROM blog WHERE is_publish='Yes' ORDER BY created_date DESC LIMIT $offset, $no_of_records_per_page";
}

$count_res = mysqli_query($con, $count_sql);
$total_rows = ($count_res) ? mysqli_fetch_array($count_res)[0] : 0;
$result = mysqli_query($con, $query_sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Search Results for <?php echo $search; ?> - Finowings</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Financial Blogs, Search Results" name="keywords">
    <meta content="Search results for <?php echo $search; ?> on Finowings." name="description">

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

    <style>
        .fw-blog-section-wrapper {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #181d38;
            padding-bottom: 50px;
            width: 100%;
        }

        /* --- Top Search Panel --- */
        .fw-top-panel {
            background: #E9F9FF;
            padding: 15px 0;
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 30px;
        }

        .fw-search-wrap {
            position: relative;
            width: 100%;
        }

        .fw-search-input {
            width: 100%;
            padding: 5px 20px;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            color: #181d38;
            font-size: 16px;
            outline: none;
            transition: all 0.3s ease;
        }

        .fw-search-input:focus {
            border-color: #cf9c0a;
            box-shadow: 0 4px 12px rgba(207, 156, 10, 0.1);
        }

        .fw-search-btn {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            background: none;
            color: #181d38;
            font-size: 18px;
            cursor: pointer;
        }

        .fw-cat-wrap {
            position: relative;
        }

        .fw-cat-select {
            width: 100%;
            padding: 5px 20px;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            color: #181d38;
            font-size: 16px;
            font-weight: 600;
            appearance: none;
            -webkit-appearance: none;
            cursor: pointer;
        }

        .fw-cat-wrap::after {
            content: '\f078';
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #181d38;
            pointer-events: none;
            font-size: 14px;
        }

        /* --- Blog Card Design --- */
        .fw-blog-card {
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            border: 1px solid transparent;
            text-decoration: none !important;
            background: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .fw-blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
            border-color: rgba(207, 156, 10, 0.3);
        }

        .fw-card-img {
            height: 220px;
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .fw-card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .fw-card-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .fw-meta {
            font-size: 13px;
            color: #cf9c0a;
            font-weight: 600;
            margin-bottom: 8px;
            text-transform: uppercase;
        }

        .fw-card-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #181d38;
            line-height: 1.4;
        }

        .fw-card-desc {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .fw-read-btn {
            margin-top: auto;
            color: #181d38;
            font-weight: 700;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .fw-read-btn:hover {
            color: #cf9c0a !important;
            gap: 10px;
        }

        /* Mobile Fix */
        @media (max-width: 768px) {
            .fw-top-panel .row {
                gap: 15px;
            }
        }
    </style>

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
                        <form method="get" action="blog-search.php">
                            <div class="fw-search-wrap">
                                <input type="text" class="fw-search-input" name="search" value="<?php echo $search; ?>" placeholder="Search blog...">
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
                                        $cat_id = (int)$cat_row['id'];
                                        if ($cat_id > 12) {
                                            continue;
                                        }
                                        $c_name = $cat_row['cat_name'];
                                        $c_link = str_replace(" ", "-", $c_name);
                                        if ($c_link == 'SME-IPO') {
                                            $c_link = 'IPO';
                                        }
                                        if ($c_link == 'Wealth-Management') {
                                            $c_link = 'Wealth-Managment';
                                        }
                                        echo '<option value="' . $c_link . '">' . $c_name . '</option>';
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

            <div class="mb-4">
                <h2 style="font-weight: 800; color: #181d38;">Search Results for: <span style="color: #cf9c0a;"><?php echo $search; ?></span></h2>
                <?php 
                if ($result) {
                    $result_count = mysqli_num_rows($result);
                    if ($result_count == 0) { ?>
                        <p>No blogs found matching your search criteria.</p>
                    <?php }
                } else { ?>
                    <p>Error executing search query.</p>
                <?php } ?>
            </div>

            <div class="row g-4">
                <?php
                if ($result) {
                    mysqli_data_seek($result, 0);
                    while ($row = mysqli_fetch_array($result)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $short_title = (strlen($title) > 50) ? substr($title, 0, 50) . "..." : $title;

                    $desc_text = strip_tags($row['short_desc']); // Clean HTML tags if any
                    $desc = substr($desc_text, 0, 110) . "...";

                    $pic = $row['file'];

                    // Category Logic
                    $cat_id = $row['cat_id'];
                    $cat_name = getCategoryName($cat_id);
                    $cat_link = str_replace(" ", "-", $cat_name);
                    if ($cat_link == 'SME-IPO') {
                        $cat_link = 'IPO';
                    }
                    if ($cat_link == 'Wealth-Management') {
                        $cat_link = 'Wealth-Managment';
                    }

                    $blog_url = $row['blog_url'];

                    // Date Logic
                    $dateArr = explode("-", explode(" ", $row['created_date'])[0]);
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
                                    Read More <i class="fas fa-arrow-right"></i>
                                </span>
                            </div>
                        </a>
                    </div>

                <?php 
                    }
                } ?>
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