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