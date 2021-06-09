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

    <!-- fonts (google fonts) -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">

    <!-- icons (font awesome) -->
    <script src="https://kit.fontawesome.com/aafecdc4bf.js" crossorigin="anonymous"></script>


    <title>Admin Login</title>
</head>
<body>
    
    <form method="post" action="Dynamic/redirect.php" class="admin_login">
    
        <div class="fields">

            <label class="label" for="password">Password</label><br>
            <input class="input" type="password" name="password" required>

        </div>

        <button class="form_btn btn_hover_coral admin_form_btn" type="submit" name="admin_login"><i class="fas fa-power-off log_in"></i></button>
    
    </form>

    <div class="links">

        <a class="blue_link link" href="777.2_admin_change_password.php">Change Password</a>
        <a class="red_link link" href="777.3_admin_forgot_password.php">Forgot Password</a>
        
    </div>


    <?php 

if(isset($_GET['message'])){

    $msg = $_GET['message'];

?>

    <p class="er_msg"><?php echo $msg; ?></p>

<?php

}else{

    $msg = " ";
    
}

?>



</body>
</html>