<?php /* Template Name: Dashboard Design */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/dashboard-design.css?v=<?php echo($t); ?>">


  <main id="top" class="dashboard-design-page">
    <section class="dashboard-design-hero-section">
      <div class="container dashboard-design-hero-grid">
        <div class="dashboard-design-hero-copy">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1>Dashboard Design</h1>
          <p class="dashboard-design-hero-support">
            Turn Complex Data into Clear Decisions
          </p>
          <p class="dashboard-design-hero-lead">
            Data is powerful, but only when it&rsquo;s easy to understand.
          </p>
          <p class="dashboard-design-hero-support">
            At Anvaya Media Works, we design intuitive, visually structured dashboards that transform raw data into meaningful insights, helping users make faster, smarter decisions.
          </p>

          <div class="dashboard-design-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">
              Start Dashboard Design
            </a>
          </div>
        </div>

        <div class="dashboard-design-hero-media">
          <img
            src="<?php bloginfo('template_directory'); ?>/assets/images/services/hero-dashboard-design.png"
            alt="Anvaya Media Works dashboard design service visual"
          >
        </div>
      </div>
    </section>

    <section class="dashboard-design-importance-section">
      <div class="container">
        <div class="dashboard-design-importance-grid">
          <div class="dashboard-design-importance-media" aria-hidden="true">
            <img
              src="<?php bloginfo('template_directory'); ?>/assets/images/hero-dummy.svg"
              alt=""
            >
          </div>

          <div class="dashboard-design-importance-content">
            <div class="dashboard-design-importance-copy">
              <span class="dashboard-design-section-eyebrow">Why Dashboard Design Matters</span>
              <h2>A poorly designed dashboard creates confusion. A well-designed one creates clarity.</h2>
              <p>
                Great dashboards reduce cognitive load, guide attention to the right metrics, and help users move from observation to action without friction.
              </p>
            </div>

            <ul class="dashboard-design-benefit-list">
              <li>Simplifies complex data</li>
              <li>Improves decision-making speed</li>
              <li>Enhances user experience</li>
              <li>Highlights key performance metrics</li>
              <li>Increases engagement with data</li>
            </ul>

            <p class="dashboard-design-importance-note">
              Great dashboards don&rsquo;t just show data. They tell a story.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="dashboard-design-problems-section">
      <div class="container">
        <div class="dashboard-design-problems-header">
          <span class="dashboard-design-section-eyebrow">Common Dashboard Problems We Solve</span>
          <h2>When data interfaces are cluttered or unfocused, insight gets buried and action slows down.</h2>
        </div>

        <div class="dashboard-design-problems-grid">
          <article class="dashboard-design-problem-card">
            <span class="dashboard-design-problem-number">01</span>
            <h3>Cluttered and overwhelming interfaces</h3>
          </article>

          <article class="dashboard-design-problem-card">
            <span class="dashboard-design-problem-number">02</span>
            <h3>Lack of hierarchy and focus</h3>
          </article>

          <article class="dashboard-design-problem-card">
            <span class="dashboard-design-problem-number">03</span>
            <h3>Difficult navigation and filtering</h3>
          </article>

          <article class="dashboard-design-problem-card">
            <span class="dashboard-design-problem-number">04</span>
            <h3>Poor data visualization choices</h3>
          </article>

          <article class="dashboard-design-problem-card">
            <span class="dashboard-design-problem-number">05</span>
            <h3>Inconsistent design across modules</h3>
          </article>
        </div>

        <p class="dashboard-design-problems-note">
          We turn messy data interfaces into clean, actionable experiences.
        </p>
      </div>
    </section>

    <section class="dashboard-design-designs-section">
      <div class="container">
        <div class="dashboard-design-designs-header">
          <span class="dashboard-design-section-eyebrow">What We Design</span>
          <h2>The dashboard systems and interfaces that make complex information easier to act on.</h2>
        </div>

        <div class="dashboard-design-designs-grid">
          <article class="dashboard-design-design-card">
            <span class="dashboard-design-design-number">01</span>
            <h3>Business Dashboards</h3>
            <ul class="dashboard-design-design-list">
              <li>Analytics and reporting dashboards</li>
              <li>KPI tracking systems</li>
              <li>Marketing and performance dashboards</li>
            </ul>
          </article>

          <article class="dashboard-design-design-card">
            <span class="dashboard-design-design-number">02</span>
            <h3>Product &amp; SaaS Dashboards</h3>
            <ul class="dashboard-design-design-list">
              <li>Admin panels</li>
              <li>User dashboards</li>
              <li>CRM and ERP interfaces</li>
            </ul>
          </article>

          <article class="dashboard-design-design-card">
            <span class="dashboard-design-design-number">03</span>
            <h3>Custom Data Interfaces</h3>
            <ul class="dashboard-design-design-list">
              <li>Data visualization systems</li>
              <li>Internal tools dashboards</li>
              <li>Industry-specific dashboards</li>
            </ul>
          </article>
        </div>
      </div>
    </section>

    <section class="dashboard-design-approach-section">
      <div class="container">
        <div class="dashboard-design-approach-header">
          <div>
            <span class="dashboard-design-section-eyebrow">Our Dashboard Design Approach</span>
            <h2>Five steps that turn raw metrics into a clear interface with usable insight.</h2>
          </div>
          <p>Understand, structure, visualize, and optimize the experience so data becomes easier to trust and use.</p>
        </div>

        <div class="dashboard-design-approach-grid">
          <article class="dashboard-design-approach-card">
            <span class="dashboard-design-approach-number">01</span>
            <h3>Data Understanding</h3>
            <p>We analyze your data, metrics, and user needs.</p>
          </article>

          <article class="dashboard-design-approach-card">
            <span class="dashboard-design-approach-number">02</span>
            <h3>Information Architecture</h3>
            <p>We structure dashboards for clarity and logical flow.</p>
          </article>

          <article class="dashboard-design-approach-card">
            <span class="dashboard-design-approach-number">03</span>
            <h3>Data Visualization Design</h3>
            <p>We design charts, graphs, and visual components for easy understanding.</p>
          </article>

          <article class="dashboard-design-approach-card">
            <span class="dashboard-design-approach-number">04</span>
            <h3>UI Design &amp; Interaction</h3>
            <p>We create clean, modern, and interactive interfaces.</p>
          </article>

          <article class="dashboard-design-approach-card">
            <span class="dashboard-design-approach-number">05</span>
            <h3>Testing &amp; Optimization</h3>
            <p>We refine layouts based on usability and feedback.</p>
          </article>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
