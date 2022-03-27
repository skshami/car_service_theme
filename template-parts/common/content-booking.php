<?php
    global $carservice_option;
    $service_book_sec_title = $carservice_option['service_book_sec_title'];
    $service_book_sec_desc = $carservice_option['service_book_sec_desc'];
    $booking_form_title = $carservice_option['booking_form_title'];
    $booking_form_shortcode = $carservice_option['booking_form_shortcode'];
    $service_book_sec_bg = $carservice_option['service_book_sec_bg']['url'];
?>
<div class="container-fluid bg-secondary booking my-5 wow fadeInUp" style="background: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .7)), url('<?php echo esc_url($service_book_sec_bg) ; ?>'); background-position: center center; background-repeat: no-repeat; background-size: cover;"data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 py-5">
                <div class="py-5">
                    <h1 class="text-white mb-4"><?php echo esc_html($service_book_sec_title );?></h1>
                    <p class="text-white mb-0"><?php echo esc_html($service_book_sec_desc );?></p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                    <h1 class="text-white mb-4"><?php echo esc_html($booking_form_title );?></h1>
                        <?php echo do_shortcode( $booking_form_shortcode);?>
                </div>
            </div>
        </div>
    </div>
</div>