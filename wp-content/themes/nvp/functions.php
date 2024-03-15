<?php



if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly.

}

add_theme_support( 'post-thumbnails' );



register_nav_menus(

	array(

		'primary'	=>'Primary Menu',

		'footer'	=>'Footer Menu',

	)

);
class My_Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        // Remove the <ul> tag for sub-menus
    }

    function end_lvl(&$output, $depth = 0, $args = null) {
        // Remove the </ul> tag for sub-menus
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        // Modify the HTML output for each menu item
        $classes = implode(' ', $item->classes); // Retrieve custom CSS classes
        $output .= '<li class="mx-4 lg:mx-3 ' . esc_attr($classes) . '">';
        $output .= '<a href="' . $item->url . '" class="menu">' . $item->title . '</a>';
        $output .= '</li>';
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        // End of each menu item
    }
}




add_image_size( 'news-thumb', 500, 575, true );


//enable upload for webp image files.

function webp_upload_mimes($existing_mimes) {

    $existing_mimes['webp'] = 'image/webp';

    return $existing_mimes;

}

add_filter('mime_types', 'webp_upload_mimes');



//enable preview / thumbnail for webp image files.

function webp_is_displayable($result, $path) {

    if ($result === false) {

        $displayable_image_types = array( IMAGETYPE_WEBP );

        $info = @getimagesize( $path );



        if (empty($info)) {

            $result = false;

        } elseif (!in_array($info[2], $displayable_image_types)) {

            $result = false;

        } else {

            $result = true;

        }

    }



    return $result;

}

add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);

function removeJq() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', false);
    }
}

add_action('init', 'removeJq');
