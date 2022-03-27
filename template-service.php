<?php
/**
 * Template Name: Service Template
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

<?php get_template_part( '/template-parts/common/content','service' );?>

<!-- Service End -->

<!-- Booking Start -->

    <?php get_template_part( '/template-parts/common/content','booking' );?>

<!-- Booking End -->

<!-- Testimonial Start -->

    <?php get_template_part( '/template-parts/common/content','testimonials' );?>
    
<!-- Testimonial End -->
<?php
get_footer();
