<?php if ( is_home() ) { ?>

<?php 
	$query = new WP_Query( 'posts_per_page=6' );

	$n = 1;

	if (have_posts()): while ($query->have_posts()) : $query->the_post(); 
	$post_order = "post_".$n;
	?>


	<!-- article -->
	<div class="post_wpr col1-3 <?php echo $post_order; ?>">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<span class="cat"> <?php the_category(); ?></span>
			<!-- post title -->
			<h4>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h4>
			<!-- /post title -->
			<div class="excerpt">
				<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
				<?php //the_excerpt("leia mais" , 40 ); ?> 
			</div>
		</article>
	</div>
	<!-- /article -->

<?php $n++; ?>

<?php endwhile; ?>
	<span class="clear"></span>
<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?> <!-- End if isHome -->

<?php } else { ?>


<?php 
	$args = array(
		'posts_per_page'   => 5,
		'post_type'        => 'post',
		'suppress_filters' => true 
	);
	$the_query = new WP_Query( $args ); 
?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


		<h2><?php the_title(); ?></h2>

	<?php endwhile; ?>
	<!-- end of the loop -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>



<?php } ?>