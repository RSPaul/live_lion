<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/fonts/stylesheet.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/bootstrap.min.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/font-awesome.min.css' ?>">
	
	<?php

		error_reporting(0);
		wp_head();
	?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	<?php $upload_dir = wp_upload_dir(); ?>
	<header class="main_header" style="background: url('<?php echo $upload_dir['baseurl'] . '/2019/01/live_lion_home_bg.png'; ?>'); background-repeat: no-repeat; background-size: cover; background-position: center;">
		<div class="row">							
			<!-- Static navbar -->
		    <nav class="navbar">
		        <div class="navbar-header">
		          <a class="navbar-brand" href="/"><img src="<?php echo $upload_dir['baseurl'] . '/2019/01/logo.png'; ?>"></a>
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		            <?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_class'     => 'main-menu',
								'items_wrap'     => '<ul class="nav navbar-nav navbar-right">%3$s</ul>',
							)
						);
					?>
		        </div><!--/.nav-collapse -->		    
		    </nav>	
	
			<div class="banner_content text-center">
				<div class="container">
					<div class="row">
						<?php
							  $postdata   = get_post( 41 );
							  $output =   $postdata->post_content;
							  echo $output;
						?>
					</div>
				</div>
			</div>


		</div>
	</header>	
	

	<div id="content" class="site-content">
