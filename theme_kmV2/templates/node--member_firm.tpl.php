<?php $images_url = drupal_get_path('theme', 'theme_kmV2').'/images/';  ?>


        <!--Page Title-->
        <section class="page-title" style="background-image:url(<?php echo $field_image_banniere;  ?>);">
            <div class="auto-container">
              <h1><?php print $title; ?></h1>
            </div>
        </section>
        
        <!--Page Info-->
        <section class="page-info">
<!--             <div class="auto-container clearfix">
              <div class="pull-left"><h2>Single Attorney</h2></div>
                <div class="pull-right">
                  <ul class="bread-crumb clearfix">
                      <li><a href="index.html">Home</a></li>
                        <li><a href="practice-areas.html">Attorneys</a></li>
                        <li>Single Attorney</li>
                    </ul>
                </div>
            </div> -->
        </section>
        
  
        <!--Sidebar Page-->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                  
                    <!--Content Side-->      
					<div class="col-lg-1 col-md-2 col-sm-12 col-xs-12 pull-right">
					</div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right">
                      <!--Attorney Single-->
                        <section class="attorney-single">
                        
                          <!--Basic Details-->
                            <div class="basic-details">
                              <div class="row clearfix">
                                  <div class="image-column col-md-5 col-sm-6 col-xs-12">
                                      <figure class="image-box"><img class="img-responsive" src="<?php echo $field_lawyer_photo; ?>" alt=""></figure>
                                    </div>
                                    <div class="info-column col-md-7 col-sm-6 col-xs-12">
                                      <div class="info-header clearfix">
                                          <div class="member-info pull-left">
                                              <h3><?php echo $field_responsible; ?></h3>
                                                <div class="designation"><?php echo $field_position; ?></div>
                                          </div>
                                            
                                            <div class="contact-info pull-right">
                                                <figure class="image-box"><img class="img-responsive" src="<?php echo $field_company_logo; ?>" alt=""></figure>
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="text">
                                            <ul class="contact-info">
                                                <?php if (isset($field_phone_number)): ?>
                                                    <li><span class="icon fa fa-phone"></span> <?php echo $field_phone_number; ?></li>
                                                <?php endif; ?>
                                                <?php if (isset($field_fax_number)): ?>
                                                    <li><span class="icon fa fa-fax"></span> <?php echo $field_fax_number; ?></li>
                                                <?php endif; ?>
                                                <?php if (isset($field_email)): ?>
                                                    <li><span class="icon fa fa-envelope-o"></span> <a href="#"><?php echo $field_email; ?></a></li>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                        
                                        <figure class="signature margin-bott-20"><img src="images/resource/signature-image-2.png" alt=""></figure>
                                       
                                        <div class="clearfix">
                                          <div class="pull-left padd-right-20"><a href="<?php echo $field_website; ?>" class="theme-btn btn-style-one">Visit Member Website</a></div>
                                            <div class="pull-left">
                                              <div class="social-links">
                                                <?php if (isset($field_facebook)): ?>
                                                     <a href="<?php echo $field_facebook; ?>"><span class="fa fa-facebook-f"></span></a>
                                                <?php endif; ?>
                                                <?php if (isset($field_twitter)): ?>
                                                     <a href="<?php echo $field_twitter; ?>"><span class="fa fa-twitter"></span></a>
                                                <?php endif; ?>
                                                <?php if (isset($field_google_plus)): ?>
                                                     <a href="<?php echo $field_google_plus; ?>"><span class="fa fa-google-plus"></span></a>
                                                <?php endif; ?>
                                                <?php if (isset($field_linkedin)): ?>
                                                     <a href="<?php echo $field_linkedin; ?>"><span class="fa fa-linkedin"></span></a>
                                                <?php endif; ?>                                                            
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div><!--Basic Details-->
                            
                            <!--Education-->
                            <div class="education-info">
                              <?php if (isset($field_body)): ?>
                                    <div class="styled-heading"><h2>Firm Overview</h2></div>
                                    <ul class="styled-list-three">
                                        <?php print $field_body; ?>
                                    </ul>
                               <?php endif; ?> 
                            </div>
                            
                            
                            <!--Bars-->
                            <div class="bars-info">
                                <?php if (isset($field_quick_facts)): ?>                                    
                                    <div class="styled-heading"><h2>Quick Facts</h2></div>
                                        <ul class="styled-list-three">
                                            <?php echo $field_quick_facts; ?>                                    
                                        </ul>
                                <?php endif; ?>         
                            </div>
                            
                            
                            <!--Court-->
                            <div class="court-info">
                                <?php if (isset($field_key_transactional_practice)): ?>    
                                    <div class="styled-heading"><h2>Key Practices</h2></div>
                                        <ul class="styled-list-three">
                                            <?php echo $field_key_transactional_practice; ?>
                                        </ul>
                                <?php endif; ?>        
                            </div>
                            
                            <!--Court-->
                            <div class="professional-info">
                                <?php if (isset($field_key_transactional_practice)): ?>     
                                    <div class="styled-heading"><h2>Address</h2></div>
                                        <ul class="styled-list-three">
                                            <?php echo $field_address ?>
                                        </ul>
                                <?php endif; ?>        
                            </div>

                        
                        </section>
                    </div><!--End Content Side-->   
                    
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 pull-left">
					</div>
					<!--Sidebar-->    
					<!--					
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 pull-left">
                      <aside class="sidebar">                          
                            <div class="widget sidebar-widget styled-nav">
                                <?php if (isset($field_other_members)): ?>      
                                    <div class="styled-heading"><h2>Other Attorneys</h2></div>
                                        <nav class="nav-outer">
                                          <ul> 
                                              <li><a href="#">Meet All Attorneys</a></li>
                                              <?php foreach ($field_other_members as $value) {
                                                echo '<li class="current"><a href="'.$value['url'].'">'.$value['title'].'</a></li>';
                                                } ?>
                                              
                                  
                                            </ul>
                                        </nav>
                                <?php endif; ?>        
                            </div>
                            
                        </aside>
                    </div>-->
					<!--End Sidebar-->      
                    
                </div>
            </div>
        </div>
        
