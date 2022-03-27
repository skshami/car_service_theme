<?php
    global $carservice_option;
    $about_subtitle = $carservice_option['about_subtitle'];
    $about_title = $carservice_option['about_title'];
    $about_desc = $carservice_option['about_desc'];
    $about_btn_text = $carservice_option['about_btn_text'];
    $about_btn_link = $carservice_option['about_btn_link'];
    $about_img = $carservice_option['about_img']['url'];

    $experience_years = $carservice_option['experience_years'];
    $about_featured_title_1 = $carservice_option['about_featured_title_1'];
    $about_featured_desc_1 = $carservice_option['about_featured_desc_1'];
    $about_featured_title_2 = $carservice_option['about_featured_title_2'];
    $about_featured_desc_2 = $carservice_option['about_featured_desc_2'];
    $about_featured_title_3 = $carservice_option['about_featured_title_3'];
    $about_featured_desc_3 = $carservice_option['about_featured_desc_3'];
?>
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 pt-4" style="min-height: 400px;">
                <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                    <img class="position-absolute img-fluid w-100 h-100" src="<?php echo esc_url($about_img );?>" style="object-fit: cover;" alt="">
                    <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                        <h1 class="display-4 text-white mb-0"><?php echo esc_html($experience_years);?> <span class="fs-4"><?php echo esc_html__('Years','carservice');?></span></h1>
                        <h4 class="text-white"><?php echo esc_html__('Experience','carservice');?></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h6 class="text-primary text-uppercase"><?php echo esc_html($about_subtitle);?></h6>
                <h1 class="mb-4"><span class="text-primary">CarServ</span> <?php echo esc_html($about_title);?></h1>
                <p class="mb-4"><?php echo esc_html($about_desc);?></p>
                <div class="row g-4 mb-3 pb-3">
                    <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary"><?php echo esc_html__('01','carservice');?></span>
                            </div>
                            <div class="ps-3">
                                <h6><?php echo esc_html($about_featured_title_1);?></h6>
                                <span class="text-color"><?php echo esc_html($about_featured_desc_1);?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary"><?php echo esc_html__('02','carservice');?></span>
                            </div>
                            <div class="ps-3">
                                <h6><?php echo esc_html($about_featured_title_2);?></h6>
                                <span class="text-color"><?php echo esc_html($about_featured_desc_2);?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex">
                            <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                <span class="fw-bold text-secondary"><?php echo esc_html__('03','carservice');?></span>
                            </div>
                            <div class="ps-3">
                                <h6><?php echo esc_html($about_featured_title_3);?></h6>
                                <span class="text-color"><?php echo esc_html($about_featured_desc_3);?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo esc_url($about_btn_link);?>" class="btn btn-primary py-3 px-5"><?php echo esc_html($about_btn_text);?><i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </div>
    </div>
</div>