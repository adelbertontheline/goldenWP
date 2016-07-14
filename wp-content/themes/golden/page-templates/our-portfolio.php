<?php
/**
 * Template Name: Our Portfolio
 *
 * @package WordPress
 * @subpackage Golden_Theme
 * @since 1.0
 */

	get_header(); ?>

			<header style="background: #13133a">
				<div class="stage-content">
					<div class="container">
						<div class="row">
							<div class="col-md-2">
								<a href=""><img class="site-logo center-block" src="<?php bloginfo('template_directory'); ?>/img/myLogo.png" alt=""></a>
							</div>
							<div class="col-md-10">
								<nav class="site-nav">
									<?php wp_nav_menu(array('theme_location' => 'primaryMenu')); ?>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>





			<section style="background: #f7f7f7">
				<div class="section-content">
					<div class="container">
						<h1 class="section-title">Our Portfolio</h1>
						<p class="section-subtitle">Hello, world! I am portfolio. Haha</p>
					</div>
					<div style="margin-top: 2rem">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<ul class="flex">
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
											if (have_posts()) {
												while (have_posts()) {
													the_post();
													get_template_part('template-parts/content', get_post_format());
												}
											}
										?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

	<?php get_footer(); ?>