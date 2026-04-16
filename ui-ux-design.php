<?php /* Template Name: UI UX Design */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/ui-ux-design.css?v=<?php echo($t); ?>">


  <main id="top" class="uiux-design-page">
    <section class="uiux-design-hero-section">
      <div class="container uiux-design-hero-grid">
        <div class="uiux-design-hero-copy">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1>UI UX Design</h1>
          <p class="uiux-design-hero-support">
            Design Experiences That Feel Effortless and Convert Better
          </p>
          <p class="uiux-design-hero-lead">
            Users do not just use products. They experience them.
          </p>
          <p class="uiux-design-hero-support">
            At Anvaya Media Works, we design intuitive, engaging, and conversion-focused interfaces that align user needs with business goals, so every interaction feels natural and drives action.
          </p>

          <div class="uiux-design-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">
              Start UI UX Design
            </a>
          </div>
        </div>

        <div class="uiux-design-hero-visual" aria-hidden="true">
          <img
            class="uiux-design-hero-image"
            src="<?php bloginfo('template_directory'); ?>/assets/images/services/hero-ui-ux-design.png"
            alt=""
          >
        </div>
      </div>
    </section>

    <section class="uiux-design-clarity-section">
      <div class="container">
        <div class="uiux-design-clarity-header">
          <span class="uiux-design-section-eyebrow">UI Vs UX</span>
          <h2>Great products need both beautiful design and seamless experience.</h2>
        </div>

        <div class="uiux-design-clarity-grid">
          <article class="uiux-design-clarity-card">
            <span class="uiux-design-clarity-label">UI</span>
            <h3>User Interface</h3>
            <p>How your product looks.</p>
          </article>

          <article class="uiux-design-clarity-card">
            <span class="uiux-design-clarity-label">UX</span>
            <h3>User Experience</h3>
            <p>How your product works.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="uiux-design-thinking-section">
      <div class="container">
        <div class="uiux-design-thinking-shell">
          <div class="uiux-design-thinking-copy">
            <span class="uiux-design-section-eyebrow">Think Like Your Users</span>
            <h2>We understand expectations, struggle points, and motivation before we design.</h2>
            <p>
              Instead of jumping straight into visuals, we start with what users expect, what slows them down, and what motivates them to take action.
            </p>
            <p>
              This ensures your design is not just visually appealing, but purpose-driven and effective.
            </p>
          </div>

          <div class="uiux-design-thinking-points">
            <article class="uiux-design-thinking-item">
              <span class="uiux-design-thinking-number">01</span>
              <h3>What users expect</h3>
            </article>

            <article class="uiux-design-thinking-item">
              <span class="uiux-design-thinking-number">02</span>
              <h3>What they struggle with</h3>
            </article>

            <article class="uiux-design-thinking-item">
              <span class="uiux-design-thinking-number">03</span>
              <h3>What motivates them to take action</h3>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="uiux-design-system-section">
      <div class="container">
        <div class="uiux-design-system-shell">
          <div class="uiux-design-system-intro">
            <span class="uiux-design-section-eyebrow">Our UI UX Design System</span>
            <h2>Research, structure, design, optimize.</h2>
            <p>
              We design systems that move from insight into structure, interface quality, testing, and iteration, so the experience keeps improving as the product grows.
            </p>

            <div class="uiux-design-phase-list">
              <span>Research</span>
              <span>Structure</span>
              <span>Design</span>
              <span>Optimize</span>
            </div>
          </div>

          <div class="uiux-design-system-grid">
            <article class="uiux-design-system-card">
              <span class="uiux-design-system-number">01</span>
              <h3>UX Research &amp; Insights</h3>
              <p>Understanding user behavior, needs, and pain points.</p>
            </article>

            <article class="uiux-design-system-card">
              <span class="uiux-design-system-number">02</span>
              <h3>Information Architecture</h3>
              <p>Structuring content and flows for clarity and ease of navigation.</p>
            </article>

            <article class="uiux-design-system-card">
              <span class="uiux-design-system-number">03</span>
              <h3>Wireframing (UX Blueprint)</h3>
              <p>Creating low-fidelity layouts to define user journeys and interactions.</p>
            </article>

            <article class="uiux-design-system-card">
              <span class="uiux-design-system-number">04</span>
              <h3>UI Design (Visual Layer)</h3>
              <p>Designing modern, consistent, and brand-aligned interfaces.</p>
            </article>

            <article class="uiux-design-system-card">
              <span class="uiux-design-system-number">05</span>
              <h3>Prototyping &amp; Testing</h3>
              <p>Validating designs through interactive prototypes and feedback.</p>
            </article>

            <article class="uiux-design-system-card">
              <span class="uiux-design-system-number">06</span>
              <h3>Optimization &amp; Iteration</h3>
              <p>Continuously improving based on data and user behavior.</p>
            </article>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
