    <?php 
        include(drupal_get_path('theme', 'theme_kmV2').'/templates/header.tpl.php');
    ?>

            <!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo $front_page.$images_url.'background/team_members_3.jpg'; ?>);"> 
        <div class="auto-container">
          <h1><?php print $title; ?></h1>
        </div>
    </section>
    <!--Sidebar Page-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Content Side-->      
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    
                    <!--News Section-->
                    <section class="news-section list-view no-padd-top padd-bott-70">
                                
                        <?php print render($page['listblocattoney']); ?>
                        
                        <!-- Styled Pagination -->
                       <!-- <div class="styled-pagination text-center">
                            <ul>
                                <li class="prev"><a href="#"><span class="fa fa-angle-left"></span></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#"><span class="fa fa-angle-right"></span></a></li>
                            </ul>
                        </div>-->
                    </section>
                
                </div><!--End Content Side-->   
                
                <!--Sidebar-->      
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <aside class="sidebar">
                        
                        <!-- Search Form -->
                        <div class="widget search-box sidebar-widget">
                            
                            <form method="post" action="index.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search Keyword">
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                            
                        </div>
                        
                        <!-- Popular Categories -->
						<!-- Popular Categories -->
						<div class="widget popular-categories sidebar-widget">
							<div class="styled-heading"><h2>Categories</h2></div>
							
							<ul class="list">
							   <?php foreach ($categories as $category) : ?>
									<?php echo $category; ?>
								<?php endforeach; ?>
							</ul>
							
						</div>
							                        
                        <!-- Recent Posts -->
						<div class="widget recent-posts sidebar-widget">
							<div class="styled-heading"><h2>Latest Posts</h2></div>
							 <?php print render($page['latest_post']); ?>
						</div>
						
						<!-- Recent Tweets -->
                        <!--<div class="widget latest-tweets sidebar-widget">
                            <div class="styled-heading"><h2>Latest Tweets</h2></div>
                            <div class="tweets-carousel single-item-carousel">
                                <div class="slide-item">
                                    <div class="isolate-link"><a href="#">@SteelThemes,</a></div>
                                    <div class="tweet-content">
                                        <p>Lawyer justice is best template now. Checkout this great update on <a href="#">http://t.co/AGPtTN8ccX</a></p>
                                        <div class="time">2Hrs ago</div>
                                    </div>
                                </div>
                                <div class="slide-item">
                                    <div class="isolate-link"><a href="#">@SteelThemes,</a></div>
                                    <div class="tweet-content">
                                        <p>Lawyer justice is best template now. Checkout this great update on <a href="#">http://t.co/AGPtTN8ccX</a></p>
                                        <div class="time">2Hrs ago</div>
                                    </div>
                                </div>
                                <div class="slide-item">
                                    <div class="isolate-link"><a href="#">@SteelThemes,</a></div>
                                    <div class="tweet-content">
                                        <p>Lawyer justice is best template now. Checkout this great update on <a href="#">http://t.co/AGPtTN8ccX</a></p>
                                        <div class="time">2Hrs ago</div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-bottom"><a href="#"><span class="fa fa-twitter"></span> Follow Us</a></div>
                        </div>-->
                        
                        <!-- Archives -->
                        <!--<div class="widget archives sidebar-widget">
                            <div class="styled-heading"><h2>Archives</h2></div>
                            <ul class="list">
                                <li><a class="clearfix" href="#"><span class="txt pull-left">August 2014 </span> <span class="count pull-right">(05)</span></a></li>
                                <li><a class="clearfix" href="#"><span class="txt pull-left">October 2014</span> <span class="count pull-right">(08)</span></a></li>
                                <li><a class="clearfix" href="#"><span class="txt pull-left">June 2015</span> <span class="count pull-right">(12)</span></a></li>
                                <li><a class="clearfix" href="#"><span class="txt pull-left">November 2015</span> <span class="count pull-right">(33)</span></a></li>
                                <li><a class="clearfix" href="#"><span class="txt pull-left">January 2016 </span> <span class="count pull-right">(07)</span></a></li>
                                <li><a class="clearfix" href="#"><span class="txt pull-left">February 2016 </span> <span class="count pull-right">(07)</span></a></li>
                            </ul>                            
                        </div>-->
                        
                        <!-- Recent From Gallery -->
                        <!-- <div class="widget sidebar-widget instagram-gallery">
                            <div class="styled-heading"><h2>Instagram Feeds</h2></div>                           
                            <div class="images-outer clearfix">
                                <figure class="image"><a href="images/resource/blog-image-1.jpg" class="lightbox-image"><img src="images/resource/gallery-thumb-1.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-2.jpg" class="lightbox-image"><img src="images/resource/gallery-thumb-2.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-3.jpg" class="lightbox-image"><img src="images/resource/gallery-thumb-3.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-4.jpg" class="lightbox-image"><img src="images/resource/gallery-thumb-4.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-5.jpg" class="lightbox-image"><img src="images/resource/gallery-thumb-5.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-6.jpg" class="lightbox-image"><img src="images/resource/gallery-thumb-6.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-7.jpg" class="lightbox-image"><img src="images/resource/gallery-thumb-7.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-8.jpg" class="lightbox-image"><img src="images/resource/gallery-thumb-8.jpg" alt=""></a></figure>
                                <figure class="image"><a href="images/resource/blog-image-9.jpg" class="lightbox-image"><img src="images/resource/gallery-thumb-9.jpg" alt=""></a></figure>
                            </div>                            
                        </div>-->
                        
                        <!-- Popular Tags -->
                        <!--<div class="widget sidebar-widget popular-tags">
                            <div class="styled-heading"><h2>Popular Tags</h2></div>                            
                            <a href="#">Attorney</a>
                            <a href="#">Advice</a>
                            <a href="#">Laws</a>
                            <a href="#">Crimes</a>
                            <a href="#">History</a>
                            <a href="#">Faq</a>
                            <a href="#">Clients</a>
                            <a href="#">Need Forms</a>                            
                        </div>-->                        
                    </aside>
                </div><!--End Sidebar-->
            </div>
        </div>
    </div>

      <!--Main Footer-->
    <?php 
        include(drupal_get_path('theme', 'theme_kmV2').'/templates/footer.tpl.php');
    ?>    