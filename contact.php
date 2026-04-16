<?php /* Template Name: Contact */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/contact.css?v=<?php echo($t); ?>">


  <main id="top" class="contact-page">
    <section class="contact-hero-section">
      <div class="container">
        <div class="contact-hero-shell">
          <?php get_template_part( 'partials/common/_breadcrumb' ); ?>
          
          <h1>Contact Us</h1>
        </div>
      </div>
    </section>

    <section class="contact-connect-section">
      <div class="container">
        <div class="contact-connect-shell">
          <div class="contact-connect-copy">
            <span class="contact-section-eyebrow">Get In Touch</span>
            <h2>We&rsquo;re here to help you grow.</h2>
            <p>
              Feel free to reach out to us through your preferred method of contact. We are eager to connect
              with you and explore how our digital marketing team can contribute to your success.
            </p>

            <div class="contact-info-list">
              <article class="contact-info-card">
                <span class="contact-info-icon" aria-hidden="true">
                  <svg viewBox="0 0 32 32" role="presentation" focusable="false">
                    <path d="M11.2 7.8h3.3l1.7 4.2-1.8 1.9a17.4 17.4 0 0 0 3.7 3.7l1.9-1.8 4.2 1.7v3.3c0 .77-.63 1.4-1.4 1.4C14 22.2 9.8 18 9.8 12c0-.77.63-1.4 1.4-1.4Z"></path>
                  </svg>
                </span>
                <div class="contact-info-body">
                  <strong>Phone number</strong>
                  <a href="tel:+918297283791">+91-8297283791</a>
                </div>
              </article>

              <article class="contact-info-card">
                <span class="contact-info-icon" aria-hidden="true">
                  <svg viewBox="0 0 32 32" role="presentation" focusable="false">
                    <path d="M8 10.5h16v11H8z"></path>
                    <path d="m8.5 11 7.5 6 7.5-6"></path>
                  </svg>
                </span>
                <div class="contact-info-body">
                  <strong>Email address</strong>
                  <a href="mailto:marketing@anvayamediaworks.com">marketing@anvayamediaworks.com</a>
                </div>
              </article>

              <article class="contact-info-card">
                <span class="contact-info-icon" aria-hidden="true">
                  <svg viewBox="0 0 32 32" role="presentation" focusable="false">
                    <path d="M16 25.2s6-5.85 6-10.6A6 6 0 0 0 10 14.6c0 4.75 6 10.6 6 10.6Z"></path>
                    <circle cx="16" cy="14.5" r="2.3"></circle>
                  </svg>
                </span>
                <div class="contact-info-body">
                  <strong>Address</strong>
                  <p>
                    Anvaya Media Works<br>
                    50-121-63/1, Plot No-25, Balayya Sastry Layout,<br>
                    Near Fourth Town Police Station,<br>
                    Visakhapatnam, Andhra Pradesh - 530013, India
                  </p>
                </div>
              </article>
            </div>
          </div>

          <div class="contact-form-panel">
            <span class="contact-form-label">Say Hello</span>
            <h3>Tell us a little about what you need.</h3>

            <?php echo do_shortcode( '[contact-form-7 id="210d2dc" title="Contact Form"]' ); ?>

          </div>
        </div>
      </div>
    </section>

    <section class="contact-team-section">
      <div class="container">
        <div class="contact-team-header">
          <span class="contact-section-eyebrow">Our Team</span>
          <h2>People you can expect to hear from.</h2>
        </div>

        <div class="contact-team-grid">
          <article class="contact-team-card">
            <div class="contact-team-avatar">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/contact-team-dummy.svg" alt="Placeholder portrait of Rajesh Ayanala">
            </div>
            <h3>Rajesh Ayanala</h3>
            <p>&ldquo;Driven by results. Defined by creativity. At Anvaya, your vision becomes reality.&rdquo;</p>
            <div class="contact-team-social">
              <a class="is-linkedin" href="#" aria-label="Rajesh Ayanala on LinkedIn">
                <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.146 1.146C1.5.792 1.98.593 2.48.593h11.04c1.04 0 1.887.847 1.887 1.887V13.52c0 1.04-.847 1.887-1.887 1.887H2.48A1.89 1.89 0 0 1 .593 13.52V2.48c0-.5.199-.98.553-1.334ZM4.75 6.5H2.9V12h1.85V6.5Zm.12-1.7c0-.6-.45-1.05-1.05-1.05s-1.05.45-1.05 1.05c0 .58.45 1.04 1.03 1.04h.02c.62 0 1.05-.46 1.05-1.04ZM13.1 8.62c0-1.7-.9-2.49-2.11-2.49-1 0-1.45.55-1.7.94V6.5H7.44c.02.38 0 5.5 0 5.5h1.85V8.93c0-.16.01-.31.06-.42.12-.31.4-.62.87-.62.61 0 .86.47.86 1.16V12h1.85V8.62Z"/>
                </svg>
              </a>
              <a class="is-x" href="#" aria-label="Rajesh Ayanala on X">
                <svg viewBox="0 0 1200 1227" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M714.163 519.284L1160.89 0H1055.09L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.803L515.454 750.218L842.672 1226.37H1200L714.163 519.284ZM569.14 687.828L521.697 619.91L144.011 79.694H306.615L611.404 515.76L658.847 583.679L1055.14 1150.37H892.535L569.14 687.828Z"/>
                </svg>
              </a>
            </div>
          </article>

          <article class="contact-team-card">
            <div class="contact-team-avatar">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/contact-team-dummy.svg" alt="Placeholder portrait of Anupriya">
            </div>
            <h3>Anupriya</h3>
            <p>&ldquo;We build brands with purpose, passion, and originality every single day.&rdquo;</p>
            <div class="contact-team-social">
              <a class="is-linkedin" href="#" aria-label="Anupriya on LinkedIn">
                <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.146 1.146C1.5.792 1.98.593 2.48.593h11.04c1.04 0 1.887.847 1.887 1.887V13.52c0 1.04-.847 1.887-1.887 1.887H2.48A1.89 1.89 0 0 1 .593 13.52V2.48c0-.5.199-.98.553-1.334ZM4.75 6.5H2.9V12h1.85V6.5Zm.12-1.7c0-.6-.45-1.05-1.05-1.05s-1.05.45-1.05 1.05c0 .58.45 1.04 1.03 1.04h.02c.62 0 1.05-.46 1.05-1.04ZM13.1 8.62c0-1.7-.9-2.49-2.11-2.49-1 0-1.45.55-1.7.94V6.5H7.44c.02.38 0 5.5 0 5.5h1.85V8.93c0-.16.01-.31.06-.42.12-.31.4-.62.87-.62.61 0 .86.47.86 1.16V12h1.85V8.62Z"/>
                </svg>
              </a>
              <a class="is-x" href="#" aria-label="Anupriya on X">
                <svg viewBox="0 0 1200 1227" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M714.163 519.284L1160.89 0H1055.09L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.803L515.454 750.218L842.672 1226.37H1200L714.163 519.284ZM569.14 687.828L521.697 619.91L144.011 79.694H306.615L611.404 515.76L658.847 583.679L1055.14 1150.37H892.535L569.14 687.828Z"/>
                </svg>
              </a>
            </div>
          </article>

          <article class="contact-team-card">
            <div class="contact-team-avatar">
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/contact-team-dummy.svg" alt="Placeholder portrait of Vamsi Krishna">
            </div>
            <h3>Vamsi Krishna</h3>
            <p>&ldquo;Excellence is our standard. Growth is our promise. Let&rsquo;s set new benchmarks together.&rdquo;</p>
            <div class="contact-team-social">
              <a class="is-linkedin" href="#" aria-label="Vamsi Krishna on LinkedIn">
                <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.146 1.146C1.5.792 1.98.593 2.48.593h11.04c1.04 0 1.887.847 1.887 1.887V13.52c0 1.04-.847 1.887-1.887 1.887H2.48A1.89 1.89 0 0 1 .593 13.52V2.48c0-.5.199-.98.553-1.334ZM4.75 6.5H2.9V12h1.85V6.5Zm.12-1.7c0-.6-.45-1.05-1.05-1.05s-1.05.45-1.05 1.05c0 .58.45 1.04 1.03 1.04h.02c.62 0 1.05-.46 1.05-1.04ZM13.1 8.62c0-1.7-.9-2.49-2.11-2.49-1 0-1.45.55-1.7.94V6.5H7.44c.02.38 0 5.5 0 5.5h1.85V8.93c0-.16.01-.31.06-.42.12-.31.4-.62.87-.62.61 0 .86.47.86 1.16V12h1.85V8.62Z"/>
                </svg>
              </a>
              <a class="is-x" href="#" aria-label="Vamsi Krishna on X">
                <svg viewBox="0 0 1200 1227" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M714.163 519.284L1160.89 0H1055.09L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.803L515.454 750.218L842.672 1226.37H1200L714.163 519.284ZM569.14 687.828L521.697 619.91L144.011 79.694H306.615L611.404 515.76L658.847 583.679L1055.14 1150.37H892.535L569.14 687.828Z"/>
                </svg>
              </a>
            </div>
          </article>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
