<?php
/*
Template Name: Contact Us Page
*/
?>

<?php get_header(); ?>
<main class="contactPage">
    <div class="container">
        <section class="contactIntro" data-aos="fade-right">
            <h1><?php the_field('page_title'); ?></h1>
            <p><?php the_field('page_copy'); ?></p>
            <h2><?php the_field('page_subtitle'); ?></h2>
            <a href="tel:407.604.2935" class="btn hvr-shutter-out-horizontal">407.604.AXEL (2935)</a>
        </section>
        <hr class="line">
        <section class="contactForm" data-aos="fade-left">
            <p><?php the_field('form_copy'); ?></p>
            <?php echo do_shortcode('[formidable id=2]'); ?>
        </section>
    </div>
</main>
<section class="servingOrlandoContact">
    <div class="container">
        <div class="servingOrlandoContactText">
            <div class="servingOrlandoContactPageTitle" data-aos="fade-down">
                <div class="append">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpingFloridaAfter.png" alt="" data-aos="zoom-in-right">
                </div>
                <h3>Serving Orlando and Central Florida</h3>
                <div class="append">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpingFloridaAfter.png" alt="" data-aos="zoom-in-right">
                </div>
            </div>
        </div>
        <div class="servingOrlandoImage" data-aos="zoom-out">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/serving-orlando-image.png" alt="">
        </div>
    </div>
</section>
	
<?php get_footer(); ?>
