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

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"><div class="node-inner">
  <div class="content">
    <?php print $picture; ?>
    <?php if ($submitted): ?>
      <div class="submitted">
        <?php print $date ?>
      </div>
    <?php endif; ?>
    <h1 class="title">
      <a href="<?php print $node_url; ?>" title="<?php print $title ?>"><?php print $title; ?></a>
    </h1>

    <?php if ($unpublished): ?>
      <div class="unpublished"><?php print t('Unpublished'); ?></div>
    <?php endif; ?>

    <div class="detail clear-block">
      <?php print $content; ?>
    </div>
  </div>
  
  <div class="extra-links">
    <div class="terms terms-inline"><?php print theme('links', $taxonomy, array('class' => 'links term-links')) ?></div>
    <?php print $links; ?>
  </div>

</div></div> <!-- /node-inner, /node -->