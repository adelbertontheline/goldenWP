<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Golden_Theme
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





			<section style="background-color: #f2f2f2"> 
				<div class="section-content">
					<div class="container">
						<?php
							if (have_posts()) { ?>

								<h1>
									<?php
									if (is_category())
										single_cat_title();
									elseif (is_author())
										echo 'Author: ' . get_the_author();
									elseif (is_month())
										echo 'Month: ' . get_the_date('F Y');
									elseif (is_day())
										echo 'Day: ' . get_the_date();
									elseif (is_year())
										echo 'Year: ' . get_the_date('Y');
									else
										echo 'Archive';
									?>
								</h1>
								<hr>
								<ul class="flex">
									<?php while (have_posts()) {
										the_post();
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
							else {
								echo "<p>No content.</p>";
							} ?>
					</div>
				</div>
			</section>

		

	<?php get_footer(); ?>
