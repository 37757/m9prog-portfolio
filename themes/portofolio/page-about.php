<?php
/*
Template Name: Over mij
*/
?>

<?php get_header(); ?>

<main class="site-main">
    <article class="page-shell">
        <header class="page-header">
            <div class="container narrow">
                <p class="section-label">Over mij</p>
                <h1><?php the_title(); ?></h1>
            </div>
        </header>

        <section class="section">
            <div class="container two-column">
                <div class="content-wrap">
                    <?php
                    while (have_posts()) :
                        the_post();
                        the_content();
                    endwhile;
                    ?>
                </div>

                <aside class="info-panel">
                    <h2>Vaardigheden</h2>
                    <ul class="skill-list">
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>JavaScript</li>
                        <li>WordPress theming</li>
                        <li>Responsive design</li>
                        <li>Toegankelijkheid</li>
                    </ul>
                </aside>
            </div>
        </section>
    </article>
</main>

<?php get_footer(); ?>