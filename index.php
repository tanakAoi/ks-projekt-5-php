<?php get_header(); ?>

        <!-- Main -->
        <main class="doc-content">
            <div class="doc-content__inner">

                <?php get_sidebar(); ?>

                <!-- Article -->
                <article class="page">

                    <header class="page__header">

                    <?php get_template_part('breadcrumb') ?>

                        <h1>Documentation</h1>
                    </header>

                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae maxime dolores accusamus inventore libero ab labore optio quibusdam porro? Error vero suscipit ullam a magni! Dolore cupiditate harum fuga ut!
                    Iure sequi recusandae quod consequuntur est, illum, tenetur ipsum a error quis ducimus non corporis accusamus suscipit rerum cum animi. Impedit beatae, perferendis at quo suscipit dicta voluptatem consequatur eveniet?
                    Libero sint illum deleniti mollitia consequuntur voluptatibus praesentium magni animi qui commodi sunt molestias vero dolorum, maxime nemo iste nihil, dolorem natus cupiditate adipisci temporibus ullam amet nam. Et, numquam?
                    Perspiciatis minus error reiciendis autem iste nobis eos veritatis temporibus, eum cumque, alias labore perferendis a aut similique ab at minima possimus quas amet! Cumque sequi sint laudantium delectus quam.
                    Praesentium, accusantium! Voluptates cupiditate quibusdam pariatur facilis quod corporis suscipit doloremque similique ipsam et rem nulla aliquid alias autem, unde illum natus libero, facere aperiam consectetur. Aspernatur deserunt reprehenderit id?</p>
                    
                    <footer class="page__footer">
                        <div class="page__lastupdated">Last updated on February 20, 2023</div>
                    </footer>

                </article>

                <?php get_template_part('toc') ?>

            </div>
        </main>

<?php get_footer(); ?>