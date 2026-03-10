<?php
// 1. डेटाबेस कनेक्शन और सेशन शुरू करें
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con; // config.php के $con को $link में डाला ताकि पुराने कोड काम करें
session_start();

// Gzip Compression (Speed के लिए)
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start('ob_gzhandler');
else ob_start();

// 2. Includes (Functions और Pageview)
include("../DLL/functions.php");
include("../pageview.php");

// 3. ब्लॉग डेटा प्राप्त करें (ID: 1541)
$blog_id = 1541; // डिफाइन किया ताकि 'Undefined' वार्निंग न आए
$blogdetail = mysqli_query($link, "SELECT * FROM blog where id='$blog_id'");
$blogdetails = mysqli_fetch_array($blogdetail);

// अगर डेटा नहीं मिला तो ब्लॉग होम पर भेजें
if(!$blogdetails) {
    header("Location: https://www.finowings.com/blog/");
    exit();
}

// 4. वेरिएबल्स सेटअप
$title = $blogdetails['title'];
$cat = $blogdetails['cat_id'];
$cat_name = getCategoryName($cat);
$blogcat_name = str_replace(" ","-",$cat_name);
$cont = $blogdetails['content']; 
$img = $blogdetails['file'];

// Sidebar और Related Blogs के लिए
$catblog = getexploreBlog($cat, $blog_id);
$trendingblogs = gettrendingRightBlogs($blog_id);
$latestblogs = getlatestRightBlogs();

// तारीख सेटअप
$date = $blogdetails['updated_date'];
$datetime = explode(" ", $date);
$date_parts = explode("-", $datetime[0]);
$day = $date_parts[2]; $month = $date_parts[1]; $year = $date_parts[0];

// SEO और Pageview
$page_url = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$total_views = getPageViews($page_url);		
$me_keywords = $blogdetails['me_keywords'];
$me_desc = $blogdetails['me_desc'];
$spotify_link = $blogdetails['spotify_link'];
$schema_markup = $blogdetails['schema_markup'];

// FAQs के वेरिएबल्स (Loop के लिए आसान बनाया)
$faqs = [];
for($i=1; $i<=10; $i++) {
    $q_key = ($i == 7) ? "faq7" : "faq$i"; // आपके डेटाबेस में faq7 या faq8 का गैप हो सकता है
    $a_key = ($i == 7) ? "ans7" : "ans$i";
    if(!empty($blogdetails[$q_key])) {
        $faqs[] = ['q' => $blogdetails[$q_key], 'a' => $blogdetails[$a_key]];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="<?php echo $me_keywords; ?>" name="keywords">
    <meta content="<?php echo $me_desc; ?>" name="description">
    <link rel="canonical" href="<?php echo $page_url; ?>" />

    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:description" content="<?php echo $me_desc; ?>" />
    <meta property="og:image" content="https://www.finowings.com/admin/media/<?php echo $img; ?>" />
    <meta property="og:url" content="<?php echo $page_url; ?>">

    <link rel="icon" type="image/png" href="/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/new-css.css" rel="stylesheet">

    <?php if(!empty($schema_markup)) echo $schema_markup; ?>

    <style>
        .blog-content img { max-width: 100%; height: auto; border-radius: 8px; margin: 20px 0; }
        .accordion-button:not(.collapsed) { background-color: #273158; color: white; }
        .rightsidebar { position: sticky; top: 80px; }
        #postcomment { background: #e9f9ff; padding: 30px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
    </style>
</head>

<body>
    <?php include("../top-navigation.php"); ?>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-9">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/blog/">Blog</a></li>
                        <li class="breadcrumb-item active"><?php echo $title; ?></li>
                    </ol>
                </nav>

                <h1 class="mb-3"><?php echo $title; ?></h1>
                
                <div class="d-flex mb-4">
                    <span class="badge bg-primary me-2 p-2"><?php echo $cat_name; ?></span>
                    <span class="badge bg-light text-dark me-2 p-2"><?php echo "$day.$month.$year"; ?></span>
                    <span class="badge bg-light text-dark p-2"><i class="fa fa-eye me-1"></i><?php echo $total_views; ?></span>
                </div>

                <div class="blog-content" style="font-size: 18px; line-height: 1.8; text-align: justify;">
                    <img src="https://www.finowings.com/admin/media/stock-market-holidays.webp" alt="Stock Market Holidays" class="img-fluid w-100 shadow">
                    
                    <?php echo $cont; ?>
                </div>

                <?php if(!empty($spotify_link)): ?>
                    <div class="mt-5 p-4 bg-light border-start border-primary border-4">
                        <h5 class="mb-3"><i class="fa fa-podcast me-2"></i>Listen to this Podcast:</h5>
                        <?php echo $spotify_link; ?>
                    </div>
                <?php endif; ?>

                <?php if(count($faqs) > 0): ?>
                <div class="mt-5">
                    <h3 class="mb-4">Frequently Asked Questions</h3>
                    <div class="accordion" id="faqAccordion">
                        <?php foreach($faqs as $index => $faq): ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button <?php echo ($index > 0) ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faq<?php echo $index; ?>">
                                        <strong><?php echo $faq['q']; ?></strong>
                                    </button>
                                </h2>
                                <div id="faq<?php echo $index; ?>" class="accordion-collapse collapse <?php echo ($index == 0) ? 'show' : ''; ?>" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <?php echo $faq['a']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

                <div id="postcomment" class="mt-5">
                    <h4 class="mb-4 text-center">Post Your Thoughts</h4>
                    <form method="post" action="">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email ID</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label">Your Comment</label>
                                <textarea name="description" class="form-control" rows="5" placeholder="Write your suggestion or question here..." required></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" name="submit" class="btn btn-primary px-5 py-2 rounded-pill">Submit Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="rightsidebar">
                    <h4 class="section-title bg-white text-start text-primary px-3 mb-4">Trending</h4>
                    <?php while($r = mysqli_fetch_array($trendingblogs)): ?>
                        <div class="d-flex mb-3 align-items-center bg-white p-2 shadow-sm rounded">
                            <img src="../admin/media/<?php echo $r['file']; ?>" class="img-fluid rounded" style="width: 70px; height: 50px; object-fit: cover;">
                            <div class="ps-3">
                                <a href="/blog/<?php echo $r['blog_url']; ?>" class="text-dark fw-bold" style="font-size: 13px; text-decoration: none;"><?php echo substr($r['title'], 0, 45); ?>...</a>
                            </div>
                        </div>
                    <?php endwhile; ?>

                    <div class="mt-5 text-center p-3 bg-light rounded shadow-sm border">
                        <h6>Open Demat Account</h6>
                        <a href="https://www.finowings.com/zerodhaclicks.php" target="_blank" class="btn btn-sm btn-outline-primary mt-2">Zerodha</a>
                        <a href="https://www.finowings.com/angeloneclicks.php" target="_blank" class="btn btn-sm btn-outline-primary mt-2">Angel One</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("../footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>