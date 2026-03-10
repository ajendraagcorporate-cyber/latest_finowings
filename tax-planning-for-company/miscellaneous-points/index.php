<?php
include("../../DLL/config.php");
include("../../DLL/functions.php");
//include("pageview.php");
//$id = $_REQUEST['i'];
$id = 86;
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
  <link href="../../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="../../css/style.css" rel="stylesheet">

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
  <style>
    /* Fix stretched images in blog content */
    .blog-content img {
      max-width: 100% !important;
      height: auto !important;
      width: auto !important;
      display: block;
      margin: 10px auto;
    }
  </style>
  <style>
    .right-header {
      position: -webkit-sticky;
      position: sticky;
      top: 100px;
      z-index: 10;
    }
  </style>
  <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=62db9addacbf2a0019029fc0&product=inline-reaction-buttons' async='async'></script>
  <!-- Blog Index Ends -->
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
  <?php include("../../finowings-academy/fino-top-navigation.php"); ?>
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
            <h2 align="center" style="font-size:32px; font-weight:500;"><?php echo $chapter_name; ?></h2>
            <br />
            <!-- Table of Contents Starts -->
            <div class="content-box">
              <?php
              preg_match_all('#<h2.*?>(.*?)</h2>#i', $cont, $found);
              $cont_with_ids = preg_replace_callback('#<h2.*?>(.*?)</h2>#i', function ($matches) {
                $id = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $matches[1]), '-'));
                return '<h2 id="' . $id . '">' . $matches[1] . '</h2>';
              }, $cont);
              ?>
              <h4 style="padding-top:20px;">&nbsp;&nbsp;Table of Contents</h4>
              <ul>
                <?php
                foreach ($found[1] as $a) {
                  $id = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $a), '-'));
                ?>
                  <li style="font-size: 15px; font-weight:500; line-height:35px;"><a href="#<?php echo $id; ?>"><?php echo $a; ?></a></li>
                <?php
                }
                ?>
              </ul>

            </div>
            <!-- Table of Contents Ends -->
            <div class="blog-content">
              <?php echo $cont_with_ids; ?>
            </div>
            <br />
            <div align="center">
              <a class="btn btn-primary py-3 px-3 mt-2" href="../types-of-income-tax-notices/">
                << Previous</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary py-3 px-3 mt-2" href="../summary/">Next >></a>
            </div>
            <br /><br />

            <div class="wow fadeInUp" data-wow-delay="0.1s" style="background: #e9f9ff; margin: 5px;">
              <br />
              <h3 style="padding-left:20px;">Liked What You Just Read? Share this Post:</h3>
              <br />
              <!-- ShareThis BEGIN -->
              <div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
              <br />
            </div>

          </main>

        </div>

      </div>
      <!--left col end-->

      <!--Right col start-->
      <div class="col-lg-3 col-md-3 col-sm-6 col-12" style="padding-top: 10px;">
        <div class="right-header">
          <div class="rightsidebar">
            <h4 align="left">Learn Stock Market For Free</h4>
            <iframe width="330" height="186" src="https://www.youtube.com/embed/Oop5AnndOgo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <br /><br />

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
                  <div class="col-lg-4 col-md-5 col-sm-4 col-4"><img src="../../admin/media/courseicons/<?php echo $img; ?>" alt="<?php echo $alt_text; ?>" class="img-fluid"></div>
                  <div class="col-lg-8 col-md-7 col-sm-8 col-8">
                    <p align="left"><strong><a href="../<?php echo $blog_url; ?>" style="text-decoration: none; font-size:14px;"><?php echo $chapter_name; ?></a></strong><br />
                    </p>
                  </div>
                </div>
            <?php
              }
            }
            ?>
            <br /><br />
            <h4>Twitter Updates</h4>

            <a class="twitter-timeline" data-width="350" data-height="600" data-theme="light" href="https://twitter.com/themukulagrawal?ref_src=twsrc%5Etfw">Tweets by themukulagrawal</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
          <br />


        </div>
      </div>
      <!--Right col end-->


      <!-- Courses Section End -->

    </div>
  </div>

  <!-- Footer Start -->
  <?php include("footer.php"); ?>
  <!-- Footer End -->





  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../lib/wow/wow.min.js"></script>
  <script src="../../lib/easing/easing.min.js"></script>
  <script src="../../lib/waypoints/waypoints.min.js"></script>
  <script src="../../lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="../../js/main.js"></script>

  <!--Scroll Box Script start-->
  <script>
    let mainNavLinks = document.querySelectorAll(".content-box ul li a");
    let mainSections = document.querySelectorAll(".blog-content h2");

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
        let hash = link.getAttribute('href');
        if (hash === '#') return;
        let section = document.querySelector(hash);

        if (
          section &&
          section.offsetTop <= fromTop &&
          section.offsetTop + document.documentElement.clientHeight > fromTop
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