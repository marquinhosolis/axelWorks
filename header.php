<!doctype html>
<html>
	<head>
		<title><?php bloginfo( 'name' ); ?></title>
		<meta charset="utf-8">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" name="viewport">
		<meta name="language" content="PT-BR">
		<meta content="pt-br" http-equiv="content-language">
		<link rel="stylesheet" href="https://use.typekit.net/njs3yak.css" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/hover-min.css">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.min.css">
		<?php wp_head(); ?> 
	</head>

	<body>
	<header data-aos="fade-down">
        <div class="container">
            <div class="logoHeader">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/axel-works-logo.png" alt="Axel Works Logo" />
                </a>
            </div>
            <a href="#" class="hamburger">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <i class="fa fa-times" aria-hidden="true"></i>
            </a>
            <nav class="headerMenu" >
                <ul>
                    <li class="hasSubMenu hvr-grow">
                        <a href="#">Emergency Services</a>
                        <ul class="subMenu">
                            <li>
                                <a href="<?php echo site_url();?>/reconstruction/water-damage-recovery/">Water Damage Recovery</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url();?>/reconstruction/mold-damage-repair/">Mold Damage Repair</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url();?>/reconstruction/tree-debris-removal/">Tree & Debris Removal</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url();?>/reconstruction/fire-damage-recovery/">Fire Damage Recovery</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url();?>/reconstruction/board-up-tarp-services/">Board Up & Tarp Services</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?php echo site_url('/reconstruction/');?>" class="hvr-grow">Reconstruction</a></li>
                    <li><a href="<?php echo site_url('/about-us/');?>" class="hvr-grow">About Us</a></li>
                    <li><a href="<?php echo site_url('/faqs/');?>" class="hvr-grow">FAQS</a></li>
                    <li><a href="<?php echo site_url('/contact-us/');?>" class="hvr-grow">Contact Us</a></li>
                    <li>
                        <a href="tel:407.604.2935" class="hvr-grow">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/call-us-button.png" alt="" height="auto" width="150">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <nav class="menuMobile">
        <ul>
            <li class="hasSubMenu hvr-grow">
                <a href="#">Emergency Services</a>
                <ul class="subMenu">
                    <li>
                        <a href="<?php echo site_url();?>/reconstruction/water-damage-recovery/">Water Damage Recovery</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/reconstruction/mold-damage-repair/">Mold Damage Repair</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/reconstruction/tree-debris-removal/">Tree & Debris Removal</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/reconstruction/fire-damage-recovery/">Fire Damage Recovery</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>/reconstruction/board-up-tarp-services/">Board Up & Tarp Services</a>
                    </li>
                </ul>
            </li>
            <li><a href="<?php echo site_url('/reconstruction/');?>" class="hvr-grow">Reconstruction</a></li>
            <li><a href="<?php echo site_url('/about-us/');?>" class="hvr-grow">About Us</a></li>
            <li><a href="<?php echo site_url('/faqs/');?>" class="hvr-grow">FAQS</a></li>
            <li><a href="<?php echo site_url('/contact-us/');?>" class="hvr-grow">Contact Us</a></li>
            <li>
                <a href="tel:407.604.2935" class="hvr-grow">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/call-us-button.png" alt="" height="auto" width="150">
                </a>
            </li>
        </ul>
    </nav>
