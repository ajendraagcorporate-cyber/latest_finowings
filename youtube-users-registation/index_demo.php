<?php
include("../DLL/config.php");
include("../DLL/functions.php");
$pagedetail = getintradaystrategePage();
$pagedetails = mysqli_fetch_array($pagedetail);
$title = $pagedetails['title']; 
$short_desc = $pagedetails['short_desc'];
$date = $pagedetails['date'];
$p1 = $pagedetails['p1'];
$p2 = $pagedetails['p2'];
$p3 = $pagedetails['p3'];
$p4 = $pagedetails['p4'];
$p5 = $pagedetails['p5'];
$p6 = $pagedetails['p6'];
$p7 = $pagedetails['p7'];
?>
<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Intraday Strategy Class - Mukul Agrawal</title>
  
<style>
  /* 1. Global Variables & Base Styles */
  :root {
    --honey-gold: #cf9c0a;
    --bold-blue: #273158;
    --powerful-dark: #181d38;
    --lily-white: #E9F9FF;
  --lite-blue: #273158;
  }

  * { box-sizing: border-box; margin: 0; padding: 0; }
  body { 
    font-family: 'Segoe UI', Roboto, Arial, sans-serif; 
    background: #ffffff; 
    color: var(--bold-blue); 
    line-height: 1.6;
  }

  .container { width: 90%; max-width: 1200px; margin: auto; }
  .section { padding: 80px 20px; border-bottom: 1px solid #eee; }
  .bg-alt { background-color: var(--lily-white); }
  h1, h2, h3 { margin-bottom: 15px; line-height: 1.2; }

  /* 2. Header Section */
  header { 
    background: var(--lite-blue);
    color: #fff; 
    text-align: center; 
    padding: 60px 10px; 
    border-bottom: 5px solid var(--honey-gold); 
  }
  header h1 { font-size: 2.4rem; }
  header p { font-size: 1.2rem; opacity: 0.9; }
  
  .timer { 
    margin-top: 25px; 
    font-size: 1.3rem; 
    font-weight: bold; 
    background: var(--honey-gold); 
    color: #fff; 
    display: inline-block; 
    padding: 12px 25px; 
    border-radius: 8px; 
  }

  /* 3. Zig-Zag Learn Sections */
  .learn-content { 
    display: flex; 
    align-items: center; 
    justify-content: space-between; 
    gap: 50px; 
    flex-wrap: wrap;
  }
  .flex-reverse { flex-direction: row-reverse; }

  .learn-list { flex: 1; min-width: 300px; }
  .learn-list h2 { color: var(--powerful-dark); font-size: 2.1rem; }
  .learn-list ul { list-style: none; padding: 0; }
  .learn-list li { 
    margin: 18px 0; 
    padding-left: 45px; 
    position: relative; 
    font-size: 1.1rem; 
    color: #444;
  }
  /* FontAwesome Icon Support */
  .learn-list li i { 
    position: absolute; 
    left: 0; 
    top: 4px; 
    color: var(--honey-gold); 
    font-size: 1.4rem; 
  }

  .learn-img { flex: 1; text-align: center; min-width: 300px; }
  .learn-img img { 
    max-width: 100%; 
    border: 8px solid #fff;
    border-radius: 20px; 
    box-shadow: 0 15px 45px rgba(24, 29, 56, 0.15); 
  }

  /* 4. CTA Buttons */
  .cta { text-align: center; margin-top: 30px; }
  .cta a { 
    background: var(--honey-gold); 
    color: #fff; 
    padding: 18px 35px; 
    font-size: 1.4rem; 
    text-decoration: none; 
    border-radius: 8px; 
    display: inline-block; 
    transition: .3s ease; 
    font-weight: bold;
    box-shadow: 0 4px 15px rgba(207, 156, 10, 0.4);
  }
  .cta a:hover { background: var(--powerful-dark); transform: translateY(-3px); }
  .sub-text-cta { display: block; margin-top: 15px; font-weight: 600; color: var(--honey-gold); font-size: 1.2rem; }

  /* 5. Trainer & Awards */
  .trainer { display: flex; flex-wrap: wrap; align-items: center; gap: 40px; }
  .trainer-photo img {
    width: 280px;
    height: 320px;
    object-fit: cover;
    border-radius: 15px;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
  }
  
  .awards-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; }
  .award-item { background: #fff; border-radius: 10px; padding: 10px; border: 1px solid #d0eaf5; }
  .award-item img { width: 100%; height: 180px; object-fit: cover; border-radius: 8px; }

  /* 6. Stats Section */
  .stats-section { text-align: center; padding: 60px 20px; }
  .stats-section h2 { color: #1aa34a; font-size: 28px; margin-bottom: 40px; }
  .stats-container { 
    display: grid; 
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); 
    gap: 20px; 
    max-width: 1000px; 
    margin: 0 auto; 
  }
  .stat-box { 
    background: #fff; border-radius: 30px; padding: 25px; 
    box-shadow: 0 4px 12px rgba(0,0,0,0.08); transition: 0.3s;
  }
  .stat-box:hover { transform: translateY(-5px); }

  /* 7. Modal & Forms */
  .modal { display: none; position: fixed; z-index: 1000; left: 0; top: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.7); }
  .modal-content { 
    background: var(--powerful-dark); margin: 5% auto; padding: 30px; 
    border-radius: 15px; width: 90%; max-width: 400px; color: #fff; 
  }
  .modal-content input { width: 100%; padding: 12px; margin: 10px 0; border-radius: 5px; border: none; }
  .submit-btn { 
    width: 100%; padding: 12px; background: var(--honey-gold); 
    color: #fff; border: none; font-weight: bold; cursor: pointer; border-radius: 5px; 
  }

  /* 8. Responsive Design */
  @media (max-width: 768px) {
    header h1 { font-size: 1.9rem; }
    .learn-content, .flex-reverse, .trainer { flex-direction: column !important; text-align: center; }
    .learn-list li { text-align: left; }
    .learn-list h2 { font-size: 1.7rem; }
    .stats-section h2 { font-size: 22px; }
  }
</style>
 

</head>
<body>

  <!-- Header -->
  <header>
   <h1>🔥FREE INTRADAY TRADING CLASS - 8th Jan, 9 PM</h1>
    <h2>  ⏳ Registration Expiring In <br /><span id="countdown">Loading...</span></h2>

    <p><?php echo $short_desc; ?></p><br />
    
  </header>
  
  <div class="cta"><a>👉 Join Now</a></div>
   <!-- Learn -->
   <!-- Section - start -->

<section class="section learn">
    <div class="container">
        <div class="learn-content">
            <div class="learn-list">
                <h2>Are you facing these problems in Intraday Trading?</h2>       
                <ul>
                    <li><i class="fas fa-question-circle"></i> Not sure when to enter a trade</li>
                    <li><i class="fas fa-exclamation-triangle"></i> Confused about buy or sell decisions</li>
                    <li><i class="fas fa-chart-line-down" style="color:#e74c3c;"></i> Small profits but big losses</li>
                    <li><i class="fas fa-microchip"></i> Using indicators but no clear direction</li>
                    <li><i class="fas fa-comment-slash"></i> Depending on random tips or Telegram calls</li>
                </ul>
            </div>
            <div class="learn-img">
                <img src="img/facing-issues.webp" alt="Trading Problems">
            </div>
        </div>
        <div class="cta">
            <span class="sub-text-cta">👉 If yes, this FREE class is for you.</span><br>
            <!-- <a href="#">Join Now</a> -->
        </div>
    </div>
</section>

<section class="section learn bg-alt">
    <div class="container">
        <div class="learn-content flex-reverse">
            <div class="learn-list">
                <h2>What will you learn in this FREE Class?</h2>       
                <ul>
                    <li><i class="fas fa-graduation-cap"></i> Intraday trading from basic to practical level</li>
                    <li><i class="fas fa-target"></i> How to define entry, stop-loss, and target logically</li>
                    <li><i class="fas fa-search-dollar"></i> How to select stocks in the morning</li>
                    <li><i class="fas fa-brain"></i> Building the right trading mindset</li>
                    <li><i class="fas fa-user-shield"></i> Basics of risk and capital management</li>
                    <li><i class="fas fa-vial"></i> Practical market logic (No Theory Only)</li>
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
                    <li><i class="fas fa-Redo"></i> Traders facing continuous losses</li>
                    <li><i class="fas fa-briefcase"></i> Working professionals with limited time</li>
                    <li><i class="fas fa-user-graduate"></i> Students seeking financial knowledge</li>
                </ul>
            </div>
            <div class="learn-img">
                <img src="img/why-attend.webp" alt="Target Audience">
            </div>
        </div>
        <div class="cta">
            <span class="sub-text-cta" style="color:#e74c3c;">⚠️ This class is NOT for tip seekers or gamblers</span><br>
            <!-- <a href="#">Join Now</a> -->
        </div>
    </div>
</section>

<section class="section learn bg-alt">
    <div class="container">
        <div class="learn-content flex-reverse">
            <div class="learn-list">
                <h2>What clarity will you gain after this class?</h2>       
                <ul>
                    <li><i class="fas fa-lightbulb"></i> How to think before taking a trade</li>
                    <li><i class="fas fa-hand-paper"></i> When to avoid trading completely</li>
                    <li><i class="fas fa-ruler-combined"></i> A rule-based intraday approach</li>
                    <li><i class="fas fa-smile-beam"></i> How to control emotions while trading</li>
                </ul>
            </div>
            <div class="learn-img">
                <img src="img/gain-after-result.webp" alt="After Class Clarity">
            </div>
        </div>
        <div class="cta">
            <!-- <a href="#">Join Now</a> -->
        </div>
    </div>
</section>

   <!-- Section - end -->



  <!-- Trainer -->
  <section class="section learn">
  <div class="container">
    <div class="learn-content">
      <div class="learn-img">
        <img src="img/mukul-sir-1.jpeg" alt="Mukul Agrawal - Stock Market Expert" style="width: 600px; height: auto; border: 10px solid #fff;">
      </div>

      <div class="learn-list">
        <h4 style="color: var(--honey-gold); letter-spacing: 2px; font-weight: bold; margin-bottom: 10px;">MEET YOUR MENTOR</h4>
        <h2 style="font-size: 2.5rem; color: var(--powerful-dark);">Mukul Agrawal</h2>
        
        <ul style="margin-top: 20px;">
          <li><i class="fas fa-trophy"></i> <strong>Guinness World Record Holder</strong></li>
          <li><i class="fas fa-book-open"></i> <strong>2 Times Best-selling Author</strong></li>
          <li><i class="fas fa-users"></i> <strong>Trained & guided 40,000+ students</strong></li>
          <li><i class="fas fa-history"></i> <strong>21+ Years Of Experience In Finance</strong></li>
          <li><i class="fas fa-star"></i> <strong>Featured educator for clarity-driven strategies</strong></li>
        </ul>
      </div>
    </div>

    <div class="cta">
      <!-- <a>👉 Join Now</a> -->
    </div>
  </div>
</section>

  <!-- Awards -->
  <section class="section" style="background:#e9f9ff;">
    <div class="container awards">
      <h2>🏆 Awards & Achievements</h2><br />
      <div class="awards-grid">
        <div class="award-item"><img src="img/1.webp" alt="Award 1"></div>
        <div class="award-item"><img src="img/2.webp" alt="Award 2"></div>
         <div class="award-item"><img src="img/8.webp" alt="Award 3"></div>
        <div class="award-item"><img src="img/7.webp" alt="Award 4"></div>
        
       
      </div>
    </div>
    <div class="cta"><a>👉 Join Now</a></div>
  </section>

 
  <!-- Modal Registration Form -->
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
        <button type="submit" class="submit-btn">Submit</button>
      </form>
      <p class="thankyou-msg" id="thankyouMsg" style="color:#FFFFFF !Important;">✅ Thank you! Your registration is successful.<br /><br />
	  📢 <span style="color:Yellow !Important;">Important: All class updates, strategies & the LIVE class link will only be shared in our private community. Make sure you join now...</span>👇👇<br /><br />
	  <a href="https://chat.whatsapp.com/Erz1qls65RkANJsQroKB1L" target="_blank"><img src="img/whatsapp-join.png" width="70%" /></a>
	  
	  </p>
    </div>
  </div>
  
  <section class="stats-section" style="background:#273158;">
    <h4 style="color:#ffffff;">MUKUL AGRAWAL FAMILY</h4>
    <h2>You All are Inspiration for us.</h2>
    
    <div class="stats-container">
      <div class="stat-box">
        <div class="stat-icon">▶️</div>
        <h3>1.73 M+</h3>
        <p>Youtube Subscribers</p>
      </div>
      <div class="stat-box">
        <div class="stat-icon">🔔</div>
        <h3>400 K+</h3>
        <p>Instagram Followers</p>
      </div>
      <div class="stat-box">
        <div class="stat-icon">👥</div>
        <h3>639 K+</h3>
        <p>Facebook Followers</p>
      </div>
      <div class="stat-box">
        <div class="stat-icon">🌐</div>
        <h3>50 K+</h3>
        <p>Finowings Students</p>
      </div>
      
    </div>
  </section>

 <!-- Footer Social Media Section -->
<footer style="background:#111; color:#fff; padding:30px 20px; text-align:center; font-family:Arial, sans-serif;">
  <h3 style="margin-bottom:15px; font-size:20px;">Follow Us on Social Media</h3>
  <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:20px;">

    <!-- Twitter -->
    <a href="https://x.com/drmukulagrawal" target="_blank" style="color:#fff; text-decoration:none; font-size:18px;">
      <i class="fab fa-twitter" style="margin-right:8px; color:#1DA1F2;"></i> Twitter
    </a>

    <!-- Instagram -->
    <a href="https://instagram.com/themukulagrawal" target="_blank" style="color:#fff; text-decoration:none; font-size:18px;">
      <i class="fab fa-instagram" style="margin-right:8px; color:#E1306C;"></i> Instagram
    </a>

    <!-- Telegram -->
    <a href="https://t.me/themukulagrawal" target="_blank" style="color:#fff; text-decoration:none; font-size:18px;">
      <i class="fab fa-telegram" style="margin-right:8px; color:#0088cc;"></i> Telegram
    </a>

    <!-- Website -->
    <a href="https://www.finowings.com" target="_blank" style="color:#fff; text-decoration:none; font-size:18px;">
      <i class="fas fa-globe" style="margin-right:8px; color:#4CAF50;"></i> Website
    </a>

    <!-- Facebook -->
    <a href="https://facebook.com/themukulagrawal" target="_blank" style="color:#fff; text-decoration:none; font-size:18px;">
      <i class="fab fa-facebook" style="margin-right:8px; color:#1877F2;"></i> Facebook
    </a>

    <!-- YouTube -->
    <a href="https://www.youtube.com/channel/UCPs8w9f1gqe4BqkbI-9wTnw" target="_blank" style="color:#fff; text-decoration:none; font-size:18px;">
      <i class="fab fa-youtube" style="margin-right:8px; color:#FF0000;"></i> YouTube
    </a>

  </div>
  <p style="margin-top:20px; font-size:14px; color:#aaa;">© 2025 Mukul Agrawal. All rights reserved.</p>
</footer>

<!-- Font Awesome CDN for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


  <!-- Countdown Script -->
  <script>
    const targetDate = new Date("Jan 8, 2026 21:00:00").getTime();
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

  <!-- Modal & AJAX Script -->
  <script>
    const modal = document.getElementById("registrationModal");
    const closeBtn = document.getElementById("closeModal");
    const thankyouMsg = document.getElementById("thankyouMsg");
    const form = document.getElementById("registrationForm");

    // Open modal on all CTA buttons
    document.querySelectorAll('.cta a').forEach(btn => {
      btn.addEventListener('click', function(e){
        e.preventDefault();
        modal.style.display = "block";
        thankyouMsg.style.display = "none";
        form.style.display = "block";
      });
    });

    // Close modal
    closeBtn.onclick = function() { modal.style.display = "none"; }

    // Close if clicked outside modal content
    window.onclick = function(event) { if(event.target == modal){ modal.style.display = "none"; } }

    // Handle form submit with AJAX
    form.addEventListener("submit", function(e){
      e.preventDefault();
      const formData = new FormData(form);
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
          alert(data.message);
        }
      })
      .catch(error => { alert("Error submitting form: " + error); });
    });
  </script>

</body>
</html>
