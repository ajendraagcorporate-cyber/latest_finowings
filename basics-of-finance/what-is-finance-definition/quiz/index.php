<?php
include("../../../DLL/config.php");
include("../../../DLL/functions.php");
//include("pageview.php");
//$id = $_REQUEST['i'];
$id = 1;
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
<h2 align="center" style="font-size:32px; font-weight:500;"><?php echo $chapter_name; ?> - Quiz</h2>
<br />
<!-- Quiz Section Starts -->
 <div id="page-wrap">
        <h1 class="transparent index-headline"><?php echo $chapter_name; ?></h1>
	<form action="grade.php" method="post" id="quiz">
            <ul id="test-questions">
			<?php
			$i = 1;
			while($r = mysqli_fetch_array($chapter_quiz))
                {
					$question = $r['question'];
					$optionA = $r['optionA'];
					$optionB = $r['optionB'];
					$optionC = $r['optionC'];
					$optionD = $r['optionD'];
					$option_right = $r['option_right'];
					
			?>		
			
                <li>
                    <div class="quiz-overlay"></div>
                    <h3 style="font-family: Heebo, sans-serif;"><?php echo $i; ?>. <?php echo $question; ?></h3>
                    <div class="mtm">
                        <input type="radio" name="question-<?php echo $i; ?>-answers" id="question-<?php echo $i; ?>-answers-A" value="A" />
                        <label for="question-<?php echo $i; ?>-answers-A" class="fwrd labela">A.&nbsp;&nbsp;&nbsp;<?php echo $optionA; ?></label>
                    </div>
                    <div>
                        <input type="radio" name="question-<?php echo $i; ?>-answers" id="question-<?php echo $i; ?>-answers-B" value="B" />
                        <label for="question-<?php echo $i; ?>-answers-B" class="fwrd labelb">B.&nbsp;&nbsp;&nbsp;<?php echo $optionB; ?></label>
                    </div>
                    <div>
                        <input type="radio" name="question-<?php echo $i; ?>-answers" id="question-<?php echo $i; ?>-answers-C" value="C" />
                        <label for="question-<?php echo $i; ?>-answers-C" class="fwrd labelc">C.&nbsp;&nbsp;&nbsp;<?php echo $optionC; ?></label>
                    </div>
                    <div>
                        <input type="radio" name="question-<?php echo $i; ?>-answers" id="question-<?php echo $i; ?>-answers-D" value="D" />
                        <label for="question-<?php echo $i; ?>-answers-D" class="fwrd labeld">D.&nbsp;&nbsp;&nbsp;<?php echo $optionD; ?></label>
                    </div>
                    <p class="quiz-progress"><?php echo $i; ?> of <?php echo $chapterquizcount; ?></p>
                </li>
			<?php
			$i = $i + 1;
			}
			?>

                <li>
                    <div class="quiz-overlay"></div>
                    <h3 class="anticipate" style="font-family: Heebo, sans-serif;">Now it’s time to see your results...</h3>
  <div class="mb-3 mt-3">
    <input type="name" class="form-control text-center" id="pname"  placeholder="NAME" name="pname" style="background:#ade4f8; border-radius:15px;" required>
  </div>
   <div class="mb-3 mt-3">
    <input type="phone" class="form-control text-center" id="pphone" placeholder="PHONE NUMBER" name="pphone" style="background:#ade4f8;  border-radius:15px;" required>
  </div>
   <div class="mb-3 mt-3">
    <input type="email" class="form-control text-center" id="pemail" placeholder="ENTER YOUR EMAIL ADDRESS" name="pemail" style="background:#ade4f8; border-radius:15px;" required>
  </div>
  <p><input type="hidden" name="chapter_id" value="<?php echo $id; ?>"></p>
                    <input type="submit" value="Submit Quiz" id="submit-quiz" />
                </li>
            </ul>
	</form>
        <div class="nomargin"></div>
    </div>	
	
<!-- Quiz Section Ends -->

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

