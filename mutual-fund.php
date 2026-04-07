<?php
session_start();
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
    ob_start('ob_gzhandler');
else ob_start();
?>
<?php
$tid = 7;
include("DLL/config.php");
include("DLL/functions.php");
$sliderfi = getSliderFI();
$client = getClients();
$workshop = getWorkshops();
$webinar = getWebinars();
$student = getStudents();
$upwebinar = getupcomingWebinar();
$featured = getFeaturedin();
$freestudyintro = getfreestudyIntro();
$freestudytopic = getfreestudyTopic();
$testimonials1 = getTestimonials1();
$testimonials2 = getTestimonials2();
$blogs = getMutualFundBlogs();
$chaptersF = getChaptersF($tid);
$active_page = 'mutual-fund';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Best Mutual Funds To Invest In 2026 | SIP & Lumpsum Investment</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="mutual funds, mutual funds in 2026, index funds, sip investment, mutual fund investment, mutual funds to invest in, best mutual funds, best sip to invest, top mutual funds, best mutual fund to invest now, best Lumpsum to invest" name="keywords">
    <meta content="Invest in the Best Mutual Funds in 2026 with Zero commission and Zero Extra charges for the Bright Future. Start with Just 100 Rs, Start Investing Now!" name="description">
    <link rel="canonical" href="https://www.finowings.com/mutual-fund.php" />

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

    <!-- Bootstrap CSS
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->

    <!-- Google Web Fonts
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">-->
    <link href="css/fonts.css" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/new-css.css" rel="stylesheet">

    <script src="js/submit.js"></script>
    <script src="js/popup-submit.js"></script>

    <!--Fonts links start For Automatic Popup 
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">

  <!--Fonts links end For Automatic Popup -->


    <style type="text/css">
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }

        video {
            width: 100%;
            height: auto;
        }

        #error_message {
            margin-bottom: 20px;
            background: #fe8b8e;
            padding: 0px;
            text-align: center;
            font-size: 14px;
            transition: all 0.5s ease;
        }

        .carousel-indicators li {
            background-color: #f96903 !important;
            /*list-style-image: url('../img/light-blue.png') !important;*/
        }

        .carousel-indicators .active {
            background-color: #273158 !important;
            /*list-style-image: url('../img/dark-blue.png') !important;*/
        }


        .carousel-inner .btn {
            width: 100%;
            max-width: 150px;
            position: absolute;
            top: 75%;
            left: 26%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: #00abe9;
            color: #FFFFFF;
            font-size: 16px;
            padding: 16px 30px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
        }

        .carousel-inner .btn a {
            width: 100%;
            max-width: 150px;
            color: #FFFFFF;
            text-decoration: none;
        }

        .carousel-inner .btn:hover {
            background-color: #436bb2;
            color: white;
        }

        @media (max-width: 480px) {
            .carousel-inner .btn {
                display: none;
            }
        }

        /*.carousel-inner .btn12 {
  position: absolute;
  width:100%;
  background: url(../img/join-youtube.png);
  top: 42%;
  left: 20%;
  }


@media (max-width: 480px) {
  .carousel-inner .btn12 {
    display: none;
  }
}*/
    </style>


    <style type="text/css">
        .pop-up-box {
            width: 100%;
            height: auto;
            display: block;
            border: 5px solid #273057;
            background: #FFFFFF;
            text-align: center;
            margin-top: 20%;
        }

        .pop-up-box {
            width: 100%;
            height: auto;
            display: block;
            text-align: center;
        }

        .pop-heading-text {
            font-family: 'Playfair Display', serif;
        }

        .pop-sub-itelic {
            font-family: 'Playfair Display', serif;
        }

        .pop-sub-normal {
            font-family: 'Playfair Display', serif;
        }

        .personal-font {
            font-family: 'Poppins', sans-serif;
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
    <?php include("top-navigation.php"); ?>
    <!-- Navbar End -->


    <?php //include("slider.php"); 
    ?>

    <!--Slider start-->
    <div id="demo" class="carousel slide" data-ride="carousel" data-interval="1500" style="z-index:20;">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <!--<li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
	<li data-target="#demo" data-slide-to="3"></li>
	<li data-target="#demo" data-slide-to="4"></li>-->
        </ol>


        <!-- The slideshow -->
        <div class="carousel-inner">

            <div class="carousel-item active">
                <a href="https://www.finowings.com/buy-best-mutual-fund/"><img src="img/apply-for-mutual-funds.webp" alt="Mutual-Fund" class="img-fluid mx-auto d-block"></a>
            </div>


        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <!--<span class="carousel-control-prev-icon"></span>-->
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <!--<span class="carousel-control-next-icon"></span>-->
        </a>
    </div>
    <!--Slider end-->



    <!--Category Related Blogs Start-->
    <section id="fw-custom-section">
        <div class="container py-5">
            <!--Google Adsense Code Starts-->
            <div align="center">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4481710634198846" crossorigin="anonymous"></script>
                <!-- Blog-Top-Banner -->
                <ins class="adsbygoogle"
                    style="display:inline-block;width:728px;height:90px"
                    data-ad-client="ca-pub-4481710634198846"
                    data-ad-slot="3968038623"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <!--Google Adsense Code Ends-->
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Mutual Fund</h6>
                <h2 class="mb-5">Recent Blogs</h2>
            </div>

            <div class="fw-grid">

                <?php
                $i = 0.1;
                while ($row = mysqli_fetch_array($blogs)) {
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
                    $updated_date = $row['updated_date'];
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

                    $display_title = ($count < 31) ? $short_title : $short_title . "...";
                ?>
                    <div class="fw-card wow fadeInUp" data-wow-delay="<?php echo $i; ?>s">
                        <div class="fw-img-box">
                            <img loading="lazy" src="https://www.finowings.com/admin/media/<?php echo $pic; ?>" alt="<?php if ($img_alttag != '') {
                                                                                                                                echo $img_alttag;
                                                                                                                            } else {
                                                                                                                                echo $imgname;
                                                                                                                            }  ?>">
                        </div>
                        <div class="fw-content">
                            <div class="fw-meta">
                                <span class="fw-badge">
                                    <a href="../<?php echo $cat_name1; ?>" style="color: inherit; text-decoration: none;">
                                        <?php echo $cat_name; ?>
                                    </a>
                                </span>
                                <div class="fw-price" style="font-size: 14px; color: #6c757d; font-weight: 600;">
                                    <?php echo $day; ?>-<?php echo $month; ?>-<?php echo $year; ?>
                                </div>
                            </div>

                            <h5 class="fw-title"><?php echo $display_title; ?></h5>

                            <p class="fw-desc"><?php echo $short_desc1; ?>...</p>

                            <div class="fw-divider"></div>

                            <a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>" class="fw-btn">Continue Reading</a>
                        </div>
                    </div>
                <?php
                    $i = $i + 0.1;
                }
                ?>

            </div>
        </div>
    </section>
    <!--Category Related Blogs end-->



    <!-- Courses Section Start -->
    <section id="fw-custom-section">
        <div class="container py-5">
            <!--Google Adsense Code Starts-->
            <div align="center">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4481710634198846" crossorigin="anonymous"></script>
                <!-- Blog-Top-Banner -->
                <ins class="adsbygoogle"
                    style="display:inline-block;width:728px;height:90px"
                    data-ad-client="ca-pub-4481710634198846"
                    data-ad-slot="3968038623"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <!--Google Adsense Code Ends-->
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Concept</h6>
                <h1 class="mb-5">All About Mutual Fund</h1>
            </div>

            <div class="fw-grid">

                <?php
                while ($r = mysqli_fetch_array($chaptersF)) {
                    $id = $r['id'];
                    $name = $r['chapter_name'];
                    $alt_text = str_replace(" ", "-", $name);
                    $image = $r['chapter_image'];
                    $blog_url = $r['blog_url'];
                    $i = 0.1;
                ?>

                    <div class="fw-card wow fadeInUp" data-wow-delay="<?php echo $i; ?>s">
                        <div class="fw-img-box">
                            <img loading="lazy" src="../../admin/media/courseicons/<?php echo $image; ?>" alt="<?php echo $alt_text; ?>">
                        </div>
                        <div class="fw-content">
                            <!-- <h5 class="fw-title">Title here</h5> -->
                            <!-- Description is not available in the loop, so omitted -->

                            <div class="fw-divider"></div>

                            <a href="../../mutual-fund-vs-etfs/<?php echo $blog_url; ?>" class="fw-btn"><?php echo $name; ?></a>
                        </div>
                    </div>
                <?php
                    $i = $i + 0.1;
                }
                ?>

            </div>
        </div>
    </section>
    <!-- Courses Section End -->




    <!-- Courses First Row Start 
     <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Giving Wings to your Finance</h6>
                <h1 class="mb-5">Mutual Fund</h1>
            </div>
            <div class="row g-4 justify-content-center">
			
			
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="course-item"   style="border:0.5px solid #273158 !important;">
                        <div class="position-relative overflow-hidden">
						
						                        <div class="btn btn-primary py-3 px-5 mt-0" style="width:100%;">
                            <a style="font-size:16px; color:#FFFFFF; font-weight:bold; text-decoration:none;">Based on Organisation Structure</a>
                        </div>
						
                            <div align="center" style="padding:10px;"><img class="img-fluid" src="img/organization-structure.png" /></div>
                            <div class="w-100 d-flex justify-content-left position-absolute bottom-0 start-0 mb-4">
							
                            </div>
							 <p style="padding:20px;">As the name suggests, this is open i.e these are mutual fund schemes that allow investors to buy or sell units at any point of time at the prevailing NAV(Net Asset Value)...</p> 
							 
							 <div class="btn btn-primary py-3 px-5 mt-0" style="width:100%; background:#4a6cb4 !important;">
                            <a style="font-size:16px; color:#FFFFFF; font-weight:bold; text-decoration:none;">Read More</a>
                        </div>
                        </div>
						

			            
                    </div>
                </div>
				
				 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="course-item"   style="border:0.5px solid #273158 !important;">
                        <div class="position-relative overflow-hidden">
						
						                        <div class="btn btn-primary py-3 px-5 mt-0" style="width:100%;">
                            <a style="font-size:16px; color:#FFFFFF; font-weight:bold; text-decoration:none;">Based on Asset Classes</a>
                        </div>
						
                            <div align="center" style="padding:10px;"><img class="img-fluid" src="img/asset-classes-1.png" /></div>
                            <div class="w-100 d-flex justify-content-left position-absolute bottom-0 start-0 mb-4">
							
                            </div>
							 <p style="padding:20px;">Mutual fund schemes known as equity funds mostly invest in stocks or equity shares of businesses. By taking advantage of the stock market's growth potential, they hope to produce...</p> 
							 
							 <div class="btn btn-primary py-3 px-5 mt-0" style="width:100%; background:#4a6cb4 !important;">
                            <a style="font-size:16px; color:#FFFFFF; font-weight:bold; text-decoration:none;">Read More</a>
                        </div>
						
                        </div>
						

			            
                    </div>
                </div>
				
				 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="course-item"   style="border:0.5px solid #273158 !important;">
                    
                        <div class="position-relative overflow-hidden">
						
						                        <div class="btn btn-primary py-3 px-5 mt-0" style="width:100%;">
                            <a style="font-size:16px; color:#FFFFFF; font-weight:bold; text-decoration:none;">Based on Investment Objectives</a>
                        </div>
						
                           <div align="center" style="padding:10px;"><img class="img-fluid" src="img/investment-objectives.png" /></div>
                            <div class="w-100 d-flex justify-content-left position-absolute bottom-0 start-0 mb-4">
							
                            </div>
							 <p style="padding:20px;">These are mutual fund schemes that invest in securities that have a high potential for capital appreciation over the long term. They are suitable for investors who are looking for wealth creation...</p> 
							 
							 <div class="btn btn-primary py-3 px-5 mt-0" style="width:100%; background:#4a6cb4 !important;">
                            <a style="font-size:16px; color:#FFFFFF; font-weight:bold; text-decoration:none;">Read More</a>
                        </div>
						
                        </div>
						

			            
                    </div>
                </div>
			     
				
            </div>
        </div>
    </div>
    <!-- MF First Row End -->


    <!-- MF Second Row Start 
     <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 justify-content-center">
			
			
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="course-item" style="border:0.5px solid #273158 !important;">
                        <div class="position-relative overflow-hidden">
						
						                        <div class="btn btn-primary py-3 px-5 mt-0" style="width:100%;">
                            <a style="font-size:16px; color:#FFFFFF; font-weight:bold; text-decoration:none;">Based on Portfolio Management</a>
                        </div>
						
                            <div align="center" style="padding:10px;"><img class="img-fluid" src="img/portfolio-management.png" /></div>
                            <div class="w-100 d-flex justify-content-left position-absolute bottom-0 start-0 mb-4">
							
                            </div>
							 <p style="padding:20px;">Investing in and selling particular assets is how fund managers actively manage the portfolio in active funds. These funds are intended to seek higher returns through active...</p>
							 
							 <div class="btn btn-primary py-3 px-5 mt-0" style="width:100%; background:#4a6cb4 !important;">
                            <a style="font-size:16px; color:#FFFFFF; font-weight:bold; text-decoration:none;">Read More</a>
                        </div>
                        </div>
						

			            
                    </div>
                </div>
				
				 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="course-item" style="border:0.5px solid #273158 !important;">
                        <div class="position-relative overflow-hidden">
						
						                        <div class="btn btn-primary py-3 px-5 mt-0" style="width:100%;">
                            <a style="font-size:16px; color:#FFFFFF; font-weight:bold; text-decoration:none;">Based on Speciality</a>
                        </div>
						
                           <div align="center" style="padding:10px;"><img class="img-fluid" src="img/speciality.png" /></div>
                            <div class="w-100 d-flex justify-content-left position-absolute bottom-0 start-0 mb-4">
							
                            </div>
							 <p style="padding:20px;">These funds place at least 80% of their total assets in companies operating in a certain industry. For instance, a sectoral fund might only invest in the automotive, information technology...</p>
                        <div class="btn btn-primary py-3 px-5 mt-0" style="width:100%; background:#4a6cb4 !important;">
                            <a style="font-size:16px; color:#FFFFFF; font-weight:bold; text-decoration:none;">Read More</a>
                        </div>
						
                        </div>
						

			            
                    </div>
                </div>
				
				 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="course-item" style="border:0.5px solid #273158 !important;">
                        <div class="position-relative overflow-hidden">
						
						                        <div class="btn btn-primary py-3 px-5 mt-0" style="width:100%;">
                            <a style="font-size:16px; color:#FFFFFF; font-weight:bold; text-decoration:none;">Based on Risk Appetite</a>
                        </div>
						
                              <div align="center" style="padding:10px;"><img class="img-fluid" src="img/Risk-Appetite.png" /></div>
                            <div class="w-100 d-flex justify-content-left position-absolute bottom-0 start-0 mb-4">
							
                            </div>
							 <p style="padding:20px;">As the name suggests, this is open i.e these are mutual fund schemes that allow investors to buy or sell units at any point of time at the prevailing NAV(Net Asset Value)... </p>
							 
							 <div class="btn btn-primary py-3 px-5 mt-0" style="width:100%; background:#4a6cb4 !important;">
                            <a style="font-size:16px; color:#FFFFFF; font-weight:bold; text-decoration:none;">Read More</a>
                        </div>
						
                        </div>
						

			            
                    </div>
                </div>
			     
				
            </div>
        </div>
    </div>
    <!-- MF Second Row End -->



    <!-- <div align="center"><a class="btn btn-primary py-3 px-5 mt-2" href="courses.php">View All Courses</a></div>
	
	
	
	    <!-- Section 13: Contact Start -->
    <style>
        @media (max-width: 768px) {
            #fw-custom-contact .info-content {
                display: none !important;
            }

            #fw-custom-contact .col-lg-8 {
                display: none !important;
            }

            .mobile-contact-btn {
                display: block !important;
                text-align: center;
                background: #273158;
                color: #fff;
                padding: 12px;
                margin-top: 15px;
                border-radius: 5px;
                text-decoration: none;
                font-weight: 700;
            }

            .mobile-contact-btn:hover {
                background: #cf9c0a;
                color: #fff;
            }
        }

        @media (min-width: 769px) {
            .mobile-contact-btn {
                display: none;
            }
        }
    </style>
    <section id="fw-custom-contact" class="py-5">
        <div class="container-xxl">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="info-card">
                            <div class="info-content">
                                <div class="info-item">
                                    <div class="icon-box">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="info-text">
                                        <h6>Call Us 24/7</h6>
                                        <a href="tel:9708094321">+91-970-8094-321</a>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="icon-box">
                                        <i class="fa fa-envelope-open"></i>
                                    </div>
                                    <div class="info-text">
                                        <h6>Make A Quote</h6>
                                        <a href="mailto:info@finowings.com">info@finowings.com</a>
                                    </div>
                                </div>

                                <div class="info-item">
                                    <div class="icon-box">
                                        <i class="fa fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info-text">
                                        <h6>Location</h6>
                                        <p>C-1, Bank of Baroda, Sector-M, Mama Chauraha, Kursi Road, Lucknow</p>
                                    </div>
                                </div>
                            </div>
                            <div class="map-container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.27310086481!2d80.9547765!3d26.894826499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfdaf218e1115%3A0x4a5fcfe97266b5ac!2sFinowings%20Training%20Academy%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1767935983637!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>

                            <a href="contact-us.php" class="mobile-contact-btn">
                                Contact Us <i class="fa fa-arrow-right module-contact-icon"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="form-header">
                            <h2>Send Our Message</h2>
                        </div>
                        <form id="myform" method="post">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="name">Your Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="email">Your Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="phone">Your Phone *</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="+91 **********">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="enquiry_type">Select Query *</label>
                                    <select class="form-control" id="enquiry_type">
                                        <option value="" disabled selected>Select Topic</option>
                                        <option>Technical Analysis Classes</option>
                                        <option>Mentor Support</option>
                                        <option>Portfolio Review</option>
                                        <option>Retirement Planning</option>
                                        <option>Mutual Fund</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="city">Your City</label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="Your City">
                                </div>
                                <div class="col-12 form-group">
                                    <label for="message">Message *</label>
                                    <textarea class="form-control" id="message" name="message" placeholder="Write a message here ..."></textarea>
                                </div>
                                <div class="col-12 mt-2">
                                    <button type="button" id="submitFormData" onclick="SubmitFormData();" class="btn btn-submit">
                                        Send Message <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                                <div class="col-12 mt-3">
                                    <div id="error_message"></div>
                                    <div id="results" class="text-center" style="color: #273158; font-size:16px; font-weight: 500;"></div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->

    <!-- Auto Popup Script Starts  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="background:none; border:none;">
                <div class="modal-body" style="background:none; padding:0px;">

                    <div class="close-btn"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="float:right; margin-top:20%;"></button></div>




                    <div class="container  gx-0">
                        <div class="row gx-0">
                            <div class="col-lg-12 col-12">
                                <div class="pop-up-box">


                                    <div class="row">
                                        <div class="col-lg-5 col-sm-5 col-12 mb-3"><img src="img/demat-account-popup.jpeg" class="d-none d-sm-block" style="border-radius:0px 0px 30px 0px"></div>
                                        <div class="col-lg-7 col-sm-7 col-12">
                                            <!--<h5 class="pop-sub-itelic" style="padding-right:15px; font-size:18px; font-weight:bold; padding-top:10px;"><i>Hey! Do you want to earn money from Stock Market?</i></h5>-->
                                            <h5 style="font-weight:700; font-size:22px; padding-top:30px;" class="pop-heading-text">Open Demat Account With Us!</h5>
                                            <h6 style="padding-top:20px; font-size:30px; line-height:45px;">Get <br><span style="font-size:36px; color:#cf9c0a;">3 Free Strategy <br /></span>worth <span style="color:#008000;">Rs. 15,000</span></h6>
                                            <h6 style="padding-top:30px; font-size:22px;">Also Get Entry in <span style="color:#cf9c0a;">Trader's Club</span></h6>

                                            <!--<h5 class="pop-sub-normal" style="font-size:18px;">Plus Unlimited updates of Stock Market</h5>-->
                                        </div>
                                    </div>



                                    <form id="popupform" method="post">
                                        <div class="row pop-sub-normal" style="padding:10px;">

                                            <div class="col-lg-3 col-12">
                                                <div class="form-group">
                                                    <input type="name" class="form-control" placeholder="Full Name" id="pname" name="pname" style="border-radius:20px; border:2px solid #233355; text-align:center; color:#000000; font-size:20px;">
                                                </div>
                                            </div>


                                            <div class="col-lg-3 col-12">
                                                <div class="form-group">
                                                    <input type="phone" class="form-control my-font-sub-heading" placeholder="Phone Number" id="pphone" name="pphone" style="border-radius:20px; border:2px solid #233355; text-align:center; color:#000000; font-size:20px;">
                                                </div>
                                            </div>
                                            <br /><br />
                                            <div class="col-lg-3 col-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control my-font-sub-heading" placeholder="City" id="pcity" name="pcity" style="border-radius:20px; border:2px solid #233355; text-align:center; color:#000000; font-size:20px;">
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control my-font-sub-heading" placeholder="Email" id="pemail" name="pemail" style="border-radius:20px; border:2px solid #233355; text-align:center; color:#000000; font-size:20px;">
                                                </div>
                                            </div>

                                            <div class="mx-auto d-block mt-3">
                                                <button type="submit" class="btn personal-font" id="submitPopupFormData" onclick="SubmitPopupFormData();" style="background:#203455; color:#FFFFFF; padding:2px 30px; font-size:20px; font-weight:bold; border-radius:25px;">OPEN NOW</button>
                                            </div>

                                            <div id="results" align="center" style="color: #406ab2; font-size:16px; font-weight: 500;">
                                                <!-- All data will display here  -->
                                            </div>


                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>




    <!-- Auto Popup Script Starts 
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content" style="background:none; border:none;">
<div class="modal-body" style="background:none; padding:0px;">

<div class="close-btn"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="float:right; margin-top:20%;"></button></div>      




<div class="container  gx-0">

<div class="pop-up-box">

<img src="img/happy-new-year.webp" width="100%" height="100%" />

</div>
</div>



</div>
</div>
</div>
</div>
<!-- Auto Popup Script Ends -->


    <!-- Auto Popup Script Starts 
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content" style="background:none; border:none;">
<div class="modal-body" style="background:none; padding:0px;">

<div class="close-btn"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="float:right; margin-top:20%;"></button></div>      




<div class="container">
<div class="row gx-0">
<div class="pop-up-box">

<a href="https://www.finowings.com/technical-analysis-course/"><img src="https://www.finowings.com/img/Navratri-Class-Offer.png" class="img-fluid mx-auto d-block" /></a>

</div>
</div>

<form id="popupform" method="post">
<div class="row gx-0 pop-sub-normal">

<div class="col" >
<div class="form-group">
<input type="name" class="form-control" placeholder="Full Name" id="pname" name="pname" style="border-radius:20px; border:2px solid #233355; text-align:center; color:#000000; font-size:20px;">
</div>
</div>


<div class="col" >
<div class="form-group">
<input type="phone" class="form-control my-font-sub-heading" placeholder="Phone Number" id="pphone" name="pphone" style="border-radius:20px; border:2px solid #233355; text-align:center; color:#000000; font-size:20px;">
</div>
</div>



<div class="col">
<div class="form-group">
<input type="text" class="form-control my-font-sub-heading" placeholder="City" id="pcity" name="pcity" style="border-radius:20px; border:2px solid #233355; text-align:center; color:#000000; font-size:20px;">
</div>
</div>

<div class="col">
<div class="form-group">
<input type="email" class="form-control my-font-sub-heading" placeholder="Email" id="pemail" name="pemail" style="border-radius:20px; border:2px solid #233355; text-align:center; color:#000000; font-size:20px;">
</div>
</div>

<div class="mx-auto d-block mt-3" align="center">
<button type="submit" class="btn personal-font" id="submitPopupFormData" onclick="SubmitPopupFormData();" style="background:#d41234; color:#FFFFFF; padding:2px 30px; font-size:20px; font-weight:bold; border-radius:25px;">ENQUIRE NOW</button>
</div>

  <div id="results" align="center" style="color: #406ab2; font-size:16px; font-weight: 500;">
									<!-- All data will display here  
						</div>		
	
</div>

</form>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Auto Popup Script Ends -->






    <!-- Footer Start -->
    <?php include("footer.php"); ?>
    <!-- Footer End -->



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


    <!--Pop Box script
<script>
var myModal = new bootstrap.Modal(document.getElementById("exampleModal"));
setTimeout(() => myModal.show(), 5000);
</script>
<!--Pop Box script-->

</body>

</html>