<?php
include("../DLL/config.php");
include("../DLL/functions.php");
//$id = $_REQUEST['i'];
$id = 2;
$course = getCourse($id);
$title = $course['course_title'];
$sale_p = $course['sale_p'];
$price = $course['price'];
$languages = $course['languages'];
$rating_numbers = $course['rating_numbers'];
$classplus_link = $course['classplus_link'];
$descr = $course['descr'];
$course_content = $course['course_content'];
$howtouse = $course['howtouse'];
$img = $course['img'];
$timer = "Feb 25, 2023 21:00:00";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Course Details | Finowings Training Academy Private Limited</title>
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
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
	
	<script src="../js/submit.js"></script>
	
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

<style type="text/css">

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #139dd7; color:#FFFFFF;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #139dd7;  color:#FFFFFF;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

.profile-circle{width:40px; height:40px; border-radius:50%; background:#106a9d; color:#FFFFFF; line-height:40px; text-align:center; font-size:20px; float:left;}

.profile-icon-box{width:10%; height:auto; float:left;}
.profile-detail-box{width:90%; height:auto; float:left;}


.review-box{width:100%; margin:0 auto; border:1px solid #c9c9c9; padding:20px;}

</style>
  
<script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};
</script>	
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
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-4">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="../img/finowings-logo.png" />
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="../about-finowings/" class="nav-item nav-link">About Us</a>
				<a href="../finowings-academy/" class="nav-item nav-link">Finowings Academy</a>
                   <!--<a href="technical-analysis-course/" class="nav-item nav-link">Courses</a>-->
				
				
                <div class="nav-item dropdown">
                    <a href="technical-analysis-course/" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Courses</a>
                    <div class="dropdown-menu fade-down m-0">
					  <a href="../technical-analysis-course/" class="dropdown-item">Technical Analysis Course</a>
                        <a href="../the-simplest-book-for-technical-analysis/" class="dropdown-item">The Simplest Book For Technical Analysis</a>
                        <!--<a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>-->
                    </div>
                </div>
				<a href="../blog/" class="nav-item nav-link">Blog</a>
				
				<div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Events</a>
                    <div class="dropdown-menu fade-down m-0">
					  <a href="../financial-freedom-conclave/" class="dropdown-item">Financial Freedom Conclave 2022</a>
                        
                    </div>
                </div>
                <a href="../contact-us.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="../demat-accounts.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Open Demat Account<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Navbar Ends -->

 <!-- Header Start -->
    <!-- <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Course Details</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            
                            <li class="breadcrumb-item text-white active" aria-current="page">Course Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

<div class="container-xxl py-3 pt-5 wow fadeInUp" data-wow-delay="0.1s">
<div class="container">
	
	<!--Course box start-->

<div class="row">

<!--<div class="col-lg-5 col-md-5 col-sm-6 col-12 pt-2"><img src="../admin/media/courseicons/<?php //echo $img; ?>" class="img-fluid mx-auto d-block"></div>-->



<div class="col-lg- col-md-4 col-sm-6 col-12 pt-2">
<h3 style="color: #406ab2;">Options Strategy</h3>
<p><i class="fas fa-star" style="color:#f5c116; font-size:14px;"></i> <i class="fas fa-star"  style="color:#f5c116; font-size:14px;"></i> <i class="fas fa-star"  style="color:#f5c116; font-size:14px;"></i> <i class="fas fa-star"  style="color:#f5c116; font-size:14px;"></i> <i class="fas fa-star"  style="color:#f5c116; font-size:14px;"></i> <font style="font-size:14px;">(<?php echo $rating_numbers; ?>)</font></p>

<font style="padding-top:22px; font-size:16px;">Instructor: <span style="color: #406ab2;">Mukul Agrawal</span></font><br>
<font style="padding-top:22px; font-size:16px;">Language: <span style="color: #406ab2;"><?php echo $languages; ?></span></font><br><br>
<font style="padding-top:22   px; font-size:24px; color: #406ab2;">&#x20B9; 3600</font>&nbsp;&nbsp;<font style="padding-top:20px; font-size:18px; color: red;"><del>&#x20B9; 5000</del></font>&nbsp;&nbsp;<font style="font-size: 14px;">&nbsp;(including 18% GST)</font>

<!--<div style="padding-top:20px;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background:#139dd7; border:1px solid ##139dd7;">
Buy Now</button></div>-->

<div style="padding-top:20px; padding-bottom:20px;" data-toggle="modal" data-target="#myModal"> <a class="btn btn-primary py-3 px-5 mt-2 mb-2">Join Now</a></div>

</div>
<!--
<div class="col-lg-3 col-md-3 col-sm-6 col-12" style="background:#e9f9ff;">


<h3 align="center" style="color: #273158; padding-top:15px">Upcoming Batch</h3>
<div align="center" style="font-size:24px; font-weight:600; background: #00abe9; color:#FFFFFF;"><p id="demo"></p></div>

<div style="padding-top:20px; padding-left:10px; font-size:17px;"><img src="../img/offer-icon.jpg"> <a href="#" style="text-decoration:none; color:#000000; padding-top:5px;">Mentorship</a> <br></div>
<div style="padding-top:10px; padding-left:10px; font-size:17px;"><img src="../img/offer-icon.jpg"> <a href="#" style="text-decoration:none; color:#000000; padding-top:5px;">Revision Session</a> <br></div>
<div style="padding-top:10px; padding-left:10px; font-size:17px;"><img src="../img/offer-icon.jpg"> <a href="#" style="text-decoration:none; color:#000000; padding-top:5px;">Best Screener for Intraday</a> <br></div>
<div style="padding-top:10px; padding-left:10px; font-size:17px;"><img src="../img/offer-icon.jpg"> <a href="#" style="text-decoration:none; color:#000000; padding-top:5px;">Best Stock Level</a> <br></div>
<div style="padding-top:10px; padding-left:10px; font-size:17px; padding-bottom:30px;"><img src="../img/offer-icon.jpg"> <a href="#" style="text-decoration:none; color:#000000; padding-top:5px;">Per Day 2 Stocks</a> <br></div>

<br>
<div align="center" data-toggle="modal" data-target="#myModal"><a class="btn btn-primary py-3 px-5">Enroll Now</a></div>
<br>
<div align="center" style="width:300px;"><img src="../img/diwali-diya.gif" /></div>
</div>
-->


</div>
<!--Course box end-->



<!--Pop Up box start-->
<form method="POST" name="customerData" action="ccavRequestHandler.php">
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Terms & Conditions</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body start -->
        <div class="modal-body">
		
		 
		  <div class="row">
		  <input type="hidden" name="tid" id="tid" readonly />&nbsp;&nbsp;<input type="hidden" name="merchant_id" value="272337" />&nbsp;&nbsp;<input type="hidden" name="order_id" value="<?php echo mt_rand(10000000, 99999999) ?>"/>&nbsp;&nbsp;<input type="hidden" name="amount" value="3600" />&nbsp;&nbsp;<input type="hidden" name="currency" value="INR"/>&nbsp;&nbsp;<input type="hidden" name="redirect_url" value="https://www.finowings.com/options-strategy/ccavResponseHandler.php"/>&nbsp;&nbsp;<input type="hidden" name="cancel_url" value="https://www.finowings.com/options-strategy/ccavResponseHandler.php"/>&nbsp;&nbsp;<input type="hidden" name="language" value="EN"/>
		  </div>
		 
		 
		  <div class="row">
		 <div>
			 <p align="justify">This page states the Terms and Conditions under which you (Visitor) may visit this website (“Finowings Training Academy Pvt. Ltd.”). Please read this page carefully. If you do not accept the Terms and Conditions stated here, we would request you to exit this site. The business, any of its business divisions and/or its subsidiaries, associate companies or subsidiaries to subsidiaries or such other investment companies (in India or abroad) reserve their respective rights to revise these Terms and Conditions at any time by updating this posting. You should visit this page periodically to re-appraise yourself of the Terms and Conditions because they are binding on all users of this Website.</p><br />

<p align="justify">Benefits from the courses depend completely on the user's or student's Practice. The company Finowings Training Academy Pvt. Ltd. does not stand responsible for the training/benefits from any courses. Therefore the company does not guarantee that the student will become master or perfect by attending our classes/workshops.</p><br />

        <p align="justify">Payment for Training, Mentorship, Newsletter, Online Courses, or any other products will not be refunded under any circumstances. No refund will be given if the user does not attend the Program. Rest all services (Newsletter, Online course, any other service) will also be non-refundable once the payment is done.</p><br />

<p align="justify">In case The company finds that any of the study material be it in the form of video or text has been leaked by an individual, then the company also reserves all rights to take Legal action.</p><br />

<p align="justify">In case if the company finds that any of the study material or class videos be in the form of video or text has been recorded and leaked by an Individual, then the company also reserves all rights to take legal action.</p>






			</div>
		  </div>
		  
        <hr>
          
          <div class="row">
          <div align="center"><input type="submit" value="I HAVE READ AND ACCEPT ALL THE TERMS AND CONDITIONS MENTIONED HERE" style="background-color:#FF0000; color:#FFFFFF;"></div>
          </div>
          
          
        
        </div>
        <!-- Modal body end-->
        
        <!-- Modal footer -->
        
        
      </div>
    </div>
  </div>
 </form> 
<!--Pop Up box end-->


</div>
</div>

</div>
</div>

<!--Rating and Review section end-->

</div>
</div>



    <!-- Footer Start -->
    <?php include("footer.php"); ?> 
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
	
	<!--Tabing box script start-->
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<!--Tabing box script end-->


<!-- Countdown Timer Script Starts -->
<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $timer; ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + " Days " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
<!-- Countdown Timer Script Ends -->


<!-- <script language="javascript" type="text/javascript" src="json.js"></script>-->
<!-- <script src="jquery-1.7.2.min.js"></script>-->
 <script language="javascript" type="text/javascript" src="json.js"></script>
 <script src="jquery-1.7.2.min.js"></script>
<script type="text/javascript">
  $(function(){
  
	 /* json object contains
	 	1) payOptType - Will contain payment options allocated to the merchant. Options may include Credit Card, Net Banking, Debit Card, Cash Cards or Mobile Payments.
	 	2) cardType - Will contain card type allocated to the merchant. Options may include Credit Card, Net Banking, Debit Card, Cash Cards or Mobile Payments.
	 	3) cardName - Will contain name of card. E.g. Visa, MasterCard, American Express or and bank name in case of Net banking. 
	 	4) status - Will help in identifying the status of the payment mode. Options may include Active or Down.
	 	5) dataAcceptedAt - It tell data accept at CCAvenue or Service provider
	 	6)error -  This parameter will enable you to troubleshoot any configuration related issues. It will provide error description.
	 */	  
  	  var jsonData;
  	  var access_code="AVRV23JI94AU14VRUA" // shared by CCAVENUE 
	  var amount="5.00";
  	  var currency="INR";
  	  
      $.ajax({
           url:'https://secure.ccavenue.com/transaction/transaction.do?command=getJsonData&access_code='+access_code+'&currency='+currency+'&amount='+amount,
           dataType: 'jsonp',
           jsonp: false,
           jsonpCallback: 'processData',
           success: function (data) { 
                 jsonData = data;
                 // processData method for reference
                 processData(data); 
		 // get Promotion details
                 $.each(jsonData, function(index,value) {
			if(value.Promotions != undefined  && value.Promotions !=null){  
				var promotionsArray = $.parseJSON(value.Promotions);
		               	$.each(promotionsArray, function() {
					console.log(this['promoId'] +" "+this['promoCardName']);	
					var	promotions=	"<option value="+this['promoId']+">"
					+this['promoName']+" - "+this['promoPayOptTypeDesc']+"-"+this['promoCardName']+" - "+currency+" "+this['discountValue']+"  "+this['promoType']+"</option>";
					$("#promo_code").find("option:last").after(promotions);
				});
			}
		});
           },
           error: function(xhr, textStatus, errorThrown) {
               alert('An error occurred! ' + ( errorThrown ? errorThrown :xhr.status ));
               //console.log("Error occured");
           }
   		});
   		
   		$(".payOption").click(function(){
   			var paymentOption="";
   			var cardArray="";
   			var payThrough,emiPlanTr;
		    var emiBanksArray,emiPlansArray;
   			
           	paymentOption = $(this).val();
           	$("#card_type").val(paymentOption.replace("OPT",""));
           	$("#card_name").children().remove(); // remove old card names from old one
            $("#card_name").append("<option value=''>Select</option>");
           	$("#emi_div").hide();
           	
           	//console.log(jsonData);
           	$.each(jsonData, function(index,value) {
           		//console.log(value);
            	  if(paymentOption !="OPTEMI"){
	            	 if(value.payOpt==paymentOption){
	            		cardArray = $.parseJSON(value[paymentOption]);
	                	$.each(cardArray, function() {
	    	            	$("#card_name").find("option:last").after("<option class='"+this['dataAcceptedAt']+" "+this['status']+"'  value='"+this['cardName']+"'>"+this['cardName']+"</option>");
	                	});
	                 }
	              }
	              
	              if(paymentOption =="OPTEMI"){
		              if(value.payOpt=="OPTEMI"){
		              	$("#emi_div").show();
		              	$("#card_type").val("CRDC");
		              	$("#data_accept").val("Y");
		              	$("#emi_plan_id").val("");
						$("#emi_tenure_id").val("");
						$("span.emi_fees").hide();
		              	$("#emi_banks").children().remove();
		              	$("#emi_banks").append("<option value=''>Select your Bank</option>");
		              	$("#emi_tbl").children().remove();
		              	
	                    emiBanksArray = $.parseJSON(value.EmiBanks);
	                    emiPlansArray = $.parseJSON(value.EmiPlans);
	                	$.each(emiBanksArray, function() {
	    	            	payThrough = "<option value='"+this['planId']+"' class='"+this['BINs']+"' id='"+this['subventionPaidBy']+"' label='"+this['midProcesses']+"'>"+this['gtwName']+"</option>";
	    	            	$("#emi_banks").append(payThrough);
	                	});
	                	
	                	emiPlanTr="<tr><td>&nbsp;</td><td>EMI Plan</td><td>Monthly Installments</td><td>Total Cost</td></tr>";
							
	                	$.each(emiPlansArray, function() {
		                	emiPlanTr=emiPlanTr+
							"<tr class='tenuremonth "+this['planId']+"' id='"+this['tenureId']+"' style='display: none'>"+
								"<td> <input type='radio' name='emi_plan_radio' id='"+this['tenureMonths']+"' value='"+this['tenureId']+"' class='emi_plan_radio' > </td>"+
								"<td>"+this['tenureMonths']+ "EMIs. <label class='merchant_subvention'>@ <label class='emi_processing_fee_percent'>"+this['processingFeePercent']+"</label>&nbsp;%p.a</label>"+
								"</td>"+
								"<td>"+this['currency']+"&nbsp;"+this['emiAmount'].toFixed(2)+
								"</td>"+
								"<td><label class='currency'>"+this['currency']+"</label>&nbsp;"+ 
									"<label class='emiTotal'>"+this['total'].toFixed(2)+"</label>"+
									"<label class='emi_processing_fee_plan' style='display: none;'>"+this['emiProcessingFee'].toFixed(2)+"</label>"+
									"<label class='planId' style='display: none;'>"+this['planId']+"</label>"+
								"</td>"+
							"</tr>";
						});
						$("#emi_tbl").append(emiPlanTr);
	                 } 
                  }
           	});
           	
         });
   
	  
      $("#card_name").click(function(){
      	if($(this).find(":selected").hasClass("DOWN")){
      		alert("Selected option is currently unavailable. Select another payment option or try again later.");
      	}
      	if($(this).find(":selected").hasClass("CCAvenue")){
      		$("#data_accept").val("Y");
      	}else{
      		$("#data_accept").val("N");
      	}
      });
          
     // Emi section start      
          $("#emi_banks").live("change",function(){
	           if($(this).val() != ""){
	           		var cardsProcess="";
	           		$("#emi_tbl").show();
	           		cardsProcess=$("#emi_banks option:selected").attr("label").split("|");
					$("#card_name").children().remove();
					$("#card_name").append("<option value=''>Select</option>");
				    $.each(cardsProcess,function(index,card){
				        $("#card_name").find("option:last").after("<option class=CCAvenue value='"+card+"' >"+card+"</option>");
				    });
					$("#emi_plan_id").val($(this).val());
					$(".tenuremonth").hide();
					$("."+$(this).val()+"").show();
					$("."+$(this).val()).find("input:radio[name=emi_plan_radio]").first().attr("checked",true);
					$("."+$(this).val()).find("input:radio[name=emi_plan_radio]").first().trigger("click");
					 
					 if($("#emi_banks option:selected").attr("id")=="Customer"){
						$("#processing_fee").show();
					 }else{
						$("#processing_fee").hide();
					 }
					 
				}else{
					$("#emi_plan_id").val("");
					$("#emi_tenure_id").val("");
					$("#emi_tbl").hide();
				}
				
				
				
				$("label.emi_processing_fee_percent").each(function(){
					if($(this).text()==0){
						$(this).closest("tr").find("label.merchant_subvention").hide();
					}
				});
				
		 });
		 
		 $(".emi_plan_radio").live("click",function(){
			var processingFee="";
			$("#emi_tenure_id").val($(this).val());
			processingFee=
					"<span class='emi_fees' >"+
			 			"Processing Fee:"+$(this).closest('tr').find('label.currency').text()+"&nbsp;"+
			 			"<label id='processingFee'>"+$(this).closest('tr').find('label.emi_processing_fee_plan').text()+
			 			"</label><br/>"+
                			"Processing fee will be charged only on the first EMI."+
                	"</span>";
             $("#processing_fee").children().remove();
             $("#processing_fee").append(processingFee);
             
             // If processing fee is 0 then hiding emi_fee span
             if($("#processingFee").text()==0){
             	$(".emi_fees").hide();
             }
			  
		});
		
		
		$("#card_number").focusout(function(){
			/*
			 emi_banks(select box) option class attribute contains two fields either allcards or bin no supported by that emi 
			*/ 
			if($('input[name="payment_option"]:checked').val() == "OPTEMI"){
				if(!($("#emi_banks option:selected").hasClass("allcards"))){
				  if(!$('#emi_banks option:selected').hasClass($(this).val().substring(0,6))){
					  alert("Selected EMI is not available for entered credit card.");
				  }
			   }
		   }
		  
		});
			
			
	// Emi section end 		
   
   
   // below code for reference 
 
   function processData(data){
         var paymentOptions = [];
         var creditCards = [];
         var debitCards = [];
         var netBanks = [];
         var cashCards = [];
         var mobilePayments=[];
         $.each(data, function() {
         	 // this.error shows if any error   	
             console.log(this.error);
              paymentOptions.push(this.payOpt);
              switch(this.payOpt){
                case 'OPTCRDC':
                	var jsonData = this.OPTCRDC;
                 	var obj = $.parseJSON(jsonData);
                 	$.each(obj, function() {
                 		creditCards.push(this['cardName']);
                	});
                break;
                case 'OPTDBCRD':
                	var jsonData = this.OPTDBCRD;
                 	var obj = $.parseJSON(jsonData);
                 	$.each(obj, function() {
                 		debitCards.push(this['cardName']);
                	});
                break;
              	case 'OPTNBK':
	              	var jsonData = this.OPTNBK;
	                var obj = $.parseJSON(jsonData);
	                $.each(obj, function() {
	                 	netBanks.push(this['cardName']);
	                });
                break;
                
                case 'OPTCASHC':
                  var jsonData = this.OPTCASHC;
                  var obj =  $.parseJSON(jsonData);
                  $.each(obj, function() {
                  	cashCards.push(this['cardName']);
                  });
                 break;
                   
                  case 'OPTMOBP':
                  var jsonData = this.OPTMOBP;
                  var obj =  $.parseJSON(jsonData);
                  $.each(obj, function() {
                  	mobilePayments.push(this['cardName']);
                  });
              }
              
            });
           
           //console.log(creditCards);
          // console.log(debitCards);
          // console.log(netBanks);
          // console.log(cashCards);
         //  console.log(mobilePayments);
            
      }
  });
</script>

</body>

</html>

