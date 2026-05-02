  <?php get_template_part( 'partials/common/_prefooter' ); ?>    

  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <a class="footer-logo" href="<?php echo home_url(); ?>" aria-label="Anvaya Media Works home">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-amw-white.png" alt="Anvaya Media Works" />
          </a>
          <p>
            A cohesive approach to premium brand building, digital growth, and web execution&mdash;structured
            within a clean, strategic sitemap designed to enhance both search visibility and user conversion.
            Every element works together to create a seamless and scalable digital presence.
          </p>
          <div class="footer-brand-social" aria-label="Company social links">
            <a href="https://www.youtube.com/@AnvayaMediawork" aria-label="Anvaya Media Works on LinkedIn" target="_blank">
              <i class="lni lni-youtube"></i>
            </a>
            <a href="https://maps.app.goo.gl/GF6W2bdbZiVPMkN86" aria-label="Anvaya Media Works on LinkedIn" target="_blank">
              <i class="lni lni-map-marker-5"></i>
            </a>
            <a href="https://www.facebook.com/share/1cJRE8tmTe/" aria-label="Anvaya Media Works on LinkedIn" target="_blank">
              <i class="lni lni-facebook"></i>
            </a>
            <a href="https://www.instagram.com/anvayamediaworks" aria-label="Anvaya Media Works on X" target="_blank">
              <i class="lni lni-instagram"></i>
            </a>
          </div>
        </div>

        <div class="footer-column">
          <span class="footer-heading">Useful Links</span>
          <?php /* Primary navigation */
              wp_nav_menu( array(
              'theme_location' => 'footer_nav_1',
              'depth' => 2,
              'container' => false,
              'menu_class' => '',
              'role' => 'menu',
              'aria-labelledby' => 'footer_nav_1',
              //Process nav menu using our custom nav walker
              'walker' => new wp_bootstrap_navwalker())
              );
          ?>
        </div>

        <div class="footer-column">
          <span class="footer-heading">About</span>
          <?php /* Primary navigation */
              wp_nav_menu( array(
              'theme_location' => 'footer_nav_2',
              'depth' => 2,
              'container' => false,
              'menu_class' => '',
              'role' => 'menu',
              'aria-labelledby' => 'footer_nav_2',
              //Process nav menu using our custom nav walker
              'walker' => new wp_bootstrap_navwalker())
              );
          ?>
        </div>        
      </div>

      <div class="footer-bottom">
        <p>&copy; <?php echo date("Y"); ?> Anvaya Media Works. All rights reserved.</p>
      </div>
    </div>
  </footer>


  <!-- Lead Gen Form Modal -->
  <div id="customModal" class="modal">
    <div class="modal-content">
      <span class="close-btn">&times;</span>
      <div class="popup-form">
        <script src="https://js-na2.hsforms.net/forms/embed/245706297.js" defer></script>
        <div class="hs-form-frame" data-region="na2" data-form-id="96c8a4e9-44f0-481a-8c3c-5501db340e26" data-portal-id="245706297"></div>
        <style>
          .hsfc-Step .hsfc-Step__Content {
              padding: 0 !important;
          }
        </style>
      </div>
    </div>
  </div>


  <!-- jQuery CDN -->
  <script
    src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"
  ></script>

  <!-- Bootstrap 5 Bundle -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
  ></script>

  <!-- Custom Script -->
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/script.js"></script>

  <script>
    window.addEventListener('load', function () {
      const modal = document.getElementById('customModal');
      const closeBtn = document.querySelector('.close-btn');

      // Show modal after 30 seconds
      setTimeout(function () {
        if (modal) {
          modal.style.display = 'flex';
        }
      }, 30000);

      // Close ONLY via close button
      if (closeBtn) {
        closeBtn.addEventListener('click', function () {
          modal.style.display = 'none';
        });
      }

      // Disable ESC key closing
      document.addEventListener('keydown', function(e) {
        if (e.key === "Escape") {
          e.preventDefault();
        }
      });
    });
    /* Contact Form 7 Submit Event */
    document.addEventListener('wpcf7submit', function(event) {
      // DO NOTHING → keep modal open
    });
  </script>

  <script>
    document.addEventListener('wpcf7submit', function () {
      console.log('CF7 working');
    });

    document.addEventListener('DOMContentLoaded', function () {
      if (typeof wpcf7 !== 'undefined') {
        document.querySelectorAll('.wpcf7 form').forEach(function (form) {
          wpcf7.init(form);
        });
      }
    });
  </script>

  <?php wp_footer(); ?>

</body>
</html>