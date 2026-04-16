<?php /* Template Name: UI UX Approach */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/ui-ux-approach.css?v=<?php echo($t); ?>">


  <main id="top" class="uiux-page">
    <section class="uiux-hero-section">
      <div class="container uiux-hero-grid">
        <div class="uiux-hero-copy">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1>UI / UX Approach</h1>
          <p>A website is not a design project. It’s a decision environment.</p>
          <p>We design interfaces that reduce friction and guide behaviour.</p>
          <p>Every page answers three questions:</p>
          <ul>
            <li>- Where am I?</li>
            <li>- Why should I care?</li>
            <li>- What should I do next?</li>
          </ul>
          <p>If a user has to think too much, they leave. We design so they don’t.</p>


          <div class="uiux-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">
              Talk to Anvaya
            </a>
          </div>
        </div>

        <div class="uiux-hero-media">
          <img
            src="<?php bloginfo('template_directory'); ?>/assets/images/about/hero-ui-ux-approach.png"
            alt="Anvaya Media Works UI and UX approach hero visual"
          >
        </div>
      </div>
    </section>

    <section class="uiux-decision-section">
      <div class="container">
        <div class="uiux-decision-shell">
          <div class="uiux-decision-copy">
            <span class="uiux-section-eyebrow">Decision Environment</span>
            <h2>We design interfaces that reduce friction and guide behaviour.</h2>
            <p>
              Design is useful only when it helps people understand what they are seeing, why it matters,
              and how to move forward without confusion.
            </p>
          </div>

          <div class="uiux-decision-visuals">
            <figure class="uiux-decision-media">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/about/about-ui-ux-approach.webp"
                alt="Placeholder visual representing wireframes and interface planning"
              >
            </figure>
          </div>
        </div>
      </div>
    </section>

    <section class="uiux-questions-section">
      <div class="container">
        <div class="uiux-questions-header">
          <span class="uiux-section-eyebrow">Three Questions</span>
          <h2>Every page answers three questions.</h2>
        </div>

        <div class="uiux-questions-grid">
          <article class="uiux-question-card">
            <i class="lni lni-angellist icon-sm"></i>
            <h3>Where am I?</h3>
            <p>The interface should instantly orient the user to the page, the offer, and the context.</p>
          </article>

          <article class="uiux-question-card">
            <i class="lni lni-heart icon-sm"></i>
            <h3>Why should I care?</h3>
            <p>The value has to become obvious before attention fades or comparison starts pulling them away.</p>
          </article>

          <article class="uiux-question-card">
            <i class="lni lni-next-step-2 icon-sm"></i>
            <h3>What should I do next?</h3>
            <p>The next step should be visible, natural, and easy to take without hesitation.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="uiux-outcome-section">
      <div class="container">
        <blockquote class="uiux-outcome-quote">
          <p>If a user has to think too much, they leave.</p>
          <footer>We design so they don&rsquo;t.</footer>
        </blockquote>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
