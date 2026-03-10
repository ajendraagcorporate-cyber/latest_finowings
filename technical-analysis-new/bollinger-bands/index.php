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

<h2 align="center" style="font-size:32px; font-weight:bold;">Demystifying Bollinger Bands: A Share Market Trader's Essential Guide</h2>
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

<h2 id="h_38277937214301710508873704" dir="ltr"><a href="#h_38277937214301710508873704">Understanding Bollinger Bands</a></h2>
<p dir="ltr">Let's break down Bollinger Bands in simpler terms. These are like magic glasses for traders, designed by John Bollinger to help us see how prices in the market might dance around. Picture them as three lines on a chart &ndash; a middle one (SMA), and upper and lower ones that act like boundaries. Together, they offer clues about what's happening in the market, like trends and possible changes.</p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_31144846221471710508893575" dir="ltr"><a href="#h_31144846221471710508893575">Breaking Down the Parts</a></h2>
<p dir="ltr"><strong>Middle Band (SMA): </strong>Think of this as the average of prices, a steady starting point.</p>
<p dir="ltr"><strong>Upper Band:</strong> It's like the ceiling of expected prices. If prices soar above it, it could mean things are getting too expensive.</p>
<p dir="ltr"><strong>Lower Band:</strong> This is like the floor of expected prices. If prices dip below it, it might suggest things are getting too cheap.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/6LvKWKpVCtnzvOyqlE0FtCmefulgvSV_Q6JxrER2ogAn99MRa0Q_l9zwISxtd0sJrhc4XRS9aCuvI9RApY_ruPSAhwZ5zcLiyQ1xuyHTPxzFoLbkFFhPuPGM2rPrdwQ0UhGub6x6ZG8Zm8MkPuDa-84" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_51996987534621710508924890" dir="ltr"><a href="#h_51996987534621710508924890">How They Work</a></h2>
<p dir="ltr">Bollinger Bands are a bit like mood rings for the market. They change based on how wild or calm things are. If they spread out, it means the market is in an unpredictable mood. If they squeeze together, it's like the market is taking a breather. Traders watch this to guess if the trend might do a flip, if things are getting too pricey, or if there's not much action.</p>
<p dir="ltr">When price comes to the lower band then traders create buy positions and price comes to upper band and price starts decreasing then traders create sell positions. But this technique does not help traders to make profit.&nbsp;</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/d1IRuNuV5DDh3Vn7FTLe0nThbHtkBbtmTlYYKUh4ICwE-92k53txS9Gcw0zQVogxzM4KiGVI2Zk0p5ZIaMZzOUx5G1W6whNZme8AxmrUxVny7vyOJmYpLf9HYeUtFB_Xq4c2ukZBRfWjsfaBZuO_mJU" width="100%"></p>
<p dir="ltr">In the above pic, there is a sideways range in the squeeze zone and in wide range a high momentum made by price. So, bollinger bands tell us the market view.</p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_28766308844911710508951799" dir="ltr"><a href="#h_28766308844911710508951799">Tricks to Remember</a></h2>
<p dir="ltr"><strong>Bollinger Band Squeeze:</strong> When the bands squeeze, it's like the quiet before a storm. Traders see this and think, "Hey, something big might be about to happen!" As you can see in the above pic after the squeeze range there is a big move.&nbsp;</p>
<p><strong><img src="https://lh7-us.googleusercontent.com/d1IRuNuV5DDh3Vn7FTLe0nThbHtkBbtmTlYYKUh4ICwE-92k53txS9Gcw0zQVogxzM4KiGVI2Zk0p5ZIaMZzOUx5G1W6whNZme8AxmrUxVny7vyOJmYpLf9HYeUtFB_Xq4c2ukZBRfWjsfaBZuO_mJU" width="100%"></strong></p>
<p dir="ltr"><strong>Riding the Trend: </strong>In a trend, prices often stick close to one of the bands. Traders ride this wave, going with the flow.</p>
<p dir="ltr">In this pic see the wide range, price is running along with the upper band this indicates a strong trend and traders can enjoy this rally.&nbsp;</p>
<p><strong><img src="https://lh7-us.googleusercontent.com/35lsaXPRwg1vj1O3GbVqz1u-BcTk0l69CbdDdgHxmfuby8CTvYmriFRMLeB_lMxRMiC6Y1kDcmHydVykael0a6eYg2dJ25hN_v5da97CKj19UEvRieuCHEG4fKVO5FnJdvBG5xCVFMKlnZHwYacPotk" width="100%"></strong></p>
<p dir="ltr"><strong>Failure Swings:</strong> If prices don't quite reach one of the bands, it's like a signal that the trend might be gearing up for a change.See the rectangle in the pic, here the price is not trying to touch the band so this indicates that price can change any side move.</p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_2556872671931710509032415" dir="ltr"><a href="#h_2556872671931710509032415">Strategies</a></h2>
<p dir="ltr">As of all indicator traders can make several strategies using Bollinger bands. Here are some strategies that would really help you in trading.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Strategy 1:</h3>
<p dir="ltr">Here will use only BB indicator(Bollinger bands indicator) and will not even change the settings.&nbsp;</p>
<p dir="ltr"><strong>Trade:</strong> You all know that price comes to the upper band then sell the stocks/indices and conversely price comes to the lower band then buy the shares. But instead of using this will wait for the price to break the lower band and come again in the band then take buy trade.&nbsp;</p>
<p dir="ltr">Same vice versa for selling. Price comes, breaks the upper band and enters again in the band take sell entry. The time frame will be 15 minutes. Have a look at the below chart.&nbsp;</p>
<p>In sell side SL will be the high of the previous candle from entry candle and in buy side SL will be the low of previous candle from entry candle.&nbsp;</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/Z3--HsjvV1DHCRPfgHSMncmO0d8E4uEqxMMyW8JXOI2kc1Axu-2WP1SkfqDPlA466P3W3K8h_aUT8uJxxswR5jhwajVGZCyOdFjr1Mrzu_SzpWjSRRZTvZmVNpE2mMKzPlj4pOQkuwxaWq1MqAywW24" width="100%"></p>
<p dir="ltr">In the chart, the 1st arrow is showing the price came below the lower band and entered again in the band zone. This is buy entry and Put the SL at whatever the low has been created. The 2nd arrow is showing the price coming above the upper band and entering again in the band zone. This is a sell entry and put the SL at whatever the high has been created.</p>
<p><strong>&nbsp;</strong></p>
<h2 dir="ltr">Strategy 2:</h2>
<p dir="ltr"><strong>BB Squeeze and trendline breakout Strategy</strong></p>
<p dir="ltr">In this strategy, you have to apply a BB indicator(Bollinger bands) in 5 minutes and change the StdDev(Standard deviation) to 1.5 . See the picture</p>
<p dir="ltr" align="center"><img src="https://lh7-us.googleusercontent.com/SpbZhb-eMw6JYo-fAr7KsTMKV-_kQ3-H4MLO5EobJjCaJg0OlqoRLwYQI3leSQ0x-3OZ02J30AyxmnlGi_sjA7LEoAkrROh2bZxnsZ8Xy8Uz3_n15RTmHKhlcPFw5BNyVjZYueALCuNMAykC0PZL4Zs" width="50%"></p>
<p dir="ltr">Then find the squeeze area then apply the trendline also. Now when the market breaks this line and comes out from the band then take entry.&nbsp;</p>
<p dir="ltr"><strong>Trade:</strong>&nbsp;Price gives breakout of trendline and comes from the bands then you can take buy entry. Conversely price breaks down the trendline and comes out from the band then you can take sell entry.</p>
<p dir="ltr">&nbsp;<img src="https://lh7-us.googleusercontent.com/G1D5u3EbGP0D3aW9QnIX_9Ft5R_MWZAa90amECa4JhzFrtO2pG6eZI8NwRBzq5EkCfqmxZzGcq5RwYHqg_1K2yqdHynO3cjh7HfNmR2MgvkIuyiW4k_0qcOzsInEIlE8DwbAt1sRctEo_Ai5FYuFhEQ" width="100%"></p>
<p dir="ltr">Look at this chart, there is a trend touching the 2 highs and bollinger bands are also squeezing then in the circle price is breaking out and also coming out from bands it&rsquo;s a buy entry.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Similarly will take sell entry for example -&nbsp;</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/YyHmF-lnX1EzoLYeTMQqBcEoXyCyr4xyzBEhdRMECNJjs_H-VFv_-Vt2eDic3kLXIf3j7C8S-4z5KyY4xoLs6FUQrokDbVX2eQOax8coRP0QIxnWy_Az68Q3E_cb4agc5OokelqegVC00dpjlMCDQmk" width="100%"></p>
<h2 id="h_156853382100941710509487489"><strong><br></strong><a href="#h_156853382100941710509487489">Wrapping It Up</a></h2>
<p dir="ltr">In a nutshell, Bollinger Bands are like a secret weapon for traders. They're the Sherlock Holmes of the financial world, helping traders deal with the unpredictability of markets and giving them a heads-up about potential changes. By getting comfortable with Bollinger Bands, traders can stride with more confidence through the ever-changing landscape of finance.</p>
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
						
                         <li><a href="https://www.finowings.com/technical-analysis-new/moving-averages/" style="color:#273158; text-decoration:none;">Moving Averages</a>
						<ul>
						<li align="left"><a href="https://www.finowings.com/technical-analysis-new/simple-moving-average/" style="color:#273158; text-decoration:none;">Understing Simple Moving Average (SMA)</a></li>
						<li align="left"><a href="https://www.finowings.com/technical-analysis-new/exponential-moving-average/" style="color:#273158; text-decoration:none;">Understing Exponential Moving Average (EMA)</a></li>
						<li align="left"><a href="https://www.finowings.com/technical-analysis-new/golden-cross-death-cross-strategies/" style="color:#273158; text-decoration:none;">Golden Cross and Death Cross</a></li>
						</ul>
						 </li>
						 <li><a href="https://www.finowings.com/technical-analysis-new/relative-strength-index/" style="color:#273158; text-decoration:none;">Relative Strength Index (RSI)</a></li>
						 <li><a href="https://www.finowings.com/technical-analysis-new/bollinger-bands/" style="color:#cf9c0a; text-decoration:none;">Bollinger Bands</a></li>
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

