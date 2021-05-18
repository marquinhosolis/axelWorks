<?php
/*
Template Name: Emergency Service
*/
?>

<?php get_header(); ?>

<main class="singleService">
    <section class="singleServiceIntro">
        <div class="singleServiceIntroImage" data-aos="fade-left">
            <!-- <img src="<?php the_field('reconstruction_image');?>" alt=""> -->
            <div class="serviceMask" style="background-image: url(<?php the_field('reconstruction_image');?>);">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/services-mask.svg"> 
            </div>
        </div>
        <div class="singleServiceIntroText" data-aos="fade-up">
            <img src="<?php the_field('reconstruction_icon');?>" alt="" class="singleServiceIntroIcon">
            <h1><?php the_title(); ?></h1>
            <div class="singleServiceIntroCopy">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                    endwhile;?>
                <?php endif; ?>
            </div>
        </div>
        
    </section>
    <section class="howItWorks">
        <div class="container">
            <div class="howItWorksPageTitle" data-aos="fade-down">
                <div class="append">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpingFloridaAfter.png" alt="" data-aos="zoom-in-right">
                </div>
                <h3><?php the_field('process_steps_title'); ?></h3>
                <div class="append">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpingFloridaAfter.png" alt="" data-aos="zoom-in-right">
                </div>
            </div>
            <div class="howItWorksSteps">
                <?php if( get_field('process_steps') ): ?>
                    <?php
                        $speed = 0;
                    ?>
                    <?php while( the_repeater_field('process_steps') ){ ?>
                        <div class="howItWorksStep" data-aos="fade-right" data-aos-offset="<?php echo $speed; ?>">
                            <img src="<?php the_sub_field('process_icon'); ?>" alt="">
                            <p><?php the_sub_field('process_copy'); ?></p>
                        </div>
                    <?php 
                        $speed += 100;
                    } ?>
                <?php endif; ?>
            </div>
            <div class="howItWorksCta">
                <a href="<?php echo site_url('/contact-us/'); ?>" class="btn hvr-shutter-out-horizontal"><?php the_field('cta_button_text');?></a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
