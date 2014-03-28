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
                <ul class="mobilemenu">
                	<li style="color:#fff;">dfsdf</li>
                </ul>
            </div>
    	</div>
    
    <div id="page">
   		<header>
    		<div class="wrapper clearfix">
    			<a href="javascript:void(0);" class="show-menu-button">Menu</a>
				<?php
					wp_nav_menu(
						array(
						'menu'		  => 'main-menu',
						'container'       => ''
					));
                ?>
    		</div>
    	</header>
    	<div class="banner" role="banner">
    		<div class="wrapper"> 
    			<p>Banner</p>
    		</div>
    	</div>
    
    	<div class="pageContent">
    		<div class="main" role="main">
    			<div class="wrapper">
    				<p>Main content</p> 
    			</div>
    		</div>