<!DOCTYPE html>
<html>
<head>
	<title>Send SMS from PHP using textlocal</title>
	<style>
    body{
    margin: 0;
    padding: 0;
    background: url(otpbg.png);
    background-size: cover;
    
    font-family: sans-serif;
    
}
        
    .abc  {
    width: 420px;
    height: 420px;
    border-radius: 25px;
    background:   #666666;
    color: #fff;
    top: 60%;
    left:50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
    .abc p{
    margin: 0;
    padding: 0;
    font-weight: bold;
    
}

.abc input{
    width:100%;
    margin-bottom: 20px;
}

.abc input[type="text"],input[type="password"]
{
    border:none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height:40px;
    color:#fff;
    font-size: 16px;
    
}



    
    </style>
</head>
<body>
<div class="container">
<h1 class="text-center">OTP VERIFICATION</h1>
<hr>
	<div class="row">
	<div class="col-md-9 col-md-offset-2">
		<?php
			if(isset($_POST['sendopt'])) {
				require('textlocal.class.php');
				require('credential.php');

				$textlocal = new Textlocal('aadarsh1999@gmail.com','Aashi@sai18',false);

                // You can access MOBILE from credential.php
				// $numbers = array(MOBILE);
                // Access enter mobile number in input box
                
                $numbers = array($_POST['mobile']);

				$sender = 'TXTLCL';
				$otp = mt_rand(10000, 99999);
				$message = "Hello " . $_POST['uname'] . " This is your OTP: " . $otp;

				try {
				    $result = $textlocal->sendSms($numbers, $message, $sender);
				    setcookie('otp', $otp);
				    echo "OTP successfully send..";
				} catch (Exception $e) {
				    die('Error: ' . $e->getMessage());
				}
			}

			if(isset($_POST['verifyotp'])) { 
				$otp = $_POST['otp'];
				if($_COOKIE['otp'] == $otp) {
					        header('location: end.html');

				} else {
					echo "Please enter correct otp.";
				}
			}
		?>
	</div>
    <div class="abc">
        <form role="form" method="post">
            <div >
                <div >
                    <label for="uname">Name</label>
                    <input type="text" class="form-control" id="uname" name="uname" value="" maxlength="10" placeholder="Enter your name" required="">
                </div>
            </div>
            <div >
                <div >
                    <label for="mobile">Mobile</label>
                    <input type="text" id="mobile" name="mobile" value="" maxlength="10" placeholder="Enter valid mobile number" required="">
                </div>
            </div>
            <div >
                <div class="q">
                    <button type="submit" name="sendopt">Send OTP</button>
                </div>
            </div>
            <br>
            </form>
            <form method="POST" action="">
            <div class="row">
                <div >
                    <label for="otp">OTP</label>
                    <input type="text" class="form-control" id="otp" name="otp" placeholder="Enter OTP" maxlength="5" required="">
                </div>
            </div>
             <div >
                <div class="q">
                    <button type="submit" name="verifyotp">Verify</button>
                </div>
            </div>
        </form>
	</div>
</div>
</body>
</html>