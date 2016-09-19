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
<?php 
	$vocabulary = taxonomy_vocabulary_machine_name_load('galerias');
    $terms = entity_load('taxonomy_term', FALSE, array('vid' => $vocabulary->vid));
    $cont_galeria = 0;

		foreach ($terms as $term) {
			$sizeTerms = sizeof($terms);
			$galeria = $term->name;
			$cont_foto_galeria = 0;
			
			foreach ($rows as $id => $row) {
				$idGaleriaFoto = $view->render_field('field_id_galeria_foto', $id);
				if($galeria == $idGaleriaFoto){
					$cont_foto_galeria++;
				}
			}
			if($cont_foto_galeria > 0){
			?>
			<div class="contenedor_galeria" id="contenedor_<?php print $galeria; ?>">
			<div id="<?php print $galeria; ?>" class="galeria">
			<a href="multimedia/<?php print $galeria; ?>">
			<?php

			$cont_foto = 0;
				foreach ($rows as $id => $row) {
					$idGaleria = $view->render_field('field_id_galeria_foto', $id);
					if($galeria == $idGaleria){
						$cont_foto++;
						if($cont_foto <= 3){
					?>
						<div class="foto foto_<?php print $cont_foto; ?>">
						<div class="opacidad_foto"></div>
					 	<?php
					 		print $view->render_field('field_foto', $id);
					 	?>
					 	</div>
					<?php
						}
					}
					
				}

				if($cont_foto > 0){
					$cont_galeria++;
				}
			?>
			</div>
			</a>
			<div class="title_galeria_item">
				<p><?php print $galeria; ?></p>
			</div>
			</div>
		<?php
		}
		}?>