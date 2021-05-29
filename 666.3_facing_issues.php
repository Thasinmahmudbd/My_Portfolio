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
            
            <p class="sub_page_name" id="U">Facing Issues</p>
            
        </div>
        
    </div>  
      
      
      
      
      
      
      
    <!-- frame -->
    
    <div class="frame_container">
        
        <div class="frame">
           
           
           
           
            
            <?php include 'Includable_portions/666.0_frame_left_section.php'; ?>
            
            
            
            
            
            
            <div class="frame_right_section">
                   
                   <p class="policy_design">Fill up the form below if you are facing any type of issues regarding my services. I'll get back to you as soon as I can. <br>Fields with <span class="red_star">&#9733;</span> are required.</p>
                    
                    <div class="policy_design">
                       
                       
                       
                       
                       
                        <form method="post" action="Dynamic/actions_dynamic.php">
                            
                            <label for="customers_full_name" class="label">Your Full Name <span class="red_star">&#9733;</span></label><br>
                            
                            <input name="customers_full_name" type="text" class="input full_length_input" required><br><br>
                            
                            <label for="customers_email" class="label">Your Email - [ use the same email that you used while project registration. ] <span class="red_star">&#9733;</span></label><br>
                            
                            <input name="customers_email" type="email" class="input full_length_input" required><br><br>
                            
                            <label for="customers_mobile" class="label">Mobile Number</label><br>
                            
                            <input name="customers_mobile" type="tel" class="input full_length_input"><br><br>
                            
                            <label for="customers_issues" class="label">Your Issues / Problems <span class="red_star">&#9733;</span></label><br>
                            
                            <textarea rows="9" name="customers_issues" class="input full_length_input" required></textarea>
                            <br>
                            
                            <button name="insert_customers_issues" type="submit" class="form_btn long_btn btn_hover_coral"> Submit Issues</button>
                            
                        </form>
                        
                    </div>
                    
                <?php
                
                if($_GET['message']){
                    
                    $message = $_GET['message'];
                  
                    echo "<p class='policy_design' >$message</p>"; 
                    
                }else{
                    die();
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
    
    

   
    
     







  </body>
</html>