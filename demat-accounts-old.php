<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Demat Account</title>
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
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	
	<!--Bootstrap code-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!--Bootstrap code-->

<style>

/* Float four columns side by side */
.column {
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }

}
.card {
  background-color: #fff;
  max-width: 360px;
  display: inline-block;
  flex-direction: column;
  overflow: hidden;
  border-radius: 2rem;
  box-shadow: 0px 1rem 1.5rem rgba(0,0,0,0.5);
  margin: 20px;
}
.card .banner {
  background-image: url("../img/demat-bg.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 11rem;
  display: flex;
  align-items: flex-end;
  justify-content: center;
  box-sizing: border-box;
}
.card .banner svg {
  background-color: #fff;
  width: 8rem;
  height: 8rem;
  box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.3);
  border-radius: 50%;
  transform: translateY(50%);
  transition: transform 200ms cubic-bezier(0.18, 0.89, 0.32, 1.28);
}
.card .banner svg:hover {
  transform: translateY(50%) scale(1.3);
}
.card .menu {
  width: 100%;
  height: 5.5rem;
  padding: 1rem;
  display: flex;
  align-items: flex-start;
  justify-content: flex-end;
  position: relative;
  box-sizing: border-box;
}
.card .menu .opener {
  width: 2.5rem;
  height: 2.5rem;
  position: relative;
  border-radius: 50%;
  transition: background-color 100ms ease-in-out;
}
.card .menu .opener:hover {
  background-color: #f2f2f2;
}
.card .menu .opener span {
  background-color: #404040;
  width: 0.4rem;
  height: 0.4rem;
  position: absolute;
  top: 0;
  left: calc(50% - 0.2rem);
  border-radius: 50%;
}
.card .menu .opener span:nth-child(1) {
  top: 0.45rem;
}
.card .menu .opener span:nth-child(2) {
  top: 1.05rem;
}
.card .menu .opener span:nth-child(3) {
  top: 1.65rem;
}
.card h2.name {
  text-align: center;
  padding: 0 2rem 0.5rem;
  margin: 0;
}
.card .title {
  color: #a0a0a0;
  font-size: 0.85rem;
  text-align: center;
  padding: 0 2rem 1.2rem;
}
.card .actions {
  padding: 0 2rem 1.2rem;
  display: flex;
  flex-direction: column;
  order: 99;
}
.card .actions .follow-info {
  padding: 0 0 1rem;
  display: flex;
}
.card .actions .follow-info h2 {
  text-align: center;
  width: 50%;
  margin: 0;
  box-sizing: border-box;
}
.card .actions .follow-info h2 a {
  text-decoration: none;
  padding: 0.8rem;
  display: flex;
  flex-direction: column;
  border-radius: 0.8rem;
  transition: background-color 100ms ease-in-out;
}
.card .actions .follow-info h2 a span {
  color: #1c9eff;
  font-weight: bold;
  transform-origin: bottom;
  transform: scaleY(1.3);
  transition: color 100ms ease-in-out;
}
.card .actions .follow-info h2 a small {
  color: #afafaf;
  font-size: 0.85rem;
  font-weight: normal;
}
.card .actions .follow-info h2 a:hover {
  background-color: #f2f2f2;
}
.card .actions .follow-info h2 a:hover span {
  color: #007ad6;
}
.card .actions .follow-btn button {
  color: #FFFFFF;
  font: inherit;
  font-weight: bold;
  background-color: #273158;
  width: 100%;
  border: none;
  padding: 1rem;
  outline: none;
  box-sizing: border-box;
  border-radius: 1.5rem/50%;
  transition: background-color 100ms ease-in-out, transform 200ms cubic-bezier(0.18, 0.89, 0.32, 1.28);
}
.card .actions .follow-btn button:hover {
  background-color: #cf9c0a;
  transform: scale(1.1);
}
.card .actions .follow-btn button:active {
  background-color: #cf9c0a;
  transform: scale(1);
}
.card .desc {
  text-align: justify;
  padding: 0 2rem 2.5rem;
  order: 100;
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
    <?php include("top-navigation.php"); ?>
    <!-- Navbar End -->


    <!-- Header Start -->
     <!--<div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Privacy Policy</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            
                            <li class="breadcrumb-item text-white active" aria-current="page">Privacy Policy</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
	

<div align="center" style="width:100%;">

<div class="card">
  <div class="banner">
  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="128px" height="128px" viewBox="0 0 128 128" enable-background="new 0 0 128 128" xml:space="preserve">  <image id="image0" width="128" height="128" x="0" y="0"
    href="data:image/png;base64,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" />
</svg>
  </div>
  <div class="menu">
    <div class="opener"><span></span><span></span><span></span></div>
  </div>
  <h2 class="name">Zerodha</h2>
  <div class="title">Discount Broker</div>
  <div class="actions">
    <div class="follow-info">
      <h2><a href="#"><span>9.2M+</span><small>Total users</small></a></h2>
      <h2><a href="#"><span>6.1M+</span><small>Active Users</small></a></h2>
    </div>
    <div class="follow-btn">
      <button><a href="https://zerodha.com/open-account?c=ZMPZCV" target="_blank" style="color:#FFFFFF; text-decoration:none;">Open Instant Account</a></button>
    </div>
  </div>
  <div class="desc">Zerodha is India's No. 1 stockbroker. It is largest and most popular broker offering online flat fee... <a href="https://zerodha.com/open-account?c=ZMPZCV" target="_blank"> Read More</a></div>
</div>

<div class="card">
  <div class="banner">
 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="128px" height="128px" viewBox="0 0 128 128" enable-background="new 0 0 128 128" xml:space="preserve">  <image id="image0" width="128" height="128" x="0" y="0"
    href="data:image/png;base64,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
MDI6MDASHjiNAAAAAElFTkSuQmCC" />
</svg>

  </div>
  <div class="menu">
    <div class="opener"><span></span><span></span><span></span></div>
  </div>
  <h2 class="name">Upstox</h2>
  <div class="title">Discount Broker</div>
  <div class="actions">
    <div class="follow-info">
      <h2><a href="#"><span>10.3M+</span><small>Total Users</small></a></h2>
      <h2><a href="#"><span>5.4M+</span><small>Active Users</small></a></h2>
    </div>
    <div class="follow-btn">
      <button><a href="https://upstox.com/open-demat-account/?f=3SASCR" target="_blank" style="color:#FFFFFF; text-decoration:none;">Open Instant Account</a></button>
    </div>
  </div>
  <div class="desc">Upstox is a tech-first low cost broking firm in India providing trading opportunities at unbeatable...<a href="https://upstox.com/open-demat-account/?f=3SASCR" target="_blank"> Read More</a></div>
</div>
<div class="card">
  <div class="banner">
   <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="128px" height="128px" viewBox="0 0 128 128" enable-background="new 0 0 128 128" xml:space="preserve">  <image id="image0" width="128" height="128" x="0" y="0"
    href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QA/wD/AP+gvaeTAAAA
CXBIWXMAAEzlAABM5QF1zvCVAAAUKklEQVR42u2dd3gU1drAf7ub3U0jld4SmqggoED4RAUFAS8o
XkBEEZWmqCiWe1VUEFG4otdPwU8QBewgNgQFLCBio1fp0iK9JZSElG3z/fHuJpvNbrKb7Gayyfye
Z55MdmbOnHPed97znq5TFAWN6ote7QhoqEuE2hEIEfWB1kBTIBVIAeoCyc4jCjACsc77swErkAtk
OI8TwN9AOnAA2A4cUzthwUZXBYqAeOBa4Grgf4B2iJBDQQawBVgDrAZWAWfVzoDyEI4KoAPaA/9w
HmmAQaW42IF1wHfOYyMQVhkaTgpwFXAncBti1isj6cCXwKfAJrUj4w+VXQHigLuAkYgChBObgVnA
POC82pHxRWVVgBTgMWAEUEPtyJSTLGAOMBVxKisVlU0BmgITgMFUvRqKDbEGE5FaRaWgsihAPSRj
hiLVs6qMDXgfUfTjakdGbQUwAU8CYymsk1cXsoEpwGtAvlqRUFMBrgfeAS5RKwKVhL3A/cBKNV6u
RlNwHDAbWIEmfIAWSF7MRvKmQqloC9AZmEvlrcerTTowBPijol5YURZAD4wHfkETfkmkInk0ngqS
TUVYgATgE6BPRSSoCrEEsQbnQvmSUCtAS2dCmoXyJVWY/cDNwO5QvSCUZuY6pLdME37ZaYbk4Q2h
ekGoFKAfsAxIClXEqxGJSE9jv1AEHgoFGAJ8AZhDmCnVDTOSp0OCHXCwFWA48CHq9c9XZQxI3g4P
ZqDBdAIHIXV8TfihxY5YgvnBCCxYCtAXMVEm9fKlWmEBBgLflDegYChAJ6QpM1rtXKlm5ADdgLXl
CaS8CtAQGRNXT+3cqKacADoCR8oaQHmcQBOwAE34alIXkUGZa1zlUYAZiPZpqEtHYHpZHy5rETAE
+FjtlGsU4W6kzyUgyqIATZDJERXed61RIheAKwlwvGGgRYAB0TJN+JWPOMQqB9QOE6gCPIQM6tCo
nHQGRgfyQCBFQGNgB9Vv8Ga4kY1MjPVrDkIgFmAamvDDgVhkEopf+GsBbkBa+zTCh+74ITN/FECP
eP1XqJ0ijYDYDrQFHCXd5E8RMBhN+OFIa0R2JVKaBYgAdiJj1zXCj33AZch0NK+UZgHuQhN+ONMc
WVPBJyVZAB1S7btM7VRolIudSHHgVdAlWYCeaMKvClyOyNIrJSnAo2rHXCNo+JSlryIgBelU0NYR
rBo4kMU3irUO+hLwcDThVyX0yHI7xfBmAXTIlKQmasdaI6gcRGYaFRG4t6+8I5rwqyJN8DKCy5sC
DFI7phoho5hsvRUBe5EGBI2qx348ZOtpAZqhCb8q0wyP2dqeCtBb7RhqhJwiMvZUgK5qx04j5BSR
sacPcByZbKBRdTmB22QedwvQHE341YG6uPkB7goQ8GrcufZ8juSeVjtBGoFTIGt3BWgTaCh3r5vM
M9veQQnBHglWG2RdVCd3wh7FAbnnwJor59Y8zzvauk7cV+QOaNjXusxdLD66CjsORjXty7U1A9af
EnniVThxBj76D0RFVnAGlhFFgcMnwGCABrV93JCxH9JXgcEERjOkXgOxtQN+V4no9JB9EiIT4Pg2
sF6EVre631Ega3cFCGjkz48n1hMdIZIZuu5l9vaehw5dUOK/ZTf8thHy8mHtn3B9WnDzJ1Rs2gmD
n4LoSPjpPUiKd7t4Zh/8MB42fC4abYgESxbYFOjxJFw/FiKDOOEqMh4MEdCgHRzb4nm1YIleVxGg
I8D2/wdb9CPLYQUgw3KBxcdWBSXeigLf/SZ/zSZ48vXg5UmoOZkBej1Y7ZDrbnVzz8Eb7WHLUhi9
DJ5NhxdOwFO7YdC7sPRlWDJWzHWwiE4SJYhKgIbFugCaIDIvUIB6QECGNtlYg/kdniZPsaFDxxNb
p3POkl3ueFttMP87OVcUOJ8FuyrN9golo3P3qAqMoQK/vA42Czy9AZp3g9haYDBCclNIGwajFsHK
t+FsEDcUMZhAHyFHVLznVTPOqqAryvX9Dvjg77DoKZTF4+l5ZBdd63YC4FhuBpN3lX/G+ILlYLGK
8JPiIdIEHy4MLAy7Axx+fEyKAnZ7YGFbbf7dV+AW52TCmtnQohvU9FHKXtYHmlwJP0z0HVGHzT8L
YcuTo3QaQKEP4P8+ew3bw+vXodNBzL/XMCWhDl1OrCdSb2TG/oXck9qLK+KbBparTuwOmDhdiq4+
XWBATxj6nPgE57IgwcvuQbsOwFc/QmwM3PEP+OZnWLkedDq48lLodyM0a1T0mXyLWJmNu+B0Blze
DO7pC+u3w96/oWYi3Hdb4f0WKyz+RfySQ8ehUV1oWBdG9IdEX8W2ywKcPwaZx2HQLN8J1+tFQX75
X7jzA7hwDJZPhh7jYf9K+GM6ZJ+WL7ndIOg8GiI8FgXZ/T1sngt/rQC7DVp2gza3w+U3i7UpTpK7
AtTyW0rGKLj3Azi8EX3jTrQFhjfry+x9CzHrjYzZ/Cbfd/kvZn3gO79s2A4RRik/h/eHWolQMwGO
nIK/0iHNSz3lyEl4fyEYI+CndbDnAJiMYLPBll0wbyksmQH1nCnMs8DoSbBmK1itYDKJ8/blMoiN
gtOZcu/IAaJEF7Jh9EuwfqdYFZMRtu8DU4QoxZwXiytYUUXQySY4OZm+71EUURQXFzNhxQw4vB5O
/QWdRkJ0Auz5Eb78F+z+DkYsLRTstq/h3f7Qqgdc+7Aox58LYE5/6PE09Jni7a213RWg9J25cjJh
xyIw14AadeCqwfDnlwCMi27BtAgjCQ6FDWd389uZP7mxdvuAhG93yJes10GbltCkIRj00DwFMs/D
y7Pg6zeLPxdhgEiz/D2TCa88AUlx8Nsm+HSJmOwR42HpTLn/8+9F+AY93Hwj9LoGcvJgxnw4fFwc
dLOJgi/4jY9g8x6IjRaluKyJVPWmfgIZZ2HYOPj1w1ISp8NbXdxTC4oqjQHIOgXP7oUYp/Z2f1as
wVdjxDJc0gPOHYKPh0DXB2DAW6BzLg/Q9XFY/DQsewW6jRVnsCixUOgDlD7rV6+Hz0bCewPh3FGo
URfeHQjvDCTZHMeUK+7Hrjgw6iLo/etTZNtyA1KA46dg8a9y/tAdIlCdDh68XUz21r/gYAlrYRn0
MOlh6NcdunaEcaOgQ2tn2KchO0c+tBdnSthtL4XJY6BbJ7i5K8x9BfKtRWV2PqvQ/3h6BDxwu4Q9
5BZ4f5Io18kzsH2vHwksSw25/1uFwgfxMjsOkyGeRzfLbzuXQm4O9H2tUPiuF3Z5HGJiYecSb6HX
cFeA0leViEyAUT9CXE3oNAKSUuHWidBlODTqyEMNu5MSWx8dEGkw8dy2WaUG6c6Cn0TgUWZo47aR
TPtWUs7GRMKbc30/r9dDW49ZDL27iJOn04npP30WIvRgs4uiRLi1giTGQVrros7jjn1SRNjt0KGV
/OZwgEOBK1qIT2I2id8RdAxAnJcF2MyxMtEr74L8f+EYRBrAFFP83rh6kNwMjm/2mmXgz958dguc
3CnViehEGPoVnN4Ddqt4r/lZcHIHsfoIpjUfRK/Nr1JDb2buoeXcndqLDoktS32FosBb88Tjb9oI
anusMf7MffDMVPhtA5w5K06atzAslqK/RRiKnufb5avV66FuzeJhJMaJsri+1sMn5Dm9Hp78rwhb
p5N3oZP6vuu+Ugm0iq/Dl/PmTJDz2oVj0vS46DGw5TsT4MQYBacPQdJBbyEYwC8FsMJ7A+DsAeg4
Anq/BM/VF/3pMwGSm8P0GyAynuteOEqnQ63ZlrkHHQpPbn2bFde/UWoL4dwl4lTlW8X7tljFJ3Dl
w5WXyZdntcOSX8Vj1/lhUj1Huyluv5u8pLwgTOeNRqOc6nSw/4j4J+73mI1isZISSomEHYhJpEQM
xqLjdRUvCfCWOIMJbFa4eBosHsWu4oA2faBRB6+ShUIF8F0bNsVA7xdh7nDo+wpEJ8Otk+GPGdDz
BVDs8N0E6P0SEaYY5ncaR8flD5Bny2Vtxk5mHVjM/U1v8Rl8vlUcM4PzSxv/fyJs97Tr9U7HDGkn
GNxHvP5AcDhEZ11fdMY5L3GxFH1vixSpKTgc4oDWSZLiw0WkWSyKuaQVkl2C1ZU0zUIHMckQEUBb
nCuisbXAHAOD5/r/rDNLoNAHKN6EpzikQcFugdb/hGGfifDtFkgbCiO/lcYJnQHu+RQu7QV2C/WN
cTyS0gu7YifKYObxzW+RabngMxbpR+HYqcI0nc+GCxchK6fwOJ9d2GCz5yDsPkjA2O2QGC8CNOjh
h1XFr/++WZTDRUp9uV+vF2cvMR5qJRUeefnS7h8T5cqzwr8FwSQ0hEbtYNlE35FTHLDxU+g+1iOg
EnAVD9FJkkE+E27xdSXLXQGyil3Oz4ZP7oA3O8Gc3tC0C4xPhGlpsGkuWC7ClBbwQh2w5sCad2Fq
R3Tv9ODRZv2INUbjQMFsMPL6X5/j8GHO5i0RK+BwwJQn4NvpsHhG0WPp2/D282BzyNc2ZnLgCqAg
VmPoPyWcn1ZLjWD3Adi4Ex56qaijrgBxMXBnH1GYiTNh+Wo4d0H8kNVboPtwqQbanK2DeoMosV4P
u/Y7izFTLHR9FI5sh21feY/cipfhwkno+oT/CuDKz0t6gFEPq2cWv+dsOkzrJD5ccbKhsAgoPqoj
Mg463Asz+8Ojy0XT2t4BK2bCsEWQ2Bgyj0FkLKRcDcZo+PZ5uGYk0dHJLOj8EtesGE2MIYopu+cx
sOH1tE0oOuDYVc2KjYGmDaF7JzGr3mhcD5LjxXQfPwP7D0sDjMMhGW13eufuOJTCa648/fcw2Lob
du6H+Uvl0CH31EoU61MgAx38615poDp0HB75D8TXkLzPPC9+xOmzhe9rVAcsNqldjJoIS96GlqnA
VUNg7WyYcxvcNA5adIeazeHwBmlLWTcXBs0QD98l3JKaqN2v1bkcbpkE8x+UruaWN0n38uF18M0z
0hWcmOotlFPuCpDh9UWt+0HaAEh1Lg3Y83mofwUkpsj/z+6B84el5alxGtwwpqDVqWPipTzSfAAr
Tm0k325h0s6P+aJzUTP4+2ZoUAeio2DQTb6F7+L5B2HCW1AjBjbsEAWINEOdZIiPKf58zQQRakIN
qc6BOG0fTYGvl8PKdZCTL1/6U8Nh1lfwrUeVLikePnkF3vkMVqyFExki4NYtoFuaWBRXdbJlKjx2
NyxbJYoa6fIN9BEwajmsmQU/vyqHzSLjAZKbwbDPoc0ACmyQMRrqtQCjD5+gdmLRMQTdxoIlB9Z/
KM3JDgVMUZA2QtoCTF5X8s+EwkGh9YGjXl+mOEpxYJTCiCtKEffcptjJc5ZBCgo1IopGJN9aWLZH
msXLLglFkVY7vU6cRpNRvlyLRaIQ5aEADofU/3X4HlTiHuVrh4jP0bieFEWenMuScj/fCvVqyvu9
kZcvuRJp8lJbsVvENOech/j60qCm92yGUcBhF//KW3XH4cw0z+dseXByl1xPbipW2zcNgGMuBdAB
uVSTjZ7che7qcp7/PUxzdmZOGgMDeqgdy5CSD0QBiqsIUJD1AKrFiiC5+fDARLEKVivsPSSdQAaD
fP1VXPggexQrULQhaC/VRAGiI6FVc5j5mZhxvR5ioqFfN7hvoNqxqxD2uE7cFWAbsvlTteCRweJE
2mxQpya0bg41k8rWZxOGbHOdRHj7sToQHQW39Sx/OGHKn64Td/d+o9qx0qgwNrlOtLmB1Q+fcwMB
/lA7dhohp0gviKcC/KJ27DRCzkr3fzyLgGbIAsMaVZcWuMnY0wLsdx4aVZP9eHzg3hr5F6kdS42Q
UUy23hTgM7VjqREyPvf8QVsptPqQjqwXXOpKoQpl2IJUo9LzMV6GGmmrhVcPHEgNL93zgi8B/w38
oHasNYLGj3gRPpT8hU9TO9YaQWOqrwul7Rm0HdlyRCN8KfOeQQrwqtqx1yg3r1HCOHN/9g3chbaA
dLhS7n0DbcBENMKViZQgfPB/7+CtSDmiET5sB9pR8hQTv+r5DrQt5MKRxyhF+OB/Q88KYKHaKdLw
m4XAT/7c6E8R4CIFMSulLyejoSbZSHHt16KDgTT1/g08p3bqNErlOfwUPgRmAUCWFfkV6Kx2KjW8
sgrogh9lv4tAFQCkS3EzEMSVjTWCQBbi9Qe0sG5ZevsOAA+rnVqNYowmQOFD2bt7PwbmqJ1ijQLe
Q2QSMGUpAlyYgd+BDmUNQCMobACuRaZ8B0x5FACgoTMCddTOhWrKKaA9cKSsAZR3xM8R4FYgR+2c
qIbkILO5yyx8CM6Qr7XAnYC1vAFp+I0VyfO15Q0oWGP+vgHuIYD6p0aZsSN5/U0wAgvmoM/5wP0E
viquhv84kDyeH6wAy+sEemMI8AH+rECuEQh2YBhlrO75IhQKANAP+JRqsupYBWBByvwFwQ44VAoA
0ib9Nc69aTTKzDmgPxCKXQlCqgAAlwKLcdusWCMgDiBVvR2hekGoZ/7sBjoCS0P8nqrIUqSVNWTC
h4qZ+nUWuAV4Aa2a6A92JK9uQfIupIS6CPDkGmTiaWpFvjSMSEdqURW2VlNFT/78A9m6fA5+LYpf
bVCQHr22VPBCXRVtAdy5AXgXbdLJPqRxJyRefmmoOf37Z6ANMA5vW9ZUfbKdaW+DSsIHdS2AO/WQ
WSzD8Gcns/DGBrwPTEAW5lSVyqIALpoiGTOYqqcINmAe8CKVaCW2yqYALlKQmS0j8Gdf48pNFuL0
TiWA4doVRWVVABfxwF3AfciI13BiCzAbqfaeVzsyvqjsCuDOVUiHyEDEQlRG/ga+QDrCNpUzrAoh
nBSgIM5AGtAHuAkZE6dWbcaBLLP/PbAEWEeYtW+EowJ4kgRc7Xa0I3Q9kJmIaV/tdmSqnQHloSoo
gDcaAK2QWkUqUmTUBZKdRxRgAlx7rl9E+txzkT0UM4CTSNNsOtIrtwNfW+uFMVVVATT85P8BOpw9
Vnaf2QsAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjItMDctMjVUMDU6MDA6MjQrMDA6MDBt0vmVAAAA
JXRFWHRkYXRlOm1vZGlmeQAyMDIyLTA3LTI1VDA1OjAwOjI0KzAwOjAwHI9BKQAAAABJRU5ErkJg
gg==" />
</svg>

  </div>
  <div class="menu">
    <div class="opener"><span></span><span></span><span></span></div>
  </div>
  <h2 class="name">Angel One</h2>
  <div class="title">Full service Broker</div>
  <div class="actions">
    <div class="follow-info">
      <h2><a href="#"><span>6.15M+</span><small>Total Users</small></a></h2>
      <h2><a href="#"><span>3.6M+</span><small>Active Users</small></a></h2>
    </div>
    <div class="follow-btn">
      <button><a href="https://tinyurl.com/yje5cedl" target="_blank" style="color:#FFFFFF; text-decoration:none;">Open Instant Account</a></button>
    </div>
  </div>
  <div class="desc">Angel One Limited, formerly known as Angel Broking Limited, is an Indian stockbroker firm...<a href="https://tinyurl.com/yje5cedl" target="_blank"> Read More</a></div>
</div>
</div>        

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