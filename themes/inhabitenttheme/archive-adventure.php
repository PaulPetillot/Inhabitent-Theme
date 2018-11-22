<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <header class="page-header">
            <h1 class="heading-part-adventure">LATEST ADVENTURES</h1>
        </header><!-- .page-header -->
        <div class="adventure-grid">
		<?php
            $args = array( 'post_type' => 'adventure', 'order => ASC', 'post_per_page' => '4' );
            $adventure_posts = get_posts( $args ); // returns an array of posts?>
            
	    <?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
                    
                    <?php get_template_part( 'template-parts/content', 'adventures' ); ?>
			
			<?php the_posts_navigation(); ?>

     <?php endforeach;wp_reset_postdata();?>
     </main><!-- #main -->
     </div><!-- #primary -->
<?php get_footer(); ?>


             