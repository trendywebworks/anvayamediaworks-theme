<?php
$pageTitle = 'Gaming Solutions | Anvaya Media Works';
$pageDescription = 'Help your game grow with player acquisition, onboarding optimization, retention systems, community marketing, and performance-led digital growth from Anvaya Media Works.';
$pageStyles = ['assets/css/industry-solutions.css'];

$solutionName = 'Gaming';
$solutionHeroTagline = 'Acquire Players. Increase Engagement. Scale Your Game.';
$solutionHeroLead = 'We help gaming brands, studios, and platforms grow their user base, boost engagement, and maximize monetization through data-driven marketing and high-performance digital solutions.';
$solutionHeroPrimaryCta = 'Get Free Game Growth Audit';
$solutionHeroSecondaryCta = 'Scale Your Game';
$solutionHeroImage = 'assets/images/solutions/hero-gaming.png';

$solutionInsightHeading = 'In Gaming, Growth Depends on Engagement.';
$solutionInsightBody = 'Downloads are just the beginning. The real challenge is keeping players engaged and coming back.';
$solutionInsightNote = 'Success comes from building experiences players do not want to leave.';
$solutionInsightPanelLabel = 'Common Challenges';
$solutionInsightChallenges = [
  ['title' => 'Acquisition costs', 'description' => 'High user acquisition costs'],
  ['title' => 'Retention gaps', 'description' => 'Low retention and churn issues'],
  ['title' => 'Onboarding friction', 'description' => 'Weak onboarding experience'],
  ['title' => 'Monetization issues', 'description' => 'Poor monetization strategy'],
  ['title' => 'Community weakness', 'description' => 'Lack of community engagement'],
];

$solutionApproachHeading = 'A Player-Centric Growth Strategy';
$solutionApproachBody = 'At Anvaya Media Works, we focus on building engagement-driven growth systems for gaming brands.';
$solutionApproachNote = 'Because in gaming, engagement = growth = revenue.';
$solutionApproachItems = [
  ['title' => 'Player acquisition strategies', 'description' => 'We help attract qualified players through channel strategy, creative testing, and performance campaigns.'],
  ['title' => 'Onboarding optimization', 'description' => 'We improve first-session experiences so more installs convert into active players.'],
  ['title' => 'Retention and engagement systems', 'description' => 'We build communication and re-engagement loops that increase session consistency and return behavior.'],
  ['title' => 'Community and influencer growth', 'description' => 'We use creators, communities, and social ecosystems to deepen visibility and advocacy.'],
  ['title' => 'Data-driven performance marketing', 'description' => 'We track behavior and results closely so acquisition and retention improve together.'],
];

$solutionSolveHeading = 'Solving Real Gaming Growth Challenges';
$solutionSolveIntro = 'We address the acquisition, retention, engagement, and monetization issues that prevent games from scaling efficiently.';
$solutionSolveItems = [
  'Acquire high-quality players',
  'Improve retention and reduce churn',
  'Increase session time and engagement',
  'Optimize monetization strategies',
  'Enhance onboarding experience',
  'Build strong gaming communities',
];

$solutionServicesHeading = 'End-to-End Solutions for Gaming Brands';
$solutionServicesIntro = 'We connect acquisition, onboarding, retention, community growth, and analytics into one player-focused growth system.';
$solutionServices = [
  ['title' => 'Game Website & Landing Pages', 'description' => 'High-converting pages for downloads, sign-ups, and updates.'],
  ['title' => 'Performance Marketing (User Acquisition)', 'description' => 'Targeted campaigns across Google, Meta, and gaming platforms.'],
  ['title' => 'App Store Optimization (ASO)', 'description' => 'Improving visibility and downloads on app stores.'],
  ['title' => 'Conversion Rate Optimization (CRO)', 'description' => 'Enhancing onboarding and in-game conversion flows.'],
  ['title' => 'Influencer & Community Marketing', 'description' => 'Leveraging streamers, creators, and gaming communities.'],
  ['title' => 'Retention & Lifecycle Marketing', 'description' => 'Push notifications, email campaigns, and re-engagement.'],
  ['title' => 'Analytics & Growth Tracking', 'description' => 'Tracking player behavior and optimizing performance.'],
];

$solutionJourneyEyebrow = 'Player Journey';
$solutionJourneyHeading = 'Optimizing Every Stage of the Player Experience';
$solutionJourneyIntro = 'We shape the full player journey so discovery, activation, engagement, retention, and monetization perform together.';
$solutionJourneyStages = [
  ['title' => 'Discover', 'description' => 'Players find your game through ads, ASO, and social.'],
  ['title' => 'Install', 'description' => 'Smooth and compelling onboarding experience.'],
  ['title' => 'Engage', 'description' => 'Interactive gameplay and regular engagement.'],
  ['title' => 'Retain', 'description' => 'Rewards, updates, and communication strategies.'],
  ['title' => 'Monetize', 'description' => 'In-app purchases, subscriptions, and upgrades.'],
];

$solutionAudienceHeading = 'Supporting Gaming Businesses';
$solutionAudienceIntro = 'We work with gaming companies that need stronger acquisition, retention, community building, and revenue growth systems.';
$solutionAudienceItems = [
  'Mobile game developers',
  'PC & console game studios',
  'Gaming startups',
  'Esports platforms',
  'Gaming communities and platforms',
];

$solutionProcessHeading = 'How We Scale Gaming Brands';
$solutionProcessIntro = 'Our process helps align player acquisition, platform optimization, retention, and monetization so your game can grow more efficiently.';
$solutionProcessSteps = [
  ['title' => 'Audit & Insights', 'description' => 'Analyze player behavior and growth metrics.'],
  ['title' => 'Strategy Development', 'description' => 'Create acquisition and retention roadmap.'],
  ['title' => 'Execution', 'description' => 'Launch campaigns and optimize platform.'],
  ['title' => 'Test & Optimize', 'description' => 'Improve engagement and performance.'],
  ['title' => 'Scale & Expand', 'description' => 'Grow player base and revenue.'],
];

$solutionInsightEyebrow = $solutionInsightEyebrow ?? 'Industry Insight';
$solutionApproachEyebrow = $solutionApproachEyebrow ?? 'Our Approach';
$solutionSolveEyebrow = $solutionSolveEyebrow ?? 'What We Solve';
$solutionServicesEyebrow = $solutionServicesEyebrow ?? 'Our Solutions';
$solutionJourneyEyebrow = $solutionJourneyEyebrow ?? 'Journey';
$solutionAudienceEyebrow = $solutionAudienceEyebrow ?? 'Who We Work With';
$solutionProcessEyebrow = $solutionProcessEyebrow ?? 'Process';

?>

<?php /* Template Name: Gaming */ get_header(); ?>

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