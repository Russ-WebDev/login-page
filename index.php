<?php
include __DIR__ . "/constant.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <img class="mec-background" src="<?php echo $ASSETS_PATH; ?>/mec1.jpg" alt="Logo" />
    <div class="main-background"></div>
    <div class="login-page">
        <div class="form">
            <form class="login-form" method="POST" action="">
                <img class="logo" src="<?php echo $ASSETS_PATH; ?>/mec_logo.png" alt="Logo" />
                <p>Email Account:</p>
                <input type="email" name="Username" placeholder="Enter your email" pattern="[^'\" \s]+" title="No single quotes ('), double quotes (\" ) or spaces allowed" required />
                <p>Password:</p>
                <input type="password" name="Password" placeholder="Enter your password" pattern="[^'\" \s]+" title="No single quotes ('), double quotes (\" ) or spaces allowed" required />
                <p>Verification Code:</p>
                <div class="otp-wrap">
                    <input class="otp-input" type="text" name="OTP" placeholder="Enter your OTP" pattern="[^'\" \s]+" title="No single quotes ('), double quotes (\" ) or spaces allowed" required />
                    <button type="submit" name="send_otp">Send OTP</button>
                </div>
                <button type="submit" name="login">Submit</button>
            </form>
        </div>
    </div>

    <script>
        function validateInput(input) {
            const regex = /['"\s]/;
            if (regex.test(input.value)) {
                input.value = input.value.replace(/['"\s]/g, '');
                alert(`${input.name} cannot contain single quotes ('), double quotes (") or spaces`);
            }
        }

        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('input', function() {
                validateInput(this);
            });
        });
    </script>
</body>

</html>