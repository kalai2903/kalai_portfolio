<section class="about" id="about">
    <div class="container">
        <div class="about-grid">
            <div class="about-visual">
                <div class="about-img-wrap">
    <img src="#" 
         alt="{{ config('portfolio.name') }}" 
         class="about-img">
                    <div class="about-img-placeholder">
                        <span>KS</span>
                    </div>
                    <div class="about-img-frame"></div>
                </div>
                <div class="about-badge">
                    <span>✦</span> Open to Freelance
                </div>
            </div>

            <div class="about-text">
                <p class="section-label">About Me</p>
                <h2 class="about-heading">
                    I turn complex problems into elegant solutions
                </h2>

                <p class="about-body">
                    {{ config('portfolio.bio', "Hi, I'm Alex — a full-stack developer with a designer's eye. I've spent the last 6 years building products that people love, working with startups and enterprises across 3 continents. My approach blends technical rigour with obsessive attention to craft.") }}
                </p>

                <div class="about-highlights">
                    @foreach(config('portfolio.highlights', ['Laravel & PHP', 'React & Vue', 'UI/UX Design', 'API Architecture']) as $item)
                        <span class="highlight-tag">{{ $item }}</span>
                    @endforeach
                </div>

                <a href="{{ asset('resume/Kalaiselvi_Resume.pdf') }}" class="btn btn-outline" download>
                    Download CV <span>↓</span>
                </a>
            </div>
        </div>
    </div>
</section>
