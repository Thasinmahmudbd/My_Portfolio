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
    <link rel="stylesheet" href="Design/index_style.css">
    
    <!-- Required css links for responsive -->
    <link rel="stylesheet" href="Design/Responsive/01_header_res.css">
    <link rel="stylesheet" href="Design/Responsive/02_navbar_res.css">
    <link rel="stylesheet" href="Design/Responsive/index_res.css">
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
   
   
   
   
   
   
   
   
   
   
    <!-- header -->
    <div class="header_container" id="H">
       
       <div class="shade">
        
            <div class="header">

                <img src="Media/Images/Profile_picture/Thasin.jpg" alt="" width="150px" height="150px">

                <div class="header_description">

                    <h1>Hey, I'm Thasin.</h1>

                    <h2>I work as a web-developer. I've 2 years of experience under my belt. I use HTML, CSS, Javascript, PHP, Laravel & Git on my projects. Hit me up if you have something on your mind. <a href="Sub_pages/3_custom_order.php" class="custom_order_link">Let's make something together. &#128522;</a></h2>

                </div>
                
                <div class="header_contact_info">
                    
                    <div class="header_info_email">

                       <i class="fas fa-at header_info_email_logo"></i> <p>thasinmahmud.bd@gmail.com</p>

                    </div>

                    <div class="header_info_mobile">

                        <i class="fas fa-mobile-alt header_info_mobile_logo"></i>
                        <p>+88 01984983948</p>
                        <span></span>
                        <p>+88 01757758904</p>

                    </div>
                    
                </div>

            </div>
            
        </div>
        
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- navbar -->
    <div class="navbar_container" id="anchor">
      
        <div class="navbar">
       
            <div class="logo">
                
                <a href="index.php">TM</a>
                
            </div>

            <ul class="navigation">

                <li class="navigation_link"><a href="Sub_pages/0_blogs.php">Blogs</a></li>

                <li class="navigation_link"><a href="Sub_pages/1_projects.php">Projects</a></li>

                <li class="navigation_link"><a href="Sub_pages/2_store.php">Store</a></li>

                <li class="ham">

                    <!-- The overlay -->
                    <div id="myNav" class="overlay">

                    <!-- Button to close the overlay navigation -->
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                    <!-- Overlay content -->
                    <div class="overlay-content">
                    <a href="#">Blogs</a>
                    <a href="#">Projects</a>
                    <a href="#">Store</a>
                    </div>

                    </div>

                    <!-- Use any element to open/show the overlay navigation menu -->
                    <span onclick="openNav()" class="ham_btn">&#9776;</span>

                </li>

            </ul>
            
        </div>
        
    </div>
    
                
    
    
    
    
    
    
    
    
    
    
    <!-- articles slider -->
        
        <div class="blogs_carousel" id="A">
           
            <p class="section_title read_my">Recent Articles</p>
            
                    <div class="owl-carousel owl-theme">
                
                        <div class="item">
                        
                            <img src="Media/Images/header_bg.jpeg" width="20%" alt="" class="article_img">
                            
                            <div class="highlights">
                                
                                <h1>Title of blog <span class="blog_post_date">Posting date</span></h1>
                                
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga omnis voluptas id suscipit itaque dignissimos blanditiis amet iusto laudantium, facere inventore quisquam dolorem accusantium ipsa illo asperiores odio eligendi molestias maiores, temporibus quia ea, labore minima. Ducimus, sint. Cupiditate in sequi animi vitae velit sint, excepturi a quibusdam earum! Vero.</p>
                                
                            </div>
                        
                        </div>
                        
                        <div class="item">
                        
                            <img src="Media/Images/header_bg.jpeg" width="20%" alt="" class="article_img">
                            
                            <div class="highlights">
                                
                                <h1>Title of blog <span class="blog_post_date">Posting date</span></h1>
                                
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga omnis voluptas id suscipit itaque dignissimos blanditiis amet iusto laudantium, facere inventore quisquam dolorem accusantium ipsa illo asperiores odio eligendi molestias maiores, temporibus quia ea, labore minima. Ducimus, sint. Cupiditate in sequi animi vitae velit sint, excepturi a quibusdam earum! Vero.</p>
                                
                            </div>
                        
                        </div>
                        
                        <div class="item">
                        
                            <img src="Media/Images/header_bg.jpeg" width="20%" alt="" class="article_img">
                            
                            <div class="highlights">
                                
                                <h1>Title of blog <span class="blog_post_date">Posting date</span></h1>
                                
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga omnis voluptas id suscipit itaque dignissimos blanditiis amet iusto laudantium, facere inventore quisquam dolorem accusantium ipsa illo asperiores odio eligendi molestias maiores, temporibus quia ea, labore minima. Ducimus, sint. Cupiditate in sequi animi vitae velit sint, excepturi a quibusdam earum! Vero.</p>
                                
                            </div>
                        
                        </div>
                        
                    </div>
            
        </div>
    
    
    
    
    
    
    
    
    
    
    <!-- services -->
    <div class="services_cards_container" id="S">
        
        <div class="services">
            
            <p class="section_title know_about">My Services</p>
            
            <div class="cards">
                
                <div class="card">
                    
                    <img  class="services_img" src="Media/Images/My_Services/landing_page.png" alt="*" width="200px">
                    
                    <div class="card_text" data-aos="fade-right">
                        
                        <h1>Stunning Landing Page Creation.</h1>
                        
                        <p>I'll create a beautiful & stunning Landing Page for your website.</p>
                        
                        <p><img src="Media/Images/Technologies_logo/html_logo.png" alt="HTML, " width="20px"> <img src="Media/Images/Technologies_logo/css_logo.png" alt="CSS & " width="20px"> <img src="Media/Images/Technologies_logo/javascript_logo.png" width="20px" alt="Javascript"> will be used in the project.</p>
                        
                        <p>You will recieve the source code.</p>
                        
                    </div>
                    
                </div>
                

                
                <div class="card">
                    
                    <img  class="services_img" src="Media/Images/My_Services/full_website_design.png" alt="*" width="200px">
                    
                    <div class="card_text" data-aos="fade-right">
                        
                        <h1>Full Website Design</h1>
                        
                        <p>I'll design your Full Website baised on the concept of your company.</p>
                        
                        <p><img src="Media/Images/Technologies_logo/html_logo.png" alt="HTML, " width="20px"> <img src="Media/Images/Technologies_logo/css_logo.png" alt="CSS & " width="20px"> <img src="Media/Images/Technologies_logo/javascript_logo.png" width="20px" alt="Javascript"> will be used in the project.</p>
                        
                        <p>You will recieve the source code.</p>
                        
                    </div>
                    
                </div>
                

                
                <div class="card">
                    
                    <img  class="services_img" src="Media/Images/My_Services/svg_to_webpage.png" alt="*" width="200px">
                    
                    <div class="card_text" data-aos="fade-right">
                        
                        <h1>SVG to Webpage Conversion.</h1>
                        
                        <p>I'll covert your SVG in to a working Webpage/Website.</p>
                        
                        <p><img src="Media/Images/Technologies_logo/html_logo.png" alt="HTML, " width="20px"> <img src="Media/Images/Technologies_logo/css_logo.png" alt="CSS & " width="20px"> <img src="Media/Images/Technologies_logo/javascript_logo.png" width="20px" alt="Javascript"> will be used in the project.</p>
                        
                        <p>You will recieve the source code.</p>
                        
                    </div>
                    
                </div>
                

                
                <div class="card">
                    
                    <img  class="services_img" src="Media/Images/My_Services/database_design.png" alt="*" width="200px">
                    
                    <div class="card_text" data-aos="fade-right">
                        
                        <h1>Database design.</h1>
                        
                        <p>I'll design an efficient Database for your CMS.</p>
                        
                        <p><img src="Media/Images/Technologies_logo/sql_logo.png" width="20px" alt="SQL"> will be used in the project.</p>
                        
                        <p>You will recieve sketch file of database in these formats (.epgz, PDF, SVG, ODT).</p>
                        
                    </div>
                    
                </div>
                

                
                <div class="card">
                    
                    <img  class="services_img" src="Media/Images/My_Services/cms.png" alt="*" width="200px">
                    
                    <div class="card_text" data-aos="fade-right">
                        
                        <h1>CMS Development.</h1>
                        
                        <p>I'll develop a Content Management System for you.</p>
                        
                        <p><img src="Media/Images/Technologies_logo/html_logo.png" alt="HTML, " width="20px"> <img src="Media/Images/Technologies_logo/css_logo.png" alt="CSS & " width="20px"> <img src="Media/Images/Technologies_logo/javascript_logo.png" width="20px" alt="Javascript, "> <img src="Media/Images/Technologies_logo/php_logo.png" width="20px" alt="PHP & "> <img src="Media/Images/Technologies_logo/sql_logo.png" width="20px" alt="SQL"> will be used in the project.</p>
                        
                        <p>You will recieve the source code & database files.</p>
                        
                    </div>
                    
                </div>
                

                
                <div class="card">
                    
                    <img  class="services_img" src="Media/Images/My_Services/ecommerce_website_development.png" alt="*" width="200px">
                    
                    <div class="card_text" data-aos="fade-right">
                        
                        <h1>E-commerce Website Development.</h1>
                        
                        <p>I'll create an E-commerce Website for you (Cash on delivery).</p>
                        
                        <p><img src="Media/Images/Technologies_logo/html_logo.png" alt="HTML, " width="20px"> <img src="Media/Images/Technologies_logo/css_logo.png" alt="CSS & " width="20px"> <img src="Media/Images/Technologies_logo/javascript_logo.png" width="20px" alt="Javascript, "> <img src="Media/Images/Technologies_logo/php_logo.png" width="20px" alt="PHP, "> <img src="Media/Images/Technologies_logo/laravel_logo.png" alt="Laravel & " width="20px"> <img src="Media/Images/Technologies_logo/sql_logo.png" width="20px" alt="SQL"> will be used in the project.</p>
                        
                        <p>You will recieve the source code & database files.</p>
                        
                    </div>
                    
                </div>
                

                
                <div class="card">
                    
                    <img class="services_img" src="Media/Images/My_Services/template_design.png" alt="*" width="200px">
                    
                    <div class="card_text" data-aos="fade-right">
                        
                        <h1>Sell Design Template.</h1>
                        
                        <p>I sell Design Template for websites.</p>
                        
                        <p><img src="Media/Images/Technologies_logo/photoshop_logo.png" width="20px" alt="Adobe Photoshop & "> <img src="Media/Images/Technologies_logo/illustration_logo.png" width="20px" alt="Adobe Illustrator"> will be used in the project.</p>
                        
                        <p>You will recieve a SVG file.</p>
                        
                    </div>
                    
                </div>
                

                
            </div>
            
        </div>
        
    </div>
    
    
    
    
    
   <!-- projects -->
    <div class="projects_container" id="P">
        
        <div class="projects">
            
            <p class="section_title view_my">My Projects</p> 

            <div data-aos="flip-down">
            
                <div class="owl-carousel owl-theme project_slider">
                    
                    <div class="item project_item">
                        
                        <img src="Media/Images/Project_pictures/UI_temp_img_project_01(Hike_on).jpg" alt="">
                        
                        <div class="project_text">
                        
                            <h1 class="project_title">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, eos!
                            </h1>
                            
                            <p class="project_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita laborum, inventore vitae quae doloribus, ratione officia, eligendi quo repellat, labore adipisci saepe? Voluptatibus ipsa earum similique quam aliquid iste fugiat impedit asperiores, reprehenderit atque saepe, odio expedita hic ab sed inventore quibusdam, autem ratione commodi delectus nisi culpa eum repellendus?</p>
                            
                        </div>
                        
                    </div>
                    
                    <div class="item project_item">
                        
                        <img src="Media/Images/Project_pictures/UI_temp_img_project_02(TEK_Engineering)___%5BCLIENT%5D.jpg" alt="">
                        
                        <div class="project_text">
                        
                            <h1 class="project_title">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, eos!
                            </h1>
                            
                            <p class="project_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita laborum, inventore vitae quae doloribus, ratione officia, eligendi quo repellat, labore adipisci saepe? Voluptatibus ipsa earum similique quam aliquid iste fugiat impedit asperiores, reprehenderit atque saepe, odio expedita hic ab sed inventore quibusdam, autem ratione commodi delectus nisi culpa eum repellendus?</p>
                            
                        </div>
                        
                    </div>
                    
                </div>

            </div>
            
        </div>
        
    </div>
    
    
    
    
    <!-- technologies -->
    <div class="technologies_container" id="T">

        <div class="technologies">

            <p class="section_title used">Technologies</p>
    
                <div class="tech_cards">
        
                    <div class="tech_card" data-aos="fade-up">
                    
                        <img src="Media/Images/Technologies_logo/html_logo.png" alt="HTML" width="100px">

                        <h1 class="tech_text">HTML5</h1>
                    
                    </div>

                    <div class="tech_card" data-aos="fade-up">
                    
                        <img src="Media/Images/Technologies_logo/css_logo.png" alt="CSS3" width="100px">

                        <h1 class="tech_text">CSS3</h1>
                    
                    </div>

                    <div class="tech_card" data-aos="fade-up">
                    
                        <img src="Media/Images/Technologies_logo/javascript_logo.png" alt="Javascript" width="100px">

                        <h1 class="tech_text">Javascript</h1>
                    
                    </div>

                    <div class="tech_card" data-aos="fade-up">
                    
                        <img src="Media/Images/Technologies_logo/php_logo.png" alt="PHP" width="100px">

                        <h1 class="tech_text">PHP</h1>
                    
                    </div>

                    <div class="tech_card" data-aos="fade-up">
                    
                        <img src="Media/Images/Technologies_logo/laravel_logo.png" alt="Laravel" width="100px">

                        <h1 class="tech_text">Laravel</h1>
                    
                    </div>

                    <div class="tech_card" data-aos="fade-up">
                    
                        <img src="Media/Images/Technologies_logo/sql_logo.png" alt="MySQL" width="100px">

                        <h1 class="tech_text">MySQL</h1>
                    
                    </div>

                    <div class="tech_card" data-aos="fade-up">
                    
                        <img src="Media/Images/Technologies_logo/photoShop_logo.png" alt="PhotoShop" width="100px">

                        <h1 class="tech_text">PhotoShop</h1>
                    
                    </div>

                    <div class="tech_card" data-aos="fade-up">
                    
                        <img src="Media/Images/Technologies_logo/illustration_logo.png" alt="Illustrator" width="100px">

                        <h1 class="tech_text">Illustrator</h1>
                    
                    </div>

                </div>
        
        </div>
    
    </div>
    
    
    
    
    
    <!-- custom order -->
    <div class="order_custom_contaier" id="O">
        
        <div class="order_custom">
            
            <p class="section_title place_a">Custom Order</p>
            
            <div class="order">
                
                <div class="order_text" data-aos="fade-left">
                    
                    <h1>Why you need a Website?</h1>
                    
                    <p>
                        If your business has gotten this far without a website, you might be wondering: do I need a website for my business? What’s the point if my business is already successful without one?
                        <br><br>
                        The short answer is that there has never been a better or more important time to invest in a website for your business. A website offers a wide variety of benefits for small businesses, and most of these benefits increase in value exponentially year over year, just like the Internet itself.
                        <br><br><b>So what are you waiting for. Fill up the form and get yourself an online presence.</b>
                    </p>
                    
                </div>
                
                <form action="" class="order_form">
                    
                    <div class="form_fills_all">
                      
                        <div class="form_fills">

                            <label class="label order_form_label" for="name" >Your Name</label>
                            <input class="input order_form_input" type="text">

                        </div>

                        <div class="form_fills">

                            <label class="label order_form_label" for="email" >Your Email</label>
                            <input class="input order_form_input" type="email">

                        </div>

                        <div class="form_fills">

                            <label class="label order_form_label" for="number" >Your Number</label>
                            <input class="input order_form_input" type="phone">

                        </div>

                        <div class="form_fills">

                            <label class="label order_form_label" for="website_desc" >Website Description</label>
                            <input class="input tall_input order_form_input" type="text">

                        </div>
                        
                    </div>
                    
                    
                    <button class="form_btn order_form_btn" type="submit"><i class="fas fa-dove point_order_btn"></i></button>
                    
                </form>
                
            </div>
            
        </div>
        
    </div>
    
    
    
    
    <!-- fixed side btns -->
    
    <div class="fixed_side_btns">
      
       <p><i class="fas fa-th-large"></i></p>
       
       <div class="fixed_link_btns">
           
            <a href="https://www.facebook.com/thasinmahmud.bd" class="facebook link_btn"><img src="Media/Images/Side_bar_images/facebook_logo.png" alt="f" width="32px"></a>
        
            <a href="#" class="page link_btn"><img src="Media/Images/Side_bar_images/facebook_page_logo.png" alt="fp" width="32px"></a>

            <a href="#" class="linkedin link_btn"><img src="Media/Images/Side_bar_images/linked_in_logo.png" alt="ln" width="32px"></a>

            <a href="#" class="insta link_btn"><img src="Media/Images/Side_bar_images/insta_logo.png" alt="i" width="32px"></a>

            <a href="#" class="gmail link_btn"><img src="Media/Images/Side_bar_images/gmail_logo.png" alt="g" width="32px"></a>

            <a href="#" class="github link_btn"><img src="Media/Images/Side_bar_images/github_logo.png" alt="g" width="32px"></a>

            <a href="#" class="pinterest link_btn"><img src="Media/Images/Side_bar_images/pinterest_logo.png" alt="p" width="32px"></a>

            <a href="#" class="fiverr link_btn"><img src="Media/Images/Side_bar_images/fiverr_logo.png" alt="fi" width="32px"></a>
           
       </div>
        
    </div>
    
    
    <!-- side anchor btns -->
    
    <div class="fixed_anchor_btns">
      
       <p><i class="fas fa-anchor"></i></p>
       
       <div class="fixed_target_btns">
           
            <a href="#H" class="anchor_btn head">H</a>
            
            <a href="#A" class="anchor_btn article">A</a>
        
            <a href="#S" class="anchor_btn service">S</a>

            <a href="#P" class="anchor_btn project">P</a>

            <a href="#T" class="anchor_btn techno">T</a>

            <a href="#O" class="anchor_btn custom_order">O</a>

            <a href="#F" class="anchor_btn feedback">F</a>
           
       </div>
        
    </div>
    
    
    
    <!-- footer -->
    
    <footer>
        
        <div class="footer_container" id="F">
          
           <div class="footer_top">
           
               <form action="" class="feedback_form">
                   
                   <p>I know this is to much too ask but please give me an honest feedback about my services. Your feedback will help me improve. Thank you.</p>

                   <div class="feedback_form_section">

                       <label class="label feedback_label" for="feedback">Your Name.</label>
                       <input class="input feedback_input" type="text" required placeholder="No numbers or special symbol allowed.">

                   </div>

                   <div class="feedback_form_section">

                       <label class="label feedback_label" for="feedback">Let me know about your experience.</label>
                       <input class="input feedback_input" type="text" required placeholder="Your feedback.">

                   </div>

                   <button class="feedback_btn" type="submit">Feedback</button>

               </form>
               
               <div class="footer_middle">
                   
                   <div class="footer_info">
                     
                         <div>

                           <i class="fas fa-at footer_info_email"></i><p>thasinmahmud.bd@gmail.com</p>

                         </div>

                         <div>

                           <i class="fas fa-mobile-alt footer_info_mobile"></i><p>+88 01984983948, +88 01757758904</p>

                         </div>
                       
                   </div>

                   <div class="footer_ancors">

                       <a class="footer_ancors_a" href="client_confidentiality.php">Client Confidentiality</a>

                       <a class="footer_ancors_a" href="developer_support.php">Developer Support</a>

                       <a class="footer_ancors_a" href="facing_issues.php">Facing Issues</a>

                       <a class="footer_ancors_a" href="learn_more.php">Learn More</a>

                       <a class="footer_ancors_a" href="refund_policy">Refund Policy</a>

                   </div>
                   
                </div>
           
                <div class="footer_left">
                   
                   <h1>About Me</h1>
                    
                    <p>Hey, I'm Thasin. I'm a web developer. I have been doing this since 2019. I've done several projects and hope to do many more in the future. I think every business needs an online presence. If you agree, then you're in luck all you have to do is fill up a form and I'll make your business online. <br><br>

                    To know more about what I do, you can browse <a class="footer_about_link_blue" href="Sub_pages/1_projects.php">my projects</a> and visit <a class="footer_about_link_blue"  href="Sub_pages/2_store.php">my store</a> or see my gigs on <a class="footer_about_link_green" target="_blank"  href="https://www.fiverr.com/thasin_bd?up_rollout=true">Fiverr</a>. What are you waiting for, "Time is Money".</p>
                    
                </div>
           
           </div>
            
            <small>&copy; Copyright 2021, Thasin Mahmud</small>
            
            
            
        </div>
        
    </footer>
    
    

    
    
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