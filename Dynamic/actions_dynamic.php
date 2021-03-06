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






/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/







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





/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/






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






/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/







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





/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/






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





/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/






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





/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/






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






/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/
















// feedback_store.
if(isset($_POST['feedback_btn'])){
    
    // Getting data from form and storing in variables.
    $feedback_provider = mysqli_real_escape_string($con, $_POST['feedback_provider']); 
    $feedback = mysqli_real_escape_string($con, $_POST['feedback']);
    date_default_timezone_set('Asia/Dhaka');
    $date = date("F j, Y, g:i a");

    // Query.    
    $sql = "INSERT INTO feedback_table (sender, feedback, feedback_date) VALUES ('$feedback_provider', '$feedback', '$date');";

    //echo $sql;

    // Object created.
    $insert_feedback = new Database();
    $result = $insert_feedback->create($sql);

    // Location
    if($result == true){
        header('Location: ../index.php#F');
    }else{
        header('Location: actions_dynamic.php');
    }
    
}












// feedback_status_update_[publish].
if(isset($_POST['publish_feed'])){

    // Getting data from form and storing in variables.
    $id = $_POST['feedback_id'];
    $status = mysqli_real_escape_string($con, $_POST['status']);

    // Query.    
    $sql = "UPDATE feedback_table SET feedback_status = '$status' WHERE feedback_id = $id; ";

    //echo $sql;

    // Object created.
    $feedback_status = new Database();
    $result = $feedback_status->update($sql);

    // Location
    if($result == true){
        header('Location: ../999.0_home_admin.php#title8');
    }else{
        header('Location: actions_dynamic.php');
    }
    
}











// feedback_status_update_[draft].
if(isset($_POST['draft_feed'])){

    // Getting data from form and storing in variables.
    $id = $_POST['feedback_id'];
    $status = mysqli_real_escape_string($con, $_POST['status']);

    // Query.    
    $sql = "UPDATE feedback_table SET feedback_status = '$status' WHERE feedback_id = $id; ";

    //echo $sql;

    // Object created.
    $feedback_status = new Database();
    $result = $feedback_status->update($sql);

    // Location
    if($result == true){
        header('Location: ../999.0_home_admin.php#title8');
    }else{
        header('Location: actions_dynamic.php');
    }
    
}












// feedback_delete.
if(isset($_POST['delete_feed'])){
    
    // Getting data from form and storing in variables.
    $id = $_POST['feedback_id'];

    // Query.    
    $sql = "DELETE FROM feedback_table WHERE feedback_id = $id; ";

    //echo $sql;

    // Object created.
    $delete_feed = new Database();
    $result = $delete_feed->delete($sql);

    // Location
    if($result == true){
        header('Location: ../999.0_home_admin.php#title8');
    }else{
        header('Location: actions_dynamic.php');
    }
    
}















/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/








// blog_post_data_store.
    if(isset($_POST['insert_blog'])){
    
        // Getting data from form and storing in variables.
        $blogs_title = mysqli_real_escape_string($con, $_POST['blogs_title']);
        $blogs_highlight = mysqli_real_escape_string($con, $_POST['blogs_highlight']);
        $blogs_post = $_POST['blog_post_editor'];   
        $main_tag = mysqli_real_escape_string($con, $_POST['main_tag']);
        $tag_2 = mysqli_real_escape_string($con, $_POST['tag_2']);
        $tag_3 = mysqli_real_escape_string($con, $_POST['tag_3']);
        $tag_4 = mysqli_real_escape_string($con, $_POST['tag_4']);
        $tag_5 = mysqli_real_escape_string($con, $_POST['tag_5']);
        date_default_timezone_set('Asia/Dhaka');
        $blog_date = date("F j, Y, g:i a");
        
        

        // Getting picture data from form and storing in variables.
        $file = $_FILES['blog_picture'];
        $file_name = $_FILES['blog_picture']['name'];
        $file_tmp_name = $_FILES['blog_picture']['tmp_name'];
        $file_size = $_FILES['blog_picture']['size'];
        $file_error = $_FILES['blog_picture']['error'];
        $file_type = $_FILES['blog_picture']['type'];

        $file_explode = explode('.', $file_name);
        $file_extension = strtolower(end($file_explode));

        $allowed = array('jpg', 'jpeg', 'png');

        if(in_array($file_extension, $allowed)){

            if($file_error === 0){

                if($file_size < 3200000){

                    $new_file_name = uniqid('',true) . "." . $file_extension;

                    $file_destination = "../Media/Images/Blog_picture/" . $new_file_name;

                    // uploading picture.
                    move_uploaded_file($file_tmp_name, $file_destination);


                }else{
                echo "File is to big, maximum 3MB allowed.";
            }

            }else{
                echo "There was an error uploading this file.";
            }

        }else{
            echo "Only .jpg, .jpeg and .png files allowed.";
        }
        


        // Query.    
        $sql = "INSERT INTO blogs_table (blogs_title, blogs_highlight, blogs_post, main_tag, tag_2, tag_3, tag_4, tag_5, blog_date, blog_picture) VALUES ('$blogs_title', '$blogs_highlight', '$blogs_post', '$main_tag', '$tag_2', '$tag_3', '$tag_4', '$tag_5', '$blog_date', '$new_file_name');";

        //echo $sql;

        // Object created.
        $insert_blog_post = new Database();
        $result = $insert_blog_post->create($sql);

        // Location
        if($result == true){
            header('Location: ../999.1_blogs_admin.php');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }












// blog_post_data_update.
    if(isset($_POST['update_blog'])){
    
        // Getting data from form and storing in variables.
        $blogs_id = $_POST['id'];
        $blogs_title = mysqli_real_escape_string($con, $_POST['blogs_title']);
        $blogs_highlight = mysqli_real_escape_string($con, $_POST['blogs_highlight']);
        $blogs_post = $_POST['blog_post_editor'];   
        $main_tag = mysqli_real_escape_string($con, $_POST['main_tag']);
        $tag_2 = mysqli_real_escape_string($con, $_POST['tag_2']);
        $tag_3 = mysqli_real_escape_string($con, $_POST['tag_3']);
        $tag_4 = mysqli_real_escape_string($con, $_POST['tag_4']);
        $tag_5 = mysqli_real_escape_string($con, $_POST['tag_5']);
        $old_picture_name = $_POST['old_picture_name'];
        
        //unlinking old file
        $file_path = "../Media/Images/Blog_picture/" . $old_picture_name;
        unlink($file_path);

        // Getting picture data from form and storing in variables.
        $file = $_FILES['blog_picture'];
        $file_name = $_FILES['blog_picture']['name'];
        $file_tmp_name = $_FILES['blog_picture']['tmp_name'];
        $file_size = $_FILES['blog_picture']['size'];
        $file_error = $_FILES['blog_picture']['error'];
        $file_type = $_FILES['blog_picture']['type'];

        $file_explode = explode('.', $file_name);
        $file_extension = strtolower(end($file_explode));

        $allowed = array('jpg', 'jpeg', 'png');

        if(in_array($file_extension, $allowed)){

            if($file_error === 0){

                if($file_size < 3200000){

                    $new_file_name = uniqid('',true) . "." . $file_extension;

                    $file_destination = "../Media/Images/Blog_picture/" . $new_file_name;

                    // uploading picture.
                    move_uploaded_file($file_tmp_name, $file_destination);


                }else{
                echo "File is to big, maximum 3MB allowed.";
            }

            }else{
                echo "There was an error uploading this file.";
            }

        }else{
            echo "Only .jpg, .jpeg and .png files allowed.";
        }
        


        // Query.    
        $sql = "UPDATE blogs_table SET blogs_title = '$blogs_title', blogs_highlight = '$blogs_highlight', blogs_post = '$blogs_post', main_tag = '$main_tag', tag_2 = '$tag_2', tag_3 = '$tag_3', tag_4 = '$tag_4', tag_5 = '$tag_5', blog_picture = '$new_file_name' WHERE blogs_id = $blogs_id; ";

        //echo $sql;

        // Object created.
        $update_blog_post = new Database();
        $result = $update_blog_post->update($sql);

        // Location
        if($result == true){
            header('Location: ../999.1_blogs_admin.php#' . $blogs_id);
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }










// blog_status_update_[published].
    if(isset($_POST['publish_blog'])){
    
        // Getting data from form and storing in variables.
        $blogs_id = $_POST['id'];

        // Query.    
        $sql = "UPDATE blogs_table SET blog_status = 'published' WHERE blogs_id = $blogs_id; ";

        //echo $sql;

        // Object created.
        $update_blog_status_to_published = new Database();
        $result = $update_blog_status_to_published->update($sql);

        // Location
        if($result == true){
            header('Location: ../999.1_blogs_admin.php#' . $blogs_id);
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }












// blog_status_update_[drafted].
    if(isset($_POST['draft_blog'])){
    
        // Getting data from form and storing in variables.
        $blogs_id = $_POST['id'];

        // Query.    
        $sql = "UPDATE blogs_table SET blog_status = 'drafted' WHERE blogs_id = $blogs_id; ";

        //echo $sql;

        // Object created.
        $update_blog_status_to_drafted = new Database();
        $result = $update_blog_status_to_drafted->update($sql);

        // Location
        if($result == true){
            header('Location: ../999.1_blogs_admin.php#' . $blogs_id);
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }













// blog_delete.
    if(isset($_POST['delete_blog'])){
        
        // Getting data from form and storing in variables.
        $blogs_id = $_POST['id'];
        $old_picture_name = $_POST['old_picture_name'];

        //unlinking old file
        $file_path = "../Media/Images/Blog_picture/" . $old_picture_name;
        unlink($file_path);

        // Query.    
        $sql = "DELETE FROM blogs_table WHERE blogs_id = $blogs_id; ";

        //echo $sql;

        // Object created.
        $delete_blog = new Database();
        $result = $delete_blog->delete($sql);

        // Location
        if($result == true){
            header('Location: ../999.1_blogs_admin.php');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }













/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/

















// project_data_store.
    if(isset($_POST['insert_project'])){
    
        // Getting data from form and storing in variables.
        $projects_title = mysqli_real_escape_string($con, $_POST['projects_title']);
        $projects_details = $_POST['projects_details'];
        $go_live_link = mysqli_real_escape_string($con, $_POST['go_live_link']);   
        $git_hub_link = mysqli_real_escape_string($con, $_POST['git_hub_link']);
        $priority = mysqli_real_escape_string($con, $_POST['priority']);
        $main_tag = mysqli_real_escape_string($con, $_POST['main_tag']);
        $sub_tag_2 = mysqli_real_escape_string($con, $_POST['sub_tag_2']);
        $sub_tag_3 = mysqli_real_escape_string($con, $_POST['sub_tag_3']);
        
        

        // Getting picture data from form and storing in variables.
        $file = $_FILES['project_image'];
        $file_name = $_FILES['project_image']['name'];
        $file_tmp_name = $_FILES['project_image']['tmp_name'];
        $file_size = $_FILES['project_image']['size'];
        $file_error = $_FILES['project_image']['error'];
        $file_type = $_FILES['project_image']['type'];

        $file_explode = explode('.', $file_name);
        $file_extension = strtolower(end($file_explode));

        $allowed = array('jpg', 'jpeg', 'png');

        if(in_array($file_extension, $allowed)){

            if($file_error === 0){

                if($file_size < 3200000){

                    $new_file_name = uniqid('',true) . "." . $file_extension;

                    $file_destination = "../Media/Images/Project_pictures/" . $new_file_name;

                    // uploading picture.
                    move_uploaded_file($file_tmp_name, $file_destination);


                }else{
                echo "File is to big, maximum 3MB allowed.";
                }

            }else{
                echo "There was an error uploading this file.";
            }

        }else{
            echo "Only .jpg, .jpeg and .png files allowed.";
        }
        


        // Query.    
        $sql = "INSERT INTO projects_table (projects_title, projects_details, go_live_link, git_hub_link, priority, main_tag, sub_tag_2, sub_tag_3, project_image) VALUES ('$projects_title', '$projects_details', '$go_live_link', '$git_hub_link', '$priority', '$main_tag', '$sub_tag_2', '$sub_tag_3', '$new_file_name');";

        echo $sql;

        // Object created.
        $insert_projects = new Database();
        $result = $insert_projects->create($sql);

        // Location
        if($result == true){
            header('Location: ../999.2_projects_admin.php');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }












// project_data_update.
    if(isset($_POST['update_project'])){
    
        // Getting data from form and storing in variables.
        $projects_id = $_POST['id'];
        $projects_title = mysqli_real_escape_string($con, $_POST['projects_title']);
        $projects_details = $_POST['projects_details'];
        $go_live_link = mysqli_real_escape_string($con, $_POST['go_live_link']);   
        $git_hub_link = mysqli_real_escape_string($con, $_POST['git_hub_link']);
        $priority = mysqli_real_escape_string($con, $_POST['priority']);
        $main_tag = mysqli_real_escape_string($con, $_POST['main_tag']);
        $sub_tag_2 = mysqli_real_escape_string($con, $_POST['sub_tag_2']);
        $sub_tag_3 = mysqli_real_escape_string($con, $_POST['sub_tag_3']);
        $old_picture_name = $_POST['old_picture_name'];
        
        //unlinking old file
        $file_path = "../Media/Images/Project_pictures/" . $old_picture_name;
        unlink($file_path);

        // Getting picture data from form and storing in variables.
        $file = $_FILES['project_image'];
        $file_name = $_FILES['project_image']['name'];
        $file_tmp_name = $_FILES['project_image']['tmp_name'];
        $file_size = $_FILES['project_image']['size'];
        $file_error = $_FILES['project_image']['error'];
        $file_type = $_FILES['project_image']['type'];

        $file_explode = explode('.', $file_name);
        $file_extension = strtolower(end($file_explode));

        $allowed = array('jpg', 'jpeg', 'png');

        if(in_array($file_extension, $allowed)){

            if($file_error === 0){

                if($file_size < 3200000){

                    $new_file_name = uniqid('',true) . "." . $file_extension;

                    $file_destination = "../Media/Images/Project_pictures/" . $new_file_name;

                    // uploading picture.
                    move_uploaded_file($file_tmp_name, $file_destination);


                }else{
                echo "File is to big, maximum 3MB allowed.";
            }

            }else{
                echo "There was an error uploading this file.";
            }

        }else{
            echo "Only .jpg, .jpeg and .png files allowed.";
        }
        


        // Query.    
        $sql = "UPDATE projects_table SET projects_title = '$projects_title', projects_details = '$projects_details', go_live_link = '$go_live_link', git_hub_link = '$git_hub_link', priority = '$priority', main_tag = '$main_tag', sub_tag_2 = '$sub_tag_2', sub_tag_3 = '$sub_tag_3', project_image = '$new_file_name' WHERE projects_id = $projects_id; ";

        //echo $sql;

        // Object created.
        $update_projects = new Database();
        $result = $update_projects->update($sql);

        // Location
        if($result == true){
            header('Location: ../999.2_projects_admin.php#' . $projects_id);
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }















// projects_status_update_[published].
    if(isset($_POST['publish_project'])){
    
        // Getting data from form and storing in variables.
        $projects_id = $_POST['id'];

        // Query.    
        $sql = "UPDATE projects_table SET project_status = 'published' WHERE projects_id = $projects_id; ";

        //echo $sql;

        // Object created.
        $update_projects_status_to_published = new Database();
        $result = $update_projects_status_to_published->update($sql);

        // Location
        if($result == true){
            header('Location: ../999.2_projects_admin.php#' . $projects_id);
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }















// projects_status_update_[drafted].
    if(isset($_POST['draft_project'])){
    
        // Getting data from form and storing in variables.
        $projects_id = $_POST['id'];

        // Query.    
        $sql = "UPDATE projects_table SET project_status = 'drafted' WHERE projects_id = $projects_id; ";

        //echo $sql;

        // Object created.
        $update_projects_status_to_drafted = new Database();
        $result = $update_projects_status_to_drafted->update($sql);

        // Location
        if($result == true){
            header('Location: ../999.2_projects_admin.php#' . $projects_id);
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }













// projects_delete.
    if(isset($_POST['delete_project'])){
        
        // Getting data from form and storing in variables.
        $projects_id = $_POST['id'];
        $old_picture_name = $_POST['old_picture_name'];

        //unlinking old file
        $file_path = "../Media/Images/Project_pictures/" . $old_picture_name;
        unlink($file_path);

        // Query.    
        $sql = "DELETE FROM projects_table WHERE projects_id = $projects_id; ";

        //echo $sql;

        // Object created.
        $delete_project = new Database();
        $result = $delete_project->delete($sql);

        // Location
        if($result == true){
            header('Location: ../999.2_projects_admin.php');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }






/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/



















// product_data_store.
    if(isset($_POST['insert_product'])){
    
        // Getting data from form and storing in variables.
        $products_title = mysqli_real_escape_string($con, $_POST['products_title']);
        $products_details = $_POST['products_details'];
        $go_live_link = mysqli_real_escape_string($con, $_POST['go_live_link']);   
        $price = mysqli_real_escape_string($con, $_POST['price']);
        $priority = mysqli_real_escape_string($con, $_POST['priority']);
        $main_tag = mysqli_real_escape_string($con, $_POST['main_tag']);
        $sub_tag_2 = mysqli_real_escape_string($con, $_POST['sub_tag_2']);
        $sub_tag_3 = mysqli_real_escape_string($con, $_POST['sub_tag_3']);
        
        

        // Getting picture data from form and storing in variables.
        $file = $_FILES['product_image'];
        $file_name = $_FILES['product_image']['name'];
        $file_tmp_name = $_FILES['product_image']['tmp_name'];
        $file_size = $_FILES['product_image']['size'];
        $file_error = $_FILES['product_image']['error'];
        $file_type = $_FILES['product_image']['type'];

        $file_explode = explode('.', $file_name);
        $file_extension = strtolower(end($file_explode));

        $allowed = array('jpg', 'jpeg', 'png');

        if(in_array($file_extension, $allowed)){

            if($file_error === 0){

                if($file_size < 3200000){

                    $new_file_name = uniqid('',true) . "." . $file_extension;

                    $file_destination = "../Media/Images/Store_pictures/UI_Ux_template/" . $new_file_name;

                    // uploading picture.
                    move_uploaded_file($file_tmp_name, $file_destination);


                }else{
                echo "File is to big, maximum 3MB allowed.";
                }

            }else{
                echo "There was an error uploading this file.";
            }

        }else{
            echo "Only .jpg, .jpeg and .png files allowed.";
        }
        


        // Query.    
        $sql = "INSERT INTO store_table (products_title, products_details, go_live_link, price, priority, main_tag, sub_tag_2, sub_tag_3, product_image) VALUES ('$products_title', '$products_details', '$go_live_link', '$price', '$priority', '$main_tag', '$sub_tag_2', '$sub_tag_3', '$new_file_name');";

        echo $sql;

        // Object created.
        $insert_products = new Database();
        $result = $insert_products->create($sql);

        // Location
        if($result == true){
            header('Location: ../999.3_store_admin.php');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }












// product_data_update.
    if(isset($_POST['update_product'])){
    
        // Getting data from form and storing in variables.
        $products_id = $_POST['id'];
        $products_title = mysqli_real_escape_string($con, $_POST['products_title']);
        $products_details = $_POST['products_details'];
        $go_live_link = mysqli_real_escape_string($con, $_POST['go_live_link']);   
        $price = mysqli_real_escape_string($con, $_POST['price']);
        $priority = mysqli_real_escape_string($con, $_POST['priority']);
        $main_tag = mysqli_real_escape_string($con, $_POST['main_tag']);
        $sub_tag_2 = mysqli_real_escape_string($con, $_POST['sub_tag_2']);
        $sub_tag_3 = mysqli_real_escape_string($con, $_POST['sub_tag_3']);
        $old_picture_name = $_POST['old_picture_name'];
        
        //unlinking old file
        $file_path = "../Media/Images/Store_pictures/UI_Ux_template/" . $old_picture_name;
        unlink($file_path);

        // Getting picture data from form and storing in variables.
        $file = $_FILES['product_image'];
        $file_name = $_FILES['product_image']['name'];
        $file_tmp_name = $_FILES['product_image']['tmp_name'];
        $file_size = $_FILES['product_image']['size'];
        $file_error = $_FILES['product_image']['error'];
        $file_type = $_FILES['product_image']['type'];

        $file_explode = explode('.', $file_name);
        $file_extension = strtolower(end($file_explode));

        $allowed = array('jpg', 'jpeg', 'png');

        if(in_array($file_extension, $allowed)){

            if($file_error === 0){

                if($file_size < 3200000){

                    $new_file_name = uniqid('',true) . "." . $file_extension;

                    $file_destination = "../Media/Images/Store_pictures/UI_Ux_template/" . $new_file_name;

                    // uploading picture.
                    move_uploaded_file($file_tmp_name, $file_destination);


                }else{
                echo "File is to big, maximum 3MB allowed.";
            }

            }else{
                echo "There was an error uploading this file.";
            }

        }else{
            echo "Only .jpg, .jpeg and .png files allowed.";
        }
        


        // Query.    
        $sql = "UPDATE store_table SET products_title = '$products_title', products_details = '$products_details', go_live_link = '$go_live_link', price = '$price', priority = '$priority', main_tag = '$main_tag', sub_tag_2 = '$sub_tag_2', sub_tag_3 = '$sub_tag_3', product_image = '$new_file_name' WHERE products_id = $products_id; ";

        //echo $sql;

        // Object created.
        $update_products = new Database();
        $result = $update_products->update($sql);

        // Location
        if($result == true){
            header('Location: ../999.3_store_admin.php#' . $products_id);
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }















// products_status_update_[published].
    if(isset($_POST['publish_product'])){
    
        // Getting data from form and storing in variables.
        $products_id = $_POST['id'];

        // Query.    
        $sql = "UPDATE store_table SET product_status = 'published' WHERE products_id = $products_id; ";

        //echo $sql;

        // Object created.
        $update_products_status_to_published = new Database();
        $result = $update_products_status_to_published->update($sql);

        // Location
        if($result == true){
            header('Location: ../999.3_store_admin.php#' . $products_id);
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }















// products_status_update_[drafted].
    if(isset($_POST['draft_product'])){
    
        // Getting data from form and storing in variables.
        $products_id = $_POST['id'];

        // Query.    
        $sql = "UPDATE store_table SET product_status = 'drafted' WHERE products_id = $products_id; ";

        //echo $sql;

        // Object created.
        $update_products_status_to_drafted = new Database();
        $result = $update_products_status_to_drafted->update($sql);

        // Location
        if($result == true){
            header('Location: ../999.3_store_admin.php#' . $products_id);
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }













// products_delete.
    if(isset($_POST['delete_product'])){
        
        // Getting data from form and storing in variables.
        $products_id = $_POST['id'];
        $old_picture_name = $_POST['old_picture_name'];

        //unlinking old file
        $file_path = "../Media/Images/Store_pictures/UI_Ux_template/" . $old_picture_name;
        unlink($file_path);

        // Query.    
        $sql = "DELETE FROM store_table WHERE products_id = $products_id; ";

        //echo $sql;

        // Object created.
        $delete_product = new Database();
        $result = $delete_product->delete($sql);

        // Location
        if($result == true){
            header('Location: ../999.3_store_admin.php');
        }else{
            header('Location: actions_dynamic.php');
        }
        
    }






/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/













// Function to encrypt password.
function encryptPassword($arg1) {
    $hash_format = "$2y$10$";
    $salt = "22charactersarepresent";
    $hash_and_salt = $hash_format . $salt;
    $arg1 = crypt( $arg1, $hash_and_salt ); 
    return $arg1;
}
















// sending pin.
function pin($arg){
    global $con;
        
                
                // generating otp.
                $otp = rand(100000, 999999);
    
                // mail.
                $to = $arg;
                $subject = "Login pin.";
                $txt = "Hey, $otp is your login pin.";
                $headers = "From: doostupi@gmail.com";
    
                // sending mail.
                mail($to,$subject,$txt,$headers);
    
                // encryption.
                $otp = encryptPassword($otp);
        
                // Query.    
                $sql = "UPDATE security_table SET pin = '$otp'; ";
        
                //echo $sql;
        
                // Object created.
                $update_otp = new Database();
                $result = $update_otp->update($sql);
        
                // msg.
                $msg = "PIN Sent, This might take some time check You Email.";
        
                // Location.
                if($result){
                    return $msg;
                }else{
                    echo die();
                }
                
        }
















// admin log in.
function login(){
global $con;

    if(isset($_POST['admin_login'])){
        
        // Getting data from form and storing in variables.
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $password = encryptPassword($password);

        // Query.    
        $sql = "SELECT p_word FROM security_table; ";

        //echo $sql;

        // Object created.
        $read_password = new Database();
        $result = $read_password->read($sql);

        // msg.
        $msg = "Wrong Password, Try Again.";

        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }

        // Location.
        if($data[0]['p_word'] == $password){

            // Query.    
            $sql_2 = "SELECT email FROM basic_info_table; ";

            //echo $sql;

            // Object created.
            $read_email = new Database();
            $result_2 = $read_email->read($sql_2);

            while($row_2 = mysqli_fetch_assoc($result_2)){
                $data_2[] = $row_2;
            }

            $msg_1 = pin($data_2[0]['email']);
            
            header('Location: ../777.1.2_admin_pin_check.php?message='.$msg_1);
        }else{
            return $msg;
        }
        
    }
}













// admin password change.
function change_pass(){
global $con;

    if(isset($_POST['change_pass'])){
        
        // Getting data from form and storing in variables.
        $old_password = mysqli_real_escape_string($con, $_POST['old_password']);
        $new_password = mysqli_real_escape_string($con, $_POST['new_password']);
        $confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);
        $old_password = encryptPassword($old_password);

        // Query.    
        $sql_0 = "SELECT p_word FROM security_table; ";

        //echo $sql;

        // Object created.
        $read_password = new Database();
        $result = $read_password->read($sql_0);

        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }

        // Location.
        if($data[0]['p_word'] == $old_password){

            if($new_password === $confirm_password){

                $password = encryptPassword($new_password);

                // Query.    
                $sql = "UPDATE security_table SET p_word = '$password'; ";

                //echo $sql;
        
                // Object created.
                $update_password = new Database();
                $result = $update_password->update($sql);

                // Location.
                if($result == true){

                    $msg = "Password Changed Successfully.";
                    return $msg;

                    header('Location: ../777.2_admin_change_password.php');
                }else{
                    echo die();
                }

            }else{

                $msg = "Passwords Don't Match, Check Again.";
                return $msg;

            }

        }else{

            $msg = "Wrong Password, Try Again.";
            return $msg;

        }
        
    }
}


















// sending otp.
function otp($arg){
global $con;
    
        if(isset($_POST['sent_otp'])){
            
            // generating otp.
            $otp = rand(100000, 999999);

            // mail.
            $to = $arg;
            $subject = "Portfolio Password changing OTP.";
            $txt = "Hey, looks like you've forgotten your portfolio admin login password, insert $otp as OTP, and change your password.";
            $headers = "From: doostupi@gmail.com";

            // sending mail.
            mail($to,$subject,$txt,$headers);

            // encryption.
            $otp = encryptPassword($otp);
    
            // Query.    
            $sql = "UPDATE security_table SET otp = '$otp'; ";
    
            //echo $sql;
    
            // Object created.
            $update_otp = new Database();
            $result = $update_otp->update($sql);
    
            // msg.
            $msg = "OTP Sent, Check You Email.";
    
            // Location.
            if($result){
                return $msg;
            }else{
                echo die();
            }
            
        }
    }











// checking otp.
function forgot_password(){
global $con;
        
            if(isset($_POST['forgot_password'])){
                
                // Getting data from form and storing in variables.
                $otp = mysqli_real_escape_string($con, $_POST['otp']);
                $new_password = mysqli_real_escape_string($con, $_POST['new_password']);
    
                // encryption.
                $new_password = encryptPassword($new_password);
                $otp = encryptPassword($otp);

                // Query.    
                $sql = "SELECT otp FROM security_table; ";
        
                // Object created.
                $read_otp = new Database();
                $result = $read_otp->read($sql);

                while($row = mysqli_fetch_assoc($result)){
                    $data[] = $row;
                }
        
                // check otp.
                if($data[0]['otp'] == $otp){

                    // Query.    
                    $sql_2 = "UPDATE security_table SET p_word = '$new_password'; ";
            
                    //echo $sql;
            
                    // Object created.
                    $update_pass = new Database();
                    $result_2 = $update_pass->update($sql_2);

                    // msg.
                    $msg = "Password Changed Successfully.";
                    return $msg;

                }else{

                    // msg.
                    $msg = "Invalid OTP.";
                    return $msg;

                }
                
            }
}













// admin pin check.
function verifyPin(){
    global $con;
    
        if(isset($_POST['pin_confirm'])){
            
            // Getting data from form and storing in variables.
            $pin = mysqli_real_escape_string($con, $_POST['pin']);
            $pin = encryptPassword($pin);
    
            // Query.    
            $sql = "SELECT pin FROM security_table; ";
    
            //echo $sql;
    
            // Object created.
            $read_pin = new Database();
            $result = $read_pin->read($sql);
    
            // msg.
            $msg = "Wrong Pin, Try Again.";
    
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
    
            // Location.
            if($data[0]['pin'] == $pin){
                
                header('Location: ../999.0_home_admin.php');
                
            }else{
                return $msg;
            }
            
        }
    }

















/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/
/************************************************/


?>