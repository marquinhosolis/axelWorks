<?php
/*
Template Name: About US Page
*/
?>

<?php get_header(); ?>
<main class="pageAboutUs">
        <section class="aboutUsCover">
            <div class="container" data-aos="fade-up">
                <h1>About us</h1>
                <p><?php the_field('about_us_subtitle'); ?></p>
            </div>
        </section>
        <section class="aboutUsWhyChoose">
            <div class="container">
                <div class="aboutUsWhyChooseIntro" data-aos="fade-right">
                    <div class="aboutUsWhyChooseIntroPageTitle">
                        <div class="append">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpingFloridaAfter.png" alt="" data-aos="zoom-in-right">
                        </div>
                        <h2><?php the_field('why_choose_title'); ?></h2>
                    </div>
                    <h3><?php the_field('why_choose_subtitle'); ?></h3>
                    <div class="aboutUsWhyChooseIntroPageIntroCopy">
                        <?php the_field('why_choose_intro_copy'); ?>
                    </div>
                </div>
                <div class="aboutUsWhyChooseText" data-aos="fade-left">
                    <?php the_field('why_choose_copy'); ?>
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
        <section class="founderWords">
            <div class="founderWordsBox" data-aos="fade-up">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quotes.png " alt="">
                <p><?php the_field('founder_words');?></p>
                <div class="founderName">
                    <span> Chris Hayne</span><br>founder of Axel Works
                </div>
            </div>
            <div class="founderWordsImage">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp/founder.png" alt="">
            </div>
        </section>
        <section class="certifiedLogos">
            <div class="container">
                <div class="row">
                    <h2 data-aos="fade-right"><?php the_field('certified_title'); ?></h2>
                    <p data-aos="fade-left"><?php the_field('certified_copy'); ?></p>
                </div>
                <div class="row" data-aos="fade-up">
                <?php if( get_field('certified_logos') ): ?>
                        <?php while( the_repeater_field('certified_logos') ){ ?>
                            <img src="<?php the_sub_field('certified_logo'); ?>" alt="">
                        <?php } ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="ourTeam">
            <div class="container">
                <div class="ourTeamPageTitle" data-aos="fade-down">
                    <div class="append">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpingFloridaAfter.png" alt="" data-aos="zoom-in-right">
                    </div>
                    <h3>Our Core Team</h3>
                    <div class="append">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpingFloridaAfter.png" alt="" data-aos="zoom-in-right">
                    </div>
                </div>
                <div class="ourTeamBoxes">
                    <?php if( get_field('our_core_team') ): ?>
                        <?php
                            $speed = 0;
                        ?>
                        <?php while( the_repeater_field('our_core_team') ){ ?>
                            <div class="ourTeamBoxesProfile" data-aos="fade-right" data-aos-offset="<?php echo $speed; ?>">
                                <div class="ourTeamBoxesProfileImage">
                                    <img src="<?php the_sub_field('team_member_image'); ?>" alt="<?php the_sub_field('team_member_name'); ?>">
                                </div>
                                <div class="ourTeamBoxesProfileCopy">
                                    <h4><?php the_sub_field('team_member_name'); ?> <br>
                                    <span><?php the_sub_field('team_member_role'); ?></span></h4>
                                    <?php the_sub_field('team_member_copy'); ?>
                                </div>
                            </div>
                        <?php 
                            $speed += 100;
                        } ?>
                    <?php endif; ?>
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
                <a href="<?php echo site_url('/contact-us/')?>" class="btn hvr-shutter-out-horizontal">Get help now</a>
            </div>
        </section>
    </main>
	
<?php get_footer(); ?>
