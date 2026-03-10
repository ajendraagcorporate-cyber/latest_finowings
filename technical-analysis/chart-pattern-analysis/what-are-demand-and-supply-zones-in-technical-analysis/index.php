<?php
include("../../../DLL/config.php");
include("../../../DLL/functions.php");
include("../../../pageview.php");

mysqli_set_charset($con, "utf8mb4");

$id = 139; 
$chapterdetail = getchapterDetails($id);
$chapterdetails = mysqli_fetch_array($chapterdetail); 
$chapter_name =  $chapterdetails['chapter_name'];

$cont = str_replace(array('Â', 'â€', 'â‚¹'), array('', '"', '₹'), $chapterdetails['content']); 

$img = $chapterdetails['chapter_image'];
$topic_id = $chapterdetails['topic_id'];
$topic_name = getTopicname($topic_id);
$next_chapters = getnextChapters($topic_id, $id);
$nextchaptercount = getnextChaptersCount($topic_id, $id);
$me_title = $chapterdetails['me_title']; 
$me_keywords = $chapterdetails['me_keywords'];
$me_desc = $chapterdetails['me_desc'];
$schema_markup = $chapterdetails['chapter_schema'];

$page_url = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];		
$total_views = getPageViews($page_url);	

$blog_id = 0; 
$trendingblogs = gettrendingRightBlogs($blog_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $me_title; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="<?php echo $me_keywords; ?>" name="keywords">
    <meta content="<?php echo $me_desc; ?>" name="description">

    <link rel="icon" type="image/png" href="/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/style.css" rel="stylesheet">
    
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=62db9addacbf2a0019029fc0&product=inline-reaction-buttons' async='async'></script>

    <style>
        html { scroll-behavior: smooth; }
        
        .blog-content img {
            max-width: 100% !important;
            height: auto !important;
            display: block;
            margin: 20px auto;
            border-radius: 10px;
        }

        main::after {
            content: "";
            display: table;
            clear: both;
        }

        .content-box {
            width: 300px; 
            height: auto; 
            background: #e9f9ff; 
            color: #000; 
            float: left; 
            margin-right: 20px; 
            margin-bottom: 20px;
            border: 1px solid #000;
            padding: 15px;
        }

        @media screen and (max-width: 768px) {
            .content-box { width: 100%; float: none; margin-right: 0; }
        }

        .rightsidebar.sticky-top { top: 20px; z-index: 100; }
        .btn-demat { background: #273158; color: #fff; border-radius: 5px; text-decoration: none; }
    </style>
</head>

<body>
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"></div>
    </div>

    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-4">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="../../../img/finowings-logo.png" alt="Logo" />
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="../../../about-finowings/" class="nav-item nav-link">About Us</a>
                <a href="../../../finowings-academy/" class="nav-item nav-link active">Finowings Academy</a>
                <a href="../../../technical-analysis-course/" class="nav-item nav-link">Courses</a>
                <a href="../../../blog/" class="nav-item nav-link">Blog</a>
                <a href="../../../contact-us.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="../../../demat-accounts.php" class="btn btn-primary py-3 px-lg-5 d-none d-lg-block">Open Demat Account</a>
        </div>
    </nav>

    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12">
                <main>
                    <h1><?php echo $chapter_name; ?></h1>
                    <p style="font-size:12px;">
                        <button class="btn btn-light btn-sm"><a href="/technical-analysis/">Technical Analysis</a></button>
                        <button class="btn btn-light btn-sm">
                            <img src="https://www.finowings.com/img/views-icon.webp" style="width:15px;" /> 
                            <span><?php echo $total_views; ?></span>
                        </button>
                    </p>

                    <div class="content-box shadow-sm">
                        <?php preg_match_all('#<h2.*?>(.*?)</h2>#i', $cont, $found); ?>
                        <h4 style="padding-top:10px;">Table of Contents</h4> 
                        <ul style="padding-left: 15px;">
                            <?php foreach ($found[1] as $a) { 
                                $clean_title = str_replace('Â', '', $a); 
                            ?>
                                <li style="font-size: 15px; font-weight:500; line-height:30px;"><a href="#"><?php echo $clean_title; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>

                    <div class="blog-content">
                        <?php echo $cont; ?>
                    </div>

                    <div style="clear: both; margin-top: 30px;" align="center">
                        <a class="btn btn-primary py-3 px-4" href="../guide-on-line-charts-in-stock-market"><< Previous</a>
                        &nbsp;&nbsp;
                        <a class="btn btn-primary py-3 px-4" href="../how-to-use-heikin-ashi-candlestick/">Next Chapter >></a>
                    </div>

                    <div class="wow fadeInUp" data-wow-delay="0.1s" style="background: #e9f9ff; padding: 25px; margin-top: 40px; border-radius: 10px;">
                        <h3>Liked What You Just Read? Share this Post:</h3>
                        <div class="sharethis-inline-share-buttons"></div>
                    </div>
                </main>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="rightsidebar sticky-top">
                    <h4>Next Chapters</h4>
                    <?php if($nextchaptercount < 1) { ?>
                        <p>No More Chapters! <br><a class="btn btn-primary btn-sm mt-2" href="courses.php">Take the Quiz</a></p>
                    <?php } else { 
                        while($r = mysqli_fetch_array($next_chapters)) { ?>
                            <div class="row mb-3">
                                <div class="col-4"><img src="../../../admin/media/courseicons/<?php echo $r['chapter_image']; ?>" class="img-fluid rounded shadow-sm"></div>
                                <div class="col-8"><strong><a href="../<?php echo $r['blog_url']; ?>" style="font-size:13px;"><?php echo $r['chapter_name']; ?></a></strong></div>
                            </div>
                    <?php } } ?>

                    <hr>
                    <h4>Trending Blogs</h4>
                    <?php while($r = mysqli_fetch_array($trendingblogs)) { ?>
                        <div class="row mb-3">
                            <div class="col-4"><img src="https://www.finowings.com/admin/media/<?php echo $r['file']; ?>" class="img-fluid rounded"></div>
                            <div class="col-8"><strong><a href="https://www.finowings.com/blog/<?php echo $r['blog_url']; ?>" style="font-size:12px;"><?php echo $r['title']; ?></a></strong></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <?php include("../../../footer.php"); ?> 

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../lib/wow/wow.min.js"></script>
    <script src="../../../js/main.js"></script>

    <script>
        document.querySelectorAll('.content-box a').forEach(el => {
            el.innerHTML = el.innerHTML.replace(/Â/g, '');
        });
    </script>
</body>
</html>