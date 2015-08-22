<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<!-- BEGINS Blog Archive -->
<section class="block_wpr block_01 block_blog">
	<div class="block_cntt">
		<div class="col1-3">
			<?php get_sidebar(); ?>
		</div>
		<div class="col2-3">
			<section class="blog_wpr">
				<div class="col_title">Arquivo / <?php the_archive_title();?></div>
				
				<div class="post_wpr">
					<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post();  ?>

					<?php get_template_part('loop'); ?>

					<?php endwhile; ?>

					<?php $pagination_args = array(
						'prev_text'          => __('<'),
						'next_text'          => __('>')
					); ?>

					<div class="pagination">
						<?php echo paginate_links( $pagination_args ); ?>
					</div>

					<?php wp_reset_postdata(); ?>

					<?php else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>

				</div>

			</section>
		</div>

		<span class="clear"></span>
	
	</div>
</section>
<!-- ENDS Blog Archive -->

<?php get_footer("contact"); ?>

<?php get_footer(); ?>
