<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>
		<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
			<header class="page-header">
				<section class="header-shop-content">
					<div>
					<h1 class="heading-part-shop"><?php echo $term->name; ?></h1>
					</div>
					<div class="description">
					<p><?php echo $term->description?></p>
					</div>
			</section>
			</header><!-- .page-header -->
		<div class="shop-container-large">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
	
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
