<!-- dynamic -->
     
<?php 

include 'actions_dynamic.php';






////////////// error_msg [start] /////////////

$msg = login(); 
if($msg){
        
    header('Location: ../777.1_admin_login.php?message='.$msg);

}

////////////////////////////////////////////////

$msg_2 = change_pass(); 
if($msg_2){
        
    header('Location: ../777.2_admin_change_password.php?message='.$msg_2);

}

/////////////////////////////////////////////////

$query_to_read_basic_info = "SELECT * FROM basic_info_table;";
                        
$read_basic_info = new Database();
$basic_info = $read_basic_info->read($query_to_read_basic_info); 
                
    while($row = mysqli_fetch_assoc($basic_info)){
                $data[] = $row;
    }

    $email = $data[0]['email'];

$msg_3 = otp($email);
if($msg_3){
        
    header('Location: ../777.3_admin_forgot_password.php?message='.$msg_3);

}

///////////////////////////////////////////////

$msg_4 = forgot_password();
if($msg_4){
        
    header('Location: ../777.3_admin_forgot_password.php?message='.$msg_4);

}

////////////////////////////////////////////////

$msg_5 = verifyPin(); 
if($msg_5){
        
    header('Location: ../777.1.2_admin_pin_check.php?message='.$msg_5);

}

////////////// error_msg [finish] /////////////








?>
