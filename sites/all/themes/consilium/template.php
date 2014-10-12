<?php
/**
 * Custom Galeria Template settings
 */
 
/**
 * page alter
 */
function consilium_page_alter(&$vars) {
	// Add custom varibales for scss
	$theme = superhero_get_theme();
	$theme->custom['header_height'] = theme_get_setting('superhero_header_height');
	$theme->custom['header_fixed_height'] = theme_get_setting('superhero_header_fixed_height');
	// Remove content from front page
	if (drupal_is_front_page()) {
		unset($vars['data']['content']);
	}
}

/**
 * Implement hook_breadcrumd
 */
function consilium_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    //$output = '<span class="showHere left">' . t('You are here') . '</span>';

    $output = '<div class="breadcrumb"><span class="showHere left">' . t('You are here:') . '</span> ' . implode(' <span class="fa fa-angle-right"></span> ', $breadcrumb) . '</div>';
    return $output;
  }
}