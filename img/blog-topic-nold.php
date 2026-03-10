<?php
include("DLL/config.php");
include("DLL/functions.php");
include("pageview.php");
$id = $_REQUEST['i'];
$k = $_REQUEST['blog'];
//$blogdetail = getblogDetails($id);
$blogdetail = getblogDetailsB($k);
$blogdetails = mysqli_fetch_array($blogdetail);
$title = $blogdetails['title'];
$cat_id = $blogdetails['cat_id'];
$blogcat_name = getCategoryName($cat_id);
$cont = $blogdetails['content']; 
$img = $blogdetails['file'];
$imgn = explode(".", $img);
$imgname = $imgn['0'];
$catblog = getexploreBlog($cat_id);
$categories = getallCategory();
$trendingblogs = gettrendingRightBlogs();
$latestblogs = getlatestRightBlogs();
$date = $blogdetails['updated_date'];
$datetime = explode(" ", $date);
		$date = $datetime['0'];
		$date1 = explode("-", $date);
		$year = $date1['0'];
		$month = $date1['1'];
		$day = $date1['2'];
$page_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];		
$total_views = getPageViews($page_url);		
$img_alttag = $blogdetails['img_alttag'];
$me_keywords = $blogdetails['me_keywords'];
$me_desc = $blogdetails['me_desc'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="<?php echo $me_keywords; ?>" name="keywords">
    <meta content="<?php echo $me_desc; ?>" name="description">

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
	
<style type="text/css">

html {
  scroll-behavior: smooth;
}
.grid-container { 
  display: grid;
  grid-template-columns: auto auto auto auto;
  font-family: system-ui, sans-serif;
  padding: 10px;
  
  /* this breaks position sticky in Firefox */
  /* overflow-x: hidden; */
}

navv {
  white-space: normal; width:250px; 
  background: #ffffff;
  padding-right:20px;
   
}
navv ul {
  list-style: none; border-left:1px solid #c9c9c9;
  margin: 0;
  padding: 0;
}


@media screen and (max-width: 600px) {
navv {  white-space: normal; display: none; width:200px;  background: #1593bd; }
}


/* Only stick if you can fit */
@media (min-height: 100px) {


  navv ul {
    position: sticky; 
    top: 0;
  }
}
navv ul li a { 
  display: block;
  padding: 0.5rem 1rem;
  color: black;
  text-decoration: none;
  font-size: 16px;
}
navv ul li a.current {
  background: white; color:#000000; font-weight:bold; background:url(img/arrow.jpg) no-repeat;
}
main {
  padding-bottom: 10px;
}
/*section {
  padding: 30px 20px 0px; color:#000000;
  
}*/

</style> 

<style>
.btn-light {
	background: #e9f9ff !important;
}

.	btn-light:hover {
background: #436bb2 !important;
color: #FFFFFF !important;
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
				<a href="blog/" class="nav-item nav-link active">Blog</a>
                <a href="contact-us.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="demat-accounts.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Open Demat Account<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Navbar Ends -->

  
<!--Trading Blogs Start-->
<div>
        <div class="container py-5">
			<div class="text-center">
				<h6 class="section-title bg-white text-center text-primary px-3">Category</h6>
                <h1><?php echo $blogcat_name; ?></h1>
			</div>	
			   
<div class="row py-4">

<!--Left col start-->
<div class="col-lg-9 col-md-9 col-sm-12 col-12">
<div class="grid-container">
<!--<navv>
<?php  
  //$htmlString = $cont;

//Create a new DOMDocument object.
//$htmlDom = new DOMDocument;

//Load the HTML string into our DOMDocument object.
//@$htmlDom->loadHTML($htmlString);

//Extract all h2 elements / tags from the HTML.
//$h2Tags = $htmlDom->getElementsByTagName('h2');

// Arrays to store H1 to H6 headings
//$extractedH2Tags = [];


// Loop for h2
?>
<ul>
<h4>Table of Contents</h4> 
<?php
//$k = 1;
//foreach($h2Tags as $h2Tag){

    //Get the node value of h2 tag
  //  $h2Value = trim($h2Tag->nodeValue);
	//$extractedH2Tags[] = $h2Value;
	?>
     <li><a href="#section-<?php //echo $k; ?>"><?php //echo $h2Value; ?></a></li>
	<?php
	//$k++;
    //}
	?>
     </ul>
</navv>
<!--Left col start-->
<!--Middle col start-->
<main>
<p style="font-size:12px; padding-left: 15px;"><a href="/">Home</a> >> <a href="blogs.php">Blog</a> >> <?php echo $title; ?></p>

<h2 style="color: #273158; padding-left: 15px;"><?php echo $title; ?></h2>
<!--<p style="font-size:12px; padding-left: 25px;"><a href="blog-topics.php?i=<?php echo $cat_id; ?>" style="text-decoration: none; color: #406ab2;"><?php //echo $cat_name; ?></a> | <?php //echo $day ?>.<?php //echo $month ?>.<?php //echo $year ?></p>-->
<p style="font-size:12px; padding-left: 15px;"><button type="button" class="btn btn-light" style="padding:5px;"><?php echo $blogcat_name; ?></button>&nbsp;<button type="button" class="btn btn-light" style="padding:5px;"><?php echo $day ?>.<?php echo $month ?>.<?php echo $year ?></button>&nbsp;<button type="button" class="btn btn-light" style="padding:5px;"><img src="img/views-icon.webp" style="width:20px; height:20px;" />&nbsp;<span style="font-size:14px;"><?php echo $total_views; ?></span></button></p>
<br />
<div style="font-size:14px; padding-left: 1px;">
<div align="center">
<img src="admin/media/<?php echo $img; ?>" alt="<?php if($img_alttag != '') { echo $img_alttag; } else { echo $imgname; }  ?>"  class="img-fluid mx-auto d-block">
</div>

<br />


 <div style="font-size:16px !important;"><?php echo $cont; ?></div>
</div>
<div class="wow fadeInUp" data-wow-delay="0.1s" style="background: #e9f9ff; margin: 5px;">
<br />
<h3 style="padding-left:20px;">Liked What You Just Read? Share this Post:</h3>
<br />
<!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox" align="center"></div>
<br />
</div>
</main>

</div>

</div>


<!--middle col end-->


<!--Right col start-->
<div class="col-lg-3 col-md-3 col-sm-6 col-12" style="padding-top: 10px;">

<div class="rightsidebar">
<h4 align="left">Trending Blogs</h4>
<br />
<?php
while($r = mysqli_fetch_array($trendingblogs))
{
	$title = $r['title'];
	$cat_id = $r['cat_id'];
	$icon = $r['file'];
	$imgn = explode(".", $icon);
    $imgname = $imgn['0'];
	$cat_name = getCategoryName($cat_id);
	$updated_date = $r['updated_date'];
	$datetime = explode(" ", $updated_date);
	$date = $datetime['0'];
	$date1 = explode("-", $date);
	$year = $date1['0'];
	$month = $date1['1'];
	$day = $date1['2'];	
	$img_alttag = $r['img_alttag'];
?>
<div class="row">
<div class="col-lg-4 col-md-5 col-sm-4 col-4"><img src="admin/media/<?php echo $icon; ?>" alt="<?php if($img_alttag != '') { echo $img_alttag; } else { echo $imgname; }  ?>" class="img-fluid"></div>

<div class="col-lg-8 col-md-7 col-sm-8 col-8">
<p align="left"><strong><a href="blog-topic.php?i=<?php echo $r['id']; ?>" style="text-decoration: none;"><?php echo $title; ?></a></strong><br />
<span style="font-size: 12px;"><a href="blogs-topics.php?i=<?php echo $cat_id; ?>" style="text-decoration: none; color: #333333;"><?php echo $cat_name; ?></a> | <?php echo $day; ?>-<?php echo $month; ?>-<?php echo $year; ?></span>
</p>
</div>
</div>
<?php
}
?>
</div>
<br />

<div class="rightsidebar">
<h4 align="left">Latest Blogs</h4>
<br />
<?php
while($r = mysqli_fetch_array($latestblogs))
{
	$title = $r['title'];
	$cat_id = $r['cat_id'];
	$icon = $r['file'];
	$imgn = explode(".", $icon);
    $imgname = $imgn['0'];
	$cat_name = getCategoryName($cat_id);
	$updated_date = $r['updated_date'];
	$datetime = explode(" ", $updated_date);
	$date = $datetime['0'];
	$date1 = explode("-", $date);
	$year = $date1['0'];
	$month = $date1['1'];
	$day = $date1['2'];	
	$img_alttag = $r['img_alttag'];
?>
<div class="row">
<div class="col-lg-4 col-md-5 col-sm-4 col-4"><img src="admin/media/<?php echo $icon; ?>" alt="<?php if($img_alttag != '') { echo $img_alttag; } else { echo $imgname; }  ?>" class="img-fluid"></div>
<div class="col-lg-8 col-md-7 col-sm-8 col-8">
<p align="left"><strong><a href="blog-topic.php?i=<?php echo $r['id']; ?>" style="text-decoration: none;"><?php echo $title; ?></a></strong><br />
<span style="font-size: 12px;"><a href="blogs-topics.php?i=<?php echo $cat_id; ?>" style="text-decoration: none; color: #333333;"><?php echo $cat_name; ?></a> | <?php echo $day; ?>-<?php echo $month; ?>-<?php echo $year; ?></span>
</p>
</div>
</div>
<?php
}
?>
</div>

<br />
<h4>Twitter Updates</h4>
<br />
<a class="twitter-timeline" data-width="350" data-height="600" data-theme="light" href="https://twitter.com/themukulagrawal?ref_src=twsrc%5Etfw">Tweets by themukulagrawal</a> 
	  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
<!--Right col end-->
</div>
</div>
<!--Trading Blogs end-->
</div>


	  <!--Category Related Blogs Start-->
<div>
        <div class="container py-5">
			<div class="text-center">
				<h6 class="section-title bg-white text-center text-primary px-3"><?php echo $blogcat_name; ?></h6>
                <h1 class="mb-5">Related Blogs</h1>
			</div>	
			   
<div class="row py-4">

<?php
	while ($row = mysqli_fetch_array($catblog)) 
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
	$img_alttag = $r['img_alttag'];
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
</div>
<!--Category Related Blogs end-->






        

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

<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-62db9e23433a3e75"></script>

</body>

</html>

