<?php
include("../../../DLL/config.php");
include("../../../DLL/functions.php");
include("../../../pageview.php");
//$id = $_REQUEST['i'];
$id = 134;
$chapterdetail = getchapterDetails($id);
$chapterdetails = mysqli_fetch_array($chapterdetail);
$chapter_name =  $chapterdetails['chapter_name'];
$cont = $chapterdetails['content'];
$img = $chapterdetails['chapter_image'];
$topic_id = $chapterdetails['topic_id'];
$topic_name = getTopicname($topic_id);
$next_chapters = getnextChapters($topic_id, $id);
$nextchaptercount = getnextChaptersCount($topic_id, $id);
$me_title = $chapterdetails['me_title'];
$me_keywords = $chapterdetails['me_keywords'];
$me_desc = $chapterdetails['me_desc'];
$schema_markup = $chapterdetails['chapter_schema'];
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$page_url = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
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
  <link href="../../../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../../../css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="../../../css/style.css" rel="stylesheet">

  <style type="text/css">
    html {
      scroll-behavior: smooth;
    }

    .grid-container {
      display: grid;
      grid-template-columns: auto auto auto auto;
      font-family: system-ui, sans-serif;
      padding: 10px;

      /* this breaks position sticky in Firefox */
      /* overflow-x: hidden; */
    }

    navv {
      white-space: normal;
      width: 250px;
      background: #ffffff;
      padding-right: 20px;
    }

    navv ul {
      list-style: none;
      border-left: 1px solid #c9c9c9;
      margin: 0;
      padding: 0;
    }


    @media screen and (max-width: 600px) {
      navv {
        white-space: normal;
        display: none;
        width: 200px;
        background: #1593bd;
      }
    }


    /* Only stick if you can fit */
    @media (min-height: 100px) {


      navv ul {
        position: sticky;
        top: 0;
      }
    }

    navv ul li a {
      display: block;
      padding: 0.5rem 1rem;
      color: black;
      text-decoration: none;
      font-size: 16px;
    }

    navv ul li a.current {
      background: white;
      color: #000000;
      font-weight: bold;
      background: url(img/arrow.jpg) no-repeat;
    }

    main {
      padding-bottom: 10px;
    }

    section {
      padding: 30px 20px 0px;
      color: #000000;

    }
  </style>
  <!-- Blog Index Starts -->
  <style>
    .content-box {
      width: 300px;
      height: auto;
      background: #e9f9ff;
      color: #000000;
      text-align: left;
      float: left;
      margin: 0px 0px;
      margin-right: 20px;
      border: 1px solid black;
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
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-4">
    <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      <img src="../../../img/finowings-logo.png" />
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="/" class="nav-item nav-link">Home</a>
        <a href="../../../about-finowings/" class="nav-item nav-link">About Us</a>
        <a href="../../../finowings-academy/" class="nav-item nav-link active">Finowings Academy</a>
        <a href="../../../technical-analysis-courses/" class="nav-item nav-link">Courses</a>
        <!--<div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>-->
        <a href="../../../blog/" class="nav-item nav-link">Blog</a>
        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Events</a>
          <div class="dropdown-menu fade-down m-0">
            <a href="../../../financial-freedom-conclave/" class="dropdown-item">Financial Freedom Conclave 2022</a>

          </div>
        </div>
        <a href="../../../contact-us.php" class="nav-item nav-link">Contact</a>
      </div>
      <a href="../../../demat-accounts.php" class="btn btn-primary py-3 px-lg-5 d-none d-lg-block"><span style="font-size: 18px;">Open Demat Account</span><i class="fa fa-arrow-right ms-3"></i><br /><span style="font-size: 14px;">Unlimited Benefits*</span></a>
    </div>
  </nav>
  <!-- Navbar End -->
  <!-- Navbar Ends -->

  <!--<div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown"><?php echo $topic_name; ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            
                            <li class="breadcrumb-item text-white active" aria-current="page">Finowings Academy</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->




  <!-- Courses Section Start -->
  <!--Blog Section start-->
  <div class="container pt-5">
    <div class="row">

      <!--Left col start-->
      <div class="col-lg-9 col-md-9 col-sm-12 col-12">
        <div class="grid-container">

          <main>
            <h1><?php echo $chapter_name; ?></h1>
            <p style="font-size:12px; padding-left: 15px;"><button type="button" class="btn btn-light" style="padding:5px;"><a href="https://www.finowings.com/technical-analysis/">Technical Analysis</button>&nbsp;<button type="button" class="btn btn-light" style="padding:5px;"><img loading="lazy" src="https://www.finowings.com/img/views-icon.webp" style="width:20px; height:20px;" />&nbsp;<span style="font-size:14px;"><?php echo $total_views; ?></span></button></p>

            <!-- Table of Contents Starts -->
            <div class="content-box">
              <?php
              preg_match_all('#<h2.*?>(.*?)</h2>#i', $cont, $found);
              ?>
              <h4 style="padding-top:20px;">&nbsp;&nbsp;Table of Contents</h4>
              <ul>
                <?php
                foreach ($found[1] as $a) {
                ?>
                  <li style="font-size: 15px; font-weight:500; line-height:35px;"><a href="#"><?php echo $a; ?></a></li>
                <?php
                }
                ?>
              </ul>

            </div>
            <!-- Table of Contents Ends -->
            <div class="blog-content">
              <?php echo $cont; ?>
            </div>
            <br />
            <div align="center">
              <a class="btn btn-primary py-3 px-3 mt-2" href="../fibonacci-retracement-and-extensions/">Next Chapter >></a>
            </div>
            <br /><br />

            <div class="wow fadeInUp" data-wow-delay="0.1s" style="background: #e9f9ff; margin: 5px; padding: 10px 20px 20px;">
              <h3 style="padding-left:0px; margin-bottom: 15px;">Liked What You Just Read? Share this Post:</h3>
              <?php
              $share_url = urlencode($page_url);
              $share_title = urlencode($me_title);
              ?>
              <div style="display: flex; flex-wrap: wrap; gap: 10px; align-items: center;">
                <!-- WhatsApp -->
                <a href="https://api.whatsapp.com/send?text=<?php echo $share_title; ?>%20<?php echo $share_url; ?>" target="_blank" rel="noopener" style="display:inline-flex; align-items:center; gap:6px; background:#25D366; color:#fff; padding:8px 14px; border-radius:6px; text-decoration:none; font-size:14px; font-weight:600;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                  </svg>
                  WhatsApp
                </a>
                <!-- Facebook -->
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url; ?>" target="_blank" rel="noopener" style="display:inline-flex; align-items:center; gap:6px; background:#1877F2; color:#fff; padding:8px 14px; border-radius:6px; text-decoration:none; font-size:14px; font-weight:600;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                  </svg>
                  Facebook
                </a>
                <!-- Twitter / X -->
                <a href="https://twitter.com/intent/tweet?text=<?php echo $share_title; ?>&url=<?php echo $share_url; ?>" target="_blank" rel="noopener" style="display:inline-flex; align-items:center; gap:6px; background:#000; color:#fff; padding:8px 14px; border-radius:6px; text-decoration:none; font-size:14px; font-weight:600;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                  </svg>
                  X (Twitter)
                </a>
                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $share_url; ?>&title=<?php echo $share_title; ?>" target="_blank" rel="noopener" style="display:inline-flex; align-items:center; gap:6px; background:#0A66C2; color:#fff; padding:8px 14px; border-radius:6px; text-decoration:none; font-size:14px; font-weight:600;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                  </svg>
                  LinkedIn
                </a>
                <!-- Telegram -->
                <a href="https://t.me/share/url?url=<?php echo $share_url; ?>&text=<?php echo $share_title; ?>" target="_blank" rel="noopener" style="display:inline-flex; align-items:center; gap:6px; background:#229ED9; color:#fff; padding:8px 14px; border-radius:6px; text-decoration:none; font-size:14px; font-weight:600;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.568.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09" />
                  </svg>
                  Telegram
                </a>
              </div>
            </div>

          </main>

        </div>

      </div>
      <!--left col end-->

      <!--Right col start-->
      <div class="col-lg-3 col-md-3 col-sm-6 col-12" style="padding-top: 10px;">
        <div class="rightsidebar sticky-top">
          <h4 align="left">Next Chapters</h4>

          <?php
          if ($nextchaptercount < 1) {
          ?>
            <div class="row">
              <div class="col-lg-8 col-md-7 col-sm-8 col-8">
                <p align="left">No More Chapter! Now You are Eligible to Participate in Quiz.<br />
                  <a class="btn btn-primary mt-2" href="courses.php">Participate Now</a>
                </p>
              </div>
            </div>
            <?php
          } else {
            while ($r = mysqli_fetch_array($next_chapters)) {
              $id = $r['id'];
              $chapter_name = $r['chapter_name'];
              $alt_text = str_replace(" ", "-", $chapter_name);
              $img = $r['chapter_image'];
              $blog_url = $r['blog_url'];
            ?>
              <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-4 col-4"><img src="../../../admin/media/courseicons/<?php echo $img; ?>" alt="<?php echo $alt_text; ?>" class="img-fluid"></div>
                <div class="col-lg-8 col-md-7 col-sm-8 col-8">
                  <p align="left"><strong><a href="../<?php echo $blog_url; ?>" style="text-decoration: none; font-size:14px;"><?php echo $chapter_name; ?></a></strong><br />
                  </p>
                </div>
              </div>
          <?php
            }
          }
          ?>
          <br />
          <p><a href="https://www.finowings.com/course-links-count/technical-analysis-live-ctr-clicks.php" target="_blank"><img src="https://www.finowings.com/img/class-ctr-2.png" /></a></p>
          <br />
          <h4 align="left">Trending Blogs</h4>
          <br />
          <?php
          while ($r = mysqli_fetch_array($trendingblogs)) {
            $title = $r['title'];
            $cat_id = $r['cat_id'];
            $icon = $r['file'];
            $imgn = explode(".", $icon);
            $imgname = $imgn['0'];
            $cat_name = getCategoryName($cat_id);
            $cat_names = str_replace(" ", "-", $cat_name);
            if ($cat_names == 'SME-IPO') {
              $cat_name1 = 'IPO';
            } else {
              $cat_name1 = $cat_names;
            }
            $updated_date = $r['updated_date'];
            $datetime = explode(" ", $updated_date);
            $date = $datetime['0'];
            $date1 = explode("-", $date);
            $year = $date1['0'];
            $month = $date1['1'];
            $day = $date1['2'];
            $img_alttag = $r['img_alttag'];
            $blog_url = $r['blog_url'];
          ?>
            <div class="row">
              <div class="col-lg-4 col-md-5 col-sm-4 col-4"><img loading="lazy" src="https://www.finowings.com/admin/media/<?php echo $icon; ?>" alt="<?php if ($img_alttag != '') {
                                                                                                                                                        echo $img_alttag;
                                                                                                                                                      } else {
                                                                                                                                                        echo $imgname;
                                                                                                                                                      }  ?>" class="img-fluid"></div>

              <div class="col-lg-8 col-md-7 col-sm-8 col-8">
                <p align="left"><strong><a href="https://www.finowings.com/<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>" style="text-decoration: none;"><?php echo $title; ?></a></strong><br />
                  <span style="font-size: 12px;"><a href="https://www.finowings.com/<?php echo $cat_name1; ?>/" style="text-decoration: none; color: #333333;"><?php echo $cat_name; ?></a> | <?php echo $day; ?>-<?php echo $month; ?>-<?php echo $year; ?></span>
                </p>
              </div>
            </div>
          <?php
          }
          ?>


        </div>

      </div>
      <!--Right col end-->


      <!-- Courses Section End -->
    </div>
  </div>
  </div>

  <!-- Footer Start -->
  <?php include("footer.php"); ?>
  <!-- Footer End -->





  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../../lib/wow/wow.min.js"></script>
  <script src="../../../lib/easing/easing.min.js"></script>
  <script src="../../../lib/waypoints/waypoints.min.js"></script>
  <script src="../../../lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="../../../js/main.js"></script>

  <!--Scroll Box Script start-->
  <script>
    let mainNavLinks = document.querySelectorAll("navv ul li a");
    let mainSections = document.querySelectorAll("main section");

    let lastId;
    let cur = [];

    // This should probably be throttled.
    // Especially because it triggers during smooth scrolling.
    // https://lodash.com/docs/4.17.10#throttle
    // You could do like...
    // window.addEventListener("scroll", () => {
    //    _.throttle(doThatStuff, 100);
    // });
    // Only not doing it here to keep this Pen dependency-free.

    window.addEventListener("scroll", event => {
      let fromTop = window.scrollY;

      mainNavLinks.forEach(link => {
        let section = document.querySelector(link.hash);

        if (
          section.offsetTop <= fromTop &&
          section.offsetTop + section.offsetHeight > fromTop
        ) {
          link.classList.add("current");
        } else {
          link.classList.remove("current");
        }
      });
    });
  </script>
  <!--Scroll Box Script end-->



</body>

</html>