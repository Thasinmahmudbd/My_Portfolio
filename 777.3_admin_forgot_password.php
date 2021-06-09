<!-- dynamic -->
     
<?php include 'Dynamic/actions_dynamic.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Required css links for style-->
    <link rel="stylesheet" href="Design/Global/00_basic_style.css">
    <link rel="stylesheet" href="Design/Global/03_forms_style.css">
    <link rel="stylesheet" href="Design/Administration/777.1_admin_login_style.css">
    <link rel="stylesheet" href="Design/Administration/777.2_admin_change_password_style.css">

    <!-- fonts (google fonts) -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">

    <!-- icons (font awesome) -->
    <script src="https://kit.fontawesome.com/aafecdc4bf.js" crossorigin="anonymous"></script>


    <title>Admin Forgot Password</title>
</head>
<body>
    
    <div class="admin_login">

        <form method="post" action="Dynamic/redirect.php">
        

                <button class="form_btn btn_hover_coral field_1 otp" type="submit" name="sent_otp">Send OTP</button>

            
        </form>

        <form method="post" action="Dynamic/redirect.php" class="form">

            <div class="field">

                <label class="label" for="password">Insert OTP</label><br>
                <input class="input" type="tel" name="otp" required>

            </div>

            <div class="bottom_sec">

                <div class="field field_3">

                    <label class="label" for="password">New Password</label><br>
                    <input class="input" type="password" name="new_password" required>

                </div>

                <button class="form_btn btn_hover_coral admin_form_btn" type="submit" name="forgot_password"><i class="fas fa-cog log_in"></i></button>

            </div>
        
        </form>

    </div>

    <div class="links">

        <a class="blue_link link" href="777.1_admin_login.php">Login</a>
        <a class="blue_link link" href="777.2_admin_change_password.php">Change Password</a>

    </div>





    <?php 

    if(isset($_GET['message'])){

        $msg = $_GET['message'];

        if($msg == "OTP Sent, Check You Email."){

    ?>

        <p class="suc_msg"><?php echo $msg; ?></p>

    <?php

        }if($msg == "Password Changed Successfully."){

    ?>

        <p class="suc_msg"><?php echo $msg; ?></p>

    <?php

        }else{

    ?>

        <p class="er_msg"><?php echo $msg; ?></p>

    <?php

        }

    }else{

        $msg = " ";
        
    }

    ?>







</body>
</html>