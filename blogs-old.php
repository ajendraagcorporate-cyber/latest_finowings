<?php
include("DLL/config.php");
include("DLL/functions.php");
$sliderpost1 = getblogsliderPost1();
$sliderposts = getblogsliderPosts();
$categories = getallCategory();
$trendingblogs = gettrendingBlogs();

//Pagignation

$rowperpage = 6;
    $row = 0;

        // Previous Button
    if(isset($_POST['but_prev'])){
        $row = $_POST['row'];
        $row -= $rowperpage;
        if( $row < 0 ){
            $row = 0;
        }
    }

        // Next Button
    if(isset($_POST['but_next'])){
        $row = $_POST['row'];
        $allcount = $_POST['allcount'];

        $val = $row + $rowperpage;
        if( $val < $allcount ){
            $row = $val;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blogs</title>
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
	
	 <!--Featured-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
	
	<style type="text/css">
/* Make the image fully responsive */
.carousel-inner img{width: 100%; height: 100%;}

.carousel-indicators li {
  background-color: #00abe9 !important;
}

.carousel-indicators .active {
  background-color: #436bb1 !important;
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
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow px-2">
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
                <a href="technical-analysis-courses/" class="nav-item nav-link">Courses</a>
                <!--<div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>-->
				<a href="blogs.php" class="nav-item nav-link active">Blog</a>
                <a href="contact-us.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="demat-accounts.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Open Demat Account<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Navbar Ends -->


 
 
	
<!--Blog box start-->

<div id="demo" class="carousel slide" data-ride="carousel" style="background:#e9f9ff; color:#000000; padding:30px 0px;">

  <!-- Indicators -->
  <ul class="carousel-indicators" align="right">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
  
   <!--blog 1 start-->
	<?php
	while ($sliderow = mysqli_fetch_array($sliderpost1)) {
		$id = $sliderow['id'];
		$slidetitle = $sliderow['title'];
		$slideimage = $sliderow['file'];
		$imgn = explode(".", $slideimage);
        $imgname = $imgn['0'];
		$slidedesc = $sliderow['short_desc'];
		$slidedesc1 = substr($slidedesc, 0, 380);
		$updated_date = $sliderow['updated_date'];
		$datetime = explode(" ", $updated_date);
		$date = $datetime['0'];
		$date1 = explode("-", $date);
		$year = $date1['0'];
		$month = $date1['1'];
		$day = $date1['2'];
		$cat_id = $sliderow['cat_id'];
		$cat_name = getCategoryName($cat_id);
		$img_alttag = $sliderow['img_alttag'];
		
?>
    <div class="carousel-item active">
    <div class="container">
    
    <div class="row">
    
   <div class="col-lg-5 col-md-5 col-sm-6 col-12"><img src="admin/media/<?php echo $slideimage; ?>" alt="<?php if($img_alttag != '') { echo $img_alttag; } else { echo $imgname; }  ?>" class="img-fluid mx-auto d-block"></div>
	<!--<div class="col-lg-5 col-md-5 col-sm-6 col-12"><img src="img/dummy.jpg" class="img-fluid mx-auto d-block"></div>-->
    <div class="col-lg-7 col-md-7 col-sm-6 col-12" style="padding-left: 20px; padding-top: 20px;">
    <h2><?php echo $slidetitle; ?></h2>
	<p style="font-size:12px;"><a href="blogs-topics.php?i=<?php echo $cat_id; ?>" style="text-decoration: none; color: #406ab2;"><?php echo $cat_name; ?></a> | <?php echo $day ?>.<?php echo $month ?>.<?php echo $year ?></p>
    <p style="padding-bottom:10px;" align="justify"><?php echo $slidedesc1; ?>...</p>
   <a class="btn btn-primary py-2 px-5 mb-5" href="blog-topic.php?i=<?php echo $id; ?>">Read More</a>
    </div>
    
    </div>
    
    
    </div>  
    </div>
	<?php
	}
	?>
    <!--blog 1 end-->
	
	
	  <!--blog 2 and 3 start-->
	<?php
	while ($sliderow1 = mysqli_fetch_array($sliderposts)) {
		$id = $sliderow1['id'];
		$slidetitle = $sliderow1['title'];
		$slideimage = $sliderow1['file'];
		$imgn = explode(".", $slideimage);
        $imgname = $imgn['0'];
		$slidedesc = $sliderow1['short_desc'];
		$slidedesc1 = substr($slidedesc, 0, 380);
		$updated_date = $sliderow1['updated_date'];
		$datetime = explode(" ", $updated_date);
		$date = $datetime['0'];
		$date1 = explode("-", $date);
		$year = $date1['0'];
		$month = $date1['1'];
		$day = $date1['2'];
		$cat_id = $sliderow1['cat_id'];
		$cat_name = getCategoryName($cat_id);
		$img_alttag = $sliderow1['img_alttag'];
?>
    <div class="carousel-item">
    <div class="container">
    
    <div class="row">
    
    <div class="col-lg-5 col-md-5 col-sm-6 col-12"><img src="admin/media/<?php echo $slideimage; ?>" alt="<?php if($img_alttag != '') { echo $img_alttag; } else { echo $imgname; }  ?>" class="img-fluid mx-auto d-block"></div>
	<!--<div class="col-lg-5 col-md-5 col-sm-6 col-12"><img src="img/dummy.jpg" class="img-fluid mx-auto d-block"></div>-->
    <div class="col-lg-7 col-md-7 col-sm-6 col-12" style="padding-left: 20px; padding-top: 20px;">
    <h2><?php echo $slidetitle; ?></h2>
	<p style="font-size:12px;"><a href="blogs-topics.php?i=<?php echo $cat_id; ?>" style="text-decoration: none; color: #406ab2;"><?php echo $cat_name; ?></a> | <?php echo $day ?>.<?php echo $month ?>.<?php echo $year ?></p>
    <p style="padding-bottom:10px;" align="justify"><?php echo $slidedesc1; ?>...</p>
   <a class="btn btn-primary py-2 px-5 mb-5" href="blog-topic.php?i=<?php echo $id; ?>">Read More</a>
    </div>
    
    </div>
    
    
    </div>  
    </div>
	<?php
	}
	?>
    <!--blog 2 and 3 end-->
    
    
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
  <!--<a class="carousel-control-prev" href="#demo" data-slide="prev" style="background:#000000; width:40px; height:40px; padding:10px; border-radius:50%;  top:50%; margin-left:50px;">
<span class="carousel-control-prev-icon"></span>-->
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
<!--<a class="carousel-control-next" href="#demo" data-slide="next" style="background:#000000; width:40px;  height:40px; border-radius:50%; padding:10px; top:50%; margin-right:50px;">
<span class="carousel-control-next-icon"></span>-->
</a>
</div>

<!--Blog box end-->


 
<!--Trading Blogs Start-->
<div class="container-xxl py-5">
        <div class="container">
			<div class="text-center">
				<h6 class="section-title bg-white text-center text-primary px-3">Blogs</h6>
                <h1 class="mb-3">Trending Blogs</h1>
			</div>	
			   
<div class="row py-4">

<?php
$sql = "SELECT COUNT(*) AS cntrows FROM blog";
  $result = mysqli_query($con,$sql);
  $fetchresult = mysqli_fetch_array($result);
  $allcount = $fetchresult['cntrows'];
  $sql = "SELECT * FROM blog  ORDER BY id desc limit $row,".$rowperpage;
  $result = mysqli_query($con,$sql);
  $sno = $row + 1;
  
	while ($row = mysqli_fetch_array($result)) 
	{
	$id = 	$row['id'];
	$title = $row['title'];
	$count = strlen("$title");
	$short_title = substr($title, 0, 30);
	$short_desc = $row['short_desc'];
	$short_desc1 = substr($short_desc, 0, 120);
	$desc = $row['content'];
	$pic = $row['file'];
	$imgn = explode(".", $pic);
    $imgname = $imgn['0'];
	$updated_date = $row['updated_date'];
	$cat = $row['cat_id'];
	$cat_name = getCategoryName($cat);
	$updated_date = $row['updated_date'];
	$datetime = explode(" ", $updated_date);
	$date = $datetime['0'];
	$date1 = explode("-", $date);
	$year = $date1['0'];
	$month = $date1['1'];
	$day = $date1['2'];	
	$img_alttag = $row['img_alttag'];
?>		
<div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
<div class="trading-blogs-box">
<img src="admin/media/<?php echo $pic; ?>" alt="<?php if($img_alttag != '') { echo $img_alttag; } else { echo $imgname; }  ?>" class="img-fluid mx-auto d-block">
<!--<img src="img/dummy.jpg" class="img-fluid mx-auto d-block">-->
<p style="font-size:14px;"><a href="blogs-topics.php?i=<?php echo $cat; ?>" style="text-decoration: none; color: #406ab2;"><?php echo $cat_name; ?></a> | <?php echo $day; ?>-<?php echo $month; ?>- <?php echo $year; ?></p>
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
 <a class="btn btn-primary py-3 px-5 mt-2" href="blog-topic.php?i=<?php echo $id; ?>">Continue Reading</a>
</div>
</div>
<?php
 }
?>

</div>
</div>

<form method="post" action="">
                    <div class="d-flex justify-content-center">
                        <input type="hidden" name="row" value="<?php echo $row; ?>">
                        <input type="hidden" name="allcount" value="<?php echo $allcount; ?>">
                        <input type="submit" class="btn btn-primary mx-2" style="background-color: #cf9c0a !important;"  name="but_prev" value="<< Previous">
                        <input type="submit" class="btn btn-primary mx-2" style="background-color: #cf9c0a !important;" name="but_next" value="Next >>">
                    </div>
                </form>  
				
</div>
<!--Trading Blogs end-->



	    <!-- Browse Category Start -->
    <div class="container-xxl py-5">
        <div class="container">
		    <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                <h1 class="mb-5">Browse Category</h1>
            </div>
            
			<div class="row g-4">
			<?php
				while ($cat = mysqli_fetch_array($categories)) 
				{
					$cat_id = $cat['id'];
					$cat_name = $cat['cat_name'];
					$icon = $cat['icon_name'];
					$p = 0.1;
			?>
			
			
                <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-1 wow fadeInUp" data-wow-delay="<?php echo $p; ?>s">
                    <div class="browsec-item text-center pt-3">
                        <div class="p-4">
                            <img src="admin/media/<?php echo $icon; ?>" alt="<?php echo $cat_name; ?>" class="img-fluid mx-auto d-block">
							<br />
                            <h6 class="mb-1" style="font-size:0.9rem;"><a href="blog-topics.php?i=<?php echo $cat_id; ?>" style="color:#000000; text-decoration:none;"><?php echo $cat_name; ?></a></h6>
                            
                        </div>
                    </div>
                </div>
				
			<?php 
				$p = $p + 0.2;
                }
            ?>				
				
				
			
            </div>
        </div>
    </div>
    <!-- Browse Category End -->




        

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
