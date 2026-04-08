<?php
session_start();
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
    ob_start('ob_gzhandler');
else ob_start();
?>
<?php
$active_page = 'credit-cards';
// No need for config/functions for this static-ish but dynamic content page
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Best Credit Cards in India – Instant Approval And Easy EMI Options!</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Credit card, Easy EMI, instant credit card approved, hdfc millennia, sbi cashback card, axis bank ace credit card" name="keywords">
  <meta content="Explore the best credit cards in India with instant approval, cashback, and easy EMI options. Compare top cards and apply online in minutes from leading banks." name="description">
  <link rel="canonical" href="https://www.finowings.com/financial-products/credit-cards/" />

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

  <!-- Google Fonts -->
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
      --transition: all 0.3s ease;
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
    .credit-hero-section {
      background: linear-gradient(135deg, var(--navy) 0%, var(--navy-dark) 60%, #0d1530 100%);
      position: relative;
      overflow: hidden;
      padding: 100px 0 120px;
      color: var(--white);
    }
    
    .credit-hero-section::before {
      content: '';
      position: absolute;
      width: 800px; height: 800px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(207,156,10,0.12) 0%, transparent 70%);
      top: -300px; right: -200px;
      pointer-events: none;
    }

    .credit-hero-badge {
      display: inline-block;
      background: rgba(207,156,10,0.15);
      border: 1px solid rgba(207,156,10,0.4);
      color: var(--gold);
      padding: 8px 20px;
      border-radius: 50px;
      font-size: 14px;
      font-weight: 700;
      margin-bottom: 25px;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .credit-hero-title {
      font-size: clamp(2.5rem, 6vw, 3.8rem);
      font-weight: 900;
      line-height: 1.1;
      margin-bottom: 25px;
    }
    
    .credit-hero-title span { color: var(--gold); }

    .credit-hero-subtitle {
      font-size: 1.1rem;
      color: rgba(255,255,255,0.8);
      max-width: 550px;
      margin-bottom: 40px;
    }

    .credit-hero-features {
      display: flex;
      gap: 25px;
      flex-wrap: wrap;
      margin-bottom: 40px;
    }

    .credit-hero-feature {
      display: flex;
      align-items: center;
      gap: 12px;
      color: rgba(255,255,255,0.9);
      font-size: 15px;
    }

    .credit-hero-feature i { color: #4ade80; font-size: 18px; }

    .credit-hero-cta {
      display: inline-flex;
      align-items: center;
      gap: 12px;
      background: linear-gradient(135deg, var(--gold), var(--gold-light));
      color: var(--navy);
      padding: 16px 40px;
      border-radius: 12px;
      font-size: 16px;
      font-weight: 700;
      text-decoration: none;
      transition: var(--transition);
      box-shadow: 0 10px 30px rgba(207,156,10,0.3);
      border: none;
    }

    .credit-hero-cta:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(207,156,10,0.5);
      color: var(--navy);
    }

    .credit-cards-stack {
      position: relative;
      height: 400px;
      width: 100%;
    }

    .floating-card {
      position: absolute;
      border-radius: 16px;
      box-shadow: 0 25px 60px rgba(0, 0, 0, 0.5);
      overflow: hidden;
      width: 240px;
      height: 150px;
      animation: float 5s ease-in-out infinite;
      border: 1px solid rgba(255,255,255,0.1);
    }

    .floating-card img { width: 100%; height: 100%; object-fit: cover; }

    .floating-card:nth-child(1) { top: 10%; left: 0; z-index: 1; transform: rotate(-10deg); animation-delay: 0s; }
    .floating-card:nth-child(2) { top: 25%; left: 30%; z-index: 4; transform: rotate(5deg); animation-delay: 1s; }
    .floating-card:nth-child(3) { top: 5%; right: 0; z-index: 2; transform: rotate(15deg); animation-delay: 2s; }
    .floating-card:nth-child(4) { bottom: 10%; left: 15%; z-index: 3; transform: rotate(-5deg); animation-delay: 1.5s; }
    .floating-card:nth-child(5) { bottom: 0%; right: 10%; z-index: 5; transform: rotate(10deg); animation-delay: 2.5s; }

    @keyframes float {
      0%, 100% { transform: translateY(0) rotate(var(--rotation, 0deg)); }
      50% { transform: translateY(-20px) rotate(var(--rotation, 0deg)); }
    }

    /* ===== TRUST BAR ===== */
    .trust-bar {
      background: var(--white);
      padding: 60px 0;
      box-shadow: 0 10px 40px rgba(0,0,0,0.05);
      margin-top: -40px;
      border-radius: 30px 30px 0 0;
      position: relative;
      z-index: 10;
    }

    .trust-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 30px;
      margin-bottom: 50px;
    }

    .trust-item {
      display: flex;
      gap: 15px;
      padding: 10px;
    }

    .trust-item i { color: #28a745; font-size: 22px; margin-top: 5px; }

    .trust-item span { font-size: 16px; font-weight: 700; color: var(--navy); display: block; }
    .trust-item p { font-size: 13px; color: var(--text-muted); margin: 0; }

    .bank-logos {
      display: flex;
      justify-content: center;
      gap: 40px;
      flex-wrap: wrap;
      opacity: 0.6;
    }
    
    .bank-logos img { height: 35px; filter: grayscale(100%); transition: var(--transition); }
    .bank-logos img:hover { filter: grayscale(0); opacity: 1; }

    /* ===== FEATURED SECTION ===== */
    .featured-section { background: var(--light); padding: 100px 0; }
    
    .section-header { text-align: center; max-width: 800px; margin: 0 auto 60px; }
    .section-header h2 { font-size: 2.8rem; color: var(--navy); margin-bottom: 20px; }
    .section-header p { font-size: 1.1rem; color: var(--text-muted); }

    .table-scroll-hint { display: none; text-align: center; color: var(--gold); font-size: 12px; margin-bottom: 15px; }
    @media (max-width: 991px) { .table-scroll-hint { display: block; } }

    .cc-table-wrapper { overflow-x: auto; background: var(--white); border-radius: 20px; box-shadow: 0 15px 50px rgba(39,49,88,0.1); }
    .cc-table { width: 100%; border-collapse: collapse; min-width: 1000px; }
    .cc-table th { background: var(--navy); color: var(--white); padding: 25px 20px; font-family: 'Nunito', sans-serif; text-align: left; }
    .cc-table td { padding: 30px 20px; border-bottom: 1px solid #eee; vertical-align: middle; }

    .card-info { display: flex; align-items: center; gap: 20px; }
    .card-info img { width: 140px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
    .card-info strong { font-size: 1.1rem; color: var(--navy); }

    .benefits-list { list-style: none; padding: 0; margin: 0; }
    .benefits-list li { font-size: 14px; margin-bottom: 6px; display: flex; gap: 10px; }
    .benefits-list li i { color: var(--gold); font-size: 12px; margin-top: 4px; }

    .fee-amt { font-weight: 800; color: var(--navy); font-size: 1.1rem; }
    .ltf-badge { color: #28a745; font-weight: 800; letter-spacing: 0.5px; }

    .apply-btn {
      background: var(--navy);
      color: var(--white);
      padding: 12px 25px;
      border-radius: 10px;
      text-decoration: none;
      font-weight: 700;
      transition: var(--transition);
      display: inline-block;
      text-align: center;
    }
    .apply-btn:hover { background: var(--gold); color: var(--navy); transform: scale(1.05); }

    /* ===== BROWSE ALL BANKS ===== */
    .browse-section { padding: 100px 0; background: var(--white); }
    .bank-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
      gap: 30px;
    }

    .bank-card {
      background: var(--white);
      border-radius: 20px;
      overflow: hidden;
      border: 1px solid #efefef;
      transition: var(--transition);
      box-shadow: 0 5px 15px rgba(0,0,0,0.03);
      position: relative;
    }

    .bank-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(39,49,88,0.1);
      border-color: var(--gold);
    }

    .bank-card .img-box { height: 200px; display: flex; align-items: center; justify-content: center; background: #fafafa; overflow: hidden; }
    .bank-card .img-box img { width: 100%; height: 100%; object-fit: cover; }
    
    .bank-card-body { padding: 30px; text-align: center; }
    .bank-card-body h4 { font-weight: 700; color: var(--navy); margin-bottom: 20px; }
    
    /* ===== WHY FINOWINGS ===== */
    .why-section { padding: 100px 0; background: var(--light); }
    .why-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
    .why-item { background: var(--white); padding: 40px; border-radius: 20px; transition: var(--transition); }
    .why-item:hover { transform: translateY(-5px); box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
    .why-item i { font-size: 40px; color: var(--gold); margin-bottom: 25px; display: block; }
    .why-item h4 { color: var(--navy); margin-bottom: 15px; font-weight: 700; }

    /* ===== GUIDE ===== */
    .guide-section { padding: 100px 0; background: var(--white); }
    .guide-container { display: grid; grid-template-columns: 1.5fr 1fr; gap: 60px; }
    @media (max-width: 991px) { .guide-container { grid-template-columns: 1fr; } }
    
    .step-box { display: flex; gap: 20px; margin-bottom: 30px; background: var(--light); padding: 30px; border-radius: 20px; }
    .step-num { width: 50px; height: 50px; background: var(--navy); color: var(--white); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 20px; flex-shrink: 0; }
    .step-content h5 { font-weight: 700; color: var(--navy); margin-bottom: 10px; }

    .checklist-box { background: var(--navy); color: var(--white); padding: 40px; border-radius: 25px; position: sticky; top: 100px; }
    .checklist-box h4 { color: var(--gold); margin-bottom: 30px; }
    .check-list { list-style: none; padding: 0; margin: 0; }
    .check-list li { display: flex; gap: 15px; margin-bottom: 15px; font-size: 15px; }
    .check-list li i { color: var(--gold); margin-top: 4px; }

    /* Responsive */
    @media (max-width: 992px) {
      .credit-hero-section { text-align: center; padding: 60px 0 80px; }
      .credit-hero-subtitle { margin: 0 auto 30px; }
      .credit-hero-features { justify-content: center; }
      .floating-card { width: 140px !important; height: 90px !important; }
      .credit-cards-stack { height: 300px; margin-top: 40px; }
    }
    @media (max-width: 767px) {
      .credit-cards-stack { display: none; }
      .browse-section { padding: 60px 0; }
      .section-header h2 { font-size: 2rem; }
    }
    
    .wow { visibility: hidden; }
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
  <?php include("../../top-navigation.php"); ?>
  <!-- Navbar End -->

  <!-- Credit Cards Hero Section Start -->
  <section class="credit-hero-section">
    <div class="container-fw">
      <div class="row align-items-center">
        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
          <span class="credit-hero-badge"><i class="fas fa-certificate me-2"></i> Best of 2026</span>
          <h1 class="credit-hero-title">Best Credit Cards in India – <br><span>Instant Approval</span></h1>
          <p class="credit-hero-subtitle">
            Find the perfect credit card with up to 5% cashback, unlimited rewards, and paperless approval. Partnered with 15+ top Indian banks.
          </p>
          <div class="credit-hero-features">
            <div class="credit-hero-feature"><i class="fas fa-check-circle"></i> <span>92% Approval Rate</span></div>
            <div class="credit-hero-feature"><i class="fas fa-check-circle"></i> <span>Lifetime Free Options</span></div>
            <div class="credit-hero-feature"><i class="fas fa-check-circle"></i> <span>Zero Hidden Fees</span></div>
          </div>
          <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-start">
            <a href="#featured" class="credit-hero-cta">Apply for Expert Picks <i class="fas fa-rocket"></i></a>
            <a href="#browse-banks" class="btn btn-outline-light px-4 py-3" style="border-radius:12px; font-weight:700;">Browse All Banks</a>
          </div>
        </div>

        <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
          <div class="credit-cards-stack">
            <div class="floating-card" style="--rotation: -12deg;">
              <img src="img/hdfc-bank-credit-card.webp" alt="HDFC Credit Card">
            </div>
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

  <!-- 2. TRUST BAR -->
  <section class="trust-bar">
    <div class="container-fw">
      <div class="trust-grid">
        <div class="trust-item wow fadeInUp" data-wow-delay="0.1s">
          <i class="fas fa-user-shield"></i>
          <div>
            <span>10,000+ Indians Trust Us</span>
            <p>Every month for unbiased card advice</p>
          </div>
        </div>
        <div class="trust-item wow fadeInUp" data-wow-delay="0.2s">
          <i class="fas fa-clock"></i>
          <div>
            <span>60-Second Approval</span>
            <p>92% applications approved instantly</p>
          </div>
        </div>
        <div class="trust-item wow fadeInUp" data-wow-delay="0.3s">
          <i class="fas fa-percentage"></i>
          <div>
            <span>Up to 5% Cashback</span>
            <p>Real savings on your daily spends</p>
          </div>
        </div>
        <div class="trust-item wow fadeInUp" data-wow-delay="0.4s">
          <i class="fas fa-lock"></i>
          <div>
            <span>RBI Compliant & Secure</span>
            <p>100% data privacy & PCI-DSS security</p>
          </div>
        </div>
      </div>
      <div class="bank-logos wow fadeIn" data-wow-delay="0.5s">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/HDFC_Bank_Logo.svg/2560px-HDFC_Bank_Logo.svg.png" alt="HDFC">
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/5/58/State_Bank_of_India_logo.svg/1200px-State_Bank_of_India_logo.svg.png" alt="SBI">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Axis_Bank_logo.svg/2560px-Axis_Bank_logo.svg.png" alt="Axis">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/IDFC_First_Bank_logo.svg/2560px-IDFC_First_Bank_logo.svg.png" alt="IDFC">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b3/American_Express_logo.svg/1200px-American_Express_logo.svg.png" alt="Amex">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/HSBC_logo_%282018%29.svg/1200px-HSBC_logo_%282018%29.svg.png" alt="HSBC">
      </div>
    </div>
  </section>

  <!-- 4. FEATURED CREDIT CARDS -->
  <section class="featured-section" id="featured">
    <div class="container-fw">
      <div class="section-header wow fadeInUp">
        <h2>Expert Curated Best Cards for 2026</h2>
        <p>We analyzed 50+ cards to handpick the best ones for you based on reward rates, annual fees, and eligibility. Apply online for instant approval.</p>
      </div>

      <div class="table-scroll-hint wow fadeIn"><i class="fas fa-arrows-alt-h"></i> Swipe left to see all card details</div>
      
      <div class="cc-table-wrapper wow fadeInUp">
        <table class="cc-table">
          <thead>
            <tr>
              <th>Card Details</th>
              <th>Joining / Annual Fee</th>
              <th>Key Benefits</th>
              <th>Min. Monthly Income</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- Card 1 -->
            <tr>
              <td>
                <div class="card-info">
                  <img src="img/hdfc-bank-credit-card.webp" alt="HDFC Millennia">
                  <strong>HDFC Millennia Credit Card</strong>
                </div>
              </td>
              <td>
                <div class="fee-amt">₹1,000 + Taxes</div>
                <small class="text-muted">(Waived on ₹1L spend)</small>
              </td>
              <td>
                <ul class="benefits-list">
                  <li><i class="fas fa-check"></i> 5% Cashback on Amazon, Swiggy</li>
                  <li><i class="fas fa-check"></i> 1% Unlimited on other spends</li>
                  <li><i class="fas fa-check"></i> 8 Domestic Lounge access</li>
                </ul>
              </td>
              <td>₹25,000 - ₹35,000</td>
              <td><a href="HDFC/" class="apply-btn">Apply Now</a></td>
            </tr>
            <!-- Card 2 -->
            <tr>
              <td>
                <div class="card-info">
                  <img src="img/sbi-bank-credit-card.jpg" alt="SBI Cashback">
                  <strong>SBI Cashback Credit Card</strong>
                </div>
              </td>
              <td>
                <div class="fee-amt">₹999 + Taxes</div>
                <small class="text-muted">(Waived on ₹2L spend)</small>
              </td>
              <td>
                <ul class="benefits-list">
                  <li><i class="fas fa-check"></i> 5% Cashback on Online Spends</li>
                  <li><i class="fas fa-check"></i> 1% Fuel Surcharge Waiver</li>
                  <li><i class="fas fa-check"></i> Digital-only application</li>
                </ul>
              </td>
              <td>₹25,000</td>
              <td><a href="sbi/" class="apply-btn">Apply Now</a></td>
            </tr>
            <!-- Card 3 -->
            <tr>
              <td>
                <div class="card-info">
                  <img src="img/idfc-first-bank-credit-card.jpg" alt="IDFC Select">
                  <strong>IDFC Select Credit Card</strong>
                </div>
              </td>
              <td>
                <span class="ltf-badge">LIFETIME FREE</span>
                <small class="text-muted d-block">₹0 Fee Always</small>
              </td>
              <td>
                <ul class="benefits-list">
                  <li><i class="fas fa-check"></i> 10x Rewards on spreads >₹20k</li>
                  <li><i class="fas fa-check"></i> 1.99% Low Forex Markup</li>
                  <li><i class="fas fa-check"></i> Quarterly Lounge Access</li>
                </ul>
              </td>
              <td>₹1,00,000</td>
              <td><a href="idfc-bank/" class="apply-btn">Apply Now</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- 5. BROWSE ALL BANKS -->
  <section class="browse-section" id="browse-banks">
    <div class="container-fw">
      <div class="section-header wow fadeInUp">
        <h2>Choose Your Bank</h2>
        <p>Explore credit cards from India's top financial institutions and find the one that fits your lifestyle.</p>
      </div>
      
      <div class="bank-grid">
        <!-- HDFC -->
        <div class="bank-card wow fadeInUp" data-wow-delay="0.1s">
          <div class="img-box"><img src="img/hdfc-bank-credit-card.webp" alt="HDFC"></div>
          <div class="bank-card-body">
            <h4>HDFC Bank Credits</h4>
            <a href="HDFC/" class="apply-btn w-100">Browse Cards</a>
          </div>
        </div>
        <!-- SBI -->
        <div class="bank-card wow fadeInUp" data-wow-delay="0.2s">
          <div class="img-box"><img src="img/sbi-bank-credit-card.jpg" alt="SBI"></div>
          <div class="bank-card-body">
            <h4>SBI Credit Cards</h4>
            <a href="sbi/" class="apply-btn w-100">Browse Cards</a>
          </div>
        </div>
        <!-- Axis -->
        <div class="bank-card wow fadeInUp" data-wow-delay="0.3s">
          <div class="img-box"><img src="img/axis-bank-credit-card.jpg" alt="Axis"></div>
          <div class="bank-card-body">
            <h4>Axis Bank Cards</h4>
            <a href="axis-bank/" class="apply-btn w-100">Browse Cards</a>
          </div>
        </div>
        <!-- IDFC -->
        <div class="bank-card wow fadeInUp" data-wow-delay="0.4s">
          <div class="img-box"><img src="img/idfc-first-bank-credit-card.jpg" alt="IDFC"></div>
          <div class="bank-card-body">
            <h4>IDFC FIRST Bank</h4>
            <a href="idfc-bank/" class="apply-btn w-100">Browse Cards</a>
          </div>
        </div>
        <!-- IndusInd -->
        <div class="bank-card wow fadeInUp" data-wow-delay="0.5s">
          <div class="img-box"><img src="img/indusind-bank-credit-card.jpg" alt="IndusInd"></div>
          <div class="bank-card-body">
            <h4>IndusInd Bank</h4>
            <a href="indusind-bank/" class="apply-btn w-100">Browse Cards</a>
          </div>
        </div>
        <!-- HSBC -->
        <div class="bank-card wow fadeInUp" data-wow-delay="0.6s">
          <div class="img-box"><img src="img/hsbc-credit-card.jpg" alt="HSBC"></div>
          <div class="bank-card-body">
            <h4>HSBC India Cards</h4>
            <a href="hsbc/" class="apply-btn w-100">Browse Cards</a>
          </div>
        </div>
        <!-- AU -->
        <div class="bank-card wow fadeInUp" data-wow-delay="0.7s">
          <div class="img-box"><img src="img/au-bank-credit-card.jpg" alt="AU Bank"></div>
          <div class="bank-card-body">
            <h4>AU Small Finance</h4>
            <a href="au-small-finace-bank/" class="apply-btn w-100">Browse Cards</a>
          </div>
        </div>
        <!-- Kiwi -->
        <div class="bank-card wow fadeInUp" data-wow-delay="0.8s">
          <div class="img-box"><img src="img/kiwi_banks_cc.webp" alt="Kiwi"></div>
          <div class="bank-card-body">
            <h4>Kiwi Axis Credit</h4>
            <a href="kiwi-bank/" class="apply-btn w-100">Browse Cards</a>
          </div>
        </div>
        <!-- Bajaj -->
        <div class="bank-card wow fadeInUp" data-wow-delay="0.9s">
          <div class="img-box"><img src="img/bajaj_banks.webp" alt="Bajaj"></div>
          <div class="bank-card-body">
            <h4>Bajaj Finserv RBL</h4>
            <a href="bajaj/" class="apply-btn w-100">Browse Cards</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6. WHY CHOOSE FINOWINGS -->
  <section class="why-section">
    <div class="container-fw">
      <div class="section-header wow fadeInUp">
        <h2>The Finowings Advantage</h2>
        <p>Why thousands of credit card applicants choose us every month for their financial journey.</p>
      </div>
      <div class="why-grid">
        <div class="why-item wow fadeInUp" data-wow-delay="0.1s">
          <i class="fas fa-handshake"></i>
          <h4>Neutral Recommendations</h4>
          <p>We are bank-agnostic. We recommend cards based on your spending, not bank commissions.</p>
        </div>
        <div class="why-item wow fadeInUp" data-wow-delay="0.2s">
          <i class="fas fa-bolt"></i>
          <h4>Instant Eligibility Click</h4>
          <p>Our engine checks your eligibility across 15+ banks in under 60 seconds.</p>
        </div>
        <div class="why-item wow fadeInUp" data-wow-delay="0.3s">
          <i class="fas fa-shield-alt"></i>
          <h4>100% Secure & Paperless</h4>
          <p>PCI-DSS compliant platform. No physical documents needed for most applications.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. BEGINNER GUIDE -->
  <section class="guide-section">
    <div class="container-fw">
      <div class="section-header wow fadeInUp">
        <h2>How to Choose the Right Card?</h2>
        <p>Follow our expert checklist to ensure you get the best value for your spending pattern.</p>
      </div>
      
      <div class="guide-container">
        <div class="guide-main">
          <div class="step-box wow fadeInUp">
            <div class="step-num">1</div>
            <div class="step-content">
              <h5>Identify Your Biggest Spends</h5>
              <p>Do you spend more on groceries and dining (HDFC Millennia) or utility bills (Axis ACE)? Pick a card that rewards your biggest category.</p>
            </div>
          </div>
          <div class="step-box wow fadeInUp">
            <div class="step-num">2</div>
            <div class="step-content">
              <h5>Evaluate the Annual Fee</h5>
              <p>A paid card with ₹1,000 fee might give you ₹5,000 in cashback. Calculate your net gain before rejecting a paid card.</p>
            </div>
          </div>
          <div class="step-box wow fadeInUp">
            <div class="step-num">3</div>
            <div class="step-content">
              <h5>Check for Devaluations</h5>
              <p>Banks often update reward points. We keep our comparison data updated every 30 days to hide devalued offers.</p>
            </div>
          </div>
        </div>

        <div class="checklist-wrapper wow fadeInRight">
          <div class="checklist-box">
            <h4>Pro Application Checklist</h4>
            <ul class="check-list">
              <li><i class="fas fa-check-circle"></i> CIBIL Score 750+ recommended</li>
              <li><i class="fas fa-check-circle"></i> Keep PAN & Adhaar Card ready</li>
              <li><i class="fas fa-check-circle"></i> Ensure mobile number is linked to Adhaar</li>
              <li><i class="fas fa-check-circle"></i> Check pre-approved offers first</li>
              <li><i class="fas fa-check-circle"></i> Read reward caps in terms & conditions</li>
            </ul>
            <div class="mt-4 pt-3 border-top border-secondary">
               <p class="small text-light opacity-50"><i>*RBI mandate requires V-KYC for all new card applications in 2026.</i></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 8. FINAL CTA -->
  <section class="py-5 bg-navy text-white text-center" style="background: var(--navy);">
    <div class="container py-5">
      <h2 class="playfair mb-4 wow fadeInUp">Get Your Hand on the Best 2026 Cards</h2>
      <div class="d-flex justify-content-center gap-3 wow fadeInUp">
        <div class="bg-gold text-dark px-3 py-1 rounded-pill small font-weight-bold">Zero Joining Fee Offers</div>
        <div class="bg-gold text-dark px-3 py-1 rounded-pill small font-weight-bold">Welcome Benefits up to ₹5,000</div>
      </div>
      <a href="#featured" class="credit-hero-cta mt-5 wow fadeInUp">Start Your Application – It's Free!</a>
    </div>
  </section>

  <!-- Footer Start -->
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
      // Smooth scrolling
      $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
          event.preventDefault();
          $('html, body').stop().animate({
            scrollTop: target.offset().top - 100
          }, 800);
        }
      });
    });
  </script>
</body>
</html>