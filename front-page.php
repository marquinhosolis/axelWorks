<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
<main>
        <section class="coverHome">
            <div class="coverText" data-aos="fade-up">
                <h1><?php the_field('page_title');?></h1>
                <h2><?php the_field('page_subtitle');?></h2>
                <a href="<?php echo site_url('/contact-us/'); ?>" class="btn hvr-shutter-out-horizontal">Get help now</a>
            </div>
            <div class="coverImage" data-aos="fade-left">
                <img src="<?php the_field('cover_image'); ?>" alt="" />
            </div>
            <!-- <div class="coverImageAfter">
                <div class="container">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/cover-home-after.png" alt="" />
                </div>
            </div> -->
        </section>
        <section class="helpingFl">
            <div class="container">
                <div data-aos="fade-down">
                    <div class="helpingFlPageTitle">
                        <div class="append" >
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpingFloridaAfter.png" alt="" data-aos="zoom-in-right">
                        </div>
                        <h3><?php the_field('reconstruction_services_title');?></h3>
                        <div class="append">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpingFloridaAfter.png" alt="" data-aos="zoom-in-right">
                        </div>
                    </div>
                    <div class="helpingFlPageSubtitle" >
                        <p><?php the_field('reconstruction_services_subtitle');?></p>
                    </div>
                </div>
                
                <div class="helpingFlServices">
                    <?php if( get_field('reconstruction_boxes') ): ?>
                        <?php
                            $speed = 0;
                        ?>
                        <?php while( the_repeater_field('reconstruction_boxes') ){ 
                                $serviceLink = get_sub_field('service_link');
                            ?>
                            <div class="helpingFlSingleService" data-aos="fade-right" data-aos-offset="<?php echo $speed; ?>">
                                <a href="<?php echo $serviceLink[0] -> guid; ?>">
                                    <img src="<?php the_sub_field('service_icon'); ?>" alt="<?php the_sub_field('service_title'); ?>">
                                    <h4><?php the_sub_field('service_title'); ?></h4>
                                    <div class="helpingFlSingleServiceHoverText">
                                    <?php the_sub_field('service_intro'); ?>
                                        <br><br>
                                        Learn more <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                        <?php 
                            $speed += 100;
                        } ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="rapidEmergencyHome">
            <div class="rapidEmergencyHomeText" data-aos="fade-right">
                <h3><?php the_field('emergency_title'); ?></h3>
                <p><?php the_field('emergency_subtitle'); ?></p>
            </div>
            <div class="rapidEmergencyHomeImage" data-aos="zoom-out">
                <img class="rapidEmergencyHomeImageIcons" src="<?php echo get_stylesheet_directory_uri(); ?>/images/lighticons.png" alt="">
                <img class="rapidEmergencyHomeImageSource" src="<?php the_field('emergency_image'); ?>" alt="">
            </div>
        </section>
        <section class="howItWorks">
            <div class="container">
                <div data-aos="fade-down">
                    <div class="howItWorksPageTitle">
                        <div class="append">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpingFloridaAfter.png" alt="" data-aos="zoom-in-right">
                        </div>
                        <h3><?php the_field('how_it_works_title'); ?></h3>
                        <div class="append">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpingFloridaAfter.png" alt="" data-aos="zoom-in-right">
                        </div>
                    </div>
                    <div class="howItWorksPageSubtitle">
                        <p><?php the_field('how_it_works_subtitle'); ?></p>
                    </div>
                </div>
                <div class="howItWorksSteps">
                    <?php if( get_field('how_it_works_steps') ): ?>
                        <?php
                            $speed = 0;
                        ?>
                        <?php while( the_repeater_field('how_it_works_steps') ){ ?>
                            <div class="howItWorksStep" data-aos="fade-right" data-aos-offset="<?php echo $speed; ?>">
                                <img src="<?php the_sub_field('how_it_works_step_icon'); ?>" alt="">
                                <p><?php the_sub_field('how_it_works_step_text'); ?></p>
                            </div>
                        <?php 
                            $speed += 100;
                        } ?>
                    <?php endif; ?>
                </div>
                <div class="howItWorksCta">
                    <a href="<?php echo site_url('/contact-us/');?>" class="btn hvr-shutter-out-horizontal">Get help now</a>
                </div>
            </div>
        </section>
        <section class="servingOrlando">
            <div class="container">
                <div class="servingOrlandoText" data-aos="fade-right">
                    <h3><?php the_field('serving_orlando_title'); ?></h3>
                    <p><?php the_field('serving_orlando_subtitle'); ?></p>
                </div>
                <div class="servingOrlandoImage" data-aos="zoom-out">
                    <img src="<?php the_field('serving_orlando_image'); ?>" alt="">
                </div>
            </div>
        </section>
        <section class="certified">
            <div class="container">
                <div data-aos="fade-down">
                    <div class="certifiedPageTitle">
                        <div class="append">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpingFloridaAfter.png" alt="" data-aos="zoom-in-right">
                        </div>
                        <h3><?php the_field('certified_title'); ?></h3>
                        <div class="append">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpingFloridaAfter.png" alt="" data-aos="zoom-in-right">
                        </div>
                    </div>
                </div>
                <div class="howItWorksPageSubtitle">
                    <p><?php the_field('certified_subtitle'); ?></p>
                </div>
                <div class="certifiedReasons">
                    <?php if( get_field('certified_boxes') ): ?>
                        <?php while( the_repeater_field('certified_boxes') ){ ?>
                            <div class="certifiedReason" data-aos="flip-up">
                                <div class="certifiedReasonImage">
                                    <img src="<?php the_sub_field('certified_icon'); ?>" alt="<?php the_sub_field('certified_box_title'); ?>">
                                </div>
                                <h4><?php the_sub_field('certified_box_title'); ?></h4>
                                <p><?php the_sub_field('certified_box_copy'); ?></p>
                            </div>
                        <?php } ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <div class="clear"></div>
        <section class="testimonialsHome">
            <div class="container">
                <div class="testimonialsHomePageTitle" data-aos="fade-down">
                    <div class="append">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpingFloridaAfter.png" alt="" data-aos="zoom-in-right">
                    </div>
                    <h3><?php the_field('testimonials_title'); ?></h3>
                    <div class="append">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpingFloridaAfter.png" alt=""
                        data-aos="zoom-in-right">
                    </div>
                </div>
                <div class="testimonialsBoxes">
                    <div class="flexslider">
                        <ul class="slides">
                            <?php if( get_field('testimonials_boxes') ): ?>
                                <?php while( the_repeater_field('testimonials_boxes') ){ ?>
                                    <li>
                                        <div class="testimonialsBox" data-aos="flip-right">
                                            <div class="testimonialsQuotes">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quotes.png " alt="">
                                            </div>
                                            <div class="testimonialText">
                                                <?php the_sub_field('testimonials_copy'); ?>
                                            </div>
                                            <div class="testimonialPerson">
                                                <div class="testimonialPersonImage">
                                                    <img src="<?php the_sub_field('testimonial_image'); ?>" alt="<?php the_sub_field('testimonial_name'); ?>">
                                                </div>
                                                <div class="testimonialPersonText">
                                                    <span><?php the_sub_field('testimonial_name'); ?></span> <br>
                                                    <?php the_sub_field('testimonial_role'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="homeCta">
            <div class="container">
                <div class="homeCtaPageTitle" data-aos="fade-down">
                    <div class="append">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpingFloridaAfter.png" alt="" data-aos="zoom-in-right">
                    </div>
                    <h3>Choose the local disaster recovery experts</h3>
                    <div class="append">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpingFloridaAfter.png" alt="" data-aos="zoom-in-right">
                    </div>
                </div>
                <a href="<?php echo site_url('/contact-us/');?>" class="btn hvr-shutter-out-horizontal">Get help now</a>
            </div>
        </section>
    </main>
<?php get_footer(); ?>