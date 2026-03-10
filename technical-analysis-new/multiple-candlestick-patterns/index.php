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

<h2 align="center" style="font-size:32px; font-weight:bold;">Multiple Candlestick Patterns</h2>
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

<p dir="ltr">Candlestick patterns are powerful tools in understanding market sentiment. But there's more to them than meets the eye &ndash; multiple candlestick patterns add another dimension. We've split these patterns into bullish and bearish categories, each giving valuable insights into market behavior. Come along as we explore these patterns, decode their signals, and help traders make sense of market movements.</p>
<h2 dir="ltr">&nbsp;</h2>
<h2 id="h_830209051200261712212153066" dir="ltr"><a href="#h_830209051200261712212153066">Bullish Candle Patterns&nbsp;</a></h2>
<p>&nbsp;</p>
<h3 dir="ltr">1. Piercing Pattern&nbsp;</h3>
<p>&nbsp;</p>
<p dir="ltr"><strong>Formation:</strong></p>
<p dir="ltr">The Piercing Pattern is a bullish reversal pattern formed by two candles. It begins with a bearish candle followed by a bullish candle that opens below the low of the preceding bearish candle and closes above its midpoint.</p>
<p dir="ltr" align="center"><img src="https://lh7-us.googleusercontent.com/Rsesoyx05LiWmaoeZ2Bir_-ldpQW1NmkEVPjz_cOoNm5H2dqdc5VKGiAFJ-YzTi7pBqs2Y62KkDvh_2DDaM4leYoi1Ip1dZk38gL-kq1IFZS_lfhIR5c9u8hHKDdPCGteZOwf15pCkZr1RPxGQ3Wb-o" width="50%"></p>
<p><strong><br><br></strong><strong>Psychology:</strong></p>
<p dir="ltr">This pattern indicates a potential reversal of a downtrend. The bullish candle's upward momentum pierces through the previous bearish candle, suggesting a shift in sentiment from bearish to bullish.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>How to Use:</strong></p>
<p dir="ltr">Traders may consider entering a long position after the piercing pattern, especially if accompanied by other confirming factors. Setting a stop-loss below the low of the piercing pattern can help manage risks.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/cyB2qwL5ti35Q_w3gNLs_esoFhA0GwDNByGGGXJY9dhJkLvVbgS1Ad0hraSZwai8fS4zu05oMosclmtrD_0qKjYAAxSe00g5vakQNahPhpkwAjkMKlTHqvtdu_-xCh2yvyaF84IoMdDwiV1R9ZzokGQ" width="100%"></p>
<p dir="ltr">&nbsp;</p>
<h3 dir="ltr">2. Bullish Engulfing&nbsp;</h3>
<p>&nbsp;</p>
<p dir="ltr"><strong>Formation:</strong></p>
<p dir="ltr">The Bullish Engulfing pattern is a two-candle pattern where a small bearish candle is followed by a larger bullish candle that completely engulfs the preceding bearish candle.</p>
<p dir="ltr" align="center"><img src="https://lh7-us.googleusercontent.com/yTvnyL2102a4U45ai3xqprbwAcCLdLY1JVdNRZmc5g8AEmCOoV42LcwX-giHhnxqRBQxW5lWgElJXLvEixuwVeA1zv9YCu2mLm1SdFAlOMX1bYJEyRn1bgmGSAwXsM7cuYV6dq0OdrKoSyxHS__IEdo" width="50%"></p>
<p dir="ltr">&nbsp;</p>
<p dir="ltr"><strong>Psychology:</strong></p>
<p dir="ltr">The Bullish Engulfing suggests a reversal from bearish sentiment to bullish strength. The second candle's body engulfs the entire range of the previous candle, signifying increased buying pressure.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>How to Use:</strong></p>
<p dir="ltr">Traders may consider entering a long position after a Bullish Engulfing pattern forms, especially if it occurs near key support levels. Confirmation from other technical indicators can enhance the reliability of the signal.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/ZU6GmRR1jHSszxd2VBdCFOGETwP3B7f7wZHN1p2RclLJQ1DOcajhCsL7H8fM47lEL37Ug2iOfzAUY94tWvwK9d-tnlEO-KrZnwdLX9D3meO8YjOJKnq6Z6L1NDPBF6TsPQQMSVuFvBQvATO2XoniUy4" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">3. Morning Star&nbsp;</h3>
<p>&nbsp;</p>
<p dir="ltr"><strong>Formation:</strong></p>
<p dir="ltr">The Morning Star is a three-candle pattern. It starts with a bearish candle, followed by a small candle with a lower range, and concludes with a large bullish candle. The 2nd candle can be a doji candle.</p>
<p dir="ltr" align="center"><img src="https://lh7-us.googleusercontent.com/hhATXQ5PulNlUIiKxWhhjNFukK-C4WkPqM-a3jWoqI7abLW6ANLdqO1S1x1b7-RpIHGMX8i_Y3SVvlLsv5qE4Z70taq28Fo1lxGf9mfpCCwHpZde0LZ9bbvrmu_IU4opNreSGLbRlQbDwUSQNtTHbv8" width="50%"></p>
<p dir="ltr"><strong>Psychology:</strong></p>
<p dir="ltr">The Morning Star signals a potential reversal from a downtrend to an uptrend. The small candle represents market indecision, and the bullish candle following it indicates a shift in control from bears to bulls.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>How to Use:</strong></p>
<p dir="ltr">Traders may consider entering a long position after a Morning Star pattern, especially if it forms at a support level. Confirmation from other technical tools strengthens the reliability of the reversal signal.&nbsp;</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/KyKHXy-GV-OIU81vAYj9SAdONX5kcxyoSU7gKuirkZinIC3XZp7kMQ5zhfQgJ8sTQMRO3-bTLzS7bDx9y12rmb1rGIQN8OWVXPbQqao6DZigg5hHsQxmqeGH_1y7HnxyHpGovCl1i3GpVhP1nRkAqnc" width="100%"></p>
<p dir="ltr">&nbsp;</p>
<h3 dir="ltr">4. Three Inside Up</h3>
<p>&nbsp;</p>
<p dir="ltr"><strong>Formation:</strong></p>
<p dir="ltr">The Three Inside Up is a bullish reversal pattern consisting of three candles. It begins with a large bearish candle, followed by a smaller bullish candle that is completely engulfed by the previous bearish candle. The pattern concludes with a third bullish candle that closes above the first candle's high.&nbsp;&nbsp;</p>
<p dir="ltr" align="center"><img src="https://lh7-us.googleusercontent.com/wvXSVLY-wb4EO0XFx8hsyfADYDf_Bs2E3BeLzGVHjl0W9nvAGNEg42dCl4OWKI-oRVmXfkXBjJAHPQ7hdIz5vBmapiPZr3o32h370sjD0boS5Gy8e-DFuI7TuoT1CQZLevKQ6b-6yBT5RItpMcfS0sc" width="50%"></p>
<p><strong><br><br>Psychology:</strong></p>
<p dir="ltr">The Three Inside Up signals a potential reversal from a downtrend to an uptrend. The engulfing and subsequent bullish candle suggest a shift in market sentiment favoring buyers.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>How to Use:</strong></p>
<p dir="ltr">Traders may consider entering a long position after the Three Inside Up pattern, especially if it forms at a support level. Confirmation from other technical indicators can add conviction to the trade.</p>
<p dir="ltr">&nbsp;<img src="https://lh7-us.googleusercontent.com/ohyh2HGmBbQPsZ5G_XUPe-O4o70CxD8aGFdeRX12_CP4OEW9uZrhYurqEkWpIl172s-H0F_jr-PWIy_IEgzpqHRdi6n0qEdp4ftAgu7u8uYd_AwhapMFqZx-I6ZZ9LKCjNs5bl7kaJxzVPzsHfVDKMo" width="100%"></p>
<p dir="ltr">&nbsp;</p>
<h3 dir="ltr">5. Bullish Harami</h3>
<p>&nbsp;</p>
<p dir="ltr"><strong>Formation:</strong></p>
<p dir="ltr">The Bullish Harami is a two-candle pattern where a small bearish candle is followed by a larger bullish candle. The body of the second candle is fully contained within the body of the first.</p>
<p dir="ltr" align="center"><img src="https://lh7-us.googleusercontent.com/NMEWuoTz_Nl74jgyWz_dAZrRZIPiO0miTGkNvSSB-b_5j2fByerlo8phP5IGRmNdjXuWnbz2YlCua4m5aWUfNPM8laxcDS27BLjWWXoPIJrTjXN8LiXMbXEWIRe6E2xhyxetxdfo8aoIh4kn5GviFhk" width="50%"></p>
<p dir="ltr"><strong>Psychology:</strong></p>
<p dir="ltr">The Bullish Harami signals a potential reversal from a downtrend to an uptrend. The smaller bearish candle indicates a period of indecision, followed by the bullish candle, suggesting a shift in control to the buyers.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>How to Use:</strong></p>
<p dir="ltr">Traders may consider entering a long position after a Bullish Harami, especially if it occurs near support levels. Confirmation from other technical tools enhances the reliability of the bullish reversal signal.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/ssUqF7gqsu73DZYGsNlktLeHYQMXrsRIc-3ae8LOfvPhJTgUVV4N_BA0N6zbqjD_RVqsC9JSrfp6kE6-gn9lXWxHFdQkhLDolh9qwa-Si9TQTTQFyop52gDm95047eWn548MTXhUIJLTYIMXUuRRVJU" width="100%" ></p>
<p dir="ltr">&nbsp;</p>
<h2 id="h_145967868310781712213287120" dir="ltr"><a href="#h_145967868310781712213287120">Bearish Candle Pattern</a></h2>
<p dir="ltr">&nbsp;</p>
<h3 dir="ltr">1. Dark Cloud Cover</h3>
<p dir="ltr">&nbsp;</p>
<p dir="ltr"><strong>Formation:</strong></p>
<p dir="ltr">The Dark Cloud Cover is a bearish reversal pattern formed by two candles. It starts with a bullish candle followed by a bearish candle that opens above the high of the previous bullish candle and closes below its midpoint.</p>
<p dir="ltr" align="center"><img src="https://lh7-us.googleusercontent.com/vb3a_yqvGzZ-zgrJ8L8zT6xLDQzKlhdX6VekJQcigRuCGXGt2TioSz9PK4xQR6YRzsVdRoUDJ1yGqB0n__3D-C45zNAe-t7SMqJ_w7DxSOq9Ty1zk0MNWFGE0m139USyejiepuCjYJGmZdDnpWBriiA" width="50%"></p>
<p>&nbsp;</p>
<p dir="ltr"><strong>Psychology:</strong></p>
<p dir="ltr">The Dark Cloud Cover signals a potential reversal from an uptrend to a downtrend. The bearish candle partially erases the gains of the preceding bullish candle, indicating a shift in market sentiment to the downside.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>How to Use:</strong></p>
<p dir="ltr">Traders may consider entering a short position after a Dark Cloud Cover, especially if it forms near resistance levels. Confirmation from other technical indicators can enhance the reliability of the bearish reversal signal.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/xY-bMP2rBH8_78zCxt_BYSi5pu9UWpUA0CqYsI4pOnoBRjoTKqG89upXNfuUJtwETikswBdUnOAJW-f6RbYl-u8at3hBxipyRg8Fx9MAGABuIJ35DswuOo_lLwJyUYCnohKqjemZNWM9qTi9Db-_Tfw" width="100%"></p>
<p>&nbsp;</p>
<h3>2. Bearish Harami</h3>
<p dir="ltr">&nbsp;</p>
<p dir="ltr"><strong>Formation:</strong></p>
<p dir="ltr">The Bearish Harami is a two-candle pattern where a small bullish candle is followed by a larger bearish candle. The body of the second candle is fully contained within the body of the first.</p>
<p dir="ltr" align="center"><img src="https://lh7-us.googleusercontent.com/cz5JD9PmVbMTon79uQooZxlJO8p4YtmeHkv1UHfrIaTIx7ILjdDMe876M2XvQq2EjOKoMso0AW1YDzwQ4XGomB4L3t8OxEeD_MT_FJFc3Un11howEMHA7byL_i7eVy7lN64DDw_FA0vOMCyxpSlWuVo" width="50%"></p>
<p dir="ltr"><strong>Psychology:</strong></p>
<p dir="ltr">The Bearish Harami signals a potential reversal from an uptrend to a downtrend. The smaller bullish candle indicates a period of indecision, followed by the bearish candle, suggesting a shift in control to the sellers.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>How to Use:</strong></p>
<p dir="ltr">Traders may consider entering a short position after a Bearish Harami, especially if it occurs near resistance levels. Confirmation from other technical tools enhances the reliability of the bearish reversal signal.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/-6E2NlCluKw9KLzdzQFD5Kq5oFeVvYcJ6b0V2CB29GHD1yOA1DLMaj_1zCc0nue54Ldmiy37svb3AJFGp1RIAIMH8KCesbZ1obhalsVPSAGsM53K8xe-FhQ6TrRiB0-Qs9nE6h39qSeXHBCzBCrp4dA" width="100%"></p>
<p dir="ltr">&nbsp;</p>
<h3 dir="ltr">3. Bearish Engulfing</h3>
<p dir="ltr">&nbsp;</p>
<p dir="ltr"><strong>Formation:</strong></p>
<p dir="ltr">The Bearish Engulfing pattern is a two-candle formation where a small bullish candle is followed by a larger bearish candle that completely engulfs the preceding bullish candle.</p>
<p dir="ltr" align="center"><img src="https://lh7-us.googleusercontent.com/s4vrlFV74ufpHv2QIeCtpTwgMq7J67bp42DXxFdPhD0KVfHTdqKX_Ba5Hk8mAzkC5HJGuJ561DTdqZSIKsA_mq_JV9bcG-bWc5xxu7c2AjsEOgNV1vZGPmzeqUuI7qhsnJ_wuuNI-Ed8a3uL5i2bSy4" width="50%"></p>
<p dir="ltr">&nbsp;</p>
<p dir="ltr"><strong>Psychology:</strong></p>
<p dir="ltr">The Bearish Engulfing signals a reversal from bullish sentiment to bearish control. The second candle's body engulfs the entire range of the previous bullish candle, indicating increased selling pressure.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>How to Use:</strong></p>
<p dir="ltr">Traders may consider entering a short position after a Bearish Engulfing pattern, especially if it occurs near resistance levels. Confirmation from other technical indicators strengthens the reliability of the bearish reversal signal.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/_EJBmTybg4gg4y34YgdqqSQ_F0eODgEcsZNjmOLeqCMfebRIOKRRFFjEKvqIqgNyBxGhMeCbFXnPTodju2i46J1KGUkxJSDEYpTwhlb3IoqaQR3dINXulIAJZYloAhDSIAl5XAVFzu_-mXxrxvISp2M" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">4. Evening Star</h3>
<p dir="ltr">&nbsp;</p>
<p dir="ltr"><strong>Formation:</strong></p>
<p dir="ltr">The Evening Star is a three-candle pattern starting with a bullish candle, followed by a small candle with a higher range, and concluding with a large bearish candle that engulfs the first two candles.</p>
<p dir="ltr" align="center"><img src="https://lh7-us.googleusercontent.com/pW3dwFjpEn965z7FQCxd8WpLm-163NepI20u6mEPvPonaTs8bFKlvN_aBLuzWYwfzUU3-EEvvL2562EiI2wolUlBbmBLigKPx3Gf5emmnk334UtBvGsvg6KR6nbqSuvVYm1Up5TXh7tigz81D93F8ho" width="50%"></p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>Psychology:</strong></p>
<p dir="ltr">The Evening Star signals a potential reversal from an uptrend to a downtrend. The small candle represents market indecision, and the subsequent bearish candle suggests a shift in control from bulls to bears.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>How to Use:</strong></p>
<p dir="ltr">Traders may consider entering a short position after an Evening Star pattern, especially if it forms at resistance levels. Confirmation from other technical indicators enhances the reliability of the bearish reversal signal.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/cyncRwyMfScmkhJIqjqMfd9yyLpj8f924eG7uv2gMvTzCXCr_vvfGqkj9661tE8tm-dM5DzvJjiyUjaLMnPmaoJoplzHhf87T00zwI0cQHRf2-yd2y7TbR9JZ7itDz2j4QSe9w3IobdVIbBf79vBrLM" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">5. Three Inside Down</h3>
<p dir="ltr">&nbsp;</p>
<p dir="ltr"><strong>Formation:</strong></p>
<p dir="ltr">The Three Inside Down is a bearish reversal pattern consisting of three candles. It starts with a large bullish candle, followed by a smaller bearish candle that is completely engulfed by the previous bullish candle. The pattern concludes with a third bearish candle that closes below the first candle's low.</p>
<p dir="ltr" align="center"><img src="https://lh7-us.googleusercontent.com/ZVxmi3ERGaU0jEb9bkOTOOw7aWmWezZjM9Jy_sW9WxWUzh3y6SddriMcl7cmU71awKsfKGAyhBcLJUyseCIi-rLh_wCDSB3d0WYMFUAdKG_tXcrOEx1i2l2aAv5ZALpFC8B4HbtbteLiu5CSxpiZl3A" width="50%"></p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>Psychology:</strong></p>
<p dir="ltr">The Three Inside Down signals a potential reversal from an uptrend to a downtrend. The engulfing and subsequent bearish candle suggest a shift in market sentiment favoring sellers.</p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>How to Use:</strong></p>
<p dir="ltr">Traders may consider entering a short position after the Three Inside Down pattern, especially if it forms at resistance levels. Confirmation from other technical indicators can add conviction to the trade.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/QN4gmMKO58dq9Q9fr6p9Vvi1GrfbY0ipJt7_nk4oqnrlQ9VpBGpHM4UKQfSul2O_BPKPFnwjgt-n7TCgxe9rTG4NyD7PJUO0OY--MxQpMdK0UsPswIWOLSxybDx0y8x5qX7JCnSeZ6Pkv_hsmSDfm7U" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr">These multiple candlestick patterns offer traders valuable insights into potential trend reversals or continuations. It is crucial to consider these patterns within the broader market context and use additional technical indicators for confirmation before executing trades.</p>
<p dir="ltr">&nbsp;</p>
<h2 id="h_421047447371761712213660638" dir="ltr"><a href="#h_421047447371761712213660638">Key Takeaways</a></h2>
<ol>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Candlestick patterns provide valuable insights into market sentiment and potential price movements.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Multiple candlestick patterns are categorized into bullish and bearish, offering traders a nuanced understanding of market behavior.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Bullish patterns like Piercing Pattern, Bullish Engulfing, Morning Star, Three Inside Up, and Bullish Harami suggest potential reversals from downtrends to uptrends.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Traders may consider entering long positions after the formation of bullish patterns, especially if confirmed by other technical indicators.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Bearish patterns such as Dark Cloud Cover, Bearish Engulfing, Evening Star, Three Inside Down, and Bearish Harami indicate potential reversals from uptrends to downtrends.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Short positions could be considered after the emergence of bearish patterns, particularly if supported by additional technical confirmation.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">It's essential to analyze candlestick patterns in conjunction with broader market context and use confirmatory tools to enhance trading decisions.</p>
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
						
                         <li><a href="../chart-patterns/" style="color:#273158; text-decoration:none;">Chart Patterns</a>
						<ul>
						<li align="left"><a href="../head-and-shoulders/" style="color:#273158; text-decoration:none;">Head and Shoulders</a></li>
						<li align="left"><a href="../double-tops-and-bottoms/" style="color:#273158; text-decoration:none;">Double Tops and Bottoms</a></li>
						<li align="left"><a href="../triangle-patterns/" style="color:#273158; text-decoration:none;">Triangles: Ascending, Descending, Symmetrical</a></li>
						</ul>
						 </li>
						 <li><a href="../candlestick-patterns/" style="color:#cf9c0a; text-decoration:none;">Candlestick Patterns</a>
						 <ul>
						 <li align="left"><a href="../single-candlestick-patterns/" style="color:#273158; text-decoration:none;">Single Candlestick Patterns</a></li>
						 <li align="left"><a href="../multiple-candlestick-patterns/" style="color:#cf9c0a; text-decoration:none;">Multiple Candlestick Patterns</li>
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

