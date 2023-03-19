<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css">
    <script src="<?= get_template_directory_uri() ?>/src/js/darkMode.js" defer></script>
    <script src="<?= get_template_directory_uri() ?>/src/js/toc.js" defer></script>
    <script src="<?= get_template_directory_uri() ?>/src/js/sidebar.js" defer></script>
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>

    <div class="container">

        <!-- Header -->
        <header class="doc-header">
            <div class="doc-header__inner">

                <a href="<?= home_url( '/' ) ?>" class="branding"><?php bloginfo('name') ?></a>

                <div class="doc-header__content">
                    <!-- Header navigation -->
                    <!-- <nav class="header-nav">
                        <ul class="header-nav__list">
                            <li class="header-nav__item header-nav__item--current"><a href="" class="header-nav__link">Documentation</a></li>
                            <li class="header-nav__item"><a href="" class="header-nav__link">Showcase</a></li>
                            <li class="header-nav__item"><a href="" class="header-nav__link">About</a></li>
                        </ul>
                    </nav> -->

                    <?php 
                    /**
                     * Get header menu from Wordpress
                     * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
                     */
                    
                    $args = array(
                        'theme_location' => 'header_menu', // Location for menu ( registered in our functions.php )
                        'container' => 'nav', // Change div for nav
                        'container_class' => 'header-nav', // Add class to container
                        'menu_class' => 'header-nav__list' // Change class for ul
                    );

                    wp_nav_menu( $args );
                    
                    ?>

                    <!-- Header serch form -->
                    <div class="search-form">
                        <form action="" class="search-form__form">
                            <input type="text" class="search-form__input" placeholder="Search documentation...">
                        </form>
                    </div>
                </div>

            </div>
        </header>

        <!-- Main -->
        <main class="doc-content">
            <div class="doc-content__inner">

                <aside class="doc-content__sidebar">

                <!-- Side bar -->
                    <nav class="sidebar-nav">
                        <ul class="sidebar-nav__list">
                            <li class="sidebar-nav__item"><a href="" class="sidebar-nav__link">Introduction</a></li>
                            <li class="sidebar-nav__item"><a href="" class="sidebar-nav__link">Guide</a></li>
                        </ul>

                        <span class="sidebar-nav__label">Themes</span>
                        <ul class="sidebar-nav__list">
                            <li class="sidebar-nav__item">
                                <a href="" class="sidebar-nav__link">Docs theme</a>
                                <ul class="sidebar-nav__sub-menu">
                                    <li class="sidebar-nav__item sidebar-nav__item--current"><a href="" class="sidebar-nav__link">Get Started</a></li>
                                    <li class="sidebar-nav__item"><a href="" class="sidebar-nav__link">Page Configuration</a></li>
                                    <li class="sidebar-nav__item"><a href="" class="sidebar-nav__link">Theme Configuration</a></li>
                                    <li class="sidebar-nav__item"><a href="" class="sidebar-nav__link">Built-ins</a></li>
                                </ul>
                            </li>
                            <li class="sidebar-nav__item"><a href="" class="sidebar-nav__link">Blog theme</a></li>
                            <li class="sidebar-nav__item"><a href="" class="sidebar-nav__link">Custom theme</a></li>
                        </ul>

                        <span class="sidebar-nav__label">More</span>
                        <ul class="sidebar-nav__list">
                            <li class="sidebar-nav__item"><a href="" class="sidebar-nav__link">About Bdocs</a></li>
                            <li class="sidebar-nav__item"><a href="" class="sidebar-nav__link">Next.js Docs</a></li>
                        </ul>
                    </nav>

                    <!-- Sidebar settings -->
                    <div class="sidebar-settings">
                        <div class="theme-toggle">
                            <button id="theme-toggle-button" class="theme-toggle__button">
                                <span class="material-symbols-outlined">
                                    contrast
                                </span>
                                <span class="theme-toggle__button-text">
                                    System
                                </span>
                            </button>
                    
                            <ul class="theme-toggle__list">
                                <li class="theme-toggle__item theme-toggle__item--current">
                                    <button class="theme-toggle__button" data-theme="default">
                                        <span class="material-symbols-outlined">
                                            contrast
                                        </span>
                                        <span class="theme-toggle__button-text">
                                            System
                                        </span>
                                    </button>
                                </li>
                    
                                <li class="theme-toggle__item">
                                    <button class="theme-toggle__button" data-theme="light">
                                        <span class="material-symbols-outlined">
                                            light_mode
                                        </span>
                                        <span class="theme-toggle__button-text">
                                            Light
                                        </span>
                                    </button>
                                </li>
                    
                                <li class="theme-toggle__item">
                                    <button class="theme-toggle__button" data-theme="dark">
                                        <span class="material-symbols-outlined">
                                            dark_mode
                                        </span>
                                        <span class="theme-toggle__button-text">
                                            Dark
                                        </span>
                                    </button>
                                </li>
                            </ul>
                        </div>

                        <button class="sidebar-settings__button">
                            <span class="material-symbols-outlined">
                                left_panel_close
                            </span>
                        </button>
                    </div>

                </aside>

                <!-- Article -->
                <article class="page">

                    <header class="page__header">
                        <div class="breadcrumb">
                            <ul class="breadcrumb__list">
                                <li class="breadcrumb__item">Documentation</li>
                                <li class="breadcrumb__item"><a href="">Docs Theme</a></li>
                                <li class="breadcrumb__item">Get Started</li>
                            </ul>
                        </div>
                        
                        <h1>Docs Theme</h1>
                    </header>

                    <p>Lorem ipsum dolor sit amet. Ut deleniti fugaAut voluptas At doloribus odio. Aut ipsum reprehenderit et dolores dolor <a href="https://www.loremipzum.com" target="_blank">Qui cumque eum aliquid rerum est enim aspernatur</a>. </p>

                    <h2 id="quick-start">Quick Start from Template</h2>

                    <h3 id="deploy-to">Deploy to Vercel</h3>
                    
                    <p>Ut accusamus evenietaut tenetur et quae asperiores? Ut labore velit sed inventore voluptatem <a href="https://www.loremipzum.com" target="_blank">In autem et repellendus commodi</a> et nihil sunt sit neque odio ut quia cupiditate. Id expedita veritatis sit nostrum quiaUt nihil sed unde totam non ratione dolorem hic repellat esse. </p>
                    
                    <h3 id="fork-the">Fork the Template</h3>
                    
                    <p>In adipisci eveniet et dolores nobisA illum in minus quod ex ipsa quia id aliquid omnis ea molestias nobis. Qui provident libero sit rerum undeEst quas et dolorem saepe ex quas cumque eum libero culpa non consequatur facilis. Eos accusamus debitis <a href="https://www.loremipzum.com" target="_blank">Aut assumenda et similique maxime ab mollitia delectus</a> ut consequuntur corporis id odio temporibus vel eligendi consequatur. </p>
                    
                    <h2 id="start-as">Start as New Project</h2>

                    <p>Non laudantium sunt quo natus erroret temporibus eum laudantium iure est nostrum consectetur. Ut nulla voluptasEum dolorem et labore possimus ad nesciunt quos! In numquam doloribusin aperiam non possimus quibusdam! </p>
                    
                    <h3 id="install">Install</h3>
                    
                    <p>Eos internos soluta <a href="https://www.loremipzum.com" target="_blank">Aut consequatur</a> vel inventore ducimus. Aut tempore minimaQui deleniti id atque natus non expedita nesciunt eos perferendis cupiditate est voluptas dolore et voluptatem dolores. </p>
                    
                    <h3 id="add-next-js">Add Next.js Config</h3>
                    
                    <p>Et earum voluptas est voluptatem nostrumAb voluptates ab quas magnam aut odio mollitia hic quidem facilis qui nisi sequi. Sed voluptatem perferendis qui quia sequi <a href="https://www.loremipzum.com" target="_blank">Eum placeat sed voluptatem tenetur et exercitationem reiciendis est autem odio</a>. </p>
                    
                    <h3 id="create-docs">Create Docs Theme Config</h3>
                    
                    <p>Rem nobis deseruntEt tempore ut iusto recusandae ut odio similique eum galisum impedit! Et laboriosam impeditSed consequatur ab eaque vero qui omnis iure sed illum odio. Et dolorem rerum <a href="https://www.loremipzum.com" target="_blank">Id saepe vel soluta accusamus hic eveniet magnam et laboriosam temporibus</a>. Eos excepturi errorUt eveniet qui neque quia ut aliquid quasi. </p>
                    
                    <h3 id="ready-to">Ready to Go!</h3>
                    
                    <p>In quos fuga <a href="https://www.loremipzum.com" target="_blank">Ad voluptate et tenetur dolorem est voluptatem aliquam est quaerat labore</a> ut rerum quia sit sint itaque! Est ratione sunt cum fugiat impeditEa corporis. Et vitae internos et omnis molestiashic possimus. Id omnis quibusdamEt labore non voluptatem debitis et pariatur voluptatem ut rerum officia id saepe culpa est quidem pariatur. </p>
                    
                    <footer class="page__footer">
                        <div class="page__lastupdated">Last updated on February 20, 2023</div>
                        <nav class="pagination">
                            <a href="" class="pagination__link pagination__link--prev">Docs Theme</a>
                            <a href="" class="pagination__link pagination__link--next">Page Configuration</a>
                        </nav>
                    </footer>

                </article>

                <!-- TOC -->
                <aside class="toc">

                    <nav class="toc-nav">

                        <span class="toc-nav__label">On This Page</span>
                        
                        <!-- <ul class="toc-nav__list">
                            <li class="toc-nav__item">
                                <a href="" class="toc-nav__link toc-nav__link--current">Quick Start from Template</a>
                                <ul class="toc-nav__list toc-nav__list--lvl-2">
                                    <li class="toc-nav__item"><a href="" class="toc-nav__link">Deploy to Vercel</a></li>
                                    <li class="toc-nav__item"><a href="" class="toc-nav__link">Fork the Template</a></li>
                                </ul>
                            </li>
                            <li class="toc-nav__item">
                                <a href="" class="toc-nav__link">Start as New Project</a>
                                <ul class="toc-nav__list toc-nav__list--lvl-2">
                                    <li class="toc-nav__item"><a href="" class="toc-nav__link">Install</a></li>
                                    <li class="toc-nav__item"><a href="" class="toc-nav__link">Add Next.js Config</a></li>
                                    <li class="toc-nav__item"><a href="" class="toc-nav__link">Create Docs Theme Config</a></li>
                                    <li class="toc-nav__item"><a href="" class="toc-nav__link">Ready to Go!</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </nav>

                </aside>

            </div>
        </main>

        <!-- Footer -->
        <fotter class="doc-footer">
            <div class="doc-footer__inner">
                <span class="doc-footer__copyright">&copy; 2023 <?php bloginfo('name') ?>, All rights reserved.</span>
            </div>
        </fotter>

    </div>

<?php wp_footer() ?>
<!-- </body> -->
</html>