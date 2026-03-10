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

<h2 align="center" style="font-size:32px; font-weight:bold;">Single Candlestick Patterns</h2>
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

<p dir="ltr">In technical analysis of financial markets, candlestick patterns are graphical representations of<strong id="docs-internal-guid-0d99b379-7fff-6869-473b-517bf4be0515"> </strong>price movements for a specified time period. Single candlestick patterns involve the analysis of individual candlesticks to gain insights into market sentiment and potential price reversals or continuations. Here are some common single candlestick patterns:</p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_8610778010611712208992865" dir="ltr"><a href="#h_8610778010611712208992865">Doji</a></h2>
<h3 dir="ltr">Formation:</h3>
<p dir="ltr">A Doji is a single candlestick pattern characterized by a small or non-existent body, with opening and closing prices nearly equal. It often has long upper and lower shadows.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/hu3zFw3CdwiJ1hwdPwfE7gzXFtRn4LxD9w6GQpfdwuLsJXM161kna2PDLTSnI60dhCLAgaR_VKJrLLyymWo0CTHvgkuFeVTBotL8qxMRcVgVSdvR7WypabrruxvX9dWs1kBfudTWc8AUfgvnDmh5CTE" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Psychology:</h3>
<p dir="ltr">The Doji reflects market indecision, indicating a balance between buyers and sellers. It commonly appears after a significant price move, highlighting the uncertainty in the market.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/YdrQnT_5mWh8m2aBFj4thmcUkloGozVhDCwFS06Hs9_U3Rskeb3lyhiZET0bkcHxhpBbCkzRGmsSFjYdXSsuHtTG4rxGNQRCWJmbv4ItE_tUDA3L51ijsG7BLGY2RrNb-MqO-824PCRF4bJiODpDer4" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">How to Use:</h3>
<p dir="ltr">Traders may seek confirmation from the next candle to determine the potential direction of a reversal. For instance, a Doji after a downtrend might signal a possible reversal to the upside. Confirmation is crucial for making informed trading decisions. When this pattern forms at a resistance, we can sell after the low is breached, and we can set the high as the stop loss. If this form is at a support, we can buy after the high is breached, and the stop loss can be set at the low of the same candle.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/QvJ8-BaqE8GaWw7ZhP6eO5iFN6BLCf50lgkUYvFrGwUUPWPNO-Y891NVTYiR1E8R_zO467bbVlvswst8UfFpwoeqLxIqkCuI8fgIGJmm99Qc79X5BHyRkNfQzGO1GnrrevdXj5W2_qaN0Ggbi88UeBU" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_2855776019771712209052102" dir="ltr"><a href="#h_2855776019771712209052102">Types of Doji</a></h2>
<p dir="ltr">There are two types of doji patterns -&nbsp;</p>
<h3 dir="ltr">1. Gravestone Doji:</h3>
<p dir="ltr"><strong>Formation:</strong></p>
<p dir="ltr">The Gravestone Doji is a single candlestick pattern that usually occurs after an uptrend and signals a potential bearish reversal. It is characterized by a small real body at the bottom and a long upper shadow. The upper shadow can be more than twice the length of the real body. Small shadows can be considered.&nbsp;</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/TP3qCZ51ESdSF_py5il6vLCZkc7DWdbNLJaHdnzP4BRMtKbbnXBqDWn6Vh8AexIYwGxGAhu13laQXLEKWkyZYnwT7Vitwj4O4jQn5cCOU_ee-s6KbC6hpv0f_EKGyNYgvSaOaQ3a4mLJCltSsAHjrhE" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>Psychology:</strong></p>
<p dir="ltr">The Gravestone Doji formation suggests that buyers pushed prices higher initially, but sellers regained control by the end of the session, resulting in a bearish reversal pattern. It reflects a shift in sentiment from bullish to potentially bearish.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/o0Po1_RpY8vVTpIMZe7vDVp7rwfhfr0zE1sS5oTdGyxfSrhHESriajpiFLNDXA2vI-27BuC9SCSb6bB8n8lB1GDMapIRYknQCNWfmV8WVXHYJcKARn91P760Ydo9NPr277HLg11X4qeA_s4cKflt4vs" width="100%"></p>
<p>&nbsp;</p>
<p dir="ltr"><strong>How to Use:</strong></p>
<p dir="ltr">Confirmation is crucial for reliability. Traders may wait for the next candle to confirm the bearish sentiment. Placing a stoploss above the high of the Gravestone Doji.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/-dwBhxTjQ3H-lADqnP2GoF-i1StadgZ2BPxvT3-hTuyj2OmnoumV_H5IETPooMz5p1z5DrpIVLsGIGdl4v-DICxQ2M3sNEePYkCzbMWc3d1Es_WFjPDfGYSPz-tYlXVWrmlUkWivuPi9auv1dDFloLs" width="100%"></p>
<h3><strong><br><br></strong>2. Dragonfly Doji:</h3>
<p dir="ltr"><strong>Formation:</strong></p>
<p dir="ltr">The Dragonfly Doji is a single candlestick pattern that typically forms after a downtrend and signals a potential bullish reversal. It features a small real body at the top and a long lower shadow. The lower shadow can be more than twice the length of the real body.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/ByaZLFprwp5juhxu0MzQVRVxtuYsyFmgRgsmEl1sHNeHx_TeHU1WttyGeka4XhyRJp3-tBeds7BeTg5vYPJ1cyTTsMGYwBZWBdbTs9xJmdlo3TAjvFfkUSnKOhhOSpJ8DcD7cg4hIWrey22H9myxnzQ" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>Psychology:</strong></p>
<p dir="ltr">The Dragonfly Doji formation indicates that sellers pushed prices lower initially, but buyers regained control by the end of the session, resulting in a bullish reversal pattern. It reflects a shift in sentiment from bearish to potentially bullish.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/gPumNEpJ85TlQVA2nxdC5XFIzsqsYt_WpLZ_F__Th98GSqFarx1ZSeNeRgkAymdvV6Y7aYKuBzi2WthFMwOZPPvoKqU1lo078vnfnsddn6H-40trq5dYz4BGJSPOe3wCkbbTwytkbdefdDnYbk-9rTU" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<p dir="ltr"><strong>How to Use:</strong></p>
<p dir="ltr">Confirmation is essential. Traders may wait for the next candle to confirm the bullish sentiment(break the high of this candle). Placing a stop-loss below the low of the Dragonfly Doji.<img src="https://lh7-us.googleusercontent.com/I_Deep2UbV3lvVWWTqkel1VkYjbBpUPTJUea4CffyV6QcG1LGtf_NyG9DaRHym_Ye6DmE-rZzkc5BBRUrQRvOwtwLiQJTLlR3d86Sq5uM_0gDj5sPPmM3FyrzwwMl_4JBZsRB0q-zQfdAGN82k5p1W8" width="100%"></p>
<p><strong><br><br></strong></p>
<h2 id="h_94334718750341712209341717" dir="ltr"><a href="#h_94334718750341712209341717">Hammer</a></h2>
<h3 dir="ltr">Formation:</h3>
<p dir="ltr">The Hammer is a single candlestick pattern that typically appears at the end of a downtrend, suggesting a potential bullish reversal. It consists of a small real body located at the top, with a lower shadow that is more than twice the length of the real body. The Hammer usually has little to no upper shadow.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/WOmOekZqaeXmLJdkQl_lojp2TjLb5JCM9SgFA2SxDHJUt6VBkT-GBp0htTAG7TRirNKTc1urILkWcCOKilEqVkUciONpCmsdTtP9P5SI9ydCXkQY8RHztHBfi21rg3nvULAhdKu2cglO8vD0lQdpfuY" width="100%"=></p>
<p><strong><br><br></strong></p>
<h3 dir="ltr">Psychology:</h3>
<p dir="ltr">The formation of a Hammer reflects a scenario where prices open, but sellers dominate and push the prices down. However, a sudden surge in buying interest occurs, causing prices to rally and closing the trading session above the opening price. This shift indicates that buyers have entered the market, potentially signaling the end of the downtrend.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">How to Use:</h3>
<p dir="ltr">Traders may consider entering a long position if the next candle forms a bullish candle and breaks the high of the hammer, will enter for the trade and place the stop-loss at the low of the Hammer.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/V-DvgAJ7qOSCFyrYSg43bVAR4fxyQh68PjznyvSBjx_w0TsMRrVegxMcTZVmhoN02FnGHokffGlrc5-bw-3zkGWY4lwy3FxbGYhBDavR0BiaiiAq2xwOENbdRF0U5MP4o-607N8G-Xlb3KzIgMbn_P4" width="100%"><br><br><strong>Note:</strong> This pattern is also called the Bullish Pin bar pattern.</p>
<p dir="ltr">&nbsp;</p>
<h2 id="h_29243998672351712209666733" dir="ltr"><a href="#h_29243998672351712209666733">Shooting Star</a></h2>
<h3 dir="ltr">Formation:</h3>
<p dir="ltr">The Shooting Star is a single candlestick pattern that typically occurs at the end of an uptrend, signaling a potential bearish reversal. It has a small real body near the bottom and a long upper shadow, with little to no lower shadow.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/pNC55TRqjAP8gUo6nvTmRh3ufhISZMgK2IQY3-nDWkDTMU1LJOZsTdsyqG2kc8PTRa7nVSFomcR0Csry-v2RCzzScuelYuWf84ycIhBEUOTsXIPdCMLcdUQk_DN_qHzU1q52F4aeQ31z7c8vGX2rBAk" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Psychology:</h3>
<p dir="ltr">The Shooting Star formation suggests that buyers initially push prices higher, creating the small real body. However, sellers step in and regain control by the end of the session, pushing prices down and creating a long upper shadow.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">How to Use:</h3>
<p dir="ltr">Traders may consider entering a short position if the next day the candle breaks the low of shooting star. Placing a stop-loss above the high of the Shooting Star can help manage potential risks.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/Ikp_LZ9dFx6HhBmi85zJGy2xsi2LDHWTxIbLbVSdxqbMXnhz-dvXFDsJp2gUMSAJ8rJu2V1VbCmmOinN7xkLs_1JNkPSJl6ciWRM_K6h-515F79xQvPQqTTzNs-h5Yxl4Uf23oC8qZlyfyH8LGjZY-s" width="100%" ></p>
<p dir="ltr"><strong>Note:</strong> This pattern is also called the Bearish Pin Bar Pattern.</p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_40597038696021712210109564" dir="ltr"><a href="#h_40597038696021712210109564">Inverted Hammer</a></h2>
<h3 dir="ltr">Formation:</h3>
<p dir="ltr">The Inverted Hammer is a single candlestick pattern that typically forms after a downtrend and suggests a potential bullish reversal. It features a small body at the bottom and a long upper shadow. The real body is generally small, and there might be little to no lower shadow. This is similar to shooting star but this pattern forms at the support of downtrend so called bullish pattern.&nbsp;</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/FV9WOh89bRO8pmKZu9BPhbvWgQREA538E6QovdXbfMJT9uay5vwF-roUdUL__9u40aWQTJRK9sNJphpQ1tNWbaa0fvFs_5hahq3dX0aSObea22CDeupzgugBrUTSu18R950fgi2QYQ2AvGqDJfP7A2A" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Psychology:</h3>
<p dir="ltr">The Inverted Hammer's formation indicates that sellers attempted to push prices lower, but buyers entered the market and pushed prices back up, closing the session higher than the opening price. This reversal pattern implies a shift in sentiment from bearish to potentially bullish.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">How to Use:</h3>
<p dir="ltr">Traders often wait for confirmation from subsequent candles. If the next candle forms a bullish candle and breaks the high of this candle, it can serve as confirmation for entering a long position. Placing a stop-loss below the low of the Inverted Hammer is a common risk management strategy.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/2BvyvX-ynd8-Ruhd_rJcyZAAqtPpuLRNsV8UaiXHm7h0X-HwMKFt0BdpeximdOIes4xqjR8QBiGs_EfeYoliEORDqmd_VH4DoIJR7AiwBdUee2fZpYh8_vWoSagXhWfZIWGMx0bYABTdxAAkatjUC2g" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<h2 id="h_159685479105861712210225316" dir="ltr"><a href="#h_159685479105861712210225316">Spinning Top</a></h2>
<h3 dir="ltr">Formation:</h3>
<p dir="ltr">A Spinning Top is a single candlestick pattern characterized by a small real body and both upper and lower shadows of similar length. It often appears in periods of market indecision or uncertainty.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/DgfyB52CbgHf6TlXl2KWDf_v5oQlbW-AOx6VuTI6UCWo56QdTvvIQYo0UJspyTFifw0cNedHhn5zB7d19GORyXgBgayPtcwPT6XFV0O1AqGQYLQCat4PPkdKTAQLS9fkDUcmM6J-ks-o2IfRq20JV_M" width="100%"></p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Psychology:</h3>
<p dir="ltr">The formation of a Spinning Top reflects a balanced battle between buyers and sellers throughout the trading session. Neither side has gained control, resulting in a small real body and comparable upper and lower shadows.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">How to Use:</h3>
<p dir="ltr">Traders observe a Spinning Top to gauge potential shifts in market sentiment. If it forms during an uptrend or downtrend, it may signal indecision and a possible reversal.&nbsp;</p>
<p dir="ltr">When this pattern forms at a resistance, we can sell after the low is breached, and we can set the high as the stop loss. If this form is at a support, we can buy after the high is breached, and the stop loss can be set at the low of the same candle.</p>
<p dir="ltr"><img src="https://lh7-us.googleusercontent.com/kjJRTo-PBg_xj1kWBeZMO4lv_NbJZF6GXNIihYdVx7BEszgiFY5cx0RvmSKveE1qkMkiy-k-5Y8n4JnJCUfxumP36i-LMvk69l9SpMpClWK5eDkVV91n7S5vN9jVS5SifNkW_n0L3m84OJeFPCzQ4cw" width="100%"></p>
<p dir="ltr">&nbsp;</p>
<h2 id="h_174199836118561712210296481" dir="ltr"><a href="#h_174199836118561712210296481">Key Takeaways</a></h2>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Doji:</h3>
<p dir="ltr"><strong>Signal:</strong> Market indecision after a significant move.</p>
<p dir="ltr"><strong>Short Strategy:</strong> Sell after the low of the Doji is breached; set the high as the stop loss.</p>
<p dir="ltr">&nbsp;</p>
<h3 dir="ltr">Gravestone Doji:</h3>
<p dir="ltr"><strong>Signal:</strong> Potential bearish reversal after an uptrend.</p>
<p dir="ltr"><strong>Short Strategy:</strong> Confirm bearish sentiment; sell after breach, set stop-loss above the high.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Dragonfly Doji:</h3>
<p dir="ltr"><strong>Signal:</strong> Potential bullish reversal after a downtrend.</p>
<p dir="ltr"><strong>Short Strategy:</strong> Confirm bearish sentiment (break the low); set stop-loss above the high.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Hammer:</h3>
<p dir="ltr"><strong>Signal:</strong> Potential bullish reversal at the end of a downtrend.</p>
<p dir="ltr"><strong>Short Strategy:</strong> Wait for confirmation; avoid short positions on Hammer formations.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Shooting Star:</h3>
<p dir="ltr"><strong>Signal:</strong> Potential bearish reversal at the end of an uptrend.</p>
<p dir="ltr"><strong>Short Strategy:</strong> Confirm bearish sentiment; sell after breach, set stop-loss above the high.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Inverted Hammer:</h3>
<p dir="ltr"><strong>Signal:</strong> Potential bullish reversal after a downtrend.</p>
<p dir="ltr"><strong>Short Strategy:</strong> Confirm bullish sentiment; sell after breach, set stop-loss below the low.</p>
<p dir="ltr">&nbsp;</p>
<h3 dir="ltr">Spinning Top:</h3>
<p dir="ltr"><strong>Signal:</strong> Market indecision; potential reversal in an uptrend or downtrend.</p>
<p><strong id="docs-internal-guid-4ccd176b-7fff-f9a2-0507-5bfaf8c9b1fb">Short Strategy: </strong>Consider short positions after confirmation, set stop-loss accordingly.</p>
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
						 <li align="left"><a href="../single-candlestick-patterns/" style="color:#cf9c0a; text-decoration:none;">Single Candlestick Patterns</a></li>
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

