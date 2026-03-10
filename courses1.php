<?php
include("DLL/config.php");
include("DLL/functions.php");
$sliderfi = getSliderFI();
$client = getClients();
$workshop = getWorkshops();
$webinar = getWebinars();
$student = getStudents();
$upwebinar = getupcomingWebinar();
$featured = getFeaturedin();
$freestudyintro = getfreestudyIntro();
$freestudytopic = getfreestudyTopic();
$testimonials1 = getTestimonials1();
$testimonials2 = getTestimonials2();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Courses | Finowings Training Academy Private Limited</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
	
	<!--Bootstrap code-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!--Bootstrap code-->

    <!-- Bootstrap CSS -->
 
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
	
	<script src="js/submit.js"></script>
	
<style type="text/css">
/* Make the image fully responsive */
.owl-carousel img{width: 100%; height: 100%;}

#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
}  

.carousel-indicators li {
  background-color: #00000 !important;
}

.carousel-indicators .active {
  background-color: #00000 !important;
}
</style>
	
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
     <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top px-2">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="img/finowings-logo.png" />
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="about-finowings/" class="nav-item nav-link">About Us</a>
				 <a href="finowings-academy/" class="nav-item nav-link">Finowings Academy</a>
                <a href="courses.php" class="nav-item nav-link active">Courses</a>
                <!--<div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>-->
				<a href="blogs.php" class="nav-item nav-link">Blog</a>
                <a href="contact-us.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="demat-accounts.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Open Demat Account<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Navbar Ends -->

	
	  <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5">Popular Courses</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="admin/media/courseicons/mukul-agrwal-course-1.webp" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="course-details.php?i=1" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Course Details </a>
                                <a href="https://dhqpe.courses.store/222889?quick-pay=true" target="_blank"  class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Enroll Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-0">Fundamental Analysis <br />(Recorded)</h5>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(1918)</small>
                            </div>
                            <h6 class="mb-4">&#x20B9; 5900.00 <del>&#x20B9; 10,000</del> <span style="color:red; font-size:14px;">41% OFF</span></h6>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>22 Chapters</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>3000+ Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="admin/media/courseicons/mukul-agrwal-course-2.webp" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="course-details.php?i=2" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Course Details</a>
                                <a href="https://dhqpe.courses.store/222886?quick-pay=true" target="_blank" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Enroll Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-0">Technical Analysis <br />(Live)</h5>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(9365)</small>
                            </div>
                            <h6 class="mb-4">&#x20B9; 17,700.00 <del>&#x20B9; 25,000</del> <span style="color:red; font-size:14px;">29% OFF</span></h6>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>15 Chapters</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>15 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>20000+ Students</small>
                        </div>
                    </div>
                </div>
				
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="admin/media/courseicons/mukul-agrwal-course-3.webp" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="course-details.php?i=3" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Course Details</a>
                                <a href="https://dhqpe.courses.store/224090?quick-pay=true" target="_blank" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Enroll Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-0">Technical Analysis <br />(Live + Recorded)</h5>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(2532)</small>
                            </div>
                            <h6 class="mb-4">&#x20B9; 23,600.00 <del>&#x20B9; 30,000</del> <span style="color:red; font-size:14px;">21% OFF</span></h6>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>15 Chapters</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>15 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>7000+ Students</small>
                        </div>
                    </div>
                </div>
				<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="admin/media/courseicons/mukul-agrwal-course-4.webp" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="course-details.php?i=4" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Course Details</a>
                                <a href="https://dhqpe.courses.store/222890?quick-pay=true" target="_blank" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Enroll Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-0">Technical Analysis (Live + Recorded) <br /> + <br />Fundamental Analysis (Recorded)</h5>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(9365)</small>
                            </div>
                            <h6 class="mb-4">&#x20B9; 27,500.00 <del>&#x20B9; 35,000</del> <span style="color:red; font-size:14px;">21% OFF</span></h6>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>15 Chapters</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>15 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>20000+ Students</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->
	
	
	
	<!-- Testimonial Start -->
     <!--<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
           
		  <div class="owl-carousel testimonial-carousel position-relative">
          
		  
		            <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-1.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="https://dhqpe.courses.store/222889" target="_blank" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Course Details </a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Enroll Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">Fundamental Analysis (Recorded)</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(1918)</small>
                            </div>
                            <h5 class="mb-4">&#x20B9; 5900.00 <del>&#x20B9; 10,000</del> <span style="color:red; font-size:14px;">41% OFF</span></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>22 Chapters</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>3000+ Students</small>
                        </div>
                    </div>
                
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-2.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="https://dhqpe.courses.store/222886" target="_blank" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Course Details</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Enroll Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">Technical Analysis <br />(Live)</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(9365)</small>
                            </div>
                            <h5 class="mb-4">&#x20B9; 17,700.00 <del>&#x20B9; 25,000</del> <span style="color:red; font-size:14px;">29% OFF</span></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>15 Chapters</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>15 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>20000+ Students</small>
                        </div>
                    </div>
                
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-3.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="https://dhqpe.courses.store/224090" target="_blank" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Course Details</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Enroll Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">Technical Analysis <br />(Live + Recorded)</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(2532)</small>
                            </div>
                            <h5 class="mb-4">&#x20B9; 23,600.00 <del>&#x20B9; 30,000</del> <span style="color:red; font-size:14px;">21% OFF</span></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>15 Chapters</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>15 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>7000+ Students</small>
                        </div>
                    </div>
             
			 
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-2.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="https://dhqpe.courses.store/222886" target="_blank" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Course Details</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Enroll Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">Technical Analysis <br /> (Live + Recorded) <br /> + <br />Fundamental Analysis <br /> (Recorded)</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(9365)</small>
                            </div>
                            <h5 class="mb-4">&#x20B9; 27,500.00 <del>&#x20B9; 35,000</del> <span style="color:red; font-size:14px;">21% OFF</span></h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>15 Chapters</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>15 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>20000+ Students</small>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Testimonial End -->

	

        

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

