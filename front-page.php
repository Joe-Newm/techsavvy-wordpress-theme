<?php
get_header();
    ?>

<header class="video-container">
    <video preload="auto" autoplay="" loop="" muted="" name="media" class="tsI_vl">
      <source src="wp-content/themes/techsavvy-wordpress-theme/assets/images/pexels-yan-krukov-7792546.mp4" type="video/mp4">
    </video>
    <div class="container">
      <div class="hero-text-container">
        <h1 class="h1-hero"><?php echo esc_html(get_theme_mod('header_text_setting', 'Welcome to My Website!')); ?>
        </h1>
<p class="p-hero"><?php echo esc_html(get_theme_mod('subheader_text_setting')); ?></p>
        <button style="display: flex; justify-content: center; gap: 10px;" class="btn btn-primary btn-dark"
          type="button" onclick="window.location.href='mailto:support@techsavvy.llc';">Get Support</button>
      </div>
    </div>
  </header>
  <main>

    <!-- Marketing messaging and featurettes
  ================================================== -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row justify-content-center marketing">
        <div class="col-lg-4 marketing">
          <i class="bd-placeholder-img rounded-circle bi bi-pc-display" role="img" focusable="false">
          </i>
          <h3 class="fw-bold">IT Services</h3>
          <p>At Tech Savvy, we are your IT department, just as if you had a team of IT professionals in-house. We make
            it work.</p>
          <p><a class="btn btn-secondary" href="#">View Details</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 marketing">
          <i class="bd-placeholder-img rounded-circle bi bi-fingerprint" role="img" focusable="false">
          </i>
          <h3 class="fw-bold">Cyber Security</h3>
          <p>Our approach to cybersecurity services significantly increases our partners security and awareness, leading
            to a much stronger security posture and much lower risk.
          </p>
          <p><a class="btn btn-secondary" href="#">View Details</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 marketing">
          <i class="bd-placeholder-img rounded-circle bi bi-cloud-check" role="img" focusable="false">
          </i>
          <h3 class="fw-bold">Cloud & Backup</h3>
          <p>Store and share data easily through cloud services.</p>
          <p><a class="btn btn-secondary" href="#">View Details</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4 marketing">
          <i class="bd-placeholder-img rounded-circle bi bi-wrench-adjustable-circle" role="img" focusable="false">
          </i>
          <h3 class="fw-bold">Hardware Repair / Installation</h3>
          <p>Use new hardware to meet your organization's goals.</p>
          <p><a class="btn btn-secondary" href="#">View Details</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4 marketing">
          <i class="bd-placeholder-img rounded-circle bi bi-headset" role="img" focusable="false">
          </i>
          <h3 class="fw-bold">Help Desk</h3>
          <p>Get local IT support whenever and wherever you need it.</p>
          <p><a class="btn btn-secondary" href="#">View Details</a></p>
        </div>
      </div>

      <div class="gray-container">
        <div class="container">
          <div class="row content-container">

            <div class="col-lg-8" style=" padding-top: 20; margin-bottom: 20px;">
              <iframe src="https://player.vimeo.com/video/771776443?h=d027d28dd6" width="100%" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="col-lg-4 container">
              <div class="container">
              <h2>Why choose Tech Savvy?</h2>
              <p>Our locally owned tech support company in West Monroe, serving the Monroe, LA area, is made up of a
                dedicated team of IT professionals who are here to help organizations just like yours. We'll bring 30
                years
                of experience in local IT services to the table. We also offer hardware repair, voice over IP and
                professional development.

                Call us today for more information about our IT support services.</p>
            </div>
          </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="cta-container">
          <h2 style="text-align: center">Contact us today!</h2>
          <p style="text-align: center">To find out more about our full range of IT support services, call or message
            us today!</p>
          <div class="d-flex flex-column flex-lg-row" style="gap: 20px">
            <button style="display: flex; justify-content: center; gap: 10px;" class="btn btn-primary btn-dark"
              type="button" onclick="window.location.href='mailto:support@techsavvy.llc';"><i
                class="bi bi-envelope-fill" style="color: black; font-size: 1.5em"></i>support@techsavvy.llc</button>

            <button style="display: flex; justify-content: center; gap: 10px;" class="btn btn-primary btn-dark"
              type="button" onclick="window.location.href='tel:+13188840844';">
              <i class="bi bi-telephone-fill" style="color: black; font-size: 1.5em"></i>(318) 884-0844
            </button>
          </div>
        </div>
      </div>
</main>

<?php
get_footer();
?>
        




