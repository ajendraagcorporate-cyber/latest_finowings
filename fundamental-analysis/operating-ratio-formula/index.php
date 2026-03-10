<?php
include("../../DLL/config.php");
include("../../DLL/functions.php");
include("../../pageview.php");
//$id = $_REQUEST['i'];
$id = 26;
$chapterdetail = getchapterDetails($id);
$chapterdetails = mysqli_fetch_array($chapterdetail);
$chapter_name =  $chapterdetails['chapter_name'];
$cont = $chapterdetails['content'];
$img = $chapterdetails['chapter_image'];
$topic_id = $chapterdetails['topic_id'];
$topic_name = getTopicname($topic_id);
$next_chapters = getnextChapters($topic_id, $id);
$nextchaptercount = getnextChaptersCount($topic_id, $id);
$host = $_SERVER['HTTP_HOST'];
if (strpos($host, 'www.') !== 0) {
  $host = 'www.' . $host;
}
$page_url = "https://" . $host . $_SERVER['REQUEST_URI'];
$total_views = getPageViews($page_url);
$blog_id = 0;
$trendingblogs = gettrendingRightBlogs($blog_id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Active operating ratio analysis of company to Make double ROI</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Operating Ratio Analysis" name="keywords">
  <meta content="Learn Active operating ratio analysis from the expert to get the best return of your investment and minimize the chances of losses " name="description">

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

  <!-- Quiz Stylesheet 
    <link href="../../css/chapterquizstyle.css" rel="stylesheet">-->

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
  <!-- Blog Index Ends -->
  <style>
    .right-header {
      position: -webkit-sticky;
      position: sticky;
      top: 0;
    }
  </style>
  <style type="text/css">
    .pop-up-box {
      width: 100%;
      height: auto;
      display: block;
      background: transparent;
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

  <style>
    .my-quiz-btn {
      width: 300px;
      background: #273158;
      color: #FFFFFF;
      padding: 5px 40px;
      margin: 0 auto;
      text-align: center;
      font-size: 20px;
    }

    .my-quiz-btn:hover {
      background: #cf9c0a;
    }
  </style>
  <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=62db9addacbf2a0019029fc0&product=inline-reaction-buttons' async='async'></script>
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
  <?php include("../../top-navigation.php"); ?>
  <!-- Navbar End -->


  <!--Blog Section start-->
  <div class="container pt-5">
    <div class="row">

      <!--Left col start-->
      <div class="col-lg-9 col-md-9 col-sm-12 col-12">
        <div class="grid-container">

          <main>
            <h1><?php echo $chapter_name; ?></h1>
            <p style="font-size:12px; padding-left: 15px;"><button type="button" class="btn btn-light" style="padding:5px;"><a href="https://www.finowings.com/fundamental-analysis/">Fundamental Analysis</button>&nbsp;<button type="button" class="btn btn-light" style="padding:5px;"><img loading="lazy" src="https://www.finowings.com/img/views-icon.webp" style="width:20px; height:20px;" />&nbsp;<span style="font-size:14px;"><?php echo $total_views; ?></span></button></p>
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
              <a class="btn btn-primary py-3 px-3 mt-2" href="../what-is-valuation-ratio/">
                << Previous</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary py-3 px-3 mt-2" href="../difference-between-fundamental-and-technical-analysis/">Next >></a>
            </div>

            <br />

            <!-- Quiz Section Starts -->
            <form id="start-quiz" method="post" action="quiz/">
              <div align="center"><input type="submit" id="submit" class="my-quiz-btn" value="Test Your Knowledge" /></div>
            </form>
            <!-- Quiz Section Ends -->

            <br /><br />
            <p>If you want to Learn more about opearting ratio analysis or If you have any other Query <a href="https://www.finowings.com/contact-us.php" style="font-weight:bold;">Click Here</a> & To Open your Demat Account with Lot of Benefits <a href="https://www.finowings.com/demat-accounts.php" style="font-weight:bold;">Click Here</a>.</p>
            <br />
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
  <?php include("../../footer.php"); ?>
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

  <!-- Go to www.addthis.com/dashboard to customize your tools -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-62db9e23433a3e75"></script>


</body>

</html>