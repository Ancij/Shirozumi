<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article class="post__item">
		<header class="post__header__container">
			<div class="row no-margin header__info">
				<span class="col-xs-4 col-sm-6 start-xs">
					<i class="icon-user"></i>
					<?php the_author(); ?>
				</span>
				<span class="col-xs-8 col-sm-6 end-xs">
					<i class="icon-calendar"></i>
					<?php the_date(); ?>
				</span>
			</div>
			<h1 class="post__item__title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h1>
			<?php if (has_post_thumbnail()): ?>				
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('large'); ?>
				</a>
			<?php endif ?>
		</header>
		<div class="post__content">
			<?php if ( is_category() || is_archive() ) {
				the_excerpt();
			} else {
				the_content();
			} ?>	
		</div>
		</p>
	</article>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
	<h4>No hemos encontrado resultados</h4>
<!-- no posts found -->
<?php endif; ?>