


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






<!-- fixed side btns -->
    
    <div class="fixed_side_btns">
      
       <p><i class="fas fa-th-large"></i></p>
       
       <div class="fixed_link_btns">
           
            <a target="_blank" href="<?php echo $data[0]['fb']; ?>" class="facebook link_btn"><img src="Media/Images/Side_bar_images/facebook_logo.png" alt="f" width="32px"></a>
        
            <a target="_blank" href="<?php echo $data[0]['fb_page']; ?>" class="page link_btn"><img src="Media/Images/Side_bar_images/facebook_page_logo.png" alt="fp" width="32px"></a>

            <a target="_blank" href="<?php echo $data[0]['linkedin']; ?>" class="linkedin link_btn"><img src="Media/Images/Side_bar_images/linked_in_logo.png" alt="ln" width="32px"></a>

            <a target="_blank" href="<?php echo $data[0]['insta']; ?>" class="insta link_btn"><img src="Media/Images/Side_bar_images/insta_logo.png" alt="i" width="32px"></a>

            <a target="_blank" href="#" class="gmail link_btn"><img src="Media/Images/Side_bar_images/gmail_logo.png" alt="g" width="32px"></a>

            <a target="_blank" href="<?php echo $data[0]['github']; ?>" class="github link_btn"><img src="Media/Images/Side_bar_images/github_logo.png" alt="g" width="32px"></a>

            <a target="_blank" href="<?php echo $data[0]['pinterest']; ?>" class="pinterest link_btn"><img src="Media/Images/Side_bar_images/pinterest_logo.png" alt="p" width="32px"></a>

            <a target="_blank" href="<?php echo $data[0]['fiverr']; ?>" class="fiverr link_btn"><img src="Media/Images/Side_bar_images/fiverr_logo.png" alt="fi" width="32px"></a>
           
       </div>
        
    </div>