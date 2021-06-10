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
            
            <p class="sub_page_name" id="U">Store</p>
            
            <form class="sub_page_search_bar" id="anchor2" action="">
                
                <input id="anchor3" class="input search_input" placeholder="Enter catagory or product id." type="text">
                <button class="search_btn" type="submit"><i class="fas fa-search"></i></button>
                
            </form>
            
        </div>
        
    </div>  
      
      
      
      
      
      
      
    <!-- frame -->
    
    <div class="frame_container">
        
        <div class="frame">
            
            <div class="frame_left_section">
               
               <p class="left_section_header">Catagories</p>
               
               <div class="frame_left_forms">


                   
                <!-- crud for tags --> 
                              
                <?php
                    
                        $query_to_read_tags = "SELECT DISTINCT main_tag FROM store_table WHERE product_status='published' ORDER BY main_tag ASC;";
                        
                        $read_tags = new Database();
                        $tags = $read_tags->read($query_to_read_tags); 
    
                
                        //print_r($basic_info);


                        foreach($tags as $row){

                
                ?>


                   
                   <form class="form" method="post" action="Dynamic/actions_dynamic.php">
                    
                        <input type="hidden" value="<?php echo $row['main_tag'] ?>">

                        <input class="frame_left_form_link" type="submit" name="Tag_name" value="<?php echo $row['main_tag'] ?>">
                    
                    </form>
                    
                    

                <?php } ?>


                   
                   
               </div>
                
            </div>
            
            <div class="frame_right_section">





                <!-- crud for store --> 
                              
                    <?php
                        
                            $query_to_read_products = "SELECT * FROM store_table WHERE product_status='published' ORDER BY priority ASC, products_id DESC;";
                            
                            $read_products = new Database();
                            $products = $read_products->read($query_to_read_products);


                            //print_r($basic_info);

                            // loop to read store_table data.

                            foreach($products as $row){
                    
                    ?>




                
                <div class="right_side_dynamic_post_template" data-aos="fade-right">
                    
                    <img src="Media/Images/Store_pictures/UI_Ux_template/<?php echo $row['product_image'] ?>" alt="no image" class="article_img" width="100%">
                    
                    <div class="dynamic_post_template_highlights">
                        
                        <h1 class="dynamic_post_template_title"><?php echo $row['products_title'] ?><!--<span> (product id)</span>--></h1>
                        
                        <p class="highlights">
                            <?php echo $row['products_details'] ?>
                        </p>
                        
                    </div>
                    
                    <div class="post_related_links">
                        
                        <a href="<?php echo $row['go_live_link'] ?>" class="go_live"><i class="fab fa-chrome post_related_link"></i></a>
                        <a href="<?php echo $row['products_id'] ?>"><i class="fas fa-shopping-cart post_related_link"></i></a>
                        
                    </div>
                    
                </div>


                
                <?php } ?>


                
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