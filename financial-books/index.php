<?php
include("../DLL/config.php");
include("../DLL/functions.php");
$short_desc = getaboutMukulShort();
$desc = getaboutMukul();
$pic = getmukulImage();
$vmv = getVision();
$finowings = getFinowings();
$fi = mysqli_fetch_array($finowings);
$fi_title = $fi['title'];
$fi_short = $fi['short_desc'];
$fi_desc = $fi['descr'];
$fi_pic = $fi['image1'];
$active_page = 'academy';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>The Simplest Book For Technical Analysis - Finowings</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="Discover The Simplest Book For Technical Analysis on Finowings. Perfect for beginners, learn to analyze financial trends effortlessly. Explore now!" name="description">
  <link rel="canonical" href="https://www.finowings.com/financial-books/" />

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
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="../css/style.css" rel="stylesheet">

  <!--Bootstrap code-->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!--Bootstrap code-->

  <style>
    /* Float four columns side by side */
    .column {
      width: 25%;
      padding: 0 10px;
    }

    /* Remove extra left and right margins, due to padding */
    .row {
      margin: 0 -5px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive columns */
    @media screen and (max-width: 600px) {
      .column {
        width: 100%;
        display: block;
        margin-bottom: 20px;
      }

    }

    .card {
      background-color: #fff;
      max-width: 300px;
      display: inline-block;
      flex-direction: column;
      overflow: hidden;
      border-radius: 2rem;
      box-shadow: 0px 1rem 1.5rem rgba(0, 0, 0, 0.5);
      margin: 20px;
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
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.3);
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
      text-align: center;
      padding: 0 2rem 0.5rem;
      margin: 0;
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
      padding: 0.8rem;
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
      padding: 0 2rem 2.5rem;
      order: 100;
    }

    /* Responsive styling for book cards */
    @media screen and (max-width: 768px) {
      .card {
        max-width: 44%;
        /* Allows 2 cards side-by-side */
        margin: 10px 2%;
        border-radius: 1rem;
        /* Smaller border radius for mobile */
      }

      .card img {
        width: 100%;
        height: auto;
      }

      .card .actions {
        padding: 0 0.5rem 1rem;
        /* Less padding on mobile */
      }

      .card .actions .follow-btn button {
        padding: 0.5rem 0.2rem;
        font-size: 0.8rem;
        /* Smaller text on mobile */
      }

      /* Make sure the container doesn't force 100% width on cards implicitly */
    }
  </style>

  <style>
    .container-fluid.page-header {
      position: relative;
      height: 600px !important;
      margin-bottom: 2rem;
      overflow: hidden;
      padding-left: 0 !important;
      padding-right: 0 !important;
      padding-top: 0 !important;
      padding-bottom: 0 !important;
      background: none !important;
      background-image: none !important;
    }

    .container-fluid.page-header img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      z-index: 0;
    }

    .container-fluid.page-header .banner-img-desktop {
      display: block;
    }

    .container-fluid.page-header .banner-img-mobile {
      display: none;
    }

    .container-fluid.page-header .container {
      position: relative;
      z-index: 1;
      height: 100%;
      padding: 0;
    }

    /* Mobile ke liye height choti kar rahe hain taaki screen na bhare */
    @media (max-width: 768px) {
      .container-fluid.page-header {
        height: 200px !important;
      }

      .container-fluid.page-header .banner-img-desktop {
        display: none !important;
      }

      .container-fluid.page-header .banner-img-mobile {
        display: block !important;
      }

      .display-3 {
        font-size: 2.5rem;
      }
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

  <?php include("../top-navigation.php"); ?>
  <!-- Navbar End -->


  <!-- About Mukul Agrawal Start
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
				
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-90 h-90" src="../img/technical-analysis-book12.jpg" alt="Technical analysis book by Finowings academy" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">THE SIMPLEST BOOK FOR</h6>
                    <h1 class="mb-4">TECHNICAL ANALYSIS</h1>
                    <p class="mb-4" align="justify">This book, written by Mr. Mukul Agrawal, the founder of Finowings Training & Academy Pvt Ltd, will guide you on how to use technical analysis to better time your entry and exit into and out of the stock, index, and commodity markets. He is trying to give you whatever he learned and experienced from the market in the past 18 years in the easiest way possible. People who want to study technical analysis should read this book because of its clear, understandable writing style.</p>
					<p align="justify">Additionally, the book discusses risk management strategies like position sizing, stock picking strategies, setting up initial and trailing stop losses, keeping a trading journal, etc.</p>
                   
					
					 <a class="btn btn-primary py-3 px-5 mt-2" href="https://amzn.to/3g2fMuV" target="_blank">Buy Now</a>-->

  <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background:#00acea; border:1px solid #00acea;">
Read More</button>-->
  <!-- </div>
            </div>
			
        </div>
    </div>
	
	<!-- About Finowings Start 
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">A Textbook for Investment Education</h6>
                    <h1 class="mb-4">Money & You</h1>
                    <p class="mb-4" align="justify">This book will teach you how to make a budget, set financial goals, and form sound spending practices. As I show you how to make your money work for you, I also go into the realm of investments. You will learn tips for handling debt and making plans for a stable financial future.<br /><br />
					The focus of "Money & You" is cultivating a good attitude towards money rather than merely talking about computations and numbers. I attempted to inspire readers to develop a positive connection with money by emphasizing both their financial security and leading fulfilling lives.</p>

                    <a class="btn btn-primary py-3 px-5 mt-2" href="https://amzn.to/44f6EHI" target="_blank">Buy Now</a>
                </div>
				<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-90 h-90" src="../img/money-and-you-3.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>
			
        </div>
    </div>-->
  <!--Google Adsense Code Starts-->
  <div class="container-fluid page-header" onclick="window.open('https://amzn.to/3g2fMuV', '_blank');" style="cursor: pointer;">
    <img src="../admin/media/mukul-agrawal-books.webp" alt="Mukul Agrawal Books - Desktop Banner" class="banner-img-desktop" loading="eager">
    <img src="../admin/media/mukul-agrawal-books_mobile.webp" alt="Mukul Agrawal Books - Mobile Banner" class="banner-img-mobile" loading="eager">
  </div>

  <!--Google Adsense Code Ends-->
  <!--Google Adsense Code Starts-->
  <div align="center">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4481710634198846" crossorigin="anonymous"></script>
    <!-- Blog-Top-Banner -->
    <ins class="adsbygoogle"
      style="display:inline-block;width:728px;height:90px"
      data-ad-client="ca-pub-4481710634198846"
      data-ad-slot="3968038623"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </div>
  <!--Google Adsense Code Ends-->

  <div class="container-xxl">
    <div class="container">
      <div class="text-center">
        <h6 class="section-title bg-white text-center text-primary px-3">Best Financial Books of All Time</h6>
        <h1 class="mb-3">Finowings Financial Books Library</h1>
      </div>
      <br />
      <div align="center" style="width:100%;">
        <div class="card">
          <img src="books/technical-analysis-book.jpg" alt="The-Simplest-Book-for-Technical-Analysis-English" />

          <div class="actions">
            <div class="follow-info">

            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/3g2fMuV" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">
          <img src="books/the-simplest-book-for-techical-analysis-hindi.jpg" alt="The-Simplest-Book-for-Technical-Analysis-Hindi" />

          <div class="actions">
            <div class="follow-info">

            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/4bMnKRm" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">
          <img src="books/the-simplest-book-for-techical-analysis-marathi.jpg" alt="The-Simplest-Book-for-Technical-Analysis-Marathi" />

          <div class="actions">
            <div class="follow-info">

            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/48Im2xP" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">
          <img src="books/money-and-you.png" alt="Money-and-You" />

          <div class="actions">
            <div class="follow-info">

            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/3uKyDm0" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">
          <img src="books/money-and-you-hindi.jpg" alt="Money-and-You-Hindi" />

          <div class="actions">
            <div class="follow-info">

            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/49H6HhJ" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

      </div>


      <div align="center" style="width:100%;">

        <div class="card">

          <img src="books/the-intelligent-investor.jpg" alt="the-intelligent-investor" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/42wXsxH" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">

          <img src="books/the-intelligent-investor-hindi.jpg" alt="the-intelligent-investor-hindi" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/3Idewjo" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">

          <img src="books/rich-dad-poor-dad.jpg" alt="The-Rich-Dad-Poor-Dad" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/3Z8Ofcf" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">

          <img src="books/rich-dad-poor-dad-hindi.jpg" alt="The-Rich-Dad-Poor-Dad-Hindi" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/40sccfK" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>


        <div class="card">

          <img src="books/the-dhandho-investor.jpg" alt="Buy simplest books on technical analysis called as The Dhandho Investor" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/3ZmqGNj" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>


        <div class="card">

          <img src="books/Common-Stocks-and-Uncommon-Profits.jpg" alt="Buy simplest books on technical analysis called as Common Stocks and Uncommon Profits" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/3FKaK0i" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>



        <div class="card">

          <img src="books/one-up-in-wall-street.jpg" alt="one-up-in-wall-street" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/3LGUSza" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">

          <img src="books/one-up-in-wall-street-hindi.jpg" alt="one-up-in-wall-street-hindi" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/48vekXE" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">

          <img src="books/the-warren-buffet-way.jpg" alt="Buy simplest books on technical analysis called as The Warren Buffet Way" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/3Z5q91V" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">

          <img src="books/warren-buffet-stock-portfolio.jpg" alt="warren-buffet-stock-portfolio" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/3IesK3H" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>


        <div class="card">

          <img src="books/warren-buffet-100-lessons-hindi.jpg" alt="warren-buffet-books" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/4bJ2L1X" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">

          <img src="books/The-Psychology-of-Money.jpg" alt="The-Psychology-of-Money" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/49tuamQ" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">

          <img src="books/The-Psychology-of-Money-hindi.jpg" alt="The-Psychology-of-Money-hindi" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/3OX7d37" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">

          <img src="books/how-to-make-money-stocks.jpg" alt="warren-buffet-books" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/3SSI36P" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">

          <img src="books/the-lifestyle-investor.jpg" alt="warren-buffet-books" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/3wpIxKh" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">

          <img src="books/think-and-grow-rich.jpg" alt="think-and-grow-rich" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/49KjboW" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>



        <div class="card">

          <img src="books/the-midas-touch.jpg" alt="the-midas-touch" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/3I9CbkX" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">

          <img src="books/stock-market-beginner-guide-book.jpg" alt="stock-market-beginner-guide-book" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/3wpXfRn" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">

          <img src="books/beginer-guide-to-stock-market.jpg" alt="beginer-guide-to-stock-market" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/3STTPhD" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">

          <img src="books/stock-market-terminology.jpg" alt="beginer-guide-to-stock-market" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/3IdJoQM" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">

          <img src="books/stock-market-investing.jpg" alt="stock-market-investing" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/48sXTLi" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">

          <img src="books/option-future-trading.jpg" alt="option-future-trading-books" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/3uClLOX" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">

          <img src="books/fundamentals-of-future-and-options.jpg" alt="fundamentals-of-future-and-options" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/42TZj04" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">

          <img src="books/mind-over-markets.jpg" alt="mind-over-markets" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/49JOCzr" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">

          <img src="books/the-naked-trader.jpg" alt="the-naked-trader" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/3voGhTg" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">

          <img src="books/stock-market-genius.jpg" alt="stock-market-genius" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/4apPgmE" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

        <div class="card">

          <img src="books/technical-analysis-of-stock-trends.jpg" alt="technical-analysis-of-stock-trends" />

          <div class="actions">
            <div class="follow-info">
            </div>
            <div class="follow-btn">
              <button><a href="https://amzn.to/3VUZCGR" target="_blank" style="color:#FFFFFF; text-decoration:none;">Buy Now</a></button>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>



  <!-- Footer Start -->
  <?php include("../footer.php"); ?>
  <!-- Footer End -->





  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="../js/main.js"></script>


</body>

</html>