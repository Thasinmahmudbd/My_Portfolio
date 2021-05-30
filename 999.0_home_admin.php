<!-- dynamic -->
     
<?php include 'Dynamic/actions_dynamic.php'; ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Required css links for plugins -->
    <link rel="stylesheet" href="Design/Owl_carousel/owl.carousel.css">
    <link rel="stylesheet" href="Design/Owl_carousel/owl.theme.green.css">
    
    <!-- Required css links for style-->
    <link rel="stylesheet" href="Design/Global/00_basic_style.css">
    <link rel="stylesheet" href="Design/Global/01_header_style.css">
    <link rel="stylesheet" href="Design/Global/02_navbar_style.css">
    <link rel="stylesheet" href="Design/Global/03_forms_style.css">
    <link rel="stylesheet" href="Design/Global/04_footer_style.css">
    <link rel="stylesheet" href="Design/Global/05_side_bar_style.css">
    <link rel="stylesheet" href="Design/Global/06_anchor_bar_style.css">
    <link rel="stylesheet" href="Design/Administration/999.0_home_admin_style.css">
    
    <!-- Required css links for responsive -->
    <link rel="stylesheet" href="Design/Responsive/01_header_res.css">
    <link rel="stylesheet" href="Design/Responsive/02_navbar_res.css">
    <link rel="stylesheet" href="Design/Responsive/index_res.css">
    <link rel="stylesheet" href="Design/Responsive/04_footer_res.css">
    <link rel="stylesheet" href="Design/Responsive/admin_res.css">
    
    <!-- fonts (google fonts) -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    
    <!-- icons (font awsome) -->
    <script src="https://kit.fontawesome.com/aafecdc4bf.js" crossorigin="anonymous"></script>
    
    <!-- Required js scripts for owl-->
    <script src="Script/Owl_carousel/jquery.min.js"></script>
    <script src="Script/Owl_carousel/owl.carousel.min.js"></script>
    
    <!-- Required js and css for aos -->    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    
    <!-- js scripts for design-->
    <script src="Script/DOM_manipulation/stickynavbar.js"></script>
    <script src="Script/DOM_manipulation/slidingmenu.js"></script>
    <script src="Script/DOM_manipulation/onscroll.js"></script>
    <script src="Script/DOM_manipulation/curtainnavbar.js"></script>
    <script src="Script/DOM_manipulation/onclickshow.js"></script>

    <title>Landing page template</title>
  </head>
  <body>
   

    
    
    <!-- navbar -->
    
    <?php include 'Includable_portions/999.0_navbar_admin.php'; ?>
    
                
        
    
    <!-- basic info -->
      
    <div class="basic_info_container">
      
        <button id="title" class="title pullUp" onclick="showContent()" >Basic Info</button>
        
        <div id="Content" class="basic_info show">
            
            <div class="info">
            
 <!-- image ******************************************************************************************************** -->
               
                <div class="basic_info_section">
                   
                    <img src="Media/Images/Profile_picture/Profile_picture.jpg" alt="" class="current_profile_pic" width="100%">
                    
                    <form action="Dynamic/actions_dynamic.php" method="post" class="profile_pic" enctype="multipart/form-data">

                       <input type="file" class="upload_box" name="profile_picture" required>

                       <button type="submit" class="btn insert_btn" name="upload_profile_picture">Upload</button>

                   </form>
                    
                </div>
                    
                <!-- crud for basic info --> 
                              
                <?php
                    
                        $query_to_read_basic_info = "SELECT * FROM basic_info_table;";
                        
                        $read_basic_info = new Database();
                        $basic_info = $read_basic_info->read($query_to_read_basic_info); 
                
                        while($row = mysqli_fetch_assoc($basic_info)){
                            $data[] = $row;
                        }
                
                        //print_r($basic_info);
                
                ?>
                    
                    
                <form method="post" action="Dynamic/actions_dynamic.php" class="basic_info_section">
                     
<!-- name ******************************************************************************************************** -->
                      
                       <p class="current_info"><?php echo $data[0]['name']; ?></p>
                       
                       <div>
                           
                           <label for="" class="label">Name</label>
                           
                           <input name="name" type="text" value="<?php echo $data[0]['name']; ?>" class="input">
                           
                       </div>
                       
<!-- about ******************************************************************************************************** -->
                       
                       <p class="current_info"><?php echo $data[0]['about']; ?></p>
                       
                       <div>
                           
                           <label for="" class="label">About</label>
                           
                           <textarea name="about" class="input textarea"><?php echo $data[0]['about']; ?></textarea>
                           
                       </div>
                       
<!-- email ******************************************************************************************************** -->
                       
                       <p class="current_info"><?php echo $data[0]['email']; ?></p>
                       
                       <div>
                           
                           <label for="" class="label">Email</label>
                           
                           <input type="email" name="email" value="<?php echo $data[0]['email']; ?>" class="input">
                           
                       </div>
                       
<!-- number 1 ******************************************************************************************************** -->
                       
                       <p class="current_info"><?php echo $data[0]['number_1']; ?></p>
                       
                       <div>
                           
                           <label for="" class="label">Mobile no.1</label>
                           
                           <input type="tel" name="mobile_1" value="<?php echo $data[0]['number_1']; ?>" class="input">
                           
                       </div>
                       
<!-- number 2 ******************************************************************************************************** -->
                       
                       <p class="current_info"><?php echo $data[0]['number_2']; ?></p>
                       
                       <div>
                           
                           <label for="" class="label">Mobile no.2</label>
                           
                           <input type="tel" name="mobile_2" value="<?php echo $data[0]['number_2']; ?>" class="input">
                           
                       </div>
                       
<!-- facebook ******************************************************************************************************** -->
                       
                       <p class="current_info"><a href="<?php echo $data[0]['fb']; ?>" target="_blank">Facebook</a> [Link]: <?php echo $data[0]['fb']; ?></p>
                       
                       <div>
                           
                           <label for="" class="label">Facebook</label>
                           
                           <input type="url" name="facebook" value="<?php echo $data[0]['fb']; ?>" class="input">
                           
                       </div>
                       
<!-- fb page ******************************************************************************************************** -->
                       
                       <p class="current_info"><a href="<?php echo $data[0]['fb_page']; ?>" target="_blank">Page</a> [Link]: <?php echo $data[0]['fb_page']; ?></p>
                       
                       <div>
                           
                           <label for="" class="label">Page</label>
                           
                           <input type="url" name="page" value="<?php echo $data[0]['fb_page']; ?>" class="input">
                           
                       </div>
                       
<!-- linkedin ******************************************************************************************************** -->
                       
                       <p class="current_info"><a href="<?php echo $data[0]['linkedin']; ?>" target="_blank">Linkedin</a> [Link]: <?php echo $data[0]['linkedin']; ?></p>
                       
                       <div>
                           
                           <label for="" class="label">Linkedin</label>
                           
                           <input type="url" name="linkedin" value="<?php echo $data[0]['linkedin']; ?>" class="input">
                           
                       </div>
                       
<!-- insta ******************************************************************************************************** -->
                       
                       <p class="current_info"><a href="<?php echo $data[0]['insta']; ?>" target="_blank">Instagram</a> [Link]: <?php echo $data[0]['insta']; ?></p>
                       
                       <div>
                           
                           <label for="" class="label">Instagram</label>
                           
                           <input type="url" name="insta" value="<?php echo $data[0]['insta']; ?>" class="input">
                           
                       </div>
                       
<!-- email ******************************************************************************************************** 
                       
                       <p class="current_info"><a href="#">Email</a> [Link]:</p>
                       
                       <div>
                           
                           <label for="" class="label">Email</label>
                           
                           <input type="email" name="email" class="input">
                           
                       </div> -->
                       
<!-- github ******************************************************************************************************** -->
                       
                       <p class="current_info"><a href="<?php echo $data[0]['github']; ?>" target="_blank">Github</a> [Link]: <?php echo $data[0]['github']; ?></p>
                       
                       <div>
                           
                           <label for="" class="label">Github</label>
                           
                           <input type="url" name="github" value="<?php echo $data[0]['github']; ?>" class="input">
                           
                       </div>
                       
<!-- pinterest ******************************************************************************************************** -->
                       
                       <p class="current_info"><a href="<?php echo $data[0]['pinterest']; ?>" target="_blank">Pinterest</a> [Link]: <?php echo $data[0]['pinterest']; ?></p>
                       
                       <div>
                           
                           <label for="" class="label">Pinterest</label>
                           
                           <input name="pinterest" type="url" value="<?php echo $data[0]['pinterest']; ?>" class="input">
                           
                       </div>
                       
<!-- fiverr ******************************************************************************************************** -->
                       
                       <p class="current_info"><a href="<?php echo $data[0]['fiverr']; ?>" target="_blank">Fiverr</a> [Link]: <?php echo $data[0]['fiverr']; ?></p>
                       
                       <div>
                           
                           <label for="" class="label">Fiverr</label>
                           
                           <input type="url" name="fiverr" value="<?php echo $data[0]['fiverr']; ?>" class="input">
                           
                       </div>
                       
<!-- btn ******************************************************************************************************** -->

                       <span></span>
                       
                       <?php
                    
                        $query = "SELECT id FROM basic_info_table;";
                        
                        $obj = new Database();
                        $data = $obj->read($query);
                    
                        if(empty($data)){
                            
                            echo "<button type='submit' class='btn insert_btn' name='insert_basic_info'>Insert</button>";
                            
                        }
                        else{
                            
                            echo "<button type='submit' class='btn update_btn' name='update_basic_info'>Update</button>";
                            
                        }
                    
                        ?>

                </form>
                
            </div>
            
            <div class="gap"></div>
            
        </div>    
        
    </div> 
      
      
      
      
        
      
      
      
      
      
    <!-- client confidentiality -->
      
    <div class="client_confidentiality_container">
      
        <button id="title2" class="title pullUp" onclick="showContent2()" >Client Confidentiality</button>
        
        <div id="Content2" class="client_confidentiality show">
            
                <!-- crud for client confidentiality -->
                    
                <?php
                    
                        $query_to_read_client_confidentiality = "SELECT * FROM client_confidentiality_table;";
                        
                        $read_client_confidentiality = new Database();
                        $client_confidentiality = $read_client_confidentiality->read($query_to_read_client_confidentiality);
                
                        //print_r($data);
                
                ?>
                    
                    
                <form method="post" action="Dynamic/actions_dynamic.php" class="policy_section">
                     
<!-- new policy ******************************************************************************************************** -->
                           
                    <label class="label">New Policy</label>
                           
                    <textarea name="new_policy" type="text" class="input textarea" required rows="5"></textarea>
                       
<!-- btn ******************************************************************************************************** -->
                       
                    <button type="submit" class="btn insert_btn" name="insert_client_confidentials">Insert</button>       
                        
                </form>
                
                
<!-- policy template -->
                       
            <?php 
            
            foreach($client_confidentiality as $row){
                
            ?>   

                <div class="policy_section policy_template">

                        <li><?php echo $row['client_confidentiality_policy'] ?></li>
                        
                        <form method="post" action="Dynamic/actions_dynamic.php" class="policy_template_form">   

                            <textarea name="updated_policy" rows="3" type="text" class="input textarea"><?php echo $row['client_confidentiality_policy']; ?></textarea>
                            
                            <input id="policy_id" name="policy_id" type="hidden" value="<?php echo $row['client_confidentiality_policy_id']; ?>">

                            <div class="form_btns">
                            
                                <button type="submit" class="btn update_btn update_btn_circle" name="update_client_confidentials"><i class="fas fa-pen"></i></button>

                                <button type="submit" class="btn delete_btn delete_btn_circle" name="delete_client_confidentials"><i class="fas fa-trash"></i></button>
                                
                            </div>

                        </form>

                </div>
               
            <?php } ?>
               
            <div class="gap"></div>
                
        </div>
            
    </div>
          
      
      
      
      
      
      
      
    
       
    
    <!-- developer support -->
      
    <div class="client_confidentiality_container">
      
        <button id="title3" class="title pullUp" onclick="showContent3()" >Developer Support</button>
        
        <div id="Content3" class="client_confidentiality show">
            
                <!-- crud for developers support -->
                    
                <?php
                    
                        $query_to_read_developers_support = "SELECT * FROM developers_support_table;";
                        
                        $read_developers_support = new Database();
                        $developers_support = $read_developers_support->read($query_to_read_developers_support);
                
                        //print_r($data);
                
                ?>
                    
                    
                <form method="post" action="Dynamic/actions_dynamic.php" class="policy_section">
                     
<!-- new policy ******************************************************************************************************** -->
                           
                    <label class="label">New Policy</label>
                           
                    <textarea name="new_policy" type="text" class="input textarea" required rows="5"></textarea>
                       
<!-- btn ******************************************************************************************************** -->
                       
                    <button type="submit" class="btn insert_btn" name="insert_developers_support">Insert</button>       
                        
                </form>
                
                
<!-- policy template -->
                       
            <?php 
            
            foreach($developers_support as $row){
                
            ?>   

                <div class="policy_section policy_template">

                        <li><?php echo $row['developers_support_policy'] ?></li>
                        
                        <form method="post" action="Dynamic/actions_dynamic.php" class="policy_template_form">   

                            <textarea name="updated_policy" rows="3" type="text" class="input textarea"><?php echo $row['developers_support_policy']; ?></textarea>
                            
                            <input id="policy_id" name="policy_id" type="hidden" value="<?php echo $row['developers_support_policy_id']; ?>">

                            <div class="form_btns">
                            
                                <button type="submit" class="btn update_btn update_btn_circle" name="update_developers_support"><i class="fas fa-pen"></i></button>

                                <button type="submit" class="btn delete_btn delete_btn_circle" name="delete_developers_support"><i class="fas fa-trash"></i></button>
                                
                            </div>

                        </form>

                </div>
               
            <?php } ?>
               
            <div class="gap"></div>
                
        </div>
            
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- Facing issues -->
      
    <div class="client_confidentiality_container">
      
        <button id="title4" class="title pullUp" onclick="showContent4()" >Customer Issues</button>
        
        <div id="Content4" class="client_confidentiality show">
            
                <!-- crud for customers issues -->
                    
                <?php
                    
                        $query_to_read_customers_issues = "SELECT * FROM customers_issues_table;";
                        
                        $read_customers_issues = new Database();
                        $customers_issues = $read_customers_issues->read($query_to_read_customers_issues);
                
                        //print_r($data);
                
                ?>
                    
                
                
<!-- policy template -->
                       
            <?php 
            
            foreach($customers_issues as $row){
                
            ?>   

                <div class="policy_section issues_template">
                       
                       
                        <div class="issues_info <?php 
            
                            if($row['issue_status'] == 'Pending'){
                                
                                echo " bg_col_pending";
                                
                            }
                            elseif($row['issue_status'] == 'Working on it'){
                                
                                echo " bg_col_working_on_it";
                                
                            }
                            elseif($row['issue_status'] == 'Completed'){
                                
                                echo " bg_col_completed";
                                
                            }
                
                        ?>">

                            <p><span><b>Date: </b></span><?php echo $row['issues_date']; ?></p>
                            
                            <p><span><b>Client: </b></span><?php echo $row['customers_full_name']; ?></p>

                            <p><span><b>Email: </b></span><?php echo $row['customers_email']; ?></p>

                            <p><span><b>Mobile: </b></span><?php echo $row['customers_mobile']; ?></p>

                            <p class="issues"><span><b>Issue / Problem: </b></span><br><?php echo $row['customers_issues']; ?></p>
                            
                        </div>
                        
                        <div class="issue_related_form_btns">
                        
                            <form method="post" action="Dynamic/actions_dynamic.php" class="policy_template_form"> 

                                <input name="customers_issues_id" type="hidden" value="<?php echo $row['customers_issues_id']; ?>"> 
                                 
                                <input name="issue_status" type="hidden" value="Working on it">

                                <button type="submit" class="btn update_btn" name="update_status_to_working_on_it">Working on it</button>

                            </form>

                            <form method="post" action="Dynamic/actions_dynamic.php" class="policy_template_form"> 

                                <input name="customers_issues_id" type="hidden" value="<?php echo $row['customers_issues_id']; ?>">
                                
                                <input name="issue_status" type="hidden" value="Completed">  

                                <button type="submit" class="btn insert_btn" name="update_status_to_completed">Completed</button>

                            </form>

                            <form method="post" action="Dynamic/actions_dynamic.php" class="policy_template_form"> 

                                <input name="customers_issues_id" type="hidden" value="<?php echo $row['customers_issues_id']; ?>"> 

                                <button type="submit" class="btn delete_btn" name="delete_issue">Remove from database</button>

                            </form>
                            
                        </div>

                </div>
               
            <?php } ?>
               
            <div class="gap"></div>
                
        </div>
            
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- Learn more -->
      
    <div class="client_confidentiality_container">
      
        <button id="title5" class="title pullUp" onclick="showContent5()" >Learn More</button>
        
        <div id="Content5" class="client_confidentiality show">
            
                <!-- crud for learn more -->
                    
                <?php
                    
                        $query_to_read_learn_more = "SELECT * FROM learn_more_table;";
                        
                        $read_learn_more = new Database();
                        $learn_more = $read_learn_more->read($query_to_read_learn_more);
                
                        //print_r($data);
                
                ?>
                    
                    
                <form method="post" action="Dynamic/actions_dynamic.php" class="policy_section">
                     
<!-- new policy ******************************************************************************************************** -->
                           
                    <label class="label">Title / Question</label>
                         
                    <input name="new_learn_more_article_title" type="text" class="input" required>
                          
                    <label class="label">Description / Answer</label>
                           
                    <textarea name="new_learn_more_article" type="text" class="input textarea" required rows="5"></textarea>
                       
<!-- btn ******************************************************************************************************** -->
                       
                    <button type="submit" class="btn insert_btn" name="insert_learn_more_article">Insert</button>       
                        
                </form>
                
                
<!-- policy template -->
                       
            <?php 
            
            foreach($learn_more as $row){
                
            ?>   

                <div class="policy_section policy_template">

                        <p><span class="learn_more_article_title"><h1><?php echo $row['learn_more_article_title'] ?></h1></span><br><?php echo $row['learn_more_article'] ?></p>
                        
                        <form method="post" action="Dynamic/actions_dynamic.php" class="policy_template_form">   

                         
                            <input name="updated_learn_more_article_title" type="text" class="input" value="<?php echo $row['learn_more_article_title']; ?>">
                            
                            
                            <span></span>
                            
                            
                            <textarea name="updated_learn_more_article" rows="3" type="text" class="input textarea"><?php echo $row['learn_more_article']; ?></textarea>
                            
                            <input id="policy_id" name="policy_id" type="hidden" value="<?php echo $row['learn_more_article_id']; ?>">

                            <div class="form_btns">
                            
                                <button type="submit" class="btn update_btn update_btn_circle" name="update_learn_more_article"><i class="fas fa-pen"></i></button>

                                <button type="submit" class="btn delete_btn delete_btn_circle" name="delete_learn_more_article"><i class="fas fa-trash"></i></button>
                                
                            </div>

                        </form>

                </div>
               
            <?php } ?>
               
            <div class="gap"></div>
                
        </div>
            
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- Refund Policy -->
      
    <div class="client_confidentiality_container">
      
        <button id="title6" class="title pullUp" onclick="showContent6()" >Refund Policy</button>
        
        <div id="Content6" class="client_confidentiality show">
            
                <!-- crud for refund policy -->
                    
                <?php
                    
                        $query_to_read_refund_policy = "SELECT * FROM refund_policy_table;";
                        
                        $read_refund_policy = new Database();
                        $refund_policy = $read_refund_policy->read($query_to_read_refund_policy);
                
                        //print_r($data);
                
                ?>
                    
                    
                <form method="post" action="Dynamic/actions_dynamic.php" class="policy_section">
                     
<!-- new policy ******************************************************************************************************** -->
                           
                    <label class="label">New Policy</label>
                           
                    <textarea name="new_policy" type="text" class="input textarea" required rows="5"></textarea>
                       
<!-- btn ******************************************************************************************************** -->
                       
                    <button type="submit" class="btn insert_btn" name="insert_refund_policy">Insert</button>       
                        
                </form>
                
                
<!-- policy template -->
                       
            <?php 
            
            foreach($refund_policy as $row){
                
            ?>   

                <div class="policy_section policy_template">

                        <li><?php echo $row['refund_policy'] ?></li>
                        
                        <form method="post" action="Dynamic/actions_dynamic.php" class="policy_template_form">   

                            <textarea name="updated_policy" rows="3" type="text" class="input textarea"><?php echo $row['refund_policy']; ?></textarea>
                            
                            <input id="policy_id" name="policy_id" type="hidden" value="<?php echo $row['refund_policy_id']; ?>">

                            <div class="form_btns">
                            
                                <button type="submit" class="btn update_btn update_btn_circle" name="update_refund_policy"><i class="fas fa-pen"></i></button>

                                <button type="submit" class="btn delete_btn delete_btn_circle" name="delete_refund_policy"><i class="fas fa-trash"></i></button>
                                
                            </div>

                        </form>

                </div>
               
            <?php } ?>
               
            <div class="gap"></div>
                
        </div>
            
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- Orders -->
      
    <div class="client_confidentiality_container">
      
        <button id="title7" class="title pullUp" onclick="showContent7()" >Orders Received</button>
        
        <div id="Content7" class="client_confidentiality show">
            
                <!-- crud for customers issues -->
                    
                <?php
                    
                        $query_to_read_orders = "SELECT * FROM order_table;";
                        
                        $read_orders = new Database();
                        $orders = $read_orders->read($query_to_read_orders);
                
                        //print_r($data);
                
                ?>
                    
                
                
<!-- policy template -->
                       
            <?php 
            
            foreach($orders as $row){
                
            ?>   

                <div class="policy_section issues_template">
                       
                       
                        <div class="issues_info <?php 
            
                            if($row['order_status'] == 'Pending'){
                                
                                echo " bg_col_pending";
                                
                            }
                            elseif($row['order_status'] == 'Working on it'){
                                
                                echo " bg_col_working_on_it";
                                
                            }
                            elseif($row['order_status'] == 'Completed'){
                                
                                echo " bg_col_completed";
                                
                            }
                
                        ?>">

                            <p><span><b>Date: </b></span><?php echo $row['order_date']; ?></p>
                           
                            <p><span><b>Client: </b></span><?php echo $row['customer_full_name']; ?></p>

                            <p><span><b>Email: </b></span><?php echo $row['customer_email']; ?></p>

                            <p><span><b>Mobile: </b></span><?php echo $row['customer_mobile']; ?></p>

                            <p class="issues"><span><b>Order: </b></span><br><?php echo $row['orders']; ?></p>
                            
                        </div>
                        
                        <div class="issue_related_form_btns">
                        
                            <form method="post" action="Dynamic/actions_dynamic.php" class="policy_template_form"> 

                                <input name="order_id" type="hidden" value="<?php echo $row['order_id']; ?>"> 
                                 
                                <input name="order_status" type="hidden" value="Working on it">

                                <button type="submit" class="btn update_btn" name="update_order_status_to_working_on_it">Confirmed / Working on it</button>

                            </form>

                            <form method="post" action="Dynamic/actions_dynamic.php" class="policy_template_form"> 

                                <input name="order_id" type="hidden" value="<?php echo $row['order_id']; ?>">
                                
                                <input name="order_status" type="hidden" value="Completed">  

                                <button type="submit" class="btn insert_btn" name="update_order_status_to_completed">Delivered</button>

                            </form>

                            <form method="post" action="Dynamic/actions_dynamic.php" class="policy_template_form"> 

                                <input name="order_id" type="hidden" value="<?php echo $row['order_id']; ?>"> 

                                <button type="submit" class="btn delete_btn" name="delete_order">Remove from database</button>

                            </form>
                            
                        </div>

                </div>
               
            <?php } ?>
               
            <div class="gap"></div>
                
        </div>
            
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- side anchor btns -->
    
    <div class="fixed_anchor_btns">
      
       <p><i class="fas fa-anchor"></i></p>
       
       <div class="fixed_target_btns">
            
            <a href="#title" class="anchor_btn basic">B</a>
            
            <a href="#title2" class="anchor_btn confidentiality">C</a>
            
            <a href="#title3" class="anchor_btn support">S</a>
        
            <a href="#title4" class="anchor_btn issue">I</a>

            <a href="#title5" class="anchor_btn learn">L</a>

            <a href="#title6" class="anchor_btn refund">R</a>

            <a href="#title7" class="anchor_btn custom_order">O</a>

            <a href="#F" class="anchor_btn feedback">F</a>
           
       </div>
        
    </div>
    
       
    <!-- footer -->
    
    <?php include 'Includable_portions/04_footer.php'; ?>
    
    






  </body>
</html>