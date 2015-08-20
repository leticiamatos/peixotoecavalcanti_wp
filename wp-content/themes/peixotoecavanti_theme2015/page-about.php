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

			<?php wp_reset_postdata(); ?>
			<!-- Marcos de Araújo Cavalcanti -->
					
			<?php $query1 = new WP_Query( 'page_id='. $pg_about1); ?>
			<?php if ( $query1->have_posts() ) : ?>
			

				<div class="about_01">
					<p class="colnopad1-2 photo"><?php postContent( $pg_fabout1); ?></p>
					<div class="colnopad1-2 about_txt">
						<h3><?php postTitle( $pg_about1); ?></h3>

						<?php while ( $query1->have_posts() ) : $query1->the_post(); ?>
							<div class="about_part01"><?php the_content(); ?></div>
						<?php endwhile; ?>
						
					</div>
					<span class="clear"></span>
				</div>
				<?php wp_reset_postdata(); ?>

			<?php else: ?>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			<?php endif; ?>


			<!-- Romildo Olgo Peixoto Júnior -->
			<?php $query2 = new WP_Query( 'page_id='.$pg_about2 ); ?>
			<?php if ( $query2->have_posts() ) : ?>
			

				<div class="about_01">
					<p class="colnopad1-2 photo"><?php postContent( $pg_fabout2); ?></p>
					<div class="colnopad1-2 about_txt">
						<h3><?php postTitle( $pg_about2); ?></h3>

						<?php while ( $query2->have_posts() ) : $query2->the_post(); ?>
							<div class="about_part01"><?php the_content(); ?></div>
						<?php endwhile; ?>

					</div>
					<span class="clear"></span>
				</div>
				<?php wp_reset_postdata(); ?>

			<?php else: ?>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			<?php endif; ?>

			
		</div>
	</div>
</section>
<!-- ENDS About Us -->

<!-- BEGINS Contact -->
<?php get_footer("contact"); ?>
<!-- ENDS Contact -->

<?php get_footer(); ?>
