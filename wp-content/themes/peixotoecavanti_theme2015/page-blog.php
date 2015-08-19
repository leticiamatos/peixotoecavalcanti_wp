<?php
/**
 * Template Name: Notícias
 */
?>

<?php get_header(); ?>

<!-- BEGINS About Us -->
<section class="block_wpr block_01 block_blog">
	<div class="block_cntt">
		
		<?php get_sidebar(); ?>

		<section class="blog_wpr">
			<?php get_template_part('loop'); ?>
		</section>
	
	</div>
</section>
<!-- ENDS About Us -->

<?php get_footer("contact"); ?>

<?php get_footer(); ?>
