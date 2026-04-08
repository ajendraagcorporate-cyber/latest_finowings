<?php
session_start();
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
    ob_start('ob_gzhandler');
else ob_start();
?>
<?php
$tid = 7;
include("DLL/config.php");
include("DLL/functions.php");
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
$blogs = getMutualFundBlogs();
$chaptersF = getChaptersF($tid);
$active_page = 'mutual-fund';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Mutual Funds 2026 for SIP & Lumpsum</title>
    <meta content="mutual funds, mutual funds in 2026, index funds, sip investment, mutual fund investment, mutual funds to invest in, best mutual funds, best sip to invest, top mutual funds, best mutual fund to invest now, best Lumpsum to invest" name="keywords">
    <meta content="Start investing in the best mutual funds in India with SIP or lumpsum. Begin with ₹100 and discover top-performing funds for 2026." name="description">
    <link rel="canonical" href="https://www.finowings.com/mutual-fund.php" />
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Nunito:wght@600;700;800&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/new-css.css" rel="stylesheet">
<style>
  :root {
    --navy:   #273158;
    --gold:   #cf9c0a;
    
    --white:  #ffffff;
    --light:  #f4f6fb;
    --text:   #2d2d2d;
    --muted:  #6c757d;
  }

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  body {
    font-family: 'DM Sans', sans-serif;
    color: var(--text);
    background: var(--white);
    overflow-x: hidden;
  }

  h1, h2, .playfair {
    font-family: 'Playfair Display', serif;
  }

  h3, h4, h5, h6, .nunito {
    font-family: 'Nunito', sans-serif;
  }

  /* ===== HERO BANNER ===== */
  .fw-hero {
    background: linear-gradient(135deg, var(--navy) 0%, #1a2245 60%, #0d1530 100%);
    position: relative;
    overflow: hidden;
    padding: 90px 20px 80px;
    text-align: center;
  }
  .fw-hero::before {
    content: '';
    position: absolute;
    width: 600px; height: 600px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(207,156,10,0.12) 0%, transparent 70%);
    top: -200px; right: -150px;
    pointer-events: none;
  }
  .fw-hero::after {
    content: '';
    position: absolute;
    width: 400px; height: 400px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(207,156,10,0.10) 0%, transparent 70%);
    bottom: -120px; left: -80px;
    pointer-events: none;
  }
  .fw-hero-badge {
    display: inline-block;
    background: rgba(207,156,10,0.15);
    border: 1px solid rgba(207,156,10,0.4);
    color: var(--gold);
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 6px 18px;
    border-radius: 50px;
    margin-bottom: 22px;
  }
  .fw-hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2rem, 5vw, 3.4rem);
    color: var(--white);
    line-height: 1.2;
    margin-bottom: 18px;
  }
  .fw-hero h1 span { color: var(--gold); }
  .fw-hero p {
    color: rgba(255,255,255,0.75);
    font-size: clamp(15px, 2vw, 17px);
    max-width: 620px;
    margin: 0 auto 34px;
    line-height: 1.7;
  }
  .fw-hero-btns { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; }
  .btn-primary-fw {
    background: linear-gradient(135deg, var(--gold), #e8b20e);
    color: var(--navy);
    font-weight: 700;
    font-size: 15px;
    padding: 13px 30px;
    border-radius: 8px;
    text-decoration: none;
    border: none;
    cursor: pointer;
    transition: transform 0.2s, box-shadow 0.2s;
    display: inline-flex; align-items: center; gap: 8px;
  }
  /*.btn-primary-fw:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(207,156,10,0.35); }*/
    .btn-primary-fw:hover { color: var(--navy) !important; transform: translateY(-2px); box-shadow: 0 8px 24px rgba(207,156,10,0.35); }

  .btn-outline-fw {
    background: transparent;
    color: var(--white);
    border: 2px solid rgba(255,255,255,0.4);
    font-weight: 600;
    font-size: 15px;
    padding: 13px 30px;
    border-radius: 8px;
    text-decoration: none;
    cursor: pointer;
    transition: border-color 0.2s, background 0.2s;
    display: inline-flex; align-items: center; gap: 8px;
  }
  .btn-outline-fw:hover { border-color: var(--white); background: rgba(255,255,255,0.08); }

  /* Hero stat strip */
  .fw-hero-stats {
    display: flex;
    justify-content: center;
    gap: 40px;
    flex-wrap: wrap;
    margin-top: 50px;
    position: relative; z-index: 1;
  }
  .fw-hero-stat {
    text-align: center;
  }
  .fw-hero-stat .num {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    color: var(--gold);
    font-weight: 900;
    line-height: 1;
  }
  .fw-hero-stat .lbl {
    font-size: 12px;
    color: rgba(255,255,255,0.6);
    margin-top: 4px;
    letter-spacing: 1px;
    text-transform: uppercase;
  }

  /* ===== WHY MUTUAL FUNDS ===== */
  .fw-why {
    background: var(--light);
    padding: 80px 20px;
  }
  .section-tag {
    display: inline-block;
    color: var(--gold);
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    margin-bottom: 10px;
    position: relative;
  }
  .section-tag::before {
    content: '';
    display: inline-block;
    width: 20px; height: 2px;
    background: var(--gold);
    vertical-align: middle;
    margin-right: 8px;
  }
  .section-title-main {
    font-family: 'Playfair Display', serif;
    font-size: clamp(1.7rem, 4vw, 2.5rem);
    color: var(--navy);
    margin-bottom: 14px;
  }
  .section-sub {
    color: var(--muted);
    font-size: 15px;
    max-width: 560px;
    line-height: 1.7;
    margin-bottom: 48px;
  }
  .fw-why-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    max-width: 1100px;
    margin: 0 auto;
  }
  @media (max-width: 991px) {
    .fw-why-grid { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 768px) {
    .fw-why-grid { grid-template-columns: repeat(2, 1fr); }
  }
  .fw-why-card {
    background: var(--white);
    border-radius: 16px;
    padding: 32px 24px;
    text-align: center;
    border-bottom: 4px solid transparent;
    transition: border-color 0.3s, transform 0.3s, box-shadow 0.3s;
    box-shadow: 0 2px 12px rgba(39,49,88,0.07);
  }
  .fw-why-card:hover {
    border-bottom-color: var(--gold);
    transform: translateY(-6px);
    box-shadow: 0 12px 32px rgba(39,49,88,0.13);
  }
  .fw-why-icon {
    width: 60px; height: 60px;
    background: linear-gradient(135deg, rgba(39,49,88,0.08), rgba(207,156,10,0.12));
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 18px;
    font-size: 24px;
    color: var(--navy);
  }
  .fw-why-card h5 {
    font-weight: 700;
    color: var(--navy);
    font-size: 16px;
    margin-bottom: 8px;
  }
  .fw-why-card p {
    color: var(--muted);
    font-size: 14px;
    line-height: 1.6;
  }

  /* ===== WHAT ARE MUTUAL FUNDS ===== */
  .fw-what {
    padding: 80px 20px;
    background: var(--white);
  }
  .fw-what-inner {
    max-width: 1100px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
  }
  @media(max-width:768px){ .fw-what-inner { grid-template-columns: 1fr; gap: 36px; } }
  .fw-what-visual {
    background: linear-gradient(135deg, var(--navy) 0%, #1e2d5a 100%);
    border-radius: 24px;
    padding: 40px 32px;
    position: relative;
    overflow: hidden;
  }
  .fw-what-visual::before {
    content: '';
    position: absolute;
    width: 200px; height: 200px;
    border-radius: 50%;
    background: rgba(207,156,10,0.12);
    top: -60px; right: -60px;
  }
  .fw-flow-step {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 20px;
  }
  .fw-flow-step:last-child { margin-bottom: 0; }
  .fw-flow-num {
    width: 40px; height: 40px;
    min-width: 40px;
    border-radius: 50%;
    background: rgba(207,156,10,0.2);
    border: 2px solid var(--gold);
    color: var(--gold);
    font-weight: 800;
    font-size: 15px;
    display: flex; align-items: center; justify-content: center;
  }
  .fw-flow-text h6 { color: var(--white); font-size: 14px; font-weight: 700; margin-bottom: 2px; }
  .fw-flow-text p { color: rgba(255,255,255,0.6); font-size: 13px; line-height: 1.5; }
  .fw-flow-arrow {
    text-align: center;
    color: var(--gold);
    opacity: 0.5;
    font-size: 18px;
    margin-left: 56px;
    margin-bottom: 4px;
  }
  .fw-what-content .section-sub { max-width: 100%; margin-bottom: 28px; }
  .fw-check-list { list-style: none; padding: 0; }
  .fw-check-list li {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin-bottom: 14px;
    font-size: 15px;
    color: var(--text);
    line-height: 1.6;
  }
  .fw-check-list li i { color: var(--gold); margin-top: 3px; font-size: 14px; min-width: 16px; }

  /* ===== TYPES OF MUTUAL FUNDS ===== */
  .fw-types {
    background: var(--navy);
    padding: 80px 20px;
    position: relative;
    overflow: hidden;
  }
  .fw-types::before {
    content: '';
    position: absolute;
    width: 500px; height: 500px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(207,156,10,0.08) 0%, transparent 70%);
    top: -200px; left: -100px;
  }
  .fw-types .section-tag { color: var(--gold); }
  .fw-types .section-tag::before { background: var(--gold); }
  .fw-types .section-title-main { color: var(--white); }
  .fw-types .section-sub { color: rgba(255,255,255,0.6); }
  .fw-types-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    max-width: 1100px;
    margin: 0 auto;
  }
  @media (max-width: 991px) {
    .fw-types-grid { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 768px) {
    .fw-types-grid { grid-template-columns: repeat(2, 1fr); }
  }
  .fw-type-card {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 18px;
    padding: 32px 24px;
    transition: background 0.3s, transform 0.3s, border-color 0.3s;
    position: relative;
    overflow: hidden;
  }
  .fw-type-card::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0;
    width: 100%; height: 3px;
    background: var(--gold);
    transform: scaleX(0);
    transition: transform 0.3s;
    transform-origin: left;
  }
  .fw-type-card:hover { background: rgba(255,255,255,0.09); transform: translateY(-4px); border-color: rgba(207,156,10,0.3); }
  .fw-type-card:hover::after { transform: scaleX(1); }
  .fw-type-icon {
    width: 52px; height: 52px;
    background: linear-gradient(135deg, var(--navy), var(--gold));
    border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
    font-size: 22px;
    color: var(--white);
    margin-bottom: 20px;
  }
  .fw-type-card h5 { color: var(--white); font-weight: 700; font-size: 17px; margin-bottom: 10px; }
  .fw-type-card p { color: rgba(255,255,255,0.6); font-size: 14px; line-height: 1.65; }
  .fw-type-tag {
    display: inline-block;
    margin-top: 14px;
    background: rgba(207,156,10,0.15);
    color: var(--gold);
    font-size: 12px;
    font-weight: 600;
    padding: 4px 12px;
    border-radius: 50px;
    border: 1px solid rgba(207,156,10,0.3);
  }

  /* ===== HOW TO INVEST ===== */
  .fw-how {
    padding: 80px 20px;
    background: var(--light);
  }
  .fw-how-inner {
    max-width: 1100px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
  }
  @media(max-width:768px){ .fw-how-inner { grid-template-columns: 1fr; gap: 36px; } }
  .fw-steps { counter-reset: step; }
  .fw-step {
    display: flex;
    gap: 18px;
    margin-bottom: 28px;
    position: relative;
  }
  .fw-step:not(:last-child)::before {
    content: '';
    position: absolute;
    left: 19px; top: 48px;
    width: 2px; height: calc(100% - 12px);
    background: linear-gradient(180deg, var(--gold), transparent);
  }
  .fw-step-num {
    width: 40px; height: 40px;
    min-width: 40px;
    background: linear-gradient(135deg, var(--navy), #3a4f8a);
    border-radius: 50%;
    color: var(--white);
    font-weight: 800;
    font-size: 14px;
    display: flex; align-items: center; justify-content: center;
    border: 2px solid var(--gold);
    flex-shrink: 0;
  }
  .fw-step-body h6 { font-weight: 700; color: var(--navy); font-size: 15px; margin-bottom: 4px; }
  .fw-step-body p { color: var(--muted); font-size: 14px; line-height: 1.6; }
  .fw-how-cta-box {
    background: linear-gradient(135deg, var(--navy), #1e2d5a);
    border-radius: 24px;
    padding: 48px 36px;
    text-align: center;
    position: relative;
    overflow: hidden;
  }
  .fw-how-cta-box::before {
    content: '';
    position: absolute;
    width: 250px; height: 250px;
    border-radius: 50%;
    background: rgba(249,105,3,0.1);
    bottom: -80px; right: -60px;
  }
  .fw-how-cta-box h3 {
    font-family: 'Playfair Display', serif;
    color: var(--white);
    font-size: 1.6rem;
    margin-bottom: 14px;
    position: relative;
  }
  .fw-how-cta-box p {
    color: rgba(255,255,255,0.65);
    font-size: 14px;
    line-height: 1.7;
    margin-bottom: 28px;
    position: relative;
  }
  .fw-sip-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(207,156,10,0.15);
    border: 1px solid rgba(207,156,10,0.4);
    color: var(--gold);
    font-size: 13px;
    font-weight: 700;
    padding: 8px 20px;
    border-radius: 50px;
    margin-bottom: 24px;
  }

  /* ===== WHY FINOWINGS ===== */
  .fw-finowings {
    padding: 80px 20px;
    background: var(--white);
  }
  .fw-finowings-inner {
    max-width: 1100px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1.2fr 1fr;
    gap: 60px;
    align-items: center;
  }
  @media(max-width:768px){ .fw-finowings-inner { grid-template-columns: 1fr; gap: 36px; } }
  .fw-feature-list { margin-top: 28px; }
  .fw-feature-item {
    display: flex;
    gap: 16px;
    align-items: flex-start;
    margin-bottom: 22px;
    padding: 18px 20px;
    border-radius: 14px;
    border: 1px solid rgba(39,49,88,0.09);
    transition: border-color 0.3s, box-shadow 0.3s;
  }
  .fw-feature-item:hover {
    border-color: rgba(207,156,10,0.35);
    box-shadow: 0 4px 18px rgba(39,49,88,0.08);
  }
  .fw-feat-icon {
    width: 44px; height: 44px;
    min-width: 44px;
    background: linear-gradient(135deg, rgba(39,49,88,0.08), rgba(207,156,10,0.1));
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    color: var(--navy);
    font-size: 18px;
  }
  .fw-feature-item h6 { font-weight: 700; color: var(--navy); font-size: 15px; margin-bottom: 4px; }
  .fw-feature-item p { color: var(--muted); font-size: 13px; line-height: 1.6; }
  .fw-testimonial-box {
    background: var(--light);
    border-radius: 24px;
    padding: 36px 30px;
  }
  .fw-testimonial-box h5 {
    font-family: 'Playfair Display', serif;
    color: var(--navy);
    font-size: 1.1rem;
    margin-bottom: 24px;
  }
  .fw-tcard {
    background: var(--white);
    border-radius: 14px;
    padding: 20px;
    margin-bottom: 16px;
    border-left: 4px solid var(--gold);
    box-shadow: 0 2px 10px rgba(39,49,88,0.06);
  }
  .fw-tcard p { font-size: 14px; color: var(--text); line-height: 1.6; margin-bottom: 10px; font-style: italic; }
  .fw-tcard-author { display: flex; align-items: center; gap: 10px; }
  .fw-tcard-avatar {
    width: 34px; height: 34px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--navy), #3a4f8a);
    display: flex; align-items: center; justify-content: center;
    color: var(--white);
    font-weight: 700;
    font-size: 13px;
  }
  .fw-tcard-name { font-weight: 700; font-size: 13px; color: var(--navy); }
  .fw-tcard-loc { font-size: 12px; color: var(--muted); }
  .fw-stars { color: var(--gold); font-size: 12px; }

  /* ===== CTA BANNER ===== */
  .fw-cta-banner {
    background: linear-gradient(135deg, var(--navy) 0%, var(--gold) 100%);
    padding: 70px 20px;
    text-align: center;
    position: relative;
    overflow: hidden;
  }
  .fw-cta-banner::before {
    content: '';
    position: absolute;
    width: 400px; height: 400px;
    border-radius: 50%;
    background: rgba(255,255,255,0.08);
    top: -150px; right: -80px;
  }
  .fw-cta-banner h2 {
    font-family: 'Playfair Display', serif;
    color: var(--white);
    font-size: clamp(1.6rem, 4vw, 2.4rem);
    margin-bottom: 14px;
    position: relative;
  }
  .fw-cta-banner p {
    color: rgba(255,255,255,0.85);
    font-size: 16px;
    max-width: 520px;
    margin: 0 auto 32px;
    line-height: 1.7;
    position: relative;
  }
  .fw-cta-banner .btn-white {
    background: var(--white);
    color: var(--navy);
    font-weight: 800;
    padding: 14px 34px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 15px;
    display: inline-flex; align-items: center; gap: 8px;
    margin: 6px;
    transition: transform 0.2s, box-shadow 0.2s;
    position: relative;
  }
  .fw-cta-banner .btn-white:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0,0,0,0.18); }
  .fw-cta-banner .btn-dark {
    background: var(--navy);
    color: var(--white);
    font-weight: 700;
    padding: 14px 34px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 15px;
    display: inline-flex; align-items: center; gap: 8px;
    margin: 6px;
    transition: transform 0.2s;
    position: relative;
  }
  .fw-cta-banner .btn-dark:hover { transform: translateY(-2px); }

  /* ===== SHARED ===== */
  .section-center { text-align: center; max-width: 680px; margin: 0 auto 52px; }
  .section-center .section-sub { margin: 0 auto; }
  .container-fw { max-width: 1200px; margin: 0 auto; }
  
  #fw-custom-section .fw-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    margin-bottom: 30px;
  }
  @media (max-width: 1200px) {
    #fw-custom-section .fw-grid { grid-template-columns: repeat(3, 1fr); }
  }
  @media (max-width: 991px) {
    #fw-custom-section .fw-grid { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 768px) {
    #fw-custom-section .fw-grid { grid-template-columns: repeat(2, 1fr); }
  }

  /* ===== ANIMATIONS ===== */
  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(30px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  .anim { animation: fadeUp 0.6s ease forwards; opacity: 0; }
  .d1 { animation-delay: 0.1s; }
  .d2 { animation-delay: 0.2s; }
  .d3 { animation-delay: 0.3s; }
  .d4 { animation-delay: 0.4s; }
  .d5 { animation-delay: 0.5s; }

  /* RESPONSIVE TWEAKS */
  @media(max-width:576px){
    .fw-hero { padding: 60px 16px 50px; }
    .fw-why, .fw-what, .fw-types, .fw-how, .fw-finowings, .fw-cta-banner { padding: 56px 16px; }
    .fw-hero-stats { gap: 24px; }
  }
</style>
</head>
<body>
    
    <!-- Navbar Start -->
    <?php include("top-navigation.php"); ?>
    <!-- Navbar End -->

<!-- ============================= -->
<!--  1. HERO BANNER               -->
<!-- ============================= -->


    <!--Slider start-->
 <!--   <div id="demo" class="carousel slide" data-ride="carousel" data-interval="1500" style="z-index:20;">-->

 <!--        Indicators -->
 <!--       <ol class="carousel-indicators">-->
 <!--           <li data-target="#demo" data-slide-to="0" class="active"></li>-->
 <!--           <li data-target="#demo" data-slide-to="1"></li>-->
 <!--   <li data-target="#demo" data-slide-to="2"></li>-->
	<!--<li data-target="#demo" data-slide-to="3"></li>-->
	<!--<li data-target="#demo" data-slide-to="4"></li>-->
 <!--       </ol>-->


 <!--        The slideshow -->
 <!--       <div class="carousel-inner">-->

 <!--           <div class="carousel-item active">-->
 <!--               <a href="https://www.finowings.com/buy-best-mutual-fund/"><img src="img/apply-for-mutual-funds.webp" alt="Mutual-Fund" class="img-fluid mx-auto d-block"></a>-->
 <!--           </div>-->


 <!--       </div>-->

 <!--        Left and right controls -->
 <!--       <a class="carousel-control-prev" href="#demo" data-slide="prev">-->
 <!--           <span class="carousel-control-prev-icon"></span>-->
 <!--       </a>-->
 <!--       <a class="carousel-control-next" href="#demo" data-slide="next">-->
 <!--           <span class="carousel-control-next-icon"></span>-->
 <!--       </a>-->
 <!--   </div>-->
 <!--   Slider end-->
 <section class="fw-hero">
  <div class="fw-hero-badge"><i class="fas fa-award" style="margin-right:6px;"></i> #1 Trusted Investment Platform in India</div>
  <h1 class="anim d1">Mutual Funds in India –<br><span>Start SIP & Invest Smart</span></h1> 
  <p class="anim d2">Start your journey to invest in mutual funds with confidence. Choose the right funds, compare options, and build wealth through SIP or lumpsum — beginner-friendly guidance, zero extra charges.</p>
  <div class="fw-hero-btns anim d3">
    <a href="https://www.finowings.com/buy-best-mutual-fund/" class="btn-primary-fw">
      <i class="fas fa-paper-plane"></i> Start Investing
    </a>
    <a href="https://wa.me/message/WUUCORGJ2ON7L1" class="btn-outline-fw">
      <i class="fas fa-arrow-right"></i> Enroll Now
    </a>
  </div>
  <!--<div class="fw-hero-stats anim d4">-->
  <!--  <div class="fw-hero-stat"><div class="num">₹100</div><div class="lbl">Min. SIP</div></div>-->
  <!--  <div class="fw-hero-stat"><div class="num">0%</div><div class="lbl">Commission</div></div>-->
  <!--  <div class="fw-hero-stat"><div class="num">50K+</div><div class="lbl">Students</div></div>-->
  <!--  <div class="fw-hero-stat"><div class="num">15+</div><div class="lbl">Years Expertise</div></div>-->
  <!--</div>-->
</section> 

<!--  3. WHAT ARE MUTUAL FUNDS     -->
<!-- ============================= -->
<section class="fw-what">
  <div class="fw-what-inner container-fw">
    <div class="fw-what-visual anim d1">
      <h4 style="color:var(--white); font-family:'Playfair Display',serif; font-size:1.3rem; margin-bottom:28px; position:relative;">How Mutual Funds Work</h4>
      <div class="fw-flow-step">
        <div class="fw-flow-num">1</div>
        <div class="fw-flow-text">
          <h6>Investors Pool Money</h6>
          <p>Thousands of investors contribute small amounts to create a large fund corpus.</p>
        </div>
      </div>
      <div class="fw-flow-arrow"><i class="fas fa-chevron-down"></i></div>
      <div class="fw-flow-step">
        <div class="fw-flow-num">2</div>
        <div class="fw-flow-text">
          <h6>Fund Manager Invests</h6>
          <p>A professional fund manager allocates funds into stocks, bonds, and other assets.</p>
        </div>
      </div>
      <div class="fw-flow-arrow"><i class="fas fa-chevron-down"></i></div>
      <div class="fw-flow-step">
        <div class="fw-flow-num">3</div>
        <div class="fw-flow-text">
          <h6>Returns Distributed</h6>
          <p>Profits and returns are distributed proportionally among all investors based on units held.</p>
        </div>
      </div>
      <div class="fw-flow-arrow"><i class="fas fa-chevron-down"></i></div>
      <div class="fw-flow-step">
        <div class="fw-flow-num">4</div>
        <div class="fw-flow-text">
          <h6>NAV Tracks Performance</h6>
          <p>The Net Asset Value (NAV) reflects the fund's daily market value per unit.</p>
        </div>
      </div>
    </div>
    <div class="fw-what-content anim d2">
      <div class="section-tag">The Basics</div>
      <h2 class="section-title-main">What are Mutual Funds?</h2>
      <p class="section-sub">Mutual funds pool money from multiple investors and invest in diversified assets, managed by expert fund managers — making them ideal for beginners who want market exposure without complexity.</p>
      <ul class="fw-check-list">
        <li><i class="fas fa-check-circle"></i> Regulated by SEBI — safe and transparent</li>
        <li><i class="fas fa-check-circle"></i> Diversified portfolio reduces investment risk</li>
        <li><i class="fas fa-check-circle"></i> Managed by certified, experienced professionals</li>
        <li><i class="fas fa-check-circle"></i> Suitable for all income levels and goals</li>
        <li><i class="fas fa-check-circle"></i> Highly liquid — redeem anytime (open-end funds)</li>
        <li><i class="fas fa-check-circle"></i> Available for short-term and long-term goals</li>
      </ul>
    </div>
  </div>
</section>

<!--Category Related Blogs Start-->
    <section id="fw-custom-section">
        <div class="container py-5">
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
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Mutual Fund</h6>
                <h2 class="mb-5">Recent Blogs</h2>
            </div>

            <div class="fw-grid">

                <?php
                $i = 0.1;
                while ($row = mysqli_fetch_array($blogs)) {
                    $id =     $row['id'];
                    $title = $row['title'];
                    $count = strlen("$title");
                    $short_title = substr($title, 0, 30);
                    $short_desc = $row['short_desc'];
                    $short_desc1 = substr($short_desc, 0, 120);
                    $desc = $row['content'];
                    $pic = $row['file'];
                    $imgn = explode(".", $pic);
                    $imgname = $imgn['0'];
                    $updated_date = $row['updated_date'];
                    $cat = $row['cat_id'];
                    $cat_name = getCategoryName($cat);
                    $cat_names = str_replace(" ", "-", $cat_name);
                    if ($cat_names == 'SME-IPO') {
                        $cat_name1 = 'IPO';
                    } else {
                        $cat_name1 = $cat_names;
                    }
                    $updated_date = $row['created_date'];
                    $datetime = explode(" ", $updated_date);
                    $date = $datetime['0'];
                    $date1 = explode("-", $date);
                    $year = $date1['0'];
                    $month = $date1['1'];
                    $day = $date1['2'];
                    $img_alttag = $row['img_alttag'];
                    $blog_url = $row['blog_url'];

                    $display_title = ($count < 31) ? $short_title : $short_title . "...";
                ?>
                    <div class="fw-card wow fadeInUp" data-wow-delay="<?php echo $i; ?>s">
                        <div class="fw-img-box">
                            <img loading="lazy" src="https://www.finowings.com/admin/media/<?php echo $pic; ?>" alt="<?php if ($img_alttag != '') {
                                                                                                                                echo $img_alttag;
                                                                                                                            } else {
                                                                                                                                echo $imgname;
                                                                                                                            }  ?>">
                        </div>
                        <div class="fw-content">
                            <div class="fw-meta">
                                <span class="fw-badge">
                                    <a href="../<?php echo $cat_name1; ?>" style="color: inherit; text-decoration: none;">
                                        <?php echo $cat_name; ?>
                                    </a>
                                </span>
                                <div class="fw-price" style="font-size: 14px; color: #6c757d; font-weight: 600;">
                                    <?php echo $day; ?>-<?php echo $month; ?>-<?php echo $year; ?>
                                </div>
                            </div>

                            <h5 class="fw-title"><?php echo $display_title; ?></h5>

                            <p class="fw-desc"><?php echo $short_desc1; ?>...</p>

                            <div class="fw-divider"></div>

                            <a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>" class="fw-btn">Continue Reading</a>
                        </div>
                    </div>
                <?php
                    $i = $i + 0.1;
                }
                ?>

            </div>
        </div>
    </section>
    <!--Category Related Blogs end-->

<!-- ============================= -->
<!--  2. WHY MUTUAL FUNDS          -->
<!-- ============================= -->
<section class="fw-why">
  <div class="container-fw">
    <div class="section-center">
      <div class="section-tag">Why Invest</div>
      <h2 class="section-title-main">Why Choose Mutual Funds?</h2>
      <p class="section-sub">Mutual funds offer a smart, flexible, and beginner-friendly path to wealth creation. Here's why millions of Indians are choosing them.</p>
    </div>
    <div class="fw-why-grid">
      <div class="fw-why-card anim d1">
        <div class="fw-why-icon"><i class="fas fa-rupee-sign"></i></div>
        <h5>Start with Just ₹100</h5>
        <p>No need for large capital. Begin your investment journey with as little as ₹100 through SIP.</p>
      </div>
      <div class="fw-why-card anim d2">
        <div class="fw-why-icon"><i class="fas fa-user-graduate"></i></div>
        <h5>Beginner Friendly</h5>
        <p>Professionally managed funds mean you don't need deep market knowledge to start investing.</p>
      </div>
      <div class="fw-why-card anim d3">
        <div class="fw-why-icon"><i class="fas fa-shield-alt"></i></div>
        <h5>Risk Diversification</h5>
        <p>Your money is spread across multiple assets, reducing risk and improving stability of returns.</p>
      </div>
      <div class="fw-why-card anim d1">
        <div class="fw-why-icon"><i class="fas fa-chart-line"></i></div>
        <h5>Long-term Wealth Growth</h5>
        <p>Harness the power of compounding to grow your wealth steadily and consistently over time.</p>
      </div>
      <div class="fw-why-card anim d2">
        <div class="fw-why-icon"><i class="fas fa-percent"></i></div>
        <h5>Tax Benefits (ELSS)</h5>
        <p>Save up to ₹1.5 lakh in taxes under Section 80C while still growing your investments.</p>
      </div>
      <div class="fw-why-card anim d3">
        <div class="fw-why-icon"><i class="fas fa-sync-alt"></i></div>
        <h5>Flexible SIP & Lumpsum</h5>
        <p>Choose the investment style that suits your cash flow — monthly SIP or one-time lumpsum.</p>
      </div>
    </div>
  </div>
</section>


<!-- Courses Section Start -->
    <section id="fw-custom-section">
        <div class="container py-5">
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
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Concept</h6>
                <h2 class="mb-5">All About Mutual Fund</h2>
            </div>

            <div class="fw-grid">

                <?php
                while ($r = mysqli_fetch_array($chaptersF)) {
                    $id = $r['id'];
                    $name = $r['chapter_name'];
                    $alt_text = str_replace(" ", "-", $name);
                    $image = $r['chapter_image'];
                    $blog_url = $r['blog_url'];
                    $i = 0.1;
                ?>

                    <div class="fw-card wow fadeInUp" data-wow-delay="<?php echo $i; ?>s">
                        <div class="fw-img-box">
                            <img loading="lazy" src="../../admin/media/courseicons/<?php echo $image; ?>" alt="<?php echo $alt_text; ?>">
                        </div>
                        <div class="fw-content">
                            <!-- <h5 class="fw-title">Title here</h5> -->
                            <!-- Description is not available in the loop, so omitted -->

                            <div class="fw-divider"></div>

                            <a href="../../mutual-fund-vs-etfs/<?php echo $blog_url; ?>" class="fw-btn"><?php echo $name; ?></a>
                        </div>
                    </div>
                <?php
                    $i = $i + 0.1;
                }
                ?>

            </div>
        </div>
    </section>
    <!-- Courses Section End -->

<!-- ============================= -->



<!-- ============================= -->
<!--  4. TYPES OF MUTUAL FUNDS     -->
<!-- ============================= -->
<section class="fw-types" id="fw-types">
  <div class="container-fw">
    <div class="section-center">
      <div class="section-tag">Fund Categories</div>
      <h2 class="section-title-main">Types of Mutual Funds</h2>
      <p class="section-sub" style="color:rgba(255,255,255,0.6);">Understanding different types helps you pick the right fund based on your goals, timeline, and risk appetite.</p>
    </div>
    <div class="fw-types-grid">
      <div class="fw-type-card anim d1">
        <div class="fw-type-icon"><i class="fas fa-chart-bar"></i></div>
        <h5>Equity Funds</h5>
        <p>Primarily invest in stocks. Best for long-term wealth creation with higher return potential and moderate-to-high risk.</p>
        <span class="fw-type-tag">High Growth</span>
      </div>
      <div class="fw-type-card anim d2">
        <div class="fw-type-icon"><i class="fas fa-file-invoice-dollar"></i></div>
        <h5>Debt Funds</h5>
        <p>Invest in bonds and fixed-income instruments. Ideal for stable, predictable, low-risk returns for conservative investors.</p>
        <span class="fw-type-tag">Low Risk</span>
      </div>
      <div class="fw-type-card anim d3">
        <div class="fw-type-icon"><i class="fas fa-balance-scale"></i></div>
        <h5>Hybrid Funds</h5>
        <p>A balanced mix of equity and debt, offering moderate risk and moderate returns — great for first-time investors.</p>
        <span class="fw-type-tag">Balanced</span>
      </div>
      <div class="fw-type-card anim d1">
        <div class="fw-type-icon"><i class="fas fa-piggy-bank"></i></div>
        <h5>ELSS (Tax Saving)</h5>
        <p>Equity-linked savings schemes with a 3-year lock-in. Offers tax deduction up to ₹1.5L under Section 80C.</p>
        <span class="fw-type-tag">Tax Saving</span>
      </div>
      <div class="fw-type-card anim d2">
        <div class="fw-type-icon"><i class="fas fa-industry"></i></div>
        <h5>Sectoral Funds</h5>
        <p>Focus on specific sectors like IT, pharma, or banking. Higher returns potential but concentrated sector risk.</p>
        <span class="fw-type-tag">Sector Focus</span>
      </div>
      <div class="fw-type-card anim d3">
        <div class="fw-type-icon"><i class="fas fa-list-ol"></i></div>
        <h5>Index Funds</h5>
        <p>Passively track indices like Nifty 50 or Sensex. Low-cost, transparent, and great for long-term passive investors.</p>
        <span class="fw-type-tag">Passive</span>
      </div>
    </div>
  </div>
</section>


<!-- ============================= -->
<!--  5. HOW TO INVEST             -->
<!-- ============================= -->
<section class="fw-how">
  <div class="fw-how-inner container-fw">
    <div class="anim d1">
      <div class="section-tag">Getting Started</div>
      <h2 class="section-title-main">How to Invest in Mutual Funds?</h2>
      <p class="section-sub" style="margin-bottom:36px;">Starting your mutual fund investment is simple and can be done in just a few steps. Here's your beginner's roadmap:</p>
      <div class="fw-steps">
        <div class="fw-step">
          <div class="fw-step-num">1</div>
          <div class="fw-step-body">
            <h6>Set Your Investment Goal</h6>
            <p>Define what you're investing for — retirement, a home, education, or wealth creation. Your goal shapes your fund choice.</p>
          </div>
        </div>
        <div class="fw-step">
          <div class="fw-step-num">2</div>
          <div class="fw-step-body">
            <h6>Assess Your Risk Appetite</h6>
            <p>Understand your comfort with market fluctuations. Choose equity for high risk tolerance, debt for stability.</p>
          </div>
        </div>
        <div class="fw-step">
          <div class="fw-step-num">3</div>
          <div class="fw-step-body">
            <h6>Choose SIP or Lumpsum</h6>
            <p>SIP (Systematic Investment Plan) means investing a fixed amount monthly. Lumpsum is a one-time investment.</p>
          </div>
        </div>
        <div class="fw-step">
          <div class="fw-step-num">4</div>
          <div class="fw-step-body">
            <h6>Complete Your KYC</h6>
            <p>Quick digital KYC using Aadhaar and PAN. One-time process to get started on any platform.</p>
          </div>
        </div>
        <div class="fw-step">
          <div class="fw-step-num">5</div>
          <div class="fw-step-body">
            <h6>Start Investing &amp; Stay Consistent</h6>
            <p>Begin with just ₹100/month and stay invested for the long run to maximise compounding benefits.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="fw-how-cta-box anim d2">
      <div class="fw-sip-badge"><i class="fas fa-bolt"></i> SIP Starting at ₹100/month</div>
      <h3>Ready to Start Investing?</h3>
      <p>Join thousands of investors who have already started their financial journey with Finowings. Zero commission, zero hidden charges.</p>
      <a href="https://www.finowings.com/buy-best-mutual-fund/" class="btn-primary-fw" style="width:100%; justify-content:center; margin-bottom:12px;">
        <i class="fas fa-paper-plane"></i> Start SIP Now
      </a>
      <a href="#fw-types" class="btn-outline-fw" style="width:100%; justify-content:center; border-color:rgba(207,156,10,0.5); color:var(--gold);">
        <i class="fas fa-book-open"></i> Explore Fund Types
      </a>
      <div style="margin-top:28px; padding-top:24px; border-top:1px solid rgba(255,255,255,0.1);">
        <p style="color:rgba(255,255,255,0.5); font-size:12px; margin:0;"><i class="fas fa-lock" style="margin-right:4px;"></i> SEBI Regulated &nbsp;|&nbsp; 100% Secure &nbsp;|&nbsp; Zero Commission</p>
      </div>
    </div>
  </div>
</section>


<!-- ============================= -->
<!--  6. WHY FINOWINGS             -->
<!-- ============================= -->
<section class="fw-finowings">
  <div class="fw-finowings-inner container-fw">
    <div class="anim d1">
      <div class="section-tag">Our Edge</div>
      <h2 class="section-title-main">Why Learn Mutual Funds with Finowings?</h2>
      <p class="section-sub">Finowings makes mutual fund learning simple, practical, and result-oriented. Our experts bring years of real-market experience directly to you.</p>
      <div class="fw-feature-list">
        <div class="fw-feature-item">
          <div class="fw-feat-icon"><i class="fas fa-book-reader"></i></div>
          <div>
            <h6>Beginner-Friendly Content</h6>
            <p>Complex financial concepts explained in simple Hindi &amp; English — no jargon, just clarity.</p>
          </div>
        </div>
        <div class="fw-feature-item">
          <div class="fw-feat-icon"><i class="fas fa-tools"></i></div>
          <div>
            <h6>Practical Investing Approach</h6>
            <p>Learn through real-world scenarios and live market case studies, not just theory.</p>
          </div>
        </div>
        <div class="fw-feature-item">
          <div class="fw-feat-icon"><i class="fas fa-bell"></i></div>
          <div>
            <h6>Regular Market Updates</h6>
            <p>Stay ahead with regular insights on market trends, new fund launches, and opportunities.</p>
          </div>
        </div>
        <div class="fw-feature-item">
          <div class="fw-feat-icon"><i class="fas fa-user-tie"></i></div>
          <div>
            <h6>Expert-Backed Guidance</h6>
            <p>Backed by SEBI-registered advisors with 15+ years of market experience.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="anim d2">
      <div class="fw-testimonial-box">
        <h5>What Our Investors Say</h5>
        <div class="fw-tcard">
          <div class="fw-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p style="margin-top:8px;">"Finowings has been incredibly helpful for me. I had very little knowledge about mutual funds, but their simple explanations and guidance helped me start my SIP with confidence. Now I'm regularly investing and seeing good growth in my portfolio. Highly recommended!"</p>
          <div class="fw-tcard-author">
            <div class="fw-tcard-avatar">RK</div>
            <div>
              <div class="fw-tcard-name">Rahul Kumar</div>
              <div class="fw-tcard-loc">Lucknow, UP</div>
            </div>
          </div>
        </div>
        <div class="fw-tcard">
          <div class="fw-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p style="margin-top:8px;">"I got a lot of help from Finowings website. Their step-by-step guidance made investing so much easier for a beginner like me. They helped me choose the right funds and also explained how to save tax through ELSS. I'm now investing comfortably and building my wealth. Thank you Finowings!"</p>
          <div class="fw-tcard-author">
            <div class="fw-tcard-avatar">PS</div>
            <div>
              <div class="fw-tcard-name">Priya Sharma</div>
              <div class="fw-tcard-loc">Kanpur, UP</div>
            </div>
          </div>
        </div>
        <div style="text-align:center; margin-top:16px;">
          <a href="https://www.finowings.com/contact-us.php" class="btn-primary-fw" style="font-size:14px; padding:11px 24px;">
            <i class="fas fa-arrow-right"></i> Join Now
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ============================= -->
<!--  7. CTA BANNER                -->
<!-- ============================= -->
<section class="fw-cta-banner">
  <h2 class="anim d1">Start Your Investment Journey Today</h2>
  <p class="anim d2">Take the first step toward financial growth and smart investing. Zero commission. Zero extra charges. Just pure wealth creation.</p>
  <div class="anim d3">
    <a href="https://www.finowings.com/buy-best-mutual-fund/" class="btn-white">
      <i class="fas fa-layer-group"></i> Explore Mutual Funds
    </a>
    <a href="https://courses.finowings.com/stock-market-courses" class="btn-dark">
      <i class="fas fa-graduation-cap"></i> Join Investment Courses
    </a>
  </div>
</section>


<!-- Section 13: Contact Start -->
    <style>
        @media (max-width: 768px) {
            #fw-custom-contact .info-content {
                display: none !important;
            }

            #fw-custom-contact .col-lg-8 {
                display: none !important;
            }

            .mobile-contact-btn {
                display: block !important;
                text-align: center;
                background: #273158;
                color: #fff;
                padding: 12px;
                margin-top: 15px;
                border-radius: 5px;
                text-decoration: none;
                font-weight: 700;
            }

            .mobile-contact-btn:hover {
                background: #cf9c0a;
                color: #fff;
            }
        }

        @media (min-width: 769px) {
            .mobile-contact-btn {
                display: none;
            }
        }
    </style>
    <section id="fw-custom-contact" class="py-5">
        <div class="container-xxl">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="info-card">
                            <div class="info-content">
                                <div class="info-item">
                                    <div class="icon-box">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="info-text">
                                        <h6>Call Us 24/7</h6>
                                        <a href="tel:9708094321">+91-970-8094-321</a>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="icon-box">
                                        <i class="fa fa-envelope-open"></i>
                                    </div>
                                    <div class="info-text">
                                        <h6>Make A Quote</h6>
                                        <a href="mailto:info@finowings.com">info@finowings.com</a>
                                    </div>
                                </div>

                                <div class="info-item">
                                    <div class="icon-box">
                                        <i class="fa fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info-text">
                                        <h6>Location</h6>
                                        <p>C-1, Bank of Baroda, Sector-M, Mama Chauraha, Kursi Road, Lucknow</p>
                                    </div>
                                </div>
                            </div>
                            <div class="map-container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.27310086481!2d80.9547765!3d26.894826499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfdaf218e1115%3A0x4a5fcfe97266b5ac!2sFinowings%20Training%20Academy%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1767935983637!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>

                            <a href="contact-us.php" class="mobile-contact-btn">
                                Contact Us <i class="fa fa-arrow-right module-contact-icon"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="form-header">
                            <h2>Send Our Message</h2>
                        </div>
                        <form id="myform" method="post">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="name">Your Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="email">Your Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="phone">Your Phone *</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="+91 **********">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="enquiry_type">Select Query *</label>
                                    <select class="form-control" id="enquiry_type">
                                        <option value="" disabled selected>Select Topic</option>
                                        <option>Technical Analysis Classes</option>
                                        <option>Mentor Support</option>
                                        <option>Portfolio Review</option>
                                        <option>Retirement Planning</option>
                                        <option>Mutual Fund</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="city">Your City</label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="Your City">
                                </div>
                                <div class="col-12 form-group">
                                    <label for="message">Message *</label>
                                    <textarea class="form-control" id="message" name="message" placeholder="Write a message here ..."></textarea>
                                </div>
                                <div class="col-12 mt-2">
                                    <button type="button" id="submitFormData" onclick="SubmitFormData();" class="btn btn-submit">
                                        Send Message <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                                <div class="col-12 mt-3">
                                    <div id="error_message"></div>
                                    <div id="results" class="text-center" style="color: #273158; font-size:16px; font-weight: 500;"></div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->
    <!-- Footer Start -->
    <?php include("footer.php"); ?>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>
</html>
