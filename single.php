<?php get_header(); ?>


			<!-- Breadcrumbs Start -->
			<div class="rs-breadcrumbs img5">
			    <div class="container">
			        <div class="breadcrumbs-inner text-center">
			            <h1 class="page-title title-center">
			               <?php the_title() ?>
			            </h1>
			            <ul class="single-posts-meta">
			            	<li>                                
                                <span>
                                    <i class="fi fi-rr-calendar"></i> 
                                    <?php echo get_the_date() ?>                                    
                                </span>
                            <li>
                                <span>                                        
                                    <i class="fi fi-rr-user"></i> admin                                        
                                </span>
                            </li>
                            <li class="post-cate">
                            	<i class="fi fi-rr-book"></i>
                            	<a href="#"><?php echo wp_get_post_terms( get_the_ID(), 'category')[0]->name; ?></a>
                            </li>
                            <li class="post-comment">
                                <i class="fi-rr-comments"></i> 0 
                            </li>
			            </ul>                
			        </div>
			    </div>
			</div>
			<!-- Breadcrumbs End -->

			<!-- Blog Section Start -->
			<div class="rs-inner-blog pt-120 pb-120 md-pt-80 md-pb-80">
			    <div class="container">
			        <div class="row">
			            <div class="col-lg-8 pr-35 md-pr-15 md-mb-50">
			                <div class="blog-details">
			                	<div class="blog-full">
			                		<div class="bs-img">
			                			<?php the_post_thumbnail( ) ?>
			                		</div>
			                		<div class="blog-content-full">
			           <?php the_content() ?>
		                				<h3 class="title title2 pt-25 pb-22">Leave a Reply</h3>
		                				<p class="margin-0 pb-24">Your email address will not be published. Required fields are marked *</p>
		                				<div class="comment-note">
                                            <div id="form-messages"></div>
                                            <form id="contact-form" method="post" action="https://devsdesign.net/products/html/clenia/mailer.php">
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                            <input class="from-control" type="text" id="name" name="name" placeholder="Name*" required="">
                                                        </div> 
                                                        <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                            <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail*" required="">
                                                        </div>
                                                        <div class="col-lg-12 mb-30">
                                                            <textarea class="from-control" id="message" name="message" placeholder="Comment" required=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="btn-part">
                                                       <div class="form-group mb-0">
           	                                            	<p class="submit-btn submit-btn2 details">
           		                                                <span class="arrow-btn">
           		                                                	<input type="submit" value="Post Comment">
           		                                                </span>
           	                                            	</p>
           	                                            </div>
                                                    </div> 
                                                </fieldset>
                                            </form>
                                        </div>
			                		</div>
			                	</div>
			                </div>
			            </div>
			            <div class="col-lg-4 col-md-12 pl-20 md-pl-15">
			                <div class="widget-area">
			                    <div class="search-widget mb-50">
			                        <div class="search-wrap">
			                            <input type="search" placeholder="Searching..." name="s" class="search-input" value="">
			                            <button type="submit" value="Search"><i class="flaticon-search"></i></button>
			                        </div>
			                    </div>
			                    <div class="recent-posts mb-50">
			                        <div class="widget-title">
			                            <h3 class="title">Recent Posts</h3>
			                        </div>
									<?php 
                           $main_post = new WP_Query(array(
                            'post_type'=>'post',
                            'post_status'=>'publish',
                            'posts_per_page'=>'5',
                            'order'=>'ASC',
                            'paged'=>get_query_var('post'),
                           
                           ));
                           
                           if(have_posts()) :
                           while($main_post->have_posts()) : $main_post->the_post(); 
                        ?>
			                        <div class="recent-post-widget">
			                            <div class="post-img">
			                                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
			                            </div>
			                            <div class="post-desc">
			                                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
			                                <span class="date-post"> <i class="fi fi-rr-calendar"></i><?php echo get_the_date() ?></span>
			                            </div>
			                        </div>
									<?php 
                        endwhile;
                        else :
                          ?>
                          <div class="notFoundText">
                          Sorry, Nothing Found.
                          </div><?php
                        endif;
                        ?>
			                    </div>
			                    <div class="tags-cloud">
			                        <div class="widget-title pb-23">
			                            <h3 class="title">Tags</h3>
			                        </div>
			                        <div class="tagcloud">
			                        	<a href="#">Shopify</a>
			                        	<a href="#">E-commerce</a>
			                        	<a href="#">Theme CUstomization</a>
			                        	<a href="#">Store Setup</a>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div> 
			    </div>
			</div>
			<!-- Blog Section End --> 

<?php get_footer(); ?>