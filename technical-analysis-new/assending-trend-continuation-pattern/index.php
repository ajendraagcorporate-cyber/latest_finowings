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
  width: 350px;
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

<h2 align="center" style="font-size:32px; font-weight:bold;">Ascending Trend Continuation Pattern</h2>
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

<p dir="ltr">Hey! Today, let's break down the mystery of ascending trend continuation patterns&mdash;your go-to tools for understanding market moves. No complex jargon here; let's explore triangles, bullish flags, symmetrical triangles, pennants, falling wedges, and the revered inverse head and shoulders. Get ready for some simple insights into these market maneuvers!</p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_4037839228061711094364955" dir="ltr"><a href="#h_4037839228061711094364955">1. Triangle: A Famous Pattern</a></h2>
<p dir="ltr">Triangles are like suspense creators in the market. An ascending triangle, with its flat top and rising lows, is a setup for a breakout. Imagine the market gathering energy before a bullish surge. When that flat top breaks, it's often a cue to hop on the bullish ride</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/VsRMEgfFtFUUgkQJZNTs2J5ocmJNkXVbsCwV7X7kjXUoSR2L8clLboEMn4bV1JTZvTejQIjS2iwAAItbB-q5VJEfrGnR-xozCQ1MLcF6UoetSQIWJZwsztFeaZiTvBnPLtoIdUDZXLT3VvjC8UmYFEI" width="100%"></p>
<p dir="ltr">Here price gives breakout and moves upside.</p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_48267605518651711094405057" dir="ltr"><a href="#h_48267605518651711094405057">2. Bullish Flag: Going with the Flow</a></h2>
<p dir="ltr">Picture a flag waving in the wind&mdash;now imagine it in the stock market. The bullish flag is a post-momentum breather, a signal that the uptrend is taking a quick break. The pole represents the first strong move, and the bullish flag is a short pause before the next upward push. Look for that flag breakout&mdash;it's your sign to get back in the game.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/ockfxr4dJX4f2kyPr7N9P0zw4naTipFnVvPzzCLml5cBlzeAg9Hz02O6H1itBMpgPLlEJBkvLqkfATeBasSIwHe17jHm22UWsE7i4cCjhB1pcWkms62RZynSuPkzyddfzmjz7uHw1HTrXa1PPprwbVE" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_9840476425081711094446627" dir="ltr"><a href="#h_9840476425081711094446627">3. Symmetrical Triangle: Finding Balance</a></h2>
<p dir="ltr">Symmetrical triangles help the market find balance. They form when highs and lows come together, creating converging trendlines. An ascending symmetrical triangle, with a flat top and rising bottom, suggests bullish potential. It's like the market catching its breath before the next move. Breakouts can go either way, so stay alert. It's not certain that breakout should be upwards.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/nv-5ovOV4SOzUS5Ajwx29izKwW5OfyRz-jrOrXxNE9JuKExIDDEa0nbGYMHk5klX2e-PlmYKreJugiZsn1THHcc6UWxFqCy2Ki-yCQy_V-mTmOydtD5zbBYvuI6nQY5n5iye4jDFhh_a5-uhEVk64bU" width="100%"></p>
<p dir="ltr">&nbsp;</p>
<h2 id="h_51348703834271711094475799" dir="ltr"><a href="#h_51348703834271711094475799">4. Pennant: Small But Mighty</a></h2>
<p dir="ltr">Think of a pennant as a mini symmetrical triangle but with a punch. It shows up after a strong price move, indicating a quick breather. An ascending pennant leans towards a bullish continuation, signaling the market is getting ready for another upward sprint.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/hvdpUBvTuAbJauRKuGCcb5li0pYAjCRzyKWSkpX4VeEENfXcra_KzLBqTAZTzImT-fQAOiYsf_TWWF-hHBxYAlk_f_DYb9wn0a9FFN-Js-GSyLDGR2bjGCr4iyH-sgzASpKFFqR1y7mY4HaQ8sLbWn0" width="100%"></p>
<p dir="ltr">&nbsp;</p>
<h2 id="h_82100875639881711094548945" dir="ltr"><a href="#h_82100875639881711094548945">5. Inverse Head and Shoulders: The Turnaround Expert</a></h2>
<p dir="ltr">A favorite among analysts, the inverse head and shoulders is a reversal expert. It shows up after a downtrend and looks like a regular head and shoulders but flipped upside down. The neckline is crucial; breaking it often signals a shift from bearish to bullish vibes.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/XxWq7C9nCG3oYEF2DuSACddpeC7uHMXSfUCgzFMfD_pPhRemh2c784RScyxhH0k6wZFNpnfuKp7V86KrDDmzTnOrJ6k43EgHKne_Dp2K2d_Jo8xqLfFkIKl1Yj_OjNCIZDFbGHm8wDUikhevkzwdHdU" width="100%"></p>
<p dir="ltr">&nbsp;</p>
<h2 id="h_48315196456751711094580930" dir="ltr"><a href="#h_48315196456751711094580930">Tips for Success</a></h2>
<br />
<h3 dir="ltr">Confirm Breakouts:</h3>
<p dir="ltr">Always wait for signs like a breakout or a significant price move before deciding based on these patterns.</p>
<h3 dir="ltr">Stay Safe with Risk Management:</h3>
<p dir="ltr">Use stop-loss orders, especially in shaky markets. Remember, these patterns guide but don't guarantee.</p>
<h3 dir="ltr">Keep Learning:</h3>
<p dir="ltr">Markets change, so should your strategies. Keep learning, stay updated, and adapt.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">In a nutshell, ascending trend continuation patterns are your guides to understanding market dynamics. By grasping these simple patterns and combining them with basic indicators, you'll have a handy toolkit for your trading adventures. Happy trading, and may your journey be filled with successful market rides!</p>
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
   <p align="center" style="color:#273158; font-weight:bold; padding-bottom:15px;">Module-3</p>

  <h2 class="name" style="color: #273158;">Price Levels and Patterns</h2>
    <div class="desc">   
<ul style="line-height:40px; padding:10px;">  
						 <li><a href="../support-and-resistance/" style="color:#273158; text-decoration:none">Support and Resistance</a></li>
						 <ul>
						 <li><a href="../trendlines/" style="color:#273158; text-decoration:none">Trendlines</a></li>
						 <li><a href="../support-and-resistance-lines/" style="color:#273158; text-decoration:none">Drawing Support and Resistance Lines with Strategies</a></li>
						 <li><a href="../fibonacci/" style="color:#273158; text-decoration:none">Fibonacci</a></li> 
						 </ul>
						 </li>
                         <li><a href="../trend-analysis/" style="color:#cf9c0a; text-decoration:none">Trend Analysis</a>
						 <ul>
						  <li>Trend Reversal </li>
						  <li align="left">Trend Continuation Patterns 
						  <ul>
						  <li><a href="../assending-trend-continuation-pattern/" style="color:#cf9c0a; text-decoration:none">Assending Trend Continuation Pattern</a></li>
						  <li><a href="../bullish-rectangle-trend/" style="color:#273158; text-decoration:none">Bullish Rectangle Trend Continuation Pattern</a></li>
						  <li><a href="../bullish-flag-trend-continuation-pattern/" style="color:#273158; text-decoration:none">Bullish flag Trend Continuation Pattern</a></li>
						  <li><a href="../bullish-pennant-trend-continuation-pattern/" style="color:#273158; text-decoration:none">Bullish Pennant Trend Continuation Pattern</a></li>
						  <li><a href="../descending-trend-continuation-patterns/" style="color:#273158; text-decoration:none">Descending Trend Continuation Pattern</a></li>
						  <li><a href="../bearish-rectangle-patterns/" style="color:#273158; text-decoration:none">Bearish Rectangle Trend Continuation Pattern</a></li>
						 <li><a href="../bearish-flag-trend-pattern/" style="color:#273158; text-decoration:none">Bearish Flag Trend Continuation Pattern</a></li>
						  <li><a href="../bearish-pennant-trend-pattern/" style="color:#273158; text-decoration:none">Bearish Pennant Trend Continuation Pattern</a></li>
						  </ul>
						  </li>
						  
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

