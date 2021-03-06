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
	<section class="shop-section" >
		<h3>Shop Stuff</h3>
		<div class="product-taxonomy-section">
			<?php foreach (get_terms(array("taxonomy" => "product-type")) as $product_type): ?>
                    <div class="product-type">
                    	<img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/<?php echo $product_type->slug ?>.svg">
                            <p><?php echo $product_type->description ?></p>
                        <a href="<?php echo get_term_link($product_type->slug, "product-type"); ?>"><?php echo $product_type->name ?> STUFF</a>
                    </div>
            <?php endforeach;?>
		</div>
	</section>
	<section class="section-post">
	<h3>INHABITENT JOURNAL</h3>
		<div class='blog-post'>
    <?php
$args = array('post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => '3');
$post = get_posts($args); // returns an array of posts
?>
<?php foreach ($post as $post): setup_postdata($post);?>
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
	<section class="adventures">
	<h2>LATEST ADVENTURES </h2>
	<ul>
		<?php
            $args = array( 'post_type' => 'adventure', 'order => ASC', 'post_per_page' => '4' );
            $adventure_posts = get_posts( $args ); // returns an array of posts
		   foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
		   <li> 
				<div class="story-wrapper">
					<?php the_post_thumbnail();?>
				<div class="story-info">
					<h3><a href="<?php the_permalink()?>"><?php the_title();?></a></h3>
					<a class="link-read" href="<?php the_permalink()?>">READ MORE</a>
				</div>
				</div>
			</li>
		    <?php endforeach;wp_reset_postdata();?>
	</ul>
	<a class="btn-more" href="adventures/">MORE ADVENTURES</a>
	</section>
			</div>
</article><!-- #post-## -->
<?php get_footer(); ?>