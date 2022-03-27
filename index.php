<?php
/**
 * Main Index for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CARSERVICE
 */

	get_header();
?>

<!-- Carousel Start -->

    <?php get_template_part( '/template-parts/common/content','slider' );?>

<!-- Carousel End -->
   
<!-- Service Start -->

    <?php get_template_part( '/template-parts/common/content','featured' );?>

<!-- Service End -->

<!-- About Start -->

    <?php get_template_part( '/template-parts/common/content','about' );?>
    
<!-- About End -->

<!-- countdown Start -->

    <?php get_template_part( '/template-parts/common/content','countdown' );?>
    
<!-- countdown End -->

<!-- Service Start -->

    <?php get_template_part( '/template-parts/common/content','service' );?>

<!-- Service End -->

<!-- Booking Start -->

    <?php get_template_part( '/template-parts/common/content','booking' );?>

<!-- Booking End -->

<!-- Team Start -->

    <?php get_template_part( '/template-parts/common/content','team' );?>

<!-- Team End -->

<!-- Testimonial Start -->

    <?php get_template_part( '/template-parts/common/content','testimonials' );?>
    
<!-- Testimonial End -->

<?php
get_footer();
