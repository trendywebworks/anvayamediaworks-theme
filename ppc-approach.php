<?php /* Template Name: PPC Approach */ get_header(); ?>
<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/ppc-approach.css?v=<?php echo($t); ?>">


  <main id="top" class="ppc-page">
    <section class="ppc-hero-section">
      <div class="container ppc-hero-grid">
        <div class="ppc-hero-copy">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1>PPC Approach</h1>
          <p>Running ads is easy. Creating outcomes is not.</p>
          <p>We don’t treat PPC as a channel. We treat it as an extension of your brand system.</p>
          <p>Every campaign is backed by:</p>
          <ul>
            <li>- Clear positioning</li>
            <li>- Defined audience intent</li>
            <li>- Structured landing experience</li>
          </ul>
          <p>So we’re not just driving clicks. We’re driving decisions.</p>


          <div class="ppc-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">
              Talk to Anvaya
            </a>
          </div>
        </div>

        <div class="ppc-hero-media">
          <img
            src="<?php bloginfo('template_directory'); ?>/assets/images/about/hero-ppc-approach.png"
            alt="Anvaya Media Works PPC approach hero visual"
          >
        </div>
      </div>
    </section>

    <section class="ppc-system-section">
      <div class="container">
        <div class="ppc-system-shell">
          <div class="ppc-system-intro">
            <span class="ppc-section-eyebrow">Brand System</span>
            <h2>We don&rsquo;t isolate paid media from the brand experience around it.</h2>
            <p>
              Ads perform better when they sound like the brand, reflect real audience motives, and connect
              to a landing experience built for action rather than drop-off.
            </p>

          </div>

          <div class="ppc-foundations-board">
            <article class="ppc-foundation-card">
              <i class="lni lni-select-cursor-1 icon-sm"></i>
              <div class="ppc-foundation-copy">
                <h3>Clear positioning</h3>
                <p>The offer has to be framed in a way people can understand instantly and remember quickly.</p>
              </div>
            </article>

            <article class="ppc-foundation-card">
              <i class="lni lni-target-user icon-sm"></i>
              <div class="ppc-foundation-copy">
                <h3>Defined audience intent</h3>
                <p>We align campaigns to what people are trying to solve, compare, or decide in that moment.</p>
              </div>
            </article>

            <article class="ppc-foundation-card">
              <i class="lni lni-location-arrow-right icon-sm"></i>
              <div class="ppc-foundation-copy">
                <h3>Structured landing experience</h3>
                <p>The landing page has to pick up the conversation naturally and guide the next decision without friction.</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="ppc-outcome-section">
      <div class="container">
        <blockquote class="ppc-outcome-quote">
          <p>So we&rsquo;re not just driving clicks.</p>
          <footer>We&rsquo;re driving decisions.</footer>
        </blockquote>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
