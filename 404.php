<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package CARSERVICE
 */

get_header();
?>

	<main id="primary" class="site-main">

	<!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(<?php echo get_template_directory_uri() . '/img/carousel-bg-2.jpg'?> );">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown"><?php echo esc_html_e( 'Not Found','carservice' )?></h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1"><?php echo esc_html__( '404', 'carservice' );?></h1>
                    <h1 class="mb-4"><?php echo esc_html__( 'Page Not Found', 'carservice' );?></h1>
                    <p class="mb-4"><?php echo esc_html__('We are sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?','carservice');?></p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="<?php echo esc_url(home_url( '/' ));?>"><?php echo esc_html__( 'Go Back To Home','carservice' );?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->

	</main><!-- #main -->

<?php
get_footer();
