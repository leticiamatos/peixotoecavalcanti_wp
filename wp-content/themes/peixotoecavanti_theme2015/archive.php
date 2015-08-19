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
				<div class="col_title">Arquivo / <?php the_archive_title();?></div></h1>
				
				<div class="post_wpr">
					<?php get_template_part('loop'); ?>
				</div>
			</section>
		</div>

		<span class="clear"></span>
	
	</div>
</section>
<!-- ENDS Blog Archive -->

<?php get_footer("contact"); ?>

<?php get_footer(); ?>
