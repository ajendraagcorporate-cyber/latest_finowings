<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con;

include("../DLL/functions.php");
$sliderpost1 = getblogsliderPost1();
$sliderposts  = getblogsliderPosts();
$categories   = getallCategory();
$trendingblogs = gettrendingBlogs();
$active_page  = 'blog';

// Pagination
$pageno = isset($_GET['pageno']) ? (int)$_GET['pageno'] : 1;
$no_of_records_per_page = 9;
$offset = ($pageno - 1) * $no_of_records_per_page;

// Total rows for pagination
if (!$con) {
    die("Database connection error: Connection variable \$con is not set.");
}

$count_sql = "SELECT COUNT(*) FROM blog WHERE (cat_id != 7 AND cat_id != 14) AND is_publish='Yes'";
$count_res  = mysqli_query($con, $count_sql);
if ($count_res) {
    $total_rows = (int)mysqli_fetch_array($count_res)[0];
} else {
    $total_rows = 0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Latest Financial Blogs Online</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Finance Blogs" name="keywords">
    <meta content="The Best Financial Blogs|read the best financial blogs regarding stocks, trading, investment, etc. Top Finance Blogs in India." name="description">
    <link rel="canonical" href="https://www.finowings.com/blog/" />

    <?php if (isset($_GET['pageno']) && $_GET['pageno'] > 1) {
        echo '<meta name="robots" content="noindex, follow">';
    } ?>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">

    <style type="text/css">
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
        .carousel-indicators li {
            /* background-color: #00abe9 !important; */
        }
        .carousel-indicators .active {
            /* background-color: #436bb1 !important; */
        }
        .main {
            width: 50%;
            margin: 0px auto;
        }
        .has-search .form-control {
            padding-left: 2.375rem;
        }
        .has-search .form-control-feedback {
            position: absolute;
            z-index: 2;
            display: block;
            width: 2.375rem;
            height: 2.375rem;
            line-height: 2.375rem;
            text-align: center;
            pointer-events: none;
            color: #aaa;
            border: 2px;
        }
        .pagination {
            justify-content: center !important;
        }
    </style>

    <!-- new css start  -->
    <style>
        .fw-blog-section-wrapper {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #181d38;
            padding-bottom: 50px;
            width: 100%;
        }
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
            padding: 5px 20px 5px 20px;
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
            transition: 0.3s;
        }
        .fw-cat-select:focus,
        .fw-cat-select:hover {
            border-color: #cf9c0a;
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
        .fw-hero-card {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            height: 100%;
            min-height: 300px;
            box-shadow: 0 10px 30px rgba(24, 29, 56, 0.15);
        }
        .fw-hero-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }
        .fw-hero-card:hover img {
            transform: scale(1.05);
        }
        .fw-hero-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, #181d38 0%, rgba(24, 29, 56, 0.7) 60%, transparent 100%);
            padding: 30px;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .fw-badge {
            background-color: #cf9c0a;
            color: white;
            padding: 6px 14px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 12px;
        }
        .fw-hero-title {
            font-size: 28px;
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 10px;
            color: white !important;
        }
        .fw-hero-desc {
            font-size: 14px;
            opacity: 0.9;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .fw-sidebar-tabs {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
        }
        .fw-tab-item {
            font-weight: 700;
            font-size: 18px;
            color: #aaa;
            cursor: pointer;
            padding-bottom: 8px;
            position: relative;
            user-select: none;
            transition: color 0.3s ease;
        }
        .fw-tab-item:hover {
            color: #181d38;
        }
        .fw-tab-item.active {
            color: #181d38;
        }
        .fw-tab-item.active::after {
            content: '';
            position: absolute;
            bottom: -12px;
            left: 0;
            width: 100%;
            height: 3px;
            background: #cf9c0a;
        }
        .fw-side-item {
            display: flex;
            align-items: center;
            padding: 12px;
            border-radius: 12px;
            margin-bottom: 15px;
            transition: transform 0.3s;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
            text-decoration: none !important;
        }
        .fw-side-item:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }
        .fw-side-img {
            width: 80px;
            height: 80px;
            border-radius: 10px;
            overflow: hidden;
            flex-shrink: 0;
            margin-right: 15px;
        }
        .fw-side-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .fw-side-info h5 {
            font-size: 15px;
            font-weight: 700;
            margin: 0 0 5px 0;
            line-height: 1.4;
            color: #181d38;
        }
        .fw-side-date {
            font-size: 12px;
            color: #888;
        }
        .fw-blog-card {
            border-radius: 16px;
            overflow: hidden;
            transition: box-shadow 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            border: 1px solid #181d38;
            text-decoration: none !important;
        }
        .fw-blog-card:hover {
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
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
            text-decoration: none !important;
        }
        .fw-read-btn:hover {
            color: #cf9c0a !important;
            gap: 10px;
        }
        .fw-pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 40px;
        }
        .fw-page-link {
            padding: 10px 18px;
            border-radius: 8px;
            background: #ffffff;
            color: #181d38;
            font-weight: 600;
            border: 1px solid #e0e0e0;
            transition: 0.3s;
            text-decoration: none !important;
        }
        .fw-page-link:hover,
        .fw-page-link.active {
            background: #cf9c0a;
            color: white !important;
            border-color: #cf9c0a;
        }
        .fw-page-link.disabled {
            opacity: 0.5;
            cursor: not-allowed;
            pointer-events: none;
        }
        .fw-cat-container {
            background: #ffffff;
            border-radius: 20px;
            padding: 40px 20px;
            text-align: center;
        }
        .fw-cat-box {
            background: #E9F9FF;
            border-radius: 12px;
            padding: 20px;
            transition: 0.3s;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 1px solid transparent;
            text-decoration: none !important;
        }
        .fw-cat-box:hover {
            background: #ffffff;
            border-color: #cf9c0a;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
            transform: translateY(-3px);
        }
        .fw-cat-box img {
            max-width: 50px;
            margin-bottom: 15px;
        }
        .fw-cat-box h6 {
            font-size: 15px;
            font-weight: 700;
            margin: 0;
            color: #181d38;
        }
        .fw-blog-section-wrapper a {
            text-decoration: none;
        }
        @media (max-width: 768px) {
            .fw-top-panel .row {
                gap: 15px;
            }
            .fw-hero-card {
                min-height: 300px;
                margin-bottom: 30px;
            }
            .fw-hero-title {
                font-size: 20px;
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
    <!-- new css end  -->

</head>

<body>

    <!-- Navbar Start -->
    <?php include("../top-navigation.php"); ?>
    <!-- Navbar End -->

    <!--Blog box start-->
    <div class="fw-blog-section-wrapper">

        <div class="fw-top-panel">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-8 col-md-7 col-12">
                        <form method="post" action="blog-search.php">
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
                            <select class="fw-cat-select" onchange="fwRedirectCategory(this)" style="color:#000 !important;background:#fff !important;border-color:#ddd !important;" aria-label="Filter blogs by category">
                                <option value="">All Categories</option>
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
                                            $c_link = 'ipo';
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

        <div class="container mb-5">
            <div class="row">

                <div class="col-lg-8 col-12">
                    <?php if ($sliderow = mysqli_fetch_array($sliderpost1)) {
                        $slidetitle = $sliderow['title'];
                        $slideimage = $sliderow['file'];
                        $slidedesc  = substr($sliderow['short_desc'], 0, 150) . "...";
                        $cat_id     = $sliderow['cat_id'];
                        $cat_name   = getCategoryName($cat_id);
                        $cat_link   = str_replace(" ", "-", $cat_name);
                        if ($cat_link == 'SME-IPO') {
                            $cat_link = 'IPO';
                        }
                        $blog_url = $sliderow['blog_url'];
                    ?>
                        <div class="fw-hero-card">
                            <a href="../<?php echo $cat_link; ?>/<?php echo $blog_url; ?>" aria-label="Read featured blog: <?php echo htmlspecialchars($slidetitle); ?>">
                                <img src="../admin/media/<?php echo $slideimage; ?>" alt="<?php echo htmlspecialchars($slidetitle); ?>">
                                <div class="fw-hero-overlay">
                                    <span class="fw-badge"><?php echo $cat_name; ?></span>
                                    <h2 class="fw-hero-title"><?php echo $slidetitle; ?></h2>
                                    <p class="fw-hero-desc"><?php echo $slidedesc; ?></p>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>

                <div class="col-lg-4 col-12 mt-4 mt-lg-0">
                    <div class="fw-sidebar-tabs" role="tablist">
                        <span class="fw-tab-item active" data-tab="trending" role="tab" id="trending-tab" aria-label="View trending blogs" aria-selected="true" aria-controls="trending-content" tabindex="0">Trending</span>
                        <span class="fw-tab-item" data-tab="recommended" role="tab" id="recommended-tab" aria-label="View recommended blogs" aria-selected="false" aria-controls="recommended-content" tabindex="0">Recommended</span>
                    </div>

                    <!-- Trending Content -->
                    <div class="fw-sidebar-list" id="trending-content" role="tabpanel" aria-labelledby="trending-tab" aria-hidden="false">
                        <?php
                        $count = 0;
                        if (mysqli_num_rows($sliderposts) > 0) {
                            mysqli_data_seek($sliderposts, 0);
                            while ($sliderow1 = mysqli_fetch_array($sliderposts)) {
                                if ($count >= 4) break;
                                $s_title    = substr($sliderow1['title'], 0, 45) . "...";
                                $s_img      = $sliderow1['file'];
                                $s_date     = explode(" ", $sliderow1['created_date'])[0];
                                $s_cat      = getCategoryName($sliderow1['cat_id']);
                                $s_cat_link = str_replace(" ", "-", $s_cat);
                                if ($s_cat_link == 'SME-IPO') {
                                    $s_cat_link = 'IPO';
                                }
                                $s_url = $sliderow1['blog_url'];
                        ?>
                                <a href="../<?php echo $s_cat_link; ?>/<?php echo $s_url; ?>" class="fw-side-item" aria-label="Read blog: <?php echo htmlspecialchars($s_title); ?>">
                                    <div class="fw-side-img">
                                        <img src="../admin/media/<?php echo $s_img; ?>" alt="<?php echo htmlspecialchars($s_title); ?>">
                                    </div>
                                    <div class="fw-side-info">
                                        <h5><?php echo $s_title; ?></h5>
                                        <span class="fw-side-date"><i class="far fa-clock" aria-hidden="true"></i> <?php echo $s_date; ?></span>
                                    </div>
                                </a>
                        <?php
                                $count++;
                            }
                        }
                        ?>
                    </div>

                    <!-- Recommended Content -->
                    <div class="fw-sidebar-list" id="recommended-content" style="display: none;" role="tabpanel" aria-labelledby="recommended-tab" aria-hidden="true">
                        <?php
                        $count = 0;
                        $has_recommended = false;
                        if ($trendingblogs && mysqli_num_rows($trendingblogs) > 0) {
                            mysqli_data_seek($trendingblogs, 0);
                            while ($trendrow = mysqli_fetch_array($trendingblogs)) {
                                if ($count >= 2) break;
                                $r_title    = substr($trendrow['title'], 0, 45) . "...";
                                $r_img      = $trendrow['file'];
                                $r_date     = explode(" ", $trendrow['created_date'])[0];
                                $r_cat      = getCategoryName($trendrow['cat_id']);
                                $r_cat_link = str_replace(" ", "-", $r_cat);
                                if ($r_cat_link == 'SME-IPO') {
                                    $r_cat_link = 'IPO';
                                }
                                $r_url = $trendrow['blog_url'];
                                $has_recommended = true;
                        ?>
                                <a href="../<?php echo $r_cat_link; ?>/<?php echo $r_url; ?>" class="fw-side-item" aria-label="Read recommended blog: <?php echo htmlspecialchars($r_title); ?>">
                                    <div class="fw-side-img">
                                        <img src="../admin/media/<?php echo $r_img; ?>" alt="<?php echo htmlspecialchars($r_title); ?>">
                                    </div>
                                    <div class="fw-side-info">
                                        <h5><?php echo $r_title; ?></h5>
                                        <span class="fw-side-date"><i class="far fa-clock" aria-hidden="true"></i> <?php echo $r_date; ?></span>
                                    </div>
                                </a>
                        <?php
                                $count++;
                            }
                        }
                        if (!$has_recommended) {
                            echo '<div class="fw-side-item" style="text-align: center; padding: 20px; color: #888;">No recommended blogs available at the moment.</div>';
                        }
                        ?>
                    </div>

                    <!--Google Adsense script Starts -->
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4481710634198846" crossorigin="anonymous"></script>
                    <!-- SideBar -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-4481710634198846"
                         data-ad-slot="1001592101"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                         (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    <!--Google Adsense script Ends-->
                </div>
            </div>
        </div>
        <!--Blog box end-->

        <div class="container py-4">
            <div class="row g-4">
                <?php
                $sql    = "SELECT * FROM blog WHERE (cat_id != 7 AND cat_id != 14) AND is_publish='Yes' ORDER BY created_date DESC LIMIT $offset, $no_of_records_per_page";
                $result = mysqli_query($con, $sql);

                if (!$result) {
                    $error_msg = mysqli_error($con);
                    echo '<div class="col-12"><p style="color: red; padding: 20px; background: #ffe6e6; border: 1px solid #ff9999; border-radius: 5px;">Database Error: ' . htmlspecialchars($error_msg) . '</p></div>';
                } else {
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            $title       = $row['title'];
                            $short_title = (strlen($title) > 50) ? substr($title, 0, 50) . "..." : $title;
                            $desc        = substr($row['short_desc'], 0, 110) . "...";
                            $pic         = $row['file'];
                            $cat         = getCategoryName($row['cat_id']);
                            $cat_link    = str_replace(" ", "-", $cat);
                            if ($cat_link == 'SME-IPO') {
                                $cat_link = 'IPO';
                            }
                            if ($cat_link == 'Wealth-Management') {
                                $cat_link = 'Wealth-Managment';
                            }
                            $blog_url      = $row['blog_url'];
                            $dateArr       = explode("-", explode(" ", $row['created_date'])[0]);
                            $formattedDate = $dateArr[2] . "-" . $dateArr[1] . "-" . $dateArr[0];
                ?>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <a href="../<?php echo $cat_link; ?>/<?php echo $blog_url; ?>" class="fw-blog-card" aria-label="Read blog post: <?php echo htmlspecialchars($title); ?>">
                                    <div class="fw-card-img">
                                        <img src="../admin/media/<?php echo $pic; ?>" alt="<?php echo htmlspecialchars($title); ?>">
                                    </div>
                                    <div class="fw-card-body">
                                        <div class="fw-meta">
                                            <?php echo $cat; ?> <span style="color:#ccc;" aria-hidden="true">|</span> <?php echo $formattedDate; ?>
                                        </div>
                                        <h3 class="fw-card-title"><?php echo $short_title; ?></h3>
                                        <p class="fw-card-desc"><?php echo $desc; ?></p>
                                        <span class="fw-read-btn">
                                            Continue Reading <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </a>
                            </div>
                <?php
                        }
                    } else {
                        echo '<div class="col-12"><p style="text-align: center; padding: 40px; color: #666;">No blog posts found.</p></div>';
                    }
                }
                ?>
            </div>

            <nav class="fw-pagination" aria-label="Blog pagination">
                <a href="?pageno=1" class="fw-page-link" aria-label="Go to first page">First</a>
                <a href="<?php echo ($pageno <= 1) ? '#' : '?pageno=' . ($pageno - 1); ?>" class="fw-page-link <?php if ($pageno <= 1) echo 'disabled'; ?>" aria-label="Go to previous page" <?php if ($pageno <= 1) echo 'aria-disabled="true"'; ?>>Prev</a>
                <a href="<?php echo ($pageno >= ceil($total_rows / $no_of_records_per_page)) ? '#' : '?pageno=' . ($pageno + 1); ?>" class="fw-page-link <?php if ($pageno >= ceil($total_rows / $no_of_records_per_page)) echo 'disabled'; ?>" aria-label="Go to next page" <?php if ($pageno >= ceil($total_rows / $no_of_records_per_page)) echo 'aria-disabled="true"'; ?>>Next</a>
                <a href="?pageno=<?php echo ceil($total_rows / $no_of_records_per_page); ?>" class="fw-page-link" aria-label="Go to last page">Last</a>
            </nav>

        </div>

        <!-- Footer Start -->
        <?php include("../footer.php"); ?>
        <!-- Footer End -->

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../lib/wow/wow.min.js"></script>
        <script src="../lib/easing/easing.min.js"></script>
        <script src="../lib/waypoints/waypoints.min.js"></script>
        <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="../js/main.js"></script>

        <script>
            jQuery(document).ready(function($) {
                // Initialize owl carousel if element exists
                if ($("#news-slider").length) {
                    $("#news-slider").owlCarousel({
                        items: 3,
                        itemsDesktop: [1199, 2],
                        itemsDesktopSmall: [980, 2],
                        itemsMobile: [600, 1],
                        pagination: false,
                        navigationText: false,
                        autoPlay: true
                    });
                }

                // Tab switching functionality
                $(document).on('click', '.fw-tab-item', function(e) {
                    e.preventDefault();
                    var tabType = $(this).data('tab');

                    $('.fw-tab-item').removeClass('active').attr('aria-selected', 'false');
                    $('#trending-content, #recommended-content').hide().attr('aria-hidden', 'true');
                    $(this).addClass('active').attr('aria-selected', 'true');

                    var $contentPanel = $('#' + tabType + '-content');
                    if ($contentPanel.length) {
                        $contentPanel.show().attr('aria-hidden', 'false');
                    }
                });
            });
        </script>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-PM9FG6WZ2K"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'G-PM9FG6WZ2K');
        </script>

</body>
</html>
