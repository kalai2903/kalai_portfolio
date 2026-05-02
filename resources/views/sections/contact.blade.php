<section class="contact" id="contact">
    <div class="container">
        <div class="contact-inner">
            <div class="contact-text">
                <p class="section-label">Get In Touch</p>
                <h2 class="contact-heading">Let's build something <em>great</em> together</h2>
                <p class="contact-sub">Have a project in mind? I'd love to hear about it. Drop me a message and I'll get back within 24 hours.</p>

                <div class="contact-info">
                    <a href="mailto:{{ config('portfolio.email', 'hello@alexmorgan.dev') }}" class="contact-email">
                        {{ config('portfolio.email', 'hello@alexmorgan.dev') }}
                    </a>
                    <div class="contact-socials">
                        @foreach(config('portfolio.social', []) as $name => $url)
                            <a href="{{ $url }}" target="_blank" rel="noopener" class="social-link">{{ $name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

            <form class="contact-form" id="contactForm" action="{{ route('contact.send') }}" method="POST">
                @csrf
                @if(session('success'))
                    <div class="form-success">{{ session('success') }}</div>
                @endif
                @if($errors->any())
                    <div class="form-error">{{ $errors->first() }}</div>
                @endif

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Your name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="your@email.com" required>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" value="{{ old('subject') }}" placeholder="Project enquiry">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Tell me about your project..." required>{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-full">
                    Send Message <span class="btn-arrow">→</span>
                </button>
            </form>
        </div>
    </div>
</section>
