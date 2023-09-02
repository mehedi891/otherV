<?php get_header(); ?>


	<!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img1">
			    <div class="container">
			        <div class="breadcrumbs-inner">
			            <h1 class="page-title">
			                Blog
			            </h1>
			            <div class="description">
                    		<p>Discover more about Shopify theme customization.You are in the right place.</p>
                    	</div>                       
			        </div>
			    </div>
			</div>
			<!-- Breadcrumbs End -->

			<!-- Blog Section Start -->
			<div class="rs-inner-blog pt-120 pb-120 md-pt-80 md-pb-80">
			    <div class="container">
			        <div class="row">
			            <div class="col-lg-8 pr-35 md-pr-15 md-mb-50">
			                <div class="row">

							<?php 
                           
                           if(have_posts()) :
                           while(have_posts()) : the_post(); 
                        ?>


			                    <div class="col-lg-12 mb-50">
			                        <div class="blog-item">
			                            <div class="blog-img">
			                                <a href="<?php echo the_permalink() ?>"><?php echo the_post_thumbnail()?></a>
			                                <ul class="post-categories">
			                                    <li><a href="<?php echo the_permalink() ?>"><?php echo wp_get_post_terms( get_the_ID(), 'category')[0]->name; ?></a></li>
			                                </ul>
			                            </div>
			                            <div class="blog-content">
			                                <h3 class="blog-title"><a href="<?php echo the_permalink() ?>"><?php the_title() ?></a></h3>
			                                <div class="blog-meta">
			                                    <ul class="btm-cate">
			                                        <li>
			                                            <div class="blog-date">
			                                                <i class="fi fi-rr-calendar"></i><?php echo get_the_date(); ?>                                                        
			                                            </div>
			                                        </li>
			                                        <li>
			                                            <div class="author">
			                                                <i class="fi fi-rr-user"></i> Admin  
			                                            </div>
			                                        </li> 
			                                    </ul>
			                                </div>
			                                <div class="blog-desc">   
			                                    <?php the_excerpt() ?>          
			                                </div>
			                                <div class="blog-button">
			                                    <a class="blog-btn" href="<?php echo the_permalink() ?>">Continue Reading</a>
			                                </div>
			                            </div>
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
			            </div>
			            <div class="col-lg-4 col-md-12">
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