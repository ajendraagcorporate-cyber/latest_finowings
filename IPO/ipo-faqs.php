<?php
include("../DLL/config.php");
include("../DLL/functions.php");
$faqs = getallIPOQues();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Top IPOs Frequently Asked Questions (FAQ) | Finowings</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="IPO FAQs, Initial Public Offering FAQs, IPO Frequently Asked Questions, IPO Questions, IPO Details" name="keywords">
  <meta content="A list of IPO Frequently Asked Questions (FAQ). Find answers to frequently asked questions about IPO FAQ" name="description">

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
      background-color: #273158 !important;
      border-color: #273158 !important;
      color: #ffffff !important;
      border-radius: 50px !important;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-explore:hover {
      background-color: #cf9c0a !important;
      border-color: #cf9c0a !important;
      color: #ffffff !important;
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

  <div class="container-xxl py-5">
    <div class="container">

      <div class="d-flex justify-content-center"><a class="btn btn-primary btn-sm py-2 px-3 mt-2 shadow rounded-pill mx-1" href="https://www.finowings.com/Main-Board-IPO/">Main Board IPO</a>
        <!-- <a class="btn btn-primary btn-sm py-2 px-3 mt-2 shadow rounded-pill mx-1" href="https://www.finowings.com/SME-IPO/">SME IPO</a> -->
        <a class="btn btn-primary btn-sm py-2 px-3 mt-2 shadow rounded-pill mx-1" href="https://www.finowings.com/IPO/live-ipo-gmp.php">Current IPO GMP</a></div>

      <br />

      <div class="text-center">
        <h6 class="section-title bg-white text-center text-primary px-3">IPO</h6>
        <h1 class="mb-3">IPO FAQs</h1><br />

      </div>


    </div>
  </div>
  </div>


  <!-- FAQs Starts -->

  <div class="container-xxl">
    <div class="container wow fadeInUp" data-wow-delay="0.3s" style="background: #e9f9ff;">
      <br />
      <h3 class="mb-4">Frequently Asked Questions</h3>

      <div class="accordion" id="faqAccordion">

        <?php
        $i = 1;
        while ($faq = mysqli_fetch_array($faqs)) {
          $showClass = ($i == 1) ? 'show' : '';
          $collapsedClass = ($i == 1) ? '' : 'collapsed';
          $ariaExpanded = ($i == 1) ? 'true' : 'false';
        ?>
          <!-- FAQ Item <?php echo $i; ?> -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?php echo $i; ?>">
              <button class="accordion-button <?php echo $collapsedClass; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="<?php echo $ariaExpanded; ?>" aria-controls="collapse<?php echo $i; ?>">
                <?php echo $faq['question']; ?>
              </button>
            </h2>
            <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse <?php echo $showClass; ?>" aria-labelledby="heading<?php echo $i; ?>" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                <?php echo $faq['answer']; ?>
              </div>
            </div>
          </div>

        <?php
          $i = $i + 1;
        }
        ?>

      </div>



    </div>
  </div>


  <!-- FAQs Ends -->

  <br><br>

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