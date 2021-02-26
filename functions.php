<?php
// /*
// ===================================
// Theme Supports
// ===================================
// */
function ct2021_theme_setup()
{

    add_theme_support('custom-logo');

}

add_action('after_setup_theme', 'ct2021_theme_setup');

// /*
//     ===================================
//     Menu
//     ===================================
// */
function ct2021_menus()
{
    $locations = array(
        'Main Navigation 2021' => __('Main Navigation 2021', 'text_domain') ,
    );

    register_nav_menus($locations);
}

add_action('init', 'ct2021_menus');

// /*
//     ===================================
//     Register Resources Custom Post Type
//     ===================================
// */
function ct2021_resources_init()
{
    $labels = array(
        'name' => _x('Resources', 'post type general name', 'your-plugin-textdomain') ,
        'singular_name' => _x('Resource', 'post type singular name', 'your-plugin-textdomain') ,
        'menu_name' => _x('Resources', 'admin menu', 'your-plugin-textdomain') ,
        'name_admin_bar' => _x('Resource', 'add new on admin bar', 'your-plugin-textdomain') ,
        'add_new' => __('Add New', 'resource', 'your-plugin-textdomain') ,
        'add_new_item' => __('Add New Resource', 'your-plugin-textdomain') ,
        'new_item' => __('New Resource', 'your-plugin-textdomain') ,
        'edit_item' => __('Edit Resource', 'your-plugin-textdomain') ,
        'view_item' => __('View Resource', 'your-plugin-textdomain') ,
        'all_items' => __('All Resources', 'your-plugin-textdomain') ,
        'search_items' => __('Search Resources', 'your-plugin-textdomain') ,
        'parent_item_colon' => __('Parent Resources:', 'your-plugin-textdomain') ,
        'not_found' => __('No resources found.', 'your-plugin-textdomain') ,
        'not_found_in_trash' => __('No resources found in Trash.', 'your-plugin-textdomain')
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'resources-list',
            'with_front' => false
        ) ,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => null,
        'menu_icon' => 'dashicons-media-document',
        'supports' => array(
            'title',
            'editor'
        )
    );

    /******** Icon reference for $args['menu_position'] --> https://developer.wordpress.org/resource/dashicons/ *********/

    register_post_type('resources', $args);
}
add_action('init', 'ct2021_resources_init');

register_taxonomy('resources-categories', 'resources', array(
    'label' => __('Resources Categories') ,
    'rewrite' => array(
        'slug' => 'resources-categories'
    ) ,
    'hierarchical' => true,
    'show_in_nav_menus' => false,
));

register_taxonomy('resources-tags', array(
    'resources',
    'page',
    'post',
    'trees'
) , array(
    'label' => __('Resources Tags') ,
    'rewrite' => array(
        'slug' => 'resources-tags'
    ) ,
    'hierarchical' => true,
    'show_in_nav_menus' => false,
));

// /*
//     ===================================
//     Register Resources Custom Post Type
//     ===================================
// */

// /*
//     ===================================
//     Register Trees Custom Post Type NMC Code 
//     ===================================
// */

add_action( 'init', 'trees_init' ); //how come this isn't after declaring the function? 
function trees_init() { 
	$labels = array(
		'name'               => _x( 'Trees', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Tree', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Trees', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Tree', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'tree', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Tree', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Tree', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Tree', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Tree', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Trees', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Trees', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Trees:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No trees found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No trees found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_nav_menus'  => true,
		'query_var'          => true,
		'rewrite'            => array('slug' => 'trees-list', 'with_front' => true),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'          => 'dashicons-palmtree',
		'supports'           => array('title', 'editor')
	);

	/******** Icon reference for $args['menu_position'] --> https://developer.wordpress.org/resource/dashicons/ *********/

	register_post_type( 'trees', $args );
}

// /*
//     ===================================
//     Register Styles
//     ===================================
// */
function ct2021_register_styles()
{

    $styleVersion = wp_get_theme()->get('Version');

    wp_enqueue_style('adobe-fonts', 'https://use.typekit.net/bix5hve.css');
    wp_enqueue_style('ct2021-style', get_template_directory_uri() . '/style.css', array() , $styleVersion, 'all');
}

add_action('wp_enqueue_scripts', 'ct2021_register_styles');

// /*
//     ===================================
//     Register Scripts
//     ===================================
// */
function ct2021_register_scripts()
{
    wp_enqueue_script('greensock', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js', array() , '3.6.0');
    wp_enqueue_script('scrollTrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js', array() , '3.6.0');
    wp_enqueue_script('hide-empty-p-tags', get_template_directory_uri() . '/scripts/hideEmptyPTags.js');
    wp_enqueue_script('home-page-fades', get_template_directory_uri() . '/scripts/homePageFades.js');
    wp_enqueue_script('target-last-sub-menu', get_template_directory_uri() . '/scripts/targetLastSubMenu.js');
}

add_action('wp_enqueue_scripts', 'ct2021_register_scripts');

// /*
//     ===================================
//     Breadcrumbs
//     ===================================
// */
function ct2021_get_breadcrumbs()
{

    if (is_home())
    {
        echo 'the leaflet newsletter';
    }
    if (is_single() && get_post_type() === 'post')
    {
        echo 'the leaflet newsletter';
        if (is_single())
        {
            echo " &nbsp;&nbsp;&#62;&nbsp;&nbsp; ";
            echo the_title();
        }
    }
    if (is_archive() && post_type_archive_title() === 'Resource')
    {
        echo 'resources';
    }
    if (is_single() && get_post_type() === 'resources')
    {
        echo 'resource';
        if (is_single())
        {
            echo " &nbsp;&nbsp;&#62;&nbsp;&nbsp; ";
            echo the_title();
        }
    }
    if (get_post_type() === 'trees')
    {

    }
}

// /*
//     ===================================
//     Filters
//     ===================================
// */
add_filter('get_custom_logo', 'ct2021_replace_logo_classes');

function ct2021_replace_logo_classes($html)
{
    $html = str_replace('custom-logo-link', 'header__logo-anchor', $html);
    $html = str_replace('custom-logo', 'header__logo', $html);
    return $html;
}

add_filter('wp_nav_menu', 'ct2021_replace_header_menu_div_wrapper_class');

function ct2021_replace_header_menu_div_wrapper_class($html)
{
    $html = str_replace('menu-main-navigation-container', 'Nav__container', $html);
    return $html;
}

function ct2021_ellipsis_in_excerpt()
{
    return ' &hellip;';
}

add_filter('excerpt_more', 'ct2021_ellipsis_in_excerpt');

// /*
//     ===================================
//     Register Fields
//     ===================================
// */
function ct2021_acf_add_local_field_groups()
{
    acf_add_local_field_group(array(                // Featured Post
        'key' => 'group_602c07d7d9499',
        'title' => 'Featured Post',
        'fields' => array(
            array(
                'key' => 'field_602c0925b0bea',
                'label' => 'Feature this Post',
                'name' => 'feature_this_post',
                'type' => 'true_false',
                'instructions' => 'Select whether this is the featured post. Otherwise the newest will be featured. If more than one is selected, the newer one will be featured.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ) ,
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ) ,
        ) ,
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ) ,
            ) ,
        ) ,
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(                // Home Page Pics
        'key' => 'group_5ff605b755888',
        'title' => 'Home Page Pics',
        'fields' => array(
            array(
                'key' => 'field_5ff60652b61cb',
                'label' => 'Home Page RESTORE Photo',
                'name' => 'home_page_restore_photo',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ) ,
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => 'jpg, png, gif',
            ) ,
            array(
                'key' => 'field_5ff606adb61cc',
                'label' => 'Home Page ENHANCE Photo',
                'name' => 'home_page_enhance_photo',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ) ,
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ) ,
            array(
                'key' => 'field_5ff606c9b61cd',
                'label' => 'Home Page PROTECT Photo',
                'name' => 'home_page_protect_photo',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ) ,
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => 'jpg, png, gif',
            ) ,
        ) ,
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ) ,
            ) ,
        ) ,
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(            // Top Resources
        'key' => 'group_6030020898e84',
        'title' => 'Top Resources',
        'fields' => array(
            array(
                'key' => 'field_6030023027825',
                'label' => 'Top Resource 1',
                'name' => 'top_resource_1',
                'type' => 'post_object',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => array(
                    0 => 'resources',
                ),
                'taxonomy' => '',
                'allow_null' => 0,
                'multiple' => 0,
                'return_format' => 'object',
                'ui' => 1,
            ),
            array(
                'key' => 'field_60300605a0ed9',
                'label' => 'Resource 1 Thumbnail',
                'name' => 'resource_1_thumbnail',
                'type' => 'image',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_60300adda7c98',
                'label' => 'Resource 1 Description',
                'name' => 'resource_1_description',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => 80,
            ),
            array(
                'key' => 'field_6030026f27826',
                'label' => 'Top Resource 2',
                'name' => 'top_resource_2',
                'type' => 'post_object',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => array(
                    0 => 'resources',
                ),
                'taxonomy' => '',
                'allow_null' => 0,
                'multiple' => 0,
                'return_format' => 'object',
                'ui' => 1,
            ),
            array(
                'key' => 'field_60300625a0eda',
                'label' => 'Resource 2 Thumbnail',
                'name' => 'resource_2_thumbnail',
                'type' => 'image',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_60300b31a7c99',
                'label' => 'Resource 2 Description',
                'name' => 'resource_2_description',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => 80,
            ),
            array(
                'key' => 'field_603002af27827',
                'label' => 'Top Resource 3',
                'name' => 'top_resource_3',
                'type' => 'post_object',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => array(
                    0 => 'resources',
                ),
                'taxonomy' => '',
                'allow_null' => 0,
                'multiple' => 0,
                'return_format' => 'object',
                'ui' => 1,
            ),
            array(
                'key' => 'field_60300668a0edb',
                'label' => 'Resource 3 Thumbnail',
                'name' => 'resource_3_thumbnail',
                'type' => 'image',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_60300b41a7c9a',
                'label' => 'Resource 3 Description',
                'name' => 'resource_3_description',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => 80,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page',
                    'operator' => '==',
                    'value' => '39',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(            // Farm Copy and Images
        'key' => 'group_603924e4cdb29',
        'title' => 'Farm Copy and Images',
        'fields' => array(
            array(
                'key' => 'field_603925b1e3eb6',
                'label' => 'Farm Intro Text',
                'name' => 'farm_intro_text',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 0,
                'delay' => 0,
            ),
            array(
                'key' => 'field_603924f8e3eb2',
                'label' => 'Sustainability Text',
                'name' => 'sustainability_text',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 0,
                'delay' => 0,
            ),
            array(
                'key' => 'field_6039255de3eb3',
                'label' => 'Sustainability Image',
                'name' => 'sustainability_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_6039256be3eb4',
                'label' => 'Partnership Text',
                'name' => 'partnership_text',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 0,
                'delay' => 0,
            ),
            array(
                'key' => 'field_6039259ce3eb5',
                'label' => 'Partnership Image',
                'name' => 'partnership_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page',
                    'operator' => '==',
                    'value' => '20789',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(            //Plant Copy and Images
        'key' => 'group_60392c6131f8a',
        'title' => 'Plant Copy and Images',
        'fields' => array(
            array(
                'key' => 'field_60392c6139fa7',
                'label' => 'Home Text',
                'name' => 'home_text',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 0,
                'delay' => 0,
            ),
            array(
                'key' => 'field_60392c6139fad',
                'label' => 'Home Image',
                'name' => 'home_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_60392c6139fb3',
                'label' => 'School Text',
                'name' => 'school_text',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 0,
                'delay' => 0,
            ),
            array(
                'key' => 'field_60392c6139fb9',
                'label' => 'School Image',
                'name' => 'school_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_60392deb5896a',
                'label' => 'Community Text',
                'name' => 'community_text',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 0,
                'delay' => 0,
            ),
            array(
                'key' => 'field_60392e2c5896c',
                'label' => 'Community Image',
                'name' => 'community_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_60392e1a5896b',
                'label' => 'Dedication Text',
                'name' => 'dedication_text',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 0,
                'delay' => 0,
            ),
            array(
                'key' => 'field_60392e3a5896d',
                'label' => 'Dedication Image',
                'name' => 'dedication_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page',
                    'operator' => '==',
                    'value' => '20801',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
}
add_action('acf/init', 'ct2021_acf_add_local_field_groups');

