<?php
$pageTitle = 'Digital Transformation | Anvaya Media Works';
$pageDescription = 'Modernize your business with digital strategy, platform development, UX design, automation, integration, and analytics-led transformation from Anvaya Media Works.';
$pageStyles = ['assets/css/outcome-solutions.css'];

$solutionName = 'Digital Transformation';
$solutionHeroTagline = 'Transform Your Business for the Digital-First World';
$solutionHeroLead = 'We help businesses modernize their operations, enhance customer experiences, and unlock scalable growth through strategic digital transformation solutions.';
$solutionHeroPrimaryCta = 'Get Free Digital Audit';
$solutionHeroSecondaryCta = 'Start Your Transformation';
$solutionHeroImage = 'assets/images/solutions/hero-digital-transformation.png';

$solutionIdeaHeading = 'Going Digital Is Not Enough. You Need to Transform.';
$solutionIdeaBody = 'Many businesses adopt digital tools - but fail to see real impact.';
$solutionIdeaNote = 'True transformation aligns technology, strategy, and experience.';

$solutionChallengeHeading = 'Why Digital Transformation Fails';
$solutionChallengeIntro = 'Without a structured approach, digital efforts become fragmented and ineffective.';
$solutionChallengeItems = [
  'Disconnected systems and tools',
  'Poor user experience',
  'Lack of clear strategy',
  'Inefficient workflows',
  'No data-driven decision making',
];

$solutionApproachHeading = 'A Holistic Digital Transformation Framework';
$solutionApproachBody = 'At Anvaya Media Works, we take a business-first approach to transformation, not just technology implementation.';
$solutionApproachNote = 'Because transformation should impact every part of your business.';
$solutionApproachItems = [
  ['title' => 'Digital strategy and roadmap', 'description' => 'We identify where the business is today, where it needs to go, and how to get there.'],
  ['title' => 'Process optimization', 'description' => 'We streamline workflows and remove operational friction that slows teams down.'],
  ['title' => 'Customer experience design', 'description' => 'We improve journeys so customers can interact with your business more intuitively.'],
  ['title' => 'Technology integration', 'description' => 'We connect tools, platforms, and systems so the business works more cohesively.'],
  ['title' => 'Data and analytics setup', 'description' => 'We build visibility into performance so better decisions can happen faster.'],
];

$solutionBuildHeading = 'Transforming Core Business Areas';
$solutionBuildIntro = 'We help businesses modernize the systems, experiences, and processes that shape growth.';
$solutionBuildItems = [
  'Digital presence (web, mobile, platforms)',
  'Business processes and workflows',
  'Customer experience and journeys',
  'Data tracking and decision-making systems',
  'Marketing and growth systems',
];
$solutionBuildNote = 'From operations to customer touchpoints - everything works better.';

$solutionServicesHeading = 'End-to-End Transformation Services';
$solutionServicesIntro = 'We connect strategy, platforms, experience design, automation, and analytics into one business-first transformation framework.';
$solutionServices = [
  ['title' => 'Digital Strategy & Consulting', 'description' => 'Defining a clear roadmap for transformation.'],
  ['title' => 'Website & Platform Development', 'description' => 'Modern, scalable digital platforms.'],
  ['title' => 'UX/UI & Experience Design', 'description' => 'Creating seamless and intuitive user experiences.'],
  ['title' => 'Marketing & Growth Systems', 'description' => 'Building data-driven marketing ecosystems.'],
  ['title' => 'Automation & Integration', 'description' => 'Streamlining workflows and connecting tools.'],
  ['title' => 'Analytics & Performance Tracking', 'description' => 'Enabling data-driven decision making.'],
];

$solutionJourneyEyebrow = 'Transformation Journey';
$solutionJourneyHeading = 'How Transformation Happens';
$solutionJourneyIntro = 'We help transformation move from assessment to adoption through a structured, measurable process.';
$solutionJourneyStages = [
  ['title' => 'Assess', 'description' => 'Analyze current systems, gaps, and opportunities.'],
  ['title' => 'Plan', 'description' => 'Define transformation roadmap and priorities.'],
  ['title' => 'Build', 'description' => 'Develop platforms, systems, and experiences.'],
  ['title' => 'Integrate', 'description' => 'Connect tools and processes.'],
  ['title' => 'Optimize', 'description' => 'Continuously improve performance.'],
];

$solutionIdeaEyebrow = $solutionIdeaEyebrow ?? 'Big Idea';
$solutionChallengeEyebrow = $solutionChallengeEyebrow ?? 'The Challenge';
$solutionApproachEyebrow = $solutionApproachEyebrow ?? 'Our Approach';
$solutionBuildEyebrow = $solutionBuildEyebrow ?? 'What We Build';
$solutionServicesEyebrow = $solutionServicesEyebrow ?? 'Our Solutions';
$solutionJourneyEyebrow = $solutionJourneyEyebrow ?? 'Journey';

?>

<?php /* Template Name: Digital Transformation */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/outcome-solutions.css?v=<?php echo($t); ?>">

<main id="top" class="outcome-solution-page">
    <section class="outcome-solution-hero-section">
      <div class="container outcome-solution-hero-grid">
        <div class="outcome-solution-hero-copy">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1><?php echo htmlspecialchars($solutionName, ENT_QUOTES, 'UTF-8'); ?></h1>
          <p class="outcome-solution-hero-tagline">
            <?php echo htmlspecialchars($solutionHeroTagline, ENT_QUOTES, 'UTF-8'); ?>
          </p>
          <p class="outcome-solution-hero-lead">
            <?php echo htmlspecialchars($solutionHeroLead, ENT_QUOTES, 'UTF-8'); ?>
          </p>

          <div class="outcome-solution-hero-actions">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">
              <?php echo htmlspecialchars($solutionHeroPrimaryCta, ENT_QUOTES, 'UTF-8'); ?>
            </a>
            <a class="btn btn-amw btn-amw-secondary" href="<?php echo home_url(); ?>/solutions/">
              <?php echo htmlspecialchars($solutionHeroSecondaryCta, ENT_QUOTES, 'UTF-8'); ?>
            </a>
          </div>
        </div>

        <div class="outcome-solution-hero-visual" aria-hidden="true">
          <img
            class="outcome-solution-hero-image"
            src="<?php bloginfo('template_directory'); ?>/<?php echo htmlspecialchars($solutionHeroImage, ENT_QUOTES, 'UTF-8'); ?>"
            alt=""
          >
        </div>
      </div>
    </section>

    <section class="outcome-solution-idea-section">
      <div class="container">
        <div class="outcome-solution-idea-shell">
          <div class="outcome-solution-idea-copy">
            <span class="outcome-solution-section-eyebrow"><?php echo htmlspecialchars($solutionIdeaEyebrow, ENT_QUOTES, 'UTF-8'); ?></span>
            <h2><?php echo htmlspecialchars($solutionIdeaHeading, ENT_QUOTES, 'UTF-8'); ?></h2>
            <p class="outcome-solution-idea-body">
              <?php echo htmlspecialchars($solutionIdeaBody, ENT_QUOTES, 'UTF-8'); ?>
            </p>
            <p class="outcome-solution-idea-note">
              <?php echo htmlspecialchars($solutionIdeaNote, ENT_QUOTES, 'UTF-8'); ?>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="outcome-solution-challenge-section">
      <div class="container">
        <div class="outcome-solution-challenge-shell">
          <div class="outcome-solution-challenge-header">
            <span class="outcome-solution-section-eyebrow"><?php echo htmlspecialchars($solutionChallengeEyebrow, ENT_QUOTES, 'UTF-8'); ?></span>
            <h2><?php echo htmlspecialchars($solutionChallengeHeading, ENT_QUOTES, 'UTF-8'); ?></h2>
            <p>
              <?php echo htmlspecialchars($solutionChallengeIntro, ENT_QUOTES, 'UTF-8'); ?>
            </p>
          </div>

          <div class="outcome-solution-challenge-grid">
            <?php foreach ($solutionChallengeItems as $item) : ?>
              <article class="outcome-solution-challenge-card">
                <h3><?php echo htmlspecialchars($item, ENT_QUOTES, 'UTF-8'); ?></h3>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <section class="outcome-solution-approach-section">
      <div class="container">
        <div class="outcome-solution-approach-shell">
          <div class="outcome-solution-approach-intro">
            <span class="outcome-solution-section-eyebrow outcome-solution-section-eyebrow-light"><?php echo htmlspecialchars($solutionApproachEyebrow, ENT_QUOTES, 'UTF-8'); ?></span>
            <h2><?php echo htmlspecialchars($solutionApproachHeading, ENT_QUOTES, 'UTF-8'); ?></h2>
            <p>
              <?php echo htmlspecialchars($solutionApproachBody, ENT_QUOTES, 'UTF-8'); ?>
            </p>
            <p class="outcome-solution-approach-note">
              <?php echo htmlspecialchars($solutionApproachNote, ENT_QUOTES, 'UTF-8'); ?>
            </p>
          </div>

          <div class="outcome-solution-approach-grid">
            <?php foreach ($solutionApproachItems as $index => $item) : ?>
              <article class="outcome-solution-approach-card">
                <span class="outcome-solution-approach-number"><?php echo sprintf('%02d', $index + 1); ?></span>
                <h3><?php echo htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                <p><?php echo htmlspecialchars($item['description'], ENT_QUOTES, 'UTF-8'); ?></p>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <section class="outcome-solution-build-section">
      <div class="container">
        <div class="outcome-solution-build-shell">
          <div class="outcome-solution-build-header">
            <span class="outcome-solution-section-eyebrow"><?php echo htmlspecialchars($solutionBuildEyebrow, ENT_QUOTES, 'UTF-8'); ?></span>
            <h2><?php echo htmlspecialchars($solutionBuildHeading, ENT_QUOTES, 'UTF-8'); ?></h2>
            <p>
              <?php echo htmlspecialchars($solutionBuildIntro, ENT_QUOTES, 'UTF-8'); ?>
            </p>
          </div>

          <div class="outcome-solution-build-grid">
            <?php foreach ($solutionBuildItems as $item) : ?>
              <article class="outcome-solution-build-card">
                <h3><?php echo htmlspecialchars($item, ENT_QUOTES, 'UTF-8'); ?></h3>
              </article>
            <?php endforeach; ?>
          </div>

          <p class="outcome-solution-build-note"><?php echo htmlspecialchars($solutionBuildNote, ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
      </div>
    </section>

    <section class="outcome-solution-services-section">
      <div class="container">
        <div class="outcome-solution-services-header">
          <span class="outcome-solution-section-eyebrow"><?php echo htmlspecialchars($solutionServicesEyebrow, ENT_QUOTES, 'UTF-8'); ?></span>
          <h2><?php echo htmlspecialchars($solutionServicesHeading, ENT_QUOTES, 'UTF-8'); ?></h2>
          <p>
            <?php echo htmlspecialchars($solutionServicesIntro, ENT_QUOTES, 'UTF-8'); ?>
          </p>
        </div>

        <div class="outcome-solution-services-grid">
          <?php foreach ($solutionServices as $index => $service) : ?>
            <article class="outcome-solution-service-card">
              <span class="outcome-solution-service-number"><?php echo sprintf('%02d', $index + 1); ?></span>
              <h3><?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
              <p><?php echo htmlspecialchars($service['description'], ENT_QUOTES, 'UTF-8'); ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="outcome-solution-journey-section">
      <div class="container">
        <div class="outcome-solution-journey-header">
          <span class="outcome-solution-section-eyebrow"><?php echo htmlspecialchars($solutionJourneyEyebrow, ENT_QUOTES, 'UTF-8'); ?></span>
          <h2><?php echo htmlspecialchars($solutionJourneyHeading, ENT_QUOTES, 'UTF-8'); ?></h2>
          <p>
            <?php echo htmlspecialchars($solutionJourneyIntro, ENT_QUOTES, 'UTF-8'); ?>
          </p>
        </div>

        <div class="outcome-solution-journey-grid">
          <?php foreach ($solutionJourneyStages as $index => $stage) : ?>
            <article class="outcome-solution-journey-card">
              <span class="outcome-solution-journey-step"><?php echo sprintf('%02d', $index + 1); ?></span>
              <h3><?php echo htmlspecialchars($stage['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
              <p><?php echo htmlspecialchars($stage['description'], ENT_QUOTES, 'UTF-8'); ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>