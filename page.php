<?php
get_header();
?>
<header>
  <div class="header-2">
    <div class="container">
      <h1 style="border-bottom: 2px solid var(--primary-yellow)"><?php the_title(); ?></h1>
    </div>
  </div>
</header>




<!-- ////////////////////////////////////// Services Page ////////////////////////////////////// -->

<?php if (is_page("Services")): ?>

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
<p><a class="btn btn-secondary" href="<?php echo get_permalink(107);?>">View Details</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4 marketing">
    <i class="bd-placeholder-img rounded-circle bi bi-fingerprint" role="img" focusable="false">
    </i>
    <h3 class="fw-bold">Cyber Security</h3>
    <p>Our approach to cybersecurity services significantly increases our partners security and awareness, leading
      to a much stronger security posture and much lower risk.
    </p>
<p><a class="btn btn-secondary" href="<?php echo get_permalink(109);?>">View Details</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4 marketing">
    <i class="bd-placeholder-img rounded-circle bi bi-cloud-check" role="img" focusable="false">
    </i>
    <h3 class="fw-bold">Cloud & Backup</h3>
    <p>Store and share data easily through cloud services.</p>
<p><a class="btn btn-secondary" href="<?php echo get_permalink(111);?>">View Details</a></p>
  </div><!-- /.col-lg-4 -->

  <div class="col-lg-4 marketing">
    <i class="bd-placeholder-img rounded-circle bi bi-wrench-adjustable-circle" role="img" focusable="false">
    </i>
    <h3 class="fw-bold">Hardware Repair / Installation</h3>
    <p>Use new hardware to meet your organization's goals.</p>
<p><a class="btn btn-secondary" href="<?php echo get_permalink(113);?>">View Details</a></p>
  </div><!-- /.col-lg-4 -->

  <div class="col-lg-4 marketing">
    <i class="bd-placeholder-img rounded-circle bi bi-headset" role="img" focusable="false">
    </i>
    <h3 class="fw-bold">Help Desk</h3>
    <p>Get local IT support whenever and wherever you need it.</p>
<p><a class="btn btn-secondary" href="<?php echo get_permalink(115);?>">View Details</a></p>
  </div>
</div>
</div>
<?php endif; ?>



<!-- /////////////////////////////// contact page //////////////////////////////// -->

<?php if(is_page('Contact Us')): ?>
<div class="container d-flex flex-column flex-md-row gap-5">
  <section id="section_5" class="tsB tsT_plugin  tsflex col_1 no_sizing small not_well ">
<div class="tsR">

<article class="tsI item_1 center nHero nImg nHds nDsc nHd nShd nLk map-plugin" data-aos="fade-up" data-aos-once="true"><div id="_the_map_wrapper" class="_the_map _is_plugin" slug="_the_map" args="post_id=573561">
                <div class="b2b-location wide">
	<iframe class="b2b-location-canvas" frameborder="0" style="border:0" allowfullscreen="" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBbV1cZmBGWZltKHJMZrKCqen-6fFtKyz4&amp;q=112+Professional+Drive%2C%2CWest+Monroe%2CLA%2C71291%2C">
	</iframe>
	<!-- <div class="b2b-location-nav">
		<img class="b2b-location-nav-up" src="img/b2b-maps-wide-nav-up.png"/><img class="b2b-location-nav-down" src="img/b2b-maps-wide-nav-down.png"/>	</div> -->
	<div class="b2b-location-items-container">
		<div class="b2b-location-items show-details">
			<ul style="display: block; top: 0px;">
					<li class="tsi-address show-details" data-iframe-src-query="&amp;q=112+Professional+Drive%2C%2CWest+Monroe%2CLA%2C71291%2C" data-address="112 Professional Drive, , West Monroe, LA, 71291" data-index="1" style="display: block;">
					<div class="b2b-location-basic-info">
						<div class="b2b-location-hover-box"></div>						<h3>Tech Savvy, LLC</h3>
            <p>

              112 Professional Drive<br>West Monroe, LA 71291
            </p>
												<a class="b2b-location-get-directions color_bodylinks" href="https://maps.google.com/maps?daddr=112 Professional Drive, West Monroe, LA 71291&amp;hl=en" target="_blank">GET DIRECTIONS</a>
												<a class="b2b-location-expand-icon" href="javascript:void(0);" title="See Details"></a>
					</div>
					<p class="b2b-location-detail-info" style="display: block;">
					<br><span class="b2b-location-h2">Call Us</span><br><a href="tel:(318) 884-0844"><b>Phone:</b> (318) 884-0844</a><br>                        													<br><span class="b2b-location-h2">Hours</span><br>
							<b>Mon: </b>8:00AM-5:00PM<br><b>Tue: </b>8:00AM-5:00PM<br><b>Wed: </b>8:00AM-5:00PM<br><b>Thu: </b>8:00AM-5:00PM<br><b>Fri: </b>8:00AM-5:00PM<br>					</p>				</li>
							</ul>
		</div>
	</div>
</div>

      </div>

      </article>

    </div>

  </section>

<div>
  <?php the_content(); ?>
</div>
</div>
<?php endif; ?>




<!-- ////////////////////////////////////// careers //////////////////////////////////////// -->
<?php if(is_page('Careers')): ?>
<main class="container px-10">

<?php the_content(); ?>

      <div class="container" style="margin-top: 100px;">
        <div class="cta-container">
          <h2 style="text-align: center">Send us Your Resume!</h2>
          <p style="text-align: center">Send us a message about yourself with your resume, and we will get back to you if we think you're a good fit!</p>
          <div class="d-flex flex-column flex-lg-row" style="gap: 20px">
            <button style="display: flex; justify-content: center; gap: 10px;" class="btn btn-primary btn-dark"
              type="button" onclick="window.location.href='mailto:support@techsavvy.llc';"><i
                class="bi bi-envelope-fill" style="color: black; font-size: 1.5em"></i>support@techsavvy.llc</button>

          </div>
        </div>
      </div>
</main>
<?php endif; ?>




<!-- ////////////////////////////////////////// All other pages //////////////////////////////////////// -->

<?php if(!is_page('Services') && !is_page('Contact Us') && !is_page('Careers')): ?>
<main class="container px-10">

<?php the_content(); ?>

      <div class="container" style="margin-top: 100px;">
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
<?php endif ?>



<?php
get_footer();
?>
