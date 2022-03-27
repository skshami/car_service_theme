<?php
    global $carservice_option;
    $countdown_bg = $carservice_option['countdown_bg']['url'];
    $countdown_icon = $carservice_option['countdown_icon'];
    $countdown = $carservice_option['countdown'];
    $countdown_title = $carservice_option['countdown_title'];
    $countdown_icon2 = $carservice_option['countdown_icon2'];
    $countdown2 = $carservice_option['countdown2'];
    $countdown_title2 = $carservice_option['countdown_title2'];
    $countdown_icon3 = $carservice_option['countdown_icon3'];
    $countdown3 = $carservice_option['countdown3'];
    $countdown_title3 = $carservice_option['countdown_title3'];
    $countdown_icon4 = $carservice_option['countdown_icon4'];
    $countdown4 = $carservice_option['countdown4'];
    $countdown_title4 = $carservice_option['countdown_title4'];
?>
<div class="container-fluid fact bg-dark my-5 py-5" style="background: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .7)), url('<?php echo esc_url($countdown_bg);?>'); background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="<?php echo esc_html($countdown_icon);?> fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up"><?php echo esc_html($countdown);?></h2>
                <p class="text-white mb-0"><?php echo esc_html($countdown_title) ;?></p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="<?php echo esc_html($countdown_icon2);?> fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up"><?php echo esc_html($countdown2);?></h2>
                <p class="text-white mb-0"><?php echo esc_html($countdown_title2);?></p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="<?php echo esc_html($countdown_icon3);?> fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up"><?php echo esc_html($countdown3);?></h2>
                <p class="text-white mb-0"><?php echo esc_html($countdown_title3);?></p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="<?php echo esc_html($countdown_icon4);?> fa-2x text-white mb-3"></i>
                <h2 class="text-white mb-2" data-toggle="counter-up"><?php echo esc_html($countdown4);?></h2>
                <p class="text-white mb-0"><?php echo esc_html($countdown_title4);?></p>
            </div>
        </div>
    </div>
</div>