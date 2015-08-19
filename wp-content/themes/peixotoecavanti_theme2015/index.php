<?php get_header(); ?>

<!-- BEGINS Mission -->
<span data-scroll-index="1" class="target" id="missao"> </span>
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
		<a data-scroll-nav="2" class="btn_down"></a>
	</div>
</section>
<!-- ENDS Mission -->

<!-- BEGINS Office -->
<span data-scroll-index="2" class="target" id="escritorio"> </span>
<section class="block_wpr block_02 block_office">
	<div class="block_cntt">
		<h2><?php postTitle($pg_escr) ?></h2>

		<p class="line_01">
			<?php postContent( $pg_escr ); ?>
		</p>
	</div>

	<div id="carousel" class="gallery_wpr">
		<?php  createGallery( $pg_eimg );  ?> 
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

<!-- BEGINS Atuation -->
<span data-scroll-index="3" class="target" id="atuacao"> </span>
<section class="block_wpr block_03 block_atuation">
	<div class="block_cntt">
		<h2><?php postTitle( $pg_atua); ?></h2>
		<p class="atuation_text"><?php postContent( $pg_atua); ?></p>

		<div class="atuation_areas">
			<!-- Accordion -->
			<div class="col1-2">
				<div id="accordion_01">

					<!-- Direito Administrativo -->
					<h3><?php postTitle( $pg_dadm); ?></h3>
					<div>
						<p>
						<?php postContent( $pg_dadm); ?>
						</p>
					</div>

					<!-- Direito Tributário -->
					<h3><?php postTitle( $pg_dtri); ?></h3>
					<div>
						<p>
						<?php postContent( $pg_dtri); ?>
						</p>
					</div>

					<!-- Direito Ambiental -->
					<h3><?php postTitle( $pg_damb); ?></h3>
					<div>
						<p>
						<?php postContent( $pg_damb); ?>
						</p>
					</div>

					<!-- Contencioso Administrativo -->
					<h3><?php postTitle( $pg_cadm); ?></h3>
					<div>
						<p>
						<?php postContent( $pg_cadm); ?>
						</p>
					</div>
				</div>

			</div>
			<div class="col1-2">
				<div id="accordion_02">

					<!-- Contencioso Judicial -->
					<h3><?php postTitle( $pg_cjud); ?></h3>
					<div>
						<p>
						<?php postContent( $pg_cjud); ?>
						</p>
					</div>

					<!-- Direito Civil e do Consumidor -->
					<h3><?php postTitle( $pg_dciv); ?></h3>
					<div>
						<p>
						<?php postContent( $pg_dciv); ?>
						</p>
					</div>

					<!-- Direito Empresarial e Societário -->
					<h3><?php postTitle( $pg_demp); ?></h3>
					<div>
						<p>
						<?php postContent( $pg_demp); ?>
						</p>
					</div>

					<!-- Direito Imobiliário -->
					<h3><?php postTitle( $pg_dimo); ?></h3>
					<div>
						<p>
						<?php postContent( $pg_dimo); ?>
						</p>
					</div>

				</div>
			</div>
			<span class="clear"></span>
		</div>
	</div>
</section>
<!-- ENDS Atuation -->

<!-- BEGINS About Us -->
<span data-scroll-index="4" class="target" id="quem-somos"> </span>
<section class="block_wpr block_04 block_about">
	<div class="block_cntt">
		<h2><?php postTitle( $pg_abou); ?></h2>
		<p class="about_text"><?php postContent( $pg_abou); ?></p>

		<div class="about_cntt">
			<!-- Marcos de Araújo Cavalcanti -->
			<div class="col1-2">
				<p class="photo"><?php postContent( $pg_fab1); ?></p>
				<h3><?php postTitle( $pg_abo1); ?></h3>
				<p class="about_part01"><?php postContent( $pg_abo1); ?></p>
			</div>

			<!-- Romildo Olgo Peixoto Júnior -->
			<div class="col1-2">
				<p class="photo"><?php postContent( $pg_fab2); ?></p>
				<h3><?php postTitle( $pg_abo2); ?></h3>
				<p class="about_part01"><?php postContent( $pg_abo2); ?></p>
			</div>
			<span class="clear"></span>
			<div class="more_wpr"><a class="more_link" href="<?php echo get_page_link($pg_about); ?>">Leia mais</a></div>
		</div>
	</div>
</section>
<!-- ENDS About Us -->

<!-- BEGINS Partners -->
<span data-scroll-index="5" class="target" id="parceiros"> </span>
<section class="block_wpr block_05 block_partners">
	<div class="block_cntt">
		<h2><?php postTitle( $pg_parc); ?></h2>
		<div class="partners_text">
			<p class="line_01"><?php postContent( $pg_parc); ?></p>
			<p class="line_02"><?php postContent( $pg_par2); ?></p>
		</div>
		<?php echo contactBtn(); ?>
	</div>
</section>
<!-- ENDS Partners -->

<!-- BEGINS News / Blog -->
<span data-scroll-index="6" class="target" id="noticias"> </span>
<span class="scroll_target"></span>
<section class="block_wpr block_06 block_news">
	<div class="block_cntt">
		<h2><?php postTitle( $pg_noti); ?></h2>
		<div class="blog_text">
			<?php postContent( $pg_noti); ?>
		</div>

		<div class="more_wpr"><a class="more_link" href="<?php echo get_page_link($pg_blog); ?>">Ver todas as publicações</a></div>
		
		<section class="blog_wpr">
			
			<?php get_template_part('loop'); ?>

		</section>
		
		<div class="more_wpr"><a class="more_link" href="<?php echo get_page_link($pg_blog); ?>">Ver todas as publicações</a></div>

	</div>
	<div class="navegation">
		<a data-scroll-nav="0" class="btn_up"></a>
	</div>

</section>
<!-- ENDS News / Blog -->

<!-- BEGINS Contact -->
<?php get_footer("contact"); ?>
<!-- ENDS Contact -->

<?php get_footer(); ?>
