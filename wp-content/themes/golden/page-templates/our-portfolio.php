<?php
/**
 * Template Name: Our Portfolio
 *
 * @package WordPress
 * @subpackage Golden_Theme
 * @since 1.0
 */

	get_header(); ?>

			<header style="background: #13133a; text-align: center">
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





			<section style="background: #f7f7f7">
				<div class="section-content">
					<div class="container">
						<h1 class="section-title">My Portfolio</h1>
						<p class="section-subtitle">Hello, world! I am portfolio. Haha</p>
					</div>
					<div style="margin-top: 2rem">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									
										<!-- <li class="flex__item">
											<img src="<?php //bloginfo('template_directory'); ?>/img/p1.png" alt="">
											<div style="background-color: white; width: 291px">
												<br>
												<h5 class="portfolio__itemdesc">Ebony &amp; Ivory</h5>
												<p class="portfolio__itemdesc"><em>Branding</em></p>
												<br>
											</div>
										</li>
										<li class="flex__item">
											<img src="<?php //bloginfo('template_directory'); ?>/img/p2.png" alt="">
											<div style="background-color: white; width: 291px">
												<br>
												<h5 class="portfolio__itemdesc">Smart Stationary</h5>
												<p class="portfolio__itemdesc"><em>Print Design</em></p>
												<br>
											</div>
										</li>
										<li class="flex__item">
											<img src="<?php //bloginfo('template_directory'); ?>/img/p3.png" alt="">
											<div style="background-color: white; width: 291px">
												<br>
												<h5 class="-desc">Clever Poster</h5>
												<p class="portfolio__itemdesc"><em>Print Design</em></p>
												<br>
											</div>
										</li>
										<li class="flex__item">
											<img src="<?php //bloginfo('template_directory'); ?>/img/p4.png" alt="">
											<div style="background-color: white; width: 291px">
												<br>
												<h5 class="portfolio__itemdesc">Vinyl Record</h5>
												<p class="portfolio__itemdesc"><em>Product Mock-Up</em></p>
												<br>
											</div>
										</li>
										<li class="flex__item">
											<img src="<?php //bloginfo('template_directory'); ?>/img/p5.png" alt="">
											<div style="background-color: white; width: 291px">
												<br>
												<h5 class="portfolio__itemdesc">Treehouse Template</h5>
												<p class="portfolio__itemdesc"><em>Web Design</em></p>
												<br>
											</div>
										</li>
										<li class="flex__item">
											<img src="<?php //bloginfo('template_directory'); ?>/img/p6.png" alt="">
											<div style="background-color: white; width: 291px">
												<br>
												<h5 class="portfolio__itemdesc">Burned Logo</h5>
												<p class="portfolio__itemdesc"><em>Branding</em></p>
												<br>
											</div>
										</li> -->
										<?php 
											$args = array('post_type' => 'portfo', 'post_per_page' => 3);
											$loop = new WP_Query($args);

											if ($loop->have_posts()) { ?>
												<ul class="flex">
												<?php while ($loop->have_posts()) {
													$loop->the_post();
													get_template_part('template-parts/content', get_post_format());
												} ?>
												</ul>
												<div style="margin-top: 5rem">
													<div class="col-xs-6" style="text-align: right">
														<?php previous_posts_link('&larr; PREV'); ?>
													</div>
													<div class="col-xs-6" style="text-align: left">
														<?php next_posts_link('NEXT &rarr;'); ?>
													</div>
												</div>
											<?php }
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

	<?php get_footer(); ?>