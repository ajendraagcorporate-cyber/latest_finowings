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

<h2 align="center" style="font-size:32px; font-weight:bold;">Five Volume Indicators</h2>
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

<p dir="ltr">Technical Analysis plays a crucial role in modern financial markets, providing traders and investors with valuable insights into market dynamics and potential price movements. Among the numerous tools and indicators available, volume-based indicators hold a significant position due to their ability to gauge the strength of buying and selling pressure behind security. In this comprehensive guide, we delve into five prominent volume-based indicators: On-Balance Volume (OBV), Volume Price Trend (VPT), Chaikin Money Flow (CMF), Accumulation/Distribution Line, and Money Flow Index (MFI). Each indicator offers unique insights into market sentiment and trend direction by analyzing the relationship between price and volume. Understanding these indicators is essential for traders seeking to make informed decisions and navigate the complexities of the financial markets effectively.</p>
<p dir="ltr">&nbsp;</p>
<h2 id="h_143697072109701712234464010" dir="ltr"><a href="#h_143697072109701712234464010">1. On-Balance Volume (OBV)</a></h2>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Introduction:</h3>
<p dir="ltr">On-Balance Volume (OBV) is a technical analysis indicator developed by Joseph Granville in the 1960s. It measures the cumulative buying and selling pressure behind a security based on its volume. OBV is calculated by adding the volume on up-days and subtracting the volume on down-days. The resulting line is used to confirm price trends and identify potential trend reversals.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Calculation:</h3>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">If today's close is greater than yesterday's close: OBV = Yesterday's OBV + Today's Volume</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">If today's close is less than yesterday's close: OBV = Yesterday's OBV - Today's Volume</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">If today's close is equal to yesterday's close: OBV = Yesterday's OBV</p>
</li>
</ul>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Interpretation:</h3>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">When both price and OBV are making higher peaks and higher troughs, it indicates a strengthening uptrend.</p>
</li>
</ul>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/oZ6P6y0p4wPBoX9rXj2GvsK9AARJ-LmZ2SXt8dnDBWsG8AqsCr4_YKjAwJbMQXsT0WJ4NVN1NnsvSMBm16o_lvGRVfqyoguOgrFuFsQ4J0VjT2zHV6yhkZrkT6a2-7wsmFg1mZOT7ZelHY4C7PJtdEw" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Conversely, when both price and OBV are making lower peaks and lower troughs, it suggests a strengthening downtrend.</p>
</li>
</ul>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/IxsEdnfU-3lq0BtpOGmn4QDReXRnW3IPkoaD-rS40KYJxSnhJehrBH9_czT4Rk93A_KZzeOxS-1zMWvfEHpQmAi0zXNz0jY6ZAbGOx_iYsLgASTCu3kYk7mo7uGkbasbU8SWCubvkaLrk8hGHbKHzRI" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Divergence between price and OBV can signal potential trend reversals. For example, if the price is making higher highs while OBV is making lower highs, it indicates weakening buying pressure and a possible trend reversal.</p>
</li>
</ul>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/R97_rQVLVYZs9gf9UK-tEITpr4aGc9OMbPlnqOk528pUrtWI_W9oLSTS5dgOL6ZeQgwgRv9XKUod7f6SgIpQPP5EEp4tr3uYT58YsP6S7XA-JPGSsjfGNV85DDxQmvF-9Nc-D7_0r8cBnTXcw2Vk3Co" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">And</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/Yi4A3rAejrvxrL15EuM4tPqerEktBkBMDzeLiJX2yeZ5hTSBOefBejH7swM3JiArcww9PWltd_LOEzlCVQu0TzvrNZNGa1dgkL39Jv7RbmJGQYvNZEHLZQ8r-AE39dm2L6wJupURaVrkvJmGlygfzZg" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Usage:</h3>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">OBV can be used to confirm the strength of a trend or identify potential trend reversals.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Traders often look for divergence between OBV and price as a signal to enter or exit trades.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">OBV can also be used in conjunction with other technical indicators to confirm signals.</p>
</li>
</ul>
<p>&nbsp;</p>
<h2 id="h_411548938142171712234560538"><a href="#h_411548938142171712234560538">2. Volume Price Trend (VPT)</a></h2>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Introduction:</h3>
<p dir="ltr">Volume Price Trend (VPT) is a technical indicator developed by Marc Chaikin to measure the trend of a security based on the relationship between price and volume. It combines both price and volume data to provide insights into the direction of a security's trend. If you want to use it on tradingview then you have to search in the indicator section &ldquo;PVT&rdquo;.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Calculation:</h3>
<p dir="ltr">VPT is calculated by multiplying the percentage change in price by the volume and adding the result to the previous VPT value.</p>
<p dir="ltr">VPT = Previous VPT + (Percentage Change in Price * Volume)</p>
<p dir="ltr">&nbsp;</p>
<h3 dir="ltr">Interpretation:</h3>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">A rising VPT suggests that buying pressure is increasing, indicating a strengthening uptrend.</p>
</li>
</ul>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/gur-eHZ7UVnQ744o6_0D5KzeWPCeIsJ_KtRC5267w1uWvM6lou71MG2-URH7uQRXIoro_tuCtUJvREYW050y_ryIaC7y82qYDdaEdUY5MAEcyVpXRk6Z0_bvNKDP_JM5dC1J2FV0EX_e0F-caYkSS-s" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Conversely, a declining VPT suggests that selling pressure is increasing, indicating a weakening downtrend.</p>
</li>
</ul>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/qspJTHZzC6K2f6bkI5ouOwA6EgdiBNK2a4DyC1DADWRCIbAlhNuwT924bHgySZni-_XoogB-PuedbCiLF0canhygdzpks9yxAgnG4K90U8Z8b-hjma2cnly2E_ShC5ZNP7Ced8-83AN0l3aoIjasAXM" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Divergence between VPT and price can signal potential trend reversals, similar to OBV.</p>
</li>
</ul>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/nsiiEgLmph-0lvEbIVl0mb4oy63k-J2j91q67o8lyHDw0z3oO2lLvgVjXTHgERh1eGliBbgYAvoewVHQlWnlAMc4X61TdIEyN5rIHHocLhBDTc4qIMxyPURkYvaR9_5oVr2uNGdm-OkhxwNPiuLylDE" width="100%"></p>
<p>&nbsp;</p>
<h3 dir="ltr">Usage:</h3>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">VPT can be used to confirm the strength of a trend or identify potential trend reversals.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Traders often look for divergence between VPT and price as a signal to enter or exit trades.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">VPT can also be used in conjunction with other technical indicators to confirm signals.</p>
</li>
</ul>
<p>&nbsp;</p>
<h2 id="h_662217414201091712234715648"><a href="#h_662217414201091712234715648">3. Chaikin Money Flow (CMF)</a></h2>
<p>&nbsp;</p>
<h3>Introduction:</h3>
<p dir="ltr">Chaikin Money Flow (CMF) is a technical analysis indicator developed by Marc Chaikin to measure the buying and selling pressure behind a security based on both price and volume. CMF combines price and volume data to provide insights into the strength of a trend and potential trend reversals.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Calculation:</h3>
<p dir="ltr">CMF is calculated by dividing the sum of the Money Flow Multiplier (MF Multiplier) and volume for a specified period by the sum of volume for the same period.</p>
<p dir="ltr">CMF = (Sum of MF Multiplier * Volume) / (Sum of Volume)</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Interpretation:</h3>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">CMF oscillates above and below the zero line. Positive values indicate buying pressure, while negative values indicate selling pressure.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">A rising CMF suggests increasing buying pressure, indicating a strengthening uptrend.</p>
</li>
</ul>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/Z7bvXChs2Wj2N1qzxVv2XFAqbhnB3NXE1hjDXOJW3H5o936PUSKTGQSr6p2wcHt7I_7WXvbMGyXT-x6envyO5_JouE3hUaPJJuZzG3Zr80BIk0BJoFz4yh-O782BQK-jJROIylrvUuVjGC7LoyKOnHk" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Conversely, a declining CMF suggests increasing selling pressure, indicating a weakening downtrend.</p>
</li>
</ul>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/p9CbEh0dt4PtfKjcjFRQMUTPQlZfEuV66dc2e8J2qStMq0FnoWkrinKpb7I2S3DuPLaKSMADxc-Q8LE4VAmnGVHiK8Ae8qYt7zR9ZZSrKcTitPVYvAm6gCVXYVol-tjXQxXlHV3MDLNs0d60PfycutU" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Usage:</h3>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">CMF can be used to confirm the strength of a trend or identify potential trend reversals.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Traders often look for divergence between CMF and price as a signal to enter or exit trades.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">CMF can also be used in conjunction with other technical indicators to confirm signals.</p>
</li>
</ul>
<h2 dir="ltr">&nbsp;</h2>
<h2 id="h_351469821226861712234783667" dir="ltr"><a href="#h_351469821226861712234783667">4. Accumulation/Distribution Line</a></h2>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Introduction:</h3>
<p dir="ltr">The Accumulation/Distribution Line is a technical indicator developed by Marc Chaikin to measure the flow of money into or out of a security based on both price and volume. It combines price and volume data to provide insights into the accumulation or distribution of a security.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Calculation:</h3>
<p dir="ltr">The Accumulation/Distribution Line is calculated by adding or subtracting a portion of the day's volume to the previous Accumulation/Distribution Line value, based on whether the closing price is above or below the midpoint of the day's trading range.</p>
<p dir="ltr">Accumulation/Distribution Line = Previous Accumulation/Distribution Line + ((Close - Low) - (High - Close)) / (High - Low) * Volume</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Interpretation:</h3>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">A rising Accumulation/Distribution Line suggests increasing accumulation, indicating buying pressure and a potential uptrend.</p>
</li>
</ul>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/6NbEEAlDCSABOIG_ic8f7GG45mZFH8q2gvUp6Kyaz7AZxZmngrEyJqy-WsGE4a9RhQm0we1X-uFxm-z7htgH7_UE-PWZDhNzf4Zcr2zEKRJp1Td2LuX_rJPoc0hZUD-wVWECi0YAsG8PPnm_M1JfqJg" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Conversely, a declining Accumulation/Distribution Line suggests increasing distribution, indicating selling pressure and a potential downtrend.</p>
</li>
</ul>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/z0MRipdk6fQtBAyglGSOR-b4_PYkWpc-aGbnkb6rZUn0exhRiDrLOebjMHISLNllYvALZGltU09uQhOfsYfnBAaZvwefjwPSkYq_4yw77USRTAFv2_irdQktcirq8vwaavFppFRq9tSgYGZDdDwX4Ig" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Usage:</h3>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">The Accumulation/Distribution Line can be used to confirm the strength of a trend or identify potential trend reversals.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Traders often look for divergence between the Accumulation/Distribution Line and price as a signal to enter or exit trades.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">The Accumulation/Distribution Line can also be used in conjunction with other technical indicators to confirm signals.</p>
</li>
</ul>
<p>&nbsp;</p>
<h2 id="h_300963703247191712234867251"><a href="#h_300963703247191712234867251">5. Money Flow Index (MFI)</a></h2>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Introduction:</h3>
<p dir="ltr">The Money Flow Index (MFI) is a technical analysis indicator developed by Gene Quong and Avrum Soudack to measure the strength of buying and selling pressure based on both price and volume. MFI combines price and volume data to provide insights into the momentum of a security.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Calculation:</h3>
<p dir="ltr">MFI is calculated using the ratio of positive money flow to negative money flow over a specified period, typically 14 days, and normalized to a scale of 0 to 100.</p>
<p>Money Flow Ratio = (Positive Money Flow / Negative Money Flow)</p>
<p dir="ltr">MFI = 100 - (100 / (1 + Money Flow Ratio))</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Interpretation:</h3>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">MFI values above 80 are considered overbought, indicating a potential downtrend or reversal.</p>
</li>
</ul>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/TFYTrMVRQBnadClUqPes7cWRJ2dk0Pho-C92aCVxTn3ZmQu0slaDzRBekMyvTXm0n7cCNeZOGDbuXRLM4pSAKwSOeBzK6xbcIFub8kM5meRsIFg_SPr9Nzm5b5VC3dOpDPVNYaFZtTCMbPmidiR5mSw" width="100%" ></p>
<p><strong>&nbsp;</strong></p>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">MFI values below 20 are considered oversold, indicating a potential uptrend or reversal.</p>
</li>
</ul>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/oWe3NNWSlqPmzgi6_bI14wmUerghAZY3O-ZF0fH9uzjOwghqClUL4eOpDjyxO__-uzpICxPHNyJ2gRhoG4FALJxJlN2KDDXpH6xWYdasEtgJCliUbNPFSiJlGXH-uT0Hbn7VwWgbgJcUwfGRgAQcEII" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Divergence between MFI and price can signal potential trend reversals, similar to other volume-based indicators.</p>
</li>
</ul>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/dy-QTT38jv8haFf-ZQ5FHOIFfZN9r8bXBDU_3dzZW1m_GTG_j03rlX7GxiVBBsjOcmIQOnmVs3lfb9M4uaexyiRil1aaLmcipM7QDRDGLVeWuTRxxPN_ORk7-LXrMWq0TjTfg5Ia64i4UC1BaF3P8Dw" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">And</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/V-PuNA-pOSzLhkI9UBLhgfk6LKzGBTI33Wr13b9QcQLpKqON0vXZ5m6uHNniji_fLFK9rK3SDdlNEyIiaMj2bEUVrRi5sSPZLjT1HOGv23ZKKeoM4-QBAsAIhdOdhrkAfBL1I3p8r6JX0kyOGJE2l1Y" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Usage:</h3>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">MFI can be used to confirm the strength of a trend or identify potential trend reversals.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Traders often look for divergence between MFI and price as a signal to enter or exit trades.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">MFI can also be used in conjunction with other technical indicators to confirm signals.</p>
</li>
</ul>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">In conclusion, volume-based indicators such as On-Balance Volume (OBV), Volume Price Trend (VPT), Chaikin Money Flow (CMF), Accumulation/Distribution Line, and Money Flow Index (MFI) are valuable tools for traders and investors to analyze buying and selling pressure, confirm trends, and identify potential trend reversals in the financial markets. By combining price and volume data, these indicators provide valuable insights into market dynamics and help traders make informed trading decisions.</p>
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
   <p style="color:#273158; font-weight:bold; padding-bottom:15px;">Module-5</p>

  <h2 class="name" style="color: #273158;">Trading Volume</h2>
    <div class="desc">   
<ul style="line-height:40px; padding:10px;">  
						
                         <li><a href="../understanding-volume/" style="color:#273158; text-decoration:none;">Understanding Volume</a></li>
						 <li><a href="../volume-indicators/" style="color:#cf9c0a; text-decoration:none;">Volume Indicators</a>
						<ul>
						<li align="left"><a href="../5-volume-indicators/" style="color:#cf9c0a; text-decoration:none;">5 Volume Indicators</a></li>
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

