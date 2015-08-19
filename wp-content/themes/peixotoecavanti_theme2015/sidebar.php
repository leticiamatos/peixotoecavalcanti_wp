<!-- BEGINS Siderbar -->
<aside class="sidebar">
	<div class="blog_logo">
		<h2><a href="<?php echo get_page_link(113); ?>">Notícias <br/>/ Artigos</a></h2>
	</div>
	<div class="form_search">
		<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<div class="form_div">
				<input type="text" class="txt" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="PESQUISAR" />
				<input type="submit" class="btn" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
			</div>
		</form>
	</div>
	<div class="category_list">
		<h3 class="sidebar_title">Categorias</h3>
		<?php
			$args = array(
			  'orderby' => 'name',
			  'order' => 'ASC'
			  );
			$categories = get_categories($args);
			
			$categories_list = '<ul>';

			foreach($categories as $category) { 
				$categories_list .= '<li class="category_item"><a href="' . get_category_link( $category->term_id ) . '">' . $category->name .'</a></li>';
			} 
			$categories_list .= '</ul>';
			echo $categories_list;
		?>
	</div>
	<div class="achieve_list">
		<h3 class="sidebar_title">Arquivos</h3>
		<div id="archive_accordion" class="archive_list">
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