<?php
$pageTitle = 'Travel & Hospitality Solutions | Anvaya Media Works';
$pageDescription = 'Drive direct bookings and stronger hospitality growth with travel branding, booking optimization, performance marketing, SEO, and retention systems from Anvaya Media Works.';
$pageStyles = ['assets/css/industry-solutions.css'];

$solutionName = 'Travel & Hospitality';
$solutionHeroTagline = 'Inspire Travel. Increase Bookings. Grow Your Brand.';
$solutionHeroLead = 'We help hotels, resorts, travel brands, and hospitality businesses attract the right audience, drive direct bookings, and create unforgettable digital experiences that convert.';
$solutionHeroPrimaryCta = 'Get Free Growth Audit';
$solutionHeroSecondaryCta = 'Increase Bookings';
$solutionHeroImage = 'assets/images/solutions/hero-travel-and-hospitality.png';

$solutionInsightHeading = 'Travel Begins with Inspiration. But Bookings Happen with Trust.';
$solutionInsightBody = 'Today\'s travelers explore, compare, and decide online before making a booking.';
$solutionInsightNote = 'To grow, you need more than presence - you need persuasion and experience.';
$solutionInsightPanelLabel = 'Common Challenges';
$solutionInsightChallenges = [
  ['title' => 'OTA dependence', 'description' => 'Heavy dependency on OTAs'],
  ['title' => 'Direct booking gaps', 'description' => 'Low direct bookings'],
  ['title' => 'Market competition', 'description' => 'High competition'],
  ['title' => 'Visibility issues', 'description' => 'Poor online visibility'],
  ['title' => 'Brand differentiation', 'description' => 'Weak brand differentiation'],
];

$solutionApproachHeading = 'A Guest-Centric Growth Strategy';
$solutionApproachBody = 'At Anvaya Media Works, we focus on building experience-driven digital systems that turn interest into bookings.';
$solutionApproachNote = 'Because every booking starts with a digital impression.';
$solutionApproachItems = [
  ['title' => 'Visual storytelling and branding', 'description' => 'We help shape a more inspiring digital presence that highlights your experience and value.'],
  ['title' => 'Performance marketing', 'description' => 'We drive qualified travel intent through campaigns built to increase inquiries and direct bookings.'],
  ['title' => 'Conversion-focused website design', 'description' => 'We improve digital journeys so guests can move from exploration to booking with less friction.'],
  ['title' => 'SEO and local discovery', 'description' => 'We strengthen search visibility for destinations, stays, experiences, and local intent.'],
  ['title' => 'Retention and loyalty strategies', 'description' => 'We create follow-up systems that encourage repeat stays and stronger guest relationships.'],
];

$solutionSolveHeading = 'Solving Real Travel & Hospitality Challenges';
$solutionSolveIntro = 'We focus on the visibility, booking, differentiation, and retention challenges that make sustainable hospitality growth harder.';
$solutionSolveItems = [
  'Increase direct bookings',
  'Improve search and local visibility',
  'Reduce dependency on third-party platforms',
  'Enhance brand storytelling',
  'Maximize ROI on marketing spend',
  'Build guest loyalty and repeat bookings',
];

$solutionServicesHeading = 'End-to-End Solutions for Hospitality Brands';
$solutionServicesIntro = 'We combine inspiration, discoverability, conversion, reputation, and retention into one booking-focused hospitality growth system.';
$solutionServices = [
  ['title' => 'Website Design & Booking Optimization', 'description' => 'High-converting websites with seamless booking experience.'],
  ['title' => 'SEO & Local Search Optimization', 'description' => 'Ranking for destinations, stays, and travel queries.'],
  ['title' => 'Performance Marketing (Ads)', 'description' => 'Targeted campaigns across Google, Meta, and travel platforms.'],
  ['title' => 'Social Media & Content Marketing', 'description' => 'Visual storytelling to inspire and engage travelers.'],
  ['title' => 'Email & Retention Marketing', 'description' => 'Re-engaging guests with offers and updates.'],
  ['title' => 'Reputation Management', 'description' => 'Managing reviews and improving online credibility.'],
  ['title' => 'Conversion Rate Optimization (CRO)', 'description' => 'Improving booking flows and reducing drop-offs.'],
];

$solutionJourneyEyebrow = 'Guest Journey';
$solutionJourneyHeading = 'Optimizing Every Step of the Travel Experience';
$solutionJourneyIntro = 'We improve the booking journey so inspiration, research, conversion, and retention work as one continuous guest experience.';
$solutionJourneyStages = [
  ['title' => 'Discover', 'description' => 'Travelers find your brand through search, ads, or social.'],
  ['title' => 'Explore', 'description' => 'They browse rooms, experiences, and amenities.'],
  ['title' => 'Decide', 'description' => 'Comparing options, reviews, and pricing.'],
  ['title' => 'Book', 'description' => 'Seamless and frictionless booking experience.'],
  ['title' => 'Return', 'description' => 'Follow-ups, offers, and loyalty engagement.'],
];

$solutionAudienceHeading = 'Supporting Travel & Hospitality Businesses';
$solutionAudienceIntro = 'We support hospitality brands that need stronger direct bookings, better differentiation, and more valuable guest relationships.';
$solutionAudienceItems = [
  'Hotels & resorts',
  'Homestays & boutique stays',
  'Travel agencies & tour operators',
  'Hospitality brands',
  'Vacation rentals',
  'Experience-based travel platforms',
];

$solutionProcessHeading = 'How We Drive Bookings & Growth';
$solutionProcessIntro = 'Our process aligns digital experience, demand generation, and optimization so hospitality brands can increase bookings more efficiently.';
$solutionProcessSteps = [
  ['title' => 'Audit & Insights', 'description' => 'Analyze your current presence and performance.'],
  ['title' => 'Strategy Development', 'description' => 'Create a growth plan tailored to your brand.'],
  ['title' => 'Implementation', 'description' => 'Optimize website, campaigns, and content.'],
  ['title' => 'Test & Optimize', 'description' => 'Continuously improve performance.'],
  ['title' => 'Scale & Grow', 'description' => 'Increase bookings and brand visibility.'],
];


$solutionInsightEyebrow = $solutionInsightEyebrow ?? 'Industry Insight';
$solutionApproachEyebrow = $solutionApproachEyebrow ?? 'Our Approach';
$solutionSolveEyebrow = $solutionSolveEyebrow ?? 'What We Solve';
$solutionServicesEyebrow = $solutionServicesEyebrow ?? 'Our Solutions';
$solutionJourneyEyebrow = $solutionJourneyEyebrow ?? 'Journey';
$solutionAudienceEyebrow = $solutionAudienceEyebrow ?? 'Who We Work With';
$solutionProcessEyebrow = $solutionProcessEyebrow ?? 'Process';

?>

<?php /* Template Name: Travel and Hospitality */ get_header(); ?>

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
