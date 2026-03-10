<?php
header("Location: https://www.finowings.com/Stock/upcoming-dividend-stocks");
include("../DLL/config.php");
include("../DLL/functions.php");
if(isset($_POST['submit']))
{
 $s = $_POST['search'];
 $ipodetail = searchIPO($s);
}
else {	
$dividenddetail = getdividendStocks();
}
$date = date("Y-m-d");
$datef = strtotime($date);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dividend Paying Stocks 2025</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
	
	
    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">

	
	<!--Bootstrap code-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!--Bootstrap code-->

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Dividend Paying Stocks 2025",
  "url": "https://www.finowings.com/dividend-paying-stocks/",
  "description": "Explore the top dividend-paying stocks in India for 2025 including Sanofi Consumer Healthcare, Mazagon Dock Shipbuilders, and more. Get the latest updates on dividend announcements and financial performance.",
  "publisher": {
    "@type": "Organization",
    "name": "Finowings",
    "logo": {
      "@type": "ImageObject",
      "url": "https://www.finowings.com/img/finowings-logo.png",
      "width": 600,
      "height": 60
    }
  },
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://www.finowings.com/dividend-paying-stocks/"
  }
}
</script>

<style>
.card {
width: 500px !important;
display:inline;
border: 1px;
}	
</style>


<!-- FAQ CSS Start -->
<style>
.faq-header{
  font-size: 36px;
  border-bottom: 1px dotted #ccc;
  padding: 24px;
}

.faq-content {
  margin: 0 auto;
}

.faq-question {
  padding: 20px 0;
  border-bottom: 1px dotted #ccc;
}

.panel-title {
  font-size: 20px;
  width: 100%;
  position: relative;
  margin: 0;
  padding: 10px 10px 0 48px;
  display: block;
  cursor: pointer;
}

.panel-content {
  font-size: 16px;
  padding: 0px 14px;
  margin: 0 40px;
  height: 0;
  overflow: hidden;
  z-index: 1;
  position: relative;
  opacity: 0;
  -webkit-transition: .4s ease;
  -moz-transition: .4s ease;
  -o-transition: .4s ease;
  transition: .4s ease;
}

.panel:checked ~ .panel-content{
  height: auto;
  opacity: 1;
  padding: 14px;

}

.plus {
  position: absolute;
  margin-left: 20px;
  margin-top: 4px;
  z-index: 5;
  font-size: 35px;
  line-height: 100%;
  -webkit-user-select: none;    
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
  -webkit-transition: .2s ease;
  -moz-transition: .2s ease;
  -o-transition: .2s ease;
  transition: .2s ease;
}

.panel:checked ~ .plus {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}

.panel {
  display: none;
}
</style>
<!-- FAQ CSS Ends -->

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
    <?php include("../top-navigation.php"); ?>
    <!-- Navbar End -->

          <div class="container-xxl py-2">
        <div class="container">
		
		<div align="center"><a href="https://www.finowings.com/deltaexchangeclicks.php" target="_blank"><img src="../cypto-ctr/delta-exchange-cta.webp" class="img-fluid mx-auto d-block" /></a></div>	
		<br /><br />
			<div class="text-center">
				<h6 class="section-title bg-white text-center text-primary px-3">Dividend Stocks</h6>
                <h1 class="mb-3">Dividend Paying Stocks 2025</h1>
			   
				<!--<div class="main mt-2" align="center">
  
  <!-- Actual search box -->
 
  <!-- Another variation with a button -->
 <!-- <form method="post" action="">
  <div class="input-group" style="width:80%;">
    <input type="text" class="form-control" name="search" id="search" placeholder="Search IPO">
    <div class="btn btn-primary">
      <input type="submit" name="submit" value="Search">
	  
    </div>
  </div>
  </form>
  </div>-->		

            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-body">
                 
                    <div class="table-responsive"> 
                      <table class="table" style="text-align: left !important;">
                        <thead style="position: sticky; top: 0; z-index: 10;">
						
						 <tr style="color: rgb(255, 255, 255); background-color: rgb(39, 49, 88) !important;">
                           <th> Company</th>
						   <th> Symbol</th>
						   <th> Security Code</th>
						   <th> Dividend Record Date</th>
						   <th> Dividend Ex. Date</th>
						   <th> Dividend Type</th>
                            <th> Dividend Per Share </th>
                          </tr>
                         </thead>
						 <tbody>
						 
						<?php
						$i=1;
						while ($dividend = mysqli_fetch_array($dividenddetail)) {	
						$company = $dividend['company'];
                        $symbol = $dividend['symbol'];
                        $security_code = $dividend['security_code'];						
                        $record_date = $dividend['record_date'];
                        $ex_date = $dividend['ex_date'];
                        $dividend_type = $dividend['dividend_type']; 						
						$dividend_per_share = $dividend['dividend_per_share'];	
						?>
						<tr style="background-color: rgb(233, 249, 255) !important;">
						
						<td><?php echo $company; ?></td>
                            <td> <?php echo $symbol; ?> </td>
							<td> <?php echo $security_code; ?> </td>
							<td> <?php echo $record_date; ?> </td>
							<td> <?php echo $ex_date; ?> </td>
							<td> <?php echo $dividend_type; ?> </td>
							<td> <?php echo $dividend_per_share; ?> </td>
						</tr>
                
						 <?php
						$i = $i + 1; 
						}						 
						 ?>
						 
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
		      
              </div>  
			
			  
			</div>
			
			<br />
			
			
			 	<div align="center"><a href="https://www.finowings.com/angeloneclicks.php" target="_blank"><img src="../img/angel-one-ctr-banner.gif" class="img-fluid mx-auto d-block" /></a></div>
				
				 <br /> <br />
	

			
		</div>	 
		
		<div>
<h2 dir="ltr">Dividend Paying Stocks</h2>
<p dir="ltr">Dividend stocks are shares from a company that distribute a part of its profit to its shareholders in favor of dividends at intervals. Such stocks are a sufficient attraction for certain investors hoping for regular income while appreciating the further potential for capital gain.</p>
<p><strong>&nbsp;</strong></p>
<h2 dir="ltr">What Features to Expect from Dividend Stocks in 2025</h2>
<p dir="ltr">Here are a few features regarding dividends that you need to consider to get dividend paying stocks in 2025 for your portfolio.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">1. Dividend Yield &nbsp;</h3>
<p dir="ltr">&nbsp;Dividend Yield = (Stock Price/Annual Dividend) &times;100</p>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">&nbsp;A high yield may seem very attractive but may be dangerous if not sustainable.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">&nbsp;Ideal range: 2% to 6% for stability.</p>
</li>
</ul>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">2. Dividend Payout Ratio&nbsp;&nbsp;</h3>
<p dir="ltr">Payout Ratio = (Earnings per Share/Dividend per Share)&times;100</p>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Tells how much of earnings is being paid as dividends</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">&lt;60% is ideal for most sectors.</p>
</li>
</ul>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">3. Dividend History</h3>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Look for companies that have a consistent or increasing dividend track record.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">"Dividend Aristocrats" has been increasing dividends for 25 years and older.</p>
</li>
</ul>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">4. Company Fundamentals</h3>
<ul>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Strong cash flows and balance sheets.</p>
</li>
<li dir="ltr" aria-level="1">
<p dir="ltr" role="presentation">Low debt, good margins, and consistent earnings.&nbsp;</p>
</li>
</ul>
<p><strong><br><br></strong></p>
<h3 dir="ltr">Advantages of Dividend Paying Stocks</h3>
<p dir="ltr">Dividend paying shares have their own merits, especially if you are into long-term investing or passive income. Here are some of the main advantages:&nbsp;</p>
<p dir="ltr"><strong>1. Regular Income - </strong>Dividend stocks provide cash flow to you on a regular basis, generally quarterly. This becomes a kind of passive income - income trickles in besides your salary.</p>
<p dir="ltr"><strong>2. Less Volatile - </strong>Companies paying dividends are usually well-established and financially sound. Stocks issued by such companies do not tend to be very volatile, remaining fairly stable even in market turmoil.</p>
<p dir="ltr"><strong>3. Reinvesting for Compound Growth - </strong>When you invest the dividends received (through DRIP, or Dividend Reinvestment Plan), the returns would start to compound. Along with time, the portfolio just keeps getting bigger.</p>
<p dir="ltr"><strong>4. Hedge Against Inflation - </strong>Dividends, especially growing dividends (like from dividend aristocrats), help beat inflation. When the cost of living rises, these dividend payouts generally also increase.</p>
<p dir="ltr"><strong>5. Sign of Strong Fundamentals - </strong>Companies paying dividends are generally drawing from their profits to do so. So, the payment of a dividend is an indicator of a company being profitable and healthy.</p>
<p><strong>&nbsp;</strong></p>
<h3 dir="ltr">Disadvantages of Dividend Paying Stocks</h3>
<p dir="ltr">There are various cons of dividend stocks because of various factors such as:-</p>
<p dir="ltr"><strong>1. Slower Growth Potential - </strong>Dividend paying companies are usually mature; their goals tend to focus on stability rather than growth. Therefore, one cannot expect returns like the ones coming from high-growth companies.</p>
<p dir="ltr">&nbsp;<strong>2. Tax on Dividends - </strong>Tax rules vary from one country to another, but dividends are usually taxed, whether or not you have made a profit.&nbsp;&nbsp;</p>
<p dir="ltr">In India, dividends are added to your total income and taxed as per your slab.</p>
<p dir="ltr"><strong>3. Not Always Reliable - </strong>Dividends are not guaranteed. If a company is in a loss or a cash crunch, it may cut or suspend its dividend. The market will panic on this news.</p>
<p dir="ltr"><strong>4. Missed Opportunity for Reinvestment - </strong>This means dividends paid out by the company are not being reinvested into the business, perhaps into something with more growth opportunities, but instead are in your hands.</p>
<p dir="ltr"><strong>5. Dividend Traps - </strong>Some stocks show high dividend yields (10% and above), but this might just be a trap when the company's share price is declining or the business is weak. High yield does not always mean good stock.</p>
			</div>
		</div>
	   </div>	 

    <!-- Footer Start -->
 <?php include("../footer.php"); ?>
    <!-- Footer End -->
	
	
	<!--Scroll Box Script start-->
<script>
let mainNavLinks = document.querySelectorAll("navv ul li a");
let mainSections = document.querySelectorAll("main section");

let lastId;
let cur = [];

// This should probably be throttled.
// Especially because it triggers during smooth scrolling.
// https://lodash.com/docs/4.17.10#throttle
// You could do like...
// window.addEventListener("scroll", () => {
//    _.throttle(doThatStuff, 100);
// });
// Only not doing it here to keep this Pen dependency-free.

window.addEventListener("scroll", event => {
  let fromTop = window.scrollY;

  mainNavLinks.forEach(link => {
    let section = document.querySelector(link.hash);

    if (
      section.offsetTop <= fromTop &&
      section.offsetTop + section.offsetHeight > fromTop
    ) {
      link.classList.add("current");
    } else {
      link.classList.remove("current");
    }
  });
});
</script>
<!--Scroll Box Script end-->  



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>