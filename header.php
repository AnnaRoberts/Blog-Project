<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>
<body>
	<div class ="container">
		<header class="row">
			<div class="nine columns">
				<h1><a href="<?php bloginfo('url'); ?>"> <?php bloginfo('name');?> </a> </h1>
				<h4> <?php bloginfo('description'); ?></h4>
			</div>
			<div class="three columns">
				<?php get_search_form(); ?>
			</div>	
		</header>
		<!-- Add Menu Here -->
		<div class="row">
		    <div class="twelve columns">
		        <?php wp_nav_menu(array(
		        	'menu' => 'Another Menu',
		            'sort_column' => 'menu_order', 
		            'container_class' => 'blank-menu-header'
		            ));?>
		    
			    <ul class="social-media"> 
			    	<li><a href="https://www.instagram.com/anna_roberts3/"><i class="fa fa-instagram"></i></a></li>
			    	<li><a href="https://www.pinterest.com/annarice/"><i class="fa fa-pinterest-square"></i></a></li>
			    	<li><a href="https://www.facebook.com/anna.rice.904"><i class="fa fa-facebook"></i></a></li>
			    </ul>
			</div>
		</div>
<!-- END HEADER -->