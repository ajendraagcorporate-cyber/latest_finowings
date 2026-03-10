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

<h2 align="center" style="font-size:32px; font-weight:bold;">Charts Analysis and Types of Charts Used in Technical Analysis</h2>
<hr style="size:1px; color:#cf9c0a">

<h2 id="h_8336598357241710329711395" dir="ltr"><a href="#h_8336598357241710329711395">Chart Analysis</a></h2>
<p dir="ltr">In any stock chart, the process of analyzing any price changes that have occurred over time is called chart analysis. In other words, we can also say that reading the price behavior of any share chart is called chart analysis, how the price moves, and to read this behavior, we use many studies and indicators. This is covered in detail in the last few chapters and will be discussed further in the next chapters.</p>
<p>&nbsp;</p>
<h3 id="h_68627202019311710329745507" dir="ltr">What are the Types of Charts used in Technical Analysis?</h3>
<p dir="ltr">In technical analysis, there are many types of charts that we analyze. However, we will focus on the most commonly used types of charts.</p>
<p dir="ltr" role="presentation">&nbsp;</p>
<h2 id="h_942317001141291710330980250"><a href="#h_942317001141291710330980250">1. Line Charts</a></h2>
<p>Line chart is the most commonly used chart for technical analysis and it is very clear and free of noise. &ldquo;A line chart is a graphical representation of the price of security or assets over time. It connects a series of data points with a line. The line chart only shows the closing value of a security.&rdquo;&nbsp;</p>
<p dir="ltr"><strong>History:</strong> According to historical aspects, the invention of charts was credited to William Playfair. He used line charts to track the changes by connecting them with a straight line. There were 43-line chart variants developed by William Playfair to explore the data using time and value series.&nbsp;</p>
<p dir="ltr"><strong>Use of Line Charts:</strong> A line chart is the most basic and common chart used in technical analysis which is represented by a graphical representation of lines and dots. It is quite simple in comparison to other complicated charts.&nbsp;</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/B9gOvdU9L5MLQKaroSSkX8FEvqapV-Nhl2wI2VDi5yNNYgtZVz3mltatODx8IJZHxFTav9AYPnqLaU9WvdyBkz1sVi6L9XevD2NM9oe3UT6MWhBLjQ6YPh-mZmTquHH--dGcmZe732-a5ffyrgkXj-A" width="100%" height="100%"></p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">A line chart helps traders identify the trend and movement of the stock. You can track the dots of the line chart as the closing price which moves to form the line chart. Traders use a line chart to spot and track the closing prices. The closing price is considered the strongest movement that assists in finding strength in a particular stock.&nbsp;</p>
<p dir="ltr">Some of the chart formations in technical analysis such as channel patterns, head and shoulder, and double-top patterns are used to analyze a closing basis view.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_28724592150201710331009292" dir="ltr"><a href="#h_28724592150201710331009292">2. Candlestick(candle) Charts</a></h2>
<p dir="ltr">A candlestick chart is also known as a Japanese candlestick chart or K-line is used to analyze the past trends of an asset or security. It is a method of representation that represents the movement and stability of the stock. This chart is the most used chart in technical analysis.&nbsp;</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/qdfSvk8oUvp5zndNxDWURyMf20B8_R9ELNYmfDpC94f7qhvCj8DMtLSCghm58KeIG1oIvlLs35jzDMnMOnkgBnHpJt-5SZSfeXbQQZ4vlsf3xbpHyF2SXe9If6hvWnFR2rSlCSOv6E0DCGN8tQlw8gI" width="100%" height="100%"></p>
<p dir="ltr">As the price moves, candles are formed, which create the chart. There are many types of candles, which we have studied in the candles chapter. If you have not read it, you can click on the {link} to read it.</p>
<p dir="ltr"><strong>History:</strong>&nbsp; As we know, Technical analysis was introduced by Charles Dow during the late 1800s, but chart analysis was not invented until Munehisa Homma &ndash; a Japanese rice trader decided to use a candlestick chart to trade rice. He represented the prices graphically on the charts and analyzed the concept of candlestick patterns chart. Eventually, the patterns and ideas started building too many candlestick patterns</p>
<p dir="ltr"><strong>Use of Candlestick Chart:</strong> A candlestick pattern in technical analysis is of utmost importance because it recognizes the movement of the stock price. Traders use candlestick patterns to track and predict the price of the security.&nbsp;</p>
<p dir="ltr">A candle shows high, low, open and close prices and is of two colours- red candles refer to the bearish movement and green candles refer to the bullish movement.&nbsp;</p>
<p dir="ltr">&nbsp;</p>
<p dir="ltr">Different kinds of candles are created during the price movement of a security or an asset.&nbsp;</p>
<p dir="ltr">But some of the most powerful candles are:&nbsp;</p>
<ol>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Doji</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Dragonfly Doji</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Hammer &amp; Bullish Engulfing.</p>
</li>
</ol>
<p dir="ltr">You can read these candle patterns in detail by clicking here:{4.2.1 &amp; 4.2.2}</p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_757676117160611710331056291" dir="ltr"><a href="#h_757676117160611710331056291">3. Bar Chart</a></h2>
<p dir="ltr">Bar charts are a common way to visualize the price movements of assets or securities. They are composed of multiple price bars, each representing the price action over a specified time period. These bars typically display the open, high, low, and closing (OHLC) prices, although this may be simplified to show only the high, low, and close (HLC) prices.</p>
<p dir="ltr"><strong>History:</strong> A traditional bar chart was invented during the 1700s to perform the analysis of exports and imports of Christmas goods to Scotland. The bar chart was made to compare different years and the goods produced.&nbsp;</p>
<p dir="ltr">The bar chart initiated the connection with technical analysis when traders and investors wanted to analyze and compare a new price each minute. Bar charts are similar to candlestick charts that interpret similar information but in unique ways.&nbsp;</p>
<p dir="ltr"><strong>Use in Technical Analysis:</strong> &nbsp;Bar charts are essential for traders and investors as they display opening, highest, lowest, and closing prices for each period. Long bars signal high volatility, while short bars indicate low volatility.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/nyTylSE8duGVQ9GI7vPfC6VcCHvgQmmm17xGjOUbSAzoBVEgab4yP3I4ldP4IU2ANlpWpeL8_eF47fRWP9G2HrazhQ1Op28tV69RA2N7SvRldPD0iKQ7AobS_NQqaDDP5OmmAONIGzI_F3xGh_Qb7LI" width="100%" height="100%">A wide gap between opening and closing prices signifies significant price movement. A higher closing than the opening hints at strong buying activity, while a close to the opening suggests indecision.</p>
<p dir="ltr">The closing price relative to high and low prices offers insights. If a price surges but closes below the high, sellers may have intervened, weakening bullish sentiment.</p>
<p dir="ltr">Colour-coded bars (green/black for increases, red for decreases) offer a quick look at market trends. Mostly green/black bars show an uptrend, while mostly red bars indicate a downtrend.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/lPjWPVkPjK1PrUeSFSsPAJtSpTp17yIJzyW1Dc8yYPxvZu7iEsxeCu-yWVwjKCCzOCCbW1COdzRyzSuq5aXfeIHMTT1i833n8DbvuBP18pyk_7HwbWTmZL2mcN687ukOxP932QY5aAECaVc1u5DUYhE" width="100%" height="100%"></p>
<p>&nbsp;</p>
<h2 id="h_396038189171341710331117713" dir="ltr"><a href="#h_396038189171341710331117713">4. Renko Charts</a></h2>
<p dir="ltr">Up to now, you have learned that price analysis is done over time. However, now you will see that we will only create a chart of the price range and analyze it.</p>
<p dir="ltr">Renko charts are a unique form of financial charting that prioritizes price movements over time. Unlike traditional charts, Renko charts use bricks of a specified size to represent price changes. These bricks are added only when the price surpasses a predefined range, filtering out minor fluctuations and emphasizing significant price movements.&nbsp;</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/ciZ7i9ecGLoH90E8ijEdioUzLV-SZiDM4bohNDDCXEHtB3kmok5kEyGno3cIhjB3iin3VokBusZGSyFjRSXt5AOyXP55Hp0atB6i08t4xeTG7ZaLWK5kXtuujnEr3Z58a2XV21qED7nNrCQxJrtKxXk" width="100%" height="100%"></p>
<p dir="ltr">Traders use Renko charts to simplify analysis, identify trends, and spot potential reversals by focusing on essential price action rather than time-based intervals.</p>
<p dir="ltr"><strong>4.1 Brick by Brick:</strong> Unveiling the Logic Behind Renko Chart Creation: Renko charts unfold with a simple yet powerful logic, zooming in on the language of price movements. Here's how the magic happens:</p>
<p dir="ltr">1. Choosing the Brick's Size:</p>
<p dir="ltr">&nbsp;&nbsp;&nbsp;- Traders play architect, deciding how much price movement each brick represents. Imagine setting it at 1₹; a new brick appears when prices move 1₹ beyond the previous brick's high or low.</p>
<p dir="ltr">2. Placing the First Brick:</p>
<p dir="ltr">&nbsp;&nbsp;&nbsp;- Picture the first brick as the cornerstone, set on the closing price of the initial timeframe. If subsequent movement exceeds the brick's size, a fresh one joins the formation, following the trend.</p>
<p dir="ltr">3. Bricks Building Continuity:</p>
<p dir="ltr">&nbsp;&nbsp;&nbsp;- Each brick maintains its size, indifferent to the ticking clock. With every move beyond the prior brick's high or low, a new one materializes, capturing the ongoing trend.</p>
<p dir="ltr">This logic transforms Renko charts into a visual storyteller of price dynamics, enabling traders to spot trends and foresee potential shifts in the market currents.</p>
<p dir="ltr"><strong>4.2 Use in Technical Analysis:</strong> In technical analysis, the Renko chart is used by traders who prefer to enter and make an exit in the larger trends. In the words of normal traders, the larger the pattern, the larger will be the trend.&nbsp;</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/-sMy4XkT2XMsuTM81q0SpK-UbNznBl5IFkYV29y8s4RauDvYh2ezCJLmmryPMDF3ICRR_Bvd_j4Zf3A6AoR4_Y9ozl5mVKNUf16SONJSuUpZa2irLywOaG1SIIud6jVUBczZUk0fVn6K7_wfCWZSXxs" width="100%" height="100%"></p>
<p dir="ltr">A significant buying or selling pressure is created in the markets which invites the larger value traders to make an entry. This is when traders use the Renko charts to analyse the pressure and volume.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_365585704116991710330262476" dir="ltr"><a href="#h_365585704116991710330262476">Final Words</a>&nbsp;</h2>
<p dir="ltr">In this article, you learned that there are several kinds of technical charts of stocks in existence based on security and asset price. Although, there are a few common among traders which are used by them to perform trades- Line, Bar, Candlesticks and Renko.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_717962627128021710330284188" dir="ltr"><a href="#h_717962627128021710330284188">Key Takeaways</a>&nbsp;</h2>
<p dir="ltr">Traders and investors use charts to forecast, evaluate, maintain, and grow market trends.</p>
<ul>
<li dir="ltr">A bar chart, used in technical analysis, shows the open, closed, high, and low prices of securities.</li>
<li dir="ltr">In a bar chart, the horizontal line denotes the market's opening and closing values, while the vertical line shows high and low prices.</li>
<li dir="ltr">Renko charts make it simpler for traders to interpret patterns like triangles, head and shoulders, tops, and bottoms.</li>
<li dir="ltr">A line chart is used by traders to identify and monitor closing prices. The strongest movement that aids in identifying strength in a particular stock is said to be the closing price.</li>
</ul>	

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
						<li><a href="https://www.finowings.com/technical-analysis-new/types-of-price-charts/" style="color:#cf9c0a; text-decoration:none;">Types of Price Charts</a></li>
						<li align="left">Interpreting Candlestick Patterns</li>
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

