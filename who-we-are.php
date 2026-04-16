<?php /* Template Name: Who We Are */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/about.css?v=<?php echo($t); ?>">

  <main id="top" class="about-page">
    <section class="about-hero-section">
      <div class="container">
        <div class="about-hero-copy">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1 class="about-hero-title">Who We Are</h1>

          <div class="about-hero-text">
            <p>We don’t start with content. We start with questions. Why should your brand exist in this market? Why should someone choose you over the next option?</p>

            <p>At AMW, we go beneath the visible layer of brands — into their structure, intent, and behaviour. We decode what drives perception, trust, and decision-making.</p>

            <p>Because brands are not built on visibility. They are built on clarity, consistency, and context.</p>

          </div>

          <div class="about-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">
              Connect with us today
            </a>
          </div>
        </div>

        <div class="about-hero-media">
          <img
            src="<?php bloginfo('template_directory'); ?>/assets/images/about/hero-about.png"
            alt="Anvaya Media Works team and brand story hero visual"
          >
        </div>
      </div>
    </section>

    <section class="about-anvaya-section">
      <div class="container">
        <div class="about-section-header">
          <div>
            <span class="about-section-eyebrow">Anvaya</span>
            <h2>How the partnership stays clear, effective, and accountable.</h2>
          </div>

          <p class="about-section-intro">
            We partner closely with clients, emphasizing transparency, collaboration, and measurable
            success. Our approach fuses creativity with data insight to craft campaigns that resonate
            and deliver real ROI.
          </p>
        </div>

        <div class="about-anvaya-grid">
          <article class="about-tenet-card">
            <span class="about-tenet-number">01</span>
            <h3>Transparency</h3>
            <p>Open communication and clear visibility stay part of the work from first conversation to delivery.</p>
          </article>

          <article class="about-tenet-card">
            <span class="about-tenet-number">02</span>
            <h3>Collaboration</h3>
            <p>We work closely with clients so decisions, priorities, and progress stay aligned at every stage.</p>
          </article>

          <article class="about-tenet-card">
            <span class="about-tenet-number">03</span>
            <h3>Creativity + Insight</h3>
            <p>Creative thinking is paired with data insight to shape ideas that are relevant, grounded, and sharp.</p>
          </article>

          <article class="about-tenet-card">
            <span class="about-tenet-number">04</span>
            <h3>Measurable Success</h3>
            <p>Every engagement is built to create stronger resonance, real ROI, and lasting brand connections.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="about-vision-section">
      <div class="container">
        <div class="about-section-header">
          <div>
            <span class="about-section-eyebrow">Vision &amp; Values</span>
            <h2>Let's create the future of your brand.</h2>
          </div>

          <p class="about-section-intro">
            Whether you're an emerging startup or an established brand, Anvaya is your trusted partner
            for bold ideas and flawless execution.
          </p>
        </div>

        <div class="about-vision-stack">
          <article class="about-vision-card">
            <span class="about-card-label">Vision</span>
            <blockquote class="about-vision-quote">
              <p>To make every brand interaction impactful, authentic, and measurable.</p>

              <footer>
                <span class="about-vision-quote-line" aria-hidden="true"></span>
                <cite>A clear benchmark for every strategy, design system, and growth move we shape.</cite>
              </footer>
            </blockquote>
          </article>

          <article class="about-values-card">
            <div class="about-values-header">
              <span class="about-card-label">Values</span>
              <p>The principles that define how we show up for every client, every brief, and every launch.</p>
            </div>

            <div class="about-values-grid">
              <div class="about-value-item">
                <i class="lni lni-baai"></i>
                <h3>Transparency</h3>
              </div>

              <div class="about-value-item">
                <i class="lni lni-bulb-2"></i>
                <h3>Innovation</h3>
              </div>

              <div class="about-value-item">
                <i class="lni lni-shield-2-check"></i>
                <h3>Integrity</h3>
              </div>

              <div class="about-value-item">
                <i class="lni lni-crown-3"></i>
                <h3>Excellence</h3>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>