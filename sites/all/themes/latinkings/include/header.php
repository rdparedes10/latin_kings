<header class="header" role="banner">

<?php if ($logo): ?>
  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
<?php endif; ?>

<?php if ($site_name || $site_slogan): ?>
  <div class="header__name-and-slogan">
    <?php if ($site_name): ?>
      <h1 class="header__site-name">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
      </h1>
    <?php endif; ?>

    <?php if ($site_slogan): ?>
      <div class="header__site-slogan"><?php print $site_slogan; ?></div>
    <?php endif; ?>
  </div>
<?php endif; ?>

<?php if ($secondary_menu): ?>
  <nav class="header__secondary-menu" role="navigation">
    <?php print theme('links__system_secondary_menu', array(
      'links' => $secondary_menu,
      'attributes' => array(
        'class' => array('links', 'inline', 'clearfix'),
      ),
      'heading' => array(
        'text' => $secondary_menu_heading,
        'level' => 'h2',
        'class' => array('visually-hidden'),
      ),
    )); ?>
  </nav>
<?php endif; ?>

<?php print render($page['header']); ?>

</header>