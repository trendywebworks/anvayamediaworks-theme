<?php /* Template Name: Client Reviews */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/client-reviews.css?v=<?php echo($t); ?>">

  <main id="top" class="reviews-page">
    <section class="reviews-hero-section">
      <div class="container">
        <div class="reviews-hero-shell">
          
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1>Client Reviews</h1>
        </div>
      </div>
    </section>

    <section class="reviews-showcase-section">
      <div class="container">
        <div class="reviews-rail" data-review-carousel>
          <div class="reviews-rail-intro">
            <span class="reviews-rail-mark" aria-hidden="true">&ldquo;</span>
            <h2>What our customers are saying</h2>

            <div class="reviews-rail-controls" aria-label="Testimonial navigation">
              <button class="reviews-rail-arrow" type="button" data-review-carousel-prev aria-label="Previous testimonial">
                <svg viewBox="0 0 24 24" role="presentation" focusable="false">
                  <path d="M14.5 6.5 9 12l5.5 5.5"></path>
                </svg>
              </button>

              <div class="reviews-rail-progress" aria-hidden="true">
                <span class="reviews-rail-progress-fill" data-review-carousel-progress></span>
              </div>

              <button class="reviews-rail-arrow" type="button" data-review-carousel-next aria-label="Next testimonial">
                <svg viewBox="0 0 24 24" role="presentation" focusable="false">
                  <path d="m9.5 6.5 5.5 5.5-5.5 5.5"></path>
                </svg>
              </button>
            </div>
          </div>

          <div class="reviews-rail-window" data-review-carousel-viewport>
            <div class="reviews-rail-track" data-review-carousel-track>
              <article class="reviews-quote-card" data-review-carousel-card>
                <div class="reviews-quote-card-bubble">
                  <blockquote class="reviews-quote-copy">
                    We weren&rsquo;t lacking effort. We were lacking clarity. AMW fixed that.
                  </blockquote>

                  <div class="reviews-quote-stars" aria-label="Five star review">
                    <span aria-hidden="true">&#9733;</span>
                    <span aria-hidden="true">&#9733;</span>
                    <span aria-hidden="true">&#9733;</span>
                    <span aria-hidden="true">&#9733;</span>
                    <span aria-hidden="true">&#9733;</span>
                  </div>
                </div>

                <div class="reviews-quote-author">
                  <div class="review-client-photo">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/client-aurum.svg" alt="Placeholder client image for the first testimonial" />
                  </div>
                  <div class="review-client-meta">
                    <strong>Client Name</strong>
                    <span>Designation / Company</span>
                  </div>
                </div>
              </article>

              <article class="reviews-quote-card" data-review-carousel-card>
                <div class="reviews-quote-card-bubble">
                  <blockquote class="reviews-quote-copy">
                    For the first time, our marketing feels connected &mdash; and it shows in our enquiries.
                  </blockquote>

                  <div class="reviews-quote-stars" aria-label="Five star review">
                    <span aria-hidden="true">&#9733;</span>
                    <span aria-hidden="true">&#9733;</span>
                    <span aria-hidden="true">&#9733;</span>
                    <span aria-hidden="true">&#9733;</span>
                    <span aria-hidden="true">&#9733;</span>
                  </div>
                </div>

                <div class="reviews-quote-author">
                  <div class="review-client-photo">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/client-verve.svg" alt="Placeholder client image for the second testimonial" />
                  </div>
                  <div class="review-client-meta">
                    <strong>Client Name</strong>
                    <span>Designation / Company</span>
                  </div>
                </div>
              </article>

              <article class="reviews-quote-card" data-review-carousel-card>
                <div class="reviews-quote-card-bubble">
                  <blockquote class="reviews-quote-copy">
                    They didn&rsquo;t just improve our visibility. They changed how customers perceive us.
                  </blockquote>

                  <div class="reviews-quote-stars" aria-label="Five star review">
                    <span aria-hidden="true">&#9733;</span>
                    <span aria-hidden="true">&#9733;</span>
                    <span aria-hidden="true">&#9733;</span>
                    <span aria-hidden="true">&#9733;</span>
                    <span aria-hidden="true">&#9733;</span>
                  </div>
                </div>

                <div class="reviews-quote-author">
                  <div class="review-client-photo">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/client-oryx.svg" alt="Placeholder client image for the third testimonial" />
                  </div>
                  <div class="review-client-meta">
                    <strong>Client Name</strong>
                    <span>Designation / Company</span>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
