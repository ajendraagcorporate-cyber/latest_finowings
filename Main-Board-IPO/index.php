<?php
include("../DLL/config.php");
include("../DLL/functions.php");
//$id = $_REQUEST['i'];
$id = 7;
$categories = getallCategory();
$blogs = getcategoryBlog($id);
$category = getCategoryName($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Upcoming Main Board IPOs 2025 | Price, Listing Date, GMP and Status</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Best IPO Blogs" name="keywords">
    <meta content="Upcoming Mainboard IPO Updates 2025: Stay updated on latest IPOs with info like opening dates, valuations, and GMPs. Make wise investment choices with us." name="description">

    <!-- Performance: Resource Hints -->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="https://pagead2.googlesyndication.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
	
    <!-- Critical CSS: Bootstrap (Inline or Preload) -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"></noscript>

    <!-- Google Web Fonts (Optimized with font-display) -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"></noscript>

    <!-- Icon Font Stylesheet (Defer) -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"></noscript>
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"></noscript>

    <!-- Libraries Stylesheet (Defer) -->
    <link rel="preload" href="../lib/animate/animate.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="../lib/animate/animate.min.css" rel="stylesheet"></noscript>

    <!-- Customized Bootstrap Stylesheet (Critical) -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet (Critical) -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/new-css.css" rel="stylesheet">
	
    <!-- Page-Specific Styles (Inline for faster rendering) -->
    <style type="text/css">
        /* Scoped styles for Main-Board-IPO page only */
        .main-board-ipo-page {
            font-family: "Nunito", sans-serif;
        }
        
        /* Responsive AdSense Banner */
        .main-board-ipo-page .adsense-responsive {
            display: block;
            text-align: center;
            margin: 20px auto;
            max-width: 100%;
            overflow: hidden;
        }
        
        .main-board-ipo-page .adsense-responsive .adsbygoogle {
            display: block;
            width: 100%;
            max-width: 728px;
            height: 90px;
            margin: 0 auto;
        }
        
        @media (max-width: 768px) {
            .main-board-ipo-page .adsense-responsive .adsbygoogle {
                max-width: 100%;
                height: auto;
                min-height: 90px;
            }
        }
        
        @media (max-width: 480px) {
            .main-board-ipo-page .adsense-responsive .adsbygoogle {
                max-width: 100%;
                height: auto;
                min-height: 50px;
            }
        }
        
        /* Use same grid and card styles as homepage */
        .main-board-ipo-page #fw-custom-section {
            font-family: "Nunito", sans-serif;
            background-color: transparent;
        }
        
        .main-board-ipo-page #fw-custom-section .fw-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
            padding: 10px 0;
        }
        
        .main-board-ipo-page #fw-custom-section .fw-card {
            background: #fff;
            border: 1px solid #eef0f2;
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
            position: relative;
            will-change: transform;
        }
        
        .main-board-ipo-page #fw-custom-section .fw-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            border-color: #273158;
        }
        
        .main-board-ipo-page #fw-custom-section .fw-img-box {
            background-color: #e9f9ff;
            border-radius: 10px 10px 0 0;
            overflow: hidden;
            position: relative;
        }
        
        .main-board-ipo-page #fw-custom-section .fw-img-box img {
            width: 100%;
            height: auto;
            object-fit: contain;
            border: none;
            background-color: transparent;
            display: block;
        }
        
        .main-board-ipo-page #fw-custom-section .fw-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .main-board-ipo-page #fw-custom-section .fw-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        
        .main-board-ipo-page #fw-custom-section .fw-badge {
            background-color: #e9f9ff;
            color: #273158;
            font-size: 11px;
            font-weight: 800;
            padding: 5px 10px;
            border-radius: 5px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .main-board-ipo-page #fw-custom-section .fw-badge a {
            color: inherit;
            text-decoration: none;
        }
        
        .main-board-ipo-page #fw-custom-section .fw-price {
            font-size: 14px;
            color: #6c757d;
            font-weight: 600;
        }
        
        .main-board-ipo-page #fw-custom-section .fw-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #181d38;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            line-height: 1.3;
        }
        
        .main-board-ipo-page #fw-custom-section .fw-desc {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 15px;
            line-height: 1.5;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .main-board-ipo-page #fw-custom-section .fw-divider {
            border-top: 1px dashed #e0e0e0;
            margin: auto 0 15px 0;
            width: 100%;
        }
        
        .main-board-ipo-page #fw-custom-section .fw-btn {
            display: block;
            width: 100%;
            background-color: #273158;
            color: #fff !important;
            text-align: center;
            padding: 10px;
            border-radius: 8px;
            margin-top: 15px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .main-board-ipo-page #fw-custom-section .fw-btn:hover {
            background-color: #cf9c0a;
            color: #fff !important;
        }
        
        @media (max-width: 991px) {
            .main-board-ipo-page #fw-custom-section .fw-grid {
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                gap: 20px;
            }
        }
        
        @media (max-width: 768px) {
            .main-board-ipo-page #fw-custom-section .fw-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 15px;
            }
            
            .main-board-ipo-page #fw-custom-section .fw-title {
                font-size: 16px;
            }
        }
        
        @media (max-width: 576px) {
            .main-board-ipo-page #fw-custom-section .fw-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .main-board-ipo-page #fw-custom-section .fw-card {
                padding: 12px;
            }
        }
        
        /* Category Grid Responsive */
        .main-board-ipo-page .browsec-item {
            transition: transform 0.3s ease;
        }
        
        .main-board-ipo-page .browsec-item:hover {
            transform: translateY(-5px);
        }
        
        .main-board-ipo-page .browsec-item img {
            max-width: 100%;
            height: auto;
            transition: transform 0.3s ease;
        }
        
        .main-board-ipo-page .browsec-item:hover img {
            transform: scale(1.05);
        }
        
        .main-board-ipo-page .browsec-item h6 {
            font-size: 0.9rem;
            margin-top: 10px;
        }
        
        .main-board-ipo-page .browsec-item h6 a {
            color: #000000;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .main-board-ipo-page .browsec-item h6 a:hover {
            color: #273158;
        }
        
        @media (max-width: 576px) {
            .main-board-ipo-page .browsec-item h6 {
                font-size: 0.8rem;
            }
        }
        
        /* Section spacing responsive */
        @media (max-width: 767px) {
            .main-board-ipo-page .container-xxl {
                padding-top: 2rem !important;
                padding-bottom: 2rem !important;
            }
        }
        
        /* Performance: Optimize animations */
        @media (prefers-reduced-motion: reduce) {
            .main-board-ipo-page * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
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
    <!-- Navbar Ends -->

    <!-- Main Content Wrapper (Scoped) -->
    <div class="main-board-ipo-page">
 
        <!-- Trading Blogs Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <!-- Google Adsense Code - Responsive (Async) -->
                <div class="adsense-responsive">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4481710634198846" crossorigin="anonymous"></script>
                    <!-- Blog-Top-Banner -->
                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-4481710634198846"
                        data-ad-slot="3968038623"
                        data-ad-format="auto"
                        data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <!-- Google Adsense Code Ends -->
                
                <div class="text-center">
                    <h6 class="section-title bg-white text-center text-primary px-3">Blogs</h6>
                    <h1 class="mb-5">Main Board <?php echo htmlspecialchars($category, ENT_QUOTES, 'UTF-8'); ?></h1>
                </div>	
                   
                <div id="fw-custom-section" class="courses-section">
                    <div class="fw-grid">
                        <?php
                        // Initialize animation delay
                        $i = 0.1;
                        
                        while ($row = mysqli_fetch_array($blogs)) 
                        {
                            $id = $row['id'];
                            $title = $row['title'];
                            $count = strlen($title);
                            $short_title = substr($title, 0, 30);
                            $short_desc = $row['short_desc'];
                            $short_desc1 = substr($short_desc, 0, 120);
                            $desc = $row['content'];
                            $pic = $row['file'];
                            $updated_date = $row['updated_date'];
                            $cat = $row['cat_id'];
                            $cat_name = getCategoryName($cat);
                            $cat_name1 = str_replace(" ","-",$cat_name);
                            $updated_date = $row['created_date'];
                            $datetime = explode(" ", $updated_date);
                            $date = $datetime['0'];
                            $date1 = explode("-", $date);
                            $year = $date1['0'];
                            $month = $date1['1'];
                            $day = $date1['2'];	
                            $blog_url = $row['blog_url'];
                            
                            // Generate alt text for image
                            $img_alt = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
                            
                            // Ellipsis logic for title
                            $display_title = ($count < 31) ? $short_title : $short_title . "...";
                        ?>		
                        <div class="fw-card wow fadeInUp" data-wow-delay="<?php echo $i; ?>s">
                            <div class="fw-img-box">
                                <img loading="lazy" 
                                     decoding="async"
                                     src="../admin/media/<?php echo htmlspecialchars($pic, ENT_QUOTES, 'UTF-8'); ?>" 
                                     alt="<?php echo $img_alt; ?>"
                                     width="320"
                                     height="220">
                            </div>
                            <div class="fw-content">
                                <div class="fw-meta">
                                    <span class="fw-badge">
                                        <a href="blog-topics.php?i=<?php echo $cat; ?>">
                                            <?php echo htmlspecialchars($cat_name, ENT_QUOTES, 'UTF-8'); ?>
                                        </a>
                                    </span>
                                    <div class="fw-price" style="font-size: 14px; color: #6c757d; font-weight: 600;">
                                        <?php echo $day; ?>-<?php echo $month; ?>-<?php echo $year; ?>
                                    </div>
                                </div>
                                <h5 class="fw-title"><?php echo htmlspecialchars($display_title, ENT_QUOTES, 'UTF-8'); ?></h5>
                                <p class="fw-desc"><?php echo htmlspecialchars($short_desc1, ENT_QUOTES, 'UTF-8'); ?>...</p>
                                <div class="fw-divider"></div>
                                <a href="https://www.finowings.com/IPO/<?php echo htmlspecialchars($blog_url, ENT_QUOTES, 'UTF-8'); ?>" class="fw-btn">Continue Reading</a>
                            </div>
                        </div>
                        <?php
                            // Increment delay for next card
                            $i = $i + 0.1;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trading Blogs End -->

        <!-- Browse Category Start -->
        <!-- <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center">
                    <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                    <h2 class="mb-5">Browse Category</h2>
                </div>
                
                <div class="row g-4">
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="browsec-item text-center pt-3">
                            <div class="p-4">
                                <a href="../Finance/">
                                    <img src="../admin/media/Finance%20(3).png" alt="Finance" class="img-fluid mx-auto d-block" loading="lazy">
                                </a>
                                <br />
                                <h6 class="mb-1"><a href="../Finance/">Finance</a></h6>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="browsec-item text-center pt-3">
                            <div class="p-4">
                                <a href="../Stock/">
                                    <img src="../admin/media/Stock%20(4).png" alt="Stock" class="img-fluid mx-auto d-block" loading="lazy">
                                </a>
                                <br />
                                <h6 class="mb-1"><a href="../Stock/">Stock</a></h6>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="browsec-item text-center pt-3">
                            <div class="p-4">
                                <a href="../Investment/">
                                    <img src="../admin/media/Investment%20(1).png" alt="Investment" class="img-fluid mx-auto d-block" loading="lazy">
                                </a>
                                <br />
                                <h6 class="mb-1"><a href="../Investment/">Investment</a></h6>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="browsec-item text-center pt-3">
                            <div class="p-4">
                                <a href="../Trading/">
                                    <img src="../admin/media/Trading%20(1).png" alt="Trading" class="img-fluid mx-auto d-block" loading="lazy">
                                </a>
                                <br />
                                <h6 class="mb-1"><a href="../Trading/">Trading</a></h6>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="browsec-item text-center pt-3">
                            <div class="p-4">
                                <a href="../Corporate-Scams/">
                                    <img src="../admin/media/Corporate.png" alt="Corporate Scams" class="img-fluid mx-auto d-block" loading="lazy">
                                </a>
                                <br />
                                <h6 class="mb-1"><a href="../Corporate-Scams/">Corporate Scams</a></h6>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="browsec-item text-center pt-3">
                            <div class="p-4">
                                <a href="../Success-Story/">
                                    <img src="../admin/media/Success.png" alt="Success Story" class="img-fluid mx-auto d-block" loading="lazy">
                                </a>
                                <br />
                                <h6 class="mb-1"><a href="../Success-Story/">Success Story</a></h6>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="browsec-item text-center pt-3">
                            <div class="p-4">
                                <a href="../IPO/">
                                    <img src="../admin/media/IPO%20(3).png" alt="IPO" class="img-fluid mx-auto d-block" loading="lazy">
                                </a>
                                <br />
                                <h6 class="mb-1"><a href="../IPO/">IPO</a></h6>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="browsec-item text-center pt-3">
                            <div class="p-4">
                                <a href="../Wealth-Managment/">
                                    <img src="../admin/media/Wealtj%20mangement.png" alt="Wealth Management" class="img-fluid mx-auto d-block" loading="lazy">
                                </a>
                                <br />
                                <h6 class="mb-1"><a href="../Wealth-Managment/">Wealth Management</a></h6>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="browsec-item text-center pt-3">
                            <div class="p-4">
                                <a href="../Case-Study/">
                                    <img src="../admin/media/Case%20Study.png" alt="Case Study" class="img-fluid mx-auto d-block" loading="lazy">
                                </a>
                                <br />
                                <h6 class="mb-1"><a href="../Case-Study/">Case Study</a></h6>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3 wow fadeInUp" data-wow-delay="1.0s">
                        <div class="browsec-item text-center pt-3">
                            <div class="p-4">
                                <a href="../Crypto-Currency/">
                                    <img src="../admin/media/CryptoCurrency.png" alt="Crypto Currency" class="img-fluid mx-auto d-block" loading="lazy">
                                </a>
                                <br />
                                <h6 class="mb-1"><a href="../Crypto-Currency/">Crypto Currency</a></h6>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3 wow fadeInUp" data-wow-delay="1.1s">
                        <div class="browsec-item text-center pt-3">
                            <div class="p-4">
                                <a href="../Startups/">
                                    <img src="../admin/media/Startup%20(1).png" alt="Startups" class="img-fluid mx-auto d-block" loading="lazy">
                                </a>
                                <br />
                                <h6 class="mb-1"><a href="../Startups/">Startups</a></h6>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3 wow fadeInUp" data-wow-delay="1.2s">
                        <div class="browsec-item text-center pt-3">
                            <div class="p-4">
                                <a href="../Mutual-Fund/">
                                    <img src="../admin/media/Mutual%20Fund%20(1).png" alt="Mutual Fund" class="img-fluid mx-auto d-block" loading="lazy">
                                </a>
                                <br />
                                <h6 class="mb-1"><a href="../Mutual-Fund/">Mutual Fund</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Browse Category End -->
    </div>
    <!-- Main Content Wrapper End -->

    <!-- Footer Start -->
    <?php include("../footer.php"); ?> 
    <!-- Footer End -->

    <!-- JavaScript Libraries - Optimized (Defer/Async for Performance) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="../lib/wow/wow.min.js" defer></script>
    <script src="../lib/easing/easing.min.js" defer></script>
    <script src="../lib/waypoints/waypoints.min.js" defer></script>

    <!-- Template Javascript -->
    <script src="../js/main.js" defer></script>
    
    <!-- Page-Specific Scripts (Isolated & Optimized) -->
    <script>
        // Initialize after DOM and scripts are loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize WOW.js for animations (scoped to this page)
            if (typeof WOW !== 'undefined') {
                new WOW({
                    boxClass: 'wow',
                    animateClass: 'animated',
                    offset: 0,
                    mobile: true,
                    live: true
                }).init();
            }
            
            // Hide spinner once page is loaded
            var spinner = document.getElementById('spinner');
            if (spinner) {
                spinner.classList.remove('show');
            }
        });
        
        // Lazy load images fallback for older browsers
        if ('loading' in HTMLImageElement.prototype) {
            // Native lazy loading supported
        } else {
            // Fallback for browsers that don't support native lazy loading
            var script = document.createElement('script');
            script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js';
            script.async = true;
            document.body.appendChild(script);
        }
        
        // Performance: Preload critical resources
        if ('requestIdleCallback' in window) {
            requestIdleCallback(function() {
                // Preload next page resources if needed
            });
        }
    </script>

</body>

</html>
