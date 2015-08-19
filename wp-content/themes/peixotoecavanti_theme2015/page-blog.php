<?php
/**
 * Template Name: Notícias
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
				<?php get_template_part('loop'); ?>
			</section>
		</div>

		<span class="clear"></span>
	
	</div>
</section>
<!-- ENDS Blog -->

<?php get_footer("contact"); ?>

<?php get_footer(); ?>
