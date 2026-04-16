<?php /* Template Name: Logo Design */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/logo-design.css?v=<?php echo($t); ?>">


  <main id="top" class="logo-design-page">
    <section class="logo-design-hero-section">
      <div class="container logo-design-hero-grid">
        <div class="logo-design-hero-copy">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1>Logo Design</h1>
          <p class="logo-design-hero-support">
            Design a Logo That Defines Your Brand
          </p>
          <p class="logo-design-hero-lead">
            Your logo is the face of your brand. It&rsquo;s the first thing people notice and the one thing they remember.
          </p>
          <p class="logo-design-hero-support">
            At Anvaya Media Works, we create logos that are not just visually appealing, but strategically designed to represent your brand&rsquo;s identity, values, and vision.
          </p>

          <div class="logo-design-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">
              Start Logo Design
            </a>
          </div>
        </div>

        <div class="logo-design-hero-media">
          <img
            src="<?php bloginfo('template_directory'); ?>/assets/images/services/hero-logo-design.png"
            alt="Anvaya Media Works logo design service visual"
          >
        </div>
      </div>
    </section>

    <section class="logo-design-importance-section">
      <div class="container">
        <div class="logo-design-importance-grid">
          <div class="logo-design-importance-media" aria-hidden="true">
            <img
              src="<?php bloginfo('template_directory'); ?>/assets/images/hero-dummy.svg"
              alt=""
            >
          </div>

          <div class="logo-design-importance-content">
            <div class="logo-design-importance-copy">
              <span class="logo-design-section-eyebrow">Why Logo Design Matters</span>
              <h2>A well-designed logo does more than look good. It builds recognition and trust.</h2>
              <p>
                A strong logo becomes the most memorable part of the brand system. It shapes first impressions, reinforces perception, and helps the brand stay recognizable wherever it appears.
              </p>
            </div>

            <ul class="logo-design-benefit-list">
              <li>Creates a strong first impression</li>
              <li>Builds brand recognition and recall</li>
              <li>Communicates your brand personality</li>
              <li>Differentiates you from competitors</li>
              <li>Establishes credibility and professionalism</li>
            </ul>

            <p class="logo-design-importance-note">
              A great logo is simple, memorable, and timeless.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="logo-design-problems-section">
      <div class="container">
        <div class="logo-design-problems-header">
          <span class="logo-design-section-eyebrow">Common Logo Problems We Fix</span>
          <h2>When the logo is weak, generic, or inconsistent, the whole brand feels less credible.</h2>
        </div>

        <div class="logo-design-problems-grid">
          <article class="logo-design-problem-card">
            <span class="logo-design-problem-number">01</span>
            <h3>Generic or overused designs</h3>
          </article>

          <article class="logo-design-problem-card">
            <span class="logo-design-problem-number">02</span>
            <h3>Poor scalability across platforms</h3>
          </article>

          <article class="logo-design-problem-card">
            <span class="logo-design-problem-number">03</span>
            <h3>Lack of brand meaning or strategy</h3>
          </article>

          <article class="logo-design-problem-card">
            <span class="logo-design-problem-number">04</span>
            <h3>Inconsistent usage and variations</h3>
          </article>

          <article class="logo-design-problem-card">
            <span class="logo-design-problem-number">05</span>
            <h3>Outdated or unprofessional visuals</h3>
          </article>
        </div>

        <p class="logo-design-problems-note">
          Your logo should work everywhere, digitally and physically.
        </p>
      </div>
    </section>

    <section class="logo-design-approach-section">
      <div class="container">
        <div class="logo-design-approach-header">
          <div>
            <span class="logo-design-section-eyebrow">Our Logo Design Approach</span>
            <h2>Five steps that turn brand understanding into a logo system ready for every use case.</h2>
          </div>
          <p>Discover, concept, design, refine, and deliver with clarity from first sketch to final files.</p>
        </div>

        <div class="logo-design-approach-grid">
          <article class="logo-design-approach-card">
            <span class="logo-design-approach-number">01</span>
            <h3>Brand Discovery</h3>
            <p>Understanding your business, audience, and positioning.</p>
          </article>

          <article class="logo-design-approach-card">
            <span class="logo-design-approach-number">02</span>
            <h3>Concept Exploration</h3>
            <p>Creating multiple creative directions and ideas.</p>
          </article>

          <article class="logo-design-approach-card">
            <span class="logo-design-approach-number">03</span>
            <h3>Logo Design Execution</h3>
            <p>Designing unique, meaningful, and scalable logo concepts.</p>
          </article>

          <article class="logo-design-approach-card">
            <span class="logo-design-approach-number">04</span>
            <h3>Refinement &amp; Feedback</h3>
            <p>Iterating based on feedback to finalize the perfect design.</p>
          </article>

          <article class="logo-design-approach-card">
            <span class="logo-design-approach-number">05</span>
            <h3>Final Delivery</h3>
            <p>Providing all logo files and variations for different uses.</p>
          </article>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
