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

  <?php wp_footer(); ?>

</body>
</html>
