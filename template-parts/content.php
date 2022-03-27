<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CARSERVICE
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1 class="text-center"><?php the_title();?></h1>
	<div class="post-thumb text-center"><?php the_post_thumbnail('single_post_thumb');?></div>
	<div class="entry-content">
		<?php the_content();?>
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'carservice' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php carservice_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
