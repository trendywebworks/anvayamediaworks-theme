<?php
$pageTitle = 'Brand Visibility | Anvaya Media Works';
$pageDescription = 'Increase discoverability across search, social, paid media, websites, and content channels with visibility-focused marketing systems from Anvaya Media Works.';
$pageStyles = ['assets/css/outcome-solutions.css'];

$solutionName = 'Brand Visibility';
$solutionHeroTagline = 'Get Seen by the Right Audience, Everywhere It Matters';
$solutionHeroLead = 'We help businesses increase visibility across search, social, and digital platforms - ensuring your brand consistently appears in front of the right audience at the right time.';
$solutionHeroPrimaryCta = 'Get Free Visibility Audit';
$solutionHeroSecondaryCta = 'Increase Your Reach';
$solutionHeroImage = 'assets/images/solutions/hero-brand-visibility.png';

$solutionIdeaHeading = 'If Your Brand Is Not Visible, It Does Not Exist.';
$solutionIdeaBody = 'No matter how great your product or service is - if your audience cannot find you, they will not choose you.';
$solutionIdeaNote = 'Visibility is the first step to growth.';

$solutionChallengeHeading = 'Why Brands Fail to Stay Visible';
$solutionChallengeIntro = 'Without a structured approach, your brand gets lost in the noise.';
$solutionChallengeItems = [
  'No multi-channel strategy',
  'Weak SEO foundation',
  'Inconsistent content',
  'Poor targeting',
  'Lack of performance tracking',
];

$solutionApproachHeading = 'A Multi-Channel Visibility Strategy';
$solutionApproachBody = 'At Anvaya Media Works, we build visibility systems that ensure your brand shows up consistently across all key platforms.';
$solutionApproachNote = 'Because visibility is not about being everywhere - it is about being where it matters.';
$solutionApproachItems = [
  ['title' => 'Search engine visibility (SEO)', 'description' => 'We improve discoverability where high-intent audiences actively search for solutions like yours.'],
  ['title' => 'Paid media amplification (ads)', 'description' => 'We use paid campaigns to increase reach faster where visibility matters most.'],
  ['title' => 'Social media presence', 'description' => 'We strengthen consistency and recognition across the platforms where audiences engage daily.'],
  ['title' => 'Content distribution strategies', 'description' => 'We help your content travel further through smarter channel selection and distribution.'],
  ['title' => 'Data-driven optimization', 'description' => 'We use performance insights to keep refining reach, visibility, and audience fit over time.'],
];

$solutionBuildHeading = 'Expanding Your Digital Presence';
$solutionBuildIntro = 'We help brands build discoverability across the platforms and channels that shape modern visibility.';
$solutionBuildItems = [
  'Search engines (Google & others)',
  'Social media platforms',
  'Paid advertising channels',
  'Websites and landing pages',
  'Content platforms and blogs',
];
$solutionBuildNote = 'Your brand becomes consistently discoverable.';

$solutionServicesHeading = 'Integrated Visibility Solutions';
$solutionServicesIntro = 'We combine SEO, paid media, social presence, content distribution, messaging, and analytics into one visibility-focused growth system.';
$solutionServices = [
  ['title' => 'Search Engine Optimization (SEO)', 'description' => 'Improve rankings and organic discoverability.'],
  ['title' => 'Performance Marketing (Ads)', 'description' => 'Increase reach and impressions instantly.'],
  ['title' => 'Social Media Marketing', 'description' => 'Build presence and audience engagement.'],
  ['title' => 'Content Marketing & Distribution', 'description' => 'Create and amplify valuable content.'],
  ['title' => 'Brand Positioning & Messaging', 'description' => 'Ensure clarity and consistency across channels.'],
  ['title' => 'Analytics & Performance Tracking', 'description' => 'Measure reach, impressions, and visibility impact.'],
];

$solutionJourneyEyebrow = 'Visibility Journey';
$solutionJourneyHeading = 'How Brands Become Visible';
$solutionJourneyIntro = 'We improve visibility over time by aligning audience targeting, optimization, amplification, and sustained engagement.';
$solutionJourneyStages = [
  ['title' => 'Identify', 'description' => 'Define target audience and channels.'],
  ['title' => 'Optimize', 'description' => 'Improve presence across platforms.'],
  ['title' => 'Amplify', 'description' => 'Increase reach through campaigns.'],
  ['title' => 'Engage', 'description' => 'Interact with audience consistently.'],
  ['title' => 'Sustain', 'description' => 'Maintain long-term visibility.'],
];

$solutionIdeaEyebrow = $solutionIdeaEyebrow ?? 'Big Idea';
$solutionChallengeEyebrow = $solutionChallengeEyebrow ?? 'The Challenge';
$solutionApproachEyebrow = $solutionApproachEyebrow ?? 'Our Approach';
$solutionBuildEyebrow = $solutionBuildEyebrow ?? 'What We Build';
$solutionServicesEyebrow = $solutionServicesEyebrow ?? 'Our Solutions';
$solutionJourneyEyebrow = $solutionJourneyEyebrow ?? 'Journey';

?>

<?php /* Template Name: Brand Visibility */ get_header(); ?>

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
            <a class="btn btn-amw btn-amw-secondary" href="<<?php echo home_url(); ?>/solutions/">
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
