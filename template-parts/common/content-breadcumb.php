<?php
    global $carservice_option;

    $page_title_bg_img = $carservice_option['page_title_bg_img']['url'];
?>

<div class="container-fluid page-header mb-5 p-0" style="background-image: url(<?php echo esc_url($page_title_bg_img);?> );">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown"><?php single_post_title(); ?></h1>
            <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( site_url('/') );?>"><?php echo esc_html__( 'Home', 'carservice' );?></a></li>
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( site_url('/') );?>"><?php echo esc_html__( 'Pages', 'carservice' );?></a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page"><?php single_post_title(); ?></li>
                    </ol>
                </nav>
        </div>
    </div>
</div>