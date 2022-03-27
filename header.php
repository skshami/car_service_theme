<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CARSERVICE
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="keywords">
    <meta content="" name="description">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<div id="page" class="site">

		<!-- Spinner Start -->
		<!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
			<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div> -->
		<!-- Spinner End -->

		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'carservice' ); ?></a>

		<header id="masthead" class="site-header">
			<?php
				global $carservice_option;

				$top_address = $carservice_option['top_address'];
				$work_hour = $carservice_option['work_hour'];
				$phone_number = $carservice_option['phone_number'];
				$get_quote_text = $carservice_option['get_quote_text'];
				$get_quote = $carservice_option['get_quote'];
				$facebook_url = $carservice_option['facebook_url'];
				$twitter_url = $carservice_option['twitter_url'];
				$linkedin_url = $carservice_option['linkedin_url'];
				$instagram_url = $carservice_option['instagram_url'];
			?>
			<!-- Topbar Start -->
			<div class="container-fluid top-header-bg p-0">
				<div class="row gx-0 d-none d-lg-flex">
					<div class="col-lg-7 px-5 text-start">
						<div class="h-100 d-inline-flex align-items-center py-3 me-4">
							<small class="fa fa-map-marker-alt text-primary me-2"></small>
							<small><?php echo esc_html($top_address);?></small>
						</div>
						<div class="h-100 d-inline-flex align-items-center py-3">
							<small class="far fa-clock text-primary me-2"></small>
							<small><?php echo esc_html($work_hour);?></small>
						</div>
					</div>
					<div class="col-lg-5 px-5 text-end">
						<div class="h-100 d-inline-flex align-items-center py-3 me-4">
							<small class="fa fa-phone-alt text-primary me-2"></small>
							<small><?php echo esc_html($phone_number);?></small>
						</div>
						<div class="h-100 d-inline-flex align-items-center">
							<a class="btn btn-sm-square bg-white text-primary me-1" href="<?php echo esc_url($facebook_url);?>"><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-sm-square bg-white text-primary me-1" href="<?php echo esc_url($twitter_url);?>"><i class="fab fa-twitter"></i></a>
							<a class="btn btn-sm-square bg-white text-primary me-1" href="<?php echo esc_url($linkedin_url);?>"><i class="fab fa-linkedin-in"></i></a>
							<a class="btn btn-sm-square bg-white text-primary me-0" href="<?php echo esc_url($instagram_url);?>"><i class="fab fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
			<!-- Topbar End -->


			<!-- Navbar Start -->
			<nav class="navbar navbar-expand-lg nav-bg navbar-light shadow sticky-top p-0">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
					
						<?php
						 the_custom_logo();
						?>
						<h2 class="m-0 text-primary"><?php bloginfo( 'name' );?></h2>
					
				</a>
				<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>
				

					<?php
						wp_nav_menu( array(
							'theme_location'    => 'primary_menu',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'navbarCollapse',
							'menu_class'        => 'navbar-nav ms-auto p-4 p-lg-0',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
						) );
					?>
					<!-- <div class="navbar-nav ms-auto p-4 p-lg-0">
						<a href="index.html" class="nav-item nav-link active">Home</a>
						<a href="about.html" class="nav-item nav-link">About</a>
						<a href="service.html" class="nav-item nav-link">Services</a>
						<div class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
							<div class="dropdown-menu fade-up m-0">
								<a href="booking.html" class="dropdown-item">Booking</a>
								<a href="team.html" class="dropdown-item">Technicians</a>
								<a href="testimonial.html" class="dropdown-item">Testimonial</a>
								<a href="404.html" class="dropdown-item">404 Page</a>
							</div>
						</div>
						<a href="contact.html" class="nav-item nav-link">Contact</a>
					</div> -->
					<a href="<?php echo esc_url( $get_quote );?>" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block"><?php echo esc_html( $get_quote_text );?><i class="fa fa-arrow-right ms-3"></i></a>
				
			</nav>
			<!-- Navbar End -->

		</header><!-- #masthead -->

