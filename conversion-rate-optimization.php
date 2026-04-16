<?php /* Template Name: Conversion Rate Optimization */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/conversion-rate-optimization.css?v=<?php echo($t); ?>">


  <main id="top" class="cro-service-page">
    <section class="cro-service-hero-section">
      <div class="container cro-service-hero-grid">
        <div class="cro-service-hero-copy">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1>Conversion Rate Optimization</h1>
          <p class="cro-service-hero-tagline">
            Turn More Visitors Into Customers &mdash; Without Increasing Traffic
          </p>
          <p class="cro-service-hero-lead">
            Getting traffic is only half the job.
          </p>
          <p class="cro-service-hero-support">
            We help you maximize the value of every visitor with data-driven CRO strategies that increase conversions, improve user experience, and boost revenue.
          </p>

          <div class="cro-service-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">
              Get Free CRO Audit
            </a>
            <a class="btn btn-amw btn-amw-secondary" href="<?php echo home_url(); ?>/contact/">
              Improve My Conversions
            </a>
          </div>
        </div>

        <div class="cro-service-hero-visual" aria-hidden="true">
          <img
            class="cro-service-hero-image"
            src="<?php bloginfo('template_directory'); ?>/assets/images/services/hero-conversion-rate-optimization.png"
            alt=""
          >
        </div>
      </div>
    </section>

    <section class="cro-service-insight-section">
      <div class="container">
        <div class="cro-service-insight-shell">
          <div class="cro-service-insight-copy">
            <span class="cro-service-section-eyebrow">Core Insight</span>
            <h2>More Traffic &ne; More Revenue</h2>
            <p class="cro-service-insight-divider">Better Conversions = Real Growth</p>
            <p class="cro-service-insight-body">
              Most businesses focus on driving traffic. But if your website isn&rsquo;t converting, you&rsquo;re simply pouring money into a leaking bucket.
            </p>
          </div>

          <div class="cro-service-insight-panel">
            <span class="cro-service-section-eyebrow cro-service-section-eyebrow-light">CRO Helps You</span>
            <div class="cro-service-insight-list">
              <div class="cro-service-insight-item">
                <strong>Convert more</strong>
                <span>Turn more visitors into leads or sales.</span>
              </div>
              <div class="cro-service-insight-item">
                <strong>Reduce costs</strong>
                <span>Lower acquisition costs by improving efficiency.</span>
              </div>
              <div class="cro-service-insight-item">
                <strong>Improve ROI</strong>
                <span>Get more value from your existing marketing spend.</span>
              </div>
              <div class="cro-service-insight-item">
                <strong>Scale smarter</strong>
                <span>Grow without increasing ad budgets.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cro-service-problem-section">
      <div class="container">
        <div class="cro-service-problem-header">
          <span class="cro-service-section-eyebrow">Problem Breakdown</span>
          <h2>Why Visitors Don&rsquo;t Convert</h2>
          <p>
            Even with good traffic, conversions fail because friction shows up across the journey. Every friction point reduces your revenue.
          </p>
        </div>

        <div class="cro-service-problem-grid">
          <article class="cro-service-problem-card">
            <span class="cro-service-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 18H48V46H16V18Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M24 26H40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M24 34L30 40L40 28" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            <h3>Confusing user journeys</h3>
          </article>

          <article class="cro-service-problem-card">
            <span class="cro-service-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="12" y="22" width="40" height="20" rx="10" stroke="currentColor" stroke-width="3"/>
                <path d="M26 32H38" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M38 32L34 28" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M38 32L34 36" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            <h3>Weak call-to-actions</h3>
          </article>

          <article class="cro-service-problem-card">
            <span class="cro-service-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="22" y="10" width="20" height="44" rx="5" stroke="currentColor" stroke-width="3"/>
                <path d="M28 18H36" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M28 42H36" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <circle cx="32" cy="48" r="2" fill="currentColor"/>
              </svg>
            </span>
            <h3>Poor mobile experience</h3>
          </article>

          <article class="cro-service-problem-card">
            <span class="cro-service-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="32" cy="32" r="18" stroke="currentColor" stroke-width="3"/>
                <path d="M32 21V32L40 37" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M22 18L18 14" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M42 18L46 14" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>Slow loading speeds</h3>
          </article>

          <article class="cro-service-problem-card">
            <span class="cro-service-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32 14L46 20V30C46 39 40.3 47 32 50C23.7 47 18 39 18 30V20L32 14Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M27 31L31 35L38 27" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            <h3>Lack of trust signals</h3>
          </article>

          <article class="cro-service-problem-card">
            <span class="cro-service-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 18H50V46H14V18Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M20 26H44" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M20 34H36" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M42 30L50 38" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>Ineffective landing pages</h3>
          </article>
        </div>
      </div>
    </section>

    <section class="cro-service-approach-section">
      <div class="container">
        <div class="cro-service-approach-shell">
          <div class="cro-service-approach-intro">
            <span class="cro-service-section-eyebrow cro-service-section-eyebrow-light">Our Approach</span>
            <h2>A Data-Driven CRO Framework</h2>
            <p>
              At Anvaya Media Works, we don&rsquo;t rely on guesswork.
            </p>
            <p>
              We optimize your website using data, behavior insights, and continuous testing.
            </p>
            <p class="cro-service-approach-note">
              Because small improvements can create massive impact.
            </p>
          </div>

          <div class="cro-service-approach-grid">
            <article class="cro-service-approach-card">
              <span class="cro-service-approach-number">01</span>
              <h3>User behavior analysis</h3>
              <p>We use heatmaps and session recordings to understand what visitors actually do, not what we assume they do.</p>
            </article>

            <article class="cro-service-approach-card">
              <span class="cro-service-approach-number">02</span>
              <h3>Funnel analysis &amp; drop-off tracking</h3>
              <p>We identify where users lose momentum so optimization efforts target the moments that matter most.</p>
            </article>

            <article class="cro-service-approach-card">
              <span class="cro-service-approach-number">03</span>
              <h3>A/B testing &amp; experimentation</h3>
              <p>We validate changes through structured experiments instead of relying on assumptions or opinion.</p>
            </article>

            <article class="cro-service-approach-card">
              <span class="cro-service-approach-number">04</span>
              <h3>UX improvements</h3>
              <p>We remove friction across layout, hierarchy, interactions, and clarity so action feels easier.</p>
            </article>

            <article class="cro-service-approach-card">
              <span class="cro-service-approach-number">05</span>
              <h3>Conversion psychology</h3>
              <p>We strengthen messaging, trust, and decision-making cues that influence whether visitors act or leave.</p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="cro-service-optimize-section">
      <div class="container">
        <div class="cro-service-optimize-shell">
          <div class="cro-service-optimize-header">
            <span class="cro-service-section-eyebrow">What We Optimize</span>
            <h2>Every Element That Impacts Conversion</h2>
            <p>
              We optimize your entire digital experience, not just isolated screens or visuals.
            </p>
          </div>

          <div class="cro-service-optimize-grid">
            <span>Landing pages</span>
            <span>Product pages</span>
            <span>Checkout flows</span>
            <span>Forms &amp; lead funnels</span>
            <span>Navigation &amp; UX</span>
            <span>Call-to-action placement</span>
            <span>Page speed &amp; performance</span>
          </div>

          <p class="cro-service-optimize-note">
            Not just design&mdash;the entire conversion journey.
          </p>
        </div>
      </div>
    </section>

    <section class="cro-service-services-section">
      <div class="container">
        <div class="cro-service-services-header">
          <span class="cro-service-section-eyebrow">Our CRO Services</span>
          <h2>End-to-End Conversion Optimization</h2>
          <p>
            We combine analysis, testing, UX refinement, and funnel strategy to improve the full path from visit to conversion.
          </p>
        </div>

        <div class="cro-service-services-grid">
          <article class="cro-service-service-card">
            <span class="cro-service-service-number">01</span>
            <h3>CRO Audit &amp; Analysis</h3>
            <p>Deep analysis of your website to identify conversion gaps and opportunities.</p>
          </article>

          <article class="cro-service-service-card">
            <span class="cro-service-service-number">02</span>
            <h3>Funnel Optimization</h3>
            <p>Improving each stage of the user journey to reduce drop-offs.</p>
          </article>

          <article class="cro-service-service-card">
            <span class="cro-service-service-number">03</span>
            <h3>Landing Page Optimization</h3>
            <p>Designing high-converting pages for campaigns and ads.</p>
          </article>

          <article class="cro-service-service-card">
            <span class="cro-service-service-number">04</span>
            <h3>A/B Testing &amp; Experimentation</h3>
            <p>Testing variations to find what truly works.</p>
          </article>

          <article class="cro-service-service-card">
            <span class="cro-service-service-number">05</span>
            <h3>UX/UI Improvements</h3>
            <p>Enhancing usability to create seamless experiences.</p>
          </article>

          <article class="cro-service-service-card">
            <span class="cro-service-service-number">06</span>
            <h3>E-commerce Conversion Optimization</h3>
            <p>Improving product pages, cart flow, and checkout experience.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="cro-service-process-section">
      <div class="container">
        <div class="cro-service-process-header">
          <span class="cro-service-section-eyebrow">Our Process</span>
          <h2>How We Improve Your Conversions</h2>
          <p>
            We follow a premium but simple optimization flow designed to uncover leverage points, test improvements, and scale what works.
          </p>
        </div>

        <div class="cro-service-process-grid">
          <article class="cro-service-process-card">
            <span class="cro-service-process-number">01</span>
            <h3>Analyze &amp; Audit</h3>
            <p>Understand current performance and bottlenecks.</p>
          </article>

          <article class="cro-service-process-card">
            <span class="cro-service-process-number">02</span>
            <h3>Identify Opportunities</h3>
            <p>Pinpoint high-impact areas for improvement.</p>
          </article>

          <article class="cro-service-process-card">
            <span class="cro-service-process-number">03</span>
            <h3>Hypothesis &amp; Strategy</h3>
            <p>Create data-backed optimization strategies.</p>
          </article>

          <article class="cro-service-process-card">
            <span class="cro-service-process-number">04</span>
            <h3>Test &amp; Optimize</h3>
            <p>Run A/B tests and implement improvements.</p>
          </article>

          <article class="cro-service-process-card">
            <span class="cro-service-process-number">05</span>
            <h3>Measure &amp; Scale</h3>
            <p>Track results and scale winning strategies.</p>
          </article>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
