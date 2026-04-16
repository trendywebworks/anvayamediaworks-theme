<?php
$pageTitle = 'Education Solutions | Anvaya Media Works';
$pageDescription = 'Support admissions growth with stronger visibility, institution branding, lead generation, and conversion-focused digital experiences for schools, colleges, and education brands.';
$pageStyles = ['assets/css/industry-solutions.css'];

$solutionName = 'Education';
$solutionHeroTagline = 'Attract Students. Build Trust. Grow Your Institution.';
$solutionHeroLead = 'We help schools, colleges, and education brands increase visibility, drive admissions, and build strong digital presence through strategic marketing and high-performance solutions.';
$solutionHeroPrimaryCta = 'Get Free Education Marketing Audit';
$solutionHeroSecondaryCta = 'Increase Admissions';
$solutionHeroImage = 'assets/images/solutions/hero-education.png';

$solutionInsightHeading = 'In Education, Trust Drives Decisions.';
$solutionInsightBody = 'Students and parents do not just choose institutions - they choose credibility, outcomes, and future opportunities.';
$solutionInsightNote = 'Your digital presence plays a critical role in influencing decisions.';
$solutionInsightPanelLabel = 'Common Challenges';
$solutionInsightChallenges = [
  ['title' => 'Visibility gaps', 'description' => 'Low online visibility'],
  ['title' => 'Admissions pressure', 'description' => 'Declining admission inquiries'],
  ['title' => 'Digital friction', 'description' => 'Poor digital experience'],
  ['title' => 'Positioning weakness', 'description' => 'Weak brand positioning'],
  ['title' => 'Competitive pressure', 'description' => 'Increasing competition'],
];

$solutionApproachHeading = 'A Student-Centric Growth Strategy';
$solutionApproachBody = 'At Anvaya Media Works, we build education-focused marketing systems that attract, engage, and convert students.';
$solutionApproachNote = 'Because growth in education is built on trust, clarity, and communication.';
$solutionApproachItems = [
  ['title' => 'Institution branding and positioning', 'description' => 'We strengthen your institution story so it communicates credibility and outcomes clearly.'],
  ['title' => 'Local and national visibility strategies', 'description' => 'We help improve discoverability across search, paid media, and location-based channels.'],
  ['title' => 'High-converting website experiences', 'description' => 'We optimize digital journeys so students and parents find what they need faster.'],
  ['title' => 'Lead generation and nurturing', 'description' => 'We create systems that turn inquiries into well-informed applicants over time.'],
  ['title' => 'Data-driven campaign optimization', 'description' => 'We use performance insights to improve inquiries, applications, and admissions outcomes.'],
];

$solutionSolveHeading = 'Solving Real Education Marketing Challenges';
$solutionSolveIntro = 'We address the visibility, trust, inquiry, and follow-up issues that hold institutions back from growing admissions consistently.';
$solutionSolveItems = [
  'Increase student inquiries and applications',
  'Improve visibility in search and local markets',
  'Build trust and credibility online',
  'Enhance website and mobile experience',
  'Improve lead nurturing and follow-ups',
  'Optimize admission funnels',
];

$solutionServicesHeading = 'End-to-End Solutions for Education Brands';
$solutionServicesIntro = 'We connect visibility, trust-building, lead generation, content, and conversion into one admissions-focused growth system.';
$solutionServices = [
  ['title' => 'Website Development & Optimization', 'description' => 'Modern, responsive, and user-friendly websites for institutions.'],
  ['title' => 'SEO & Local Search Optimization', 'description' => 'Ranking for relevant courses, programs, and locations.'],
  ['title' => 'Performance Marketing (Ads)', 'description' => 'Targeted campaigns for admissions and lead generation.'],
  ['title' => 'Content Marketing', 'description' => 'Blogs, course pages, and educational content that builds authority.'],
  ['title' => 'Social Media Marketing', 'description' => 'Engaging students and parents through consistent content.'],
  ['title' => 'Lead Generation & Admission Funnels', 'description' => 'Optimized forms, landing pages, and follow-up systems.'],
  ['title' => 'Reputation & Review Management', 'description' => 'Strengthening credibility through positive reviews.'],
];

$solutionJourneyEyebrow = 'Student Journey';
$solutionJourneyHeading = 'Optimizing the Entire Admission Journey';
$solutionJourneyIntro = 'We improve each stage of the admission journey so awareness, evaluation, application, and enrollment perform more effectively.';
$solutionJourneyStages = [
  ['title' => 'Discover', 'description' => 'Students find your institution through search, ads, or social.'],
  ['title' => 'Explore', 'description' => 'They browse courses, facilities, and achievements.'],
  ['title' => 'Evaluate', 'description' => 'Comparing with other institutions and reading reviews.'],
  ['title' => 'Apply', 'description' => 'Filling inquiry or admission forms.'],
  ['title' => 'Enroll', 'description' => 'Final decision and onboarding.'],
];

$solutionAudienceHeading = 'Supporting Education Institutions';
$solutionAudienceIntro = 'We help education organizations improve visibility, credibility, and admissions outcomes through stronger digital systems.';
$solutionAudienceItems = [
  'Schools & CBSE/ICSE institutions',
  'Colleges & universities',
  'Coaching centers & academies',
  'EdTech platforms',
  'Training institutes',
];

$solutionProcessHeading = 'How We Drive Admissions Growth';
$solutionProcessIntro = 'Our process aligns strategy, campaigns, platform optimization, and continuous improvement to support long-term admissions growth.';
$solutionProcessSteps = [
  ['title' => 'Audit & Analysis', 'description' => 'Evaluate current digital presence and gaps.'],
  ['title' => 'Strategy Development', 'description' => 'Define marketing and admission roadmap.'],
  ['title' => 'Implementation', 'description' => 'Execute campaigns and optimize platforms.'],
  ['title' => 'Tracking & Optimization', 'description' => 'Improve performance continuously.'],
  ['title' => 'Scale & Grow', 'description' => 'Increase reach and admissions.'],
];


$solutionInsightEyebrow = $solutionInsightEyebrow ?? 'Industry Insight';
$solutionApproachEyebrow = $solutionApproachEyebrow ?? 'Our Approach';
$solutionSolveEyebrow = $solutionSolveEyebrow ?? 'What We Solve';
$solutionServicesEyebrow = $solutionServicesEyebrow ?? 'Our Solutions';
$solutionJourneyEyebrow = $solutionJourneyEyebrow ?? 'Journey';
$solutionAudienceEyebrow = $solutionAudienceEyebrow ?? 'Who We Work With';
$solutionProcessEyebrow = $solutionProcessEyebrow ?? 'Process';

?>

<?php /* Template Name: Education */ get_header(); ?>

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
