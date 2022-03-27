<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <?php
                $args = array(
                    'post_type' => 'featured',
                    'post_per_page' => 3,
                );
                $the_query = new WP_Query($args);
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                
                $featured_icon= get_field('featured_icon');
            ?>
                <div class="col-lg-4 col-md-6 wow featured-hover fadeInUp" data-wow-delay="0.2s">
                    <div class="d-flex py-5 px-4">
                        <i class="<?php echo esc_html($featured_icon);?> fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3"><?php the_title( );?></h5>
                            <p><?php the_excerpt( );?></p>
                            <a class="text-secondary border-bottom" href="<?php the_permalink();?>"><?php echo esc_html__('Read More','carservice');?></a>
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