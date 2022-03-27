<?php
/**
 * Template Name: Contact Template
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
   


    <?php
        global $carservice_option;
        $contact_us_subtitle = $carservice_option['contact_us_subtitle'];
        $contact_us_title = $carservice_option['contact_us_title'];
        $contact_us_sec_desc = $carservice_option['contact_us_sec_desc'];
        $contact_us_mail1_text = $carservice_option['contact_us_mail1_text'];
        $contact_us_mail1 = $carservice_option['contact_us_mail1'];
        $contact_us_mail2_text = $carservice_option['contact_us_mail2_text'];
        $contact_us_mail2 = $carservice_option['contact_us_mail2'];
        $contact_us_mail3_text = $carservice_option['contact_us_mail3_text'];
        $contact_us_mail3 = $carservice_option['contact_us_mail3'];
        $contact_us_map = $carservice_option['contact_us_map'];
        $contact_form_shortcode = $carservice_option['contact_form_shortcode'];
        
    ?>
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase"><?php echo esc_html( $contact_us_subtitle );?></h6>
                <h1 class="mb-5"><?php echo esc_html( $contact_us_title );?></h1>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase"><?php echo esc_html( $contact_us_mail1_text );?></h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i><?php echo esc_html($contact_us_mail1);?></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase"><?php echo esc_html($contact_us_mail2_text);?></h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i><?php echo esc_html($contact_us_mail2);?></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase"><?php echo esc_html($contact_us_mail3_text);?></h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i><?php echo esc_html($contact_us_mail3);?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <iframe src="<?php echo esc_url($contact_us_map);?>" class="position-relative rounded w-100 h-100" frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" loading="lazy"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <p class="mb-4"><?php echo esc_html($contact_us_sec_desc);?></p>
                            <?php
                                if($contact_form_shortcode){
                                    echo do_shortcode($contact_form_shortcode);	
                                }
                            ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
  

<?php
get_footer();
