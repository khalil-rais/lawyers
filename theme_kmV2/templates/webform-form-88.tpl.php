<?php
$images_url = drupal_get_path('theme', 'theme_kmV2').'/images/'; 
global $base_url;

/**
 * @file
 * Customize the display of a complete webform.
 *
 * This file may be renamed "webform-form-[nid].tpl.php" to target a specific
 * webform on your site. Or you can leave it "webform-form.tpl.php" to affect
 * all webforms on your site.
 *
 * Available variables:
 * - $form: The complete form array.
 * - $nid: The node ID of the Webform.
 *
 * The $form array contains two main pieces:
 * - $form['submitted']: The main content of the user-created form.
 * - $form['details']: Internal information stored by Webform.
 *
 * If a preview is enabled, these keys will be available on the preview page:
 * - $form['preview_message']: The preview message renderable.
 * - $form['preview']: A renderable representing the entire submission preview.
 */
//print('<pre>'.print_r($form,1).'</pre>');
?>


        <!--Page Title-->
        <section class="page-title" style="background-image:url(<?php echo $base_url.'/'.$images_url.'background/banniere_contact_us-3363661_1920.png'; ?>);">
            <div class="auto-container">
              <h1>Contact Us</h1>
            </div>
        </section>
        
        <!--Page Info-->
        <section class="page-info">
            <div class="auto-container clearfix">


            </div>
        </section>
        
        <!--Contact Section-->
        <section class="contact-section">
        <div class="auto-container">
              <div class="row clearfix">
                  
                    <!--Form Column-->
                    <div class="form-column column col-lg-8 col-md-8 col-sm-12 col-xs-12">
                      <!--Styled Heading-->
                        <div class="styled-heading">
                            <h2>Write Your Message</h2>
                        </div>
                        
                        <div class="text margin-bott-40"><p>WLA welcomes all your inquiries, questions, remarks and suggestions. Please feel free to fill this form and we will get back to you shortly.</p></div>
                        
                        <div class="default-form contact-form">
                            <form method="post" action="sendemail.php" id="contact-form">
                                <div class="row clearfix">
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <?php print drupal_render($form['submitted']['first_name']) ?>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <?php print drupal_render($form['submitted']['last_name']) ?>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <?php print drupal_render($form['submitted']['phone']) ?>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <?php print drupal_render($form['submitted']['destination']) ?> 
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <?php print drupal_render($form['submitted']['message']) ?> 
                                    </div>
                                    <div class="form-group text-left col-md-12 col-sm-12 col-xs-12">
                                      <?php

                                          // Print out the main part of the form.
                                          // Feel free to break this up and move the pieces within the array.
                                          print drupal_render($form['submitted']);

                                          // Always print out the entire $form. This renders the remaining pieces of the
                                          // form that haven't yet been rendered above (buttons, hidden elements, etc).
                                          print drupal_render_children($form);
                                       ?>   
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <!--Info Column-->
                    <!--<div class="info-column column col-lg-4 col-md-4 col-sm-8 col-xs-12">                      
                        <div class="styled-heading">
                            <h2>Get Touch With Us</h2>
                        </div>
                        
                        <div class="contact-info">
                          <div class="info-block">
                              <h3><span class="icon fa fa-map-marker"></span> Address</h3>
                                <div class="text"><p>5648, VK 26th Brooke Line Steet, <br>Columbia, SC 29201, London, United Kingdom</p></div>
                            </div>
                            <div class="info-block">
                              <h3><span class="icon fa fa-phone"></span> Phone</h3>
                                <div class="text"><p>+123 859 625, +321 569 742 <br>Lawyerjustice@Steelthemes.com</p></div>
                            </div>
                            <div class="info-block">
                              <h3><span class="icon fa fa-clock-o"></span> Office Hours</h3>
                                <ul class="hours-list">
                                  <li class="clearfix"><span class="col">Monday</span><span class="col">09.00-17.00</span></li>
                                    <li class="clearfix"><span class="col">Tuesday</span><span class="col">09.00-17.00</span></li>
                                    <li class="clearfix"><span class="col">Wednesday</span><span class="col">09.00-17.00</span></li>
                                    <li class="clearfix"><span class="col">Thursday</span><span class="col">09.00-17.00</span></li>
                                    <li class="clearfix"><span class="col">Friday</span><span class="col">09.00-17.00</span></li>
                                    <li class="clearfix"><span class="col">Saturday</span><span class="col">10.00-13.00</span></li>
                                    <li class="clearfix"><span class="col">Sunday</span><span class="col theme_color">Close</span></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>-->
                    
                </div>
            </div>
        </section>

        <!--Two Column Fluid Section-->
        <section class="our-presence">

            <div class="auto-container">
                <div class="styled-heading centered">
                    <h2>Our Presence in the World</h2>
                </div>
               <div id="block-block-3"><iframe class="world_map" frameborder="0" height="100%" scrolling="no" src="/simple" width="100%"></iframe></div>
           </div>
        </section>		
        
        <!--Map Section-->
        <!--<section class="map-section">
            <div class="map-outer">
                <div class="map-canvas"
                    data-zoom="12"
                    data-lat="-37.817085"
                    data-lng="144.955631"       
                    data-type="roadmap"
                    data-hue="#ffc400"
                    data-title="Envato"
                    data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>"              
                    style="height: 500px;">
                </div>
                
            </div>
        </section>-->

        