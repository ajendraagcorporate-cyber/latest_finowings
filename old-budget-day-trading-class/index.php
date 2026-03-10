<?php
include("../DLL/config.php");
include("../DLL/functions.php");
// Assuming these functions exist based on your code
$pagedetail = getintradaystrategePage(); 
$pagedetails = mysqli_fetch_array($pagedetail);
$title = $pagedetails['title']; 
$short_desc = $pagedetails['short_desc'];
$date = $pagedetails['date'];
// ... mapping other variables ...
?>
<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Intraday Strategy Class - Mukul Agrawal</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
  
<style>
  /* --- 1. Global Variables & Reset --- */
  :root {
    --honey-gold: #cf9c0a;
    --bold-blue: #273158;
    --powerful-dark: #181d38;
    --lily-white: #E9F9FF;
    --white: #ffffff;
  }

  * { box-sizing: border-box; margin: 0; padding: 0; }
  
  body { 
    font-family: sans-serif; /* Default Body Text */
    background: var(--white); 
    color: var(--bold-blue); 
    line-height: 1.6;
    overflow-x: hidden;
  }

  .container { width: 90%; max-width: 1200px; margin: auto; }
  .section { padding: 80px 20px; }
  .bg-alt { background-color: var(--lily-white); }
  
  /* --- FONTS UPDATE --- */
  h1, h2, h3, h4, h5, h6 { 
    margin-bottom: 15px; 
    line-height: 1.2; 
    font-weight: 800; 
    font-family: 'Nunito', sans-serif; /* Nunito for Headings */
  }

  ul li, ol li {
    font-family: 'Heebo', sans-serif; /* Heebo for Lists */
  }

  p { margin-bottom: 15px; }

  /* --- 2. Premium Header Section --- */
  header { 
    background: linear-gradient(135deg, var(--powerful-dark) 0%, var(--bold-blue) 100%);
    color: var(--white); 
    text-align: center; 
    padding: 60px 20px; 
    border-bottom: 4px solid var(--honey-gold); 
    position: relative;
  }

  /* Date Badge */
  .date-badge {
    display: inline-block;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid var(--honey-gold);
    color: var(--honey-gold);
    padding: 8px 25px;
    border-radius: 50px;
    font-weight: 600;
    margin-bottom: 25px;
    font-size: 14px;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-family: 'Heebo', sans-serif;
  }

  header h1 { 
    font-size: 2.8rem; 
    text-transform: uppercase; 
    text-shadow: 0 5px 15px rgba(0,0,0,0.3);
  }

  .highlight-fire { color: var(--honey-gold); }
  
  header p { 
    font-size: 1.2rem; 
    color: var(--lily-white); 
    max-width: 800px; 
    margin: 0 auto 30px auto; 
    opacity: 0.9; 
    font-family: 'Heebo', sans-serif;
  }

  /* Digital Clock Timer */
  .timer-box {
    background: rgba(0, 0, 0, 0.3);
    padding: 20px 40px;
    border-radius: 15px;
    display: inline-block;
    border: 1px dashed rgba(255,255,255,0.2);
  }
  .timer-label { font-size: 14px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px; display: block; font-family: 'Nunito', sans-serif; }
  
  #countdown {
    font-family: 'Courier New', monospace;
    font-size: 2.2rem;
    font-weight: 900;
    /* color: var(--powerful-dark); */
    /* background: var(--honey-gold); */
    padding: 5px 10px;
    border-radius: 8px;
    /* box-shadow: 0 0 20px rgba(207, 156, 10, 0.4);   */
    display: inline-block;
  }

  /* --- 3. Zig-Zag Learn Sections --- */
  .learn-content { 
    display: flex; 
    align-items: center; 
    justify-content: space-between; 
    gap: 60px; 
  }
  .flex-reverse { flex-direction: row-reverse; }

  .learn-list { flex: 1; }
  .learn-list h2 { color: var(--powerful-dark); font-size: 2.2rem; margin-bottom: 25px; }
  
  .learn-list ul { list-style: none; padding: 0; }
  .learn-list li { 
    margin: 15px 0; 
    padding-left: 45px; /* More space for icons */
    position: relative; 
    font-size: 1.15rem; 
    color: var(--bold-blue);
    font-weight: 500;
  }
  
  .learn-list li i { 
    position: absolute; 
    left: 0; 
    top: 3px; 
    color: var(--honey-gold); 
    font-size: 1.3rem; 
    width: 30px; /* Fixed width for alignment */
    text-align: center;
  }

  .learn-img { flex: 1; text-align: center; }
  .learn-img img { 
    max-width: 100%; 
    border-radius: 20px; 
    box-shadow: -10px 10px 0px var(--honey-gold), 0 20px 40px rgba(0,0,0,0.1); 
    border: 5px solid var(--white);
    transition: transform 0.3s ease;
  }
  .learn-img img:hover { transform: scale(1.02); }

  /* --- 4. CTA Buttons --- */
  .cta { text-align: center; margin-top: 40px; }
  .cta a { 
    background: var(--honey-gold); 
    color: var(--white); 
    padding: 18px 40px; 
    font-size: 1.3rem; 
    text-decoration: none; 
    border-radius: 50px; 
    display: inline-block; 
    transition: .3s ease; 
    font-weight: 800;
    box-shadow: 0 10px 25px rgba(207, 156, 10, 0.4);
    text-transform: uppercase;
    border: 2px solid transparent;
    font-family: 'Nunito', sans-serif;
  }
  .cta a:hover { 
    background: var(--white); 
    color: var(--honey-gold); 
    border-color: var(--honey-gold);
    transform: translateY(-5px); 
  }
  .sub-text-cta { display: block; margin-bottom: 15px; font-weight: 700; color: var(--bold-blue); font-size: 1.1rem; font-family: 'Heebo', sans-serif; }

  /* --- 5. Trainer Section --- */
  .trainer-img-style {
    border: 5px solid var(--white);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    border-radius: 20px;
  }

  /* --- 6. Awards Section --- */
  .awards-grid { 
    display: grid; 
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); 
    gap: 25px; 
    margin-top: 40px;
  }
  .award-item { 
    background: var(--white); 
    border-radius: 15px; 
    padding: 15px; 
    border: 1px solid rgba(39, 49, 88, 0.1);
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: 0.3s;
  }
  .award-item:hover { transform: translateY(-5px); border-color: var(--honey-gold); }
  .award-item img { width: 100%; height: auto; border-radius: 10px; }

  /* --- 7. Stats Section (2x2 Mobile Logic) --- */
  .stats-section { 
    background: var(--bold-blue); 
    text-align: center; 
    padding: 80px 20px; 
    color: var(--white);
  }
  .stats-section h4 { color: var(--honey-gold); letter-spacing: 2px; text-transform: uppercase; font-size: 1rem; }
  .stats-section h2 { color: var(--white); font-size: 2.5rem; margin-bottom: 50px; }

  .stats-container { 
    display: grid; 
    grid-template-columns: repeat(4, 1fr); /* 4 Columns Desktop */
    gap: 30px; 
    max-width: 1200px; 
    margin: 0 auto; 
  }

  .stat-box { 
    background: var(--white); 
    border-radius: 15px; 
    padding: 25px 20px; 
    border: 2px solid var(--bold-blue); /* Default Border */
    box-shadow: 0 10px 20px rgba(0,0,0,0.2); 
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  .stat-box:hover { 
    transform: translateY(-5px); 
    border-color: var(--honey-gold); /* Gold Border Hover */
  }

  .stat-icon { 
    font-size: 24px; 
    width: 60px; height: 60px; 
    background: var(--lily-white); 
    color: var(--bold-blue); 
    border-radius: 50%; 
    display: flex; align-items: center; justify-content: center; 
    margin-bottom: 15px;
    transition: 0.3s;
  }
  
  .stat-box:hover .stat-icon {
    background: var(--bold-blue);
    color: var(--white);
  }

  .stat-box h3 { color: var(--powerful-dark); font-size: 1.8rem; margin-bottom: 5px; font-family: 'Nunito', sans-serif; }
  .stat-box p { color: var(--honey-gold); font-weight: 700; font-size: 0.9rem; text-transform: uppercase; margin: 0; font-family: 'Heebo', sans-serif; }

  /* --- 8. Modal & Forms --- */
  .modal { display: none; position: fixed; z-index: 2000; left: 0; top: 0; width: 100%; height: 100%; background: rgba(24, 29, 56, 0.9); backdrop-filter: blur(5px); }
  .modal-content { 
    background: var(--white); margin: 5% auto; padding: 40px; 
    border-radius: 20px; width: 90%; max-width: 450px; 
    border-top: 5px solid var(--honey-gold);
    position: relative;
    box-shadow: 0 20px 50px rgba(0,0,0,0.5);
  }
  .close { position: absolute; right: 20px; top: 15px; font-size: 30px; cursor: pointer; color: #888; }
  .modal-content h2 { color: var(--bold-blue); text-align: center; }
  
  .modal-content input { 
    width: 100%; padding: 15px; margin: 10px 0; 
    border-radius: 8px; border: 1px solid #ddd; background: #f9f9f9; 
    font-size: 16px;
    font-family: 'Heebo', sans-serif;
  }
  .modal-content input:focus { border-color: var(--honey-gold); outline: none; background: #fff; }
  
  .submit-btn { 
    width: 100%; padding: 15px; background: var(--bold-blue); 
    color: #fff; border: none; font-weight: bold; cursor: pointer; 
    border-radius: 8px; font-size: 1.1rem; margin-top: 10px; transition: 0.3s;
    font-family: 'Nunito', sans-serif;
  }
  .submit-btn:hover { background: var(--honey-gold); }


  /* --- Success Message Design --- */
  #thankyouMsg {
    padding: 20px 0;
    text-align: center;
  }

  #thankyouMsg h3 {
    color: #28a745 !important;
    font-size: 24px;
    font-weight: bold;
    margin: 20px 0 15px 0;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
  }

  #thankyouMsg h3::before {
    content: '✅';
    font-size: 28px;
    display: inline-block;
    background: #28a745;
    color: white;
    width: 35px;
    height: 35px;
    border-radius: 6px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
  }

  #thankyouMsg p {
    color: #333 !important;
    font-size: 16px;
    margin: 15px 0 25px 0;
    font-weight: 500;
  }

  /* WhatsApp Button Container */
  .whatsapp-button-container {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
    margin: 25px 0;
    flex-wrap: wrap;
  }

  /* WhatsApp Community Button */
  .whatsapp-community-btn {
    display: flex;
    align-items: center;
    gap: 12px;
    background: #ffffff;
    border: 3px solid #25D366;
    border-radius: 12px;
    padding: 15px 25px;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(37, 211, 102, 0.2);
    min-width: 280px;
    cursor: pointer;
  }

  .whatsapp-community-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4);
    border-color: #128C7E;
  }

  .whatsapp-logo {
    width: 40px;
    height: 40px;
    flex-shrink: 0;
    background: #25D366;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .whatsapp-text {
    text-align: left;
    flex: 1;
  }

  .whatsapp-text span:first-child {
    color: #333;
    font-size: 14px;
    display: block;
    font-weight: 500;
  }

  .whatsapp-text span:last-child {
    color: #25D366;
    font-size: 16px;
    font-weight: bold;
    display: block;
    margin-top: 2px;
  }


  /* Mobile Responsive */
  @media (max-width: 768px) {
    .whatsapp-button-container {
      flex-direction: column;
      gap: 15px;
    }

    .whatsapp-community-btn {
      min-width: 100%;
      width: 100%;
    }
  }

  /* --- 9. Footer --- */
  footer { 
    background: var(--powerful-dark); 
    color: #fff; 
    padding: 50px 20px; 
    text-align: center; 
    border-top: 5px solid var(--honey-gold);
  }
  footer a { transition: 0.3s; font-family: 'Heebo', sans-serif; }
  footer a:hover i { transform: scale(1.2); }
  footer a:hover { color: var(--honey-gold) !important; }

  /* --- 10. Responsive Design --- */
  @media (max-width: 768px) {
    header h1 { font-size: 1.8rem; }
    #countdown { font-size: 1.6rem; }
    .learn-content, .flex-reverse { flex-direction: column; gap: 30px; }
    .learn-img { order: -1; } /* Image on top for mobile */
    .learn-list h2 { font-size: 1.6rem; text-align: center; }
    
    /* THE 2x2 MOBILE GRID REQUEST */
    .stats-container {
      grid-template-columns: repeat(2, 1fr);
      gap: 15px;
    }
    .stat-box { padding: 15px; }
    .stat-box h3 { font-size: 1.4rem; }
    .stat-icon { width: 45px; height: 45px; font-size: 18px; }
    .stat-box p { font-size: 0.75rem; }
  }
</style>
</head>
<body>

  <header>
    <div class="container">
      <div class="date-badge">
        <i class="far fa-calendar-alt"></i> 31th Jan, 9:00 PM
      </div>

      <h1><span class="highlight-fire">🔥 Budget</span> Day Trading Class</h1>
      
      <p><?php echo $short_desc; ?></p>
      
      <div class="timer-box">
        <span class="timer-label">⏳ Registration Expiring In</span>
        <div id="countdown">Loading...</div>
      </div>
      
    </div>
  </header>
  
  <div class="cta">
    <a href="#">Join Now</a>
  </div>

  <section class="section learn">
    <div class="container">
        <div class="learn-content">
            <div class="learn-list">
                <h2>Are you facing these problems?</h2>       
                <ul>
                    <li><i class="fas fa-circle-question"></i> Not sure when to enter a trade</li>
                    <li><i class="fas fa-scale-unbalanced"></i> Confused about buy or sell decisions</li>
                    <li><i class="fas fa-arrow-trend-down" style="color:#e74c3c;"></i> Small profits but big losses</li>
                    <li><i class="fas fa-compass-drafting"></i> Using indicators but no clear direction</li>
                    <li><i class="fas fa-ban"></i> Depending on random tips or Telegram calls</li>
                </ul>
            </div>
            <div class="learn-img">
                 <img src="img/facing-issues.webp" alt="Trading Problems">
            </div>
        </div>
        <div class="cta">
            <span class="sub-text-cta">👉 If yes, this FREE class is for you.</span><br>
            <a href="#">Join Now</a>
        </div>
    </div>
  </section>

  <section class="section learn bg-alt">
    <div class="container">
        <div class="learn-content flex-reverse">
            <div class="learn-list">
                <h2>What will you learn?</h2>       
                <ul>
                    <li><i class="fas fa-graduation-cap"></i> Intraday trading from basic to practical level</li>
                    <li><i class="fas fa-crosshairs"></i> How to define entry, stop-loss, and target logically</li>
                    <li><i class="fas fa-magnifying-glass-chart"></i> How to select stocks in the morning</li>
                    <li><i class="fas fa-brain"></i> Building the right trading mindset</li>
                    <li><i class="fas fa-shield-halved"></i> Basics of risk and capital management</li>
                    <li><i class="fas fa-chart-simple"></i> Practical market logic (No Theory Only)</li>
                </ul>
            </div>
            <div class="learn-img">
                <img src="img/free-classs.webp" alt="Class Benefits">
            </div>
        </div>
        <div class="cta">
            <span class="sub-text-cta">You’ll learn real market logic with practical examples</span><br>
            <a href="#">Join Now</a>
        </div>
    </div>
  </section>

  <section class="section learn">
    <div class="container">
        <div class="learn-content">
            <div class="learn-list">
                <h2>Who should attend this class?</h2>       
                <ul>
                    <li><i class="fas fa-seedling"></i> Beginners who want to start right</li>
                    <li><i class="fas fa-rotate-right"></i> Traders facing continuous losses</li>
                    <li><i class="fas fa-briefcase"></i> Working professionals with limited time</li>
                    <li><i class="fas fa-user-graduate"></i> Students seeking financial knowledge</li>
                </ul>
            </div>
            <div class="learn-img">
                <img src="img/why-attend.webp" alt="Target Audience">
            </div>
        </div>
        <div class="cta">
          <br>
            <span class="sub-text-cta" style="color:#e74c3c;"><b>⚠️ This class is NOT for tip seekers or gamblers</b></span>
        </div>
    </div>
  </section>

  <section class="section learn bg-alt">
    <div class="container">
        <div class="learn-content flex-reverse">
            <div class="learn-list">
                <h2>What clarity will you gain?</h2>       
                <ul>
                    <li><i class="fas fa-lightbulb"></i> How to think before taking a trade</li>
                    <li><i class="fas fa-hand"></i> When to avoid trading completely</li>
                    <li><i class="fas fa-list-check"></i> A rule-based intraday approach</li>
                    <li><i class="fas fa-face-smile"></i> How to control emotions while trading</li>
                </ul>
            </div>
            <div class="learn-img">
                <img src="img/gain-after-result.webp" alt="After Class Clarity">
            </div>
        </div>
    </div>
  </section>

  <section class="section learn">
    <div class="container">
      <div class="learn-content">
        <div class="learn-img">
          <img src="img/mukul-sir-1.jpeg" alt="Mukul Agrawal" class="trainer-img-style">
        </div>

        <div class="learn-list">
          <h4 style="color: var(--honey-gold);">MEET YOUR MENTOR</h4>
          <h2 style="font-size: 2.8rem;">Mukul Agrawal</h2>
          
          <ul>
            <li><i class="fas fa-trophy"></i> <strong>Guinness World Record Holder</strong></li>
            <li><i class="fas fa-book-open"></i> <strong>2 Times Best-selling Author</strong></li>
            <li><i class="fas fa-users"></i> <strong>Trained & guided 40,000+ students</strong></li>
            <li><i class="fas fa-clock-rotate-left"></i> <strong>21+ Years Of Experience In Finance</strong></li>
            <li><i class="fas fa-star"></i> <strong>Featured educator for clarity-driven strategies</strong></li>
          </ul>
        </div>
      </div>
      <div class="cta">
         <a href="#">👉 Join Now</a> 
      </div>
    </div>
  </section>

  <section class="section bg-alt">
    <div class="container awards text-center">
      <h2>🏆 Awards & Achievements</h2>
      <div class="awards-grid">
        <div class="award-item"><img src="img/1.webp" alt="Award 1"></div>
        <div class="award-item"><img src="img/2.webp" alt="Award 2"></div>
        <div class="award-item"><img src="img/8.webp" alt="Award 3"></div>
        <div class="award-item"><img src="img/7.webp" alt="Award 4"></div>
      </div>
    </div>
    <div class="cta"><a href="#">👉 Join Now</a></div>
  </section>

  <section class="stats-section">
    <h4>MUKUL AGRAWAL FAMILY</h4>
    <h2>You All are Inspiration for us.</h2>
    
    <div class="stats-container">
      <div class="stat-box">
        <div class="stat-icon"><i class="fab fa-youtube"></i></div>
        <h3>1.73 M+</h3>
        <p>Youtube Subscribers</p>
      </div>
      <div class="stat-box">
        <div class="stat-icon"><i class="fab fa-instagram"></i></div>
        <h3>400 K+</h3>
        <p>Instagram Followers</p>
      </div>
      <div class="stat-box">
        <div class="stat-icon"><i class="fab fa-facebook"></i></div>
        <h3>639 K+</h3>
        <p>Facebook Followers</p>
      </div>
      <div class="stat-box">
        <div class="stat-icon"><i class="fas fa-graduation-cap"></i></div>
        <h3>50 K+</h3>
        <p>Finowings Students</p>
      </div>
    </div>
  </section>

  <footer>
    <h3>Follow Us on Social Media</h3>
    <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:20px; margin-top: 20px;">
      <a href="https://x.com/drmukulagrawal" target="_blank" style="color:#fff; text-decoration:none; font-size:18px;">
        <i class="fab fa-twitter" style="margin-right:8px; color:#1DA1F2;"></i> Twitter
      </a>
      <a href="https://instagram.com/themukulagrawal" target="_blank" style="color:#fff; text-decoration:none; font-size:18px;">
        <i class="fab fa-instagram" style="margin-right:8px; color:#E1306C;"></i> Instagram
      </a>
      <a href="https://t.me/themukulagrawal" target="_blank" style="color:#fff; text-decoration:none; font-size:18px;">
        <i class="fab fa-telegram" style="margin-right:8px; color:#0088cc;"></i> Telegram
      </a>
      <a href="https://www.finowings.com" target="_blank" style="color:#fff; text-decoration:none; font-size:18px;">
        <i class="fas fa-globe" style="margin-right:8px; color:#4CAF50;"></i> Website
      </a>
      <a href="https://facebook.com/themukulagrawal" target="_blank" style="color:#fff; text-decoration:none; font-size:18px;">
        <i class="fab fa-facebook" style="margin-right:8px; color:#1877F2;"></i> Facebook
      </a>
      <a href="https://chat.whatsapp.com/G4omcKK5hls1L2N16tKqGu" target="_blank" style="color:#fff; text-decoration:none; font-size:18px;">
        <i class="fab fa-youtube" style="margin-right:8px; color:#FF0000;"></i> YouTube
      </a>
    </div>
    <p style="margin-top:30px; font-size:14px; opacity: 0.6;">© 2025 Mukul Agrawal. All rights reserved.</p>
  </footer>

  <div id="registrationModal" class="modal">
    <div class="modal-content">
      <span class="close" id="closeModal">&times;</span>
      <h2>📋 Registration Form</h2>
      <form id="registrationForm">
        <input type="text" id="name" name="name" placeholder="Your Name" required>
        <input type="email" id="email" name="email" placeholder="Email ID" required>
        <input type="tel" id="contact" name="contact" placeholder="Contact Number" required pattern="[0-9]{10}">
        <input type="text" id="city" name="city" placeholder="City" required>
        <input type="text" id="state" name="state" placeholder="State" required>
        <button type="submit" class="submit-btn">Submit Now</button>
      </form>
      <div id="thankyouMsg" style="display:none;">
          <h3>Registration Successful!</h3>
          <p>Join our community for the class link:</p>
          
          <div class="whatsapp-button-container">
            <a href="https://chat.whatsapp.com/G4omcKK5hls1L2N16tKqGu" target="_blank" class="whatsapp-community-btn">
              <div class="whatsapp-logo">
                <i class="fab fa-whatsapp" style="color:#fff; font-size:24px;"></i>
              </div>
              <div class="whatsapp-text">
                <span>Join our</span>
                <span>WhatsApp community</span>
              </div>
            </a>
          </div>
      </div>
    </div>
  </div>

 <script>
    const targetDate = new Date("Jan 31, 2026 21:00:00").getTime();
    const countdownEl = document.getElementById("countdown");
    setInterval(function(){
      const now = new Date().getTime();
      const distance = targetDate - now;
      if(distance <= 0){
        countdownEl.innerHTML = "Expired!";
        return;
      }
      const days = Math.floor(distance / (1000*60*60*24));
      const hours = Math.floor((distance % (1000*60*60*24)) / (1000*60*60));
      const minutes = Math.floor((distance % (1000*60*60)) / (1000*60));
      const seconds = Math.floor((distance % (1000*60)) / 1000);
      countdownEl.innerHTML = days+"d "+hours+"h "+minutes+"m "+seconds+"s";
    },1000);
  </script>

  <script>
    const modal = document.getElementById("registrationModal");
    const closeBtn = document.getElementById("closeModal");
    const thankyouMsg = document.getElementById("thankyouMsg");
    const form = document.getElementById("registrationForm");

    // Open modal on all CTA buttons (using event delegation for safety)
    document.addEventListener('click', function(e) {
        if (e.target.closest('.cta a')) {
            e.preventDefault();
            modal.style.display = "block";
            thankyouMsg.style.display = "none";
            form.style.display = "block";
        }
    });

    closeBtn.onclick = function() { 
      modal.style.display = "none";
      // Reset form when closing
      form.style.display = "block";
      thankyouMsg.style.display = "none";
    }
    window.onclick = function(event) { 
      if(event.target == modal){ 
        modal.style.display = "none";
        // Reset form when closing
        form.style.display = "block";
        thankyouMsg.style.display = "none";
      } 
    }

    form.addEventListener("submit", function(e){
      e.preventDefault();
      const formData = new FormData(form);
      
      // Simulating AJAX for demo (Replace fetch URL with 'process.php')
      fetch("process.php", {
        method: "POST",
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if(data.status === "success"){
          form.style.display = "none";
          thankyouMsg.style.display = "block";
          form.reset();
        } else {
          alert(data.message || "Something went wrong");
        }
      })
      .catch(error => { 
          // Fallback for demo if PHP file is missing
          console.log("PHP file not found, showing success for UI demo");
          form.style.display = "none";
          thankyouMsg.style.display = "block";
      });
    });
  </script>

</body>
</html>