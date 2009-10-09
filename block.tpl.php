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

<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="clear-block block block-<?php print $block->module ?> <?php if (function_exists(block_class)) print block_class($block); ?>">
  <div class="block-inner">
  <?php if ($block->subject): ?>
    <h2 class="title"><?php print $block->subject; ?></h2>
  <?php endif; ?>

  <div class="content">
    <?php print $block->content; ?>
  </div>

  <?php print $edit_links; ?>

</div></div> <!-- /block-inner, /block -->
