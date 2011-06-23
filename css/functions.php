<?php
/** Start the engine **/
require_once(TEMPLATEPATH.'/lib/init.php');
require_once(CHILD_DIR.'/lib/custom-header.php');
require_once(CHILD_DIR.'/lib/style.php');

/** Child theme (do not remove) **/
define('CHILD_THEME_NAME', 'Pretty Young Thing Theme');
define('CHILD_THEME_URL', 'http://www.studiopress.com/themes/pretty');

/** Add support for custom background **/
add_custom_background();

/** Add new image sizes **/
add_image_size('grid-thumbnail', 100, 100, TRUE);


/** Customize the post info function **/
add_filter('genesis_post_info', 'pretty_post_info_filter');
function pretty_post_info_filter( $post_info ) {
	if ( ! is_page() ) {
		$post_info = '[post_date] [post_comments] [post_edit]';
		return $post_info;
	}
}

/** Add after post ad widget area on single post **/
add_action( 'genesis_after_post_content', 'pretty_after_post_ad' );
function pretty_after_post_ad() {
	if ( is_single() ) {
		echo '<div class="after-post-ad">';
		dynamic_sidebar( 'after-post-ad' );
		echo '</div>';
	}
}

/** Modify the size of the Gravatar in the author box **/
add_filter( 'genesis_author_box_gravatar_size', 'pretty_gravatar_size' );
function pretty_gravatar_size( $size ) {
	return 80;
}

/** Add widgeted footer section **/
add_action('genesis_before_footer', 'pretty_footer_widgets'); 
function pretty_footer_widgets() {
	include( CHILD_DIR . '/footer-widgets.php' );
}

/** Load CSS and JS **/
add_action( 'get_header', 'visualize_scripts' );
function visualize_scripts() {
   if ( is_admin() )
       return;
   
   /** Load Google Web fonts **/
   wp_enqueue_style( 'josefin slab', 'http://fonts.googleapis.com/css?family=Josefin+Slab:regular,bold' );

   /** Load JS to animate scroll **/
   wp_enqueue_script( 'scroll', CHILD_URL . '/lib/js/scroll.js', array('jquery'), '', true );
   
}

// Reposition the Primary Navigation
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action('genesis_header', 'genesis_do_nav');

/** Customize the footer top section **/
add_action( 'genesis_after_footer', 'pretty_do_footer_top' ); 
function pretty_do_footer_top() {
	?>
	<div class="footer-top">
		<p><a href="#wrap"><?php _e( 'To the Top', CHILD_THEME_DOMAIN ); ?></a></p>
	</div>
	<?php
}

/** Define Default Genesis Options **/
add_filter('genesis_options', 'pretty_genesis_setting_custom', 10, 2);
function pretty_genesis_setting_custom($options, $setting) {
    if($setting == GENESIS_SETTINGS_FIELD) {
        $options['header_right'] = 0;
        }
    return $options;
}

/** Register widget areas **/
genesis_register_sidebar( array(
	'id'				=> 'after-post-ad',
	'name'			=> __( 'After Post Ad', 'pretty' ),
	'description'	=> __( 'This is the section after a post for an ad.', 'pretty' ),
) );
genesis_register_sidebar( array(
	'id'				=> 'footer-1',
	'name'			=> __( 'Footer #1', 'pretty' ),
	'description'	=> __( 'This is the first column of the footer section.', 'pretty' ),
) );
genesis_register_sidebar( array(
	'id'				=> 'footer-2',
	'name'			=> __( 'Footer #2', 'pretty' ),
	'description'	=> __( 'This is the second column of the footer section.', 'pretty' ),
) );
genesis_register_sidebar( array(
	'id'				=> 'footer-3',
	'name'			=> __( 'Footer #3', 'pretty' ),
	'description'	=> __( 'This is the third column of the footer section.', 'pretty' ),
) );