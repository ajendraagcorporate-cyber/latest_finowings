<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $course->title ?? 'N/A' }}</title>
  <style>
    /* Import Google Fonts fallback */
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;900&display=swap');

    :root {
      --main-bg: #fbfbfb;
      --dark: #1e1524;
      --primary-accent: #934c75;
      --gray: #a1a6ac;
      --light-gray: #cfd1d2;
      --input-border: #e6e7e8;
      --highlight: #65bdd1;
      --text-dark: #242424;
      --checked-bg: #d7a0c1;
      --placeholder: #bcbcbc;
      --price-old: #7c7c7c;
    }

    html, body {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', Arial, sans-serif;
      background: var(--main-bg);
      color: var(--dark);
      min-height: 100vh;
      width: 100vw;
      overflow-x: hidden;
      overscroll-behavior: none;
    }

    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      min-height: 100vh;
      background: radial-gradient(ellipse 150% 70% at 50% -18%, #d7a0c1a1 15%, #fbfbfb 85%);
    }

    .container {
      width: 90%;
      max-width: 80%;
      margin: 0 auto 32px auto;
      padding: 0 16px 32px 16px;
      z-index: 2;
    }

    .logo {
      width: 68px;
      height: 68px;
      border-radius: 50%;
      background: #fff;
      margin: 40px auto 16px auto;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 24px #cfd1d2aa;
      overflow: hidden;
      animation: fadeInDown 1s cubic-bezier(.42,.3,.57,1.33);
    }
    .logo img {
      width: 80%;
      height: 80%;
      object-fit: contain;
    }

    @keyframes fadeInDown {
      from {opacity: 0; transform: translateY(-36px);}
      to {opacity: 1; transform: translateY(0);}
    }
    @keyframes fadeInUp {
      from {opacity: 0; transform: translateY(36px);}
      to {opacity: 1; transform: translateY(0);}
    }
    @keyframes pulse {
      0% {box-shadow: 0 0 0 0 var(--highlight);
          transform: scale(1);}
      70% {box-shadow: 0 0 0 10px #65bdd100;
          transform: scale(1.04);}
      100% {box-shadow: 0 0 0 0 #65bdd100;}
    }

    h1.title {
      text-align: center;
      font-size: 2rem;
      margin: 0 0 18px 0;
      letter-spacing: 0.01em;
      line-height: 1.18;
      font-weight: 800;
      color: var(--dark);
      animation: fadeInDown 1s 0.05s cubic-bezier(.44,.08,.38,1.24);
    }

    .price-box {
      background: #fff;
      border-radius: 20px;
      box-shadow: 0 4px 16px 0 #cfd1d29a;
      padding: 20px 20px 18px 20px;
      margin: 0 auto 18px auto;
      text-align: center;
      max-width: 330px;
      animation: fadeInUp 1s 0.14s cubic-bezier(.42,.3,.57,1.33);
    }
    .price-row {
      /* display: flex; */
      align-items: baseline;
      justify-content: center;
      gap: 5px;
    }
    .price-label {
      font-size: 1.1rem;
      color: var(--gray);
      font-weight: 300;
      margin-right: 2px;
    }
    .price-old {
      text-decoration: line-through;
      color: var(--price-old);
      font-size: 1.2rem;
      margin-left: 2px;
      font-weight: 200;
    }
    .price-new {
      color: var(--primary-accent);
      font-size: 2.1rem;
      font-weight: 600;
      margin-left: 12px;
    }

    .form-section {
      margin: 16px 0 20px 0;
      background: #fff;
      border-radius: 18px;
      box-shadow: 0 2px 10px 0 #d7a0c14c;
      padding: 18px 18px 12px 18px;
      animation: fadeInUp 1s 0.06s cubic-bezier(.32,.8,.51,1.3);
    }
    .form-section label {
      display: block;
      color: var(--dark);
      font-weight: 600;
      font-size: 1rem;
      margin-bottom: 6px;
      margin-top: 10px;
    }
    .form-input {
      width: 90%;
      outline: none;
      border: 1.5px solid var(--input-border);
      border-radius: 14px;
      height: 48px;
      padding: 0 14px;
      font-size: 1.06rem;
      margin-bottom: 6px;
      margin-top: 2px;
      color: var(--text-dark);
      background: #f7f7f9;
      transition: border .22s cubic-bezier(.38,.85,.29,1.04);
    }
    .form-input:focus {
      border-color: var(--highlight);
      background: #fff;
    }
    .input-group {
      margin-bottom: 7px;
    }

    .flex-row {
      display: flex;
      flex-direction: row;
      gap: 8px;
      align-items: center;
    }
    .flex-grow { flex: 1; }
    .coupon-btn {
      padding: 0 16px;
      height: 44px;
      background: var(--highlight);
      color: #fff;
      font-weight: 600;
      border: none;
      outline: none;
      border-radius: 12px;
      transition: filter 0.18s;
      cursor: pointer;
      margin-left: 0.5em;
    }
    .coupon-btn:active {
      filter: brightness(0.90);
    }

    .remove-btn {
      padding: 0 16px;
      height: 44px;
      background: var(--highlight);
      color: #fff;
      font-weight: 600;
      border: none;
      outline: none;
      border-radius: 12px;
      transition: filter 0.18s;
      cursor: pointer;
      margin-left: 0.5em;
    }
    .remove-btn:active {
      filter: brightness(0.90);
    }

    .buy-section {
      margin: 26px 0 6px 0;
      display: flex;
      /* flex-direction: column; */
      align-items: center;
    }
    .buy-btn {
      background: linear-gradient(88deg, var(--highlight) 70%, var(--primary-accent) 120%);
      color: #fff;
      border: none;
      border-radius: 15px;
      font-size: 1.25rem;
      font-weight: 700;
      width: 93vw;
      max-width: 370px;
      min-height: 54px;
      padding: 0 0 0 0;
      box-shadow: 0 6px 18px #65bdd15a;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
      animation: fadeInUp 1s 0.18s cubic-bezier(.42,.3,.57,1.33);
      outline: none;
      gap: 0.75em;
      transition: background 0.2s, box-shadow 0.2s;
      will-change: transform, filter;
      animation: pulse 2.2s infinite;
    }
    .buy-btn:active {
      filter: brightness(0.92);
    }
    .buy-btn .chevron {
      width: 33px;
      height: 33px;
      margin-left: 0.2em;
      margin-right: 0.1em;
      margin-bottom: 1px;
    }

    .course-desc {
      margin: 29px 0 14px 0;
      background: linear-gradient(94deg, #f6f1f7 50%, #e7e5ea 105%);
      border-radius: 19px;
      box-shadow: 0 1px 8px #a1a6ac18;
      padding: 20px 18px 14px 18px;
      animation: fadeInUp 1s 0.2s cubic-bezier(.42,.3,.57,1.33);
    }
    .desc-title {
      font-size: 1.12rem;
      font-weight: 700;
      margin-bottom: 11px;
      color: var(--primary-accent);
      letter-spacing: 0.02em;
    }
    .desc-image {
      display: block;
      width: 100%;
      max-width: 330px;
      margin: 0 auto 13px auto;
      border-radius: 18px;
      box-shadow: 0 8px 32px #934c756a;
      object-fit: cover;
    }
    .details-list {
      list-style: none;
      padding: 0;
      margin: 0 0 0 0;
    }
    .details-item {
      display: flex;
      align-items: flex-start;
      margin-bottom: 9px;
      gap: 8px;
      font-size: 0.97rem;
    }
    .details-item:last-child {
      margin-bottom: 0;
    }
    .details-check {
      min-width: 22px;
      height: 22px;
      border-radius: 9px;
      background: var(--checked-bg);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.16em;
      margin-top: 1px;
    }
    .details-check::after {
      content: '✓';
      color: #fff;
      font-size: 1.05em;
      font-weight: 700;
    }
    .desc-bottom {
      font-size: 0.91rem;
      color: var(--gray);
      margin-top: 9px;
      text-align: left;
    }

    .test-mode {
      text-align: center;
      font-size: 0.91rem;
      color: var(--gray);
      margin: 34px auto 4px auto;
      animation: fadeInUp 1s 0.23s cubic-bezier(.42,.3,.57,1.33);
    }

    @media (min-width: 460px) {
      .container {
        padding: 0 0 32px 0;
      }
    }
    @media (max-width: 400px) {
      .title {
        font-size: 1.32rem;
      }
      .price-box {
        padding: 13px 5vw 11px 5vw;
      }
      .buy-btn {
        font-size: 1.04rem;
      }
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    
  </style>
  
</head>
<body>
@php
    $price = 0;

    if ($type == 'elite') {
        if ($duration == 'monthly') {
            $price = $course->monthly_discount_price;
        } elseif ($duration == 'quarterly') {
            $price = $course->quarterly_discount_price;
        } elseif ($duration == 'yearly') {
            $price = $course->yearly_discount_price;
        }
    } else {
        $price = $course->discount_price;
    }

    $discount = 0;
    $final_price = $price;

    if (isset($applied_coupon)) {
      if ($applied_coupon['type'] == 2) {
          $discount = $applied_coupon['discount'];
      } elseif ($applied_coupon['type'] == 1) {
          $discount = ($price * $applied_coupon['discount']) / 100;
      }

      $final_price = max(0, $price - $discount);
      $final_price = ceil($final_price); // Round to nearest whole number
      
  }

@endphp

@php
    $selectedDuration = $duration ?? 'monthly'; // default to monthly
    switch ($selectedDuration) {
        case 'monthly':
            $original_price = $course->monthly_price;
            break;
        case 'quarterly':
            $original_price = $course->quarterly_price;
            break;
        case 'yearly':
            $original_price = $course->yearly_price;
            break;
        default:
            $original_price = $course->monthly_price;
    }
@endphp
  <div class="container">
    <div class="logo">
      <img src="https://ext.same-assets.com/2411144964/2422773584.bin" alt="Logo"/>
    </div>
    <h1 class="title">{{ $course->title }}</h1>
    <div class="price-box">
      <div class="price-row">
        @if($type == 'elite')
          <span class="price-label">Original Price</span>
          <span class="price-old" id="original-price">₹{{ number_format($original_price, 2) }}</span>
          @else
          <span class="price-label">Original Price</span>
          <span class="price-old">₹{{ number_format($course->price, 2) }}</span>
          @endif
          <span class="price-new" id="discounted-price">₹{{ number_format($course->discount_price, 2) }}</span>
        </div>
    </div>
    <div id="loader-overlay" style="display:none; position:fixed; top:0; left:0; right:0; bottom:0; background:rgba(255,255,255,0.8); z-index:9999; justify-content:center; align-items:center;">
      <div class="spinner" style="border:4px solid #f3f3f3; border-top:4px solid #3498db; border-radius:50%; width:50px; height:50px; animation:spin 1s linear infinite;"></div>
    </div>
    <form class="form-section" autocomplete="off">
      @csrf
      <input type="hidden" name="course_id" value="{{ $course->id }}">
      
      <!-- User Details -->
      <div class="input-group">
        <label for="name">Name</label>
        <input class="form-input" id="name" name="name" type="text" placeholder="Your full name" required>
        <small class="error-message"></small>
      </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input class="form-input" id="email" name="email" type="email" placeholder="you@email.com" required>
        <small class="error-message"></small>
      </div>
      {{--<div class="input-group">
        <!-- country code -->

        <label for="phone">Phone <span style="color:var(--gray);font-weight:400;font-size:0.98em;">(WhatsApp enabled to access course)</span></label>
        <input class="form-input" id="phone" name="phone" type="tel" inputmode="tel" placeholder="Eg. 99########"  required pattern="[0-9]{10}" maxlength="10" title="Please enter a valid 10-digit phone number">
        <small class="error-message"></small>
      </div>--}}
      <div class="input-group">
        <label for="phone">Phone 
          <span style="color:var(--gray);font-weight:400;font-size:0.98em;">
            (WhatsApp enabled to access course)
          </span>
        </label>

        <div style="display: flex; gap: 8px;">
          <!-- Country code dropdown -->
          <select id="country_code" name="country_code" required style="width: 100px;" class="form-input">
            <option value="+91" selected>🇮🇳 +91</option>
            <option value="+1">🇺🇸 +1</option>
            <option value="+44">🇬🇧 +44</option>
            <option value="+61">🇦🇺 +61</option>
            <option value="+971">🇦🇪 +971</option>
            <option value="+92">🇵🇰 +92</option>
            <option value="+880">🇧🇩 +880</option>
            <option value="+94">🇱🇰 +94</option>
            <option value="+93">🇦🇫 +93</option>
            <!-- Add more as needed -->
          </select>

          <!-- Phone number input -->
          <input class="form-input" id="phone" name="phone" type="tel" inputmode="tel" placeholder="Eg. 99########" required pattern="[0-9]{10}" maxlength="10" title="Please enter a valid 10-digit phone number">
        </div>

        <small class="error-message"></small>
      </div>

      <div class="input-group">
        <label for="coordinator">Please Select Coordinator Name.</label>
        <select name="coordinator_name" id="coordinator_name" class="form-input" required>
          <option value="">Select Coordinator</option>
          @foreach($cordinators as $coordinator)
            <option value="{{ $coordinator->id }}">{{ $coordinator->name }}</option>
          @endforeach
        </select>
        <small class="error-message"></small>
      </div>
      <div class="input-group">
        <label for="state">State</label>
        <select class="form-input" id="state" name="state" required>
          <option value="">Select State</option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
          <option value="Assam">Assam</option>
          <option value="Bihar">Bihar</option>
          <option value="Chhattisgarh">Chhattisgarh</option>
          <option value="Goa">Goa</option>
          <option value="Gujarat">Gujarat</option>
          <option value="Haryana">Haryana</option>
          <option value="Himachal Pradesh">Himachal Pradesh</option>
          <option value="Jharkhand">Jharkhand</option>
          <option value="Karnataka">Karnataka</option>
          <option value="Kerala">Kerala</option>
          <option value="Madhya Pradesh">Madhya Pradesh</option>
          <option value="Maharashtra">Maharashtra</option>
          <option value="Manipur">Manipur</option>
          <option value="Meghalaya">Meghalaya</option>
          <option value="Mizoram">Mizoram</option>
          <option value="Nagaland">Nagaland</option>
          <option value="Odisha">Odisha</option>
          <option value="Punjab">Punjab</option>
          <option value="Rajasthan">Rajasthan</option>
          <option value="Sikkim">Sikkim</option>
          <option value="Tamil Nadu">Tamil Nadu</option>
          <option value="Telangana">Telangana</option>
          <option value="Tripura">Tripura</option>
          <option value="Uttar Pradesh">Uttar Pradesh</option>
          <option value="Uttarakhand">Uttarakhand</option>
          <option value="West Bengal">West Bengal</option>
          <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
          <option value="Chandigarh">Chandigarh</option>
          <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
          <option value="Delhi">Delhi</option>
          <option value="Jammu and Kashmir">Jammu and Kashmir</option>
          <option value="Ladakh">Ladakh</option>
          <option value="Lakshadweep">Lakshadweep</option>
          <option value="Puducherry">Puducherry</option>
        </select>
        <small class="error-message"></small>
      </div>
      @if($type == 'elite')
        <select name="duration" class="form-input"  id="duration">
          <option value="" >Select Duration</option>
          <option value="monthly" data-price="{{ $course->monthly_discount_price }}" data-original-price="{{ $course->monthly_price }}" {{ $duration == 'monthly' ? 'selected' : '' }}>
              Monthly - ₹{{ $course->monthly_discount_price }}
          </option>
          <option value="quarterly" data-price="{{ $course->quarterly_discount_price }}" data-original-price="{{ $course->quarterly_price }}" {{ $duration == 'quarterly' ? 'selected' : '' }}>
              Quarterly - ₹{{ $course->quarterly_discount_price }}
          </option>
          <option value="half_yearly" data-price="{{ $course->half_yearly_discount_price }}" data-original-price="{{ $course->half_yearly_price }}" {{ $duration == 'half_yearly' ? 'selected' : '' }}>
              Half Yearly - ₹{{ $course->half_yearly_discount_price }}
          </option>
          <option value="yearly" data-price="{{ $course->yearly_discount_price }}" data-original-price="{{ $course->yearly_price }}" {{ $duration == 'yearly' ? 'selected' : '' }}>
              Yearly - ₹{{ $course->yearly_discount_price }}
          </option>
        </select>
        @endif


      <!-- Coupon Section -->
      <div class="input-group flex-row mt-3">
        @if(isset($applied_coupon))
          <div class="border p-3 bg-light rounded w-100">
            <h5>Coupon Applied: <strong>{{ $applied_coupon['coupon_code'] }}</strong></h5>
            <p class="mb-1">
              Discount: 
              {{ $applied_coupon['type'] == 'flat' ? '₹' . $applied_coupon['discount'] : $applied_coupon['discount'] . '%' }}
            </p>
            <p class="text-success">You Saved: ₹{{ number_format($applied_coupon['discount_amount'], 2) }}</p>
            <input type="hidden" name="coupon_id" id="coupon_id" value="{{ $applied_coupon['id'] }}">

            
            <!-- Coupon Remove Form -->
            <div id="remove_coupon">
              <input type="hidden" name="course_id" id="courseid" value="{{ $course->id }}">
              <button type="submit" class="remove-btn" id="remove-coupon-btn">Remove Coupon</button>
            </div>
          </div>
        @else
          <div id="coupon-form" style="display: flex; gap: 10px; align-items: center;">
            <input type="hidden" name="course_id" value="{{ $course->id }}">
            <input type="hidden" name="type" value="{{ $type }}">

            <input type="text" class="form-input" name="coupon_code" id="coupon_code" placeholder="e.g. SAVE20" required style="flex: 1;">
            <input type="hidden"  id="coupon_code_id" value="">

            <button type="button" class="coupon-btn" id="apply-coupon-btn">Apply</button>
          </div>

          <div id="coupon-message" style="margin-top:10px;"></div>
        @endif
      </div>

      <!-- Buy Button -->
      <div class="buy-section">
        <button class="buy-btn" type="submit" id="pay-button">
          Buy Now <img class="chevron" src="https://ext.same-assets.com/2411144964/2202380397.gif" alt=">"/>
        </button>
      </div>
    </form>

    <div class="course-desc">
      <p class="desc-title">{!! $course->description !!}</p>
      @if($type == 'live')
        <img src="{{ asset('images/live/thumbnails/' . $course->thumbnail) }}" alt="Course Image" class="desc-image">
      @elseif($type == 'recorded')
        <img src="{{ asset('images/courses/thumbnails/' . $course->thumbnail) }}" alt="Course Image" class="desc-image">
      @elseif($type == 'combo')
        <img src="{{ asset('images/courses/thumbnails/' . $course->thumbnail) }}" alt="Course Image" class="desc-image">
      @elseif($type == 'elite')
      <img src="{{ asset('images/elite/thumbnails/' . $course->thumbnail) }}" alt="Course Image" class="desc-image">
      @endif
      <ul class="details-list">
        <li class="details-item"><span class="details-check"></span>Structured Learning: From basics to advanced strategies</li>
        <li class="details-item"><span class="details-check"></span>Proven Trading Techniques: Intraday trading strategies for commodities</li>
        <li class="details-item"><span class="details-check"></span>After-Hours Trading: Specifically designed for trading after 6 PM</li>
        <li class="details-item"><span class="details-check"></span>Risk Management: Tools to safeguard your investments and optimize returns</li>
      </ul>
      <div class="desc-bottom">
        Whether you're managing a 9-to-5 job or running a business, this course empowers you to trade confidently and profitably in the commodity markets. Start your journey to becoming a successful trader today!
      </div>
    </div>
    <!-- <div class="test-mode">Test Mode</div> -->
  </div>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    // Field focus and subtle invalid shake
    document.querySelectorAll('.form-input').forEach(function (input) {
      input.addEventListener('invalid', function () {
        input.style.borderColor = '#ef5350';
        input.animate([
          { transform: 'translateX(0px)' },
          { transform: 'translateX(-7px)' },
          { transform: 'translateX(7px)' },
          { transform: 'translateX(-4px)' },
          { transform: 'translateX(0px)' },
        ], {duration: 240, easing: 'ease-out'});
        setTimeout(function () {
          input.style.borderColor = '';
        }, 500);
      });
    });

    // Coupon Apply demo animation
    const couponBtn = document.querySelector('.coupon-btn');
    couponBtn?.addEventListener('click', function(){
      couponBtn.innerText = 'Applied!';
      couponBtn.style.background = '#934c75';
      setTimeout(() => {
        couponBtn.innerText = 'Apply';
        couponBtn.style.background = '';
      }, 1600);
    });

    // Buy Now button pulse
    const buyBtn = document.querySelector('.buy-btn');
    buyBtn.addEventListener('click', function(){
      buyBtn.style.boxShadow = '0 0 0 10px #934c753b';
      buyBtn.style.filter = 'brightness(1.08)';
      setTimeout(()=>{
        buyBtn.style.boxShadow='';
        buyBtn.style.filter='';
      }, 280);
      // Demo: scroll to course desc
      document.querySelector('.course-desc').scrollIntoView({ behavior: 'smooth' });
    });
  </script>

  <script>
  document.querySelector('.form-section').addEventListener('submit', function(e) {
      // रोकें submit
      e.preventDefault();

      let isValid = true;
      let errorMessages = [];

      // सभी इनपुट्स और सिलेक्ट्स
      const name = document.getElementById('name');
      const email = document.getElementById('email');
      const phone = document.getElementById('phone');
      const coordinator = document.getElementById('coordinator_name');
      const state = document.getElementById('state');
      const duration = document.getElementById('duration');

      // Name
      if (!name.value.trim()) {
          isValid = false;
          errorMessages.push("Name is required");
      }

      // Email
      if (!email.value.trim()) {
          isValid = false;
          errorMessages.push("Email is required");
      }

      // Phone number
      const phoneVal = phone.value.trim();
      if (!phoneVal) {
          isValid = false;
          errorMessages.push("Phone number is required");
      } else if (!/^\d{10}$/.test(phoneVal)) {
          isValid = false;
          errorMessages.push("Phone number must be exactly 10 digits");
      }

      // Coordinator
      if (!coordinator.value.trim()) {
          isValid = false;
          errorMessages.push("Coordinator name is required");
      }

      // State
      if (!state.value.trim()) {
          isValid = false;
          errorMessages.push("Please select a state");
      }

      // Duration (only if exists)
      if (duration && !duration.value.trim()) {
          isValid = false;
          errorMessages.push("Please select course duration");
      }

      // Show errors if any
      if (!isValid) {
          alert(errorMessages.join('\n'));
          return;
      }

      // अगर सब कुछ वैध है, तो फॉर्म सबमिट करें
      this.submit();
  });
  </script>



<script>
function validateFormFields() {
    let isValid = true;
    let errorMessages = [];

    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const phone = document.getElementById('phone');
    const coordinator = document.getElementById('coordinator_name');
    const state = document.getElementById('state');
    const duration = document.getElementById('duration');

    if (!name.value.trim()) {
        isValid = false;
        errorMessages.push("Name is required");
    }

    if (!email.value.trim()) {
        isValid = false;
        errorMessages.push("Email is required");
    } else {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email.value.trim())) {
            isValid = false;
            errorMessages.push("Please enter a valid email address");
        }
    }


    const phoneVal = phone.value.trim();
    if (!phoneVal) {
        isValid = false;
        errorMessages.push("Phone number is required");
    } else if (!/^\d{10}$/.test(phoneVal)) {
        isValid = false;
        errorMessages.push("Phone number must be exactly 10 digits");
    }

    if (!coordinator.value.trim()) {
        isValid = false;
        errorMessages.push("Coordinator name is required");
    }

    if (!state.value.trim()) {
        isValid = false;
        errorMessages.push("Please select a state");
    }

    if (duration && !duration.value.trim()) {
        isValid = false;
        errorMessages.push("Please select course duration");
    }

    if (!isValid) {
        Swal.fire({
            icon: 'error',
            title: 'Some fields are missing or invalid:',
            html: '<ul style="text-align: left;">' + errorMessages.map(msg => `<li>${msg}</li>`).join('') + '</ul>',
            confirmButtonText: 'OK'
        });
    }

    return isValid;
}
</script>




<script>
document.getElementById('pay-button').addEventListener('click', function (e) {
    e.preventDefault();
    if (!validateFormFields()) {
        return; // ❌ validation fail 
    }
    document.getElementById('loader-overlay').style.display = 'flex';

    //const amount = {{ $final_price * 100 }}; // Razorpay uses paise
    const priceText = document.getElementById('discounted-price').innerText.replace(/[^\d.]/g, '');
    const amount = Math.round(parseFloat(priceText) * 100); // convert ₹ 

    const receiptId = "RCPT_" + Math.floor(Math.random() * 1000000);
    const coordinatorName = document.getElementById('coordinator_name').value;
     const appliedCouponId = document.getElementById('coupon_code_id').value || null;
     const username= document.getElementById('name').value;
    console.log(coordinator_name);

    fetch("{{ url('/api/razorpay-response-blade') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
        },
        body: JSON.stringify({
            amount: amount,
            currency: "INR",
            receipt: receiptId,
            // user_id: userId,
            notes: {
                course_id: "{{ $course->id }}",
                user_contact: document.getElementById('phone').value,
                user_email: document.getElementById('email').value || 'mukulagrawalapp@gmail.com',
                user_state: document.getElementById('state').value || 'not provided',
                course_type: "{{ $type ?? 'not provided' }}",
                created_at: "{{ now()->toDateTimeString() }}",
                user_id: "{{ auth()->id() }}",
                coupon_code_id: appliedCouponId,
                coordinator_name: document.getElementById('coordinator_name').value,
                course_validity: "{{ $course->validity ?? '90' }}",
                user_name: username,
                payment_source: "{{ request()->payment_source ?? 'not provided' }}",
                payment_method: "razorpay",
                device_id: "{{ request()->device_id ?? 'unknown' }}",
                duration: "{{ $duration ?? 'monthly' }}",
            }
        })
    })
    .then(response => response.json())
    .then(response => {
        if (response.error) {
            console.log(response.error);
            fetch("{{ route('handle.failed.payment') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                },
                body: JSON.stringify({
                    //user_id: userId,
                    course_id: {{ $course->id }},
                    type: "{{ $type }}",
                    amount: {{ $final_price }},
                    reason: "Order creation failed: " + response.message,
                    request_data: JSON.stringify(response)
                })
            });

            alert("Failed to initiate payment: " + response.message);
            return;
        }

        const orderData = response.data;

        const options = {
            "key": "rzp_live_rUEf7CMB65wUkn",
            "amount": orderData.amount,
            "currency": orderData.currency,
            "name": "{{ $course->title }}",
            "description": "Course Purchase",
            "image": "{{ asset('images/logo.png') }}",
            "order_id": orderData.order_id,
            "notes": {
                "coordinator_name": coordinatorName
            },
            "handler": function (response) {
                // Payment Successful
                fetch("{{ route('handle.successful.course.payment') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    },
                    body: JSON.stringify({
                        razorpay_payment_id: response.razorpay_payment_id,
                        razorpay_order_id: response.razorpay_order_id,
                        signature: response.razorpay_signature,
                        course_id: {{ $course->id }},
                        type: "{{ $type }}",
                        coupon_code_id: appliedCouponId,
                        user_contact: document.getElementById('phone').value,
                        country_code: document.getElementById('country_code').value,
                        user_mail: document.getElementById('email').value,
                        coordinator_name: document.getElementById('coordinator_name').value,
                        name: document.getElementById('name').value,
                        payment_data: JSON.stringify(response),
                        state: document.getElementById('state').value,
                        duration: "{{ $duration }}",
                    })
                })
                .then(res => res.json())
                .then(data => {
                    if (data.status === 'success') {
                        document.getElementById('loader-overlay').style.display = 'none';
                        window.location.href = "{{ route('payment.success') }}";
                    }
                    else {
                        alert("Payment succeeded but enrollment failed: " + (data.message || 'Unknown error'));
                    }
                })
                .catch(err => {
                    console.error(err);
                    document.getElementById('loader-overlay').style.display = 'none';
                    alert("Server error during post-payment processing.");
                });
            },
            "prefill": {
                "name": document.getElementById('name').value,
                "email": document.getElementById('email').value,
                "contact": document.getElementById('phone').value
            },
            "theme": {
                "color": "#F37254"
            }
        };

        const rzp = new Razorpay(options);

        // 💥 Handle Payment Failure
        rzp.on('payment.failed', function (response) {
            document.getElementById('loader-overlay').style.display = 'none';
            console.error("Payment failed", response);
            fetch("{{ route('handle.failed.payment') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                },
                body: JSON.stringify({
                    course_id: {{ $course->id }},
                    type: "{{ $type }}",
                    amount: {{ $final_price }},
                    reason: response.error.description || 'Payment failed',
                    request_data: JSON.stringify(response)
                })
            })
            .then(res => res.json())
            .then(data => {
                alert("Payment failed: " + response.error.description);


            })
            .catch(err => {
                console.error("Failed to report payment failure", err);
                document.getElementById('loader-overlay').style.display = 'none';
                alert("Payment failed. Please try again.");
            });
        });

        rzp.open();
    })
    .catch(error => {
        console.error(error);
        alert("Error while initiating payment.");
    });
});
</script>

<script>
  $(document).ready(function() {
  // Use event delegation
  $(document).on('click', '#remove-coupon-btn', function(e) {
    e.preventDefault();

    let courseId = $('#courseid').val(); // Or get it from the hidden input inside #remove_coupon

    $.ajax({
      url: "{{ route('course.coupon.remove') }}",
      method: 'POST',
      data: {
        _token: '{{ csrf_token() }}',
        course_id: courseId
      },
      success: function(response) {
        $('#price').text('{{ number_format($course->price, 2) }}');
        $('#coupon-message').html('<p class="text-success">Coupon removed successfully!</p>');
        $('#coupon_code_id').val('');
        location.reload();
      },
      error: function(xhr) {
        alert('Failed to remove coupon. Please try again.');
      }
    });
  });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const applyBtn = document.getElementById('apply-coupon-btn');

  if (!applyBtn) {
    console.error("Apply button not found");
    return;
  }

  applyBtn.addEventListener('click', function () {
    const courseId = document.querySelector('input[name="course_id"]').value;
    const type = document.querySelector('input[name="type"]').value;
    const couponCode = document.getElementById('coupon_code').value;
    const durationInput = document.querySelector('select[name="duration"], input[name="duration"]');
    const formData = new FormData();
    formData.append('course_id', courseId);
    formData.append('type', type);
    formData.append('coupon_code', couponCode);
    if (type === 'elite' && durationInput) {
      formData.append('duration', durationInput.value);
    }


    fetch('{{ route('course.coupon.apply') }}', {
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      const messageBox = document.getElementById('coupon-message');
      if (data.success) {
        messageBox.innerHTML = `<p style="color:green">${data.message}</p>`;
        console.log(data);

        const coupon = data.coupon;
        $('#coupon_code_id').val(coupon.id);

        // ✅ Update price (with null check)
        const discountedPriceEl = document.getElementById('discounted-price');
        if (discountedPriceEl) {
          discountedPriceEl.textContent = '₹' + coupon.final_price;
        }

        // ✅ Hide apply form
        const applyForm = document.getElementById('coupon-form');
        if (applyForm) {
          applyForm.style.display = 'none';
        }

        // ✅ Show remove coupon section
        const inputGroup = document.querySelector('.input-group');

        const discountText = coupon.type == 2 ? '₹' + coupon.discount : coupon.discount + '%';

        const html = `
          <div class="border p-3 bg-light rounded w-100" id="remove_coupon_section">
            <h5>Coupon Applied: <strong>${coupon.coupon_code}</strong></h5>
            <p class="mb-1">Discount: ${discountText}</p>
            <p class="text-success">You Saved: ₹${coupon.discount_amount}</p>
            <div id="remove_coupon">
              <input type="hidden" name="course_id" id="courseid" value="${courseId}">
              <button type="submit" class="remove-btn" id="remove-coupon-btn">Remove</button>
            </div>
          </div>
        `;

        // Append the new coupon section
        inputGroup.insertAdjacentHTML('beforeend', html);

      } else {
        messageBox.innerHTML = `<p style="color:red">${data.message}</p>`;
      }
    })
    .catch(error => console.error('Fetch error:', error));
  });
});
</script>

<script>
document.getElementById('duration')?.addEventListener('change', function () {
  const selected = this.options[this.selectedIndex];
  const basePrice = parseFloat(selected.getAttribute('data-price'));
  const discountedPriceEl = document.getElementById('discounted-price');

  // Check if coupon is already applied
  const appliedCoupon = document.querySelector('#remove_coupon_section');
  if (appliedCoupon) {
    const discountText = appliedCoupon.querySelector('p.mb-1')?.innerText;
    let finalPrice = basePrice;

    if (discountText.includes('%')) {
      const percentage = parseFloat(discountText.replace(/[^\d.]/g, ''));
      finalPrice = basePrice - (basePrice * (percentage / 100));
    } else if (discountText.includes('₹')) {
      const flat = parseFloat(discountText.replace(/[^\d.]/g, ''));
      finalPrice = basePrice - flat;
    }

    discountedPriceEl.innerText = `₹${finalPrice.toFixed(2)}`;
  } else {
    discountedPriceEl.innerText = `₹${basePrice.toFixed(2)}`;
  }
});

</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const durationSelect = document.getElementById('duration');
  const discountedPriceEl = document.getElementById('discounted-price');
  const originalPriceEl = document.getElementById('original-price');

  function updatePrices() {
    const selected = durationSelect.options[durationSelect.selectedIndex];
    const basePrice = parseFloat(selected.getAttribute('data-price'));
    const originalPrice = parseFloat(selected.getAttribute('data-original-price'));

    // Update Original Price
    if (originalPriceEl) {
      originalPriceEl.innerText = `₹${originalPrice.toFixed(2)}`;
    }

    // Update Discounted Price
    const appliedCoupon = document.querySelector('#remove_coupon_section');
    let finalPrice = basePrice;

    if (appliedCoupon) {
      const discountText = appliedCoupon.querySelector('p.mb-1')?.innerText;
      if (discountText.includes('%')) {
        const percentage = parseFloat(discountText.replace(/[^\d.]/g, ''));
        finalPrice = basePrice - (basePrice * (percentage / 100));
      } else if (discountText.includes('₹')) {
        const flat = parseFloat(discountText.replace(/[^\d.]/g, ''));
        finalPrice = basePrice - flat;
      }
    }
    discountedPriceEl.innerText = `₹${finalPrice.toFixed(2)}`;
  }
  durationSelect?.addEventListener('change', updatePrices);
  updatePrices();
});
</script>
</body>
</html>
