<?php get_header(); ?>

    <!-- Main -->
    <main class="doc-content">
        <div class="doc-content__inner">

            <?php get_sidebar(); ?>

            <!-- Article -->
            <article class="page">

                <header class="page__header">
                    <?php get_template_part('breadcrumb') ?>
                    <h1>Search results for: <em><?php the_search_query(); ?></em></h1>
                </header>

                <!-- Page Content -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <div class="post">
                        <header class="post__header">
                            <h3 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <span class="post__type"><?= get_post_type(); ?></span>
                        </header>

                        <div class="post__content">
                            <?php if ( has_post_thumbnail() ) : ?>

                                <div class="post__thumbnail">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </div>
                                
                            <?php endif; ?>

                            <?php the_excerpt(); ?>
                        </div>
                    </div>

                <?php 
                endwhile;
                            
                else : 

                    echo 'No results found...';

                endif; 
                ?>

                <footer class="page__footer">
                    <!-- <div class="page__lastupdated">Last updated on February 20, 2023</div> -->
                </footer>

            </article>

            <?php //get_template_part('toc') ?>

        </div>
    </main>

<?php get_footer(); ?>