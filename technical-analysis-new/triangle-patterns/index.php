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

<h2 align="center" style="font-size:32px; font-weight:bold;">Triangle Patterns: Understanding and Trading Strategies</h2>
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

<p dir="ltr">Triangles, fundamental geometric shapes, not only captivate mathematicians but also hold significant importance in the realm of financial markets. In this blog post, we'll delve into the simplified understanding of triangle patterns and explore practical strategies for trading them.</p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_810940563113481712145957559" dir="ltr"><a href="#h_810940563113481712145957559">Triangle Patterns Explained</a></h2>
<p dir="ltr">Triangles in mathematics are fascinating structures, and when applied to finance, they become valuable indicators for traders. There are three primary types of triangle patterns: Ascending, Descending, and Symmetrical.</p>
<p dir="ltr"><strong>1. Ascending Triangle:</strong> An ascending triangle signifies a bullish continuation pattern. It forms when a horizontal resistance line meets an ascending support line. Traders keenly watch for a breakout above the horizontal resistance, indicating a potential upward trend in the market.</p>
<p dir="ltr"><strong>2. Descending Triangle:</strong> Conversely, a descending triangle is a bearish continuation pattern. It emerges when a horizontal support line intersects with a descending resistance line. A breakout below the horizontal support is considered a signal for traders to anticipate a bearish move.</p>
<p dir="ltr"><strong>3. Symmetrical Triangle:</strong> Symmetrical triangles are neutral patterns, characterized by converging trendlines. They represent a phase of market indecision and potential consolidation. Traders await a breakout above the upper trendline for a bullish move or below the lower trendline for a bearish trend confirmation.</p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_827456067133521712146023974"><a href="#h_827456067133521712146023974">Formation of these Patterns</a> <br><br></h2>
<h3>Ascending Triangle:</h3>
<p dir="ltr"><strong>Uptrend Initiation:</strong> Begins during an existing uptrend, reflecting a bullish market sentiment.</p>
<p dir="ltr"><strong>Horizontal Resistance:</strong> Sellers establish a horizontal resistance level amid the uptrend.</p>
<p dir="ltr"><strong>Ascending Support Line:</strong> Buyers intervene, creating an ascending trendline, forming higher lows.</p>
<p dir="ltr"><strong>Convergence:</strong> Price oscillates between horizontal resistance and ascending support, shaping a triangle.</p>
<p dir="ltr"><strong>Breakout:</strong> Bullish breakout occurs as the price breaches horizontal resistance, signaling potential uptrend continuation.</p>
<p dir="ltr" align="center"><img src="https://lh7-us.googleusercontent.com/MhUNNcXHBM2K_2c5jE1fkbJn7vfupXnBZw80cW4khNP2jfAFjfOWtCgGsbB0v4NZ71L8mFF8Ds06sWNhh0LgraLsGl3yAqDZ1IZh0L00WYQWspp5jdjOOv88KNTCqCFgSTDiYgZpenGZJPfjZj1plkU" width="50%"></p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Descending Triangle:</h3>
<p dir="ltr"><strong>Downtrend Establishment:</strong> Starts within a downtrend, indicating a bearish market sentiment.</p>
<p dir="ltr"><strong>Horizontal Support:</strong> Buyers aim to halt the price decline, forming a horizontal support level.</p>
<p dir="ltr"><strong>Descending Resistance Line:</strong> Sellers prevail, establishing a descending trendline with lower highs.</p>
<p dir="ltr"><strong>Convergence:</strong> Price oscillates between horizontal support and descending resistance, forming a triangle.</p>
<p dir="ltr"><strong>Breakout:</strong> Bearish breakout unfolds as the price breaches horizontal support, indicating potential downtrend continuation.</p>
<p dir="ltr" align="center"><img src="https://lh7-us.googleusercontent.com/Uk7BDU_lQYVVdbR_t9YgW_-w5RHMnUaSP9qZoeSE-ut1B430JfQcXQ0OYG7dLr8GoaU-Y2_3hUFj5LVWvnIDdn3SPSLofiNq8l3JKOIY3ZFUbPAj7B23qv0cNFV0ebMQBddT38OUI1_kbKuvYekY4o0" width="50%"></p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Symmetrical Triangle:</h3>
<p dir="ltr"><strong>Market Indecision:</strong> Emerges during market indecision when neither bulls nor bears dominate.</p>
<p dir="ltr"><strong>Converging Trendlines:</strong> Trendlines converge as the price forms lower highs and higher lows.</p>
<p dir="ltr"><strong>Contraction:</strong> Volatility decreases as the price moves toward the apex, signaling a potential breakout.</p>
<p dir="ltr"><strong>Breakout:</strong> Breakout can happen in either direction, requiring confirmation for a decisive move beyond trendlines.</p>
<p dir="ltr" align="center"><img src="https://lh7-us.googleusercontent.com/DvlrYN1-m5yPdbZMcRES9UQ8LEWNPuaYMts44PM5GHNw26q378pDdwo3SqfIT1jVw0Y4ZtHI4qEOijkE9fz5vJVqepd3LGZshoOp2iJ-AK_sqSju06f9wK7usIT2-LEGb_PrFI8aetf2ITAdaNR68XU" width="50%"></p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_154302408180261712146344143" dir="ltr"><a href="#h_154302408180261712146344143">How to Trade Triangle Patterns</a></h2>
<p dir="ltr">Trading triangle patterns involves a systematic approach and an understanding of market dynamics. Here are key steps to consider:</p>
<p><strong>&nbsp;1. Identifying the Pattern:</strong></p>
<p dir="ltr">Recognize ascending, descending, or symmetrical triangles on price charts using mathematical models or financial analysis tools.</p>
<p><strong>&nbsp;2. Confirmation through Breakouts:</strong></p>
<p dir="ltr">Wait for decisive breakouts beyond trendlines. Ascending triangles require an upward breakout, descending triangles need a downward breakout, and symmetrical triangles can break out in either direction.</p>
<p><strong>&nbsp;3. Volume Analysis:</strong></p>
<p dir="ltr">Consider volume as an essential factor during breakouts. Higher volume adds credibility to the move, indicating increased market interest and participation.</p>
<p><strong>&nbsp;4. Setting Price Targets:</strong></p>
<p dir="ltr">Establish clear price targets by measuring the distance from the widest part of the triangle and applying it to the breakout point. This projection aids in setting realistic profit-taking goals.</p>
<p><strong>&nbsp;5. Risk Management:</strong></p>
<p dir="ltr">Implement effective risk management strategies by setting stop-loss orders to limit potential losses. Discipline in risk management is crucial for long-term trading success.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Example:<br><br>Ascending Triangle:&nbsp;</h3>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/9e8n58lP6t0R8xFdjWOAckC2AyUghESJQtjRoh8gPKmdj0Qdt2zUttbRayiZF0r1ZQn1VGQc1-OTqOd1kmvZoLWxlvnOtrjiaWep0w3cZOGapyvPZg95-eR3J-MXd9H_Hfv4p6KfBEQ1K_4sk25oYC8" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Descending Triangle:</h3>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/tPqH0RG830nBwAthiBSKVZGqEQgFP27fFKhq7CjcDZ9-8Jvj5UXqG5utNhpvirG6KQIf6w4_WVKwur7sYGZhKoIBhd3lJxZFMthCC9LMwVFfES2aXTQSkK1Auk0kjsr-LL611JJoeu_VEqKFZ03MX0k" width="100%"></p>
<p dir="ltr">&nbsp;</p>
<h3 dir="ltr">Symmetrical Triangle:</h3>
<h3 dir="ltr"><img src="https://lh7-us.googleusercontent.com/QiMC760cr_h_v-y_gxnkWni9DC8c-JI9czZNhuKwjb0NyCw0-FjexYwPyTRPxqBUqszlKlVNB4_mkVb3iDE_iDXHYloolR_LcIAsRwUl7CTm6Eb4fLI6sU8fWCjn6oVvt7h9EbAhJXx0pEhGXXPAPMI" width="100%">&nbsp;</h3>
<p><strong>&nbsp;</strong></p>
<h2 id="h_897162147220271712146718278" dir="ltr"><a href="#h_897162147220271712146718278">Key Takeaways</a></h2>
<p dir="ltr"><strong>Bullish or Bearish Bias:</strong>&nbsp;Ascending triangles suggest potential upward trends, descending triangles indicate bearish biases, and symmetrical triangles require additional confirmation.</p>
<p><strong>Patience is a Virtue:</strong>&nbsp;Triangle patterns involve periods of consolidation. Patience is essential in waiting for breakouts and confirming moves to avoid false signals.</p>
<p><strong>Combine with Other Indicators:</strong>&nbsp;Enhance the robustness of your trading strategy by combining triangle patterns with other technical indicators like moving averages, RSI, or MACD.</p>
<p><strong>Continuous Learning: </strong>Stay informed about market trends, economic indicators, and evolving trading strategies for continuous adaptation and improvement.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Triangle patterns, with their mathematical simplicity and practical trading applications, offer traders a powerful toolkit to navigate the complexities of financial markets. Approach them with a blend of understanding and strategy for effective decision-making.</p>
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
						<li align="left"><a href="../head-and-shoulders/" style="color:#273158; text-decoration:none;">Head and Shoulders</a></li>
						<li align="left"><a href="../double-tops-and-bottoms/" style="color:#273158; text-decoration:none;">Double Tops and Bottoms</a></li>
						<li align="left"><a href="../triangle-patterns/" style="color:#cf9c0a; text-decoration:none;">Triangles: Ascending, Descending, Symmetrical</a></li>
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

