<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href='http://fonts.googleapis.com/css?family=Sorts+Mill+Goudy:400,400italic|Montserrat:400,700|Open+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>



	</head>
	<body <?php body_class(); ?>>
		<!-- Facebook Script -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4&appId=252945901438792";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>


		<section class="general">
			<span data-scroll-index="0" class="target" id="topo"> </span>
			<section class="block_wpr header">
				<!-- Normal Fixed Header -->
				<div class="relative_wpr">
					<header class="block_cntt">
						<div class="menu_drop">
							<a class="menu_link"></a>
						</div>
						<h1>
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" title="Peixoto & Cavalcanti Advogados" />
							</a>
						</h1>
						<nav class="menu menu_wpr" role="navigation">
							<?php //html5blank_nav(); ?>
							<?php getMenu(); ?>
						</nav>
					</header>
				
					<?php echo socialMenu(); ?>
					<?php echo contactBtn(); ?>
				</div>
			</section>
			<!-- Extended Header -->
			<section class="block_wpr header_ext">
				<header class="block_cntt">
					<h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/header-exp_logo.png" title="Peixoto & Cavalcanti Advogados" /></a></h1>
					<nav class="menu menu_ext_wpr" role="navigation">
						<?php getMenu(); ?>
						<?php //html5blank_nav(); ?>
					</nav>
				</header>
				<div class="menu_drop">
					<a class="menu_ext_link"></a>
				</div>
				
				<?php echo socialMenu(); ?>
				<?php echo contactBtn(); ?>
			</section>


