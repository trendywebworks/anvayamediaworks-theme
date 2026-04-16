<?php /* Template Name: Growth Marketing */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/growth-marketing.css?v=<?php echo($t); ?>">

  <main id="top" class="growth-marketing-page">
    <section class="growth-marketing-hero-section">
      <div class="container growth-marketing-hero-grid">
        <div class="growth-marketing-hero-copy">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1>Growth Marketing</h1>
          <p class="growth-marketing-hero-tagline">
            Build Scalable Growth Systems &mdash; Not Just Campaigns
          </p>
          <p class="growth-marketing-hero-lead">
            We help businesses achieve predictable, sustainable growth through data-driven marketing strategies, experimentation, and performance optimization.
          </p>
          <p class="growth-marketing-hero-support">
            From acquisition to retention, we build systems that scale your brand and revenue.
          </p>

          <div class="growth-marketing-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">
              Get Free Growth Audit
            </a>
            <a class="btn btn-amw btn-amw-secondary" href="<?php echo home_url(); ?>/contact/">
              Start Scaling Today
            </a>
          </div>
        </div>

        <div class="growth-marketing-hero-visual" aria-hidden="true">
          <img
            class="growth-marketing-hero-image"
            src="<?php bloginfo('template_directory'); ?>/assets/images/services/hero-growth-marketing.png"
            alt=""
          >
        </div>
      </div>
    </section>

    <section class="growth-marketing-idea-section">
      <div class="container">
        <div class="growth-marketing-idea-shell">
          <div class="growth-marketing-idea-copy">
            <span class="growth-marketing-section-eyebrow">Big Idea</span>
            <h2>Growth Isn&rsquo;t Luck. It&rsquo;s a System.</h2>
            <p class="growth-marketing-idea-body">
              Most businesses rely on isolated campaigns&mdash;ads, SEO, social. But real growth happens when everything works together.
            </p>
          </div>

          <div class="growth-marketing-idea-panel">
            <span class="growth-marketing-section-eyebrow growth-marketing-section-eyebrow-light">Growth Marketing Connects</span>
            <div class="growth-marketing-engine-grid">
              <span>Acquisition</span>
              <span>Activation</span>
              <span>Retention</span>
              <span>Revenue</span>
              <span>Referral</span>
            </div>
            <p class="growth-marketing-idea-note">Into one unified engine.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="growth-marketing-problem-section">
      <div class="container">
        <div class="growth-marketing-problem-header">
          <span class="growth-marketing-section-eyebrow">The Problem</span>
          <h2>Why Most Marketing Doesn&rsquo;t Scale</h2>
          <p>
            Without a structured approach, growth becomes inconsistent and expensive.
          </p>
        </div>

        <div class="growth-marketing-problem-grid">
          <article class="growth-marketing-problem-card">
            <span class="growth-marketing-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 18H30V30H18V18Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M34 34H46V46H34V34Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M30 24H40V34" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24 30V40H34" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            <h3>Campaigns run in silos</h3>
          </article>

          <article class="growth-marketing-problem-card">
            <span class="growth-marketing-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 50H52" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M18 42V28" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M30 42V20" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M42 42V24" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M14 18L24 28L34 22L50 38" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            <h3>No data-driven decision making</h3>
          </article>

          <article class="growth-marketing-problem-card">
            <span class="growth-marketing-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="32" cy="32" r="18" stroke="currentColor" stroke-width="3"/>
                <path d="M26 32H38" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M32 26V38" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M46 18L18 46" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>High ad spend, low ROI</h3>
          </article>

          <article class="growth-marketing-problem-card">
            <span class="growth-marketing-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 16H46V48H18V16Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M24 24H40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M24 32H40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M24 40H34" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>No clear growth strategy</h3>
          </article>

          <article class="growth-marketing-problem-card">
            <span class="growth-marketing-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="20" r="4" stroke="currentColor" stroke-width="3"/>
                <circle cx="44" cy="20" r="4" stroke="currentColor" stroke-width="3"/>
                <circle cx="32" cy="44" r="4" stroke="currentColor" stroke-width="3"/>
                <path d="M24 20H40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M22.5 23L29.5 40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M41.5 23L34.5 40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>Poor customer journey tracking</h3>
          </article>
        </div>
      </div>
    </section>

    <section class="growth-marketing-approach-section">
      <div class="container">
        <div class="growth-marketing-approach-shell">
          <div class="growth-marketing-approach-intro">
            <span class="growth-marketing-section-eyebrow growth-marketing-section-eyebrow-light">Our Approach</span>
            <h2>A Full-Funnel Growth Marketing Framework</h2>
            <p>
              At Anvaya Media Works, we focus on end-to-end growth systems, not just individual tactics.
            </p>
            <p class="growth-marketing-approach-note">
              Because growth is not a one-time effort&mdash;it&rsquo;s an ongoing process.
            </p>
          </div>

          <div class="growth-marketing-approach-grid">
            <article class="growth-marketing-approach-card">
              <span class="growth-marketing-approach-number">01</span>
              <h3>Data-driven strategy</h3>
              <p>We align channels, decisions, and priorities to measurable growth outcomes.</p>
            </article>

            <article class="growth-marketing-approach-card">
              <span class="growth-marketing-approach-number">02</span>
              <h3>Performance marketing</h3>
              <p>We acquire qualified users through campaigns designed for efficiency and scale.</p>
            </article>

            <article class="growth-marketing-approach-card">
              <span class="growth-marketing-approach-number">03</span>
              <h3>Conversion optimization</h3>
              <p>We improve the moments where attention turns into leads, sign-ups, or revenue.</p>
            </article>

            <article class="growth-marketing-approach-card">
              <span class="growth-marketing-approach-number">04</span>
              <h3>Funnel design</h3>
              <p>We build journeys that move people forward with less friction and more clarity.</p>
            </article>

            <article class="growth-marketing-approach-card">
              <span class="growth-marketing-approach-number">05</span>
              <h3>Continuous experimentation</h3>
              <p>We test, learn, and refine continuously so growth keeps compounding over time.</p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="growth-marketing-funnel-section">
      <div class="container">
        <div class="growth-marketing-funnel-header">
          <span class="growth-marketing-section-eyebrow">Growth Funnel</span>
          <h2>Optimizing Every Stage of Growth</h2>
          <p>
            We work across the full customer journey so each stage supports the next and growth compounds more efficiently.
          </p>
        </div>

        <div class="growth-marketing-funnel-grid">
          <article class="growth-marketing-funnel-card">
            <span class="growth-marketing-funnel-step">01</span>
            <h3>Acquisition</h3>
            <p>Bringing high-quality traffic through SEO, ads, and campaigns.</p>
          </article>

          <article class="growth-marketing-funnel-card">
            <span class="growth-marketing-funnel-step">02</span>
            <h3>Activation</h3>
            <p>Turning visitors into engaged users.</p>
          </article>

          <article class="growth-marketing-funnel-card">
            <span class="growth-marketing-funnel-step">03</span>
            <h3>Conversion</h3>
            <p>Driving leads, sales, and sign-ups.</p>
          </article>

          <article class="growth-marketing-funnel-card">
            <span class="growth-marketing-funnel-step">04</span>
            <h3>Retention</h3>
            <p>Keeping customers engaged and coming back.</p>
          </article>

          <article class="growth-marketing-funnel-card">
            <span class="growth-marketing-funnel-step">05</span>
            <h3>Referral</h3>
            <p>Turning customers into brand advocates.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="growth-marketing-services-section">
      <div class="container">
        <div class="growth-marketing-services-header">
          <span class="growth-marketing-section-eyebrow">Our Growth Marketing Services</span>
          <h2>Integrated Solutions for Scalable Growth</h2>
          <p>
            We combine strategy, acquisition, funnel optimization, automation, and analytics into one scalable growth system.
          </p>
        </div>

        <div class="growth-marketing-services-grid">
          <article class="growth-marketing-service-card">
            <span class="growth-marketing-service-number">01</span>
            <h3>Growth Strategy &amp; Planning</h3>
            <p>Creating a roadmap based on business goals and market insights.</p>
          </article>

          <article class="growth-marketing-service-card">
            <span class="growth-marketing-service-number">02</span>
            <h3>Performance Marketing (Paid Ads)</h3>
            <p>Running high-ROI campaigns across Google, Meta, and other platforms.</p>
          </article>

          <article class="growth-marketing-service-card">
            <span class="growth-marketing-service-number">03</span>
            <h3>SEO &amp; Organic Growth</h3>
            <p>Building long-term traffic and authority.</p>
          </article>

          <article class="growth-marketing-service-card">
            <span class="growth-marketing-service-number">04</span>
            <h3>Conversion Rate Optimization (CRO)</h3>
            <p>Improving conversion rates across your website and funnels.</p>
          </article>

          <article class="growth-marketing-service-card">
            <span class="growth-marketing-service-number">05</span>
            <h3>Funnel Design &amp; Optimization</h3>
            <p>Designing seamless customer journeys that convert.</p>
          </article>

          <article class="growth-marketing-service-card">
            <span class="growth-marketing-service-number">06</span>
            <h3>Marketing Automation</h3>
            <p>Automating workflows for lead nurturing and retention.</p>
          </article>

          <article class="growth-marketing-service-card">
            <span class="growth-marketing-service-number">07</span>
            <h3>Analytics &amp; Data Tracking</h3>
            <p>Setting up tracking systems to measure and optimize performance.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="growth-marketing-process-section">
      <div class="container">
        <div class="growth-marketing-process-header">
          <span class="growth-marketing-section-eyebrow">Process</span>
          <h2>Our Continuous Growth Loop</h2>
          <p>
            Growth is never static&mdash;it&rsquo;s a loop.
          </p>
        </div>

        <div class="growth-marketing-process-grid">
          <article class="growth-marketing-process-card">
            <span class="growth-marketing-process-number">01</span>
            <h3>Research &amp; Insights</h3>
            <p>Understand market, audience, and competitors.</p>
          </article>

          <article class="growth-marketing-process-card">
            <span class="growth-marketing-process-number">02</span>
            <h3>Strategy &amp; Planning</h3>
            <p>Define clear growth roadmap.</p>
          </article>

          <article class="growth-marketing-process-card">
            <span class="growth-marketing-process-number">03</span>
            <h3>Execution</h3>
            <p>Launch campaigns across channels.</p>
          </article>

          <article class="growth-marketing-process-card">
            <span class="growth-marketing-process-number">04</span>
            <h3>Test &amp; Experiment</h3>
            <p>Run A/B tests and optimize continuously.</p>
          </article>

          <article class="growth-marketing-process-card">
            <span class="growth-marketing-process-number">05</span>
            <h3>Analyze &amp; Scale</h3>
            <p>Scale what works, eliminate what doesn&rsquo;t.</p>
          </article>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
