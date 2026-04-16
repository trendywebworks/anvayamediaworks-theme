<?php /* Template Name: Website Development */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/website-development.css?v=<?php echo($t); ?>">


  <main id="top" class="website-development-page">
    <section class="website-development-hero-section">
      <div class="container website-development-hero-grid">
        <div class="website-development-hero-copy">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1>Website Development</h1>
          <p class="website-development-hero-tagline">
            Build Websites That Don&rsquo;t Just Look Good &mdash; They Perform
          </p>
          <p class="website-development-hero-lead">
            We design and develop high-performance websites that combine strategy, user experience, and technology to drive real business growth.
          </p>
          <p class="website-development-hero-support">
            From brand-first storytelling to conversion-focused architecture, every website we build is engineered to deliver measurable results.
          </p>

          <div class="website-development-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">
              Get a Free Website Audit
            </a>
            <a class="btn btn-amw btn-amw-secondary" href="<?php echo home_url(); ?>/contact/">
              Start Your Project
            </a>
          </div>
        </div>

        <div class="website-development-hero-visual" aria-hidden="true">
          <img
            class="website-development-hero-image"
            src="<?php bloginfo('template_directory'); ?>/assets/images/services/hero-website-development.png"
            alt=""
          >
        </div>
      </div>
    </section>

    <section class="website-development-problem-section">
      <div class="container">
        <div class="website-development-problem-header">
          <div class="website-development-problem-copy">
            <span class="website-development-section-eyebrow">The Problem</span>
            <h2>Most Websites Fail for One Reason:</h2>
            <p class="website-development-problem-lead">
              They&rsquo;re built for design, not for performance.
            </p>
            <p class="website-development-problem-body">
              Your website isn&rsquo;t just a digital presence. It&rsquo;s your most powerful sales engine. If it&rsquo;s not performing, it&rsquo;s costing you business.
            </p>
          </div>
        </div>

        <div class="website-development-problem-panel">
          <article class="website-development-problem-card">
            <span class="website-development-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="32" cy="32" r="18" stroke="currentColor" stroke-width="3"/>
                <path d="M32 21V32L40 37" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M22 18L18 14" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M42 18L46 14" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>Slow loading speeds</h3>
          </article>

          <article class="website-development-problem-card">
            <span class="website-development-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="22" y="10" width="20" height="44" rx="5" stroke="currentColor" stroke-width="3"/>
                <path d="M28 18H36" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M28 42H36" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <circle cx="32" cy="48" r="2" fill="currentColor"/>
              </svg>
            </span>
            <h3>Poor mobile experience</h3>
          </article>

          <article class="website-development-problem-card">
            <span class="website-development-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 18H52" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M18 30H46" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M24 42H34" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M46 22V42L54 34" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            <h3>Weak conversion flow</h3>
          </article>

          <article class="website-development-problem-card">
            <span class="website-development-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="29" cy="29" r="12" stroke="currentColor" stroke-width="3"/>
                <path d="M38 38L48 48" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M25 29L28 32L34 25" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            <h3>No SEO foundation</h3>
          </article>

          <article class="website-development-problem-card">
            <span class="website-development-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 18H48V40H28L18 48V40H16V18Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M24 27H40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M24 33H34" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>No clear brand communication</h3>
          </article>
        </div>
      </div>
    </section>

    <section class="website-development-approach-section">
      <div class="container">
        <div class="website-development-approach-shell">
          <div class="website-development-approach-intro">
            <span class="website-development-section-eyebrow website-development-section-eyebrow-light">Our Approach</span>
            <h2>A Connected Approach to Website Development</h2>
            <p>
              At Anvaya Media Works, we don&rsquo;t just build websites.
            </p>
            <p>
              We create conversion-driven digital experiences by combining strategy, UX, development, and performance into one connected system.
            </p>
            <p class="website-development-approach-note">
              Because great websites are not built in silos. They are built as systems.
            </p>
          </div>

          <div class="website-development-approach-grid">
            <article class="website-development-approach-card">
              <span class="website-development-approach-number">01</span>
              <h3>Strategic Thinking</h3>
              <p>We map the website around business goals, audience behavior, and growth opportunities.</p>
            </article>

            <article class="website-development-approach-card">
              <span class="website-development-approach-number">02</span>
              <h3>UX-First Design</h3>
              <p>Every layout, section, and interaction is planned to create a smoother user journey.</p>
            </article>

            <article class="website-development-approach-card">
              <span class="website-development-approach-number">03</span>
              <h3>Scalable Development</h3>
              <p>We build flexible, secure foundations that can evolve with your products, campaigns, and teams.</p>
            </article>

            <article class="website-development-approach-card">
              <span class="website-development-approach-number">04</span>
              <h3>Performance Optimization</h3>
              <p>Speed, responsiveness, technical hygiene, and conversion readiness are built into the process.</p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="website-development-services-section">
      <div class="container">
        <div class="website-development-services-header">
          <span class="website-development-section-eyebrow">What We Offer</span>
          <h2>End-to-End Website Development Services</h2>
          <p>
            We build the right website system for your brand stage, sales model, and operational needs.
          </p>
        </div>

        <div class="website-development-services-grid">
          <article class="website-development-service-card">
            <span class="website-development-service-number">01</span>
            <h3>Business Website Development</h3>
            <p>Clean, modern, and scalable websites designed to represent your brand and generate leads.</p>
          </article>

          <article class="website-development-service-card">
            <span class="website-development-service-number">02</span>
            <h3>E-commerce Development</h3>
            <p>Conversion-optimized online stores built on WooCommerce, Shopify, or custom stacks.</p>
          </article>

          <article class="website-development-service-card">
            <span class="website-development-service-number">03</span>
            <h3>Custom Web Applications</h3>
            <p>Tailored solutions built for your unique workflows, integrations, and business needs.</p>
          </article>

          <article class="website-development-service-card">
            <span class="website-development-service-number">04</span>
            <h3>CMS-Based Development</h3>
            <p>Flexible websites powered by WordPress or other CMS platforms for easy management.</p>
          </article>

          <article class="website-development-service-card">
            <span class="website-development-service-number">05</span>
            <h3>Landing Page Development</h3>
            <p>High-converting landing pages built for campaigns, ads, and performance marketing.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="website-development-process-section">
      <div class="container">
        <div class="website-development-process-header">
          <span class="website-development-section-eyebrow">Our Process</span>
          <h2>A Structured Process That Delivers Results</h2>
          <p>
            From first discovery to post-launch support, we follow a clear delivery system built for speed, clarity, and continuous improvement.
          </p>
        </div>

        <div class="website-development-process-grid">
          <article class="website-development-process-card">
            <span class="website-development-process-number">01</span>
            <h3>Discover &amp; Strategize</h3>
            <p>Understanding your business, audience, and goals.</p>
          </article>

          <article class="website-development-process-card">
            <span class="website-development-process-number">02</span>
            <h3>UX &amp; Wireframing</h3>
            <p>Planning user journeys and conversion paths.</p>
          </article>

          <article class="website-development-process-card">
            <span class="website-development-process-number">03</span>
            <h3>Design &amp; Prototyping</h3>
            <p>Crafting visually compelling, brand-aligned interfaces.</p>
          </article>

          <article class="website-development-process-card">
            <span class="website-development-process-number">04</span>
            <h3>Development &amp; Integration</h3>
            <p>Building fast, scalable, and secure systems.</p>
          </article>

          <article class="website-development-process-card">
            <span class="website-development-process-number">05</span>
            <h3>Testing &amp; Optimization</h3>
            <p>Ensuring performance, responsiveness, and usability.</p>
          </article>

          <article class="website-development-process-card">
            <span class="website-development-process-number">06</span>
            <h3>Launch &amp; Growth Support</h3>
            <p>Continuous improvements, updates, and scaling.</p>
          </article>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
