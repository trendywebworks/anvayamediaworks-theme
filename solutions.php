<?php /* Template Name: Solutions */
$solutionGroups = [
  'Based on Outcomes' => [
    'label' => 'Outcome',
    'description' => 'Goal-led solutions built around the business outcomes you want to create.',
    'templates' => [
      'brand-growth-and-recognition.php' => [
        'fallback_title' => 'Brand Growth & Recognition',
        'fallback_description' => 'Build stronger recall, trust, and long-term brand momentum.',
      ],
      'digital-transformation.php' => [
        'fallback_title' => 'Digital Transformation',
        'fallback_description' => 'Modernize systems, experiences, and workflows for scalable growth.',
      ],
      'ideation-and-design-strategy.php' => [
        'fallback_title' => 'Ideation & Design Strategy',
        'fallback_description' => 'Turn promising ideas into structured, user-centered digital solutions.',
      ],
      'brand-visibility.php' => [
        'fallback_title' => 'Brand Visibility',
        'fallback_description' => 'Increase discoverability across the channels that matter most.',
      ],
    ],
  ],
  'Based on Industries' => [
    'label' => 'Industry',
    'description' => 'Sector-specific solutions shaped around the challenges each market faces.',
    'templates' => [
      'e-commerce.php' => [
        'fallback_title' => 'E-commerce',
        'fallback_description' => 'Drive stronger acquisition, conversion, and customer retention.',
      ],
      'healthcare-and-fitness.php' => [
        'fallback_title' => 'Healthcare & Fitness',
        'fallback_description' => 'Build trust, improve visibility, and increase patient or client inquiries.',
      ],
      'events.php' => [
        'fallback_title' => 'Events',
        'fallback_description' => 'Create demand and streamline event discovery, registration, and promotion.',
      ],
      'social-and-dating.php' => [
        'fallback_title' => 'Social & Dating',
        'fallback_description' => 'Design high-engagement experiences that grow communities and retention.',
      ],
      'gaming.php' => [
        'fallback_title' => 'Gaming',
        'fallback_description' => 'Reach players, strengthen engagement, and support product growth.',
      ],
      'education.php' => [
        'fallback_title' => 'Education',
        'fallback_description' => 'Support admissions growth with stronger visibility and digital journeys.',
      ],
      'entertainment.php' => [
        'fallback_title' => 'Entertainment',
        'fallback_description' => 'Grow audience attention, discovery, and brand engagement.',
      ],
      'travel-and-hospitality.php' => [
        'fallback_title' => 'Travel & Hospitality',
        'fallback_description' => 'Convert interest into bookings with smoother, trust-building experiences.',
      ],
      'food-and-restaurant.php' => [
        'fallback_title' => 'Food & Restaurant',
        'fallback_description' => 'Increase local visibility and drive more orders, visits, and loyalty.',
      ],
      'real-estate.php' => [
        'fallback_title' => 'Real Estate',
        'fallback_description' => 'Generate qualified leads and present properties with more clarity.',
      ],
    ],
  ],
];

$currentPageId = get_queried_object_id();
$directChildPages = get_pages([
  'parent' => $currentPageId,
  'sort_column' => 'menu_order,post_title',
  'sort_order' => 'ASC',
  'post_status' => 'publish',
]);

$childPagesByTemplate = [];

foreach ($directChildPages as $directChildPage) {
  $templateSlug = get_page_template_slug($directChildPage->ID);

  if ($templateSlug === '') {
    continue;
  }

  if (!isset($childPagesByTemplate[$templateSlug])) {
    $childPagesByTemplate[$templateSlug] = [];
  }

  $childPagesByTemplate[$templateSlug][] = $directChildPage;
}

$usedPageIds = [];
$renderedSolutionGroups = [];

foreach ($solutionGroups as $groupTitle => $groupConfig) {
  $groupPages = [];

  foreach ($groupConfig['templates'] as $templateFile => $templateConfig) {
    $matchedPages = $childPagesByTemplate[$templateFile] ?? get_pages([
      'meta_key' => '_wp_page_template',
      'meta_value' => $templateFile,
      'sort_column' => 'menu_order,post_title',
      'sort_order' => 'ASC',
      'post_status' => 'publish',
    ]);

    foreach ($matchedPages as $matchedPage) {
      if (isset($usedPageIds[$matchedPage->ID])) {
        continue;
      }

      $usedPageIds[$matchedPage->ID] = true;

      $pageTitle = trim(get_the_title($matchedPage));
      $pageExcerpt = trim(wp_strip_all_tags(get_the_excerpt($matchedPage)));

      if ($pageTitle === '') {
        $pageTitle = $templateConfig['fallback_title'];
      }

      if ($pageExcerpt === '') {
        $pageExcerpt = $templateConfig['fallback_description'];
      }

      $groupPages[] = [
        'title' => $pageTitle,
        'description' => $pageExcerpt,
        'url' => get_permalink($matchedPage),
      ];
    }
  }

  if (!empty($groupPages)) {
    $renderedSolutionGroups[] = [
      'title' => $groupTitle,
      'label' => $groupConfig['label'],
      'description' => $groupConfig['description'],
      'pages' => $groupPages,
    ];
  }
}

$additionalChildPages = [];

foreach ($directChildPages as $directChildPage) {
  if (isset($usedPageIds[$directChildPage->ID])) {
    continue;
  }

  $pageTitle = trim(get_the_title($directChildPage));
  $pageExcerpt = trim(wp_strip_all_tags(get_the_excerpt($directChildPage)));

  if ($pageTitle === '') {
    continue;
  }

  if ($pageExcerpt === '') {
    $pageExcerpt = 'Explore this solution page for more details.';
  }

  $additionalChildPages[] = [
    'title' => $pageTitle,
    'description' => $pageExcerpt,
    'url' => get_permalink($directChildPage),
  ];
}

if (!empty($additionalChildPages)) {
  $renderedSolutionGroups[] = [
    'title' => 'More Solutions',
    'label' => 'Solution',
    'description' => 'Additional solution pages published under this section.',
    'pages' => $additionalChildPages,
  ];
}

$solutionsPageTitle = trim(get_the_title());

if ($solutionsPageTitle === '') {
  $solutionsPageTitle = 'Solutions';
}
?>

<?php get_header(); ?>

<?php $t = time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/blog.css?v=<?php echo($t); ?>">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/solutions.css?v=<?php echo($t); ?>">

<main id="top" class="blog-page solutions-page">
  <section class="blog-hero-section">
    <div class="container">
      <div class="blog-hero-shell">
        <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
        <h1><?php echo esc_html($solutionsPageTitle); ?></h1>
      </div>
    </div>
  </section>

  <section class="solutions-directory-section">
    <div class="container">
      <div class="solutions-directory-header">
        <div>
          <span class="solutions-directory-eyebrow">Explore Solutions</span>
          <h2>Browse every solution page from one place.</h2>
        </div>
        <p class="solutions-directory-intro">
          Explore outcome-led and industry-specific solution pages to find the route that best matches your growth goals.
        </p>
      </div>

      <?php if (!empty($renderedSolutionGroups)) : ?>
        <div class="solutions-directory-groups">
          <?php foreach ($renderedSolutionGroups as $solutionGroup) : ?>
            <section class="solutions-directory-group">
              <div class="solutions-directory-group-header">
                <div>
                  <span class="solutions-directory-group-label"><?php echo esc_html($solutionGroup['label']); ?></span>
                  <h3><?php echo esc_html($solutionGroup['title']); ?></h3>
                </div>
                <p><?php echo esc_html($solutionGroup['description']); ?></p>
              </div>

              <div class="solutions-directory-grid">
                <?php foreach ($solutionGroup['pages'] as $solutionPage) : ?>
                  <a class="solutions-directory-card" href="<?php echo esc_url($solutionPage['url']); ?>">
                    <span class="solutions-directory-card-kicker"><?php echo esc_html($solutionGroup['label']); ?></span>
                    <h4><?php echo esc_html($solutionPage['title']); ?></h4>
                    <p><?php echo esc_html($solutionPage['description']); ?></p>
                    <span class="solutions-directory-card-cta">
                      View solution
                      <span aria-hidden="true">→</span>
                    </span>
                  </a>
                <?php endforeach; ?>
              </div>
            </section>
          <?php endforeach; ?>
        </div>
      <?php else : ?>
        <div class="solutions-directory-empty">
          <h3>No solution pages found yet.</h3>
          <p>
            Publish child pages under this Solutions page, or assign one of the existing solution templates in WordPress, and they will appear here automatically.
          </p>
        </div>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
