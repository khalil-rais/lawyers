<div class="page-outer-container">
  <div class="page-wrapper">
  
        <!-- Preloader -->
        <div class="preloader"></div>
        
        <!-- Hidden Bar -->
        <section class="hidden-bar right-align">
            
            <div class="hidden-bar-closer">
                <button class="btn"><i class="fa fa-close"></i></button>
            </div>
            <!-- Hidden Bar Wrapper -->
            <div class="hidden-bar-wrapper">
            
                <!-- .logo -->
                <div class="logo text-center">
                    <a href="index.html"><img src="<?php echo $front_page.'/sites/all/themes/theme_kmV2/'; ?>images/logo-3.png" alt=""></a>     
                </div><!-- /.logo -->
                
                <!-- .Side-menu -->
                <div class="side-menu">
                <!-- .navigation -->
                        <li><a href="index.html">Home</a></li>
						<li><a href="<?php echo $front_page; ?>">About Us</a></li>
						<li class="dropdown"><a href="<?php echo $front_page; ?>">Member Firms</a>
						  <ul>
								<li><a href="<?php echo $front_page; ?>">Europe</a>
									<ul class="submenu">
										<li><a href="innovires"><img class="menu_icon" alt="Bulgaria" src="/sites/default/files/Flag_of_Bulgaria.svg.png"> Innovires</a></li>
										<li><a href="christos_georgiades_associates"><img class="menu_icon" alt="Cyprus" src="/sites/default/files/Flag_of_Cyprus.svg.png"> Christos Georgiades & Associates LLC</a></li>
										<li><a href="bda_studio_legale"><img class="menu_icon" alt="Italy" src="/sites/default/files/Flag_of_Italy.svg.png"> BDA - Studio Legale</a></li>
										<li><a href="santiago_mediano_e_associados"><img class="menu_icon" alt="Portugal" src="/sites/default/files/Flag_of_Portugal.svg.png"> Santiago Mediano Abogados</a></li>
										<li><a href="sog_law_firm"><img class="menu_icon" alt="Serbia" src="/sites/default/files/Flag_of_Serbia.svg.png"> SOG Law Firm</a></li>
										<li><a href="guden_law_firm"><img class="menu_icon" alt="Turkey" src="/sites/default/files/Flag_of_Turkey.svg.png"> Guden Law Firm</a></li>
									</ul>
								</li>
								<li><a href="<?php echo $front_page; ?>">Middle East and Africa</a>
									<ul class="submenu">
										<li><a href="al_adwani_law_firm"><img class="menu_icon" alt="Kuwait" src="/sites/default/files/188px-Flag_of_Kuwait.svg.png"> Al-Adwani Law Firm</a></li>
										<li><a href="bakouchi_habachi"><img class="menu_icon" alt="Morocco" src="/sites/default/files/Flag_of_Morocco.svg.png"> Bakouchi & Habachi</a></li>
										<li><a href="ghada_m_darwish_law_firm"><img class="menu_icon" alt="Qatar" src="/sites/default/files/Flag_of_Qatar.svg.png"> Ghada M. Darwish Law Firm</a></li>
										<li><a href="alsindi_law_firm"><img class="menu_icon" alt="Saudi Arabia" src="/sites/default/files/188px-Flag_of_Saudi_Arabia.svg.png"> AlSindi Law Firm</a></li>
										<li><a href="kammoun_kallel"><img class="menu_icon" alt="Tunisia" src="/sites/default/files/Flag_of_Tunisia.svg.png"> Kammoun & Kallel</a></li>
										<li><a href="guden_law_firm"><img class="menu_icon" alt="Turkey" src="/sites/default/files/Flag_of_Turkey.svg.png"> Guden Law Firm</a></li>
										<li><a href="mahmood_hussain_advocates_legal_consultancy"><img class="menu_icon" alt="United Arab Emirates" src="/sites/default/files/FLAG_UAE.png"> Mahmood Hussain Advocates and Legal Consultancy</a></li>
									</ul>
								</li>
								<li><a href="<?php echo $front_page; ?>">Asia</a>
									<ul class="submenu">
										<li><a href="arun_nigam_associates"><img class="menu_icon" alt="Hong Kong" src="/sites/default/files/Flag_of_Hong_Kong.svg.png"> Arun Nigam Associates</a></li>
										<li><a href="corp_comm_legal"><img class="menu_icon" alt="India" src="/sites/default/files/188px-Flag_of_India.svg.png"> Corp Comm Legal</a></li>
										<li><a href="guden_law_firm"><img class="menu_icon" alt="Turkey" src="/sites/default/files/Flag_of_Turkey.svg.png"> Guden Law Firm</a></li>
									</ul>											
								</li>
							</ul>
						</li>
						<li class="dropdown"><a href="<?php echo $front_page; ?>">News</a>
							<!--<ul>
								<li><a href="blog-classic.html">Blog Classic Layout</a></li>
								<li><a href="blog-list.html">Blog List Layout</a></li>
								<li><a href="blog-grid.html">Blog Grid Layout</a></li>
								<li><a href="blog-single.html">Blog Single Post</a></li>
							</ul>-->
						</li>
						<li><a href="<?php echo $front_page.'contact_us'; ?>">Contact</a></li>
					</ul>
                </div><!-- /.Side-menu -->
            
                <div class="social-icons">
                </div>
            
            </div><!-- / Hidden Bar Wrapper -->
        </section><!-- / Hidden Bar -->
    
    
        <!--Page Title-->
        <section class="page-title" style="background-image:url(<?php echo $front_page.'/sites/all/themes/theme_kmV2/'; ?>images/background/team_members_3.jpg);">
            <div class="auto-container">
              <h1><?php print $title; ?></h1>
            </div>
        </section>
        
        <!--Page Info-->
        
        
        <!--Sidebar Page-->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                  
                    <!--Content Side-->      
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                      
                        <!--News Section-->
                        <section class="news-section classic-view blog-details no-padd-top padd-bott-70">
                                    
                            <!--Column-->
                            <article class="column featured-news-column">
                                <div class="inner-box clearfix">
                                    <div class="content">
                                        <h3><?php print $title; ?></h3>
                                        <div class="text">
                                          <?php print $content['body']['#object']->body['und'][0]['value']; ?>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </article>
                        </section>
                    
                    </div><!--End Content Side-->   
                    
                    <!--Sidebar-->      
                    
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <aside class="sidebar">
                              <!-- about author Form -->
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
                                 <?php print render($region['latest_post']); ?> 
                            </div>
                            
                            <!-- Recent Tweets -->
                            <!-- <div class="widget latest-tweets sidebar-widget">
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
                            <!-- <div class="widget archives sidebar-widget">
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
                                    <figure class="image"><a href="images/resource/blog-image-1.jpg" class="lightbox-image"><img src="<?php echo $front_page.'/sites/all/themes/theme_kmV2/'; ?>images/resource/gallery-thumb-1.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="images/resource/blog-image-2.jpg" class="lightbox-image"><img src="<?php echo $front_page.'/sites/all/themes/theme_kmV2/'; ?>images/resource/gallery-thumb-2.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="images/resource/blog-image-3.jpg" class="lightbox-image"><img src="<?php echo $front_page.'/sites/all/themes/theme_kmV2/'; ?>images/resource/gallery-thumb-3.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="images/resource/blog-image-4.jpg" class="lightbox-image"><img src="<?php echo $front_page.'/sites/all/themes/theme_kmV2/'; ?>images/resource/gallery-thumb-4.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="images/resource/blog-image-5.jpg" class="lightbox-image"><img src="<?php echo $front_page.'/sites/all/themes/theme_kmV2/'; ?>images/resource/gallery-thumb-5.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="images/resource/blog-image-6.jpg" class="lightbox-image"><img src="<?php echo $front_page.'/sites/all/themes/theme_kmV2/'; ?>images/resource/gallery-thumb-6.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="images/resource/blog-image-7.jpg" class="lightbox-image"><img src="<?php echo $front_page.'/sites/all/themes/theme_kmV2/'; ?>images/resource/gallery-thumb-7.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="images/resource/blog-image-8.jpg" class="lightbox-image"><img src="<?php echo $front_page.'/sites/all/themes/theme_kmV2/'; ?>images/resource/gallery-thumb-8.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="images/resource/blog-image-9.jpg" class="lightbox-image"><img src="<?php echo $front_page.'/sites/all/themes/theme_kmV2/'; ?>images/resource/gallery-thumb-9.jpg" alt=""></a></figure>
                                </div>
                            </div>-->
                            
                            <!-- Popular Tags -->
                            <!-- <div class="widget sidebar-widget popular-tags">
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
  </div><!--Page Wrapper End-->
</div>

