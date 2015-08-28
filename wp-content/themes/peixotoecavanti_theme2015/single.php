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
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2 class="title"><?php the_title(); ?></h2>
					<div class="info">
						<span class="date"><?php the_date(); ?> |</span>
						<span class="author">
							por
							<?php the_author_posts_link(); ?>
						</span>

					</div>
					<div class="text">
						<?php the_content(); ?>
					</div>

					<div class="share_bar">
						<span class="bar_title">Compartilhe</span>
						<div class="button_wpr">
							<!-- Facebook -->
							<div class="face share_button">
								<div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button"></div>
							</div>

							<!-- Twitter -->
							<div class="twit share_button">
								<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-count="none">Tweet</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							</div>

							<!-- Google+ -->
							<div class="plus share_button">
								<div class="g-plus" data-action="share" data-annotation="none" data-href="<?php the_permalink(); ?>"></div>
							</div>

							<!-- LinkedIn -->
							<div class="lkin share_button">
								<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: pt_BR</script>
								<script type="IN/Share" data-url="<?php the_permalink(); ?>"></script>
							</div>
						</div>

					</div>

					<div class="author_wpr">
						<?php 
						// get Author Object
						$post_id = get_queried_object_id();
						$post_author_id = get_post_field( 'post_author', $post_id );
						?>

						<p class="photo_wpr">
							<?php 
								echo get_avatar( $post_author_id); 
								?> 
						</p>
						<p class="name"><?php the_author_posts_link(); ?></p>
						<div class="descpt">
							<?php echo get_the_author_meta('description', $post_author_id); ?>
						</div>
					</div>


					<div class="comments">
						<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5"></div>
					</div>

					<div class="single_pagination">
						<div class="col1-2">
							<div class="prev">
								<span>Artigo Anterior</span>
								<?php previous_post_link('%link'); ?>  
							</div> 
						</div>
						<div class="col1-2">
							<div class="next">
								<span>Próximo Artigo</span>
								<?php next_post_link('%link'); ?>  
							</div>
						</div>
						<span class="clear"></span>
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

