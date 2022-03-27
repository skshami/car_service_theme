<?php
/**
 * Template Name: Booking Template
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

<!-- Page Header Start -->

<!-- Service Start -->

<?php get_template_part( '/template-parts/common/content','featured' );?>

<!-- Service End -->

<!-- Booking Start -->

    <?php get_template_part( '/template-parts/common/content','booking' );?>

<!-- Booking End -->


    <?php
        global $carservice_option;
        $booking_call_subtitle = $carservice_option['booking_call_subtitle'];
        $booking_call_title = $carservice_option['booking_call_title'];
        $booking_call_desc = $carservice_option['booking_call_desc'];
        $booking_call_phone = $carservice_option['booking_call_phone'];
        $booking_contact_btn_text = $carservice_option['booking_contact_btn_text'];
        $booking_call_contact_btn_link = $carservice_option['booking_call_contact_btn_link'];

    ?>
<!-- Call To Action Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8 col-md-6">
                <h6 class="text-primary text-uppercase"><?php echo esc_html( $booking_call_subtitle );?></h6>
                <h1 class="mb-4"><?php echo esc_html( $booking_call_title );?></h1>
                <p class="mb-0"><?php echo esc_html( $booking_call_desc );?></p>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-primary d-flex flex-column justify-content-center text-center h-100 p-4">
                    <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i><?php echo esc_html( $booking_call_phone );?></h3>
                    <a href="<?php echo esc_url($booking_call_contact_btn_link);?>" class="btn btn-secondary py-3 px-5"><?php echo esc_html( $booking_contact_btn_text );?><i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Call To Action End -->

<?php
get_footer();
