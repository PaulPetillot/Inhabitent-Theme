<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	</header><!-- .entry-header -->
	<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

<?php if ( 'post' === get_post_type() ) : ?>
<div class="entry-meta">
	<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
</div><!-- .entry-meta -->
<?php endif; ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<a class="link-read" href="<?php the_permalink()?>">READ MORE</a>
	</div><!-- .entry-summary -->
</article><!-- #post-## -->
