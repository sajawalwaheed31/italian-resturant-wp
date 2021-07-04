<?php /**
 * Template Name: About-Us
 */

 get_header();
?>


<div class="inner-container">
                <div class="about-us">
                    <div class="heading">
                        <h1>
                            <?php echo get_field('about_first_title') ?>
                        </h1>
                        <h2>
                            <?php echo get_field('about_second_title') ?>
                        </h2>
                    </div>
                    <hr>


                    <div class="details">
                        <?php 
                                if(have_rows('ir_details')) {
                                    $i = 0;
                                    while(have_rows('ir_details')) { 
                                        the_row(); 
                                        $i++;
                                        
                            ?>
                            <?php 
                                if($i % 2 == 0) {
                                    ?>
                                        
                                    
                                        <div class="type">
                                            <h2>
                                                <?php echo get_sub_field('ir_title') ?>
                                            </h2>
                                            <p>
                                                <?php echo get_sub_field('ir_description') ?>
                                            </p>    
                                        </div>
                                        

                                    
                                            
                                        
                                    <?php
                                } else {
                            ?>
                                    
                                        <div class="type">
                                            <h2>
                                                <?php echo get_sub_field('ir_title') ?>
                                            </h2>
                                            <p>
                                                <?php echo get_sub_field('ir_description') ?>
                                            </p>    
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


<?php get_footer() ?>