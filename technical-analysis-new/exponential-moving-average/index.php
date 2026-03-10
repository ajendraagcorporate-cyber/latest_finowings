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

<h2 align="center" style="font-size:32px; font-weight:bold;">Exponential Moving Average (EMA)</h2>
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

<h2 id="h_446051226202171710492850784" dir="ltr"><a href="#h_446051226202171710492850784">Definition</a></h2>
<p dir="ltr">The EMA is similar to the SMA but places more weight on recent prices, making it more responsive to market changes. It assigns exponentially decreasing weights to older prices, giving more emphasis to the most recent data.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/alBCzWigfvwvKUpq66Li1wORggyn0EG4Vl_AbjPU86c2SUktiO32GhIkZ_bl6GZo7vdzWNkFx2LzjxhvvmR4Wm9c9B4-E9m7zxmcDJ8p-Ra_gpvUyYRVgvH260ey9wDVTIrvGd5w00Vsv3NFLAtirCs" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_683922291212271710492888630" dir="ltr"><a href="#h_683922291212271710492888630">Trend Identification</a></h2>
<p dir="ltr">The EMA offers a quicker response to price shifts, aiding in trend identification. By attributing greater importance to recent price movements, the EMA reacts more promptly to changes in the trend direction.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/ZVPNF8CHR-EXb0RT33mIbmi8OC6c2QCMjF_W73a5A0g7tiFvP-6zxW6bKvdeSukTieXkAu2T4VHU6vt-d8m5jXIJwbZbZqL-BNriFH_XzWaZNdROMhyVUvVcQwR5U2J5RtPgil5odFzwPMz7xZ3r6aA" width="100%"></p>
<p dir="ltr">&nbsp;</p>
<h2 id="h_509307520224951710492932558" dir="ltr"><a href="#h_509307520224951710492932558">Support and Resistance</a></h2>
<p dir="ltr">Similar to the SMA, the EMA also serves as dynamic support and resistance. Like the SMA, the EMA can help traders identify potential reversal points as prices approach or break through the average.</p>
<p dir="ltr"><strong>Example:</strong> As you can see in the above picture, on the left side(Uptrend) when prices come to SMA, take support and go upside. SMA is working as a Support and vice versa for resistance.</p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_719144283237971710492960856" dir="ltr"><a href="#h_719144283237971710492960856">Crossovers</a></h2>
<p dir="ltr">Crossovers occur when two EMAs intersect. For instance, when a short-term EMA crosses above a long-term EMA, it signals a potential trend reversal. Conversely, when a short-term EMA crosses below a long-term EMA, it suggests a potential trend reversal.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/TkvAkaFjwoEhW780it6HvOW8q7VHph6eq7YVnQiHWJju0PIwKZH5244RavYCipuD4qT-3UBJpyo6idI6RNv9Pm4dspcGwG6qlVac4X9Qx0dF36m5NtuUgZYn1E5atlA50BlaZwM5jA6uZziKq358KDM" width="100%"></p>
<p dir="ltr">In the above picture, the 20 EMA is crossing above the 55 EMA(1st Circle), then, there is a start of a bull trend. In the 2nd circle, 20 EMA is crossing below the 55 EMA, and then, there is a start of a bearish trend.</p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_868067205251501710493015481" dir="ltr"><a href="#h_868067205251501710493015481">EMA Trading Strategy</a></h2>
<p dir="ltr">This strategy is very simple and easy to use. Here, will use 2 Indicators EMA i.e. EMA 5 &amp; EMA 7 and another indicator named William %R. In William %R, the Setting will change in which upper band and lower band ratio which is in the style section as you can see in the given picture. Upper band - 40% and lower band - 50%.</p>
<p dir="ltr" align="center"><img src="https://lh7-us.googleusercontent.com/EKFJSVX5CCow52Qz4tFNdGpp7KJ3sSXs-u5o_3yl-orZHPK5aRFf0tJzrmcWH3PCTtmHsgCLOqK5aW00RuB-FkZeR8Q8ARRsPIPjvawwggv_YF9z4_sPTAJuiczf-UMOsmSkHL_ykyEFWUlyUsLeJB0" width="50%"></p>
<p dir="ltr">&nbsp;</p>
<p dir="ltr">Use: Open a chart of any stocks or index, apply 2 EMAs and change their length with 5 &amp; 7 and William %R.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>Trade:</strong> When EMA 5 crosses above the EMA 7 and Williams % R crosses above 40(Upper Band) then buy and hold until EMA 5 crosses below EMA 7 and Williams % R crosses below 50.<br>See the chart.&nbsp;</p>
<p dir="ltr"><br><img src="https://lh7-us.googleusercontent.com/SYWaL_fpUjZ3G8M-6Ak5TAdfFCXWZLLPIEYX3eP2MKhaYkOHBEUAWf_FHCLzqqf5d8_f94LVUbltAPcBmhVq42BfVUCPy_0H55O1p0LtIyN4XrA4JYuN4PVlK6I2rhiz4OR37oJMH8RRcUQ32EiqjD8" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Now in selling trade, EMA 5 Crosses below the EMA 7 and Williams % R crosses below the 50 take sell entry and holds until EMA 5 crosses above the EMA 7 and Williams % R crosses above 40. See the chart&hellip;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/QJGoj1AiIbyMmvI36czzRCp0Tnm9ukZkauY3dfkEM0hfIqB_LPbSXejsH5sfZdG754N6s-9bEYHdPoLYvwp7WF7CPhF8bHji55NKvS9kTWDLTKpscA6OtyhiA1ElnjfjTJgmaiR-FFFDwc5mpbbj_0Y" width="100%"></p>
<p dir="ltr">&nbsp;</p>
<h2 id="h_948638861272701710493495784" dir="ltr"><a href="#h_948638861272701710493495784">Conclusion</a></h2>
<p dir="ltr">Exponential Moving Averages (EMA) bring a dynamic and responsive dimension to technical analysis. Their emphasis on recent price data makes them adept at capturing current market trends swiftly. EMAs, with their sensitivity, help traders identify trends, potential reversals, and market momentum effectively. The incorporation of EMAs into trading strategies adds a nuanced layer to decision-making, offering a valuable tool for navigating the ever-changing landscape of financial markets.</p>
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
   <p style="color:#273158; font-weight:bold; padding-bottom:15px;">Module-2</p>

  <h2 class="name" style="color: #273158;">Core Technical Indicators</h2>
    <div class="desc">   
<ul style="line-height:40px; padding:10px;">  
						
                         <li><a href="https://www.finowings.com/technical-analysis-new/moving-averages/" style="color:#cf9c0a; text-decoration:none;">Moving Averages</a>
						<ul>
						<li align="left"><a href="https://www.finowings.com/technical-analysis-new/simple-moving-average/" style="color:#273158; text-decoration:none;">Understing Simple Moving Average (SMA)</a></li>
						<li align="left"><a href="https://www.finowings.com/technical-analysis-new/exponential-moving-average/" style="color:#cf9c0a; text-decoration:none;">Understing Exponential Moving Average (EMA)</a></li>
						<li align="left"><a href="https://www.finowings.com/technical-analysis-new/golden-cross-death-cross-strategies/" style="color:#273158; text-decoration:none;">Golden Cross and Death Cross</a></li>
						</ul>
						 </li>
						<li><a href="https://www.finowings.com/technical-analysis-new/relative-strength-index/" style="color:#273158; text-decoration:none;">Relative Strength Index (RSI)</a></li>
						  <li><a href="https://www.finowings.com/technical-analysis-new/bollinger-bands/" style="color:#273158; text-decoration:none;">Bollinger Bands</a></li>
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

