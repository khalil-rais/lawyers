<?php

/**

 * @file

 * Returns the HTML for a single Drupal page.

 *

 * Complete documentation for this file is available online.

 * @see https://drupal.org/node/1728148

 */



?>



<div class="page-outer-container">
  <div class="page-wrapper">
  
        <!-- Preloader -->
        <div class="preloader"></div>
        
        <!-- Main Header -->
        <?php 
             include(drupal_get_path('theme', 'theme_kmV2').'/templates/header.tpl.php');
        ?><!--End Main Header -->

        

       <!-- <?php print $breadcrumb; ?>-->

        <a id="main-content"></a>

        <?php print $messages; ?>

<section class="page-tabs">
	<div class="auto-container">
		<?php print render($tabs); ?>
	</div>
</section>        

        <?php print render($page['content']); ?>

       
    
      <!--Main Footer-->
        <?php 
             include(drupal_get_path('theme', 'theme_kmV2').'/templates/footer.tpl.php');
        ?>
    
    
  </div><!--Page Wrapper End-->
</div>





