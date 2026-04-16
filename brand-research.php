<?php /* Template Name: Brand Research */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/brand-research.css?v=<?php echo($t); ?>">


  <main id="top" class="brand-research-page">
    <section class="brand-research-hero-section">
      <div class="container brand-research-hero-grid">
        <div class="brand-research-hero-copy">
          
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1>Brand Research</h1>
          <p class="brand-research-hero-support">
            Build Brands on Insight, Not Assumptions
          </p>
          <p class="brand-research-hero-lead">
            Strong brands are not created by guesswork. They are built on deep understanding.
          </p>
          <p class="brand-research-hero-support">
            At Anvaya Media Works, our Brand Research service uncovers the insights that shape powerful
            brand strategies and meaningful customer connections. We analyze your market, audience, and
            competition to give you a clear, data-driven foundation for every branding and marketing decision.
          </p>

          <div class="brand-research-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">Book a Strategy Call</a>
          </div>
        </div>

        <div class="brand-research-hero-media">
          <img
            src="<?php bloginfo('template_directory'); ?>/assets/images/services/hero-brand-research.png"
            alt="Anvaya Media Works brand research service visual"
          >
        </div>
      </div>
    </section>

    <section class="brand-research-importance-section">
      <div class="container">
        <div class="brand-research-section-header">
          <div>
            <span class="brand-research-section-eyebrow">Why It Matters</span>
            <h2>Without research, branding becomes subjective. With research, it becomes strategic.</h2>
          </div>
          <p class="brand-research-section-intro">
            Stronger decisions start when we replace assumptions with evidence and shape the brand from what
            the market is actually telling us.
          </p>
        </div>

        <div class="brand-research-insight-layout">
          <div class="brand-research-insight-list">
            <article class="brand-research-insight-item">
              <div class="brand-research-insight-card">
                <i class="lni lni-search-plus icon-sm"></i>
                <div class="brand-research-insight-copy">
                  <h3>Audience clarity</h3>
                  <p>Identify your target audience&rsquo;s behavior, needs, and preferences with sharper detail.</p>
                </div>
              </div>
            </article>

            <article class="brand-research-insight-item">
              <div class="brand-research-insight-card">
                <i class="lni lni-certificate-badge-1 icon-sm"></i>
                <div class="brand-research-insight-copy">
                  <h3>Competitive awareness</h3>
                  <p>Understand your competitive landscape and where your brand can stand apart.</p>
                </div>
              </div>
            </article>

            <article class="brand-research-insight-item">
              <div class="brand-research-insight-card">
                <i class="lni lni-anchor icon-sm"></i>
                <div class="brand-research-insight-copy">
                  <h3>Opportunity mapping</h3>
                  <p>Discover market gaps and opportunities before campaigns or brand systems are built.</p>
                </div>
              </div>
            </article>

            <article class="brand-research-insight-item">
              <div class="brand-research-insight-card">
                <i class="lni lni-thumbs-up-3 icon-sm"></i>
                <div class="brand-research-insight-copy">
                  <h3>Positioning strength</h3>
                  <p>Build a clear brand positioning that gives marketing, design, and messaging one direction.</p>
                </div>
              </div>
            </article>

            <article class="brand-research-insight-item">
              <div class="brand-research-insight-card">
                <i class="lni lni-trend-up-1 icon-sm"></i>
                <div class="brand-research-insight-copy">
                  <h3>Lower risk, better ROI</h3>
                  <p>Reduce wasted effort and improve marketing ROI by grounding choices in real signals.</p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="brand-research-process-section">
      <div class="container">
        <div class="brand-research-process-shell">
          <div class="brand-research-process-intro">
            <span class="brand-research-section-eyebrow">Our Process</span>
            <h2>Five focused steps that turn information into direction.</h2>
            <p>
              Each stage builds on the previous one, so the final recommendation is not just informative,
              but useful across brand strategy, messaging, and growth planning.
            </p>
          </div>

          <div class="brand-research-process-list">
            <article class="brand-research-process-item">
              <span class="brand-research-process-number">01</span>
              <div>
                <h3>Market Analysis</h3>
                <p>We study industry trends, demand patterns, and emerging opportunities to position your brand effectively.</p>
              </div>
            </article>

            <article class="brand-research-process-item">
              <span class="brand-research-process-number">02</span>
              <div>
                <h3>Audience Insights</h3>
                <p>We dive deep into your ideal customers, who they are, what they want, and how they behave.</p>
              </div>
            </article>

            <article class="brand-research-process-item">
              <span class="brand-research-process-number">03</span>
              <div>
                <h3>Competitor Research</h3>
                <p>We analyze your competitors&rsquo; strengths, weaknesses, and positioning to identify your unique edge.</p>
              </div>
            </article>

            <article class="brand-research-process-item">
              <span class="brand-research-process-number">04</span>
              <div>
                <h3>Brand Positioning</h3>
                <p>We define how your brand should be perceived in the market, clear, differentiated, and compelling.</p>
              </div>
            </article>

            <article class="brand-research-process-item">
              <span class="brand-research-process-number">05</span>
              <div>
                <h3>Data-Driven Recommendations</h3>
                <p>We translate insights into actionable strategies you can implement across branding and marketing.</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>