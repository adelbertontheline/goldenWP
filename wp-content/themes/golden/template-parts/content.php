<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Golden_Theme
 */

?>

<?php if (has_post_thumbnail()) { ?>
	<li class="flex__item">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('portfolio-thumbnail'); ?>
		</a>
		<div style="background-color: white; width: 291px; padding: 0 1rem">
			<br>
			<h5 class="portfolio__desc"><?php the_title(); ?></h5>
			<hr style="margin: 5px">
			<p class="portfolio__desc portfolio__desc--timestamp"><?php the_time('M d, Y'); ?> | <?php the_time('h:i A'); ?></p>
			<br>
		</div>
	</li>
<?php }
else { ?>
	<li class="flex__item">
		<a href="<?php the_permalink(); ?>">
			<img src="<?php bloginfo('template_directory'); ?>/img/default.png">
		</a>
		<div style="background-color: white; width: 291px; padding: 0 1rem">
			<br>
			<h5 class="portfolio__desc"><?php the_title(); ?></h5>
			<hr style="margin: 5px">
			<p class="portfolio__desc portfolio__desc--timestamp"><?php the_time('M d, Y'); ?> | <?php the_time('h:i A'); ?></p>
			<br>
		</div>
	</li>
<?php } ?>
