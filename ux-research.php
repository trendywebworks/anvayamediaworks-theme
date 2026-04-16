<?php /* Template Name: UX Research */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/ux-research.css?v=<?php echo($t); ?>">


  <main id="top" class="ux-research-page">
    <section class="ux-research-hero-section">
      <div class="container ux-research-hero-grid">
        <div class="ux-research-hero-copy">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1>UX Research</h1>
          <p class="ux-research-hero-support">
            Stop Guessing. Start Understanding Users.
          </p>
          <p class="ux-research-hero-lead">
            Most products fail not because of bad design, but because they are built on assumptions.
          </p>
          <p class="ux-research-hero-support">
            At Anvaya Media Works, our UX Research service helps you understand how users think, behave, and interact so you can design experiences that actually work.
          </p>

          <div class="ux-research-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">
              Start UX Research
            </a>
          </div>
        </div>

        <div class="ux-research-hero-visual" aria-hidden="true">
          <div class="ux-research-hero-image-shell">
            <img
              src="<?php bloginfo('template_directory'); ?>/assets/images/services/hero-ux-research.png"
              alt=""
            >
          </div>
        </div>
      </div>
    </section>

    <section class="ux-research-foundation-section">
      <div class="container">
        <div class="ux-research-foundation-grid">
          <div class="ux-research-foundation-media" aria-hidden="true">
            <img
              src="<?php bloginfo('template_directory'); ?>/assets/images/about/about-ux-research.webp"
              alt=""
            >
          </div>

          <div class="ux-research-foundation-content">
            <div class="ux-research-foundation-copy">
              <span class="ux-research-section-eyebrow">What Is UX Research</span>
              <h2>Study behavior before you shape the experience.</h2>
              <p>
                UX Research is the process of studying user behavior, needs, and motivations through observation, analysis, and feedback.
              </p>
            </div>

            <div class="ux-research-question-stack">
              <article class="ux-research-question-card">
                <span class="ux-research-question-index">01</span>
                <h3>Why are users dropping off?</h3>
              </article>

              <article class="ux-research-question-card">
                <span class="ux-research-question-index">02</span>
                <h3>What confuses them?</h3>
              </article>

              <article class="ux-research-question-card">
                <span class="ux-research-question-index">03</span>
                <h3>What drives them to convert?</h3>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ux-research-problems-section">
      <div class="container">
        <div class="ux-research-problems-header">
          <span class="ux-research-section-eyebrow">The Problems We Solve</span>
          <h2>When user behavior is unclear, performance starts to stall.</h2>
        </div>

        <div class="ux-research-problems-grid">
          <article class="ux-research-problem-card">
            <span class="ux-research-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 18V46H48" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20 24L30 34L38 28L48 38" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M42 38H48V32" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            <h3>High bounce rates on your website</h3>
          </article>
          <article class="ux-research-problem-card">
            <span class="ux-research-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="32" cy="32" r="18" stroke="currentColor" stroke-width="3"/>
                <circle cx="32" cy="32" r="8" stroke="currentColor" stroke-width="3"/>
                <circle cx="32" cy="32" r="2.5" fill="currentColor"/>
              </svg>
            </span>
            <h3>Low conversions despite good traffic</h3>
          </article>
          <article class="ux-research-problem-card">
            <span class="ux-research-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 18H30V32H16V18Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M34 32H48V46H34V32Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M30 25H40V32" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24 32V39H34" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            <h3>Confusing user journeys</h3>
          </article>
          <article class="ux-research-problem-card">
            <span class="ux-research-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 38C20 31.4 25.4 26 32 26C38.6 26 44 31.4 44 38" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M22 42H42" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M26 22V16" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M38 22V16" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <circle cx="22" cy="42" r="3" fill="currentColor"/>
                <circle cx="42" cy="42" r="3" fill="currentColor"/>
              </svg>
            </span>
            <h3>Poor engagement on apps or platforms</h3>
          </article>
          <article class="ux-research-problem-card">
            <span class="ux-research-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 18H46V46H18V18Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M24 32L30 38L40 26" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            <h3>Users not completing key actions</h3>
          </article>
        </div>

        <p class="ux-research-problems-note">
          If you&rsquo;re facing even one of these, UX research is not optional. It&rsquo;s essential.
        </p>
      </div>
    </section>

    <section class="ux-research-approach-section">
      <div class="container">
        <div class="ux-research-approach-header">
          <div>
            <span class="ux-research-section-eyebrow">Our UX Research Approach</span>
            <h2>Observe, analyze, validate, improve.</h2>
          </div>
          <p>
            We move from behavior signals to clear recommendations, so design and business decisions are grounded in evidence instead of instinct.
          </p>
        </div>

        <div class="ux-research-approach-rail">
          <article class="ux-research-approach-step">
            <span class="ux-research-approach-number">01</span>
            <div>
              <h3>User Understanding</h3>
              <p>We identify your target users, their goals, behaviors, and expectations.</p>
            </div>
          </article>

          <article class="ux-research-approach-step">
            <span class="ux-research-approach-number">02</span>
            <div>
              <h3>Behavior Analysis</h3>
              <p>Using tools and data, we analyze how users interact with your product.</p>
            </div>
          </article>

          <article class="ux-research-approach-step">
            <span class="ux-research-approach-number">03</span>
            <div>
              <h3>Usability Testing &amp; Journey Mapping</h3>
              <p>We test real user interactions and map the full journey to uncover friction points, confusion, and drop-off moments.</p>
            </div>
          </article>

          <article class="ux-research-approach-step">
            <span class="ux-research-approach-number">04</span>
            <div>
              <h3>Insight &amp; Validation</h3>
              <p>We convert findings into clear insights and validate improvement opportunities.</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="ux-research-methods-section">
      <div class="container">
        <div class="ux-research-methods-shell">
          <div class="ux-research-methods-side">
            <div class="ux-research-methods-header">
              <span class="ux-research-section-eyebrow">Research Methods We Use</span>
              <h2>Methods that add depth, clarity, and authority to every recommendation.</h2>
              <p>
                We use a mix of qualitative and behavioral methods so the research captures not just what users say, but what they actually do.
              </p>
            </div>
          </div>

          <div class="ux-research-methods-board">
            <article class="ux-research-method-item">
              <span class="ux-research-method-number">01</span>
              <h3>User Interviews</h3>
            </article>
            <article class="ux-research-method-item">
              <span class="ux-research-method-number">02</span>
              <h3>Usability Testing</h3>
            </article>
            <article class="ux-research-method-item">
              <span class="ux-research-method-number">03</span>
              <h3>Heatmaps &amp; Session Recordings</h3>
            </article>
            <article class="ux-research-method-item">
              <span class="ux-research-method-number">04</span>
              <h3>Surveys &amp; Feedback Analysis</h3>
            </article>
            <article class="ux-research-method-item">
              <span class="ux-research-method-number">05</span>
              <h3>A/B Testing Insights</h3>
            </article>
            <article class="ux-research-method-item">
              <span class="ux-research-method-number">06</span>
              <h3>Customer Journey Mapping</h3>
            </article>
            <article class="ux-research-method-item">
              <span class="ux-research-method-number">07</span>
              <h3>Analytics &amp; Behavior Tracking</h3>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="ux-research-outcomes-section">
      <div class="container">
        <div class="ux-research-outcomes-shell">
          <div class="ux-research-outcomes-copy">
            <span class="ux-research-section-eyebrow">What You Gain</span>
            <h2>Research that improves both experience and decision quality.</h2>
            <ul class="ux-research-bullet-list">
              <li>Clear understanding of your users</li>
              <li>Improved user experience (UX)</li>
              <li>Higher conversion rates</li>
              <li>Reduced drop-offs and friction</li>
              <li>Data-backed design decisions</li>
              <li>Strong foundation for UI/UX design</li>
            </ul>
          </div>

          <div class="ux-research-outcomes-media" aria-hidden="true">
            <img
              src="<?php bloginfo('template_directory'); ?>/assets/images/hero-dummy.svg"
              alt=""
            >
          </div>
        </div>
      </div>
    </section>

    <section class="ux-research-fit-section">
      <div class="container">
        <div class="ux-research-fit-shell">
          <div class="ux-research-fit-media" aria-hidden="true">
            <img
              src="<?php bloginfo('template_directory'); ?>/assets/images/hero-dummy.svg"
              alt=""
            >
          </div>

          <div class="ux-research-fit-copy">
            <span class="ux-research-section-eyebrow">Where UX Research Fits</span>
            <h2>UX Research is the foundation for stronger digital decisions.</h2>
            <ul class="ux-research-bullet-list ux-research-bullet-list-links">
              <li><a href="<?php echo htmlspecialchars($servicesLink, ENT_QUOTES, 'UTF-8'); ?>">UI/UX Design</a></li>
              <li><a href="<?php echo htmlspecialchars($servicesLink, ENT_QUOTES, 'UTF-8'); ?>">Website Design</a></li>
              <li><a href="<?php echo htmlspecialchars($servicesLink, ENT_QUOTES, 'UTF-8'); ?>">Product Development</a></li>
              <li><a href="<?php echo htmlspecialchars($servicesLink, ENT_QUOTES, 'UTF-8'); ?>">Conversion Rate Optimization (CRO)</a></li>
              <li><a href="<?php echo htmlspecialchars($brandStrategyPageLink, ENT_QUOTES, 'UTF-8'); ?>">Brand Strategy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
