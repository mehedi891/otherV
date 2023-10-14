</div> 
		<!-- Main content End -->
        
        <!-- Footer Start -->
		<footer id="rs-footer" class="rs-footer footer-style1 footer-style5">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="row">
								<div class="col-lg-6 col-md-12 col-sm-12 pr-83 md-pr-15 md-mb-20">
									<div class="footer-logo mb-30 md-mb-20">
										<a href="index.html"><img src="<?php echo get_template_directory_uri()?>/assets/images/logo-coral.png" alt=""></a>
									</div>
									<div class="textwidget mb-33">
									Being a Shopify Developer and Shopify Designer I can do custom coding and shopify bug fixes in Shopify. I have worked on Shopify for 8 years and have client-based experience in 100+ Shopify Drop-shipping stores. 
									</div>
									<ul class="app-store">
		                                <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/footer/playstore.png" alt=""></a></li>
		                                <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/footer/appstore.png" alt=""></a></li>
		                            </ul>
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12 md-mb-10">
									<h3 class="footer-title">Contact Info</h3>
									<ul class="address-widget">
		                                <li>
		                                    <i class="fi fi-rr-map-marker-home"></i>
		                                    <div class="desc">147,7 No Gate,<br>
											Monipuri Para,Dhaka
											</div>
		                                </li>
		                                <li>
		                                    <i class="fi fi-rr-phone-call"></i>
		                                    <div class="desc">
		                                       <a href="tel:01521439111">01521439111</a>
		                                    </div>
		                                </li>
		                                <li>
		                                    <i class="fi fi-rr-envelope-plus"></i>
		                                    <div class="desc">
		                                        <a href="mailto:infoname@gmail.com">hmdmehedi91@gmail.com</a>
		                                    </div>
		                                </li>
	                                    <li>
	                                        <i class="fi fi-rr-time-add"></i>
	                                        <div class="desc">
	                                        	08:00am-6:00pm
	    									</div>
	                                    </li>
		                            </ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 md-mb-10 pl-90 md-pl-15">
							<h3 class="footer-title">Subscribe to Newsletter</h3>
							<p class="widget-desc white-color">Join our subscribers list to get the latest news and special offers</p>
							<p>
                                <?php echo do_shortcode('[fluentform id="2"]') ?>
                            </p>
                            <ul class="footer-social">  
                            	<li> 
                            		<a href="#"><i class="fa fa-facebook"></i></a>
                            	</li>
                            	<li> 
                            		<a href="#"><i class="fa fa-instagram"></i></a>
                            	</li>
                            	<li> 
                            		<a href="#"><i class="fa fa-twitter"></i></a> 
                            	</li>

                            	<li> 
                            		<a href="#"><i class="fa fa-linkedin"></i></a>
                            	</li>
                            </ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">                    
					<div class="row y-middle">
						<div class="col-lg-6 md-mb-10 text-lg-end text-center order-last">
						

							<?php wp_nav_menu(array(
                   'theme_location' => 'footer_menu',
                   'container' => 'ul',
                   'menu_class'=> 'copy-right-menu',
                   'container_class' => 'copy-right-menu',
                   
                  
                )); ?>
						</div>
						<div class="col-lg-6">
							<div class="copyright text-lg-start text-center ">
								<p>Copyright © <?php echo date("Y"); ?> Netcev. Designed By <a href="https://netcev.com/"> NetCev-Front-end Team</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer End -->

		<!-- start scrollUp  -->
		<div id="scrollUp" class="orange-color">
			<i class="fi fi-rr-arrow-small-up"></i>
		</div>
		<!-- End scrollUp  -->


		<!-- Search Modal Start -->
		<div class="modal fade search-modal" id="searchModal" tabindex="-1">
			<button type="button" class="close" data-bs-dismiss="modal">
				<i class="fi fi-rr-cross-small"></i>
			</button>
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="search-block clearfix">
						<form>
							<div class="form-group">
								<input class="form-control" placeholder="Searching..." type="text">
								<button type="submit" value="Search"><i class="fi fi-rr-search"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Search Modal End -->


<?php wp_footer(); ?>
</body>
</html>