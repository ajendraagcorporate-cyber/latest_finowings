<?php
include('head.php');
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con; 

// Encoding Fix: ₹ और स्पेशल कैरेक्टर्स के लिए
mysqli_set_charset($link, "utf8mb4");

// अगर चैप्टर ID यूआरएल से आ रही है
$cid = isset($_REQUEST['i']) ? mysqli_real_escape_string($link, $_REQUEST['i']) : 0;

$c_name = "Select Chapter";
if($cid > 0) {
    $query1 = "SELECT chapter_name FROM freestudychapter WHERE id='$cid'";
    $result1 = mysqli_query($link, $query1);
    if($row1 = $result1->fetch_assoc()) {
        $c_name = $row1['chapter_name'];
    }
}
?>

<body class="hold-transition dark-mode sidebar-mini layout-fixed">
<div class="wrapper">

    <?php include('sidebar.php'); ?>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid text-center">
                <h2 style="color: #cf9c0a; font-weight: bold;">Add New Quiz Question</h2>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="card p-4 shadow" style="background: #FFFFFF; color: #000; border-radius: 10px; width: 80%; margin: auto;">
                    
                    <form method="post" action="addchapterquiz.php">
                        
                        <div class="form-group mb-4">
                            <label><b>Choose Chapter :</b></label>
                            <select class="form-control" name="chapter" required>
                                <?php if($cid > 0) { ?>
                                    <option value="<?php echo $cid; ?>"><?php echo $c_name; ?></option>
                                <?php } else { ?>
                                    <option value="">-- Select Chapter --</option>
                                <?php } ?>
                                
                                <?php
                                // नया कनेक्शन बनाने के बजाय $link का उपयोग करें
                                $query = "SELECT id, chapter_name FROM freestudychapter ORDER BY id ASC";
                                $res = mysqli_query($link, $query);
                                while ($row = $res->fetch_assoc()) {
                                    echo "<option value='".$row['id']."'>".$row['chapter_name']."</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group mb-4">
                            <label><b>Question :</b></label>
                            <input type="text" class="form-control" name="question" placeholder="Enter your question here" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label>Option A :</label>
                                <input type="text" class="form-control" name="optionA" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label>Option B :</label>
                                <input type="text" class="form-control" name="optionB" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group mb-3">
                                <label>Option C :</label>
                                <input type="text" class="form-control" name="optionC" required>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label>Option D :</label>
                                <input type="text" class="form-control" name="optionD" required>
                            </div>
                        </div>

                        <div class="form-group mt-3" style="max-width: 250px;">
                            <label style="color: green;"><b>Right Option (A/B/C/D) :</b></label>
                            <select class="form-control" name="option_right" required>
                                <option value="">-- Select Correct --</option>
                                <option value="A">Option A</option>
                                <option value="B">Option B</option>
                                <option value="C">Option C</option>
                                <option value="D">Option D</option>
                            </select>
                        </div>

                        <div class="text-center mt-5">
                            <input type="submit" name="submit" value="SAVE QUESTION" class="btn btn-primary btn-lg" style="background: #273158; border: none; padding: 12px 60px; font-weight: bold;">
                        </div>
                    </form>

                </div>
            </div>
        </section>
    </div>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>