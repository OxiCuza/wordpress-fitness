<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head(); ?>
</head>
<body>

<header class="site-header">
    <div class="container header-grid">
        <div class="navigation-bar">
            <div class="logo">
                <a href="<?= home_url() ?>">
                    <img
                        src="<?= get_template_directory_uri() . '/img/logo.svg' ?>"
                        alt="Site Logo Gym Fitness" />
                </a>
            </div><!-- .logo -->

            <?php
                $args = array(
                    'theme_location' => 'main-menu',
                    'container' => 'nav',
                    'container_class' => 'main-menu'
                );
                wp_nav_menu($args);
            ?>

        </div><!-- .navigation-bar -->
    </div><!-- .container -->
</header>
