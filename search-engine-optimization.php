<?php /* Template Name: Search Engine Optimization */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/search-engine-optimization.css?v=<?php echo($t); ?>">


  <main id="top" class="seo-service-page">
    <section class="seo-service-hero-section">
      <div class="container seo-service-hero-grid">
        <div class="seo-service-hero-copy">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1>Search Engine Optimization</h1>
          <p class="seo-service-hero-tagline">
            Rank Higher. Get Found. Drive Consistent Growth.
          </p>
          <p class="seo-service-hero-lead">
            We help businesses dominate search results with data-driven SEO strategies that increase visibility, attract high-intent traffic, and generate measurable growth.
          </p>
          <p class="seo-service-hero-support">
            From technical foundations to content authority, we build SEO systems that deliver long-term results.
          </p>

          <div class="seo-service-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">
              Get Free SEO Audit
            </a>
            <a class="btn btn-amw btn-amw-secondary" href="<?php echo home_url(); ?>/contact/">
              Start Ranking Today
            </a>
          </div>
        </div>

        <div class="seo-service-hero-visual" aria-hidden="true">
          <img
            class="seo-service-hero-image"
            src="<?php bloginfo('template_directory'); ?>/assets/images/services/hero-search-engine-optimization.png"
            alt=""
          >
        </div>
      </div>
    </section>

    <section class="seo-service-problem-section">
      <div class="container">
        <div class="seo-service-problem-header">
          <div class="seo-service-problem-copy">
            <span class="seo-service-section-eyebrow">The Problem</span>
            <h2>Your Customers Are Searching.<br>But Are They Finding You?</h2>
            <p class="seo-service-problem-lead">
              If your website isn&rsquo;t ranking on search engines, you&rsquo;re losing valuable traffic and revenue every single day.
            </p>
            <p class="seo-service-problem-body">
              SEO isn&rsquo;t just about ranking&mdash;it&rsquo;s about being visible at the right time to the right audience.
            </p>
            <p class="seo-service-problem-label">Common challenges businesses face:</p>
          </div>
        </div>

        <div class="seo-service-problem-panel">
          <article class="seo-service-problem-card">
            <span class="seo-service-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 42L26 30L34 38L50 22" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M42 22H50V30" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M14 50H50" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>Low Google rankings</h3>
          </article>

          <article class="seo-service-problem-card">
            <span class="seo-service-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 46V32" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M28 46V24" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M40 46V18" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M52 46V28" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M12 50H56" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>Poor website traffic</h3>
          </article>

          <article class="seo-service-problem-card">
            <span class="seo-service-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="24" cy="24" r="10" stroke="currentColor" stroke-width="3"/>
                <path d="M31 31L46 46" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M21 24H27" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M24 21V27" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>Weak keyword targeting</h3>
          </article>

          <article class="seo-service-problem-card">
            <span class="seo-service-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="32" cy="32" r="8" stroke="currentColor" stroke-width="3"/>
                <path d="M32 14V20" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M32 44V50" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M14 32H20" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M44 32H50" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M19.3 19.3L23.5 23.5" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M40.5 40.5L44.7 44.7" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M44.7 19.3L40.5 23.5" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M23.5 40.5L19.3 44.7" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>Technical SEO issues</h3>
          </article>

          <article class="seo-service-problem-card">
            <span class="seo-service-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 16H46V48H18V16Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M24 24H40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M24 32H40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M24 40H34" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>No content strategy</h3>
          </article>
        </div>
      </div>
    </section>

    <section class="seo-service-approach-section">
      <div class="container">
        <div class="seo-service-approach-shell">
          <div class="seo-service-approach-intro">
            <span class="seo-service-section-eyebrow seo-service-section-eyebrow-light">Our Approach</span>
            <h2>A Strategic, Data-Driven SEO Approach</h2>
            <p>
              At Anvaya Media Works, we go beyond basic optimization.
            </p>
            <p>
              We build end-to-end SEO ecosystems designed for scalability and performance.
            </p>
            <p class="seo-service-approach-note">
              Because SEO isn&rsquo;t a one-time task&mdash;it&rsquo;s a growth engine.
            </p>
          </div>

          <div class="seo-service-approach-grid">
            <article class="seo-service-approach-card">
              <span class="seo-service-approach-number">01</span>
              <h3>In-depth keyword research</h3>
              <p>We uncover search demand, audience intent, and competitive gaps that shape smarter SEO priorities.</p>
            </article>

            <article class="seo-service-approach-card">
              <span class="seo-service-approach-number">02</span>
              <h3>Technical SEO optimization</h3>
              <p>We strengthen crawlability, indexing, speed, and site health so search engines can trust your foundation.</p>
            </article>

            <article class="seo-service-approach-card">
              <span class="seo-service-approach-number">03</span>
              <h3>Content strategy &amp; authority building</h3>
              <p>We plan and structure content that expands topical depth, reinforces expertise, and compounds visibility.</p>
            </article>

            <article class="seo-service-approach-card">
              <span class="seo-service-approach-number">04</span>
              <h3>On-page and off-page optimization</h3>
              <p>We improve page relevance, site structure, and authority signals to support stronger rankings over time.</p>
            </article>

            <article class="seo-service-approach-card">
              <span class="seo-service-approach-number">05</span>
              <h3>Continuous tracking &amp; improvements</h3>
              <p>We measure performance, identify movement, and refine the system continuously based on real search data.</p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="seo-service-services-section">
      <div class="container">
        <div class="seo-service-services-header">
          <span class="seo-service-section-eyebrow">Our SEO Services</span>
          <h2>Comprehensive SEO Solutions for Sustainable Growth</h2>
          <p>
            We combine technical improvements, search strategy, content systems, and authority building into one SEO growth framework.
          </p>
        </div>

        <div class="seo-service-services-grid">
          <article class="seo-service-service-card">
            <span class="seo-service-service-number">01</span>
            <h3>Technical SEO</h3>
            <p>We fix the foundation&mdash;site speed, crawlability, indexing, and performance to ensure search engines can properly access and rank your website.</p>
          </article>

          <article class="seo-service-service-card">
            <span class="seo-service-service-number">02</span>
            <h3>On-Page SEO</h3>
            <p>Optimizing website content, structure, meta tags, and internal linking to improve relevance and rankings.</p>
          </article>

          <article class="seo-service-service-card">
            <span class="seo-service-service-number">03</span>
            <h3>Keyword Research &amp; Strategy</h3>
            <p>Identifying high-intent, high-impact keywords that drive targeted traffic and conversions.</p>
          </article>

          <article class="seo-service-service-card">
            <span class="seo-service-service-number">04</span>
            <h3>Content Strategy &amp; SEO Copywriting</h3>
            <p>Creating SEO-optimized content that ranks, engages, and converts.</p>
          </article>

          <article class="seo-service-service-card">
            <span class="seo-service-service-number">05</span>
            <h3>Off-Page SEO &amp; Link Building</h3>
            <p>Building high-quality backlinks to improve domain authority and credibility.</p>
          </article>

          <article class="seo-service-service-card">
            <span class="seo-service-service-number">06</span>
            <h3>Local SEO</h3>
            <p>Optimizing your business for local searches, Google Business Profile, and location-based visibility.</p>
          </article>

          <article class="seo-service-service-card">
            <span class="seo-service-service-number">07</span>
            <h3>E-commerce SEO</h3>
            <p>Optimizing product pages, categories, and site structure to increase online store visibility and sales.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="seo-service-process-section">
      <div class="container">
        <div class="seo-service-process-header">
          <span class="seo-service-section-eyebrow">Our Process</span>
          <h2>A Structured SEO Framework That Delivers Results</h2>
          <p>
            We move from audit to implementation and ongoing optimization through a clear search growth system built for measurable progress.
          </p>
        </div>

        <div class="seo-service-process-grid">
          <article class="seo-service-process-card">
            <span class="seo-service-process-number">01</span>
            <h3>SEO Audit &amp; Analysis</h3>
            <p>Identifying gaps, issues, and opportunities.</p>
          </article>

          <article class="seo-service-process-card">
            <span class="seo-service-process-number">02</span>
            <h3>Keyword &amp; Competitor Research</h3>
            <p>Understanding what your audience is searching for.</p>
          </article>

          <article class="seo-service-process-card">
            <span class="seo-service-process-number">03</span>
            <h3>Strategy Development</h3>
            <p>Creating a customized SEO roadmap.</p>
          </article>

          <article class="seo-service-process-card">
            <span class="seo-service-process-number">04</span>
            <h3>Implementation</h3>
            <p>On-page, technical, and content execution.</p>
          </article>

          <article class="seo-service-process-card">
            <span class="seo-service-process-number">05</span>
            <h3>Link Building &amp; Authority Growth</h3>
            <p>Strengthening domain credibility.</p>
          </article>

          <article class="seo-service-process-card">
            <span class="seo-service-process-number">06</span>
            <h3>Monitoring &amp; Optimization</h3>
            <p>Continuous improvements based on data.</p>
          </article>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
