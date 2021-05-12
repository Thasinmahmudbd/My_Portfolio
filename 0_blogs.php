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
            
            <p class="sub_page_name" id="U">Blogs</p>
            
            <form class="sub_page_search_bar" id="anchor2" action="">
                
                <input id="anchor3" class="input search_input" placeholder="Enter article title or tags." type="text">
                <button class="search_btn" type="submit"><i class="fas fa-search"></i></button>
                
            </form>
            
        </div>
        
    </div>  
      
      
      
      
      
      
      
    <!-- frame -->
    
    <div class="frame_container">
        
        <div class="frame">
            
            <div class="frame_left_section">
               
               <p class="left_section_header">Tags</p>
               
               <div class="frame_left_forms">
                   
                   <form class="form" action="">
                    
                        <input type="hidden" value="">

                        <input class="frame_left_form_link" type="submit" name="Tag_name" value="Tag name">
                    
                    </form>
                    
                    <form class="form" action="">
                    
                        <input type="hidden" value="">

                        <input class="frame_left_form_link" type="submit" name="Tag_name" value="Tag name">
                    
                    </form>
                    
                    <form class="form" action="">
                    
                        <input type="hidden" value="">

                        <input class="frame_left_form_link" type="submit" name="Tag_name" value="Tag name">
                    
                    </form>
                    
                    <form class="form" action="">
                    
                        <input type="hidden" value="">

                        <input class="frame_left_form_link" type="submit" name="Tag_name" value="Tag name">
                    
                    </form>
                   
               </div>
                
            </div>
            
            <div class="frame_right_section">
                
                <div class="right_side_dynamic_post_template">
                    
                    <img src="Media/Images/Project_pictures/UI_temp_img_project_01(Hike_on).jpg" alt="no image" class="article_img" height="200px">
                    
                    <div class="article_highlights">
                        
                        <h1 class="article_title">Article tilte <span class="article_date">(date)</span></h1>
                        
                        <p class="highlights">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias explicabo quis error, iusto minima voluptate. Ullam possimus minima officia animi tenetur repellat ipsa, pariatur temporibus blanditiis, quidem quas quos magnam. Mollitia quam quidem, odit atque facere, ducimus ipsum delectus adipisci perspiciatis provident temporibus doloribus velit ipsam vero sint itaque libero.
                        </p>
                        
                    </div>
                    
                </div>
                
                <div class="right_side_dynamic_post_template">
                    
                    <img src="Media/Images/Project_pictures/UI_temp_img_project_01(Hike_on).jpg" alt="no image" class="article_img" height="200px">
                    
                    <div class="article_highlights">
                        
                        <h1 class="article_title">Article tilte <span class="article_date">(date)</span></h1>
                        
                        <p class="highlights">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias explicabo quis error, iusto minima voluptate. Ullam possimus minima officia animi tenetur repellat ipsa, pariatur temporibus blanditiis, quidem quas quos magnam. Mollitia quam quidem, odit atque facere, ducimus ipsum delectus adipisci perspiciatis provident temporibus doloribus velit ipsam vero sint itaque libero.
                        </p>
                        
                    </div>
                    
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
    
    

   
    
     
      
        
    
    <!-- owl carousel script -->      
    <script>
        
        const nextIcon = '<i class="fas fa-arrow-circle-right nav_slider"></i>';
        const previousIcon = '<i class="fas fa-arrow-circle-left nav_slider"></i>';
        
        $(document).ready(function(){
            $('.project_slider').owlCarousel({
                loop:true,
                margin:0,
                nav:false,
                autoplay:true,
                autoplayTimeout:6000,
                autoplayHoverPause:true,
                nav:true,
                dots:false,
                navText: [
                    previousIcon,
                    nextIcon
                ],
                responsive:{
                    0:{
                        items:1
                    },
                    800:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }              
            })
        })
        
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:0,
                items:1,
                autoplay:true,
                autoplayTimeout:6000,
                autoplayHoverPause:true,
                nav:true,
                dots:false,
                navText: [
                    previousIcon,
                    nextIcon
                ],
                
            })
        })
        
    </script>
    
    
    
    
    
    
    <!-- aos script-->
    <script>
        
        AOS.init({
            
            offset: 400, 
            duration: 1000
            
        });
        
    </script>






  </body>
</html>