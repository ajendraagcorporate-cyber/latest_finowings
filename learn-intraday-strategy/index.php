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
    *{box-sizing:border-box;margin:0;padding:0;}
    body {font-family: 'Segoe UI', Arial, sans-serif;background:#ffffff;color:#273158; overflow-x: hidden;}
    h1,h2,h3 {margin-bottom:15px;}
    .section {padding:70px 20px;}
    .container {width:90%;max-width:1200px;margin:auto;}
    .cta{text-align:center;margin-top:30px;}
    .cta a{background:#273158;color:#fff;padding:16px 30px;font-size:1.5rem;text-decoration:none;border-radius:6px;display:inline-block;transition:.3s;cursor:pointer;}
    .cta a:hover{opacity:0.9;}
    header {background:#273158;color:#fff;text-align:center;padding:50px 10px;}
    header h1 {font-size:2.4rem;margin-bottom:15px;}
    header p {font-size:1.2rem;}
    
    /* Stats & Layout Styles */
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
    
    /* Modal Styles */
    .modal {display: none;position: fixed; z-index: 1000; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.5);}
    .modal-content {background-color: #000000; margin: 10% auto; padding: 20px 30px; border-radius: 10px; width: 90%; max-width: 400px; box-shadow: 0 0 10px rgba(0,0,0,0.3); position: relative; text-align: center;}
    .modal-content h2 {margin-bottom: 20px; color:#FFFFFF;}
    .modal-content input, .modal-content button {width: 100%; padding: 10px; margin: 8px 0; border-radius: 5px; border: 1px solid #ccc; box-sizing: border-box;}
    button.submit-btn {background-color: #4CAF50; color: white; border: none;}
    button.submit-btn:hover {background-color: #45a049;}
    .close {color: #aaa; position: absolute; top: 10px; right: 20px; font-size: 28px; font-weight: bold; cursor: pointer;}
    .close:hover { color:#000; }
    .thankyou-msg {display:none; font-size: 1.2rem; color: #4CAF50; margin-top: 15px;}

    @media(max-width:768px){
        header h1{font-size:1.9rem;} 
        .trainer{flex-direction:column;text-align:center;} 
        .trainer-details h2{margin-top:20px;} 
        .learn-content{flex-direction:column;}
    }
  </style>
</head>
<body>

  <header>
    <h1>🔥 <?php echo $title; ?></h1>
    <h2>⏳ Registration Expiring In <br /><span id="countdown">Loading...</span></h2>
    <p><?php echo $short_desc; ?></p><br />
  </header>
  
  <div class="cta"><a>👉 Reserve My Seat</a></div>

  <section class="section learn">
    <div class="container">
      <div class="learn-content">
        <div class="learn-list">
          <h2>📘 What You’ll Learn</h2>       
          <ul>
            <li><?php echo $p1; ?></li>
            <li><?php echo $p2; ?></li>
            <li><?php echo $p3; ?></li>
            <li><?php echo $p4; ?></li>
            <li><?php echo $p5; ?></li>
            <li><?php echo $p6; ?></li>
            <li><?php echo $p7; ?></li>
          </ul>
        </div>
        <div class="learn-img">
          <img src="img/stock-market-learning.png" alt="Stock Market Learning">
        </div>
      </div>
    </div>
    <div class="cta"><a>👉 Reserve My Seat</a></div>
  </section>

  <section class="section" style="background:#e9f9ff;">
    <div class="container trainer">
      <div class="trainer-photo">
        <img src="img/mukul-sir-1.jpeg" alt="Trainer Photo">
      </div>
      <div class="trainer-details">
        <h2>👨‍🏫 About the Trainer</h2>
        <p style="font-size:22px !important;"><strong>Mukul Agrawal</strong></p><br />
        <p style="font-size:18px !important;">🎖️ Guinness World Record Holder<br>📚 2 Times Best-selling Author<br>👨‍🎓 Trained & guided 40,000+ students<br>📈 21+ Years Of Experience In Finance</p>
      </div>
    </div>
  </section>

  <footer style="background:#111; color:#fff; padding:30px 20px; text-align:center;">
    <p>© 2026 Mukul Agrawal. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
  <script id="party-theme">
    window.onload = function() {
        const duration = 2 * 1000; // Exact 2 Seconds
        const animationEnd = Date.now() + duration;
        const defaults = { startVelocity: 30, spread: 360, ticks: 60, zIndex: 0 };

        function randomInRange(min, max) { return Math.random() * (max - min) + min; }

        const interval = setInterval(function() {
            const timeLeft = animationEnd - Date.now();

            if (timeLeft <= 0) {
                return clearInterval(interval);
            }

            const particleCount = 50 * (timeLeft / duration);
            
            // Side Sprays - Responsive adjustment
            const isMobile = window.innerWidth < 768;
            
            confetti(Object.assign({}, defaults, { 
                particleCount, 
                origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 },
                scalar: isMobile ? 0.7 : 1 // Smaller on mobile for better look
            }));
            confetti(Object.assign({}, defaults, { 
                particleCount, 
                origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 },
                scalar: isMobile ? 0.7 : 1 
            }));
        }, 250);
    };
  </script>
  <script>
    // Countdown Script
    const targetDate = new Date("<?php echo $date; ?>").getTime();
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

    // Modal Script
    const modal = document.getElementById("registrationModal");
    document.querySelectorAll('.cta a').forEach(btn => {
      btn.addEventListener('click', function(e){
        e.preventDefault();
        modal.style.display = "block";
      });
    });
    document.getElementById("closeModal").onclick = function() { modal.style.display = "none"; }
    window.onclick = function(event) { if(event.target == modal){ modal.style.display = "none"; } }
  </script>

</body>
</html>