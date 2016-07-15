<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Golden_Theme
 */

	get_header(); ?>
			
			<section style="background-color: #f2f2f2">
				<div class="container">
					<?php  
						if (has_post_thumbnail()) { ?>
							<?php global $post; ?>
							<?php
								$src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'auto', false, '');
							?>
							<div class="section-content" style="padding-bottom: 0;">
								<img src="<?php echo $src[0]; ?>" alt="banner">
							</div>
						<?php }
					?>

					<div class="section-content">
						<h1 class="section-title"><?php the_title(); ?></h1>
						<p class="portfolio__desc portfolio__desc--timestamp ">
							<?php the_time('M d, Y'); ?> | <?php the_time('h:i A'); ?>
						</p>
						<br><br>
						<?php
							if (have_posts()) {
								while (have_posts()) { 
									the_post();
									the_content();
								}
							}
							else {
								echo "<p>No content.</p>";
							}
						?>
					</div>
				</div>	
			</section>

	<?php get_footer(); ?>
