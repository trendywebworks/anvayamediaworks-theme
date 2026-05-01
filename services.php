<?php /* Template Name: Services */
$serviceGroups = [
  'Research' => [
    'templates' => [
      'brand-research.php' => [
        'fallback_title' => 'Brand Research',
      ],
      'brand-strategy.php' => [
        'fallback_title' => 'Brand Strategy',
      ],
      'design-audit.php' => [
        'fallback_title' => 'Design Audit',
      ],
      'ux-research.php' => [
        'fallback_title' => 'UX Research',
      ],
      'conversion-optimization-audit.php' => [
        'fallback_title' => 'Conversion Optimization Audit',
      ],
      'competitive-benchmarking.php' => [
        'fallback_title' => 'Competitive Benchmarking',
      ],
    ],
  ],
  'Design' => [
    'templates' => [
      'product-design.php' => [
        'fallback_title' => 'Product Design',
      ],
      'ui-ux-design.php' => [
        'fallback_title' => 'UI UX Design',
      ],
      'brand-design.php' => [
        'fallback_title' => 'Brand Design',
      ],
      'rebranding.php' => [
        'fallback_title' => 'Rebranding',
      ],
      'brand-style-guides.php' => [
        'fallback_title' => 'Brand Style Guides',
      ],
      'marketing-collateral.php' => [
        'fallback_title' => 'Marketing Collateral',
      ],
      'product-packaging-design.php' => [
        'fallback_title' => 'Product Packaging Design',
      ],
      'logo-design.php' => [
        'fallback_title' => 'Logo Design',
      ],
      'dashboard-design.php' => [
        'fallback_title' => 'Dashboard Design',
      ],
    ],
  ],
  'Build' => [
    'templates' => [
      'website-development.php' => [
        'fallback_title' => 'Website Development',
      ],
    ],
  ],
  'Growth' => [
    'templates' => [
      'search-engine-optimization.php' => [
        'fallback_title' => 'Search Engine Optimization (SEO)',
      ],
      'conversion-rate-optimization.php' => [
        'fallback_title' => 'Conversion Rate Optimization',
      ],
      'growth-marketing.php' => [
        'fallback_title' => 'Growth Marketing',
      ],
      'ppc-management.php' => [
        'fallback_title' => 'PPC Management',
      ],
      'email-marketing.php' => [
        'fallback_title' => 'Email Marketing',
      ],
      'content-marketing.php' => [
        'fallback_title' => 'Content Marketing',
      ],
      'b2b-marketing.php' => [
        'fallback_title' => 'B2B Marketing',
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
$renderedServiceGroups = [];

foreach ($serviceGroups as $groupTitle => $groupConfig) {
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
    $renderedServiceGroups[] = [
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
  $renderedServiceGroups[] = [
    'title' => 'More Services',
    'pages' => $additionalChildPages,
  ];
}

$servicesPageTitle = trim(get_the_title());

if ($servicesPageTitle === '') {
  $servicesPageTitle = 'Services';
}
?>

<?php get_header(); ?>

<?php $t = time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/blog.css?v=<?php echo($t); ?>">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/services.css?v=<?php echo($t); ?>">

<main id="top" class="blog-page services-page">
  <section class="blog-hero-section">
    <div class="container">
      <div class="blog-hero-shell">
        <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
        <h1><?php echo esc_html($servicesPageTitle); ?></h1>
      </div>
    </div>
  </section>

  <section class="services-directory-section">
    <div class="container">
      <?php if (!empty($renderedServiceGroups)) : ?>
        <div class="services-directory-grid">
          <?php foreach ($renderedServiceGroups as $serviceGroup) : ?>
            <section class="services-directory-card">
              <h2><?php echo esc_html($serviceGroup['title']); ?></h2>
              <ul class="services-directory-links">
                <?php foreach ($serviceGroup['pages'] as $servicePage) : ?>
                  <li>
                    <a href="<?php echo esc_url($servicePage['url']); ?>">
                      <?php echo esc_html($servicePage['title']); ?>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </section>
          <?php endforeach; ?>
        </div>
      <?php else : ?>
        <div class="services-directory-empty">
          <h3>No service pages found yet.</h3>
          <p>
            Publish child pages under this Services page, or assign one of the existing service templates in WordPress, and they will appear here automatically.
          </p>
        </div>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
