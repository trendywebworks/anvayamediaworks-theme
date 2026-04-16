<?php
$pageTitle = 'Entertainment Solutions | Anvaya Media Works';
$pageDescription = 'Grow entertainment brands with stronger promotion, audience targeting, influencer collaborations, community engagement, and performance marketing from Anvaya Media Works.';
$pageStyles = ['assets/css/industry-solutions.css'];

$solutionName = 'Entertainment';
$solutionHeroTagline = 'Build Hype. Capture Attention. Grow Your Audience.';
$solutionHeroLead = 'We help entertainment brands, creators, and platforms maximize visibility, engagement, and reach through creative storytelling and data-driven marketing strategies.';
$solutionHeroPrimaryCta = 'Get Free Promotion Plan';
$solutionHeroSecondaryCta = 'Grow Your Audience';
$solutionHeroImage = 'assets/images/solutions/hero-entertainment.png';

$solutionInsightHeading = 'In Entertainment, Attention Is Everything.';
$solutionInsightBody = 'Great content alone is not enough. Without the right promotion, even the best content goes unnoticed.';
$solutionInsightNote = 'Success depends on how well you capture and sustain attention.';
$solutionInsightPanelLabel = 'Common Challenges';
$solutionInsightChallenges = [
  ['title' => 'Crowded market', 'description' => 'High competition for audience attention'],
  ['title' => 'Short lifecycle', 'description' => 'Short content lifecycle'],
  ['title' => 'Reach issues', 'description' => 'Low organic reach'],
  ['title' => 'Engagement inconsistency', 'description' => 'Inconsistent audience engagement'],
  ['title' => 'Fan loyalty', 'description' => 'Difficulty in building loyal fan base'],
];

$solutionApproachHeading = 'A Creative + Performance-Driven Strategy';
$solutionApproachBody = 'At Anvaya Media Works, we blend creative storytelling with performance marketing to help you stand out.';
$solutionApproachNote = 'Because entertainment growth is driven by reach, engagement, and recall.';
$solutionApproachItems = [
  ['title' => 'Audience targeting and segmentation', 'description' => 'We identify the right audience pockets so promotion reaches people most likely to care and engage.'],
  ['title' => 'Viral content strategies', 'description' => 'We shape campaigns and content ideas designed for amplification, sharing, and conversation.'],
  ['title' => 'Performance marketing campaigns', 'description' => 'We use paid media to boost discovery, awareness, and promotion efficiency.'],
  ['title' => 'Influencer and creator collaborations', 'description' => 'We extend reach through trusted creators and communities that align with your audience.'],
  ['title' => 'Engagement and community building', 'description' => 'We strengthen retention and fandom through consistent content, interaction, and platform presence.'],
];

$solutionSolveHeading = 'Solving Real Entertainment Growth Challenges';
$solutionSolveIntro = 'We help solve the reach, attention, engagement, and fan-building challenges that limit content growth and promotion results.';
$solutionSolveItems = [
  'Increase reach and visibility',
  'Target the right audience segments',
  'Boost engagement and interactions',
  'Promote content effectively',
  'Build a loyal fan base',
  'Maximize ROI on promotions',
];

$solutionServicesHeading = 'End-to-End Solutions for Entertainment Brands';
$solutionServicesIntro = 'We connect promotion, creative storytelling, paid media, creator partnerships, and community growth into one audience-building system.';
$solutionServices = [
  ['title' => 'Content Promotion & Campaigns', 'description' => 'Strategic promotion of movies, shows, music, and content.'],
  ['title' => 'Social Media Marketing', 'description' => 'Creating viral, engaging, and shareable content.'],
  ['title' => 'Performance Marketing (Ads)', 'description' => 'Targeted campaigns across digital platforms.'],
  ['title' => 'Influencer & Creator Marketing', 'description' => 'Collaborating with creators to expand reach.'],
  ['title' => 'Video Marketing & Distribution', 'description' => 'Optimizing and distributing video content across channels.'],
  ['title' => 'Website & Landing Pages', 'description' => 'High-impact pages for releases, events, or promotions.'],
  ['title' => 'Community & Fan Engagement', 'description' => 'Building and nurturing audience communities.'],
];

$solutionJourneyEyebrow = 'Audience Journey';
$solutionJourneyHeading = 'Turning Viewers Into Fans';
$solutionJourneyIntro = 'We improve the audience journey so discovery, interaction, fandom, and organic amplification reinforce one another.';
$solutionJourneyStages = [
  ['title' => 'Discover', 'description' => 'Audience finds your content through ads, social, or search.'],
  ['title' => 'Engage', 'description' => 'They watch, interact, and share.'],
  ['title' => 'Connect', 'description' => 'They follow, subscribe, or join your community.'],
  ['title' => 'Retain', 'description' => 'Consistent content keeps them engaged.'],
  ['title' => 'Amplify', 'description' => 'Fans promote your content organically.'],
];

$solutionAudienceHeading = 'Supporting the Entertainment Ecosystem';
$solutionAudienceIntro = 'We support entertainment brands and creators that need stronger promotion, audience engagement, and long-term visibility.';
$solutionAudienceItems = [
  'Film production houses',
  'Music labels & artists',
  'OTT platforms',
  'Content creators & influencers',
  'Event & entertainment brands',
  'Media and broadcasting companies',
];

$solutionProcessHeading = 'How We Drive Entertainment Growth';
$solutionProcessIntro = 'Our process helps align audience insight, campaign strategy, promotion, and ongoing optimization so content can travel further.';
$solutionProcessSteps = [
  ['title' => 'Research & Audience Insights', 'description' => 'Understand audience behavior and trends.'],
  ['title' => 'Strategy & Planning', 'description' => 'Define campaign and content roadmap.'],
  ['title' => 'Execution & Promotion', 'description' => 'Launch campaigns across platforms.'],
  ['title' => 'Engagement & Optimization', 'description' => 'Maximize reach and interaction.'],
  ['title' => 'Scale & Amplify', 'description' => 'Expand audience and visibility.'],
];


$solutionInsightEyebrow = $solutionInsightEyebrow ?? 'Industry Insight';
$solutionApproachEyebrow = $solutionApproachEyebrow ?? 'Our Approach';
$solutionSolveEyebrow = $solutionSolveEyebrow ?? 'What We Solve';
$solutionServicesEyebrow = $solutionServicesEyebrow ?? 'Our Solutions';
$solutionJourneyEyebrow = $solutionJourneyEyebrow ?? 'Journey';
$solutionAudienceEyebrow = $solutionAudienceEyebrow ?? 'Who We Work With';
$solutionProcessEyebrow = $solutionProcessEyebrow ?? 'Process';

?>

<?php /* Template Name: Entertainment */ get_header(); ?>

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
            <a class="btn btn-amw btn-amw-secondary" href="<?php echo home_url(); ?>/solutions/">
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
