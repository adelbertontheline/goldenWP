<?php
/**
 * Template Name: Our Contact
 *
 * @package WordPress
 * @subpackage Golden_Theme
 * @since 1.0
 */

	get_header(); ?>

			<header style="background: #67194d; text-align: center">
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





			<section class="contact-page">
				<div class="section-content">
					<div class="container">
						<h1 class="section-title">Let&rsquo;s make great things together</h1>
						<p class="section-subtitle">Be part of our most awesome team.</p>
					</div>
					<div style="margin-top: 2rem">
						<div class="container">
							<div class="row">
								<div class="col-md-6" style="padding: 0">
									<div class="contact-work">
										<h1>Work.</h1>
										<br>
										<p>
											We have prepared a simple project <br>planner to get to know you and your <br>project better.
										</p>
										<br>
										<input type="button" class="btn btn-primary" value="Start a project &nbsp; &rarr;"></input>
										<br>
										<br><br>
										<p>
											For general inquiries<br>
											<strong><a href="mailto:contact@humaan.com">contact@humaan.com</a></strong>
										</p>
									</div>
								</div>
								<div class="col-md-6" style="padding: 0">
									<div class="contact-play">
										<h1>Play.</h1>
										<br>
										<p>
											Questions, advice or just want to <br>share some love? <br>We love compliments.
										</p>
										<br>
										<input type="button" class="btn btn-info" value="hello@humaan.com"></input>
										<br>
										<br><br>
										<p>
											Can't shake the love of digital?<br>
											<strong><a href="mailto:careers@humaan.com">careers@humaan.com</a></strong>
										</p>
									</div>
								</div>
							</div>
							<div class="phone-num">
								<h3>Phone <strong>+63 999 123 4567</strong></h3>
							</div>
						</div>
					</div>
					<div class="contact-page__address" style="margin-top: 5rem">
						<center><span class="glyphicon glyphicon-map-marker" style="font-size: 35px"></span></center>
						<div style="text-align: center">
							<h2>
								Level 1, 346 William Street <br>
								Perth, Western Australia
							</h2>
						</div><br>
						<center><input type="button" class="btn btn-lg btn-success" value="VIEW MAP"></input></center>
					</div>
				</div>
			</section>

	<?php get_footer(); ?>