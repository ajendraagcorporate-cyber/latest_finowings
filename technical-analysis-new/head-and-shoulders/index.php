<?php
/*include("../../../DLL/config.php");
include("../../../DLL/functions.php");
include("pageview.php");
$id = $_REQUEST['i'];
$id = 141;
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
$me_desc = $chapterdetails['me_desc'];*/
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
    <link href="../../../css/chapterquizstyle.css" rel="stylesheet">-->
	
	<!-- Social Media Sharing JS -->
	<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=62db9addacbf2a0019029fc0&product=inline-reaction-buttons' async='async'></script>  
	
	
	<style type="text/css">

html {
  scroll-behavior: smooth;
}

navv {
  white-space: normal; width:230px; 
  background: #ffffff;
  padding-right:20px;
   
}
navv ul {
  list-style: none; border-left:1px solid #c9c9c9;
  margin: 0;
  padding: 0;
}


@media screen and (max-width: 600px) {
navv {  white-space: normal; display: none; width:200px;  background: #1593bd; }
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
  background: white; color:#000000; font-weight:bold; background:url(img/arrow.jpg) no-repeat;
}
main {
  padding-bottom: 10px;
}

.noul {
    margin: 0;
    padding: 0;
    list-style-type: none;
}

  .chapter-list .item {
        margin-bottom: 20px;
        padding-bottom: 10px;
        clear: both;
    }
    .chapter-list .title {
        margin: 0 0 10px 0;
    }
    .chapter-list .video-thumb {
        float: left;
        margin: 0 30px 45px 0;
        position: relative;
    }
    .chapter-list .selected {
        font-weight: 600;
    }
    .chapter-list h5 {
        margin: 0 0 5px 0;
    }
	
hr {
            position: relative;
            top: 20px;
            border: none;
            height: 12px;
            background: #cf9c0a;
            margin-bottom: 50px;
        }
		
.content-box{width:320px; height:auto; background:#e9f9ff; color:#000000; text-align:left; float: left;  margin: 0px 0px; margin-right: 20px; border: 1px solid black;}		

.card {
  background-color: #F0FBFC;
  width: 300px;
  height:auto;
  display: inline-block;
  flex-direction: column;
  overflow: hidden;
  border-radius: 1rem;
  box-shadow: 0px 1rem 1.5rem rgba(0,0,0,0.5);
   border: 1px solid #273158;
}

.card .banner {
  background-image: url("../img/demat-bg.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 11rem;
  display: flex;
  align-items: flex-end;
  justify-content: center;
  box-sizing: border-box;
}
.card .banner svg {
  background-color: #fff;
  width: 8rem;
  height: 8rem;
  box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.3);
  border-radius: 50%;
  transform: translateY(50%);
  transition: transform 200ms cubic-bezier(0.18, 0.89, 0.32, 1.28);
}
.card .banner svg:hover {
  transform: translateY(50%) scale(1.3);
}
.card .menu {
  width: 100%;
  height: 5.5rem;
  padding: 1rem;
  display: flex;
  align-items: flex-start;
  justify-content: flex-end;
  position: relative;
  box-sizing: border-box;
}
.card .menu .opener {
  width: 2.5rem;
  height: 2.5rem;
  position: relative;
  border-radius: 50%;
  transition: background-color 100ms ease-in-out;
}
.card .menu .opener:hover {
  background-color: #f2f2f2;
}
.card .menu .opener span {
  background-color: #404040;
  width: 0.4rem;
  height: 0.4rem;
  position: absolute;
  top: 0;
  left: calc(50% - 0.2rem);
  border-radius: 50%;
}
.card .menu .opener span:nth-child(1) {
  top: 0.45rem;
}
.card .menu .opener span:nth-child(2) {
  top: 1.05rem;
}
.card .menu .opener span:nth-child(3) {
  top: 1.65rem;
}
.card h2.name {
  text-align: left;
  padding: 0 1rem 0.5rem;
  margin: 0;
  font-size: 18px;
}
.card .title {
  color: #a0a0a0;
  font-size: 0.85rem;
  text-align: center;
  padding: 0 2rem 1.2rem;
}
.card .actions {
  padding: 0 2rem 1.2rem;
  display: flex;
  flex-direction: column;
  order: 99;
}
.card .actions .follow-info {
  padding: 0 0 1rem;
  display: flex;
}
.card .actions .follow-info h2 {
  text-align: center;
  width: 50%;
  margin: 0;
  box-sizing: border-box;
}
.card .actions .follow-info h2 a {
  text-decoration: none;
  padding: 0.6rem;
  display: flex;
  flex-direction: column;
  border-radius: 0.8rem;
  transition: background-color 100ms ease-in-out;
}
.card .actions .follow-info h2 a span {
  color: #1c9eff;
  font-weight: bold;
  transform-origin: bottom;
  transform: scaleY(1.3);
  transition: color 100ms ease-in-out;
}
.card .actions .follow-info h2 a small {
  color: #afafaf;
  font-size: 0.85rem;
  font-weight: normal;
}
.card .actions .follow-info h2 a:hover {
  background-color: #f2f2f2;
}
.card .actions .follow-info h2 a:hover span {
  color: #007ad6;
}
.card .actions .follow-btn button {
  color: #FFFFFF;
  font: inherit;
  font-weight: bold;
  background-color: #273158;
  width: 100%;
  border: none;
  padding: 1rem;
  outline: none;
  box-sizing: border-box;
  border-radius: 1.5rem/50%;
  transition: background-color 100ms ease-in-out, transform 200ms cubic-bezier(0.18, 0.89, 0.32, 1.28);
}
.card .actions .follow-btn button:hover {
  background-color: #cf9c0a;
  transform: scale(1.1);
}
.card .actions .follow-btn button:active {
  background-color: #cf9c0a;
  transform: scale(1);
}
.card .desc {
  text-align: justify;
  padding: 0 2rem 0.5rem;
  order: 100;
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
   <?php include("../../finowings-academy/fino-top-navigation.php"); ?>
    <!-- Navbar End -->

	
	

    <!-- Courses Section Start -->
     <!--Blog Section start-->
<div class="container pt-5">
<div class="row">

<!--Left col start-->
<div class="col-lg-9 col-md-9 col-sm-12 col-12">
<div class="grid-container">

<main>

<h2 align="center" style="font-size:32px; font-weight:bold;">Head and Shoulders</h2>
<hr style="size:1px; color:#cf9c0a">
<!-- Table of Contents Starts 
<div class="content-box">
<h4 style="padding-top:20px;">&nbsp;&nbsp;Table of Contents</h4> 
<ul>
  <li style="font-size: 15px; font-weight:500; line-height:35px;"><a href="#h_47083647010721710309031496">What is Technical Analysis?</a></li>
  <li style="font-size: 15px; font-weight:500; line-height:35px;"><a href="#h_24131583316171710309045366">Key Components of Technical Analysis</a></li>
  <li style="font-size: 15px; font-weight:500; line-height:35px;"><a href="#h_65435226936031710309090839">Importance of Technical Analysis in Trading</a></li>
</ul>
     </ul>
</div>
<!-- Table of Contents Ends -->

<p dir="ltr">The Head and Shoulders pattern is a classic chart pattern that suggests a potential change in the trend. Easily identifiable by its shape resembling a head and shoulders, this pattern unfolds in three main parts: a left shoulder, a head, and a right shoulder. The shift from an upward trend to a downward one (Head and Shoulders Top) or vice versa (Head and Shoulders Bottom) is indicated by the completion of this pattern.</p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_3402292355721712131674640" dir="ltr"><a href="#h_3402292355721712131674640">Key Elements of the Head and Shoulders Pattern</a></h2>
<h3><strong>&nbsp;</strong></h3>
<h3 dir="ltr">Left Shoulder (Starting Peak):</h3>
<p dir="ltr">The left shoulder forms as the price hits a peak during an uptrend.</p>
<p dir="ltr">This peak is followed by a temporary dip as sellers briefly gain control.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Head (Highest Peak):</h3>
<p dir="ltr">The subsequent rally surpasses the previous peak, forming the head.</p>
<p dir="ltr">The head represents a moment of heightened bullish activity, often exceeding the left shoulder's peak.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Right Shoulder (Second Peak):</h3>
<p dir="ltr">Another dip in price occurs after the head, creating the right shoulder.</p>
<p dir="ltr">This phase indicates waning bullish momentum and a potential shift in sentiment.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Neckline:</h3>
<p dir="ltr">The neckline, a horizontal connection between the lows of the left and right shoulders, is a pivotal element in the Head and Shoulders pattern.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">A break below the neckline confirms the pattern for Head and Shoulders Top, while a break above confirms it for Head and Shoulders Bottom.</p>
<p dir="ltr" align="center"><img src="https://lh7-us.googleusercontent.com/5QdoQRhOEo8yOjaHg_Nh3MzdsRurI_H9sL94awp3WLHpflTCCcTmGbgdo6QdE4zxhlA9CK1iBD5fAv3jEAGLQClVApTq8vbdWuHcF4H_IovLM8OGnYkNf5wrMGxJArPgj2TENQ97D7vp8NMvy_Nc0uw" width="50%"></p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_22638006673721712131742780" dir="ltr"><a href="#h_22638006673721712131742780">Strategies for Trading with Head and Shoulders</a></h2>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Entry Points:</h3>
<p dir="ltr">For a Head and Shoulders Top, traders often enter short positions when the price breaks below the neckline.</p>
<p dir="ltr">In the case of a Head and Shoulders Bottom, long positions are considered when the price breaches the neckline.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Stop-Loss and Take-Profit:</h3>
<p dir="ltr">Stop-loss orders are typically placed above the right shoulder for Head and Shoulders Top and below the right shoulder for Head and Shoulders Bottom.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Take-profit levels can be estimated based on the pattern's height, projected from the breakout point.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Volume Confirmation:</h3>
<p dir="ltr">Volume analysis is crucial. Volume should ideally decrease from the left shoulder to the head and increase on the right shoulder.</p>
<p dir="ltr">Volume confirmation strengthens the validity of the pattern.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/DDagFWZUJmqMpt4jb1sNnfBkzn70pJiQNQoN6pcPVkoqiM5t-TTIRgYukTpcwVwW_td_TxDcF-jmuKE5d8UlSgxyp6vaNfP6Heyg_WcailJKoyV0Acjl5oK4sxtpsb9Y5irwdNIIVz5j29aK5nSbrXk" width="100%" ></p>
<p><strong><br><br></strong></p>
<h2 id="h_20863280791101712131824362" dir="ltr"><a href="#h_20863280791101712131824362">Considerations and Pitfalls</a></h2>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Symmetry:</h3>
<p dir="ltr">Ideally, the left and right shoulders should exhibit symmetry in terms of size and duration.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">False Signals:</h3>
<p dir="ltr">Not all Head and Shoulder patterns lead to significant reversals. False signals may occur, emphasizing the need for confirmation through volume and other indicators.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Volume Analysis:</h3>
<p dir="ltr">While decreasing volume from left to head and increasing on the right is typical, variations exist. Traders should be cautious about the volume profile.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Inverse Head and Shoulders:</h3>
<p dir="ltr">The Inverse Head and Shoulders pattern is the opposite of its counterpart, indicating a potential shift from a downtrend to an uptrend. It consists of three segments: a left shoulder, a head (reaching a lower point), and a right shoulder. A break above the neckline confirms the pattern, signaling a possible uptrend.</p>
<p dir="ltr" align="center"><img src="https://lh7-us.googleusercontent.com/ql8eIUc9m1njTGVoNyeV8Ps8YejF3p8rdmM1y5DMaXPUMobDlMDoma0wOR6WdxViK0rwo9JtrBqMKyOrwYtpznQQtRlczldaaBn_tKeZxpCQLOi5QqnJr3Ng52xxyTMVqrYpmjcDQ06UnStKUUSt7no" width="50%"></p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_415944493104831712131878668" dir="ltr"><a href="#h_415944493104831712131878668">Trading Strategies</a></h2>
<p dir="ltr">Enter long positions when the price breaks above the neckline.</p>
<p dir="ltr">Place stop-loss orders below the right shoulder.</p>
<p dir="ltr">Determine take-profit levels based on the pattern's height from the breakout point.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/Ek5Z7_y3tIO2t9Nofo6uQ8Z0WIfmTLCZ3vseHk8tC6nYzmJdCP6ACgYdrn54BzyJ_-WqoS5mvQPyvnbH6bAe_IadB6NCWnSuBhiXW75O41c4su6MbL27Q4vbLLghp-EVgwnFIo2X8UTX7AVN5oTdGJM" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_740960748112841712131897813" dir="ltr"><a href="#h_740960748112841712131897813">Key Takeaways</a></h2>
<ol>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">The Head and Shoulders pattern is a powerful indicator of trend reversals, helping traders identify shifts in market sentiment.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Understanding the left shoulder, head, and right shoulder components offers crucial insights into the unfolding market dynamics.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Traders strategically enter short positions in a Head and Shoulders Top and long positions in a Head and Shoulders Bottom, optimizing their entry and exit points.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Effective risk management involves placing stop-loss orders at strategic points, mitigating potential losses during adverse market movements.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Volume analysis, coupled with symmetry awareness, adds confirmation to the pattern, and traders should exercise caution to avoid potential false signals.</p>
</li>
</ol>
<p>&nbsp;</p>
<div class="wow fadeInUp" data-wow-delay="0.1s" style="background: #e9f9ff; margin: 5px;">
<br />
<h3 style="padding-left:20px;">Liked What You Just Read? Share this Post:</h3>
<br />
<!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
<br />
</div>	
	
</main>

</div>
</div>
<!--left col end-->


<!--Right col start-->
<div class="col-lg-3 col-md-3 col-sm-6 col-12" style="padding-top: 10px; z-index:5;" align="center">
<div class="rightsidebar sticky-top">

   <div class="card">
   <br />
   <p style="color:#273158; font-weight:bold; padding-bottom:15px;">Module-4</p>

  <h2 class="name" style="color: #273158;">Advanced Chart Analysis</h2>
    <div class="desc">   
<ul style="line-height:40px; padding:10px;">  
						
                         <li><a href="../chart-patterns/" style="color:#cf9c0a; text-decoration:none;">Chart Patterns</a>
						<ul>
						<li><a href="../head-and-shoulders/" style="color:#cf9c0a; text-decoration:none;">Head and Shoulders</a></li>
						<li align="left"><a href="../double-tops-and-bottoms/" style="color:#273158; text-decoration:none;">Double Tops and Bottoms</a></li>
						<li align="left"><a href="../triangle-patterns/" style="color:#273158; text-decoration:none;">Triangles: Ascending, Descending, Symmetrical</a></li>
						</ul>
						 </li>
						 <li><a href="../candlestick-patterns/" style="color:#273158; text-decoration:none;">Candlestick Patterns</a>
						 <ul>
						 <li align="left"><a href="../single-candlestick-patterns/" style="color:#273158; text-decoration:none;">Single Candlestick Patterns</a></li>
						<li align="left"><a href="../multiple-candlestick-patterns/" style="color:#273158; text-decoration:none;">Multiple Candlestick Patterns</li>
						 </ul>
						 </li>
						  
</ul>						 
</div>
</div>

<br /><br />

<!--<h4>Twitter Updates</h4>-->

<a class="twitter-timeline" data-width="325" data-height="600" data-theme="light" href="https://twitter.com/themukulagrawal?ref_src=twsrc%5Etfw">Tweets by themukulagrawal</a> 
	  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
<br /><br />


<!--<h4 align="left">Learn Stock Market For Free</h4>
<iframe width="330" height="186" src="https://www.youtube.com/embed/Oop5AnndOgo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<br /><br />-->

<!--<h4 align="left">Next Chapters</h4>
<?php
if($nextchaptercount < 1)
{
?>
<div class="row">
<div class="col-lg-8 col-md-7 col-sm-8 col-8">
<p align="left">No More Chapter! Now You are Eligible to Participate in Quiz.<br />
<a class="btn btn-primary mt-2" href="#">Participate Now</a>
</p>
</div>
</div>
<?php	
}
else {
while($r = mysqli_fetch_array($next_chapters))
{
	$id = $r['id'];
	$chapter_name = $r['chapter_name'];
	 $alt_text = str_replace(" ","-", $chapter_name);
	$img = $r['chapter_image'];
		$blog_url = $r['blog_url'];
?>
<div class="row">
<div class="col-lg-4 col-md-5 col-sm-4 col-4"><img src="../../../admin/media/courseicons/<?php //echo $img; ?>" alt="<?php //echo $alt_text; ?>" class="img-fluid"></div>
<div class="col-lg-8 col-md-7 col-sm-8 col-8">
<p align="left"><strong><a href="../<?php echo $blog_url; ?>" style="text-decoration: none; font-size:14px;"><?php //echo $chapter_name; ?></a></strong><br />
</p>
</div>
</div>
<?php
}
}
?>
<br /><br />
-->

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

<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-62db9e23433a3e75"></script>

</body>

</html>

