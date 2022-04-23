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




        <!--Consultation Section-->
        <section class="consult-section" style="background-image:url(<?php echo $images_url.'background/consult-form-bg.jpg'; ?>);">
            <div class="auto-container">
            
                <!--Styled Heading-->
                <div class="styled-heading">
                    <h2>Get in Touch with WLA Members</h2>
                </div>
                
                <figure class="man-image hidden-xs"><img src="<?php echo $images_url.'resource/man-image.png';?>" alt=""></figure>
                
                <div class="default-form consultation-form">
                  <form method="post" action="index.html">
                        <div class="row clearfix">
                              <div class="form-group col-md-6 col-sm-12 col-xs-12">
                              <?php print drupal_render($form['submitted']['first_name']) ?>
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                              <?php print drupal_render($form['submitted']['last_name']) ?>
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                              <?php print drupal_render($form['submitted']['phone']) ?>
                            </div>
                            <div class="form-group col-md-6 col-sm-12 col-xs-12">
                              <?php print drupal_render($form['submitted']['destination']) ?> 
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                              <?php print drupal_render($form['submitted']['message']) ?> 
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
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
        </section>
        


        