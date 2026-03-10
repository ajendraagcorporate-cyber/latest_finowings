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

<h2 align="center" style="font-size:32px; font-weight:bold;">Interpreting Candlestick Patterns</h2>
<hr style="size:1px; color:#cf9c0a">

<p dir="ltr">Candlestick patterns play a crucial role in technical analysis, offering valuable insights into market sentiment and potential price movements. These visual representations of price action provide traders with essential information for making informed decisions. Let's explore the significance of interpreting candlestick patterns in stock trading.</p>
<p dir="ltr">&nbsp;</p>
<h2 id="h_9681090477061710482431506" dir="ltr"><a href="#h_9681090477061710482431506">Understanding Candlestick Patterns</a></h2>
<p dir="ltr">&nbsp;</p>
<h3 dir="ltr">1. What are Candlestick Patterns?</h3>
<p dir="ltr">Candlestick patterns originated from Japanese rice traders in the 18th century. They consist of individual candles that represent a specific time frame on a price chart. Each candle has a body and wicks, providing information about the opening, closing, high, and low prices during that period.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">2. Components of a Candlestick:</h3>
<p dir="ltr"><strong>Body:</strong> The rectangular area between the open and close prices.</p>
<table width="100%" align="center">
<tr>
<td>
<img src="https://lh7-us.googleusercontent.com/3k3T-Z9Jj7IdCMz3xJ3SrgS4BCpmjS6jtMTHBiI8FAJrXKEm-RJu7sbIAuhDi05uvuMHC8v4CMpRkc5BSBtaaiq8HfnP6XoFTIczpMEwN24CUvGhDS9_G9_tCKxF8DENcXUKAXPDMgITMWDMi5wbhW8" width="60%" align="center">
</td>
</tr>
</table>
<p dir="ltr">&nbsp;</p>
<p dir="ltr"><strong>Wicks (or Shadows):&nbsp;</strong>The thin lines above and below the body, indicating the high and low prices.</p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_67138702320901710482555105" dir="ltr"><a href="#h_67138702320901710482555105">Common Candlestick Patterns</a></h2>
<p>&nbsp;</p>
<h3 dir="ltr">1. Doji:</h3>
<p dir="ltr"><strong>Description:</strong> A candle with an open and close nearly equal, indicating market indecision.</p>
<p dir="ltr"><strong>Implication:</strong> Potential reversal or continuation, especially when found in a trending market.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">2. Hammer:</h3>
<p dir="ltr"><strong>Description:</strong> A small-bodied candle with a long lower wick, resembling a hammer.</p>
<p dir="ltr"><strong>Implication:</strong> Suggests potential reversal after a downtrend.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">3. Shooting Star:</h3>
<p dir="ltr"><strong>Description:</strong> A small-bodied candle with a long upper wick, resembling a shooting star.</p>
<p dir="ltr"><strong>Implication:</strong> Indicates potential reversal after an uptrend.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">4. Spinning Top:</h3>
<p dir="ltr"><strong>Description:</strong> A candle with a small body and long upper and lower wicks.</p>
<p dir="ltr"><strong>Implication:</strong> Represents market indecision; traders should look for confirmation from surrounding candles.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">5. Bullish Engulfing:</h3>
<p dir="ltr"><strong>Description:</strong> A bullish candlestick that completely "engulfs" the previous bearish candle.</p>
<p dir="ltr"><strong>Implication:</strong> Signals potential upward momentum and a reversal of a downtrend.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">6. Bearish Engulfing:</h3>
<p dir="ltr"><strong>Description:</strong> A bearish candlestick that completely "engulfs" the previous bullish candle.</p>
<p dir="ltr"><strong>Implication:</strong> Indicates potential downward pressure and a reversal of an uptrend.</p>
<p dir="ltr">These common candlestick patterns are essential tools for traders, providing insights into market sentiment and potential price movements. By recognizing and understanding these patterns, traders can enhance their ability to make well-informed trading decisions.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>Note :</strong> want to learn candle pattern in details click here[4.2 chapter]</p>
<h2 id="h_14222204567221710483054359"><strong id="docs-internal-guid-9ab16c8b-7fff-2e8b-6b85-9bfc99ee269a"><br></strong><a href="#h_14222204567221710483054359">Conclusion</a></h2>
<p>In the dynamic realm of stock trading, mastery of candlestick patterns empowers traders to read between the lines of market sentiment. The intricate dance of open, close, high, and low prices, depicted by each candlestick, unveils a narrative of potential trends and reversals. These visual cues, rooted in Japanese trading traditions, provide a nuanced understanding of market dynamics. As traders decode the language of patterns like Doji, Hammer, and Bullish Engulfing, they gain a strategic edge. It's crucial to remember that successful interpretation requires a holistic approach, considering volume and corroborative indicators. By honing this skill, traders can navigate market uncertainties with confidence, making well-informed decisions in pursuit of trading success.</p>
<br />
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
   <p style="color:#273158; font-weight:bold; padding-bottom:15px;">Module-1</p>

  <h2 class="name" style="color: #273158;">Introduction to Technical Analysis</h2>
    <div class="desc">   
<ul style="line-height:40px; padding:10px;">  
						 <li><a href="https://www.finowings.com/technical-analysis-new/understanding-the-basics/" style="color:#273158; text-decoration:none;">Understanding the Basics</a></li>
                         <li><a href="https://www.finowings.com/technical-analysis-new/types-of-price-charts/" style="color:#273158; text-decoration:none">Analyzing Price Charts</a>
						<ul>
						<li><a href="https://www.finowings.com/technical-analysis-new/types-of-price-charts/" style="color:#273158; text-decoration:none;">Types of Price Charts</a></li>
						<li align="left"><a href="https://www.finowings.com/technical-analysis-new/interpreting-candlestick-patterns/" style="color:#cf9c0a; text-decoration:none;">Interpreting Candlestick Patterns</li>
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

