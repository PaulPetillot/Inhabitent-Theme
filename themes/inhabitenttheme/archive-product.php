<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php $wpb_all_query = new WP_Query(array('post_type' => 'product', 'post_status' => 'publish', 'posts_per_page' => -1));?>
		<?php if ($wpb_all_query-> have_posts() ) : ?>

			<header class="page-header">
				<section class="header-shop-content">
					<div>
					<h1 class="heading-part-shop">SHOP STUFF</h1>
					</div>
					<div class="list-tax">
					<ul class=“ul-list-tax”>
					<?php //declare $terms for product slugs
						$terms = get_terms( array(
						'taxonomy' => 'product-type',
						'hide_empty' => false
						));
					?>
                        <?php foreach ( $terms as $term ) : ?>
                        <li>
                            <p><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?> </a></p>
                        </li>
                        <?php endforeach; wp_reset_postdata(); ?>
                    </ul>
					</div>
			</section>
			</header><!-- .page-header -->
		<div class="shop-container-large">
			<?php /* Start the Loop */ ?>
			<?php while ( $wpb_all_query->have_posts() ) :$wpb_all_query-> the_post(); ?>
	
				<?php
					get_template_part( 'template-parts/content', 'shop' );
				?>

			<?php endwhile; ?>
		</div>
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>


                   
                    