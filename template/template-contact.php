<?php
//Template Name: Contact

?>


<?php get_header(); ?>

<!-- Breadcrumbs Start -->
<?php get_template_part('template/template-parts/breadcrumbs','page');?>
			<!-- Breadcrumbs End -->

			<!-- Contact Section End -->
			<div class="rs-contact contact-style3 pt-120 pb-120 md-pt-80 md-pb-80">
			    <div class="container custom2">
			        <div class="row">
			            <div class="col-lg-5 md-mb-50">
			              	<div class="rs-contact-box">
				              	<div class="sec-title2 mb-40">
	  								<div class="brush-content mb-20">
	  									<img src="<?php echo get_template_directory_uri()?>/assets/images/brush.png" alt="">
	  									<span class="sub-text">Contact Us</span>
	  								</div>
	  								<h2 class="title small pb-15">
	  									Get In Touch
	  								</h2>
	  								<div class="desc">
										On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.
									</div>
	  							</div>
	  							<div class="address-item mb-30">
	  								<div class="address-icon">
	  									<img src="<?php echo get_template_directory_uri()?>/assets/images/contact/style1/1.png" alt="">
	  								</div>
	  								<div class="address-content">
	  									<span class="label">Visit Us:</span>
	  									<span class="des">Dhaka,Bangladesh</span>
	  								</div>
	  							</div>
	  							<div class="address-item mb-30">
	  								<div class="address-icon">
	  									<img src="<?php echo get_template_directory_uri()?>/assets/images/contact/style1/2.png" alt="">
	  								</div>
	  								<div class="address-content">
	  									<span class="label">Mail Us:</span>
	  									<span class="des">147,7 No Gate,Monipuri Para</span>
	  								</div>
	  							</div>
	  							<div class="address-item">
	  								<div class="address-icon">
	  									<img src="<?php echo get_template_directory_uri()?>/assets/images/contact/style1/3.png" alt="">
	  								</div>
	  								<div class="address-content">
	  									<span class="label">Phone:</span>
	  									<span class="des">01521439111</span>
	  								</div>
	  							</div>
			              	</div>
			            </div>
			            <div class="col-lg-7 pl-50 md-pl-15">
			                <div class="contact-drop-line">
			                	<div class="heading-inner-title mb-30">
			                		<h2 class="title">Drop Us a Line</h2>
			                	</div>
			                    <div id="form-messages"></div>
			                    <!-- <form id="contact-form" method="post" action="https://devsdesign.net/products/html/clenia/mailer.php">
			                        <fieldset>
			                            <div class="row">
			                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
			                                    <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
			                                </div> 
			                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
			                                    <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
			                                </div>   
			                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
			                                    <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
			                                </div>   
			                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
			                                    <select name="consultation" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                									<option value="Your Service">Your Service</option>
                									<option value="House Cleaning">House Cleaning</option>
                									<option value="Kitchen Cleaning">Kitchen Cleaning</option>
                									<option value="Toilet Cleaning">Toilet Cleaning</option>
                									<option value="Office Cleaning">Office Cleaning</option>
                									<option value="Window Cleaning">Window Cleaning</option>
                									<option value="Carpet Cleaning">Carpet Cleaning</option>
                								</select>
			                                </div>
			                                <div class="col-lg-12 mb-30">
			                                    <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
			                                </div>
			                            </div>
			                            <div class="btn-part">                                            
			                               	<div class="form-group mb-0">
                                                <p class="submit-btn submit-btn3">
                                                	<input type="submit" value="Submit Now">
                                                </p>
                                            </div>
			                            </div> 
			                        </fieldset>
			                    </form>  -->

								<?php echo do_shortcode('[fluentform id="1"]')?>
			                </div>
			            </div>
			        </div>
			        <div class="map-canvas pt-120 md-pt-80">
			            <iframe src="https://maps.google.com/maps?q=Devsdesign&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
			        </div> 
			    </div> 
			</div>
			<!-- Contact Section End -->

<?php get_footer(); ?>