<?php
session_start();
include("../DLL/config.php");
include("../DLL/functions.php");
$sliderfi = getSliderFI();
$client = getClients();
$workshop = getWorkshops();
$webinar = getWebinars();
$student = getStudents();
$upwebinar = getupcomingWebinar();
$featured = getFeaturedin();
$freestudyintro = getfreestudyIntro();
$freestudytopic = getfreestudyTopic();
$testimonials1 = getTestimonials1();
$testimonials2 = getTestimonials2();
$active_page = 'academy';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Finowings Academy: Best Stock Market & Financial Courses</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="If you want to learn stock market trading but don't know where to start, you're in the right place. Finowings Academy offers beginner-friendly and advanced stock market courses designed to help you understand the market step by step—without confusion." name="keywords">
  <meta name="description" content="Want to master stock market trading? Join Finowings Academy for expert-led courses, live training & real-world investing strategies.">
  <link rel="canonical" href="https://www.finowings.com/finowings-academy/" />

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

  <!--Bootstrap code-->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- My CSS -->
  <link href="../css/new-css.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  <!-- Google Web Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Nunito:wght@600;700;800&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet — Font Awesome 5 Free (solid + brands) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="../css/style.css" rel="stylesheet">

  <!-- Model Login Stylesheet -->
  <link href="../css/login-form.css" rel="stylesheet">
  <link href="../css/login-form-util.css" rel="stylesheet">

  <script src="../js/submit.js"></script>

  <style type="text/css">
    body { height: auto; }

    .pop-up-box { width: 100%; height: auto; display: block; border: 0px solid #273057; text-align: center; margin-top: 20%; }
    .pop-heading-text { font-family: 'Playfair Display', serif; }
    .pop-sub-itelic { font-family: 'Playfair Display', serif; }
    .pop-sub-normal { font-family: 'Playfair Display', serif; }
    .personal-font { font-family: 'Poppins', sans-serif; }
    .youtube-video { aspect-ratio: 16 / 9; width: 100%; }

    /* ===== FINOWINGS COLOR VARIABLES ===== */
    :root {
      --navy: #273158;
      --gold: #cf9c0a;
      --white: #ffffff;
      --light: #f4f6fb;
      --bg-light: #f4f6fb;
      --text: #2d2d2d;
      --muted: #6c757d;
      --text-muted: #6c757d;
      --text-dark: #273158;

      /* Aliases */
      --fw-navy: var(--navy);
      --fw-blue: #3a5298;
      --fw-gold: var(--gold);
      --fw-gold-hover: #ffce3a;
      --fw-bg-light: var(--light);
      --fw-text-muted: var(--muted);
      --fw-text-dark: var(--navy);
    }

    body {
      font-family: 'DM Sans', sans-serif;
      color: var(--text);
    }

    h1, h2, .playfair {
      font-family: 'Playfair Display', serif;
    }

    h3, h4, h5, h6, .nunito {
      font-family: 'Nunito', sans-serif;
    }

    /* ===== SECTION 1: HERO INTRO ===== */
    .fw-hero-intro {
      background: linear-gradient(135deg, var(--fw-navy) 0%, #3a5298 50%, var(--fw-navy) 100%);
      color: #fff;
      padding: 70px 0 60px;
      position: relative;
      overflow: hidden;
    }
    .fw-hero-intro::before {
      content: '';
      position: absolute;
      top: -60px; right: -60px;
      width: 320px; height: 320px;
      border-radius: 50%;
      background: rgba(255,193,7,0.08);
      pointer-events: none;
    }
    .fw-hero-intro::after {
      content: '';
      position: absolute;
      bottom: -80px; left: -40px;
      width: 260px; height: 260px;
      border-radius: 50%;
      background: rgba(255,193,7,0.05);
      pointer-events: none;
    }
    .fw-hero-intro h1 {
      font-size: 2.2rem;
      font-weight: 800;
      color: var(--fw-gold);
      margin-bottom: 18px;
      line-height: 1.3;
    }
    .fw-hero-intro p {
      font-size: 1.05rem;
      color: #dce6ff;
      line-height: 1.85;
      max-width: 760px;
      margin: 0 auto 12px;
    }
    .fw-hero-intro .fw-badge {
      display: inline-block;
      background: var(--fw-gold);
      color: var(--fw-navy);
      font-weight: 700;
      font-size: 0.78rem;
      padding: 5px 16px;
      border-radius: 30px;
      letter-spacing: 0.06em;
      margin-bottom: 20px;
      text-transform: uppercase;
    }

    /* ===== SECTION 2: WHY CHOOSE ===== */
    .fw-why-section {
      background: var(--fw-bg-light);
      padding: 70px 0;
    }
    .fw-why-section .section-label {
      color: var(--fw-blue);
      font-size: 0.85rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      margin-bottom: 8px;
    }
    .fw-why-section h2 {
      font-size: 1.9rem;
      font-weight: 800;
      color: var(--fw-navy);
      margin-bottom: 10px;
    }
    .fw-why-section .sub-desc {
      color: var(--fw-text-muted);
      font-size: 1rem;
      margin-bottom: 40px;
    }
    .fw-why-card {
      background: #fff;
      border-radius: 12px;
      padding: 28px 24px;
      margin-bottom: 24px;
      border-left: 4px solid var(--fw-gold);
      box-shadow: 0 2px 16px rgba(39,48,87,0.07);
      transition: transform 0.25s, box-shadow 0.25s;
      height: 100%;
    }
    .fw-why-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 8px 28px rgba(39,48,87,0.13);
    }
    .fw-why-card .fw-icon {
      font-size: 1.6rem;
      color: var(--fw-gold);
      margin-bottom: 12px;
    }
    .fw-why-card h5 {
      font-size: 1.02rem;
      font-weight: 700;
      color: var(--fw-navy);
      margin-bottom: 8px;
    }
    .fw-why-card p {
      font-size: 0.93rem;
      color: var(--fw-text-muted);
      margin: 0;
      line-height: 1.7;
    }

    /* ===== SECTION 3: BENEFITS ===== */
    .fw-benefits-section {
      background: var(--fw-navy);
      padding: 70px 0;
      position: relative;
      overflow: hidden;
    }
    .fw-benefits-section::before {
      content: '';
      position: absolute;
      top: -100px; right: -100px;
      width: 400px; height: 400px;
      border-radius: 50%;
      background: rgba(255,193,7,0.05);
      pointer-events: none;
    }
    .fw-benefits-section .section-label {
      color: var(--fw-gold);
      font-size: 0.85rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      margin-bottom: 8px;
    }
    .fw-benefits-section h2 {
      font-size: 1.9rem;
      font-weight: 800;
      color: #fff;
      margin-bottom: 10px;
    }
    .fw-benefits-section .sub-desc {
      color: #a0b4e0;
      font-size: 1rem;
      margin-bottom: 42px;
    }
    .fw-benefit-item {
      display: flex;
      align-items: flex-start;
      gap: 16px;
      background: rgba(255,255,255,0.05);
      border-radius: 10px;
      padding: 20px 20px;
      margin-bottom: 18px;
      border: 1px solid rgba(255,193,7,0.15);
      transition: background 0.2s, border-color 0.2s;
    }
    .fw-benefit-item:hover {
      background: rgba(255,193,7,0.08);
      border-color: rgba(255,193,7,0.4);
    }
    .fw-benefit-item .fw-check {
      flex-shrink: 0;
      width: 34px; height: 34px;
      background: var(--fw-gold);
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      color: var(--fw-navy);
      font-size: 1rem;
      font-weight: 900;
      margin-top: 2px;
    }
    /* Use FA icon inside the check circle */
    .fw-benefit-item .fw-check i {
      font-size: 0.85rem;
      color: var(--fw-navy);
    }
    .fw-benefit-item .fw-text h6 {
      font-size: 0.97rem;
      font-weight: 700;
      color: #fff;
      margin-bottom: 4px;
    }
    .fw-benefit-item .fw-text p {
      font-size: 0.88rem;
      color: #a0b4e0;
      margin: 0;
      line-height: 1.65;
    }

    /* ===== SECTION 4: WHO SHOULD JOIN ===== */
    .fw-who-section {
      background: #fff;
      padding: 70px 0;
    }
    .fw-who-section .section-label {
      color: var(--fw-blue);
      font-size: 0.85rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      margin-bottom: 8px;
    }
    .fw-who-section h2 {
      font-size: 1.9rem;
      font-weight: 800;
      color: var(--fw-navy);
      margin-bottom: 10px;
    }
    .fw-who-section .sub-desc {
      color: var(--fw-text-muted);
      font-size: 1rem;
      margin-bottom: 44px;
    }
    .fw-who-card {
      text-align: center;
      padding: 36px 20px;
      border-radius: 14px;
      background: var(--fw-bg-light);
      border: 2px solid transparent;
      transition: border-color 0.25s, box-shadow 0.25s, transform 0.25s;
      height: 100%;
    }
    .fw-who-card:hover {
      border-color: var(--fw-gold);
      box-shadow: 0 8px 28px rgba(39,48,87,0.12);
      transform: translateY(-5px);
    }
    /* FA icon wrapper for "Who Should Join" cards */
    .fw-who-card .fw-who-icon {
      font-size: 2.4rem;
      margin-bottom: 14px;
      display: block;
      color: var(--fw-navy);
      line-height: 1;
    }
    .fw-who-card .fw-who-icon i {
      color: var(--fw-blue);
    }
    .fw-who-card:hover .fw-who-icon i {
      color: var(--fw-gold);
    }
    .fw-who-card h4 {
      font-size: 1.15rem;
      font-weight: 800;
      color: var(--fw-navy);
      margin-bottom: 8px;
    }
    .fw-who-card p {
      font-size: 0.88rem;
      color: var(--fw-text-muted);
      margin: 0;
      line-height: 1.6;
    }

    /* ===== SECTION 5: WHAT YOU WILL LEARN ===== */
    .fw-learn-section {
      background: var(--fw-bg-light);
      padding: 70px 0;
    }
    .fw-learn-section .section-label {
      color: var(--fw-blue);
      font-size: 0.85rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      margin-bottom: 8px;
    }
    .fw-learn-section h2 {
      font-size: 1.9rem;
      font-weight: 800;
      color: var(--fw-navy);
      margin-bottom: 40px;
    }
    .fw-learn-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 20px;
    }
    .fw-learn-item {
      display: flex;
      align-items: center;
      gap: 16px;
      background: #fff;
      border-radius: 12px;
      padding: 22px 20px;
      box-shadow: 0 2px 14px rgba(39,48,87,0.07);
      border-bottom: 3px solid transparent;
      transition: border-color 0.25s, transform 0.25s, box-shadow 0.25s;
    }
    .fw-learn-item:hover {
      border-bottom-color: var(--fw-gold);
      transform: translateY(-4px);
      box-shadow: 0 8px 24px rgba(39,48,87,0.13);
    }
    .fw-learn-item .fw-learn-num {
      flex-shrink: 0;
      width: 42px; height: 42px;
      background: linear-gradient(135deg, var(--fw-navy), var(--fw-blue));
      border-radius: 10px;
      display: flex; align-items: center; justify-content: center;
      color: var(--fw-gold);
      font-size: 1.1rem;
    }
    .fw-learn-item span {
      font-size: 0.97rem;
      font-weight: 600;
      color: var(--fw-text-dark);
      line-height: 1.45;
    }

    /* ===== SECTION 6: WHY LEARNING IS IMPORTANT ===== */
.fw-importance-section {
  background: #fff;
  padding: 70px 0;
}

.fw-importance-inner {
  background: linear-gradient(135deg, #0f2557 0%, #1a3a8c 100%);
  border-radius: 20px;
  padding: 56px 48px;
  position: relative;
  overflow: hidden;
  /* Added Flexbox for Side-by-Side Layout */
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px; 
}

/* Removed the ::before emoji pseudo-element as you are placing a real image */

/* New Wrapper for Text */
.fw-importance-content {
  flex: 1; /* Takes up remaining space */
  max-width: 650px;
}

/* New Wrapper for Image */
.fw-importance-image {
  flex: 0 0 auto; 
  width: 35%; /* Adjust width of the right side container */
  display: flex;
  justify-content: center;
  align-items: center;
}

.fw-importance-image img {
  max-width: 100%;
  height: auto;
  border-radius: 12px; /* Optional: rounds the corners of your image */
  object-fit: contain;
}

/* Text Formatting */
.fw-importance-inner .section-label {
  color: #FFC107;
  font-size: 0.82rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.12em;
  margin-bottom: 10px;
}

.fw-importance-inner h2 {
  font-size: 1.9rem;
  font-weight: 800;
  color: #fff;
  margin-bottom: 18px;
}

.fw-importance-inner p {
  color: #c0d2f0;
  font-size: 1.02rem;
  line-height: 1.85;
  margin-bottom: 12px;
}

.fw-importance-inner p strong {
  color: #FFC107;
}

/* Stats (Kept from your original CSS) */
.fw-importance-inner .fw-stat-row {
  display: flex;
  flex-wrap: wrap;
  gap: 24px;
  margin-top: 30px;
}
.fw-stat-box {
  background: rgba(255,255,255,0.08);
  border: 1px solid rgba(255,193,7,0.25);
  border-radius: 12px;
  padding: 18px 24px;
  text-align: center;
  flex: 1;
  min-width: 120px;
}
.fw-stat-box .fw-stat-num {
  font-size: 1.7rem;
  font-weight: 800;
  color: #FFC107;
  display: block;
}
.fw-stat-box .fw-stat-label {
  font-size: 0.8rem;
  color: #a0b8e0;
  margin-top: 4px;
}

/* ===== RESPONSIVE MEDIA QUERIES ===== */
@media (max-width: 991px) {
  .fw-importance-inner {
    flex-direction: column; /* Stacks text and image vertically */
    padding: 40px 30px;
    text-align: left; /* Change to 'center' if you want centered text on mobile */
  }

  .fw-importance-content {
    max-width: 100%;
  }

  .fw-importance-image {
    width: 100%;
    max-width: 400px; /* Limits max size on tablets/mobile */
    margin-top: 10px;
  }
}

@media (max-width: 576px) {
  .fw-importance-inner {
    padding: 30px 20px;
  }
  
  .fw-importance-inner h2 {
    font-size: 1.5rem; /* Slightly smaller heading for mobile */
  }
}
    

    /* ===== SECTION 7: CTA ===== */
    .fw-cta-section {
      padding: 80px 0;
      background: var(--fw-bg-light);
      position: relative;
      overflow: hidden;
    }
    .fw-cta-section::before {
      content: '';
      position: absolute;
      inset: 0;
      background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23273057' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
      pointer-events: none;
    }
    .fw-cta-box {
      background: linear-gradient(135deg, var(--fw-navy) 0%, var(--fw-blue) 60%, var(--fw-navy) 100%);
      border-radius: 24px;
      padding: 64px 48px;
      text-align: center;
      position: relative;
      overflow: hidden;
      box-shadow: 0 20px 60px rgba(39,48,87,0.25);
    }
    .fw-cta-box::before {
      content: '';
      position: absolute;
      top: -80px; left: -80px;
      width: 300px; height: 300px;
      border-radius: 50%;
      background: rgba(255,193,7,0.07);
      pointer-events: none;
    }
    .fw-cta-box::after {
      content: '';
      position: absolute;
      bottom: -60px; right: -60px;
      width: 250px; height: 250px;
      border-radius: 50%;
      background: rgba(255,193,7,0.05);
      pointer-events: none;
    }
    /* FA rocket icon replaces emoji */
    .fw-cta-box .fw-cta-icon {
      font-size: 3rem;
      color: var(--fw-gold);
      display: block;
      margin-bottom: 16px;
      animation: fw-bounce 2s infinite;
    }
    @keyframes fw-bounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-8px); }
    }
    .fw-cta-box h2 {
      font-size: 2.2rem;
      font-weight: 800;
      color: #fff;
      margin-bottom: 14px;
    }
    .fw-cta-box p {
      color: #b0c8f0;
      font-size: 1.05rem;
      margin-bottom: 36px;
      max-width: 520px;
      margin-left: auto;
      margin-right: auto;
    }
    .fw-cta-btns {
      display: flex;
      flex-wrap: wrap;
      gap: 16px;
      justify-content: center;
      margin-bottom: 30px;
    }
    .fw-cta-btn-primary {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: var(--fw-gold);
      color: var(--fw-navy);
      font-weight: 800;
      font-size: 1rem;
      padding: 15px 32px;
      border-radius: 50px;
      text-decoration: none;
      border: none;
      transition: transform 0.2s, box-shadow 0.2s, background 0.2s;
      box-shadow: 0 6px 20px rgba(255,193,7,0.35);
      cursor: pointer;
    }
    .fw-cta-btn-primary:hover {
      background: var(--fw-gold-hover);
      transform: translateY(-3px);
      box-shadow: 0 10px 28px rgba(255,193,7,0.5);
      color: var(--fw-navy);
      text-decoration: none;
    }
    .fw-cta-btn-secondary {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: transparent;
      color: #fff;
      font-weight: 700;
      font-size: 1rem;
      padding: 14px 30px;
      border-radius: 50px;
      text-decoration: none;
      border: 2px solid rgba(255,255,255,0.4);
      transition: border-color 0.2s, background 0.2s, transform 0.2s;
      cursor: pointer;
    }
    .fw-cta-btn-secondary:hover {
      border-color: var(--fw-gold);
      background: rgba(255,193,7,0.1);
      color: var(--fw-gold);
      transform: translateY(-3px);
      text-decoration: none;
    }
    .fw-cta-tagline {
      color: #7090c0;
      font-size: 0.9rem;
    }
    .fw-cta-tagline strong {
      color: var(--fw-gold);
    }

    @media (max-width: 768px) {
      .fw-hero-intro h1 { font-size: 1.55rem; }
      .fw-why-section h2,
      .fw-benefits-section h2,
      .fw-who-section h2,
      .fw-learn-section h2,
      .fw-importance-inner h2,
      .fw-cta-box h2 { font-size: 1.45rem; }
      .fw-who-card { margin-bottom: 18px; }
      .fw-importance-inner { padding: 36px 24px; }
      .fw-importance-inner .fw-deco-icon { display: none; }
      .fw-cta-box { padding: 44px 22px; }
      .fw-cta-box h2 { font-size: 1.6rem; }
      .fw-cta-btn-primary, .fw-cta-btn-secondary { width: 100%; justify-content: center; }
      .fw-learn-grid { grid-template-columns: 1fr; }
    }
  </style>
</head>

<body>

  <!-- Navbar Start -->
  <?php include("../top-navigation.php"); ?>
  <!-- Navbar Ends -->

  <!-- ===== SECTION 1: HERO INTRO ===== -->
  <section class="fw-hero-intro text-center wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
      <span class="fw-badge">Finowings Academy</span>
      <h1>Learn Stock Market Trading with Finowings Academy</h1>
      <p>
        If you want to learn stock market trading but don't know where to start, you're in the right place.
        Finowings Academy offers beginner-friendly and advanced stock market courses designed to help you
        understand the market step by step—without confusion.
      </p>
      <p>
        Whether your goal is long-term investing or active trading, our practical approach helps you build
        real skills and confidence.
      </p>
    </div>
  </section>
  <!-- ===== SECTION 1 END ===== -->

      <!-- Courses Section Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h3 class="section-title bg-white text-center text-primary px-3" style="font-size: 1rem;">Finowings Academy</h3>
        <h2 class="mb-5">Explore Our Stock Market Education Guide For Beginners</h2>
      </div>
      <section id="fw-custom-section" class="courses-section">
        <div class="container">
          <div id="fw-unique-mobile-grid" class="fw-grid">
            <?php
            $i = 0.1;
            while ($fst = mysqli_fetch_array($freestudytopic)) {
              $tid = $fst['id'];
              $topic = $fst['topic'];
              $alt_text = str_replace(" ", "-", $topic);
              $url = strtolower("$alt_text");
              $icon = $fst['icon'];
            ?>
              <div class="fw-card wow fadeInUp" data-wow-delay="<?php echo $i; ?>s">
                <div class="fw-img-box">
                  <a href="../<?php echo $url; ?>/">
                    <img loading="lazy" class="img-fluid" src="../admin/media/<?php echo $icon; ?>" alt="<?php echo $topic; ?>">
                  </a>
                </div>
                <div class="fw-content" style="width:100%; cursor:pointer;" onclick="location.href='../<?php echo $url; ?>/';">
                  <a href="../<?php echo $url; ?>/" class="fw-btn" aria-label="<?php echo $topic; ?>">
                    Explore Now
                  </a>
                </div>
              </div>
            <?php
              $i = $i + 0.1;
            }
            ?>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- Courses Section End -->

  <!-- ===== SECTION 2: WHY CHOOSE ===== -->
  <section class="fw-why-section">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <div class="section-label">Our Approach</div>
        <h2>Why Choose Finowings Academy?</h2>
        <p class="sub-desc">We focus on practical learning, not just theory.</p>
      </div>
      <div class="row">
        <!-- Card 1: Beginner-Friendly — fa-user-graduate (graduation cap) -->
        <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
          <div class="fw-why-card">
            <div class="fw-icon"><i class="fas fa-user-graduate"></i></div>
            <h5>Beginner-Friendly Explanation</h5>
            <p>Learn stock market concepts from scratch with simple explanations designed especially for complete beginners.</p>
          </div>
        </div>
        <!-- Card 2: Step-by-Step Path — fa-road (road/path) -->
        <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
          <div class="fw-why-card">
            <div class="fw-icon"><i class="fas fa-road"></i></div>
            <h5>Step-by-Step Learning Path</h5>
            <p>Follow a clear roadmap that gradually builds your knowledge from basics to advanced trading strategies.</p>
          </div>
        </div>
        <!-- Card 3: Real Market Examples — fa-chart-line (line chart) -->
        <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
          <div class="fw-why-card">
            <div class="fw-icon"><i class="fas fa-chart-line"></i></div>
            <h5>Real Market Examples & Case Studies</h5>
            <p>Understand concepts using real market scenarios, helping you apply learning confidently in live situations.</p>
          </div>
        </div>
        <!-- Card 4: Simple Language — fa-comments (speech bubbles) -->
        <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
          <div class="fw-why-card">
            <div class="fw-icon"><i class="fas fa-comments"></i></div>
            <h5>Simple Language for Understanding</h5>
            <p>No complicated jargon—learn everything in easy language so you can grasp concepts quickly and effectively.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===== SECTION 2 END ===== -->

  <!-- ===== SECTION 3: BENEFITS ===== -->
  <section class="fw-benefits-section">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <div class="section-label">What You Gain</div>
        <h2>Benefits of Our Stock Market Courses</h2>
        <p class="sub-desc">When you join Finowings, you don't just learn—you gain real-world skills.</p>
      </div>
      <div class="row">
        <!-- Benefit 1: Live Market Training — fa-broadcast-tower -->
        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="fw-benefit-item">
            <div class="fw-check"><i class="fas fa-broadcast-tower"></i></div>
            <div class="fw-text">
              <h6>Live Market Training Sessions</h6>
              <p>Attend live sessions where you learn how to analyze and trade in real-time market conditions.</p>
            </div>
          </div>
        </div>
        <!-- Benefit 2: Practical Trading Examples — fa-chart-bar -->
        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.15s">
          <div class="fw-benefit-item">
            <div class="fw-check"><i class="fas fa-chart-bar"></i></div>
            <div class="fw-text">
              <h6>Practical Trading Examples</h6>
              <p>Learn using real trading examples that help you understand strategies and apply them confidently.</p>
            </div>
          </div>
        </div>
        <!-- Benefit 3: Expert Mentorship — fa-chalkboard-teacher -->
        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
          <div class="fw-benefit-item">
            <div class="fw-check"><i class="fas fa-chalkboard-teacher"></i></div>
            <div class="fw-text">
              <h6>Expert Mentorship and Guidance</h6>
              <p>Get support from experienced mentors who guide you at every step of your learning journey.</p>
            </div>
          </div>
        </div>
        <!-- Benefit 4: Easy-to-Follow Lessons — fa-book-open -->
        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.25s">
          <div class="fw-benefit-item">
            <div class="fw-check"><i class="fas fa-book-open"></i></div>
            <div class="fw-text">
              <h6>Easy-to-Follow Lessons for Beginners</h6>
              <p>Simple and structured lessons designed to help beginners understand stock market concepts without confusion.</p>
            </div>
          </div>
        </div>
        <!-- Benefit 5: Risk Management — fa-shield-alt -->
        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="fw-benefit-item">
            <div class="fw-check"><i class="fas fa-shield-alt"></i></div>
            <div class="fw-text">
              <h6>Risk Management Techniques</h6>
              <p>Learn how to protect your capital by managing risk effectively in different market situations.</p>
            </div>
          </div>
        </div>
        <!-- Benefit 6: Confidence to Trade — fa-bolt -->
        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.35s">
          <div class="fw-benefit-item">
            <div class="fw-check"><i class="fas fa-bolt"></i></div>
            <div class="fw-text">
              <h6>Confidence to Take Your First Trade</h6>
              <p>Build the confidence and knowledge required to place your first trade without fear or hesitation.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===== SECTION 3 END ===== -->

  <!-- ===== SECTION 4: WHO SHOULD JOIN ===== -->
  <section class="fw-who-section">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <div class="section-label">Made For You</div>
        <h2>Who Should Join This Course?</h2>
        <p class="sub-desc">This stock market course is perfect for</p>
      </div>
      <div class="row justify-content-center">
        <!-- fa-seedling: Beginners -->
        <div class="col-6 col-md-3 mb-4 wow fadeInUp" data-wow-delay="0.1s">
          <div class="fw-who-card">
            <span class="fw-who-icon"><i class="fas fa-seedling"></i></span>
            <h4>Beginners</h4>
            <p>Just starting out and want to learn the stock market from zero.</p>
          </div>
        </div>
        <!-- fa-graduation-cap: Students -->
        <div class="col-6 col-md-3 mb-4 wow fadeInUp" data-wow-delay="0.2s">
          <div class="fw-who-card">
            <span class="fw-who-icon"><i class="fas fa-graduation-cap"></i></span>
            <h4>Students</h4>
            <p>Build financial knowledge early and start your investing journey.</p>
          </div>
        </div>
        <!-- fa-briefcase: Professionals -->
        <div class="col-6 col-md-3 mb-4 wow fadeInUp" data-wow-delay="0.3s">
          <div class="fw-who-card">
            <span class="fw-who-icon"><i class="fas fa-briefcase"></i></span>
            <h4>Professionals</h4>
            <p>Add smart investing to your skillset and grow your wealth.</p>
          </div>
        </div>
        <!-- fa-chart-line: Investors -->
        <div class="col-6 col-md-3 mb-4 wow fadeInUp" data-wow-delay="0.4s">
          <div class="fw-who-card">
            <span class="fw-who-icon"><i class="fas fa-chart-line"></i></span>
            <h4>Investors</h4>
            <p>Level up from basic investing to advanced market strategies.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===== SECTION 4 END ===== -->


  <!-- ===== SECTION 6: WHY LEARNING IS IMPORTANT ===== -->
  <section class="fw-importance-section">
  <div class="container">
    <div class="fw-importance-inner wow fadeInUp" data-wow-delay="0.1s">
      
      <div class="fw-importance-content">
        <div class="section-label">Why It Matters</div>
        <h2>Why Learning the Stock Market is Important</h2>
        <p>
          With increasing financial awareness and digital platforms, more people are entering the market every day.
          But <strong>without proper knowledge, losses are common</strong> and avoidable mistakes can be costly.
        </p>
        <p>
          That's why learning through a structured <strong>technical analysis course</strong> and a guided approach
          is essential to succeed in today's fast-moving market.
        </p>
      </div>

      <div class="fw-importance-image">
        <img src="img/why-it-matters-sec.webp" alt="Stock Market Learning">
      </div>

    </div>
  </div>
</section>
  <!-- ===== SECTION 6 END ===== -->
  
       <!-- Section 12: Testimonials Start -->
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">TESTIMONIALS</h6>
            <h2 class="mb-5">Real Stories. Real Results. From Finowings Learners</h2>
        </div>
    </div>
    <section class="fw-unique-section" id="fw-testimonials">
        <div class="fw-unique-container">
            <div class="fw-unique-slider-wrapper">
                <button class="fw-unique-nav-btn fw-unique-prev" onclick="moveUniqueSlide(-1)"><i class="fas fa-chevron-left"></i></button>
                <button class="fw-unique-nav-btn fw-unique-next" onclick="moveUniqueSlide(1)"><i class="fas fa-chevron-right"></i></button>
                <div class="fw-unique-track" id="fwUniqueTrack">
                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"I had zero knowledge about the stock market before joining Finowings. The way concepts are explained is very simple. Now I understand basics clearly without confusion."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Rohit+Sharma&background=random&color=fff&background=273158" class="fw-unique-avatar" alt="Rohit">
                            <div class="fw-unique-user-info">
                                <h5>Rohit Sharma</h5>
                            </div>
                        </div>
                    </div>

                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"What I liked the most is the practical approach. Instead of just theory, they show real market examples which helped me learn faster."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Priya+Verma&background=random&color=fff&background=cf9c0a" class="fw-unique-avatar" alt="Priya">
                            <div class="fw-unique-user-info">
                                <h5>Priya Verma</h5>
                            </div>
                        </div>
                    </div>

                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"Earlier I was scared to invest. After completing the course, I feel confident to take my own decisions and understand market movements."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Amit+Patel&background=random&color=fff&background=273158" class="fw-unique-avatar" alt="Amit">
                            <div class="fw-unique-user-info">
                                <h5>Amit Patel</h5>
                            </div>
                        </div>
                    </div>
                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"The mentorship support is really helpful. Whenever I had doubts, the team guided me properly. It feels like personal support"</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Neha+Singh&background=random&color=fff&background=cf9c0a" class="fw-unique-avatar" alt="Neha">
                            <div class="fw-unique-user-info">
                                <h5>Neha Singh</h5>
                            </div>
                        </div>
                    </div>
                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"I am a working professional and needed something simple and practical. This course helped me start investing without taking too much risk"</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Rahul+Mehta&background=random&color=fff&background=273158" class="fw-unique-avatar" alt="Rahul">
                            <div class="fw-unique-user-info">
                                <h5>Rahul Mehta</h5>
                            </div>
                        </div>
                    </div>
                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"This is not just theory learning. I actually learned how to analyze charts and manage risk. It feels like a real skill now."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Sneha+Gupta&background=random&color=fff&background=cf9c0a" class="fw-unique-avatar" alt="Sneha">
                            <div class="fw-unique-user-info">
                                <h5>Sneha Gupta</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Ends -->

  <!-- ===== SECTION 7: CTA ===== -->
  <section class="fw-cta-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-12 wow fadeInUp" data-wow-delay="0.1s">
          <div class="fw-cta-box">
            <!-- FA rocket icon replaces emoji -->
            <i class="fas fa-rocket fw-cta-icon" aria-hidden="true"></i>
            <h2>Join Finowings Academy Today</h2>
            <p>Don't wait to start your financial journey. Take the first step toward smarter investing and confident trading.</p>
            <div class="fw-cta-btns">
              <a href="https://courses.finowings.com/stock-market-courses" class="fw-cta-btn-primary">
                <i class="fas fa-play-circle"></i> Start Learning Today
              </a>
              <a href="https://courses.finowings.com/mukul-agrawal-courses/enroll/203/0/live" class="fw-cta-btn-secondary">
                <i class="fas fa-video"></i> Join Live Classes
              </a>
            </div>
            <p class="fw-cta-tagline">
              Build your confidence, learn smart strategies, and take control of your financial future with <strong>Finowings</strong>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===== SECTION 7 END ===== -->


  <?php if(!empty($_SESSION['userinfo'])) { ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background:none; border:none;">
          <div class="modal-body" style="background:none; padding:0px;">
            <div class="close-btn"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="float:right; margin-top:20%;"></button></div>
            <div class="container gx-0">
              <div class="row gx-0">
                <div class="col-lg-12 col-12">
                  <div class="pop-up-box">
                    <iframe class="youtube-video" src="https://www.youtube.com/embed/Oop5AnndOgo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>

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
  
  <!-- Code with Ajendra: Section 12 - Testimonials JS Start -->
    <script defer>
        document.addEventListener('DOMContentLoaded', function() {
            let fwUniqueIndex = 0;
            const fwUniqueTrack = document.getElementById('fwUniqueTrack');
            if (!fwUniqueTrack) return;

            const fwUniqueCards = document.querySelectorAll('.fw-unique-card');
            const fwTotalCards = fwUniqueCards.length;

            function updateUniqueCarousel() {
                const screenWidth = window.innerWidth;
                let itemsPerView = (screenWidth >= 992) ? 3 : 1;
                const maxIndex = Math.ceil(fwTotalCards / itemsPerView) - 1;
                if (fwUniqueIndex < 0) {
                    fwUniqueIndex = maxIndex;
                } else if (fwUniqueIndex > maxIndex) {
                    fwUniqueIndex = 0;
                }
                const gapPercentage = (20 / fwUniqueTrack.offsetWidth) * 100;
                const movePercent = fwUniqueIndex * (100 + gapPercentage);
                fwUniqueTrack.style.transform = `translateX(-${movePercent}%)`;
            }

            window.moveUniqueSlide = function(direction) {
                fwUniqueIndex += direction;
                updateUniqueCarousel();
            };

            window.addEventListener('resize', () => {
                fwUniqueIndex = 0;
                updateUniqueCarousel();
            });

            updateUniqueCarousel();
        });
    </script>
    <!-- Code with Ajendra: Section 12 - Testimonials JS End -->

</body>
</html>