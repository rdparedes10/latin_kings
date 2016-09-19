<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="<?php print $classes; ?> clearfix node-<?php print $node->nid; ?>"<?php print $attributes; ?>>

  <div class="centerContainer">
    <div class="div_galeria">
      <div class="subtitle_galeria">
        <h2><?php print $title; ?></h2>
        <div class="red_dot"></div>
      </div>
        <div class="cont_galerias">
          <div class="btn_galeria" id="ant">
          </div>
          <div class="cont_galerias_infinito">
            <?php print views_embed_view('view_galerias','block', $node->nid); ?>
          </div>
          <div class="btn_galeria" id="sgte"></div>
        </div>
      </div>
  </div>


</article>