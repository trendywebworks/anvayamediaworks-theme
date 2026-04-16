<?php /* Template Name: Email Marketing */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/email-marketing.css?v=<?php echo($t); ?>">

  <main id="top" class="email-marketing-page">
    <section class="email-marketing-hero-section">
      <div class="container email-marketing-hero-grid">
        <div class="email-marketing-hero-copy">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1>Email Marketing</h1>
          <p class="email-marketing-hero-tagline">
            Turn Emails Into Revenue &mdash; Not Just Messages
          </p>
          <p class="email-marketing-hero-lead">
            We design and execute email marketing strategies that nurture leads, engage customers, and drive consistent revenue.
          </p>
          <p class="email-marketing-hero-support">
            From automation to personalization, every email is crafted to perform.
          </p>

          <div class="email-marketing-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">
              Get Free Email Audit
            </a>
            <a class="btn btn-amw btn-amw-secondary" href="<?php echo home_url(); ?>/contact/">
              Start Growing with Email
            </a>
          </div>
        </div>

        <div class="email-marketing-hero-visual" aria-hidden="true">
          <img
            class="email-marketing-hero-image"
            src="<?php bloginfo('template_directory'); ?>/assets/images/services/hero-email-marketing.png"
            alt=""
          >
        </div>
      </div>
    </section>

    <section class="email-marketing-idea-section">
      <div class="container">
        <div class="email-marketing-idea-shell">
          <div class="email-marketing-idea-copy">
            <span class="email-marketing-section-eyebrow">Big Idea</span>
            <h2>The Highest ROI Channel You&rsquo;re Underutilizing</h2>
            <p class="email-marketing-idea-body">
              Email marketing isn&rsquo;t dead&mdash;it&rsquo;s one of the most powerful growth channels.
            </p>
            <p class="email-marketing-idea-note">
              Your audience already exists. You just need to engage them effectively.
            </p>
          </div>

          <div class="email-marketing-idea-panel">
            <span class="email-marketing-section-eyebrow email-marketing-section-eyebrow-light">When Done Right</span>
            <div class="email-marketing-idea-list">
              <div class="email-marketing-idea-item">
                <strong>Relationships</strong>
                <span>Build long-term customer relationships.</span>
              </div>
              <div class="email-marketing-idea-item">
                <strong>Repeat Revenue</strong>
                <span>Drive repeat purchases and more frequent engagement.</span>
              </div>
              <div class="email-marketing-idea-item">
                <strong>LTV Growth</strong>
                <span>Increase customer lifetime value over time.</span>
              </div>
              <div class="email-marketing-idea-item">
                <strong>Lower Dependency</strong>
                <span>Reduce dependency on paid ads for every sale.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="email-marketing-problem-section">
      <div class="container">
        <div class="email-marketing-problem-header">
          <span class="email-marketing-section-eyebrow">The Problem</span>
          <h2>Why Most Email Marketing Fails</h2>
          <p>
            Sending emails is easy. Building a revenue-generating email system is not.
          </p>
        </div>

        <div class="email-marketing-problem-grid">
          <article class="email-marketing-problem-card">
            <span class="email-marketing-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 20H50V44H14V20Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M14 24L32 36L50 24" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M22 28H28" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>Generic, non-personalized emails</h3>
          </article>

          <article class="email-marketing-problem-card">
            <span class="email-marketing-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 50H50" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M20 42V30" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M32 42V24" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M44 42V34" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M18 18L28 28L38 22L50 32" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            <h3>Poor open and click rates</h3>
          </article>

          <article class="email-marketing-problem-card">
            <span class="email-marketing-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="16" y="16" width="12" height="12" rx="2" stroke="currentColor" stroke-width="3"/>
                <rect x="36" y="16" width="12" height="12" rx="2" stroke="currentColor" stroke-width="3"/>
                <rect x="16" y="36" width="12" height="12" rx="2" stroke="currentColor" stroke-width="3"/>
                <path d="M28 22H36" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M22 28V36" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M42 28V36L28 42" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            <h3>No automation workflows</h3>
          </article>

          <article class="email-marketing-problem-card">
            <span class="email-marketing-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 18H46V46H18V18Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M24 26H40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M24 34H34" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M40 22L48 30" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>Weak subject lines and content</h3>
          </article>

          <article class="email-marketing-problem-card">
            <span class="email-marketing-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="20" r="4" stroke="currentColor" stroke-width="3"/>
                <circle cx="44" cy="20" r="4" stroke="currentColor" stroke-width="3"/>
                <circle cx="32" cy="44" r="4" stroke="currentColor" stroke-width="3"/>
                <path d="M24 20H40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M22.5 23L29.5 40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M41.5 23L34.5 40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>No segmentation strategy</h3>
          </article>
        </div>
      </div>
    </section>

    <section class="email-marketing-approach-section">
      <div class="container">
        <div class="email-marketing-approach-shell">
          <div class="email-marketing-approach-intro">
            <span class="email-marketing-section-eyebrow email-marketing-section-eyebrow-light">Our Approach</span>
            <h2>A Data-Driven Email Marketing Strategy</h2>
            <p>
              At Anvaya Media Works, we treat email as a performance channel, not just communication.
            </p>
            <p class="email-marketing-approach-note">
              Because the right message at the right time drives results.
            </p>
          </div>

          <div class="email-marketing-approach-grid">
            <article class="email-marketing-approach-card">
              <span class="email-marketing-approach-number">01</span>
              <h3>Audience segmentation &amp; targeting</h3>
              <p>We group users based on behavior, context, and value so every message feels more relevant.</p>
            </article>

            <article class="email-marketing-approach-card">
              <span class="email-marketing-approach-number">02</span>
              <h3>Behavior-based automation</h3>
              <p>We trigger journeys based on actions and lifecycle stage so emails arrive when they matter most.</p>
            </article>

            <article class="email-marketing-approach-card">
              <span class="email-marketing-approach-number">03</span>
              <h3>Conversion-focused email design</h3>
              <p>We shape layout, hierarchy, and messaging to make each campaign easier to open, read, and act on.</p>
            </article>

            <article class="email-marketing-approach-card">
              <span class="email-marketing-approach-number">04</span>
              <h3>Personalization strategies</h3>
              <p>We tailor subject lines, content, and offers so communication feels timely rather than generic.</p>
            </article>

            <article class="email-marketing-approach-card">
              <span class="email-marketing-approach-number">05</span>
              <h3>Continuous testing &amp; optimization</h3>
              <p>We improve performance through structured testing and ongoing refinement of the lifecycle system.</p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="email-marketing-build-section">
      <div class="container">
        <div class="email-marketing-build-shell">
          <div class="email-marketing-build-header">
            <span class="email-marketing-section-eyebrow">What We Build</span>
            <h2>Complete Email Marketing Ecosystem</h2>
            <p>
              We create a full email system across the lifecycle, not just one-off campaigns.
            </p>
          </div>

          <div class="email-marketing-build-grid">
            <span>Welcome email sequences</span>
            <span>Lead nurturing workflows</span>
            <span>Abandoned cart recovery</span>
            <span>Promotional campaigns</span>
            <span>Newsletter strategies</span>
            <span>Re-engagement campaigns</span>
          </div>

          <p class="email-marketing-build-note">
            Not just emails&mdash;a complete lifecycle strategy.
          </p>
        </div>
      </div>
    </section>

    <section class="email-marketing-services-section">
      <div class="container">
        <div class="email-marketing-services-header">
          <span class="email-marketing-section-eyebrow">Our Email Marketing Services</span>
          <h2>End-to-End Email Marketing Solutions</h2>
          <p>
            We combine strategy, automation, segmentation, design, and integration into one revenue-focused email system.
          </p>
        </div>

        <div class="email-marketing-services-grid">
          <article class="email-marketing-service-card">
            <span class="email-marketing-service-number">01</span>
            <h3>Email Strategy &amp; Planning</h3>
            <p>Creating a roadmap aligned with your business goals.</p>
          </article>

          <article class="email-marketing-service-card">
            <span class="email-marketing-service-number">02</span>
            <h3>Email Campaign Design &amp; Copywriting</h3>
            <p>Visually appealing and high-converting email content.</p>
          </article>

          <article class="email-marketing-service-card">
            <span class="email-marketing-service-number">03</span>
            <h3>Marketing Automation Setup</h3>
            <p>Setting up workflows for lead nurturing and retention.</p>
          </article>

          <article class="email-marketing-service-card">
            <span class="email-marketing-service-number">04</span>
            <h3>Audience Segmentation</h3>
            <p>Targeting users based on behavior and preferences.</p>
          </article>

          <article class="email-marketing-service-card">
            <span class="email-marketing-service-number">05</span>
            <h3>A/B Testing &amp; Optimization</h3>
            <p>Improving open rates, CTR, and conversions.</p>
          </article>

          <article class="email-marketing-service-card">
            <span class="email-marketing-service-number">06</span>
            <h3>CRM &amp; Tool Integration</h3>
            <p>Seamless integration with platforms like Mailchimp, HubSpot, and related tools.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="email-marketing-process-section">
      <div class="container">
        <div class="email-marketing-process-header">
          <span class="email-marketing-section-eyebrow">Process</span>
          <h2>How We Drive Results Through Email</h2>
          <p>
            We build lifecycle systems that keep improving as the audience, campaigns, and automation flows mature.
          </p>
        </div>

        <div class="email-marketing-process-grid">
          <article class="email-marketing-process-card">
            <span class="email-marketing-process-number">01</span>
            <h3>Audience Analysis</h3>
            <p>Understand your users and segments.</p>
          </article>

          <article class="email-marketing-process-card">
            <span class="email-marketing-process-number">02</span>
            <h3>Strategy &amp; Planning</h3>
            <p>Define campaigns and automation workflows.</p>
          </article>

          <article class="email-marketing-process-card">
            <span class="email-marketing-process-number">03</span>
            <h3>Design &amp; Execution</h3>
            <p>Create and launch high-quality emails.</p>
          </article>

          <article class="email-marketing-process-card">
            <span class="email-marketing-process-number">04</span>
            <h3>Test &amp; Optimize</h3>
            <p>Improve performance through A/B testing.</p>
          </article>

          <article class="email-marketing-process-card">
            <span class="email-marketing-process-number">05</span>
            <h3>Scale &amp; Automate</h3>
            <p>Build long-term systems for growth.</p>
          </article>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
