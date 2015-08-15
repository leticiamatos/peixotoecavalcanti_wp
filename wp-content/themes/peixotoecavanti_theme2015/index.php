<?php get_header(); ?>

<!-- BEGINS Mission -->
<section class="block_wpr block_01 block_mission">
	<div class="block_cntt">

		<div class="mission_wpr">
			<h4>
				<?php postTitle($pg_miss); ?>
			</h4>
			<blockquote>
				<?php postContent( $pg_miss); ?>
			</blockquote>

			<!-- Contact part -->
			<div class="contact_list">
				<?php postContent( $pg_cont); ?>
				<span class="ico-01"></span>
				<span class="ico-02"></span>
				<span class="ico-03"></span>
			</div>
			<?php echo contactBtn(); ?>
			
		</div>
	</div>

	<div class="navegation">
		<!-- To do -->
		<a href="#" class="btn_down"></a>
	</div>
</section>
<!-- ENDS Mission -->

<!-- BEGINS Office -->
<section class="block_wpr block_02 block_office">
	<div class="block_cntt">
		<h2><?php postTitle($pg_escr) ?></h2>

		<p class="line_01">
			<?php postContent( $pg_escr ); ?>
		</p>
	</div>

	<div class="gallery_wpr">
		<!-- To do -->
		<?php postContent( $pg_eimg ); ?>
	</div>

	<div class="block_cntt">
		<div class="office_text">
			<div class="col1-2">
				<div class="text_01">
					<?php postContent( $pg_esci); ?>
				</div>
				<h3><?php postTitle( $pg_valo); ?></h3>
				<div class="text_02">
				<?php postContent( $pg_valo); ?>
				</div>
			</div>
			<div class="col1-2">
				<h3><?php postTitle( $pg_dife); ?></h3>
				<div class="text_01">
					<?php postContent( $pg_dife); ?>
				</div>
				<h3><?php postTitle( $pg_expe); ?></h3>
				<div class="text_02">
					<?php postContent( $pg_expe); ?>
				</div>
			</div>
		</div>
		<span class="clear"></span>
	</div>
</section>
<!-- ENDS Office -->


	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>


		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
