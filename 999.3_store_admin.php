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
    <link rel="stylesheet" href="Design/frame_style.css">
    <link rel="stylesheet" href="Design/Administration/999.2_projects_admin_style.css">
    <link rel="stylesheet" href="Design/buy_now_style.css">
    
    <!-- Required css links for responsive -->
    <link rel="stylesheet" href="Design/Responsive/01_header_res.css">
    <link rel="stylesheet" href="Design/Responsive/02_navbar_res.css">
    <link rel="stylesheet" href="Design/Responsive/index_res.css">
    <link rel="stylesheet" href="Design/Responsive/04_footer_res.css">
    <link rel="stylesheet" href="Design/Responsive/frame_res.css">
    <link rel="stylesheet" href="Design/Responsive/admin_res.css">
    
    <!-- fonts (google fonts) -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    
    <!-- icons (font awsome) -->
    <script src="https://kit.fontawesome.com/aafecdc4bf.js" crossorigin="anonymous"></script>
    
    <!-- js scripts for design-->
    <script src="Script/DOM_manipulation/stickynavbar.js"></script>
    <script src="Script/DOM_manipulation/slidingmenu.js"></script>
    <script src="Script/DOM_manipulation/onscroll.js"></script>
    <script src="Script/DOM_manipulation/curtainnavbar.js"></script>
    <script src="Script/DOM_manipulation/onclickshow.js"></script>

    <title>Admin blog</title>
  </head>
  <body>
   

    
    
    <!-- navbar -->
    
    <?php include 'Includable_portions/999.0_navbar_admin.php'; ?>
    
                
        
    
    
    <!-- section  -->

    <div class="section_name_container" id="form">
    
        <h1 class="section_name">Store</h1>
    
    </div>
    
    <div class="section_container">
    
        <div class="section">













          <!-- product update form -->
   
           <div class="project_update">
                   
                

                    <form method="post" action="Dynamic/actions_dynamic.php" enctype="multipart/form-data">




                      <?php 

                          if(isset($_GET['code'])){ 

                              $id = $_GET['code'];

                              $query_to_read_products = "SELECT * FROM store_table WHERE products_id = $id;";
                                      
                              $read_products = new Database();
                              $products = $read_products->read($query_to_read_products);

                              while($row = mysqli_fetch_assoc($products)){
                                      $data[] = $row;
                                  }

                      ?>



                        
                        <div class="update_title">
                           
                            <label class="label" for="">Title</label>
                            <input class="input" type="text" name="products_title" value="<?php echo $data[0]['products_title']; ?>" required>
                            
                        </div>
                        
                        <div class="project_details">
                        
                            <label class="label" for="">Product Details</label>
                            <textarea class="input textarea" name="products_details"><?php echo $data[0]['products_details']; ?></textarea>
                            
                        </div>
                        
                        <div class="links">
                        
                            <label class="label" for="go_live_link">Go Live</label>
                            <input class="input" type="text" name="go_live_link" value="<?php echo $data[0]['go_live_link']; ?>">
                        
                            <label class="label" for="price">Github</label>
                            <input class="input" type="number" name="price" value="<?php echo $data[0]['price']; ?>" required>
                            
                            <label class="label" for="priority">Priority</label>
                            <input class="input" type="number" name="priority" max="1" min="0" placeholder="0 for high, 1 for low." value="<?php echo $data[0]['priority']; ?>" required>
                            
                        </div>
                        
                        <div class="update_tags">
                    
                            <label class="label">Tags</label>
                            <input type="text" class="input" name="main_tag" value="<?php echo $data[0]['main_tag']; ?>" required>
                            <input type="text" class="input" name="sub_tag_2" value="<?php echo $data[0]['sub_tag_2']; ?>">
                            <input type="text" class="input" name="sub_tag_3" value="<?php echo $data[0]['sub_tag_3']; ?>">

                        </div>

                        <div class="blog_img">

                            <label for="product_image" class="label">Image</label>
                            <input type="file" class="upload_box" name="product_image" value="<?php echo $data[0]['product_image']; ?>" required>

                        </div>

                        <div class="submit_buttons">

                            <input name="id" type="hidden" value="<?php echo $id; ?>">
                            <input name="old_picture_name" type="hidden" value="<?php echo $data[0]['product_image']; ?>">
                            <button class="btn update_btn" type="submit" name="update_product">Update</button>
                        
                        </div>

                    </form>

                    

                    <?php }else{ ?>

                    <!-- form to insert data -->



                        <div class="update_title">
                           
                            <label class="label" for="">Title</label>
                            <input class="input" type="text" name="products_title" required>
                            
                        </div>
                        
                        <div class="project_details">
                        
                            <label class="label" for="">Product Details</label>
                            <textarea class="input textarea" name="products_details"></textarea>
                            
                        </div>
                        
                        <div class="links">
                        
                            <label class="label" for="go_live_link">Go Live</label>
                            <input class="input" type="text" name="go_live_link" value="1.1_not_for_sale.php" required>
                        
                            <label class="label" for="price">Price</label>
                            <input class="input" type="number" name="price" required>
                            
                            <label class="label" for="priority">Priority</label>
                            <input class="input" type="number" name="priority" max="1" min="0" placeholder="0 for high, 1 for low." required>
                            
                        </div>
                        
                        <div class="update_tags">
                    
                            <label class="label">Tags</label>
                            <input type="text" class="input" name="main_tag" required>
                            <input type="text" class="input" name="sub_tag_2">
                            <input type="text" class="input" name="sub_tag_3">

                        </div>

                        <div class="blog_img">

                            <label for="product_image" class="label">Image</label>
                            <input type="file" class="upload_box" name="product_image" required>

                        </div>

                        <div class="submit_buttons">

                            <input name="id" type="hidden" value="<?php echo $id; ?>">
                            <input name="old_picture_name" type="hidden" value="<?php echo $data[0]['product_image']; ?>">
                            <button class="btn insert_btn" type="submit" name="insert_product">Draft</button>
                        
                        </div>

                    </form>


                    <?php } ?>
                                          
            </div>









            



            <!-- crud for tags --> 
                              
                <?php
                    
                        $query_to_read_tags = "SELECT DISTINCT main_tag FROM store_table ORDER BY main_tag ASC;";
                        
                        $read_tags = new Database();
                        $tags = $read_tags->read($query_to_read_tags); 
    
                
                        //print_r($basic_info);
                
                ?>



            <!-- frame -->
    
            <div class="frame_container">
                
                <div class="frame">
                    
                    <div class="frame_left_section">
                    
                    <p class="left_section_header">Tags</p>

                   
                        <div class="frame_left_forms">


                            <?php

                                foreach($tags as $row){

                            ?>

                            
                            <form class="form" action="">
                                
                                <input type="hidden" value="<?php echo $row['main_tag'] ?>">

                                <input class="frame_left_form_link" type="submit" name="Tag_name" value="<?php echo $row['main_tag'] ?>">
                                
                            </form>

                            <?php } ?>
                                
                            
                        </div>
                        
                    </div>



                    <!-- crud for store --> 
                              
                    <?php
                        
                            $query_to_read_products = "SELECT * FROM store_table ORDER BY products_id DESC;";
                            
                            $read_products = new Database();
                            $products = $read_products->read($query_to_read_products); 
        
                    
                            //print_r($basic_info);
                    
                    ?>



                    
                    <div class="frame_right_section">




                        <?php

                        // loop to read store_table data.

                            foreach($products as $row){

                        ?>


                        <!-- product post template -->


                        <div class="right_side_dynamic_post_template" id="<?php echo $row['products_id'] ?>">
                    
                            <img src="Media/Images/Store_pictures/UI_Ux_template/<?php echo $row['product_image'] ?>" alt="no image" class="article_img" width="100%">
                            
                            <div class="dynamic_post_template_highlights">
                                
                            <h1 class="dynamic_post_template_title"><?php echo $row['products_title'] ?> <span class="price_tag"> <?php echo $row['price'] ?> Tk only.</span></h1>
                                
                                <p class="highlights">
                                    <?php echo $row['products_details'] ?>
                                </p>
                                
                            </div>
                            
                            <div class="post_related_links">
                                
                                <a target="_blank" href="<?php echo $row['go_live_link'] ?>" class="go_live"><i class="fab fa-chrome post_related_link"></i></a>
                                
                                <a target="_blank" href="<?php echo $row['products_id'] ?>"><i class="fas fa-shopping-cart post_related_link"></i></a>
                                
                            </div>


                            <div class="form_and_status">

                                <form action="Dynamic/actions_dynamic.php" method="post">
                                
                                    <input name="id" type="hidden" value="<?php echo $row['products_id'] ?>">

                                    <input name="old_picture_name" type="hidden" value="<?php echo $row['product_image']; ?>">

                                    <button type="submit" class="btn admin_btn form_btn" name="publish_product">Publish</button>

                                    <button type="submit" class="btn admin_btn insert_btn" name="draft_product">Draft</button>

                                    <a href="999.3_store_admin.php?code=<?php echo $row['products_id'] ?>" class="btn admin_btn update_btn">Edit</a>

                                    <button type="submit" class="btn admin_btn delete_btn" name="delete_product">Delete</button>
                                
                                </form>

                                <!-- status indicator -->

                                <div>

                                    <span class="status 

                                    <?php 

                                        if($row['product_status'] == 'drafted'){

                                            echo "drafted_status";

                                        }

                                        if($row['product_status'] == 'published'){

                                            echo "published_status";

                                        }

                                    ?>">

                                    </span>

                                </div>

                            </div>

                            
                        </div>


                        <?php } ?>
                        
                    </div>
                    
                </div>
                
            </div>
    
      
      
      
      
      
      
      
      
      
      
      
      
      




        
        </div>
    
    </div>
    
    
    
    
    
    
    
    
    <!-- side anchor btns -->
    
    <div class="fixed_anchor_btns">
      
       <p><i class="fas fa-anchor"></i></p>
       
       <div class="fixed_target_btns">
            
            <a href="#form" class="anchor_btn blog_form">F</a>
           
       </div>
        
    </div>
    
       
    
    






    <!-- gap -->

    <div class="gap"></div>
    <div class="gap"></div>
    <div class="gap"></div>
    <div class="gap"></div>
    <div class="gap"></div>
    <div class="gap"></div>
    <div class="gap"></div>
    <div class="gap"></div>
    <div class="gap"></div>








    <!-- script to add ck editor -->
    
    <script src="ckeditor/ckeditor.js"></script>
      
    <script src="ckfinder/ckfinder.js"></script>
       
    <script>
        
        var editor = CKEDITOR.replace('projects_details');
        
        CKFinder.setupCKEditor( editor );
    
    </script>




  </body>
</html>