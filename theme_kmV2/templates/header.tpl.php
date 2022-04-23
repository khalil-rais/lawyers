<?php $images_url = drupal_get_path('theme', 'theme_kmV2').'/images/';  ?>
<header class="main-header">
            <!-- Top Bar -->
            <div class="top-bar">
                <div class="auto-container clearfix">
                    <!-- Top Left -->
                    <div class="top-left">
                        <div class="text">Welcome to &nbsp;<a href="#">Worldwide Lawyers Association </a>&nbsp; </div>
                    </div>
                    
                    <!-- Top Right -->
                    <div class="top-right clearfix">
                        
                        <!--Search Box-->
                        <div class="search-box">
                            <?php print render($page['header_upper']); ?>
                        </div>
						<div class="social-links">
							<a href="#"><span class="fa fa-facebook-f"></span></a>
							<a href="#"><span class="fa fa-twitter"></span></a>
							<a href="https://www.linkedin.com/company/worldwide-lawyers-association-wla/"><span class="fa fa-linkedin"></span></a>
						</div>
                    </div>
                    
                </div>
            </div><!-- Top Bar End -->
            
            <!--Middle Bar-->
            <div class="middle-bar">
              <div class="auto-container">
                  <div class="clearfix">
                      <!--Logo Column-->
                    <?php if ($logo): ?>
                        <div class="logo-column">
                            <figure class="logo">
                                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/></a>
                            </figure>
                        </div>
                    <?php endif; ?>
                        <!--Info Column-->
                        <div class="info-column pull-left wla_hidden">
                          <p> - </p>
                            <h3>-</h3>
                        </div>
                        <!--Info Column-->
                        <div class="info-column pull-right wla_hidden">
                          <p> - </p>
                            <h3>-</h3>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Lower Section -->
            <div class="lower-section">
                <div class="auto-container">
                    
                    <!--Outer Box-->
                    <div class="outer-box clearfix">
                         
                        <!-- Hidden Nav Toggler -->
                        <div class="nav-toggler">
                        <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                        </div><!-- / Hidden Nav Toggler -->
                         
                        
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation">
                                    <li class="current"><a href="<?php print $front_page; ?>">Home</a></li>
                                    <li class="dropdown"><a href="<?php echo $front_page;?>#about_us">About Us</a>
									<!--<li><a href="<?php echo $front_page;?>#about_us">About Us</a>-->
										<ul>
											<li><a href="<?php print $front_page;?>who_we_are">Who We Are</a></li>
											<li><a href="<?php print $front_page;?>our_values">Our Values</a></li>
											<li><a href="<?php print $front_page;?>our_expertise">Our Expertise</a></li>
                                            <!--<li><a href="testimonials.html">Testimonials</a></li>
                                            <li class="dropdown"><a href="gallery.html">Gallery</a>
                                              <ul>
                                                  <li><a href="gallery.html">Gallery</a></li>
                                                    <li><a href="gallery-single.html">Gallery Single</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="error.html">404 Page</a></li>-->
                                        </ul>
                                    </li>
                                    <!--<li class="dropdown"><a href="<?php echo $front_page; ?>">Practice Areas</a>
                                      <ul>
                                            <li><a href="law-single.html">Consumer Law</a></li>
                                            <li><a href="law-single.html">Family Law</a></li>
                                            <li><a href="law-single.html">Criminal Law</a></li>
                                            <li><a href="law-single.html">Drug Control Law</a></li>
                                            <li><a href="law-single.html">Business Law</a></li>
                                            <li><a href="law-single.html">Insurance Law</a></li>
                                        </ul>
                                    </li>-->
                                    <li class="dropdown"><a href="<?php echo $front_page;?>members_list">Member Firms</a>
                                      <ul>
                                            <li><a href="<?php echo $front_page; ?>">Europe</a>
												<ul class="submenu">
													<li><a href="<?php echo $front_page;?>innovires"><img class="menu_icon" alt="Bulgaria" src="/sites/default/files/Flag_of_Bulgaria.svg.png"> Innovires</a></li>
													<li><a href="<?php echo $front_page;?>christos_georgiades_associates"><img class="menu_icon" alt="Cyprus" src="/sites/default/files/Flag_of_Cyprus.svg.png"> Christos Georgiades & Associates LLC</a></li>
													<li><a href="<?php echo $front_page;?>bda_studio_legale"><img class="menu_icon" alt="Italy" src="/sites/default/files/Flag_of_Italy.svg.png"> BDA - Studio Legale</a></li>
													<li><a href="<?php echo $front_page;?>santiago_mediano_e_associados"><img class="menu_icon" alt="Portugal" src="/sites/default/files/Flag_of_Portugal.svg.png"> Santiago Mediano Abogados</a></li>
													<li><a href="<?php echo $front_page;?>sog_law_firm"><img class="menu_icon" alt="Serbia" src="/sites/default/files/Flag_of_Serbia.svg.png"> SOG Law Firm</a></li>
													<li><a href="<?php echo $front_page;?>guden_law_firm"><img class="menu_icon" alt="Turkey" src="/sites/default/files/Flag_of_Turkey.svg.png"> Guden Law Firm</a></li>
												</ul>
											</li>
                                            <li><a href="<?php echo $front_page; ?>">Middle East and Africa</a>
												<ul class="submenu">
													<li><a href="<?php echo $front_page;?>al_adwani_law_firm"><img class="menu_icon" alt="Kuwait" src="/sites/default/files/188px-Flag_of_Kuwait.svg.png"> Al-Adwani Law Firm</a></li>
													<li><a href="<?php echo $front_page;?>bakouchi_habachi"><img class="menu_icon" alt="Morocco" src="/sites/default/files/Flag_of_Morocco.svg.png"> Bakouchi & Habachi</a></li>
													<li><a href="<?php echo $front_page;?>ghada_m_darwish_law_firm"><img class="menu_icon" alt="Qatar" src="/sites/default/files/Flag_of_Qatar.svg.png"> Ghada M. Darwish Law Firm</a></li>
													<li><a href="<?php echo $front_page;?>alsindi_law_firm"><img class="menu_icon" alt="Saudi Arabia" src="/sites/default/files/188px-Flag_of_Saudi_Arabia.svg.png"> AlSindi Law Firm</a></li>
													<li><a href="<?php echo $front_page;?>kammoun_kallel"><img class="menu_icon" alt="Tunisia" src="/sites/default/files/Flag_of_Tunisia.svg.png"> Kammoun & Kallel</a></li>
													<li><a href="<?php echo $front_page;?>guden_law_firm"><img class="menu_icon" alt="Turkey" src="/sites/default/files/Flag_of_Turkey.svg.png"> Guden Law Firm</a></li>
													<li><a href="<?php echo $front_page;?>mahmood_hussain_advocates_legal_consultancy"><img class="menu_icon" alt="United Arab Emirates" src="/sites/default/files/FLAG_UAE.png"> Mahmood Hussain Advocates and Legal Consultancy</a></li>
												</ul>
											</li>
                                            <li><a href="<?php echo $front_page; ?>">Asia</a>
												<ul class="submenu">
													<li><a href="<?php echo $front_page;?>arun_nigam_associates"><img class="menu_icon" alt="Hong Kong" src="/sites/default/files/Flag_of_Hong_Kong.svg.png"> Arun Nigam Associates</a></li>
													<li><a href="<?php echo $front_page;?>corp_comm_legal"><img class="menu_icon" alt="India" src="/sites/default/files/188px-Flag_of_India.svg.png"> Corp Comm Legal</a></li>
													<li><a href="<?php echo $front_page;?>guden_law_firm"><img class="menu_icon" alt="Turkey" src="/sites/default/files/Flag_of_Turkey.svg.png"> Guden Law Firm</a></li>
												</ul>											
											</li>
                                            <li><a href="<?php echo $front_page; ?>">Americas</a>
												<ul class="submenu">
													<li><a href="<?php echo $front_page;?>nankran_mourao_advogados_associados"><img class="menu_icon" alt="Brazil" src="/sites/default/files/188px-Flag_of_Brazil.svg.png"> Nankran & Mourão Advogados Associados</a></li>
												</ul>											
											</li>											
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="<?php echo $front_page.'all_news' ; ?>">News</a>
                                        <!--<ul>
                                            <li><a href="blog-classic.html">Blog Classic Layout</a></li>
                                            <li><a href="blog-list.html">Blog List Layout</a></li>
                                            <li><a href="blog-grid.html">Blog Grid Layout</a></li>
                                            <li><a href="blog-single.html">Blog Single Post</a></li>
                                        </ul>-->
                                    </li>
                                    <?php if ($is_member): ?>
										<li  class="dropdown"><a href="<?php echo $front_page.'node/add/attoney-blog'; ?>">Add Content</a>
											<ul class="submenu">
												<li><a href="<?php echo $front_page.'user'; ?>">My Profile</a></li>
												<li><a href="<?php echo $front_page.'user/logout'; ?>">Log-out</a></li>
											</ul>
										</li>
									<?php else: ?>
										<li><a href="<?php echo $front_page.'user'; ?>">Members Access</a></li>
									<?php endif; ?>									
									<li><a href="<?php echo $front_page.'contact_us'; ?>">Contact</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                        
                        <div id="member-interact" class="link-box"><a href="<?php echo $front_page.'members_list'; ?>" class="theme-btn">Members Full List</a></div>
                        
                    </div>
                </div>
            </div><!-- Lower Section End-->
            
</header>

<!-- Hidden Bar -->
<section class="hidden-bar right-align">
    
    <div class="hidden-bar-closer">
        <button class="btn"><i class="fa fa-close"></i></button>
    </div>
    <!-- Hidden Bar Wrapper -->
    <div class="hidden-bar-wrapper">
    
        <!-- .logo -->
        <div class="logo text-center">
            <a href="index.html"><img src="<?php print $logo; ?>" alt=""></a>           
        </div><!-- /.logo -->
        
        <!-- .Side-menu -->
        <div class="side-menu">
        <!-- .navigation -->
            <ul class="navigation">
                <li><a href="<?php print $front_page; ?>">Home</a></li>
               <li class="dropdown"><a href="<?php echo $front_page;?>#about_us">About Us</a>
			   <!--<li><a href="<?php echo $front_page;?>#about_us">About Us</a>-->
                    <ul class="submenu">
                        <li><a href="<?php print $front_page;?>who_we_are">Who We Are</a></li>
                        <li><a href="<?php print $front_page;?>our_values">Our Values</a></li>
						<li><a href="<?php print $front_page;?>our_expertise">Our Expertise</a></li>
                        <!--<li class="dropdown"><a href="gallery.html">Gallery</a>
                            <ul class="submenu">
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="gallery-single.html">Gallery Single</a></li>
                            </ul>
                        </li>-->						
                    </ul>
                </li>
                <!--<li class="dropdown"><a href="practice-areas.html">Practice Areas</a>-->
				<li><a href="practice-areas.html">Practice Areas</a>
                    <!--<ul class="submenu">
                        <li><a href="law-single.html">Cosumer Law</a></li>
                        <li><a href="law-single.html">Family Law</a></li>
                        <li><a href="law-single.html">Criminal Law</a></li>
                        <li><a href="law-single.html">Drug Control Law</a></li>
                        <li><a href="law-single.html">Business Law</a></li>
                        <li><a href="law-single.html">Insurance Law</a></li>
                    </ul>-->
                </li>
                <li class="dropdown"><a href="<?php echo $front_page;?>members_list">Member Firms</a>
                    <ul class="submenu">
						<li class="dropdown"><a href="#">Europe</a>
							<ul class="submenu">
								<li><a href="<?php echo $front_page;?>innovires"><img class="menu_icon" alt="Bulgaria" src="/sites/default/files/Flag_of_Bulgaria.svg.png"> Innovires</a></li>
								<li><a href="<?php echo $front_page;?>christos_georgiades_associates"><img class="menu_icon" alt="Cyprus" src="/sites/default/files/Flag_of_Cyprus.svg.png"> Christos Georgiades & Associates LLC</a></li>
								<li><a href="<?php echo $front_page;?>bda_studio_legale"><img class="menu_icon" alt="Italy" src="/sites/default/files/Flag_of_Italy.svg.png"> BDA - Studio Legale</a></li>
								<li><a href="<?php echo $front_page;?>santiago_mediano_e_associados"><img class="menu_icon" alt="Portugal" src="/sites/default/files/Flag_of_Portugal.svg.png"> Santiago Mediano Abogados</a></li>
								<li><a href="<?php echo $front_page;?>sog_law_firm"><img class="menu_icon" alt="Serbia" src="/sites/default/files/Flag_of_Serbia.svg.png"> SOG Law Firm</a></li>
								<li><a href="<?php echo $front_page;?>guden_law_firm"><img class="menu_icon" alt="Turkey" src="/sites/default/files/Flag_of_Turkey.svg.png"> Guden Law Firm</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="#">Middle East and Africa</a>
							<ul class="submenu">
								<li><a href="<?php echo $front_page;?>al_adwani_law_firm"><img class="menu_icon" alt="Kuwait" src="/sites/default/files/188px-Flag_of_Kuwait.svg.png"> Al-Adwani Law Firm</a></li>
								<li><a href="<?php echo $front_page;?>bakouchi_habachi"><img class="menu_icon" alt="Morocco" src="/sites/default/files/Flag_of_Morocco.svg.png"> Bakouchi & Habachi</a></li>
								<li><a href="<?php echo $front_page;?>ghada_m_darwish_law_firm"><img class="menu_icon" alt="Qatar" src="/sites/default/files/Flag_of_Qatar.svg.png"> Ghada M. Darwish Law Firm</a></li>
								<li><a href="<?php echo $front_page;?>alsindi_law_firm"><img class="menu_icon" alt="Saudi Arabia" src="/sites/default/files/188px-Flag_of_Saudi_Arabia.svg.png"> AlSindi Law Firm</a></li>
								<li><a href="<?php echo $front_page;?>kammoun_kallel"><img class="menu_icon" alt="Tunisia" src="/sites/default/files/Flag_of_Tunisia.svg.png"> Kammoun & Kallel</a></li>
								<li><a href="<?php echo $front_page;?>guden_law_firm"><img class="menu_icon" alt="Turkey" src="/sites/default/files/Flag_of_Turkey.svg.png"> Guden Law Firm</a></li>
								<li><a href="<?php echo $front_page;?>mahmood_hussain_advocates_legal_consultancy"><img class="menu_icon" alt="United Arab Emirates" src="/sites/default/files/FLAG_UAE.png"> Mahmood Hussain Advocates and Legal Consultancy</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="#">Americas</a>
							<ul class="submenu">
								<li><a href="<?php echo $front_page;?>nankran_mourao_advogados_associados"><img class="menu_icon" alt="Brazil" src="/sites/default/files/188px-Flag_of_Brazil.svg.png"> Nankran & Mourão Advogados Associados</a></li>
							</ul>											
						</li>																	
						<li class="dropdown"><a href="#">Asia</a>
							<ul class="submenu">
								<li><a href="<?php echo $front_page;?>arun_nigam_associates"><img class="menu_icon" alt="Hong Kong" src="/sites/default/files/Flag_of_Hong_Kong.svg.png"> Arun Nigam Associates</a></li>
								<li><a href="<?php echo $front_page;?>corp_comm_legal"><img class="menu_icon" alt="India" src="/sites/default/files/188px-Flag_of_India.svg.png"> Corp Comm Legal</a></li>
								<li><a href="<?php echo $front_page;?>guden_law_firm"><img class="menu_icon" alt="Turkey" src="/sites/default/files/Flag_of_Turkey.svg.png"> Guden Law Firm</a></li>
							</ul>											
						</li>
					</ul>
				</li>
				<!--<li class="dropdown"><a href="#">News</a>-->
				<li><a href="<?php echo $front_page;?>/node/97">News</a>
					<!--<ul>
						<li><a href="blog-classic.html">Blog Classic Layout</a></li>
						<li><a href="blog-list.html">Blog List Layout</a></li>
						<li><a href="blog-grid.html">Blog Grid Layout</a></li>
						<li><a href="blog-single.html">Blog Single Post</a></li>
					</ul>-->
				</li>

				<?php if ($is_member): ?>
					<li><a href="<?php echo $front_page.'node/add/attoney-blog'; ?>">Add Content</a></li>
				<?php else: ?>
					<li><a href="<?php echo $front_page.'user'; ?>">Members Access</a></li>
				<?php endif; ?>									
				<li><a href="<?php echo $front_page.'contact_us'; ?>">Contact</a></li>				
                <!--<li><a href="faq.html">FAQ</a></li>
                <li class="dropdown"><a href="blog-classic.html">News</a>
                      <ul class="submenu">
                        <li><a href="blog-classic.html">Blog Classic Layout</a></li>
                        <li><a href="blog-list.html">Blog List Layout</a></li>
                        <li><a href="blog-grid.html">Blog Grid Layout</a></li>
                        <li><a href="blog-single.html">Blog Single Post</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="shop.html">Shop</a>
                    <ul class="submenu">
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="shop-single.html">Shop Single</a></li>
                        <li><a href="shopping-cart.html">Shopping Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="register-login.html">Register / Login</a></li>
                    </ul>
                </li>
                <li><a href="contact-us.html">Contact</a></li>-->
            </ul>
        </div><!-- /.Side-menu -->
    
        <div class="social-icons">
            <ul>			
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <!--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
                <li><a href="https://www.linkedin.com/company/worldwide-lawyers-association-wla/"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
    
    </div><!-- / Hidden Bar Wrapper -->
</section><!-- / Hidden Bar -->

<?php if (isset($page['slideshow'])): ?> 
    <section id="member-form-header" class="member-search">
        <div class="container-member-form-header">
            <div class="auto-container">
                   <?php print render($page['slideshow']); ?> 
            </div>         
        </div>   
    </section> 
<?php endif; ?>   