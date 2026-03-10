<?php
include("../DLL/config.php");
include("../DLL/functions.php");
//$id = $_REQUEST['i'];
$id = 7;
$categories = getallCategory();
$blogs = getcategoryBlog($id);
$category = getCategoryName($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Upcoming IPO's 2023 | Reviews, Date, valuation & GMP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Best IPO Blogs" name="keywords">
    <meta content="Stay connected to get all the latest & upcoming IPO's for 2023. get all the information like IPO opening date , valuation & GMP. Tune in to make wise & potential investment decision of you bright future with finowings." name="description">

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

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
	
	 <!--Featured-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
	
	<style type="text/css">
/* Make the image fully responsive */
.carousel-inner img{width: 100%; height: 100%;}
.carousel-indicators li {background-color: #085699 !important; }
.carousel-indicators .active { background-color: #000000 !important;}
  
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
    <?php include("../top-navigation.php"); ?>
    <!-- Navbar Ends -->

 
<!--Trading Blogs Start-->
<div class="container-xxl py-5">
        <div class="container">
			<div class="text-center">
				<h6 class="section-title bg-white text-center text-primary px-3">Blogs</h6>
                <h1 class="mb-5"><?php echo $category; ?></h1>
			</div>	
			   
<div class="row py-4">

<?php
	while ($row = mysqli_fetch_array($blogs)) 
	{
	$id = 	$row['id'];
	$title = $row['title'];
	$count = strlen("$title");
	$short_title = substr($title, 0, 30);
	$short_desc = $row['short_desc'];
	$short_desc1 = substr($short_desc, 0, 120);
	$desc = $row['content'];
	$pic = $row['file'];
	$updated_date = $row['updated_date'];
	$cat = $row['cat_id'];
	$cat_name = getCategoryName($cat);
	$cat_name1 = str_replace(" ","-",$cat_name);
	$updated_date = $row['updated_date'];
	$datetime = explode(" ", $updated_date);
	$date = $datetime['0'];
	$date1 = explode("-", $date);
	$year = $date1['0'];
	$month = $date1['1'];
	$day = $date1['2'];	
	$blog_url = $row['blog_url'];
?>		
<div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
<div class="trading-blogs-box">
<img src="../admin/media/<?php echo $pic; ?>" class="img-fluid mx-auto d-block">
<!--<img src="img/dummy.jpg" class="img-fluid mx-auto d-block">-->
<p style="font-size:14px;"><a href="blog-topics.php?i=<?php echo $cat; ?>" style="text-decoration: none; color: #406ab2;"><?php echo $cat_name; ?></a> | <?php echo $day; ?>-<?php echo $month; ?>- <?php echo $year; ?></p>
<?php
if ($count < 31)
{
?>
<h3 style="font-size:22px; font-weight:bold;"><?php echo $short_title; ?></h3>
<?php
}
else
{
?>
<h3 style="font-size:22px; font-weight:bold;"><?php echo $short_title; ?>...</h3>
<?php
}
?>
<p> <?php echo $short_desc1; ?>...</p>

<!--<a href="blog-topic.php?i=<?php //echo $id; ?>" class="btn btn-info btn-block" style="font-size:16px;">Continue Reading</a>-->
 <a class="btn btn-primary py-3 px-5 mt-2" href="../<?php echo $cat_name1; ?>/<?php echo $blog_url; ?>">Continue Reading</a>
</div>
</div>
<?php
 }
?>

</div>
</div>
</div>
<!--Trading Blogs end-->

	
	   <!-- Browse Category Start -->
    <div class="container-xxl py-5">
        <div class="container">
		    <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                <h2 class="mb-5">Browse Category</h2>
            </div>
            
			<div class="row g-4">
			
                <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../Finance/"><img src="../admin/media/Finance%20(3).png" alt="Finance" class="img-fluid mx-auto d-block"></a>
							<br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../Finance/" style="color:#000000; text-decoration:none;">Finance</a></h6>
                            
                        </div>
                    </div>
                </div>
				
				                <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../Stock/"><img src="../admin/media/Stock%20(4).png" alt="Stock" class="img-fluid mx-auto d-block"></a>
							<br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../Stock/" style="color:#000000; text-decoration:none;">Stock</a></h6>
                            
                        </div>
                    </div>
                </div>
				
				  <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../Investment/"><img src="../admin/media/Investment%20(1).png" alt="Stock" class="img-fluid mx-auto d-block"></a>
							<br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../Investment/" style="color:#000000; text-decoration:none;">Investment</a></h6>
                            
                        </div>
                    </div>
                </div>
				
				  <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../Trading/"><img src="../admin/media/Trading%20(1).png" alt="Stock" class="img-fluid mx-auto d-block"></a>
							<br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../Trading/" style="color:#000000; text-decoration:none;">Trading</a></h6>
                            
                        </div>
                    </div>
                </div>
				
				 <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../Corporate-Scams/"><img src="../admin/media/Corporate.png" alt="Stock" class="img-fluid mx-auto d-block"></a>
							<br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../Corporate-Scams/" style="color:#000000; text-decoration:none;">Corporate Scams</a></h6>
                            
                        </div>
                    </div>
                </div>
				
				<div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../Success-Story/"><img src="../admin/media/Success.png" alt="Stock" class="img-fluid mx-auto d-block"></a>
							<br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../Success-Story/" style="color:#000000; text-decoration:none;">Success Story</a></h6>
                            
                        </div>
                    </div>
                </div>
				
				<div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../IPO/"><img src="../admin/media/IPO%20(3).png" alt="Stock" class="img-fluid mx-auto d-block"></a>
							<br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../IPO/" style="color:#000000; text-decoration:none;">IPO</a></h6>
                            
                        </div>
                    </div>
                </div>
				
				<div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../Wealth-Managment/"><img src="../admin/media/Wealtj%20mangement.png" alt="Stock" class="img-fluid mx-auto d-block"></a>
							<br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../Wealth-Managment/" style="color:#000000; text-decoration:none;">Wealth Management</a></h6>
                            
                        </div>
                    </div>
                </div>
				
				<div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../Case-Study/"><img src="../admin/media/Case%20Study.png" alt="Stock" class="img-fluid mx-auto d-block"></a>
							<br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../Case-Study/" style="color:#000000; text-decoration:none;">Case Study</a></h6>
                            
                        </div>
                    </div>
                </div>
				
				<div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="1.0s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../Crypto-Currency/"><img src="../admin/media/CryptoCurrency.png" alt="Stock" class="img-fluid mx-auto d-block"></a>
							<br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../Crypto-Currency/" style="color:#000000; text-decoration:none;">Crypto Currency</a></h6>
                            
                        </div>
                    </div>
                </div>
				
								<div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="1.1s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../Startups/"><img src="../admin/media/Startup%20(1).png" alt="Stock" class="img-fluid mx-auto d-block"></a>
							<br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../Startups/" style="color:#000000; text-decoration:none;">Startups</a></h6>
                            
                        </div>
                    </div>
                </div>
				
				<div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="1.2s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <a href="../Mutual-Fund/"><img src="../admin/media/Mutual%20Fund%20(1).png" alt="Stock" class="img-fluid mx-auto d-block"></a>
							<br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="../Mutual-Fund/" style="color:#000000; text-decoration:none;">Mutual Fund</a></h6>
                            
                        </div>
                    </div>
                </div>
				
			
            </div>
        </div>
    </div>
    <!-- Browse Category End -->









        

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
	
	     
<!--Jquery Script-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--Jquery Script-->

<!--Testimonial-->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

<script>
$(document).ready(function() {
    $("#news-slider").owlCarousel({
        items:3,
        itemsDesktop:[1199,2],
        itemsDesktopSmall:[980,2],
        itemsMobile:[600,1],
        pagination:false,
        navigationText:false,
        autoPlay:true
    });
});
</script>

<!--Client Testimonial Scripts start-->
</body>

</html>
