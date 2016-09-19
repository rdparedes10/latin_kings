<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div class="layout-center">

    
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
  <div class="principalContainer">
    <div class="centralContainer">
      <div class="layout-3col layout-swap">

        <main class="layout-3col__right-content banner" role="main">
          <?php print render($page['highlighted']); ?>
          <?php print render($page['content']); ?>
          <?php print $feed_icons; ?>
        </main>

        <div class="layout-swap__top layout-3col__full">

          <?php print render($page['navigation']); ?>

        </div>

      </div>
    </div>

  </div>

  <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>
