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
    <link rel="stylesheet" href="Design/Global/07_policy_style.css">
    <link rel="stylesheet" href="Design/frame_style.css">
    
    <!-- Required css links for responsive -->
    <link rel="stylesheet" href="Design/Responsive/01_header_res.css">
    <link rel="stylesheet" href="Design/Responsive/02_navbar_res.css">
    <link rel="stylesheet" href="Design/Responsive/frame_res.css">
    <link rel="stylesheet" href="Design/Responsive/04_footer_res.css">
    
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

    <title>Landing page template</title>
  </head>
  <body>
   
    
    <!-- navbar -->
    
    <?php include 'Includable_portions/02_navbar.php'; ?>
    
                
        
    
      
      
      
    <!-- secondary navbar -->
     
    <div class="secondary_navbar_container">
        
        <div class="secondary_navbar">
            
            <p class="sub_page_name" id="U">Developer Support Policies</p>
            
        </div>
        
    </div>  
      
      
      
      
      
      
      
    <!-- frame -->
    
    <div class="frame_container">
        
        <div class="frame">
           
           
           
           
            
            <?php include 'Includable_portions/666.0_frame_left_section.php'; ?>
            
            
            
            
            
            
            <div class="frame_right_section">
                   
                   <p class="policy_design">Here are some of my <b>developer support</b> policies. If you are confused about what this is and why it is necessary for you, please click <a class="article_read_more" href="666.4_learn_more.php">here</a> and learn more about it. Please read the policies for better understanding.</p>
                    
                    <div class="policy_design">
                       
                       
                       
                       
                       
                        <?php
                    
                        $query_to_read_developers_support = "SELECT * FROM developers_support_table;";
                        
                        $read_developers_support = new Database();
                        $developers_support = $read_developers_support->read($query_to_read_developers_support);
                
                        //print_r($data);

                
                        //printing loop
                        foreach($developers_support as $row){
                
                        ?>  
                       
                        
                        <li class="policy"><?php echo $row['developers_support_policy'] ?></li>
                        
                        
                        <?php }//printing loop closed ?>
                        
                    </div>
                
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
    
    

   
    
     







  </body>
</html>