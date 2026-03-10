<?php
include("../DLL/config.php");
include("../DLL/functions.php");
$nfo = getAllNFO();
$date = date("Y-m-d");
$datef = strtotime($date);
$blogs = getMutualFundBlogs();
$active_page = 'mutual-fund';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>New NFO Mutual Funds List 2025: Check Opening and Closing Dats</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="nfo,nfo mutual fund,best nfo to invest today,new nfo mutual fund,upcoming nfo in mutual fund,mutual fund new fund offer" name="keywords">
    <meta content=" Get all the Latest & Upcoming Mutual Funds NFO in 2025 with Details like NAV( Net Asset Value), Opening & closing Date & How to Apply in Any Mutual Fund NFO" name="description">
	<link rel="canonical" href="https://www.finowings.com/NFO/" />

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

          <div class="container-xxl py-3">
        <div class="container" style="padding-left: 0px !important; padding-right: 0px !important;">
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

			<div class="text-center py-3">
				<h6 class="section-title bg-white text-center text-primary px-3">NFO</h6>
                <h1 class="mb-3">Upcoming NFO</h1><br />
				 
			</div>	
			

            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
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
					
					 
					
						<?php
						$i=1;
						while ($nfos = mysqli_fetch_array($nfo)) {	
						$title = $nfos['title'];
                        $cat = $nfos['cat_id'];
						$cat_name = getCategoryName($cat);
						$blog_url = $nfos['blog_url'];						
						$open = $nfos['ipo_open'];
						$openf = $nfos['ipo_openf'];
						$openff = strtotime($openf);
                        $close = $nfos['ipo_close'];
						$closef = $nfos['ipo_closef'];
						$closeff = strtotime($closef);
						
						if($openff > $datef)
						{	
						$cstatus = "Upcoming";
						?>
						<tr style="background-color: #FAF9D0 !important;">
						<td><a href="../<?php echo $cat_name; ?>/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title; ?></a></td>
                            <!--<td><?php //echo date("d F"); ?></td>-->
                            <td> <?php echo $open; ?> </td>
							<td> <?php echo $close; ?> </td>
							<td> <?php echo $cstatus; ?> </td>
						</tr>
						<?php
						}    					
						elseif($closeff >= $datef)
						{	
						$cstatus = "Open";
						?>
                        <tr style="background-color: #90EE90 !important;">
						<td><a href="../<?php echo $cat_name; ?>/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title; ?></a>&nbsp;&nbsp;<a href="https://nehaagrawal.fundexpert.net/nfo/" target="_blank"><span class="badge" style="font-size:14px; margin-top: 2px; background-color: rgb(39, 49, 88);">Apply Now</span></a><br />
						<?php
						if($closeff == $datef)
					    echo "<span class='badge rounded-pill bg-danger ms-2' style='font-size:10px;vertical-align: middle;margin-top:-2px;'>closing today</span>";
					    ?>					
						
						
						</a> </td>
                            <!--<td><?php //echo date("d F"); ?></td>-->
                            <td> <?php echo $open; ?> </td>
							<td> <?php echo $close; ?> </td>
							<td> <?php echo $cstatus; ?> </td>
						</tr>						
						<?php
						}
						else 
						{
						$cstatus = "Closed";
                        ?>
						<tr style="background-color: rgb(233, 249, 255) !important;">
						<td> <a href="../<?php echo $cat_name; ?>/<?php echo $blog_url; ?>" style="text-decoration: none; color: #273158;"><?php echo $title; ?></a> </td>
                            <!--<td><?php //echo date("d F"); ?></td>-->
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
		        <!--<div align="center"><a class="btn btn-primary py-3 px-5 mt-2" href="https://www.finowings.com/NFO/">Explore All NFO</a></div>-->
              </div>
			    
			</div>
			
			<!--Category Related Blogs Start-->
<div>
        <div class="container py-5">
			<div class="text-center">
				<h6 class="section-title bg-white text-center text-primary px-3">Mutual Fund</h6>
                <h2 class="mb-5">Recent Blogs</h2>
			</div>	
			   
<div class="row py-2">

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
	$imgn = explode(".", $pic);
    $imgname = $imgn['0'];
	$updated_date = $row['updated_date'];
	$cat = $row['cat_id'];
	$cat_name = getCategoryName($cat);
	$cat_names = str_replace(" ","-",$cat_name);
	if($cat_names == 'SME-IPO')
	{
	$cat_name1 = 'IPO';	
    }		
	else
	{
	$cat_name1 = $cat_names;	
	}	
	$updated_date = $row['created_date'];
	$datetime = explode(" ", $updated_date);
	$date = $datetime['0'];
	$date1 = explode("-", $date);
	$year = $date1['0'];
	$month = $date1['1'];
	$day = $date1['2'];	
	$img_alttag = $row['img_alttag'];
	$blog_url = $row['blog_url'];
?>		
<div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2">
<div class="trading-blogs-box">
<img src="../admin/media/<?php echo $pic; ?>" alt="<?php if($img_alttag != '') { echo $img_alttag; } else { echo $imgname; }  ?>" class="img-fluid mx-auto d-block">
<!--<img src="img/dummy.jpg" class="img-fluid mx-auto d-block">-->
<p style="font-size:14px;"><a href="../<?php echo $cat_name1; ?>" style="text-decoration: none; color: #406ab2;"><?php echo $cat_name; ?></a> | <?php echo $day; ?>-<?php echo $month; ?>- <?php echo $year; ?></p>
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
<!--Category Related Blogs end-->
			
			
			
			<!-- FAQs Starts -->
	
    <div class="container-xxl">
        <div class="container wow fadeInUp" data-wow-delay="0.3s" style="background: #e9f9ff;">
<br />	
<h3 class="mb-4">Frequently Asked Questions</h3>

<div class="faq-content">
  
  <div class="faq-question">
    <input id="q1" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q1" class="panel-title">What is an NFO?</label>
    <div class="panel-content">The procedure by which a mutual fund first makes units of a new scheme available to the general public is known as a New Fund Offer (NFO). Investors may purchase scheme units at the face value of the units, which is typically Rs. 10, during the NFO period. An NFO's goal is to raise capital from investors in order to make investments in particular industries or asset classes. Mutual funds can introduce new products and broaden their product offerings through NFOs.</div>
  </div>
  
  <div class="faq-question">
    <input id="q2" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q2" class="panel-title">How Does New Fund Offer work?</label>
    <div class="panel-content">The chance to subscribe to the scheme is only offered for a short time in a fresh fund offer. During the predetermined period, investors have the option to purchase units of the mutual fund scheme and subscribe to the NFO at the offer price. Usually, this is set at Rs 10. Investors would be entitled to buy fund units at the designated price once the tenure ends.</div>
  </div>
  
   <div class="faq-question">
    <input id="q3" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q3" class="panel-title">Should I invest in an NFO or an existing mutual fund scheme?</label>
    <div class="panel-content">It depends on your financial objectives, risk tolerance, and the investment theme and goal of the NFO. It might be a wise investment if the NFO fits your demands and has a solid fund manager and track record. On the other hand, well-established mutual fund schemes with reduced fee ratios and a history of reliable performance may also be a safer choice.</div>
  </div>
  
     <div class="faq-question">
    <input id="q4" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q4" class="panel-title">How can I participate in an NFO?</label>
    <div class="panel-content">Investing directly with the mutual fund house or through a broker is one way to take part in an NFO. You can send in the application, the necessary paperwork, and the investment amount. An NFO's subscription period typically lasts a few weeks. </div>
  </div>
  
  <div class="faq-question">
    <input id="q5" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q5" class="panel-title">What is the minimum investment amount for an NFO?</label>
    <div class="panel-content">Fund to fund, the minimum investment amount for an NFO might be as little as Rs. 100 or as high as Rs. 5,000. Additionally, certain funds could have a minimum investment requirement for further purchases. Prior to making an investment in an NFO, it is crucial to ascertain the minimum investment amount. </div>
  </div>


</div>

			
        </div>
    </div>
    
	
<!-- FAQs Ends -->

<!--<div align="center"><a class="btn btn-primary py-3 px-5 mt-2" href="https://www.finowings.com/IPO/ipo-faqs.php">Explore More FAQs</a></div>-->
	
			
			 
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