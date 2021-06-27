<!-- dynamic -->
     
<?php include 'Dynamic/actions_dynamic.php';


    // searching option.

    // getting data from form.
    if(isset($_GET['search_blog'])){
    
        // storing in variables.
        $item = mysqli_real_escape_string($con, $_GET['search_item_blog']);
                
        $pass = "@dmin";
                        
        // Location.
        if($item == $pass){

            header('Location: 777.1_admin_login.php');

        }else{

            $query_to_search_blogs = "SELECT * FROM blogs_table WHERE blog_status='published' AND (blogs_title LIKE '%$item%' OR main_tag LIKE '%$item%' OR tag_2 LIKE '%$item%' OR tag_3 LIKE '%$item%' OR tag_4 LIKE '%$item%' OR tag_5 LIKE '%$item%') ORDER BY blogs_id DESC;";
                                
            $search_blogs = new Database();
            $search_result = $search_blogs->read($query_to_search_blogs); 

        }

    }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <link rel="stylesheet" href="Design/frame_style.css">
    
    <!-- Required css links for responsive -->
    <link rel="stylesheet" href="Design/Responsive/01_header_res.css">
    <link rel="stylesheet" href="Design/Responsive/02_navbar_res.css">
    <link rel="stylesheet" href="Design/Responsive/frame_res.css">
    <link rel="stylesheet" href="Design/Responsive/04_footer_res.css">
    
    <!-- fonts (google fonts) -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    
    <!-- icons (font awesome) -->
    <script src="https://kit.fontawesome.com/aafecdc4bf.js" crossorigin="anonymous"></script>
    
    <!-- Required js and css for aos -->    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    
    <!-- js scripts for design-->
    <script src="Script/DOM_manipulation/stickynavbar.js"></script>
    <script src="Script/DOM_manipulation/slidingmenu.js"></script>
    <script src="Script/DOM_manipulation/onscroll.js"></script>
    <script src="Script/DOM_manipulation/curtainnavbar.js"></script>

    <title>Landing page template</title>
  </head>
  <body>
   
    
    <!-- navbar -->
    
    <?php include 'Includable_portions/02_navbar.php'; ?>
    
                
        
    
      
      
      
    <!-- secondary navbar -->
     
    <div class="secondary_navbar_container">
        
        <div class="secondary_navbar">
            
            <p class="sub_page_name" id="U">Blogs</p>
            
            <form class="sub_page_search_bar" id="anchor2" method="get" action="0_blogs.php">
                
                <input id="anchor3" class="input search_input" placeholder="Enter article title or tags." type="text" name="search_item_blog">
                <button class="search_btn" type="submit" name="search_blog"><i class="fas fa-search"></i></button>
                
            </form>
            
        </div>
        
    </div>  
      
      
    
      
      
      
    <!-- frame -->
    
    <div class="frame_container">
        
        <div class="frame">
            
            <div class="frame_left_section">
               
               <p class="left_section_header">Tags</p>
               
               <div class="frame_left_forms">



                <!-- crud for tags --> 
                            
                <?php
                    
                        // storing in variables.
                        $main_tag = mysqli_real_escape_string($con, $_GET['Tag_name']);

                        $query_to_read_tags = "SELECT DISTINCT main_tag FROM blogs_table WHERE blog_status='published' ORDER BY main_tag ASC;";
                        
                        $read_tags = new Database();
                        $tags = $read_tags->read($query_to_read_tags); 
    
                
                        //print_r($basic_info);


                        foreach($tags as $row){

                
                ?>


                   
                   <form class="form <?php if($main_tag == $row['main_tag']){ echo 'indicate'; } ?>" method="get" action="0.2_alternate_blog.php">
                    
                        <input type="hidden" value="<?php echo $row['main_tag'] ?>">

                        <input class="frame_left_form_link" type="submit" name="Tag_name" value="<?php echo $row['main_tag'] ?>">
                    
                    </form>
                    
                    

                <?php } ?>


                   
               </div>
                
            </div>
            
            <div class="frame_right_section">



                <!-- crud for blog post --> 
                              
                <?php

                    if(!empty($search_result)){

                        foreach($search_result as $row){
                    
                ?>
                
                
                
                                
                        <div class="right_side_dynamic_post_template" data-aos="fade-right">
                                    
                            <img src="Media/Images/Blog_picture/<?php echo $row['blog_picture'] ?>" alt="no image" class="article_img" height="200px">
                                    
                            <div class="dynamic_post_template_highlights">
                                        
                                <h1 class="dynamic_post_template_title"><?php echo $row['blogs_title'] ?> <span class="article_date">(<?php echo $row['blog_date'] ?>)</span></h1>
                                        
                                <p class="highlights"><?php echo $row['blogs_highlight'] ?><a class="article_read_more" href="0.1_blogs_full_article_page.php?id=<?php echo $row['blogs_id'] ?>"> read more...</a></p>
                                        
                            </div>
                                    
                        </div>

                
    
                <?php

                        }

                    }else{

                        $query_to_read_blogs = "SELECT * FROM blogs_table WHERE blog_status='published' AND main_tag='$main_tag' ORDER BY blogs_id DESC;";
                            
                        $read_blogs = new Database();
                        $blogs = $read_blogs->read($query_to_read_blogs); 
        
                    
                        //print_r($basic_info);

                        // loop to read blog_table data.

                        foreach($blogs as $row){
                    
                ?>



                
                <div class="right_side_dynamic_post_template" data-aos="fade-right">
                    
                    <img src="Media/Images/Blog_picture/<?php echo $row['blog_picture'] ?>" alt="no image" class="article_img" height="200px">
                    
                    <div class="dynamic_post_template_highlights">
                        
                        <h1 class="dynamic_post_template_title"><?php echo $row['blogs_title'] ?> <span class="article_date">(<?php echo $row['blog_date'] ?>)</span></h1>
                        
                        <p class="highlights">
                            <?php echo $row['blogs_highlight'] ?><a class="article_read_more" href="0.1_blogs_full_article_page.php?id=<?php echo $row['blogs_id'] ?>"> read more...</a>
                        </p>
                        
                    </div>
                    
                </div>



                <?php 

                        } 
                    }
                        
                ?>

                




                
            </div>
            
        </div>
        
    </div>
    
      
      
      
      
      
      
      
      
      
      
      
      
      
       
       
    <!-- fixed side btns -->
    
    <?php include 'Includable_portions/03_fixed_sidebar.php'; ?>
    
    
    <!-- side anchor btns -->
    
    <div class="fixed_anchor_btns">
      
       <p><i class="fas fa-anchor"></i></p>
       
       <div class="fixed_target_btns">
           
            <a href="#U" class="anchor_btn up">U</a>

            <a href="#F" class="anchor_btn feedback">F</a>
           
       </div>
        
    </div>
    
       
    <!-- footer -->
    
    <?php include 'Includable_portions/04_footer.php'; ?>
    
    

   
    
     
      

    
    
    
    
    
    
    <!-- aos script-->
    <script>
        
        AOS.init({
            
            offset: 400, 
            duration: 1000,
            once: true
            
        });
        
    </script>






  </body>
</html>