<?php /**
 * Template Name: Home
 */

 get_header();
?>


<div class="banner">
    <div class="inner-container">
        <div class="banner-box">
            <h1><?php echo get_field('banner_title') ?></h1>
            <?php echo get_field('banner_description') ?>
        </div>
        <div class="banner-btn">
            <a href="<?php echo get_field('banner_button_one_link'); ?>"><span class="mobile-hide"><?php echo get_field('banner_button_one_text'); ?></span><span class="mobile-display"><?php echo get_field('small_text_one') ?></span></a>
            <a href="<?php echo get_field('banner_button_two_link'); ?>"><span><?php echo get_field('banner_button_two_text'); ?></span></a>
            <a href="<?php echo get_field('banner_button_three_link'); ?>"><span class="mobile-hide"><?php echo get_field('banner_button_three_text'); ?></span><span class="mobile-display"><?php echo get_field('small_text_two') ?></span></a>
        </div>
    </div>
</div>


<div class="contant">
    <div class="inner-container border">
        <div class="book-a-table">
            <h3><?php echo get_field('book_title') ?></h3>
            <div class="inputs-section">
                <div class="input-field">
                    <i class="fa fa-map-marker"></i><?php echo do_shortcode('[contact-form-7 id="181" title="Untitled"]') ?>
                </div>
                <div class="text-field">
                    <?php echo get_field('book_description') ?>
                </div>
                <div class="div-select">
                <div class="select">
                    <select id="book-restaurant">
                    <option value="">-- Select your restaurant --</option>
                    <?php
                        while(have_rows('single_input_field')) {
                            the_row();
                            ?>
                                <option value="<?php echo get_sub_field('single_option_field'); ?>">
                                    <?php echo get_sub_field('single_option_field'); ?>
                                </option>
                            <?php
                        }
                    ?>
                                    <!-- <optgroup label="London Restaurants">
                                            <option value="111445">London - Euston</option>
                                            <option value="198108">London - Glasshouse Street</option>
                                            <option value="111443">London - Kensington</option>
                                            <option value="0">London - Kings Cross</option>
                                            <option value="111450">North Audley Street</option>
                                            <option value="111455">London - Northumberland Avenue</option>
                                            <option value="116032">London - St. Martin&#39;s Lane</option>
                                            <option value="114776">London - Victoria Place</option>
                                    </optgroup> -->
                        
                </select>
    
                    <i class="fa fa-chevron-circle-down"></i>
                </div>
                    <div class="btn">
                    <a href="<?php echo get_field('go_button_link') ?>"><?php echo get_field('go_button_text') ?></a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    


            <div class="content">
                


                <div class="inner-container">
                    <div class="table">
                        <?php 
                            if(have_rows('single_content_service')) {
                                $i = 0;
                                while(have_rows('single_content_service')) { 
                                    the_row(); 
                                    $i++;
                                    
                        ?>
                        <?php 
                            if($i % 2 == 0) {
                                ?>
                                    
                                <div>
                                    <h2><?php echo get_sub_field('single_content_title') ?></h2>
                                    <hr>
                                    <?php echo get_sub_field('single_content_description') ?>
                                    <img src="<?php echo get_sub_field('single_content_image') ?>" alt="">
                                    <a href="<?php echo get_sub_field('single_content_button_link') ?>"><button><?php echo get_sub_field('single_content_button_text') ?></button></a>
                                    

                                </div>
                                        
                                    
                                <?php
                            } else {
                        ?>
                                
                                <div  style="border-right: 1px solid black;">
                                    <h2><?php echo get_sub_field('single_content_title') ?></h2>
                                    <hr>
                                    <?php echo get_sub_field('single_content_description') ?>
                                    <img src="<?php echo get_sub_field('single_content_image') ?>" alt="">
                                    <a href="<?php echo get_sub_field('single_content_button_link') ?>"><button><?php echo get_sub_field('single_content_button_text') ?></button></a>
                                    

                                </div>
                                        
                                
                        <?php
                            }
                        ?>
                        <?php 
                            } 
                        ?>
                        <?php 
                            } 
                        ?>
                    </div>
                </div>
            </div>



        
</div>


<?php get_footer() ?>