<?php /* Template Name: Brand Style Guides */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/brand-style-guides.css?v=<?php echo($t); ?>">


  <main id="top" class="brand-style-guides-page">
    <section class="brand-style-guides-hero-section">
      <div class="container brand-style-guides-hero-grid">
        <div class="brand-style-guides-hero-copy">
          
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1>Brand Style Guides</h1>
          <p class="brand-style-guides-hero-support">
            Bring Consistency to Every Brand Interaction
          </p>
          <p class="brand-style-guides-hero-lead">
            A strong brand is not just created. It&rsquo;s consistently maintained.
          </p>
          <p class="brand-style-guides-hero-support">
            At Anvaya Media Works, we develop comprehensive Brand Style Guides that ensure your brand looks, feels, and communicates the same across every platform, team, and touchpoint.
          </p>

          <div class="brand-style-guides-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">
              Start Brand Style Guides
            </a>
          </div>
        </div>

        <div class="brand-style-guides-hero-media">
          <img
            src="<?php bloginfo('template_directory'); ?>/assets/images/services/hero-brand-style-guides.png"
            alt="Anvaya Media Works brand style guides service visual"
          >
        </div>
      </div>
    </section>

    <section class="brand-style-guides-importance-section">
      <div class="container">
        <div class="brand-style-guides-importance-grid">
          <div class="brand-style-guides-importance-media" aria-hidden="true">
            <img
              src="<?php bloginfo('template_directory'); ?>/assets/images/services/services-brand-style-guides.webp"
              alt=""
            >
          </div>

          <div class="brand-style-guides-importance-content">
            <div class="brand-style-guides-importance-copy">
              <span class="brand-style-guides-section-eyebrow">Why Brand Style Guides Matter</span>
              <h2>Consistency is what turns a brand into a recognizable identity.</h2>
              <p>
                Without guidelines, brands become inconsistent over time. A strong brand style guide makes it easier to protect the identity as more people, channels, and campaigns get involved.
              </p>
            </div>

            <ul class="brand-style-guides-benefit-list">
              <li>Maintain visual and messaging consistency</li>
              <li>Ensure alignment across teams and vendors</li>
              <li>Build stronger brand recognition and trust</li>
              <li>Scale your marketing without confusion</li>
              <li>Save time on repetitive design decisions</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="brand-style-guides-elements-section">
      <div class="container">
        <div class="brand-style-guides-elements-header">
          <span class="brand-style-guides-section-eyebrow">What Goes Into a Brand Style Guide?</span>
          <h2>The rules and references that keep the brand clear wherever it shows up.</h2>
        </div>

        <div class="brand-style-guides-elements-grid">
          <article class="brand-style-guides-element-card">
            <span class="brand-style-guides-element-number">01</span>
            <h3>Logo Usage</h3>
            <p>Clear rules on logo variations, spacing, sizing, and incorrect usage.</p>
          </article>

          <article class="brand-style-guides-element-card">
            <span class="brand-style-guides-element-number">02</span>
            <h3>Color System</h3>
            <p>Primary, secondary, and accent colors with HEX, RGB, and CMYK codes.</p>
          </article>

          <article class="brand-style-guides-element-card">
            <span class="brand-style-guides-element-number">03</span>
            <h3>Typography</h3>
            <p>Font families, hierarchy, and usage guidelines for consistency.</p>
          </article>

          <article class="brand-style-guides-element-card">
            <span class="brand-style-guides-element-number">04</span>
            <h3>Visual Elements</h3>
            <p>Icons, imagery style, patterns, and graphic elements.</p>
          </article>

          <article class="brand-style-guides-element-card">
            <span class="brand-style-guides-element-number">05</span>
            <h3>Brand Voice &amp; Tone</h3>
            <p>How your brand communicates, including language, tone, and messaging style.</p>
          </article>

          <article class="brand-style-guides-element-card">
            <span class="brand-style-guides-element-number">06</span>
            <h3>Layout &amp; Applications</h3>
            <p>Guidelines for social media, website, print, and marketing materials.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="brand-style-guides-approach-section">
      <div class="container">
        <div class="brand-style-guides-approach-header">
          <div>
            <span class="brand-style-guides-section-eyebrow">Our Approach</span>
            <h2>Four steps that turn brand decisions into a usable system.</h2>
          </div>
          <p>Define, structure, document, and scale the brand with clarity.</p>
        </div>

        <div class="brand-style-guides-approach-grid">
          <article class="brand-style-guides-approach-card">
            <span class="brand-style-guides-approach-number">01</span>
            <h3>Define</h3>
            <p>We align your visual identity and brand elements.</p>
          </article>

          <article class="brand-style-guides-approach-card">
            <span class="brand-style-guides-approach-number">02</span>
            <h3>Structure</h3>
            <p>We organize all elements into a clear, usable system.</p>
          </article>

          <article class="brand-style-guides-approach-card">
            <span class="brand-style-guides-approach-number">03</span>
            <h3>Document</h3>
            <p>We create a detailed, easy-to-follow brand guideline document.</p>
          </article>

          <article class="brand-style-guides-approach-card">
            <span class="brand-style-guides-approach-number">04</span>
            <h3>Scale</h3>
            <p>We ensure your brand can be applied consistently across all platforms.</p>
          </article>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
