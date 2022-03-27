<?php
/**
 * Enqueue scripts and styles.
 */
function carservice_scripts() {
    // Google Web Fonts
	wp_enqueue_style( 'carservice-fonts','//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap', array(),false);
    
    //Icon Font Stylesheet
	wp_enqueue_style( 'carservice-all','//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css', array(),_S_VERSION);
	wp_enqueue_style( 'carservice-bootstrap-icons','//cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css', array(),_S_VERSION);
    
    //Libraries Stylesheet
	wp_enqueue_style( 'carservice-animate', get_template_directory_uri() . '/lib/animate/animate.min.css', array(), '3.5.2' );
	wp_enqueue_style( 'carservice-owlcarousel', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css', array(), '2.3.4' );
	wp_enqueue_style( 'carservice-owl-theme-default', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.theme.default.min.css', array(), '2.3.4' );
	wp_enqueue_style( 'carservice-tempusdominus', get_template_directory_uri() . '/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css', array(), '5.1.2' );
	
    //Theme Optional stylesheet
    wp_enqueue_style( 'carservice-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'carservice-style', 'rtl', 'replace' );

    //Customized Bootstrap Stylesheet
    wp_enqueue_style( 'carservice-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.0.0' );
   
    //Template Stylesheet
    wp_enqueue_style( 'carservice-main', get_template_directory_uri(). '/css/style.css', array(), _S_VERSION );
	
    //Optional Scripts
    wp_enqueue_script( 'carservice-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    
    //JavaScript Libraries
	wp_enqueue_script( 'carservice-bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.0.0', true );
	wp_enqueue_script( 'carservice-wow', get_template_directory_uri() . '/lib/wow/wow.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'carservice-easing', get_template_directory_uri() . '/lib/easing/easing.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'carservice-owlcarousel', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array('jquery'), '2.3.4', true );
	wp_enqueue_script( 'carservice-waypoints', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'carservice-counterup', get_template_directory_uri() . '/lib/counterup/counterup.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'carservice-moment', get_template_directory_uri() . '/lib/tempusdominus/js/moment.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'carservice-moment-timezone', get_template_directory_uri() . '/lib/tempusdominus/js/moment-timezone.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'carservice-tempusdominus', get_template_directory_uri() . '/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'carservice-main', get_template_directory_uri() . '/js/main.js', array('jquery'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'carservice_scripts' );