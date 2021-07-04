<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Italian Resturant</title>
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>../css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300&family=Yellowtail&display=swap" rel="stylesheet">
        <!-- JQUERY START   -->
        <script src="<?php bloginfo('template_url');?>/js/jquery.js"></script>
         <script>
                  $(document).ready(function(){
                  $('#open-menu').click(function(){
                     $('#link').slideToggle();
                  });
                   });
         </script>
          <!-- JQUERY END   -->
    </head>
    <body>
        <div class="main-container">
            <header>
                <div class="inner-container">
                    <section>
                        <div class="header-content">
                            <div class="header-left-content">
                                <a href="<?php echo get_field('header_button_0ne_link', 'option') ?>">
                                    <button class="first-small-width">
                                        <i class="fa fa-map-marker" style="font-size:16px"></i>
                                        <span class="first-btn"><?php echo get_field('header_button_one_text', 'option') ?></span>
                                    </button>
                                </a>
                                <a href="<?php echo get_field('header_button_two_link', 'option') ?>">
                                    <button class="second-small-width">
                                    <span><?php echo get_field('header_button_two_text', 'option') ?></span>
                                    </button>
                                </a>
                            </div>
                            <div class="header-middle-content">
                                <a href=" #">
                                   <img src=" " alt="" srcset=" image not found">
                                </a>
                            </div>
                            <div class="header-right-content" >
                                <i class="fa fa-bars" style="font-size:30px;color: #00756c; cursor: pointer;" id="open-menu"></i>
                                
                            </div>
                            <!-- <div class="header-right-content"></div> -->
                        </div>
                        <div class="divider"> </div>
                        <div class="mobile-menu"  id="link">
                            <?php
                                wp_nav_menu(array('menu'=>'Main-Menu'))
                            ?>
                        </div>
                    </section>
                </div>
            </header>