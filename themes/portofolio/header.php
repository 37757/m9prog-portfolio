<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="site-header">
        <div class="container header-inner">
            <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Naar de homepage">
                <span class="brand-mark">JK</span>
                <span class="brand-text">Julien K.</span>
            </a>

            <nav class="site-nav" aria-label="Hoofdnavigatie">
                <?php if (has_nav_menu('primary')) : ?>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'nav-list',
                            'fallback_cb' => false,
                        )
                    );
                    ?>
                <?php else : ?>
                    <ul class="nav-list">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li><a href="<?php echo esc_url(home_url('/over-mij')); ?>">Over mij</a></li>
                        <li><a href="#projecten">Projecten</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                <?php endif; ?>
            </nav>
        </div>
    </header>