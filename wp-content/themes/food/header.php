<!doctype html>
<html>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body>

	<section class="header">
		<div class="header-logo">
			<a href="<?php echo get_home_url(); ?>">
				<img width="120" height="120" loading="lazy" alt="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-oala.jpg" />
			</a>
		</div>
		<div class="header-burger">
			<img width="32" height="32" loading="lazy" alt="burger" src="<?php echo get_template_directory_uri(); ?>/assets/images/burger.png" />
		</div>
		<div class="header-options">
			<div class="header-options-top">
				<img width="32" height="32" loading="lazy" alt="car" src="<?php echo get_template_directory_uri(); ?>/assets/images/car.png" />
				<div class="header-options-top-text">Zona de livrare Bucuresti, Ilfov si Ploiesti, comanda minima 99 lei.</div>
			</div>
			<div class="header-options-middle">
				<div class="header-options-middle-tree-step">Comanda rapid in 3 pasi!</div>
				<div class="header-options-middle-step"><span>1.</span> Alegi bunătățile și le adaugi în coș</div>
				<div class="header-options-middle-step"><span>2.</span> Alegi ziua și intervalul de livrare</div>
				<div class="header-options-middle-step"><span>3.</span> Finalizezi comanda</div>
			</div>
			<div class="header-options-bottom">
				<div class="header-options-bottom-location">
					<img width="18" height="18" loading="lazy" alt="ping" src="<?php echo get_template_directory_uri(); ?>/assets/images/ping.png" />
					Bucuresti!
				</div>
				<div class="header-options-bottom-announcement">Cel mai devreme livram Luni, 20 Mar in intervalul 12:00-15:30</div>

			</div>
		</div>

		<div class="header-menu">
			<?php
			// Display the custom navigation menu
			wp_nav_menu(array(
				'theme_location' => 'primary-menu',
				'menu_class'     => 'menu',
			));
			?>
		</div>
	</section>