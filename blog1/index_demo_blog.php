<?php
include("../DLL/config.php");
include("../DLL/functions.php");
$sliderpost1 = getblogsliderPost1();
$sliderposts = getblogsliderPosts();
$categories = getallCategory();
$trendingblogs = gettrendingBlogs();
$active_page = 'blog';

//Pagignation

if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 9;
$offset = ($pageno - 1) * $no_of_records_per_page;


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

    <?php
    if (isset($_GET['pageno']) && $_GET['pageno'] > 1) {
        echo '<meta name="robots" content="noindex, follow">';
    }
    ?>


    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!--Bootstrap code-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!--Bootstrap code-->


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

    <!--Featured-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

    <style type="text/css">
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }

        .carousel-indicators li {
            background-color: #00abe9 !important;
        }

        .carousel-indicators .active {
            background-color: #436bb1 !important;
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

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->

    <?php include("../top-navigation.php"); ?>
    <!-- Navbar End -->



    <!--Blog box start-->

    <div id="demo" class="carousel slide" data-ride="carousel" style="background:#e9f9ff; color:#000000; padding:30px 0px;">

        <!-- Indicators -->
        <ul class="carousel-indicators" align="right">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">

            <!--blog 1 start-->
            <?php
            while ($sliderow = mysqli_fetch_array($sliderpost1)) {
                $id = $sliderow['id'];
                $slidetitle = $sliderow['title'];
                $slideimage = $sliderow['file'];
                $imgn = explode(".", $slideimage);
                $imgname = $imgn['0'];
                $slidedesc = $sliderow['short_desc'];
                $slidedesc1 = substr($slidedesc, 0, 500);
                $updated_date = $sliderow['created_date'];
                $datetime = explode(" ", $updated_date);
                $date = $datetime['0'];
                $date1 = explode("-", $date);
                $year = $date1['0'];
                $month = $date1['1'];
                $day = $date1['2'];
                $cat_id = $sliderow['cat_id'];
                $cat_name = getCategoryName($cat_id);
                $cat_names = str_replace(" ", "-", $cat_name);
                if ($cat_names == 'SME-IPO') {
                    $cat_name1 = 'IPO';
                } else {
                    $cat_name1 = $cat_names;
                }
                $img_alttag = $sliderow['img_alttag'];
                $blog_url = $sliderow['blog_url'];

            ?>
                <div class="carousel-item active">
                    <div class="container">

                        <div class="row">

                            <div class="col-lg-5 col-md-5 col-sm-6 col-12"><a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>"><img src="../admin/media/<?php echo $slideimage; ?>" alt="<?php if ($img_alttag != '') {
                                                                                                                                                                                                            echo $img_alttag;
                                                                                                                                                                                                        } else {
                                                                                                                                                                                                            echo $imgname;
                                                                                                                                                                                                        }  ?>" class="img-fluid mx-auto d-block"></a></div>
                            <!--<div class="col-lg-5 col-md-5 col-sm-6 col-12"><img src="img/dummy.jpg" class="img-fluid mx-auto d-block"></div>-->
                            <div class="col-lg-7 col-md-7 col-sm-6 col-12" style="padding-left: 20px; padding-top: 20px;">
                                <h2><a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>"><?php echo $slidetitle; ?></a></h2>
                                <p style="font-size:12px;"><a href="../<?php echo $cat_name1; ?>" style="text-decoration: none; color: #406ab2;"><?php echo $cat_name; ?></a> | <?php echo $day ?>.<?php echo $month ?>.<?php echo $year ?></p>
                                <p style="padding-bottom:10px;" align="justify"><?php echo $slidedesc1; ?>...</p>
                                <a class="btn btn-primary py-2 px-5 mb-5" href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>">Read More</a>
                            </div>

                        </div>


                    </div>
                </div>
            <?php
            }
            ?>
            <!--blog 1 end-->


            <!--blog 2 and 3 start-->
            <?php
            while ($sliderow1 = mysqli_fetch_array($sliderposts)) {
                $id = $sliderow1['id'];
                $slidetitle = $sliderow1['title'];
                $slideimage = $sliderow1['file'];
                $imgn = explode(".", $slideimage);
                $imgname = $imgn['0'];
                $slidedesc = $sliderow1['short_desc'];
                $slidedesc1 = substr($slidedesc, 0, 500);
                $updated_date = $sliderow1['created_date'];
                $datetime = explode(" ", $updated_date);
                $date = $datetime['0'];
                $date1 = explode("-", $date);
                $year = $date1['0'];
                $month = $date1['1'];
                $day = $date1['2'];
                $cat_id = $sliderow1['cat_id'];
                $cat_name = getCategoryName($cat_id);
                $cat_names = str_replace(" ", "-", $cat_name);
                if ($cat_names == 'SME-IPO') {
                    $cat_name1 = 'IPO';
                } else {
                    $cat_name1 = $cat_names;
                }
                $img_alttag = $sliderow1['img_alttag'];
                $blog_url = $sliderow1['blog_url'];
            ?>
                <div class="carousel-item">
                    <div class="container">

                        <div class="row">

                            <div class="col-lg-5 col-md-5 col-sm-6 col-12"><a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>"><img src="../admin/media/<?php echo $slideimage; ?>" alt="<?php if ($img_alttag != '') {
                                                                                                                                                                                                            echo $img_alttag;
                                                                                                                                                                                                        } else {
                                                                                                                                                                                                            echo $imgname;
                                                                                                                                                                                                        }  ?>" class="img-fluid mx-auto d-block"></a></div>
                            <!--<div class="col-lg-5 col-md-5 col-sm-6 col-12"><img src="img/dummy.jpg" class="img-fluid mx-auto d-block"></div>-->
                            <div class="col-lg-7 col-md-7 col-sm-6 col-12" style="padding-left: 20px; padding-top: 20px;">
                                <h2><a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>"><?php echo $slidetitle; ?></a></h2>
                                <p style="font-size:12px;"><a href="../<?php echo $cat_name1; ?>" style="text-decoration: none; color: #406ab2;"><?php echo $cat_name; ?></a> | <?php echo $day ?>.<?php echo $month ?>.<?php echo $year ?></p>
                                <p style="padding-bottom:10px;" align="justify"><?php echo $slidedesc1; ?>...</p>
                                <a class="btn btn-primary py-2 px-5 mb-5" href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>">Read More</a>
                            </div>

                        </div>


                    </div>
                </div>
            <?php
            }
            ?>
            <!--blog 2 and 3 end-->


        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <!--<a class="carousel-control-prev" href="#demo" data-slide="prev" style="background:#000000; width:40px; height:40px; padding:10px; border-radius:50%;  top:50%; margin-left:50px;">
<span class="carousel-control-prev-icon"></span>-->
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <!--<a class="carousel-control-next" href="#demo" data-slide="next" style="background:#000000; width:40px;  height:40px; border-radius:50%; padding:10px; top:50%; margin-right:50px;">
<span class="carousel-control-next-icon"></span>-->
        </a>
    </div>

    <!--Blog box end-->

    <!--Google Adsense Code Starts-->
    <div align="center">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4481710634198846" crossorigin="anonymous"></script>
        <!-- Blog-Top-Banner -->
        <ins class="adsbygoogle"
            style="display:inline-block;width:728px;height:auto;"
            data-ad-client="ca-pub-4481710634198846"
            data-ad-slot="3968038623"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
    <!--Google Adsense Code Ends-->


    <div class="main mt-2" align="right">

        <!-- Actual search box -->

        <!-- Another variation with a button -->
        <form method="post" action="blog-search.php">
            <div class="input-group">
                <input type="text" class="form-control" name="search" id="search" placeholder="Search Blog">
                <div class="btn btn-primary">
                    <input type="submit" name="submit" value="Search">

                </div>
            </div>
        </form>
    </div>




    <!--Trading Blogs Start-->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Blogs</h6>
                <h1 class="mb-3">Trending Blogs</h1>
            </div>




            <div class="row py-4">
                <!--
<div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
<div class="trading-blogs-box" style="background:#baf1cd;">
<img src="../admin/media/stock-market-today.webp" alt="stock-market-today" class="img-fluid mx-auto d-block">

<p style="font-size:14px;"><a href="../Trending" style="text-decoration: none; color: #406ab2;">Trending</a>
<h3 style="font-size:22px; font-weight:bold; color:#820000;">Stock Market Today</h3>

<p>Explore stock market today updates with Sensex and Nifty daily trends. Get today’s market rates, BSE and NSE data, and latest stock market movements.</p>

 <a class="btn btn-primary py-3 px-5 mt-2" href="https://www.finowings.com/stock-market-today/">Continue Reading</a>
</div>
</div>
-->

                <?php

                $total_pages_sql = "SELECT COUNT(*) FROM blog";
                $result = mysqli_query($con, $total_pages_sql);
                $total_rows = mysqli_fetch_array($result)[0];
                $total_pages = ceil($total_rows / $no_of_records_per_page);

                $sql = "SELECT * FROM blog where (cat_id != 7 and cat_id != 14) and is_publish='Yes' ORDER BY created_date desc LIMIT $offset, $no_of_records_per_page";
                $result = mysqli_query($con, $sql);
                $sno = $row + 1;

                while ($row = mysqli_fetch_array($result)) {
                    $id =     $row['id'];
                    $title = $row['title'];
                    $count = strlen("$title");
                    $short_title = substr($title, 0, 30);
                    $short_desc = $row['short_desc'];
                    $short_desc1 = substr($short_desc, 0, 120);
                    $desc = $row['content'];
                    $pic = $row['file'];
                    $imgn = explode(".", $pic);
                    $imgname = $imgn['0'];
                    $cat = $row['cat_id'];
                    $cat_name = getCategoryName($cat);
                    $cat_names = str_replace(" ", "-", $cat_name);
                    if ($cat_names == 'SME-IPO') {
                        $cat_name1 = 'IPO';
                    } else {
                        $cat_name1 = $cat_names;
                    }
                    $updated_date = $row['created_date'];
                    $datetime = explode(" ", $updated_date);
                    $date = $datetime['0'];
                    $date1 = explode("-", $date);
                    $year = $date1['0'];
                    $month = $date1['1'];
                    $day = $date1['2'];
                    $img_alttag = $row['img_alttag'];
                    $blog_url = $row['blog_url'];

                ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
                        <div class="trading-blogs-box">
                            <img src="../admin/media/<?php echo $pic; ?>" alt="<?php if ($img_alttag != '') {
                                                                                    echo $img_alttag;
                                                                                } else {
                                                                                    echo $imgname;
                                                                                }  ?>" class="img-fluid mx-auto d-block">
                            <!--<img src="img/dummy.jpg" class="img-fluid mx-auto d-block">-->
                            <p style="font-size:14px;"><a href="../<?php echo $cat_name1; ?>" style="text-decoration: none; color: #406ab2;"><?php echo $cat_name; ?></a> | <?php echo $day; ?>-<?php echo $month; ?>- <?php echo $year; ?></p>
                            <?php
                            if ($count < 31) {
                            ?>
                                <h3 style="font-size:22px; font-weight:bold;"><?php echo $short_title; ?></h3>
                            <?php
                            } else {
                            ?>
                                <h3 style="font-size:22px; font-weight:bold;"><?php echo $short_title; ?>...</h3>
                            <?php
                            }
                            ?>
                            <p> <?php echo $short_desc1; ?>...</p>

                            <!--<a href="blog-topic.php?i=<?php //echo $id; 
                                                            ?>" class="btn btn-info btn-block" style="font-size:16px;">Continue Reading</a>-->
                            <a class="btn btn-primary py-3 px-5 mt-2" href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>">Continue Reading</a>
                        </div>
                    </div>
                <?php
                }

                ?>

            </div>
        </div>

        <ul class="pagination">
            <li><a href="?pageno=1" class="btn btn-primary mx-2" style="background-color: #cf9c0a !important;">First</a></li>
            <li class="<?php if ($pageno <= 1) {
                            echo 'disabled';
                        } ?>">
                <a href="<?php if ($pageno <= 1) {
                                echo '#';
                            } else {
                                echo "?pageno=" . ($pageno - 1);
                            } ?>" class="btn btn-primary mx-2" style="background-color: #cf9c0a !important;">Prev</a>
            </li>
            <li class="<?php if ($pageno >= $total_pages) {
                            echo 'disabled';
                        } ?>">
                <a href="<?php if ($pageno >= $total_pages) {
                                echo '#';
                            } else {
                                echo "?pageno=" . ($pageno + 1);
                            } ?>" class="btn btn-primary mx-2" style="background-color: #cf9c0a !important;">Next</a>
            </li>
            <li><a href="?pageno=<?php echo $total_pages; ?>" class="btn btn-primary mx-2" style="background-color: #cf9c0a !important;">Last</a></li>
        </ul>

    </div>
    <!--Trading Blogs end-->



    <!-- Browse Category Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                <h2 class="mb-5">Browse Category</h2>
            </div>

            <div class="row g-4">

                <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../Finance/"><img src="../admin/media/Finance%20(3).png" alt="Finance" class="img-fluid mx-auto d-block"></a>
                            <br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../Finance/" style="color:#000000; text-decoration:none;">Finance</a></h6>

                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../Stock/"><img src="../admin/media/Stock%20(4).png" alt="Stock" class="img-fluid mx-auto d-block"></a>
                            <br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../Stock/" style="color:#000000; text-decoration:none;">Stock</a></h6>

                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../Investment/"><img src="../admin/media/Investment%20(1).png" alt="Stock" class="img-fluid mx-auto d-block"></a>
                            <br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../Investment/" style="color:#000000; text-decoration:none;">Investment</a></h6>

                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../Trading/"><img src="../admin/media/Trading%20(1).png" alt="Stock" class="img-fluid mx-auto d-block"></a>
                            <br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../Trading/" style="color:#000000; text-decoration:none;">Trading</a></h6>

                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../Corporate-Scams/"><img src="../admin/media/Corporate.png" alt="Stock" class="img-fluid mx-auto d-block"></a>
                            <br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../Corporate-Scams/" style="color:#000000; text-decoration:none;">Corporate Scams</a></h6>

                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../Success-Story/"><img src="../admin/media/Success.png" alt="Stock" class="img-fluid mx-auto d-block"></a>
                            <br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../Success-Story/" style="color:#000000; text-decoration:none;">Success Story</a></h6>

                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../IPO/"><img src="../admin/media/IPO%20(3).png" alt="Stock" class="img-fluid mx-auto d-block"></a>
                            <br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../IPO/" style="color:#000000; text-decoration:none;">IPO</a></h6>

                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../Wealth-Managment/"><img src="../admin/media/Wealtj%20mangement.png" alt="Stock" class="img-fluid mx-auto d-block"></a>
                            <br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../Wealth-Managment/" style="color:#000000; text-decoration:none;">Wealth Management</a></h6>

                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../Case-Study/"><img src="../admin/media/Case%20Study.png" alt="Stock" class="img-fluid mx-auto d-block"></a>
                            <br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../Case-Study/" style="color:#000000; text-decoration:none;">Case Study</a></h6>

                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="1.0s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../Crypto-Currency/"><img src="../admin/media/CryptoCurrency.png" alt="Stock" class="img-fluid mx-auto d-block"></a>
                            <br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../Crypto-Currency/" style="color:#000000; text-decoration:none;">Crypto Currency</a></h6>

                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="1.1s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../Startups/"><img src="../admin/media/Startup%20(1).png" alt="Stock" class="img-fluid mx-auto d-block"></a>
                            <br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../Startups/" style="color:#000000; text-decoration:none;">Startups</a></h6>

                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="1.2s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../Mutual-Fund/"><img src="../admin/media/Mutual%20Fund%20(1).png" alt="Stock" class="img-fluid mx-auto d-block"></a>
                            <br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../Mutual-Fund/" style="color:#000000; text-decoration:none;">Mutual Fund</a></h6>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Browse Category End -->






    <!-- Footer Start -->
    <?php include("../footer.php"); ?>
    <!-- Footer End -->





    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>


    <!--Jquery Script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Jquery Script-->

    <!--Testimonial-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#news-slider").owlCarousel({
                items: 3,
                itemsDesktop: [1199, 2],
                itemsDesktopSmall: [980, 2],
                itemsMobile: [600, 1],
                pagination: false,
                navigationText: false,
                autoPlay: true
            });
        });
    </script>

    <!--Client Testimonial Scripts start-->

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