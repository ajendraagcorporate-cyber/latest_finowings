<?php
include("../DLL/config.php");
include("../DLL/functions.php");
if (isset($_POST['submit'])) {
  $s = $_POST['search'];
  $ipodetail = searchIPO($s);
} else {
  $ipodetail = getIPO();
}
$date = date("Y-m-d");
$datef = strtotime($date);
$active_page = 'ipo';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Live IPO GMP Today - Latest & Current IPO GMP Updates</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="live ipo gmp, ipo gmp live, current ipo gmp, all ipo gmp, latest ipo gmp, new ipo gmp, live gmp ipo, upcoming ipo gmp, ipo grey market premium, ipo gmp today (live)" name="keywords">
  <meta content="Get live IPO GMP today, current updates, and trends for upcoming and all IPO GMPs. Stay informed with real-time IPO GMP information." name="description">

  <meta property="og:title" content="Live IPO GMP Today - Latest & Current IPO GMP Updates">
  <meta property="og:site_name" content="Finowings">
  <meta property="og:url" content="https://www.finowings.com/IPO/live-ipo-gmp.php">
  <meta property="og:description" content="Get live IPO GMP today, current updates, and trends for upcoming and all IPO GMPs. Stay informed with real-time IPO GMP information.">
  <meta property="og:type" content="article">
  <meta property="og:image" content="https://www.finowings.com/img/finowings-logo.png">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Live IPO GMP Today - Latest & Current IPO GMP Updates">
  <meta name="twitter:site" content="@https://www.finowings.com/IPO/live-ipo-gmp.php">
  <meta name="twitter:description" content="Get live IPO GMP today, current updates, and trends for upcoming and all IPO GMPs. Stay informed with real-time IPO GMP information.">
  <meta name="twitter:image" content="https://www.finowings.com/img/finowings-logo.png">
  <meta name="twitter:image:alt" content="ipo gmp">





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




  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "NewsArticle",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://www.finowings.com/IPO/live-ipo-gmp.php"
      },
      "headline": "IPO GMP, Upcoming IPO GMP, Latest IPO GMP, Current IPO GMP, IPO, IPO GMP today, IPO GMP Live.",
      "description": "Get live IPO GMP today, current updates, and trends for upcoming and all IPO GMPs. Stay informed with real-time IPO GMP information.",
      "image": "https://www.finowings.com/img/finowings-logo.png",
      "author": {
        "@type": "Organization",
        "name": "Finowings",
        "url": "https://www.finowings.com/"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Finowings",
        "logo": {
          "@type": "ImageObject",
          "url": "https://www.finowings.com/img/finowings-logo.png"
        }
      },
      "datePublished": "2025-06-28"
    }
  </script>


  <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Current IPO GMP",
        "item": "https://www.finowings.com/IPO/live-ipo-gmp.php"
      }, {
        "@type": "ListItem",
        "position": 2,
        "name": "Main Board IPO",
        "item": "https://www.finowings.com/Main-Board-IPO/"
      }, {
        "@type": "ListItem",
        "position": 3,
        "name": "SME IPO",
        "item": "https://www.finowings.com/SME-IPO/"
      }]
    }
  </script>

  <style>
    .card {
      width: 500px !important;
      display: inline;
      border: 1px;
    }
  </style>


  <!-- FAQ CSS Start -->
  <style>
    /* Custom Accordion Styles */
    .accordion-item {
      border: none;
      margin-bottom: 15px;
      border-radius: 10px !important;
      overflow: hidden;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }

    .accordion-button {
      color: #273158;
      /* Bold Blue */
      font-weight: 600;
      background-color: #ffffff;
      border-left: 5px solid #cf9c0a;
      /* Honey Gold */
      box-shadow: none !important;
    }

    .accordion-button:not(.collapsed) {
      color: #ffffff;
      background-color: #273158;
      /* Bold Blue */
      border-left: 5px solid #cf9c0a;
      /* Honey Gold */
    }

    .accordion-button:not(.collapsed)::after {
      filter: brightness(0) invert(1);
      /* Make arrow white */
    }

    .accordion-button:focus {
      box-shadow: none;
      border-color: rgba(0, 0, 0, .125);
    }

    .accordion-body {
      background-color: #ffffff;
      /* White background for body */
      color: #181d38;
      /* Powerful */
      font-weight: 500;
      border-top: 1px solid #dee2e6;
    }

    /* Custom Explore Button Style */
    .btn-explore {
      background: linear-gradient(90deg, #273158 0%, #4a5c9a 100%) !important;
      border: none !important;
      color: #ffffff !important;
      border-radius: 50px !important;
      font-weight: 500;
      font-size: 15px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }

    .btn-explore:hover {
      background: linear-gradient(90deg, #cf9c0a 0%, #f0c345 100%) !important;
      color: #ffffff !important;
      transform: translateY(-2px);
      box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
    }

    /* Mobile adjustments for Explore Buttons */
    @media (max-width: 576px) {
      .btn-explore {
        padding: 8px 16px !important;
        font-size: 13px !important;
        margin-top: 5px !important;
        width: 80% !important;
        /* Make them consistent width on mobile */
        display: block !important;
        margin-left: auto !important;
        margin-right: auto !important;
      }
    }

    /* Custom Search Bar */
    .search-container {
      background: #fff;
      border-radius: 50px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      padding: 5px;
      display: flex;
      /* Changed from inline-flex to flex for better centering control */
      width: 95%;
      max-width: 600px;
      margin: 0 auto;
      /* Centering magic */
    }

    .search-input {
      border: none;
      outline: none;
      background: transparent;
      padding: 10px 20px;
      flex-grow: 1;
      border-radius: 50px 0 0 50px;
      font-size: 16px;
    }

    .search-btn-custom {
      background: #273158;
      color: #fff;
      border: none;
      border-radius: 50px;
      padding: 10px 30px;
      font-weight: 600;
      transition: all 0.3s;
    }

    .search-btn-custom:hover {
      background: #cf9c0a;
      color: #fff;
    }
  </style>
  <!-- FAQ CSS Ends -->


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

  <div class="container-xxl">
    <div class="container wow fadeInUp" data-wow-delay="0.3s">

      <div align="center"><a href="https://www.finowings.com/deltaexchangeclicks.php" target="_blank"><img src="../cypto-ctr/delta-exchange-cta.webp" class="img-fluid mx-auto d-block" /></a></div>
      <br /><br />
      <div class="text-center">
        <h6 class="section-title bg-white text-center text-primary px-3">IPO</h6>
        <h1 class="mb-3 text-dark">Current IPO GMP</h1>
        <p align="center" style="font-size:12px; font-weight:bold;"><img src="upcoming.png" />&nbsp;Upcoming&nbsp;<img src="ongoing.png" />&nbsp;Ongoing&nbsp;<img src="closed.png" />&nbsp;Closed</p>

        <div class="main mt-2" align="center">

          <!-- Actual search box -->

          <!-- Another variation with a button -->
          <!-- Another variation with a button -->
          <form method="post" action="">
            <div class="search-container">
              <input type="text" class="search-input" name="search" id="search" placeholder="Search IPO...">
              <button type="submit" name="submit" class="search-btn-custom">Search</button>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-body">

                <div class="table-responsive">
                  <table class="table" style="text-align: left !important;">
                    <thead style="position: sticky; top: 0; z-index: 10;">

                      <tr style="color: rgb(255, 255, 255); background-color: rgb(39, 49, 88) !important;">
                        <th> IPO</th>
                        <th> Price</th>
                        <th> GMP (Rs.)</th>
                        <th> IPO Size (Rs.)</th>
                        <th> Open Date </th>
                        <th> Close Date</th>
                        <th> Listing Date</th>
                        <th> Status</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $i = 1;
                      while ($ipo = mysqli_fetch_array($ipodetail)) {
                        $title = $ipo['title'];
                        $title1  = strstr($title, 'IPO', true);
                        if ($title1 == '') {
                          $title1  = strstr($title, ':', true);
                        }
                        $cat = $ipo['cat_id'];
                        $cat_name = getCategoryName($cat);
                        $cat_names = str_replace(" ", "-", $cat_name);
                        if ($cat_names == 'IPO') {
                          $cat_name1 = 'IPO';
                        } else {
                          $cat_name1 = $cat_names;
                        }
                        $blog_url = $ipo['blog_url'];
                        $ipo_price = $ipo['ipo_price'];
                        $ipo_gmp = $ipo['ipo_gmp'];
                        $ipo_size = $ipo['ipo_size'];
                        $open = $ipo['ipo_open'];
                        $openf = $ipo['ipo_openf'];
                        $openff = strtotime($openf);
                        $close = $ipo['ipo_close'];
                        $closef = $ipo['ipo_closef'];
                        $closeff = strtotime($closef);
                        $listing = $ipo['ipo_listing'];
                        $ipolistingf = $ipo['ipo_listingf'];
                        $ipolistingff = strtotime($ipolistingf);

                        if ($openff > $datef) {
                          $cstatus = "Upcoming";
                      ?>
                          <tr style="background-color: #FAF9D0 !important;">

                            <td> <a href="../IPO/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title1; ?></a>&nbsp;&nbsp;<span class='badge rounded-pill bg-danger ms-2' style='font-size:10px;vertical-align: middle;margin-top:-2px;'><?php echo $cat_name1; ?></span> </td>
                            <!--<td><?php //echo date("d F"); 
                                    ?></td>-->
                            <td> <?php echo $ipo_price; ?> </td>
                            <td style="color:#273158; font-weight:bold;"> <?php echo $ipo_gmp; ?> </td>
                            <td> <?php echo $ipo_size; ?> </td>
                            <td> <?php echo $open; ?> </td>
                            <td> <?php echo $close; ?> </td>
                            <td> <?php echo $listing; ?> </td>
                            <td> <?php echo $cstatus; ?> </td>
                          </tr>
                        <?php
                        } elseif ($closeff >= $datef) {
                          $cstatus = "Open";
                        ?>
                          <tr style="background-color: #90EE90 !important;">
                            <td> <a href="../IPO/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title1; ?></a>&nbsp;&nbsp;<span class='badge rounded-pill bg-danger ms-2' style='font-size:10px;vertical-align: middle;margin-top:-2px;'><?php echo $cat_name1; ?></span> <a href="../ipoapplyclicks.php" target="_blank"><span class="badge" style="font-size:14px; margin-top: 2px; background-color: rgb(39, 49, 88);">Apply Now</span></a>
                            </td>
                            <!--<td><?php //echo date("d F"); 
                                    ?></td>-->
                            <td> <?php echo $ipo_price; ?> </td>
                            <td style="color:#273158; font-weight:bold;"><?php echo $ipo_gmp; ?> </td>
                            <td> <?php echo $ipo_size; ?> </td>
                            <td> <?php echo $open; ?> </td>
                            <td> <?php echo $close; ?> </td>
                            <td> <?php echo $listing; ?> </td>
                            <td> <?php echo $cstatus; ?> </td>
                          </tr>
                        <?php
                        } elseif ($datef < $ipolistingff) {
                          $cstatus = "Closed";
                        ?>
                          <tr style="background-color: rgb(233, 249, 255) !important;">
                            <td> <a href="../IPO/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title1; ?></a>&nbsp;&nbsp;<span class='badge rounded-pill bg-danger ms-2' style='font-size:10px;vertical-align: middle;margin-top:-2px;'><?php echo $cat_name1; ?></span> <a href="https://www.bseindia.com/static/investors/application_statuschecksystem.aspx" target="_blank"><span class="badge" style="font-size:14px; margin-top: 2px; background-color:#00abe9;">Allotment Status</span></a>
                            </td>
                            <!--<td><?php //echo date("d F"); 
                                    ?></td>-->
                            <td> <?php echo $ipo_price; ?> </td>
                            <td style="color:#273158; font-weight:bold;"><?php echo $ipo_gmp; ?> </td>
                            <td> <?php echo $ipo_size; ?> </td>
                            <td> <?php echo $open; ?> </td>
                            <td> <?php echo $close; ?> </td>
                            <td> <?php echo $listing; ?> </td>
                            <td> <?php echo $cstatus; ?> </td>
                          </tr>
                        <?php
                        } else {
                          $cstatus = "Closed";
                        ?>
                          <tr style="background-color: rgb(233, 249, 255) !important;">
                            <td> <a href="../IPO/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title1; ?></a>&nbsp;&nbsp;<span class='badge rounded-pill bg-danger ms-2' style='font-size:10px;vertical-align: middle;margin-top:-2px;'><?php echo $cat_name1; ?></span> </td>
                            <!--<td><?php //echo date("d F"); 
                                    ?></td>-->
                            <td> <?php echo $ipo_price; ?> </td>
                            <td style="color:#273158; font-weight:bold;"><?php echo $ipo_gmp; ?> </td>
                            <td> <?php echo $ipo_size; ?> </td>
                            <td> <?php echo $open; ?> </td>
                            <td> <?php echo $close; ?> </td>
                            <td> <?php echo $listing; ?> </td>
                            <td> <?php echo $cstatus; ?> </td>
                          </tr>
                        <?php
                        }
                        ?>
                      <?php
                        $i = $i + 1;
                      }
                      ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>


        </div>

        <br />


        <div align="center"><a class="btn btn-primary py-2 px-4 mt-2 btn-explore" href="https://www.finowings.com/Main-Board-IPO/">Explore All Main Board IPO</a>&nbsp;<a class="btn btn-primary py-2 px-4 mt-2 btn-explore" href="https://www.finowings.com/SME-IPO/">Explore All SME IPO</a>&nbsp;<a class="btn btn-primary py-2 px-4 mt-2 btn-explore" href="https://www.finowings.com/IPO/live-ipo-gmp.php">IPO's Current GMP</a></div>

        <br />

        <!--<div align="center"><a href="https://www.finowings.com/angeloneclicks.php" target="_blank"><img src="../img/angel-one-ctr-banner.gif" class="img-fluid mx-auto d-block" /></a></div>
				
				 <br />--> <br />


        <div class="row mt-4 justify-content-center align-items-start">
          <!-- Left Ad -->
          <div class="col-lg-2 col-md-3 d-none d-md-block">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4481710634198846"
              crossorigin="anonymous"></script>
            <!-- HIndi-Website-Right-3 -->
            <ins class="adsbygoogle"
              style="display:block"
              data-ad-client="ca-pub-4481710634198846"
              data-ad-slot="4503473632"
              data-ad-format="auto"
              data-full-width-responsive="true"></ins>
            <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          </div>

          <!-- Center Video -->
          <div class="col-lg-8 col-md-12 text-center">
            <h5 class="text-dark">How to Increase IPO Allotment Chances | IPO Allotment Details, Tips & Secret</h5>
            <div class="ratio ratio-16x9 mt-3">
              <iframe src="https://www.youtube.com/embed/AuAFiisoaVM?si=0DECjVBqLmybPwcJ" title="YouTube video player" allowfullscreen></iframe>
            </div>

            <div class="alert mt-3 text-start shadow-sm" style="background-color: #fff4c2; border-left: 5px solid #ffbc00; border-radius: 8px;">
              <h6 class="alert-heading fw-bold" style="color: #997404;"><i class="bi bi-exclamation-triangle-fill me-2"></i>Important Notice</h6>
              <small style="color: #555;">Note: GMP figures are unaudited and fall outside the purview of SEBI. They gauge sentiment within the unofficial grey market rather than the formal exchange. Treat them as a guideline rather than a promise of profit.</small>
            </div>
          </div>

          <!-- Right Ad -->
          <div class="col-lg-2 col-md-3 d-none d-md-block">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4481710634198846"
              crossorigin="anonymous"></script>
            <!-- HIndi-Website-Right-3 -->
            <ins class="adsbygoogle"
              style="display:block"
              data-ad-client="ca-pub-4481710634198846"
              data-ad-slot="4503473632"
              data-ad-format="auto"
              data-full-width-responsive="true"></ins>
            <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-12">
            <div class="card shadow rounded-3 border-0">
              <div class="card-body p-4 p-md-5 text-start">
                <h2 class="mb-4 text-dark">Grey Market Premium (GMP)</h2>
                <p>Imagine a secret meeting place, filled with quiet talks and discreet exchanges. In this hidden world, unknown companies are discussed like gossip, and people trade shares in the shadows before they officially hit the market. Welcome to the IPO Grey Market, the mysterious side of Wall Street where stocks are dealt with before their public debut.</p>
                <p>Here, news about upcoming IPOs circulates like rumours, and investors, eager for the next big opportunity, negotiate in this atmosphere. It's a place for risk-takers who want to get ahead of the official market, a place where fortunes can be gained or lost overnight. Are you ready to step into this hidden world?</p>
                <p>Get ready for a journey into the interesting and sometimes risky IPO Grey Market.</p>

                <h4 class="mt-4 text-dark">Understanding the Basics</h4>
                <p>The IPO Grey Market, lacking rules and structure, is a crucial yet unofficial space for every IPO. It gives potential investors an idea of the demand for an IPO, reflecting market sentiment.</p>

                <h4 class="mt-4 text-dark">Understanding How It Works</h4>
                <p><strong>Grey Market Premium (GMP):</strong> This is an extra amount above the IPO issue price. For example, if an IPO is issued at Rs 850 and an investor is willing to pay Rs 300 more per share, the GMP is Rs 300.</p>
                <p><strong>Predicting with GMP:</strong> While not a surefire predictor, GMP helps in estimating listing prices. Investors often use it as a key factor in making investment decisions.</p>

                <h4 class="mt-4 text-dark">Getting to Know the Players</h4>
                <p><strong>Unofficial Traders:</strong> Grey market traders operate outside the official stock market, buying and selling IPO shares in this informal market. Sometimes, these traders are involved in supporting parts of the IPO.</p>
                <p><strong>Finding Dealers:</strong> In this unregulated area, there are no registered traders. Locating a local grey market dealer often depends on word-of-mouth or exploring discussion pages like InvestorGain.com's IPO Grey Market section.</p>

                <h4 class="mt-4 text-dark">Taking a Peek into Trading</h4>
                <p><strong>Operating Principles:</strong> It's an unregulated landscape where deals are made through phone calls. Cash settlements, facilitated by services like Angadia, reflect trust-based transactions.</p>
                <p><strong>The Three Key Players:</strong> Buyers, sellers, and dealers engage in the grey market's dance. Trust and references play a significant role in transactions involving IPO shares or applications.</p>

                <h4 class="mt-4 text-dark">Understanding Different Rates</h4>
                <ul>
                  <li><strong>IPO Grey Market Premium (GMP):</strong> A positive GMP suggests potential for a strong listing, while a negative or low GMP indicates uncertainty or possible discounts during listing. Examples illustrate potential profits or losses based on GMP and actual listing prices.</li>
                  <li><strong>Kostak Rate:</strong> An agreed-upon price for entire IPO applications, ensuring gains for sellers regardless of allotment outcomes.</li>
                  <li><strong>Sauda Rate:</strong> An extension to Kostak, where buyers agree to pay more if the seller secures IPO allotment, providing added potential gains at a higher rate than Kostak.</li>
                </ul>

                <h4 class="mt-4 text-dark">Decoding Grey Market Metrics</h4>
                <p><strong>Grey Market Premium vs Kostak:</strong> GMP fluctuates per share, while Kostak remains fixed for the entire lot. GMP depends on demand and supply, while Kostak relies on mutual understanding.</p>
                <p><strong>Grey Market Premium vs Listing Price:</strong> GMP shows investor willingness, while the listing price is an official declaration. Investors use GMP as a prediction tool, while the listing price is set by issuers and merchant bankers.</p>

                <h4 class="mt-4 text-dark">Balancing the Pros and Cons</h4>
                <p><strong>Advantages:</strong> Increased chances for profit, availability of shares before official listing, post-subscription trading, and no limits on applications.</p>
                <p><strong>Disadvantages:</strong> High risks due to lack of regulation, absence of grievance forums, potential losses if listings disappoint, and a lack of official documentation.</p>

                <h4 class="mt-4 text-dark">The Moral Side of the Grey Market</h4>
                <p><strong>Navigating the Grey:</strong> It's a tool for prediction, not a crystal ball. Used wisely, GMP provides insights into IPO listings, but it's not foolproof.</p>
                <p>The Grey Market is an attractive option for adventurous investors, offering a thrilling journey through the less-known parts of Wall Street. It's a maze of opportunities and risks, where fortunes can change in an instant. Approach it with caution and doubtfulness, and the Grey Market can be a valuable tool. While shrouded in secrecy, its whispers can provide insights into market sentiment and potential IPO performance. Remember, knowledge is power, and in the Grey Market, knowledge is gleaned from every conversation and rumour.</p>

                <h4 class="mt-4 text-dark">Live IPO GMP</h4>
                <p>The Live IPO GMP is an unofficial indicator of the expected listing price of an IPO. It represents the informal demand for the shares even before the market listing. It is also worth to mention that GMPs are very speculative and do tend to change under the day's mood of the market and other variables.</p>
                <p>IPO GMP live and IPO GMP today (live) are often searched by investors in IPOs before the shares get listed. Whereas both are the synonyms of the Live IPO GMP representing the same thing.</p>

                <h4 class="mt-4 text-dark">Upcoming IPO GMP</h4>
                <p>Upcoming IPO GMP means those IPOs GMP that are not opened but are likely to open on their scheduled date. GMP is the difference between the price of IPO shares in the grey market and the price set for the issue by the company.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- FAQs Accordion -->
      <div class="row mt-5" style="background: #e9f9ff; padding: 40px; border-radius: 15px;">
        <div class="col-12">
          <h2 class="mb-4 text-center text-dark">FAQs</h2>
          <div class="accordion" id="gmpFaqAccordion">

            <!-- FAQ 1 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  1. What are initial public offerings?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#gmpFaqAccordion">
                <div class="accordion-body text-start">
                  An Initial Public Offering (IPO) is when a private company decides to sell its shares to the public for the first time...
                  <br><br><strong>Reasons for Launching IPOs:</strong>
                  <ul>
                    <li>To generate liquidity for financing organic growth...</li>
                    <li>To enhance enterprise visibility...</li>
                    <li>To furnish liquidity to early-stage investors...</li>
                  </ul>
                  <strong>Key Features:</strong>
                  <ul>
                    <li>Interested investors may submit applications during the subscription period.</li>
                    <li>Shares become tradable securities on exchanges like BSE and NSE.</li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  2. What is an IPO in stock market?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#gmpFaqAccordion">
                <div class="accordion-body text-start">
                  IPO constitutes the procedure whereby a privately held company invites the public to acquire its equity...
                  <br><br><strong>Important Terms:</strong>
                  <ul>
                    <li><strong>Listing Date:</strong> The official day shares are traded.</li>
                    <li><strong>Minimum Bid:</strong> Lowest allowed quantity of shares.</li>
                    <li><strong>Offer Price:</strong> Predetermined purchasing price.</li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  3. What are SME IPO?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#gmpFaqAccordion">
                <div class="accordion-body text-start">
                  SME means Small and Medium Enterprises. SME IPOs refer to IPOs of startups or small establishments... listed on BSE SME and NSE Emerge.
                  <br><br><strong>Key features:</strong>
                  <ul>
                    <li>Min application size Rs. 1-2 lac range.</li>
                    <li>Post-issue paid-up capital typically not exceeding Rs. 25 crores.</li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- FAQ 4 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  4. Who Can Apply For an IPO?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#gmpFaqAccordion">
                <div class="accordion-body text-start">
                  Retail, high-net-worth, and institutional investors can all apply for an IPO via trading/demat accounts or ASBA.
                </div>
              </div>
            </div>

            <!-- FAQ 5 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  5. What is a grey market IPO?
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#gmpFaqAccordion">
                <div class="accordion-body text-start">
                  A Grey Market IPO describes informal trading before formal listing...
                  <br><br><strong>Features:</strong> Lack of regulation, GMP indicator, Sauda deals.
                </div>
              </div>
            </div>

            <!-- FAQ 6 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  6. How grey market premium is calculated?
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#gmpFaqAccordion">
                <div class="accordion-body text-start">
                  GMP = Grey Market Price - IPO Offering Price.
                  <br>Example: Price 200, Grey Market 260 -> GMP = 60.
                </div>
              </div>
            </div>

            <!-- FAQ 7 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  7. Is grey market premium reliable?
                </button>
              </h2>
              <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#gmpFaqAccordion">
                <div class="accordion-body text-start">
                  It acts as an indicator of sentiment but is not a guaranteed predictor of listing gains. It is unregulated and speculative.
                </div>
              </div>
            </div>

            <!-- FAQ 8 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                  8. How to see GMP of upcoming IPO?
                </button>
              </h2>
              <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#gmpFaqAccordion">
                <div class="accordion-body text-start">
                  Check portals like Finowings, Chittorgarh, Moneycontrol. Also Telegram/WhatsApp groups (with caution).
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="row mt-5 justify-content-center">
        <div class="col-12 text-center">
          <a href="../zerodhaclicks.php" target="_blank" rel="noopener"><img class="img-fluid mx-auto d-block" src="https://finowings.com/ctr-img/zerodha-ctr.webp"></a>
        </div>
      </div>


    </div>
  </div>
  </div>

  <!-- Footer Start -->
  <?php include("../footer.php"); ?>
  <!-- Footer End -->


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