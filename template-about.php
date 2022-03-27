<?php
/**
 * Template Name: About Template
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CARSERVICE
 */

	get_header();
?>
<!-- Page Header Start -->

    <?php get_template_part( '/template-parts/common/content','breadcumb' );?>

<!-- Page Header End -->
   
<!-- Service Start -->

    <?php get_template_part( '/template-parts/common/content','featured' );?>

<!-- Service End -->

<!-- About Start -->

    <?php get_template_part( '/template-parts/common/content','about' );?>
    
<!-- About End -->

<!-- countdown Start -->

    <?php get_template_part( '/template-parts/common/content','countdown' );?>
    
<!-- countdown End -->

<!-- Team Start -->

    <?php get_template_part( '/template-parts/common/content','team' );?>

<!-- Team End -->


<?php
get_footer();
