<?php /* Template Name: Solutions */
$solutionGroups = [
  'Based on Outcomes' => [
    'templates' => [
      'brand-growth-and-recognition.php' => [
        'fallback_title' => 'Brand Growth & Recognition',
      ],
      'digital-transformation.php' => [
        'fallback_title' => 'Digital Transformation',
      ],
      'ideation-and-design-strategy.php' => [
        'fallback_title' => 'Ideation & Design Strategy',
      ],
      'brand-visibility.php' => [
        'fallback_title' => 'Brand Visibility',
      ],
    ],
  ],
  'Based on Industries' => [
    'templates' => [
      'e-commerce.php' => [
        'fallback_title' => 'E-commerce',
      ],
      'healthcare-and-fitness.php' => [
        'fallback_title' => 'Healthcare & Fitness',
      ],
      'events.php' => [
        'fallback_title' => 'Events',
      ],
      'social-and-dating.php' => [
        'fallback_title' => 'Social & Dating',
      ],
      'gaming.php' => [
        'fallback_title' => 'Gaming',
      ],
      'education.php' => [
        'fallback_title' => 'Education',
      ],
      'entertainment.php' => [
        'fallback_title' => 'Entertainment',
      ],
      'travel-and-hospitality.php' => [
        'fallback_title' => 'Travel & Hospitality',
      ],
      'food-and-restaurant.php' => [
        'fallback_title' => 'Food & Restaurant',
      ],
      'real-estate.php' => [
        'fallback_title' => 'Real Estate',
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

      if ($pageTitle === '') {
        $pageTitle = $templateConfig['fallback_title'];
      }

      $groupPages[] = [
        'title' => $pageTitle,
        'url' => get_permalink($matchedPage),
      ];
    }
  }

  if (!empty($groupPages)) {
    $renderedSolutionGroups[] = [
      'title' => $groupTitle,
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

  if ($pageTitle === '') {
    continue;
  }

  $additionalChildPages[] = [
    'title' => $pageTitle,
    'url' => get_permalink($directChildPage),
  ];
}

if (!empty($additionalChildPages)) {
  $renderedSolutionGroups[] = [
    'title' => 'More Solutions',
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
      <?php if (!empty($renderedSolutionGroups)) : ?>
        <div class="solutions-directory-grid">
          <?php foreach ($renderedSolutionGroups as $solutionGroup) : ?>
            <section class="solutions-directory-card">
              <h2><?php echo esc_html($solutionGroup['title']); ?></h2>
              <ul class="solutions-directory-links">
                <?php foreach ($solutionGroup['pages'] as $solutionPage) : ?>
                  <li>
                    <a href="<?php echo esc_url($solutionPage['url']); ?>">
                      <?php echo esc_html($solutionPage['title']); ?>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
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
