<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */


/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function theme_fm_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  theme_fm_preprocess_html($variables, $hook);
  theme_fm_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */

/*function theme_kmV2_preprocess_html(&$variables, $hook) {
	if (isset($variables["page"]["content"]["system_main"]["nodes"])){
		$nid = array_keys($variables["page"]["content"]["system_main"]["nodes"]);
		if ($nid[0]=='96'){
			//Categories serction//
			$result = _get_categories ();
			foreach ($result as $record) {
				$variables['categories'][] = '<li><a class="clearfix" href="taxonomy/term/'.$record->tid.'"><span class="txt pull-left">'.$record->name.'</span> <span class="count pull-right">('.$record->count.')</span></a></li>';
			}		
			//ob_start();
			//var_dump($variables['categories']);
			//$dumpy = ob_get_clean();	
			//watchdog('wlawa', 'Categ id is:'.$dumpy);			
		}
	}
}
*/

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function// */

function theme_kmV2_preprocess_page(&$variables) {
	  $result = _get_categories ();
      foreach ($result as $record) {
        $variables['categories'][] = '<li><a class="clearfix" href="/node/107/'.$record->tid.'"><span class="txt pull-left">'.$record->name.'</span> <span class="count pull-right">('.$record->count.')</span></a></li>';
      }
	  global $user;
	  if (in_array('WLA Member', $user->roles) or in_array('Moderator',$user->roles) ){
		  $variables['is_member'] = 1;
	  }
	  else{
		  $variables['is_member'] = 0;
	  }
	  

  			//ob_start();
			//var_dump($variables);
			//$dumpy = ob_get_clean();	
			//watchdog('wlawa', 'Variables are:'.$dumpy);	  
	  
}

function theme_kmV2_preprocess_node(&$variables, $hook) {
  $node = $variables['node'];
  $variables ['logo'] = theme_get_setting('logo');
  $variables ['front_page'] =  $GLOBALS['base_url'];
  $variables['tabs'] = menu_primary_local_tasks();

	  $result = _get_categories ();
      foreach ($result as $record) {
        $variables['categories'][] = '<li><a class="clearfix" href="/taxonomy/term/'.$record->tid.'"><span class="txt pull-left">'.$record->name.'</span> <span class="count pull-right">('.$record->count.')</span></a></li>';
      }
	  
  if ($variables['node']->type == 'member_firm'){
    $field_body = field_get_items('node', $node, 'body');
    $variables ['field_body'] = $field_body[0]['value']; 
    $field_quick_facts = field_get_items('node', $node, 'field_quick_facts');
    $variables ['field_quick_facts'] = $field_quick_facts[0]['value'];       
    $field_key_transactional_practice = field_get_items('node', $node, 'field_key_transactional_practice');
    $variables ['field_key_transactional_practice'] = $field_key_transactional_practice[0]['value'];
    $field_address = field_get_items('node', $node, 'field_address');
    $variables ['field_address'] = $field_address[0]['value'];
    $field_responsible = field_get_items('node', $node, 'field_responsible');
    $variables ['field_responsible'] = $field_responsible[0]['value'];
    $field_email = field_get_items('node', $node, 'field_email');
    $variables ['field_email'] = $field_email[0]['value'];
    $field_fax_number = field_get_items('node', $node, 'field_fax_number');
    $variables ['field_fax_number'] = $field_fax_number[0]['value'];
    $field_phone_number = field_get_items('node', $node, 'field_phone_number');
    $variables ['field_phone_number'] = $field_phone_number[0]['value'];          
    $field_website = field_get_items('node', $node, 'field_website');
    $variables ['field_website'] = $field_website[0]['value'];  
    $field_facebook = field_get_items('node', $node, 'field_facebook');
    $variables ['field_facebook'] = $field_facebook[0]['url']; 
    $field_twitter = field_get_items('node', $node, 'field_twitter');
    $variables ['field_twitter'] = $field_twitter[0]['url']; 
    $field_google_plus = field_get_items('node', $node, 'field_google_plus');
    $variables ['field_google_plus'] = $field_google_plus[0]['url']; 
    $field_linkedin = field_get_items('node', $node, 'field_linkedin');
    $variables ['field_linkedin'] = $field_linkedin[0]['url'];                 
    $field_position = field_get_items('node', $node, 'field_position');
    $variables ['field_position'] = $field_position[0]['value'];
    $field_other_members = field_get_items('node', $node, 'field_other_members');
    $variables ['field_other_members'] = $field_other_members;
    $field_lawyer_photo = field_get_items('node', $node, 'field_lawyer_photo');
    $file_uri_photo = $field_lawyer_photo[0]['uri'];
    $file_url_photo = file_create_url($file_uri_photo);
    $variables ['field_lawyer_photo'] = $file_url_photo;    
    
	  $field_company_logo = field_get_items('node', $node, 'field_company_logo');
    $file_uri_logo = $field_company_logo[0]['uri'];
    $file_url_logo = file_create_url($file_uri_logo);
    $variables ['field_company_logo'] = $file_url_logo;  
	
    $field_image_banniere = field_get_items('node', $node, 'field_image_banniere');
    $file_uri_image_banniere = $field_image_banniere[0]['uri'];
    $file_url_image_banniere = file_create_url($file_uri_image_banniere);
    $variables ['field_image_banniere'] = $file_url_image_banniere;
  }
  elseif ($variables['node']->type =='attoney_blog' or $variables['node']->type =='front_advertise'){
    $field_image_blog = field_get_items('node', $node, 'field_image_blog');
    $field_uri_image_blog = $field_image_blog[0]['uri'];
    $field_uri_image_blog = file_create_url($field_uri_image_blog);
    $variables ['field_image_blog'] = $field_uri_image_blog;
    $field_tags_blog = field_get_items('node', $node, 'field_tags_blog');

	
  	if (is_array($field_tags_blog)){
  		foreach ($field_tags_blog as $taxonomy) {
			$taxonomies_name =  array();
			if (isset($taxonomy['taxonomy_term']->name)){
				$taxonomies_name[] = $taxonomy['taxonomy_term']->name;
			}
  		}
  		$variables ['taxonomies_name'] = $taxonomies_name;		
  	}
  	else{
  		$variables ['taxonomies_name']='';
  	}
      /*-------------------------*/
      //About author serction//
      /*-------------------------*/
      $node = node_load($variables['node']->nid);
      //Récupérer les informations sur l'auteur
      $user = profile2_load_by_user($node->uid);
	  
	  if (isset($user['main'])){
		  //Récupérer les champs du noeud member firm
		  $keywords = preg_split("/\//", $user['main']->field_website['und'][0]['value']);
		  $node_member_firm = node_load ($keywords[1]);
		  
		  //Intégrer du contenu dans le bloc:
		  $variables['author_picture'] = file_create_url ($user['main']->field_lawyer_photo['und'][0]['uri']);
		  $variables['author_description'] = $user['main']->field_quick_facts['und'][0]['value'].l(' Read More... ', $user['main']->field_website['und'][0]['value']);
		  $variables['responsible'] =  $node_member_firm->field_responsible['und'][0]['value'];
		  $variables['social_media'] = array(
			'linkedin' => 		isset($node_member_firm->field_linkedin['und'][0]['url'])?$node_member_firm->field_linkedin['und'][0]['url']:null,
			'google_plus' => 	isset($node_member_firm->field_google_plus['und'][0]['url'])?$node_member_firm->field_google_plus['und'][0]['url']:null,
			'twitter' => 		isset($node_member_firm->field_twitter['und'][0]['url'])?$node_member_firm->field_twitter['und'][0]['url']:null,
			'facebook' => 		isset($node_member_firm->field_facebook['und'][0]['url'])?$node_member_firm->field_facebook['und'][0]['url']:null
		  ); 		  
	  }



      /*-------------------------*/
      //Latest post section serction//
      /*-------------------------*/
      $variables['region']['latest_post'] = block_get_blocks_by_region('latest_post');
	  $variables['region']['custom_search_block'] = block_get_blocks_by_region('custom_search_block');
  }


  //Include map
    // if ($node->nid == 88){
    //     drupal_add_js(drupal_get_path('theme', 'theme_kmV2') . '/js/map-script.js');
    //     $variables['scripts'] = drupal_get_js(); // necessary in D7?
    // }
} 

function _get_categories (){
	// the vocabulary id for tag is 1: ttd.vid = 1
	$query = db_select('taxonomy_index', 'ti');
	$query->addField('ti', 'tid');
	$query->addField('ttd', 'name');
	$query->addExpression('COUNT(ti.nid)', 'count');
	$query->leftjoin('taxonomy_term_data', 'ttd', 'ti.tid = ttd.tid');
	$query->condition('ttd.vid', '1');
	$query->groupBy('ttd.name');
	$result = $query->execute();
	return ($result);	  
}

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function theme_fm_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // theme_fm_preprocess_node_page() or theme_fm_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// 

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function theme_fm_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function theme_fm_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--sidebar.tpl.php template for sidebars.
  //if (strpos($variables['region'], 'sidebar_') === 0) {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('region__sidebar'));
  //}
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function theme_fm_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__no_wrapper'));
  //}
}
// */

function theme_kmV2_select($variables) {
		$element = $variables['element'];
		element_set_attributes($element, array('id', 'name', 'size'));
		_form_set_class($element, array('form-select'));
		if (($variables['element']['#title']=='Country' or $variables['element']['#title']=='Member Firm')and count ($variables['element']['#options'])<=50){

		return '<span class="country_list"><select' . drupal_attributes($element['#attributes']) . '>' . form_select_options($element) . '</select></span>';		
	}
	else{
		return '<select' . drupal_attributes($element['#attributes']) . '>' . form_select_options($element) . '</select>';
	}
}

function theme_kmV2_form_alter(&$form, &$form_state, $form_id) {

  static $check_form_state;
  if (!empty($form['actions']) && $form['actions']['submit'] && (($form_id =='webform_client_form_87') || ($form_id =='webform_client_form_89') )) {
    $form['actions']['submit']['#attributes'] = array('class' => array('theme-btn btn-style-one'));
  }
  

  if ($form_id == 'search_block_form' && !isset ($check_form_state)){
        $form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/icons/loupe_26.png');

			//ob_start();
			//var_dump($form['actions']['submit']);
			//$dumpy = ob_get_clean();	
			//watchdog('wlawa', 'Button check is:'.$dumpy);					
        $form['search_block_form']['#attributes']['placeholder'] = t('Search by Keywords');
		$check_form_state =  0;
		
  }
  elseif ($form_id == 'search_block_form' && isset ($check_form_state) && $check_form_state==0){
		$check_form_state = 1;
	  
  }
  elseif($form_id == 'search_block_form'){
		$form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/icons/loupe_14_gray.png');
		$form['search_block_form']['#attributes']['placeholder'] = t('Search by Keywords');
		$form['search_block_form']['#attributes']['title'] = t('Search by Keywords');	  
		$check_form_state ++;
		watchdog('wlawa','chedd a hamma'.$check_form_state);
  }
}

function theme_kmV2_item_list($variables) {

  $items = $variables['items'];
  $title = $variables['title'];
  $type = $variables['type'];
  $attributes = $variables['attributes'];

  // Only output the list container and title, if there are any list items.
  // Check to see whether the block title exists before adding a header.
  // Empty headers are not semantic and present accessibility challenges.
  $output = '<div class="pager styled-pagination text-center">';
  if (isset($title) && $title !== '') {
    $output .= '<h3>' . $title . '</h3>';
  }
  if (!empty($items)) {
    $output .= "<{$type}" . drupal_attributes($attributes) . '>';
    $num_items = count($items);
    $i = 0;
    foreach ($items as $item) {
      $attributes = array();
      $children = array();
      $data = '';
      $i++;
      if (is_array($item)) {
        foreach ($item as $key => $value) {
          if ($key == 'data') {
            $data = $value;
          }
          elseif ($key == 'children') {
            $children = $value;
          }
          else {
            $attributes[$key] = $value;
          }
        }
      }
      else {
        $data = $item;
      }
      if (count($children) > 0) {

        // Render nested list.
        $data .= theme_item_list(array(
          'items' => $children,
          'title' => NULL,
          'type' => $type,
          'attributes' => $attributes,
        ));
      }
      if ($i == 1) {
        $attributes['class'][] = 'first';
      }
      if ($i == $num_items) {
        $attributes['class'][] = 'last';
      }
      $output .= '<li' . drupal_attributes($attributes) . '>' . $data . "</li>\n";
    }
    $output .= "</{$type}>";
  }
  $output .= '</div>';
  return $output;
}


function theme_kmV2_theme(&$existing, $type, $theme, $path) {

  $items = array();
	
  $items['user_login'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'theme_kmV2') . '/templates',
    'template' => 'user-login',
    'preprocess functions' => array(
       'theme_kmV2_preprocess_user_login'
    ),
  );
  
  $items['confirm_form'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'theme_kmV2') . '/templates',
    'template' => 'node-delete-confirm'
  );
  
  $items['user_pass'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'theme_kmV2') . '/templates',
    'template' => 'node-delete-confirm'
  );  

  $items['user_profile_form'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'theme_kmV2') . '/templates',
    'template' => 'node-delete-confirm'
  );    


  //var_dump(debug_backtrace());


  
	return ($items);
}
function theme_kmV2_preprocess_views_view(&$vars){
  //$current_path = current_path();
  //
  //$vars['current_path'] = $current_path;
  //$vars ['front_page'] =  $GLOBALS['base_url'].'/';
  //$result = _get_categories ();
  //foreach ($result as $record) {
	//$vars['categories'][] = '<li><a class="clearfix" href="/taxonomy/'.$record->tid.'"><span class="txt pull-left">'.$record->name.'</span> <span class="count pull-right">('.$record->count.')</span></a></li>';
  //}

  			//ob_start();
			//var_dump($vars['rows']);
			//$dumpy = ob_get_clean();	
			//watchdog('wlawa', 'Rows are:'.$dumpy);			
}