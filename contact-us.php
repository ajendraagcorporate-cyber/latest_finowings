<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact Us - Finowings</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="Feel free to get in touch with us. Send us the query or comment and we will get back to you within one Business day." name="description">
    <link rel="canonical" href="https://www.finowings.com/contact-us.php" />

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
    <link href="css/new-css.css" rel="stylesheet">
    <script src="js/submit.js"></script>

    <style type="text/css">
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }

        #error_message {
            margin-bottom: 20px;
            background: #fe8b8e;
            padding: 0px;
            text-align: center;
            font-size: 14px;
            transition: all 0.5s ease;
        }
    </style>

</head>
<?php
$active_page = 'contact';
?>

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
    <!--<div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <!--<div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Contact</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                           
                            <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
				
            </div>
			
        </div>
    </div>-->


    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
                <h1 class="mb-4">Learn with Expert</h1>
                <!-- <h5 class="mb-4">Get In Touch</h5> -->
                <p class="mb-5">Feel free to get in touch with us. Send us the query or comment and we will get back to you within one Business day.<br />
                    We are here to help you. Please contact us on...</p>
            </div>

            <style>
                @media (max-width: 768px) {
                    #fw-custom-contact .info-content {
                        display: none !important;
                    }

                    #fw-custom-contact .col-lg-8 {
                        display: none !important;
                    }

                    .mobile-contact-btn {
                        display: block !important;
                        text-align: center;
                        background: #273158;
                        color: #fff;
                        padding: 12px;
                        margin-top: 15px;
                        border-radius: 5px;
                        text-decoration: none;
                        font-weight: 700;
                    }

                    .mobile-contact-btn:hover {
                        background: #cf9c0a;
                        color: #fff;
                    }
                }

                @media (min-width: 769px) {
                    .mobile-contact-btn {
                        display: none;
                    }
                }
            </style>
            <section id="fw-custom-contact" class="py-2">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="info-card">
                            <div class="info-content">
                                <div class="info-item">
                                    <div class="icon-box">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="info-text">
                                        <h6>Call Us 24/7</h6>
                                        <a href="tel:9708094321">+91-970-8094-321</a>
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="icon-box">
                                        <i class="fa fa-envelope-open"></i>
                                    </div>
                                    <div class="info-text">
                                        <h6>Make A Quote</h6>
                                        <a href="mailto:info@finowings.com">info@finowings.com</a>
                                    </div>
                                </div>

                                <div class="info-item">
                                    <div class="icon-box">
                                        <i class="fa fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info-text">
                                        <h6>Location</h6>
                                        <p>C-1, Bank of Baroda, Sector-M, Mama Chauraha, Kursi Road, Lucknow</p>
                                    </div>
                                </div>
                            </div>
                            <div class="map-container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.27310086481!2d80.9547765!3d26.894826499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfdaf218e1115%3A0x4a5fcfe97266b5ac!2sFinowings%20Training%20Academy%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1767935983637!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>

                            <a href="contact-us.php" class="mobile-contact-btn">
                                Contact Us <i class="fa fa-arrow-right module-contact-icon"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="form-header">
                            <h2>Send Our Message</h2>
                        </div>
                        <form id="myform" method="post">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="name">Your Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="email">Your Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="phone">Your Phone *</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="+91 **********">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="enquiry_type">Select Query *</label>
                                    <select class="form-control" id="enquiry_type">
                                        <option value="" disabled selected>Select Topic</option>
                                        <option>Technical Analysis Classes</option>
                                        <option>Mentor Support</option>
                                        <option>Portfolio Review</option>
                                        <option>Retirement Planning</option>
                                        <option>Mutual Fund</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="city">Your City</label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="Your City">
                                </div>
                                <div class="col-12 form-group">
                                    <label for="message">Message *</label>
                                    <textarea class="form-control" id="message" name="message" placeholder="Write a message here ..."></textarea>
                                </div>
                                <div class="col-12 mt-2">
                                    <button type="button" id="submitFormData" onclick="SubmitFormData();" class="btn btn-submit">
                                        Send Message <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                                <div class="col-12 mt-3">
                                    <div id="error_message"></div>
                                    <div id="results" class="text-center" style="color: #273158; font-size:16px; font-weight: 500;"></div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </section>
        </div>
    </div>
    <!-- Contact End -->


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