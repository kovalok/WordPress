<?php
/**
 * WPStrapFolio Theme Customizer
 *
 * @package WPStrapFolio
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wpstrapfolio_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
    $wp_customize->add_section( 'wpstrapfolio_general_options' , array(
       'title'      => __('Sitewide General Options','wpstrapfolio'),
       'priority'   => 30,
    ) );
	
	$wp_customize->add_section( 'wpstrapfolio_slider_options' , array(
       'title'      => __('Slider Options','wpstrapfolio'),
       'priority'   => 31,
    ) );
	
	$wp_customize->add_section( 'wpstrapfolio_content_options' , array(
       'title'      => __('Content Options','wpstrapfolio'),
       'priority'   => 32,
    ) );
	
	// Setting group for social icons
    $wp_customize->add_section( 'wpstrapfolio_social_options' , array(
       'title'      => __('Social Options','wpstrapfolio'),
       'priority'   => 33,
    ) );
    
	// Begin Sitewide General Section
	$wp_customize->add_setting(
    'wpstrapfolio_tagline_visibility'
    );

    $wp_customize->add_control(
    'wpstrapfolio_tagline_visibility',
    array(
        'type' => 'checkbox',
        'label' => __('If Slider enabled hide header section? (Front Page Only)', 'wpstrapfolio'),
        'section' => 'wpstrapfolio_general_options',
		'priority' => 1,
        )
    );
	
	$wp_customize->add_setting(
    'wpstrapfolio_attachment_commentform_visibility'
    );

    $wp_customize->add_control(
    'wpstrapfolio_attachment_commentform_visibility',
    array(
        'type' => 'checkbox',
        'label' => __('Hide Comment Form on the Attachment page', 'wpstrapfolio'),
        'section' => 'wpstrapfolio_general_options',
		'priority' => 2,
        )
    );
	
	// Begin Slider Section
	$wp_customize->add_setting(
    'wpstrapfolio_slider_visibility'
    );

    $wp_customize->add_control(
    'wpstrapfolio_slider_visibility',
    array(
        'type' => 'checkbox',
        'label' => __('Show Home Slider', 'wpstrapfolio'),
        'section' => 'wpstrapfolio_slider_options',
		'priority' => 1,
        )
    );
	
	$wp_customize->add_setting(
    'wpstrapfolio_slider_caption_visibility'
    );

    $wp_customize->add_control(
    'wpstrapfolio_slider_caption_visibility',
    array(
        'type' => 'checkbox',
        'label' => __('Hide Slider Caption?', 'wpstrapfolio'),
        'section' => 'wpstrapfolio_slider_options',
		'priority' => 2,
        )
    );
	
	$wp_customize->add_setting(
    'wpstrapfolio_caption_thumb_visibility'
    );

    $wp_customize->add_control(
    'wpstrapfolio_caption_thumb_visibility',
    array(
        'type' => 'checkbox',
        'label' => __('Hide Caption Thumbnail?', 'wpstrapfolio'),
        'section' => 'wpstrapfolio_slider_options',
		'priority' => 3,
        )
    );
	
	$wp_customize->add_setting( 'wpstrapfolio_slider_transition', array(
		'default' => 'slide',
	) );
	
	$wp_customize->add_control( 'wpstrapfolio_slider_transition', array(
    'label'   => __( 'Slider Transition', 'wpstrapfolio' ),
    'section' => 'wpstrapfolio_slider_options',
	'priority' => 4,
    'type'    => 'radio',
        'choices' => array(
            'slide' => __( 'Slide', 'wpstrapfolio' ),
            'slide carousel-fade' => __( 'Fade', 'wpstrapfolio' ),
        ),
    ));
	
    //  = Category Dropdown =

    $categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cats[$category->slug] = $category->name;
	}
 
	$wp_customize->add_setting('wpstrapfolio_slide_cat', array(
		'default'        => $default
	));
	$wp_customize->add_control( 'wpstrapfolio_slide_cat', array(
		'settings' => 'wpstrapfolio_slide_cat',
		'label'   => __('Select Slider Category:', 'wpstrapfolio'),
		'section'  => 'wpstrapfolio_slider_options',
		'priority' => 5,
		'type'    => 'select',
		'choices' => $cats,
	));
	
	$wp_customize->add_setting(
    'wpstrapfolio_slide_number'
    );

    $wp_customize->add_control(
    'wpstrapfolio_slide_number',
    array(
        'type' => 'text',
		'default' => 6,
        'label' => __('Number Of Slides To Show - i.e 10 (default is 5)', 'wpstrapfolio'),
        'section' => 'wpstrapfolio_slider_options',
		'priority' => '4',
        )
    );
	
	$wp_customize->add_setting(
    'wpstrapfolio_slider_excerpt'
    );

    $wp_customize->add_control(
    'wpstrapfolio_slider_excerpt',
    array(
        'type' => 'text',
		'default' => '40',
        'label' => __('Slider Excerpt Length', 'wpstrapfolio'),
        'section' => 'wpstrapfolio_slider_options',
		'priority' => 7,
        )
    );
	
	// Begin Content Section
	$wp_customize->add_setting(
    'wpstrapfolio_top_meta_visibility'
    );

    $wp_customize->add_control(
    'wpstrapfolio_top_meta_visibility',
    array(
        'type' => 'checkbox',
        'label' => __('Hide Top Post Meta On Blogfeed?', 'wpstrapfolio'),
        'section' => 'wpstrapfolio_content_options',
		'priority' => 1,
        )
    );
	
	$wp_customize->add_setting(
    'wpstrapfolio_bottom_meta_visibility'
    );

    $wp_customize->add_control(
    'wpstrapfolio_bottom_meta_visibility',
    array(
        'type' => 'checkbox',
        'label' => __('Hide Bottom Post Meta On Blogfeed?', 'wpstrapfolio'),
        'section' => 'wpstrapfolio_content_options',
		'priority' => 2,
        )
    );
	
	$wp_customize->add_setting(
    'wpstrapfolio_blogfeed_excerpt_length'
    );

    $wp_customize->add_control(
    'wpstrapfolio_blogfeed_excerpt_length',
    array(
        'type' => 'text',
		'default' => '40',
        'label' => __('Blogfeed Excerpt Length', 'wpstrapfolio'),
        'section' => 'wpstrapfolio_content_options',
		'priority' => 3,
        )
    );
		
	$wp_customize->add_setting(
    'wpstrapfolio_readmore_visibility'
    );

    $wp_customize->add_control(
    'wpstrapfolio_readmore_visibility',
    array(
        'type' => 'checkbox',
        'label' => __('Hide Read More Button On Blogfeed?', 'wpstrapfolio'),
        'section' => 'wpstrapfolio_content_options',
		'priority' => 4,
        )
    );
	
	$wp_customize->add_setting(
    'wpstrapfolio_readmore_text'
    );

    $wp_customize->add_control(
    'wpstrapfolio_readmore_text',
    array(
        'type' => 'text',
		'default' => __('Read More &raquo;', 'wpstrapfolio'),
        'label' => __('Read More Button Text', 'wpstrapfolio'),
        'section' => 'wpstrapfolio_content_options',
		'priority' => 5,
        )
    );
	
	// == Social Links Icons Section == //
    // Begin Header Social Icons	
	$wp_customize->add_setting(
    'wpstrapfolio_social_visibility'
    );

    $wp_customize->add_control(
    'wpstrapfolio_social_visibility',
    array(
        'type' => 'checkbox',
        'label' => __('Show Social Icons?','wpstrapfolio'),
        'section' => 'wpstrapfolio_social_options',
		'priority' => 10,
        )
    );
	$wp_customize->add_setting(
    'wpstrapfolio_facebook_url',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
    'wpstrapfolio_facebook_url',
    array(
        'label' => __('Facebook URL','wpstrapfolio'),
        'section' => 'wpstrapfolio_social_options',
		'priority' => 11,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
    'wpstrapfolio_gplus_url',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
    'wpstrapfolio_gplus_url',
    array(
        'label' => __('Google+ URL','wpstrapfolio'),
        'section' => 'wpstrapfolio_social_options',
		'priority' => 12,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
    'wpstrapfolio_twitter_url',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
    'wpstrapfolio_twitter_url',
    array(
        'label' => __('Twitter URL','wpstrapfolio'),
        'section' => 'wpstrapfolio_social_options',
		'priority' => 13,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
    'wpstrapfolio_pinterest_url',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
    'wpstrapfolio_pinterest_url',
    array(
        'label' => __('Pinterest URL','wpstrapfolio'),
        'section' => 'wpstrapfolio_social_options',
		'priority' => 14,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
    'wpstrapfolio_linkedin_url',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
    'wpstrapfolio_linkedin_url',
    array(
        'label' => __('LinkedIn URL','wpstrapfolio'),
        'section' => 'wpstrapfolio_social_options',
		'priority' => 15,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
    'wpstrapfolio_youtube_url',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
    'wpstrapfolio_youtube_url',
    array(
        'label' => __('YouTube URL','wpstrapfolio'),
        'section' => 'wpstrapfolio_social_options',
		'priority' => 16,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
    'wpstrapfolio_flicker_url',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
    'wpstrapfolio_flicker_url',
    array(
        'label' => __('Flicker URL','wpstrapfolio'),
        'section' => 'wpstrapfolio_social_options',
		'priority' => 17,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
    'wpstrapfolio_wordpress_url',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
    'wpstrapfolio_wordpress_url',
    array(
        'label' => __('WordPress URL','wpstrapfolio'),
        'section' => 'wpstrapfolio_social_options',
		'priority' => 18,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
    'wpstrapfolio_github_url',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
    'wpstrapfolio_github_url',
    array(
        'label' => __('GitHub URL','wpstrapfolio'),
        'section' => 'wpstrapfolio_social_options',
		'priority' => 19,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
    'wpstrapfolio_dribbble_url',
    array(
        'default' => '',
    ));
	
	$wp_customize->add_control(
    'wpstrapfolio_dribbble_url',
    array(
        'label' => __('Dribbble URL','wpstrapfolio'),
        'section' => 'wpstrapfolio_social_options',
		'priority' => 20,
        'type' => 'text',
    ));
	
	$wp_customize->add_setting(
    'wpstrapfolio_rss_url_visibility'
    );

    $wp_customize->add_control(
    'wpstrapfolio_rss_url_visibility',
    array(
        'type' => 'checkbox',
        'label' => __('Show RSS Feed Icon?', 'wpstrapfolio'),
        'section' => 'wpstrapfolio_social_options',
		'priority' => 21,
        )
    );

}
add_action( 'customize_register', 'wpstrapfolio_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wpstrapfolio_customize_preview_js() {
	wp_enqueue_script( 'wpstrapfolio_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'wpstrapfolio_customize_preview_js' );
