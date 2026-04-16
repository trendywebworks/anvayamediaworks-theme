<?php
$pageTitle = 'Social & Dating Solutions | Anvaya Media Works';
$pageDescription = 'Grow social and dating platforms with smarter user acquisition, onboarding optimization, retention systems, and engagement-focused marketing from Anvaya Media Works.';
$pageStyles = ['assets/css/industry-solutions.css'];

$solutionName = 'Social & Dating';
$solutionHeroTagline = 'Build Connections. Drive Engagement. Grow Your Platform.';
$solutionHeroLead = 'We help social and dating platforms attract the right users, increase engagement, and build meaningful connections through data-driven strategies and scalable digital solutions.';
$solutionHeroPrimaryCta = 'Get Free Growth Audit';
$solutionHeroSecondaryCta = 'Scale Your Platform';
$solutionHeroImage = 'assets/images/solutions/hero-social-and-dating.png';

$solutionInsightHeading = 'In Social & Dating, Engagement Is Everything.';
$solutionInsightBody = 'Success is not just about acquiring users - it is about keeping them engaged and active.';
$solutionInsightNote = 'Growth happens when users connect, interact, and return.';
$solutionInsightPanelLabel = 'Common Challenges';
$solutionInsightChallenges = [
  ['title' => 'Acquisition pressure', 'description' => 'High user acquisition costs'],
  ['title' => 'Retention gaps', 'description' => 'Low engagement and retention'],
  ['title' => 'Onboarding friction', 'description' => 'Poor onboarding experience'],
  ['title' => 'Trust signals', 'description' => 'Weak trust and safety perception'],
  ['title' => 'Churn issues', 'description' => 'High churn rates'],
];

$solutionApproachHeading = 'A User-Centric Growth Strategy';
$solutionApproachBody = 'At Anvaya Media Works, we focus on building engagement-driven ecosystems for social and dating platforms.';
$solutionApproachNote = 'Because in this industry, retention is the real growth metric.';
$solutionApproachItems = [
  ['title' => 'User acquisition strategies', 'description' => 'We attract high-fit users through audience targeting, channel strategy, and performance campaigns.'],
  ['title' => 'Onboarding optimization', 'description' => 'We remove friction from first-touch experiences so more users activate faster.'],
  ['title' => 'Engagement and retention systems', 'description' => 'We design content, communication, and behavioral loops that keep users active.'],
  ['title' => 'Trust-building and brand positioning', 'description' => 'We strengthen credibility so users feel safer, more confident, and more willing to engage.'],
  ['title' => 'Data-driven growth optimization', 'description' => 'We use user behavior insights to refine acquisition, activation, and retention continuously.'],
];

$solutionSolveHeading = 'Solving Real Platform Growth Challenges';
$solutionSolveIntro = 'We focus on the acquisition, activation, engagement, and trust gaps that slow sustainable platform growth.';
$solutionSolveItems = [
  'Acquire high-quality users',
  'Increase engagement and interactions',
  'Improve user retention and activity',
  'Optimize onboarding experience',
  'Build trust and credibility',
  'Reduce churn rates',
];

$solutionServicesHeading = 'End-to-End Solutions for Social & Dating Platforms';
$solutionServicesIntro = 'We combine acquisition, onboarding, engagement, retention, and trust-building into one scalable platform growth system.';
$solutionServices = [
  ['title' => 'Platform Website & App Experience Optimization', 'description' => 'User-friendly, intuitive, and engaging interfaces.'],
  ['title' => 'Performance Marketing (User Acquisition)', 'description' => 'Targeted campaigns to attract the right audience.'],
  ['title' => 'Conversion Rate Optimization (CRO)', 'description' => 'Improving onboarding, sign-ups, and activation.'],
  ['title' => 'Content & Community Marketing', 'description' => 'Building brand voice, engagement, and community.'],
  ['title' => 'Retention & Lifecycle Marketing', 'description' => 'Email, push notifications, and re-engagement strategies.'],
  ['title' => 'Trust & Safety Positioning', 'description' => 'Enhancing credibility and user confidence.'],
  ['title' => 'Analytics & Growth Tracking', 'description' => 'Monitoring user behavior and optimizing performance.'],
];

$solutionJourneyEyebrow = 'User Journey';
$solutionJourneyHeading = 'Optimizing Every Stage of User Engagement';
$solutionJourneyIntro = 'We improve the full user journey so discovery, activation, interaction, and retention work together.';
$solutionJourneyStages = [
  ['title' => 'Discover', 'description' => 'Users find your platform through ads, SEO, and social.'],
  ['title' => 'Join', 'description' => 'Seamless onboarding and sign-up experience.'],
  ['title' => 'Engage', 'description' => 'Meaningful interactions and platform activity.'],
  ['title' => 'Retain', 'description' => 'Notifications, content, and engagement loops.'],
  ['title' => 'Grow', 'description' => 'Referrals and network-driven expansion.'],
];

$solutionAudienceHeading = 'Supporting Social & Dating Platforms';
$solutionAudienceIntro = 'We support platforms that rely on trust, engagement, and recurring user activity to grow sustainably.';
$solutionAudienceItems = [
  'Dating apps and websites',
  'Social networking platforms',
  'Community-based platforms',
  'Matchmaking services',
  'Niche and interest-based networks',
];

$solutionProcessHeading = 'How We Drive Platform Growth';
$solutionProcessIntro = 'Our process aligns acquisition, onboarding, engagement, and optimization so your platform can scale with stronger retention.';
$solutionProcessSteps = [
  ['title' => 'Audit & Insights', 'description' => 'Analyze user behavior and platform performance.'],
  ['title' => 'Strategy Development', 'description' => 'Define acquisition and engagement roadmap.'],
  ['title' => 'Execution', 'description' => 'Implement campaigns and optimizations.'],
  ['title' => 'Test & Optimize', 'description' => 'Improve engagement and retention continuously.'],
  ['title' => 'Scale & Expand', 'description' => 'Grow user base and platform activity.'],
];

$solutionInsightEyebrow = $solutionInsightEyebrow ?? 'Industry Insight';
$solutionApproachEyebrow = $solutionApproachEyebrow ?? 'Our Approach';
$solutionSolveEyebrow = $solutionSolveEyebrow ?? 'What We Solve';
$solutionServicesEyebrow = $solutionServicesEyebrow ?? 'Our Solutions';
$solutionJourneyEyebrow = $solutionJourneyEyebrow ?? 'Journey';
$solutionAudienceEyebrow = $solutionAudienceEyebrow ?? 'Who We Work With';
$solutionProcessEyebrow = $solutionProcessEyebrow ?? 'Process';

?>

<?php /* Template Name: Social and Dating */ get_header(); ?>

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
