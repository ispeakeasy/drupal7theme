<?php
/**
 * @file
 * userthreeblock.features.fe_block_boxes.inc
 */

/**
 * Implements hook_default_fe_block_boxes().
 */
function userthreeblock_default_fe_block_boxes() {
  $export = array();

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'Fully Customisable';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'userthree';
  $fe_block_boxes->body = '<p>[icon name="fa fa-file-text"][/icon]</p>

<h3 class="block-title">FULL DEVELOPMENT</h3>

<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>

<p><a class="read-more" href="#">Find out more →</a></p>
';

  $export['userthree'] = $fe_block_boxes;

  return $export;
}
