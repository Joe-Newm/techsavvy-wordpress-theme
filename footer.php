 <div class="bg-dark" style="margin-top: 100px;"> 
    <div class="container">
      <footer class="py-5 text-light"> 
       <div class="row gap-5">
         <div class="col-md-4 mb-3 text-break">

<?php
	if (function_exists('the_custom_logo')) {
	        the_custom_logo();
	} 
           ?>
           <p></p>
           <p>
At Techsavvy, we’re passionate about empowering businesses through innovative IT solutions. Located in West Monroe, Louisiana, we bring 30 years of experience to local IT services to the table. Our mission is to provide exceptional IT services that help businesses thrive in today’s digital landscape.
           </p>
         </div>
         <div class="col-6 col-md-3 mb-3">
           
            <h5>Services</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2" style="text-decoration: underline;"><a href="<?php echo get_permalink(107);?>" class="nav-link p-0 text-light">IT Services</a></li>
              <li class="nav-item mb-2"style="text-decoration: underline;"><a href="<?php echo get_permalink(109);?>" class="nav-link p-0 text-light">Cyber Security</a></li>
              <li class="nav-item mb-2"style="text-decoration: underline;"><a href="<?php echo get_permalink(111);?>" class="nav-link p-0 text-light">Cloud & Backup</a></li>
              <li class="nav-item mb-2"style="text-decoration: underline;"><a href="<?php echo get_permalink(113);?>" class="nav-link p-0 text-light">Hardware Repair / Installation</a></li>
              <li class="nav-item mb-2"style="text-decoration: underline;"><a href="<?php echo get_permalink(115);?>" class="nav-link p-0 text-light">Help Desk</a></li>
            </ul>
          </div>

       

          <div class="col-md-4  mb-3">
            <div>
              <h5>Contact Us</h5>
              <div class="d-flex flex-column w-100 gap-2">
                <button style="display: flex;width: 20em; justify-content: center; gap: 10px;"
                  class="btn btn-primary btn-dark" type="button"
                  onclick="window.location.href='mailto:support@techsavvy.llc';"><i class="bi bi-envelope-fill"
                    style="color: black; font-size: 1.5em"></i>support@techsavvy.llc</button>
                <button style="display: flex; width: 20em; justify-content: center; gap: 10px;"
                  class="btn btn-primary btn-dark" type="button" onclick="window.location.href='tel:+13188840844';">
                  <i class="bi bi-telephone-fill" style="color: black; font-size: 1.5em"></i>(318) 884-0844
                </button>
                <button style="display: flex; width: 20em; justify-content: center; gap: 10px;"
                  class="btn btn-primary btn-dark" type="button"
                  onclick="window.open('https://www.linkedin.com/company/wmtech-savvy-llc/', '_blank');">
                  <i class="bi bi-linkedin" style="color: black; font-size: 1.5em"></i>Linkedin
                </button>
                <button style="display: flex; width: 20em; justify-content: center; gap: 10px;"
                  class="btn btn-primary btn-dark" type="button"
                  onclick="window.open('https://www.facebook.com/becomesavvy/', '_blank');">
                  <i class="bi bi-facebook" style="color: black; font-size: 1.5em"></i>Facebook
                </button>
              </div>
            </div>
          </div>
        </div>

       <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
         <div>
         <p style="margin-bottom: 0;">Copyright © 2024 Tech Savvy, LLC, all rights reserved.</p>
        <p>112 Professional Drive,  West Monroe, LA 71291   (318) 884-0844</p>
           </div>
        </div>
      </footer>
    </div>
 </div>
<?php
wp_footer();
 ?>

 </body>
 </html>
