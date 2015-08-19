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


		<section class="general">
			<span data-scroll-index="0" class="target" id="topo"> </span>
			<section class="block_wpr header">
				<!-- Normal Fixed Header -->
				<div class="relative_wpr">
					<header class="block_cntt">
						<h1>
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" title="Peixoto & Cavalcanti Advogados" />
							</a>
						</h1>
						<nav class="menu" role="navigation">
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
					<h1><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/header-exp_logo.png" title="Peixoto & Cavalcanti Advogados" /></a></h1>
					<nav class="menu" role="navigation">
						<?php getMenu(); ?>
						<?php //html5blank_nav(); ?>
					</nav>
				</header>
				
				<?php echo socialMenu(); ?>
				<?php echo contactBtn(); ?>
			</section>


