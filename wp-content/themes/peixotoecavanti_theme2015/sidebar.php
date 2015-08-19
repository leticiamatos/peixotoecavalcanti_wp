<!-- BEGINS Siderbar -->
<aside class="sidebar">
	<div class="blog_logo">
		<h2>Notícias/ Artigos</h2>
	</div>

	<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div>
			<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
			<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
			<input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
		</div>
	</form>
	<div class="category_list">
		<h3 class="sidebar_title">Categorias</h3>
		<?php echo get_the_category_list(); ?>
	</div>
	<div class="achieve_list">
		<h3 class="sidebar_title">Arquivo</h3>
		<div id="archive_accordion">
			<h3>Selecionar mês</h3>
			<div>
				<p>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</p>
			</div>
		</div>
	</div>
	<?php echo contactBtn(); ?>
</aside>
<!-- ENDS Siderbar -->