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
    <link rel="stylesheet" href="Design/Administration/999.1_blogs_admin_style.css">
    
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

    <div class="section_name_container">
    
        <h1 class="section_name" id="form">Blogs</h1>
    
    </div>
    
    <div class="section_container">
    
        <div class="section">









            <!-- blog update form  -->
        
            <form method="post" action="Dynamic/actions_dynamic.php" class="blog_posting_form" enctype="multipart/form-data">


                <?php 

                if(isset($_GET['code'])){ 

                    $id = $_GET['code'];

                    $query_to_read_blogs = "SELECT * FROM blogs_table WHERE blogs_id = $id;";
                            
                    $read_blogs = new Database();
                    $blogs = $read_blogs->read($query_to_read_blogs);

                    while($row = mysqli_fetch_assoc($blogs)){
                            $data[] = $row;
                        }

                ?>


                <!-- form to update data -->
            
                <div class="update_title">
                    
                    <label for="blogs_title" class="label">Title</label>
                    <input type="text" class="input" name="blogs_title" value="<?php echo $data[0]['blogs_title']; ?>" required>
                    
                </div>
                
                <div class="update_post">
                    
                    <textarea name="blog_post_editor"><?php echo $data[0]['blogs_post']; ?></textarea>
                    
                </div>
                
                <div class="update_highlight">
                    
                    <label for="blogs_highlight" class="label">Highlight</label>
                    <textarea name="blogs_highlight" required class="input highlight"><?php echo $data[0]['blogs_highlight']; ?></textarea>
                    
                </div>
                
                <div class="update_tags">
                    
                    <label class="label">Tags</label>
                    <input type="text" class="input" name="main_tag" value="<?php echo $data[0]['main_tag']; ?>" required>
                    <input type="text" class="input" name="tag_2" value="<?php echo $data[0]['tag_2']; ?>">
                    <input type="text" class="input" name="tag_3" value="<?php echo $data[0]['tag_3']; ?>">
                    <input type="text" class="input" name="tag_4" value="<?php echo $data[0]['tag_4']; ?>">
                    <input type="text" class="input" name="tag_5" value="<?php echo $data[0]['tag_5']; ?>">
                    
                </div>

                <div class="blog_img">

                    <label for="blog_picture" class="label">Image</label>
                    <input type="file" class="upload_box" name="blog_picture" required>

                </div>
                
                <div class="submit_buttons">

                    <input name="id" type="hidden" value="<?php echo $id; ?>">
                    <input name="old_picture_name" type="hidden" value="<?php echo $data[0]['blog_picture']; ?>">
                    <button class="btn update_btn" type="submit" name="update_blog">Update</button>
                
                </div>
            
            </form>


            <?php }else{ ?>

            <!-- form to insert data -->

            <div class="update_title">
                    
                    <label for="blogs_title" class="label">Title</label>
                    <input type="text" class="input" name="blogs_title" required>
                    
                </div>
                
                <div class="update_post">
                    
                    <textarea name="blog_post_editor"></textarea>
                    
                </div>
                
                <div class="update_highlight">
                    
                    <label for="blogs_highlight" class="label">Highlight</label>
                    <textarea name="blogs_highlight" required class="input highlight"></textarea>
                    
                </div>
                
                <div class="update_tags">
                    
                    <label class="label">Tags</label>
                    <input type="text" class="input" name="main_tag" required>
                    <input type="text" class="input" name="tag_2">
                    <input type="text" class="input" name="tag_3">
                    <input type="text" class="input" name="tag_4">
                    <input type="text" class="input" name="tag_5">
                    
                </div>

                <div class="blog_img">

                    <label for="blog_picture" class="label">Image</label>
                    <input type="file" class="upload_box" name="blog_picture" required>

                </div>
                
                <div class="submit_buttons">
                
                    <button class="btn insert_btn" type="submit" name="insert_blog">Draft</button>
                
                </div>
            
            </form>

            <?php } ?>



            <!-- crud for tags --> 
                              
                <?php
                    
                        $query_to_read_tags = "SELECT DISTINCT main_tag FROM blogs_table ORDER BY main_tag ASC;";
                        
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



                    <!-- crud for blog post --> 
                              
                    <?php
                        
                            $query_to_read_blogs = "SELECT * FROM blogs_table ORDER BY blogs_id DESC;";
                            
                            $read_blogs = new Database();
                            $blogs = $read_blogs->read($query_to_read_blogs); 
        
                    
                            //print_r($basic_info);
                    
                    ?>



                    
                    <div class="frame_right_section">




                        <?php

                        // loop to read blog_table data.

                            foreach($blogs as $row){

                        ?>



                        <!-- post template dynamic -->
                        
                        <div class="right_side_dynamic_post_template" id="<?php echo $row['blogs_id'] ?>">
                            
                            <img src="Media/Images/Blog_picture/<?php echo $row['blog_picture'] ?>" alt="no image" class="article_img" height="200px">
                            
                            <div class="dynamic_post_template_highlights">
                                
                                <h1 class="dynamic_post_template_title"><?php echo $row['blogs_title'] ?> <span class="article_date">(<?php echo $row['blog_date'] ?>)</span></h1>
                                
                                <p class="highlights">
                                    <?php echo $row['blogs_highlight'] ?><a class="article_read_more" href="#"> read more...</a>
                                </p>
                                
                            </div>

                            <!-- admin control of blogs [ publish, draft, edit, delete ] -->

                            <div class="form_and_status">

                                <form action="Dynamic/actions_dynamic.php" method="post">
                                
                                    <input name="id" type="hidden" value="<?php echo $row['blogs_id'] ?>">

                                    <input name="old_picture_name" type="hidden" value="<?php echo $row['blog_picture']; ?>">

                                    <button type="submit" class="btn admin_btn form_btn" name="publish_blog">Publish</button>

                                    <button type="submit" class="btn admin_btn insert_btn" name="draft_blog">Draft</button>

                                    <a href="999.1_blogs_admin.php?code=<?php echo $row['blogs_id'] ?>" class="btn admin_btn update_btn">Edit</a>

                                    <button type="submit" class="btn admin_btn delete_btn" name="delete_blog">Delete</button>
                                
                                </form>

                                <!-- status indicator -->

                                <div>

                                    <span class="status 

                                    <?php 

                                        if($row['blog_status'] == 'drafted'){

                                            echo "drafted_status";

                                        }

                                        if($row['blog_status'] == 'published'){

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
        
        var blog_editor = CKEDITOR.replace('blog_post_editor');
        
        CKFinder.setupCKEditor( blog_editor );
    
    </script>




  </body>
</html>