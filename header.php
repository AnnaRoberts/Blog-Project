<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<?php wp_head(); ?>
</head>
<body>
	<div class ="container">
		<header class="row">
			<div class="nine columns">
				<h1><a href="<?php bloginfo('url'); ?>"> <?php bloginfo('name');?> </a> </h1>
				<h2> <?php bloginfo('description'); ?></h2>
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
		    </div>
		</div>
<!-- END HEADER -->
