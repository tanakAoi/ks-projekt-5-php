<?php get_header(); ?>

        <!-- Main -->
        <main class="doc-content">
            <div class="doc-content__inner">

                <?php get_sidebar(); ?>

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <!-- Article -->
                    <article class="page post single">

                        <header class="page__header">
                            <span class="post__date"><?php the_time('j F, Y - H:i') ?></span>
                            <h1 class="post__title"><?php the_title(); ?></h1>
                        </header>

                        <?php if ( has_post_thumbnail() ) : ?>

                        <div class="post__thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>

                        <?php endif; ?>

                        <!-- Page Content -->
                        <?php the_content(); ?>

                        <footer class="page__footer">
                            <div class="page__lastupdated">Last updated on <?= get_post_modified_time( 'j F, Y' ); // 8 Januari, 2023 ?></div>

                            <?php get_template_part('pagination') ?>
                        </footer>
                            
                    </article>

                <?php endwhile; endif; ?>

                <?php get_sidebar( 'single' ) ?>
            </div>
        </main>

<?php get_footer(); ?>