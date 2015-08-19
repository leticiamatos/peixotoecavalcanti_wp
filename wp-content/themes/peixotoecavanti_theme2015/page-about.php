<?php
/**
 * Template Name: Quem Somos
 */
?>

<?php get_header(); ?>

<!-- BEGINS About Us -->
<section class="block_wpr block_04 block_about">
	<div class="block_cntt">
		<h2><?php postTitle( $pg_about); ?></h2>
		<p class="about_text"><?php postContent( $pg_about); ?></p>

		<div class="about_cntt">
			<!-- Marcos de Araújo Cavalcanti -->
			<div class="about_01">
				<p class="colnopad1-2 photo"><?php postContent( $pg_fabout1); ?></p>
				<div class="colnopad1-2 about_txt">
					<h3><?php postTitle( $pg_about1); ?></h3>
					<p class="about_part01"><?php postContent( $pg_about1); ?></p>
				</div>
				<span class="clear"></span>
			</div>

			<!-- Romildo Olgo Peixoto Júnior -->
			<div class="about_02">
				<p class="colnopad1-2 photo"><?php postContent( $pg_fabout2); ?></p>
				<div class="colnopad1-2 about_txt">
					<h3><?php postTitle( $pg_about2); ?></h3>
					<p class="about_part01"><?php postContent( $pg_about2); ?></p>
				</div>
				<span class="clear"></span>
			</div>
		</div>
	</div>
</section>
<!-- ENDS About Us -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
