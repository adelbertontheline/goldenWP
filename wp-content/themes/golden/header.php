<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Golden_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="all-site">
		<main class="main-content">
			<?php 
				if (is_single()) { ?>
					<header style="background: #13133a; text-align: center">
						<div class="site-header">
							<div class="stage-content">
								<div class="container">
									<div class="row">
										<div class="col-md-2">
											<a href=""><img class="site-logo center-block" src="<?php bloginfo('template_directory'); ?>/img/myLogo.png" alt=""></a>
											<button class="btn btn-info-outline" id="btn-nav-mobile"><span class="glyphicon glyphicon-align-justify" style="font-size: 28px"></span></button>
										</div>
										<div class="col-md-10">
											<nav class="site-nav" id="site-nav-desktop">
												<?php wp_nav_menu(array('theme_location' => 'primaryMenu')); ?>
											</nav>
											<nav id="site-nav-mobile">
												<?php wp_nav_menu(array('theme_location' => 'primaryMenu')); ?>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- end of site-nav -->
					</header>
				<?php }
			?>
