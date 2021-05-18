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

        //echo $sql;

        // Object created.
        $insert_basic_info = new Database();
        $result = $insert_basic_info->create($sql);

        // Location
        if(result == true){
            header('Location: ../999.0_home_admin.php');
        }else{
            header('Location: actions_dynamic.php');
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
        $sql = "UPDATE basic_info_table SET name = '$name', about = '$about', email = '$email', number_1 = '$mobile_1', number_2 = '$mobile_2', fb = '$facebook', fb_page = '$page', insta = '$insta', linkedin = '$linkedin', pinterest = '$pinterest', github = '$github', fiverr = '$fiverr' ; ";

        //echo $sql;

        // Object created.
        $update_basic_info = new Database();
        $result = $update_basic_info->update($sql);

        // Location
        if(result == true){
            header('Location: ../999.0_home_admin.php');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }












// client_confidential_data_store.
    if(isset($_POST['insert_client_confidentials'])){
    
        // Getting data from form and storing in variables.
        $client_confidentiality_policy = mysqli_real_escape_string($con, $_POST['new_policy']);     

        // Query.    
        $sql = "INSERT INTO client_confidentiality_table (client_confidentiality_policy) VALUES ('$client_confidentiality_policy');";

        //echo $sql;

        // Object created.
        $insert_client_confidentiality_policy = new Database();
        $result = $insert_client_confidentiality_policy->create($sql);

        // Location
        if(result == true){
            header('Location: ../999.0_home_admin.php');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }











// client_confidential_data_update.
    if(isset($_POST['update_client_confidentials'])){
    
        // Getting data from form and storing in variables.
        $updated_client_confidentiality_policy = mysqli_real_escape_string($con, $_POST['updated_policy']);
        $client_confidentiality_policy_id = $_POST['policy_id'];

        // Query.    
        $sql = "UPDATE client_confidentiality_table SET client_confidentiality_policy = '$updated_client_confidentiality_policy' WHERE client_confidentiality_policy_id = $client_confidentiality_policy_id; ";

        //echo $sql;

        // Object created.
        $update_client_confidentiality_policy = new Database();
        $result = $update_client_confidentiality_policy->update($sql);

        // Location
        if($result == true){
            header('Location: ../999.0_home_admin.php');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }









// client_confidential_data_delete.
    if(isset($_POST['delete_client_confidentials'])){
        
        // Getting data from form and storing in variables.
        $client_confidentiality_policy_id = $_POST['policy_id'];

        // Query.    
        $sql = "DELETE FROM client_confidentiality_table WHERE client_confidentiality_policy_id = $client_confidentiality_policy_id; ";

        //echo $sql;

        // Object created.
        $delete_client_confidentiality_policy = new Database();
        $result = $delete_client_confidentiality_policy->delete($sql);

        // Location
        if($result == true){
            header('Location: ../999.0_home_admin.php');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }












// developers_support_data_store.
    if(isset($_POST['insert_developers_support'])){
    
        // Getting data from form and storing in variables.
        $developers_support_policy = mysqli_real_escape_string($con, $_POST['new_policy']);     

        // Query.    
        $sql = "INSERT INTO developers_support_table (developers_support_policy) VALUES ('$developers_support_policy');";

        //echo $sql;

        // Object created.
        $insert_developers_support_policy = new Database();
        $result = $insert_developers_support_policy->create($sql);

        // Location
        if(result == true){
            header('Location: ../999.0_home_admin.php');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }











// developers_support_data_update.
    if(isset($_POST['update_developers_support'])){
    
        // Getting data from form and storing in variables.
        $updated_developers_support_policy = mysqli_real_escape_string($con, $_POST['updated_policy']);
        $developers_support_policy_id = $_POST['policy_id'];

        // Query.    
        $sql = "UPDATE developers_support_table SET developers_support_policy = '$updated_developers_support_policy' WHERE developers_support_policy_id = $developers_support_policy_id; ";

        //echo $sql;

        // Object created.
        $update_developers_support_policy = new Database();
        $result = $update_developers_support_policy->update($sql);

        // Location
        if($result == true){
            header('Location: ../999.0_home_admin.php');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }









// developers_support_data_delete.
    if(isset($_POST['delete_developers_support'])){
        
        // Getting data from form and storing in variables.
        $developers_support_policy_id = $_POST['policy_id'];

        // Query.    
        $sql = "DELETE FROM developers_support_table WHERE developers_support_policy_id = $developers_support_policy_id; ";

        //echo $sql;

        // Object created.
        $delete_developers_support_policy = new Database();
        $result = $delete_developers_support_policy->delete($sql);

        // Location
        if($result == true){
            header('Location: ../999.0_home_admin.php');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }













?>