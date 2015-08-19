<?php
/**
 * Template Name: Single
 */
?>

<?php get_header(); ?>

<!-- BEGINS Blog -->
<section class="block_wpr block_01 block_blog">
	<div class="block_cntt">
		<div class="col1-3">
			<?php get_sidebar(); ?>
		</div>
		<div class="col2-3">
			<section class="blog_wpr">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2 class="title"><?php the_title(); ?></h2>
					<div class="info">
						<span class="date"><?php the_date(); ?> |</span>
						<span class="author">
							por
							<a href="#"><?php the_author(); ?></a> 
						</span>

					</div>
					<div class="share_bar">
						<span class="bar_title">Compartilhe</span>
						<div class="share_buttons">
							<?php echo do_shortcode("[huge_it_share]"); ?>
						</div>
					</div>
					<div class="text">
						<?php the_content(); ?>
					</div>

					<div class="share_bar">
						<span class="bar_title">Compartilhe</span>
						<div class="share_buttons">
							<?php echo do_shortcode("[huge_it_share]"); ?>
						</div>
					</div>
					<div class="comments">
						<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5"></div>
					</div>
				</article>

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>
					<!-- /article -->

				<?php endif; ?>


			</section>
		</div>

		<span class="clear"></span>
	
	</div>
</section>
<!-- ENDS Blog -->

<?php get_footer("contact"); ?>

<?php get_footer(); ?>

