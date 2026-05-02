<section class="skills" id="skills">
    <div class="container">
        <div class="section-header">
            <p class="section-label">Expertise</p>
            <h2 class="section-title">My <em>Toolkit</em></h2>
        </div>

        <div class="skills-grid">
            @foreach($skills as $category => $items)
            <div class="skill-group">
                <h3 class="skill-category">{{ $category }}</h3>
                <div class="skill-items">
                    @foreach($items as $skill)
                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">{{ $skill['name'] }}</span>
                            <span class="skill-pct">{{ $skill['level'] }}%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-fill" data-width="{{ $skill['level'] }}"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

        <div class="tools-strip">
            <p class="tools-label">Also fluent in</p>
            <div class="tools-list">
                @foreach(config('portfolio.tools', ['Git', 'Docker', 'AWS', 'Figma', 'MySQL', 'Redis', 'Tailwind', 'Livewire', 'Inertia.js', 'Pest']) as $tool)
                    <span class="tool-chip">{{ $tool }}</span>
                @endforeach
            </div>
        </div>
    </div>
</section>
