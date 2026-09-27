<footer class="site-footer">
    <div class="container footer-grid">
        <div>
            <p class="brand footer-brand">
                <span class="brand-mark">JK</span>
                <span class="brand-text">Julien K.</span>
            </p>
            <p>Frontend developer met focus op duidelijke interfaces, toegankelijkheid en performante user experiences.</p>
        </div>

        <nav aria-label="Voettekstnavigatie" class="footer-nav">
            <h2>Navigatie</h2>
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li><a href="<?php echo esc_url(home_url('/over-mij')); ?>">Over mij</a></li>
                <li><a href="#projecten">Projecten</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>

        <div class="footer-contact">
            <h2>Contact</h2>
            <p><a href="mailto:jules@example.com">julien@example.com</a></p>
            <p><a href="https://www.linkedin.com" target="_blank" rel="noreferrer">LinkedIn</a></p>
        </div>
    </div>

    <div class="container footer-bottom">
        <p>© <?php echo esc_html(date_i18n('Y')); ?> Julien K. Alle rechten voorbehouden.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>