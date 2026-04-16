<?php
$pageTitle = 'Real Estate Solutions | Anvaya Media Works';
$pageDescription = 'Generate stronger property leads with real estate landing pages, performance campaigns, SEO, lead nurturing, and digital sales systems from Anvaya Media Works.';
$pageStyles = ['assets/css/industry-solutions.css'];

$solutionName = 'Real Estate';
$solutionHeroTagline = 'Generate High-Quality Leads. Close More Deals. Scale Your Projects.';
$solutionHeroLead = 'We help real estate developers, builders, and agencies attract serious buyers, generate qualified leads, and accelerate sales through data-driven marketing and high-performance digital solutions.';
$solutionHeroPrimaryCta = 'Get Free Real Estate Marketing Audit';
$solutionHeroSecondaryCta = 'Generate Quality Leads';
$solutionHeroImage = 'assets/images/solutions/hero-realestate.png';

$solutionInsightHeading = 'Real Estate Sales Start Online.';
$solutionInsightBody = 'Today\'s buyers research, compare, and shortlist properties online before making any decision.';
$solutionInsightNote = 'To succeed, you need more than visibility - you need qualified intent and trust.';
$solutionInsightPanelLabel = 'Common Challenges';
$solutionInsightChallenges = [
  ['title' => 'Lead quality', 'description' => 'Low-quality or irrelevant leads'],
  ['title' => 'Cost pressure', 'description' => 'High cost per lead (CPL)'],
  ['title' => 'Project visibility', 'description' => 'Poor project visibility'],
  ['title' => 'Digital presence', 'description' => 'Weak digital presence'],
  ['title' => 'Sales delays', 'description' => 'Long sales cycles'],
];

$solutionApproachHeading = 'A Lead-Focused Growth Strategy';
$solutionApproachBody = 'At Anvaya Media Works, we build end-to-end real estate marketing systems designed to generate high-quality leads and conversions.';
$solutionApproachNote = 'Because in real estate, quality leads matter more than quantity.';
$solutionApproachItems = [
  ['title' => 'Targeted audience segmentation', 'description' => 'We identify and reach buyer segments most likely to convert with better fit and intent.'],
  ['title' => 'High-converting landing pages', 'description' => 'We create project pages built to improve lead capture and reduce drop-off.'],
  ['title' => 'Performance marketing campaigns', 'description' => 'We run media campaigns designed around qualified inquiries and sales momentum.'],
  ['title' => 'Visual storytelling for projects & properties', 'description' => 'We present projects with stronger narratives, visuals, and credibility signals.'],
  ['title' => 'Lead nurturing systems', 'description' => 'We build follow-up flows that help prospects move from inquiry to visit to conversion.'],
];

$solutionSolveHeading = 'Solving Real Real Estate Challenges';
$solutionSolveIntro = 'We focus on the lead quality, visibility, intent, and nurturing issues that slow down property sales and project growth.';
$solutionSolveItems = [
  'Generate high-intent buyer leads',
  'Reduce cost per lead (CPL)',
  'Increase site visits and inquiries',
  'Target the right audience segments',
  'Improve digital experience',
  'Nurture leads for faster conversions',
];

$solutionServicesHeading = 'End-to-End Solutions for Real Estate Brands';
$solutionServicesIntro = 'We combine demand generation, project storytelling, landing pages, lead management, and nurturing into one conversion-focused real estate system.';
$solutionServices = [
  ['title' => 'Real Estate Website & Landing Pages', 'description' => 'High-converting pages for projects and properties.'],
  ['title' => 'Performance Marketing (Ads)', 'description' => 'Targeted campaigns on Google, Meta, and property platforms.'],
  ['title' => 'SEO for Real Estate', 'description' => 'Ranking for location-based and property-specific keywords.'],
  ['title' => 'Content & Visual Marketing', 'description' => 'Showcasing properties through high-quality visuals and content.'],
  ['title' => 'Lead Generation & Funnel Optimization', 'description' => 'Optimized forms, CTAs, and conversion flows.'],
  ['title' => 'CRM & Lead Management Integration', 'description' => 'Streamlining lead tracking and follow-ups.'],
  ['title' => 'Retargeting & Nurturing Campaigns', 'description' => 'Re-engaging interested buyers.'],
];

$solutionJourneyEyebrow = 'Buyer Journey';
$solutionJourneyHeading = 'Optimizing the Entire Buyer Journey';
$solutionJourneyIntro = 'We improve the journey from discovery to conversion so buyer intent is captured, nurtured, and moved forward more effectively.';
$solutionJourneyStages = [
  ['title' => 'Discover', 'description' => 'Buyers find your project via ads, search, or social.'],
  ['title' => 'Explore', 'description' => 'They view project details, amenities, and location.'],
  ['title' => 'Evaluate', 'description' => 'Comparing options, pricing, and credibility.'],
  ['title' => 'Inquire', 'description' => 'Submitting forms or contacting sales.'],
  ['title' => 'Convert', 'description' => 'Site visits, negotiations, and final purchase.'],
];

$solutionAudienceHeading = 'Supporting Real Estate Businesses';
$solutionAudienceIntro = 'We work with real estate brands that need stronger lead quality, clearer positioning, and better digital conversion systems.';
$solutionAudienceItems = [
  'Builders & developers',
  'Real estate agencies',
  'Property consultants',
  'Commercial real estate firms',
  'Residential and luxury projects',
];

$solutionProcessHeading = 'How We Drive Real Estate Growth';
$solutionProcessIntro = 'Our process aligns audience research, campaigns, landing pages, and lead optimization so sales teams receive better opportunities.';
$solutionProcessSteps = [
  ['title' => 'Market & Audience Research', 'description' => 'Identify target buyers and segments.'],
  ['title' => 'Strategy Development', 'description' => 'Define campaigns, messaging, and funnel.'],
  ['title' => 'Campaign Execution', 'description' => 'Launch ads and optimize digital presence.'],
  ['title' => 'Lead Optimization', 'description' => 'Improve lead quality and conversions.'],
  ['title' => 'Scale & Close', 'description' => 'Increase pipeline and deal closures.'],
];

$solutionInsightEyebrow = $solutionInsightEyebrow ?? 'Industry Insight';
$solutionApproachEyebrow = $solutionApproachEyebrow ?? 'Our Approach';
$solutionSolveEyebrow = $solutionSolveEyebrow ?? 'What We Solve';
$solutionServicesEyebrow = $solutionServicesEyebrow ?? 'Our Solutions';
$solutionJourneyEyebrow = $solutionJourneyEyebrow ?? 'Journey';
$solutionAudienceEyebrow = $solutionAudienceEyebrow ?? 'Who We Work With';
$solutionProcessEyebrow = $solutionProcessEyebrow ?? 'Process';

?>

<?php /* Template Name: Real Estate */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/industry-solutions.css?v=<?php echo($t); ?>">


  <main id="top" class="industry-solution-page">
    <section class="industry-solution-hero-section">
      <div class="container industry-solution-hero-grid">
        <div class="industry-solution-hero-copy">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1><?php echo htmlspecialchars($solutionName, ENT_QUOTES, 'UTF-8'); ?></h1>
          <p class="industry-solution-hero-tagline">
            <?php echo htmlspecialchars($solutionHeroTagline, ENT_QUOTES, 'UTF-8'); ?>
          </p>
          <p class="industry-solution-hero-lead">
            <?php echo htmlspecialchars($solutionHeroLead, ENT_QUOTES, 'UTF-8'); ?>
          </p>

          <div class="industry-solution-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">
              <?php echo htmlspecialchars($solutionHeroPrimaryCta, ENT_QUOTES, 'UTF-8'); ?>
            </a>
            <a class="btn btn-amw btn-amw-secondary" href="<?php echo home_url(); ?>/contact/">
              <?php echo htmlspecialchars($solutionHeroSecondaryCta, ENT_QUOTES, 'UTF-8'); ?>
            </a>
          </div>
        </div>

        <div class="industry-solution-hero-visual" aria-hidden="true">
          <img
            class="industry-solution-hero-image"
            src="<?php bloginfo('template_directory'); ?>/<?php echo htmlspecialchars($solutionHeroImage, ENT_QUOTES, 'UTF-8'); ?>"
            alt=""
          >
        </div>
      </div>
    </section>

    <section class="industry-solution-insight-section">
      <div class="container">
        <div class="industry-solution-insight-shell">
          <div class="industry-solution-insight-copy">
            <span class="industry-solution-section-eyebrow"><?php echo htmlspecialchars($solutionInsightEyebrow, ENT_QUOTES, 'UTF-8'); ?></span>
            <h2><?php echo htmlspecialchars($solutionInsightHeading, ENT_QUOTES, 'UTF-8'); ?></h2>
            <p class="industry-solution-insight-body">
              <?php echo htmlspecialchars($solutionInsightBody, ENT_QUOTES, 'UTF-8'); ?>
            </p>
            <p class="industry-solution-insight-note">
              <?php echo htmlspecialchars($solutionInsightNote, ENT_QUOTES, 'UTF-8'); ?>
            </p>
          </div>

          <div class="industry-solution-insight-panel">
            <span class="industry-solution-section-eyebrow industry-solution-section-eyebrow-light"><?php echo htmlspecialchars($solutionInsightPanelLabel, ENT_QUOTES, 'UTF-8'); ?></span>
            <div class="industry-solution-insight-list">
              <?php foreach ($solutionInsightChallenges as $challenge) : ?>
                <div class="industry-solution-insight-item">
                  <strong><?php echo htmlspecialchars($challenge['title'], ENT_QUOTES, 'UTF-8'); ?></strong>
                  <span><?php echo htmlspecialchars($challenge['description'], ENT_QUOTES, 'UTF-8'); ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="industry-solution-approach-section">
      <div class="container">
        <div class="industry-solution-approach-shell">
          <div class="industry-solution-approach-intro">
            <span class="industry-solution-section-eyebrow industry-solution-section-eyebrow-light"><?php echo htmlspecialchars($solutionApproachEyebrow, ENT_QUOTES, 'UTF-8'); ?></span>
            <h2><?php echo htmlspecialchars($solutionApproachHeading, ENT_QUOTES, 'UTF-8'); ?></h2>
            <p>
              <?php echo htmlspecialchars($solutionApproachBody, ENT_QUOTES, 'UTF-8'); ?>
            </p>
            <p class="industry-solution-approach-note">
              <?php echo htmlspecialchars($solutionApproachNote, ENT_QUOTES, 'UTF-8'); ?>
            </p>
          </div>

          <div class="industry-solution-approach-grid">
            <?php foreach ($solutionApproachItems as $index => $item) : ?>
              <article class="industry-solution-approach-card">
                <span class="industry-solution-approach-number"><?php echo sprintf('%02d', $index + 1); ?></span>
                <h3><?php echo htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                <p><?php echo htmlspecialchars($item['description'], ENT_QUOTES, 'UTF-8'); ?></p>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <section class="industry-solution-solve-section">
      <div class="container">
        <div class="industry-solution-solve-header">
          <span class="industry-solution-section-eyebrow"><?php echo htmlspecialchars($solutionSolveEyebrow, ENT_QUOTES, 'UTF-8'); ?></span>
          <h2><?php echo htmlspecialchars($solutionSolveHeading, ENT_QUOTES, 'UTF-8'); ?></h2>
          <p>
            <?php echo htmlspecialchars($solutionSolveIntro, ENT_QUOTES, 'UTF-8'); ?>
          </p>
        </div>

        <div class="industry-solution-solve-grid">
          <?php foreach ($solutionSolveItems as $item) : ?>
            <article class="industry-solution-solve-card">
              <h3><?php echo htmlspecialchars($item, ENT_QUOTES, 'UTF-8'); ?></h3>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="industry-solution-services-section">
      <div class="container">
        <div class="industry-solution-services-header">
          <span class="industry-solution-section-eyebrow"><?php echo htmlspecialchars($solutionServicesEyebrow, ENT_QUOTES, 'UTF-8'); ?></span>
          <h2><?php echo htmlspecialchars($solutionServicesHeading, ENT_QUOTES, 'UTF-8'); ?></h2>
          <p>
            <?php echo htmlspecialchars($solutionServicesIntro, ENT_QUOTES, 'UTF-8'); ?>
          </p>
        </div>

        <div class="industry-solution-services-grid">
          <?php foreach ($solutionServices as $index => $service) : ?>
            <article class="industry-solution-service-card">
              <span class="industry-solution-service-number"><?php echo sprintf('%02d', $index + 1); ?></span>
              <h3><?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
              <p><?php echo htmlspecialchars($service['description'], ENT_QUOTES, 'UTF-8'); ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="industry-solution-journey-section">
      <div class="container">
        <div class="industry-solution-journey-header">
          <span class="industry-solution-section-eyebrow"><?php echo htmlspecialchars($solutionJourneyEyebrow, ENT_QUOTES, 'UTF-8'); ?></span>
          <h2><?php echo htmlspecialchars($solutionJourneyHeading, ENT_QUOTES, 'UTF-8'); ?></h2>
          <p>
            <?php echo htmlspecialchars($solutionJourneyIntro, ENT_QUOTES, 'UTF-8'); ?>
          </p>
        </div>

        <div class="industry-solution-journey-grid">
          <?php foreach ($solutionJourneyStages as $index => $stage) : ?>
            <article class="industry-solution-journey-card">
              <span class="industry-solution-journey-step"><?php echo sprintf('%02d', $index + 1); ?></span>
              <h3><?php echo htmlspecialchars($stage['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
              <p><?php echo htmlspecialchars($stage['description'], ENT_QUOTES, 'UTF-8'); ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="industry-solution-audience-section">
      <div class="container">
        <div class="industry-solution-audience-shell">
          <div class="industry-solution-audience-header">
            <span class="industry-solution-section-eyebrow"><?php echo htmlspecialchars($solutionAudienceEyebrow, ENT_QUOTES, 'UTF-8'); ?></span>
            <h2><?php echo htmlspecialchars($solutionAudienceHeading, ENT_QUOTES, 'UTF-8'); ?></h2>
            <p>
              <?php echo htmlspecialchars($solutionAudienceIntro, ENT_QUOTES, 'UTF-8'); ?>
            </p>
          </div>

          <div class="industry-solution-audience-grid">
            <?php foreach ($solutionAudienceItems as $item) : ?>
              <span><?php echo htmlspecialchars($item, ENT_QUOTES, 'UTF-8'); ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <section class="industry-solution-process-section">
      <div class="container">
        <div class="industry-solution-process-header">
          <span class="industry-solution-section-eyebrow"><?php echo htmlspecialchars($solutionProcessEyebrow, ENT_QUOTES, 'UTF-8'); ?></span>
          <h2><?php echo htmlspecialchars($solutionProcessHeading, ENT_QUOTES, 'UTF-8'); ?></h2>
          <p>
            <?php echo htmlspecialchars($solutionProcessIntro, ENT_QUOTES, 'UTF-8'); ?>
          </p>
        </div>

        <div class="industry-solution-process-grid">
          <?php foreach ($solutionProcessSteps as $index => $step) : ?>
            <article class="industry-solution-process-card">
              <span class="industry-solution-process-number"><?php echo sprintf('%02d', $index + 1); ?></span>
              <h3><?php echo htmlspecialchars($step['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
              <p><?php echo htmlspecialchars($step['description'], ENT_QUOTES, 'UTF-8'); ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
