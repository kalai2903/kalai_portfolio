@php
$coverImages = [
// 1. Priest Booking Platform — temple / spiritual
'https://images.unsplash.com/photo-1582510003544-4d00b7f74220?w=1400&q=85',

// 2. Company Website — modern corporate office
'https://images.unsplash.com/photo-1497366216548-37526070297c?w=900&q=85',

// 3. Academy Management System — university campus
'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=900&q=85',

// 4. Commercial Web Project — e-commerce / shopping
'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=900&q=85',
];
@endphp
<section class="work" id="work">
    <div class="container">
        <div class="section-header">
            <p class="section-label">Selected Work</p>
            <h2 class="section-title">Projects that <em>matter</em></h2>
        </div>

        <div class="projects-grid">
            @foreach($projects as $i => $project)
            <article class="project-card {{ $i === 0 ? 'project-card--featured' : '' }}" data-index="{{ $i }}">
                <div class="project-img-wrap">
                    <div class="project-img-bg"
                        style="background-image: url('{{ $project['cover_image'] ?? $coverImages[$i % count($coverImages)] }}');
                    background-size: cover;
                    background-position: center;">
                    </div>
                    <div class="project-overlay">
                        <a href="{{ $project['url'] ?? '#' }}" class="project-link" target="_blank">Visit ↗</a>
                        <a href="{{ $project['case_study'] ?? '#' }}" class="project-link">Case Study →</a>
                    </div>
                    <div class="project-meta">
                        <span class="project-category">{{ $project['category'] }}</span>
                        <span class="project-year">{{ $project['year'] }}</span>
                        @if(($project['status'] ?? '') === 'live')
                        <span class="project-live-badge">● Live</span>
                        @endif
                    </div>
                    {{-- Floating icon / label on the card --}}
                    <div class="project-cover-label">
                        <span class="project-cover-icon">{{ $project['icon'] ?? '⚡' }}</span>
                        <span class="project-cover-name">{{ $project['title'] }}</span>
                    </div>
                </div>

                <div class="project-info">
                    <div class="project-meta">
                        <span class="project-category">{{ $project['category'] }}</span>
                        <span class="project-year">{{ $project['year'] }}</span>
                    </div>
                    <h3 class="project-title">{{ $project['title'] }}</h3>
                    <p class="project-desc">{{ $project['description'] }}</p>
                    <div class="project-tags">
                        @foreach($project['tags'] as $tag)
                        <span class="project-tag">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>