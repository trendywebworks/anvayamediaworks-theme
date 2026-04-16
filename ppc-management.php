<?php /* Template Name: PPC Management */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/ppc-management.css?v=<?php echo($t); ?>">


  <main id="top" class="ppc-management-page">
    <section class="ppc-management-hero-section">
      <div class="container ppc-management-hero-grid">
        <div class="ppc-management-hero-copy">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1>PPC Management</h1>
          <p class="ppc-management-hero-tagline">
            Get Instant Traffic. Drive Measurable Results. Scale Faster.
          </p>
          <p class="ppc-management-hero-lead">
            We create and manage high-performance PPC campaigns that generate qualified leads, increase sales, and deliver maximum ROI.
          </p>
          <p class="ppc-management-hero-support">
            From strategy to scaling, every campaign is optimized for performance.
          </p>

          <div class="ppc-management-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">
              Get Free PPC Audit
            </a>
            <a class="btn btn-amw btn-amw-secondary" href="<?php echo home_url(); ?>/contact/">
              Launch High-ROI Campaigns
            </a>
          </div>
        </div>

        <div class="ppc-management-hero-visual" aria-hidden="true">
          <img
            class="ppc-management-hero-image"
            src="<?php bloginfo('template_directory'); ?>/assets/images/services/hero-ppc-management.png"
            alt=""
          >
        </div>
      </div>
    </section>

    <section class="ppc-management-hook-section">
      <div class="container">
        <div class="ppc-management-hook-shell">
          <div class="ppc-management-hook-copy">
            <span class="ppc-management-section-eyebrow">The Hook</span>
            <h2>Need Results Fast? PPC Delivers.</h2>
            <p class="ppc-management-hook-body">
              Unlike organic strategies, PPC gives you instant visibility and traffic. But without the right strategy, it can burn your budget quickly.
            </p>
            <p class="ppc-management-hook-note">That&rsquo;s where we come in.</p>
          </div>

          <div class="ppc-management-hook-panel">
            <span class="ppc-management-section-eyebrow ppc-management-section-eyebrow-light">Why PPC Works</span>
            <div class="ppc-management-hook-points">
              <span>Instant visibility</span>
              <span>Qualified traffic</span>
              <span>Controlled spend</span>
              <span>Fast feedback loops</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ppc-management-problem-section">
      <div class="container">
        <div class="ppc-management-problem-header">
          <span class="ppc-management-section-eyebrow">The Problem</span>
          <h2>Why Most PPC Campaigns Fail</h2>
          <p>
            Running ads is easy. Running profitable ads consistently is not.
          </p>
        </div>

        <div class="ppc-management-problem-grid">
          <article class="ppc-management-problem-card">
            <span class="ppc-management-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="20" r="4" stroke="currentColor" stroke-width="3"/>
                <circle cx="44" cy="20" r="4" stroke="currentColor" stroke-width="3"/>
                <circle cx="32" cy="44" r="4" stroke="currentColor" stroke-width="3"/>
                <path d="M24 20H40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M22.5 23L29.5 40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M41.5 23L34.5 40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>Poor audience targeting</h3>
          </article>

          <article class="ppc-management-problem-card">
            <span class="ppc-management-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 18H48V46H16V18Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M24 26H40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M24 34H34" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M40 22L48 30" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>Weak ad creatives</h3>
          </article>

          <article class="ppc-management-problem-card">
            <span class="ppc-management-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 18H50V46H14V18Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M20 26H44" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M20 34H36" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M42 30L50 38" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>Low-quality landing pages</h3>
          </article>

          <article class="ppc-management-problem-card">
            <span class="ppc-management-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="32" cy="32" r="18" stroke="currentColor" stroke-width="3"/>
                <path d="M24 36C24 36 27 40 32 40C37 40 40 36 40 36" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M27 26H37" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M44 20L20 44" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>High cost per click (CPC)</h3>
          </article>

          <article class="ppc-management-problem-card">
            <span class="ppc-management-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 46V18H48V46" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M24 38V30" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M32 38V24" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M40 38V28" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M12 50H52" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>No conversion tracking</h3>
          </article>

          <article class="ppc-management-problem-card">
            <span class="ppc-management-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32 14L46 20V30C46 39 40.3 47 32 50C23.7 47 18 39 18 30V20L32 14Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M24 32H40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M32 24V40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>No optimization strategy</h3>
          </article>
        </div>
      </div>
    </section>

    <section class="ppc-management-approach-section">
      <div class="container">
        <div class="ppc-management-approach-shell">
          <div class="ppc-management-approach-intro">
            <span class="ppc-management-section-eyebrow ppc-management-section-eyebrow-light">Our Approach</span>
            <h2>Performance-Driven PPC Strategy</h2>
            <p>
              At Anvaya Media Works, we focus on ROI-first advertising, not just clicks.
            </p>
            <p class="ppc-management-approach-note">
              Because every rupee spent should generate measurable returns.
            </p>
          </div>

          <div class="ppc-management-approach-grid">
            <article class="ppc-management-approach-card">
              <span class="ppc-management-approach-number">01</span>
              <h3>Data-driven campaign strategy</h3>
              <p>We align paid media decisions to commercial goals, audience behavior, and return targets.</p>
            </article>

            <article class="ppc-management-approach-card">
              <span class="ppc-management-approach-number">02</span>
              <h3>Precision audience targeting</h3>
              <p>We narrow targeting so campaigns reach people most likely to click, convert, and buy.</p>
            </article>

            <article class="ppc-management-approach-card">
              <span class="ppc-management-approach-number">03</span>
              <h3>High-converting ad creatives</h3>
              <p>We strengthen messaging and creative direction to improve quality, relevance, and action.</p>
            </article>

            <article class="ppc-management-approach-card">
              <span class="ppc-management-approach-number">04</span>
              <h3>Landing page optimization</h3>
              <p>We make sure post-click experience supports stronger conversion rates and better ROI.</p>
            </article>

            <article class="ppc-management-approach-card">
              <span class="ppc-management-approach-number">05</span>
              <h3>Continuous monitoring &amp; scaling</h3>
              <p>We test, refine, and scale winning combinations so campaign performance compounds over time.</p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="ppc-management-platforms-section">
      <div class="container">
        <div class="ppc-management-platforms-shell">
          <div class="ppc-management-platforms-header">
            <span class="ppc-management-section-eyebrow">Platforms We Manage</span>
            <h2>Multi-Channel PPC Expertise</h2>
            <p>
              We manage campaigns across the platforms that matter most for acquisition, awareness, remarketing, and B2B targeting.
            </p>
          </div>

          <div class="ppc-management-platforms-grid">
            <article class="ppc-management-platform-card">
              <h3>Google Ads</h3>
              <p>Search, Display, Shopping, and YouTube campaigns built for intent and scale.</p>
            </article>

            <article class="ppc-management-platform-card">
              <h3>Meta Ads</h3>
              <p>Facebook and Instagram advertising focused on reach, engagement, and conversions.</p>
            </article>

            <article class="ppc-management-platform-card">
              <h3>LinkedIn Ads</h3>
              <p>B2B targeting for lead generation, decision-maker reach, and account-based visibility.</p>
            </article>

            <article class="ppc-management-platform-card">
              <h3>YouTube Advertising</h3>
              <p>Video campaigns designed to increase awareness, intent, and downstream action.</p>
            </article>

            <article class="ppc-management-platform-card">
              <h3>Remarketing &amp; Retargeting</h3>
              <p>Bringing users back with smarter follow-up campaigns wherever they are.</p>
            </article>
          </div>

          <p class="ppc-management-platforms-note">
            Reaching your audience wherever they are.
          </p>
        </div>
      </div>
    </section>

    <section class="ppc-management-services-section">
      <div class="container">
        <div class="ppc-management-services-header">
          <span class="ppc-management-section-eyebrow">Our PPC Services</span>
          <h2>End-to-End PPC Management</h2>
          <p>
            We combine strategy, campaign structure, tracking, creative, and optimization into one complete paid media system.
          </p>
        </div>

        <div class="ppc-management-services-grid">
          <article class="ppc-management-service-card">
            <span class="ppc-management-service-number">01</span>
            <h3>PPC Strategy &amp; Planning</h3>
            <p>Custom campaign strategy aligned with your business goals.</p>
          </article>

          <article class="ppc-management-service-card">
            <span class="ppc-management-service-number">02</span>
            <h3>Campaign Setup &amp; Launch</h3>
            <p>Structured campaigns with proper targeting and tracking.</p>
          </article>

          <article class="ppc-management-service-card">
            <span class="ppc-management-service-number">03</span>
            <h3>Keyword Research &amp; Targeting</h3>
            <p>High-intent keywords for better conversions.</p>
          </article>

          <article class="ppc-management-service-card">
            <span class="ppc-management-service-number">04</span>
            <h3>Ad Copy &amp; Creative Design</h3>
            <p>Compelling ads that attract clicks and drive action.</p>
          </article>

          <article class="ppc-management-service-card">
            <span class="ppc-management-service-number">05</span>
            <h3>Landing Page Optimization</h3>
            <p>Improving conversion rates for better ROI.</p>
          </article>

          <article class="ppc-management-service-card">
            <span class="ppc-management-service-number">06</span>
            <h3>Conversion Tracking Setup</h3>
            <p>Accurate tracking of leads, sales, and performance.</p>
          </article>

          <article class="ppc-management-service-card">
            <span class="ppc-management-service-number">07</span>
            <h3>Campaign Optimization &amp; Scaling</h3>
            <p>Continuous improvements to maximize results.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="ppc-management-process-section">
      <div class="container">
        <div class="ppc-management-process-header">
          <span class="ppc-management-section-eyebrow">Process</span>
          <h2>How We Drive Results</h2>
          <p>
            We follow a performance-first flow built to move quickly, learn fast, and scale what actually works.
          </p>
        </div>

        <div class="ppc-management-process-grid">
          <article class="ppc-management-process-card">
            <span class="ppc-management-process-number">01</span>
            <h3>Research &amp; Strategy</h3>
            <p>Understand audience, competitors, and goals.</p>
          </article>

          <article class="ppc-management-process-card">
            <span class="ppc-management-process-number">02</span>
            <h3>Campaign Setup</h3>
            <p>Build structured campaigns with precision targeting.</p>
          </article>

          <article class="ppc-management-process-card">
            <span class="ppc-management-process-number">03</span>
            <h3>Launch &amp; Monitor</h3>
            <p>Go live with real-time performance tracking.</p>
          </article>

          <article class="ppc-management-process-card">
            <span class="ppc-management-process-number">04</span>
            <h3>Optimize &amp; Test</h3>
            <p>Refine ads, audiences, and bids continuously.</p>
          </article>

          <article class="ppc-management-process-card">
            <span class="ppc-management-process-number">05</span>
            <h3>Scale Winning Campaigns</h3>
            <p>Increase budget on what works best.</p>
          </article>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
