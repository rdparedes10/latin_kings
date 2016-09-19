<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div class="foto_list" <?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
  	<div class="over_foto_list">
  		<div class="content_over">
  			<div class="btn_mas">
  			</div>
	  		<div class="text_over">
	  			<p>Conoce más de la foto</p>
	  		</div>
	  	</div>
  	</div>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>