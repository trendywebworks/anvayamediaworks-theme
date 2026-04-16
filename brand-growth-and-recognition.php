<?php
$pageTitle = 'Brand Growth & Recognition | Anvaya Media Works';
$pageDescription = 'Build a stronger brand with positioning, identity systems, storytelling, multi-channel marketing, and memorable digital experiences from Anvaya Media Works.';
$pageStyles = ['assets/css/outcome-solutions.css'];

$solutionName = 'Brand Growth & Recognition';
$solutionHeroTagline = 'Build a Brand People Recognize, Trust, and Choose';
$solutionHeroLead = 'We help businesses grow beyond visibility and become memorable brands through strategic positioning, creative storytelling, and consistent digital presence.';
$solutionHeroPrimaryCta = 'Get Free Brand Audit';
$solutionHeroSecondaryCta = 'Build Your Brand';
$solutionHeroImage = 'assets/images/solutions/hero-brand-growth-and-recognition.png';

$solutionIdeaHeading = 'Visibility Gets You Seen. Branding Gets You Chosen.';
$solutionIdeaBody = 'In a crowded market, attention is easy to get - but hard to keep.';
$solutionIdeaNote = 'True growth happens when your brand is recognized, remembered, and trusted.';

$solutionChallengeHeading = 'Why Most Brands Struggle to Grow';
$solutionChallengeIntro = 'Without a strong foundation, even great marketing fails to create impact.';
$solutionChallengeItems = [
  'Lack of clear positioning',
  'Inconsistent visual identity',
  'Weak storytelling',
  'No emotional connection with audience',
  'Fragmented marketing efforts',
];

$solutionApproachHeading = 'A Connected Brand Growth System';
$solutionApproachBody = 'At Anvaya Media Works, we build brands as connected ecosystems, not isolated designs or campaigns.';
$solutionApproachNote = 'Because strong brands are built through clarity, consistency, and connection.';
$solutionApproachItems = [
  ['title' => 'Brand strategy and positioning', 'description' => 'We define what your brand stands for, who it serves, and how it should be perceived.'],
  ['title' => 'Visual identity and design systems', 'description' => 'We shape identity systems that make your brand more consistent, scalable, and recognizable.'],
  ['title' => 'Content and storytelling', 'description' => 'We help turn your value into stories, messages, and creative that audiences remember.'],
  ['title' => 'Multi-channel marketing', 'description' => 'We connect the brand across campaigns, channels, and touchpoints for stronger recall.'],
  ['title' => 'Consistency across all touchpoints', 'description' => 'We make sure the brand shows up with the same clarity wherever your audience meets it.'],
];

$solutionBuildHeading = 'A Complete Brand Growth Framework';
$solutionBuildIntro = 'We help shape the strategic and creative foundation required for long-term brand growth.';
$solutionBuildItems = [
  'A clear and differentiated brand identity',
  'Consistent visual and communication systems',
  'Strong emotional connection with your audience',
  'Memorable brand experiences across platforms',
  'Long-term brand equity and recall',
];
$solutionBuildNote = 'Not just awareness - lasting recognition.';

$solutionServicesHeading = 'Integrated Solutions for Brand Building';
$solutionServicesIntro = 'We combine strategy, design, messaging, digital presence, and campaign thinking into one brand growth system.';
$solutionServices = [
  ['title' => 'Brand Strategy & Positioning', 'description' => 'Defining your unique value, voice, and market positioning.'],
  ['title' => 'Brand Identity & Design', 'description' => 'Logo, colors, typography, and visual systems.'],
  ['title' => 'Content & Storytelling', 'description' => 'Crafting narratives that connect and engage.'],
  ['title' => 'Social Media Branding', 'description' => 'Consistent presence and audience engagement.'],
  ['title' => 'Website & Digital Experience', 'description' => 'Creating brand-driven digital touchpoints.'],
  ['title' => 'Campaign & Creative Strategy', 'description' => 'High-impact campaigns for visibility and recall.'],
];

$solutionJourneyEyebrow = 'Brand Journey';
$solutionJourneyHeading = 'How Brands Grow Over Time';
$solutionJourneyIntro = 'We help brands grow through a repeatable journey of clarity, consistency, communication, and expansion.';
$solutionJourneyStages = [
  ['title' => 'Define', 'description' => 'Clarity in positioning, audience, and messaging.'],
  ['title' => 'Design', 'description' => 'Strong visual identity and brand system.'],
  ['title' => 'Communicate', 'description' => 'Consistent storytelling across channels.'],
  ['title' => 'Engage', 'description' => 'Building emotional connection with audience.'],
  ['title' => 'Scale', 'description' => 'Expanding reach while maintaining consistency.'],
];

$solutionIdeaEyebrow = $solutionIdeaEyebrow ?? 'Big Idea';
$solutionChallengeEyebrow = $solutionChallengeEyebrow ?? 'The Challenge';
$solutionApproachEyebrow = $solutionApproachEyebrow ?? 'Our Approach';
$solutionBuildEyebrow = $solutionBuildEyebrow ?? 'What We Build';
$solutionServicesEyebrow = $solutionServicesEyebrow ?? 'Our Solutions';
$solutionJourneyEyebrow = $solutionJourneyEyebrow ?? 'Journey';

?>

<?php /* Template Name: Brand Growth and Recognition */ get_header(); ?>

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