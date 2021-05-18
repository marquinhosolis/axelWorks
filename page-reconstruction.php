<?php
/*
Template Name: Reconstruction Services
*/
?>

<?php get_header(); ?>

<main class="singleService">
    <section class="singleServiceIntro">
        <div class="singleServiceIntroImage" data-aos="fade-left">
           <div class="serviceMask" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/services-mask.svg"> 
            </div>
        </div>
        <div class="singleServiceIntroText" data-aos="fade-up">
            <h1><?php the_title(); ?></h1>
            <div class="singleServiceIntroCopy">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                    endwhile;?>
                <?php endif; ?>
            </div>
            <a href="<?php echo site_url('/contact-us/')?>" class="btn hvr-shutter-out-horizontal">Contact us now</a>
        </div>
        
    </section>
    <section class="reconstructionGallery">
        <div class="container">
            <div class="reconstructionGalleryTitle">
                <div class="append">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpingFloridaAfter.png" alt="" data-aos="zoom-in-right">
                </div>
                <h3>Project Gallery</h3>
                <div class="append">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpingFloridaAfter.png" alt="" data-aos="zoom-in-right">
                </div>
            </div>
            <?php if( get_field('gallery') ){ ?>
                <?php 
                    $arrImages = array_chunk(get_field('gallery'), 6);
                    //print_r($arrImages);
                ?>
            <div class="flexslider">
                <ul class="slides">
                    <?php while( the_repeater_field('gallery') ){ 
                        foreach ($arrImages as $li) { ?>
                            <li>
                                <div class="reconstructionGallerySlide">
                                    <?php 
                                        foreach ($li as $image) { 
                                            ?>
                                            <a data-fancybox="gallery" 
                                                href="<?php echo $image['gallery_images']; ?>"
                                                style="background-image: url(<?php echo $image['gallery_images']; ?>)"
                                                >
                                                <div class="content"></div>
                                            </a> 
                                        <?php }
                                    ?>
                                </div>
                            </li> 
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
            <?php } ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
