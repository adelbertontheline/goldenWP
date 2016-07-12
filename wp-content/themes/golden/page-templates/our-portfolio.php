<?php
/**
 * Template Name: Our Portfolio
 *
 * @package WordPress
 * @subpackage Golden_Theme
 * @since 1.0
 */

	get_header(); ?>

			<header style="background: #006666">
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
									<?php 
										/*if (has_posts()) {
											while (have_posts()) {
												the_post();
												get_template_part('content', get_post_format());
											}
										}*/
									?>

									<ul class="flex">
										<li class="flex__item">
											<img src="<?php bloginfo('template_directory'); ?>/img/p1.png" alt="">
											<div style="background-color: white; width: 291px">
												<br>
												<h5 class="portfolio__item--desc">Ebony &amp; Ivory</h5>
												<p class="portfolio__item--desc"><em>Branding</em></p>
												<br>
											</div>
										</li>
										<li class="flex__item">
											<img src="<?php bloginfo('template_directory'); ?>/img/p2.png" alt="">
											<div style="background-color: white; width: 291px">
												<br>
												<h5 class="portfolio__item--desc">Smart Stationary</h5>
												<p class="portfolio__item--desc"><em>Print Design</em></p>
												<br>
											</div>
										</li>
										<li class="flex__item">
											<img src="<?php bloginfo('template_directory'); ?>/img/p3.png" alt="">
											<div style="background-color: white; width: 291px">
												<br>
												<h5 class="portfolio__item--desc">Clever Poster</h5>
												<p class="portfolio__item--desc"><em>Print Design</em></p>
												<br>
											</div>
										</li>
										<li class="flex__item">
											<img src="<?php bloginfo('template_directory'); ?>/img/p4.png" alt="">
											<div style="background-color: white; width: 291px">
												<br>
												<h5 class="portfolio__item--desc">Vinyl Record</h5>
												<p class="portfolio__item--desc"><em>Product Mock-Up</em></p>
												<br>
											</div>
										</li>
										<li class="flex__item">
											<img src="<?php bloginfo('template_directory'); ?>/img/p5.png" alt="">
											<div style="background-color: white; width: 291px">
												<br>
												<h5 class="portfolio__item--desc">Treehouse Template</h5>
												<p class="portfolio__item--desc"><em>Web Design</em></p>
												<br>
											</div>
										</li>
										<li class="flex__item">
											<img src="<?php bloginfo('template_directory'); ?>/img/p6.png" alt="">
											<div style="background-color: white; width: 291px">
												<br>
												<h5 class="portfolio__item--desc">Burned Logo</h5>
												<p class="portfolio__item--desc"><em>Branding</em></p>
												<br>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>



	<?php get_footer(); ?>