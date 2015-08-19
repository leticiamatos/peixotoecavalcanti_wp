<?php
/*
Template Name: Search
*/
?>
<?php get_header(); ?>

<!-- BEGINS Blog Search -->
<section class="block_wpr block_01 block_blog">
	<div class="block_cntt">
		<div class="col1-3">
			<?php get_sidebar(); ?>
		</div>
		<div class="col2-3">
			<section class="blog_wpr">
				<div class="col_title"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></div>
				
				<div class="post_wpr">
					<?php get_template_part('loop'); ?>
				</div>
			</section>
		</div>

		<span class="clear"></span>
	
	</div>
</section>
<!-- ENDS Blog Search -->

<?php get_footer("contact"); ?>

<?php get_footer(); ?>