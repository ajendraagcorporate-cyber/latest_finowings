<?php
session_start();
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
    ob_start('ob_gzhandler');
else ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Best Credit Cards in India – Instant Approval And Easy EMI Options!</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Credit card, Easy EMI, instant credit card approved, best credit cards india 2026" name="keywords">
  <meta content="Explore the best credit cards in India with instant approval, cashback, and easy EMI options. Compare top cards and apply online in minutes." name="description">
  <link rel="canonical" href="https://www.finowings.com/financial-products/credit-cards/new-cc.php" />

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Nunito:wght@600;700;800&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">


  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


  <!-- Libraries Stylesheet -->
  <link href="../../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="../../css/style.css" rel="stylesheet">
  <link href="../../css/new-css.css" rel="stylesheet">

  <style>
    :root {
      --navy: #273158;
      --navy-dark: #1a2245;
      --gold: #cf9c0a;
      --gold-light: #e8b20e;
      --white: #ffffff;
      --light: #f4f6fb;
      --text-dark: #2d2d2d;
      --text-muted: #6c757d;
      --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    body {
      font-family: 'DM Sans', sans-serif;
      color: var(--text-dark);
      background: var(--white);
      overflow-x: hidden;
      line-height: 1.6;
    }

    h1, h2, .playfair { font-family: 'Playfair Display', serif; }
    h3, h4, h5, h6, .nunito { font-family: 'Nunito', sans-serif; }

    .container-fw { max-width: 1200px; margin: 0 auto; padding: 0 20px; }

    /* ===== HERO SECTION ===== */
    /* Hero Section Styles */
    .credit-hero-section {
      background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
      position: relative;
      overflow: hidden;
      padding: 60px 0 80px;
      margin-bottom: 40px;
    }

    .credit-hero-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="none" stroke="%23ffffff08" stroke-width="0.5"/><circle cx="20" cy="20" r="15" fill="none" stroke="%23ffffff05" stroke-width="0.5"/><circle cx="80" cy="80" r="25" fill="none" stroke="%23ffffff05" stroke-width="0.5"/></svg>') repeat;
      opacity: 0.5;
    }

    .credit-hero-container {
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 20px;
      position: relative;
      z-index: 2;
    }

    .credit-hero-content {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 40px;
      flex-wrap: wrap;
    }

    .credit-hero-text {
      flex: 1;
      min-width: 300px;
      color: #fff;
    }

    .credit-hero-badge {
      display: inline-block;
      background: linear-gradient(135deg, #e94560, #ff6b6b);
      color: #fff;
      padding: 8px 20px;
      border-radius: 30px;
      font-size: 14px;
      font-weight: 600;
      margin-bottom: 20px;
      text-transform: uppercase;
      letter-spacing: 1px;
      animation: pulse 2s infinite;
    }

    @keyframes pulse {

      0%,
      100% {
        box-shadow: 0 0 0 0 rgba(233, 69, 96, 0.4);
      }

      50% {
        box-shadow: 0 0 0 15px rgba(233, 69, 96, 0);
      }
    }

    .credit-hero-title {
      font-size: 48px;
      font-weight: 800;
      line-height: 1.2;
      margin-bottom: 20px;
      background: linear-gradient(135deg, #fff 0%, #e0e7ff 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .credit-hero-subtitle {
      font-size: 18px;
      color: rgba(255, 255, 255, 0.85);
      line-height: 1.7;
      margin-bottom: 30px;
      max-width: 500px;
    }

    .credit-hero-features {
      display: flex;
      gap: 25px;
      flex-wrap: wrap;
      margin-bottom: 30px;
    }

    .credit-hero-feature {
      display: flex;
      align-items: center;
      gap: 10px;
      color: rgba(255, 255, 255, 0.9);
      font-size: 15px;
    }

    .credit-hero-feature i {
      color: #4ade80;
      font-size: 18px;
    }

    .credit-hero-cta {
      display: inline-block;
      background: linear-gradient(135deg, #f59e0b, #fbbf24);
      color: #1a1a2e;
      padding: 15px 40px;
      border-radius: 50px;
      font-size: 16px;
      font-weight: 700;
      text-decoration: none;
      transition: all 0.3s ease;
      box-shadow: 0 10px 30px rgba(245, 158, 11, 0.3);
    }

    .credit-hero-cta:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 40px rgba(245, 158, 11, 0.4);
      color: #1a1a2e;
    }

    .credit-hero-cards {
      flex: 1;
      min-width: 350px;
      position: relative;
      height: 400px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .credit-cards-stack {
      position: relative;
      width: 100%;
      height: 100%;
    }

    .floating-card {
      position: absolute;
      border-radius: 16px;
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
      overflow: hidden;
      transition: all 0.4s ease;
      animation: float 4s ease-in-out infinite;
    }

    .floating-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .floating-card:nth-child(1) {
      width: 220px;
      height: 140px;
      top: 10%;
      left: 5%;
      z-index: 1;
      animation-delay: 0s;
      transform: rotate(-12deg);
    }

    .floating-card:nth-child(2) {
      width: 240px;
      height: 150px;
      top: 25%;
      left: 35%;
      z-index: 4;
      animation-delay: 0.5s;
      transform: rotate(5deg);
    }

    .floating-card:nth-child(3) {
      width: 200px;
      height: 125px;
      top: 5%;
      right: 10%;
      z-index: 2;
      animation-delay: 1s;
      transform: rotate(15deg);
    }

    .floating-card:nth-child(4) {
      width: 210px;
      height: 130px;
      bottom: 25%;
      left: 10%;
      z-index: 3;
      animation-delay: 1.5s;
      transform: rotate(-8deg);
    }

    .floating-card:nth-child(5) {
      width: 230px;
      height: 145px;
      bottom: 10%;
      right: 15%;
      z-index: 5;
      animation-delay: 2s;
      transform: rotate(10deg);
    }

    .floating-card:nth-child(6) {
      width: 190px;
      height: 120px;
      bottom: 35%;
      right: 5%;
      z-index: 2;
      animation-delay: 2.5s;
      transform: rotate(-5deg);
    }

    .floating-card:hover {
      transform: scale(1.1) rotate(0deg) !important;
      z-index: 10 !important;
      box-shadow: 0 35px 60px -15px rgba(0, 0, 0, 0.6);
    }

    @keyframes float {

      0%,
      100% {
        transform: translateY(0) rotate(var(--rotation, 0deg));
      }

      50% {
        transform: translateY(-15px) rotate(var(--rotation, 0deg));
      }
    }

    .glow-effect {
      position: absolute;
      width: 300px;
      height: 300px;
      background: radial-gradient(circle, rgba(233, 69, 96, 0.3) 0%, transparent 70%);
      border-radius: 50%;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 0;
      animation: glow 3s ease-in-out infinite alternate;
    }

    @keyframes glow {
      0% {
        opacity: 0.5;
        transform: translate(-50%, -50%) scale(1);
      }

      100% {
        opacity: 0.8;
        transform: translate(-50%, -50%) scale(1.2);
      }
    }

    /* Responsive Hero */
    @media (max-width: 992px) {
      .credit-hero-content {
        flex-direction: column;
        text-align: center;
      }

      .credit-hero-subtitle {
        margin-left: auto;
        margin-right: auto;
      }

      .credit-hero-features {
        justify-content: center;
      }

      .credit-hero-title {
        font-size: 36px;
      }

      .credit-hero-cards {
        height: 350px;
      }

      .floating-card {
        width: 160px !important;
        height: 100px !important;
      }
    }

    @media (max-width: 767px) {
      .credit-hero-cards {
        display: none !important;
      }
    }

    @media (max-width: 576px) {
      .credit-hero-section {
        padding: 40px 0 60px;
      }

      .credit-hero-title {
        font-size: 28px;
      }
    }
    
    
    /* Floating Cards Stack */
    .credit-cards-stack {
      position: relative;
      height: 450px;
      width: 100%;
    }

    .floating-card {
      position: absolute;
      border-radius: 20px;
      box-shadow: 0 30px 60px rgba(0, 0, 0, 0.5);
      overflow: hidden;
      width: 260px;
      height: 165px;
      animation: float 6s ease-in-out infinite;
      border: 1px solid rgba(255,255,255,0.15);
      transition: var(--transition);
    }

    .floating-card img { width: 100%; height: 100%; object-fit: cover; }
    .floating-card:hover { z-index: 20 !important; transform: scale(1.1) rotate(0deg) !important; box-shadow: 0 40px 80px rgba(0,0,0,0.6); }

    .floating-card:nth-child(1) { top: 5%; left: -5%; z-index: 1; transform: rotate(-12deg); animation-delay: 0s; }
    .floating-card:nth-child(2) { top: 22%; left: 32%; z-index: 4; transform: rotate(5deg); animation-delay: 1s; }
    .floating-card:nth-child(3) { top: 0%; right: -5%; z-index: 2; transform: rotate(15deg); animation-delay: 2s; }
    .floating-card:nth-child(4) { bottom: 8%; left: 12%; z-index: 3; transform: rotate(-8deg); animation-delay: 1.5s; }
    .floating-card:nth-child(5) { bottom: -5%; right: 15%; z-index: 5; transform: rotate(10deg); animation-delay: 2.5s; }

    @keyframes float {
      0%, 100% { transform: translateY(0) rotate(var(--rotation, 0deg)); }
      50% { transform: translateY(-25px) rotate(var(--rotation, 0deg)); }
    }

    /* ===== BROWSE CARDS SECTION (Modernized Old Section) ===== */
    .browse-section { padding: 30px 0; background: var(--white); }
    
    .section-title-line {
      display: inline-block;
      color: var(--gold);
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 2px;
      font-size: 14px;
      margin-bottom: 10px;
      position: relative;
      padding-left: 50px;
    }
    .section-title-line::before {
      content: '';
      position: absolute;
      left: 0; top: 50%;
      width: 40px; height: 2px;
      background: var(--gold);
    }

    .bank-card-modern {
      background: var(--white);
      border-radius: 24px;
      padding: 0;
      margin: 15px;
      overflow: hidden;
      transition: var(--transition);
      border: 1px solid #efefef;
      box-shadow: 0 10px 30px rgba(0,0,0,0.03);
      text-align: center;
      max-width: 350px;
      display: inline-block;
      vertical-align: top;
    }

    .bank-card-modern:hover {
      transform: translateY(-12px);
      box-shadow: 0 20px 50px rgba(39,49,88,0.12);
      border-color: var(--gold);
    }

    .bank-card-header {
      background: #fdfdfd;
      padding: 30px;
      height: 180px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .bank-card-header img {
      width: 100%;
      height: auto;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      transition: var(--transition);
    }
    .bank-card-modern:hover .bank-card-header img { transform: scale(1.05); }

    .bank-card-footer {
      padding: 25px;
      background: #fff;
      border-top: 1px solid #f5f5f5;
    }

    .apply-mini-btn {
      background: var(--navy);
      color: var(--white);
      padding: 12px 30px;
      border-radius: 50px;
      font-weight: 700;
      text-decoration: none !important;
      display: inline-block;
      transition: var(--transition);
      width: 100%;
    }
    .apply-mini-btn:hover { background: var(--gold); color: var(--navy); }

    /* ===== FEATURED TABLE SECTION ===== */
    .featured-section { background: var(--light); padding: 100px 0; }
    
    .cc-table-wrapper { 
      overflow-x: auto; 
      background: var(--white); 
      border-radius: 24px; 
      box-shadow: 0 20px 60px rgba(39,49,88,0.1); 
      margin-top: 40px;
    }
    .cc-table { width: 100%; border-collapse: collapse; min-width: 1000px; }
    .cc-table th { background: var(--navy); color: var(--white); padding: 25px 20px; font-weight: 700; text-align: left; }
    .cc-table td { padding: 35px 15px; border-bottom: 1px solid #f0f0f0; vertical-align: middle; }

    .table-card-info { display: flex; align-items: center; gap: 20px; }
    .table-card-info img { width: 150px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
    .table-card-info strong { font-size: 1.15rem; color: var(--navy); }

    .check-list-table { list-style: none; padding: 0; margin: 0; }
    .check-list-table li { font-size: 14px; margin-bottom: 8px; display: flex; gap: 10px; }
    .check-list-table li i { color: var(--gold); font-size: 12px; margin-top: 4px; }

    /* ===== WHY FINOWINGS ===== */
    .why-section { padding: 100px 0; background: var(--white); }
    .why-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 35px; }
    .why-item { 
      background: #fff; 
      padding: 50px 40px; 
      border-radius: 24px; 
      transition: var(--transition); 
      border: 1px solid #f0f0f0;
      text-align: center;
    }
    .why-item:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(39,49,88,0.08); border-color: var(--gold); }
    .why-item i { font-size: 45px; color: var(--gold); margin-bottom: 30px; display: block; }

    /* ===== GUIDE ===== */
    .guide-section { padding: 100px 0; background: var(--light); }
    .guide-grid { display: grid; grid-template-columns: 1.6fr 1fr; gap: 60px; }
    
    .guide-step { display: flex; gap: 25px; margin-bottom: 30px; background: #fff; padding: 35px; border-radius: 24px; box-shadow: 0 5px 15px rgba(0,0,0,0.02); }
    .guide-num { width: 55px; height: 55px; background: var(--navy); color: var(--white); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 900; font-size: 22px; flex-shrink: 0; }

    .checklist-premium { background: var(--navy); color: #fff; padding: 45px; border-radius: 30px; position: sticky; top: 100px; overflow: hidden; }
    .checklist-premium h4 { color: var(--gold); margin-bottom: 35px; font-weight: 800; font-size: 1.6rem; }
    .checklist-premium li { display: flex; gap: 15px; margin-bottom: 20px; font-size: 16px; align-items: flex-start; }
    .checklist-premium li i { color: var(--gold); margin-top: 5px; }

    /* ===== CTA BANNER ===== */
    .final-cta {
      background: linear-gradient(135deg, var(--navy), var(--navy-dark));
      padding: 100px 0;
      text-align: center;
      color: #fff;
      position: relative;
      overflow: hidden;
    }
    .final-cta::after {
      content: '';
      position: absolute;
      width: 400px; height: 400px;
      background: radial-gradient(circle, rgba(207,156,10,0.15) 0%, transparent 70%);
      bottom: -200px; left: -100px;
    }

    /* Shared Utilities */
    .text-gold { color: var(--gold); }
    .btn-gold { background: var(--gold); color: var(--navy); font-weight: 800; border-radius: 50px; padding: 15px 40px; transition: var(--transition); text-decoration: none !important; display: inline-block; }
    .btn-gold:hover { transform: translateY(-3px); box-shadow: 0 10px 25px rgba(207,156,10,0.4); background: var(--gold-light); }

    /* Scroll animations */
    .anim-up { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.165, 0.84, 0.44, 1); }
    .anim-up.visible { opacity: 1; transform: translateY(0); }

    @media (max-width: 991px) {
      .credit-hero-content { flex-direction: column; text-align: center; }
      .credit-hero-subtitle { margin-left: auto; margin-right: auto; }
      .credit-hero-features { justify-content: center; }
      .guide-grid { grid-template-columns: 1fr; }
      .floating-card { width: 170px !important; height: 110px !important; }
      .credit-cards-stack { height: 350px; margin-top: 50px; }
      .cc-table td { padding: 25px 15px; }
    }
    
    .cc-style-aj{
        color: var(--gold);    
    }
    
    
    /* ===== FAQ SECTION ===== */
    .faq-section { padding: 100px 0; background: var(--white); }
    .faq-container { max-width: 900px; margin: 0 auto; }
    
    .faq-header {
      color: var(--navy);
      font-weight: 800;
      font-size: 2.2rem;
      margin-bottom: 40px;
    }

    .faq-accordion .accordion-item {
      border: none;
      margin-bottom: 20px;
      border-radius: 12px !important;
      box-shadow: 0 5px 25px rgba(0,0,0,0.05);
      overflow: hidden;
      transition: var(--transition);
    }

    .faq-accordion .accordion-item:hover {
      box-shadow: 0 8px 30px rgba(0,0,0,0.08);
    }

    .faq-accordion .accordion-button {
      padding: 25px 30px;
      font-weight: 700;
      color: var(--navy);
      background: var(--white);
      border: none;
      border-left: 5px solid var(--gold);
      box-shadow: none;
      font-size: 1.1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .faq-accordion .accordion-button:not(.collapsed) {
      background: var(--white);
      color: var(--navy);
    }

    .faq-accordion .accordion-button::after {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23273158'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
      width: 1.5rem;
      height: 1.5rem;
      background-size: 1.5rem;
    }

    .faq-accordion .accordion-body {
      padding: 0 30px 25px 35px;
      color: var(--text-muted);
      font-size: 1rem;
      line-height: 1.8;
      border-left: 5px solid var(--gold);
    }

    @media (max-width: 768px) {
      .faq-header { font-size: 1.8rem; text-align: center; }
      .faq-accordion .accordion-button { padding: 20px; font-size: 1rem; }
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
  <?php
  $active_page = 'credit-cards';
  include("../../top-navigation.php");
  ?>
  <!-- Navbar End -->

  <!-- Credit Cards Hero Section Start -->
  <section class="credit-hero-section">
    <div class="credit-hero-container">
      <div class="credit-hero-content">
        <div class="credit-hero-text wow fadeInLeft" data-wow-delay="0.1s">
          <span class="credit-hero-badge">Best Credit Cards 2026</span>
          <h1 class="credit-hero-title">Best Credit Cards in India – <span class="cc-style-aj">Compare & Apply</span> Online</h1>
          <p class="credit-hero-subtitle">
            Compare top credit cards with instant approval, up to 5% cashback, unlimited rewards, lounge access, and flexible EMI options. Apply online in minutes from HDFC, SBI, Axis, IDFC FIRST, IndusInd & 15+ banks.
          </p>
          <div class="credit-hero-features">
            <div class="credit-hero-feature">
              <i class="fas fa-check-circle"></i>
              <span>Instant Approval</span>
            </div>
            <div class="credit-hero-feature">
              <i class="fas fa-check-circle"></i>
              <span>Zero Annual Fee</span>
            </div>
            <div class="credit-hero-feature">
              <i class="fas fa-check-circle"></i>
              <span>Up to 5% Cashback</span>
            </div>
          </div>
          <a href="#browse-banks" class="credit-hero-cta">Explore Cards <i class="fas fa-arrow-right ms-2"></i></a>
        </div>

        <div class="credit-hero-cards wow fadeInRight" data-wow-delay="0.3s">
          <div class="glow-effect"></div>
          <div class="credit-cards-stack">
            <div class="floating-card" style="--rotation: -12deg;">
              <img src="img/hdfc-bank-credit-card.webp" alt="HDFC Credit Card">
            </div>
            <!--<div class="floating-card" style="--rotation: 5deg;">
              <img src="img/american-express-credit-card.jpg" alt="American Express Credit Card">
            </div>-->
            <div class="floating-card" style="--rotation: 15deg;">
              <img src="img/sbi-bank-credit-card.jpg" alt="SBI Credit Card">
            </div>
            <div class="floating-card" style="--rotation: -8deg;">
              <img src="img/axis-bank-credit-card.jpg" alt="Axis Bank Credit Card">
            </div>
            <div class="floating-card" style="--rotation: 10deg;">
              <img src="img/idfc-first-bank-credit-card.jpg" alt="IDFC Credit Card">
            </div>
            <div class="floating-card" style="--rotation: -5deg;">
              <img src="img/indusind-bank-credit-card.jpg" alt="IndusInd Credit Card">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Credit Cards Hero Section End -->
  

  <!-- Google Ads Section -->
  <div align="center" class="py-4">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4481710634198846" crossorigin="anonymous"></script>
    <ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-4481710634198846" data-ad-slot="3968038623"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
  </div>

  <!-- 2. BROWSE ALL BANKS (Modernized Section) -->
  <section class="browse-section" id="browse-banks">
    <div class="container-fw">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 60px;">
        <span class="section-title-line">Explore Institutions</span>
        <h2 class="playfair" style="font-size: 2.8rem; color: var(--navy);">Choose Your Perfect Bank</h2>
        <p class="text-muted">Direct partner links for fastest approval and exclusive reward rates.</p>
      </div>

      <div class="text-center">
        <!-- HDFC -->
        <div class="bank-card-modern wow fadeInUp" data-wow-delay="0.1s">
          <div class="bank-card-header"><img src="img/hdfc-bank-credit-card.webp" alt="HDFC"></div>
          <div class="bank-card-footer"><a href="HDFC/" class="apply-mini-btn">HDFC Bank Cards</a></div>
        </div>
        <!-- SBI -->
        <div class="bank-card-modern wow fadeInUp" data-wow-delay="0.2s">
          <div class="bank-card-header"><img src="img/sbi-bank-credit-card.jpg" alt="SBI"></div>
          <div class="bank-card-footer"><a href="sbi/" class="apply-mini-btn">SBI Credit Cards</a></div>
        </div>
        <!-- AXIS -->
        <div class="bank-card-modern wow fadeInUp" data-wow-delay="0.3s">
          <div class="bank-card-header"><img src="img/axis-bank-credit-card.jpg" alt="Axis"></div>
          <div class="bank-card-footer"><a href="axis-bank/" class="apply-mini-btn">Axis Bank Cards</a></div>
        </div>
        <!-- IDFC -->
        <div class="bank-card-modern wow fadeInUp" data-wow-delay="0.4s">
          <div class="bank-card-header"><img src="img/idfc-first-bank-credit-card.jpg" alt="IDFC"></div>
          <div class="bank-card-footer"><a href="idfc-bank/" class="apply-mini-btn">IDFC FIRST Bank</a></div>
        </div>
        <!-- INDUSIND -->
        <div class="bank-card-modern wow fadeInUp" data-wow-delay="0.1s">
          <div class="bank-card-header"><img src="img/indusind-bank-credit-card.jpg" alt="IndusInd"></div>
          <div class="bank-card-footer"><a href="indusind-bank/" class="apply-mini-btn">IndusInd Bank</a></div>
        </div>
        <!-- HSBC -->
        <div class="bank-card-modern wow fadeInUp" data-wow-delay="0.2s">
          <div class="bank-card-header"><img src="img/hsbc-credit-card.jpg" alt="HSBC"></div>
          <div class="bank-card-footer"><a href="hsbc/" class="apply-mini-btn">HSBC India Cards</a></div>
        </div>
        <!-- AU BANK -->
        <div class="bank-card-modern wow fadeInUp" data-wow-delay="0.3s">
          <div class="bank-card-header"><img src="img/au-bank-credit-card.jpg" alt="AU"></div>
          <div class="bank-card-footer"><a href="au-small-finace-bank/" class="apply-mini-btn">AU Small Finance</a></div>
        </div>
        <!-- KIWI -->
        <div class="bank-card-modern wow fadeInUp" data-wow-delay="0.4s">
          <div class="bank-card-header"><img src="img/kiwi_banks_cc.webp" alt="Kiwi"></div>
          <div class="bank-card-footer"><a href="kiwi-bank/" class="apply-mini-btn">Kiwi Axis Credit</a></div>
        </div>
        <!-- bajaj -->
        <div class="bank-card-modern wow fadeInUp" data-wow-delay="0.5s">
          <div class="bank-card-header"><img src="img/bajaj_banks.webp" alt="Bajaj"></div>
          <div class="bank-card-footer"><a href="bajaj/" class="apply-mini-btn">Bajaj Finserv Cards</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3. FEATURED CREDIT CARDS TABLE -->
  <section class="featured-section" id="featured">
    <div class="container-fw">
      <div class="text-center wow fadeInUp">
        <span class="section-title-line">Editor's Picks</span>
        <h2 class="playfair" style="font-size: 2.8rem; color: var(--navy);">Featured Credit Cards in India 2026</h2>
        <p class="text-muted">Handpicked by our experts after analyzing 50+ cards based on real user data, latest bank offers (April 2026), reward rates, and eligibility. All cards offer instant online approval via Finowings.
</p>
      </div>

      <div class="cc-table-wrapper wow fadeInUp" data-wow-delay="0.2s">
        <table class="cc-table">
          <thead>
            <tr>
              <th>Card Details</th>
              <th>Fee Structure</th>
              <th>Top Benefits</th>
              <th>Eligibility</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="table-card-info">
                  <img src="img/hdfc-bank-credit-card.webp" alt="HDFC Millennia">
                  <div><strong>HDFC Millennia</strong><br><small class="text-muted">Shopping & Dining</small></div>
                </div>
              </td>
              <td><div style="font-weight:700;">₹1,000 + Taxes</div><small class="text-success">Waived on ₹1L spend</small></td>
              <td>
                <ul class="check-list-table">
                  <li><i class="fas fa-check-circle"></i> 5% Cashback on Amazon, Swiggy</li>
                  <li><i class="fas fa-check-circle"></i> 1% Unlimited on all spends</li>
                </ul>
              </td>
              <td>Salaried: ₹25k pm</td>
              <td><a href="HDFC/" class="apply-mini-btn" style="width: auto; padding: 10px 25px;">Apply Now</a></td>
            </tr>
            <tr>
              <td>
                <div class="table-card-info">
                  <img src="img/sbi-bank-credit-card.jpg" alt="SBI Cashback">
                  <div><strong>SBI Cashback</strong><br><small class="text-muted">Online Spends</small></div>
                </div>
              </td>
              <td><div style="font-weight:700;">₹999 + Taxes</div><small class="text-success">Waived on ₹2L spend</small></td>
              <td>
                <ul class="check-list-table">
                  <li><i class="fas fa-check-circle"></i> 5% Flat on all Online Spend</li>
                  <li><i class="fas fa-check-circle"></i> 1% Fuel Surcharge Waiver</li>
                </ul>
              </td>
              <td>Salaried: ₹25k pm</td>
              <td><a href="sbi/" class="apply-mini-btn" style="width: auto; padding: 10px 25px;">Apply Now</a></td>
            </tr>
            <tr>
              <td>
                <div class="table-card-info">
                  <img src="img/idfc-first-bank-credit-card.jpg" alt="IDFC Select">
                  <div><strong>IDFC FIRST Select</strong><br><small class="text-muted">Travel & Rewards</small></div>
                </div>
              </td>
              <td><div class="text-success" style="font-weight:800;">LIFETIME FREE</div><small class="text-muted">₹0 Fee Always</small></td>
              <td>
                <ul class="check-list-table">
                  <li><i class="fas fa-check-circle"></i> 10x Rewards on spreads >₹20k</li>
                  <li><i class="fas fa-check-circle"></i> Low 1.99% Forex Markup</li>
                </ul>
              </td>
              <td>ITR ₹12 Lakh pa</td>
              <td><a href="idfc-bank/" class="apply-mini-btn" style="width: auto; padding: 10px 25px;">Apply Now</a></td>
            </tr>
            <tr>
              <td>
                <div class="table-card-info">
                  <img src="img/axis-bank-credit-card.jpg" alt="IDFC Select">
                  <div><strong>Axis Bank ACE</strong><br><small class="text-muted">Online & Rewards</small></div>
                </div>
              </td>
              <td><div class="text-success" style="font-weight:800;">₹499 + Taxes</div><small class="text-muted">Waiver on spends</small></td>
              <td>
                <ul class="check-list-table">
                  <li><i class="fas fa-check-circle"></i> 4% on Swiggy, Zomato, Ola</li>
                  <li><i class="fas fa-check-circle"></i> 5% cashback on Google Pay bill</li>
                </ul>
              </td>
              <td>Salaried: ₹25k p.m</td>
              <td><a href="axis-bank/" class="apply-mini-btn" style="width: auto; padding: 10px 25px;">Apply Now</a></td>
            </tr>
            <tr>
              <td>
                <div class="table-card-info">
                  <img src="img/indusind-bank-credit-card.jpg" alt="IDFC Select">
                  <div><strong>IndusInd Tiger</strong><br><small class="text-muted">Perks & Travel</small></div>
                </div>
              </td>
              <td><div class="text-success" style="font-weight:800;">LIFETIME FREE</div><small class="text-muted">₹0 joining</small></td>
              <td>
                <ul class="check-list-table">
                  <li><i class="fas fa-check-circle"></i> Up to 6x accelerated rewards</li>
                  <li><i class="fas fa-check-circle"></i> 8 domestic lounges + 2 international</li>
                </ul>
              </td>
              <td>₹12–15 Lakh p.a.</td>
              <td><a href="indusind-bank/" class="apply-mini-btn" style="width: auto; padding: 10px 25px;">Apply Now</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- 4. WHY FINOWINGS -->
  <section class="why-section">
    <div class="container-fw">
      <div class="text-center wow fadeInUp">
        <span class="section-title-line">Why Choose Us</span>
        <h2 class="playfair" style="font-size: 2.5rem; color: var(--navy);">The Finowings Trust</h2>
        <p class="text-muted mb-5">10,000+ Indians choose our platform every month for their financial products.</p>
      </div>
      
      <div class="why-grid">
        <div class="why-item wow fadeInUp" data-wow-delay="0.1s">
          <i class="fas fa-handshake"></i>
          <h4>Neutral Recommendations</h4>
          <p>We are bank-agnostic advisors. Our recommendations are based on your spending, not bank payouts.</p>
        </div>
        <div class="why-item wow fadeInUp" data-wow-delay="0.2s">
          <i class="fas fa-bolt"></i>
          <h4>Instant Approval</h4>
          <p>Our pre-screening tech checks your eligibility across 15+ banks in under 60 seconds.</p>
        </div>
        <div class="why-item wow fadeInUp" data-wow-delay="0.3s">
          <i class="fas fa-shield-alt"></i>
          <h4>100% Secure & Paperless</h4>
          <p>We follow PCI-DSS security standards. Most card applications are 100% paperless in 2026.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. BEGINNER GUIDE -->
  <section class="guide-section" id="guide">
    <div class="container-fw">
      <div class="text-center wow fadeInUp" style="margin-bottom: 60px;">
        <span class="section-title-line">Knowledge Hub</span>
        <h2 class="playfair" style="font-size: 2.5rem; color: var(--navy);">How to Choose the Best Card?</h2>
        <p class="text-muted">Master the art of credit card selection with our expert framework.</p>
      </div>
      
      <div class="guide-grid">
        <div>
          <div class="guide-step wow fadeInUp" data-wow-delay="0.1s">
            <div class="guide-num">1</div>
            <div>
              <h5>Analyze Your Rewards Category</h5>
              <p>Match your card to your highest spending. Online shopping cards (SBI/HDFC) or Utility cards (Axis) can save you ₹20,000+ annually.</p>
            </div>
          </div>
          <div class="guide-step wow fadeInUp" data-wow-delay="0.2s">
            <div class="guide-num">2</div>
            <div>
              <h5>Annual Fee vs Benefit Value</h5>
              <p>Don't be afraid of paid cards. A ₹999 card that gives 5% cashback often pays for itself in just 2 months of online shopping.</p>
            </div>
          </div>
          <div class="guide-step wow fadeInUp" data-wow-delay="0.3s">
            <div class="guide-num">3</div>
            <div>
              <h5>Watch Out for Devaluations</h5>
              <p>Reward policies change yearly. We track devaluations in real-time so you only apply for high-value cards.</p>
            </div>
          </div>
        </div>

        <div class="checklist-premium wow fadeInRight">
          <h4>Pro Application Checklist</h4>
          <ul class="list-unstyled">
            <li><i class="fas fa-check-circle"></i> CIBIL Score 750+ needed for instant approval</li>
            <li><i class="fas fa-check-circle"></i> Mobile number must be linked with Adhaar</li>
            <li><i class="fas fa-check-circle"></i> PAN Card & Latest ITR/Payslip ready</li>
            <li><i class="fas fa-check-circle"></i> Check pre-approved offers first</li>
            <li><i class="fas fa-check-circle"></i> Read reward capping on monthly spends</li>
          </ul>
          <div class="mt-4 pt-3 border-top border-secondary">
             <p class="small text-light opacity-50"><i>*RBI mandate requires V-KYC for all card applications in 2026.</i></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6. FINAL CTA -->
  <section class="final-cta">
    <div class="container-fw">
      <div class="anim-up">
        <h2 class="playfair mb-4" style="font-size: clamp(2.2rem, 5vw, 3.2rem); color: #fff; font-weight: 800;">Ready to Get Your <span style="color: var(--gold);">Credit Card</span> Today?</h2>
        <div class="d-flex justify-content-center gap-3 mb-5 flex-wrap">
          <div style="background: rgba(255,255,255,0.08); border: 1.5px dashed rgba(207,156,10,0.6); border-radius: 50px; padding: 12px 28px; color: var(--gold); font-weight: 700; font-size: 15px; backdrop-filter: blur(5px);">Zero Joining Fee on Select Cards</div>
          <div style="background: rgba(255,255,255,0.08); border: 1.5px dashed rgba(207,156,10,0.6); border-radius: 50px; padding: 12px 28px; color: var(--gold); font-weight: 700; font-size: 15px; backdrop-filter: blur(5px);">Welcome Benefits up to ₹5,000</div>
        </div>
        <a href="#featured" class="btn-gold wow pulse infinite" style="animation-duration: 2s; font-size: 18px; padding: 18px 45px;">Start Your Application Now <i class="fas fa-rocket ms-2"></i></a>
      </div>
    </div>
  </section>
  
  

  
  <!-- FAQ Section Start -->
  <section class="faq-section">
    <div class="container faq-container">
      <h2 class="faq-header wow fadeInUp">Frequently Asked Questions</h2>
      
      <div class="accordion faq-accordion" id="faqAccordion">
        <!-- Q1 -->
        <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              1. Which is the best credit card in India in 2026?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              The best credit card in India depends on your spending habits. For cashback, cards like HDFC Millennia and SBI Cashback are popular. For travel and rewards, premium cards from Axis, IDFC FIRST, and IndusInd offer better benefits.
            </div>
          </div>
        </div>

        <!-- Q2 -->
        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              2. Can I get a credit card with instant approval?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Yes, many banks in India offer instant approval credit cards if you meet eligibility criteria like a good CIBIL score (750+) and stable income. Pre-approved offers can be approved within minutes.
            </div>
          </div>
        </div>

        <!-- Q3 -->
        <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              3. What is the minimum salary required for a credit card?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Most entry-level credit cards require a minimum monthly salary of ₹20,000–₹25,000. Premium cards may require a higher income or a strong financial history.
            </div>
          </div>
        </div>

        <!-- Q4 -->
        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              4. Which credit card is best for cashback in India?
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Cashback credit cards like SBI Cashback Card and HDFC Millennia are ideal for online shopping, offering up to 5% cashback on popular platforms like Amazon, Flipkart, and Swiggy.
            </div>
          </div>
        </div>

        <!-- Q5 -->
        <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              5. Is it safe to apply for a credit card online?
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Yes, applying through trusted platforms like Finowings is safe. Ensure the platform is secure and works with RBI-compliant banks. Always verify official bank partners before applying.
            </div>
          </div>
        </div>

        <!-- Q6 -->
        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
          <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              6. What CIBIL score is required for a credit card?
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              A CIBIL score of 750 or above is generally recommended for faster approval and better credit card offers. Some banks may approve cards at lower scores with limited benefits.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FAQ Section End -->

  <?php include("../../footer.php"); ?>
  <!-- Footer End -->

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../lib/wow/wow.min.js"></script>
  <script src="../../lib/easing/easing.min.js"></script>
  <script src="../../lib/waypoints/waypoints.min.js"></script>
  <script src="../../lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="../../js/main.js"></script>
  
  <script>
    new WOW().init();
    
    $(document).ready(function() {
      // Smooth scrolling for anchor links
      $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
          event.preventDefault();
          $('html, body').stop().animate({
            scrollTop: target.offset().top - 80
          }, 800);
        }
      });
      
      // Simple anim-up trigger
      $(window).on('scroll', function() {
        $('.anim-up').each(function() {
          var top = $(this).offset().top;
          var bottom = $(window).scrollTop() + $(window).height();
          if (bottom > top + 50) { $(this).addClass('visible'); }
        });
      });
    });
  </script>
</body>
</html>