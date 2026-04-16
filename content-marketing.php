<?php /* Template Name: Content Marketing */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/content-marketing.css?v=<?php echo($t); ?>">

  <main id="top" class="content-marketing-page">
    <section class="content-marketing-hero-section">
      <div class="container content-marketing-hero-grid">
        <div class="content-marketing-hero-copy">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1>Content Marketing</h1>
          <p class="content-marketing-hero-tagline">
            Turn Content Into a Growth Engine
          </p>
          <p class="content-marketing-hero-lead">
            We create strategic, high-impact content that attracts, engages, and converts your audience.
          </p>
          <p class="content-marketing-hero-support">
            From SEO-driven blogs to brand storytelling, our content marketing solutions are built to drive long-term growth and authority.
          </p>

          <div class="content-marketing-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">
              Get Free Content Audit
            </a>
            <a class="btn btn-amw btn-amw-secondary" href="<?php echo home_url(); ?>/contact/">
              Build Your Content Strategy
            </a>
          </div>
        </div>

        <div class="content-marketing-hero-visual" aria-hidden="true">
          <img
            class="content-marketing-hero-image"
            src="<?php bloginfo('template_directory'); ?>/assets/images/services/hero-content-marketing.png"
            alt=""
          >
        </div>
      </div>
    </section>

    <section class="content-marketing-idea-section">
      <div class="container">
        <div class="content-marketing-idea-shell">
          <div class="content-marketing-idea-copy">
            <span class="content-marketing-section-eyebrow">Big Idea</span>
            <h2>Content Isn&rsquo;t Just Creation. It&rsquo;s Strategy.</h2>
            <p class="content-marketing-idea-body">
              Anyone can publish content. But only the right content drives results.
            </p>
            <p class="content-marketing-idea-note">
              Without strategy, content is just noise.
            </p>
          </div>

          <div class="content-marketing-idea-panel">
            <span class="content-marketing-section-eyebrow content-marketing-section-eyebrow-light">Effective Content Helps You</span>
            <div class="content-marketing-idea-list">
              <div class="content-marketing-idea-item">
                <strong>Attract</strong>
                <span>Attract high-quality organic traffic.</span>
              </div>
              <div class="content-marketing-idea-item">
                <strong>Build Trust</strong>
                <span>Build brand authority and trust.</span>
              </div>
              <div class="content-marketing-idea-item">
                <strong>Educate</strong>
                <span>Educate and nurture your audience.</span>
              </div>
              <div class="content-marketing-idea-item">
                <strong>Generate Leads</strong>
                <span>Generate consistent leads over time.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="content-marketing-problem-section">
      <div class="container">
        <div class="content-marketing-problem-header">
          <span class="content-marketing-section-eyebrow">The Problem</span>
          <h2>Why Most Content Doesn&rsquo;t Perform</h2>
          <p>
            Creating content without direction leads to wasted effort and zero impact.
          </p>
        </div>

        <div class="content-marketing-problem-grid">
          <article class="content-marketing-problem-card">
            <span class="content-marketing-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 16H46V48H18V16Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M24 24H40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M24 32H40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M24 40H34" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>No clear content strategy</h3>
          </article>

          <article class="content-marketing-problem-card">
            <span class="content-marketing-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="24" cy="24" r="10" stroke="currentColor" stroke-width="3"/>
                <path d="M31 31L46 46" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M21 24H27" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M24 21V27" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>Weak keyword targeting</h3>
          </article>

          <article class="content-marketing-problem-card">
            <span class="content-marketing-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="32" cy="32" r="18" stroke="currentColor" stroke-width="3"/>
                <path d="M32 21V32L40 37" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M22 18L18 14" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M42 18L46 14" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>Inconsistent publishing</h3>
          </article>

          <article class="content-marketing-problem-card">
            <span class="content-marketing-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 18H48V46H16V18Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M24 26H40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M24 34H34" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M40 22L48 30" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>Poor quality or generic content</h3>
          </article>

          <article class="content-marketing-problem-card">
            <span class="content-marketing-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="12" y="22" width="40" height="20" rx="10" stroke="currentColor" stroke-width="3"/>
                <path d="M26 32H38" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M38 32L34 28" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M38 32L34 36" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            <h3>No conversion focus</h3>
          </article>
        </div>
      </div>
    </section>

    <section class="content-marketing-approach-section">
      <div class="container">
        <div class="content-marketing-approach-shell">
          <div class="content-marketing-approach-intro">
            <span class="content-marketing-section-eyebrow content-marketing-section-eyebrow-light">Our Approach</span>
            <h2>A Strategy-First Content Marketing Framework</h2>
            <p>
              At Anvaya Media Works, we treat content as a long-term growth asset.
            </p>
            <p class="content-marketing-approach-note">
              Because great content is not random&mdash;it&rsquo;s engineered for growth.
            </p>
          </div>

          <div class="content-marketing-approach-grid">
            <article class="content-marketing-approach-card">
              <span class="content-marketing-approach-number">01</span>
              <h3>SEO-driven content planning</h3>
              <p>We map content opportunities to search demand, business priorities, and conversion goals.</p>
            </article>

            <article class="content-marketing-approach-card">
              <span class="content-marketing-approach-number">02</span>
              <h3>Audience and intent research</h3>
              <p>We align topics and formats to what your audience is actually searching for and needing.</p>
            </article>

            <article class="content-marketing-approach-card">
              <span class="content-marketing-approach-number">03</span>
              <h3>Brand storytelling</h3>
              <p>We shape narratives that build authority, trust, and recognition beyond just keywords.</p>
            </article>

            <article class="content-marketing-approach-card">
              <span class="content-marketing-approach-number">04</span>
              <h3>Multi-format content creation</h3>
              <p>We create connected content across channels so the whole system works together.</p>
            </article>

            <article class="content-marketing-approach-card">
              <span class="content-marketing-approach-number">05</span>
              <h3>Performance tracking &amp; optimization</h3>
              <p>We refine strategy based on performance signals, not assumptions, so the system improves over time.</p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="content-marketing-ecosystem-section">
      <div class="container">
        <div class="content-marketing-ecosystem-shell">
          <div class="content-marketing-ecosystem-header">
            <span class="content-marketing-section-eyebrow">Content Ecosystem</span>
            <h2>Building a Complete Content System</h2>
            <p>
              We don&rsquo;t just create individual pieces&mdash;we build a connected content ecosystem aligned to your business goals.
            </p>
          </div>

          <div class="content-marketing-ecosystem-grid">
            <span>Blog content for SEO</span>
            <span>Website content for conversions</span>
            <span>Social content for engagement</span>
            <span>Email content for nurturing</span>
            <span>Visual and creative content for branding</span>
          </div>
        </div>
      </div>
    </section>

    <section class="content-marketing-services-section">
      <div class="container">
        <div class="content-marketing-services-header">
          <span class="content-marketing-section-eyebrow">Our Content Marketing Services</span>
          <h2>End-to-End Content Solutions</h2>
          <p>
            We combine strategy, writing, channel content, and optimization into one consistent content growth system.
          </p>
        </div>

        <div class="content-marketing-services-grid">
          <article class="content-marketing-service-card">
            <span class="content-marketing-service-number">01</span>
            <h3>Content Strategy &amp; Planning</h3>
            <p>Creating a roadmap aligned with SEO and business goals.</p>
          </article>

          <article class="content-marketing-service-card">
            <span class="content-marketing-service-number">02</span>
            <h3>SEO Content Writing</h3>
            <p>Blogs, articles, and web content optimized for search engines.</p>
          </article>

          <article class="content-marketing-service-card">
            <span class="content-marketing-service-number">03</span>
            <h3>Website &amp; Landing Page Content</h3>
            <p>Conversion-focused copy for better engagement and results.</p>
          </article>

          <article class="content-marketing-service-card">
            <span class="content-marketing-service-number">04</span>
            <h3>Social Media Content</h3>
            <p>Creative and engaging content for brand visibility.</p>
          </article>

          <article class="content-marketing-service-card">
            <span class="content-marketing-service-number">05</span>
            <h3>Email Content Creation</h3>
            <p>Content for campaigns and automation workflows.</p>
          </article>

          <article class="content-marketing-service-card">
            <span class="content-marketing-service-number">06</span>
            <h3>Content Optimization &amp; Refresh</h3>
            <p>Improving existing content for better performance.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="content-marketing-process-section">
      <div class="container">
        <div class="content-marketing-process-header">
          <span class="content-marketing-section-eyebrow">Process</span>
          <h2>How We Build High-Performing Content</h2>
          <p>
            We follow a clean workflow that moves from research into execution, distribution, and continuous improvement.
          </p>
        </div>

        <div class="content-marketing-process-grid">
          <article class="content-marketing-process-card">
            <span class="content-marketing-process-number">01</span>
            <h3>Research &amp; Insights</h3>
            <p>Understand audience, keywords, and competitors.</p>
          </article>

          <article class="content-marketing-process-card">
            <span class="content-marketing-process-number">02</span>
            <h3>Strategy Development</h3>
            <p>Plan content aligned with goals.</p>
          </article>

          <article class="content-marketing-process-card">
            <span class="content-marketing-process-number">03</span>
            <h3>Content Creation</h3>
            <p>Write and design high-quality content.</p>
          </article>

          <article class="content-marketing-process-card">
            <span class="content-marketing-process-number">04</span>
            <h3>Optimization</h3>
            <p>Ensure SEO and performance readiness.</p>
          </article>

          <article class="content-marketing-process-card">
            <span class="content-marketing-process-number">05</span>
            <h3>Publish &amp; Promote</h3>
            <p>Distribute content across channels.</p>
          </article>

          <article class="content-marketing-process-card">
            <span class="content-marketing-process-number">06</span>
            <h3>Analyze &amp; Improve</h3>
            <p>Track performance and refine strategy.</p>
          </article>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
