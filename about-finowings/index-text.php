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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>About Finowings Academy | Leading Stock Market Training Institute</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="about finowings, mukul agrawal, stock market academy, financial education, best trading institute" name="keywords">
    <meta content="Learn stock market trading with Finowings Academy. We provide expert-led financial education to help you master investing and take control of your money." name="description">
    <link rel="canonical" href="https://www.finowings.com/about-finowings/" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
        <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/new-css.css" rel="stylesheet">
    
    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
       <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

<style>
  :root {
    --navy: #0d1b3e;
    --navy-mid: #162040;
    --gold: #e8a200;
    --gold-light: #f5c842;
    --gold-pale: #fdf3d7;
    --white: #ffffff;
    --off-white: #f8f9fc;
    --text: #1a1a2e;
    --text-muted: #6b7280;
    --border: rgba(232,162,0,0.18);
    --card-bg: #ffffff;
    --radius: 16px;
    --shadow: 0 4px 32px rgba(13,27,62,0.10);
    --shadow-lg: 0 12px 56px rgba(13,27,62,0.16);
  }

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  body {
    font-family: 'DM Sans', sans-serif;
    background: var(--off-white);
    color: var(--text);
    overflow-x: hidden;
    line-height: 1.7;
  }

  /* ── HERO ── */
  .fw-hero {
    background: var(--navy);
    position: relative;
    padding: 100px 24px 80px;
    overflow: hidden;
    text-align: center;
  }
  .fw-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(ellipse 60% 60% at 80% 20%, rgba(232,162,0,0.18) 0%, transparent 70%),
      radial-gradient(ellipse 40% 40% at 10% 80%, rgba(232,162,0,0.10) 0%, transparent 70%);
  }
  .fw-hero-badge {
    display: inline-block;
    background: rgba(232,162,0,0.15);
    border: 1px solid var(--gold);
    color: var(--gold-light);
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 6px 20px;
    border-radius: 100px;
    margin-bottom: 24px;
    position: relative;
  }
  .fw-hero h1 {
    font-family: 'DM Serif Display', serif;
    font-size: clamp(2.4rem, 6vw, 4rem);
    color: var(--white);
    line-height: 1.15;
    max-width: 760px;
    margin: 0 auto 20px;
    position: relative;
  }
  .fw-hero h1 span { color: var(--gold); }
  .fw-hero p {
    color: rgba(255,255,255,0.70);
    font-size: 1.1rem;
    max-width: 560px;
    margin: 0 auto 36px;
    position: relative;
  }
  .fw-hero-btns { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; position: relative; }
  .fw-btn-primary {
    background: var(--gold);
    color: var(--navy);
    font-weight: 700;
    padding: 14px 34px;
    border-radius: 100px;
    text-decoration: none;
    font-size: 15px;
    transition: all .25s;
    display: inline-flex; align-items: center; gap: 8px;
  }
  .fw-btn-primary:hover { background: var(--gold-light); transform: translateY(-2px); box-shadow: 0 8px 24px rgba(232,162,0,0.35); }
  .fw-btn-outline {
    background: transparent;
    color: var(--white);
    font-weight: 600;
    padding: 14px 34px;
    border-radius: 100px;
    border: 1.5px solid rgba(255,255,255,0.35);
    text-decoration: none;
    font-size: 15px;
    transition: all .25s;
  }
  .fw-btn-outline:hover { border-color: var(--gold); color: var(--gold); }

  /* ── STATS BAR ── */
  /*.fw-stats {*/
  /*  background: var(--navy-mid);*/
  /*  border-top: 1px solid rgba(232,162,0,0.15);*/
  /*  border-bottom: 1px solid rgba(232,162,0,0.15);*/
  /*  padding: 28px 24px;*/
  /*}*/
  /*.fw-stats-grid {*/
  /*  max-width: 1100px;*/
  /*  margin: 0 auto;*/
  /*  display: grid;*/
  /*  grid-template-columns: repeat(4, 1fr);*/
  /*  gap: 16px;*/
  /*  text-align: center;*/
  /*}*/
  /*.fw-stat-item { padding: 8px; }*/
  /*.fw-stat-num {*/
  /*  font-family: 'DM Serif Display', serif;*/
  /*  font-size: 2rem;*/
  /*  color: var(--gold);*/
  /*  display: block;*/
  /*}*/
  /*.fw-stat-label { font-size: 13px; color: rgba(255,255,255,0.60); margin-top: 2px; }*/

  /* ── SECTION WRAPPER ── */
  .fw-section { padding: 80px 24px; }
  .fw-section-inner { max-width: 1100px; margin: 0 auto; }
  .fw-section-label {
    display: inline-block;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 12px;
  }
  .fw-section-title {
    font-family: 'DM Serif Display', serif;
    font-size: clamp(1.8rem, 4vw, 2.6rem);
    color: var(--text);
    line-height: 1.2;
    margin-bottom: 16px;
  }
  .fw-section-sub {
    color: var(--text-muted);
    font-size: 1.05rem;
    max-width: 600px;
    margin-bottom: 48px;
  }

  /* ── ABOUT BLOCK ── */
  .fw-about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
  }
  .fw-about-img-wrap {
    position: relative;
  }
  .fw-about-img-wrap img {
    width: 100%;
    border-radius: var(--radius);
    box-shadow: var(--shadow-lg);
    display: block;
  }
  .fw-about-badge-float {
    position: absolute;
    bottom: -20px;
    right: -20px;
    background: var(--gold);
    color: var(--navy);
    font-weight: 700;
    font-size: 14px;
    padding: 18px 22px;
    border-radius: 14px;
    box-shadow: 0 8px 32px rgba(232,162,0,0.30);
    text-align: center;
    line-height: 1.3;
  }
  .fw-about-badge-float span { display: block; font-size: 26px; font-family: 'DM Serif Display', serif; }
  .fw-chips { display: flex; flex-wrap: wrap; gap: 10px; margin: 24px 0; }
  .fw-chip {
    display: inline-flex; align-items: center; gap: 7px;
    background: var(--gold-pale);
    color: var(--navy);
    font-size: 13.5px;
    font-weight: 600;
    padding: 7px 16px;
    border-radius: 100px;
    border: 1px solid rgba(232,162,0,0.25);
  }
  .fw-chip i { color: var(--gold); font-size: 12px; }

  /* ── MISSION / VISION CARDS ── */
  .fw-mvv-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    margin-top: 48px;
  }
  .fw-mvv-card {
    background: var(--card-bg);
    border-radius: var(--radius);
    padding: 36px 28px;
    border: 1px solid var(--border);
    box-shadow: var(--shadow);
    position: relative;
    overflow: hidden;
    transition: transform .25s, box-shadow .25s;
  }
  .fw-mvv-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); }
  .fw-mvv-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--gold), var(--gold-light));
  }
  .fw-mvv-icon {
    width: 52px; height: 52px;
    background: var(--gold-pale);
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 20px;
    font-size: 22px;
    color: var(--gold);
  }
  .fw-mvv-card h3 { font-size: 1.15rem; font-weight: 700; color: var(--text); margin-bottom: 10px; }
  .fw-mvv-card p { font-size: 14.5px; color: var(--text-muted); line-height: 1.7; }

  /* ── WHAT WE DO ── */
  .fw-dark-section {
    background: var(--navy);
    padding: 80px 24px;
  }
  .fw-dark-section .fw-section-title { color: var(--white); }
  .fw-dark-section .fw-section-sub { color: rgba(255,255,255,0.6); }
  .fw-courses-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 48px;
  }
  .fw-course-card {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(232,162,0,0.15);
    border-radius: var(--radius);
    padding: 28px 24px;
    transition: all .25s;
    position: relative;
    overflow: hidden;
  }
  .fw-course-card:hover {
    background: rgba(232,162,0,0.08);
    border-color: var(--gold);
    transform: translateY(-4px);
  }
  .fw-course-card .num {
    font-family: 'DM Serif Display', serif;
    font-size: 3rem;
    color: rgba(232,162,0,0.15);
    position: absolute;
    top: 12px; right: 20px;
    line-height: 1;
  }
  .fw-course-card i { font-size: 26px; color: var(--gold); margin-bottom: 14px; display: block; }
  .fw-course-card h4 { font-size: 1rem; font-weight: 700; color: var(--white); margin-bottom: 8px; }
  .fw-course-card p { font-size: 13.5px; color: rgba(255,255,255,0.55); line-height: 1.65; }

  /* ── WHY CHOOSE ── */
  .fw-why-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 52px;
    align-items: center;
  }
  .fw-why-list { display: flex; flex-direction: column; gap: 18px; }
  .fw-why-item {
    display: flex; gap: 16px; align-items: flex-start;
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: 12px;
    padding: 18px 20px;
    transition: box-shadow .2s, border-color .2s;
  }
  .fw-why-item:hover { border-color: var(--gold); box-shadow: 0 4px 20px rgba(232,162,0,0.10); }
  .fw-why-icon {
    width: 42px; height: 42px; min-width: 42px;
    background: var(--gold-pale);
    border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    color: var(--gold);
    font-size: 17px;
  }
  .fw-why-item h5 { font-size: 14.5px; font-weight: 700; color: var(--text); margin-bottom: 3px; }
  .fw-why-item p { font-size: 13.5px; color: var(--text-muted); line-height: 1.6; }
  .fw-why-visual {
    background: var(--navy);
    border-radius: 20px;
    padding: 40px 32px;
    position: relative;
    overflow: hidden;
  }
  .fw-why-visual::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 60% 50% at 80% 10%, rgba(232,162,0,0.18) 0%, transparent 70%);
  }
  .fw-why-quote {
    font-family: 'DM Serif Display', serif;
    font-size: 1.4rem;
    color: var(--white);
    line-height: 1.5;
    position: relative;
    margin-bottom: 28px;
  }
  .fw-why-quote::before {
    content: '"';
    font-size: 5rem;
    color: var(--gold);
    opacity: .3;
    position: absolute;
    top: -24px; left: -10px;
    line-height: 1;
  }
  .fw-diff-list { list-style: none; padding: 0; margin: 0; }
  .fw-diff-list li {
    display: flex; align-items: center; gap: 10px;
    font-size: 13.5px;
    color: rgba(255,255,255,0.75);
    padding: 8px 0;
    border-bottom: 1px solid rgba(255,255,255,0.06);
    position: relative;
  }
  .fw-diff-list li i { color: var(--gold); font-size: 13px; }


  
  /* ── CTA SECTION ── */
  .fw-cta-section {
    background: var(--navy);
    padding: 80px 24px;
    text-align: center;
    position: relative;
    overflow: hidden;
  }
  .fw-cta-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(ellipse 50% 60% at 50% 50%, rgba(232,162,0,0.12) 0%, transparent 70%);
  }
  .fw-cta-section h2 { font-family: 'DM Serif Display', serif; font-size: clamp(1.8rem, 4vw, 2.8rem); color: var(--white); margin-bottom: 14px; position: relative; }
  .fw-cta-section p { color: rgba(255,255,255,0.60); font-size: 1rem; max-width: 520px; margin: 0 auto 36px; position: relative; }
  .fw-cta-btns { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; position: relative; }

  /* ── DISCLAIMER ── */
  .fw-disclaimer {
    background: #fff8e7;
    border-left: 4px solid var(--gold);
    border-radius: 10px;
    padding: 18px 22px;
    margin: 48px auto 0;
    max-width: 900px;
    font-size: 13px;
    color: #7a6000;
    line-height: 1.7;
  }
  .fw-disclaimer strong { color: var(--navy); }

  /* ── RESPONSIVE ── */
  @media (max-width: 991px) {
    .fw-stats-grid { grid-template-columns: repeat(2, 1fr); }
    .fw-about-grid { grid-template-columns: 1fr; gap: 36px; }
    .fw-about-badge-float { right: 10px; bottom: -16px; }
    .fw-mvv-grid { grid-template-columns: 1fr; }
    .fw-courses-grid { grid-template-columns: repeat(2, 1fr); }
    .fw-why-grid { grid-template-columns: 1fr; gap: 36px; }
    .fw-testi-grid { grid-template-columns: 1fr 1fr; }
    .fw-faq-grid { grid-template-columns: 1fr; }
    .fw-faq-visual { position: static; }
  }
  @media (max-width: 640px) {
    .fw-section { padding: 56px 16px; }
    .fw-dark-section { padding: 56px 16px; }
    .fw-testi-section { padding: 56px 16px; }
    .fw-faq-section { padding: 56px 16px; }
    .fw-cta-section { padding: 56px 16px; }
    .fw-stats-grid { grid-template-columns: repeat(2, 1fr); }
    .fw-courses-grid { grid-template-columns: 1fr; }
    .fw-testi-grid { grid-template-columns: 1fr; }
    .fw-mvv-grid { grid-template-columns: 1fr; }
  }

  /* ── ANIMATIONS ── */
  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(28px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .fade-up { animation: fadeUp .65s both; }
  .delay-1 { animation-delay: .1s; }
  .delay-2 { animation-delay: .2s; }
  .delay-3 { animation-delay: .3s; }
  
  /* Reveal Animation Styles */
  .reveal {
    opacity: 0;
    transform: translateY(30px);
    transition: all .8s cubic-bezier(0.23, 1, 0.32, 1);
  }
  .reveal.visible {
    opacity: 1;
    transform: translateY(0);
  }



  /* FAQ Custom Styles from open-demat-account.php */
  .accordion-item {
    border: none;
    margin-bottom: 15px;
    border-radius: 10px !important;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
  }
  .accordion-button {
    color: #273158;
    font-weight: 600;
    background-color: #ffffff;
    border-left: 5px solid #cf9c0a;
    box-shadow: none !important;
  }
  .accordion-button:not(.collapsed) {
    color: #ffffff;
    background-color: #273158;
    border-left: 5px solid #cf9c0a;
  }
  .accordion-button:not(.collapsed)::after {
    filter: brightness(0) invert(1);
  }
  .accordion-button:focus {
    box-shadow: none;
    border-color: rgba(0, 0, 0, .125);
  }
  .accordion-body {
    background-color: #ffffff;
    color: #181d38;
    font-weight: 500;
    border-top: 1px solid #dee2e6;
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

<!-- NAV PLACEHOLDER (replace with your include) -->
    <!-- Navbar Start -->
    <?php include("../top-navigation.php"); ?>
    <!-- Navbar End -->
<!-- ══════════ HERO ══════════ -->
<section class="fw-hero">
  <div class="fw-hero-badge fade-up">📈 India's #1 Stock Market Training Platform</div>
  <h1 class="fade-up delay-1">Learn, Grow &amp; <span>Master Finance</span> with Finowings Academy</h1>
  <p class="fade-up delay-2">Helping beginners learn trading, investing, and financial management with practical, structured, and jargon-free education.</p>
  <div class="fw-hero-btns fade-up delay-3">
    <a href="/courses/" class="fw-btn-primary"><i class="fas fa-play-circle"></i> Explore Courses</a>
    <a href="#about" class="fw-btn-outline">Learn More</a>
  </div>
</section>

<!-- ══════════ STATS BAR ══════════ -->
<!--<div class="fw-stats">-->
<!--  <div class="fw-stats-grid">-->
<!--    <div class="fw-stat-item reveal">-->
<!--      <span class="fw-stat-num">50K+</span>-->
<!--      <div class="fw-stat-label">Students Enrolled</div>-->
<!--    </div>-->
<!--    <div class="fw-stat-item reveal">-->
<!--      <span class="fw-stat-num">20+</span>-->
<!--      <div class="fw-stat-label">Expert-Led Courses</div>-->
<!--    </div>-->
<!--    <div class="fw-stat-item reveal">-->
<!--      <span class="fw-stat-num">5+</span>-->
<!--      <div class="fw-stat-label">Years of Experience</div>-->
<!--    </div>-->
<!--    <div class="fw-stat-item reveal">-->
<!--      <span class="fw-stat-num">4.8★</span>--> 
<!--      <div class="fw-stat-label">Average Rating</div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->

<!-- ══════════ ABOUT SECTION ══════════ -->
<section class="fw-section" id="about">
  <div class="fw-section-inner">
    <div class="fw-about-grid">
      <div class="fw-about-img-wrap reveal">
        <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=700&auto=format&fit=crop&q=80" alt="Finowings Academy Trading Education" loading="lazy">
        <div class="fw-about-badge-float">
          <span>10L+</span>
          YouTube<br>Subscribers
        </div>
      </div>
      <div class="reveal">
        <div class="fw-section-label">About Finowings</div>
        <h2 class="fw-section-title">Stock Market Training & Financial Education Platform</h2>
        <p style="color:var(--text-muted); font-size:15px; margin-bottom:16px;">Finowings is a modern stock market training platform built to simplify financial education for everyone in India. Our goal is simple—help beginners learn stock market, trading, and investing in an easy, practical, and structured way.</p>
        <p style="color:var(--text-muted); font-size:15px; margin-bottom:24px;">We believe financial knowledge should not be complicated or limited to experts. That's why Finowings focuses on real-world learning, simple explanations, and step-by-step guidance so anyone can start their financial journey with confidence.</p>
        <div class="fw-chips">
          <span class="fw-chip"><i class="fas fa-check-circle"></i>Finowings Academy</span>
          <span class="fw-chip"><i class="fas fa-check-circle"></i>Highly Skilled Instructors</span>
          <span class="fw-chip"><i class="fas fa-check-circle"></i>Learning &amp; Certification</span>
          <span class="fw-chip"><i class="fas fa-check-circle"></i>Live Doubt Sessions</span>
          <span class="fw-chip"><i class="fas fa-check-circle"></i>Quiz &amp; Competitions</span>
          <span class="fw-chip"><i class="fas fa-check-circle"></i>Hindi &amp; English</span>
        </div>
        <a href="/about-finowings/details/" class="fw-btn-primary" style="margin-top:8px;">Read Our Story <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- ══════════ MISSION / VISION / VALUES ══════════ -->
<section class="fw-section" style="background:var(--off-white); padding-top:0;">
  <div class="fw-section-inner">
    <div style="text-align:center;" class="reveal">
      <div class="fw-section-label">Our Foundation</div>
      <h2 class="fw-section-title" style="max-width:520px;margin:0 auto;">Mission, Vision &amp; Values</h2>
      <p class="fw-section-sub" style="margin:12px auto 0;">Everything we do is driven by one purpose — making financial freedom accessible to all Indians.</p>
    </div>
    <div class="fw-mvv-grid">
      <div class="fw-mvv-card reveal">
        <div class="fw-mvv-icon"><i class="fas fa-bullseye"></i></div>
        <h3>Our Mission</h3>
        <p>To make financial education simple, practical, and accessible for every Indian — helping them build confidence in trading and investing decisions without confusion.</p>
      </div>
      <div class="fw-mvv-card reveal">
        <div class="fw-mvv-icon"><i class="fas fa-eye"></i></div>
        <h3>Our Vision</h3>
        <p>A financially aware India where every individual — regardless of background — can take informed financial decisions and achieve true financial independence.</p>
      </div>
      <div class="fw-mvv-card reveal">
        <div class="fw-mvv-icon"><i class="fas fa-heart"></i></div>
        <h3>Our Values</h3>
        <p>Transparency, practical learning, risk discipline, and continuous support. We don't just teach — we stay with you through your entire financial journey.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══════════ WHAT WE DO ══════════ -->
<section class="fw-dark-section">
  <div class="fw-section-inner">
    <div style="text-align:center;" class="reveal">
      <div class="fw-section-label" style="color:var(--gold-light);">What We Offer</div>
      <h2 class="fw-section-title" style="max-width:580px;margin:0 auto;">A Complete Financial Learning Ecosystem</h2>
      <p class="fw-section-sub" style="margin:12px auto 0;">Everything you need to go from a complete beginner to a confident investor — all under one roof.</p>
    </div>
    <div class="fw-courses-grid">
      <div class="fw-course-card reveal">
        <span class="num">01</span>
        <i class="fas fa-chart-line"></i>
        <h4>Stock Market Courses</h4>
        <p>Beginner to advanced structured learning paths covering everything from basics to live trading strategies.</p>
      </div>
      <div class="fw-course-card reveal">
        <span class="num">02</span>
        <i class="fas fa-chart-bar"></i>
        <h4>Technical Analysis</h4>
        <p>Charts, indicators, candlestick patterns, and proven trading strategies used by professionals.</p>
      </div>
      <div class="fw-course-card reveal">
        <span class="num">03</span>
        <i class="fas fa-search-dollar"></i>
        <h4>Fundamental Analysis</h4>
        <p>Evaluate companies, read financial statements, and make confident long-term investment decisions.</p>
      </div>
      <div class="fw-course-card reveal">
        <span class="num">04</span>
        <i class="fas fa-lightbulb"></i>
        <h4>Trading Strategies</h4>
        <p>Practical approaches for intraday, swing, and positional trading built for real Indian market conditions.</p>
      </div>
      <div class="fw-course-card reveal">
        <span class="num">05</span>
        <i class="fas fa-piggy-bank"></i>
        <h4>Financial Literacy</h4>
        <p>Personal finance, budgeting, mutual funds, SIPs, and smart money management for daily life.</p>
      </div>
      <div class="fw-course-card reveal">
        <span class="num">06</span>
        <i class="fas fa-users"></i>
        <h4>Live Mentorship</h4>
        <p>Real-time doubt sessions with expert mentors who guide you through live market scenarios.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══════════ WHY CHOOSE ══════════ -->
<section class="fw-section" style="background:var(--off-white);">
  <div class="fw-section-inner">
    <div class="fw-why-grid">
      <div>
        <div class="fw-section-label reveal">Why Finowings</div>
        <h2 class="fw-section-title reveal">What Makes Us Different?</h2>
        <p class="fw-section-sub reveal">Unlike generic platforms, Finowings focuses on learning that actually works in real markets — not just textbooks.</p>
        <div class="fw-why-list">
          <div class="fw-why-item reveal">
            <div class="fw-why-icon"><i class="fas fa-user-graduate"></i></div>
            <div>
              <h5>Expert-Led Training</h5>
              <p>Learn from experienced market professionals with real trading insights — not just theory.</p>
            </div>
          </div>
          <div class="fw-why-item reveal">
            <div class="fw-why-icon"><i class="fas fa-baby"></i></div>
            <div>
              <h5>Beginner-Friendly Approach</h5>
              <p>Simple language and step-by-step learning paths designed for first-time learners with zero background.</p>
            </div>
          </div>
          <div class="fw-why-item reveal">
            <div class="fw-why-icon"><i class="fas fa-shield-alt"></i></div>
            <div>
              <h5>Focus on Risk Management</h5>
              <p>We teach disciplined trading with strong emphasis on protecting your capital and managing risk.</p>
            </div>
          </div>
          <div class="fw-why-item reveal">
            <div class="fw-why-icon"><i class="fas fa-language"></i></div>
            <div>
              <h5>Hindi &amp; English Content</h5>
              <p>Learn in your comfort language — all courses available in both Hindi and English.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="fw-why-visual reveal">
        <div class="fw-why-quote">Financial knowledge is the greatest investment you can make in yourself.</div>
        <ul class="fw-diff-list">
          <li><i class="fas fa-check"></i> Practical learning over theory</li>
          <li><i class="fas fa-check"></i> Real market examples, not textbook knowledge</li>
          <li><i class="fas fa-check"></i> Risk management at the core</li>
          <li><i class="fas fa-check"></i> Designed specifically for Indian beginners</li>
          <li><i class="fas fa-check"></i> Continuous learning support &amp; guidance</li>
          <li><i class="fas fa-check"></i> Interactive quizzes &amp; competitions</li>
        </ul>
        <div style="margin-top:32px; padding-top:24px; border-top:1px solid rgba(255,255,255,0.1);">
          <p style="font-size:13px;color:rgba(255,255,255,0.45);margin-bottom:12px;">TRUSTED BY STUDENTS ACROSS</p>
          <p style="font-size:1.1rem;color:var(--white);font-weight:600;">🇮🇳 All States of India</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════ TESTIMONIALS ══════════ -->
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
                        <p class="fw-unique-text">"Courses are beginner-friendly, instructors explain concepts clearly, and IPO analysis from Finowings improved my decision-making skills."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Anita+Verma&background=random&color=fff&background=273158" class="fw-unique-avatar" alt="Anita">
                            <div class="fw-unique-user-info">
                                <h5>Anita Verma</h5>
                            </div>
                        </div>
                    </div>

                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"Trader’s Secret Club delivers valuable market insights, updates, and disciplined strategies that helped me control emotions while trading."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Suresh+Pandey&background=random&color=fff&background=cf9c0a" class="fw-unique-avatar" alt="Suresh">
                            <div class="fw-unique-user-info">
                                <h5>Suresh Pandey</h5>
                            </div>
                        </div>
                    </div>

                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"Finowings Academy content feels trustworthy, practical, and well-structured, making complex finance topics easy for Indian beginners."</p>
                        
                    </div>
                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"Finowings simplified stock markets for me. Clear videos, practical examples, and step-by-step guidance made complex concepts easy."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Rahul+Sharma&background=random&color=fff&background=cf9c0a" class="fw-unique-avatar" alt="Rahul">
                            <div class="fw-unique-user-info">
                                <h5>Rahul Sharma</h5>
                            </div>
                        </div>
                    </div>
                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"Learning through Mukul Agrawal app saved time, boosted confidence, and provided clear guidance for long-term wealth creation."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Amit+Kulkarni&background=random&color=fff&background=273158" class="fw-unique-avatar" alt="Amit">
                            <div class="fw-unique-user-info">
                                <h5>Amit Kulkarni</h5>
                            </div>
                        </div>
                    </div>
                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"Finowings helped me understand IPOs, mutual funds, and trading basics without hype, just honest education and support."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Neha+Choudhary&background=random&color=fff&background=cf9c0a" class="fw-unique-avatar" alt="Neha">
                            <div class="fw-unique-user-info">
                                <h5>Neha Choudhary</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

<!-- ══════════ FAQ ══════════ -->
<div class="container-xxl" style="background: #e9f9ff; padding: 40px; border-radius: 15px;">
        <div class="container reveal">
          <br /><br />
          <h3 class="mb-4">Frequently Asked Questions</h3>

          <div class="accordion" id="faqAccordion">

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Can I open demat account without a PAN card?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p>No, you cannot open a Demat account in India without a PAN (Permanent Account Number) card.</p>
                  <p>According to a SEBI circular in 2007, the PAN card is a mandatory document for all financial transactions in the country, including opening a Demat account. It is required for the purpose of tax identification and compliance with regulatory norms.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Why do I need a demat account?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p>You need a Demat account for electronic holding and trading of financial securities, providing a secure and convenient way to buy, sell, and manage investments in the digital format.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Can I add another person to my demat account?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p>Yes, you can add another person to your Demat account. This process is known as "joint holding" or "multiple holders" in a Demat account. However, the procedure might vary slightly among different brokers or depository participants.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Is it mandatory to have a demat account to apply in an IPO?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p>Yes, having a Demat account is mandatory to apply for an Initial Public Offering (IPO) in India. A Demat account is required because IPO shares are issued in electronic form and are credited to the investor's Demat account.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  How much interest do I get on a demat account?
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p>A Demat (Dematerialized) account is primarily used for holding and transacting in securities such as stocks and bonds in electronic form. Unlike a traditional savings account, a Demat account does not typically offer interest on the holdings.</p>
                </div>
              </div>
            </div>

          </div>


        </div>
      </div>

<!-- ══════════ CTA ══════════ -->
<section class="fw-cta-section">
  <div class="fw-section-inner">
    <h2 class="reveal">Start Your Financial Learning Journey Today</h2>
    <p class="reveal">Don't wait to take control of your financial future. Join thousands of Indians already learning with Finowings.</p>
    <div class="fw-cta-btns reveal">
      <a href="/courses/" class="fw-btn-primary"><i class="fas fa-graduation-cap"></i> Join Stock Market Courses</a>
      <a href="/about-finowings/" class="fw-btn-outline">Explore Academy</a>
    </div>
    <div class="fw-disclaimer reveal">
      <strong>Disclaimer:</strong> Finowings provides content strictly for educational purposes and is not registered with SEBI (Securities and Exchange Board of India). We do not provide investment advice. Please consult a qualified financial advisor before making any financial decisions. This website is for educational purposes only and we do not intend to induce clients in any trading activity.
    </div>
  </div>
</section>

<!-- ══════════ FOOTER PLACEHOLDER ══════════ -->
 <?php include("../footer.php"); ?> 

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>

<script>
  // FAQ toggle
  function toggleFaq(btn) {
    const answer = btn.nextElementSibling;
    const isOpen = btn.classList.contains('open');
    // close all
    document.querySelectorAll('.fw-faq-q.open').forEach(b => {
      b.classList.remove('open');
      b.nextElementSibling.classList.remove('open');
    });
    if (!isOpen) {
      btn.classList.add('open');
      answer.classList.add('open');
    }
  }

  // Scroll reveal
  const revealEls = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => entry.target.classList.add('visible'), i * 60);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });
  revealEls.forEach(el => observer.observe(el));
</script>

</body>
</html>    <?php
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>About Finowings Academy | Leading Stock Market Training Institute</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="about finowings, mukul agrawal, stock market academy, financial education, best trading institute" name="keywords">
    <meta content="Learn stock market trading with Finowings Academy. We provide expert-led financial education to help you master investing and take control of your money." name="description">
    <link rel="canonical" href="https://www.finowings.com/about-finowings/" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
        <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/new-css.css" rel="stylesheet">
       <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

<style>
  :root {
    --navy: #0d1b3e;
    --navy-mid: #162040;
    --gold: #e8a200;
    --gold-light: #f5c842;
    --gold-pale: #fdf3d7;
    --white: #ffffff;
    --off-white: #f8f9fc;
    --text: #1a1a2e;
    --text-muted: #6b7280;
    --border: rgba(232,162,0,0.18);
    --card-bg: #ffffff;
    --radius: 16px;
    --shadow: 0 4px 32px rgba(13,27,62,0.10);
    --shadow-lg: 0 12px 56px rgba(13,27,62,0.16);
  }

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  body {
    font-family: 'DM Sans', sans-serif;
    background: var(--off-white);
    color: var(--text);
    overflow-x: hidden;
    line-height: 1.7;
  }

  /* ── HERO ── */
  .fw-hero {
    background: var(--navy);
    position: relative;
    padding: 100px 24px 80px;
    overflow: hidden;
    text-align: center;
  }
  .fw-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(ellipse 60% 60% at 80% 20%, rgba(232,162,0,0.18) 0%, transparent 70%),
      radial-gradient(ellipse 40% 40% at 10% 80%, rgba(232,162,0,0.10) 0%, transparent 70%);
  }
  .fw-hero-badge {
    display: inline-block;
    background: rgba(232,162,0,0.15);
    border: 1px solid var(--gold);
    color: var(--gold-light);
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 6px 20px;
    border-radius: 100px;
    margin-bottom: 24px;
    position: relative;
  }
  .fw-hero h1 {
    font-family: 'DM Serif Display', serif;
    font-size: clamp(2.4rem, 6vw, 4rem);
    color: var(--white);
    line-height: 1.15;
    max-width: 760px;
    margin: 0 auto 20px;
    position: relative;
  }
  .fw-hero h1 span { color: var(--gold); }
  .fw-hero p {
    color: rgba(255,255,255,0.70);
    font-size: 1.1rem;
    max-width: 560px;
    margin: 0 auto 36px;
    position: relative;
  }
  .fw-hero-btns { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; position: relative; }
  .fw-btn-primary {
    background: var(--gold);
    color: var(--navy);
    font-weight: 700;
    padding: 14px 34px;
    border-radius: 100px;
    text-decoration: none;
    font-size: 15px;
    transition: all .25s;
    display: inline-flex; align-items: center; gap: 8px;
  }
  .fw-btn-primary:hover { background: var(--gold-light); transform: translateY(-2px); box-shadow: 0 8px 24px rgba(232,162,0,0.35); }
  .fw-btn-outline {
    background: transparent;
    color: var(--white);
    font-weight: 600;
    padding: 14px 34px;
    border-radius: 100px;
    border: 1.5px solid rgba(255,255,255,0.35);
    text-decoration: none;
    font-size: 15px;
    transition: all .25s;
  }
  .fw-btn-outline:hover { border-color: var(--gold); color: var(--gold); }

  /* ── STATS BAR ── */
  /*.fw-stats {*/
  /*  background: var(--navy-mid);*/
  /*  border-top: 1px solid rgba(232,162,0,0.15);*/
  /*  border-bottom: 1px solid rgba(232,162,0,0.15);*/
  /*  padding: 28px 24px;*/
  /*}*/
  /*.fw-stats-grid {*/
  /*  max-width: 1100px;*/
  /*  margin: 0 auto;*/
  /*  display: grid;*/
  /*  grid-template-columns: repeat(4, 1fr);*/
  /*  gap: 16px;*/
  /*  text-align: center;*/
  /*}*/
  /*.fw-stat-item { padding: 8px; }*/
  /*.fw-stat-num {*/
  /*  font-family: 'DM Serif Display', serif;*/
  /*  font-size: 2rem;*/
  /*  color: var(--gold);*/
  /*  display: block;*/
  /*}*/
  /*.fw-stat-label { font-size: 13px; color: rgba(255,255,255,0.60); margin-top: 2px; }*/

  /* ── SECTION WRAPPER ── */
  .fw-section { padding: 80px 24px; }
  .fw-section-inner { max-width: 1100px; margin: 0 auto; }
  .fw-section-label {
    display: inline-block;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 12px;
  }
  .fw-section-title {
    font-family: 'DM Serif Display', serif;
    font-size: clamp(1.8rem, 4vw, 2.6rem);
    color: var(--text);
    line-height: 1.2;
    margin-bottom: 16px;
  }
  .fw-section-sub {
    color: var(--text-muted);
    font-size: 1.05rem;
    max-width: 600px;
    margin-bottom: 48px;
  }

  /* ── ABOUT BLOCK ── */
  .fw-about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
  }
  .fw-about-img-wrap {
    position: relative;
  }
  .fw-about-img-wrap img {
    width: 100%;
    border-radius: var(--radius);
    box-shadow: var(--shadow-lg);
    display: block;
  }
  .fw-about-badge-float {
    position: absolute;
    bottom: -20px;
    right: -20px;
    background: var(--gold);
    color: var(--navy);
    font-weight: 700;
    font-size: 14px;
    padding: 18px 22px;
    border-radius: 14px;
    box-shadow: 0 8px 32px rgba(232,162,0,0.30);
    text-align: center;
    line-height: 1.3;
  }
  .fw-about-badge-float span { display: block; font-size: 26px; font-family: 'DM Serif Display', serif; }
  .fw-chips { display: flex; flex-wrap: wrap; gap: 10px; margin: 24px 0; }
  .fw-chip {
    display: inline-flex; align-items: center; gap: 7px;
    background: var(--gold-pale);
    color: var(--navy);
    font-size: 13.5px;
    font-weight: 600;
    padding: 7px 16px;
    border-radius: 100px;
    border: 1px solid rgba(232,162,0,0.25);
  }
  .fw-chip i { color: var(--gold); font-size: 12px; }

  /* ── MISSION / VISION CARDS ── */
  .fw-mvv-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    margin-top: 48px;
  }
  .fw-mvv-card {
    background: var(--card-bg);
    border-radius: var(--radius);
    padding: 36px 28px;
    border: 1px solid var(--border);
    box-shadow: var(--shadow);
    position: relative;
    overflow: hidden;
    transition: transform .25s, box-shadow .25s;
  }
  .fw-mvv-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); }
  .fw-mvv-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--gold), var(--gold-light));
  }
  .fw-mvv-icon {
    width: 52px; height: 52px;
    background: var(--gold-pale);
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 20px;
    font-size: 22px;
    color: var(--gold);
  }
  .fw-mvv-card h3 { font-size: 1.15rem; font-weight: 700; color: var(--text); margin-bottom: 10px; }
  .fw-mvv-card p { font-size: 14.5px; color: var(--text-muted); line-height: 1.7; }

  /* ── WHAT WE DO ── */
  .fw-dark-section {
    background: var(--navy);
    padding: 80px 24px;
  }
  .fw-dark-section .fw-section-title { color: var(--white); }
  .fw-dark-section .fw-section-sub { color: rgba(255,255,255,0.6); }
  .fw-courses-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 48px;
  }
  .fw-course-card {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(232,162,0,0.15);
    border-radius: var(--radius);
    padding: 28px 24px;
    transition: all .25s;
    position: relative;
    overflow: hidden;
  }
  .fw-course-card:hover {
    background: rgba(232,162,0,0.08);
    border-color: var(--gold);
    transform: translateY(-4px);
  }
  .fw-course-card .num {
    font-family: 'DM Serif Display', serif;
    font-size: 3rem;
    color: rgba(232,162,0,0.15);
    position: absolute;
    top: 12px; right: 20px;
    line-height: 1;
  }
  .fw-course-card i { font-size: 26px; color: var(--gold); margin-bottom: 14px; display: block; }
  .fw-course-card h4 { font-size: 1rem; font-weight: 700; color: var(--white); margin-bottom: 8px; }
  .fw-course-card p { font-size: 13.5px; color: rgba(255,255,255,0.55); line-height: 1.65; }

  /* ── WHY CHOOSE ── */
  .fw-why-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 52px;
    align-items: center;
  }
  .fw-why-list { display: flex; flex-direction: column; gap: 18px; }
  .fw-why-item {
    display: flex; gap: 16px; align-items: flex-start;
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: 12px;
    padding: 18px 20px;
    transition: box-shadow .2s, border-color .2s;
  }
  .fw-why-item:hover { border-color: var(--gold); box-shadow: 0 4px 20px rgba(232,162,0,0.10); }
  .fw-why-icon {
    width: 42px; height: 42px; min-width: 42px;
    background: var(--gold-pale);
    border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    color: var(--gold);
    font-size: 17px;
  }
  .fw-why-item h5 { font-size: 14.5px; font-weight: 700; color: var(--text); margin-bottom: 3px; }
  .fw-why-item p { font-size: 13.5px; color: var(--text-muted); line-height: 1.6; }
  .fw-why-visual {
    background: var(--navy);
    border-radius: 20px;
    padding: 40px 32px;
    position: relative;
    overflow: hidden;
  }
  .fw-why-visual::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 60% 50% at 80% 10%, rgba(232,162,0,0.18) 0%, transparent 70%);
  }
  .fw-why-quote {
    font-family: 'DM Serif Display', serif;
    font-size: 1.4rem;
    color: var(--white);
    line-height: 1.5;
    position: relative;
    margin-bottom: 28px;
  }
  .fw-why-quote::before {
    content: '"';
    font-size: 5rem;
    color: var(--gold);
    opacity: .3;
    position: absolute;
    top: -24px; left: -10px;
    line-height: 1;
  }
  .fw-diff-list { list-style: none; padding: 0; margin: 0; }
  .fw-diff-list li {
    display: flex; align-items: center; gap: 10px;
    font-size: 13.5px;
    color: rgba(255,255,255,0.75);
    padding: 8px 0;
    border-bottom: 1px solid rgba(255,255,255,0.06);
    position: relative;
  }
  .fw-diff-list li i { color: var(--gold); font-size: 13px; }


  
  /* ── CTA SECTION ── */
  .fw-cta-section {
    background: var(--navy);
    padding: 80px 24px;
    text-align: center;
    position: relative;
    overflow: hidden;
  }
  .fw-cta-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(ellipse 50% 60% at 50% 50%, rgba(232,162,0,0.12) 0%, transparent 70%);
  }
  .fw-cta-section h2 { font-family: 'DM Serif Display', serif; font-size: clamp(1.8rem, 4vw, 2.8rem); color: var(--white); margin-bottom: 14px; position: relative; }
  .fw-cta-section p { color: rgba(255,255,255,0.60); font-size: 1rem; max-width: 520px; margin: 0 auto 36px; position: relative; }
  .fw-cta-btns { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; position: relative; }

  /* ── DISCLAIMER ── */
  .fw-disclaimer {
    background: #fff8e7;
    border-left: 4px solid var(--gold);
    border-radius: 10px;
    padding: 18px 22px;
    margin: 48px auto 0;
    max-width: 900px;
    font-size: 13px;
    color: #7a6000;
    line-height: 1.7;
  }
  .fw-disclaimer strong { color: var(--navy); }

  /* ── RESPONSIVE ── */
  @media (max-width: 991px) {
    .fw-stats-grid { grid-template-columns: repeat(2, 1fr); }
    .fw-about-grid { grid-template-columns: 1fr; gap: 36px; }
    .fw-about-badge-float { right: 10px; bottom: -16px; }
    .fw-mvv-grid { grid-template-columns: 1fr; }
    .fw-courses-grid { grid-template-columns: repeat(2, 1fr); }
    .fw-why-grid { grid-template-columns: 1fr; gap: 36px; }
    .fw-testi-grid { grid-template-columns: 1fr 1fr; }
    .fw-faq-grid { grid-template-columns: 1fr; }
    .fw-faq-visual { position: static; }
  }
  @media (max-width: 640px) {
    .fw-section { padding: 56px 16px; }
    .fw-dark-section { padding: 56px 16px; }
    .fw-testi-section { padding: 56px 16px; }
    .fw-faq-section { padding: 56px 16px; }
    .fw-cta-section { padding: 56px 16px; }
    .fw-stats-grid { grid-template-columns: repeat(2, 1fr); }
    .fw-courses-grid { grid-template-columns: 1fr; }
    .fw-testi-grid { grid-template-columns: 1fr; }
    .fw-mvv-grid { grid-template-columns: 1fr; }
  }

  /* ── ANIMATIONS ── */
  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(28px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .fade-up { animation: fadeUp .65s both; }
  .delay-1 { animation-delay: .1s; }
  .delay-2 { animation-delay: .2s; }
  .delay-3 { animation-delay: .3s; }
  
  /* Reveal Animation Styles */
  .reveal {
    opacity: 0;
    transform: translateY(30px);
    transition: all .8s cubic-bezier(0.23, 1, 0.32, 1);
  }
  .reveal.visible {
    opacity: 1;
    transform: translateY(0);
  }



  /* FAQ Custom Styles from open-demat-account.php */
  .accordion-item {
    border: none;
    margin-bottom: 15px;
    border-radius: 10px !important;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
  }
  .accordion-button {
    color: #273158;
    font-weight: 600;
    background-color: #ffffff;
    border-left: 5px solid #cf9c0a;
    box-shadow: none !important;
  }
  .accordion-button:not(.collapsed) {
    color: #ffffff;
    background-color: #273158;
    border-left: 5px solid #cf9c0a;
  }
  .accordion-button:not(.collapsed)::after {
    filter: brightness(0) invert(1);
  }
  .accordion-button:focus {
    box-shadow: none;
    border-color: rgba(0, 0, 0, .125);
  }
  .accordion-body {
    background-color: #ffffff;
    color: #181d38;
    font-weight: 500;
    border-top: 1px solid #dee2e6;
  }
</style>
</head>
<body>

<!-- NAV PLACEHOLDER (replace with your include) -->
    <!-- Navbar Start -->
    <?php include("../top-navigation.php"); ?>
    <!-- Navbar End -->
<!-- ══════════ HERO ══════════ -->
<section class="fw-hero">
  <div class="fw-hero-badge fade-up">📈 India's #1 Stock Market Training Platform</div>
  <h1 class="fade-up delay-1">Learn, Grow &amp; <span>Master Finance</span> with Finowings Academy</h1>
  <p class="fade-up delay-2">Helping beginners learn trading, investing, and financial management with practical, structured, and jargon-free education.</p>
  <div class="fw-hero-btns fade-up delay-3">
    <a href="/courses/" class="fw-btn-primary"><i class="fas fa-play-circle"></i> Explore Courses</a>
    <a href="#about" class="fw-btn-outline">Learn More</a>
  </div>
</section>

<!-- ══════════ STATS BAR ══════════ -->
<!--<div class="fw-stats">-->
<!--  <div class="fw-stats-grid">-->
<!--    <div class="fw-stat-item reveal">-->
<!--      <span class="fw-stat-num">50K+</span>-->
<!--      <div class="fw-stat-label">Students Enrolled</div>-->
<!--    </div>-->
<!--    <div class="fw-stat-item reveal">-->
<!--      <span class="fw-stat-num">20+</span>-->
<!--      <div class="fw-stat-label">Expert-Led Courses</div>-->
<!--    </div>-->
<!--    <div class="fw-stat-item reveal">-->
<!--      <span class="fw-stat-num">5+</span>-->
<!--      <div class="fw-stat-label">Years of Experience</div>-->
<!--    </div>-->
<!--    <div class="fw-stat-item reveal">-->
<!--      <span class="fw-stat-num">4.8★</span>-->
<!--      <div class="fw-stat-label">Average Rating</div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->

<!-- ══════════ ABOUT SECTION ══════════ -->
<section class="fw-section" id="about">
  <div class="fw-section-inner">
    <div class="fw-about-grid">
      <div class="fw-about-img-wrap reveal">
        <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=700&auto=format&fit=crop&q=80" alt="Finowings Academy Trading Education" loading="lazy">
        <div class="fw-about-badge-float">
          <span>10L+</span>
          YouTube<br>Subscribers
        </div>
      </div>
      <div class="reveal">
        <div class="fw-section-label">About Finowings</div>
        <h2 class="fw-section-title">Stock Market Training & Financial Education Platform</h2>
        <p style="color:var(--text-muted); font-size:15px; margin-bottom:16px;">Finowings is a modern stock market training platform built to simplify financial education for everyone in India. Our goal is simple—help beginners learn stock market, trading, and investing in an easy, practical, and structured way.</p>
        <p style="color:var(--text-muted); font-size:15px; margin-bottom:24px;">We believe financial knowledge should not be complicated or limited to experts. That's why Finowings focuses on real-world learning, simple explanations, and step-by-step guidance so anyone can start their financial journey with confidence.</p>
        <div class="fw-chips">
          <span class="fw-chip"><i class="fas fa-check-circle"></i>Finowings Academy</span>
          <span class="fw-chip"><i class="fas fa-check-circle"></i>Highly Skilled Instructors</span>
          <span class="fw-chip"><i class="fas fa-check-circle"></i>Learning &amp; Certification</span>
          <span class="fw-chip"><i class="fas fa-check-circle"></i>Live Doubt Sessions</span>
          <span class="fw-chip"><i class="fas fa-check-circle"></i>Quiz &amp; Competitions</span>
          <span class="fw-chip"><i class="fas fa-check-circle"></i>Hindi &amp; English</span>
        </div>
        <a href="/about-finowings/details/" class="fw-btn-primary" style="margin-top:8px;">Read Our Story <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- ══════════ MISSION / VISION / VALUES ══════════ -->
<section class="fw-section" style="background:var(--off-white); padding-top:0;">
  <div class="fw-section-inner">
    <div style="text-align:center;" class="reveal">
      <div class="fw-section-label">Our Foundation</div>
      <h2 class="fw-section-title" style="max-width:520px;margin:0 auto;">Mission, Vision &amp; Values</h2>
      <p class="fw-section-sub" style="margin:12px auto 0;">Everything we do is driven by one purpose — making financial freedom accessible to all Indians.</p>
    </div>
    <div class="fw-mvv-grid">
      <div class="fw-mvv-card reveal">
        <div class="fw-mvv-icon"><i class="fas fa-bullseye"></i></div>
        <h3>Our Mission</h3>
        <p>To make financial education simple, practical, and accessible for every Indian — helping them build confidence in trading and investing decisions without confusion.</p>
      </div>
      <div class="fw-mvv-card reveal">
        <div class="fw-mvv-icon"><i class="fas fa-eye"></i></div>
        <h3>Our Vision</h3>
        <p>A financially aware India where every individual — regardless of background — can take informed financial decisions and achieve true financial independence.</p>
      </div>
      <div class="fw-mvv-card reveal">
        <div class="fw-mvv-icon"><i class="fas fa-heart"></i></div>
        <h3>Our Values</h3>
        <p>Transparency, practical learning, risk discipline, and continuous support. We don't just teach — we stay with you through your entire financial journey.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══════════ WHAT WE DO ══════════ -->
<section class="fw-dark-section">
  <div class="fw-section-inner">
    <div style="text-align:center;" class="reveal">
      <div class="fw-section-label" style="color:var(--gold-light);">What We Offer</div>
      <h2 class="fw-section-title" style="max-width:580px;margin:0 auto;">A Complete Financial Learning Ecosystem</h2>
      <p class="fw-section-sub" style="margin:12px auto 0;">Everything you need to go from a complete beginner to a confident investor — all under one roof.</p>
    </div>
    <div class="fw-courses-grid">
      <div class="fw-course-card reveal">
        <span class="num">01</span>
        <i class="fas fa-chart-line"></i>
        <h4>Stock Market Courses</h4>
        <p>Beginner to advanced structured learning paths covering everything from basics to live trading strategies.</p>
      </div>
      <div class="fw-course-card reveal">
        <span class="num">02</span>
        <i class="fas fa-chart-bar"></i>
        <h4>Technical Analysis</h4>
        <p>Charts, indicators, candlestick patterns, and proven trading strategies used by professionals.</p>
      </div>
      <div class="fw-course-card reveal">
        <span class="num">03</span>
        <i class="fas fa-search-dollar"></i>
        <h4>Fundamental Analysis</h4>
        <p>Evaluate companies, read financial statements, and make confident long-term investment decisions.</p>
      </div>
      <div class="fw-course-card reveal">
        <span class="num">04</span>
        <i class="fas fa-lightbulb"></i>
        <h4>Trading Strategies</h4>
        <p>Practical approaches for intraday, swing, and positional trading built for real Indian market conditions.</p>
      </div>
      <div class="fw-course-card reveal">
        <span class="num">05</span>
        <i class="fas fa-piggy-bank"></i>
        <h4>Financial Literacy</h4>
        <p>Personal finance, budgeting, mutual funds, SIPs, and smart money management for daily life.</p>
      </div>
      <div class="fw-course-card reveal">
        <span class="num">06</span>
        <i class="fas fa-users"></i>
        <h4>Live Mentorship</h4>
        <p>Real-time doubt sessions with expert mentors who guide you through live market scenarios.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══════════ WHY CHOOSE ══════════ -->
<section class="fw-section" style="background:var(--off-white);">
  <div class="fw-section-inner">
    <div class="fw-why-grid">
      <div>
        <div class="fw-section-label reveal">Why Finowings</div>
        <h2 class="fw-section-title reveal">What Makes Us Different?</h2>
        <p class="fw-section-sub reveal">Unlike generic platforms, Finowings focuses on learning that actually works in real markets — not just textbooks.</p>
        <div class="fw-why-list">
          <div class="fw-why-item reveal">
            <div class="fw-why-icon"><i class="fas fa-user-graduate"></i></div>
            <div>
              <h5>Expert-Led Training</h5>
              <p>Learn from experienced market professionals with real trading insights — not just theory.</p>
            </div>
          </div>
          <div class="fw-why-item reveal">
            <div class="fw-why-icon"><i class="fas fa-baby"></i></div>
            <div>
              <h5>Beginner-Friendly Approach</h5>
              <p>Simple language and step-by-step learning paths designed for first-time learners with zero background.</p>
            </div>
          </div>
          <div class="fw-why-item reveal">
            <div class="fw-why-icon"><i class="fas fa-shield-alt"></i></div>
            <div>
              <h5>Focus on Risk Management</h5>
              <p>We teach disciplined trading with strong emphasis on protecting your capital and managing risk.</p>
            </div>
          </div>
          <div class="fw-why-item reveal">
            <div class="fw-why-icon"><i class="fas fa-language"></i></div>
            <div>
              <h5>Hindi &amp; English Content</h5>
              <p>Learn in your comfort language — all courses available in both Hindi and English.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="fw-why-visual reveal">
        <div class="fw-why-quote">Financial knowledge is the greatest investment you can make in yourself.</div>
        <ul class="fw-diff-list">
          <li><i class="fas fa-check"></i> Practical learning over theory</li>
          <li><i class="fas fa-check"></i> Real market examples, not textbook knowledge</li>
          <li><i class="fas fa-check"></i> Risk management at the core</li>
          <li><i class="fas fa-check"></i> Designed specifically for Indian beginners</li>
          <li><i class="fas fa-check"></i> Continuous learning support &amp; guidance</li>
          <li><i class="fas fa-check"></i> Interactive quizzes &amp; competitions</li>
        </ul>
        <div style="margin-top:32px; padding-top:24px; border-top:1px solid rgba(255,255,255,0.1);">
          <p style="font-size:13px;color:rgba(255,255,255,0.45);margin-bottom:12px;">TRUSTED BY STUDENTS ACROSS</p>
          <p style="font-size:1.1rem;color:var(--white);font-weight:600;">🇮🇳 All States of India</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════ TESTIMONIALS ══════════ -->
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
                        <p class="fw-unique-text">"Courses are beginner-friendly, instructors explain concepts clearly, and IPO analysis from Finowings improved my decision-making skills."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Anita+Verma&background=random&color=fff&background=273158" class="fw-unique-avatar" alt="Anita">
                            <div class="fw-unique-user-info">
                                <h5>Anita Verma</h5>
                            </div>
                        </div>
                    </div>

                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"Trader’s Secret Club delivers valuable market insights, updates, and disciplined strategies that helped me control emotions while trading."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Suresh+Pandey&background=random&color=fff&background=cf9c0a" class="fw-unique-avatar" alt="Suresh">
                            <div class="fw-unique-user-info">
                                <h5>Suresh Pandey</h5>
                            </div>
                        </div>
                    </div>

                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"Finowings Academy content feels trustworthy, practical, and well-structured, making complex finance topics easy for Indian beginners."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Priya+Malhotra&background=random&color=fff&background=273158" class="fw-unique-avatar" alt="Priya">
                            <div class="fw-unique-user-info">
                                <h5>Priya Malhotra</h5>
                            </div>
                        </div>
                    </div>
                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"Finowings simplified stock markets for me. Clear videos, practical examples, and step-by-step guidance made complex concepts easy."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Rahul+Sharma&background=random&color=fff&background=cf9c0a" class="fw-unique-avatar" alt="Rahul">
                            <div class="fw-unique-user-info">
                                <h5>Rahul Sharma</h5>
                            </div>
                        </div>
                    </div>
                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"Learning through Mukul Agrawal app saved time, boosted confidence, and provided clear guidance for long-term wealth creation."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Amit+Kulkarni&background=random&color=fff&background=273158" class="fw-unique-avatar" alt="Amit">
                            <div class="fw-unique-user-info">
                                <h5>Amit Kulkarni</h5>
                            </div>
                        </div>
                    </div>
                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"Finowings helped me understand IPOs, mutual funds, and trading basics without hype, just honest education and support."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Neha+Choudhary&background=random&color=fff&background=cf9c0a" class="fw-unique-avatar" alt="Neha">
                            <div class="fw-unique-user-info">
                                <h5>Neha Choudhary</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

<!-- ══════════ FAQ ══════════ -->
<div class="container-xxl" style="background: #e9f9ff; padding: 40px; border-radius: 15px;">
        <div class="container reveal">
          <br /><br />
          <h3 class="mb-4">Frequently Asked Questions</h3>

          <div class="accordion" id="faqAccordion">

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Can I open demat account without a PAN card?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p>No, you cannot open a Demat account in India without a PAN (Permanent Account Number) card.</p>
                  <p>According to a SEBI circular in 2007, the PAN card is a mandatory document for all financial transactions in the country, including opening a Demat account. It is required for the purpose of tax identification and compliance with regulatory norms.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Why do I need a demat account?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p>You need a Demat account for electronic holding and trading of financial securities, providing a secure and convenient way to buy, sell, and manage investments in the digital format.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Can I add another person to my demat account?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p>Yes, you can add another person to your Demat account. This process is known as "joint holding" or "multiple holders" in a Demat account. However, the procedure might vary slightly among different brokers or depository participants.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Is it mandatory to have a demat account to apply in an IPO?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p>Yes, having a Demat account is mandatory to apply for an Initial Public Offering (IPO) in India. A Demat account is required because IPO shares are issued in electronic form and are credited to the investor's Demat account.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  How much interest do I get on a demat account?
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p>A Demat (Dematerialized) account is primarily used for holding and transacting in securities such as stocks and bonds in electronic form. Unlike a traditional savings account, a Demat account does not typically offer interest on the holdings.</p>
                </div>
              </div>
            </div>

          </div>


        </div>
      </div>

<!-- ══════════ CTA ══════════ -->
<section class="fw-cta-section">
  <div class="fw-section-inner">
    <h2 class="reveal">Start Your Financial Learning Journey Today</h2>
    <p class="reveal">Don't wait to take control of your financial future. Join thousands of Indians already learning with Finowings.</p>
    <div class="fw-cta-btns reveal">
      <a href="/courses/" class="fw-btn-primary"><i class="fas fa-graduation-cap"></i> Join Stock Market Courses</a>
      <a href="/about-finowings/" class="fw-btn-outline">Explore Academy</a>
    </div>
    <div class="fw-disclaimer reveal">
      <strong>Disclaimer:</strong> Finowings provides content strictly for educational purposes and is not registered with SEBI (Securities and Exchange Board of India). We do not provide investment advice. Please consult a qualified financial advisor before making any financial decisions. This website is for educational purposes only and we do not intend to induce clients in any trading activity.
    </div>
  </div>
</section>

<!-- ══════════ FOOTER PLACEHOLDER ══════════ -->
 <?php include("../footer.php"); ?> 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // FAQ toggle
  function toggleFaq(btn) {
    const answer = btn.nextElementSibling;
    const isOpen = btn.classList.contains('open');
    // close all
    document.querySelectorAll('.fw-faq-q.open').forEach(b => {
      b.classList.remove('open');
      b.nextElementSibling.classList.remove('open');
    });
    if (!isOpen) {
      btn.classList.add('open');
      answer.classList.add('open');
    }
  }

  // Scroll reveal
  const revealEls = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => entry.target.classList.add('visible'), i * 60);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });
  revealEls.forEach(el => observer.observe(el));
</script>

</body>
</html>