<!DOCTYPE html>
<html lang="<?php language_attributes() ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
	<?php
  if ( ! function_exists( '_wp_render_title_tag' ) ) {
    function theme_slug_render_title() {
  ?>
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <?php
    }
    add_action( 'wp_head', 'theme_slug_render_title' );
  }
  ?>
   <?php wp_head(); ?>
</head>
<body class="<?php body_class() ?> home-coral-color">
		
		<div class="offwrap"></div>

		<!--Preloader start here-->
	   <div id="clenia-load">
			<div class="preload-wrap">
	  			<img src="<?php echo get_template_directory_uri()?>/assets/images/fav.png" alt="Clenia- Cleanning Services">
			</div>
     	</div>
		<!--Preloader area end here-->
			
		<!-- Main content Start -->
		<div class="main-content">

			<!--Full width header Start-->
			<div class="full-width-header">
				<!--Header Start-->
				<header id="rs-header" class="rs-header header-style3 header-home5-style header-transparent">
					<!-- Menu Start -->
					<div class="menu-area menu-sticky">
						<div class="container">
							<div class="row-table">
							    <div class="col-cell header-logo">                                  
							        <div class="logo-area">
							            <a href="<?php echo home_url()?>">
							                <img class="normal-logo" src="<?php echo get_theme_mod('logoNormal'); ?>" alt="logo">  
							                <img class="sticky-logo" src="<?php echo get_theme_mod('logoSticky'); ?>" alt="logo">
							            </a>
							        </div>
							    </div>
							    <div class="col-cell">
							        <div class="rs-menu-area">
							            <div class="main-menu">
							                <nav class="rs-menu hidden-md">
							                	<!-- <ul class="nav-menu">
							                		<li class="menu-item-has-children current-menu-item">
							                			<a href="index.html">Home</a>
							                			<ul class="sub-menu">
							                				<li class="menu-item-has-children current-menu-item">
							                					<a href="#">Multipages</a>
							                					<ul class="sub-menu">
							                						<li><a href="index.html">Home One</a></li>
							                						<li><a href="index2.html">Home Two</a></li>
							                						<li><a href="index3.html">Home Three</a></li>
							                						<li><a href="index4.html">Home Four</a></li>
							                						<li class="active"><a href="index5.html">Home Five</a></li>
							                					</ul> 
							                				</li>
							                				<li class="menu-item-has-children">
							                					<a href="#">Onepages</a>
							                					<ul class="sub-menu">
							                						<li><a href="onepage1.html">Onepage One</a></li>
							                						<li><a href="onepage2.html">Onepage Two</a></li>
							                						<li><a href="onepage3.html">Onepage Three</a></li>
							                						<li><a href="onepage4.html">Onepage Four</a></li>
							                						<li><a href="onepage5.html">Onepage Five</a></li>
							                					</ul>  
							                				</li>
							                			</ul>
							                		</li>
							                		<li class="menu-item-has-children">
							                			<a href="#">About</a>                                                        
							                			<ul class="sub-menu">  
							                				<li><a href="about.html">About</a></li>
							                				<li><a href="faqs.html">Faqs</a></li>
							                				<li><a href="request-an-estimate.html">Reguest An Estimate</a></li>
							                				<li><a href="expert-members.html">Expert Members</a></li>
							                				<li><a href="single-member.html">Single Member</a></li>
							                			</ul>
							                		</li>
							                		<li class="menu-item-has-children">
							                			<a href="#">Services</a>
							                			<ul class="sub-menu">
							                				<li><a href="services1.html">Services 01</a></li>
							                				<li><a href="services2.html">Services 02</a></li>
							                				<li class="last-item menu-item-has-children">
							                				    <a href="#">Services Details</a>
							                				    <ul class="sub-menu">
							                				        <li><a href="covid-19-cleaning.html">Covid-19 Cleaning</a></li>
							                				        <li><a href="kitchen-cleaning.html">Kitchen Cleaning</a> </li>
							                				        <li><a href="toilet-cleaning.html">Toilet Cleaning</a></li>
							                				        <li><a href="office-cleaning.html">Office Cleaning</a></li>
							                				        <li><a href="window-cleaning.html">Window Cleaning</a></li>
							                				        <li><a href="carpet-cleaning.html">Carpet Cleaning</a></li>
							                				    </ul>
							                				</li>     
							                			</ul>
							                		</li>
							                		<li class="menu-item-has-children">
							                			<a href="#">Projects</a>                                                        
							                			<ul class="sub-menu">  
							                				<li><a href="projects.html">Projects</a></li>
							                				<li><a href="projects-details.html">Projects Details</a></li>
							                			</ul>
							                		</li>
							                		<li class="menu-item-has-children">
							                			<a href="#">Blog</a>                                                        
							                			<ul class="sub-menu">  
							                				<li><a href="blog.html">Blog</a></li>
							                				<li><a href="single-post.html">Single Post</a></li>
							                			</ul>
							                		</li>
							                		<li>
							                			<a href="contact.html">Contact</a>
							                		</li>
							                	</ul> //.nav-menu -->
                                                <!-- </nav> --> 


                                                <?php wp_nav_menu(array(
                   'theme_location' => 'top_menu',
                   'container' => 'ul',
                   'menu_class'=> 'nav-menu',
                   'container_class' => 'nav-menu',
                   
                  
                )); ?>
							</nav>                
							            </div> <!-- //.main-menu -->
							        </div>
							    </div>
							    <div class="col-cell">
							        <div class="expand-btn-inner">
							        	<ul>
							        		<li class="sidebarmenu-search">
							        			<a class="hidden-xs rs-search" data-bs-toggle="modal" data-bs-target="#searchModal" href="#">
							        				<i class="fi fi-rr-search"></i>
							        			</a>
							        		</li>
							        		<li class="btn-quote"><a href="/contact-us">Get an Estimate</a></li>
							        		<li class="nav-link">
							        			<a id="nav-expander" class="nav-expander bar" href="#">
							        				<span class="dot-hum"></span>
							        				<span class="dot-hum"></span>
							        				<span class="dot-hum"></span>
							        			</a>
							        		</li>
							        	</ul>
							        </div>
							    </div>
							</div>
						</div>
					</div>
					<!-- Menu End -->

					<!-- Canvas Mobile Menu start -->
					<nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
						<div class="close-btn">
							<a id="nav-close2" class="nav-close">
								<div class="line">
									<span class="line1"></span>
									<span class="line2"></span>
								</div>
							</a>
						</div>
						<!-- <ul class="nav-menu">
							<li class="menu-item-has-children current-menu-item">
								<a href="index.html">Home</a>
								<ul class="sub-menu">
									<li class="menu-item-has-children current-menu-item">
										<a href="#">Multipages</a>
										<ul class="sub-menu">
											<li><a href="index.html">Home One</a></li>
											<li><a href="index2.html">Home Two</a></li>
											<li><a href="index3.html">Home Three</a></li>
											<li><a href="index4.html">Home Four</a></li>
											<li class="active"><a href="index5.html">Home Five</a></li>
										</ul> 
									</li>
									<li class="menu-item-has-children">
										<a href="#">Onepages</a>
										<ul class="sub-menu">
											<li><a href="onepage1.html">Onepage One</a></li>
											<li><a href="onepage2.html">Onepage Two</a></li>
											<li><a href="onepage3.html">Onepage Three</a></li>
											<li><a href="onepage4.html">Onepage Four</a></li>
											<li><a href="onepage5.html">Onepage Five</a></li>
										</ul>  
									</li>
								</ul>
							</li>
							<li class="menu-item-has-children">
								<a href="#">About</a>                                                        
								<ul class="sub-menu">  
									<li><a href="about.html">About</a></li>
									<li><a href="faqs.html">Faqs</a></li>
									<li><a href="request-an-estimate.html">Reguest An Estimate</a></li>
									<li><a href="expert-members.html">Expert Members</a></li>
									<li><a href="single-member.html">Single Member</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children">
								<a href="#">Services</a>
								<ul class="sub-menu">
									<li><a href="services1.html">Services 01</a></li>
									<li><a href="services2.html">Services 02</a></li>
									<li class="last-item menu-item-has-children">
									    <a href="#">Services Details</a>
									    <ul class="sub-menu">
									        <li><a href="covid-19-cleaning.html">Covid-19 Cleaning</a></li>
									        <li><a href="kitchen-cleaning.html">Kitchen Cleaning</a> </li>
									        <li><a href="toilet-cleaning.html">Toilet Cleaning</a></li>
									        <li><a href="office-cleaning.html">Office Cleaning</a></li>
									        <li><a href="window-cleaning.html">Window Cleaning</a></li>
									        <li><a href="carpet-cleaning.html">Carpet Cleaning</a></li>
									    </ul>
									</li>     
								</ul>
							</li>
							<li class="menu-item-has-children">
								<a href="#">Projects</a>                                                        
								<ul class="sub-menu">  
									<li><a href="projects.html">Projects</a></li>
									<li><a href="projects-details.html">Projects Details</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children">
								<a href="#">Blog</a>                                                        
								<ul class="sub-menu">  
									<li><a href="blog.html">Blog</a></li>
									<li><a href="single-post.html">Single Post</a></li>
								</ul>
							</li>
							<li>
								<a href="contact.html">Contact</a>
							</li>
						</ul> //.nav-menu -->

                        <?php wp_nav_menu(array(
                   'theme_location' => 'top_menu',
                   'container' => 'ul',
                   'menu_class'=> 'nav-menu',
                   'container_class' => 'nav-menu',
                   
                  
                )); ?>

						<div class="canvas-contact">
							  <div class="address-area">
								  <div class="address-list">
									  <div class="info-icon">
										  <i class="flaticon-location"></i>
									  </div>
									  <div class="info-content">
										  <h4 class="title">Address</h4>
										  <em>05 kandi BR. New York</em>
									  </div>
								  </div>
								  <div class="address-list">
									  <div class="info-icon">
										  <i class="flaticon-email"></i>
									  </div>
									  <div class="info-content">
										  <h4 class="title">Email</h4>
										  <em><a href="mailto:support@reactheme.com">support@reactheme.com</a></em>
									  </div>
								  </div>
								  <div class="address-list">
									  <div class="info-icon">
										  <i class="flaticon-call"></i>
									  </div>
									  <div class="info-content">
										  <h4 class="title">Phone</h4>
										  <em>+019988772</em>
									  </div>
								  </div>
							  </div>
						</div>
					</nav>
					<!-- Canvas Menu end -->                             
				</header>
				<!--Header End-->
			</div>
			<!--Full width header End-->