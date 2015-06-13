<?php get_header(); ?>
<body class="custom-background">
	<div class="row no-margin">
		<div class="col-xs-11 col-sm-9 main__container">
			
			<?php include (TEMPLATEPATH . '/templates/banner.php'); ?>

			<section class="row no-margin blog__container">
				<!-- ASIDE CONTAINER -->
				<?php include (TEMPLATEPATH . '/templates/sidebar.php'); ?>


				<!-- MAIN CONTAINER -->
				<div class="col-xs-12 col-sm-12 col-md-8">
					<div class="row no-margin post__container">
						<h2 style="pagetitle">Mostrando entradas de la categoria: <?php single_cat_title(); ?></h2>						
						<?php include (TEMPLATEPATH . '/templates/the_loop.php'); ?>						
					</div>
				</div>
			</section>	
		</div>
	</div>
<?php get_footer(); ?>