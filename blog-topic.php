<?php
session_start();
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
  ob_start('ob_gzhandler');
else ob_start();

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
  $url = "https://";
else
  $url = "http://";


// Append the host(domain name, ip) to the URL.   
$url .= $_SERVER['HTTP_HOST'];

$t = $_SERVER['REQUEST_URI'];
$u = str_replace("SME-IPO", "IPO", $t);

// Append the requested resource location to the URL   
$url .= $u;

?>
<?php
include("DLL/config.php");
include("DLL/functions.php");
include("pageview.php");
$id = $_REQUEST['i'];
$k = $_REQUEST['blog'];
//$blogdetail = getblogDetails($id);
$blogdetail = getblogDetailsB($k);
$blogdetails = mysqli_fetch_array($blogdetail);
$blog_id = $blogdetails['id'];
if (($blog_id < 1) || ($blog_id == 724) || ($blog_id == 2043)) {
  header("Location: https://www.finowings.com/blog/");
}
$title = $blogdetails['title'];
$cat = $blogdetails['cat_id'];

$cat_name = getCategoryName($cat);
$blogcat_name = str_replace(" ", "-", $cat_name);

// Validate category slug from URL matches the actual blog category - code with Aj
// if(isset($_REQUEST['category'])) {
// 	$url_category = strtolower(trim($_REQUEST['category']));
// 	$actual_category = strtolower($blogcat_name);

// 	// If category slug doesn't match, redirect to correct URL
// 	if($url_category !== $actual_category) {
// 		$correct_url = "https://www.finowings.com/" . $blogcat_name . "/" . $k;
// 		header("HTTP/1.1 301 Moved Permanently");
// 		header("Location: " . $correct_url);
// 		exit();
// 	}
// }

$cont = $blogdetails['content'];
$img = $blogdetails['file'];
$imgn = explode(".", $img);
$imgname = $imgn['0'];
$catblog = getexploreBlog($cat, $blog_id);
$categories = getallCategory();
$trendingblogs = gettrendingRightBlogs($blog_id);
$latestblogs = getlatestRightBlogs();
$date = $blogdetails['updated_date'];
$datetime = explode(" ", $date);
$date = $datetime['0'];
$date1 = explode("-", $date);
$year = $date1['0'];
$month = $date1['1'];
$day = $date1['2'];
$pv_protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$page_url = $pv_protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$total_views = getPageViews($page_url);

$img_alttag = $blogdetails['img_alttag'];
$me_keywords = $blogdetails['me_keywords'];
$me_desc = $blogdetails['me_desc'];
$faq1 = $blogdetails['faq1'];
$ans1 = $blogdetails['ans1'];
$faq2 = $blogdetails['faq2'];
$ans2 = $blogdetails['ans2'];
$faq3 = $blogdetails['faq3'];
$ans3 = $blogdetails['ans3'];
$faq4 = $blogdetails['faq4'];
$ans4 = $blogdetails['ans4'];
$faq5 = $blogdetails['faq5'];
$ans5 = $blogdetails['ans5'];
$faq6 = $blogdetails['faq6'];
$ans6 = $blogdetails['ans6'];
$faq7 = $blogdetails['faq7'];
$ans7 = $blogdetails['ans7'];
$faq8 = $blogdetails['faq8'];
$ans8 = $blogdetails['ans8'];
$faq9 = $blogdetails['faq9'];
$ans9 = $blogdetails['ans9'];
$faq10 = $blogdetails['faq10'];
$ans10 = $blogdetails['ans10'];
$ans10 = $blogdetails['ans10'];
$schema_markup = $blogdetails['schema_markup'];
$spotify_link =  $blogdetails['spotify_link'];
if ($blog_id == 681) {
  header("Location: https://www.finowings.com");
}
// For OG and Twitter Meta Tags
// Program to display URL of current page.
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
  $link = "https";
else
  $link = "http";

// Here append the common URL characters.
$link .= "://";

// Append the host(domain name, ip) to the URL.
$link .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL
$link .= $_SERVER['REQUEST_URI'];

// Print the link
$link;

//active page on
$active_page = 'blog';
if ($cat == 7 || $cat == 14 || stripos($cat_name, 'IPO') !== false) {
  $active_page = 'ipo';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="<?php echo $me_keywords; ?>" name="keywords">
  <meta content="<?php echo $me_desc; ?>" name="description">
  <link rel="canonical" href="<?php echo $url; ?>" />

  <meta property="og:title" content="<?php echo $title; ?>" />
  <meta property="og:description" content="<?php echo $me_desc; ?>" />
  <meta property="og:image" content="https://www.finowings.com/admin/media/<?php echo $img; ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo $link; ?>">

  <meta property="twitter:url" content="<?php echo $link; ?>">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="<?php echo $me_desc; ?>">
  <meta name="twitter:image" content="https://www.finowings.com/admin/media/<?php echo $img; ?>" />




  <!-- Schema Starts -->
  <?php
  if ($schema_markup != '') {
    echo $schema_markup;
  }
  ?>
  <!-- Schema Ends -->


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
  <link href="../css/category.css" rel="stylesheet">

  <!-- Google Adsense Code -->
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4481710634198846" crossorigin="anonymous"></script>


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
      width: 230px;
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

      .youtube-video {
        aspect-ratio: 16 / 9;
        width: 100% !important;
        align: center;
      }

      .content-box {
        width: 100% !important;
      }

      table tbody tr td p {
        font-size: 13px;
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
      overflow: hidden;
    }

    /*section {
  padding: 30px 20px 0px; color:#000000;
  
}*/
  </style>

  <style>
    .btn-light {
      background: #e9f9ff !important;
    }

    .btn-light:hover {
      background: #436bb2 !important;
      color: #FFFFFF !important;
    }

    .trading-comment-box {
      width: 100%;
      height: auto;
      background-color: #e9f9ff;
      border-radius: 10px;
      padding: 10px;
      box-sizing: border-box;
      text-align: center;
    }

    .trading-comment-box1 {
      width: 100%;
      height: auto;
      background-color: #E8EDE7;
      border-radius: 10px;
      padding: 10px;
      box-sizing: border-box;
      text-align: center;
    }
  </style>

  <!-- FAQ CSS Start -->
  <style>
    .faq-header {
      font-size: 36px;
      border-bottom: 1px dotted #ccc;
      padding: 24px;
    }

    .faq-content {
      margin: 0 auto;
    }

    .faq-question {
      padding: 20px 0;
      border-bottom: 1px dotted #ccc;
    }

    .panel-title {
      font-size: 20px;
      width: 100%;
      position: relative;
      margin: 0;
      padding: 10px 10px 0 48px;
      display: block;
      cursor: pointer;
    }

    .panel-content {
      font-size: 16px;
      padding: 0px 14px;
      margin: 0 40px;
      height: 0;
      overflow: hidden;
      z-index: 1;
      position: relative;
      opacity: 0;
      -webkit-transition: .4s ease;
      -moz-transition: .4s ease;
      -o-transition: .4s ease;
      transition: .4s ease;
    }

    .panel:checked~.panel-content {
      height: auto;
      opacity: 1;
      padding: 14px;

    }

    .plus {
      position: absolute;
      margin-left: 20px;
      margin-top: 4px;
      z-index: 5;
      font-size: 25px;
      line-height: 100%;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      -o-user-select: none;
      user-select: none;
      -webkit-transition: .2s ease;
      -moz-transition: .2s ease;
      -o-transition: .2s ease;
      transition: .2s ease;
    }

    .panel:checked~.plus {
      -webkit-transform: rotate(45deg);
      -moz-transform: rotate(45deg);
      -o-transform: rotate(45deg);
      transform: rotate(45deg);
    }

    .panel {
      display: none;
    }
  </style>
  <!-- FAQ CSS Ends -->

  <!-- Right Click Disable Starts 
 <style>
 .disable-text-selection {
 -webkit-user-select: none;
 -moz-user-select: none;
 -ms-user-select: none;
 user-select: none;
 }
 </style>
 <!-- Right Click Disable Ends -->
  <style>
    .right-header {
      position: -webkit-sticky;
      position: sticky;
      top: 0;
    }
  </style>

  <!-- Blog Contact Starts -->
  <style>
    .content-box {
      width: 320px;
      height: auto;
      color: #000000;
      text-align: left;
      float: left;
      margin: 0px 0px;
      margin-right: 20px;
      border: 1px solid black;
    }

    .youtube-video {
      aspect-ratio: 16 / 9;
      width: 50%;
      align: center;
    }

    /* Youtube Embed Video Ends  */
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

  <!-- Blog Contact Ends -->

  <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=62db9addacbf2a0019029fc0&product=inline-reaction-buttons' async='async'></script>

</head>

<?php

// Comments Section Scripts
function showComments()
{
  $comment = "";

  $comment .= commenttree();

  echo $comment;
}

function commenttree($parentid = NULL)
{
  $comments = '';
  $sql = '';
  $k = $_REQUEST['blog'];
  //$blogdetail = getblogDetails($id);
  $blogdetail = getblogDetailsB($k);
  $blogdetails = mysqli_fetch_array($blogdetail);
  $blog_id = $blogdetails['id'];


  if (is_null($parentid)) {
    $sql = "select * from comments where comment_id='0' and blog_id='$blog_id' and approve='Y'";
  } else {
    $sql = "select * from comments where comment_id=$parentid";
  }


  $result = mysqli_query($GLOBALS['con'], $sql);

  while ($data = mysqli_fetch_array($result)) {
    // echo $data['comment_id'];

    // echo '<pre>';
    // print_r($data);

    $date = $data['created_date'];
    $date1 = explode("-", $date);
    $y = $date1[0];
    $m = $date1[1];
    $d = $date1[2];

    if ($data['comment_id'] == '0') {
      $comments .= '
		
    <div class="trading-comment-box">
      <p align="right"><strong>' . $data['name'] . '</strong> | <small><i> Posted on ' . $d . '/' . $m . '/' . $y . '</i></small></p>
     
	 <p align="left">' . $data['description'] . '</p>
      
	  
	 </div>
	 
	  ';
    } else {
      $comments .= '
    <div class="trading-comment-box1">
       <p align="right"><strong>' . $data['name'] . '</strong> | <small><i> Posted on September 13, 2022</i></small></p>
     
	 <p align="left">' . $data['description'] . '</p>
      
	  </div>
	  ';
    }





    $comments .= '<div class="media  parent  p-3">
    <div class="media-body">' . commenttree($data['id'], $blog_id) . '</div></div>';
  }





  return $comments;
}



$blogid = $blog_id;

if (isset($_POST['submit'])) {
  $date = date("Y-m-d");
  if (empty($_POST['commentid'])) {
    $commentid = '0';
  } else {
    $commentid = $_POST['commentid'];
  }

  $sql = "insert into comments (blog_id,comment_id,name,email,description,approve,created_date) values ('" . $blogid . "','" . $commentid . "','" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['description'] . "','N','$date')";

  $result = mysqli_query($con, $sql);

  if ($result) {
    echo '<script>alert("comment added successfully, we will published after verify your comment.")</script>';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

?>

<body class="disable-text-selection">
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Navbar Start -->
  <?php include("top-navigation.php"); ?>
  <!-- Navbar Ends -->


  <!--Trading Blogs Start-->

  <div class="container py-2">
    <!--<div class="text-center">
				<h6 class="section-title bg-white text-center text-primary px-3">Category</h6>
                <p style="font-weight: 700; font-size:36px; font-family: Nunito,sans-serif; line-height: 1.2; color: #181d38;"><?php //echo $blogcat_name; 
                                                                                                                                ?></p>
			</div>	-->


    <div class="row py-4">

      <!--Left col start-->
      <div class="col-lg-9 col-md-9 col-sm-12 col-12">
        <div class="grid-container">

          <!--Middle col start-->
          <main>

            <!--Google Adsense Code Starts			
<div align="center">
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4481710634198846" crossorigin="anonymous"></script>
		<!-- Blog-Top-Banner 
		     <ins class="adsbygoogle"
			 style="display:inline-block;width:728px;height:90px"
			 data-ad-client="ca-pub-4481710634198846"
			 data-ad-slot="3968038623"></ins>
		<script>
			 (adsbygoogle = window.adsbygoogle || []).push({});
		</script>
</div>		
<!--Google Adsense Code Ends-->

            <div align="center"><a href="https://www.finowings.com/deltaexchangeclicks.php" target="_blank"><img src="../cypto-ctr/delta-exchange-cta.webp" class="img-fluid mx-auto d-block" /></a></div>


            <p style="font-size:12px; padding-top: 10px;"><a href="/">Home</a> >> <?php if ($cat == 7 || $cat == 14) { ?><a href="https://www.finowings.com/IPO/">IPO</a> <?php } else { ?><a href="https://www.finowings.com/blog/">Blog</a><?php } ?> >> <?php echo $title; ?></p>

            <h1><?php echo $title; ?></h1>
            <!--<p style="font-size:12px; padding-left: 25px;"><a href="blog-topics.php?i=<?php echo $cat_id; ?>" style="text-decoration: none; color: #406ab2;"><?php //echo $cat_name; 
                                                                                                                                                                  ?></a> | <?php //echo $day 
                                                                                                                                                                            ?>.<?php //echo $month 
                                                                                                                                                                                ?>.<?php //echo $year 
                                                                                                                                                                                                          ?></p>-->
            <p style="font-size:12px; padding-left: 15px;"><button type="button" class="btn btn-light" style="padding:5px;"><a href="/<?php echo $blogcat_name; ?>/"><?php echo $cat_name; ?></a></button>&nbsp;<button type="button" class="btn btn-light" style="padding:5px;"><?php echo $day ?>.<?php echo $month ?>.<?php echo $year ?></button>&nbsp;<button type="button" class="btn btn-light" style="padding:5px;"><img loading="lazy" src="../img/views-icon.webp" style="width:20px; height:20px;" />&nbsp;<span style="font-size:14px;"><?php echo $total_views; ?></span></button></p>
            <br />
            <div style="font-size:14px; padding-left: 1px; padding-right: 20px;">

              <!-- Table of Contents Starts -->
              <div class="content-box">
                <div align="center">
                  <img loading="lazy" src="../admin/media/<?php echo $img; ?>" alt="<?php if ($img_alttag != '') {
                                                                                      echo $img_alttag;
                                                                                    } else {
                                                                                      echo $imgname;
                                                                                    }  ?>" width="320" height="220" class="img-fluid mx-auto d-block">
                </div>
                <?php
                //$htmlString = $cont;

                //Create a new DOMDocument object.
                //$htmlDom = new DOMDocument;

                //Load the HTML string into our DOMDocument object.
                //@$htmlDom->loadHTML($htmlString);

                //Extract all h2 elements / tags from the HTML. 
                //$h2Tags = $htmlDom->getElementsByTagName('h2');

                // Arrays to store H1 to H6 headings
                //$extractedH2Tags = [];

                // Loop for h2
                ?>
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
                <?php
                //$k = 1;
                //foreach($h2Tags as $h2Tag){

                //Get the node value of h2 tag
                //  $h2Value = trim($h2Tag->nodeValue);
                //$extractedH2Tags[] = $h2Value;
                ?>
                <!--<li><a href="#section-<?php //echo $k; 
                                          ?>"><?php //echo $h2Value; 
                                              ?></a></li>
	<?php
  //$k++;
  //}
  ?>-->
                </ul>
              </div>
              <!-- Table of Contents Ends -->
              <?php
              if ($cont != '') {
              ?>
                <div style="font-size:17px !important; text-align: justify;"><?php echo $cont; ?></div>
              <?php
              } else {
              ?>
                <h3>IPO will be live shortly! <br /><br />Don’t wait — Check Crucial Details now on the <a href="https://www.finowings.com/IPO/live-ipo-gmp.php" style="color:red;">Live IPO GMP page</a> of current & upcoming IPOs.</h3>
              <?php
              }
              ?>
            </div>


            <!-- Audio Podcast Starts -->

            <!-- Audio Podcast Ends -->



            <?php include("author-box.php"); ?>


            <!-- FAQs Starts -->

            <div class="container-xxl">
              <div class="container wow fadeInUp" data-wow-delay="0.3s" style="background: #e9f9ff;">
                <br />
                <?php
                if ($faq1 != '') {
                ?>
                  <h2 class="mb-4">Frequently Asked Questions</h2>
                <?php
                }
                ?>
                <div class="faq-content">

                  <?php
                  if ($faq1 != '') {
                  ?>

                    <div class="faq-question">
                      <input id="q1" type="checkbox" class="panel">
                      <div class="plus">+</div>
                      <label for="q1" class="panel-title">
                        <h3 style="font-size:20px;"><?php echo $faq1; ?></h3>
                      </label>
                      <div class="panel-content"><?php echo $ans1; ?></div>
                    </div>
                  <?php
                  }
                  if ($faq2 != '') {
                  ?>

                    <div class="faq-question">
                      <input id="q2" type="checkbox" class="panel">
                      <div class="plus">+</div>
                      <label for="q2" class="panel-title">
                        <h3 style="font-size:20px;"><?php echo $faq2; ?></h3>
                      </label>
                      <div class="panel-content"><?php echo $ans2; ?></div>
                    </div>
                  <?php
                  }
                  if ($faq3 != '') {
                  ?>

                    <div class="faq-question">
                      <input id="q3" type="checkbox" class="panel">
                      <div class="plus">+</div>
                      <label for="q3" class="panel-title">
                        <h3 style="font-size:20px;"><?php echo $faq3; ?></h3>
                      </label>
                      <div class="panel-content"><?php echo $ans3; ?></div>
                    </div>
                  <?php
                  }
                  if ($faq4 != '') {
                  ?>

                    <div class="faq-question">
                      <input id="q4" type="checkbox" class="panel">
                      <div class="plus">+</div>
                      <label for="q4" class="panel-title">
                        <h3 style="font-size:20px;"><?php echo $faq4; ?></h3>
                      </label>
                      <div class="panel-content"><?php echo $ans4; ?></div>

                    </div>
                  <?php
                  }
                  if ($faq5 != '') {
                  ?>

                    <div class="faq-question">
                      <input id="q5" type="checkbox" class="panel">
                      <div class="plus">+</div>
                      <label for="q5" class="panel-title">
                        <h3 style="font-size:20px;"><?php echo $faq5; ?></h3>
                      </label>
                      <div class="panel-content"><?php echo $ans5; ?></div>
                    </div>
                  <?php
                  }
                  if ($faq6 != '') {
                  ?>

                    <div class="faq-question">
                      <input id="q6" type="checkbox" class="panel">
                      <div class="plus">+</div>
                      <label for="q6" class="panel-title">
                        <h3 style="font-size:20px;"><?php echo $faq6; ?></h3>
                      </label>
                      <div class="panel-content"><?php echo $ans6; ?></div>

                    </div>
                  <?php
                  }
                  if ($faq7 != '') {
                  ?>

                    <div class="faq-question">
                      <input id="q7" type="checkbox" class="panel">
                      <div class="plus">+</div>
                      <label for="q7" class="panel-title">
                        <h3 style="font-size:20px;"><?php echo $faq7; ?></h3>
                      </label>
                      <div class="panel-content"><?php echo $ans7; ?></div>
                    </div>
                  <?php
                  }
                  if ($faq8 != '') {
                  ?>

                    <div class="faq-question">
                      <input id="q8" type="checkbox" class="panel">
                      <div class="plus">+</div>
                      <label for="q8" class="panel-title">
                        <h3 style="font-size:20px;"><?php echo $faq8; ?></h3>
                      </label>
                      <div class="panel-content"><?php echo $ans8; ?></div>

                    </div>
                  <?php
                  }
                  if ($faq9 != '') {
                  ?>

                    <div class="faq-question">
                      <input id="q9" type="checkbox" class="panel">
                      <div class="plus">+</div>
                      <label for="q9" class="panel-title">
                        <h3 style="font-size:20px;"><?php echo $faq9; ?></h3>
                      </label>
                      <div class="panel-content"><?php echo $ans9; ?></div>
                    </div>
                  <?php
                  }
                  if ($faq10 != '') {
                  ?>

                    <div class="faq-question">
                      <input id="q10" type="checkbox" class="panel">
                      <div class="plus">+</div>
                      <label for="q10" class="panel-title">
                        <h3 style="font-size:20px;"><?php echo $faq10; ?></h3>
                      </label>
                      <div class="panel-content"><?php echo $ans10; ?></div>

                    </div>
                  <?php
                  }
                  ?>




                </div>

              </div>
            </div>


            <!-- FAQs Ends -->
            <br />

            <div class="wow fadeInUp" data-wow-delay="0.1s" style="background: #e9f9ff; margin: 5px;">
              <br />
              <h3 style="padding-left:20px;">Liked What You Just Read? Share this Post:</h3>
              <br />
              <!-- ShareThis BEGIN -->
              <div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
              <br />
            </div>




            <br />
            <!-- Comments Section Starts -->

            <div class="col-lg-12">
              <div class="text-center">
                <h3 class="section-title bg-white text-center text-primary px-3">Viewer's Thoughts</h3>
              </div>
              <br />
              <?php showComments(); ?>

            </div>

            <div class="col-lg-12" id="postcomment">
              <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Any Question or Suggestion</h6>
                <h4>Post your Thoughts</h4>
              </div>

              <form method="post">
                <input type="hidden" name="commentid" id="commentid">
                <label><b>Name</b></label>
                <input type="text" class="form-control" name="name" required />
                <label><b>Email ID</b></label>
                <input type="text" class="form-control" name="email" required />

                <label><b>Comment</b></label>
                <textarea class="form-control" name="description" required /></textarea>

                <input type="submit" name="submit" class="btn btn-primary mt-2">

              </form>
            </div>

            <!-- Comments Section End -->
            <br />
            <!-- Google Adsense Horizental Banner Starts -->
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4481710634198846"
              crossorigin="anonymous"></script>
            <!-- Horizental-Banner -->
            <ins class="adsbygoogle"
              style="display:block"
              data-ad-client="ca-pub-4481710634198846"
              data-ad-slot="9943963344"
              data-ad-format="auto"
              data-full-width-responsive="true"></ins>
            <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <!-- Google Adsense Horizental Banner Ends -->

          </main>

        </div>



      </div>


      <!--middle col end-->


      <!--Right col start-->

      <div class="col-lg-3 col-md-3 col-sm-6 col-12" style="padding-top: 10px;">
        <div class="right-header">
          <div class="rightsidebar">
            <?php
            //if($cat_id == 7 || $cat_id == 14)
            //{	
            ?>
            <!--<h4 align="left">Demat Account with Offers</h4>
<div align="center">
<!--<a href="../angeloneclicks.php" target="_blank" /><img loading="lazy"  src="../img/angel-one-banner.jpeg" width="100%" /></a>
<a href="../zerodhaclicks.php" target="_blank"><img loading="lazy"  src="../ctr-img/Branding-2.png" width="100%" /></a><br />
<!--<a href="../upstoxclicks.php" target="_blank" /><img loading="lazy"  src="../img/upstox-banner.jpeg" width="100%" /></a><br />
<a href="../aliceblueclicks.php" target="_blank" /><img loading="lazy"  src="../img/aliceblue-banner.jpeg" width="100%" /></a>
</div>
<?php
//}
?>
<br /><br />
<!--<h4 align="left">Learn Stock Market For Free</h4>
<iframe width="330" height="186" src="https://www.youtube.com/embed/Oop5AnndOgo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<br /><br />-->

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
                <div class="col-lg-4 col-md-5 col-sm-4 col-4"><img loading="lazy" src="../admin/media/<?php echo $icon; ?>" alt="<?php if ($img_alttag != '') {
                                                                                                                                    echo $img_alttag;
                                                                                                                                  } else {
                                                                                                                                    echo $imgname;
                                                                                                                                  }  ?>" class="img-fluid"></div>

                <div class="col-lg-8 col-md-7 col-sm-8 col-8">
                  <p align="left"><strong><a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>" style="text-decoration: none;"><?php echo $title; ?></a></strong><br />
                    <span style="font-size: 12px;"><a href="../<?php echo $cat_name1; ?>/" style="text-decoration: none; color: #333333;"><?php echo $cat_name; ?></a> | <?php echo $day; ?>-<?php echo $month; ?>-<?php echo $year; ?></span>
                  </p>
                </div>
              </div>
            <?php
            }
            ?>

          </div>
          <br />
          <!--
<div class="rightsidebar">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4481710634198846"
     crossorigin="anonymous"></script>
<!-- SideBar -->
          <!--<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4481710634198846"
     data-ad-slot="1001592101"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>-->

          <div class="rightsidebar">

            <!--Google Adsense script Starts -->
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4481710634198846"
              crossorigin="anonymous"></script>
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

            <br />
            <h4 align="left">Latest Blogs</h4>
            <br />
            <?php
            while ($r = mysqli_fetch_array($latestblogs)) {
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
                <div class="col-lg-4 col-md-5 col-sm-4 col-4"><img loading="lazy" src="../admin/media/<?php echo $icon; ?>" alt="<?php if ($img_alttag != '') {
                                                                                                                                    echo $img_alttag;
                                                                                                                                  } else {
                                                                                                                                    echo $imgname;
                                                                                                                                  }  ?>" class="img-fluid"></div>
                <div class="col-lg-8 col-md-7 col-sm-8 col-8">
                  <p align="left"><strong><a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>" style="text-decoration: none;"><?php echo $title; ?></a></strong><br />
                    <span style="font-size: 12px;"><a href="../<?php echo $cat_name1; ?>/" style="text-decoration: none; color: #333333;"><?php echo $cat_name; ?></a> | <?php echo $day; ?>-<?php echo $month; ?>-<?php echo $year; ?></span>
                  </p>
                </div>
              </div>
            <?php
            }
            ?>

            <!--Google Adsense script Starts -->
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4481710634198846"
              crossorigin="anonymous"></script>
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
        <!--Right col end-->
      </div>
    </div>
    <!--Trading Blogs end-->
  </div>


  <!--Category Related Blogs Start-->
  <div>
    <div class="container py-5">
      <div class="text-center">
        <h6 class="section-title bg-white text-center text-primary px-3"><?php echo $blogcat_name; ?></h6>
        <h2 class="mb-5">Related Blogs</h2>
      </div>

      <div class="row py-4">

        <?php
        while ($row = mysqli_fetch_array($catblog)) {
          $id =   $row['id'];
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
          $updated_date = $row['updated_date'];
          $datetime = explode(" ", $updated_date);
          $date = $datetime['0'];
          $date1 = explode("-", $date);
          $year = $date1['0'];
          $month = $date1['1'];
          $day = $date1['2'];
          $img_alttag = $row['img_alttag'];
          $blog_url = $row['blog_url'];
        ?>
          <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
            <a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>" class="fw-blog-card">
              <div class="fw-card-img">
                <img loading="lazy" src="../admin/media/<?php echo $pic; ?>" alt="<?php if ($img_alttag != '') {
                                                                                    echo $img_alttag;
                                                                                  } else {
                                                                                    echo $imgname;
                                                                                  }  ?>" class="img-fluid mx-auto d-block">
              </div>
              <div class="fw-card-body">
                <div class="fw-meta">
                  <?php echo $cat_name; ?> <span style="color:#ccc;">|</span> <?php echo $day; ?>-<?php echo $month; ?>-<?php echo $year; ?>
                </div>
                <?php
                if ($count < 31) {
                ?>
                  <h3 class="fw-card-title"><?php echo $short_title; ?></h3>
                <?php
                } else {
                ?>
                  <h3 class="fw-card-title"><?php echo $short_title; ?>...</h3>
                <?php
                }
                ?>
                <p class="fw-card-desc"><?php echo $short_desc1; ?>...</p>
                <span class="fw-read-btn">
                  Continue Reading <i class="fas fa-arrow-right"></i>
                </span>
              </div>
            </a>
          </div>
        <?php
        }
        ?>

      </div>
    </div>
  </div>
  <!--Category Related Blogs end-->



  <!-- Auto Popup Script Starts 
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content" style="background:none; border:none;">
<div class="modal-body" style="background:none; padding:0px;">

<div class="close-btn"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="float:right; margin-top:20%; color:#000000; background-color:#FFFFFF;"></button></div>      




<div class="container  gx-0">
<div class="row gx-0">
<div class="pop-up-box">

<a href="../foundation-day-qa.php" target="_blank"><img loading="lazy"  src="https://www.finowings.com/img/course-popup.webp" class="img-fluid mx-auto d-block" /></a>

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
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="../js/main.js"></script>


  <!-- Comment Box Scripts Starts -->

  <script>
    function reply(commentid) {

      //alert(commentid);
      $("#commentid").val(commentid);
    }
  </script>
  <!-- Comment Box Scripts Ends -->


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


  <!--Pop Box script -->
  <script>
    //var strcookie = ReadCookie('MyPopUp1');
    //let user = getCookie("username");
    if (document.cookie.indexOf('userblog') == -1) {
      var myModal = new bootstrap.Modal(document.getElementById("exampleModal"));
      setTimeout(() => myModal.show(), 5000);
      document.cookie = "userblog=Yes";
    }
  </script>
  <!--Pop Box script-->



</body>

</html>