<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title('&laquo;', true, 'right'); ?></title>
  <?php wp_head(); ?>
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Bootstrap 5 CDN -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
  >
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    rel="stylesheet"
  >

  <!-- Line Icons -->
  <link href="https://cdn.lineicons.com/5.1/line/lineicons.css" rel="stylesheet"/>

  <!-- Shared Styles -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/universal.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/header.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/footer.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/responsive.css?v=<?php echo time(); ?>">

  <!-- Page Styles -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/site-tweaks.css?v=<?php echo time(); ?>">
  
  
</head>
<body>
  <!-- Header / Navigation -->
  <header class="site-header">
    <nav id="mainNav" class="navbar navbar-expand-xl">
      <div class="container-fluid nav-shell nav-shell-fluid">
        <a class="navbar-brand" href="<?php echo home_url(); ?>" aria-label="Anvaya Media Works home">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-amw-white.png" alt="Anvaya Media Works logo">
        </a>

        <button
          class="navbar-toggler d-xl-none"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#primaryNav"
          aria-controls="primaryNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon" data-lucide="menu" aria-hidden="true"></span>
        </button>

        <div class="collapse navbar-collapse" id="primaryNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link<?php echo $isHomePage ? ' is-active' : ''; ?>" href="<?php echo home_url(); ?>">Home</a>
            </li>

            <li class="nav-item nav-item-has-panel">
              <button class="nav-link nav-panel-toggle<?php echo $isAboutPage ? ' is-active' : ''; ?>" type="button" aria-expanded="false" data-panel="about-panel">
                About
              </button>
              <div class="mega-menu" id="about-panel">
                <div class="mega-menu-panel">
                  <div class="mega-menu-grid mega-menu-grid-3">
                    <div class="mega-menu-column">
                      <span class="mega-menu-label">About Us</span>
                      <a href="<?php echo home_url('/about'); ?>/who-we-are/">Who We Are</a>
                      <a href="<?php echo home_url('/about'); ?>/our-strategy/">Our Strategy</a>
                    </div>

                    <div class="mega-menu-column">
                      <span class="mega-menu-label">Our Approach</span>
                      <a href="<?php echo home_url('/about'); ?>/seo-approach/">SEO Approach</a>
                      <a href="<?php echo home_url('/about'); ?>/ui-ux-approach/">UI UX Approach</a>
                      <a href="<?php echo home_url('/about'); ?>/ppc-approach/">PPC Approach</a>
                    </div>

                    <div class="mega-menu-column">
                      <span class="mega-menu-label">Other Links</span>
                      <a href="<?php echo home_url('/about'); ?>/client-reviews/">Client Reviews</a>
                      <a href="<?php echo home_url('/about'); ?>/faqs/">FAQs</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="nav-item nav-item-has-panel">
              <button class="nav-link nav-panel-toggle<?php echo $isServicesPage ? ' is-active' : ''; ?>" type="button" aria-expanded="false" data-panel="services-panel">
                Services
              </button>
              <div class="mega-menu" id="services-panel">
                <div class="mega-menu-panel">
                  <div class="mega-menu-grid mega-menu-grid-4">
                    <div class="mega-menu-column">
                      <span class="mega-menu-label">Research</span>
                      <a href="<?php echo home_url('/services'); ?>/brand-research/">Brand Research</a>
                      <a href="<?php echo home_url('/services'); ?>/brand-strategy/">Brand Strategy</a>
                      <a href="<?php echo home_url('/services'); ?>/design-audit/">Design Audit</a>
                      <a href="<?php echo home_url('/services'); ?>/ux-research/">UX Research</a>
                      <a href="<?php echo home_url('/services'); ?>/conversion-optimization-audit/">Conversion Optimization Audit</a>
                      <a href="<?php echo home_url('/services'); ?>/competitive-benchmarking/">Competitive Benchmarking</a>
                    </div>

                    <div class="mega-menu-column">
                      <span class="mega-menu-label">Design</span>
                      <a href="<?php echo home_url('/services'); ?>/product-design/">Product Design</a>
                      <a href="<?php echo home_url('/services'); ?>/ui-ux-design/">UI UX Design</a>
                      <a href="<?php echo home_url('/services'); ?>/brand-design/">Brand Design</a>
                      <a href="<?php echo home_url('/services'); ?>/rebranding/">Rebranding</a>
                      <a href="<?php echo home_url('/services'); ?>/brand-style-guides/">Brand Style Guides</a>
                      <a href="<?php echo home_url('/services'); ?>/marketing-collateral/">Marketing Collateral</a>
                      <a href="<?php echo home_url('/services'); ?>/product-packaging-design/">Product Packaging Design</a>
                      <a href="<?php echo home_url('/services'); ?>/logo-design/">Logo Design</a>
                      <a href="<?php echo home_url('/services'); ?>/dashboard-design/">Dashboard Design</a>
                    </div>

                    <div class="mega-menu-column">
                      <span class="mega-menu-label">Build</span>
                      <a href="<?php echo home_url('/services'); ?>/website-development/">Website Development</a>
                    </div>

                    <div class="mega-menu-column">
                      <span class="mega-menu-label">Growth</span>
                      <a href="<?php echo home_url('/services'); ?>/search-engine-optimization/">Search Engine Optimization (SEO)</a>
                      <a href="<?php echo home_url('/services'); ?>/conversion-rate-optimization/">Conversion Rate Optimization</a>
                      <a href="<?php echo home_url('/services'); ?>/growth-marketing/">Growth Marketing</a>
                      <a href="<?php echo home_url('/services'); ?>/ppc-management/">PPC Management</a>
                      <a href="<?php echo home_url('/services'); ?>/email-marketing/">Email Marketing</a>
                      <a href="<?php echo home_url('/services'); ?>/content-marketing/">Content Marketing</a>
                      <a href="<?php echo home_url('/services'); ?>/b2b-marketing/">B2B Marketing</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="nav-item nav-item-has-panel">
              <button class="nav-link nav-panel-toggle<?php echo $isSolutionsPage ? ' is-active' : ''; ?>" type="button" aria-expanded="false" data-panel="solutions-panel">
                Solutions
              </button>
              <div class="mega-menu" id="solutions-panel">
                <div class="mega-menu-panel">
                  <div class="mega-menu-grid mega-menu-grid-2 mega-solutions-layout">
                    <div class="mega-menu-column mega-menu-column-detailed">
                      <span class="mega-menu-label">Based On Outcomes</span>
                      <div class="mega-menu-links-grid">
                        <div class="mega-menu-subcolumn">
                          <a href="<?php echo home_url('/solutions'); ?>/brand-growth-and-recognition/">
                            <strong>Brand Growth &amp; Recognition</strong>                            
                          </a>
                          <a href="<?php echo home_url('/solutions'); ?>/digital-transformation/">
                            <strong>Digital Transformation</strong>                            
                          </a>                          
                        </div>
                        <div class="mega-menu-subcolumn">
                          <a href="<?php echo home_url('/solutions'); ?>/ideation-and-design-strategy/">
                            <strong>Ideation &amp; Design Strategy</strong>
                          </a>
                          <a href="<?php echo home_url('/solutions'); ?>/brand-visibility/">
                            <strong>Brand Visibility</strong>                            
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="mega-menu-column">
                      <span class="mega-menu-label">Based On Industries</span>
                      <div class="mega-menu-links-grid">
                        <div class="mega-menu-subcolumn">
                          <a href="<?php echo home_url('/solutions'); ?>/e-commerce/">E-commerce</a>
                          <a href="<?php echo home_url('/solutions'); ?>/healthcare-and-fitness/">Healthcare &amp; Fitness</a>
                          <a href="<?php echo home_url('/solutions'); ?>/events/">Events</a>
                          <a href="<?php echo home_url('/solutions'); ?>/social-and-dating/">Social &amp; Dating</a>
                          <a href="<?php echo home_url('/solutions'); ?>/gaming/">Gaming</a>
                        </div>
                        <div class="mega-menu-subcolumn">
                          <a href="<?php echo home_url('/solutions'); ?>/education/">Education</a>
                          <a href="<?php echo home_url('/solutions'); ?>/entertainment/">Entertainment</a>
                          <a href="<?php echo home_url('/solutions'); ?>/travel-and-hospitality/">Travel &amp; Hospitality</a>
                          <a href="<?php echo home_url('/solutions'); ?>/food-and-restaurant/">Food &amp; Restaurant</a>
                          <a href="<?php echo home_url('/solutions'); ?>/real-estate/">Real Estate</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          <!--
            <li class="nav-item">
              <a class="nav-link<?php //echo $isWorkPage ? ' is-active' : ''; ?>" href="<?php //echo htmlspecialchars($workLink, ENT_QUOTES, 'UTF-8'); ?>">Work</a>
            </li>

            <li class="nav-item">
              <a class="nav-link<?php echo $isBlogPage ? ' is-active' : ''; ?>" href="<?php echo htmlspecialchars($blogLink, ENT_QUOTES, 'UTF-8'); ?>">Blog</a>
            </li>
          -->

            <li class="nav-item">
              <a class="nav-link<?php echo $isContactPage ? ' is-active' : ''; ?>" href="<?php echo home_url(); ?>/contact/">Contact Us</a>
            </li>
          </ul>

          <div class="navbar-mobile-cta d-xl-none">
            <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">Book a Strategy Call</a>
          </div>
        </div>

        <div class="navbar-desktop-cta d-none d-xl-flex">
          <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">Book a Strategy Call</a>
        </div>
      </div>
    </nav>
  </header>
