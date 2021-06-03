




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




<!-- header -->
    <div class="header_container" id="H">
       
       <div class="shade">
        
            <div class="header">

                <img src="Media/Images/Profile_picture/Profile_picture.jpg" alt="" width="150px" height="150px">

                <div class="header_description">

                    <h1>Hey, I'm <?php echo $data[0]['name']; ?>.</h1>

                    <h2><?php echo $data[0]['about']; ?> <a href="Sub_pages/3_custom_order.php" class="custom_order_link">Let's make something together. &#128522;</a></h2>

                </div>
                
                <div class="header_contact_info">
                    
                    <div class="header_info_email">

                       <i class="fas fa-at header_info_email_logo"></i> <p><?php echo $data[0]['email']; ?></p>

                    </div>

                    <div class="header_info_mobile">

                        <i class="fas fa-mobile-alt header_info_mobile_logo"></i>
                        <p>+88 <?php echo $data[0]['number_1']; ?></p>
                        <span></span>
                        <p>+88 <?php echo $data[0]['number_2']; ?></p>

                    </div>
                    
                </div>

            </div>
            
        </div>
        
    </div>