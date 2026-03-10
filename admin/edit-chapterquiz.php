<?php
include('head.php');
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con; 

// Encoding Fix: ₹ और Â कचरा अक्षरों को रोकने के लिए
mysqli_set_charset($link, "utf8mb4");

$id = isset($_REQUEST['i']) ? mysqli_real_escape_string($link, $_REQUEST['i']) : 0;

// वर्तमान सवाल का डेटा निकालें
$query = "SELECT * FROM chapter_quiz_master where id='$id'";
$result = $link->query($query);
$row = $result ? $result->fetch_assoc() : null;

if(!$row) { die("<div class='alert alert-danger'>Error: Question not found.</div>"); }

$current_chapter_id = $row['chapter_id'];
$question = $row['question'];
$optionA = $row['optionA'];
$optionB = $row['optionB'];
$optionC = $row['optionC'];
$optionD = $row['optionD'];
$option_right = $row['option_right'];

// चैप्टर का नाम निकालें
$q_chap = "SELECT chapter_name FROM freestudychapter where id='$current_chapter_id'";
$res_chap = $link->query($q_chap);
$row_chap = $res_chap->fetch_assoc();
$current_chapter_name = ($row_chap) ? $row_chap['chapter_name'] : "Select Chapter";
?>

<body class="hold-transition dark-mode sidebar-mini layout-fixed">
<div class="wrapper">

    <?php include('sidebar.php'); ?>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid text-center">
                <h2 style="color: #cf9c0a; font-weight: bold;">Edit Quiz Question</h2>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card p-4 shadow" style="background: #FFFFFF; color: #000; border-radius: 10px; width: 60%; margin: auto;">
                    
                    <form method="post" action="editchapterquiz.php">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">

                        <div class="form-group mb-4">
                            <label><b>Choose Chapter :</b></label>
                            <select class="form-control" name="chapter">
                                <option value="<?php echo $current_chapter_id; ?>"><?php echo $current_chapter_name; ?></option>
                                <?php
                                // नया कनेक्शन बनाने के बजाय पुराने $link का ही उपयोग करें
                                $all_chaps = $link->query("SELECT id, chapter_name FROM freestudychapter ORDER BY id ASC");
                                while($c = $all_chaps->fetch_assoc()) {
                                    echo "<option value='".$c['id']."'>".$c['chapter_name']."</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group mb-4">
                            <label><b>Question :</b></label>
                            <input type="text" class="form-control" name="question" value="<?php echo htmlspecialchars($question); ?>" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Option A :</label>
                                <input type="text" class="form-control" name="optionA" value="<?php echo htmlspecialchars($optionA); ?>" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Option B :</label>
                                <input type="text" class="form-control" name="optionB" value="<?php echo htmlspecialchars($optionB); ?>" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Option C :</label>
                                <input type="text" class="form-control" name="optionC" value="<?php echo htmlspecialchars($optionC); ?>" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Option D :</label>
                                <input type="text" class="form-control" name="optionD" value="<?php echo htmlspecialchars($optionD); ?>" required>
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label style="color: green;"><b>Correct Option (A, B, C, or D) :</b></label>
                            <input type="text" class="form-control" name="option_right" value="<?php echo $option_right; ?>" required style="width: 100px; text-transform: uppercase;">
                        </div>

                        <div class="text-center mt-5">
                            <input type="submit" name="submit" value="UPDATE QUESTION" class="btn btn-primary btn-lg" style="background: #273158; border: none; width: 100%;">
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