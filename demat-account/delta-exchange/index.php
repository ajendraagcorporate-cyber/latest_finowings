<?php
include("../../DLL/config.php");
include("../../DLL/functions.php");
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Delta Exchange India | Is It Legal - Fees, Pros, Cons, Full Review </title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="delta exchange, delta exchange india, delta exchange app, Delta Exchange Charges, delta exch, best crypto trade app in India" name="keywords">
	<meta content="Trade crypto legally with Delta Exchange India. Enjoy low fees, smart margining & 24/7 support. Start trading BTC, ETH & more with ease today" name="description">
	<link rel="canonical" href="https://www.finowings.com/demat-account/delta-exchange/" />

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
	<link href="../../lib/animate/animate.min.css" rel="stylesheet">
	<link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="../../css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="../../css/style.css" rel="stylesheet">

	<!--Bootstrap code-->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<!--Bootstrap code-->

	<script type="application/ld+json">
		{
			"@context": "https://schema.org/",
			"@type": "BreadcrumbList",
			"itemListElement": [{
				"@type": "ListItem",
				"position": 1,
				"name": "Home",
				"item": "https://www.finowings.com/"
			}, {
				"@type": "ListItem",
				"position": 2,
				"name": "Demat Account",
				"item": "https://www.finowings.com/open-demat-account.php"
			}, {
				"@type": "ListItem",
				"position": 3,
				"name": "Delta Exchnage India",
				"item": "https://www.finowings.com/demat-account/delta-exchange/"
			}]
		}
	</script>

	<!-- FAQ CSS Start -->
	<style>
		/* Custom Accordion Styles */
		.accordion-item {
			border: none;
			margin-bottom: 15px;
			border-radius: 10px !important;
			overflow: hidden;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
		}

		.accordion-button {
			color: #273158;
			/* Bold Blue */
			font-weight: 600;
			background-color: #ffffff;
			border-left: 5px solid #cf9c0a;
			/* Honey Gold */
			box-shadow: none !important;
			width: 100%;
			text-align: left;
			padding: 1rem 1.25rem;
			font-size: 1rem;
			border: 0;
			border-radius: 0;
			overflow-anchor: none;
			transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, border-radius .15s ease;
		}

		.accordion-button:not(.collapsed) {
			color: #ffffff;
			background-color: #273158;
			/* Bold Blue */
			border-left: 5px solid #cf9c0a;
			/* Honey Gold */
		}

		.accordion-button:not(.collapsed)::after {
			filter: brightness(0) invert(1);
			/* Make arrow white */
		}

		.accordion-button:focus {
			box-shadow: none;
			border-color: rgba(0, 0, 0, .125);
			outline: 0;
		}

		.accordion-body {
			background-color: #ffffff;
			/* White background for body */
			color: #181d38;
			/* Powerful */
			font-weight: 500;
			border-top: 1px solid #dee2e6;
			padding: 1rem 1.25rem;
		}

		/* Custom Explore Button Style */
		.btn-explore {
			background: linear-gradient(90deg, #273158 0%, #4a5c9a 100%) !important;
			border: none !important;
			color: #ffffff !important;
			border-radius: 50px !important;
			font-weight: 500;
			font-size: 15px;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
			transition: all 0.3s ease;
		}

		.btn-explore:hover {
			background: linear-gradient(90deg, #cf9c0a 0%, #f0c345 100%) !important;
			color: #ffffff !important;
			transform: translateY(-2px);
			box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
		}

		/* Mobile adjustments for Explore Buttons */
		@media (max-width: 576px) {
			.btn-explore {
				padding: 8px 16px !important;
				font-size: 13px !important;
				margin-top: 5px !important;
				width: 80% !important;
				/* Make them consistent width on mobile */
				display: block !important;
				margin-left: auto !important;
				margin-right: auto !important;
			}
		}

		/*** Header carousel ***/
		@media (max-width: 768px) {
			.table tr td {
				font-size: 13px;
				padding: 5px !important;
			}
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
	<?php include("../../top-navigation.php"); ?>
	<!-- Navbar End -->


	<!-- About Mukul Agrawal Start -->
	<div class="container-xxl py-5">
		<div class="container">
			<div class="row g-5">
				<!--<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-90 h-90" src="../../admin/media/<?php echo $fi_pic; ?>" alt="" style="object-fit: cover;">
                    </div>
                </div>-->



				<div class="col-lg-12">


					<p style="font-weight:bold;" class="section-title bg-white text-start text-primary pe-3">How To Open a Account with</p>
					<h1 class="mb-4">Delta Exchange India</h1>
					<p align="justify">With the backing of well-known investors and excellent trading volumes and growth, Delta Exchange India is a <a href="https://www.finowings.com/Trading/best-trading-apps-in-india" style="font-weight:bold;">crypto trading platform</a> that provides safe options for trading on a range of cryptocurrency assets.</p>

					<p align="justify">If you’re looking for the best crypto trade app in India then the Delta exchange app is for you.</p>

					<p align="justify">Delta Exchange is Legal In India? This query is common among fresh investors who want to enter into crypto trading in India. So yes, it is legal and registered with the FIU, Government of India.</p>
					<p dir="ltr">&nbsp;</p>
					<h2 dir="ltr">What is Delta Exchange India?</h2>
					<p dir="ltr">Delta Exchange India (Delta Exchange Indian) is a derivative <a href="../Trading/top-trading-platforms-in-india">trading platform</a> that was created in 2021 with the target audience being Indian users. As opposed to Binance or CoinDCX, where people can buy and hold crypto through spot trading, Delta Exchange is active in the business of futures and options contracts only.</p>
					<br />
					<p align="center"><a href="https://www.finowings.com/deltaexchangeclicks.php" target="_blank"><img src="https://www.finowings.com/img/delta-exchange-banner1.webp" width="80%" /></a></p>
					<p dir="ltr">&nbsp;</p>
					<h2 dir="ltr">What Makes It Different?</h2>
					<p dir="ltr">One Primary Difference: It does not purchase real Bitcoin and Ethereum.&nbsp;</p>
					<p dir="ltr">You are buying contracts, which see their value in these cryptocurrencies. You would imagine it like the Nifty futures in the stock market, which is a bet on the price change but you do not actually own the underlying commodity.</p>
					<p dir="ltr">&nbsp;</p>
					<h3 dir="ltr">Real Example:</h3>
					<p dir="ltr"><strong>Spot Trading (Binance): </strong>1 ETH costs 1,50,000 rupees. You own it. Assuming that the price is increased to 1,80 000, you sell and earn a 30,000 profit.</p>
					<p dir="ltr"><strong>Futures Trading (Delta Exchange): </strong>You place a long order of 10x leveraged, in ETF futures, not less, not more than 1,50,000 in 1,400 of ETF addition and have a sort of margin of 15,000. When ETH increases to 1.8 Lakhs of 180,000, you make 30,000 as a profit.&nbsp; Additionally, it will cost you 30,000 (or be put up for auction) when it drops to 120,000.</p>
					<p dir="ltr">&nbsp;</p>
					<h2 dir="ltr">Platform History &amp; Background&nbsp;</h2>
					<table width="100%">
						<tbody>
							<tr style="color: rgb(255, 255, 255); background-color: rgb(39, 49, 88);">
								<td width="50%">
									<p dir="ltr"><strong>Particular</strong></p>
								</td>
								<td>
									<p dir="ltr"><strong>Details</strong></p>
								</td>
							</tr>
							<tr>
								<td>
									<p dir="ltr">Founded</p>
								</td>
								<td>
									<p dir="ltr">2018 (Global), 2021 (India-specific version)</p>
								</td>
							</tr>
							<tr style="background-color: rgb(233, 249, 255) !important;">
								<td>
									<p dir="ltr">Headquarters</p>
								</td>
								<td>
									<p dir="ltr">Singapore</p>
								</td>
							</tr>
							<tr>
								<td>
									<p dir="ltr">India Operations</p>
								</td>
								<td>
									<p dir="ltr">Mumbai, India&nbsp;</p>
								</td>
							</tr>
							<tr style="background-color: rgb(233, 249, 255) !important;">
								<td>
									<p dir="ltr">Registration</p>
								</td>
								<td>
									<p dir="ltr">Financial Intelligence Unit (FIU), Government of India</p>
								</td>
							</tr>
							<tr>
								<td>
									<p dir="ltr">Registration Number</p>
								</td>
								<td>
									<p dir="ltr">REID VA00041101</p>
								</td>
							</tr>
							<tr style="background-color: rgb(233, 249, 255) !important;">
								<td>
									<p dir="ltr">Funding</p>
								</td>
								<td>
									<p dir="ltr">$11 million from Draper Dragon, Consensys, and Kindred Ventures&nbsp;</p>
								</td>
							</tr>
							<tr>
								<td>
									<p dir="ltr">Trading Volume</p>
								</td>
								<td>
									<p dir="ltr">$500M+ monthly (as of November 2025)&nbsp;</p>
								</td>
							</tr>
							<tr style="background-color: rgb(233, 249, 255) !important;">
								<td>
									<p dir="ltr">Users</p>
								</td>
								<td>
									<p dir="ltr">150,000+ registered Indian users</p>
								</td>
							</tr>
						</tbody>
					</table>
					<p>&nbsp;</p>
					<h2>Benefits and Features of Delta Exchange</h2>
					<ul>
						<li>24*7*365 Market hours are open, hence all day of the year, trading is possible.</li>
						<li>Small lot sizes (ETH contracts at around Rs.2500 and Bitcoin contracts at around Rs.5000) to facilitate entry.</li>
						<li>To increase your trading opportunities, use daily, weekly, and monthly expiries.</li>
						<li>A clever margining strategy that lets you trade more with less money</li>
						<li>Simple Registration</li>
						<li>24/7 Customer Service</li>
						<li>Create and evaluate trading plans using a collection of options and futures.</li>
						<li>Trade daily and weekly expiration deep OTM/ITM options strikes.</li>
						<li>Easily monitor and evaluate your trade results.</li>
					</ul>
					<p>&nbsp;</p>
					<p dir="ltr"><strong>Platform Versions: Global vs India</strong></p>
					<p dir="ltr">Critical difference most users don't know:</p>
					<table style="height: 489.515px;" width="100%">
						<tbody>
							<tr style="color: rgb(255, 255, 255); background-color: rgb(39, 49, 88); height: 54.3906px;">
								<td style="height: 54.3906px;">
									<p dir="ltr"><strong>Feature</strong></p>
								</td>
								<td style="height: 54.3906px;">
									<p dir="ltr"><strong>Delta Exchange Global</strong></p>
								</td>
								<td style="height: 54.3906px;">
									<p dir="ltr"><strong>Delta Exchange India</strong></p>
								</td>
							</tr>
							<tr style="height: 54.3906px;">
								<td style="height: 54.3906px;">
									<p dir="ltr">Available Assets</p>
								</td>
								<td style="height: 54.3906px;">
									<p dir="ltr">300+ contracts</p>
								</td>
								<td style="height: 54.3906px;">
									<p dir="ltr">15+ major contracts only</p>
								</td>
							</tr>
							<tr style="background-color: rgb(233, 249, 255) !important; height: 54.3906px;">
								<td style="height: 54.3906px;">
									<p dir="ltr">Maximum Leverage</p>
								</td>
								<td style="height: 54.3906px;">
									<p dir="ltr">100x</p>
								</td>
								<td style="height: 54.3906px;">
									<p dir="ltr">100x</p>
								</td>
							</tr>
							<tr style="height: 54.3906px;">
								<td style="height: 54.3906px;">
									<p dir="ltr">Deposit Methods</p>
								</td>
								<td style="height: 54.3906px;">
									<p dir="ltr">Crypto only</p>
								</td>
								<td style="height: 54.3906px;">
									<p dir="ltr">INR via bank transfer</p>
								</td>
							</tr>
							<tr style="background-color: rgb(233, 249, 255) !important; height: 54.3906px;">
								<td style="height: 54.3906px;">
									<p dir="ltr">Regulation</p>
								</td>
								<td style="height: 54.3906px;">
									<p dir="ltr">CFTC registered (USA)</p>
								</td>
								<td style="height: 54.3906px;">
									<p dir="ltr">FIU registered (India)</p>
								</td>
							</tr>
							<tr style="height: 54.3906px;">
								<td style="height: 54.3906px;">
									<p dir="ltr">Spot Trading</p>
								</td>
								<td style="height: 54.3906px;">
									<p dir="ltr">No</p>
								</td>
								<td style="height: 54.3906px;">
									<p dir="ltr">No</p>
								</td>
							</tr>
							<tr style="background-color: rgb(233, 249, 255) !important; height: 54.3906px;">
								<td style="height: 54.3906px;">
									<p dir="ltr">Margin Trading</p>
								</td>
								<td style="height: 54.3906px;">
									<p dir="ltr">Yes</p>
								</td>
								<td style="height: 54.3906px;">
									<p dir="ltr">Yes</p>
								</td>
							</tr>
							<tr style="height: 54.3906px;">
								<td style="height: 54.3906px;">
									<p dir="ltr">Options Trading</p>
								</td>
								<td style="height: 54.3906px;">
									<p dir="ltr">Yes</p>
								</td>
								<td style="height: 54.3906px;">
									<p dir="ltr">Yes (limited strikes)</p>
								</td>
							</tr>
							<tr style="background-color: rgb(233, 249, 255) !important; height: 54.3906px;">
								<td style="height: 54.3906px;">
									<p dir="ltr">Token (DETO)</p>
								</td>
								<td style="height: 54.3906px;">
									<p dir="ltr">Yes</p>
								</td>
								<td style="height: 54.3906px;">
									<p dir="ltr">No benefits for Indians</p>
								</td>
							</tr>
						</tbody>
					</table>
					<p dir="ltr"><strong>Important: </strong>Make sure you're using delta.exchange/in for Indian operations, not the global platform.</p>
					<p dir="ltr">&nbsp;</p>
					<h2 dir="ltr">Is Delta Exchange Legal and Safe in India? (2025-2026 Regulatory Status)</h2>
					<p dir="ltr"><strong>Legal Status:</strong> YES, It's Legal.</p>
					<p dir="ltr">&nbsp;</p>
					<h3 dir="ltr">Registration Details:</h3>
					<ul>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation"><strong>Registered with:</strong> Financial Intelligence Unit - India (FIU-IND).</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation"><strong>Registration Type:</strong> Reporting Entity under PMLA (Prevention of Money Laundering Act).</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation"><strong>Registration Number:</strong> REID VA00041101.</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation"><strong>Compliance:</strong> 1% TDS deduction on all trades (as per Finance Act 2022)</p>
						</li>
					</ul>
					<p dir="ltr">&nbsp;</p>
					<div align="center"><a href="https://www.finowings.com/deltaexchangeclicks.php" target="_blank"><img src="../../cypto-ctr/delta-exchange-cta.webp" class="img-fluid mx-auto d-block" /></a></div>
					<p dir="ltr">&nbsp;</p>
					<h3 dir="ltr">What FIU Registration Means:</h3>
					<ul>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">Delta Exchange must report suspicious transactions to the government.</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">KYC/AML (Know Your Customer/Anti-Money Laundering) compliance is mandatory.</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">User data is shared with government authorities when required.</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">Does NOT mean SEBI regulation (it's not a securities exchange).</p>
						</li>
					</ul>
					<p>&nbsp;</p>
					<h3 dir="ltr">Is It SEBI Registered? NO</h3>
					<p dir="ltr"><strong>Common Misconception: </strong>Many users think crypto exchanges should be SEBI registered.</p>
					<p dir="ltr"><strong>Reality:</strong> SEBI (<a href="https://www.sebi.gov.in/">Securities and Exchange Board of India</a>) has nothing to do with the regulation of cryptocurrencies. Cryptocurrency is in a regulatory gray zone in India. Trading activities are not controlled by the Finance Ministry and RBI, which control and provide taxation and AML compliance.</p>
					<p dir="ltr">&nbsp;</p>
					<!--Google Adsense Code Starts-->
					<div align="center">
						<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4481710634198846" crossorigin="anonymous"></script>
						<!-- Blog-Top-Banner -->
						<ins class="adsbygoogle"
							style="display:inline-block;width:728px;height:90px"
							data-ad-client="ca-pub-4481710634198846"
							data-ad-slot="3968038623"></ins>
						<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					</div>
					<!--Google Adsense Code Ends-->
					<p dir="ltr">&nbsp;</p>
					<h3 dir="ltr">What This Means for You:</h3>
					<ul>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">No investor protection like the stock market (no arbitration, compensation fund).</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">Disputes must be resolved through civil courts.</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">Platform bankruptcy could result in the complete loss of funds.</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">The government can change regulations overnight</p>
						</li>
					</ul>
					<h3 dir="ltr"><br>Security Measures Delta Exchange Uses</h3>
					<ul>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation"><strong>Two-Factor Authentication (2FA):</strong> Requirements on withdrawals.</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation"><strong>Cold Storage:</strong> 95% of bodily cash stored offline (proclaimed, but not confirmed).</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation"><strong>Restricted Withdrawals:</strong> Is able to block withdrawals to addresses that are whitelisted.</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation"><strong>Email Confirmations:</strong> Email verification must be carried out on all withdrawals.</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation"><strong>IP Whitelisting:</strong> Lock account to specific IP addresses.</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation"><strong>Anti-Phishing Code:</strong> Set custom code to verify official emails</p>
						</li>
					</ul>
					<h3 dir="ltr"><br>Complete Fee Structure Breakdown (Hidden Costs Revealed)</h3>
					<p dir="ltr"><strong>Futures Trading Fees:</strong></p>
					<table style="width: 100%;" width="100%">
						<tbody>
							<tr style="color: rgb(255, 255, 255); background-color: rgb(39, 49, 88);">
								<td style="width: 36.879%;">
									<p dir="ltr"><strong>Fee Type</strong></p>
								</td>
								<td style="width: 25.7019%;">
									<p dir="ltr"><strong>Rate</strong></p>
								</td>
								<td style="width: 37.419%;">
									<p dir="ltr"><strong>Example (₹1 Lakh Trade)</strong></p>
								</td>
							</tr>
							<tr>
								<td style="width: 36.879%;">
									<p dir="ltr">Maker Fee (limit orders)</p>
								</td>
								<td style="width: 25.7019%;">
									<p dir="ltr">0.02%</p>
								</td>
								<td style="width: 37.419%;">
									<p dir="ltr">₹20</p>
								</td>
							</tr>
							<tr style="background-color: rgb(233, 249, 255) !important;">
								<td style="width: 36.879%;">
									<p dir="ltr">Taker Fee (market orders)</p>
								</td>
								<td style="width: 25.7019%;">
									<p dir="ltr">0.05%</p>
								</td>
								<td style="width: 37.419%;">
									<p dir="ltr">₹50</p>
								</td>
							</tr>
							<tr>
								<td style="width: 36.879%;">
									<p dir="ltr">GST on Fees</p>
								</td>
								<td style="width: 25.7019%;">
									<p dir="ltr">18%</p>
								</td>
								<td style="width: 37.419%;">
									<p dir="ltr">₹9 (on ₹50 taker fee)</p>
								</td>
							</tr>
							<tr style="background-color: rgb(233, 249, 255) !important;">
								<td style="width: 36.879%;">
									<p dir="ltr">TDS (since July 2022)</p>
								</td>
								<td style="width: 25.7019%;">
									<p dir="ltr">1% of trade value</p>
								</td>
								<td style="width: 37.419%;">
									<p dir="ltr">₹1,000</p>
								</td>
							</tr>
							<tr>
								<td style="width: 36.879%;">
									<p dir="ltr">Total Cost (Taker)</p>
								</td>
								<td style="width: 25.7019%;">
									<p dir="ltr">1.059%</p>
								</td>
								<td style="width: 37.419%;">
									<p dir="ltr">₹1,059</p>
								</td>
							</tr>
						</tbody>
					</table>
					<p dir="ltr">&nbsp;</p>
					<p dir="ltr"><strong>Options Trading Fees:</strong></p>
					<table width="100%">
						<tbody>
							<tr style="color: rgb(255, 255, 255); background-color: rgb(39, 49, 88);">
								<td>
									<p dir="ltr"><strong>Fee Type</strong></p>
								</td>
								<td>
									<p dir="ltr"><strong>Rate</strong></p>
								</td>
								<td>
									<p dir="ltr"><strong>Example (₹10,000 Premium)</strong></p>
								</td>
							</tr>
							<tr>
								<td>
									<p dir="ltr">Maker Fee</p>
								</td>
								<td>
									<p dir="ltr">0.03% of notional</p>
								</td>
								<td>
									<p dir="ltr">₹30</p>
								</td>
							</tr>
							<tr style="background-color: rgb(233, 249, 255) !important;">
								<td>
									<p dir="ltr">Taker Fee</p>
								</td>
								<td>
									<p dir="ltr">0.03% of notional</p>
								</td>
								<td>
									<p dir="ltr">₹30</p>
								</td>
							</tr>
							<tr>
								<td>
									<p dir="ltr">GST</p>
								</td>
								<td>
									<p dir="ltr">18%</p>
								</td>
								<td>
									<p dir="ltr">₹5.40</p>
								</td>
							</tr>
							<tr style="background-color: rgb(233, 249, 255) !important;">
								<td>
									<p dir="ltr">TDS</p>
								</td>
								<td>
									<p dir="ltr">1% of notional</p>
								</td>
								<td>
									<p dir="ltr">₹1,000</p>
								</td>
							</tr>
							<tr>
								<td>
									<p dir="ltr">Cap</p>
								</td>
								<td>
									<p dir="ltr">10% of premium</p>
								</td>
								<td>
									<p dir="ltr">Max ₹1,000 for ₹10K premium</p>
								</td>
							</tr>
						</tbody>
					</table>
					<p dir="ltr">&nbsp;</p>
					<h3 dir="ltr">Settlement Fees:</h3>
					<ul>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">At Expiry: Taker fees applied (0.05% for futures, 0.03% for options).</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">Early Exit: Same as regular trading fees</p>
						</li>
					</ul>
					<h3 dir="ltr"><br>Delta Exchange vs Competitors: Detailed Comparison</h3>
					<table width="100%">
						<tbody>
							<tr style="color: rgb(255, 255, 255); background-color: rgb(39, 49, 88);">
								<td>
									<p dir="ltr"><strong>Feature</strong></p>
								</td>
								<td>
									<p dir="ltr"><strong>Delta Exchange</strong></p>
								</td>
								<td>
									<p dir="ltr"><strong>Binance India</strong></p>
								</td>
								<td>
									<p dir="ltr"><strong>CoinDCX</strong></p>
								</td>
								<td>
									<p dir="ltr"><strong>WazirX</strong></p>
								</td>
							</tr>
							<tr>
								<td>
									<p dir="ltr">Spot Trading</p>
								</td>
								<td>
									<p dir="ltr">No</p>
								</td>
								<td>
									<p dir="ltr">Yes</p>
								</td>
								<td>
									<p dir="ltr">Yes</p>
								</td>
								<td>
									<p dir="ltr">Yes</p>
								</td>
							</tr>
							<tr style="background-color: rgb(233, 249, 255) !important;">
								<td>
									<p dir="ltr">Futures</p>
								</td>
								<td>
									<p dir="ltr">Yes</p>
								</td>
								<td>
									<p dir="ltr">Yes</p>
								</td>
								<td>
									<p dir="ltr">Yes</p>
								</td>
								<td>
									<p dir="ltr">No</p>
								</td>
							</tr>
							<tr>
								<td>
									<p dir="ltr">Options</p>
								</td>
								<td>
									<p dir="ltr">Yes</p>
								</td>
								<td>
									<p dir="ltr">No</p>
								</td>
								<td>
									<p dir="ltr">No</p>
								</td>
								<td>
									<p dir="ltr">No</p>
								</td>
							</tr>
							<tr style="background-color: rgb(233, 249, 255) !important;">
								<td>
									<p dir="ltr">Max Leverage</p>
								</td>
								<td>
									<p dir="ltr">100x</p>
								</td>
								<td>
									<p dir="ltr">20x</p>
								</td>
								<td>
									<p dir="ltr">10x</p>
								</td>
								<td>
									<p dir="ltr">N/A</p>
								</td>
							</tr>
							<tr>
								<td>
									<p dir="ltr">INR Deposits</p>
								</td>
								<td>
									<p dir="ltr">Free</p>
								</td>
								<td>
									<p dir="ltr">Free</p>
								</td>
								<td>
									<p dir="ltr">Free</p>
								</td>
								<td>
									<p dir="ltr">Free</p>
								</td>
							</tr>
							<tr style="background-color: rgb(233, 249, 255) !important;">
								<td>
									<p dir="ltr">Contract Types</p>
								</td>
								<td>
									<p dir="ltr">15+</p>
								</td>
								<td>
									<p dir="ltr">50+</p>
								</td>
								<td>
									<p dir="ltr">30+</p>
								</td>
								<td>
									<p dir="ltr">N/A</p>
								</td>
							</tr>
							<tr>
								<td>
									<p dir="ltr">Mini Contracts</p>
								</td>
								<td>
									<p dir="ltr">From ₹2,500</p>
								</td>
								<td>
									<p dir="ltr">From ₹50,000</p>
								</td>
								<td>
									<p dir="ltr">From ₹25,000</p>
								</td>
								<td>
									<p dir="ltr">N/A</p>
								</td>
							</tr>
							<tr style="background-color: rgb(233, 249, 255) !important;">
								<td>
									<p dir="ltr">Daily Expiries</p>
								</td>
								<td>
									<p dir="ltr">Yes</p>
								</td>
								<td>
									<p dir="ltr">No</p>
								</td>
								<td>
									<p dir="ltr">No</p>
								</td>
								<td>
									<p dir="ltr">N/A</p>
								</td>
							</tr>
							<tr>
								<td>
									<p dir="ltr">Options Strikes</p>
								</td>
								<td>
									<p dir="ltr">10-15 per expiry</p>
								</td>
								<td>
									<p dir="ltr">N/A</p>
								</td>
								<td>
									<p dir="ltr">N/A</p>
								</td>
								<td>
									<p dir="ltr">N/A</p>
								</td>
							</tr>
							<tr style="background-color: rgb(233, 249, 255) !important;">
								<td>
									<p dir="ltr">Demo Account</p>
								</td>
								<td>
									<p dir="ltr">Yes</p>
								</td>
								<td>
									<p dir="ltr">No</p>
								</td>
								<td>
									<p dir="ltr">Yes</p>
								</td>
								<td>
									<p dir="ltr">N/A</p>
								</td>
							</tr>
							<tr>
								<td>
									<p dir="ltr">Mobile App Rating</p>
								</td>
								<td>
									<p dir="ltr">2.8/5 (Play Store)</p>
								</td>
								<td>
									<p dir="ltr">3.9/5</p>
								</td>
								<td>
									<p dir="ltr">3.2/5</p>
								</td>
								<td>
									<p dir="ltr">2.1/5</p>
								</td>
							</tr>
						</tbody>
					</table>
					<p>&nbsp;</p>
					<h2 dir="ltr">Real User Reviews &amp; Complaints Analysis</h2>
					<p dir="ltr">I analyzed 200+ reviews from Google Play Store, Trustpilot, Reddit (r/CryptoIndia), and Quora to identify common patterns.</p>
					<h3 dir="ltr">Positive Reviews (What Users Like)</h3>
					<p dir="ltr"><strong>Most Common Praise:</strong></p>
					<ol>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">INR Deposits (68% mention): "No need to buy USDT first. Direct bank transfer makes it easy."</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">Options Trading (41% mention): "Only Indian platform with crypto options. Game-changer for hedging."</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">Mini Contracts (34% mention): "Can start with ₹5,000. Other platforms need ₹50,000 minimum."</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">Leverage (29% mention): "100x leverage gave me 10x returns on a small account."</p>
						</li>
					</ol>
					<h3 dir="ltr">Negative Reviews (What Users Dislike)</h3>
					<p dir="ltr"><strong>Most Common Complaints:</strong></p>
					<ol>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">Trading Fees: "Was profitable in trade but still lost ₹16,000. The buy and sell fees are extremely high."</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">App Crashes During Volatility (52% mention): "App always hangs whenever there's volatility. What's the point of an app that crashes every time you take a trade?"<a href="https://apps.apple.com/in/app/6478332344?see-all=reviews&amp;platform=iphone">&nbsp;</a></p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">Customer Support Issues (38% mention): "Raised complaint but no reply. When complained on Telegram, they just blocked me. Now there's no other way to contact them.</p>
						</li>
					</ol>
					<h2 dir="ltr">&nbsp;</h2>
					<h2 dir="ltr">Common Tax Mistakes to Avoid</h2>
					<p dir="ltr"><strong>Mistake 1: Not Filing ITR "I made only ₹20,000 profit. Do I need to file?"</strong></p>
					<p dir="ltr"><strong>Reality:&nbsp;</strong>YES. Any crypto transaction requires ITR filing even if profit is ₹1. TDS has been deducted with your PAN. Not filing = Tax notice.</p>
					<p dir="ltr">&nbsp;</p>
					<p dir="ltr"><strong>Mistake 2: Hiding Crypto Income "Income Tax department won't know about my crypto trading."</strong></p>
					<p dir="ltr"><strong>Reality:</strong></p>
					<ul>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">Delta Exchange reports all trades to FIU</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">FIU shares data with Income Tax department</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">Your PAN is tagged to your Delta account</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">Banks report UPI deposits/withdrawals</p>
						</li>
					</ul>
					<p dir="ltr"><strong>Penalty:</strong> 50% to 200% of tax + interest + possible prosecution</p>
					<p dir="ltr">&nbsp;</p>
					<p dir="ltr"><strong>Mistake 3: Claiming Trading as Business Income "I'll show it as business income to claim expenses."</strong></p>
					<p dir="ltr"><strong>Reality: </strong>Crypto trading cannot be shown as business income after Finance Act 2022. It MUST be reported under Schedule VDA (Virtual Digital Assets) with 31.2% tax rate. Trying to bypass this = Tax evasion.</p>
					<p dir="ltr">&nbsp;</p>
					<p dir="ltr"><strong>Mistake 4: Not Maintaining Records "I'll just estimate my profit."</strong></p>
					<p dir="ltr"><strong>Reality:</strong> If Income Tax sends notice, you need transaction-level proof. Without records:</p>
					<ul>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">Can't prove your purchase price (entire sale value treated as profit)</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">Can't claim TDS credit (if Form 26AS has errors)</p>
						</li>
						<li dir="ltr" aria-level="1">
							<p dir="ltr" role="presentation">Heavy penalties for understating income</p>
						</li>
					</ul>
					<p align="center"><iframe style="width: 404px; height: 227px; display: table; margin-left: auto; margin-right: auto;" src="https://www.youtube.com/embed/aitOQcIB6kY?si=drZou6RjGjGtP8Cs" frameborder="100%" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="allowfullscreen"></iframe></p
						<p>&nbsp;</p>
					<h2>How to Open an Account with Delta Exchange India?</h2>
					<ul>
						<li>Visit their website or get the Delta Exchange India app on your phone.</li>
						<li>Press the "Sign up" button.</li>
						<li>Full KYC Verification.</li>
						<li>Keep your PAN and Aadhaar with you.</li>
						<li>Link your bank account and make an INR deposit.</li>
						<li>Deposit INR conveniently straight from your bank account. Trading doesn't require cryptocurrency.</li>
						<li>Begin trading.</li>
					</ul>
					<p>&nbsp;</p>
					<p><strong id="docs-internal-guid-f1a92110-7fff-8d95-98d9-ad38547b719e"><span style="color: rgb(52, 73, 94);">Click to open an account with</span> <span style="background-color: rgb(0, 0, 0); color: rgb(224, 62, 45);"><a style="background-color: rgb(0, 0, 0); color: rgb(224, 62, 45);" href="https://www.finowings.com/deltaexchangeclicks.php" target="_blank"><span style="background-color: rgb(255, 255, 255);">Delta Exchange India</span></a></span> <span style="color: rgb(52, 73, 94);">and start crypto trading today</span></strong></p>
					<p>&nbsp;</p>

					<h2>Delta Exchange Charges</h2>
					<p align="justify">
						For Futures, the trading fee (taker) and trading fee (maker) are 0.05% and 0.02% respectively, whereas for Options trading the trading fee (taker) and trading fee (maker) are 0.03% in both cases while the liquidation factor is 0.5.</p>
					<ul>
						<li>The GST rate on trading fees is 18%.</li>
						<li>The maximum option charge is 10% of the option premium fees, which are applied to the notional or order value (e.g. Rs.3 in trading costs for an option trade of notional Rs.10,000).</li>
						<li>All open contracts are subject to a settlement fee at the time of settlement (taker fees will be assessed).</li>
					</ul>

					<p>&nbsp;</p>

					<h2>After Open the Account, Please Fill out the Form</h2><br />
					<p align="justify" style="font-size:18px;">This form is only for those, who open a Demat account through Mukul sir's referral link of AngelOne. After filling out the form we will share the Premium Telegram Channel Link on your mail within a week. And also request you fill in all your details correctly. So that we can provide you all the benefits without any trouble.</p>
					<br />
					<p align="center"><a class="btn btn-primary py-2 px-4 mt-2 btn-explore" href="https://forms.gle/nhbBBWyPHPM6NRvx5" target="_blank">Form Link</a></p>
					<p>&nbsp;</p>

					<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background:#00acea; border:1px solid #00acea;">
Read More</button>-->
				</div>
			</div>



			<!-- FAQs Starts -->

			<div class="container-xxl">
				<div class="container" style="background: #e9f9ff;">
					<br />
					<h3 class="mb-4">Frequently Asked Questions</h3>

					<div class="accordion" id="gmpFaqAccordion">

						<!-- FAQ 1 -->
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
									Is Delta Exchange legal in India?
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-parent="#gmpFaqAccordion">
								<div class="accordion-body text-start">
									Yes, this Exchange is Legal as it is a member of the Financial Intelligence Unit (FIU), and fulfils all crypto trading regulations under Indian jurisdiction.
								</div>
							</div>
						</div>

						<!-- FAQ 2 -->
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Is Delta Exchange SEBI registered?
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-parent="#gmpFaqAccordion">
								<div class="accordion-body text-start">
									Delta Exchange India is NOT registered with SEBI (Securities and Exchange Board of India), but it’s registered at the Financial Intelligence Unit (FIU) India with Identification number: REID VA00041101
								</div>
							</div>
						</div>

						<!-- FAQ 3 -->
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
								<button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									What is the Delta Exchange customer care number?
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-parent="#gmpFaqAccordion">
								<div class="accordion-body text-start">
									Delta Exchange does not provide a customer care number. At their email, support@delta.exchange, you can reach them.
								</div>
							</div>
						</div>

						<!-- FAQ 4 -->
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFour">
								<button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									What are the Delta Exchange India brokerage charges?
								</button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-parent="#gmpFaqAccordion">
								<div class="accordion-body text-start">
									It provides open, transparent, and competitive brokerage charges. This is the standard execution fee of 0.05% for Maker and 0.075% for Taker on Futures and Options. This comes with no add-on charges anywhere, and users get the most out of cost-effective trading of mini contracts up to Rs. 2500.
								</div>
							</div>
						</div>

						<!-- FAQ 5 -->
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFive">
								<button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									How to perform Delta Exchange login?
								</button>
							</h2>
							<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-parent="#gmpFaqAccordion">
								<div class="accordion-body text-start">
									You have to visit the official register page of Delta exchange India, which is present both on the website and the app, then click Login, then use your registered email ID and Password, or you can log in with Google/Apple directly to your account securely.
								</div>
							</div>
						</div>

					</div>
					<br />

				</div>
			</div>


			<!-- FAQs Ends -->




		</div>
	</div>






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


</body>

</html>