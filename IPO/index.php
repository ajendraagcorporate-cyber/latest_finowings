<?php
include("../DLL/config.php");
include("../DLL/functions.php");
$mainboard_ipo = getmainboardIPO();
$mainboard_upcomingipo = getmainboardupcomingIPO();
$sme_ipo = getsmeIPO();
$sme_upcomingipo = getsmeupcomingIPO();
$mainboard_drhp = getmainboardIPOdrhp();
$sme_drhp = getsmeIPOdrhp();
$date = date("Y-m-d");
$datef = strtotime($date);
$active_page = 'ipo';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Upcoming IPO 2026 | Main Board & SME | Review & Today GMP</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="Upcoming IPO 2026, Grey Market Premium, Review, Valuations, Opening Date, Peer comparison, Company Financial and Dividend Policy" name="keywords">
	<meta content="Planning to invest in IPOs? Check upcoming IPOs in India 2026 with GMP, reviews, dates, and detailed company analysis." name="description">
	<link rel="canonical" href="https://www.finowings.com/IPO/" />

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

	<!-- Google AdSense - Optimized Loading -->
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4481710634198846" crossorigin="anonymous"></script>

	<!--Bootstrap code-->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<!--Bootstrap code-->

	<style>
		.card {
			width: 500px !important;
			display: inline;
			border: 1px;
		}

		/* Hide Ads on Mobile */
		@media (max-width: 767px) {
			.adsbygoogle,
			div[align="center"] .adsbygoogle,
			.ad-container-responsive .adsbygoogle {
				display: none !important;
			}

			.ad-container-responsive {
				display: none !important;
			}
		}
	</style>


	<!-- New section CSS Start -->
	<style>
		/* --- CSS Variables & Scoped Styles --- */
		.cfs-section-wrapper {
			--c-gold: #cf9c0a;
			/* Honey Gold */
			--c-blue: #273158;
			/* Bold Blue */
			--c-dark: #181d38;
			/* Powerful */
			--c-light: #E9F9FF;
			/* Lily White */
			--c-white: #ffffff;

			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			/* Fallback font */
			background: linear-gradient(180deg, var(--c-white) 0%, var(--c-light) 100%);
			padding: 60px 20px;
			position: relative;
			overflow: hidden;
			box-sizing: border-box;
		}

		.cfs-section-wrapper * {
			box-sizing: border-box;
		}

		/* Container */
		.cfs-container {
			max-width: 1200px;
			margin: 0 auto;
			width: 100%;
		}

		/* Header Section */
		.cfs-header {
			text-align: center;
			margin-bottom: 50px;
			position: relative;
			z-index: 2;
		}

		.cfs-badge {
			display: inline-block;
			background-color: #dbeafe;
			/* Light blue tint for badge bg */
			color: var(--c-blue);
			padding: 8px 20px;
			border-radius: 4px;
			font-weight: 600;
			font-size: 14px;
			margin-bottom: 15px;
		}

		.cfs-title {
			color: var(--c-dark);
			font-size: 36px;
			font-weight: 700;
			margin: 0 0 15px 0;
			line-height: 1.2;
		}

		.cfs-title span {
			color: var(--c-blue);
		}

		.cfs-subtitle {
			color: #666;
			font-size: 16px;
			max-width: 600px;
			margin: 0 auto;
			line-height: 1.6;
		}

		/* Grid Layout */
		.cfs-grid {
			display: grid;
			grid-template-columns: repeat(4, 1fr);
			gap: 25px;
		}

		/* Card Link Styling */
		.cfs-card-link {
			text-decoration: none;
			color: inherit;
			display: block;
			width: 100%;
			height: 100%;
			cursor: pointer;
			-webkit-tap-highlight-color: transparent;
		}

		.cfs-card-link:focus {
			outline: 2px solid var(--c-blue);
			outline-offset: 2px;
			border-radius: 12px;
		}

		/* Card Styling */
		.cfs-card {
			background: var(--c-white);
			border-radius: 12px;
			padding: 40px 25px;
			text-align: center;
			box-shadow: 0 10px 30px rgba(24, 29, 56, 0.05);
			/* Subtle shadow using 'Powerful' color */
			transition: transform 0.3s ease, box-shadow 0.3s ease;
			border: 1px solid rgba(0, 0, 0, 0.02);
			display: flex;
			flex-direction: column;
			align-items: center;
			width: 100%;
			height: 100%;
		}

		.cfs-card-link:hover .cfs-card {
			transform: translateY(-5px);
			box-shadow: 0 15px 35px rgba(24, 29, 56, 0.1);
		}

		.cfs-card-link:active .cfs-card {
			transform: translateY(-2px);
		}

		/* Icon Styling */
		.cfs-icon-box {
			width: 70px;
			height: 70px;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			margin-bottom: 25px;
			margin-top: -60px;
			/* Pulls icon up slightly like image */
			position: relative;
			background: var(--c-white);
			box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
		}

		/* Resetting negative margin for cleaner layout inside grid */
		.cfs-icon-box {
			margin-top: 0;
		}

		.cfs-icon-box svg {
			width: 32px;
			height: 32px;
			fill: white;
		}

		/* Dynamic Colors for Cards (Alternating Gold & Blue) */

		/* Card 1: Blue */
		.cfs-card-link:nth-child(1) .cfs-icon-box {
			background-color: var(--c-blue);
			box-shadow: 0 8px 20px rgba(39, 49, 88, 0.3);
		}

		/* Card 2: Honey Gold */
		.cfs-card-link:nth-child(2) .cfs-icon-box {
			background-color: var(--c-gold);
			box-shadow: 0 8px 20px rgba(207, 156, 10, 0.3);
		}

		/* Card 3: Blue */
		.cfs-card-link:nth-child(3) .cfs-icon-box {
			background-color: var(--c-blue);
			box-shadow: 0 8px 20px rgba(39, 49, 88, 0.3);
		}

		/* Card 4: Honey Gold */
		.cfs-card-link:nth-child(4) .cfs-icon-box {
			background-color: var(--c-gold);
			box-shadow: 0 8px 20px rgba(207, 156, 10, 0.3);	
		}


		.cfs-card-title {
			color: var(--c-dark);
			font-size: 18px;
			font-weight: 700;
			margin-bottom: 15px;
		}

		.cfs-card-text {
			color: #777;
			font-size: 14px;
			line-height: 1.6;
			margin: 0;
		}

		/* Decoration Dots (Background shapes) */
		.cfs-deco-circle {
			position: absolute;
			width: 20px;
			height: 20px;
			border: 2px solid var(--c-gold);
			border-radius: 50%;
			top: 40px;
			left: 5%;
			opacity: 0.5;
		}

		.cfs-deco-dot {
			position: absolute;
			width: 6px;
			height: 6px;
			background-color: var(--c-blue);
			border-radius: 50%;
			top: 70px;
			left: 7%;
			opacity: 0.7;
		}

		/* --- Responsive Design --- */

		/* Large Tablet / Small Desktop (3 Columns) */
		@media (max-width: 1200px) {
			.cfs-grid {
				grid-template-columns: repeat(3, 1fr);
				gap: 20px;
			}

		}

		/* Tablet (2 Columns) */
		@media (max-width: 992px) {
			.cfs-grid {
				grid-template-columns: repeat(2, 1fr);
				gap: 20px;
			}

			.cfs-card {
				padding: 35px 22px;
			}

			.cfs-title {
				font-size: 32px;
			}
		}

		/* Small Tablet / Large Mobile (2 Columns) */
		@media (max-width: 768px) {
			.cfs-grid {
				gap: 18px;
			}

			.cfs-card {
				padding: 32px 20px;
			}

			.cfs-icon-box {
				width: 65px;
				height: 65px;
			}

			.cfs-icon-box svg {
				width: 28px;
				height: 28px;
			}

			.cfs-card-title {
				font-size: 17px;
			}

			.cfs-card-text {
				font-size: 13px;
			}
		}

		/* Mobile (1 Column) */
		@media (max-width: 576px) {
			.cfs-section-wrapper {
				padding: 40px 15px;
			}

			.cfs-grid {
				grid-template-columns: 1fr;
				gap: 20px;
			}

			.cfs-header {
				margin-bottom: 35px;
			}

			.cfs-title {
				font-size: 26px;
				line-height: 1.3;
			}

			.cfs-subtitle {
				font-size: 15px;
			}

			.cfs-card {
				padding: 30px 20px;
			}

			.cfs-icon-box {
				width: 60px;
				height: 60px;
				margin-bottom: 20px;
			}

			.cfs-icon-box svg {
				width: 26px;
				height: 26px;
			}

			.cfs-card-title {
				font-size: 16px;
				margin-bottom: 12px;
			}

			.cfs-card-text {
				font-size: 13px;
				line-height: 1.5;
			}
		}

		/* Extra Small Mobile */
		@media (max-width: 375px) {
			.cfs-section-wrapper {
				padding: 35px 12px;
			}

			.cfs-title {
				font-size: 24px;
			}

			.cfs-card {
				padding: 25px 18px;
			}
		}
	</style>
	<!-- New section CSS End -->

	<!-- FAQ CSS Start -->
	<style>
		.faq-header {
			font-size: 36px;
			border-bottom: 1px dotted #ccc;
			padding: 24px;
		}

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
		}

		.accordion-body {
			background-color: #ffffff;
			/* White background for body */
			color: #181d38;
			/* Powerful */
			font-weight: 500;
			border-top: 1px solid #dee2e6;
		}

		/*** Header carousel ***/
		@media (max-width: 768px) {
			.table tr td {
				font-size: 13px;
				padding: 5px !important;
			}
		}

		/* Custom Explore Button Style */
		.btn-explore {
			background-color: #273158 !important;
			border-color: #273158 !important;
			color: #ffffff !important;
			border-radius: 50px !important;
			font-weight: 600;
			transition: all 0.3s ease;
		}

		.btn-explore:hover {
			background-color: #cf9c0a !important;
			border-color: #cf9c0a !important;
			color: #ffffff !important;
		}

		/* IPO Status Circles */
		.status-circle {
			display: inline-block;
			width: 22px;
			height: 22px;
			border-radius: 50%;
			vertical-align: middle;
			margin-top: -2px;
		}

		.upcoming-circle {
			background-color: #FAF9D0;
			border: 1px solid #dcdbb1;
		}

		.ongoing-circle {
			background-color: #90EE90;
			border: 1px solid #7cd47c;
		}

		.closed-circle {
			background-color: #E9F9FF;
			border: 1px solid #d1edf8;
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
	<!-- Navbar Ends -->
	<div class="container-xxl py-2">
		<div class="container" style="padding-left: 0px !important; padding-right: 0px !important;">

			<!--<div align="center"><a href="https://www.finowings.com/angeloneclicks.php" target="_blank"><img src="../img/angel-one-ctr-banner.gif" class="img-fluid mx-auto d-block" /></a></div>
			<br />-->

			<div class="text-center mt-2">
				<h6 class="section-title bg-white text-center text-primary px-3">IPO</h6>
				<h1 class="mb-1">Upcoming IPOs 2026: Check Latest IPO List, GMP & Reviews</h1><br />
				<div class="d-flex justify-content-center"><a class="btn btn-primary btn-sm py-2 px-3 mt-2 shadow rounded-pill mx-1" href="https://www.finowings.com/Main-Board-IPO/">Main Board IPO</a><a class="btn btn-primary btn-sm py-2 px-3 mt-2 shadow rounded-pill mx-1" href="https://www.finowings.com/SME-IPO/">SME IPO</a><a class="btn btn-primary btn-sm py-2 px-3 mt-2 shadow rounded-pill mx-1" href="https://www.finowings.com/IPO/live-ipo-gmp.php">Current GMP</a></div>
			</div>


			<br />
			<div class="row">
				<p align="center" style="font-size:14px; font-weight:bold;">
					<span class="status-circle upcoming-circle"></span>&nbsp;Upcoming&nbsp;&nbsp;&nbsp;
					<span class="status-circle ongoing-circle"></span>&nbsp;Ongoing&nbsp;&nbsp;&nbsp;
					<span class="status-circle closed-circle"></span>&nbsp;Closed
				</p>
				<div class="col-md-6">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Mainboard IPO</h4>
							<div class="table">
								<table class="table">
									<thead>
										<tr style="color: rgb(255, 255, 255); background-color: rgb(39, 49, 88) !important;">
											<th> Company</th>
											<th> Open </th>
											<th> Close </th>
											<th> Status </th>

										</tr>

									</thead>


									<tbody>


										<!--<tr style="background-color: #FAF9D0 !important;">
						<td>Arisinfra Solutions <span class='badge rounded-pill bg-danger ms-2' style='font-size:10px;vertical-align: middle;margin-top:-2px;'>Blog will update soon</span></td>
						<td>Upcoming</td>
						<td>Upcoming</td>
						<td>Upcoming</td>
						</tr>-->

										<?php
										$i = 1;
										while ($mainboardupcoming = mysqli_fetch_array($mainboard_upcomingipo)) {
											$title = $mainboardupcoming['title'];
											$title1	= strstr($title, 'IPO', true);
											if ($title1 == '') {
												$title1	= strstr($title, ':', true);
											}
											$cat = $mainboardupcoming['cat_id'];
											$cat_name = getCategoryName($cat);
											$cat_names = str_replace(" ", "-", $cat_name);
											if ($cat_names == 'SME-IPO') {
												$cat_name1 = 'IPO';
											} else {
												$cat_name1 = $cat_names;
											}
											$blog_url = $mainboardupcoming['blog_url'];
											$open = $mainboardupcoming['ipo_open'];
											$openf = $mainboardupcoming['ipo_openf'];
											$openff = strtotime($openf);
											$close = $mainboardupcoming['ipo_close'];
											$closef = $mainboardupcoming['ipo_closef'];
											$closeff = strtotime($closef);
											$ipolistingf = $mainboardupcoming['ipo_listingf'];
											$ipolistingff = strtotime($ipolistingf);
										?>

											<tr style="background-color: #FAF9D0 !important;">
												<td><a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title1; ?></a> <span class='badge rounded-pill bg-danger ms-2' style='font-size:10px;vertical-align: middle;margin-top:-2px;'>Blog will update soon</span></td>
												<td><?php echo $open; ?></td>
												<td><?php echo $close; ?></td>
												<td>Upcoming</td>
											</tr>


										<?php
										}


										?>


										<?php
										$i = 1;
										while ($mainboard = mysqli_fetch_array($mainboard_ipo)) {
											$title = $mainboard['title'];
											$title1	= strstr($title, 'IPO', true);
											if ($title1 == '') {
												$title1	= strstr($title, ':', true);
											}
											$cat = $mainboard['cat_id'];
											$cat_name = getCategoryName($cat);
											$cat_names = str_replace(" ", "-", $cat_name);
											if ($cat_names == 'SME-IPO') {
												$cat_name1 = 'IPO';
											} else {
												$cat_name1 = $cat_names;
											}
											$blog_url = $mainboard['blog_url'];
											$open = $mainboard['ipo_open'];
											$openf = $mainboard['ipo_openf'];
											$openff = strtotime($openf);
											$close = $mainboard['ipo_close'];
											$closef = $mainboard['ipo_closef'];
											$closeff = strtotime($closef);
											$ipolistingf = $mainboard['ipo_listingf'];
											$ipolistingff = strtotime($ipolistingf);

											if ($openff > $datef) {
												$cstatus = "Upcoming";
										?>
												<tr style="background-color: #FAF9D0 !important;">
													<td> <a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title1; ?></a> </td>
													<!--<td><?php //echo date("d F"); 
															?></td>-->
													<td> <?php echo $open; ?> </td>
													<td> <?php echo $close; ?> </td>
													<td> <?php echo $cstatus; ?> </td>
												</tr>
											<?php
											} elseif ($closeff >= $datef) {
												$cstatus = "Open";
											?>
												<tr style="background-color: #90EE90 !important;">
													<td> <a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title1; ?>&nbsp;&nbsp;
															<?php
															if ($closeff == $datef)
																echo "<span class='badge rounded-pill bg-danger ms-2' style='font-size:12px;vertical-align: middle;margin-top:-2px;'>closing today</span>";
															?>
														</a>
														<a href="../zerodhaclicks.php" target="_blank"><span class="badge rounded-pill" style="font-size:12px; margin-top: 2px; background-color: rgb(39, 49, 88);">Apply Now</span></a>
													</td>
													<!--<td><?php //echo date("d F"); 
															?></td>-->
													<td> <?php echo $open; ?> </td>
													<td> <?php echo $close; ?> </td>
													<td> <?php echo $cstatus; ?> </td>
												</tr>
											<?php
											} elseif ($datef < $ipolistingff) {
												$cstatus = "Closed";
											?>
												<tr style="background-color: rgb(233, 249, 255) !important;">
													<td> <a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title1; ?></a>
														<a href="https://www.bseindia.com/static/investors/application_statuschecksystem.aspx" target="_blank"><span class="badge rounded-pill" style="font-size:12px; margin-top: 2px; background-color:#00abe9;">Allotment Status</span></a>
													</td>
													<!--<td><?php //echo date("d F"); 
															?></td>-->
													<td> <?php echo $open; ?> </td>
													<td> <?php echo $close; ?> </td>
													<td> <?php echo $cstatus; ?> </td>
												</tr>
											<?php
											} else {
												$cstatus = "Closed";
											?>
												<tr style="background-color: rgb(233, 249, 255) !important;">
													<td> <a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title1; ?></a>
													</td>
													<!--<td><?php //echo date("d F"); 
															?></td>-->
													<td> <?php echo $open; ?> </td>
													<td> <?php echo $close; ?> </td>
													<td> <?php echo $cstatus; ?> </td>
												</tr>
											<?php
											}
											?>

										<?php
											$i = $i + 1;
										}
										?>

									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div align="center"><a class="btn btn-primary py-2 px-4 mt-2 btn-explore" href="https://www.finowings.com/Main-Board-IPO/">Explore All Main Board IPO</a></div>
				</div>



				<div class="col-md-6">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">SME IPO</h4>
							<div class="table">
								<table class="table">
									<thead>
										<tr style="color: rgb(255, 255, 255); background-color: rgb(39, 49, 88) !important;">
											<th> Company</th>
											<th> Open </th>
											<th> Close </th>
											<th> Status </th>

										</tr>
									</thead>
									<tbody>

										<!--<tr style="background-color: #FAF9D0 !important;">
											<td><a href="https://www.finowings.com/IPO/archit-nuwood-industries-ipo-gmp">Archit Nuwood Industries Limited</a></td>
											<td>Upcoming</td>
											<td>Upcoming</td>
											<td>Upcoming</td>
										</tr>-->

										<?php
										$i = 1;
										while ($smeupcoming = mysqli_fetch_array($sme_upcomingipo)) {
											$title = $smeupcoming['title'];
											$title1	= strstr($title, 'IPO', true);
											if ($title1 == '') {
												$title1	= strstr($title, ':', true);
											}
											$cat = $smeupcoming['cat_id'];
											$cat_name = getCategoryName($cat);
											$cat_names = str_replace(" ", "-", $cat_name);
											if ($cat_names == 'SME-IPO') {
												$cat_name1 = 'IPO';
											} else {
												$cat_name1 = $cat_names;
											}
											$blog_url = $smeupcoming['blog_url'];
											$open = $smeupcoming['ipo_open'];
											$openf = $smeupcoming['ipo_openf'];
											$openff = strtotime($openf);
											$close = $smeupcoming['ipo_close'];
											$closef = $smeupcoming['ipo_closef'];
											$closeff = strtotime($closef);
											$ipolistingf = $smeupcoming['ipo_listingf'];
											$ipolistingff = strtotime($ipolistingf);
										?>

											<tr style="background-color: #FAF9D0 !important;">
												<td><a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title1; ?></a> <span class='badge rounded-pill bg-danger ms-2' style='font-size:10px;vertical-align: middle;margin-top:-2px;'>Blog will update soon</span></td>
												<td><?php echo $open; ?></td>
												<td><?php echo $close; ?></td>
												<td>Upcoming</td>
											</tr>


										<?php
										}


										?>




										<?php
										$i = 1;
										while ($sme = mysqli_fetch_array($sme_ipo)) {
											$title = $sme['title'];
											$title1	= strstr($title, 'IPO', true);
											$cat = $sme['cat_id'];
											$cat_name = getCategoryName($cat);
											$cat_names = str_replace(" ", "-", $cat_name);
											if ($cat_names == 'SME-IPO') {
												$cat_name1 = 'IPO';
											} else {
												$cat_name1 = $cat_names;
											}
											$blog_url = $sme['blog_url'];
											$open = $sme['ipo_open'];
											$openf = $sme['ipo_openf'];
											$openff = strtotime($openf);
											$close = $sme['ipo_close'];
											$closef = $sme['ipo_closef'];
											$closeff = strtotime($closef);
											$ipolistingf = $sme['ipo_listingf'];
											$ipolistingff = strtotime($ipolistingf);


											if ($openff > $datef) {
												$cstatus = "Upcoming";
										?>
												<tr style="background-color: #FAF9D0 !important;">
													<td> <a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title1; ?></a> </td>
													<!--<td><?php //echo date("d F"); 
															?></td>-->
													<td> <?php echo $open; ?> </td>
													<td> <?php echo $close; ?> </td>
													<td> <?php echo $cstatus; ?> </td>
												</tr>
											<?php
											} elseif ($closeff >= $datef) {
												$cstatus = "Open";
											?>
												<tr style="background-color: #90EE90 !important;">
													<td> <a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title1; ?>&nbsp;&nbsp;
															<?php
															if ($closeff == $datef)
																echo "<span class='badge rounded-pill bg-danger ms-2' style='font-size:12px;vertical-align: middle;margin-top:-2px;'>closing today</span>";
															?>
														</a>
														<a href="../zerodhaclicks.php" target="_blank"><span class="badge rounded-pill" style="font-size:12px; margin-top: 2px; background-color: rgb(39, 49, 88);">Apply Now</span></a>
													</td>
													<!--<td><?php //echo date("d F"); 
															?></td>-->
													<td> <?php echo $open; ?> </td>
													<td> <?php echo $close; ?> </td>
													<td> <?php echo $cstatus; ?> </td>
												</tr>
											<?php
											} elseif ($datef < $ipolistingff) {
												$cstatus = "Closed";
											?>
												<tr style="background-color: rgb(233, 249, 255) !important;">
													<td> <a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title1; ?></a>
														<a href="https://www.bseindia.com/static/investors/application_statuschecksystem.aspx" target="_blank"><span class="badge rounded-pill" style="font-size:12px; margin-top: 2px; background-color:#00abe9;">Allotment Status</span></a>
													</td>
													<!--<td><?php //echo date("d F"); 
															?></td>-->
													<td> <?php echo $open; ?> </td>
													<td> <?php echo $close; ?> </td>
													<td> <?php echo $cstatus; ?> </td>
												</tr>
											<?php
											} else {
												$cstatus = "Closed";
											?>
												<tr style="background-color: rgb(233, 249, 255) !important;">
													<td> <a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title1; ?></a>
													</td>
													<!--<td><?php //echo date("d F"); 
															?></td>-->
													<td> <?php echo $open; ?> </td>
													<td> <?php echo $close; ?> </td>
													<td> <?php echo $cstatus; ?> </td>
												</tr>
											<?php
											}
											?>

										<?php
											$i = $i + 1;
										}
										?>


									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- <div align="center"><a class="btn btn-primary py-2 px-4 mt-2 btn-explore" href="https://www.finowings.com/SME-IPO/">Explore All SME IPO</a></div> -->
				</div>


			</div>

			<br /><br />


			<!--Google Adsense Code Starts-->
			<div align="center" style="margin: 20px 0;" class="ad-container-responsive">
				<!-- Blog-Top-Banner -->
				<ins class="adsbygoogle"
					style="display:block;max-width:728px;width:100%;height:90px;margin:0 auto;"
					data-ad-client="ca-pub-4481710634198846"
					data-ad-slot="3968038623"
					data-ad-format="auto"
					data-full-width-responsive="true"
					aria-label="Google AdSense Advertisement - Blog Top Banner"
					title="Advertisement"></ins>
			</div>
			<!--Google Adsense Code Ends-->

			<br /><br />
			<div class="text-center">

				<h6 class="section-title bg-white text-center text-primary px-3">IPO Prospectus</h6>
				<h2 class="mb-3">DRHP and RHP</h2>
			</div>

			<br />

			<div class="row">
				<div class="col-md-6">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Mainboard IPO</h4>
							<div class="table">
								<table class="table">
									<thead>
										<tr style="color: rgb(255, 255, 255); background-color: rgb(39, 49, 88) !important;">
											<th> Company</th>
											<th> DRHP PDF </th>
											<th> RHP PDF </th>
										</tr>
									</thead>
									<tbody>

										<?php
										$i = 1;
										while ($mainboard = mysqli_fetch_array($mainboard_drhp)) {
											$title = $mainboard['title'];
											$title1	= strstr($title, 'IPO', true);
											$cat = $mainboard['cat_id'];
											$cat_name = getCategoryName($cat);
											$cat_names = str_replace(" ", "-", $cat_name);
											if ($cat_names == 'SME-IPO') {
												$cat_name1 = 'IPO';
											} else {
												$cat_name1 = $cat_names;
											}
											$blog_url = $mainboard['blog_url'];
											$open = $mainboard['ipo_open'];
											$openf = $mainboard['ipo_openf'];
											$openff = strtotime($openf);
											$close = $mainboard['ipo_close'];
											$closef = $mainboard['ipo_closef'];
											$closeff = strtotime($closef);
											$drhp = $mainboard['drhp'];
											$rhp = $mainboard['rhp'];

											if ($openff > $datef) {
												$cstatus = "Upcoming";
										?>
												<tr style="background-color: #FAF9D0 !important;">
													<td> <a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title1; ?></a> </td>
													<!--<td><?php //echo date("d F"); 
															?></td>-->
													<td> <a href="<?php echo $drhp; ?>" target="_blank" style="text-decoration: none; color: #273158;">DRHP</a> </td>
													<td> <a href="<?php echo $rhp; ?>" target="_blank" style="text-decoration: none; color: #273158;">RHP</a> </td>
												</tr>
											<?php
											} elseif ($closeff >= $datef) {
												$cstatus = "Open";
											?>
												<tr style="background-color: #90EE90 !important;">
													<td> <a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title1; ?></a> </td>
													<!--<td><?php //echo date("d F"); 
															?></td>-->
													<td> <a href="<?php echo $drhp; ?>" target="_blank" style="text-decoration: none; color: #273158;">DRHP</a> </td>
													<td> <a href="<?php echo $rhp; ?>" target="_blank" style="text-decoration: none; color: #273158;">RHP</a> </td>
												</tr>
											<?php
											} else {
												$cstatus = "Closed";
											?>
												<tr style="background-color: rgb(233, 249, 255) !important;">
													<td> <a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title1; ?></a> </td>
													<!--<td><?php //echo date("d F"); 
															?></td>-->
													<td> <a href="<?php echo $drhp; ?>" target="_blank" style="text-decoration: none; color: #273158;">DRHP</a> </td>
													<td> <a href="<?php echo $rhp; ?>" target="_blank" style="text-decoration: none; color: #273158;">RHP</a> </td>
												</tr>
										<?php
											}

											$i = $i + 1;
										}
										?>

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">SME IPO</h4>
							<div class="table">
								<table class="table">
									<thead>
										<tr style="color: rgb(255, 255, 255); background-color: rgb(39, 49, 88) !important;">
											<th> Company</th>
											<th> DRHP PDF </th>
											<th> RHP PDF </th>
										</tr>
									</thead>
									<tbody>
										<?php
										$i = 1;
										while ($sme = mysqli_fetch_array($sme_drhp)) {
											$title = $sme['title'];
											$title1	= strstr($title, 'IPO', true);
											$cat = $sme['cat_id'];
											$cat_name = getCategoryName($cat);
											$cat_names = str_replace(" ", "-", $cat_name);
											if ($cat_names == 'SME-IPO') {
												$cat_name1 = 'IPO';
											} else {
												$cat_name1 = $cat_names;
											}
											$blog_url = $sme['blog_url'];
											$open = $sme['ipo_open'];
											$openf = $sme['ipo_openf'];
											$openff = strtotime($openf);
											$close = $sme['ipo_close'];
											$closef = $sme['ipo_closef'];
											$closeff = strtotime($closef);
											$drhp = $sme['drhp'];
											$rhp = $sme['rhp'];

											if ($openff > $datef) {
												$cstatus = "Upcoming";
										?>
												<tr style="background-color: #FAF9D0 !important;">
													<td> <a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title1; ?></a></td>
													<!--<td><?php //echo date("d F"); 
															?></td>-->
													<td> <a href="<?php echo $drhp; ?>" target="_blank" style="text-decoration: none; color: #273158;">DRHP</a> </td>
													<td> <a href="<?php echo $rhp; ?>" target="_blank" style="text-decoration: none; color: #273158;">RHP</a> </td>
												</tr>
											<?php
											} elseif ($closeff >= $datef) {
												$cstatus = "Open";
											?>
												<tr style="background-color: #90EE90 !important;">
													<td> <a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title1; ?></a> </td>
													<!--<td><?php //echo date("d F"); 
															?></td>-->
													<td> <a href="<?php echo $drhp; ?>" target="_blank" style="text-decoration: none; color: #273158;">DRHP</a> </td>
													<td> <a href="<?php echo $rhp; ?>" target="_blank" style="text-decoration: none; color: #273158;">RHP</a> </td>
												</tr>
											<?php
											} else {
												$cstatus = "Closed";
											?>
												<tr style="background-color: rgb(233, 249, 255) !important;">
													<td> <a href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title1; ?></a> </td>
													<!--<td><?php //echo date("d F"); 
															?></td>-->
													<td> <a href="<?php echo $drhp; ?>" target="_blank" style="text-decoration: none; color: #273158;">DRHP</a> </td>
													<td> <a href="<?php echo $rhp; ?>" target="_blank" style="text-decoration: none; color: #273158;">RHP</a> </td>
												</tr>
										<?php
											}

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


			<!-- New Section Starts -->
			<section class="cfs-section-wrapper">

				<div class="cfs-container">
					<div class="cfs-header">
						<!-- <span class="cfs-badge">IPO</span> -->
						<h2 class="cfs-title">Master Your <span>Financial Future</span></h2>
						<p class="cfs-subtitle">Join India's leading financial education platform, “Finowings - Giving Wings to Your Finance”, to simplify stock market investing and wealth management.</p>
					</div>

					<div class="cfs-grid">

						<a href="https://courses.finowings.com/stock-market-courses" target="_blank" rel="noopener noreferrer" class="cfs-card-link">
							<div class="cfs-card">
								<div class="cfs-icon-box">
									<svg viewBox="0 0 24 24" fill="currentColor">
										<path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/>
									</svg>
								</div>
								<h3 class="cfs-card-title">Stock Market Courses</h3>
								<p class="cfs-card-text">Access stock market training from "Zero to Hero," covering fundamental and technical analysis to help you trade with confidence.</p>
							</div>
						</a>

						<a href="https://www.finowings.com/mutual-fund.php" rel="noopener noreferrer" class="cfs-card-link">
							<div class="cfs-card">
								<div class="cfs-icon-box">
									<svg viewBox="0 0 24 24" fill="currentColor">
										<path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6h-6z"/>
									</svg>
								</div>
								<h3 class="cfs-card-title">Mutual Fund</h3>
								<p class="cfs-card-text">Simplify your long-term wealth creation with expert mutual fund selection guidance and advanced financial planning calculators.</p>
							</div>
						</a>

						<a href="https://www.finowings.com/financial-products/credit-cards/"  rel="noopener noreferrer" class="cfs-card-link">
							<div class="cfs-card">
								<div class="cfs-icon-box">
									<svg viewBox="0 0 24 24" fill="currentColor">
										<path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"/>
									</svg>
								</div>
								<h3 class="cfs-card-title">Credit Cards</h3>
								<p class="cfs-card-text">Optimize your personal spending with curated recommendations for the best lifetime free credit cards and premium financial products.</p>
							</div>
						</a>

						<a href="https://www.finowings.com/financial-calculators/"  rel="noopener noreferrer" class="cfs-card-link">
							<div class="cfs-card">
								<div class="cfs-icon-box">
									<svg viewBox="0 0 24 24" fill="currentColor">
										<path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.66 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/>
									</svg>
								</div>
								<h3 class="cfs-card-title">Financial Solutions</h3>
								<p class="cfs-card-text">From expert-led courses to precision planning tools, Finowings provides everything you need to navigate the Indian markets successfully.</p>
							</div>
						</a>

					</div>
				</div>
			</section>
			<!-- New Section Ends -->
			<br>
			<!-- FAQs Starts -->

			<div class="container-xxl" style="background: #e9f9ff; padding: 40px; border-radius: 15px;">
				<div class="container wow fadeInUp" data-wow-delay="0.3s">
					<br />
					<h3 class="mb-4">Frequently Asked Questions</h3>

					<div class="accordion" id="faqAccordion">

						<!-- FAQ 1 -->
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									What is an IPO?
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
								<div class="accordion-body">
									IPO stands for Initial Public Offerings. This is a method that companies use to go public which will make the shares available in secondary markets ie; NSE and BSE. <?php date_default_timezone_set('Asia/Kolkata');
																																																			echo date("Y-m-d H:i:s"); ?>
								</div>
							</div>
						</div>

						<!-- FAQ 2 -->
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Who decides the price band?
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
								<div class="accordion-body">
									Companies hire underwriters/Investment Banks who do an extensive calculation and research to set the price band.
								</div>
							</div>
						</div>

						<!-- FAQ 3 -->
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Who decides the date of an issue?
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
								<div class="accordion-body">
									Upon getting the approval from the SEBI, the company with the help of lead managers and investment banks, decides the date of issue.
								</div>
							</div>
						</div>

						<!-- FAQ 4 -->
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFour">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									What is the role of registrar of an IPO?
								</button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
								<div class="accordion-body">
									Few roles of registrar involve, processing of IPO applications, allocate shares to applicants based on SEBI guidelines, process refunds and transfer the allocated shares to the demat accounts.
								</div>
							</div>
						</div>

						<!-- FAQ 5 -->
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFive">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									What is the role of lead managers in an IPO?
								</button>
							</h2>
							<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
								<div class="accordion-body">
									Lead managers play a crucial role in guiding the company through the process of going public. They are involved in initial planning stages to post-IPO activities.
								</div>
							</div>
						</div>

					</div>


				</div>
			</div>


			<!-- FAQs Ends -->

			<div align="center"><a class="btn btn-primary py-2 px-4 mt-2 btn-explore" href="https://www.finowings.com/IPO/ipo-faqs.php">Explore More FAQs</a></div>



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
	<!-- Initialize Google Ads - Optimized for Page Speed -->
	<script>
		// Initialize AdSense ads after page loads
		(function() {
			'use strict';
			
			function initAds() {
				if (typeof adsbygoogle !== 'undefined') {
					try {
						var adElements = document.querySelectorAll('.adsbygoogle');
						adElements.forEach(function(adElement) {
							if (!adElement.hasAttribute('data-adsbygoogle-status')) {
								(adsbygoogle = window.adsbygoogle || []).push({});
							}
						});
					} catch (e) {
						console.log('AdSense initialization error:', e);
					}
				} else {
					setTimeout(initAds, 100);
				}
			}

			if (document.readyState === 'loading') {
				document.addEventListener('DOMContentLoaded', initAds);
			} else {
				initAds();
			}

			window.addEventListener('load', function() {
				setTimeout(initAds, 500);
			});
		})();
	</script>
</body>

</html>
</html>