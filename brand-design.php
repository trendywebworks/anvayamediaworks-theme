<?php /* Template Name: Brand Design */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/brand-design.css?v=<?php echo($t); ?>">


  <main id="top" class="brand-design-page">
    
    <section class="brand-design-hero-section">
      <div class="container brand-design-hero-grid">
        <div class="brand-design-hero-copy">
          
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>

          <h1>Brand Design</h1>
          <p class="brand-design-hero-support">
            Design a Brand That Looks Distinct &mdash; and Feels Consistent Everywhere
          </p>
          <p class="brand-design-hero-lead">
            Your brand is more than a logo. It&rsquo;s how people recognize you, remember you, and trust you.
          </p>
          <p class="brand-design-hero-support">
            At Anvaya Media Works, we create cohesive brand identities that are visually powerful, strategically aligned, and built to scale across every platform.
          </p>

          <div class="brand-design-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">Start Brand Design</a>
            <a class="btn btn-amw btn-amw-secondary" href="<?php echo home_url(); ?>/services/">Explore Services</a>
          </div>
        </div>

        <div class="brand-design-hero-media">
          <img
            src="<?php bloginfo('template_directory'); ?>/assets/images/services/hero-brand-design.png"
            alt="Anvaya Media Works brand design service visual"
          >
        </div>
      </div>
    </section>

    <section class="brand-design-definition-section">
      <div class="container">
        <div class="brand-design-definition-grid">
          <div class="brand-design-definition-media" aria-hidden="true">
            <img
              src="<?php bloginfo('template_directory'); ?>/assets/images/services/services-brand-design.webp"
              alt=""
            >
          </div>

          <div class="brand-design-definition-content">
            <div class="brand-design-definition-copy">
              <span class="brand-design-section-eyebrow">What Is Brand Design?</span>
              <h2>Shape how the brand looks, feels, and communicates across every touchpoint.</h2>
              <p>
                Brand Design is the visual expression of your brand, how it looks, feels, and communicates across all touchpoints.
              </p>
            </div>

            <ul class="brand-design-definition-list">
              <li>Logo Design</li>
              <li>Color Systems</li>
              <li>Typography</li>
              <li>Visual Language</li>
              <li>Brand Guidelines</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="brand-design-signs-section">
      <div class="container">
        <div class="brand-design-signs-header">
          <span class="brand-design-section-eyebrow">Signs Your Brand Needs a Redesign</span>
          <h2>When brand signals feel scattered, recognition and trust start to weaken.</h2>
        </div>

        <div class="brand-design-signs-grid">
          <article class="brand-design-sign-card">
            <span class="brand-design-sign-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="14" y="16" width="16" height="14" rx="3" stroke="currentColor" stroke-width="3"/>
                <rect x="34" y="20" width="16" height="14" rx="3" stroke="currentColor" stroke-width="3"/>
                <rect x="22" y="36" width="20" height="14" rx="3" stroke="currentColor" stroke-width="3"/>
                <path d="M30 23H34" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M26 36V30" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M42 36V34" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <span class="brand-design-sign-number">01</span>
            <h3>Inconsistent visuals across platforms</h3>
          </article>

          <article class="brand-design-sign-card">
            <span class="brand-design-sign-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 20H46V44H18V20Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M24 28H40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M24 36H34" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M44 14L50 20" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M14 50L20 44" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <span class="brand-design-sign-number">02</span>
            <h3>Outdated or unprofessional design</h3>
          </article>

          <article class="brand-design-sign-card">
            <span class="brand-design-sign-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 44C18 34.1 26.1 26 36 26C42.2 26 47.7 29.1 51 33.8" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M44 44C44 37.4 38.6 32 32 32C25.4 32 20 37.4 20 44" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <circle cx="32" cy="20" r="8" stroke="currentColor" stroke-width="3"/>
                <path d="M46 16L50 20L56 12" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            <span class="brand-design-sign-number">03</span>
            <h3>Weak brand recognition</h3>
          </article>

          <article class="brand-design-sign-card">
            <span class="brand-design-sign-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="32" cy="32" r="18" stroke="currentColor" stroke-width="3"/>
                <path d="M26.5 26.5C27.8 24.6 29.9 23.5 32.2 23.5C36 23.5 39 26.2 39 29.8C39 34.4 34.7 36 32 39" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <circle cx="32" cy="45" r="2.4" fill="currentColor"/>
              </svg>
            </span>
            <span class="brand-design-sign-number">04</span>
            <h3>Confusing brand identity</h3>
          </article>

          <article class="brand-design-sign-card">
            <span class="brand-design-sign-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="12" y="20" width="14" height="24" rx="4" stroke="currentColor" stroke-width="3"/>
                <rect x="30" y="14" width="14" height="36" rx="4" stroke="currentColor" stroke-width="3"/>
                <rect x="48" y="26" width="4" height="18" rx="2" fill="currentColor"/>
                <path d="M19 14V10" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M37 8V4" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M50 22V18" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <span class="brand-design-sign-number">05</span>
            <h3>Difficulty scaling across marketing channels</h3>
          </article>
        </div>

        <p class="brand-design-signs-note">
          A strong brand design brings clarity, consistency, and credibility.
        </p>
      </div>
    </section>

    <section class="brand-design-process-section">
      <div class="container">
        <div class="brand-design-process-carousel" data-review-carousel data-review-carousel-autoplay="4500">
          <div class="brand-design-process-header">
            <div>
              <span class="brand-design-section-eyebrow">Our Brand Design Process</span>
              <h2>Six steps that move from exploration to real-world brand application.</h2>
            </div>

            <div class="brand-design-process-controls" aria-label="Brand design process navigation">
              <button class="brand-design-process-arrow" type="button" data-review-carousel-prev aria-label="Previous process step">
                <svg viewBox="0 0 24 24" role="presentation" focusable="false">
                  <path d="M14.5 6.5 9 12l5.5 5.5"></path>
                </svg>
              </button>

              <div class="brand-design-process-progress" aria-hidden="true">
                <span class="brand-design-process-progress-fill" data-review-carousel-progress></span>
              </div>

              <button class="brand-design-process-arrow" type="button" data-review-carousel-next aria-label="Next process step">
                <svg viewBox="0 0 24 24" role="presentation" focusable="false">
                  <path d="m9.5 6.5 5.5 5.5-5.5 5.5"></path>
                </svg>
              </button>
            </div>
          </div>

          <div class="brand-design-process-window" data-review-carousel-viewport>
            <div class="brand-design-process-track" data-review-carousel-track>
              <article class="brand-design-process-card" data-review-carousel-card>
                <div class="brand-design-process-card-top">
                  <span class="brand-design-process-number">01</span>
                  <span class="brand-design-process-icon" aria-hidden="true">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="28" cy="28" r="12" stroke="currentColor" stroke-width="3"/>
                      <path d="M37 37L48 48" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                      <path d="M28 20V28L33 33" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </span>
                </div>
                <h3>Brand Discovery</h3>
                <p>Understanding your vision, values, audience, and positioning.</p>
              </article>

              <article class="brand-design-process-card" data-review-carousel-card>
                <div class="brand-design-process-card-top">
                  <span class="brand-design-process-number">02</span>
                  <span class="brand-design-process-icon" aria-hidden="true">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="14" y="18" width="36" height="28" rx="4" stroke="currentColor" stroke-width="3"/>
                      <path d="M20 24H44" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                      <path d="M20 32H32" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                      <circle cx="44" cy="32" r="5" stroke="currentColor" stroke-width="3"/>
                    </svg>
                  </span>
                </div>
                <h3>Visual Direction</h3>
                <p>Creating moodboards and design directions to define your brand style.</p>
              </article>

              <article class="brand-design-process-card" data-review-carousel-card>
                <div class="brand-design-process-card-top">
                  <span class="brand-design-process-number">03</span>
                  <span class="brand-design-process-icon" aria-hidden="true">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M18 48L24 28L36 16L48 28L36 40L18 48Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                      <path d="M31 21L43 33" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                  </span>
                </div>
                <h3>Logo &amp; Identity Design</h3>
                <p>Designing a unique logo and complete visual identity system.</p>
              </article>

              <article class="brand-design-process-card" data-review-carousel-card>
                <div class="brand-design-process-card-top">
                  <span class="brand-design-process-number">04</span>
                  <span class="brand-design-process-icon" aria-hidden="true">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="12" y="18" width="14" height="28" rx="4" stroke="currentColor" stroke-width="3"/>
                      <rect x="30" y="14" width="14" height="36" rx="4" stroke="currentColor" stroke-width="3"/>
                      <circle cx="50" cy="26" r="6" stroke="currentColor" stroke-width="3"/>
                      <path d="M50 34V44" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                  </span>
                </div>
                <h3>Brand System Development</h3>
                <p>Defining colors, typography, icons, and visual elements.</p>
              </article>

              <article class="brand-design-process-card" data-review-carousel-card>
                <div class="brand-design-process-card-top">
                  <span class="brand-design-process-number">05</span>
                  <span class="brand-design-process-icon" aria-hidden="true">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M18 14H40L50 24V50H18V14Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                      <path d="M40 14V24H50" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                      <path d="M24 32H42" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                      <path d="M24 40H38" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                  </span>
                </div>
                <h3>Brand Guidelines</h3>
                <p>Creating a clear guide to maintain consistency across all platforms.</p>
              </article>

              <article class="brand-design-process-card" data-review-carousel-card>
                <div class="brand-design-process-card-top">
                  <span class="brand-design-process-number">06</span>
                  <span class="brand-design-process-icon" aria-hidden="true">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="12" y="18" width="18" height="28" rx="4" stroke="currentColor" stroke-width="3"/>
                      <rect x="34" y="14" width="18" height="36" rx="4" stroke="currentColor" stroke-width="3"/>
                      <path d="M21 26H21.01" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                      <path d="M43 24H43.01" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                      <path d="M18 50H46" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                  </span>
                </div>
                <h3>Brand Application</h3>
                <p>Showcasing your brand across real-world and digital touchpoints.</p>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
