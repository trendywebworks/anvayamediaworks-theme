/* =========================================================
   Header / Mega Menu Interactions
========================================================= */

$(function () {
  var $window = $(window);
  var $navbar = $("#mainNav");
  var $navItemsWithPanels = $(".nav-item-has-panel");
  var $panelToggles = $(".nav-panel-toggle");
  var $megaMenus = $(".mega-menu");
  var $pageLinks = $('a[href^="#"]');
  var $capabilityRailLinks = $('.capability-rail-button[href^="#capability-"]');
  var $capabilitySections = $('.capability-panel[id^="capability-"]');
  var closePanelTimer = null;

  function normalizeText(value) {
    return (value || "").replace(/\s+/g, " ").trim().toLowerCase();
  }

  function getIconContextText(element) {
    var $context = $(element).closest(
      '.discover-feature-item, .industry-tile, .contact-info-card, .contact-team-social, .about-value-item, article, li, .card'
    );

    if ($context.length) {
      return normalizeText($context.text());
    }

    return normalizeText($(element).parent().text());
  }

  function resolveIconName(text, fallback) {
    var rules = [
      { pattern: /(phone|call|dial)/, icon: 'phone' },
      { pattern: /(email|mail|newsletter|whatsapp)/, icon: 'mail' },
      { pattern: /(address|location|map|visit)/, icon: 'map-pin' },
      { pattern: /(education|school|college|academy|training|admission|course)/, icon: 'graduation-cap' },
      { pattern: /(gaming|game|player|esports)/, icon: 'gamepad-2' },
      { pattern: /(real estate|property|building|project|residential|commercial)/, icon: 'building-2' },
      { pattern: /(travel|hospitality|hotel|destination|tour|booking)/, icon: 'map-pin' },
      { pattern: /(food|restaurant|cafe|kitchen|bakery|beverage)/, icon: 'coffee' },
      { pattern: /(e-commerce|ecommerce|retail|shopping|store|d2c)/, icon: 'shopping-bag' },
      { pattern: /(technology|software|saas|platform|product)/, icon: 'cpu' },
      { pattern: /(startup|launch)/, icon: 'rocket' },
      { pattern: /(automotive|car)/, icon: 'car' },
      { pattern: /(health|fitness|care|wellness)/, icon: 'heart' },
      { pattern: /(event|calendar|schedule)/, icon: 'calendar' },
      { pattern: /(faq|question|answer)/, icon: 'message-circle' },
      { pattern: /(seo|search|ranking|visibility|discover)/, icon: 'search' },
      { pattern: /(audit|analysis|research|insight|benchmark|review|market)/, icon: 'search' },
      { pattern: /(audience|user|customer|community|people|student|attendee|buyer|team)/, icon: 'users' },
      { pattern: /(trust|safety|reputation|credibility|confidence|secure)/, icon: 'shield-check' },
      { pattern: /(strategy|positioning|plan|roadmap|direction|define)/, icon: 'compass' },
      { pattern: /(design|identity|visual|prototype|wireframe|creative|logo|ui|ux)/, icon: 'pen-tool' },
      { pattern: /(website|web|app|mobile|dashboard|digital experience)/, icon: 'monitor-smartphone' },
      { pattern: /(content|story|copy|blog|messaging|narrative)/, icon: 'file-text' },
      { pattern: /(growth|scale|revenue|sales|lead|roi|expand|momentum)/, icon: 'rocket' },
      { pattern: /(conversion|optimi[sz]e|performance|results|click|target)/, icon: 'target' },
      { pattern: /(workflow|process|system|automation|integration)/, icon: 'settings' },
      { pattern: /(idea|ideation|concept|innovation)/, icon: 'lightbulb' },
      { pattern: /(connect|relationship|collaboration|b2b|partner)/, icon: 'handshake' }
    ];

    var matchedRule = rules.find(function (rule) {
      return rule.pattern.test(text);
    });

    return matchedRule ? matchedRule.icon : fallback;
  }

  function applyLucideIcon(element, iconName) {
    if (!element || !iconName) {
      return;
    }

    element.setAttribute('data-lucide-host', 'true');
    element.innerHTML = '<i data-lucide="' + iconName + '"></i>';
  }

  function enhanceSharedIcons() {
    if (!(window.lucide && typeof window.lucide.createIcons === 'function')) {
      return;
    }

    var selectorGroups = [
      { selector: '.about-value-icon', fallback: 'sparkles' },
      { selector: '.contact-info-icon', fallback: 'phone' },
      { selector: '.brand-strategy-benefit-icon', fallback: 'compass' },
      { selector: '.brand-research-benefit-icon', fallback: 'search' },
      { selector: '.product-design-challenge-icon', fallback: 'pen-tool' },
      { selector: '.ux-research-problem-icon', fallback: 'search' },
      { selector: '.website-development-problem-icon', fallback: 'monitor-smartphone' },
      { selector: '.seo-service-problem-icon', fallback: 'search' },
      { selector: '.cro-service-problem-icon', fallback: 'target' },
      { selector: '.growth-marketing-problem-icon', fallback: 'rocket' },
      { selector: '.ppc-management-problem-icon', fallback: 'target' },
      { selector: '.email-marketing-problem-icon', fallback: 'mail' },
      { selector: '.content-marketing-problem-icon', fallback: 'file-text' },
      { selector: '.b2b-marketing-problem-icon', fallback: 'handshake' },
      { selector: '.competitive-benchmarking-struggle-icon', fallback: 'search' },
      { selector: '.design-audit-impact-icon', fallback: 'search' },
      { selector: '.brand-design-sign-icon', fallback: 'pen-tool' },
      { selector: '.brand-design-process-icon', fallback: 'pen-tool' },
      { selector: '.rebranding-sign-icon', fallback: 'sparkles' },
      { selector: '.rebranding-process-icon', fallback: 'sparkles' },
      { selector: '.cro-audit-sign-icon', fallback: 'target' },
      { selector: '.ppc-foundation-icon', fallback: 'target' },
      { selector: '.uiux-question-icon', fallback: 'pen-tool' },
      { selector: '.seo-truth-icon', fallback: 'search' },
      { selector: '.faqs-item-icon', fallback: 'message-circle' },
      { selector: '.discover-feature-index', fallback: 'sparkles' },
      { selector: '.industry-tile-icon', fallback: 'sparkles' },
      { selector: '.navbar-toggler-icon[data-lucide]', fallback: 'menu' }
    ];

    selectorGroups.forEach(function (group) {
      document.querySelectorAll(group.selector).forEach(function (element) {
        var contextText = getIconContextText(element);
        var iconName = resolveIconName(contextText, group.fallback);
        applyLucideIcon(element, iconName);
      });
    });

    document.querySelectorAll('.contact-team-social a').forEach(function (link) {
      var iconName = link.classList.contains('is-linkedin') ? 'linkedin' : 'twitter';
      applyLucideIcon(link, iconName);
    });

    window.lucide.createIcons({
      attrs: {
        'aria-hidden': 'true',
        'focusable': 'false'
      }
    });
  }

  function isDesktop() {
    return window.innerWidth >= 1200;
  }

  function toggleNavbarState() {
    $navbar.toggleClass("scrolled", $window.scrollTop() > 20);
  }

  function updateCapabilityRailState() {
    if (!$capabilityRailLinks.length || !$capabilitySections.length) {
      return;
    }

    var marker = $window.scrollTop() + $navbar.outerHeight() + 140;
    var activeId = $capabilitySections.first().attr("id");

    $capabilitySections.each(function () {
      if (marker >= $(this).offset().top) {
        activeId = this.id;
      }
    });

    $capabilityRailLinks.removeClass("is-active").removeAttr("aria-current");
    $capabilityRailLinks
      .filter('[href="#' + activeId + '"]')
      .addClass("is-active")
      .attr("aria-current", "true");
  }

  function clearCloseTimer() {
    if (closePanelTimer) {
      window.clearTimeout(closePanelTimer);
      closePanelTimer = null;
    }
  }

  function closePanels() {
    clearCloseTimer();
    $navItemsWithPanels.removeClass("is-open");
    $panelToggles.attr("aria-expanded", "false");
    $navbar.removeClass("menu-open");
  }

  function openPanel($item) {
    clearCloseTimer();
    closePanels();
    $item.addClass("is-open");
    $item.find(".nav-panel-toggle").attr("aria-expanded", "true");
    $navbar.addClass("menu-open");
  }

  function scheduleClose() {
    clearCloseTimer();
    closePanelTimer = window.setTimeout(function () {
      closePanels();
    }, 180);
  }

  $panelToggles.on("click", function (event) {
    var $toggle = $(this);
    var $item = $toggle.closest(".nav-item-has-panel");
    var isOpen = $item.hasClass("is-open");

    event.preventDefault();

    if (isOpen) {
      closePanels();
      return;
    }

    openPanel($item);
  });

  $navItemsWithPanels.on("mouseenter", function () {
    if (!isDesktop()) {
      return;
    }

    clearCloseTimer();
    openPanel($(this));
  });

  $navItemsWithPanels.on("mouseleave", function () {
    if (!isDesktop()) {
      return;
    }

    scheduleClose();
  });

  $megaMenus.on("mouseenter", function () {
    if (!isDesktop()) {
      return;
    }

    clearCloseTimer();
  });

  $megaMenus.on("mouseleave", function () {
    if (!isDesktop()) {
      return;
    }

    scheduleClose();
  });

  $(document).on("click", function (event) {
    if ($(event.target).closest(".nav-item-has-panel, .nav-panel-toggle").length) {
      return;
    }

    closePanels();
  });

  $pageLinks.on("click", function (event) {
    var targetId = $(this).attr("href");

    if (!targetId || targetId.charAt(0) !== "#" || targetId.length === 1) {
      return;
    }

    if ($(this).hasClass("capability-rail-button")) {
      closePanels();
      return;
    }

    var $target = $(targetId);

    if (!$target.length) {
      return;
    }

    event.preventDefault();
    closePanels();

    $("html, body").animate(
      {
        scrollTop: $target.offset().top - $navbar.outerHeight()
      },
      700
    );

    if ($(".navbar-collapse").hasClass("show")) {
      $(".navbar-collapse").collapse("hide");
    }
  });

  $window.on("scroll", function () {
    toggleNavbarState();
    updateCapabilityRailState();
  });

  $window.on("resize", function () {
    toggleNavbarState();
    updateCapabilityRailState();

    if (!isDesktop()) {
      closePanels();
    } else if ($(".nav-item-has-panel.is-open").length) {
      $navbar.addClass("menu-open");
    }
  });

  $(".navbar-collapse").on("shown.bs.collapse", function () {
    $navbar.addClass("menu-open");
  });

  $(".navbar-collapse").on("hidden.bs.collapse", function () {
    closePanels();
    toggleNavbarState();
  });

  toggleNavbarState();
  updateCapabilityRailState();
  enhanceSharedIcons();

  $('[data-review-carousel]').each(function () {
    var carousel = this;
    var viewport = carousel.querySelector('[data-review-carousel-viewport]');
    var track = carousel.querySelector('[data-review-carousel-track]');
    var cards = carousel.querySelectorAll('[data-review-carousel-card]');
    var prevButton = carousel.querySelector('[data-review-carousel-prev]');
    var nextButton = carousel.querySelector('[data-review-carousel-next]');
    var progressFill = carousel.querySelector('[data-review-carousel-progress]');
    var autoplayValue = parseInt(carousel.getAttribute('data-review-carousel-autoplay'), 10);
    var autoplayDelay = Number.isFinite(autoplayValue) ? autoplayValue : 0;
    var autoplayTimer = null;
    var currentIndex = 0;

    if (!viewport || !track || !cards.length || !prevButton || !nextButton || !progressFill) {
      return;
    }

    function getMetrics() {
      var trackStyles = window.getComputedStyle(track);
      var gap = parseFloat(trackStyles.columnGap || trackStyles.gap || 0) || 0;
      var cardWidth = cards[0].getBoundingClientRect().width;
      var stride = cardWidth + gap;
      var visibleCards = Math.max(1, Math.floor((viewport.clientWidth + gap) / stride));
      var maxIndex = Math.max(0, cards.length - visibleCards);

      return {
        stride: stride,
        maxIndex: maxIndex
      };
    }

    function updateCarousel() {
      var metrics = getMetrics();
      var progressScale = 1;

      currentIndex = Math.max(0, Math.min(currentIndex, metrics.maxIndex));
      track.style.transform = 'translateX(-' + (currentIndex * metrics.stride) + 'px)';

      prevButton.disabled = currentIndex === 0;
      nextButton.disabled = currentIndex >= metrics.maxIndex;

      if (metrics.maxIndex > 0) {
        progressScale = 0.34 + ((currentIndex / metrics.maxIndex) * 0.66);
      }

      progressFill.style.transform = 'scaleX(' + progressScale + ')';
    }

    function stopAutoplay() {
      if (!autoplayTimer) {
        return;
      }

      window.clearInterval(autoplayTimer);
      autoplayTimer = null;
    }

    function startAutoplay() {
      stopAutoplay();

      if (!autoplayDelay || document.hidden) {
        return;
      }

      autoplayTimer = window.setInterval(function () {
        var metrics = getMetrics();

        if (metrics.maxIndex <= 0) {
          return;
        }

        currentIndex = currentIndex >= metrics.maxIndex ? 0 : currentIndex + 1;
        updateCarousel();
      }, autoplayDelay);
    }

    prevButton.addEventListener('click', function () {
      currentIndex -= 1;
      updateCarousel();
      startAutoplay();
    });

    nextButton.addEventListener('click', function () {
      currentIndex += 1;
      updateCarousel();
      startAutoplay();
    });

    carousel.addEventListener('mouseenter', stopAutoplay);
    carousel.addEventListener('mouseleave', startAutoplay);
    carousel.addEventListener('focusin', stopAutoplay);
    carousel.addEventListener('focusout', startAutoplay);

    document.addEventListener('visibilitychange', function () {
      if (document.hidden) {
        stopAutoplay();
      } else {
        startAutoplay();
      }
    });

    window.addEventListener('resize', updateCarousel);
    updateCarousel();
    startAutoplay();
  });
});
