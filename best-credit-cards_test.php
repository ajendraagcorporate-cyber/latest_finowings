<?php
session_start();
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
    ob_start('ob_gzhandler');
else ob_start();
?>
<?php
include("DLL/config.php");
include("DLL/functions.php");
$active_page = 'credit-cards';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Credit Cards in India – Instant Approval And Easy EMI Options!</title>
    <meta name="description" content="Explore the best credit cards in India with instant approval, cashback, and easy EMI options. Compare top cards and apply online in minutes.">
    <meta name="keywords" content="best credit cards india, instant approval credit card, cashback credit cards, emi options, apply credit card online, hdfc millennia, sbi cashback card, axis bank ace credit card">
    <link rel="canonical" href="https://www.finowings.com/best-credit-cards_test.php" />
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Nunito:wght@600;700;800&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/new-css.css" rel="stylesheet">

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
            --glass: rgba(255, 255, 255, 0.08);
            --transition: all 0.3s ease;
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

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
        .cc-hero {
            background: linear-gradient(135deg, var(--navy) 0%, var(--navy-dark) 60%, #0d1530 100%);
            position: relative;
            padding: 120px 0 100px;
            overflow: hidden;
            color: var(--white);
        }
        
        .cc-hero::before {
            content: '';
            position: absolute;
            width: 800px; height: 800px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(207,156,10,0.12) 0%, transparent 70%);
            top: -300px; right: -200px;
            pointer-events: none;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 900px;
            margin: 0 auto;
        }

        .updated-badge {
            display: inline-block;
            background: rgba(207,156,10,0.15);
            border: 1px solid rgba(207,156,10,0.4);
            color: var(--gold);
            font-size: 13px;
            font-weight: 700;
            padding: 8px 20px;
            border-radius: 50px;
            margin-bottom: 25px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .cc-hero h1 {
            font-size: clamp(2.2rem, 6vw, 3.8rem);
            line-height: 1.1;
            margin-bottom: 20px;
            font-weight: 900;
        }
        
        .cc-hero h1 span { color: var(--gold); }

        .cc-hero p {
            color: rgba(255,255,255,0.8);
            font-size: clamp(16px, 2.5vw, 19px);
            margin-bottom: 40px;
            max-width: 750px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-btns {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-fw-primary {
            background: linear-gradient(135deg, var(--gold), var(--gold-light));
            color: var(--navy);
            font-weight: 700;
            padding: 16px 36px;
            border-radius: 10px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: var(--transition);
            border: none;
            box-shadow: 0 4px 15px rgba(207,156,10,0.3);
        }

        .btn-fw-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(207,156,10,0.5);
            color: var(--navy);
        }

        .btn-fw-outline {
            background: rgba(255,255,255,0.05);
            color: var(--white);
            border: 2px solid rgba(255,255,255,0.2);
            font-weight: 600;
            padding: 16px 36px;
            border-radius: 10px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: var(--transition);
        }

        .btn-fw-outline:hover {
            background: rgba(255,255,255,0.1);
            border-color: var(--white);
            color: var(--white);
        }

        /* Floating elements placeholder with CSS */
        .hero-visuals {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0; left: 0;
            pointer-events: none;
        }
        
        .floating-card {
            position: absolute;
            width: 280px;
            height: 170px;
            background: linear-gradient(135deg, rgba(255,255,255,0.15), rgba(255,255,255,0.05));
            backdrop-filter: blur(10px);
            border-radius: 15px;
            border: 1px solid rgba(255,255,255,0.2);
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            animation: float 6s ease-in-out infinite;
            z-index: 1;
            opacity: 0.6;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }
        
        .floating-card.c1 { top: 15%; left: 5%; animation-delay: 0s; }
        .floating-card.c2 { bottom: 15%; right: 5%; animation-delay: 2s; }
        .floating-card.c3 { top: 40%; right: 10%; animation-delay: 4s; width: 220px; height: 140px; opacity: 0.4; }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(5deg); }
            50% { transform: translateY(-20px) rotate(-5deg); }
        }

        /* ===== TRUST BAR ===== */
        .trust-bar {
            background: var(--white);
            padding: 60px 0;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            position: relative;
            z-index: 10;
            margin-top: -30px;
            border-radius: 20px 20px 0 0;
        }

        .trust-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .trust-header h3 {
            font-size: 1.5rem;
            color: var(--navy);
            font-weight: 800;
        }

        .trust-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 50px;
        }

        .trust-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 15px;
        }

        .trust-item i {
            color: #28a745;
            font-size: 20px;
            margin-top: 4px;
        }

        .trust-item span {
            font-size: 15px;
            font-weight: 600;
            color: var(--text-dark);
        }

        .bank-logos {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            flex-wrap: wrap;
            opacity: 0.7;
        }
        
        .bank-logos img {
            height: 35px;
            filter: grayscale(100%);
            transition: var(--transition);
        }
        
        .bank-logos img:hover { filter: grayscale(0); opacity: 1; }

        /* ===== FEATURED CARDS ===== */
        .featured-section {
            background: var(--light);
            padding: 100px 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 2.8rem;
            color: var(--navy);
            margin-bottom: 15px;
        }

        .section-header p {
            color: var(--text-muted);
            max-width: 800px;
            margin: 0 auto;
            font-size: 17px;
        }

        .cards-table-wrapper {
            overflow-x: auto;
            background: var(--white);
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(39,49,88,0.1);
        }

        .cc-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 1000px;
        }

        .cc-table th {
            background: var(--navy);
            color: var(--white);
            padding: 20px;
            text-align: left;
            font-family: 'Nunito', sans-serif;
            font-weight: 700;
            font-size: 15px;
        }

        .cc-table td {
            padding: 25px 20px;
            border-bottom: 1px solid #eee;
            vertical-align: top;
        }

        .card-name-cell {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .card-name-cell strong {
            font-size: 18px;
            color: var(--navy);
            display: block;
        }

        .card-img-placeholder {
            width: 100%;
            height: 120px;
            background: linear-gradient(135deg, #eee, #f9f9f9);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ccc;
            font-size: 12px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
        }

        .benefits-list {
            list-style: none;
            padding: 0;
        }

        .benefits-list li {
            font-size: 14px;
            color: var(--text-dark);
            margin-bottom: 8px;
            display: flex;
            gap: 8px;
        }

        .benefits-list li i {
            color: var(--gold);
            margin-top: 4px;
            font-size: 12px;
        }

        .fee-text {
            font-weight: 700;
            color: var(--navy);
            font-size: 16px;
        }

        .best-for-tag {
            display: inline-block;
            background: var(--light);
            color: var(--navy);
            padding: 4px 12px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 700;
            border: 1px solid rgba(39,49,88,0.1);
        }

        .apply-btn {
            background: var(--navy);
            color: var(--white);
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 700;
            font-size: 14px;
            display: inline-block;
            transition: var(--transition);
            text-align: center;
            min-width: 120px;
        }

        .apply-btn:hover {
            background: var(--gold);
            color: var(--navy);
            transform: scale(1.05);
        }

        .ltf-badge {
            color: #28a745;
            font-weight: 800;
            font-size: 13px;
            display: block;
            margin-top: 5px;
        }

        /* Scroll Hint for Mobile Table */
        .table-scroll-hint {
            display: none;
            text-align: center;
            font-size: 12px;
            color: var(--gold);
            margin-bottom: 10px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { opacity: 0.5; }
            50% { opacity: 1; }
            100% { opacity: 0.5; }
        }

        @media (max-width: 991px) {
            .table-scroll-hint { display: block; }
        }

        /* ===== WHY FINOWINGS ===== */
        .why-finowings {
            padding: 100px 0;
            background: var(--white);
        }

        .why-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .why-card {
            padding: 40px;
            border-radius: 20px;
            border: 1px solid #eee;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .why-card:hover {
            border-color: var(--gold);
            box-shadow: 0 10px 30px rgba(39,49,88,0.08);
            transform: translateY(-5px);
        }

        .why-card i {
            font-size: 40px;
            color: var(--gold);
            margin-bottom: 25px;
            display: block;
        }

        .why-card h4 {
            font-size: 1.3rem;
            color: var(--navy);
            margin-bottom: 15px;
            font-weight: 700;
        }

        .why-card p {
            font-size: 15px;
            color: var(--text-muted);
        }

        /* ===== BEGINNER GUIDE ===== */
        .guide-section {
            background: var(--light);
            padding: 100px 0;
        }

        .guide-content {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 60px;
            align-items: start;
        }

        @media (max-width: 991px) {
            .guide-content { grid-template-columns: 1fr; }
        }

        .guide-steps {
            list-style: none;
            padding: 0;
        }

        .guide-step {
            background: var(--white);
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 20px;
            display: flex;
            gap: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.02);
        }

        .step-num {
            width: 45px;
            height: 45px;
            background: var(--navy);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 18px;
            flex-shrink: 0;
        }

        .step-txt h4 {
            font-size: 1.2rem;
            color: var(--navy);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .step-txt p { font-size: 15px; color: var(--text-muted); }

        .checklist-box {
            background: var(--navy);
            padding: 40px;
            border-radius: 20px;
            color: var(--white);
            position: sticky;
            top: 100px;
        }

        .checklist-box h4 {
            font-size: 1.5rem;
            margin-bottom: 25px;
            color: var(--gold);
        }

        .checklist-items {
            list-style: none;
            padding: 0;
        }

        .checklist-item {
            display: flex;
            gap: 12px;
            margin-bottom: 15px;
            font-size: 15px;
        }

        .checklist-item i {
            color: var(--gold);
            margin-top: 4px;
        }

        /* ===== FINAL CTA ===== */
        .final-cta {
            background: linear-gradient(45deg, var(--navy), var(--navy-dark));
            padding: 80px 0;
            text-align: center;
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .final-cta::after {
            content: '';
            position: absolute;
            width: 300px; height: 300px;
            background: rgba(207,156,10,0.1);
            border-radius: 50%;
            bottom: -150px; left: -100px;
        }

        .final-cta h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .offer-badges {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .offer-badge {
            background: rgba(255,255,255,0.1);
            border: 1px dashed var(--gold);
            padding: 10px 25px;
            border-radius: 8px;
            font-weight: 700;
            color: var(--gold);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .section-header h2 { font-size: 2rem; }
            .cc-hero h1 { font-size: 2.2rem; }
            .bank-logos { gap: 20px; }
            .checklist-box { position: static; margin-top: 40px; }
        }
        
        .anim-up { opacity: 0; transform: translateY(30px); transition: all 0.8s ease; }
        .anim-up.visible { opacity: 1; transform: translateY(0); }
    </style>
</head>
<body>

    <!-- Header -->
    <?php include("top-navigation.php"); ?>

    <!-- 1. HERO SECTION -->
    <section class="cc-hero" id="home">
        <div class="hero-visuals">
            <div class="floating-card c1 anim-up" style="transition-delay: 0.2s;">
                <div style="font-size: 20px; border: 1px solid rgba(255,255,255,0.3); width: 40px; height: 25px; border-radius: 4px;"></div>
                <div style="height: 10px; background: rgba(255,255,255,0.2); width: 80%; border-radius: 2px;"></div>
            </div>
            <div class="floating-card c2 anim-up" style="transition-delay: 0.4s;">
                <div style="color: var(--gold); font-weight: 800; font-size: 14px;">PREMIUM</div>
                <div style="height: 10px; background: rgba(255,255,255,0.2); width: 60%; border-radius: 2px;"></div>
            </div>
            <div class="floating-card c3 anim-up" style="transition-delay: 0.6s;"></div>
        </div>

        <div class="container-fw">
            <div class="hero-content">
                <div class="updated-badge anim-up"><i class="fas fa-calendar-check" style="margin-right:8px;"></i> April 2026 Updated</div>
                <h1 class="anim-up">Best Credit Cards in India 2026 – <br><span>Compare & Apply Online</span></h1>
                <p class="anim-up">Compare top credit cards with instant approval, up to 5% cashback, unlimited rewards, lounge access, and flexible EMI options. Apply online in minutes from HDFC, SBI, Axis, IDFC FIRST, IndusInd & 15+ banks.</p>
                <div class="hero-btns anim-up">
                    <a href="#featured" class="btn-fw-primary">Apply Now – Instant Approval <i class="fas fa-bolt"></i></a>
                    <a href="#featured" class="btn-fw-outline">Compare All Cards <i class="fas fa-chevron-right"></i></a>
                </div>
                
                <div style="margin-top: 40px; display: flex; justify-content: center; gap: 20px; opacity: 0.6; font-size: 13px;">
                    <span><i class="fas fa-shield-alt"></i> RBI Compliant</span>
                    <span><i class="fas fa-lock"></i> PCI-DSS Secured</span>
                    <span><i class="fas fa-user-check"></i> 100% Paperless</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. TRUST BAR -->
    <section class="trust-bar" id="trust">
        <div class="container-fw">
            <div class="trust-header anim-up">
                <h3>Why 10,000+ Indians Trust Finowings Every Month</h3>
            </div>
            <div class="trust-grid">
                <div class="trust-item anim-up">
                    <i class="fas fa-check-circle"></i>
                    <div>
                        <span>Instant Approval</span>
                        <p style="font-size: 13px; color: var(--text-muted); margin: 0;">92% applications approved in < 60s</p>
                    </div>
                </div>
                <div class="trust-item">
                    <i class="fas fa-check-circle"></i>
                    <div>
                        <span>Cashback up to 5%</span>
                        <p style="font-size: 13px; color: var(--text-muted); margin: 0;">Real savings on everyday spends</p>
                    </div>
                </div>
                <div class="trust-item">
                    <i class="fas fa-check-circle"></i>
                    <div>
                        <span>Highly Rated Platform</span>
                        <p style="font-size: 13px; color: var(--text-muted); margin: 0;">4.9/5 rating | 100% secure</p>
                    </div>
                </div>
                <div class="trust-item">
                    <i class="fas fa-check-circle"></i>
                    <div>
                        <span>No Hidden Charges</span>
                        <p style="font-size: 13px; color: var(--text-muted); margin: 0;">Transparent fees & eligibility</p>
                    </div>
                </div>
            </div>
            <div class="bank-logos">
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
            <div class="section-header anim-up">
                <h2>Featured Credit Cards in India 2026</h2>
                <p>Handpicked by our experts after analyzing 50+ cards based on real user data, latest bank offers (April 2026), reward rates, and eligibility. All cards offer instant online approval via Finowings.</p>
            </div>

            <div class="table-scroll-hint anim-up"><i class="fas fa-arrows-alt-h"></i> Swipe left to see all card details</div>
            
            <div class="cards-table-wrapper anim-up">
                <table class="cc-table">
                    <thead>
                        <tr>
                            <th style="width: 250px;">Card Name</th>
                            <th>Joining / Annual Fee</th>
                            <th>Key Benefits</th>
                            <th>Best For</th>
                            <th>Min. Income</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- HDFC Millennia -->
                        <tr>
                            <td>
                                <div class="card-name-cell">
                                    <div class="card-img-placeholder"><i class="fas fa-credit-card fa-3x"></i></div>
                                    <strong>HDFC Millennia Credit Card</strong>
                                </div>
                            </td>
                            <td>
                                <div class="fee-text">₹1,000 + taxes</div>
                                <span style="font-size: 12px; color: var(--text-muted);">(Waived on ₹1 Lakh spend)</span>
                            </td>
                            <td>
                                <ul class="benefits-list">
                                    <li><i class="fas fa-check"></i> 5% cashback on Amazon, Flipkart, Swiggy</li>
                                    <li><i class="fas fa-check"></i> 1% unlimited on other spends</li>
                                    <li><i class="fas fa-check"></i> 8 Domestic Lounge access/year</li>
                                </ul>
                            </td>
                            <td><span class="best-for-tag">Online Shopping & Dining</span></td>
                            <td>
                                <div style="font-size:14px;"><b>Salaried:</b> ₹25k-35k pm</div>
                                <div style="font-size:14px;"><b>Self-emp:</b> ITR ₹6L pa</div>
                            </td>
                            <td><a href="#" class="apply-btn">Apply Now</a></td>
                        </tr>

                        <!-- SBI Cashback -->
                        <tr>
                            <td>
                                <div class="card-name-cell">
                                    <div class="card-img-placeholder" style="background: linear-gradient(135deg, #e3f2fd, #bbdefb);"><i class="fas fa-credit-card fa-3x" style="color:#1976d2;"></i></div>
                                    <strong>SBI Cashback Credit Card</strong>
                                </div>
                            </td>
                            <td>
                                <div class="fee-text">₹999 + taxes</div>
                                <span style="font-size: 12px; color: var(--text-muted);">(Waived on ₹2 Lakh spend)</span>
                            </td>
                            <td>
                                <ul class="benefits-list">
                                    <li><i class="fas fa-check"></i> 5% cashback on online spends</li>
                                    <li><i class="fas fa-check"></i> Max ₹4,000/statement saving</li>
                                    <li><i class="fas fa-check"></i> 1% fuel surcharge waiver</li>
                                </ul>
                            </td>
                            <td><span class="best-for-tag">Bill Payments & Generic Online</span></td>
                            <td>
                                <div style="font-size:14px;"><b>Salaried:</b> ₹25k pm</div>
                                <div style="font-size:14px;"><b>Self-emp:</b> ITR ₹6L pa</div>
                            </td>
                            <td><a href="#" class="apply-btn">Apply Now</a></td>
                        </tr>

                        <!-- Axis ACE -->
                        <tr>
                            <td>
                                <div class="card-name-cell">
                                    <div class="card-img-placeholder" style="background: linear-gradient(135deg, #fce4ec, #f8bbd0);"><i class="fas fa-credit-card fa-3x" style="color:#c2185b;"></i></div>
                                    <strong>Axis Bank ACE Credit Card</strong>
                                </div>
                            </td>
                            <td>
                                <div class="fee-text">₹499 + taxes</div>
                                <span style="font-size: 12px; color: var(--text-muted);">(Waiver on spends)</span>
                            </td>
                            <td>
                                <ul class="benefits-list">
                                    <li><i class="fas fa-check"></i> 5% cashback on Google Pay bills</li>
                                    <li><i class="fas fa-check"></i> 4% on Swiggy, Zomato, Ola</li>
                                    <li><i class="fas fa-check"></i> 2% flat on other spends</li>
                                </ul>
                            </td>
                            <td><span class="best-for-tag">Utility Bills & Food</span></td>
                            <td>
                                <div style="font-size:14px;"><b>Salaried:</b> ₹25k pm</div>
                            </td>
                            <td><a href="#" class="apply-btn">Apply Now</a></td>
                        </tr>

                        <!-- IDFC Select -->
                        <tr>
                            <td>
                                <div class="card-name-cell">
                                    <div class="card-img-placeholder" style="background: linear-gradient(135deg, #fff3e0, #ffe0b2);"><i class="fas fa-credit-card fa-3x" style="color:#e65100;"></i></div>
                                    <strong>IDFC FIRST Select Card</strong>
                                </div>
                            </td>
                            <td>
                                <span class="ltf-badge">LIFETIME FREE</span>
                            </td>
                            <td>
                                <ul class="benefits-list">
                                    <li><i class="fas fa-check"></i> 10x rewards on spends >₹20K</li>
                                    <li><i class="fas fa-check"></i> 1.99% low forex markup</li>
                                    <li><i class="fas fa-check"></i> 1 domestic lounge/quarter</li>
                                </ul>
                            </td>
                            <td><span class="best-for-tag">Rewards & Travel</span></td>
                            <td>
                                <div style="font-size:14px;"><b>Min:</b> ₹12 Lakh pa</div>
                            </td>
                            <td><a href="#" class="apply-btn">Apply Now</a></td>
                        </tr>

                        <!-- IndusInd Tiger -->
                        <tr>
                            <td>
                                <div class="card-name-cell">
                                    <div class="card-img-placeholder" style="background: linear-gradient(135deg, #e8f5e9, #c8e6c9);"><i class="fas fa-credit-card fa-3x" style="color:#2e7d32;"></i></div>
                                    <strong>IndusInd Tiger Credit Card</strong>
                                </div>
                            </td>
                            <td>
                                <span class="ltf-badge">LIFETIME FREE</span>
                            </td>
                            <td>
                                <ul class="benefits-list">
                                    <li><i class="fas fa-check"></i> Up to 6x accelerated rewards</li>
                                    <li><i class="fas fa-check"></i> 8 Domestic + 2 Int'l Lounges</li>
                                    <li><i class="fas fa-check"></i> Complimentary Golf & Movies</li>
                                </ul>
                            </td>
                            <td><span class="best-for-tag">Travel & Premium Perks</span></td>
                            <td>
                                <div style="font-size:14px;"><b>Min:</b> ₹12-15 Lakh pa</div>
                            </td>
                            <td><a href="#" class="apply-btn">Apply Now</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- 6. WHY CHOOSE FINOWINGS -->
    <section class="why-finowings" id="why-us">
        <div class="container-fw">
            <div class="section-header anim-up">
                <h2>Why Apply Credit Cards with Finowings?</h2>
                <p>We combine technology and expert financial analysis to help you find the card that pays you back.</p>
            </div>
            <div class="why-grid">
                <div class="why-card anim-up">
                    <i class="fas fa-search-dollar"></i>
                    <h4>Compare 50+ Cards</h4>
                    <p>Neutral, bank-agnostic recommendations tailored to your spending patterns.</p>
                </div>
                <div class="why-card anim-up">
                    <i class="fas fa-running"></i>
                    <h4>Instant Approval Engine</h4>
                    <p>Pre-filled forms & 60-second eligibility checks for faster processing.</p>
                </div>
                <div class="why-card anim-up">
                    <i class="fas fa-lightbulb"></i>
                    <h4>Expert Recommendations</h4>
                    <p>We analyze reward caps and devaluations so you don't have to.</p>
                </div>
                <div class="why-card anim-up">
                    <i class="fas fa-hand-holding-usd"></i>
                    <h4>Zero Hidden Charges</h4>
                    <p>Full fee transparency + RBI-compliant disclosures on every card.</p>
                </div>
                <div class="why-card anim-up">
                    <i class="fas fa-headset"></i>
                    <h4>Dedicated Support</h4>
                    <p>24x7 chat support and real-time application tracking until your card arrives.</p>
                </div>
                <div class="why-card anim-up">
                    <i class="fas fa-users"></i>
                    <h4>10,000+ Success Stories</h4>
                    <p>Read real user testimonials. Our 4.9/5 rating speaks for our service quality.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. BEGINNER GUIDE -->
    <section class="guide-section" id="guide">
        <div class="container-fw">
            <div class="section-header anim-up">
                <h2 style="font-size: 2.4rem;">How to Choose the Best Credit Card in India 2026?</h2>
                <p>Don't just apply for any card. Follow our step-by-step framework to maximize your savings.</p>
            </div>
            
            <div class="guide-content">
                <div class="guide-steps">
                    <div class="guide-step anim-up">
                        <div class="step-num">1</div>
                        <div class="step-txt">
                            <h4>Know Your Spending Pattern</h4>
                            <p>Identify where you spend the most. Is it online shopping (HDFC/SBI), utility bills (Axis), or travel (IndusInd/IDFC)?</p>
                        </div>
                    </div>
                    <div class="guide-step anim-up">
                        <div class="step-num">2</div>
                        <div class="step-txt">
                            <h4>Cashback vs Rewards</h4>
                            <p>Cashback gives direct money back (best for simple savings). Rewards give points for travel or vouchers (higher potential value).</p>
                        </div>
                    </div>
                    <div class="guide-step anim-up">
                        <div class="step-num">3</div>
                        <div class="step-txt">
                            <h4>Annual Fee vs Benefits</h4>
                            <p>Check the fee waiver criteria. Lifetime free cards are winning in 2026, but paid cards often offer higher cashback.</p>
                        </div>
                    </div>
                    <div class="guide-step anim-up">
                        <div class="step-num">4</div>
                        <div class="step-txt">
                            <h4>Eligibility & CIBIL</h4>
                            <p>Ensure you have a CIBIL score of 750+ for instant approval and better credit limits.</p>
                        </div>
                    </div>
                    <div class="guide-step anim-up">
                        <div class="step-num">5</div>
                        <div class="step-txt">
                            <h4>Check for Hidden Costs</h4>
                            <p>Look for Forex markup (if you spend abroad), fuel surcharge waivers, and late payment interest rates.</p>
                        </div>
                    </div>
                </div>

                <div class="checklist-box anim-up">
                    <h4>Pro Checklist Before Applying</h4>
                    <ul class="checklist-items">
                        <li class="checklist-item"><i class="fas fa-check-square"></i> Check latest offers (look for 2026 devaluations)</li>
                        <li class="checklist-item"><i class="fas fa-check-square"></i> Read reward caps (especially on cashback)</li>
                        <li class="checklist-item"><i class="fas fa-check-square"></i> Use our eligibility checker before applying</li>
                        <li class="checklist-item"><i class="fas fa-check-square"></i> Keep Adhaar/PAN ready for V-KYC</li>
                    </ul>
                    <div style="margin-top:30px; padding-top:20px; border-top:1px solid rgba(255,255,255,0.1);">
                        <p style="font-size:13px; color:rgba(255,255,255,0.6);"><i>*RBI regulations require mandatory KYC for all credit card applications in India.</i></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. FINAL CTA SECTION -->
    <section class="final-cta" id="apply">
        <div class="container-fw">
            <div class="anim-up">
                <h2>Ready to Get Your Credit Card Approved Today?</h2>
                <div class="offer-badges">
                    <div class="offer-badge">Zero joining fee on select cards</div>
                    <div class="offer-badge">Up to ₹5,000 welcome benefits</div>
                </div>
                <div class="hero-btns">
                    <a href="#featured" class="btn-fw-primary">Apply Now – Takes 2 Minutes <i class="fas fa-rocket"></i></a>
                    <a href="#featured" class="btn-fw-outline" style="border-color:var(--gold); color:var(--gold);">Compare All 50+ Cards</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include("footer.php"); ?>

    <!-- Scripts -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple animation on scroll
        function handleScroll() {
            $('.anim-up').each(function() {
                var top_of_element = $(this).offset().top;
                var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
                if (bottom_of_screen > top_of_element + 50) {
                    $(this).addClass('visible');
                }
            });
        }
        
        $(window).on('scroll', handleScroll);
        $(document).ready(function() {
            handleScroll(); // Trigger initial check
            
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
        });
    </script>
</body>
</html>
