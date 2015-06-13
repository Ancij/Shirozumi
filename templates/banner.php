<header class="row no-margin header">
	<div class="col-xs-12 center-xs">
		<img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>" class="header__banner">
	</div>
	<div class="col-xs-12 no-padding">
		<div class="show-menu">
			<span>
				<i class="icon-burger"></i>
				Menu
			</span>
		</div>
		
		<!-- MENU HEADER -->
		<?php include (TEMPLATEPATH . '/templates/nav.php'); ?>
	</div>
</header>