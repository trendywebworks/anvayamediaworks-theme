<?php
$pageTitle = 'Ideation & Design Strategy | Anvaya Media Works';
$pageDescription = 'Turn raw ideas into scalable digital experiences with validation, user research, prototyping, UX strategy, and design systems from Anvaya Media Works.';
$pageStyles = ['assets/css/outcome-solutions.css'];

$solutionName = 'Ideation & Design Strategy';
$solutionHeroTagline = 'Turn Ideas Into Impactful Digital Experiences';
$solutionHeroLead = 'We help businesses transform ideas into powerful strategies and design systems that drive innovation, enhance user experience, and fuel long-term growth.';
$solutionHeroPrimaryCta = 'Start Your Idea';
$solutionHeroSecondaryCta = 'Get a Strategy Session';
$solutionHeroImage = 'assets/images/solutions/hero-ideation-and-design-strategy.png';

$solutionIdeaHeading = 'Great Ideas Are Everywhere. Execution Is What Sets You Apart.';
$solutionIdeaBody = 'Many businesses have ideas - but struggle to turn them into real, scalable solutions.';
$solutionIdeaNote = 'Success comes from combining creativity with clarity and execution.';

$solutionChallengeHeading = 'Why Ideas Fail to Scale';
$solutionChallengeIntro = 'Without strategy, even great ideas fail to create impact.';
$solutionChallengeItems = [
  'Lack of structured ideation process',
  'No clear user journey or experience design',
  'Weak product or brand positioning',
  'Poor alignment between design and business goals',
  'Inconsistent execution',
];

$solutionApproachHeading = 'A Strategy-Led Design Thinking Process';
$solutionApproachBody = 'At Anvaya Media Works, we use a design thinking approach to turn ideas into actionable strategies.';
$solutionApproachNote = 'Because successful solutions are built at the intersection of user needs, business goals, and creative thinking.';
$solutionApproachItems = [
  ['title' => 'Idea validation and refinement', 'description' => 'We stress-test concepts early so promising ideas can become more actionable and viable.'],
  ['title' => 'User research and insights', 'description' => 'We uncover what users need, expect, and respond to before design decisions scale.'],
  ['title' => 'Experience and journey mapping', 'description' => 'We define the flow of the experience so ideas become clearer and more usable.'],
  ['title' => 'Concept development and prototyping', 'description' => 'We translate strategy into tangible concepts that can be reviewed, tested, and improved.'],
  ['title' => 'Strategic design execution', 'description' => 'We align design decisions with business goals so the final outcome can perform in the real world.'],
];

$solutionBuildHeading = 'From Idea to Execution';
$solutionBuildIntro = 'We help shape concepts into structured, user-centered solutions that are ready to move forward with confidence.';
$solutionBuildItems = [
  'Clear and validated concepts',
  'User-centric design systems',
  'Structured product or brand strategies',
  'High-impact digital experiences',
  'Scalable and growth-ready solutions',
];
$solutionBuildNote = 'Not just ideas - ideas that work.';

$solutionServicesHeading = 'End-to-End Strategy & Design Solutions';
$solutionServicesIntro = 'We combine validation, research, prototyping, design thinking, and systems thinking into one execution-ready design process.';
$solutionServices = [
  ['title' => 'Idea Validation & Concept Development', 'description' => 'Refining and shaping your ideas into viable solutions.'],
  ['title' => 'UX Research & User Insights', 'description' => 'Understanding user behavior and expectations.'],
  ['title' => 'Wireframing & Prototyping', 'description' => 'Visualizing concepts before development.'],
  ['title' => 'UI/UX Design Strategy', 'description' => 'Creating intuitive and engaging experiences.'],
  ['title' => 'Brand & Product Strategy', 'description' => 'Aligning design with business goals.'],
  ['title' => 'Design Systems & Guidelines', 'description' => 'Ensuring consistency across platforms.'],
];

$solutionJourneyEyebrow = 'Process';
$solutionJourneyHeading = 'How We Turn Ideas Into Reality';
$solutionJourneyIntro = 'We use a design thinking flow that helps move ideas from discovery to validation with more clarity and less guesswork.';
$solutionJourneyStages = [
  ['title' => 'Discover', 'description' => 'Understand your idea, users, and goals.'],
  ['title' => 'Define', 'description' => 'Clarify problem statements and opportunities.'],
  ['title' => 'Ideate', 'description' => 'Generate and refine innovative concepts.'],
  ['title' => 'Prototype', 'description' => 'Create visual and functional representations.'],
  ['title' => 'Validate & Iterate', 'description' => 'Test, refine, and optimize solutions.'],
];

$solutionIdeaEyebrow = $solutionIdeaEyebrow ?? 'Big Idea';
$solutionChallengeEyebrow = $solutionChallengeEyebrow ?? 'The Challenge';
$solutionApproachEyebrow = $solutionApproachEyebrow ?? 'Our Approach';
$solutionBuildEyebrow = $solutionBuildEyebrow ?? 'What We Build';
$solutionServicesEyebrow = $solutionServicesEyebrow ?? 'Our Solutions';
$solutionJourneyEyebrow = $solutionJourneyEyebrow ?? 'Journey';

?>

<?php /* Template Name: Ideation and Design Strategy */ get_header(); ?>

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
            <a class="btn btn-amw btn-amw-secondary" href="<?php echo home_url(); ?>/contact/">
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