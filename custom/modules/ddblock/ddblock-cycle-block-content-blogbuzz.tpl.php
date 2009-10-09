<?php
// $Id$

/**
 * @file
 * Dynamic display block module template: blogbuzz - content template
 *
 * Available variables:
 * - $origin: From which module comes the block.
 * - $delta: Block number of the block.
 *
 * - $custom_template: template name
 * - $output_type: type of content
 *
 * - $slider_items: array with slidecontent
 * - $slide_text_position of the text in the slider (top | right | bottom | left)
 * - $slide_direction: direction of the text in the slider (horizontal | vertical )
 * - 
 * - $pager_content: Themed pager content
 * - $pager_position: position of the pager (top | bottom)
 *
 * notes: don't change the ID names, they are used by the jQuery script.
 */
// add Cascading style sheet
drupal_add_css($directory .'/custom/modules/ddblock/' . $custom_template . '/ddblock-cycle-'. $custom_template . '.css', 'template', 'all', FALSE);
?>
<!-- dynamic display block slideshow -->
<div id="ddblock-<?php print $delta ?>" class="ddblock-cycle-<?php print $custom_template ?> clear-block">
 <div class="container clear-block border">
  <div class="container-inner clear-block border">
   <?php if ($pager_position == "top") : ?>
    <!-- number pager --> 
    <?php print $pager_content ?>
   <?php endif; ?>
   <!-- slider content -->
   <div class="slider clear-block border">
    <div class="slider-inner clear-block border">
     <?php if ($output_type == 'view_fields') : ?>
      <?php foreach ($slider_items as $slider_item): ?>

       <div class="slide clear-block border">
        <div class="slide-inner clear-block border">
		 <?php print $slider_item['slide_image']; ?>
         <h1><?php print $slider_item['slide_title'] ?></h1> 
         <p><?php print $slider_item['slide_text'] ?></p>
         <div class="slide-read-more slide-read-more-<?php print $slide_direction ?> clear-block border">
          <p><?php print $slider_item['slide_read_more'] ?></p>
	     </div><!-- slide-read-more-->
		</div> <!-- slide-inner-->
       </div>  <!-- slide-->

      <?php endforeach; ?>
     <?php endif; ?>
    </div> <!-- slider-inner-->
   </div>  <!-- slider-->
   <?php if ($pager_position == "bottom") : ?>
    <!-- number pager --> 
    <?php print $pager_content ?>
   <?php endif; ?>
  </div> <!-- container-inner-->
 </div> <!--container-->
</div> <!--  template -->
