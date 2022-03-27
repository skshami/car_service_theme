<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = 'carservice_option';
    
    $theme = wp_get_theme(); // For use with some settings. Not necessary.


    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( 'Theme Options', 'carservice' ),
        'page_title'           => esc_html__('Theme Options', 'carservice' ),
        'customizer'           => true,
        'dev_mode'             => false,
        'menu_icon'            => 'dashicons-screenoptions',
        'page_priority'        => 59,

    );

    Redux::setArgs( $opt_name, $args );

    //Top Header
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Top Header', 'carservice' ),
        'id'     => 'top_header',
        'desc'   => esc_html__( 'Top Header fields, You can change here!', 'carservice' ),
        'icon'   => 'el el-credit-card',
        'fields' => array(
            array(
                'id'       => 'top_address',
                'type'     => 'text',
                'title'    => esc_html__( 'Address', 'carservice' ),
                'desc'     => esc_html__( 'Write here Workshop Address.', 'carservice' ),
                'subtitle' => esc_html__( 'Add your workshop location.', 'carservice' ),
                'default'  => esc_html__( '123 Street, New York, USA', 'carservice' ),
                
            ),
            array(
                'id'       => 'work_hour',
                'type'     => 'text',
                'title'    => esc_html__( 'Work Hour', 'carservice' ),
                'desc'     => esc_html__( 'Write here Your Work Hour.', 'carservice' ),
                'subtitle' => esc_html__( 'Add your work hour.', 'carservice' ),
                'default'  => esc_html__( 'Mon - Fri : 09.00 AM - 09.00 PM', 'carservice' ),
                
            ),
            array(
                'id'       => 'phone_number',
                'type'     => 'text',
                'title'    => esc_html__( 'Phone', 'carservice' ),
                'desc'     => esc_html__( 'Write here Your Phone Number.', 'carservice' ),
                'subtitle' => esc_html__( 'Add your Phone Number.', 'carservice' ),
                'default'  => esc_html__( '+012 345 6789', 'carservice' ),
                
            ),
            array(
                'id'       => 'get_quote_text',
                'type'     => 'text',
                'title'    => esc_html__( 'Get a Quote text', 'carservice' ),
                'desc'     => esc_html__( 'Write here Get a Quote Contact menu text.', 'carservice' ),
                'subtitle' => esc_html__( 'Add your Get a Quote Contact text', 'carservice' ),
                'default'  => esc_html__( 'Get a Quote', 'carservice' ),
                
            ),
            array(
                'id'       => 'get_quote',
                'type'     => 'text',
                'title'    => esc_html__( 'Get a Quote link', 'carservice' ),
                'desc'     => esc_html__( 'Write here Get a Quote Contact menu Link', 'carservice' ),
                'subtitle' => esc_html__( 'Add your Get a Quote Contact link', 'carservice' ),
                'placeholder'  => esc_html__( 'https://yoursite.com/contact', 'carservice' ),
                
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Top Header Socials', 'carservice' ),
        'id'     => 'top_header_socials',
        'desc'   => esc_html__( 'Top Header Socials fields, You can change here!', 'carservice' ),
        'icon'   => 'el el-globe',
        'subsection' => true,
        'fields' => array(
            array(
                'id'       => 'facebook_url',
                'type'     => 'text',
                'title'    => esc_html__( 'Facebook', 'carservice' ),
                'desc'     => esc_html__( 'Write here your Facebook Profile link.', 'carservice' ),
                'subtitle' => esc_html__( 'Add your Facebook Profile.', 'carservice' ),
                'default'  => esc_url( 'facebook.com' ),
                
            ),
            array(
                'id'       => 'twitter_url',
                'type'     => 'text',
                'title'    => esc_html__( 'Twitter', 'carservice' ),
                'desc'     => esc_html__( 'Write here your Twitter Profile link.', 'carservice' ),
                'subtitle' => esc_html__( 'Add your Twitter Profile.', 'carservice' ),
                'default'  => esc_url( 'twitter.com' ),
                
            ),
            array(
                'id'       => 'linkedin_url',
                'type'     => 'text',
                'title'    => esc_html__( 'Linkedin', 'carservice' ),
                'desc'     => esc_html__( 'Write here your Linkedin Profile link.', 'carservice' ),
                'subtitle' => esc_html__( 'Add your Linkedin Profile.', 'carservice' ),
                'default'  => esc_url( 'linkedin.com' ),
                
            ),
            array(
                'id'       => 'instagram_url',
                'type'     => 'text',
                'title'    => esc_html__( 'Instagram', 'carservice' ),
                'desc'     => esc_html__( 'Write here your Instagram Profile link.', 'carservice' ),
                'subtitle' => esc_html__( 'Add your Instagram Profile.', 'carservice' ),
                'default'  => esc_url( 'instagram.com' ),
                
            ),
          
        )
    ) );

    //About us
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'About US', 'carservice' ),
        'id'     => 'about_us',
        'desc'   => esc_html__( 'About us fields, You can change here!', 'carservice' ),
        'icon'   => 'el el-website-alt',
        'customizer' => false,
        'fields' => array(
            array(
                'id'       => 'about_subtitle',
                'type'     => 'text',
                'title'    => esc_html__( 'About subtitle', 'carservice' ),
                'desc'     => esc_html__( 'Write here About Title.', 'carservice' ),
                'subtitle' => esc_html__( 'Add your About Title.', 'carservice' ),
                'default'  => esc_html__( '//About us//', 'carservice' ),
                
            ),
            array(
                'id'       => 'about_title',
                'type'     => 'text',
                'title'    => esc_html__( 'About Title', 'carservice' ),
                'desc'     => esc_html__( 'Write here About Title.', 'carservice' ),
                'subtitle' => esc_html__( 'Add your About Title.', 'carservice' ),
                'default'  => esc_html__( 'CarServ Is The Best Place For Your Auto Care', 'carservice' ),
                
            ),
            array(
                'id'       => 'about_desc',
                'type'     => 'textarea',
                'title'    => esc_html__( 'About Description', 'carservice' ),
                'desc'     => esc_html__( 'Write here About Description.', 'carservice' ),
                'subtitle' => esc_html__( 'Add your About Description.', 'carservice' ),
                'default'  => esc_html__( 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet', 'carservice' ),
                
            ),
            array(
                'id'       => 'about_btn_text',
                'type'     => 'text',
                'title'    => esc_html__( 'About Button Text', 'carservice' ),
                'desc'     => esc_html__( 'Write here About  Button Text.', 'carservice' ),
                'subtitle' => esc_html__( 'Add your About  Button Text.', 'carservice' ),
                'default'  => esc_html__( 'Read more', 'carservice' ),
                
            ),
            array(
                'id'       => 'about_btn_link',
                'type'     => 'text',
                'title'    => esc_html__( 'About Button Link', 'carservice' ),
                'desc'     => esc_html__( 'Write here About  Button Link.', 'carservice' ),
                'subtitle' => esc_html__( 'Add your About  Button Link.', 'carservice' ),
                'default'  => esc_url('https://yoursite.com/about-us'),
                
            ),

            array(
                    'id'       => 'about_img',
                    'type'     => 'media', 
                    'url'      => false,
                    'title'    => esc_html__('About Image', 'carservice'),
                    'desc'     => esc_html__('You can Upload here About image', 'carservice'),
                    'subtitle' => esc_html__('Upload here any About image', 'carservice'),
                    'default'  => array(
                       'url'=> get_template_directory_uri().'/img/about.jpg'
                    ),
            )
        )
        
    ) 
);
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'About featured', 'carservice' ),
    'id'     => 'about_featured',
    'desc'   => esc_html__( 'About featured fields, You can change here!', 'carservice' ),
    'icon'   => 'el el-th-list',
    'subsection' => true,
    'customizer' => false,
    'fields' => array(
        array(
            'id'       => 'experience_years',
            'type'     => 'text',
            'title'    => esc_html__( 'Work Experience Years', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Work Experience Years', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Work Experience Years', 'carservice' ),
            'default'  => esc_html__( '15', 'carservice' ),
            
        ),
        array(
            'id'       => 'about_featured_title_1',
            'type'     => 'text',
            'title'    => esc_html__( 'About featured Title 1', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Work Experience Years', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Work Experience Years', 'carservice' ),
            'default'  => esc_html__( 'Professional & Expert', 'carservice' ),
            
        ),
        array(
            'id'       => 'about_featured_desc_1',
            'type'     => 'text',
            'title'    => esc_html__( 'About featured description 1', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Work Experience Years', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Work Experience Years', 'carservice' ),
            'default'  => esc_html__( 'Diam dolor diam ipsum sit amet diam et eos', 'carservice' ),
            
        ),
        array(
            'id'       => 'about_featured_title_2',
            'type'     => 'text',
            'title'    => esc_html__( 'About featured Title 2', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Work Experience Years', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Work Experience Years', 'carservice' ),
            'default'  => esc_html__( 'Quality Servicing Center', 'carservice' ),
            
        ),
        array(
            'id'       => 'about_featured_desc_2',
            'type'     => 'text',
            'title'    => esc_html__( 'About featured description 2', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Work Experience Years', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Work Experience Years', 'carservice' ),
            'default'  => esc_html__( 'Diam dolor diam ipsum sit amet diam et eos', 'carservice' ),
            
        ),
        array(
            'id'       => 'about_featured_title_3',
            'type'     => 'text',
            'title'    => esc_html__( 'About featured Title 3', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Work Experience Years', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Work Experience Years', 'carservice' ),
            'default'  => esc_html__( 'Awards Winning Workers', 'carservice' ),
            
        ),
        array(
            'id'       => 'about_featured_desc_3',
            'type'     => 'text',
            'title'    => esc_html__( 'About featured description 3', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Work Experience Years', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Work Experience Years', 'carservice' ),
            'default'  => esc_html__( 'Diam dolor diam ipsum sit amet diam et eos', 'carservice' ),
            
        ),
      
    )
) );

//Contact us
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Contact US', 'carservice' ),
    'id'     => 'contact_us_sec',
    'desc'   => esc_html__( 'Contact US Page fields, You can change here!', 'carservice' ),
    'icon'   => 'el el-envelope',
    'customizer' => false,
    'fields' => array(
        array(
            'id'       => 'contact_us_subtitle',
            'type'     => 'text',
            'title'    => esc_html__( 'Contact US Subtitle', 'carservice' ),
            'default'  => esc_html__( '//Contact US//', 'carservice' ),
        ),
        
        array(
            'id'       => 'contact_us_title',
            'type'     => 'text',
            'title'    => esc_html__( 'Contact US Title', 'carservice' ),
            'default'  => esc_html__( 'Contact For Any Query', 'carservice' ),
        ),
        array(
            'id'       => 'contact_us_sec_desc',
            'type'     => 'textarea',
            'title'    => esc_html__( 'Contact US Descpition', 'carservice' ),
        ),
        array(
            'id'       => 'contact_us_mail1_text',
            'type'     => 'text',
            'title'    => esc_html__( '1st Mail Section Title', 'carservice' ),
            'default'  => esc_html__( '// Booking //', 'carservice' ),
        ),
        array(
            'id'       => 'contact_us_mail1',
            'type'     => 'text',
            'title'    => esc_html__( '1st Mail', 'carservice' ),
            'default'  => esc_html( 'book@example.com' ),
        ),
        
        array(
            'id'       => 'contact_us_mail2_text',
            'type'     => 'text',
            'title'    => esc_html__( '2nd Mail Section Title', 'carservice' ),
            'default'  => esc_html__( '// General //', 'carservice' ),
        ),
        array(
            'id'       => 'contact_us_mail2',
            'type'     => 'text',
            'title'    => esc_html__( '2nd Mail', 'carservice' ),
            'default'  => esc_html( 'info@example.com' ),
        ),
        
        array(
            'id'       => 'contact_us_mail3_text',
            'type'     => 'text',
            'title'    => esc_html__( '3rd Mail Section Title', 'carservice' ),
            'default'  => esc_html__( '// Technical //', 'carservice' ),
        ),
        array(
            'id'       => 'contact_us_mail3',
            'type'     => 'text',
            'title'    => esc_html__( '3rd Mail', 'carservice' ),
            'default'  => esc_html( 'tech@example.com' ),
        ),
        
        array(
            'id'       => 'contact_us_map',
            'type'     => 'textarea',
            'title'    => esc_html__( 'Google Maps Embed code', 'carservice' ),
            'desc'   => esc_html__( 'Google maps Embed Code Only [src] copy and paste here!', 'carservice' ),
            'default'=> esc_url('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14608.036944846455!2d90.36710721957706!3d23.747050044465354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b33cffc3fb%3A0x4a826f475fd312af!2sDhanmondi%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1648124609534!5m2!1sen!2sbd')
            
        ),
        array(
            'id'       => 'contact_form_shortcode',
            'type'     => 'text',
            'title'    => esc_html__( 'Contact Form Shortcode', 'carservice' ),
        ),
    )
) );



//Service
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Services', 'carservice' ),
    'id'     => 'services',
    'desc'   => esc_html__( 'Our Services fields, You can change here!', 'carservice' ),
    'icon'   => 'el el-wrench',
    'customizer' => false,
    'customizer' => false,
    'fields' => array(
        array(
            'id'       => 'services_sec_title',
            'type'     => 'text',
            'title'    => esc_html__( 'Services Section Subtitle', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Services Section Title', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Services Section Title', 'carservice' ),
            'default'  => esc_html__( '//Our Services//', 'carservice' ),
        ),
        array(
            'id'       => 'services_sec_subtitle',
            'type'     => 'text',
            'title'    => esc_html__( 'Services Section Title', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Services Title', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Services Title', 'carservice' ),
            'default'  => esc_html__( 'Explore Our Services', 'carservice' ),
        ),
      
    )
) );
//subsection 1
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Service One', 'carservice' ),
    'id'     => 'services_sub_sec1',
    'desc'   => esc_html__( 'Our Services fields, You can change here!', 'carservice' ),
    'icon'   => 'el el-wrench',
    'subsection'=> true,
    'customizer' => false,
    'fields' => array(
        array(
            'id'       => 'services_title_one_icon',
            'type'     => 'text',
            'title'    => esc_html__( 'Services title icon', 'carservice' ),
            'desc'     => esc_html__( 'Add here Font-awesome icon', 'carservice' ),
            'subtitle' => esc_html__( 'Change your Services icon', 'carservice' ),
            'default'  => esc_html('fa fa-car-side'),
        ),
        array(
            'id'       => 'services_title_one',
            'type'     => 'text',
            'title'    => esc_html__( 'Services title', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Services subtitle', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Services subtitle', 'carservice' ),
            'default'  => esc_html__( 'Diagnostic Test', 'carservice' ),
        ),
        array(
            'id'       => 'services_subtitle_one',
            'type'     => 'text',
            'title'    => esc_html__( 'Services subtitle', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Services subtitle', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Services subtitle', 'carservice' ),
            'default'  => esc_html__( '15 Years Of Experience In Auto Servicing', 'carservice' ),
        ),
        array(
            'id'       => 'services_desc_one',
            'type'     => 'editor',
            'title'    => esc_html__( 'Services description', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Services description', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Services description', 'carservice' ),
            'default'  => esc_html__( 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. 
            Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, s
            ed stet lorem sit clita duo justo magna dolore erat amet','carservice'),
            'args'     => array(
                'teeny'            => true,
                'textarea_rows'    => 10
            )
        ),
        array(
            'id'       => 'service_img_one',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__( 'Service section image', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Service section image', 'carservice' ),
            'default'  => array(
                'url' => get_template_directory_uri( ) . '/img/service-1.jpg'
            )
            
        ),
        array(
            'id'       => 'services_one_btn_text',
            'type'     => 'text',
            'title'    => esc_html__( 'Service Button text', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Service Button text', 'carservice' ),
            'subtitle' => esc_html__( 'Change your Service Button text', 'carservice' ),
            'default'  => esc_html__( 'Read More', 'carservice' ),
        ),
        array(
            'id'       => 'services_one_btn_link',
            'type'     => 'text',
            'title'    => esc_html__( 'Service Button link', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Service Button link', 'carservice' ),
            'subtitle' => esc_html__( 'Change your Service Button link', 'carservice' ),
            'default'  => esc_url( 'http://yoursite.com/services'),
        ),
      
    )
) );
//subsection 2
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Service Two', 'carservice' ),
    'id'     => 'services_sub_sec2',
    'desc'   => esc_html__( 'Our Services fields, You can change here!', 'carservice' ),
    'icon'   => 'el el-wrench',
    'subsection'=> true,
    'customizer' => false,
    'fields' => array(
        array(
            'id'       => 'services_title2_icon',
            'type'     => 'text',
            'title'    => esc_html__( 'Services title icon', 'carservice' ),
            'desc'     => esc_html__( 'Add here Font-awesome icon', 'carservice' ),
            'subtitle' => esc_html__( 'Change your Services icon', 'carservice' ),
            'default'  => esc_html('fa fa-car'),
        ),
        array(
            'id'       => 'services_title2',
            'type'     => 'text',
            'title'    => esc_html__( 'Services title', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Services subtitle', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Services subtitle', 'carservice' ),
            'default'  => esc_html__( 'Engine Servicing', 'carservice' ),
        ),
        array(
            'id'       => 'services_subtitle2',
            'type'     => 'text',
            'title'    => esc_html__( 'Services subtitle', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Services subtitle', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Services subtitle', 'carservice' ),
            'default'  => esc_html__( '15 Years Of Experience In Auto Servicing', 'carservice' ),
        ),
        array(
            'id'       => 'services_desc2',
            'type'     => 'editor',
            'title'    => esc_html__( 'Services description', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Services description', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Services description', 'carservice' ),
            'default'  => esc_html__( 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. 
            Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, s
            ed stet lorem sit clita duo justo magna dolore erat amet','carservice'),
            'args'     => array(
                'teeny'            => true,
                'textarea_rows'    => 10
            )
        ),
        array(
            'id'       => 'service_img2',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__( 'Service section image', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Service section image', 'carservice' ),
            'default'  => array(
                'url' => get_template_directory_uri( ) . '/img/service-2.jpg'
            )
            
        ),
        array(
            'id'       => 'services2_btn_text',
            'type'     => 'text',
            'title'    => esc_html__( 'Service Button text', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Service Button text', 'carservice' ),
            'subtitle' => esc_html__( 'Change your Service Button text', 'carservice' ),
            'default'  => esc_html__( 'Read More', 'carservice' ),
        ),
        array(
            'id'       => 'services2_btn_link',
            'type'     => 'text',
            'title'    => esc_html__( 'Service Button link', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Service Button link', 'carservice' ),
            'subtitle' => esc_html__( 'Change your Service Button link', 'carservice' ),
            'default'  => esc_url( 'http://yoursite.com/services'),
        ),
      
    )
) );
//subsection 3
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Service Three', 'carservice' ),
    'id'     => 'services_sub_sec3',
    'desc'   => esc_html__( 'Our Services fields, You can change here!', 'carservice' ),
    'icon'   => 'el el-wrench',
    'subsection'=> true,
    'customizer' => false,
    'fields' => array(
        array(
            'id'       => 'services_title3_icon',
            'type'     => 'text',
            'title'    => esc_html__( 'Services title icon', 'carservice' ),
            'desc'     => esc_html__( 'Add here Font-awesome icon', 'carservice' ),
            'subtitle' => esc_html__( 'Change your Services icon', 'carservice' ),
            'default'  => esc_html('fa fa-cog'),
        ),
        array(
            'id'       => 'services_title3',
            'type'     => 'text',
            'title'    => esc_html__( 'Services title', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Services subtitle', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Services subtitle', 'carservice' ),
            'default'  => esc_html__( 'Tires Replacement', 'carservice' ),
        ),
        array(
            'id'       => 'services_subtitle3',
            'type'     => 'text',
            'title'    => esc_html__( 'Services subtitle', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Services subtitle', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Services subtitle', 'carservice' ),
            'default'  => esc_html__( '15 Years Of Experience In Auto Servicing', 'carservice' ),
        ),
        array(
            'id'       => 'services_desc3',
            'type'     => 'editor',
            'title'    => esc_html__( 'Services description', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Services description', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Services description', 'carservice' ),
            'default'  => esc_html__( 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. 
            Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, s
            ed stet lorem sit clita duo justo magna dolore erat amet','carservice'),
            'args'     => array(
                'teeny'            => true,
                'textarea_rows'    => 10
            )
        ),
        array(
            'id'       => 'service_img3',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__( 'Service section image', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Service section image', 'carservice' ),
            'default'  => array(
                'url' => get_template_directory_uri( ) . '/img/service-3.jpg'
            )
            
        ),
        array(
            'id'       => 'services3_btn_text',
            'type'     => 'text',
            'title'    => esc_html__( 'Service Button text', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Service Button text', 'carservice' ),
            'subtitle' => esc_html__( 'Change your Service Button text', 'carservice' ),
            'default'  => esc_html__( 'Read More', 'carservice' ),
        ),
        array(
            'id'       => 'services3_btn_link',
            'type'     => 'text',
            'title'    => esc_html__( 'Service Button link', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Service Button link', 'carservice' ),
            'subtitle' => esc_html__( 'Change your Service Button link', 'carservice' ),
            'default'  => esc_url( 'http://yoursite.com/services'),
        ),
      
    )
) );
//subsection 4
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Service Four', 'carservice' ),
    'id'     => 'services_sub_sec4',
    'desc'   => esc_html__( 'Our Services fields, You can change here!', 'carservice' ),
    'icon'   => 'el el-wrench',
    'subsection'=> true,
    'customizer' => false,
    'fields' => array(
        array(
            'id'       => 'services_title4_icon',
            'type'     => 'text',
            'title'    => esc_html__( 'Services title icon', 'carservice' ),
            'desc'     => esc_html__( 'Add here Font-awesome icon', 'carservice' ),
            'subtitle' => esc_html__( 'Change your Services icon', 'carservice' ),
            'default'  => esc_html('fa fa-oil-can'),
        ),
        array(
            'id'       => 'services_title4',
            'type'     => 'text',
            'title'    => esc_html__( 'Services title', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Services subtitle', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Services subtitle', 'carservice' ),
            'default'  => esc_html__( 'Oil Changing', 'carservice' ),
        ),
        array(
            'id'       => 'services_subtitle4',
            'type'     => 'text',
            'title'    => esc_html__( 'Services subtitle', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Services subtitle', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Services subtitle', 'carservice' ),
            'default'  => esc_html__( '15 Years Of Experience In Auto Servicing', 'carservice' ),
        ),
        array(
            'id'       => 'services_desc4',
            'type'     => 'editor',
            'title'    => esc_html__( 'Services description', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Services description', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Services description', 'carservice' ),
            'default'  => esc_html__( 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. 
            Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, s
            ed stet lorem sit clita duo justo magna dolore erat amet','carservice'),
            'args'     => array(
                'teeny'            => true,
                'textarea_rows'    => 10
            )
        ),
        array(
            'id'       => 'service_img4',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__( 'Service section image', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Service section image', 'carservice' ),
            'default'  => array(
                'url' => get_template_directory_uri( ) . '/img/service-4.jpg'
            )
            
        ),
        array(
            'id'       => 'services4_btn_text',
            'type'     => 'text',
            'title'    => esc_html__( 'Service Button text', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Service Button text', 'carservice' ),
            'subtitle' => esc_html__( 'Change your Service Button text', 'carservice' ),
            'default'  => esc_html__( 'Read More', 'carservice' ),
        ),
        array(
            'id'       => 'services4_btn_link',
            'type'     => 'text',
            'title'    => esc_html__( 'Service Button link', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Service Button link', 'carservice' ),
            'subtitle' => esc_html__( 'Change your Service Button link', 'carservice' ),
            'default'  => esc_url( 'http://yoursite.com/services'),
        ),
      
    )
) );

//Booking
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Booking', 'carservice' ),
    'id'     => 'service_book',
    'desc'   => esc_html__( 'Service Booking section fields, You can change here!', 'carservice' ),
    'icon'   => 'el el-wrench-alt',
    'customizer' => false,
    'fields' => array(
        array(
            'id'       => 'service_book_sec_title',
            'type'     => 'text',
            'title'    => esc_html__( 'Service Book Section Title', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Services Section Title', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Service Book Section Title', 'carservice' ),
            'default'  => esc_html__( 'Certified and Award Winning Car Repair Service Provider', 'carservice' ),
        ),
        array(
            'id'       => 'service_book_sec_desc',
            'type'     => 'textarea',
            'title'    => esc_html__( 'Service Book Section Description', 'carservice' ),
            'desc'     => esc_html__( 'Write here Service Book Section Description', 'carservice' ),
            'subtitle' => esc_html__( 'Add Service Book Section Description', 'carservice' ),
            'default'  => esc_html__( 'Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.', 'carservice' ),
        ),
        array(
            'id'       => 'service_book_sec_bg',
            'type'     => 'media',
            'url'      => false,
            'title'    => esc_html__( 'Service Book Section background', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Services Section background', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Service Book Section background', 'carservice' ),
            'default'  => array(
                'url' => get_template_directory_uri( ) . '/img/carousel-bg-2.jpg'
            )
        ),
      
    )
) );
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Booking Form', 'carservice' ),
    'id'     => 'service_book_form',
    'desc'   => esc_html__( 'Service Booking Form fields, You can change here!', 'carservice' ),
    'icon'   => 'el el-shopping-cart-sign',
    'subsection'=> true,
    'customizer' => false,
    'fields' => array(
        array(
            'id'       => 'booking_form_title',
            'type'     => 'text',
            'title'    => esc_html__( 'Service booking form Title', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Services booking form Title', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Service booking form Title', 'carservice' ),
            'default'  => esc_html__( 'Book For A Service', 'carservice' ),
        ),
        array(
            'id'       => 'booking_form_shortcode',
            'type'     => 'text',
            'title'    => esc_html__( 'Service booking form Shortcode', 'carservice' ),
            'desc'     => esc_html__( 'Add here your Services booking form Shortcode', 'carservice' ),
        ),
        
        
      
    )
) );
//booking  
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Booking Page Section', 'carservice' ),
    'id'     => 'booking_call_to_action',
    'desc'   => esc_html__( 'Booking Page Call to Action fields, You can change here!', 'carservice' ),
    'icon'   => 'el el-phone-alt',
    'subsection'=> true,
    'customizer' => false,
    'fields' => array(
        array(
            'id'       => 'booking_call_subtitle',
            'type'     => 'text',
            'title'    => esc_html__( 'Call to Action Subtitle', 'carservice' ),
            'default'  => esc_html__( '//Call to Action//', 'carservice' ),
        ),
        array(
            'id'       => 'booking_call_title',
            'type'     => 'text',
            'title'    => esc_html__( 'Call to Action Title', 'carservice' ),
            'default'  => esc_html__( 'Have Any Pre Booking Question?', 'carservice' ),
        ),
       
        array(
            'id'       => 'booking_call_desc',
            'type'     => 'textarea',
            'title'    => esc_html__( 'Call to Action Description', 'carservice' ),
            
        ),
        array(
            'id'       => 'booking_call_phone',
            'type'     => 'text',
            'title'    => esc_html__( 'Contact Phone Number', 'carservice' ),
            'default'  => esc_html__( '+012 345 6789', 'carservice' ),
            
        ),
        array(
            'id'       => 'booking_contact_btn_text',
            'type'     => 'text',
            'title'    => esc_html__( 'Contact Buttton Text', 'carservice' ),
            'default'  => esc_html__( 'Contact us', 'carservice' ),
            
        ),
       
        array(
            'id'       => 'booking_call_contact_btn_link',
            'type'     => 'text',
            'title'    => esc_html__( 'Contact Buttton Link', 'carservice' ),
            'default'  => esc_url('https://yoursite.com/contact')
            
        ),
       
       
      
    )
) );
//featured countdown
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Countdown', 'carservice' ),
    'id'     => 'featured_countdown',
    'desc'   => esc_html__( 'featured countdown fields, You can change here!', 'carservice' ),
    'icon'   => 'el el-cc',
    'customizer' => false,
    'fields' => array(
        array(
            'id'       => 'countdown_bg',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__( 'Countdown background', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Countdown background', 'carservice' ),
            'default'  => array(
                'url' => get_template_directory_uri( ) . '/img/carousel-bg-1.jpg'
            )
            
        ),

        array(
            'id'       => 'countdown_icon',
            'type'     => 'text',
            'title'    => esc_html__( '1st Countdown icon', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Countdown icon', 'carservice' ),
            'default'  => esc_html('fa fa-check'),
            
        ),
        array(
            'id'       => 'countdown',
            'type'     => 'text',
            'title'    => esc_html__( '1st Countdown', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Countdown number', 'carservice' ),
            'default'  => esc_html__('1234','carservice'),
            
        ),
        array(
            'id'       => 'countdown_title',
            'type'     => 'text',
            'title'    => esc_html__( '1st Countdown title', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Countdown title', 'carservice' ),
            'default'  => esc_html__('Years Experience','carservice'),
            
        ),
        //countdown 2
        array(
            'id'       => 'countdown_icon2',
            'type'     => 'text',
            'title'    => esc_html__( '2nd Countdown icon', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Countdown icon', 'carservice' ),
            'default'  => esc_html('fa fa-users-cog'),
            
        ),
        array(
            'id'       => 'countdown2',
            'type'     => 'text',
            'title'    => esc_html__( '2nd Countdown', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Countdown number', 'carservice' ),
            'default'  => esc_html__('1234','carservice'),
            
        ),
        array(
            'id'       => 'countdown_title2',
            'type'     => 'text',
            'title'    => esc_html__( '2nd Countdown title', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Countdown title', 'carservice' ),
            'default'  => esc_html__('Expert Technicians','carservice'),
            
        ),
        //countdown 3
        array(
            'id'       => 'countdown_icon3',
            'type'     => 'text',
            'title'    => esc_html__( '3rd Countdown icon', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Countdown icon', 'carservice' ),
            'default'  => esc_html('fa fa-users'),
            
        ),
        array(
            'id'       => 'countdown3',
            'type'     => 'text',
            'title'    => esc_html__( '3rd Countdown', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Countdown number', 'carservice' ),
            'default'  => esc_html__('1234','carservice'),
            
        ),
        array(
            'id'       => 'countdown_title3',
            'type'     => 'text',
            'title'    => esc_html__( '3rd Countdown title', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Countdown title', 'carservice' ),
            'default'  => esc_html__('Satisfied Clients','carservice'),
            
        ),
        //countdown 4
       
        array(
            'id'       => 'countdown_icon4',
            'type'     => 'text',
            'title'    => esc_html__( '4th Countdown icon', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Countdown icon', 'carservice' ),
            'default'  => esc_html('fa fa-car'),
            
        ),
        array(
            'id'       => 'countdown4',
            'type'     => 'text',
            'title'    => esc_html__( '4th Countdown', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Countdown number', 'carservice' ),
            'default'  => esc_html__('1234','carservice'),
            
        ),
        array(
            'id'       => 'countdown_title4',
            'type'     => 'text',
            'title'    => esc_html__( '4th Countdown title', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Countdown title', 'carservice' ),
            'default'  => esc_html__('Compleate Projects','carservice'),
            
        ),

    
    )
    
    ) 
);


//Member Section
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Member', 'carservice' ),
    'id'     => 'member-section',
    'desc'   => esc_html__( 'Member Section fields, You can change here!', 'carservice' ),
    'icon'   => 'el el-group-alt',
    'customizer' => false,
    'fields' => array(
        array(
            'id'       => 'member-sec-subtitle',
            'type'     => 'text',
            'title'    => esc_html__( 'Member Section Subtitle', 'carservice' ),
            'desc'     => esc_html__( 'Write here Member Section Subtitle', 'carservice' ),
            'subtitle' => esc_html__( 'Add Member Section Subtitle', 'carservice' ),
            'default'  => esc_html__( '// Our Technicians //', 'carservice' ),
        ),
        array(
            'id'       => 'member-sec-title',
            'type'     => 'text',
            'title'    => esc_html__( 'Member Section Title', 'carservice' ),
            'desc'     => esc_html__( 'Write here Member Section Title', 'carservice' ),
            'subtitle' => esc_html__( 'Add Member Section Title', 'carservice' ),
            'default'  => esc_html__( 'Our Expert Technicians', 'carservice' ),
        ),
       
      
    )
) );

//testimonials
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Testimonials', 'carservice' ),
    'id'     => 'testimonials',
    'desc'   => esc_html__( 'Our Services fields, You can change here!', 'carservice' ),
    'icon'   => 'el el-comment-alt',
    'customizer' => false,
    'fields' => array(
        array(
            'id'       => 'testimonials_sec_title',
            'type'     => 'text',
            'title'    => esc_html__( 'Testimonials Section title', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Testimonials Section Title', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Testimonials Section Title', 'carservice' ),
            'default'  => esc_html__( '//Our Testimonials//', 'carservice' ),
        ),
        array(
            'id'       => 'testimonials_sec_subtitle',
            'type'     => 'text',
            'title'    => esc_html__( 'Testimonials Section Subtitle', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Testimonials Subitle', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Testimonials Subtitle', 'carservice' ),
            'default'  => esc_html__( 'Our Clients Say!', 'carservice' ),
        ),
      
    )
) );
//Footer Copyright
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Footer', 'carservice' ),
    'id'     => 'footer',
    'desc'   => esc_html__( 'Footer fields, You can change here!', 'carservice' ),
    'icon'   => 'el el-align-center',
    'fields' => array(
        array(  
            'id'               => 'copyright-text',
            'type'             => 'editor',
            'title'            => esc_html__('Copyright Text', 'carservice'), 
            'subtitle'         => esc_html__('Change Copyright text!', 'carservice'),
            'default'          => '© Your Site Name, All Right Reserved. Designed By HTML Codex
            Distributed By: skshami',
            'args'   => array(
                'teeny'            => true,
                'textarea_rows'    => 10)

            
        ),
        array(
            'id'       => 'footer_sec_bg',
            'type'     => 'media',
            'url'      => false,
            'title'    => esc_html__( 'Footer Section background', 'carservice' ),
            'desc'     => esc_html__( 'Write here your Footer Section background', 'carservice' ),
            'subtitle' => esc_html__( 'Add your Footer Section background', 'carservice' ),
            'default'  => array(
                'url' => get_template_directory_uri( ) . '/img/carousel-bg-2.jpg'
            )
        ),
      
    )
) );

Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Address', 'carservice' ),
    'id'     => 'footer_address',
    'desc'   => esc_html__( 'Footer Address fields, You can change here!', 'carservice' ),
    'icon'   => 'el el-address-book',
    'subsection'=> true,
    'fields' => array(
        array(
            'id'       => 'footer_address_sec_title',
            'type'     => 'text',
            'title'    => esc_html__( 'Footer Address Section title', 'carservice' ),
            'default'  => esc_html__( 'Address', 'carservice' ),
        ),
        array(
            'id'       => 'footer_address_location',
            'type'     => 'text',
            'title'    => esc_html__( 'Footer Address location', 'carservice' ),
            'default'  => esc_html__( 'Dhaka,Bangladesh', 'carservice' ),
        ),
        array(
            'id'       => 'footer_address_phone',
            'type'     => 'text',
            'title'    => esc_html__( 'Your Address Phone', 'carservice' ),
            'default'  => esc_html__( '+012 345 67890', 'carservice' ),
        ),
        array(
            'id'       => 'footer_address_mail',
            'type'     => 'text',
            'title'    => esc_html__( 'Your Address Mail', 'carservice' ),
            'default'  => esc_html__( 'info@example.com', 'carservice' ),
        ),
        array(
            'id'       => 'fu_facebook',
            'type'     => 'text',
            'title'    => esc_html__( 'Facebook', 'carservice' ),
            'default'  => esc_url( 'facebook.com'),
        ),
        array(
            'id'       => 'fu_instagram',
            'type'     => 'text',
            'title'    => esc_html__( 'Instagram', 'carservice' ),
            'default'  => esc_url( 'instagram.com' ),
        ),
        array(
            'id'       => 'fu_twitter',
            'type'     => 'text',
            'title'    => esc_html__( 'Twitter', 'carservice' ),
            'default'  => esc_url( 'twitter.com'),
        ),
        array(
            'id'       => 'fu_linkedin',
            'type'     => 'text',
            'title'    => esc_html__( 'Linkedin', 'carservice' ),
            'default'  => esc_url( 'linkedin.com'),
        ),
        array(
            'id'       => 'fu_youtube',
            'type'     => 'text',
            'title'    => esc_html__( 'Youtube', 'carservice' ),
            'default'  => esc_url( 'youtube.com',),
        ),
       
      
    )
) );
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Opening Hours', 'carservice' ),
    'id'     => 'fo_opening_hours',
    'desc'   => esc_html__( 'Footer Opening Hours fields, You can change here!', 'carservice' ),
    'icon'   => 'el el-time',
    'subsection'=> true,
    'fields' => array(
        array(
            'id'       => 'fo_opening_hours_title',
            'type'     => 'text',
            'title'    => esc_html__( 'Opening Hours Section title', 'carservice' ),
            'default'  => esc_html__( 'Opening Hours', 'carservice' ),
        ),
        array(
            'id'       => 'fo_opening_days',
            'type'     => 'text',
            'title'    => esc_html__( 'Opening days', 'carservice' ),
            'desc'     => esc_html__( 'Add Opening days', 'carservice' ),
            'default'  => esc_html__( 'Monday - Friday:', 'carservice' )
        ),
        array(
            'id'       => 'fo_opening_hours',
            'type'     => 'text',
            'title'    => esc_html__( 'Opening time schedule', 'carservice' ),
            'desc'     => esc_html__( 'Add Opening time schedule', 'carservice' ),
            'default'  => esc_html__( '09.00 AM - 09.00 PM', 'carservice' )
        ),
      
    )
) );

Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Footer Services', 'carservice' ),
    'id'     => 'fo_services',
    'desc'   => esc_html__( 'Footer Opening Hours fields, You can change here!', 'carservice' ),
    'icon'   => 'el el-wrench',
    'subsection'=> true,
    'fields' => array(
        array(
            'id'       => 'fo_services_title',
            'type'     => 'text',
            'title'    => esc_html__( 'Footer Services Section title', 'carservice' ),
            'default'  => esc_html__( 'Services', 'carservice' ),
        ),
        array(
            'id'       => 'fo_service1',
            'type'     => 'text',
            'title'    => esc_html__( 'Service one', 'carservice' ),
            'desc'     => esc_html__( 'Add Service Name', 'carservice' ),
            'default'  => esc_html__( 'Service One', 'carservice' ),
        ),
        array(
            'id'       => 'fo_service_link1',
            'type'     => 'text',
            'title'    => esc_html__( 'Service one Link', 'carservice' ),
            'desc'     => esc_html__( 'Add Service post/page Link', 'carservice' ),
        ),
        array(
            'id'       => 'fo_service2',
            'type'     => 'text',
            'title'    => esc_html__( 'Service Two', 'carservice' ),
            'desc'     => esc_html__( 'Add Service Name', 'carservice' ),
            'default'  => esc_html__( 'Service Two', 'carservice' ),
        ),
        array(
            'id'       => 'fo_service_link2',
            'type'     => 'text',
            'title'    => esc_html__( 'Service Two Link', 'carservice' ),
            'desc'     => esc_html__( 'Add Service post/page Link', 'carservice' ),
        ),
      
        array(
            'id'       => 'fo_service3',
            'type'     => 'text',
            'title'    => esc_html__( 'Service Three', 'carservice' ),
            'desc'     => esc_html__( 'Add Service Name', 'carservice' ),
            'default'  => esc_html__( 'Service Three', 'carservice' ),
        ),
        array(
            'id'       => 'fo_service_link3',
            'type'     => 'text',
            'title'    => esc_html__( 'Service Three Link', 'carservice' ),
            'desc'     => esc_html__( 'Add Service post/page Link', 'carservice' ),
        ),
        array(
            'id'       => 'fo_service4',
            'type'     => 'text',
            'title'    => esc_html__( 'Service Four', 'carservice' ),
            'desc'     => esc_html__( 'Add Service Name', 'carservice' ),
            'default'  => esc_html__( 'Service Four', 'carservice' ),
        ),
        array(
            'id'       => 'fo_service_link4',
            'type'     => 'text',
            'title'    => esc_html__( 'Service Four Link', 'carservice' ),
            'desc'     => esc_html__( 'Add Service post/page Link', 'carservice' ),
        ),
        array(
            'id'       => 'fo_service5',
            'type'     => 'text',
            'title'    => esc_html__( 'Service Five', 'carservice' ),
            'desc'     => esc_html__( 'Add Service Name', 'carservice' ),
            'default'  => esc_html__( 'Service Five', 'carservice' ),
        ),
        array(
            'id'       => 'fo_service_link5',
            'type'     => 'text',
            'title'    => esc_html__( 'Service Five Link', 'carservice' ),
            'desc'     => esc_html__( 'Add Service post/page Link', 'carservice' ),
        ),
      
    )
) );
Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Newsletter', 'carservice' ),
    'id'     => 'fo_newsletter',
    'desc'   => esc_html__( 'Footer Opening Hours fields, You can change here!', 'carservice' ),
    'icon'   => 'el el-envelope',
    'subsection'=> true,
    'fields' => array(
        array(
            'id'       => 'fo_newsletter_title',
            'type'     => 'text',
            'title'    => esc_html__( 'Newsletter title', 'carservice' ),
            'default'  => esc_html__( 'Newsletter', 'carservice' ),
        ),
        array(
            'id'       => 'fo_newsletter_desc',
            'type'     => 'text',
            'title'    => esc_html__( 'Newsletter Description', 'carservice' ),
            'default'  => esc_html__( 'Dolor amet sit justo amet elitr clita ipsum elitr est.', 'carservice' ),
        ),
       
        array(
            'id'       => 'fo_newsletter_form',
            'type'     => 'editor',
            'title'    => esc_html__( 'Newsletter Form Shortcode', 'carservice' ),
            'args'   => array(
                'teeny'            => true,
                'textarea_rows'    => 10)
        ),
       
      
    )
) );

Redux::setSection( $opt_name, array(
    'title'  => esc_html__( 'Page Title Background', 'carservice' ),
    'id'     => 'page_title_bg',
    'desc'   => esc_html__( 'Page Title Background Image fields, You can change here!', 'carservice' ),
    'customizer'=> false,
    'fields' => array(
        array(
            'id'       => 'page_title_bg_img',
            'type'     => 'media',
            'title'    => esc_html__( 'Page Title Background Image', 'carservice' ),
            'default'  => array(
                'url' => get_template_directory_uri( ) . '/img/carousel-bg-2.jpg'
            )
        ),
    )
) );




