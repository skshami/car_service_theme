<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CARSERVICE
 */

	global $carservice_option;

		$footer_sec_bg = $carservice_option['footer_sec_bg']['url'];
		//address
		$footer_address_sec_title = $carservice_option['footer_address_sec_title'];
		$footer_address_location = $carservice_option['footer_address_location'];
		$footer_address_phone = $carservice_option['footer_address_phone'];
		$footer_address_mail = $carservice_option['footer_address_mail'];
		//socials
		$fu_facebook = $carservice_option['fu_facebook'];
		$fu_instagram = $carservice_option['fu_instagram'];
		$fu_twitter = $carservice_option['fu_twitter'];
		$fu_linkedin = $carservice_option['fu_linkedin'];
		$fu_youtube = $carservice_option['fu_youtube'];


?>
	<footer id="colophon" class="site-footer">
		<!-- Footer Start -->
		<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" style="background: linear-gradient(rgba(0, 0, 0, .9), rgba(0, 0, 0, .9)), url('<?php echo esc_url($footer_sec_bg);?>') center center no-repeat;
    background-size: cover;" data-wow-delay="0.1s">
			<div class="container py-5">
				<div class="row g-5">
					<div class="col-lg-3 col-md-6">
						<?php
							if($footer_address_sec_title){
								?>
									<h4 class="text-light mb-4"><?php echo esc_html( $footer_address_sec_title );?></h4>
									<p class="mb-2 text-light"><i class="fa fa-map-marker-alt me-3"></i><?php echo esc_html( $footer_address_location);?></p>
									<p class="mb-2 text-light"><i class="fa fa-phone-alt me-3"></i><?php echo esc_html( $footer_address_phone );?></p>
									<p class="mb-2 text-light"><i class="fa fa-envelope me-3"></i><?php echo esc_html( $footer_address_mail );?></p>
								<?php
							}
						
						?>
						<div class="d-flex pt-2">
							<?php
								if($fu_facebook){
									?>
									<a class="btn btn-outline-light btn-social text-light" href="<?php echo esc_url($fu_facebook);?>"><i class="fab fa-facebook-f"></i></a>
									<?php

								}
								if($fu_twitter){
									?>
									<a class="btn btn-outline-light btn-social text-light" href="<?php echo esc_url($fu_twitter);?>"><i class="fab fa-twitter"></i></a>
									<?php

								}
								if($fu_youtube){
									?>
									<a class="btn btn-outline-light btn-social text-light" href="<?php echo esc_url($fu_youtube);?>"><i class="fab fa-youtube"></i></a>
									<?php

								}
								if($fu_linkedin){
									?>
									<a class="btn btn-outline-light btn-social text-light" href="<?php echo esc_url($fu_linkedin);?>"><i class="fab fa-linkedin-in"></i></a>
									<?php

								}
								if($fu_instagram){
									?>
									<a class="btn btn-outline-light btn-social text-light" href="<?php echo esc_url($fu_instagram);?>"><i class="fa-brands fa-instagram"></i></a>
									<?php

								}
							?>
						</div>
					</div>
					<?php
						$fo_opening_hours_title = $carservice_option['fo_opening_hours_title'];
						$fo_opening_days = $carservice_option['fo_opening_days'];
						$fo_opening_hours = $carservice_option['fo_opening_hours'];

						if($fo_opening_hours_title){
							?>
								<div class="col-lg-3 col-md-6">
									<h4 class="text-light mb-4"><?php echo esc_html( $fo_opening_hours_title);?></h4>
									<h6 class="text-light"><?php echo esc_html($fo_opening_days);?></h6>
									<p class="text-light mb-4"><?php echo esc_html($fo_opening_hours);?></p>							
								</div>
							<?php
						}
						
						$fo_services_title = $carservice_option['fo_services_title'];
						$fo_service1 = $carservice_option['fo_service1'];
						$fo_service_link1 = $carservice_option['fo_service_link1'];
						$fo_service2 = $carservice_option['fo_service2'];
						$fo_service_link2 = $carservice_option['fo_service_link2'];
						$fo_service3 = $carservice_option['fo_service3'];
						$fo_service_link3 = $carservice_option['fo_service_link3'];
						$fo_service4 = $carservice_option['fo_service4'];
						$fo_service_link4 = $carservice_option['fo_service_link4'];
						$fo_service5 = $carservice_option['fo_service5'];
						$fo_service_link5 = $carservice_option['fo_service_link5'];

					?>

					<div class="col-lg-3 col-md-6">
						<?php
						if($fo_services_title){
							?>
							<h4 class="text-light mb-4"><?php echo esc_html($fo_services_title);?></h4>
							<?php
						}
						if($fo_service1){
							?>
							<a class="btn btn-link text-light" href="<?php echo esc_url($fo_service_link1);?>"><?php echo esc_html($fo_service1);?></a>
							<?php
						}
						if($fo_service2){
							?>
							<a class="btn btn-link text-light" href="<?php echo esc_url($fo_service_link2);?>"><?php echo esc_html($fo_service2);?></a>
							<?php
						}
						if($fo_service3){
							?>
							<a class="btn btn-link text-light" href="<?php echo esc_url($fo_service_link3);?>"><?php echo esc_html($fo_service3);?></a>
							<?php
						}
						if($fo_service4){
							?>
							<a class="btn btn-link text-light" href="<?php echo esc_url($fo_service_link4);?>"><?php echo esc_html($fo_service4);?></a>
							<?php
						}
						if($fo_service5){
							?>
							<a class="btn btn-link text-light" href="<?php echo esc_url($fo_service_link5);?>"><?php echo esc_html($fo_service5);?></a>
							<?php
						}
						?>
					</div>
						<?php
							$fo_newsletter_title = $carservice_option['fo_newsletter_title'];
							$fo_newsletter_desc = $carservice_option['fo_newsletter_desc'];
							$fo_newsletter_form = $carservice_option['fo_newsletter_form'];
						?>
					<div class="col-lg-3 col-md-6">
						<?php
						if($fo_newsletter_title){
							?>
								<h4 class="text-light mb-4"><?php echo esc_html( $fo_newsletter_title );?></h4>
							<?php
						}
						if($fo_newsletter_desc){
							?>
								<p class="text-light"><?php echo esc_html( $fo_newsletter_desc );?></p>
							<?php
						}
						?>
						<div class="position-relative mx-auto" style="max-width: 400px;">
						<?php
						if($fo_newsletter_form){
							echo do_shortcode($fo_newsletter_form);	
						}
						?>
						<!-- <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
							<button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button> -->
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="copyright">
					<div class="row">
						<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
							<p>Copyright ©<?php echo esc_html(get_the_date('Y'));?><strong><?php echo esc_html(get_bloginfo('name'));?>.</strong>All Rights Reserved. BY <a href="https://github.com/skshami" target="_blank"><strong>skshami</strong></a></p>
						</div>
						<div class="col-md-6 text-center text-md-end col-sm-8">							
							<?php
								wp_nav_menu( array(
									'theme_location'    => 'footer_menu',
									'container'         => 'div',
									'container_class'   => 'footer-menu',
									'menu_class'		=> 'text-light'							
								) );
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer End -->
	</footer>

	<!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>