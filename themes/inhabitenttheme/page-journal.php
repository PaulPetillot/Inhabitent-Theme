<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
           <?php $args = array('post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => '-1');
$post = get_posts($args); // returns an array of posts
?>
<?php foreach ($post as $post): setup_postdata($post);?>
                                 <?php /* Content from your array of post results goes here */?>
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
                            <?php endforeach;
wp_reset_postdata();?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
