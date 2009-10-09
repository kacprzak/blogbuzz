<?php
// $Id$

/*
+----------------------------------------------------------------+
|   BlogBuzz for Dupal 6.x - Version 1.0                         |
|   Copyright (C) 2009 Antsin.com All Rights Reserved.           |
|   @license - GNU GENERAL PUBLIC LICENSE                        |
|----------------------------------------------------------------|
|   Theme Name: BlogBuzz                                         |
|   Description: BlogBuzz by Antsin                              |
|   Author: Antsin.com                                           |
|   Website: http://www.antsin.com/                              |
|----------------------------------------------------------------+
*/ 

function phptemplate_settings($saved_settings) {
  // Get the node types
  $node_types = node_get_types('names');

/**
 * The default values for the theme variables. Make sure $defaults exactly
 * matches the $defaults in the template.php file.
 */
  $defaults = array(
    'blogbuzz_style' => 'stone',
  );

  // Make the default content-type settings the same as the default theme settings,
  // so we can tell if content-type-specific settings have been altered.
  $defaults = array_merge($defaults, theme_get_settings());

  // Merge the saved variables and their default values
  $settings = array_merge($defaults, $saved_settings);

  // Create theme settings form widgets using Forms API

  // TNT Fieldset
  $form['tnt_container'] = array(
    '#type' => 'fieldset',
    '#title' => t('General settings'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );

  $form['tnt_container']['style_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Blogbuzz color setting'),
    '#description' => t('Use color setting to change default color for your theme.'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
	'#attributes' => array('class' => 'style_settings'),
  );


  $form['tnt_container']['style_settings']['blogbuzz_style'] = array(
    '#type' => 'select',
    '#title' => t('Color'),
    '#default_value' => $settings['blogbuzz_style'],
    '#options' => array(
      'stone'    => t('Stone Soft'),
	  'dark'  => t('Coffee Black'),
      'sky'   => t('Sky Blue'),
    ),
  ); 
 
  // Return theme settings form
  return $form;
}  

?>