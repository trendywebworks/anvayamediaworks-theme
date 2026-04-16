<?php /* Template Name: Product Design */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/product-design.css?v=<?php echo($t); ?>">


  <main id="top" class="product-design-page">
    <section class="product-design-hero-section">
      <div class="container product-design-hero-grid">
        <div class="product-design-hero-copy">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1>Product Design</h1>
          <p class="product-design-hero-support">
            Design Products People Love to Use and Businesses Can Scale
          </p>
          <p class="product-design-hero-lead">
            Great products are not just built. They are designed with purpose, clarity, and user understanding.
          </p>
          <p class="product-design-hero-support">
            At Anvaya Media Works, we design digital products that are intuitive, engaging, and built for growth, combining strategy, UX, and visual design into one seamless experience.
          </p>

          <div class="product-design-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">
              Start Product Design
            </a>
          </div>
        </div>

        <div class="product-design-hero-visual" aria-hidden="true">
          <img
            class="product-design-hero-image"
            src="<?php bloginfo('template_directory'); ?>/assets/images/services/hero-product-design.png"
            alt=""
          >
        </div>
      </div>
    </section>

    <section class="product-design-definition-section">
      <div class="container">
        <div class="product-design-definition-shell">
          <div class="product-design-definition-copy">
            <span class="product-design-section-eyebrow">What Is Product Design?</span>
            <h2>Create products from idea to execution around usability, function, and growth.</h2>
            <p>
              Product Design is the process of creating user-centric digital products from idea to execution, focusing on usability, functionality, and business impact.
            </p>

            <ul class="product-design-definition-list">
              <li>User Experience (UX)</li>
              <li>User Interface (UI)</li>
              <li>Interaction Design</li>
              <li>Product Strategy</li>
            </ul>
          </div>

          <div class="product-design-goal-panel">
            <span class="product-design-section-eyebrow product-design-section-eyebrow-light">The Goal</span>
            <h3>Build products that users adopt, enjoy, and return to.</h3>

            <div class="product-design-goal-stack">
              <div class="product-design-goal-item">
                <strong>Adopt</strong>
                <span>Make the product easy to understand and easy to start using.</span>
              </div>
              <div class="product-design-goal-item">
                <strong>Enjoy</strong>
                <span>Create an experience that feels intuitive, clear, and visually coherent.</span>
              </div>
              <div class="product-design-goal-item">
                <strong>Return</strong>
                <span>Design the system so repeat use, engagement, and growth become natural.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="product-design-challenges-section">
      <div class="container">
        <div class="product-design-challenges-header">
          <span class="product-design-section-eyebrow">Challenges We Help You Solve</span>
          <h2>The friction that slows adoption, engagement, and product growth.</h2>
        </div>

        <div class="product-design-challenges-board">
          <article class="product-design-challenge-card">
            <span class="product-design-challenge-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 18H44V46H20V18Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M26 28H38" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M26 36H34" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>Users not understanding your product</h3>
          </article>

          <article class="product-design-challenge-card">
            <span class="product-design-challenge-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="32" cy="32" r="18" stroke="currentColor" stroke-width="3"/>
                <path d="M32 22V32L39 39" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            <h3>Low engagement or retention</h3>
          </article>

          <article class="product-design-challenge-card">
            <span class="product-design-challenge-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 18H30V30H18V18Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M34 34H46V46H34V34Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M30 24H40V34" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24 30V40H34" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            <h3>Complex or confusing interfaces</h3>
          </article>

          <article class="product-design-challenge-card">
            <span class="product-design-challenge-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 22H48" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M22 30H42" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M26 38H38" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <rect x="14" y="16" width="36" height="32" rx="6" stroke="currentColor" stroke-width="3"/>
              </svg>
            </span>
            <h3>Poor onboarding experience</h3>
          </article>

          <article class="product-design-challenge-card">
            <span class="product-design-challenge-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="12" y="18" width="12" height="28" rx="4" stroke="currentColor" stroke-width="3"/>
                <rect x="28" y="12" width="12" height="34" rx="4" stroke="currentColor" stroke-width="3"/>
                <rect x="44" y="24" width="8" height="22" rx="4" stroke="currentColor" stroke-width="3"/>
              </svg>
            </span>
            <h3>Difficulty scaling product features</h3>
          </article>
        </div>

        <p class="product-design-challenges-note">
          A well-designed product removes friction and drives growth.
        </p>
      </div>
    </section>

    <section class="product-design-approach-section">
      <div class="container">
        <div class="product-design-approach-shell">
          <div class="product-design-approach-intro">
            <span class="product-design-section-eyebrow">Our Product Design Approach</span>
            <h2>Discover, define, design, deliver.</h2>
            <p>
              We move from research and structure into interface design, testing, and systems, so the product stays coherent as it grows.
            </p>

            <div class="product-design-phase-list">
              <span>Discover</span>
              <span>Define</span>
              <span>Design</span>
              <span>Deliver</span>
            </div>
          </div>

          <div class="product-design-approach-grid">
            <article class="product-design-approach-card">
              <span class="product-design-approach-number">01</span>
              <h3>Discovery &amp; Research</h3>
              <p>Understanding users, business goals, and product vision.</p>
            </article>

            <article class="product-design-approach-card">
              <span class="product-design-approach-number">02</span>
              <h3>Product Strategy</h3>
              <p>Defining features, user flows, and product structure.</p>
            </article>

            <article class="product-design-approach-card">
              <span class="product-design-approach-number">03</span>
              <h3>UX Design</h3>
              <p>Creating wireframes, user journeys, and interaction flows.</p>
            </article>

            <article class="product-design-approach-card">
              <span class="product-design-approach-number">04</span>
              <h3>UI Design</h3>
              <p>Designing visually appealing, consistent, and modern interfaces.</p>
            </article>

            <article class="product-design-approach-card">
              <span class="product-design-approach-number">05</span>
              <h3>Prototyping &amp; Testing</h3>
              <p>Building interactive prototypes and validating usability.</p>
            </article>

            <article class="product-design-approach-card">
              <span class="product-design-approach-number">06</span>
              <h3>Design Systems</h3>
              <p>Creating scalable design systems for consistency and growth.</p>
            </article>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
