<?php
    global $carservice_option;
    $testimonials_sec_subtitle = $carservice_option['testimonials_sec_subtitle'];
    $testimonials_sec_title = $carservice_option['testimonials_sec_title'];
    ?>
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="text-primary text-uppercase"><?php echo esc_html( $testimonials_sec_title );?></h6>
            <h1 class="mb-5"><?php echo esc_html( $testimonials_sec_subtitle );?></h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <?php
                $args = array(
                    'post_type' => 'testimonial',
                    'post_per_page' => -1,
                );
                $the_query = new WP_Query($args);
                while ( $the_query->have_posts() ) :
                    $the_query->the_post();
            ?>
            <div class="testimonial-item text-center">
                <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="<?php the_post_thumbnail_url( ); ?>" style="width: 80px; height: 80px;">
                <h5 class="mb-0"><?php the_title();?></h5>
                <p><?php the_field('client_profession');?></p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0"><?php the_content( );?></p>
                </div>
            </div>
            <?php endwhile;
            wp_reset_postdata(  );?>
        </div>
     </div>
</div>