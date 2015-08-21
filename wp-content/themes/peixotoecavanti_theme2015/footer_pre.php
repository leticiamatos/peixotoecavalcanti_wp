<?php 
	$pg_cont = 42;
?>
<!-- BEGINS Contato -->
<span data-scroll-index="7" class="target" id="contato"> </span>
<section class="block_wpr block_07 block_contact">
	<div class="block_cntt">
		<h2><?php postTitle($pg_cont); ?> PREFOOTER</h2>
		
		<div class="contact_cntt">
			<div class="col1-2">
				<!-- Contact part -->
				<div class="contact_list">
					<?php postContent( $pg_cont); ?>
					<span class="ico-01"></span>
					<span class="ico-02"></span>
					<span class="ico-03"></span>
				</div>
				<?php echo socialMenu(); ?>
				<?php echo contactBtn(); ?>
			</div>
			<!--
			<div class="col1-2">
				<script src="https://maps.googleapis.com/maps/api/js"></script>
		    <script>
					var myCenter=new google.maps.LatLng(-15.792733,-47.893937);

					function initialize()
					{
					var mapProp = {
					  center:myCenter,
					  zoom:16,
					  mapTypeId:google.maps.MapTypeId.ROADMAP
					  };

					var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

					var marker=new google.maps.Marker({
					  position:myCenter,
					  });

					marker.setMap(map);
					}

					google.maps.event.addDomListener(window, 'load', initialize);
		    </script>
			-->
		    <div id="googleMap"></div>
			</div>
			<span class="clear"></span>
		</div>
	</div>
</section>


<div id="contact_form">
	<div class="form_contt">
		<?php echo do_shortcode('[contact-form-7 id="118" title="Fale Conosco"]'); ?>
		Blar
		<!--form>
			<div class="col1-2">
				<div class="div_form name">
					<input type="text" class="txt" placeholder="Nome" />
				</div>
				<div class="div_form email">
					<input type="text" class="txt" placeholder="E-mail" />
				</div>
				<div class="div_form comp">
					<input type="text" class="txt" placeholder="Empresa" />
				</div>
				<div class="div_form posi">
					<input type="text" class="txt" placeholder="Cargo" />
				</div>
				<div class="phone_info">
					<span class="label">Ou ligue:</span>
					<span class="ico"></span>
					<span class="number">(61) 3033-6464</span>
				</div>
			</div>
			<div class="col1-2">
				<div class="div_form msg">
					<textarea class="txt" placeholder="Mensagem"></textarea>
				</div>
				<div class="buttons">
					<input type="button" class="btn" value="Enviar" />
				</div>
			</div>
			<div class="obs">
				*Nós nunca divulgamos seu e-mail para terceiros, e não enviamos SPAM de qualquer natureza.
			</div>
		</form-->
	</div>  
</div>