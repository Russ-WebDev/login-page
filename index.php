<?php
include __DIR__ . "/constant.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="styles.css">
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Link to external JavaScript file -->
    <script src="scripts.js"></script>
</head>

<body>
    <img class="mec-background" src="<?php echo $ASSETS_PATH; ?>/mec1.jpg" alt="Logo" />
    <div class="main-background"></div>
    <div class="login-page">
        <div class="form">
            <!-- Login Form -->
            <form class="login-form" method="POST" action="">
                <img src="<?php echo $ASSETS_PATH; ?>/mec_logo.png" alt="Logo" />
                <p>Email Account:</p>
                <input type="text" name="username" placeholder="Enter your email" required />
                <p>Password:</p>
                <input type="password" name="password" placeholder="Enter your password" required />
                <p>Verification Code:</p>
                <div class="otp-wrap">
                    <input class="otp-input" type="otp" name="otp" placeholder="Enter your OTP" required />
                    <button type="send_otp" name="send_otp">Send OTP</button>
                </div>
                <button type="submit" name="login">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>