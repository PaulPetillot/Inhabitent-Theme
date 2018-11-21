<?php
/**
 * Template part for displaying page content in the shop page.
 *
 * @package RED_Starter_Theme
 */

?>
<div class="one-shop-case">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    </header><!-- .entry-header -->


<div class="entry-content">

    <div class="shop-product-case">

        <?php if ( has_post_thumbnail() ) : ?>
        <div class="shop-page-image">
            <a class="link-shop-page" href="<?php the_permalink()?>"><?php the_post_thumbnail( 'large' ); ?></a>
        </div>
        <?php endif; ?>

        <div class="text-shop-page">

            <div class="price">
                <?php echo CFS()->get('price'); ?>
            </div>
            <div class="product-title-page-shop">
                <h2><?php the_title();?></h2>
            </div>

        </div>
    </div>
</div><!-- .entry-content -->
</article><!-- #post-## -->
</div>