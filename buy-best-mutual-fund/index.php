<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/DLL/config.php';
$link = $con;
$msg = "";

if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $contact = mysqli_real_escape_string($link, $_POST['contact']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $city = mysqli_real_escape_string($link, $_POST['city']);
    
    $sql = "INSERT INTO mf_enq (name, contact, email, city) VALUES ('$name', '$contact', '$email', '$city')";
    
    if(mysqli_query($link, $sql)) {
        $msg = "Thank you for your mutual fund inquiry. We're excited to assist you on your investment journey!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mutual Fund Enquiry</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/calculator-style.css" rel="stylesheet">
    
    <style type="text/css">
        #error_message {
            margin-bottom: 20px;
            background: #fe8b8e;
            padding: 0px;
            text-align: center;
            font-size: 14px;
            transition: all 0.5s ease;
        }
        #chart_wrap {
            position: relative;
            padding-bottom: 100%;
            height: 0;
            overflow: hidden;
        }
    </style>    
</head>

<body>
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <?php include("../top-navigation.php"); ?>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="page-content">
                <div class="form-v4-content">
                    <div class="form-left">
                        <h1 style="color: #FFFFFF;">MUTUAL FUND</h1>
                        <p class="text-1">Why Invest?</p>
                        <ul>
                            <li>Best <span style="color:#F1E5AC; font-weight:bold;">Mutual Fund</span> as per your <span style="color:#F1E5AC; font-weight:bold;">Goal</span>.</li>
                        </ul>
                        <p class="text-1">Mutual fund as per:</p>
                        <ul>
                            <li>BETA, OVERLAPPING, ROLLING RETURN, FUTURE GOAL BASE</li>
                        </ul>
                        <p class="text-1">Contact us: 9708094321</p>
                    </div>

                    <form class="form-detail" method="post" id="enquiryForm">
                        <h2 style="color:#436bb2;">Enquire Us</h2>
                        <div class="form-group">
                            <div class="form-row form-row-1">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="input-text" required>
                            </div>
                            <div class="form-row form-row-1">
                                <label for="contact">Contact Number</label>
                                <input type="text" name="contact" id="contact" class="input-text" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="email">Email ID</label>
                            <input type="email" name="email" id="email" class="input-text" required>
                        </div>
                        <div class="form-row">
                            <label for="city">City</label>
                            <input type="text" name="city" id="city" class="input-text" required>
                        </div>
                        <div class="form-row-last">
                            <input type="submit" name="submit" value="Send" class="btn btn-primary" style="background:#00acea; color:#FFFFFF; border:none;" /> 
                        </div>
                        <div id="results" align="center" class="mt-3">
                            <span style="font-weight:bold; color:green;"><?php echo $msg; ?></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include("../footer.php"); ?> 

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="../../js/main.js"></script>

    <script>
        $(document).ready(function() {
            $("#enquiryForm").validate({
                rules: {
                    name: "required",
                    contact: {
                        required: true,
                        digits: true,
                        minlength: 10
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    city: "required"
                },
                messages: {
                    name: "Please enter your name",
                    contact: "Please enter a valid mobile number",
                    email: "Please enter a valid email address",
                    city: "Please enter your city"
                }
            });
        });
    </script>
</body>
</html>