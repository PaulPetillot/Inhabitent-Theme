<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="journal-article">
								<div class="content-mark">
                            <div class="header-article">
										<?php the_post_thumbnail();?>
                                 <h2><a class="link-h2" href="<?php the_permalink()?>"><?php the_title();?></a></h2>
                                 <div class="meta-div">
								 <p><?php the_date();?> /
      								<?php echo $post->comment_count; ?> comments </p>
                                </div>
                            </div>
                           <?php $content = get_the_content(); echo mb_strimwidth($content, 0, 390, '[...]');?>
                                 <?php $content; ?>
								</div>
								<a class="link-read" href="<?php the_permalink()?>">READ MORE</a>
								</div>
</article><!-- #post-## -->
