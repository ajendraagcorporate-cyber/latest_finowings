<?php
// ============================================================
// FINOWINGS - All Functions File
// ============================================================
// पहले config.php load करो ताकि DB credentials एक जगह रहें
// Hostinger migrate: सिर्फ config.php बदलना है, यहाँ कुछ नहीं
// ============================================================
require_once __DIR__ . '/config.php';
// config.php से $con global connection मिलता है

// ============================================================
// Helper: एक central connection function
// ============================================================
function getDB() {
    global $con;
    return $con;
}

// ============================================================
// HOME PAGE FUNCTIONS
// ============================================================

function getSliderFI()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM home_slider order by updated_date desc limit 0,1");
    $r = mysqli_fetch_array($q);
    return $r;
}

function getSliderAI()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM home_slider order by updated_date desc limit 1,4");
    return $q;
}

function getClients()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT clients FROM cwws");
    $r = mysqli_fetch_array($q);
    return $r;
}

function getWorkshops()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT workshops FROM cwws");
    $r = mysqli_fetch_array($q);
    return $r;
}

function getWebinars()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT webinar FROM cwws");
    $r = mysqli_fetch_array($q);
    return $r;
}

function getStudents()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT students FROM cwws");
    $r = mysqli_fetch_array($q);
    return $r;
}

function getupcomingWebinar()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM webinar");
    $r = mysqli_fetch_array($q);
    return $r;
}

function getFeaturedin()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM featured_in order by id asc");
    return $q;
}

// ============================================================
// FREE STUDY / ACADEMY FUNCTIONS
// ============================================================

function getfreestudyIntro()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT title FROM freestudy");
    $r = mysqli_fetch_array($q);
    $re = $r['title'];
    return $re;
}

function getfreestudyTopic()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM freestudytopic order by id asc limit 0,6");
    return $q;
}

// ============================================================
// TESTIMONIAL FUNCTIONS
// ============================================================

function getTestimonials1()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM testimonial order by id asc limit 0,5");
    return $q;
}

function getTestimonials2()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM testimonial order by id asc limit 5,5");
    return $q;
}

// ============================================================
// CHAPTER FUNCTIONS
// ============================================================

function getChaptersF($i)
{
    $link = getDB();
    $i = mysqli_real_escape_string($link, $i);
    $q = mysqli_query($link, "SELECT * FROM freestudychapter where topic_id='$i'");
    return $q;
}

function getChaptersS($i)
{
    $link = getDB();
    $i = mysqli_real_escape_string($link, $i);
    $q = mysqli_query($link, "SELECT * FROM freestudychapter where topic_id='$i' limit 4,4");
    return $q;
}

function getChaptersT($i)
{
    $link = getDB();
    $i = mysqli_real_escape_string($link, $i);
    $q = mysqli_query($link, "SELECT * FROM freestudychapter where topic_id='$i' limit 8,4");
    return $q;
}

function getChapters4($i)
{
    $link = getDB();
    $i = mysqli_real_escape_string($link, $i);
    $q = mysqli_query($link, "SELECT * FROM freestudychapter where topic_id='$i' limit 12,4");
    return $q;
}

function getChapters5($i)
{
    $link = getDB();
    $i = mysqli_real_escape_string($link, $i);
    $q = mysqli_query($link, "SELECT * FROM freestudychapter where topic_id='$i' limit 16,4");
    return $q;
}

function getTopicname($i)
{
    $link = getDB();
    $i = mysqli_real_escape_string($link, $i);
    $q = mysqli_query($link, "SELECT topic FROM freestudytopic where id='$i'");
    $r = mysqli_fetch_array($q);
    
    return ($r && isset($r['topic'])) ? $r['topic'] : "General";
}

// ============================================================
// ABOUT MUKUL SIR FUNCTIONS
// ============================================================

function getaboutMukulShort()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM aboutmukulsir");
    $r = mysqli_fetch_array($q);
    $about_mukul_short = $r['short_desc'];
    return $about_mukul_short;
}

function getaboutMukul()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM aboutmukulsir");
    $r = mysqli_fetch_array($q);
    $about_mukul = $r['descr'];
    return $about_mukul;
}

function getmukulImage()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM aboutmukulsir");
    $r = mysqli_fetch_array($q);
    $mukul_image = $r['image1'];
    return $mukul_image;
}

// ============================================================
// VISION / ABOUT FINOWINGS FUNCTIONS
// ============================================================

function getVision()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM vision");
    $r = mysqli_fetch_array($q);
    return $r;
}

function getFinowings()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM aboutfinowings");
    return $q;
}

// ============================================================
// BLOG FUNCTIONS
// ============================================================

function getblogsliderPost1()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM blog where is_publish='Yes' order by created_date desc limit 0,1");
    return $q;
}

function getblogsliderPosts()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM blog where is_publish='Yes' order by created_date desc limit 1,2");
    return $q;
}

function getCategoryName($i)
{
    $link = getDB();
    $i = mysqli_real_escape_string($link, $i);
    $q = mysqli_query($link, "SELECT * FROM blog_category where id='$i'");
    $r = mysqli_fetch_array($q);
    
   return ($r && isset($r['cat_name'])) ? $r['cat_name'] : "Uncategorized";
}

function getallCategory()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM blog_category order by id asc");
    return $q;
}

function gettrendingBlogs()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM blog where is_publish='Yes' order by created_date desc limit 3,6");
    return $q;
}

function getsearchedBlogs($i)
{
    $link = getDB();
    $i = mysqli_real_escape_string($link, $i);
    $q = mysqli_query($link, "SELECT * FROM blog where (title like '%$i%' or short_desc like '%$i%' or content like '%$i%') and (is_publish='Yes') order by created_date desc");
    return $q;
}

function getacademysearch($i)
{
    $link = getDB();
    $i = mysqli_real_escape_string($link, $i);
    $q = mysqli_query($link, "SELECT * FROM freestudychapter where (chapter_name like '%$i%' or content like '%$i%') order by created_date desc");
    return $q;
}

function getblogDetails($i)
{
    $link = getDB();
    $i = mysqli_real_escape_string($link, $i);
    $q = mysqli_query($link, "SELECT * FROM blog where id='$i'");
    return $q;
}

function getblogDetailsB($i)
{
    $link = getDB();
    $i = mysqli_real_escape_string($link, $i);
    $q = mysqli_query($link, "SELECT * FROM blog where blog_url='$i'");
    return $q;
}

function getchapterDetails($i)
{
    $link = getDB();
    $i = mysqli_real_escape_string($link, $i);
    $q = mysqli_query($link, "SELECT * FROM freestudychapter where id='$i'");
    return $q;
}

function getcategoryBlog($i)
{
    $link = getDB();
    $i = mysqli_real_escape_string($link, $i);
    $q = mysqli_query($link, "SELECT * FROM blog where cat_id='$i' and is_publish='Yes' order by id desc");
    return $q;
}

function getexploreBlog($i, $j)
{
    $link = getDB();
    $i = mysqli_real_escape_string($link, $i);
    $j = mysqli_real_escape_string($link, $j);
    $q = mysqli_query($link, "SELECT * FROM blog where cat_id='$i' and id != '$j' and is_publish='Yes' order by updated_date desc limit 0,6");
    return $q;
}

function gettrendingRightBlogs($i)
{
    $link = getDB();
    $i = mysqli_real_escape_string($link, $i);
    $q = mysqli_query($link, "SELECT * FROM blog where id != '$i' and is_publish='Yes' order by created_date desc limit 1,4");
    return $q;
}

function getlatestRightBlogs()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM blog where cat_id='6' and is_publish='Yes' order by updated_date desc limit 0,4");
    return $q;
}

function gethomepageBlogs()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM blog where is_publish='Yes' order by created_date desc limit 0,3");
    return $q;
}

// ============================================================
// COURSE FUNCTIONS
// ============================================================

function getCourse($i)
{
    $link = getDB();
    $i = mysqli_real_escape_string($link, $i);
    $q = mysqli_query($link, "SELECT * FROM courses where id='$i'");
    $r = mysqli_fetch_array($q);
    return $r;
}

// ============================================================
// CHAPTER NAVIGATION FUNCTIONS
// ============================================================

function getnextChapters($i, $j)
{
    $link = getDB();
    $i = mysqli_real_escape_string($link, $i);
    $j = mysqli_real_escape_string($link, $j);
    $q = mysqli_query($link, "SELECT * FROM freestudychapter where topic_id='$i' and id > '$j' order by id asc");
    return $q;
}

function getnextChaptersCount($i, $j)
{
    $link = getDB();
    $i = mysqli_real_escape_string($link, $i);
    $j = mysqli_real_escape_string($link, $j);
    $q = mysqli_query($link, "SELECT count(*) as countt FROM freestudychapter where topic_id='$i' and id > '$j' order by id asc");
    $r = mysqli_fetch_array($q);
    $countt = $r['countt'];
    return $countt;
}

// ============================================================
// PAGE VIEWS FUNCTION
// ============================================================

function getPageViews($i)
{
    $link = getDB();
    $i = mysqli_real_escape_string($link, $i);
    $q = mysqli_query($link, "SELECT totalview FROM pageview where pageurl='$i'");
    $r = mysqli_fetch_array($q);

    return ($r && isset($r['totalview'])) ? $r['totalview'] : "0";
}

// ============================================================
// QUIZ FUNCTIONS
// ============================================================

function getChapterQuiz($i)
{
    $link = getDB();
    $i = mysqli_real_escape_string($link, $i);
    $q = mysqli_query($link, "SELECT * FROM chapter_quiz_master where chapter_id='$i' order by id asc");
    return $q;
}

function getChapterQuizCount($i)
{
    $link = getDB();
    $i = mysqli_real_escape_string($link, $i);
    $q = mysqli_query($link, "SELECT count(*) as countt FROM chapter_quiz_master where chapter_id='$i'");
    $r = mysqli_fetch_array($q);
    $countt = $r['countt'];
    return $countt;
}

// ============================================================
// CATEGORY FUNCTIONS
// ============================================================

function getcategoryID($i)
{
    $link = getDB();
    $i = mysqli_real_escape_string($link, $i);
    $q = mysqli_query($link, "SELECT * FROM blog_category where cat_value='$i'");
    $r = mysqli_fetch_array($q);
    $k = $r['id'];
    return $k;
}

// ============================================================
// CREDIT CARD / FINANCIAL PRODUCTS FUNCTIONS
// ============================================================

function getblogsforCreditCard()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM blog where is_publish='Yes' order by created_date desc limit 0,3");
    return $q;
}

// ============================================================
// IPO FUNCTIONS
// ============================================================

function getmainboardIPO()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM blog where cat_id='7' and id NOT IN (352,442) and is_publish='Yes' order by created_date desc limit 0,11");
    return $q;
}

function getmainboardupcomingIPO()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM blog where cat_id='7' and id NOT IN (352,442) and is_publish='No' order by created_date desc limit 0,5");
    return $q;
}

function getmainboardIPOdrhp()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM blog where cat_id='7' and id NOT IN (352,442,1224) and is_publish='Yes' order by created_date desc limit 0,10");
    return $q;
}

function getsmeIPO()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM blog where cat_id='14' and id NOT IN (1127, 1273) and is_publish='Yes' order by created_date desc limit 0,11");
    return $q;
}

function getsmeupcomingIPO()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM blog where cat_id='14' and id NOT IN (352,442,1192,1354,1539,1554) and is_publish='No' order by created_date desc limit 0,5");
    return $q;
}

function getsmeIPOdrhp()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM blog where cat_id='14' and is_publish='Yes' order by created_date desc limit 0,10");
    return $q;
}

function getIPO()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM blog where cat_id IN (7, 14) and id NOT IN (1127, 1273) order by ipo_openf desc limit 0,20");
    return $q;
}

function searchIPO($s)
{
    $link = getDB();
    $s = mysqli_real_escape_string($link, $s);
    $q = mysqli_query($link, "SELECT * FROM blog where title like '%$s%'");
    return $q;
}

function getallIPOQues()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM ipo_questions order by id asc");
    return $q;
}

function getallDematQues()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM demat_questions order by id asc");
    return $q;
}

// ============================================================
// MUTUAL FUND / NFO FUNCTIONS
// ============================================================

function getMutualFundBlogs()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM blog where cat_id='12' and is_publish='Yes' order by updated_date desc limit 0,3");
    return $q;
}

function getAllNFO()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM blog where cat_id='18' and is_publish='Yes' order by ipo_openf desc limit 0,20");
    return $q;
}

// ============================================================
// TECHNICAL ANALYSIS FUNCTIONS
// ============================================================

function getTABlogs()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM `blog` WHERE `content` LIKE '%technical analysis%' ORDER BY `blog`.`updated_date` desc limit 0,5");
    return $q;
}

// ============================================================
// DIVIDEND / INTRADAY FUNCTIONS
// ============================================================

function getdividendStocks()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM dividend_mst order by record_datef desc limit 0,15");
    return $q;
}

function getintradaystrategePage()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM intraday_landingpage where id='1'");
    return $q;
}

function getyoutubePage()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM youtube_landingpage where id='1'");
    return $q;
}

function getHomePopup()
{
    $link = getDB();
    $q = mysqli_query($link, "SELECT * FROM home_popup where id='1'");
    $r = mysqli_fetch_array($q);
    return $r;
}
?>
