<?php
    global $carservice_option;
    $team_sec_subtitle = $carservice_option['member-sec-subtitle'];
    $team_sec_title = $carservice_option['member-sec-title'];
?>
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase"><?php echo esc_html($team_sec_subtitle); ?></h6>
            <h1 class="mb-5"><?php echo esc_html($team_sec_title);?></h1>
        </div>
        <div class="row g-4">
            <?php
                $args = array(
                    'post_type' => 'member',
                    'post_per_page' => 4,
                );
                $the_query = new WP_Query($args);
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
            ?>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="<?php echo esc_url(get_the_post_thumbnail_url());?>" alt="<?php the_title( );?>">
                        <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                            <?php 
                                $members_facebook = get_field('members_facebook');
                                $members_twitter = get_field('members_twitter');
                                $members_instagram = get_field('members_instagram');
                                $members_linkedin = get_field('members_linkedin');

                                if($members_facebook){
                                    ?>
                                    <a class="btn btn-square mx-1" href="<?php echo esc_url($members_facebook);?>"><i class="fab fa-facebook-f"></i></a>
                                    <?php
                                }
                                if($members_twitter){
                                    ?>
                                    <a class="btn btn-square mx-1" href="<?php echo esc_url($members_twitter);?>"><i class="fab fa-twitter"></i></a>
                                    <?php
                                }
                                if($members_instagram){
                                    ?>
                                    <a class="btn btn-square mx-1" href="<?php echo esc_url($members_instagram);?>"><i class="fab fa-instagram"></i></a>
                                    <?php
                                }
                                if($members_linkedin){
                                    ?>
                                <a class="btn btn-square mx-1" href="<?php echo esc_url($members_linkedin);?>"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <?php
                                }

                            ?>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="fw-bold mb-0"><?php the_title( );?></h5>
                        <small><?php the_field('members_designation');?></small>
                    </div>
                </div>
            </div>
            <?php }  wp_reset_postdata(  );?>
        </div>
    </div>
</div>