<?php /* Template Name: Our Strategy */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/strategy.css?v=<?php echo($t); ?>">

  <main id="top" class="strategy-page">
    <section class="strategy-hero-section">
      <div class="container strategy-hero-grid">
        <div class="strategy-hero-copy">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1>Our Strategy</h1>
          <p>Most marketing fails not because of effort, but because of lack of structure.</p>
          <p>At AMW, we build what we call Media Architecture — a deliberate system where every message, platform, and interaction is aligned.</p>
          <p>We define:</p>
          <ul>
            <li>- What your brand says</li>
            <li>- Where it shows up</li>
            <li>- How it guides a customer</li>
          </ul>
          <p>So your brand doesn’t just appear — it performs.</p>


          <div class="strategy-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">
              Talk to Anvaya
            </a>
          </div>
        </div>

        <div class="strategy-hero-media">
          <img
            src="<?php bloginfo('template_directory'); ?>/assets/images/about/hero-strategy.png"
            alt="Anvaya Media Works strategy hero visual"
          >
        </div>
      </div>
    </section>

    <section class="strategy-define-section">
      <div class="container">
        <div class="strategy-section-header">
          <div>
            <span class="strategy-section-eyebrow">We Define</span>
            <h2>The structure behind consistent visibility and guided customer movement.</h2>
          </div>

          <p class="strategy-section-intro">
            Before execution starts, we lock in the foundations that keep the brand clear, present, and
            useful wherever people meet it.
          </p>
        </div>

        <div class="strategy-pillars-grid">
          <article class="strategy-pillar-card">
            <span class="strategy-pillar-number">01</span>
            <h3>What your brand says</h3>
            <p>We shape messaging so the brand voice is clear, recognizable, and relevant in every channel.</p>
          </article>

          <article class="strategy-pillar-card">
            <span class="strategy-pillar-number">02</span>
            <h3>Where it shows up</h3>
            <p>We choose platforms with intent, so visibility is tied to relevance instead of random activity.</p>
          </article>

          <article class="strategy-pillar-card">
            <span class="strategy-pillar-number">03</span>
            <h3>How it guides a customer</h3>
            <p>We structure interactions to reduce friction, build trust, and move people toward action.</p>
          </article>
        </div>

        <div class="strategy-performance-banner">
          <p>So your brand does not just appear - it performs.</p>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>