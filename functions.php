<?php
add_action( 'after_setup_theme', 'mowfni_setup' );
function mowfni_setup() {
load_theme_textdomain( 'mowfni', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );
global $content_width;
if ( ! isset( $content_width ) ) { $content_width = 1920; }
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'mowfni' ) ) );
}
add_action( 'wp_enqueue_scripts', 'mowfni_load_scripts' );
function mowfni_load_scripts() {
wp_enqueue_style( 'mowfni-style', get_stylesheet_uri() );
wp_enqueue_script( 'jquery' );
}
add_action( 'wp_footer', 'mowfni_footer_scripts' );
function mowfni_footer_scripts() {
?>
<script>
jQuery(document).ready(function ($) {
var deviceAgent = navigator.userAgent.toLowerCase();
if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
$("html").addClass("ios");
$("html").addClass("mobile");
}
if (navigator.userAgent.search("MSIE") >= 0) {
$("html").addClass("ie");
}
else if (navigator.userAgent.search("Chrome") >= 0) {
$("html").addClass("chrome");
}
else if (navigator.userAgent.search("Firefox") >= 0) {
$("html").addClass("firefox");
}
else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
$("html").addClass("safari");
}
else if (navigator.userAgent.search("Opera") >= 0) {
$("html").addClass("opera");
}
});
</script>
<?php
}
add_filter( 'document_title_separator', 'mowfni_document_title_separator' );
function mowfni_document_title_separator( $sep ) {
$sep = '|';
return $sep;
}
add_filter( 'the_title', 'mowfni_title' );
function mowfni_title( $title ) {
if ( $title == '' ) {
return '...';
} else {
return $title;
}
}
add_filter( 'the_content_more_link', 'mowfni_read_more_link' );
function mowfni_read_more_link() {
if ( ! is_admin() ) {
return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">...</a>';
}
}
add_filter( 'excerpt_more', 'mowfni_excerpt_read_more_link' );
function mowfni_excerpt_read_more_link( $more ) {
if ( ! is_admin() ) {
global $post;
return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">...</a>';
}
}
add_filter( 'intermediate_image_sizes_advanced', 'mowfni_image_insert_override' );
function mowfni_image_insert_override( $sizes ) {
unset( $sizes['medium_large'] );
return $sizes;
}
add_action( 'widgets_init', 'mowfni_widgets_init' );
function mowfni_widgets_init() {
register_sidebar( array(
'name' => esc_html__( 'Sidebar Widget Area', 'mowfni' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'wp_head', 'mowfni_pingback_header' );
function mowfni_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'comment_form_before', 'mowfni_enqueue_comment_reply_script' );
function mowfni_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
function mowfni_custom_pings( $comment ) {
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'mowfni_comment_count', 0 );
function mowfni_comment_count( $count ) {
if ( ! is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}
function register_my_menu() {
    register_nav_menu('footer-menu',__( 'Footer Menu Column 1' ));
    register_nav_menu('footer-menu-2',__( 'Footer Menu Column 2' ));
    register_nav_menu('footer-menu-3',__( 'Footer Menu Column 3' ));
  }
  add_action( 'init', 'register_my_menu' );
/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
  // Set UI labels for Custom Post Type
      $labels = array(
          'name'                => _x( 'Locations', 'Post Type General Name', 'mowfni' ),
          'singular_name'       => _x( 'Location', 'Post Type Singular Name', 'mowfni' ),
          'menu_name'           => __( 'C1 Locations', 'mowfni' ),
          'parent_item_colon'   => __( 'Parent Location', 'mowfni' ),
          'all_items'           => __( 'All locations', 'mowfni' ),
          'view_item'           => __( 'View Location', 'mowfni' ),
          'add_new_item'        => __( 'Add New Location', 'mowfni' ),
          'add_new'             => __( 'Add New', 'mowfni' ),
          'edit_item'           => __( 'Edit Location', 'mowfni' ),
          'update_item'         => __( 'Update Location', 'mowfni' ),
          'search_items'        => __( 'Search Location', 'mowfni' ),
          'not_found'           => __( 'Not Found', 'mowfni' ),
          'not_found_in_trash'  => __( 'Not found in Trash', 'mowfni' ),
      );
       
  // Set other options for Custom Post Type
       
      $args = array(
          'label'               => __( 'locations', 'mowfni' ),
          'description'         => __( 'MOW Locations', 'mowfni' ),
          'labels'              => $labels,
          // Features this CPT supports in Post Editor
          'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
          // You can associate this CPT with a taxonomy or custom taxonomy. 
          'taxonomies'          => array( 'genres' ),
          'taxonomies' => array('post_tag'),
          /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */ 
          'hierarchical'        => false,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'menu_position'       => 5,
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'capability_type'     => 'post',
          'show_in_rest' => true,
   
      );
       
      // Registering your Custom Post Type
      register_post_type( 'locations', $args );

        // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'C2 Locations', 'Post Type General Name', 'mowfni' ),
            'singular_name'       => _x( 'C2 Location', 'Post Type Singular Name', 'mowfni' ),
            'menu_name'           => __( 'C2 Locations', 'mowfni' ),
            'parent_item_colon'   => __( 'C2 Parent Location', 'mowfni' ),
            'all_items'           => __( 'C2 All locations', 'mowfni' ),
            'view_item'           => __( 'C2 View Location', 'mowfni' ),
            'add_new_item'        => __( 'C2 Add New Location', 'mowfni' ),
            'add_new'             => __( 'C2 Add New', 'mowfni' ),
            'edit_item'           => __( 'C2 Edit Location', 'mowfni' ),
            'update_item'         => __( 'C2 Update Location', 'mowfni' ),
            'search_items'        => __( 'C2 Search Location', 'mowfni' ),
            'not_found'           => __( 'C2 Not Found', 'mowfni' ),
            'not_found_in_trash'  => __( 'C2 Not found in Trash', 'mowfni' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'c2-locations', 'mowfni' ),
            'description'         => __( 'C2 Locations', 'mowfni' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres' ),
            'taxonomies' => array('post_tag'),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
     
        );
         
        // Registering your Custom Post Type
        register_post_type( 'c2-locations', $args );
  
        
   
  }
   
  /* Hook into the 'init' action so that the function
  * Containing our post type registration is not 
  * unnecessarily executed. 
  */
   
    add_action( 'init', 'custom_post_type', 0 );

    /* enqueue custom scripts & fonts */

    function mowfni_files() { 
        wp_enqueue_style('mowfni_fonts', '//fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Poppins:ital,wght@0,300;0,700;1,400&display=swap'); 
        wp_enqueue_script('mowfni_fontawesome', '//kit.fontawesome.com/33391c5587.js'); 
        wp_enqueue_script('mowfni_js', get_theme_file_uri('/js/main.js'));
        wp_enqueue_script('mowfni_js_plugins', get_theme_file_uri('/js/plugins.js'));
    } 
    
    add_action('wp_enqueue_scripts', 'mowfni_files');