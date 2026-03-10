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
    <title>Financial Freedom Conclave Media Coverage</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Conclave Media Coverage" name="keywords">
    <meta content="Media coverage of Financial Freedom Conclave 2022. News media such as Times Network, Dainik Jagran, Hindustan Times covered Financial Freedom Conclave." name="description">

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
body {
  background-color: #eee;
}
.hello {
  opacity: 1 !important;
}
.full {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}
.full .content {
  background-color: rgba(0,0,0,0.75) !important;
  height: 100%;
  width: 100%;
  display: grid;
}
.full .content img {
  left: 50%;
  transform: translate3d(0, 0, 0);
  animation: zoomin 1s ease;
  max-width: 100%;
  max-height: 100%;
  margin: auto;
}
.byebye {
  opacity: 0;
}
.byebye:hover {
  transform: scale(0.2) !important;
}
.gallery {
  display: grid;
  grid-column-gap: 8px;
  grid-row-gap: 8px;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  grid-auto-rows: 8px;
}
.gallery img {
  max-width: 100%;
  border-radius: 8px;
  box-shadow: 0 0 16px #333;
  transition: all 1.5s ease;
}
.gallery img:hover {
  box-shadow: 0 0 32px #333;
}
.gallery .content {
  padding: 4px;
}
.gallery .gallery-item {
  transition: grid-row-start 300ms linear;
  transition: transform 300ms ease;
  transition: all 0.5s ease;
  cursor: pointer;
}
.gallery .gallery-item:hover {
  transform: scale(1.025);
}
@media (max-width: 600px) {
  .gallery {
    grid-template-columns: repeat(auto-fill, minmax(30%, 1fr));
  }
}
@media (max-width: 400px) {
  .gallery {
    grid-template-columns: repeat(auto-fill, minmax(50%, 1fr));
  }
}
@-moz-keyframes zoomin {
  0% {
    max-width: 50%;
    transform: rotate(-30deg);
    filter: blur(4px);
  }
  30% {
    filter: blur(4px);
    transform: rotate(-80deg);
  }
  70% {
    max-width: 50%;
    transform: rotate(45deg);
  }
  100% {
    max-width: 100%;
    transform: rotate(0deg);
  }
}
@-webkit-keyframes zoomin {
  0% {
    max-width: 50%;
    transform: rotate(-30deg);
    filter: blur(4px);
  }
  30% {
    filter: blur(4px);
    transform: rotate(-80deg);
  }
  70% {
    max-width: 50%;
    transform: rotate(45deg);
  }
  100% {
    max-width: 100%;
    transform: rotate(0deg);
  }
}
@-o-keyframes zoomin {
  0% {
    max-width: 50%;
    transform: rotate(-30deg);
    filter: blur(4px);
  }
  30% {
    filter: blur(4px);
    transform: rotate(-80deg);
  }
  70% {
    max-width: 50%;
    transform: rotate(45deg);
  }
  100% {
    max-width: 100%;
    transform: rotate(0deg);
  }
}
@keyframes zoomin {
  0% {
    max-width: 50%;
    transform: rotate(-30deg);
    filter: blur(4px);
  }
  30% {
    filter: blur(4px);
    transform: rotate(-80deg);
  }
  70% {
    max-width: 50%;
    transform: rotate(45deg);
  }
  100% {
    max-width: 100%;
    transform: rotate(0deg);
  }
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
    <?php include("../top-navigation.php"); ?>
    <!-- Navbar End -->


    <!-- About Mukul Agrawal Start -->
    <div class="container-xxl py-5">
        <div class="container">
		
		<div>
           <div><h1 align="center">Media Coverage</h1></div>
        </div>
		<br /><br />
		<div class="gallery" id="gallery">
        <div class="gallery-item">
            <div class="content"><img src="media/1.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="media/2.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="media/3.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="media/4.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="media/5.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="media/6.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="media/7.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="media/8.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="media/9.jpg" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="media/10.jpg" alt=""></div>
        </div>
		 <div class="gallery-item">
            <div class="content"><img src="media/11.jpg" alt=""></div>
        </div>
      
    </div>
   		
        </div>
    </div>
    
	
	
    
        

    <!-- Footer Start -->
 <?php include("footer.php"); ?>
    <!-- Footer End -->
	
	<script>
var gallery = document.querySelector('#gallery');
var getVal = function (elem, style) { return parseInt(window.getComputedStyle(elem).getPropertyValue(style)); };
var getHeight = function (item) { return item.querySelector('.content').getBoundingClientRect().height; };
var resizeAll = function () {
    var altura = getVal(gallery, 'grid-auto-rows');
    var gap = getVal(gallery, 'grid-row-gap');
    gallery.querySelectorAll('.gallery-item').forEach(function (item) {
        var el = item;
        el.style.gridRowEnd = "span " + Math.ceil((getHeight(item) + gap) / (altura + gap));
    });
};
gallery.querySelectorAll('img').forEach(function (item) {
    item.classList.add('byebye');
    if (item.complete) {
        console.log(item.src);
    }
    else {
        item.addEventListener('load', function () {
            var altura = getVal(gallery, 'grid-auto-rows');
            var gap = getVal(gallery, 'grid-row-gap');
            var gitem = item.parentElement.parentElement;
            gitem.style.gridRowEnd = "span " + Math.ceil((getHeight(gitem) + gap) / (altura + gap));
            item.classList.remove('byebye');
        });
    }
});
window.addEventListener('resize', resizeAll);
gallery.querySelectorAll('.gallery-item').forEach(function (item) {
    item.addEventListener('click', function () {        
        item.classList.toggle('full');        
    });
});

</script>



    


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