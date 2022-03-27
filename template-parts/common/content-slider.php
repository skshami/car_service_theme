<div class="container-fluid p-0 mb-5">
    <div class="carousel slide">
        <div class="carousel-inner">
            <div class="owl-carousel owl-theme">
                <?php
                $args = array(
                    'post_type' => 'slider',
                    'post_per_page' => 5,
                );
                $the_query = new WP_Query($args);
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    ?>
                        <div>
                            <img class="w-100" src="<?php the_post_thumbnail_url();?>" alt="Image">
                            <div class="carousel-caption d-flex align-items-center">
                                <div class="container">
                                    <div class="row align-items-center justify-content-center justify-content-lg-start">
                                        <div class="col-10 col-lg-7 text-center text-lg-start">
                                            <h6 class="text-white text-uppercase mb-3 animated slideInDown"><?php the_field('slider_subtitle'); ?></h6>
                                            <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown"><?php the_title( );?></h1>
                                            <a href="<?php the_permalink( );?>" class="btn btn-primary py-3 px-5 animated slideInDown"><?php the_field('slider_button'); ?><i class="fa fa-arrow-right ms-3"></i></a>
                                        </div>
                                        <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                                <?php 
                                                    $silder_font_image = get_field('silder_font_image');
                                                if(!empty($silder_font_image)): ?>
                                                    <img class="img-fluid" src="<?php echo esc_url($silder_font_image['url']); ?>" alt="<?php echo esc_attr($silder_font_image['alt']); ?>" />
                                                <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    <?php
                }
                wp_reset_postdata(  );
                ?>
            </div>
        </div>
    </div>
</div>