<?php
/**
 * @file
 * The primary PHP file for this theme.
 */
function bootsrap_subtheme_preprocess_page(&$vars) {
    drupal_add_js('https://maps.googleapis.com/maps/api/js?sensor=true', array('type' => 'external', 'scope' => 'header'));
}