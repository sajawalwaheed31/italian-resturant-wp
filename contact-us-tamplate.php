<?php /**
 * Template Name: Contact-Us
 */

 get_header();
?>



<div class="contact-banner">
    <div class="inner-container">
        <div class="box">
            <div class="text-background">
                <h1><?php echo get_field('contact_first_title')?></h1>
                <h2><?php echo get_field('contact_second_title')?></h2>
            </div>
            <div class="input-div">
                <i class="fa fa-search"></i>
                <?php echo do_shortcode('[contact-form-7 id="182" title="Untitled"]') ?>
            </div>
        </div>
    </div>
</div>

    <div class="cs-form">
    <?php echo do_shortcode('[contact-form-7 id="25" title="Contact form 1"]'); ?>
    </div>


<?php get_footer() ?>