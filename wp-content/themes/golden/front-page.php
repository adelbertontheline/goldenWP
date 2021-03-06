<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Golden_Theme
 */

	get_header(); ?>

			<header class="home-nav-mobile" style="background: #303033; text-align: center">
				<div class="site-header">
					<div class="stage-content">
						<div class="container">
							<div class="row">
								<div class="col-md-2">
									<a href="http://localhost/Golden/"><img class="site-logo center-block" src="<?php bloginfo('template_directory'); ?>/img/myLogo.png" alt=""></a>
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

			<section class="stage">
				<header class="home-nav-desktop" style="text-align: center">
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

				<div class="stage-content">
					<div class="stage-titles">
						<div class="container">
							<h3 class="tagline">Welcome to our Studio!</h3>
							<h1 class="site-title">It's Nice to meet you</h1>
							<form>
								<div class="form-group">
									<input type="button" class="btn btn-lg btn-primary" id="stage-btn" value="TELL ME MORE"></input>
								</div>
							</form>
						</div>
					</div> <!-- end of stage-titles -->
				</div> <!-- end of section-content -->
			</section> <!-- end of stage -->

			<section class="services">
				<div class="section-content">
					<div class="container">
						<h1 class="section-title">Services</h1>
						<p class="section-subtitle">Hello, world. I am services.</p>
					</div>
					<div style="margin-top: 4rem">
						<div class="container">
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12">
									<img class="center-block icons" src="<?php bloginfo('template_directory'); ?>/img/icon-basket.png" alt="">
									<h5>E-Commerce</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus asperiores eius facere saepe sint quasi dicta, rem iste quaerat fugiat consequatur possimus accusamus, est veritatis, esse? Consequatur ullam consequuntur, laborum.</p>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<img class="center-block icons" src="<?php bloginfo('template_directory'); ?>/img/icon-laptop.png" alt="">
									<h5>Responsive Web</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus asperiores eius facere saepe sint quasi dicta, rem iste quaerat fugiat consequatur possimus accusamus, est veritatis, esse? Consequatur ullam consequuntur, laborum.</p>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<img class="center-block icons" src="<?php bloginfo('template_directory'); ?>/img/icon-locked.png" alt="">
									<h5>Web Security</h5>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus asperiores eius facere saepe sint quasi dicta, rem iste quaerat fugiat consequatur possimus accusamus, est veritatis, esse? Consequatur ullam consequuntur, laborum.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> <!-- end of services -->

			<section class="portfolio">
				<div class="section-content">
					<div class="container">
						<h1 class="section-title">Our Portfolio</h1>
						<p class="section-subtitle">Hello, world! I am portfolio. Haha</p>
					</div>
					<div style="margin-top: 2rem">
						<div class="container">
							<ul class="flex">
								<!-- <li class="flex__item">
									<img src="<?php //bloginfo('template_directory'); ?>/img/p1.png" alt="">
									<div style="background-color: white; width: 291px">
										<br>
										<h5 class="portfolio__desc">Ebony &amp; Ivory</h5>
										<p class="portfolio__desc"><em>Branding</em></p>
										<br>
									</div>
								</li>
								<li class="flex__item">
									<img src="<?php //bloginfo('template_directory'); ?>/img/p2.png" alt="">
									<div style="background-color: white; width: 291px">
										<br>
										<h5 class="portfolio__desc">Smart Stationary</h5>
										<p class="portfolio__desc"><em>Print Design</em></p>
										<br>
									</div>
								</li>
								<li class="flex__item">
									<img src="<?php //bloginfo('template_directory'); ?>/img/p3.png" alt="">
									<div style="background-color: white; width: 291px">
										<br>
										<h5 class="portfolio__desc">Clever Poster</h5>
										<p class="portfolio__desc"><em>Print Design</em></p>
										<br>
									</div>
								</li>
								<li class="flex__item">
									<img src="<?php //bloginfo('template_directory'); ?>/img/p4.png" alt="">
									<div style="background-color: white; width: 291px">
										<br>
										<h5 class="portfolio__desc">Vinyl Record</h5>
										<p class="portfolio__desc"><em>Product Mock-Up</em></p>
										<br>
									</div>
								</li>
								<li class="flex__item">
									<img src="<?php //bloginfo('template_directory'); ?>/img/p5.png" alt="">
									<div style="background-color: white; width: 291px">
										<br>
										<h5 class="portfolio__desc">Treehouse Template</h5>
										<p class="portfolio__desc"><em>Web Design</em></p>
										<br>
									</div>
								</li>
								<li class="flex__item">
									<img src="<?php //bloginfo('template_directory'); ?>/img/p6.png" alt="">
									<div style="background-color: white; width: 291px">
										<br>
										<h5 class="portfolio__desc">Burned Logo</h5>
										<p class="portfolio__desc"><em>Branding</em></p>
										<br>
									</div>
								</li> -->
								<?php 
									$customPost = new WP_Query('cat=3&posts_per_page=6');
									if ($customPost->have_posts()) {
										while ($customPost->have_posts()) {
											$customPost->the_post();
											get_template_part('template-parts/content', get_post_format());
										}
									}
								?>
							</ul>
						</div>
					</div>
				</div>
			</section> <!-- end of portfolio -->

			<section class="about-us">
				<div class="section-content">
					<div class="container">
						<h1 class="section-title">About Us</h1>
						<p class="section-subtitle">Hello, world! I am About Us. Know me more.</p>
					</div>
					<div style="margin-top: 4rem">
						<div class="container">
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12" style="text-align: right">
									<h5>JULY 2010</h5>
									<h5>Our Humble Beginnings</h5>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									</p>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<img class="center-block icons" src="<?php bloginfo('template_directory'); ?>/img/about1.png">
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-md-offset-4 col-sm-12 col-xs-12">
									<img class="center-block icons" src="<?php bloginfo('template_directory'); ?>/img/about2.png">
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12" style="text-align: left">
									<h5>JANUARY 2011</h5>
									<h5>Facing Startup Battles</h5>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla.
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-12 col-xs-12" style="text-align: right">
									<h5>DECEMBER 2012</h5>
									<h5>Enter The Dark Days</h5>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla.
									</p>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<img class="center-block icons" src="<?php bloginfo('template_directory'); ?>/img/about3.png">
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-md-offset-4 col-sm-12 col-xs-12">
									<img class="center-block icons" src="<?php bloginfo('template_directory'); ?>/img/about4.png">
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12" style="text-align: left">
									<h5>FEBRUARY 2014</h5>
									<h5>Our Triumph</h5>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla.
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<img class="center-block icons" src="<?php bloginfo('template_directory'); ?>/img/about5.png">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> <!-- edn of about-us -->

			<section class="our-team">
				<div class="section-content">
					<div class="container">
						<h1 class="section-title">Our Team</h1>
						<p class="section-subtitle">Hello, world. I am Our Team. Go for gold!</p>
					</div>
					<div style="margin-top: 3rem">
						<div class="container">
							<div class="row">
								<div class="col-md-4">
									<img class="center-block icons" src="<?php bloginfo('template_directory'); ?>/img/about1.png">
									<h5>Kimberly Thompson</h5>
									<p>Marketer</p>
									<div class="social">
										<ul class="menu menu--social">
											<li class="menu__item menu__item--social">
												<a href=""><img src="<?php bloginfo('template_directory'); ?>/img/facebook.png"></a>
											</li>
											<li class="menu__item menu__item--social">
												<a href=""><img src="<?php bloginfo('template_directory'); ?>/img/twitter.png"></a>
											</li>
											<li class="menu__item menu__item--social">
												<a href=""><img src="<?php bloginfo('template_directory'); ?>/img/pinterest.png"></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-4">
									<img class="center-block icons" src="<?php bloginfo('template_directory'); ?>/img/about2.png">
									<h5>Rico Massimo</h5>
									<p>Coder</p>
									<ul class="menu menu--social">
										<li class="menu__item menu__item--social">
											<a href=""><img src="<?php bloginfo('template_directory'); ?>/img/facebook.png"></a>
										</li>
										<li class="menu__item menu__item--social">
											<a href=""><img src="<?php bloginfo('template_directory'); ?>/img/twitter.png"></a>
										</li>
										<li class="menu__item menu__item--social">
											<a href=""><img src="<?php bloginfo('template_directory'); ?>/img/pinterest.png"></a>
										</li>
									</ul>
								</div>
								<div class="col-md-4">
									<img class="center-block icons" src="<?php bloginfo('template_directory'); ?>/img/about3.png">
									<h5>Uko Mason</h5>
									<p>Graphic Designer</p>
									<ul class="menu menu--social">
										<li class="menu__item menu__item--social">
											<a href=""><img src="<?php bloginfo('template_directory'); ?>/img/facebook.png"></a>
										</li>
										<li class="menu__item menu__item--social">
											<a href=""><img src="<?php bloginfo('template_directory'); ?>/img/twitter.png"></a>
										</li>
										<li class="menu__item menu__item--social">
											<a href=""><img src="<?php bloginfo('template_directory'); ?>/img/pinterest.png"></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

	<?php get_footer(); ?>