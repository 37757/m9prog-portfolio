<?php get_header(); ?>

<main id="primary" class="site-main">
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-copy">
                <p class="eyebrow">Frontend developer · stage kandidaat</p>
                <h1>Ik bouw duidelijke, snelle en stijlvolle webervaringen.</h1>
                <p class="lead">Ik ben een software developer met interesse in frontend. Ik werk graag aan interfaces die zowel mooi als gebruiksvriendelijk zijn en het verschil maken voor gebruikers.</p>

                <div class="hero-actions">
                    <a class="btn btn-primary" href="#projecten">Bekijk projecten</a>
                    <a class="btn btn-secondary" href="<?php echo esc_url(home_url('/over-mij')); ?>">Over mij</a>
                </div>

                <ul class="meta-list" aria-label="Vaardigheden">
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>WordPress</li>
                </ul>
            </div>

            <aside class="hero-card" aria-label="Kerninformatie">
                <p class="card-label">Beschikbaar voor stage</p>
                <h2>Frontend developer</h2>
                <ul>
                    <li>Mobile-first ontwerpen</li>
                    <li>Semantische HTML</li>
                    <li>Responsieve interfaces</li>
                    <li>Toegankelijkheid</li>
                </ul>
            </aside>
        </div>
    </section>

    <section class="section" id="over-mij">
        <div class="container section-grid">
            <div>
                <p class="section-label">Over mij</p>
                <h2>Ik maak interfaces die zowel functioneel als prettig in gebruik zijn.</h2>
            </div>

            <div class="info-panel">
                <p>Ik ben een jonge software developer die geïnteresseerd is in frontend development en het ontwerpen van gebruiksvriendelijke digitale producten. Tijdens mijn opleiding werk ik aan projecten waarbij ik aandacht geef aan structuur, stijl en interactie.</p>
                <p>Ik wil mij verder ontwikkelen in een team waar ik kan leren, bouwen en bijdragen aan echte gebruikerservaringen.</p>
            </div>
        </div>
    </section>

    <section class="section projects" id="projecten">
        <div class="container">
            <div class="section-heading">
                <p class="section-label">Projecten</p>
                <h2>Een selectie van mijn werk.</h2>
            </div>

            <div class="card-grid">
                <article class="project-card">
                    <span class="project-tag">UI design</span>
                    <h3>Portfolio website</h3>
                    <p>Een persoonlijke portfolio met een rustige visuele stijl, duidelijke structuur en mobile-first layout.</p>
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>WordPress</li>
                    </ul>
                </article>

                <article class="project-card">
                    <span class="project-tag">Webapp</span>
                    <h3>Dashboard concept</h3>
                    <p>Een overzichtelijke interface voor data en taken, ontworpen met aandacht voor leesbaarheid en snelle interactie.</p>
                    <ul>
                        <li>JavaScript</li>
                        <li>UX</li>
                        <li>Responsief</li>
                    </ul>
                </article>

                <article class="project-card">
                    <span class="project-tag">Branding</span>
                    <h3>Landing page</h3>
                    <p>Een productgerichte landingspagina met heldere call-to-action’s en een professionele visuele hiërarchie.</p>
                    <ul>
                        <li>CSS</li>
                        <li>Marketing</li>
                        <li>Semantisch</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section class="section contact" id="contact">
        <div class="container contact-grid">
            <div>
                <p class="section-label">Contact</p>
                <h2>Laten we een mooi project bouwen.</h2>
            </div>

            <div class="contact-panel">
                <p>Ik ben op zoek naar een frontend-stageplek waar ik kan groeien in een druk en creatief team.</p>
                <a class="btn btn-primary" href="mailto:jules@example.com">julien@example.com</a>
                <a class="btn btn-secondary" href="https://www.linkedin.com" target="_blank" rel="noreferrer">LinkedIn</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>