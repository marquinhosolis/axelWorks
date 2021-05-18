<?php
/*
Template Name: Faq's Page
*/
?>
<?php
    $limit = 4;
    if(isset($_GET['cat'])){
        $cat = $_GET['cat'];
    }
    if(isset($_GET['search'])){
        $search = $_GET['search'];
    }
    if(isset($_GET['all'])){
        $posts = '-1';
    }else{
        $posts = $limit;
    }
?>
<?php get_header(); ?>
    <main class="faqPage">
        <section class="faqCover">
            <div class="container">
                <div class="faqCoverPageTitle" data-aos="fade-down">
                    <div class="append">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpingFloridaAfter.png" alt="" data-aos="zoom-in-right">
                    </div>
                    <h3>Frequently Asked Questions</h3>
                    <div class="append">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/helpingFloridaAfter.png" alt="" data-aos="zoom-in-right">
                    </div>
                </div>
                <div class="faqCoverForms">
                    <form action="" method="get">
                        <input type="search" name="search" placeholder="Search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                    <div class="selectWrapper">
                        <form action="" method="get">
                            <?php
                                wp_dropdown_categories( array(
                                    'show_option_all'    => 'Filter by Category',
                                    'orderby'            => 'name', 
                                    'hierarchical'       => 1, 
                                    'depth'              => 1,
                                ) );
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="faqs">
            <div class="container">
                <?php
                    $args = array(
                        'post_type' => array( 'faqs_cpt' ),
                        'posts_per_page' => $posts,
                        'cat'            => $cat,
                        's'              => $search
                    );

                    $query = new WP_Query( $args );
                    
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();?>
                            <?php 
                                $count = $query->found_posts;
                            ?>
                            <div class="faq" data-aos="fade-up">
                                <div class="faqQuestion">
                                    <?php  the_title(); ?>
                                </div>
                                <div class="faqAnswer">
                                    <?php the_content(); ?>
                                </div>
                                <div class="faqReadAnswer">
                                    <a href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        <?php }
                    } 
                    
                    wp_reset_postdata();
                
                
                ?>
                <?php 
                    if($query->found_posts > $limit){ ?>
                        <div class="loadMoreFaqs">
                            <a href="<?php the_permalink(); ?>?all=1">View more <i class="fa fa-long-arrow-down" aria-hidden="true"></i></a>
                        </div>
                    <?php }
                ?>
                
            </div>
        </section>
    </main>
	
<?php get_footer(); ?>
