<?php
	$icons = array(
		'Facebook' => '<i class="fa fa-facebook"></i>',
		'Twitter' => '<i class="fa fa-twitter"></i>',
		'Instagram' => '<i class="fa fa-instagram"></i>',
		'Flickr' => '<i class="fa fa-flickr"></i>',
		'Linkedin' => '<i class="fa fa-linkedin"></i>',
	);?>
<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
<?php if (!$label_hidden): ?>
<div class="field-label"<?php print $title_attributes; ?>><?php print $label ?>:&nbsp;</div>
<?php endif; ?>
<div class="field-items"<?php print $content_attributes; ?>>
<?php foreach ($items as $delta => $item): ?>
<?php 
	if(isset($icons[$item['#element']['title']])){
		$item['#element']['title'] = $icons[$item['#element']['title']];
	}
?>
<div class="field-item <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?>><?php print render($item); ?></div>
<?php endforeach; ?>
</div>
</div> 