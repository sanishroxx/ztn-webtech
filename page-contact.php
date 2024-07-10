<?php
include 'header.php';

?>

	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(images/background/page-title-bg.png);">
		<div class="auto-container">
			<div class="title-outer d-sm-flex align-items-center justify-content-sm-between">
				<h1 class="title">Contact Us</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Contact</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!--Contact Details Start-->
	<section class="contact-details">
		<div class="container ">
			<div class="row">
				<div class="col-xl-7 col-lg-6">
					<div class="sec-title">
						<span class="sub-title">Send us email</span>
						<h2>Feel free to write</h2>
					</div>
					<!-- Contact Form -->
					<form id="contact_form" name="contact_form" class="" action="https://kodesolution.com/html/2023/congrow-html/includes/sendmail.php" method="post">
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="form_name" class="form-control" type="text" placeholder="Enter Name">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<textarea name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
						</div>
						<div class="mb-5">
							<input name="form_botcheck" class="form-control" type="hidden" value="" />
							<button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
							<button type="reset" class="theme-btn btn-style-one bg-theme-color5"><span class="btn-title">Reset</span></button>
						</div>
					</form>
					<!-- Contact Form Validation-->
				</div>
				<div class="col-xl-5 col-lg-6">
					<div class="contact-details__right">
						<div class="sec-title">
							<span class="sub-title">Need any help?</span>
							<h2>Get in touch with us</h2>
							<div class="text">Discover a realm of opportunities through our innovative technology solutions, guided by expert professionals and a commitment to on-time, uncompromised excellence.</div>
						</div>
						<ul class="list-unstyled contact-details__info">
							<li>
								<div class="icon">
									<span class="lnr-icon-phone-plus"></span>
								</div>
								<div class="text">
									<h6>Have any question?</h6>
									<a href="tel:980089850"><span>Free</span> +92 (020)-9850</a>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="lnr-icon-envelope1"></span>
								</div>
								<div class="text">
									<h6>Write email</h6>
									<a href="mailto:needhelp@company.com">webtechconsultancy@gmail.com</a>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="lnr-icon-location"></span>
								</div>
								<div class="text">
									<h6>Visit anytime</h6>
									<span>Boaring Road,Patna</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Contact Details End-->

	<!-- Map Section-->
	<section class="map-section">
		<iframe  class="map w-100"  src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
	</section>
	<!--End Map Section-->

  <!-- contact info section -->
  <section class="contact-info-section pb-0 pt-0">
      <div class="auto-container">
          <div class="contact-info">
              <div class="row">
                  <!-- contact-block -->
                  <div class="contact-info-block-two col-lg-4 col-md-6 col-sm-12">
                      <div class="inner-box">
                          <div class="icon-box"><i class="icon fa fa-location-dot"></i></div>
                          <h6 class="title">Location</h6>
                          <div class="text">45/A, Gouardai, Los Angel, USA</div>
                      </div>
                  </div>
  
                  <!-- contact-block -->
                  <div class="contact-info-block-two col-lg-4 col-md-6 col-sm-12">
                      <div class="inner-box">
                          <div class="icon-box"><i class="icon fa fa-phone"></i></div>
                          <h6 class="title">Phone</h6>
                          <div class="text"><a href="tel:+92880098670">(629) 555-0129</a></div>
                      </div>
                  </div>
  
                  <!-- contact-block -->
                  <div class="contact-info-block-two col-lg-4 col-md-6 col-sm-12">
                      <div class="inner-box">
                          <div class="icon-box"><i class="icon fa fa-paper-plane"></i></div>
                          <h6 class="title">E-mail</h6>
                          <div class="text"><a href="mailto:admin@email.com">admin@email.com</a></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- End contact info section -->




  <?php
include 'footer.php';

?>