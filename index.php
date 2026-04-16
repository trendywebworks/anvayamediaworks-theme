<?php get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/blog.css?v=<?php echo($t); ?>">

  <main id="top" class="blog-page">
    <section class="blog-hero-section">
      <div class="container">
        <div class="blog-hero-shell">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          <h1>Blog</h1>
        </div>
      </div>
    </section>

    <section class="insights-section">
      <div class="container">
        <div class="insights-grid">
          <article class="insight-card">
            <div class="insight-card-media">
              <img
                src="assets/images/blog-branding.svg"
                alt="Illustration for branding insight article"
              />
            </div>
            <div class="insight-card-body">
              <span class="insight-card-pill">Branding</span>
              <h3>Consistency compounds faster than constant reinvention.</h3>
              <p>
                Strong brand systems reduce friction, improve recall, and help every campaign land with
                more authority.
              </p>
              <a class="insight-card-link" href="<?php echo htmlspecialchars($contactLink, ENT_QUOTES, 'UTF-8'); ?>">
                Continue Reading
                <span aria-hidden="true">→</span>
              </a>
            </div>
          </article>

          <article class="insight-card">
            <div class="insight-card-media">
              <img
                src="assets/images/blog-seo.svg"
                alt="Illustration for SEO insight article"
              />
            </div>
            <div class="insight-card-body">
              <span class="insight-card-pill">SEO Tips</span>
              <h3>Service pillars and industry pages create a stronger SEO foundation.</h3>
              <p>
                Intent-matched content architecture often improves rankings faster than publishing
                disconnected blog posts.
              </p>
              <a class="insight-card-link" href="<?php echo htmlspecialchars($contactLink, ENT_QUOTES, 'UTF-8'); ?>">
                Continue Reading
                <span aria-hidden="true">→</span>
              </a>
            </div>
          </article>

          <article class="insight-card">
            <div class="insight-card-media">
              <img
                src="assets/images/blog-webdesign.svg"
                alt="Illustration for web design insight article"
              />
            </div>
            <div class="insight-card-body">
              <span class="insight-card-pill">Web Design</span>
              <h3>Better UX often unlocks the conversion gains marketing teams are chasing.</h3>
              <p>
                When digital journeys feel aligned, trust builds faster and paid traffic has a much better
                chance of converting.
              </p>
              <a class="insight-card-link" href="<?php echo htmlspecialchars($contactLink, ENT_QUOTES, 'UTF-8'); ?>">
                Continue Reading
                <span aria-hidden="true">→</span>
              </a>
            </div>
          </article>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
