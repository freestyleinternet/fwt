<?php
    $page_slug = '';
	if (is_page())
	{
		$page_slug = 'page-'.basename(get_permalink());
		
		if ($post->post_parent)
		{
			$page_slug.= ' parent-'.basename(get_permalink($post->post_parent));
		}
	}
?>
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
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript">
		function initialize() {
		  var myLatlng = new google.maps.LatLng(51.57851,-0.14963);
		  var mapOptions = {
			zoom: 15,
			center: myLatlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		  }
		
		  var map = new google.maps.Map(document.getElementById('map'), mapOptions);
		
		  var contentString = 
		  	  '<div id="content">'+
			  	  '<h1>Aztec House</h1>'+
				  '<div id="bodyContent">'+
					  '<ul>'+
					  	'<li>397-405 Archway Road</li>' +
						'<li>Highgate</li>' +
						'<li>London N6 4EY</li>' +
					  '</ul>' +
				  '</div>'+
			  '</div>';
		
		  var infowindow = new google.maps.InfoWindow({
			  content: contentString,
			  maxWidth: 250
		  });
		
		  var marker = new google.maps.Marker({
			  position: myLatlng,
			  map: map,
			  title: 'Cauldron'
		  });
		  google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		  });
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	<?php wp_head(); ?>
</head>

<body <?php body_class($page_slug); ?>>
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
                    <a class="yellowimg envelope" href="<?php bloginfo('url'); ?>/add-to-mailing-list/">E-NEWS SIGN UP</a>
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
        
       