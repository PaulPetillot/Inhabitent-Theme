<?php
/**
 * Template part for displaying single-product posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="entire-product">
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="image-wrapper-product">
				<?php the_post_thumbnail( 'large' ); ?>
			</div>
		<?php endif; ?>
	</header><!-- .entry-header -->
<div class="content-product-wrapper">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="price-product">
			<p>
				<?php echo CFS()->get('price'); ?>
			</p>
		</div>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<div class="social-media-div">
		<ul class="social-media-ul">
			<li class="social-media-li fb">LIKE</li>
			<li class="social-media-li twi">TWEET</li>
			<li class="social-media-li pin">PIN</li>
		</ul>
	</div>
</div>
	</section>
	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
