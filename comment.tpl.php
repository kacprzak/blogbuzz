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

<div class="<?php print $classes; ?>"><div class="comment-inner clear-block">
  <?php if ($title): ?>
    <h3 class="title"><!--<?php print $title; ?>--></h3> 
  <?php endif; ?>

  <?php if ($unpublished): ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>
  
  <?php print $picture;?>

  <div class="content"><div class="content-inner">
    <div class="detail">
	  <img src="<?php global $base_url; print $base_url .'/' . $directory; ?>/images/comment_arrow.png" class="comment_arrow" />
      <?php print $content; ?>
	</div>
    <?php if ($signature): ?>
    <div class="user-signature clear-block">
      <?php print $signature; ?>
    </div>
    <?php endif; ?>

	<div class="extra-links">	  
  	  <?php if ($links): ?>
      <div class="links"><?php print $links; ?></div>
      <?php endif; ?> 
	  <?php print $submitted; ?>     
    </div>

  </div></div>
</div></div> <!-- /comment-inner, /comment -->
