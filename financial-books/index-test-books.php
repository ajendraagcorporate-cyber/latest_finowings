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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Struggling with technical analysis? Discover the simplest book on Finowings to learn chart reading and trading strategies step-by-step.">
<link rel="canonical" href="https://www.finowings.com/financial-books/">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Nunito:wght@600;700;800&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/new-css.css" rel="stylesheet">
<style>
*{box-sizing:border-box;margin:0;padding:0}
  :root{
  --navy:#273158;
  --gold:#cf9c0a;
  --gold-light:#f5d06e;
  --navy-light:#3a4a7a;
  --text:#2d2d2d;
  --muted:#6c757d;
  --light:#f4f6fb;
  --bg:#f4f6fb;
  --white:#fff;
  --card-shadow:0 4px 18px rgba(39,49,88,0.10);
  --radius:14px;
  
  /* Aliases for compatibility */
  --fw-navy: var(--navy);
  --fw-blue: #3a5298;
  --fw-gold: var(--gold);
  --fw-gold-hover: #ffce3a;
  --fw-bg-light: var(--light);
  --fw-text-muted: var(--muted);
  --fw-text-dark: var(--navy);
}
body{font-family:'DM Sans',sans-serif;color:var(--text);background:var(--bg);line-height:1.6}
h1, h2, .playfair { font-family: 'Playfair Display', serif; }
h3, h4, h5, h6, .nunito { font-family: 'Nunito', sans-serif; }
a{text-decoration:none;color:inherit}

/* ── HERO BANNER ── */
.hero-banner{
  position:relative;width:100%;overflow:hidden;
  background:linear-gradient(135deg,var(--navy) 60%,#1a2244 100%);
  padding:56px 24px 48px;text-align:center;color:var(--white);
}
.hero-banner::before{
  content:'';position:absolute;top:-60px;right:-60px;
  width:320px;height:320px;border-radius:50%;
  background:rgba(207,156,10,0.10);
}
.hero-badge{
  display:inline-block;background:rgba(207,156,10,0.18);
  color:var(--gold-light);font-size:12px;font-weight:700;
  letter-spacing:1.5px;text-transform:uppercase;
  padding:6px 18px;border-radius:30px;margin-bottom:16px;
  border:1px solid rgba(207,156,10,0.35);
}
.hero-banner h1{
  font-family:'Nunito',sans-serif;font-size:clamp(24px,5vw,42px);
  font-weight:800;line-height:1.2;margin-bottom:14px;
  color: #fff;
}
.hero-banner h1 span{color:var(--gold)}
.hero-banner p{
  max-width:560px;margin:0 auto 28px;
  font-size:clamp(14px,2.5vw,17px);opacity:.88;
}
.hero-btns{display:flex;gap:14px;justify-content:center;flex-wrap:wrap}
.btn-primary-hero{
  background:var(--gold);color:var(--navy);
  font-weight:700;font-size:15px;padding:13px 30px;
  border-radius:50px;border:none;cursor:pointer;
  transition:transform .18s,box-shadow .18s;
  box-shadow:0 4px 16px rgba(207,156,10,0.35);
}
.btn-primary-hero:hover{transform:translateY(-2px);color:var(--navy)}
.btn-outline-hero{
  background:transparent;color:var(--white);
  font-weight:600;font-size:15px;padding:12px 28px;
  border-radius:50px;border:2px solid rgba(255,255,255,0.45);cursor:pointer;
  transition:background .18s,border-color .18s;
}
.btn-outline-hero:hover{background:rgba(255,255,255,0.12);border-color:#fff}

/* ── STATS BAR ── */
.stats-section {
    background:var(--white);border-bottom:1px solid #e8eaf0;
}
/*.stats-bar{*/
/*  background:var(--white);border-bottom:1px solid #e8eaf0;*/
/*  display:flex;justify-content:center;flex-wrap:wrap;gap:0;*/
/*}*/
/*.stat-item{*/
/*  padding:18px 32px;text-align:center;*/
/*  border-right:1px solid #e8eaf0;flex:1;min-width:140px;max-width:220px;*/
/*}*/
/*.stat-item:last-child{border-right:none}*/
/*.stat-num{font-size:22px;font-weight:800;color:var(--navy);font-family:'Nunito',sans-serif}*/
/*.stat-lbl{font-size:12px;color:var(--muted);margin-top:2px}*/

/* ── FEATURED BOOK ── */
.section{padding:52px 20px}
.section-inner{max-width:1100px;margin:0 auto}
.section-label{
  font-size:12px;font-weight:700;letter-spacing:1.5px;
  text-transform:uppercase;color:var(--gold);margin-bottom:8px;
}
.section-title{
  font-family:'Nunito',sans-serif;font-size:clamp(22px,4vw,34px);
  font-weight:800;color:var(--navy);margin-bottom:8px;line-height:1.25;
}
.section-sub{color:var(--muted);font-size:15px;max-width:540px}

.featured-wrap{
  display:grid;grid-template-columns:1fr 1.6fr;
  gap:40px;align-items:center;margin-top:36px;
  background:var(--white);border-radius:20px;
  box-shadow:var(--card-shadow);overflow:hidden;
}
.featured-img-side{
  /*background:linear-gradient(135deg,var(--navy) 0%,#1a2244 100%);*/
  display:flex;align-items:center;justify-content:center;
  padding:36px 24px;min-height:320px;
}
.featured-img-side img{
  max-width:180px;width:100%;border-radius:10px;
  box-shadow:0 12px 36px rgba(0,0,0,0.4);
  transform:rotate(-3deg);transition:transform .3s;
}
.featured-img-side:hover img{transform:rotate(0deg) scale(1.04)}
.featured-content{padding:36px 36px 36px 0}
.featured-tag{
  display:inline-block;background:#e8f0fb;color:var(--navy);
  font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:1px;
  padding:5px 14px;border-radius:20px;margin-bottom:14px;
}
.featured-content h2{
  font-family:'Nunito',sans-serif;font-size:clamp(20px,3vw,28px);
  font-weight:800;color:var(--navy);margin-bottom:12px;line-height:1.25;
}
.featured-content p{color:var(--muted);font-size:14.5px;margin-bottom:20px;line-height:1.7}
.pill-list{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:24px}
.pill{
  background:#f0f3fb;color:var(--navy-light);
  font-size:12.5px;font-weight:600;padding:6px 14px;
  border-radius:20px;border:1px solid #dde2f0;
}
.btn-buy{
  display:inline-block;background:var(--gold);color:var(--navy);
  font-weight:700;font-size:14px;padding:12px 28px;
  border-radius:50px;transition:transform .18s,box-shadow .18s;
  box-shadow:0 4px 14px rgba(207,156,10,0.35);
}
.btn-buy:hover{transform:translateY(-2px);box-shadow:0 8px 24px; color:var(--navy)}

/* ── WHY SECTION ── */
.why-section{background:var(--navy);padding:52px 20px}
.why-grid{
  max-width:1100px;margin:0 auto;
  display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:24px;margin-top:36px;
}
.why-card{
  background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12);
  border-radius:var(--radius);padding:28px 24px;color:var(--white);
  transition:background .2s,transform .2s;
}
.why-card:hover{background:rgba(255,255,255,0.12);transform:translateY(-3px)}
.why-icon{
  width:46px;height:46px;background:rgba(207,156,10,0.2);
  border-radius:12px;display:flex;align-items:center;justify-content:center;
  font-size:20px;margin-bottom:16px;color:var(--gold);
}
.why-card h3{font-size:15px;font-weight:700;margin-bottom:8px;color:var(--white)}
.why-card p{font-size:13.5px;opacity:.75;line-height:1.6}

/* ── FILTER BAR ── */
.filter-section{background:var(--white);padding:32px 20px;border-bottom:1px solid #e8eaf0;position:sticky;top:0;z-index:99}
.filter-inner{max-width:1100px;margin:0 auto}
.filter-label{font-size:12px;color:var(--muted);font-weight:600;margin-bottom:10px;text-transform:uppercase;letter-spacing:1px}
.filter-tabs{display:flex;gap:8px;flex-wrap:wrap}
.ftab{
  background:#f0f3fb;color:var(--navy);
  font-size:13px;font-weight:600;padding:8px 18px;
  border-radius:50px;border:1.5px solid transparent;
  cursor:pointer;transition:all .18s;white-space:nowrap;
}
.ftab:hover{border-color:var(--navy);background:#e4e8f5}
.ftab.active{background:var(--navy);color:var(--white);border-color:var(--navy)}

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

/* ── BOOKS GRID ── */
.books-section{padding:40px 20px 60px}
.books-inner{max-width:1100px;margin:0 auto}
.books-count{font-size:13px;color:var(--muted);margin-bottom:20px}
.books-count span{color:var(--navy);font-weight:700}
.books-grid{
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(160px,1fr));
  gap:22px;
}
.book-card{
  background:var(--white);border-radius:var(--radius);
  box-shadow:var(--card-shadow);overflow:hidden;
  transition:transform .22s,box-shadow .22s;
  display:flex;flex-direction:column;
}
.book-card:hover{transform:translateY(-6px);box-shadow:0 12px 32px rgba(39,49,88,0.18)}
.book-card.hidden{display:none}
.book-img-wrap{
  width:100%;aspect-ratio:2/3;background:#eef0f8;
  overflow:hidden;position:relative;
}
.book-img-wrap img{
  width:100%;height:100%;object-fit:cover;
  transition:transform .3s;
}
.book-card:hover .book-img-wrap img{transform:scale(1.05)}
.lang-badge{
  position:absolute;top:8px;right:8px;
  font-size:10px;font-weight:700;padding:3px 8px;border-radius:10px;
  text-transform:uppercase;letter-spacing:.5px;
}
.lang-en{background:#e8f5e9;color:#2e7d32}
.lang-hi{background:#fff3e0;color:#e65100}
.lang-mr{background:#f3e5f5;color:#6a1b9a}
.book-body{padding:14px 12px;flex:1;display:flex;flex-direction:column}
.book-title{
  font-size:13px;font-weight:700;color:var(--navy);
  line-height:1.35;margin-bottom:10px;flex:1;
}
.book-cat-tag{
  font-size:10.5px;font-weight:600;color:var(--muted);
  text-transform:uppercase;letter-spacing:.6px;margin-bottom:6px;
}
.btn-book-buy{
  display:block;text-align:center;
  background:var(--navy);color:var(--white);
  font-size:12.5px;font-weight:700;padding:9px;
  border-radius:50px;transition:background .18s,transform .15s;
  margin-top:auto;
}
.btn-book-buy:hover{background:var(--gold);color:var(--navy);transform:scale(1.04)}

/* ── HOW TO START ── */
.steps-section{background:var(--white);padding:52px 20px}
.steps-inner{max-width:1100px;margin:0 auto}
.steps-grid{
  display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:24px;margin-top:36px;
}
.step-card{
  border-radius:var(--radius);padding:28px 24px;
  background:var(--bg);border:1px solid #e4e8f0;
  position:relative;
}
.step-num{
  width:40px;height:40px;background:var(--navy);color:var(--white);
  border-radius:50%;display:flex;align-items:center;justify-content:center;
  font-weight:800;font-size:16px;font-family:'Nunito',sans-serif;
  margin-bottom:16px;
}
.step-card h3{font-size:15.5px;font-weight:700;color:var(--navy);margin-bottom:8px}
.step-card p{font-size:13.5px;color:var(--muted);line-height:1.6}


/* ── NO RESULTS ── */
.no-results{
  grid-column:1/-1;text-align:center;padding:60px 20px;
  color:var(--muted);font-size:15px;
}

/* ── RESPONSIVE ── */
@media(max-width:768px){
  .featured-wrap{grid-template-columns:1fr}
  .featured-img-side{min-height:200px;padding:24px}
  .featured-img-side img{max-width:130px}
  .featured-content{padding:24px}
  .stat-item{padding:14px 18px;min-width:100px}
  .stat-num{font-size:18px}
  .books-grid{grid-template-columns:repeat(auto-fill,minmax(140px,1fr));gap:14px}
  .filter-section{position:relative}
}
@media(max-width:480px){
  .books-grid{grid-template-columns:repeat(2,1fr);gap:12px}
  .hero-banner{padding:40px 16px 36px}
  .section{padding:36px 16px}
}
</style>
 <style>
 
 .fw-unique-section{
     background-color: #f0f3fb !important;
 }
 
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
      <!-- Navbar Start -->

  <?php include("../top-navigation.php"); ?>
  <!-- Navbar End -->


<!-- ══ HERO BANNER ══ -->

<div class="container-fluid page-header" onclick="window.open('https://amzn.to/3g2fMuV', '_blank');" style="cursor: pointer;">
    <img src="../admin/media/mukul-agrawal-books.webp" alt="Mukul Agrawal Books - Desktop Banner" class="banner-img-desktop" loading="eager">
    <img src="../admin/media/mukul-agrawal-books_mobile.webp" alt="Mukul Agrawal Books - Mobile Banner" class="banner-img-mobile" loading="eager">
  </div>
  
<!--<section class="hero-banner">-->
<!--  <div class="hero-badge">Finowings Academy</div>-->
<!--  <h1>Learn Stock Market with<br><span>Finowings Financial Books</span></h1>-->
<!--  <p>From beginner basics to advanced trading strategies — handpicked books to guide your financial journey.</p>-->
<!--  <div class="hero-btns">-->
<!--    <a href="#books" class="btn-primary-hero">Explore All Books</a>-->
<!--    <a href="https://courses.finowings.com/stock-market-courses" target="_blank" class="btn-outline-hero">Join a Course</a>-->
<!--  </div>-->
<!--</section>-->

<!-- ══ STATS BAR ══ -->
 <!-- Code with Ajendra: Section 4 - Social Media Counter Start -->
    <section class="stats-section py-5">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card wow fadeInUp" data-wow-delay="0.1s">
                    <div class="stat-icon">
                        <svg viewBox="0 0 576 512" fill="currentColor">
                            <path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 42.3 48.3 48.6 42.6 11.5 213.4 11.5 213.4 11.5s170.8 0 213.4-11.5c23.5-6.3 42-24.9 48.3-48.6 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                        </svg>
                    </div>
                    <div class="stat-content">
                        <h3 class="stat-number">1.75 M+</h3>
                        <p class="stat-label">Youtube Subscribers</p>
                    </div>
                </div>

                <div class="stat-card wow fadeInUp" data-wow-delay="0.3s">
                    <div class="stat-icon">
                        <svg viewBox="0 0 640 512" fill="currentColor">
                            <path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8-4.7 9.6-7.5 19.8-7.5 31.2 0 35.3 28.7 64 64 64h61.8c35.3 0 64-28.7 64-64 0-11.4-2.9-21.6-7.5-31.2-11.5-23.1-22.3-52.5-22.3-80.8v-25.1c0-34.2 11.6-67.1 31.7-93.5l100.2 36.1c8.1 2.7 16 4.1 23.7 4.1s15.6-1.4 23.7-4.1l280.3-101c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM87.4 341.3c2.9 5.8 5.7 12 7.7 18.7H48.9c2-6.7 4.8-12.9 7.7-18.7 10.2-20.7 23-45.7 26.9-65.3 3.8 19.6 16.6 44.6 26.9 65.3zM512 512c-35.3 0-64-28.7-64-64 0-35.3 28.7-64 64-64s64 28.7 64 64-28.7 64-64 64zM119.3 209.6l172.9 62.3c26.9 9.7 56.4 9.1 82.8-1.7l142.3-58.4c-13-10.3-27.2-19.5-42.3-26.7-19.7-9.4-40.8-16.7-62.6-21.6-25.1 24.3-59.5 39.5-97.4 39.5s-72.3-15.2-97.4-39.5c-35.1 7.9-67.9 22.3-98.3 46.1z" />
                        </svg>
                    </div>
                    <div class="stat-content">
                        <h3 class="stat-number">20+</h3>
                        <p class="stat-label">Specialized Courses</p>
                    </div>
                </div>

                <div class="stat-card wow fadeInUp" data-wow-delay="0.5s">
                    <div class="stat-icon">
                        <svg viewBox="0 0 640 512" fill="currentColor">
                            <path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 292.8A80 80 0 1 1 160 292.8a80 80 0 1 1 -160 0zM256 208a80 80 0 1 1 0 160A80 80 0 1 1 256 208zM640 292.8a80 80 0 1 1 -160 0 80 80 0 1 1 160 0zM96 320c-17.7 0-32 14.3-32 32c0 20.2 11.2 38.3 28.3 47.9c14.2 8 31 12.1 47.7 12.1H212c16.7 0 33.5-4.1 47.7-12.1c17.1-9.6 28.3-27.7 28.3-47.9c0-17.7-14.3-32-32-32H96zM48 184c-11.4-15.9-4.3-38.1 13.6-43.5c11.7-3.5 23.9-5.4 36.4-5.4l5.8 0c8.8 19.3 22.1 36.1 38.6 48.9H48zM578.4 140.5c17.9 5.3 25 27.6 13.6 43.5H497.6c16.5-12.8 29.8-29.6 38.6-48.9l5.8 0c12.5 0 24.7 1.9 36.4 5.4zM320 320h64c16.2 0 31.8 4.2 45.4 11.6c18 9.9 29.6 29 29.6 50.1c0 29.4-23.2 53.6-52.6 54.2L320 440c-2.4 0-4.7 0-7 .1V320zM312 320v119.9c-2.3-.1-4.6-.1-7-.1l-86.4-4.1c-29.4-.6-52.6-24.8-52.6-54.2c0-21.1 11.6-40.2 29.6-50.1C208.2 324.2 223.8 320 240 320h72z" />
                        </svg>
                    </div>
                    <div class="stat-content">
                        <h3 class="stat-number">50 K+</h3>
                        <p class="stat-label">Finowings Students</p>
                    </div>
                </div>

                <div class="stat-card wow fadeInUp" data-wow-delay="0.7s">
                    <div class="stat-icon">
                        <svg viewBox="0 0 576 512" fill="currentColor">
                            <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                        </svg>
                    </div>
                    <div class="stat-content">
                        <h3 class="stat-number">4.5</h3>
                        <p class="stat-label">App Rating</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Code with Ajendra: Section 4 - Social Media Counter End -->
<!-- ══ STATS BAR ══ -->
<!--<div class="stats-bar">-->
<!--  <div class="stat-item">-->
<!--    <div class="stat-num">27+</div>-->
<!--    <div class="stat-lbl">Books Available</div>-->
<!--  </div>-->
<!--  <div class="stat-item">-->
<!--    <div class="stat-num">1000+</div>-->
<!--    <div class="stat-lbl">Learners Trusted</div>-->
<!--  </div>-->
<!--  <div class="stat-item">-->
<!--    <div class="stat-num">Hindi &amp; English</div>-->
<!--    <div class="stat-lbl">Languages Covered</div>-->
<!--  </div>-->
<!--  <div class="stat-item">-->
<!--    <div class="stat-num">18 Yrs</div>-->
<!--    <div class="stat-lbl">Trainer Experience</div>-->
<!--  </div>-->
<!--</div>-->

<!-- ══ FEATURED BOOK ══ -->
<section class="section" style="background:var(--bg)">
  <div class="section-inner">
    <div class="section-label">Featured Book</div>
    <h1 class="section-title">The Simplest Book for Technical Analysis</h1>
    <div class="section-sub">By Mukul Agrawal — Founder, Finowings Training &amp; Academy Pvt Ltd</div>
    <div class="featured-wrap">
      <div class="featured-img-side">
        <img src="https://www.finowings.com/financial-books/books/technical-analysis-book.jpg" alt="The Simplest Book for Technical Analysis - English">
      </div>
      <div class="featured-content">
        <div class="featured-tag">Bestseller · Technical Analysis</div>
        <h2>Master Charts &amp; Trading<br>the Simplest Way</h2>
        <p>Written from 18 years of real market experience, this book guides you through technical analysis — entry/exit timing, stop losses, position sizing, trading journals, and risk management. Written for absolute beginners but valuable for experienced traders too.</p>
        <div class="pill-list">
          <span class="pill">Beginner Friendly</span>
          <span class="pill">Step-by-step Charts</span>
          <span class="pill">Risk Management</span>
          <span class="pill">Real Strategies</span>
        </div>
        <a href="https://amzn.to/3g2fMuV" target="_blank" class="btn-buy">Buy Now on Amazon &rarr;</a>
      </div>
    </div>
  </div>
</section>

<!-- ══ WHY FINOWINGS ══ -->
<section class="why-section">
  <div style="max-width:1100px;margin:0 auto;text-align:center">
    <div class="section-label" style="color:var(--gold)">Why Finowings</div>
    <div class="section-title" style="color:#fff">Why Learn from Finowings Book Collection?</div>
  </div>
  <div class="why-grid">
    <div class="why-card">
      <div class="why-icon"><i class="fas fa-check-circle"></i></div>
      <h3>Handpicked by Experts</h3>
      <p>Carefully selected books recommended by experts for effective stock market learning.</p>
    </div>
    <div class="why-card">
      <div class="why-icon"><i class="fas fa-layer-group"></i></div>
      <h3>Beginner to Advanced</h3>
      <p>Covers all levels, from basic concepts to advanced trading strategies.</p>
    </div>
    <div class="why-card">
      <div class="why-icon"><i class="fas fa-chart-line"></i></div>
      <h3>Real Market Strategies</h3>
      <p>Includes practical strategies used by traders in real market conditions.</p>
    </div>
    <div class="why-card">
      <div class="why-icon"><i class="fas fa-language"></i></div>
      <h3>Hindi &amp; English</h3>
      <p>Learn comfortably with books available in both Hindi and English languages.</p>
    </div>
  </div>
</section>

<!-- ══ FILTER + BOOKS ══ -->
<div class="filter-section" id="books">
  <div class="filter-inner">
    <div class="filter-label">Filter by Category</div>
    <div class="filter-tabs" id="filterTabs">
      <button class="ftab active" data-cat="all">All Books</button>
      <button class="ftab" data-cat="technical">Technical Analysis</button>
      <button class="ftab" data-cat="basics">Stock Market Basics</button>
      <button class="ftab" data-cat="investing">Investing &amp; Wealth</button>
      <button class="ftab" data-cat="psychology">Psychology &amp; Mindset</button>
      <button class="ftab" data-cat="hindi">Hindi Books</button>
    </div>
  </div>
</div>

<section class="books-section">
  <div class="books-inner">
    <div class="books-count" id="booksCount">Showing <span id="countNum">27</span> books</div>
    <div class="books-grid" id="booksGrid">

      <!-- TECHNICAL ANALYSIS BOOKS -->
      <div class="book-card" data-cat="technical">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/technical-analysis-book.jpg" alt="The Simplest Book for Technical Analysis English" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Technical Analysis</div>
          <div class="book-title">The Simplest Book for Technical Analysis</div>
          <a href="https://amzn.to/3g2fMuV" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="technical hindi">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/the-simplest-book-for-techical-analysis-hindi.jpg" alt="The Simplest Book for Technical Analysis Hindi" loading="lazy">
          <span class="lang-badge lang-hi">HI</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Technical Analysis</div>
          <div class="book-title">The Simplest Book for Technical Analysis (Hindi)</div>
          <a href="https://amzn.to/4usnws4" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="technical">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/the-simplest-book-for-techical-analysis-marathi.jpg" alt="The Simplest Book for Technical Analysis Marathi" loading="lazy">
          <span class="lang-badge lang-mr">MR</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Technical Analysis</div>
          <div class="book-title">The Simplest Book for Technical Analysis (Marathi)</div>
          <a href="https://amzn.to/48Im2xP" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="technical">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/technical-analysis-of-stock-trends.jpg" alt="Technical Analysis of Stock Trends" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Technical Analysis</div>
          <div class="book-title">Technical Analysis of Stock Trends</div>
          <a href="https://amzn.to/3VUZCGR" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <!-- STOCK MARKET BASICS -->
      <div class="book-card" data-cat="basics">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/stock-market-beginner-guide-book.jpg" alt="Stock Market Beginner Guide" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Stock Market Basics</div>
          <div class="book-title">A Beginner's Guide to the Stock Market</div>
          <a href="https://amzn.to/3wpXfRn" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="basics">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/beginer-guide-to-stock-market.jpg" alt="Beginner Guide to Stock Market" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Stock Market Basics</div>
          <div class="book-title">Beginner Guide to Stock Market</div>
          <a href="https://amzn.to/3STTPhD" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="basics">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/stock-market-terminology.jpg" alt="Stock Market Terminology" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Stock Market Basics</div>
          <div class="book-title">Stock Market Terminology</div>
          <a href="https://amzn.to/3IdJoQM" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="basics">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/stock-market-investing.jpg" alt="Stock Market Investing" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Stock Market Basics</div>
          <div class="book-title">Stock Market Investing for Beginners</div>
          <a href="https://amzn.to/48sXTLi" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="basics">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/stock-market-genius.jpg" alt="You Can Be a Stock Market Genius" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Stock Market Basics</div>
          <div class="book-title">You Can Be a Stock Market Genius</div>
          <a href="https://amzn.to/4lm8RdD" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="basics">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/option-future-trading.jpg" alt="Options Futures and Other Derivatives" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Stock Market Basics</div>
          <div class="book-title">Options, Futures &amp; Other Derivatives</div>
          <a href="https://amzn.to/3uClLOX" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="basics">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/fundamentals-of-future-and-options.jpg" alt="Fundamentals of Futures and Options" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Stock Market Basics</div>
          <div class="book-title">Fundamentals of Futures &amp; Options</div>
          <a href="https://amzn.to/42TZj04" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="basics">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/mind-over-markets.jpg" alt="Mind Over Markets" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Stock Market Basics</div>
          <div class="book-title">Mind Over Markets</div>
          <a href="https://amzn.to/49JOCzr" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="basics">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/the-naked-trader.jpg" alt="The Naked Trader" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Stock Market Basics</div>
          <div class="book-title">The Naked Trader</div>
          <a href="https://amzn.to/3voGhTg" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <!-- INVESTING & WEALTH -->
      <div class="book-card" data-cat="investing">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/money-and-you.png" alt="Money and You" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Investing &amp; Wealth</div>
          <div class="book-title">Money &amp; You</div>
          <a href="https://amzn.to/4rndvcI" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="investing hindi">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/money-and-you-hindi.jpg" alt="Money and You Hindi" loading="lazy">
          <span class="lang-badge lang-hi">HI</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Investing &amp; Wealth</div>
          <div class="book-title">Money &amp; You (Hindi)</div>
          <a href="https://amzn.to/4rlcdPD" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="investing">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/the-intelligent-investor.jpg" alt="The Intelligent Investor" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Investing &amp; Wealth</div>
          <div class="book-title">The Intelligent Investor</div>
          <a href="https://amzn.to/42wXsxH" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="investing hindi">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/the-intelligent-investor-hindi.jpg" alt="The Intelligent Investor Hindi" loading="lazy">
          <span class="lang-badge lang-hi">HI</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Investing &amp; Wealth</div>
          <div class="book-title">The Intelligent Investor (Hindi)</div>
          <a href="https://amzn.to/3Idewjo" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="investing">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/rich-dad-poor-dad.jpg" alt="Rich Dad Poor Dad" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Investing &amp; Wealth</div>
          <div class="book-title">Rich Dad Poor Dad</div>
          <a href="https://amzn.to/3Z8Ofcf" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="investing hindi">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/rich-dad-poor-dad-hindi.jpg" alt="Rich Dad Poor Dad Hindi" loading="lazy">
          <span class="lang-badge lang-hi">HI</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Investing &amp; Wealth</div>
          <div class="book-title">Rich Dad Poor Dad (Hindi)</div>
          <a href="https://amzn.to/40sccfK" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="investing">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/the-dhandho-investor.jpg" alt="The Dhandho Investor" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Investing &amp; Wealth</div>
          <div class="book-title">The Dhandho Investor</div>
          <a href="https://amzn.to/3ZmqGNj" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="investing">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/Common-Stocks-and-Uncommon-Profits.jpg" alt="Common Stocks and Uncommon Profits" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Investing &amp; Wealth</div>
          <div class="book-title">Common Stocks &amp; Uncommon Profits</div>
          <a href="https://amzn.to/3FKaK0i" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="investing">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/one-up-in-wall-street.jpg" alt="One Up On Wall Street" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Investing &amp; Wealth</div>
          <div class="book-title">One Up On Wall Street</div>
          <a href="https://amzn.to/3LGUSza" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="investing hindi">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/one-up-in-wall-street-hindi.jpg" alt="One Up On Wall Street Hindi" loading="lazy">
          <span class="lang-badge lang-hi">HI</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Investing &amp; Wealth</div>
          <div class="book-title">One Up On Wall Street (Hindi)</div>
          <a href="https://amzn.to/48vekXE" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="investing">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/the-warren-buffet-way.jpg" alt="The Warren Buffett Way" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Investing &amp; Wealth</div>
          <div class="book-title">The Warren Buffett Way</div>
          <a href="https://amzn.to/3Z5q91V" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="investing">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/warren-buffet-stock-portfolio.jpg" alt="Warren Buffett Stock Portfolio" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Investing &amp; Wealth</div>
          <div class="book-title">Warren Buffett Stock Portfolio</div>
          <a href="https://amzn.to/3IesK3H" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="investing hindi">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/warren-buffet-100-lessons-hindi.jpg" alt="Warren Buffett 100 Lessons Hindi" loading="lazy">
          <span class="lang-badge lang-hi">HI</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Investing &amp; Wealth</div>
          <div class="book-title">Warren Buffett: 100 Lessons (Hindi)</div>
          <a href="https://amzn.to/4bJ2L1X" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="investing">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/how-to-make-money-stocks.jpg" alt="How to Make Money in Stocks" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Investing &amp; Wealth</div>
          <div class="book-title">How to Make Money in Stocks</div>
          <a href="https://amzn.to/3SSI36P" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="investing">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/the-lifestyle-investor.jpg" alt="The Lifestyle Investor" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Investing &amp; Wealth</div>
          <div class="book-title">The Lifestyle Investor</div>
          <a href="https://amzn.to/3wpIxKh" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="investing">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/the-midas-touch.jpg" alt="The Midas Touch" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Investing &amp; Wealth</div>
          <div class="book-title">The Midas Touch</div>
          <a href="https://amzn.to/3I9CbkX" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <!-- PSYCHOLOGY & MINDSET -->
      <div class="book-card" data-cat="psychology">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/The-Psychology-of-Money.jpg" alt="The Psychology of Money" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Psychology &amp; Mindset</div>
          <div class="book-title">The Psychology of Money</div>
          <a href="https://amzn.to/49tuamQ" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="psychology hindi">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/The-Psychology-of-Money-hindi.jpg" alt="The Psychology of Money Hindi" loading="lazy">
          <span class="lang-badge lang-hi">HI</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Psychology &amp; Mindset</div>
          <div class="book-title">The Psychology of Money (Hindi)</div>
          <a href="https://amzn.to/3OX7d37" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

      <div class="book-card" data-cat="psychology">
        <div class="book-img-wrap">
          <img src="https://www.finowings.com/financial-books/books/think-and-grow-rich.jpg" alt="Think and Grow Rich" loading="lazy">
          <span class="lang-badge lang-en">EN</span>
        </div>
        <div class="book-body">
          <div class="book-cat-tag">Psychology &amp; Mindset</div>
          <div class="book-title">Think and Grow Rich</div>
          <a href="https://amzn.to/49KjboW" target="_blank" class="btn-book-buy">Buy Now</a>
        </div>
      </div>

    </div>
    <div class="no-results" id="noResults" style="display:none">No books found in this category.</div>
  </div>
</section>


<!-- ══ CTA ══ -->
<!--<section class="cta-section">-->
<!--  <h2>Start Your Stock Market<br>Learning Journey Today</h2>-->
<!--  <p>Join 1000+ learners who trusted Finowings to guide their financial education.</p>-->
<!--  <div class="cta-btns">-->
<!--    <a href="#books" class="btn-primary-hero">Explore All Books</a>-->
<!--    <a href="https://courses.finowings.com/stock-market-courses" target="_blank" class="btn-outline-hero">Join a Course</a>-->
<!--  </div>-->
<!--</section>-->
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
<!-- ══ HOW TO START ══ -->
<!--<section class="steps-section">-->
<!--  <div class="steps-inner">-->
<!--    <div style="text-align:center;margin-bottom:8px">-->
<!--      <div class="section-label">Learning Path</div>-->
<!--      <div class="section-title">How to Start Learning Stock Market with Books?</div>-->
<!--    </div>-->
<!--    <div class="steps-grid">-->
<!--      <div class="step-card">-->
<!--        <div class="step-num">1</div>-->
<!--        <h3>Start with Basics</h3>-->
<!--        <p>Begin with simple books to understand stock market fundamentals clearly. Rich Dad Poor Dad and Beginner's Guide are great starting points.</p>-->
<!--      </div>-->
<!--      <div class="step-card">-->
<!--        <div class="step-num">2</div>-->
<!--        <h3>Move to Technical Analysis</h3>-->
<!--        <p>Gradually learn charts, indicators, and technical analysis for better trading decisions using The Simplest Book for Technical Analysis.</p>-->
<!--      </div>-->
<!--      <div class="step-card">-->
<!--        <div class="step-num">3</div>-->
<!--        <h3>Practice with Charts</h3>-->
<!--        <p>Apply your knowledge by practicing regularly on charts to build confidence and develop your own trading style.</p>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->



 <!-- Section 12: Testimonials Start -->

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
                        <p class="fw-unique-text">"A must-read collection for anyone starting their financial journey. These books simplify complex investing concepts and help build a strong foundation in money management and wealth creation."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Anita+Verma&background=random&color=fff&background=273158" class="fw-unique-avatar" alt="Anita">
                            <div class="fw-unique-user-info">
                                <h5>Soni Sharma</h5>
                            </div>
                        </div>
                    </div>

                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"Great selection of financial books covering investing, mindset, and personal finance. Perfect for beginners who want practical knowledge to grow their wealth confidently."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Suresh+Pandey&background=random&color=fff&background=cf9c0a" class="fw-unique-avatar" alt="Suresh">
                            <div class="fw-unique-user-info">
                                <h5>Alok Verma</h5>
                            </div>
                        </div>
                    </div>

                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"Each book offers timeless lessons on investing discipline and risk management. Ideal for students looking to understand real market behavior and improve financial decision-making."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Priya+Malhotra&background=random&color=fff&background=273158" class="fw-unique-avatar" alt="Priya">
                            <div class="fw-unique-user-info">
                                <h5>Manthan Singh</h5>
                            </div>
                        </div>
                    </div>
                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"Highly recommended for building financial literacy. These books changed how I think about money, savings, and long-term investing strategies in a simple and practical way."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Rahul+Sharma&background=random&color=fff&background=cf9c0a" class="fw-unique-avatar" alt="Rahul">
                            <div class="fw-unique-user-info">
                                <h5>Nistha Srivastava</h5>
                            </div>
                        </div>
                    </div>
                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"A well-curated list with easy-to-understand concepts. These books helped me learn investing basics and gave me confidence to start my financial journey early.
"</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Amit+Kulkarni&background=random&color=fff&background=273158" class="fw-unique-avatar" alt="Amit">
                            <div class="fw-unique-user-info">
                                <h5>Danish Hussain</h5>
                            </div>
                        </div>
                    </div>
                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"Perfect mix of classic and modern financial knowledge. These books provide valuable insights on markets, psychology, and wealth-building, making them useful for every student."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Neha+Choudhary&background=random&color=fff&background=cf9c0a" class="fw-unique-avatar" alt="Neha">
                            <div class="fw-unique-user-info">
                                <h5>Sneha Pal</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Ends -->

  <!-- Footer Start -->
  <?php include("../footer.php"); ?>
  <!-- Footer End -->

<script>
const tabs = document.querySelectorAll('.ftab');
const cards = document.querySelectorAll('.book-card');
const countNum = document.getElementById('countNum');
const noResults = document.getElementById('noResults');

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    tabs.forEach(t => t.classList.remove('active'));
    tab.classList.add('active');
    const cat = tab.dataset.cat;
    let visible = 0;
    cards.forEach(card => {
      const cats = card.dataset.cat || '';
      if (cat === 'all' || cats.includes(cat)) {
        card.classList.remove('hidden');
        visible++;
      } else {
        card.classList.add('hidden');
      }
    });
    countNum.textContent = visible;
    noResults.style.display = visible === 0 ? 'block' : 'none';
  });
});
</script>
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