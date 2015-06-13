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
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <article class="post">
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
                                       <?php the_title(); ?>
                                    </h1>                                    
                                </header>
                                <?php the_content(); ?>                              
                                </p>
                            </article>
                        <?php endwhile; ?>
                        <!-- post navigation -->
                        <?php else: ?>
                            <h4>No hemos encontrado resultados</h4>
                        <!-- no posts found -->
                        <?php endif; ?> 
                        
                        <!-- SISTEMA DE COMENTARIOS -->
                        <?php include (TEMPLATEPATH . '/templates/comments.php'); ?>
                    </div>
                </div>
            </section>
            
            <?php get_footer(); ?>
            
        </div>
    </div>
    
