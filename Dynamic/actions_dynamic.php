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
        if($result == true){
            header('Location: ../999.0_home_admin.php#title1');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }












    // Basic_info_data_update.
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
        if($result == true){
            header('Location: ../999.0_home_admin.php#title1');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }










// profile_picture_upload.
if(isset($_POST['upload_profile_picture'])){

    // Getting data from form and storing in variables.
    $file = $_FILES['profile_picture'];
    $file_name = $_FILES['profile_picture']['name'];
    $file_tmp_name = $_FILES['profile_picture']['tmp_name'];
    $file_size = $_FILES['profile_picture']['size'];
    $file_error = $_FILES['profile_picture']['error'];
    $file_type = $_FILES['profile_picture']['type'];

    $file_explode = explode('.', $file_name);
    $file_extension = strtolower(end($file_explode));

    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($file_extension, $allowed)){

        if($file_error === 0){

            if($file_size < 3200000){

                $new_file_name = "Profile_picture" . "." . $file_extension;

                $file_destination = "../Media/Images/Profile_picture/" . $new_file_name;

                // uploading picture.
                move_uploaded_file($file_tmp_name, $file_destination);

                header('Location: ../999.0_home_admin.php#title1');

                /*// Query.    
                    $sql = "UPDATE basic_info_table SET profile_picture = '$new_file_name'; ";

                    //echo $sql;

                    // Object created.
                    $upload_profile_picture = new Database();
                    $result = $upload_profile_picture->update($sql);

                    // Location
                    if($result == true){
                        header('Location: ../999.0_home_admin.php#title1');
                    }else{
                        header('Location: actions_dynamic.php');
                    }*/

            }else{
            echo "File is to big, maximum 3MB allowed.";
        }

        }else{
            echo "There was an error uploading this file.";
        }

    }else{
        echo "Only .jpg, .jpeg and .png files allowed.";
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
        if($result == true){
            header('Location: ../999.0_home_admin.php#title2');
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
            header('Location: ../999.0_home_admin.php#title2');
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
            header('Location: ../999.0_home_admin.php#title2');
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
        if($result == true){
            header('Location: ../999.0_home_admin.php#title3');
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
            header('Location: ../999.0_home_admin.php#title3');
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
            header('Location: ../999.0_home_admin.php#title3');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }














// learn_more_data_store.
    if(isset($_POST['insert_learn_more_article'])){
    
        // Getting data from form and storing in variables.
        $learn_more_article_title = mysqli_real_escape_string($con, $_POST['new_learn_more_article_title']); 
        $learn_more_article = mysqli_real_escape_string($con, $_POST['new_learn_more_article']);     

        // Query.    
        $sql = "INSERT INTO learn_more_table (learn_more_article_title, learn_more_article) VALUES ('$learn_more_article_title', '$learn_more_article');";

        //echo $sql;

        // Object created.
        $insert_learn_more_article = new Database();
        $result = $insert_learn_more_article->create($sql);

        // Location
        if($result == true){
            header('Location: ../999.0_home_admin.php#title5');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }











// learn_more_data_update.
    if(isset($_POST['update_learn_more_article'])){
    
        // Getting data from form and storing in variables.
        $update_learn_more_article_title = mysqli_real_escape_string($con, $_POST['updated_learn_more_article_title']); 
        $update_learn_more_article = mysqli_real_escape_string($con, $_POST['updated_learn_more_article']);
        $learn_more_article_id = $_POST['policy_id'];

        // Query.    
        $sql = "UPDATE learn_more_table SET learn_more_article_title = '$update_learn_more_article_title', learn_more_article = '$update_learn_more_article' WHERE learn_more_article_id = $learn_more_article_id; ";

        //echo $sql;

        // Object created.
        $update_learn_more_article = new Database();
        $result = $update_learn_more_article->update($sql);

        // Location
        if($result == true){
            header('Location: ../999.0_home_admin.php#title5');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }









// learn_more_data_delete.
    if(isset($_POST['delete_learn_more_article'])){
        
        // Getting data from form and storing in variables.
        $learn_more_article_id = $_POST['policy_id'];

        // Query.    
        $sql = "DELETE FROM learn_more_table WHERE learn_more_article_id = $learn_more_article_id; ";

        //echo $sql;

        // Object created.
        $delete_learn_more_article = new Database();
        $result = $delete_learn_more_article->delete($sql);

        // Location
        if($result == true){
            header('Location: ../999.0_home_admin.php#title5');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }












// refund_policy_data_store.
    if(isset($_POST['insert_refund_policy'])){
    
        // Getting data from form and storing in variables.
        $refund_policy = mysqli_real_escape_string($con, $_POST['new_policy']);     

        // Query.    
        $sql = "INSERT INTO refund_policy_table (refund_policy) VALUES ('$refund_policy');";

        //echo $sql;

        // Object created.
        $insert_refund_policy = new Database();
        $result = $insert_refund_policy->create($sql);

        // Location
        if($result == true){
            header('Location: ../999.0_home_admin.php#title6');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }











// refund_policy_data_update.
    if(isset($_POST['update_refund_policy'])){
    
        // Getting data from form and storing in variables.
        $updated_refund_policy = mysqli_real_escape_string($con, $_POST['updated_policy']);
        $refund_policy_id = $_POST['policy_id'];

        // Query.    
        $sql = "UPDATE refund_policy_table SET refund_policy = '$updated_refund_policy' WHERE refund_policy_id = $refund_policy_id; ";

        //echo $sql;

        // Object created.
        $update_refund_policy = new Database();
        $result = $update_refund_policy->update($sql);

        // Location
        if($result == true){
            header('Location: ../999.0_home_admin.php#title6');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }









// refund_policy_data_delete.
    if(isset($_POST['delete_refund_policy'])){
        
        // Getting data from form and storing in variables.
        $refund_policy_id = $_POST['policy_id'];

        // Query.    
        $sql = "DELETE FROM refund_policy_table WHERE refund_policy_id = $refund_policy_id; ";

        //echo $sql;

        // Object created.
        $delete_refund_policy = new Database();
        $result = $delete_refund_policy->delete($sql);

        // Location
        if($result == true){
            header('Location: ../999.0_home_admin.php#title6');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }












// customers_issues_data_store.
    if(isset($_POST['insert_customers_issues'])){
    
        // Getting data from form and storing in variables.
        $customers_full_name = mysqli_real_escape_string($con, $_POST['customers_full_name']); 
        $customers_email = mysqli_real_escape_string($con, $_POST['customers_email']);
        $customers_mobile = mysqli_real_escape_string($con, $_POST['customers_mobile']);
        $customers_issues = mysqli_real_escape_string($con, $_POST['customers_issues']);
        date_default_timezone_set('Asia/Dhaka');
        $date = date("F j, Y, g:i a");

        // Query.    
        $sql = "INSERT INTO customers_issues_table (customers_full_name, customers_email, customers_mobile, customers_issues, issues_date) VALUES ('$customers_full_name', '$customers_email', '$customers_mobile', '$customers_issues', '$date');";

        //echo $sql;

        // Object created.
        $insert_customers_issues = new Database();
        $result = $insert_customers_issues->create($sql);

        // Location
        if($result == true){
            
            header('Location: ../666.3_facing_issues.php?message=Message sent successfully');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }










// customers_issues_status_update_[working].
    if(isset($_POST['update_status_to_working_on_it'])){
    
        // Getting data from form and storing in variables.
        $customers_issues_id = $_POST['customers_issues_id'];
        $issue_status = mysqli_real_escape_string($con, $_POST['issue_status']);

        // Query.    
        $sql = "UPDATE customers_issues_table SET issue_status = '$issue_status' WHERE customers_issues_id = $customers_issues_id; ";

        //echo $sql;

        // Object created.
        $update_customers_issues_to_working_on_it = new Database();
        $result = $update_customers_issues_to_working_on_it->update($sql);

        // Location
        if($result == true){
            header('Location: ../999.0_home_admin.php#title4');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }











// customers_issues_status_update_[complete].
    if(isset($_POST['update_status_to_completed'])){
    
        // Getting data from form and storing in variables.
        $customers_issues_id = $_POST['customers_issues_id'];
        $issue_status = mysqli_real_escape_string($con, $_POST['issue_status']);

        // Query.    
        $sql = "UPDATE customers_issues_table SET issue_status = '$issue_status' WHERE customers_issues_id = $customers_issues_id; ";

        //echo $sql;

        // Object created.
        $update_customers_issues_to_completed = new Database();
        $result = $update_customers_issues_to_completed->update($sql);

        // Location
        if($result == true){
            header('Location: ../999.0_home_admin.php#title4');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }











// customers_issues_data_delete.
    if(isset($_POST['delete_issue'])){
        
        // Getting data from form and storing in variables.
        $customers_issues_id = $_POST['customers_issues_id'];

        // Query.    
        $sql = "DELETE FROM customers_issues_table WHERE customers_issues_id = $customers_issues_id; ";

        //echo $sql;

        // Object created.
        $delete_issue = new Database();
        $result = $delete_issue->delete($sql);

        // Location
        if($result == true){
            header('Location: ../999.0_home_admin.php#title4');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }












// orders_store.
    if(isset($_POST['take_in_order'])){
    
        // Getting data from form and storing in variables.
        $customer_full_name = mysqli_real_escape_string($con, $_POST['customer_full_name']); 
        $customer_email = mysqli_real_escape_string($con, $_POST['customer_email']);
        $customer_mobile = mysqli_real_escape_string($con, $_POST['customer_mobile']);
        $orders = mysqli_real_escape_string($con, $_POST['orders']);
        date_default_timezone_set('Asia/Dhaka');
        $date = date("F j, Y, g:i a");

        // Query.    
        $sql = "INSERT INTO order_table (customer_full_name, customer_email, customer_mobile, orders, order_date) VALUES ('$customer_full_name', '$customer_email', '$customer_mobile', '$orders', '$date');";

        //echo $sql;

        // Object created.
        $insert_orders = new Database();
        $result = $insert_orders->create($sql);

        // Location
        if($result == true){
            header('Location: ../3_order_confirm.php');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }












// order_status_update_[working].
    if(isset($_POST['update_order_status_to_working_on_it'])){
    
        // Getting data from form and storing in variables.
        $order_id = $_POST['order_id'];
        $order_status = mysqli_real_escape_string($con, $_POST['order_status']);

        // Query.    
        $sql = "UPDATE order_table SET order_status = '$order_status' WHERE order_id = $order_id; ";

        //echo $sql;

        // Object created.
        $update_order_status_to_working_on_it = new Database();
        $result = $update_order_status_to_working_on_it->update($sql);

        // Location
        if($result == true){
            header('Location: ../999.0_home_admin.php#title7');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }











// order_status_update_[complete].
    if(isset($_POST['update_order_status_to_completed'])){
    
        // Getting data from form and storing in variables.
        $order_id = $_POST['order_id'];
        $order_status = mysqli_real_escape_string($con, $_POST['order_status']);

        // Query.    
        $sql = "UPDATE order_table SET order_status = '$order_status' WHERE order_id = $order_id; ";

        //echo $sql;

        // Object created.
        $update_order_status_to_completed = new Database();
        $result = $update_order_status_to_completed->update($sql);

        // Location
        if($result == true){
            header('Location: ../999.0_home_admin.php#title7');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }












// order_delete.
    if(isset($_POST['delete_order'])){
        
        // Getting data from form and storing in variables.
        $order_id = $_POST['order_id'];

        // Query.    
        $sql = "DELETE FROM order_table WHERE order_id = $order_id; ";

        //echo $sql;

        // Object created.
        $delete_order = new Database();
        $result = $delete_order->delete($sql);

        // Location
        if($result == true){
            header('Location: ../999.0_home_admin.php#title7');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }













?>