<?php
include("../../../DLL/config.php");
include("../../../DLL/functions.php");
//include("pageview.php");
//$id = $_REQUEST['i'];
$id = 9;
$chapterdetail = getchapterDetails($id);
$chapterdetails = mysqli_fetch_array($chapterdetail); 
$chapter_name =  $chapterdetails['chapter_name'];
$cont = $chapterdetails['content']; 
$img = $chapterdetails['chapter_image'];
$topic_id = $chapterdetails['topic_id'];
$topic_name = getTopicname($topic_id);
$next_chapters = getnextChapters($topic_id, $id);
$nextchaptercount = getnextChaptersCount($topic_id, $id);
$chapter_quiz = getChapterQuiz($id);
$chapterquizcount = getChapterQuizCount($id);
//Submit User Data in Quiz User Table
$name = $_REQUEST['pname'];
$mobile = $_REQUEST['pphone'];
$email = $_REQUEST['pemail'];
$date = date("Y-m-d h:m:s");
$sql = "INSERT INTO chapter_quiz_users (name, mobile, email, register_datetime) VALUES ('$name', '$mobile', '$email', '$date')";
mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $chapter_name; ?> | Finowings Academy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
    <link href="../../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../../css/style.css" rel="stylesheet">
	
	<!-- Quiz Stylesheet -->
    <link href="../../../css/chapterquizstyle.css" rel="stylesheet">
	 
<style>
.boost-blogs-box{width: 100%; height: auto; border: 1px solid #e0e0e0; border-radius: 5px; padding: 10px; box-sizing: border-box; text-align: center; box-shadow: 0px 0px 15px 5px #d6d7d8;}
</style>	
<style>
.right-header{position:-webkit-sticky; position:sticky; top:0;}
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
   <?php include("../../../finowings-academy/fino-top-navigation.php"); ?>
    <!-- Navbar End -->


  
    <!-- Courses Section Start -->
     <!--Blog Section start-->
<div class="container pt-5">
<div class="row">

<!--Left col start-->
<div class="col-lg-9 col-md-9 col-sm-12 col-12">
<div class="grid-container">

<main>

<!-- Quiz Section Starts -->
 <div id="page-wrap" style="height: 880px;">
        <h1 class="transparent index-headline" >Result</h1>
        
		<div class="boost-blogs-box" style="background-color:#273158;">
		  <h3 style="font-family: Heebo, sans-serif; color: #FFFFFF;" align="left">Quiz Result</h3>
  
                </div>
		
        <?php
			$i = 1;
			$totalCorrect = 0;
			while($r = mysqli_fetch_array($chapter_quiz))
                {
					$question = $r['question'];
					$optionA = $r['optionA'];
					$optionB = $r['optionB'];
					$optionC = $r['optionC'];
					$optionD = $r['optionD'];
					$option_right = $r['option_right'];
					
		
                   $answer = $_POST['question-'.$i.'-answers'];
				   
                   if ($answer == $option_right) { $totalCorrect = $totalCorrect + 1; }
				   
				   
            
				
		?>
		
		
		
		
		             <div class="quiz-overlay"></div>
					 <div style="padding-top: 40px; padding-left:40px;">
                    <h3 style="font-family: Heebo, sans-serif; font-size:20px;"><?php echo $i; ?>. <?php echo $question; ?></h3>
                    <div class="mtm">
					    <?php
						if($option_right == 'A')
						{	
                        ?>					
                        <label for="question-<?php echo $i; ?>-answers-A" class="fwrd labela">A.&nbsp;&nbsp;&nbsp;<?php echo $optionA; ?>&nbsp;&nbsp;<img src="right.jpg" /></label>
                        <?php
                        }
						elseif($answer == 'A' && $option_right != 'A')
						{	
                        ?>						
						<label for="question-<?php echo $i; ?>-answers-A" class="fwrd labela">A.&nbsp;&nbsp;&nbsp;<?php echo $optionA; ?>&nbsp;&nbsp;<img src="wrong.jpg" /></label>
					    <?php
						}
						else 
						{
						?>
						<label for="question-<?php echo $i; ?>-answers-A" class="fwrd labela">A.&nbsp;&nbsp;&nbsp;<?php echo $optionA; ?></label>
						<?php
						}
						?>
					</div>
					<div>
					    <?php
						if($option_right == 'B')
						{	
                        ?>					
                        <label for="question-<?php echo $i; ?>-answers-B" class="fwrd labelb">B.&nbsp;&nbsp;&nbsp;<?php echo $optionB; ?>&nbsp;&nbsp;<img src="right.jpg" /></label>
                        <?php
                        }
						elseif($answer == 'B' && $option_right != 'B')
						{	
                        ?>						
						<label for="question-<?php echo $i; ?>-answers-B" class="fwrd labelb">B.&nbsp;&nbsp;&nbsp;<?php echo $optionB; ?>&nbsp;&nbsp;<img src="wrong.jpg" /></label>
					    <?php
						}
						else 
						{
						?>
						<label for="question-<?php echo $i; ?>-answers-B" class="fwrd labela">B.&nbsp;&nbsp;&nbsp;<?php echo $optionB; ?></label>
						<?php
						}
						?>
					</div>
					<div>
					    <?php
						if($option_right == 'C')
						{	
                        ?>					
                        <label for="question-<?php echo $i; ?>-answers-C" class="fwrd labelac">C.&nbsp;&nbsp;&nbsp;<?php echo $optionC; ?>&nbsp;&nbsp;<img src="right.jpg" /></label>
                        <?php
                        }
						elseif($answer == 'C' && $option_right != 'C')
						{	
                        ?>						
						<label for="question-<?php echo $i; ?>-answers-C" class="fwrd labelac">C.&nbsp;&nbsp;&nbsp;<?php echo $optionC; ?>&nbsp;&nbsp;<img src="wrong.jpg" /></label>
					    <?php
						}
						else 
						{
						?>
						<label for="question-<?php echo $i; ?>-answers-C" class="fwrd labela">C.&nbsp;&nbsp;&nbsp;<?php echo $optionC; ?></label>
						<?php
						}
						?>
					</div>
					<div>
					    <?php
						if($option_right == 'D')
						{	
                        ?>					
                        <label for="question-<?php echo $i; ?>-answers-D" class="fwrd labeld">D.&nbsp;&nbsp;&nbsp;<?php echo $optionD; ?>&nbsp;&nbsp;<img src="right.jpg" /></label>
                        <?php
                        }
						elseif($answer == 'D' && $option_right != 'D')
						{	
                        ?>						
						<label for="question-<?php echo $i; ?>-answers-D" class="fwrd labeld">D.&nbsp;&nbsp;&nbsp;<?php echo $optionD; ?>&nbsp;&nbsp;<img src="wrong.jpg" /></label>
					    <?php
						}
						else 
						{
						?>
						<label for="question-<?php echo $i; ?>-answers-D" class="fwrd labela">D.&nbsp;&nbsp;&nbsp;<?php echo $optionD; ?></label>
						<?php
						}
						?>
					</div>
                  
                   </div>
              
        <?php	
              $i = $i+1;		
				}  

        ?>
		
		
		
		<div class="results-overlay">
		
		
		</div>
		
            </div>	
			
			
			<div class="boost-blogs-box" style="background-color:#273158;">
		  <h3 style="font-family: Heebo, sans-serif; color: #FFFFFF;">Your Score Card </h3>
  
  <?php echo "<div id='results-text' style='color:#cf9c0a; font-size:20px; font-weight:500;'>Correct Answers - <span style='color: #DAF7A6; font-weight:bold;'>$totalCorrect</span> out of $chapterquizcount</div>"; ?>  
  
                </div>
		
	
<!-- Quiz Section Ends -->
<br />
<br />
<div align="center">
 <a class="btn btn-primary py-3 px-3 mt-2" href="../../purpose-of-stock-market/"><< Read Chapter</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary py-3 px-3 mt-2" href="../../types-of-market/">Next Chapter >></a>
</div>
<br />

</main>

</div>

</div>
<!--left col end-->

<!--Right col start-->
<div class="col-lg-3 col-md-3 col-sm-6 col-12" style="padding-top: 10px;">
<div class="right-header">
<div class="rightsidebar">
<h4 align="left">Next Chapters</h4>
<br />

<?php
if($nextchaptercount < 1)
{
?>
<div class="row">
<div class="col-lg-8 col-md-7 col-sm-8 col-8">
<p align="left">No More Chapter! Now You are Eligible to Participate in Quiz.<br />
<a class="btn btn-primary mt-2" href="courses.php">Participate Now</a>
</p>
</div>
</div>
<?php	
}
else {
while($r = mysqli_fetch_array($next_chapters))
{
	$id = $r['id'];
	$chapter_name = $r['chapter_name'];
	 $alt_text = str_replace(" ","-", $chapter_name);
	$img = $r['chapter_image'];
	$blog_url = $r['blog_url'];
	
?>
<div class="row">
<div class="col-lg-4 col-md-5 col-sm-4 col-4"><img src="../../../admin/media/courseicons/<?php echo $img; ?>" alt="<?php echo $alt_text; ?>" class="img-fluid"></div>
<div class="col-lg-8 col-md-7 col-sm-8 col-8">
<p align="left"><strong><a href="../../<?php echo $blog_url; ?>" style="text-decoration: none; font-size:14px;"><?php echo $chapter_name; ?></a></strong><br />
</p>
</div>
</div>
<?php
}
}
?>
<br /><br />
<h4>Twitter Updates</h4>

<a class="twitter-timeline" data-width="350" data-height="600" data-theme="light" href="https://twitter.com/themukulagrawal?ref_src=twsrc%5Etfw">Tweets by themukulagrawal</a> 
	  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

</div>
</div>
<!--Right col end-->

 
	<!-- Courses Section End -->
</div>
</div>
 </div>       
<br />
   <!-- Footer Start -->
    <?php include("../../../footer.php"); ?> 
    <!-- Footer End -->


   


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../lib/wow/wow.min.js"></script>
    <script src="../../../lib/easing/easing.min.js"></script>
    <script src="../../../lib/waypoints/waypoints.min.js"></script>
    <script src="../../../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../../../js/main.js"></script>

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

<!-- Quiz Section Prequistic Starts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
    <script>
           (function($) {
              var timeout= null;
              var $mt = 0;
              $("#quiz .fwrd").click(function(){
                clearTimeout(timeout);
                timeout = setTimeout(function(){ 
                    $mt = $mt - 430;
                    $("#test-questions").css("margin-top", $mt); 
                }, 333);
              });
           }(jQuery))
    </script>

<!-- Quiz Section Prequistic Ends -->

</body>

</html>

