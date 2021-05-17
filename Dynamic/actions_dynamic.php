<!-- Dynamic. -->
    
<?php include 'CRUD_dynamic.php';

    $db_con = new Database();
    $con = $db_con->connect();
   
// Actions.         


    // Basic_info_data_store.
    if(isset($_POST['insert_basic_info'])){
    
    // Getting data from form and storing in variables.
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $about = mysqli_real_escape_string($con, $_POST['about']);
    $email = mysqli_real_escape_string($con, $_POST['email']);   
    $mobile_1 = mysqli_real_escape_string($con, $_POST['mobile_1']);
    $mobile_2 = mysqli_real_escape_string($con, $_POST['mobile_2']);
    $facebook = mysqli_real_escape_string($con, $_POST['facebook']);
    $page = mysqli_real_escape_string($con, $_POST['page']);
    $linkedin = mysqli_real_escape_string($con, $_POST['linkedin']);
    $insta = mysqli_real_escape_string($con, $_POST['insta']);
    $github = mysqli_real_escape_string($con, $_POST['github']);
    $pinterest = mysqli_real_escape_string($con, $_POST['pinterest']);
    $fiverr = mysqli_real_escape_string($con, $_POST['fiverr']);
        
    
    // Query.    
    $sql = "INSERT INTO basic_info_table (name, about, email, number_1, number_2, fb, fb_page, insta, linkedin, pinterest, github, fiverr) VALUES ('$name', '$about', '$email', '$mobile_1', '$mobile_2', '$facebook', '$page', '$linkedin', '$insta', '$github', '$pinterest', '$fiverr');";
    
    echo $sql;
        
    // Object created.
    $insert_basic_info = new Database();
    $result = $insert_basic_info->create($sql);
        
    // Location
    if(result == true){
        header('Location: ../999.0_home_admin.php');
    }
        
    }


    // Basic_info_data_store.
    if(isset($_POST['update_basic_info'])){
    
    // Getting data from form and storing in variables.
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $about = mysqli_real_escape_string($con, $_POST['about']);
    $email = mysqli_real_escape_string($con, $_POST['email']);   
    $mobile_1 = mysqli_real_escape_string($con, $_POST['mobile_1']);
    $mobile_2 = mysqli_real_escape_string($con, $_POST['mobile_2']);
    $facebook = mysqli_real_escape_string($con, $_POST['facebook']);
    $page = mysqli_real_escape_string($con, $_POST['page']);
    $linkedin = mysqli_real_escape_string($con, $_POST['linkedin']);
    $insta = mysqli_real_escape_string($con, $_POST['insta']);
    $github = mysqli_real_escape_string($con, $_POST['github']);
    $pinterest = mysqli_real_escape_string($con, $_POST['pinterest']);
    $fiverr = mysqli_real_escape_string($con, $_POST['fiverr']);
        
    
    // Query.    
    $sql = "UPDATE basic_info_table
SET name = '$name', about = '$about', email = '$email', number_1 = '$mobile_1', number_2 = '$mobile_2', fb = '$facebook', fb_page = '$page', insta = '$insta', linkedin = '$linkedin', pinterest = '$pinterest', github = '$github', fiverr = '$fiverr' ; ";
    
    echo $sql;
        
    // Object created.
    $update_basic_info = new Database();
    $result = $update_basic_info->update($sql);
        
    // Location
    if(result == true){
        header('Location: ../999.0_home_admin.php');
    }
        
    }


?>