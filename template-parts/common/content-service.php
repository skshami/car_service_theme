<?php
    global $carservice_option;
    $services_sec_title = $carservice_option['services_sec_title'];
    $services_sec_subtitle = $carservice_option['services_sec_subtitle'];

    //service 1
    $services_title_one_icon = $carservice_option['services_title_one_icon'];
    $services_title_one = $carservice_option['services_title_one'];
    $services_subtitle_one = $carservice_option['services_subtitle_one'];
    $services_desc_one = $carservice_option['services_desc_one'];
    $service_img_one = $carservice_option['service_img_one']['url'];
    $services_one_btn_text = $carservice_option['services_one_btn_text'];
    $services_one_btn_link = $carservice_option['services_one_btn_link'];
    
    //service 2
    $services_title2_icon = $carservice_option['services_title2_icon'];
    $services_title2 = $carservice_option['services_title2'];
    $services_subtitle2 = $carservice_option['services_subtitle2'];
    $services_desc2 = $carservice_option['services_desc2'];
    $service_img2 = $carservice_option['service_img2']['url'];
    $services2_btn_text = $carservice_option['services2_btn_text'];
    $services2_btn_link = $carservice_option['services2_btn_link'];

    //service 3
    $services_title3_icon = $carservice_option['services_title3_icon'];
    $services_title3 = $carservice_option['services_title3'];
    $services_subtitle3 = $carservice_option['services_subtitle3'];
    $services_desc3 = $carservice_option['services_desc3'];
    $service_img3 = $carservice_option['service_img3']['url'];
    $services3_btn_text = $carservice_option['services3_btn_text'];
    $services3_btn_link = $carservice_option['services3_btn_link'];

    //service 4
    $services_title4_icon = $carservice_option['services_title4_icon'];
    $services_title4 = $carservice_option['services_title4'];
    $services_subtitle4 = $carservice_option['services_subtitle4'];
    $services_desc4 = $carservice_option['services_desc4'];
    $service_img4 = $carservice_option['service_img4']['url'];
    $services4_btn_text = $carservice_option['services4_btn_text'];
    $services4_btn_link = $carservice_option['services4_btn_link'];
?>

<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase"><?php echo esc_html($services_sec_title);?></h6>
            <h1 class="mb-5"><?php echo esc_html($services_sec_subtitle);?></h1>
        </div>
        <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-lg-4">
                <div class="nav w-100 nav-pills me-4">
                    <button class="btn-primary nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                        <i class="<?php echo esc_html( $services_title_one_icon );?> fa-2x me-3"></i>
                        <h4 class="m-0"><?php echo esc_html($services_title_one);?></h4>
                    </button>
                    <button class=" btn-primary nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                        <i class="<?php echo esc_html( $services_title2_icon );?> fa-2x me-3"></i>
                        <h4 class="m-0"><?php echo esc_html($services_title2);?></h4>
                    </button>
                    <button class="btn-primary nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                        <i class="<?php echo esc_html( $services_title3_icon );?> fa-2x me-3"></i>
                        <h4 class="m-0"><?php echo esc_html($services_title3);?></h4>
                    </button>
                    <button class="btn-primary nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                        <i class="<?php echo esc_html( $services_title4_icon );?> fa-2x me-3"></i>
                        <h4 class="m-0"><?php echo esc_html($services_title4);?></h4>
                    </button>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="<?php echo esc_url($service_img_one);?>"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3"><?php echo esc_html($services_subtitle_one);?></h3>
                                <div class="mb-4"><p><?php echo esc_html($services_desc_one);?></p></div>
                                <a href="<?php echo esc_url($services_one_btn_link);?>" class="btn btn-primary py-3 px-5 mt-3"><?php echo esc_html($services_one_btn_text);?><i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-2">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="<?php echo esc_url($service_img2);?>"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3"><?php echo esc_html($services_subtitle2);?></h3>
                                <div class="mb-4"><p><?php echo esc_html($services_desc2);?></p></div>
                                <a href="<?php echo esc_url($services2_btn_link);?>" class="btn btn-primary py-3 px-5 mt-3"><?php echo esc_html($services2_btn_text);?><i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="<?php echo esc_url($service_img3);?>"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3"><?php echo esc_html($services_subtitle3);?></h3>
                                <div class="mb-4"><p><?php echo esc_html($services_desc3);?></p></div>
                                <a href="<?php echo esc_url($services3_btn_link);?>" class="btn btn-primary py-3 px-5 mt-3"><?php echo esc_html($services3_btn_text);?><i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-4">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="<?php echo esc_url($service_img4);?>"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3"><?php echo esc_html($services_subtitle4);?></h3>
                                <div class="mb-4"><p><?php echo esc_html($services_desc4);?></p></div>
                                <a href="<?php echo esc_url($services4_btn_link);?>" class="btn btn-primary py-3 px-5 mt-3"><?php echo esc_html($services4_btn_text);?><i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>