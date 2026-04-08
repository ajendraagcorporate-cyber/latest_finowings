<?php
session_start();
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
    ob_start('ob_gzhandler');
else ob_start();

include("DLL/config.php");
include("DLL/functions.php");

$active_page = 'contact';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Finowings – Expert Stock Market Course Guidance | Lucknow Office</title>
    <meta name="description" content="Contact Finowings for expert guidance on stock market courses, technical analysis, IPOs, and investing queries. Call +91-9708094321 (24/7) or fill the form for a reply within 24 hours.">
    <link rel="canonical" href="https://www.finowings.com/contact.php" />
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Nunito:wght@600;700;800&family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/new-css.css" rel="stylesheet">
    
    <style>
        :root {
            --navy: #273158;
            --gold: #cf9c0a;
            --white: #ffffff;
            --light: #f8f9fa;
            --text: #1a1a1a;
            --muted: #666666;
            --border: #e0e0e0;
            --transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.08);
            --shadow-md: 0 8px 24px rgba(0, 0, 0, 0.12);
        }

        body {
            font-family: 'DM Sans', sans-serif;
            color: var(--text);
            background: #ffffff;
            line-height: 1.6;
        }

        h1, h2, h3, .playfair { font-family: 'Playfair Display', serif; }
        h4, h5, h6, .nunito { font-family: 'Nunito', sans-serif; }

        /* ==================== HERO SECTION ==================== */
        .hero-section {
            background: linear-gradient(135deg, var(--navy) 0%, #1a2039 100%);
            padding: 90px 20px;
            color: white;
            position: relative;
            overflow: hidden;
            text-align: center;
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: radial-gradient(circle at 20% 50%, rgba(207, 156, 10, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }
        .contact-hero h1 {
            font-size: clamp(2.2rem, 5vw, 3.8rem);
            line-height: 1.2;
            margin-bottom: 20px;
            font-weight: 900;
            color: var(--white); /* Added white color for visibility */
        }
        .hero-section h2 {
            font-size: clamp(1.1rem, 3vw, 1.5rem);
            font-weight: 400;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 35px;
            animation: slideUp 0.8s ease-out 0.2s both;
        }
        .hero-cta {
            display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;
            animation: slideUp 0.8s ease-out 0.4s both;
        }
        @keyframes slideUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }

        /* Buttons matching your design */
        .btn-call-new {
            background: var(--gold);
            color: var(--navy);
            padding: 14px 32px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex; align-items: center; gap: 10px;
            transition: var(--transition);
        }
        .btn-call-new:hover { background: #e0a80f; transform: translateY(-2px); box-shadow: 0 8px 20px rgba(207, 156, 10, 0.3); color: var(--navy); }
        .btn-query-new {
            background: transparent;
            color: white;
            border: 2px solid var(--gold);
            padding: 14px 32px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex; align-items: center; gap: 10px;
            transition: var(--transition);
        }
        .btn-query-new:hover { background: var(--gold); color: var(--navy); transform: translateY(-2px); }

        /* ==================== CONTACT WRAPPER ==================== */
        .contact-wrapper { max-width: 1200px; margin: 0 auto; padding: 80px 20px; }
        .contact-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; }
        @media (max-width: 991px) { .contact-grid { grid-template-columns: 1fr; } }

        .info-card-new {
            background: white;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 20px;
            display: flex; gap: 20px; align-items: flex-start;
            border-left: 4px solid var(--gold);
            transition: var(--transition);
            box-shadow: var(--shadow-sm);
        }
        .info-card-new:hover { transform: translateX(8px); box-shadow: var(--shadow-md); }
        .info-icon-new {
            width: 55px; height: 55px;
            background: var(--navy);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            color: var(--gold);
            font-size: 1.4rem;
            flex-shrink: 0;
        }
        .info-content-new h4 { color: var(--navy); font-size: 1.1rem; margin-bottom: 5px; font-weight: 700; }
        .info-content-new p, .info-content-new a { color: var(--muted); font-size: 0.95rem; margin: 0; text-decoration: none; }
        .info-content-new a:hover { color: var(--gold); }

        /* FORM SECTION */
        .form-section-new {
            background: var(--light);
            padding: 45px;
            border-radius: 12px;
            box-shadow: var(--shadow-sm);
        }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-weight: 700; color: var(--navy); font-size: 0.95rem; }
        .form-control-new {
            width: 100%; padding: 12px 15px; border: 1.5px solid var(--border); border-radius: 6px;
            transition: var(--transition); font-family: inherit;
        }
        .form-control-new:focus { outline: none; border-color: var(--gold); box-shadow: 0 0 0 4px rgba(207, 156, 10, 0.1); }
        .btn-submit-new {
            background: var(--navy); color: white; padding: 14px; width: 100%; border: none; border-radius: 6px;
            font-weight: 700; cursor: pointer; transition: var(--transition); display: flex; align-items: center; justify-content: center; gap: 10px;
        }
        .btn-submit-new:hover { background: #1a2039; transform: translateY(-2px); box-shadow: var(--shadow-md); }

        /* WHY CONTACT US */
        .why-section { background: #fdfdfd; padding: 100px 20px; text-align: center; }
        .features-grid { 
            display: grid; 
            grid-template-columns: repeat(3, 1fr); 
            gap: 30px; 
            margin-top: 50px; 
            max-width: 1200px; 
            margin-left: auto; 
            margin-right: auto;
        }
        @media (max-width: 991px) { .features-grid { grid-template-columns: repeat(2, 1fr); } }
        @media (max-width: 767px) { .features-grid { grid-template-columns: 1fr; } }
        
        .feature-card-new {
            background: white; padding: 40px 30px; border-radius: 20px; transition: var(--transition);
            border: 1px solid #f0f0f0; box-shadow: var(--shadow-sm); text-align: center;
        }
        .feature-card-new:hover { transform: translateY(-8px); box-shadow: var(--shadow-md); border-color: var(--gold); }
        .feat-icon-new {
            width: 70px; height: 70px; background: var(--gold); border-radius: 50%;
            display: flex; align-items: center; justify-content: center; font-size: 1.8rem; color: white; margin: 0 auto 25px;
        }
        .feature-card-new h4 { color: var(--navy); font-size: 1.25rem; margin-bottom: 15px; font-weight: 700; }
        .feature-card-new p { color: var(--muted); font-size: 0.95rem; line-height: 1.6; }

        /* FAQ ACCORDION - Screenshot Style */
        .faq-section { max-width: 1100px; margin: 80px auto; padding: 0 20px; }
        .faq-header-new { text-align: left; margin-bottom: 40px; }
        .faq-header-new h2 { font-size: 1.8rem; color: var(--navy); font-weight: 700; font-family: 'DM Sans', sans-serif; }
        
        .faq-item-custom { 
            margin-bottom: 20px; 
            border-radius: 8px; 
            overflow: hidden; 
            box-shadow: 0 4px 12px rgba(0,0,0,0.06); 
            border: 1px solid #eee; 
            background: white;
            transition: 0.3s;
            position: relative;
        }
        /* The yellow line on the left */
        .faq-item-custom::before {
            content: ''; position: absolute; left: 0; top: 0; bottom: 0; width: 5px; 
            background: var(--gold); z-index: 5;
        }
        
        .faq-question-btn { 
            width: 100%; text-align: left; padding: 22px 30px; background: white; border: none; 
            font-weight: 600; color: var(--navy); font-size: 1rem; display: flex; 
            justify-content: space-between; align-items: center; cursor: pointer; transition: 0.3s;
            padding-left: 35px; /* Space for the yellow line */
        }
        .faq-question-btn:not(.collapsed) { 
            background: var(--navy); /* Navy background when expanded */
            color: white; 
        }
        .faq-question-btn i { font-size: 1rem; transition: 0.3s; color: var(--navy); }
        .faq-question-btn:not(.collapsed) i { transform: rotate(180deg); color: white; }
        
        .faq-answer-body { padding: 0; max-height: 0; overflow: hidden; transition: max-height 0.3s ease-out; background: white; }
        .faq-answer-body.show { max-height: 500px; }
        .faq-answer-content { padding: 30px 40px; color: #333; font-size: 1rem; line-height: 1.7; border-top: 1px solid #f9f9f9; }

        /* SCROLL ANIMATION */
        .scroll-fade { opacity: 0; transform: translateY(30px); transition: var(--transition); }
        .scroll-fade.visible { opacity: 1; transform: translateY(0); }

        #error_message { color: #dc3545; font-size: 14px; margin-top: 10px; font-weight: 600; }
        #results { color: #28a745; font-weight: 700; margin-top: 10px; }
    </style>
</head>
<body>

    <!-- Navbar -->
    <?php include("top-navigation.php"); ?>

    <!-- Section 1: Hero Section -->
        <section class="hero-section">
            <div class="container">
                <h1>
                    <span style="color: #fff;">Contact Finowings</span> 
                </h1>
                <br>
                <p style="font-size: 1.1rem; max-width: 800px; margin: 0 auto 40px; color: rgba(255, 255, 255, 0.85); line-height: 1.6;">
                    Have questions about our stock market courses, technical analysis, or investment strategies? 
                    Our <strong>SEBI-experienced</strong> experts are ready to guide you.
                </p>
        
                <div class="hero-cta" style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="tel:+9708094321" class="btn-call-new">
                        <i class="fas fa-phone"></i> Call Now
                    </a>
                    <a href="#contact-grid" class="btn-query-new">
                        <i class="fas fa-envelope"></i> Send Query – Reply in 24h
                    </a>
                </div>
            </div>
        </section>

    <!-- MAIN CONTACT SECTION -->
    <div class="contact-wrapper" id="contact-grid">
        <div class="contact-grid">
            <!-- LEFT: INFO & MAP -->
            <div>
                <h3 style="margin-bottom: 35px; color: var(--navy);">
                    <i class="fas fa-info-circle" style="margin-right: 12px; color: var(--gold);"></i>Get In Touch
                </h3>
                
                <div class="info-card-new scroll-fade">
                    <div class="info-icon-new"><i class="fas fa-phone"></i></div>
                    <div class="info-content-new">
                        <h4>Call Us 24/7</h4>
                        <a href="tel:+919708094321">+91-9708094321</a>
                    </div>
                </div>

                <div class="info-card-new scroll-fade">
                    <div class="info-icon-new"><i class="fas fa-envelope"></i></div>
                    <div class="info-content-new">
                        <h4>Email Us</h4>
                        <a href="mailto:info@finowings.com">info@finowings.com</a>
                    </div>
                </div>

                <div class="info-card-new scroll-fade">
                    <div class="info-icon-new"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="info-content-new">
                        <h4>Visit Our Office</h4>
                        <p>C-1, Bank of Baroda Building, Sector-M, Mama Chauraha, Kursi Road, Lucknow</p>
                    </div>
                </div>

                <div class="info-card-new scroll-fade">
                    <div class="info-icon-new"><i class="fas fa-clock"></i></div>
                    <div class="info-content-new">
                        <h4>Office Hours</h4>
                        <p>Monday to Saturday: 10:00 AM - 7:00 PM<br>Sunday: Closed</p>
                    </div>
                </div>

                <div class="scroll-fade" style="margin-top: 30px; border-radius: 12px; overflow: hidden; box-shadow: var(--shadow-sm); height: 300px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.27310086481!2d80.9547765!3d26.894826499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfdaf218e1115%3A0x4a5fcfe97266b5ac!2sFinowings%20Training%20Academy%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1767935983637!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

            <!-- RIGHT: FORM -->
            <div id="contact-form" class="form-section-new scroll-fade">
                <h3 style="margin-bottom: 15px; color: var(--navy);">
                    <i class="fas fa-paper-plane" style="margin-right: 12px; color: var(--gold);"></i>Send Us Your Query
                </h3>
                <p style="color: var(--muted); margin-bottom: 30px; font-size: 0.95rem;">
                    Fill the form below and our dedicated team will get back to you within 24 hours. Whether you need course recommendations, demo details, or investment guidance — we're here to help!
                </p>

                <form id="myform">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="name">Your Name *</label>
                            <input type="text" id="name" name="name" class="form-control-new" placeholder="Enter full name">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="email">Your Email</label>
                            <input type="email" id="email" name="email" class="form-control-new" placeholder="email@example.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="phone">Your Phone *</label>
                            <input type="text" id="phone" name="phone" class="form-control-new" placeholder="10-digit mobile">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="city">Your City *</label>
                            <input type="text" id="city" name="city" class="form-control-new" placeholder="Lucknow">
                        </div>
                        <div class="col-12 form-group">
                            <label for="enquiry_type">Select Your Query *</label>
                            <select id="enquiry_type" name="enquiry_type" class="form-control-new">
                                <option value="" disabled selected>-- Choose a topic --</option>
                                <option>Technical Analysis Classes</option>
                                <option>Mentor Support</option>
                                <option>Portfolio Review</option>
                                <option>Mutual Fund</option>
                                <option>IPO Investing</option>
                                <option>Others</option>
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <label for="message">Your Message *</label>
                            <textarea id="message" name="message" class="form-control-new" rows="4" placeholder="How can we help you?"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="button" onclick="SubmitFormData();" class="btn-submit-new">
                                <i class="fas fa-paper-plane"></i> Send Message
                            </button>
                            <div id="error_message"></div>
                            <div id="results"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- WHY CONTACT US -->
    <section class="why-section">
        <div class="container">
            <h2 class="playfair" style="font-size: 2.8rem; color: var(--navy);">Why Reach Out to Finowings?
            </h2>
            <p style="color: var(--muted); margin-bottom: 50px;">Discover what makes our expert guidance invaluable for your financial journey</p>
                   <div class="features-grid">
                <div class="feature-card-new scroll-fade">
                    <div class="feat-icon-new"><i class="fas fa-user-tie"></i></div>
                    <h4>Experienced Mentors</h4>
                    <p>Learn directly from practicing traders with years of real market experience and proven records.</p>
                </div>
                <div class="feature-card-new scroll-fade">
                    <div class="feat-icon-new"><i class="fas fa-graduation-cap"></i></div>
                    <h4>Personalized Selection</h4>
                    <p>Confused about which course to choose? We guide you based on your goals and experience level.</p>
                </div>
                <div class="feature-card-new scroll-fade">
                    <div class="feat-icon-new"><i class="fas fa-lightbulb"></i></div>
                    <h4>Clear IPO Insights</h4>
                    <p>Get honest insights on upcoming IPOs, mutual funds, and comprehensive risk management strategies.</p>
                </div>
                <div class="feature-card-new scroll-fade">
                    <div class="feat-icon-new"><i class="fas fa-bolt"></i></div>
                    <h4>Quick Support</h4>
                    <p>No long wait times. Most students get resolution and clear answers within 24 hours.</p>
                </div>
                <div class="feature-card-new scroll-fade">
                    <div class="feat-icon-new"><i class="fas fa-layer-group"></i></div>
                    <h4>Modern Curriculum</h4>
                    <p>Stay updated with the latest market tools, trading platforms, and technical indicators used by pros.</p>
                </div>
                <div class="feature-card-new scroll-fade">
                    <div class="feat-icon-new"><i class="fas fa-shield-alt"></i></div>
                    <h4>Transparent Process</h4>
                    <p>No hidden fees or misleading promises. 100% transparency in pricing, curriculum, and outcomes.</p>
                </div>
                <div class="feature-card-new scroll-fade">
                    <div class="feat-icon-new"><i class="fas fa-handshake"></i></div>
                    <h4>End-to-End Help</h4>
                    <p>From enrollment to post-course doubt clearing and lifetime community access — we're with you.</p>
                </div>
                <div class="feature-card-new scroll-fade">
                    <div class="feat-icon-new"><i class="fas fa-infinity"></i></div>
                    <h4>Lifetime Access</h4>
                    <p>Get lifetime access to doubt sessions, community groups, and recorded classes to reinforce learning.</p>
                </div>
                <div class="feature-card-new scroll-fade">
                    <div class="feat-icon-new"><i class="fas fa-chart-line"></i></div>
                    <h4>Practical Learning</h4>
                    <p>Experience real-world trading scenarios and case studies that help you master the psychology of investing.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="hero-section" style="margin-top: 80px; padding: 70px 20px;">
        <div class="container scroll-fade">
            <h2 class="playfair" style="font-size: 2.5rem; margin-bottom: 20px; margin-right: 15px; color: var(--gold);">Ready to master the stock market?</h2>
            <p style="margin-bottom: 40px; opacity: 0.9;">Join our expert-led courses or get personalized guidance right now.</p>
            <div class="hero-cta">
                <a href="https://courses.finowings.com/stock-market-courses" class="btn-call-new" style="background: white;">Browse All Courses</a>
                <a href="tel:+919708094321" class="btn-query-new">Call Expert Now</a>
            </div>
        </div>
    </section>
    
    
    <!-- FAQ SECTION -->
    <section class="faq-section">
        <div class="faq-header-new">
            <h2>Frequently Asked Questions</h2>
        </div>
        
        <div id="faqContainer">
            <!-- 1 -->
            <div class="faq-item-custom scroll-fade">
                <button class="faq-question-btn" type="button" data-target="#q1">
                    <span>How quickly will Finowings reply to my query?</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div id="q1" class="faq-answer-body show">
                    <div class="faq-answer-content">
                        Our expert team aims to respond to all emails and form submissions within 24 hours. For urgent course-related queries, calling +91-9708094321 is the fastest way — our mentors are available 24/7.
                    </div>
                </div>
            </div>
            <!-- 2 -->
            <div class="faq-item-custom scroll-fade">
                <button class="faq-question-btn collapsed" type="button" data-target="#q2">
                    <span>What details should I include when contacting Finowings?</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div id="q2" class="faq-answer-body">
                    <div class="faq-answer-content">
                        Please mention your name, city, preferred course (e.g., Technical Analysis, Intraday Trading), and any specific doubts. This helps us give you the most accurate guidance on batch timings, fees, and eligibility.
                    </div>
                </div>
            </div>
            <!-- 3 -->
            <div class="faq-item-custom scroll-fade">
                <button class="faq-question-btn collapsed" type="button" data-target="#q3">
                    <span>Is there any fee for career or course guidance?</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div id="q3" class="faq-answer-body">
                    <div class="faq-answer-content">
                        <strong>No Fee.</strong> Our consultation and course recommendation calls are completely free. We only charge for the actual training programs you choose to join.
                    </div>
                </div>
            </div>
            <!-- 4 -->
            <div class="faq-item-custom scroll-fade">
                <button class="faq-question-btn collapsed" type="button" data-target="#q4">
                    <span>How can I join a demo class or trial session?</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div id="q4" class="faq-answer-body">
                    <div class="faq-answer-content">
                        Simply fill the contact form above or call us on +91-9708094321. Our team will share the upcoming demo class schedule and help you register for a free session.
                    </div>
                </div>
            </div>
            <!-- 5 -->
            <div class="faq-item-custom scroll-fade">
                <button class="faq-question-btn collapsed" type="button" data-target="#q5">
                    <span>What is the minimum qualification to join Finowings stock market courses?</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div id="q5" class="faq-answer-body">
                    <div class="faq-answer-content">
                        No special qualification is required. Our courses are designed for beginners as well as working professionals who want to learn trading and investing practically.
                    </div>
                </div>
            </div>
            <!-- 6 -->
            <div class="faq-item-custom scroll-fade">
                <button class="faq-question-btn collapsed" type="button" data-target="#q6">
                    <span>Can I visit your Lucknow office for in-person guidance?</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div id="q6" class="faq-answer-body">
                    <div class="faq-answer-content">
                        Absolutely! You are welcome to visit our head office at C-1, Bank of Baroda Building, Sector-M, Mama Chauraha, Kursi Road, Lucknow between 10 AM and 7 PM on weekdays.
                    </div>
                </div>
            </div>
            <!-- 7 -->
            <div class="faq-item-custom scroll-fade">
                <button class="faq-question-btn collapsed" type="button" data-target="#q7">
                    <span>Do you provide support after the course ends?</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div id="q7" class="faq-answer-body">
                    <div class="faq-answer-content">
                        Yes. All enrolled students get lifetime access to doubt-clearing sessions, community groups, and recorded classes (subject to the course plan).
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include("footer.php"); ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/submit.js"></script>
    
    <script>
        $(document).ready(function() {
            // Intersection Observer for scroll animations
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        $(entry.target).addClass('visible');
                    }
                });
            }, { threshold: 0.1 });

            $('.scroll-fade').each(function() {
                observer.observe(this);
            });

            // FAQ Custom Toggle
            $('.faq-question-btn').on('click', function() {
                const target = $(this).data('target');
                const $answer = $(target);
                const isOpening = $(this).hasClass('collapsed');

                // Close others
                $('.faq-answer-body').not($answer).removeClass('show').css('max-height', '0');
                $('.faq-question-btn').not(this).addClass('collapsed');

                if (isOpening) {
                    $(this).removeClass('collapsed');
                    $answer.addClass('show').css('max-height', $answer[0].scrollHeight + 'px');
                } else {
                    $(this).addClass('collapsed');
                    $answer.removeClass('show').css('max-height', '0');
                }
            });

            // Initialize FAQ height if any shown
            $('.faq-answer-body.show').each(function() {
                $(this).css('max-height', this.scrollHeight + 'px');
            });

            // Smooth scroll for anchors
            $('a[href^="#"]').on('click', function(e) {
                e.preventDefault();
                const target = $(this.hash);
                if (target.length) {
                    $('html, body').animate({ scrollTop: target.offset().top - 80 }, 800);
                }
            });
        });
    </script>
</body>
</html>
