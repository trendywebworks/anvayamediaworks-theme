<?php /* Template Name: Design Audit */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/design-audit.css?v=<?php echo($t); ?>">


  <main id="top" class="design-audit-page">
    <section class="design-audit-hero-section">
      <div class="container design-audit-hero-grid">
        <div class="design-audit-hero-copy">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1>Design Audit</h1>
          <p class="design-audit-hero-support">
            Identify What&rsquo;s Holding Your Design Back
          </p>
          <p class="design-audit-hero-lead">
            Great design is not just about aesthetics. It&rsquo;s about performance, clarity, and consistency.
          </p>
          <p class="design-audit-hero-support">
            At Anvaya Media Works, our Design Audit service evaluates your website, app, and brand visuals to uncover gaps, inconsistencies, and missed opportunities so you can improve user experience and drive better results.
          </p>

          <div class="design-audit-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">
              Request a Design Audit
            </a>
          </div>
        </div>

        <div class="design-audit-hero-visual" aria-hidden="true">
          <img
            src="<?php bloginfo('template_directory'); ?>/assets/images/services/hero-design-audit.png"
            alt=""
          >
        </div>
      </div>
    </section>

    <section class="design-audit-impact-section">
      <div class="container">
        <div class="design-audit-impact-shell">
          <div class="design-audit-impact-intro">
            <span class="design-audit-section-eyebrow">Why A Design Audit Matters</span>
            <h2>Even good-looking designs can fail if they don&rsquo;t perform.</h2>
            <p>
              We look past surface aesthetics and examine whether design decisions are actually supporting user experience, brand clarity, and business outcomes.
            </p>
          </div>

          <div class="design-audit-impact-list">
            <article class="design-audit-impact-item">
              <div class="design-audit-impact-icon" aria-hidden="true">
                <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18 44L28 34L36 40L48 24" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M40 24H48V32" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <div>
                <h3>Improve user experience and usability</h3>
                <p>Find the interaction issues that interrupt flow and make people work harder than they should.</p>
              </div>
            </article>

            <article class="design-audit-impact-item">
              <div class="design-audit-impact-icon" aria-hidden="true">
                <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16 44L26 34L34 40L48 24" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M42 24H48V30" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M18 18H30" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                </svg>
              </div>
              <div>
                <h3>Increase conversion rates and engagement</h3>
                <p>Spot the design choices that weaken calls to action, clarity, and momentum toward enquiry or sale.</p>
              </div>
            </article>

            <article class="design-audit-impact-item">
              <div class="design-audit-impact-icon" aria-hidden="true">
                <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="12" y="18" width="12" height="28" rx="4" stroke="currentColor" stroke-width="3"/>
                  <rect x="28" y="12" width="12" height="34" rx="4" stroke="currentColor" stroke-width="3"/>
                  <rect x="44" y="24" width="8" height="22" rx="4" stroke="currentColor" stroke-width="3"/>
                </svg>
              </div>
              <div>
                <h3>Ensure brand consistency across all touchpoints</h3>
                <p>Check whether your design language actually holds together across pages, screens, and marketing assets.</p>
              </div>
            </article>

            <article class="design-audit-impact-item">
              <div class="design-audit-impact-icon" aria-hidden="true">
                <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="24" cy="24" r="9" stroke="currentColor" stroke-width="3"/>
                  <path d="M32 32L44 44" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                  <path d="M24 20V28" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                  <path d="M20 24H28" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                </svg>
              </div>
              <div>
                <h3>Identify design flaws and friction points</h3>
                <p>Uncover the small visual and structural issues that quietly damage trust, readability, and ease of use.</p>
              </div>
            </article>

            <article class="design-audit-impact-item">
              <div class="design-audit-impact-icon" aria-hidden="true">
                <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18 46L28 36L36 42L48 26" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M18 18V46H46" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <div>
                <h3>Align design with business and marketing goals</h3>
                <p>Make sure design is working as a system that supports positioning, campaigns, and measurable growth.</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="design-audit-scope-section">
      <div class="container">
        <div class="design-audit-scope-board">
          <div class="design-audit-scope-header">
            <span class="design-audit-section-eyebrow">What We Audit</span>
            <h2>Five key areas we review across design, usability, and performance.</h2>
          </div>

          <div class="design-audit-scope-list">
            <article class="design-audit-scope-item">
              <span class="design-audit-scope-number">01</span>
              <div>
                <h3>UI/UX Design</h3>
                <p>We evaluate layout, navigation, usability, and overall user journey.</p>
              </div>
            </article>

            <article class="design-audit-scope-item">
              <span class="design-audit-scope-number">02</span>
              <div>
                <h3>Visual Design Consistency</h3>
                <p>We check typography, colors, spacing, and brand alignment across platforms.</p>
              </div>
            </article>

            <article class="design-audit-scope-item">
              <span class="design-audit-scope-number">03</span>
              <div>
                <h3>Website Performance &amp; Responsiveness</h3>
                <p>We analyze how your design behaves across devices and screen sizes.</p>
              </div>
            </article>

            <article class="design-audit-scope-item">
              <span class="design-audit-scope-number">04</span>
              <div>
                <h3>Conversion Optimization</h3>
                <p>We identify design issues that may be affecting leads, sales, or engagement.</p>
              </div>
            </article>

            <article class="design-audit-scope-item">
              <span class="design-audit-scope-number">05</span>
              <div>
                <h3>Accessibility &amp; Usability</h3>
                <p>We ensure your design is inclusive, readable, and easy to interact with.</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="design-audit-process-section">
      <div class="container">
        <div class="design-audit-process-header">
          <div>
            <span class="design-audit-section-eyebrow">Our Design Audit Process</span>
            <h2>Five steps that turn observations into prioritized action.</h2>
          </div>
          <p>
            The goal is not to hand over abstract feedback. We structure the audit so the output is practical, focused, and aligned with what the business actually needs next.
          </p>
        </div>

        <div class="design-audit-process-grid">
          <article class="design-audit-process-card">
            <span class="design-audit-process-step">Step 1</span>
            <h3>Discovery</h3>
            <p>Understanding your business goals, target audience, and current design assets.</p>
          </article>

          <article class="design-audit-process-card">
            <span class="design-audit-process-step">Step 2</span>
            <h3>Evaluation</h3>
            <p>Detailed analysis of your website, app, or brand materials.</p>
          </article>

          <article class="design-audit-process-card">
            <span class="design-audit-process-step">Step 3</span>
            <h3>Issue Identification</h3>
            <p>Pinpointing usability gaps, inconsistencies, and performance blockers.</p>
          </article>

          <article class="design-audit-process-card">
            <span class="design-audit-process-step">Step 4</span>
            <h3>Recommendations</h3>
            <p>Providing actionable, prioritized improvements.</p>
          </article>

          <article class="design-audit-process-card">
            <span class="design-audit-process-step">Step 5</span>
            <h3>Strategy Alignment</h3>
            <p>Ensuring design supports your marketing and business objectives.</p>
          </article>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
