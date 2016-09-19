<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
?>

  <header class="header" role="banner">

    <?php if ($logo): ?>
      <div id="logo_home">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
      </div>
    <?php endif; ?>

    <?php if ($main_menu): ?>
      <div class="main-menu">
        <nav class="main-menu-menu" role="navigation">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see https://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('navbar', 'clearfix'),
            ),
          )); ?>
        </nav>
        <div id="block_search">
          <?php $sidebar_first  = render($page['sidebar_first']); ?>
          <?php if ($sidebar_first): ?>
            <?php print $sidebar_first; ?>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>

    <!--<?php /*if ($secondary_menu): ?>
      <nav class="header__secondary-menu" role="navigation">
        <?php //print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => $secondary_menu_heading,
            'level' => 'h2',
            'class' => array('visually-hidden'),
          ),
        ));*/ ?>
      </nav>
    <?php //endif; ?>-->

    <?php print render($page['header']); ?>

  </header>

<?php if ( empty($title) ): ?>
  <?php $title = $view->get_title(); ?>
<?php endif; ?>

<?php print theme('breadcrumb', array('breadcrumb'=>drupal_get_breadcrumb())); ?>

<div class="centerContainer">
  <div class="div_galeria">
    <div class="subtitle_galeria">
      <?php if ($title): ?>
          <h2><?php print t($title)?></h2>
      <?php endif; ?>
      <div class="red_dot"></div>
    </div>
    <div class="<?php print $classes; ?>">

      <?php if ($rows): ?>
        <div class="cont_galerias">
          <div class="btn_galeria" id="ant">
          </div>
          <div class="cont_galerias_infinito">
            <div class="view-content fotos_galeria">
              <?php print $rows; ?>
            </div>
          </div>
          <div class="btn_galeria" id="sgte"></div>
        </div>
      <?php elseif ($empty): ?>
        <div class="view-empty">
          <?php print $empty; ?>
        </div>
      <?php endif; ?>

      <?php if ($attachment_after): ?>
        <div class="attachment attachment-after">
          <?php print $attachment_after; ?>
        </div>
      <?php endif; ?>

      <?php if ($more): ?>
        <?php print $more; ?>
      <?php endif; ?>

      <?php if ($footer): ?>
        <div class="view-footer">
          <?php print $footer; ?>
        </div>
      <?php endif; ?>

      <?php if ($feed_icon): ?>
        <div class="feed-icon">
          <?php print $feed_icon; ?>
        </div>
      <?php endif; ?>

    </div><?php /* class view */ ?>
  </div>
</div>


