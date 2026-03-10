<?php
include("../DLL/config.php");
include("../DLL/functions.php");
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
    <title>About Us - Finowings</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="Finowings Training Academy is a Private Limited company incorporated with an aim to provide financial education to make people take control of their financials." name="description">
    <link rel="canonical" href="https://www.finowings.com/about-finowings/" />

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
    <link href="../css/new-css.css" rel="stylesheet">

    <!--Bootstrap code-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!--Bootstrap code-->

    <!-- Testimonials CSS Removed -->

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
    <?php include("../top-navigation.php"); ?>
    <!-- Navbar End -->
    <!-- Navbar End -->


    <!-- About Mukul Agrawal Start -->
    <div class="container-xxl py-5" id="fw-custom-section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100 d-flex align-items-center justify-content-center">
                        <img class="img-fluid rounded shadow-sm w-100" src="../admin/media/ezgif.com-gif-maker (1).webp" alt="Finowings About" style="object-fit: cover; max-height: 400px; padding: 30px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About</h6>
                    <h1 class="mb-4">Finowings</h1>
                    <p class="mb-4" align="justify"><?php echo $fi_short; ?> </p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right golden-color me-2"></i>Finowings Academy</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right golden-color me-2"></i>Highly Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right golden-color me-2"></i>Learning & Certification</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right golden-color me-2"></i>Live Doubt Session</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right golden-color me-2"></i>Quiz & Competition</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right golden-color me-2"></i>Financial Knowledge under One Roof</p>
                        </div>
                    </div>

                    <a class="fw-btn" style="width: auto; display: inline-block; padding: 10px 30px;" data-toggle="modal" data-target="#myModal">Read More</a>

                    <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background:#00acea; border:1px solid #00acea;">
Read More</button>-->
                </div>
            </div>
            <br />
            <div class="fw-card">
                <div class="fw-content">
                    <p align="justify" class="mb-0">This Website is intended solely for educational and learning purposes. We have no intention of involving clients in any trading activities its important to clarify that we are not registered with SEBI (Securities and Exchange Board of India). We strongly advise you to consult with a qualified financial advisor before making any financial decisions. Seeking guidance from a financial professional can help you make well-informed choices that align with your specific financial circumstances and goals.<br /> THIS WEBSITE IS FOR EDUCATIONAL PURPOSE ONLY AND WE DO NO INTENT TO INDUCE CLIENT IN ANY TRADING ACTIVITY.</p>
                </div>
            </div>

        </div>
    </div>



    <!--Pop Up box start-->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">About Finowings</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <?php echo $fi_desc; ?>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!--Pop Up box end-->

    <!-- About Mukul Agrawal End -->



    <!-- About Finowings Start 
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About</h6>
                    <h1 class="mb-4">Mukul Agrawal</h1>
                    <p class="mb-4" align="justify"><?php //echo $fi_short; 
                                                    ?></p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right golden-color me-2"></i>Investor</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right golden-color me-2"></i>Entrepreneur</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right golden-color me-2"></i>Trader</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right golden-color me-2"></i>Angel Investor</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right golden-color me-2"></i>Stock Market Trainer</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right golden-color me-2"></i>Speaker</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" data-toggle="modal" data-target="#myModal2">Read More</a>
                </div>
				<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="admin/media/<?php //echo $pic; 
                                                                                                ?>" alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>
			
        </div>
    </div>
	
<!-- Testimonials Starts -->
    <!-- Section 12: Testimonials Start -->
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">TESTIMONIALS</h6>
            <h2 class="mb-5">Real Stories. Real Results. From Finowings Learners</h2>
        </div>
    </div>
    <section class="fw-unique-section" id="fw-testimonials">
        <div class="fw-unique-container">
            <div class="fw-unique-slider-wrapper">
                <button class="fw-unique-nav-btn fw-unique-prev" onclick="moveUniqueSlide(-1)"><i class="fas fa-chevron-left"></i></button>
                <button class="fw-unique-nav-btn fw-unique-next" onclick="moveUniqueSlide(1)"><i class="fas fa-chevron-right"></i></button>
                <div class="fw-unique-track" id="fwUniqueTrack">
                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"Courses are beginner-friendly, instructors explain concepts clearly, and IPO analysis from Finowings improved my decision-making skills."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Anita+Verma&background=random&color=fff&background=273158" class="fw-unique-avatar" alt="Anita">
                            <div class="fw-unique-user-info">
                                <h5>Anita Verma</h5>
                            </div>
                        </div>
                    </div>

                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"Trader’s Secret Club delivers valuable market insights, updates, and disciplined strategies that helped me control emotions while trading."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Suresh+Pandey&background=random&color=fff&background=cf9c0a" class="fw-unique-avatar" alt="Suresh">
                            <div class="fw-unique-user-info">
                                <h5>Suresh Pandey</h5>
                            </div>
                        </div>
                    </div>

                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"Finowings Academy content feels trustworthy, practical, and well-structured, making complex finance topics easy for Indian beginners."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Priya+Malhotra&background=random&color=fff&background=273158" class="fw-unique-avatar" alt="Priya">
                            <div class="fw-unique-user-info">
                                <h5>Priya Malhotra</h5>
                            </div>
                        </div>
                    </div>
                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"Finowings simplified stock markets for me. Clear videos, practical examples, and step-by-step guidance made complex concepts easy."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Rahul+Sharma&background=random&color=fff&background=cf9c0a" class="fw-unique-avatar" alt="Rahul">
                            <div class="fw-unique-user-info">
                                <h5>Rahul Sharma</h5>
                            </div>
                        </div>
                    </div>
                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"Learning through Mukul Agrawal app saved time, boosted confidence, and provided clear guidance for long-term wealth creation."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Amit+Kulkarni&background=random&color=fff&background=273158" class="fw-unique-avatar" alt="Amit">
                            <div class="fw-unique-user-info">
                                <h5>Amit Kulkarni</h5>
                            </div>
                        </div>
                    </div>
                    <div class="fw-unique-card">
                        <div class="fw-unique-header">
                            <i class="fas fa-quote-left fw-unique-quote-icon"></i>
                            <div class="fw-unique-stars">★★★★★</div>
                        </div>
                        <p class="fw-unique-text">"Finowings helped me understand IPOs, mutual funds, and trading basics without hype, just honest education and support."</p>
                        <div class="fw-unique-footer">
                            <img src="https://ui-avatars.com/api/?name=Neha+Choudhary&background=random&color=fff&background=cf9c0a" class="fw-unique-avatar" alt="Neha">
                            <div class="fw-unique-user-info">
                                <h5>Neha Choudhary</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Ends -->



    <!--Pop Up box start-->
    <div class="modal fade" id="myModal2">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">About Mukul Agrawal</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <?php echo $desc; ?>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!--Pop Up box end-->

    <!-- About Finowings End -->





    <!-- Footer Start -->
    <?php include("../footer.php"); ?>
    <!-- Footer End -->





    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>

    <!-- Testimonials JS Start -->
    <script>
        let fwUniqueIndex = 0;
        const fwUniqueTrack = document.getElementById('fwUniqueTrack');
        const fwUniqueCards = document.querySelectorAll('.fw-unique-card');
        const fwTotalCards = fwUniqueCards.length;

        function updateUniqueCarousel() {
            const screenWidth = window.innerWidth;
            let itemsPerView = (screenWidth >= 992) ? 3 : 1;
            const maxIndex = Math.ceil(fwTotalCards / itemsPerView) - 1;
            if (fwUniqueIndex < 0) {
                fwUniqueIndex = maxIndex;
            } else if (fwUniqueIndex > maxIndex) {
                fwUniqueIndex = 0;
            }
            const gapPercentage = (20 / fwUniqueTrack.offsetWidth) * 100;
            const movePercent = fwUniqueIndex * (100 + gapPercentage);
            fwUniqueTrack.style.transform = `translateX(-${movePercent}%)`;
        }

        function moveUniqueSlide(direction) {
            fwUniqueIndex += direction;
            updateUniqueCarousel();
        }

        window.addEventListener('resize', () => {
            fwUniqueIndex = 0;
            updateUniqueCarousel();
        });

        updateUniqueCarousel();
    </script>
    <!-- Testimonials JS End -->


</body>

</html>