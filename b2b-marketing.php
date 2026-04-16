<?php /* Template Name: B2B Marketing */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/b2b-marketing.css?v=<?php echo($t); ?>">

  <main id="top" class="b2b-marketing-page">
    
    <?php get_template_part( 'partials/common/_hero' ); ?>    

    <section class="b2b-marketing-idea-section">
      <div class="container">
        <div class="b2b-marketing-idea-shell">
          <div class="b2b-marketing-idea-copy">
            <span class="b2b-marketing-section-eyebrow">Big Idea</span>
            <h2>B2B Marketing Isn&rsquo;t About Traffic.</h2>
            <p class="b2b-marketing-idea-divider">It&rsquo;s About the Right Decision Makers.</p>
            <p class="b2b-marketing-idea-body">
              In B2B, one qualified lead is more valuable than thousands of random visitors.
            </p>
            <p class="b2b-marketing-idea-note">
              It&rsquo;s not about volume&mdash;it&rsquo;s about precision and intent.
            </p>
          </div>

          <div class="b2b-marketing-idea-panel">
            <span class="b2b-marketing-section-eyebrow b2b-marketing-section-eyebrow-light">Success Depends On</span>
            <div class="b2b-marketing-idea-list">
              <div class="b2b-marketing-idea-item">
                <strong>Audience fit</strong>
                <span>Reaching the right audience at the right stage.</span>
              </div>
              <div class="b2b-marketing-idea-item">
                <strong>Trust</strong>
                <span>Building trust and credibility over time.</span>
              </div>
              <div class="b2b-marketing-idea-item">
                <strong>Nurture</strong>
                <span>Nurturing prospects across long buying cycles.</span>
              </div>
              <div class="b2b-marketing-idea-item">
                <strong>Alignment</strong>
                <span>Aligning marketing with sales and pipeline goals.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="b2b-marketing-problem-section">
      <div class="container">
        <div class="b2b-marketing-problem-header">
          <span class="b2b-marketing-section-eyebrow">The Challenge</span>
          <h2>Why B2B Marketing Is Complex</h2>
          <p>
            Without the right strategy, B2B marketing becomes slow, expensive, and unpredictable.
          </p>
        </div>

        <div class="b2b-marketing-problem-grid">
          <article class="b2b-marketing-problem-card">
            <span class="b2b-marketing-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="32" cy="32" r="18" stroke="currentColor" stroke-width="3"/>
                <path d="M32 21V32L40 37" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M22 18L18 14" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M42 18L46 14" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>Longer sales cycles</h3>
          </article>

          <article class="b2b-marketing-problem-card">
            <span class="b2b-marketing-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="22" r="5" stroke="currentColor" stroke-width="3"/>
                <circle cx="44" cy="22" r="5" stroke="currentColor" stroke-width="3"/>
                <circle cx="32" cy="42" r="5" stroke="currentColor" stroke-width="3"/>
                <path d="M24 22H40" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M23 26L29 37" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M41 26L35 37" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>Multiple decision-makers</h3>
          </article>

          <article class="b2b-marketing-problem-card">
            <span class="b2b-marketing-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 50H52" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M18 42V28" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M30 42V20" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M42 42V24" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M14 18L24 28L34 22L50 38" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            <h3>High competition for attention</h3>
          </article>

          <article class="b2b-marketing-problem-card">
            <span class="b2b-marketing-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 46V18H48V46" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M24 38V30" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M32 38V24" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M40 38V28" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                <path d="M12 50H52" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
              </svg>
            </span>
            <h3>Low-quality lead generation</h3>
          </article>

          <article class="b2b-marketing-problem-card">
            <span class="b2b-marketing-problem-icon" aria-hidden="true">
              <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 18H30V30H18V18Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M34 34H46V46H34V34Z" stroke="currentColor" stroke-width="3" stroke-linejoin="round"/>
                <path d="M30 24H40V34" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24 30V40H34" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            <h3>Misalignment between marketing &amp; sales</h3>
          </article>
        </div>
      </div>
    </section>

    <section class="b2b-marketing-approach-section">
      <div class="container">
        <div class="b2b-marketing-approach-shell">
          <div class="b2b-marketing-approach-intro">
            <span class="b2b-marketing-section-eyebrow b2b-marketing-section-eyebrow-light">Our Approach</span>
            <h2>A Full-Funnel B2B Growth Strategy</h2>
            <p>
              At Anvaya Media Works, we build structured B2B marketing systems that drive consistent pipeline growth.
            </p>
            <p class="b2b-marketing-approach-note">
              Because B2B growth is built on trust, timing, and targeting.
            </p>
          </div>

          <div class="b2b-marketing-approach-grid">
            <article class="b2b-marketing-approach-card">
              <span class="b2b-marketing-approach-number">01</span>
              <h3>Target audience and persona mapping</h3>
              <p>We define the real buyers, influencers, and accounts that matter to your pipeline.</p>
            </article>

            <article class="b2b-marketing-approach-card">
              <span class="b2b-marketing-approach-number">02</span>
              <h3>Account-based marketing (ABM)</h3>
              <p>We focus effort on high-value accounts with messaging and targeting designed for relevance.</p>
            </article>

            <article class="b2b-marketing-approach-card">
              <span class="b2b-marketing-approach-number">03</span>
              <h3>Content-led lead generation</h3>
              <p>We use helpful, trust-building content to move prospects from awareness into consideration.</p>
            </article>

            <article class="b2b-marketing-approach-card">
              <span class="b2b-marketing-approach-number">04</span>
              <h3>Performance marketing campaigns</h3>
              <p>We drive qualified attention through campaigns aligned to commercial intent and sales objectives.</p>
            </article>

            <article class="b2b-marketing-approach-card">
              <span class="b2b-marketing-approach-number">05</span>
              <h3>Lead nurturing and automation</h3>
              <p>We keep prospects engaged across longer buying cycles with structured follow-up systems.</p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="b2b-marketing-funnel-section">
      <div class="container">
        <div class="b2b-marketing-funnel-header">
          <span class="b2b-marketing-section-eyebrow">B2B Funnel</span>
          <h2>Optimizing the Entire B2B Journey</h2>
          <p>
            We focus on each stage of the buyer journey so awareness, trust, pipeline movement, and retention work as one connected system.
          </p>
        </div>

        <div class="b2b-marketing-funnel-grid">
          <article class="b2b-marketing-funnel-card">
            <span class="b2b-marketing-funnel-step">01</span>
            <h3>Awareness</h3>
            <p>Positioning your brand in front of the right audience.</p>
          </article>

          <article class="b2b-marketing-funnel-card">
            <span class="b2b-marketing-funnel-step">02</span>
            <h3>Consideration</h3>
            <p>Educating and nurturing prospects with valuable content.</p>
          </article>

          <article class="b2b-marketing-funnel-card">
            <span class="b2b-marketing-funnel-step">03</span>
            <h3>Decision</h3>
            <p>Driving conversions with strong messaging and proof.</p>
          </article>

          <article class="b2b-marketing-funnel-card">
            <span class="b2b-marketing-funnel-step">04</span>
            <h3>Retention &amp; Expansion</h3>
            <p>Building long-term relationships and repeat business.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="b2b-marketing-services-section">
      <div class="container">
        <div class="b2b-marketing-services-header">
          <span class="b2b-marketing-section-eyebrow">Our B2B Marketing Services</span>
          <h2>End-to-End Solutions for Pipeline Growth</h2>
          <p>
            We combine strategy, demand generation, account targeting, automation, and optimization into one B2B pipeline growth system.
          </p>
        </div>

        <div class="b2b-marketing-services-grid">
          <article class="b2b-marketing-service-card">
            <span class="b2b-marketing-service-number">01</span>
            <h3>B2B Marketing Strategy</h3>
            <p>Custom roadmap aligned with your business goals.</p>
          </article>

          <article class="b2b-marketing-service-card">
            <span class="b2b-marketing-service-number">02</span>
            <h3>Lead Generation Campaigns</h3>
            <p>Targeted campaigns to attract high-intent prospects.</p>
          </article>

          <article class="b2b-marketing-service-card">
            <span class="b2b-marketing-service-number">03</span>
            <h3>Account-Based Marketing (ABM)</h3>
            <p>Highly personalized campaigns for key accounts.</p>
          </article>

          <article class="b2b-marketing-service-card">
            <span class="b2b-marketing-service-number">04</span>
            <h3>Content Marketing for B2B</h3>
            <p>Whitepapers, blogs, case studies, and thought leadership.</p>
          </article>

          <article class="b2b-marketing-service-card">
            <span class="b2b-marketing-service-number">05</span>
            <h3>LinkedIn &amp; Performance Marketing</h3>
            <p>Precision targeting for decision-makers.</p>
          </article>

          <article class="b2b-marketing-service-card">
            <span class="b2b-marketing-service-number">06</span>
            <h3>Marketing Automation &amp; CRM Integration</h3>
            <p>Streamlining lead nurturing and follow-ups.</p>
          </article>

          <article class="b2b-marketing-service-card">
            <span class="b2b-marketing-service-number">07</span>
            <h3>Conversion Optimization</h3>
            <p>Improving landing pages and funnels for better results.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="b2b-marketing-process-section">
      <div class="container">
        <div class="b2b-marketing-process-header">
          <span class="b2b-marketing-section-eyebrow">Process</span>
          <h2>How We Drive B2B Growth</h2>
          <p>
            We use an enterprise-minded process built for clarity, coordination, and repeatable pipeline growth.
          </p>
        </div>

        <div class="b2b-marketing-process-grid">
          <article class="b2b-marketing-process-card">
            <span class="b2b-marketing-process-number">01</span>
            <h3>Research &amp; Audience Mapping</h3>
            <p>Identify target accounts and decision-makers.</p>
          </article>

          <article class="b2b-marketing-process-card">
            <span class="b2b-marketing-process-number">02</span>
            <h3>Strategy Development</h3>
            <p>Define channels, messaging, and funnel.</p>
          </article>

          <article class="b2b-marketing-process-card">
            <span class="b2b-marketing-process-number">03</span>
            <h3>Campaign Execution</h3>
            <p>Launch targeted campaigns across platforms.</p>
          </article>

          <article class="b2b-marketing-process-card">
            <span class="b2b-marketing-process-number">04</span>
            <h3>Lead Nurturing</h3>
            <p>Engage and educate prospects over time.</p>
          </article>

          <article class="b2b-marketing-process-card">
            <span class="b2b-marketing-process-number">05</span>
            <h3>Optimization &amp; Scaling</h3>
            <p>Improve performance and scale successful campaigns.</p>
          </article>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
