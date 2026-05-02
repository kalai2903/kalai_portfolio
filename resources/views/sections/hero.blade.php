<section class="hero" id="hero">
    <div class="hero-bg">
        <div class="hero-grain"></div>
        <div class="hero-glow"></div>
    </div>

    <div class="hero-content">
        <div class="hero-tag">
            <span class="dot"></span>
            Available for work
        </div>

        <h1 class="hero-title">
            <span class="hero-line">Creative</span>
            <span class="hero-line italic">Full Stack Developer</span>
            <!-- <span class="hero-line">&amp; Designer</span> -->
        </h1>

        <p class="hero-sub">
            I build extraordinary digital experiences that live at the intersection of design and technology.
        </p>

        <div class="hero-cta">
            <a href="#work" class="btn btn-primary">View My Work</a>
            <a href="#contact" class="btn btn-ghost">Let's Talk</a>
        </div>
    </div>

    <div class="hero-scroll">
        <span>Scroll</span>
        <div class="scroll-line"></div>
    </div>

    <div class="hero-counter">
        <div class="counter-item">
            <span class="counter-num" data-count="{{ config('portfolio.stats.projects', 5) }}">0</span>
            <span class="counter-label">Projects</span>
        </div>
        <!-- <div class="counter-item">
            <span class="counter-num" data-count="{{ config('portfolio.stats.clients', 28) }}">0</span>
            <span class="counter-label">Clients</span>
        </div> -->
        <div class="counter-item">
            <span class="counter-num" data-count="{{ config('portfolio.stats.years', 1) }}">0</span>
            <span class="counter-label">Years</span>
        </div>
    </div>
</section>
