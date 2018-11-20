<?php
/**
 * Template part for displaying page content in front-page.php.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="content-front-page">

<section class="banner-front-page">
<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" alt="the logo of the website">
</section>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<section class="section-post">
	<h3>INHABITENT JOURNAL</h3>
		<div class='blog-post'>
    <?php
$args = array('post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => '2');
$post = get_posts($args); // returns an array of posts
?>
<?php foreach ($posts as $post): setup_postdata($post);?>
                                 <?php /* Content from your array of post results goes here */?>
								 <div class="journal-article">
								<div class="content-mark">
								<div class="meta-div">
								 <p><?php the_date();?> /
      								<?php echo $post->comment_count; ?> comments </p>
								</div>
                                 <h2><a class="link-h2" href="<?php the_permalink()?>"><?php the_title();?></a></h2>
								 <a class="link-read" href="<?php the_permalink()?>">READ ENTRY</a>
								</div>
								<div class="thumbail-wrapper">
										<?php the_post_thumbnail();?>
								</div>
								</div>
                            <?php endforeach;
wp_reset_postdata();?>
	</div>
	</section>
			</div>
</article><!-- #post-## -->
<?php get_footer(); ?>