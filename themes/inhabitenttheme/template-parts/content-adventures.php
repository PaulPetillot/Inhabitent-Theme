<?php
/**
 * Template part for displaying page content in the adventure page.
 *
 * @package RED_Starter_Theme
 */

?>
<div class="adventure-grid-item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="story-wrapper">
        <?php if ( has_post_thumbnail() ) : ?>
       <?php the_post_thumbnail();?>
       <?php endif; ?>
				<div class="story-info">
					<h3><a href="<?php the_permalink()?>"><?php the_title();?></a></h3>
					<a class="link-read" href="<?php the_permalink()?>">READ MORE</a>
				</div>
      
</div>
</div><!-- #post-## -->
