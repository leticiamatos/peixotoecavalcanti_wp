<?php
/*
Template Name: Category
*/
?>

<?php get_header(); ?>

<!-- BEGINS Blog Category -->
<section class="block_wpr block_01 block_blog">
	<div class="block_cntt">
		<div class="col1-3">
			<?php get_sidebar(); ?>
		</div>
		<div class="col2-3">
			<section class="blog_wpr">
				<div class="col_title"><?php the_archive_title();?></div></h1>
				
				<div class="post_wpr">
					

					<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post();  ?>

					<?php get_template_part('loop'); ?>

					<?php endwhile; ?>

					<div class="pagination">
						<div class="next"><?php next_posts_link( 'prox' ); ?></div>
						<div class="prev"><?php previous_posts_link( 'ant' ); ?></div>
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
<!-- ENDS Blog Category -->

<?php get_footer("contact"); ?>

<?php get_footer(); ?>
