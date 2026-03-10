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

<h2 align="center" style="font-size:32px; font-weight:bold;">RSI: A Comprehensive Guide to the Relative Strength Index</h2>
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

<h2 id="h_782623998367491710498782998" dir="ltr"><a href="#h_782623998367491710498782998">Introduction</a></h2>
<p dir="ltr">The Relative Strength Index (RSI) is a versatile technical indicator that measures the momentum of a stock's price movement. It was developed by J. Welles Wilder Jr. and introduced in his 1978 book, "New Concepts in Technical Trading Systems." The RSI is a popular tool among traders and investors for identifying overbought and oversold conditions in the market. It is a lagging indicator{Lagging indicators are a type of technical indicator that provide signals after market price movement has already occurred. These indicators are calculated using historical data, and that's why they are called "lagging."}.</p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_436869953373171710498811550" dir="ltr"><a href="#h_436869953373171710498811550">What is RSI?</a></h2>
<p dir="ltr">The RSI is a dimensionless oscillator that ranges from 0 to 100. It is calculated by comparing the closing price of a stock to its recent closing prices over a specific period, typically 14 days. The RSI reflects the speed and magnitude of price movements, providing insights into the strength and direction of a trend.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/1CuCf0vzi0zaEdsgrajC5l6ZDi1U3mq0-7QUjHNBMPr1brietIx6XpH_mYQuiENdt4JyuD9oOBrWxpTSZvbtd6saY370e1tSvdZXdOKBx_R1v3Mz-JF5_WPqJBGm2N1cNgIGSJ7AFyvEHlmwU2FBef0" width="100%" ></p>
<p dir="ltr">The purple line that is showing in the range of 0 to 100 is the RSI line.&nbsp;</p>
<p dir="ltr">&nbsp;</p>
<h2 id="h_639225389380601710498828070" dir="ltr"><a href="#h_639225389380601710498828070">How does it work?</a></h2>
<p dir="ltr">The RSI calculation involves two main components:</p>
<p dir="ltr"><strong>1. Average Upward Price Change: </strong>This represents the average increase in closing prices for the specified period.</p>
<p dir="ltr"><strong>2. Average Downward Price Change: </strong>This represents the average decrease in closing prices for the specified period.</p>
<p dir="ltr">The RSI formula compares these two averages to determine the relative strength of the upward price movements compared to the downward price movements. A higher RSI indicates stronger upward momentum, while a lower RSI indicates stronger downward momentum.</p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_668976651394071710498866842" dir="ltr"><a href="#h_668976651394071710498866842">Practical Applications</a></h2>
<p dir="ltr">The RSI is widely used for various purposes, including:</p>
<p dir="ltr"><strong>1. Identifying Overbought and Oversold Conditions:</strong> An RSI reading above 70 is generally considered overbought, indicating that the stock price may be due for a correction. Conversely, an RSI reading below 30 is considered oversold, suggesting that the stock price may be due for a rebound.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/Ja4ZsgryqFyGpM2e2-i8penkX9yn5Id-vltIW2FeEs8lHANH-f8hgWVmO6IRH5p25wciPlvRghXhRAM0PEWvfu06msEiB87I-112CJ4HiThlgZCT7hLqAErwKyO2P3NqyomI_kfy_xrAxPsL5XdwJ10" width="100%" ></p>
<p dir="ltr">And</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/0WYQyV4jJLdYYGzxpRdftPyLzvJ69aGoWU3TEMGhJWSz3ffsjqT-EhLhXFAjIFlLiwv5tihtftMy2oqO8pmiLVf3-loYcXxHSOW-SbgTVMjakXRAWWBlgw7lfI_cdxT_RHRoML-fJYRwBoOeKv6rZzM" width="100%" ></p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>2. Confirming Trend Direction:</strong> The RSI can help confirm the direction of a trend. When the RSI is making higher highs along with the price, it suggests a strong uptrend. Conversely, when the RSI is making lower lows along with the price, it suggests a strong downtrend.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/jbEi_Un7qochan2DK2u17rLQA0NOEqK9lsEWuNXSZKieg_YnhOcSnfeW0Xy3lWv5IwUyz1OAmDlrCEyAWocYIsGDCv24hHB_-whSFZiNDTVMDqrOEGm6Lo3p3ipE3NJDzWX9AqMoh08NjjvM6jUEDxM" width="100%" ></p>
<p dir="ltr">And</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/uPBLMjOQ4Zqazb3cLjXhQ--GbdE5wComQCUF9aee1JdDIEMxX0nxxMJiksyyusPoCSwRTk5xyEQurOtgJWfUakiMyUPl-iWBADC3RC8DIPDLPvIPLQrJthaeP2PV5eN_jTRq1Vs3pTYdF_noIPko5_o" width="100%" ></p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>3. Divergence Analysis:</strong> Divergence occurs when the RSI is moving in the opposite direction of the price. This can be a significant warning sign, indicating that the current trend may be losing momentum and could reverse. For example :&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/S_1q1i_VC8NwtkfLqDLv4qWKT5N84bysXEhlUp_W0SUvBhTRpy0EiM66FhhiEYZbXZPrV6akS3iE29weOeXlOcUEBfEJEuIK8NattdxAZtDH9WTtelHwE84OfEsDbAMYjgO-nCWDdvwfJ-s9eKc94qc" width="100%" ></p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">In this pic, the price made a new low than the previous low but RSI did not, this is called positive divergence. Similarly , if the price made a new high than the previous high but RSI did not, this is called negative divergence. See the following picture.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/saYxE4_xynU7QMneHzCTP9VQWsBoNYuP2reJe_iRWQvaAG_ivP_Lok8q57ahFVRdNhz4NNQptf35d2TO_YpSefOwJR8aYcNrNuLA6CUShCyjdhvdShenoVw4MLS6uc7mUDBV5G0BsePzuq2ZMAIdAKw" width="100%" ></p>
<p dir="ltr">&nbsp;</p>
<h2 id="h_852941633413641710498950205" dir="ltr"><a href="#h_852941633413641710498950205">RSI Strategies</a></h2>
<p dir="ltr">Traders and investors employ various RSI strategies to make informed trading decisions. You can also create many strategies and can use them easily. RSI strategies are given below, read and do practice it on charts.&nbsp;<br><br></p>
<h3 dir="ltr">Strategy 1:&nbsp;</h3>
<p dir="ltr">In this strategy, will use RSI with the Support and Resistance for entry and exit. As you have read above, RSI is near 70 means overbought and a downtrend can be started and similarly RSI is near 30 means oversold and then an uptrend can be started. The time frame will be 1 hour.&nbsp;</p>
<p dir="ltr"><strong>Trade:</strong> When price comes near a support and RSI is near 30 then its a buying opportunity and similarly price is near resistance and RSI is near 70 then its a selling opportunity.&nbsp;</p>
<p dir="ltr">So,When the RSI is at 70 and is at a resistance level and breaks the low of the candle which is forming near resistance, take sell entry and put the SL above the resistance. Conversely , when the RSI is at 30 and is at a resistance level and breaks the high of the candle which is forming near resistance, take buy entry and put the SL below the support level.&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Target will be 1:2.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">For example:&nbsp;</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/SAOgikcAdzdv2krEBwDkSCoYg0SpYQpyNYBz_90cVKK4_J_0L_kFmnFXCHbBQLqgdg-oTe5LmaPXJDmMdXZjEwcJEzF6K71UrJGWSErCEUuFqtbHjuMubhVs5TNwzz8NxLx_i_ID2fsTzLM6VlBtRs0" width="100%" ></p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">In the above chart, the blue line is a resistance and RSI is at 70 &amp;&nbsp; there is a selling candle(gravestone doji candle pattern) also, so, will take sell entry after breaking the low of doji and put the SL above the resistance. [want to read about candle pattern so that you can increase you trading accuracy then click the link - {Link}]</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Similarly in buying trade,&nbsp;</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/SG-oUgy8DbZL2t0pj9mQl2Qlk0_UP2_FmkmcYXWiXqCYqFBFdSmYDoW2-LH9QFD6lyY5vTH0FCQgnpMXukaeIvdANi-F3ntWzGUM9NRiZ4Ts5-00Vy1QHfOPO71jcImKopPDZPLWPpXw8iqNuRU3M50" width="100%" ></p>
<p dir="ltr">In the above chart, the Yellow line is a Support and RSI is at 30 &amp; there is a buying candle(Inside bar candle pattern) also, so, will take buy entry after breaking the high of inside bar and put the SL below the support.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">This is how you can increase your accuracy with RSI strategy trading and candle pattern confirmation.&nbsp;</p>
<p dir="ltr">&nbsp;</p>
<h3 dir="ltr">Strategy 2:</h3>
<p dir="ltr">In this strategy will use another indicator called MACD[want to read it in details click here (link)]. As we know that RSI below 30 then buy and RSI above 70 then sell but will add here MACD&rsquo;s confirmation so that we can increase its accuracy.&nbsp;</p>
<p dir="ltr">MACD has 2 lines, one is MACD line and other one is signal line. When the MACD line crosses above the Signal line it's a buy signal and similarly if the MACD line crosses below the signal line then it is a sell signal.&nbsp;</p>
<p dir="ltr"><strong>Trade:</strong> In 15 minutes time frame, When RSI comes below 30 and MACD line crosses above signal line then take buy entry and conversely when RSI above 70 and MACD line cross below signal line then it is a sell signal. Target will be 1:2 or 1:3.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/V5xTfuTjgKfSAWwVoal57KGh7-fJkD924rr_Yf4bI2qSIlryF83czePVNpYxw2hoxnlL4DMvt9uUb2VDD_RA7zhECs5WKnyfYugVY3v9MTOR8KSVYDgR_C5Ftr67yo0GGRyIanJdqdk1eoxeBzcC4jU" width="100%" ></p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">Look in the above chart, in this chart RSI came below 30 &amp; at the same time MACD line crossed above signal line and share price made a good move.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/F2Gew7odeWEHCuBzZBSRaAT6W-Byg5Ah8KkNnlhDTIj8O6bd507T0gwDhyEnhSeN4Oek4n_--0P2JAyOiyntr152FnGAfDT--Tc9e8uB0WzH-eYCnqdCThEKMcKUyJx-a1kqTKIGQZifrbsMjbv7Hzk" width="100%" ></p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">In the above chart , sell entry given by MACD and RSI. When MACD line crossed below signal line and RSI also above the 70. Share gave a good move in the downside.</p>
<p dir="ltr">You can watch this also for this strategy - [<a href="https://www.youtube.com/watch?v=coZm3io66tE">https://www.youtube.com/watch?v=coZm3io66tE</a> ]</p>
<p dir="ltr">&nbsp;</p>
<h3 dir="ltr">Strategy 3:&nbsp;&nbsp;</h3>
<p dir="ltr">This strategy is called divergence. Divergence is a situation which is created in the charts. When price makes new highs, RSI does not make new highs and it remains flat or lower than previous high. But we do not use it only we include this with Support and resistance. In a 15 min time frame, we find a support or resistance, if divergence formed there then will take entry accordingly.&nbsp;</p>
<p dir="ltr"><strong>Trade:</strong> when price makes new highs than previous highs but RSI does not make new highs and it remains flat or Lower than previous highs. It is a sell situation where we take a sell entry and put the SL above the high. Target will be 1:2.&nbsp;</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/DJogtuiBaOtvTQYp7kk2ra36q-1F3Z6w_uN2Gabb_Er6kavtYnWm-jMIunfVRa7XvQ1hLhOXnroPao7m7cIlEfmx9ssbPNlIU3DobXUzIwo7vNd4ZRg2MVwsrMCDNvkdfJdXFk9W665CkbVgP8iaCxU" width="100%" ></p>
<p dir="ltr">In this chart you can see the green rectangle where there is resistance and price made a new high but the indicator didn&rsquo;t. So will take sell entry and SL above the high i.e. above trendline.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/eFfYDw1XWJOF0rukGgzvGd7mhYsISuhrFnOwHakz2_sYEpC2NLDEh1yA9xvO81NSyEo5YhCOtSTQtvKe5fKyGxm1Fi6fbCDigjc9eeiX2gOBwXaiVvCJncRYJ2jVBb0SQRN10ex1aBHgul-VhcXNnIg" width="100%" ></p>
<p dir="ltr">Similarly when price makes new lows than previous low but RSI does not make new lows and it remains flat or upper than previous low.&nbsp;</p>
<h3><strong><br></strong>Strategy 4 :</h3>
<p><strong>Strategy with RSI and Bollinger Bands</strong></p>
<p>In this strategy, we will use Bollinger bands and RSI for trading.</p>
<p dir="ltr"><strong>Trade:</strong> when RSI below 30 and price come inside bands from outside then it is a buy entry. Put the SL at the low of candle which is outside of bollinger bands and hold until price touches the upper band.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/r_fSFEiVj5080oSdekWoZYxtWovHd6oaU2I9uAMp8ee7s1lSErosn_ygAQ9PUEyrxhdYQm-WMKbSuoYjrgARPkJjCilqxRRpdjZGL9Vpzp4VRRcvX8WBHu_JHfrStRFHbIgXv5EnN45KVvmTCdJCC1Y" width="100%" ><br><br>When RSI above 70 and price comes inside the bands from outside then it is a sell entry. Put the SL at the low of candle which is outside of bollinger bands and hold until price touches the lower band.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/S6WM_gDpUSx8_RSq_InsoPt1YvoJhKrsCo8eSsizFKow7LM_nopNdD4BzesSDXaPRr4ZLqqifq5lziUQj9JE_NkezuxbFplis3Jyr6-ermFLGl643Be66SrKUQKkjI4kJev99zhMZoIXI1MyCrYhmCA" width="100%"></p>
<p dir="ltr">&nbsp;</p>
<p dir="ltr"><strong>NOTE : Avoid in news driven markets .</strong></p>
<p dir="ltr">&nbsp;</p>
<h3 dir="ltr">Strategy 5:&nbsp;</h3>
<p dir="ltr"><strong>EMA 40 &amp; 14 with RSI Strategy</strong></p>
<p dir="ltr">Apply ema and RSI in the charts and you have to go to the setting of EMAs and then change the length in the input option and same in the RSI settings you have to change upper and lower limit with 60 and 40.&nbsp;</p>
<p dir="ltr"><strong>Trade: </strong>when 14 ema crosses above the 40 ema and RSI crosses 60 the it is a buy signal buy and SL will be low of the entry candle&rsquo;s previous candle. Hold it until 14 EMA crosses below the 40 EMA.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/dZqxLpIueqLxjgCLGurstJPJ2lTUHigZ1hXprprZODdj98NCaWkW66-Y4TYEuTg0z1psqqrIBjk3lcR5DpuX25EZamA_dfAa1d_zBnu_7Wq534qtuJH4d3RAMs_4qR24kMPoq3n_pBLyiuYv-vf6Dxg" width="100%" height="232"></p>
<p>Conversely, when 14 EMA crosses below the 40 EMA and RSI crosses below the 40 then it is a sell signal and holds it until 14 EMA crosses above the 40 EMA. SL will be the high of the entry candle&rsquo;s previous candle.</p>
<p><img src="https://lh7-us.googleusercontent.com/_vQwcgje5KkJdOaPkzl2HTyIm0Jdp7fg_Bcn20pkuYBJmF77xxENzM0jCDsDcllLMFN8SDv7w6eWepUHxyw0fazAyS-BGW35RV90alqAcSX8LL2rHHTPuxxviN06qkDfagxJsItHud8yKAza1IK4HIU" width="100%"><br><br></p>
<h2 id="h_183012749522361710499676506" dir="ltr"><a href="#h_183012749522361710499676506">Conclusion</a></h2>
<p dir="ltr">The RSI is a valuable tool for understanding the momentum of a stock's price movement. It can help identify overbought and oversold conditions, confirm trend direction, and signal potential trend reversals. While the RSI is a powerful indicator but lagging and does not take trade only with RSI overbought or oversold.</p>
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
						 <li><a href="https://www.finowings.com/technical-analysis-new/relative-strength-index/" style="color:#cf9c0a; text-decoration:none;">Relative Strength Index (RSI)</a></li>
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

