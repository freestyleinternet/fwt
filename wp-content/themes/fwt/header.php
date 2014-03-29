<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php wp_title(''); ?></title>
	<meta name="viewport" content="width=device-width">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
    <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 8]>
	    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->

    <div class="mobileContainer"> 
        <div id="slidingMenu">
            <div id="slidingMenuContent">
				<?php
					wp_nav_menu(
						array(
						'menu'		  => 'main-menu',
						'container'       => '',
						'menu_class'	=> 'mobilemenu'
					));
                ?>
            </div>
    	</div>
    
    <div id="page">
   		<header>
    		<div class="wrapper clearfix">
                <div class="contact">
                	<h1>Leading experts in transport information and mapping</h1>
                    <p>Call: <span>0208 345 1234</span></p>
                    <a class="yellowimg" href="index.php">E-NEWS SIGN UP</a>
                </div>
                <a class="logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/fwt-logo.svg" alt="FWT"/></a>
				<?php
                    wp_nav_menu(
                        array(
                        'menu'		  => 'main-menu',
                        'container'       => '',
                        'menu_class'	=> 'mainmenu'
                    ));
                ?>
    		</div>
    	</header>
        <a href="javascript:void(0);" class="show-menu-button">Menu</a>
        
        <div class="banner" role="banner">
            <div class="wrapper"> 
                <div class="slider-container">
                    <div class=center>
                        <span id=prev rel="prev"></span>
                        <span id=next rel="next"></span>
                    </div>
                    <div class="cycle-slideshow" 
                        data-cycle-fx=scrollHorz
                        data-cycle-swipe=true
                        data-cycle-slides="div.slide"
                        data-cycle-prev="#prev"
                        data-cycle-next="#next">
                        <div class="cycle-pager"></div>
                        <div class="slide">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/slide1.jpg">
                            <div class="text">
                                <p>banner</p>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/slide1.jpg">
                            <div class="text">
                                <p>banner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    	<div class="pageContent">
    		<main role="main">
    			<div class="wrapper">
    				<p>Main content</p> 
    			</div>
    		</main>