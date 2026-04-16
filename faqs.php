<?php /* Template Name: FAQs */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/faqs.css?v=<?php echo($t); ?>">


  <main id="top" class="faqs-page">
    <section class="faqs-hero-section">
      <div class="container">
        <div class="faqs-hero-shell">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1>FAQs</h1>
        </div>
      </div>
    </section>

    <section class="faqs-list-section">
      <div class="container">
        <div class="faqs-shell">
          <div class="faqs-intro">
            <span class="faqs-section-eyebrow">Frequently Asked Questions</span>
            <h2>Clear answers about how AMW thinks, works, and who it is built for.</h2>
            <p>
              A straightforward view of what makes our approach different, how we think about channels,
              what early progress looks like, and which businesses we are best suited to support.
            </p>
          </div>

          <div class="faqs-list" aria-label="Frequently asked questions">
            <article class="faqs-item">
              <span class="faqs-item-number">01</span>

              <div class="faqs-item-copy">
                <h2>What makes AMW different?</h2>
                <p>We don&rsquo;t operate in silos. We build interconnected brand systems.</p>
              </div>

              <span class="faqs-item-icon" aria-hidden="true">
                <svg viewBox="0 0 32 32" role="presentation" focusable="false">
                  <path d="M10 12.5h12"></path>
                  <path d="M10 16h8"></path>
                  <path d="M10 19.5h10"></path>
                </svg>
              </span>
            </article>

            <article class="faqs-item">
              <span class="faqs-item-number">02</span>

              <div class="faqs-item-copy">
                <h2>Do you only focus on digital?</h2>
                <p>No. We focus on how your brand behaves across touchpoints &mdash; digital is just one part.</p>
              </div>

              <span class="faqs-item-icon" aria-hidden="true">
                <svg viewBox="0 0 32 32" role="presentation" focusable="false">
                  <path d="M10 12.5h12"></path>
                  <path d="M10 16h8"></path>
                  <path d="M10 19.5h10"></path>
                </svg>
              </span>
            </article>

            <article class="faqs-item">
              <span class="faqs-item-number">03</span>

              <div class="faqs-item-copy">
                <h2>How soon can we see results?</h2>
                <p>Clarity shows early. Consistent growth follows structure.</p>
              </div>

              <span class="faqs-item-icon" aria-hidden="true">
                <svg viewBox="0 0 32 32" role="presentation" focusable="false">
                  <path d="M10 12.5h12"></path>
                  <path d="M10 16h8"></path>
                  <path d="M10 19.5h10"></path>
                </svg>
              </span>
            </article>

            <article class="faqs-item">
              <span class="faqs-item-number">04</span>

              <div class="faqs-item-copy">
                <h2>Who is this for?</h2>
                <p>Businesses that are serious about building a brand, not just running marketing.</p>
              </div>

              <span class="faqs-item-icon" aria-hidden="true">
                <svg viewBox="0 0 32 32" role="presentation" focusable="false">
                  <path d="M10 12.5h12"></path>
                  <path d="M10 16h8"></path>
                  <path d="M10 19.5h10"></path>
                </svg>
              </span>
            </article>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
