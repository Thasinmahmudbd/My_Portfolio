<!-- dynamic -->
     
<?php 

    include 'Dynamic/actions_dynamic.php'; 


    // getting data from form.
    if(isset($_GET['item'])){
    
        // storing in variables.
        $item = mysqli_real_escape_string($con, $_GET['item']);
        $id = mysqli_real_escape_string($con, $_GET['id']);

        if($item == 'store_item'){

            $query_to_read_order = "SELECT * FROM store_table WHERE  products_id = $id;";
                                
            $read_order = new Database();
            $result = $read_order->read($query_to_read_order); 

        }else{

            header('Location: 2.2_not_for_sale.php');

        }
    

    }

?>



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
    <link rel="stylesheet" href="Design/frame_style.css">
    <link rel="stylesheet" href="Design/index_style.css">
    <link rel="stylesheet" href="Design/buy_now_style.css">
    
    <!-- Required css links for responsive -->
    <link rel="stylesheet" href="Design/Responsive/01_header_res.css">
    <link rel="stylesheet" href="Design/Responsive/02_navbar_res.css">
    <link rel="stylesheet" href="Design/Responsive/frame_res.css">
    <link rel="stylesheet" href="Design/Responsive/index_res.css">
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
            
            <p class="sub_page_name" id="U">Order Confirm!</p>
            
        </div>
        
    </div>  
      
      
      
      

                <?php

                    if(!empty($result)){

                        foreach($result as $row){
                    
                ?>



      
      
      
    <!-- custom order -->
    
            
            <div class="order">

                <img src="Media/Images/Store_pictures/UI_Ux_template/<?php echo $row['product_image'] ?>" alt="no image" class="article_img" width="100%">

                <p class="info_about_order">

                    You are ordering <b><?php echo $row['products_title'] ?>.</b><br>
                    This will cost you <b><?php echo $row['price'] ?> Tk</b> only. <br><br>

                    <?php echo $row['products_details'] ?>

                </p>

                <ul class="info_about_order">

                        <li><b>Note:</b></li>

                        <li>&#9673; By clicking confirm, you are agreeing to all of the terms and conditions of this site, and are bound by them.</li>

                        <li>&#9673; After confirming please wait for a reply email, you will get one with in 24 hours.</li>

                        <li>&#9673; You can cancel order before final confirmation.</li>

                        <li>&#9673; Please read all the policies, by doing so all your confusions and question will be automatically cleared and answered. </li>

                        <li>&#9673; If you still have some sort of query email me or call me directly. Thanks.</li>

                </ul>
                
                <form method="post" action="Dynamic/actions_dynamic.php" class="order_form">
                    
                    <div class="form_fills_all">
                      
                        <div class="form_fills">

                            <label class="label order_form_label" for="name" >Your Name</label>
                            <input name="customer_full_name" class="input order_form_input" type="text">

                        </div>

                        <div class="form_fills">

                            <label class="label order_form_label" for="email" >Your Email</label>
                            <input name="customer_email" class="input order_form_input" type="email">

                        </div>

                        <div class="form_fills">

                            <label class="label order_form_label" for="number" >Your Number</label>
                            <input name="customer_mobile" class="input order_form_input" type="tel">

                        </div>

                        <div class="form_fills">

                            <label class="label order_form_label" for="website_desc" >Website Description</label>
                            <input name="orders" class="input tall_input order_form_input" type="text" value="I want to buy <?php echo $row['products_title'] ?>, Unique ID = <?php echo $row['products_id'] ?>.">

                        </div>

                        <button name="take_in_order" class="form_btn btn_hover_coral" type="submit">Confirm</button>
                        
                    </div>
                    
                    
                </form>

                
            </div>
            
   
    
      
      
            <?php }} ?>
      
      
      
      
      
      
      
      
      
      
       
       
    <!-- fixed side btns -->
    
    <?php include 'Includable_portions/03_fixed_sidebar.php'; ?>
    
    
    
    
       
    <!-- footer -->
    
    <?php include 'Includable_portions/04_footer.php'; ?>
    
    

   
    
     
      
        
    
    
    
    
    







  </body>
</html>