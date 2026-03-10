 <?php
  include("../../DLL/config.php");
  include("../../DLL/functions.php");
  include("../../pageview.php");
  //$id = $_REQUEST['i'];
  $id = 1;
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
  $faq1 = $chapterdetails['faq1'];
  $ans1 = $chapterdetails['ans1'];
  $faq2 = $chapterdetails['faq2'];
  $ans2 = $chapterdetails['ans2'];
  $faq3 = $chapterdetails['faq3'];
  $ans3 = $chapterdetails['ans3'];
  $faq4 = $chapterdetails['faq4'];
  $ans4 = $chapterdetails['ans4'];
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
       width: 320px;
       height: auto;
       background: #e9f9ff;
       color: #000000;
       text-align: left;
       float: left;
       margin: 0px 0px;
       margin-right: 20px;
       border: 1px solid black;
     }

     .youtube-video {
       aspect-ratio: 16 / 9;
       width: 100%;
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

   <style>
     .btn-light {
       background: #e9f9ff !important;
     }

     . btn-light:hover {
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
       font-size: 35px;
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
    //$k = $_REQUEST['blog'];
    //$blogdetail = getblogDetails($id);
    //$blogdetail = getblogDetailsB($k);
    //$blogdetails = mysqli_fetch_array($blogdetail);
    $blog_id = 1;


    if (is_null($parentid)) {
      $sql = "select * from commentsacademy where comment_id='0' and blog_id='$blog_id' and approve='Y'";
    } else {
      $sql = "select * from commentsacademy where comment_id=$parentid";
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



  $blogid = 1;

  if (isset($_POST['submit'])) {
    $date = date("Y-m-d");
    if (empty($_POST['commentid'])) {
      $commentid = '0';
    } else {
      $commentid = $_POST['commentid'];
    }

    $sql = "insert into commentsacademy (blog_id,comment_id,name,email,description,approve,created_date) values ('" . $blogid . "','" . $commentid . "','" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['description'] . "','N','$date')";

    $result = mysqli_query($con, $sql);

    if ($result) {
      echo '<script>alert("comment added successfully, we will published after verify your comment.")</script>';
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  ?>

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

           <!--<navv>
 
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
<ul>
<h4>Table of Contents</h4> 
<?php
//$k = 1;
//foreach($h2Tags as $h2Tag){

//Get the node value of h2 tag
//  $h2Value = trim($h2Tag->nodeValue);
//$extractedH2Tags[] = $h2Value;
?>
     <li><a href="#section-<?php //echo $k; 
                            ?>"><?php //echo $h2Value; 
                                                ?></a></li>
	<?php
  //$k++;
  //}
  ?>
     </ul>
</navv>-->

           <main>
             <h1><?php echo $chapter_name; ?></h1>
             <p style="font-size:12px; padding-left: 15px;"><button type="button" class="btn btn-light" style="padding:5px;"><a href="https://www.finowings.com/basics-of-finance/">Basics of Finance</button>&nbsp;<button type="button" class="btn btn-light" style="padding:5px;"><img loading="lazy" src="https://www.finowings.com/img/views-icon.webp" style="width:20px; height:20px;" />&nbsp;<span style="font-size:14px;"><?php echo $total_views; ?></span></button></p>

             <!-- Table of Contents Starts -->
             <div class="content-box">
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

             <div class="blog-content">
               <?php echo $cont; ?>
             </div>
             <br />
             <div align="center">
               <a class="btn btn-primary py-3 px-3 mt-2" href="../personal-Finance/">Next Chapter >></a>
             </div>
             <br />


             <!-- Quiz Section Starts -->
             <form id="start-quiz" method="post" action="quiz/">
               <div align="center"><input type="submit" id="submit" class="my-quiz-btn" value="Test Your Knowledge" /></div>
             </form>
             <!-- Quiz Section Ends -->

             <p>&nbsp;</p>
             <p><a href="https://whatsapp.com/channel/0029Va9Geoy72WTt3Qnro42V" target="_blank"><img src="https://www.finowings.com/img/follow-whatsapp.png" style="width:100%;" /></a></p>

             <!-- FAQs Starts -->
             <br />
             <div class="container-xxl">
               <div class="container wow fadeInUp" data-wow-delay="0.3s" style="background: #e9f9ff;">
                 <br />
                 <?php
                  if ($faq1 != '') {
                  ?>
                   <h3 class="mb-4">Frequently Asked Questions</h3>
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
                       <label for="q1" class="panel-title"><?php echo $faq1; ?></label>
                       <div class="panel-content"><?php echo $ans1; ?></div>
                     </div>
                   <?php
                    }
                    if ($faq2 != '') {
                    ?>

                     <div class="faq-question">
                       <input id="q2" type="checkbox" class="panel">
                       <div class="plus">+</div>
                       <label for="q2" class="panel-title"><?php echo $faq2; ?></label>
                       <div class="panel-content"><?php echo $ans2; ?></div>
                     </div>
                   <?php
                    }
                    if ($faq3 != '') {
                    ?>

                     <div class="faq-question">
                       <input id="q3" type="checkbox" class="panel">
                       <div class="plus">+</div>
                       <label for="q3" class="panel-title"><?php echo $faq3; ?></label>
                       <div class="panel-content"><?php echo $ans3; ?></div>
                     </div>
                   <?php
                    }
                    if ($faq4 != '') {
                    ?>

                     <div class="faq-question">
                       <input id="q4" type="checkbox" class="panel">
                       <div class="plus">+</div>
                       <label for="q4" class="panel-title"><?php echo $faq4; ?></label>
                       <div class="panel-content"><?php echo $ans4; ?></div>

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
                 <h5 class="section-title bg-white text-center text-primary px-3">Viewer's Thoughts</h5>
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

             <div align="center">
               <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4481710634198846"
                 crossorigin="anonymous"></script>
               <!-- RightSideBar -->
               <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-4481710634198846"
                 data-ad-slot="3791369955"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
               <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
               </script>
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
           <br />

         </div>
       </div>
       <!--Right col end-->


       <!-- Courses Section End -->

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