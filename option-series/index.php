<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Intraday Strategy Class - Mukul Agrawal</title>
  <style>
    *{box-sizing:border-box;margin:0;padding:0;}
    body {font-family: 'Segoe UI', Arial, sans-serif;background:#ffffff;color:#273158;}
    h1,h2,h3 {margin-bottom:15px;}
    .section {padding:70px 20px;}
    .container {width:90%;max-width:1200px;margin:auto;}
    .cta{text-align:center;margin-top:30px;}
    .cta a{background:#273158;color:#fff;padding:16px 30px;font-size:1.5rem;text-decoration:none;border-radius:6px;display:inline-block;transition:.3s;cursor:pointer;}
    .cta a:hover{opacity:0.9;}
    header {background:#273158;color:#fff;text-align:center;padding:50px 10px;}
    header h1 {font-size:2.4rem;margin-bottom:15px;}
    header p {font-size:1.2rem;}
    .timer {margin-top:25px;font-size:1.3rem;font-weight:bold;background:#e9f9ff;color:#273158;display:inline-block;padding:12px 20px;border-radius:8px;}
    .trainer {display:flex;flex-wrap:wrap;align-items:center;gap:30px;}
    .trainer-photo{text-align:center;flex:1;}
    .trainer-photo img{width:280px;height:320px;object-fit:cover;border-radius:15px;box-shadow:0 6px 18px rgba(0,0,0,0.1);}
    .trainer-details{flex:2; line-height: 30px;}
    .trainer-details h2{color:#273158;font-size:1.8rem;}
    .awards-grid {display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:20px;}
    .award-item {background:#fff;border-radius:10px;padding:10px;text-align:center;border:1px solid #d0eaf5;}
    .award-item img {width:100%;height:180px;object-fit:cover;border-radius:8px;}
    .learn h2{font-size:2rem;margin-bottom:20px;}
    .learn-content{display:flex;flex-wrap:wrap;gap:30px;align-items:center;}
    .learn-list{flex:1;}
    .learn-list ul{list-style:none;padding:0;}
    .learn-list li{margin:12px 0;padding-left:32px;position:relative;font-size:1.05rem;}
    .learn-list li::before{content:"✔️";position:absolute;left:0;}
    .learn-img{flex:1;text-align:center;}
    .learn-img img{max-width:100%;border-radius:12px;box-shadow:0 4px 12px rgba(0,0,0,0.1);}
    .testimonials{background:#e9f9ff;border-radius:15px;padding:60px 20px;color:#273158;}
    .testimonials h2{text-align:center;font-size:2rem;margin-bottom:30px;}
    .testimonial-track{display:flex;overflow-x:auto;gap:20px;scroll-behavior:smooth;}
    .testimonial{flex:0 0 300px;background:#fff;border-radius:12px;box-shadow:0 4px 10px rgba(0,0,0,0.05);padding:20px;text-align:center;}
    .testimonial img{width:100%;border-radius:10px;margin-bottom:10px;}
    footer{background:#273158;color:#fff;text-align:center;padding:40px 20px;margin-top:40px;}
    .modal {display: none;position: fixed; z-index: 1000; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.5);}
    .modal-content {background-color: #000000; margin: 10% auto; padding: 20px 30px; border-radius: 10px; width: 90%; max-width: 400px; box-shadow: 0 0 10px rgba(0,0,0,0.3); position: relative; text-align: center;}
    .modal-content h2 {margin-bottom: 20px; color:#FFFFFF;}
    .modal-content input, .modal-content button {width: 100%; padding: 10px; margin: 8px 0; border-radius: 5px; border: 1px solid #ccc; box-sizing: border-box;}
    button.submit-btn {background-color: #4CAF50; color: white; border: none;}
    button.submit-btn:hover {background-color: #45a049;}
    .close {color: #aaa; position: absolute; top: 10px; right: 20px; font-size: 28px; font-weight: bold; cursor: pointer;}
    .close:hover { color:#000; }
    .thankyou-msg {display:none; font-size: 1.2rem; color: #4CAF50; margin-top: 15px;}
    @media(max-width:768px){header h1{font-size:1.9rem;} .trainer{flex-direction:column;text-align:center;} .trainer-details h2{margin-top:20px;} .learn-content{flex-direction:column;}}
	
	.stats-section {
      text-align: center;
      padding: 50px 20px;
    }

    .stats-section h4 {
      color: #999;
      letter-spacing: 2px;
      font-size: 14px;
      margin-bottom: 10px;
    }

    .stats-section h2 {
      color: #1aa34a;
      font-size: 28px;
      margin-bottom: 40px;
    }

    .stats-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
      justify-content: center;
      max-width: 1000px;
      margin: 0 auto;
    }

    .stat-box {
      background: #fff;
      border-radius: 30px;
      padding: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .stat-box:hover {
      transform: translateY(-5px);
    }

    .stat-icon {
      font-size: 28px;
      margin-bottom: 10px;
    }

    .stat-box h3 {
      font-size: 20px;
      margin: 0;
      color: #333;
    }

    .stat-box p {
      margin: 5px 0 0;
      font-size: 14px;
      color: #666;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .stats-section h2 {
        font-size: 22px;
      }
      .stat-box h3 {
        font-size: 18px;
      }
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
  <h1>🔥 Option Series</h1>
    <p>Paid Level Techniques & Secrets</p><br />
    
  </header>
  
  <div class="cta"><a>👉 Register Now</a></div>
   <!-- Learn -->
  <section class="section learn">
    <div class="container">
      <div class="learn-content">
        <div class="learn-list">
          <h2>📘 What You’ll Learn</h2>       
          <ul>
            <li>How to identify trend using the Option Chain</li>
<li>Understanding market direction through Call–Put data</li>
<li>Correct way to read Open Interest (OI)</li>
<li>How to select the right strike price</li>
<li>Identifying strong and weak market levels</li>
<li>Building intraday trade setups</li>
<li>Confirming breakout and breakdown</li>
<li>Spotting where smart money is taking positions</li>
<li>Safe entry and exit techniques</li>
<li>Combining real charts with option chain for accurate trades</li>
          </ul>
        </div>
        <div class="learn-img">
          <img src="img/stock-market-learning.png" alt="Stock Market Learning">
        </div>
      </div>
    </div>
    <div class="cta"><a>👉 Register Now</a></div>
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
	  <a href="https://chat.whatsapp.com/HzEbtPTlPN06GTg3j0tBOd?mode=wwt" target="_blank"><img src="img/whatsapp-join.png" width="70%" /></a>
	  
	  </p>
    </div>
  </div>
  
  <section class="stats-section" style="background:#e9f9ff;">
    <h4>MUKUL AGRAWAL FAMILY</h4>
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
    const targetDate = new Date("Nov 23, 2025 11:00:00").getTime();
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
