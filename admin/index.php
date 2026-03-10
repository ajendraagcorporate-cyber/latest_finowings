<?php 
session_start();
include('config.php'); 

// Initialize failed attempts
if(!isset($_SESSION['failed_attempts'])){
    $_SESSION['failed_attempts'] = 0;
}

// Check if reCAPTCHA is required (after 2 failed attempts)
$recaptcha_required = $_SESSION['failed_attempts'] >= 2;

// reCAPTCHA keys - Production keys configured
$recaptcha_site_key = "6Lf2AlwsAAAAAHeFv77KNhXK-qQ_WyASyGzsXq75"; // Site Key
$recaptcha_secret = "6Lf2AlwsAAAAAAlQBhYq_GK9A3KdMyVXiqrd02JM"; // Secret Key

if(isset($_POST['but_submit'])){
    $uname = mysqli_real_escape_string($link,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($link,$_POST['txt_pwd']);
    
    // Validate reCAPTCHA if required
    $recaptcha_valid = true;
    if($recaptcha_required){
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
            $recaptcha_response = $_POST['g-recaptcha-response'];
            $recaptcha_url = "https://www.google.com/recaptcha/api/siteverify";
            $recaptcha_data = array(
                'secret' => $recaptcha_secret,
                'response' => $recaptcha_response,
                'remoteip' => $_SERVER['REMOTE_ADDR']
            );
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $recaptcha_url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($recaptcha_data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            
            $recaptcha_result = curl_exec($ch);
            curl_close($ch);
            
            if($recaptcha_result !== false){
                $recaptcha_json = json_decode($recaptcha_result, true);
                $recaptcha_valid = isset($recaptcha_json['success']) && $recaptcha_json['success'] === true;
            } else {
                $recaptcha_valid = false;
            }
        } else {
            $recaptcha_valid = false;
        }
    }
    
    if ($uname != "" && $password != "" && $recaptcha_valid){
       $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
	   $sql_query1 = "select * from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($link,$sql_query);
		$result1 = mysqli_query($link,$sql_query1);
        $row = mysqli_fetch_array($result);
		$row1 = mysqli_fetch_array($result1);
        $count = $row['cntUser'];
        if($count > 0){
            // Reset failed attempts on successful login
            $_SESSION['failed_attempts'] = 0;
            $_SESSION['user'] = $row1;
            header('Location: dashboard.php');
        }else{
            // Increment failed attempts
            $_SESSION['failed_attempts']++;
            $_SESSION['msg'] = "Please check your Login ID and Password";
            header('Location: index.php');
        }    
	} else {
        if(!$recaptcha_valid && $recaptcha_required){
            $_SESSION['msg'] = "Please complete reCAPTCHA verification";
        } else if($uname == "" || $password == ""){
            $_SESSION['msg'] = "Please enter both Login ID and Password";
        }
        header('Location: index.php');
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mukul Agrawal - Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php if($recaptcha_required): ?>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<?php endif; ?>
	<style>
		.recaptcha-wrapper {
			margin: 15px 0;
			display: flex;
			justify-content: center;
		}
		.error-msg {
			color: red;
			font-weight: bold;
			margin: 10px 0;
		}
		#but_submit:disabled {
			opacity: 0.6;
			cursor: not-allowed;
		}
		@media (max-width: 480px) {
			.textbox {
				width: 90%;
				max-width: 300px;
			}
		}
	</style>
</head>
<body>
	<div class="header">
	<img style="background: white;border-radius: 10px;" src="finowings-logo.png"/>
	<br /><br />
		<h1>Finowings Admin</h1>
		<br />
	</div>
	  <form method="post" action="" id="loginForm">
                <div id="div_login" align="center">
                    <h1>Login Form</h1>
					<br /><br />
                    <div>
                        <span style="font-size:16px; font-weight:bold;">Login ID :</span> &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                    </div>
					<br />
                    <div>
                        <span style="font-size:16px; font-weight:bold;">Password :</span> <input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password"/>
                    </div>
					<br />
					<?php if($recaptcha_required): ?>
					<div class="recaptcha-wrapper">
						<div class="g-recaptcha" data-sitekey="<?php echo htmlspecialchars($recaptcha_site_key); ?>" data-callback="onRecaptchaSuccess" data-expired-callback="onRecaptchaExpired"></div>
					</div>
					<?php endif; ?>
					<br />
					<div align="center" class="error-msg"><?php 
						if(isset($_SESSION['msg'])) {
							echo $_SESSION['msg']; 
							unset($_SESSION['msg']);
						}
					?></div>
					<br />
                    <div>
                        <input type="submit" value="LOGIN" name="but_submit" id="but_submit" style="background:#273158; height:40px; width:150px; color:#FFFFFF; font-weight:bold; font-size:16px;" <?php if($recaptcha_required): ?>disabled<?php endif; ?> />
                    </div>
                </div>
            </form>
	
	<?php if($recaptcha_required): ?>
	<script>
		function onRecaptchaSuccess() {
			document.getElementById('but_submit').disabled = false;
		}
		function onRecaptchaExpired() {
			document.getElementById('but_submit').disabled = true;
		}
	</script>
	<?php endif; ?>
</body>
</html>
