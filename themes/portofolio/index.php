<?php get_header(); ?>
<?php get_footer(); ?>

<main id="primary" class="site-main">
    <div class="container">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>
                <article <?php post_class(); ?>>
                    <header class="page-header">
                        <h1><?php the_title(); ?></h1>
                    </header>
                    <div class="content-wrap">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php
            endwhile;
        else :
            ?>
            <article class="content-wrap">
                <h1>Geen inhoud gevonden</h1>
                <p>Er is nog geen content beschikbaar voor deze pagina.</p>
            </article>
        <?php
        endif;
        ?>
    </div>
</main>