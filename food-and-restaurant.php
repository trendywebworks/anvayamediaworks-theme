<?php
$pageTitle = 'Food & Restaurant Solutions | Anvaya Media Works';
$pageDescription = 'Grow restaurants and food brands with stronger local discovery, ordering journeys, performance marketing, retention systems, and reputation management from Anvaya Media Works.';
$pageStyles = ['assets/css/industry-solutions.css'];

$solutionName = 'Food & Restaurant';
$solutionHeroTagline = 'Attract More Customers. Increase Orders. Grow Your Restaurant.';
$solutionHeroLead = 'We help restaurants, cafes, cloud kitchens, and food brands boost visibility, drive orders, and build loyal customer bases through strategic marketing and high-performance digital solutions.';
$solutionHeroPrimaryCta = 'Get Free Restaurant Growth Audit';
$solutionHeroSecondaryCta = 'Increase Orders Today';
$solutionHeroImage = 'assets/images/solutions/hero-food-and-restaurant.png';

$solutionInsightHeading = 'Great Food Deserves Great Visibility.';
$solutionInsightBody = 'No matter how amazing your food is - if people cannot find you, they will not order from you.';
$solutionInsightNote = 'Growth comes from being visible, desirable, and easy to order from.';
$solutionInsightPanelLabel = 'Common Challenges';
$solutionInsightChallenges = [
  ['title' => 'Discovery gaps', 'description' => 'Low online visibility'],
  ['title' => 'Aggregator dependence', 'description' => 'Heavy dependence on aggregators'],
  ['title' => 'Margin pressure', 'description' => 'High commission fees'],
  ['title' => 'Demand inconsistency', 'description' => 'Inconsistent footfall or orders'],
  ['title' => 'Retention issues', 'description' => 'Poor customer retention'],
];

$solutionApproachHeading = 'A Growth System for Food Brands';
$solutionApproachBody = 'At Anvaya Media Works, we create end-to-end restaurant growth systems designed to increase both footfall and online orders.';
$solutionApproachNote = 'Because in food business, visibility + experience = sales.';
$solutionApproachItems = [
  ['title' => 'Local discovery optimization', 'description' => 'We improve how easily nearby customers can find your restaurant across search and maps.'],
  ['title' => 'Visual branding and content', 'description' => 'We use appetite-led creative and consistent brand storytelling to increase interest and recall.'],
  ['title' => 'Performance marketing campaigns', 'description' => 'We drive targeted traffic for orders, reservations, and walk-ins with measurable campaigns.'],
  ['title' => 'Menu and conversion optimization', 'description' => 'We improve ordering journeys and menu presentation so more visits turn into revenue.'],
  ['title' => 'Customer retention strategies', 'description' => 'We build repeat-order systems through offers, follow-ups, and loyalty communication.'],
];

$solutionSolveHeading = 'Solving Real Restaurant Growth Challenges';
$solutionSolveIntro = 'We focus on the discovery, ordering, retention, and margin challenges that make restaurant growth harder to sustain.';
$solutionSolveItems = [
  'Increase local visibility and discovery',
  'Boost online orders and reservations',
  'Improve footfall and walk-ins',
  'Reduce dependency on aggregators',
  'Increase repeat customers',
  'Build strong online reputation',
];

$solutionServicesHeading = 'End-to-End Solutions for Restaurants & Food Brands';
$solutionServicesIntro = 'We connect discoverability, content, ordering experience, retention, and reputation into one restaurant growth system.';
$solutionServices = [
  ['title' => 'Website & Online Ordering Setup', 'description' => 'Fast, mobile-friendly websites with seamless ordering experience.'],
  ['title' => 'Local SEO & Google Optimization', 'description' => 'Ranking your restaurant in local searches and maps.'],
  ['title' => 'Performance Marketing (Ads)', 'description' => 'Targeted campaigns to drive orders and footfall.'],
  ['title' => 'Social Media Marketing', 'description' => 'Creating visually engaging food content that attracts customers.'],
  ['title' => 'Menu & Conversion Optimization', 'description' => 'Designing menus that drive higher order value.'],
  ['title' => 'Email, WhatsApp & Retention Marketing', 'description' => 'Offers, discounts, and engagement campaigns.'],
  ['title' => 'Reputation & Review Management', 'description' => 'Improving ratings and customer trust.'],
];

$solutionJourneyEyebrow = 'Customer Journey';
$solutionJourneyHeading = 'From Discovery to Repeat Orders';
$solutionJourneyIntro = 'We improve the customer journey so visibility, confidence, ordering, and repeat behavior all support stronger restaurant growth.';
$solutionJourneyStages = [
  ['title' => 'Discover', 'description' => 'Customers find you via Google, Instagram, or ads.'],
  ['title' => 'Explore', 'description' => 'They check menu, reviews, and visuals.'],
  ['title' => 'Decide', 'description' => 'Choosing based on ratings, offers, and experience.'],
  ['title' => 'Order / Visit', 'description' => 'Online order or physical visit.'],
  ['title' => 'Return', 'description' => 'Loyalty, offers, and engagement bring them back.'],
];

$solutionAudienceHeading = 'Supporting Food & Restaurant Businesses';
$solutionAudienceIntro = 'We help food businesses that need stronger local demand, better retention, and more profitable ordering systems.';
$solutionAudienceItems = [
  'Restaurants & fine dining',
  'Cafes & bakeries',
  'Cloud kitchens',
  'Quick service restaurants (QSRs)',
  'Food brands & startups',
  'Franchise food chains',
];

$solutionProcessHeading = 'How We Drive Orders & Growth';
$solutionProcessIntro = 'Our process aligns local visibility, campaigns, ordering experience, and retention so restaurant growth becomes more predictable.';
$solutionProcessSteps = [
  ['title' => 'Audit & Insights', 'description' => 'Analyze your current presence and performance.'],
  ['title' => 'Strategy Development', 'description' => 'Create a customized growth plan.'],
  ['title' => 'Implementation', 'description' => 'Optimize website, campaigns, and content.'],
  ['title' => 'Test & Optimize', 'description' => 'Improve performance continuously.'],
  ['title' => 'Scale & Grow', 'description' => 'Increase orders, footfall, and revenue.'],
];

$solutionInsightEyebrow = $solutionInsightEyebrow ?? 'Industry Insight';
$solutionApproachEyebrow = $solutionApproachEyebrow ?? 'Our Approach';
$solutionSolveEyebrow = $solutionSolveEyebrow ?? 'What We Solve';
$solutionServicesEyebrow = $solutionServicesEyebrow ?? 'Our Solutions';
$solutionJourneyEyebrow = $solutionJourneyEyebrow ?? 'Journey';
$solutionAudienceEyebrow = $solutionAudienceEyebrow ?? 'Who We Work With';
$solutionProcessEyebrow = $solutionProcessEyebrow ?? 'Process';

?>

<?php /* Template Name: Food and Restaurant */ get_header(); ?>

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