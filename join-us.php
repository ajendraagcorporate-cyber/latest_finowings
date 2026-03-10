<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Join Us - Finowings</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="Join Finowings Academy: Join Finowings Academy to master financial education. Take charge of your finances and achieve financial success." name="description">
	<link rel="canonical" href="https://www.finowings.com/join-us.php" />

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
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	
	<!-- Join Us Custom Styles -->
	<style>
		/* Join Us Page Custom Styles */
		.join-us-hero {
			background: linear-gradient(135deg, #273158 0%, #426ab3 100%);
			padding: 80px 0;
			position: relative;
			overflow: hidden;
		}
		
		.join-us-hero::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>');
			opacity: 0.3;
		}
		
		.join-us-hero h1 {
			color: #ffffff;
			font-size: 3rem;
			font-weight: 700;
			margin-bottom: 30px;
			position: relative;
			z-index: 1;
		}
		
		.join-us-hero .btn-hero {
			background: #cf9c0a;
			color: #ffffff;
			padding: 15px 40px;
			font-size: 1.1rem;
			font-weight: 600;
			border-radius: 50px;
			transition: all 0.3s ease;
			position: relative;
			z-index: 1;
		}
		
		.join-us-hero .btn-hero:hover {
			background: #ffffff;
			color: #273158;
			transform: translateY(-3px);
			box-shadow: 0 10px 25px rgba(0,0,0,0.2);
		}
		
		/* About Finowings Section */
		.about-fw-section {
			padding: 80px 0;
		}
		
		.about-fw-card {
			background: #ffffff;
			border-radius: 20px;
			padding: 40px;
			box-shadow: 0 10px 40px rgba(0,0,0,0.1);
			transition: all 0.3s ease;
			height: 100%;
		}
		
		.about-fw-card:hover {
			transform: translateY(-10px);
			box-shadow: 0 20px 60px rgba(0,0,0,0.15);
		}
		
		.about-fw-card img {
			border-radius: 15px;
			box-shadow: 0 10px 30px rgba(0,0,0,0.15);
		}
		
		.about-fw-card h3 {
			color: #273158;
			font-weight: 700;
			margin-bottom: 20px;
		}
		
		.about-fw-card p {
			color: #666;
			line-height: 1.8;
			font-size: 1.05rem;
		}
		
		/* Our Culture Section */
		.culture-section {
			padding: 80px 0;
			background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%);
			position: relative;
		}
		
		.culture-section::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			height: 100px;
			background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100"><path fill="%23f8f9fa" d="M0,50 Q360,0 720,50 T1440,50 L1440,100 L0,100 Z"/></svg>') no-repeat;
			background-size: cover;
		}
		
		.section-title-custom {
			text-align: center;
			margin-bottom: 50px;
			position: relative;
		}
		
		.section-title-custom h2 {
			color: #273158;
			font-size: 2.5rem;
			font-weight: 700;
			margin-bottom: 15px;
		}
		
		.section-title-custom .title-underline {
			width: 100px;
			height: 4px;
			background: linear-gradient(90deg, #273158 0%, #cf9c0a 100%);
			margin: 0 auto;
			border-radius: 2px;
		}
		
		.culture-content {
			background: #ffffff;
			border-radius: 20px;
			padding: 40px;
			box-shadow: 0 10px 40px rgba(0,0,0,0.1);
			margin-bottom: 40px;
		}
		
		.culture-content p {
			color: #666;
			line-height: 1.9;
			font-size: 1.05rem;
			text-align: justify;
		}
		
		.culture-gallery {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
			gap: 25px;
			margin-top: 40px;
		}
		
		.culture-image-card {
			position: relative;
			border-radius: 20px;
			overflow: hidden;
			box-shadow: 0 15px 40px rgba(0,0,0,0.2);
			transition: all 0.4s ease;
			height: 280px;
		}
		
		.culture-image-card::before {
			content: '';
			position: absolute;
			top: -50%;
			left: -50%;
			width: 200%;
			height: 200%;
			background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%);
			opacity: 0;
			transition: opacity 0.4s ease;
			z-index: 1;
		}
		
		.culture-image-card:hover::before {
			opacity: 1;
		}
		
		.culture-image-card img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			transform: scale(1);
			transition: transform 0.4s ease;
		}
		
		.culture-image-card:hover img {
			transform: scale(1.1);
		}
		
		.culture-image-card::after {
			content: '';
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
			height: 50%;
			background: linear-gradient(to top, rgba(39,49,88,0.8) 0%, transparent 100%);
			opacity: 0;
			transition: opacity 0.4s ease;
		}
		
		.culture-image-card:hover::after {
			opacity: 1;
		}
		
		/* Curved bottom for culture section */
		.culture-section::after {
			content: '';
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
			height: 100px;
			background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100"><path fill="%23ffffff" d="M0,50 Q360,100 720,50 T1440,50 L1440,0 L0,0 Z"/></svg>') no-repeat;
			background-size: cover;
		}
		
		/* Current Openings Section */
		.openings-section {
			padding: 100px 0;
			background: #f8f9fa;
		}
		
		.opening-card {
			background: #ffffff;
			border-radius: 20px;
			padding: 35px;
			box-shadow: 0 10px 30px rgba(0,0,0,0.1);
			transition: all 0.3s ease;
			height: 100%;
			display: flex;
			flex-direction: column;
			position: relative;
			overflow: hidden;
		}
		
		.opening-card::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			height: 5px;
			background: linear-gradient(90deg, #273158 0%, #cf9c0a 100%);
			transform: scaleX(0);
			transition: transform 0.3s ease;
		}
		
		.opening-card:hover::before {
			transform: scaleX(1);
		}
		
		.opening-card:hover {
			transform: translateY(-10px);
			box-shadow: 0 20px 50px rgba(0,0,0,0.15);
		}
		
		.opening-card h4 {
			color: #273158;
			font-weight: 700;
			margin-bottom: 20px;
			font-size: 1.5rem;
		}
		
		.opening-card h4 a {
			color: #273158;
			text-decoration: none;
			transition: color 0.3s ease;
		}
		
		.opening-card h4 a:hover {
			color: #cf9c0a;
		}
		
		.opening-badge {
			display: inline-block;
			background: linear-gradient(135deg, #273158 0%, #426ab3 100%);
			color: #ffffff;
			padding: 8px 20px;
			border-radius: 25px;
			font-size: 0.95rem;
			font-weight: 600;
			margin-bottom: 15px;
		}
		
		.opening-type {
			color: #666;
			margin-bottom: 25px;
			font-size: 1rem;
		}
		
		.opening-card .btn-view {
			background: linear-gradient(135deg, #273158 0%, #426ab3 100%);
			color: #ffffff;
			border: none;
			padding: 12px 30px;
			border-radius: 50px;
			font-weight: 600;
			transition: all 0.3s ease;
			margin-top: auto;
		}
		
		.opening-card .btn-view:hover {
			background: #cf9c0a;
			transform: translateX(5px);
			box-shadow: 0 5px 15px rgba(207,156,10,0.4);
		}
		
		/* Benefits & Perks Section */
		.benefits-section {
			padding: 100px 0;
			background: #ffffff;
		}
		
		.benefit-card {
			background: #ffffff;
			border-radius: 20px;
			padding: 40px 30px;
			box-shadow: 0 10px 30px rgba(0,0,0,0.08);
			transition: all 0.3s ease;
			height: 100%;
			text-align: center;
			position: relative;
			border: 2px solid transparent;
		}
		
		.benefit-card:hover {
			transform: translateY(-10px);
			box-shadow: 0 20px 50px rgba(0,0,0,0.15);
			border-color: #cf9c0a;
		}
		
		.benefit-icon {
			width: 80px;
			height: 80px;
			margin: 0 auto 25px;
			background: linear-gradient(135deg, #273158 0%, #426ab3 100%);
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 2rem;
			color: #ffffff;
			transition: all 0.3s ease;
		}
		
		.benefit-card:hover .benefit-icon {
			background: linear-gradient(135deg, #cf9c0a 0%, #e6b84d 100%);
			transform: scale(1.1) rotate(5deg);
		}
		
		.benefit-card h5 {
			color: #273158;
			font-weight: 700;
			margin-bottom: 20px;
			font-size: 1.3rem;
		}
		
		.benefit-card p {
			color: #666;
			line-height: 1.8;
			font-size: 1rem;
		}
		
		/* Responsive Design */
		@media (max-width: 992px) {
			.join-us-hero h1 {
				font-size: 2.2rem;
			}
			
			.section-title-custom h2 {
				font-size: 2rem;
			}
			
			.culture-gallery {
				grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
				gap: 20px;
			}
			
			.culture-image-card {
				height: 220px;
			}
		}
		
		@media (max-width: 768px) {
			.join-us-hero {
				padding: 60px 0;
			}
			
			.join-us-hero h1 {
				font-size: 1.8rem;
			}
			
			.about-fw-card,
			.culture-content,
			.opening-card,
			.benefit-card {
				padding: 25px;
			}
			
			.culture-gallery {
				grid-template-columns: 1fr;
			}
			
			.culture-image-card {
				height: 250px;
			}
			
			.section-title-custom h2 {
				font-size: 1.8rem;
			}
		}
		
		@media (max-width: 576px) {
			.join-us-hero h1 {
				font-size: 1.5rem;
			}
			
			.about-fw-section,
			.culture-section,
			.openings-section,
			.benefits-section {
				padding: 60px 0;
			}
		}
		
		/* Smooth Scroll */
		html {
			scroll-behavior: smooth;
		}
		
		/* Scroll offset for anchor links */
		#posts {
			scroll-margin-top: 100px;
		}
	</style>
	
	<!--Bootstrap code-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!--Bootstrap code-->

	

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
    <?php include("top-navigation.php"); ?>
    <!-- Navbar End -->


    <!-- Header Start -->
     <!--<div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Career with Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            
                            <li class="breadcrumb-item text-white active" aria-current="page">Join Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


   
    <!-- Hero Section Start -->
    <div class="join-us-hero">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <!-- <h1 class="wow fadeInUp" data-wow-delay="0.1s">Join our movement to revolutionize the future of work</h1> -->
                    <h1 class="wow fadeInUp" data-wow-delay="0.1s">Build the future of work with us</h1>
                    <a href="#posts" class="btn btn-hero wow fadeInUp" data-wow-delay="0.3s">We're Hiring</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- About Finowings Section Start -->
    <div class="about-fw-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0 wow fadeInLeft" data-wow-delay="0.1s">
                    <img src="img/hiring.jpg" class="img-fluid" alt="Finowings Hiring">
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="about-fw-card">
                        <h3>About FinoWings</h3>
                        <p>Finowings Training Academy Private Limited is incorporated to provide a platform that can improve our youth and community's financial capability and stability.</p>
                        <p align="justify">
                        Finowings is a leading platform to help you understand financial concepts that will help you manage your money better. Finowings offer the best managerial skills certifications in Finance with the latest industry tactics that help the learners get new opportunities. Finowings provides financial education with a broad selection of investment strategies, allowing the learners to capitalize on opportunities and withstand ever-changing markets.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Finowings Section End -->




    <!-- Our Culture Section Start -->
    <div class="culture-section">
        <div class="container" style="position: relative; z-index: 1;">
            <div class="section-title-custom wow fadeInUp" data-wow-delay="0.1s">
                <h2>Our Culture</h2>
                <div class="title-underline"></div>
            </div>
            
            <div class="culture-content wow fadeInUp" data-wow-delay="0.2s">
                <p>There is no magic formula for a good company culture. The only key is to treat your employees how you would like to be treated. Working on the same mind set, we work as a team where we develop solutions that improves the lives of millions around the world, at present and for future generations. And we live by our ethics every day. We work with each other, for each other. We provide comfort and productivity in spaces that are inviting, familiar, environmentally sustainable, and physically accessible for all. We believe that every employee is a hand-on contributor that helps the organization to achieve its goals. We are helping to create a better world for our customer and our people.</p>
            </div>
            
            <div class="culture-gallery">
                <div class="culture-image-card wow fadeInUp" data-wow-delay="0.1s">
                    <img src="admin/media/team/Mentors.jpg" alt="Mentors" class="img-fluid">
                </div>
                <div class="culture-image-card wow fadeInUp" data-wow-delay="0.2s">
                    <img src="admin/media/team/Manager.jpg" alt="Manager" class="img-fluid">
                </div>
                <div class="culture-image-card wow fadeInUp" data-wow-delay="0.3s">
                    <img src="admin/media/team/office.jpg" alt="Office" class="img-fluid">
                </div>
                <div class="culture-image-card wow fadeInUp" data-wow-delay="0.4s">
                    <img src="admin/media/team/Digital.jpg" alt="Digital" class="img-fluid">
                </div>
                <div class="culture-image-card wow fadeInUp" data-wow-delay="0.5s">
                    <img src="admin/media/team/Meeting.jpg" alt="Meeting" class="img-fluid">
                </div>
                <div class="culture-image-card wow fadeInUp" data-wow-delay="0.6s">
                    <img src="admin/media/team/office1.jpg" alt="Office" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- Our Culture Section End -->


    <!-- Current Openings Section Start -->
    <div id="posts" class="openings-section">
        <div class="container">
            <div class="section-title-custom wow fadeInUp" data-wow-delay="0.1s">
                <h2>Current Openings</h2>
                <div class="title-underline"></div>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="opening-card">
                        <h4><a href="content-writer.php">Content Writer</a></h4>
                        <span class="opening-badge">#3 Positions</span>
                        <p class="opening-type">Full Time | Part Time | Freelance</p>
                        <a href="content-writer.php" class="btn btn-view">View Details <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="opening-card">
                        <h4><a href="video-editor.php">Video Editor</a></h4>
                        <span class="opening-badge">#1 Position</span>
                        <p class="opening-type">Full Time</p>
                        <a href="video-editor.php" class="btn btn-view">View Details <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="opening-card">
                        <h4><a href="php-developer.php">PHP Developer</a></h4>
                        <span class="opening-badge">#1 Position</span>
                        <p class="opening-type">Full Time (On-Site)</p>
                        <a href="php-developer.php" class="btn btn-view">View Details <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Current Openings Section End -->




    <!-- Benefits & Perks Section Start -->
    <div class="benefits-section">
        <div class="container">
            <div class="section-title-custom wow fadeInUp" data-wow-delay="0.1s">
                <h2>Benefits & Perks</h2>
                <div class="title-underline"></div>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <h5>Base Pay and Bonuses</h5>
                        <p>We offer competitive base pay to ensure that our people are compensated fairly for the work that they do. Our bonus programs reward our people for their achievements and their contributions to our business.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h5>Paid Sick Leaves</h5>
                        <p>Taking care of your health is important. When employees will be weak but still have to work, it will directly affect their productivity and efficiency. So, we have created a policy where they can avail paid sick leaves. It is a great way to show that you care for your employees' well-being.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h5>Flexible Work Hours</h5>
                        <p>Flexible work arrangements help employees achieve work/life balance while also meeting our company's business needs.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5>Workplace Security</h5>
                        <p>A company is providing a workplace security for its employees. It helps in ensuring the employees are protected from all kinds of risk.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-gamepad"></i>
                        </div>
                        <h5>Office Perks</h5>
                        <p>Our organizations now try to merge both work and life together. We provide the facilities to the office fun and joyous. Some of these perks involve having board games at work, office parties and office trip.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h5>Employee Training</h5>
                        <p>Another great way to retain talented employees is by letting them grow. We provide the resources to the employees required to enhance their skills.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Benefits & Perks Section End -->        

    <!-- Footer Start -->
 <?php include("footer.php"); ?>
    <!-- Footer End -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>