

<!-- footer -->
    
    <footer>
        
        <div class="footer_container" id="F">
          
           <div class="footer_top">
           
               <form action="Dynamic/actions_dynamic.php" method="post" class="feedback_form">
                   
                   <p>I know this is to much too ask but please give me an honest feedback about my services. Your feedback will help me improve. Thank you.</p>

                   <div class="feedback_form_section">

                       <label class="label feedback_label" for="feedback">Your Name.</label>
                       <input class="input feedback_input" type="text" name="feedback_provider" required placeholder="No numbers or special symbol allowed.">

                   </div>

                   <div class="feedback_form_section">

                       <label class="label feedback_label" for="feedback">Let me know about your experience.</label>
                       <input class="input feedback_input" type="text" name="feedback" required placeholder="Your feedback.">

                   </div>

                   <button class="feedback_btn" name="feedback_btn" type="submit">Feedback</button>

               </form>
               
               <div class="footer_middle">




                <!-- crud for header --> 
                              
                <?php
                    
                        $query_to_read_basic_info = "SELECT * FROM basic_info_table;";
                        
                        $read_basic_info = new Database();
                        $basic_info = $read_basic_info->read($query_to_read_basic_info); 
                
                        while($row = mysqli_fetch_assoc($basic_info)){
                            $data[] = $row;
                        }
                
                        //print_r($basic_info);
                
                ?>



                   
                   <div class="footer_info">
                     
                         <div>

                           <i class="fas fa-at footer_info_email"></i><p><?php echo $data[0]['email']; ?></p>

                         </div>

                         <div>

                           <i class="fas fa-mobile-alt footer_info_mobile"></i><p>+88 <?php echo $data[0]['number_1']; ?>, +88 <?php echo $data[0]['number_2']; ?></p>

                         </div>
                       
                   </div>

                   <div class="footer_ancors">

                       <a class="footer_ancors_a" href="666.1_client_confidentiality.php">Client Confidentiality</a>

                       <a class="footer_ancors_a" href="666.2_developer_support.php">Developer Support</a>

                       <a class="footer_ancors_a" href="666.3_facing_issues.php?message=Please be as descriptive as possible.">Facing Issues</a>

                       <a class="footer_ancors_a" href="666.4_learn_more.php">Learn More</a>

                       <a class="footer_ancors_a" href="666.5_refund_policy.php">Refund Policy</a>

                   </div>
                   
                </div>
           
                <div class="footer_left">
                   
                   <h1>About Me</h1>
                    
                    <p>Hey, I'm Thasin. I'm a web developer. I have been doing this since 2019. I've done several projects and hope to do many more in the future. I think every business needs an online presence. If you agree, then you're in luck all you have to do is fill up a form and I'll make your business online. <br><br>

                    To know more about what I do, you can browse <a class="footer_about_link_blue" href="1_projects.php">my projects</a> and visit <a class="footer_about_link_blue"  href="2_store.php">my store</a> or see my gigs on <a class="footer_about_link_green" target="_blank"  href="<?php echo $data[0]['fiverr']; ?>">Fiverr</a>. What are you waiting for, "Time is Money".</p>
                    
                </div>
           
           </div>
            
            <small>&copy; Copyright 2021, Thasin Mahmud</small>
            
            
            
        </div>
        
    </footer>