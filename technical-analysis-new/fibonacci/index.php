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

<h2 align="center" style="font-size:32px; font-weight:bold;">Fibonacci Retracement and Fibonacci Extensions and Its Uses</h2>
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

<h2 id="h_6654448278961710758355257" dir="ltr"><a href="#h_6654448278961710758355257">Fibonacci Retracement</a>&nbsp;</h2>
<p dir="ltr">Fibonacci Retracement is a key tool in technical analysis, aiding traders in pinpointing potential support or resistance levels during price corrections. By drawing lines that connect important price points on a chart, this tool utilizes Fibonacci sequence-derived retracement levels. These levels suggest where a price might experience a bounce or slow down before continuing its trend. Traders commonly pair Fibonacci retracement with other indicators for confirmation, making it a valuable technique for those aiming to enter positions at advantageous prices within the framework of a broader trend.</p>
<p dir="ltr">&nbsp;</p>
<h2 id="h_5688933114691710758375358" dir="ltr"><a href="#h_5688933114691710758375358">Fibonacci Retracement Levels</a></h2>
<p dir="ltr"><strong>23.6%:</strong> This level represents a shallow retracement. In an uptrend, prices might pull back to this level before resuming the upward trend. In a downtrend, prices could retrace 23.6% before continuing the downward movement.</p>
<p><strong>38.2%:</strong> A moderate retracement level, often considered as the first significant level. Traders look for potential reversals or bounces near this level.</p>
<p><strong>50%:</strong> While not a Fibonacci number, the 50% retracement level is widely used. It implies a half retracement of the previous move and is closely watched for potential trend reversals.</p>
<p><strong>61.8%:</strong> Known as the "golden ratio," this level is a strong indicator of potential trend continuation or reversal. It is one of the most closely watched levels in Fibonacci retracement.</p>
<p><strong>78.6%:</strong> This level is considered the last line of defense for a retracement before a trend continuation. If prices breach this level, it may suggest a more significant trend reversal.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">These Fibonacci retracement levels are critical in technical analysis, helping traders identify potential areas of support or resistance. By recognizing these levels, traders can make more informed decisions regarding entry points, stop-loss levels, and profit-taking targets.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/6SAynpmrk8YzJ2wTa0oAKbJX3V6InYu97joBCeyrELLtyuM13DQH9tG4BFuP7bEIUOWjrkr2UBU--aiRPxn8_dbgQHk-v3N0sklkQsWL8RQLGPy72_MxcA7a6wvXLm2AzWvwo6mTuuv9VlXuGkc1gDQ" width="100%"></p>
<p><strong><br><br></strong></p>
<h2 id="h_88950557142531710758440352" dir="ltr"><a href="#h_88950557142531710758440352">Fibonacci Extension</a></h2>
<p dir="ltr">In contrast, Fibonacci extension involves projecting potential future price levels beyond the original trend. Traders use Fibonacci extension levels (127.2%, 161.8%, 200%, and beyond) to identify where an asset's price might reach after a significant move. These extension levels serve as targets for traders looking to set profit objectives or identify potential areas of trend continuation. By integrating Fibonacci extension into their analysis, traders gain insights into price projections that go beyond traditional support and resistance levels, enhancing their ability to anticipate market movements and set realistic profit targets.</p>
<h3 dir="ltr">&nbsp;</h3>
<h2 id="h_770991637150181710759236426" dir="ltr"><a href="#h_770991637150181710759236426">Use of Fibonacci and fibonacci extension</a></h2>
<h3 dir="ltr">1. Fibonacci Retracement:</h3>
<p dir="ltr">Fibonacci Retracement's use in the stock market aims to indicate the reversal points with accuracy that helps traders to understand their trading aspects. The most common setting used in Fibonacci retracement is 23.6%, 38.2%, 61.8% and 78.6%.&nbsp;</p>
<p dir="ltr">The numbers used in the Fibonacci setting are the ratios that show the retracement levels. These levels are the utmost important development for traders while analysing the market.&nbsp;&nbsp;</p>
<p dir="ltr">Draw Fibonacci Retracement levels in an uptrend and downtrend as per the steps listed below:&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>1.1 Uptrend</strong></p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/8yfblQ80pBvHzN_BkCUsFTuc7tMLZr1_jZUob5ybhmdILxR-XQ0oZ5R1l0N1M0kEbVZk2ySeDoPGpRUwkGYOE8GopeCGX54QCbCulMWW1xr0xPe2_ew4B-F1Y_Mn0ztdk3-MZGiUihQ99mF69LUoH8I" width="100%" ></p>
<p><strong>&nbsp;</strong></p>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">First, identify the direction of the market which is an uptrend in this case.&nbsp;</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Select the Fibonacci Retracement tool that appears on the bottom, so drag it to right and then to the top.&nbsp;</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">The three potential support levels 0.236,0.382, and 0.618 should be monitored.</p>
</li>
</ul>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>1.2 Downtrend&nbsp;</strong></p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/u9yVPafJGMdmY5u0I6pYxaidtN7O9A87Kub9Cy20_-qiYL8Ec3Q9jvPQ7KfllRI4HfrqX7AYLhRlLjPlLnZxhJ9kzysQP7tAGQ9gEkbSnWmHTTdekv9wrtbz3ompAnE3TlW8SDFyOQKcIvIpmTDoSJo" width="100%" ></p>
<p><strong>&nbsp;</strong></p>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">The direction of the market is identified as a downtrend.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Attach the Fibonacci Retracement tool and drag it from the top to the right and the bottom.&nbsp;</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">The three potential resistance levels 0.236, 0.382 and 0.618 should be monitored.&nbsp;</p>
</li>
</ul>
<p dir="ltr">&nbsp;</p>
<h3 dir="ltr">2. Application of Fibonacci Retracement:</h3>
<p dir="ltr">Fibonacci Levels are demanded by traders to trade perfectly with the support and resistance levels. A lot of traders dream to learn the Fibonacci Retracement theory and apply it to their trading as soon as possible. Just learning the basics is not enough, as experience in trading using the tool is crucial for traders to start the application of the calculation.&nbsp;</p>
<p dir="ltr">The Fibonacci retracement levels come as handy when it is provided in trading platforms. A trader can use it to find the potential of the security price through uptrends and downtrends.&nbsp;</p>
<p dir="ltr">As a trading strategy, Fibonacci retracement is used in alignment with several trend trading strategies and trend continuations. Most traders use the golden ratio which is 61.8% to analyze the golden Fibonacci level. Here, the price is reversed and creates a new low which is attractive for the traders to enter.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/CoUZMPoykOkIqirVCy8KG8pKttkhw0sUxITZaeWQncUrnZSNwQGCzx52gShp5bO4lJlUiVv4_433vwFjCNi4bMVreNOdFNPxVl68cs2OkvBQ-cM_Koau2Dw8IH8zu-2hJqnPg1lOGuidkDTGu57CKFQ" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">The above chart depicts the initial bear trend with the golden Fibonacci level which has a pullback and then a continuation of the bear trend. Traders identify these retracement levels while trading to become opportunists in such a situation.&nbsp;</p>
<p dir="ltr">Fibonacci Retracement levels are used to support a wide range of trading strategies. The aim is to find the potential where the reversal could happen in the chart. Most of the traders believe that the support and resistance developed in Fibonacci retracement levels are the trend continuation strategy.&nbsp;</p>
<p dir="ltr">For example, a trader notices a large impulse in the lower point and then notices a pullback price to the golden ratio (61.8%). In this situation, the trader decides to sell the security with the probability of bear movement being continued after the pullback. Thus, how Fibonacci retracement level helps traders to understand where the order should be entered in the possibility of a continuation trend.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">3. Fibonacci Extensions:&nbsp;</h3>
<p dir="ltr">Fibonacci Extensions are a tool for traders to establish and estimate the profit targets or how far the price may go after a pullback. Extension levels are the areas which are used to predict where the price may reverse.&nbsp;</p>
<p dir="ltr">The Fibonacci Extensions are used to analyze the profit targets to know where to square off the trade. During an uptrend, the basic idea is to book the profits in the process of long trade with a Fibonacci Price Extension Level.&nbsp;</p>
<p dir="ltr">Fibonacci extensions do not have a specific formula, although when the indicator is applied, the trader selects three points. In the chart, the first point is the start of the movement, the second point is the end of a move, and the last point is the end of the retracement against the move.&nbsp;</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/tuBYw4myJ1HreC0EBTji8kMBleLGUEHMAVb0o3RGhdnrNkq3QutvR-9LPXsSCVSaf3ewxD1lUYJp43TluOJxQP2DUwxwHB8GH3RrSS5on0xSWoLCqegKfb_BPRI3c3ebIDJvQgzJVJAz2K8zoH6EQ_I" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Extensions are drawn on a chart to mark the price levels for the entry and exit points. The levels are based on the Fibonacci ratios and the price moves as per these levels to help the traders indicate the price movements.&nbsp;</p>
<p dir="ltr">Fibonacci Extensions are extremely helpful for traders in determining backwards and forward prices to determine the strength and weaknesses of a few areas. Fibonacci extensions also help traders to find consistent support and resistance levels.&nbsp;</p>
<p dir="ltr"><strong>Some of the important points about Fibonacci Extensions a trader should know:</strong></p>
<ul>
<li dir="ltr">Fibonacci Extension levels can be used in alignment with several strategies</li>
<li dir="ltr">The most popular extension levels are 123.60%, 161.8%, 200% and 261.8%.&nbsp;</li>
<li dir="ltr">These extensions are also used to validate some of the critically analyzed points.&nbsp;</li>
<li dir="ltr">Fibonacci Extension tools layout areas where the price may move ahead for the traders to identify.&nbsp;</li>
</ul>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">4. Difference between Fibonacci Extensions and Fibonacci Retracements:&nbsp;</h3>
<p dir="ltr">Fibonacci retracement and extension are both used in the world of technical analysis concerning finding a price movement or area. Let&rsquo;s get into the detailed differences that make them unique from each other</p>
<p><strong>&nbsp;</strong></p>
<table width="100%">
<tbody>
<tr style="color: rgb(255, 255, 255); background-color: rgb(39, 49, 88);">
<td width="50%">
<p dir="ltr"><strong>Fibonacci Retracement&nbsp;</strong></p>
</td>
<td>
<p dir="ltr"><strong>Fibonacci Extension&nbsp;</strong></p>
</td>
</tr>
<tr>
<td>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Fibonacci Retracement indicates how deep the reversal or retracement should take place.&nbsp;</p>
</li>
</ul>
</td>
<td>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Fibonacci extension indicates the price movement and profit targets.&nbsp;</p>
</li>
</ul>
</td>
</tr>
<tr style="background-color: rgb(233, 249, 255) !important;">
<td>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">It is used as a profitable strategy with other indicators.&nbsp;</p>
</li>
</ul>
</td>
<td>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">It measures the trend impulses and retrieves the direction of the trend.&nbsp;</p>
</li>
</ul>
</td>
</tr>
<tr>
<td>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Fibonacci Retracement helps in providing good entry orders and stopping loss levels.&nbsp;</p>
</li>
</ul>
</td>
<td>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Fibonacci Extension is used in developing a profit strategy with entry and exit points.&nbsp;</p>
</li>
</ul>
</td>
</tr>
<tr style="background-color: rgb(233, 249, 255) !important;">
<td>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">The Fibonacci Numbers to analyse retracement are within the initial trend of 38.2%,61.8%, 50% etc.&nbsp;</p>
</li>
</ul>
</td>
<td>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Extensions can help in pointing out good reversal points and good profit booking points. The Fibonacci Numbers to analyze the extension are beyond the 100% Fibonacci level i.e., 1.618%, 123.60%, etc.</p>
</li>
</ul>
</td>
</tr>
</tbody>
</table>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">5. Limitations of Fibonacci Retracement Levels:&nbsp;</h3>
<p dir="ltr">In technical analysis, as much as the indicators are useful, it possesses certain limitations as well. Trading in the stock markets comes with uncertainty with differences in market sentiment. Therefore, some of the limitations found in Fibonacci Retracement levels are listed below.&nbsp;</p>
<p>The Fibonacci Retracement level of 61.8% indicates that the security price will reverse from the point. However, it does not signify that the price will reverse every time from that level as it depends upon more factors.&nbsp;</p>
<p>Traders seem to stick to the Fibonacci retracement level strategies that work for them which can cause dilemmas among them. A retracement level that once worked is not necessarily would work the second time. It is crucial to understand the support, resistance, and retracement levels as per the security price to have an easy understanding of the Fibonacci numbers.&nbsp;</p>
<p>As the stock market is uncertain, the same goes for the indicators. Thus, a trader should be aware of the strategies used and discovered while trading to create an authentic setup.&nbsp;</p>
<p>&nbsp;</p>
<h2 id="h_287492191199781710759492499"><a href="#h_287492191199781710759492499">Conclusion</a></h2>
<p>In the dynamic world of trading, mastering Fibonacci retracement and extensions offers traders a precision toolkit for strategic decision-making. From spotting potential bounce-back zones at 23.6% to projecting future scenarios at 161.8% and beyond, Fibonacci techniques provide a nuanced understanding of market movements.</p>
<p>Recognizing the differences between retracement and extension and adapting to market uncertainties are key considerations. Yet, within these strategic advantages lie the potential for traders to craft precise entry points, set profit targets, and decipher trends with confidence.</p>
<p>In essence, the savvy use of Fibonacci retracement and extensions propels traders beyond traditional analysis, positioning them as skilled navigators in the ever-evolving market landscape. As trading journeys unfold, those adept at leveraging Fibonacci precision find themselves not just observers but active architects of trading success. Happy and strategic trading!</p>
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
						 <li><a href="../support-and-resistance/" style="color:#cf9c0a; text-decoration:none">Support and Resistance</a></li>
						 <ul>
						 <li><a href="../trendlines/" style="color:#273158; text-decoration:none">Trendlines</a></li>
						 <li><a href="../support-and-resistance-lines/" style="color:#273158; text-decoration:none">Drawing Support and Resistance Lines with Strategies</a></li>
						 <li><a href="../fibonacci/" style="color:#cf9c0a; text-decoration:none">Fibonacci</a></li> 
						 </ul>
						 </li>
                          <li><a href="../trend-analysis/" style="color:#273158; text-decoration:none">Trend Analysis</a>
						 <ul>
						  <li>Trend Reversal </li>
						  <li align="left">Trend Continuation Patterns 
						  <ul>
						  <li><a href="../assending-trend-continuation-pattern/" style="color:#273158; text-decoration:none">Assending Trend Continuation Pattern</a></li>
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

