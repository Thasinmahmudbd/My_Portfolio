<!-- dynamic -->
     
<?php include 'Dynamic/actions_dynamic.php';

    // searching option.

    // getting data from form.
    if(isset($_GET['id'])){
    
        // storing in variables.
        $id = mysqli_real_escape_string($con, $_GET['id']);

            $query_to_read_blog = "SELECT * FROM blogs_table WHERE  blogs_id = $id;";
                                
            $read_blog = new Database();
            $result = $read_blog->read($query_to_read_blog);     

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
    <link rel="stylesheet" href="Design/Global/04_footer_style.css">
    <link rel="stylesheet" href="Design/Global/05_side_bar_style.css">
    <link rel="stylesheet" href="Design/Global/06_anchor_bar_style.css">
    <link rel="stylesheet" href="Design/frame_style.css">
    <link rel="stylesheet" href="Design/full_article_page_style.css">
    
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
            
            <span></span>
            
        </div>
        
    </div>  
    
    
                <?php

                    if(!empty($result)){

                        foreach($result as $row){
                    
                ?>
    
    
    <div class="full_article_page">
    
        <div class="full_article_container">
        
            <h1 class="full_article_title"><?php echo $row['blogs_title'] ?> <span class="full_article_date">(<?php echo $row['blog_date'] ?>)</span></h1>

            <div class="full_article"><?php echo $row['blogs_post'] ?></div>

                <?php

                    $main_tag = $row['main_tag'];
                    $b_id = $row['blogs_id'];

                    $query_to_find_similar_type_blog = "SELECT * FROM blogs_table WHERE  blogs_id != $b_id AND main_tag = '$main_tag' AND blog_status = 'published' ORDER BY blogs_id DESC;";
                                
                    $find_blog = new Database();
                    $result_2 = $find_blog->read($query_to_find_similar_type_blog); 

                    if(!empty($result_2)){

                        foreach($result_2 as $row_2){
                
                ?>

            <div class="suggestions">

                <h1>You may also be interested in...</h1>
            
                <h1><a href="0.1_blogs_full_article_page.php?id=<?php echo $row_2['blogs_id'] ?>"> <?php echo $row_2['blogs_title'] ?>  </a></h1>

            </div>

                <?php

                        }
                    }
                    
                ?>
        
        </div>
    
    </div>
    
    
                <?php

                        }
                    }
                
                ?>
      
      
      
      
      
      
      
      
      
      
      
       
       
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
    
    

   
    
     
      

    
    
    
    
    
    
    






  </body>
</html>