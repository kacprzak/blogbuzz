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
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?> 
  <?php print $scripts; ?>
</head>

<body class="<?php print $body_classes; ?>">
  <div id="page"><div id="page-inner">
    <div id="header"><div id="header-inner" class="clear-block">
      <?php if ($logo || $site_name || $site_slogan): ?>
        <div id="logo-title">
          <?php if ($logo): ?>
            <div id="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" id="logo-image" /></a></div>
          <?php endif; ?>

          <?php if ($site_name): ?>   
            <h1 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                <?php print $site_name; ?>
              </a>
            </h1>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>

        </div> <!-- /#logo-title -->
      <?php endif; ?>

      <?php if ($secondary_links): ?>
        <div id="secondary">
          <?php print theme('links', $secondary_links); ?>
        </div> <!-- /#secondary -->
      <?php endif; ?>

      <?php if ($header): ?>
        <div id="header-blocks">
          <?php print $header; ?>
        </div> <!-- /#header-blocks -->
      <?php endif; ?>

    </div></div> <!-- /#header-inner, /#header -->

	<?php if ($primary_links || $navbar): ?>
      <div id="navbar"><div id="navbar-inner" class="clear-block">
        <?php if ($primary_links): ?>
          <div id="primary">
            <?php print menu_tree($menu_name = 'primary-links'); ?>
          </div>
        <?php endif; ?> <!-- /#primary -->

        <?php print $navbar; ?>
      </div></div> <!-- /#navbar-inner, /#navbar -->
    <?php endif; ?> 

    <?php if ($showcase): ?>
      <div id="showcase">
	    <div id="showcase-inner" class="clear-block">
          <?php print $showcase; ?>
		</div>
	  </div>
    <?php endif; ?>

    <div id="main"><div id="main-inner" class="clear-block">
      <div id="content"><div id="content-inner">	
        <?php if ($mission): ?>
          <div id="mission"><?php print $mission; ?></div>
        <?php endif; ?>

        <?php if ($content_top): ?>
          <div id="content-top" class="clear-block">
            <?php print $content_top; ?>
          </div><!-- /content_top -->
        <?php endif; ?>           

        <div id="content-area">
		<?php if ($title || $tabs || $help || $messages): ?>
          <div id="content-header">
            <?php if (!empty($title) && !( arg(0) == 'node' && is_numeric(arg(1)))) : ?>
              <h1><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print $messages; ?>
            <?php if ($tabs): ?>
              <div class="tabs"><?php print $tabs; ?></div>
            <?php endif; ?>
            <?php print $help; ?>
          </div> <!-- /#content-header -->
        <?php endif; ?>

          <?php print $content; ?>
        </div>
		
      </div></div> <!-- /#content-inner, /#content -->

      <?php if ($right || $right_top): ?>
        <div id="sidebar-right"><div id="sidebar-right-inner">
          <?php print $right; ?>
        </div></div> <!-- /#sidebar-right-inner, /#sidebar-right -->
      <?php endif; ?>
	  
	<?php if ($main_bottom_one || $main_bottom_two || $main_bottom_three || $main_bottom_four): ?>
      <div id="main-bottom"><div id="main-bottom-inner" class="<?php print $main_bottom; ?>">
        <?php if ($main_bottom_one): ?>
          <div id="main-bottom-one" class="column">
            <?php print $main_bottom_one; ?>
          </div><!-- /main-bottom-one -->
        <?php endif; ?>
        <?php if ($main_bottom_two): ?>
          <div id="main-bottom-two" class="column">
            <?php print $main_bottom_two; ?>
          </div><!-- /main-bottom-two -->
        <?php endif; ?>
		<?php if ($main_bottom_three): ?>
          <div id="main-bottom-three" class="column">
            <?php print $main_bottom_three; ?>
          </div><!-- /main-bottom-three -->
        <?php endif; ?>
		<?php if ($main_bottom_four): ?>
          <div id="main-bottom-four" class="column">
            <?php print $main_bottom_four; ?>
          </div><!-- /main-bottom-four -->
        <?php endif; ?>
      </div></div> 
	</div> 
	<?php endif; ?> 

    </div></div> <!-- /#main-inner, /#main -->
  </div></div> <!-- /#page-inner, /#page -->

    <?php if ($footer_one || $footer_two || $footer_three): ?>
      <div id="footer"><div id="footer-inner" class="<?php print $footer; ?> clear-block">
	    <div id="breadcrumb" class="clear-block"><?php print $breadcrumb; ?></div>
        <?php if ($footer_one): ?>
          <div id="footer-one" class="column">
            <?php print $footer_one; ?>
          </div><!-- /footer-one -->
        <?php endif; ?>
        <?php if ($footer_two): ?>
          <div id="footer-two" class="column">
            <?php print $footer_two; ?>
          </div><!-- /footer-two -->
        <?php endif; ?>
		<?php if ($footer_three): ?>
          <div id="footer-three" class="column">
            <?php print $footer_three; ?>
          </div><!-- /footer-three -->
        <?php endif; ?>
      </div></div> <!-- /#footer-inner, /#footer -->
    <?php endif; ?>

    <div id="closure"><div id="closure-inner" class="region region-closure"><div id="designed-by"><small><a href="http://www.antsin.com" title="Drupal Theme">Designed by Antsin.com</a></small></div><?php print $closure_region; ?></div></div>

  <?php print $closure; ?>

</body>
</html>
