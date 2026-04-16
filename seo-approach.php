<?php /* Template Name: SEO Approach */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/seo-approach.css?v=<?php echo($t); ?>">

  <main id="top" class="seo-page">
    <section class="seo-hero-section">
      <div class="container seo-hero-grid">
        <div class="seo-hero-copy">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1>SEO Approach</h1>
          <p>Search is not about keywords. It’s about intent and trust.</p>
          <p>We create content rooted in reality:</p>
          <ul>
            <li>- Real customer voices</li>
            <li>- Real brand experiences</li>
            <li>- Real proof</li>
          </ul>
          <p>Then we structure it for discovery.</p>

          <p>Because traffic without trust doesn’t convert. And visibility without intent doesn’t scale.</p>


          <div class="seo-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">
              Talk to Anvaya
            </a>
          </div>
        </div>

        <div class="seo-hero-media">
          <img
            src="<?php bloginfo('template_directory'); ?>/assets/images/about/banner-seo-approach.png"
            alt="Anvaya Media Works SEO approach hero visual"
          >
        </div>
      </div>
    </section>

    <section class="seo-evidence-section">
      <div class="container">
        <div class="seo-evidence-shell">
          <div class="seo-evidence-visuals">
            <figure class="seo-evidence-main-media">
              <img
                src="<?php bloginfo('template_directory'); ?>/assets/images/about/about-seo-approach.webp"
                alt="Placeholder visual representing customer-led SEO research and content planning"
              >
            </figure>
          </div>

          <div class="seo-evidence-content">
            <div>
              <span class="seo-section-eyebrow">Reality First</span>
              <h2>We create content rooted in reality.</h2>
            </div>

            <p class="seo-section-intro">
              Trust is earned when the content sounds human, reflects actual brand experience, and gives
              people proof they can evaluate for themselves.
            </p>

            <div class="seo-truth-list">
              <article class="seo-truth-item">
                <i class="lni lni-comment-1-text icon-sm"></i>

                <div>
                  <h3>Real customer voices</h3>
                  <p>We listen for the phrases, questions, concerns, and motivations customers actually bring into search.</p>
                </div>
              </article>

              <article class="seo-truth-item">
                <i class="lni lni-tailor-brands icon-sm"></i>

                <div>
                  <h3>Real brand experiences</h3>
                  <p>We build pages from genuine service realities, workflows, and value instead of generic SEO filler.</p>
                </div>
              </article>

              <article class="seo-truth-item">
                <i class="lni lni-target-user icon-sm"></i>

                <div>
                  <h3>Real proof</h3>
                  <p>We support claims with substance, so visitors find reassurance instead of vague promotion.</p>
                </div>
              </article>
            </div>

            <p class="seo-section-outro">
              Then we structure it for discovery. Because traffic without trust doesn&rsquo;t convert. And
              visibility without intent doesn&rsquo;t scale.
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>