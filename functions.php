<?php
if ( ! isset( $content_width ) )
    $content_width = 1200;

// STYLESHEET
function anvaya_enqueue_styles() {
    wp_enqueue_style(
        'anvaya-style', 
        get_stylesheet_uri()
    );
}
add_action('wp_enqueue_scripts', 'anvaya_enqueue_styles');

// WP MENUS 
add_action( 'after_setup_theme', 'wpt_setup' );
if ( ! function_exists( 'wpt_setup' ) ):
	function wpt_setup() {  
		register_nav_menu( 'main_nav', __( 'Main Navigation', 'wptuts' ) );		
		register_nav_menu( 'footer_nav_1', __( 'Footer Navigation 1', 'wptuts' ) );		
		register_nav_menu( 'footer_nav_2', __( 'Footer Navigation 2', 'wptuts' ) );		
		register_nav_menu( 'footer_nav_3', __( 'Footer Navigation 3', 'wptuts' ) );		
		register_nav_menu( 'footer_nav_4', __( 'Footer Navigation 4', 'wptuts' ) );		
	} endif;
// Register bootstrap files and jQuery:
function wpt_register_js() {
    //wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
    //wp_enqueue_script('jquery.bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );
function wpt_register_css() {
    //wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    //wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );
require_once('wp_bootstrap_navwalker.php');

/* GET ACTIVE CLASS */

// //////////////////////////////////// TO ENABLE SIDE BAR WIDGET IN WP ADMIN ///////////////////////////////
function arphabet_widgets_init() {
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar_1',
		'before_widget' => '<div id="sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );



///// for max upload size 
add_filter( 'upload_size_limit', 'b5f_increase_upload' );
function b5f_increase_upload( $bytes ){
    return 666666554432; // 32 megabytes
}
function word_count($string, $limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $limit));
}

// ///////////////////////////// TO SHOW FEATURED IMAGE OPTION IN WP ADMIN ///////////////////////////
add_theme_support( 'post-thumbnails' ); 
add_image_size($name, $width, $height, $crop);

// ///////////////////////////// FOR DIFFERENT SIZE OF FEATURED IMAGES ///////////////////////////
if ( function_exists( 'add_theme_support' ) ) {
 	add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 600, 400 ); // default Post Thumbnail dimensions   
}
if ( function_exists( 'add_image_size' ) ) { 
	//add_image_size( 'thumb-md', 365, 245, true );
	//add_image_size( 'thumb-sm', 270, 180, true );
}


// Disable Admin Bar for All Users Except for Administrators
add_filter('show_admin_bar', '__return_false');

// STRICT EMAIL VALIDATION FOR CONTACT FORM 7
add_filter('wpcf7_validate_email*', 'cf7_validate_real_email_domain', 20, 2);
add_filter('wpcf7_validate_email', 'cf7_validate_real_email_domain', 20, 2);

function cf7_validate_real_email_domain($result, $tag) {

    $tag = new WPCF7_FormTag($tag);
    $name = $tag->name;

    if ($name !== 'your-email') {
        return $result;
    }

    $submission = WPCF7_Submission::get_instance();

    if (!$submission) {
        return $result;
    }

    $posted_data = $submission->get_posted_data();
    $email = isset($posted_data[$name]) ? sanitize_email($posted_data[$name]) : '';

    // Basic email validation
    if (!is_email($email)) {
        $result->invalidate($tag, 'Please enter a valid email address.');
        return $result;
    }

    // Extract domain
    $domain = strtolower(substr(strrchr($email, '@'), 1));

    // ❌ Block invalid formats like g.c or x.y
    if (!preg_match('/^[a-z0-9.-]+\.[a-z]{2,}$/i', $domain)) {
        $result->invalidate($tag, 'Please enter a valid email address.');
        return $result;
    }

    // ❌ Block very short domain names like g.com
    $parts = explode('.', $domain);
    $domain_name = $parts[0];

    if (strlen($domain_name) < 2) {
        $result->invalidate($tag, 'Please enter a valid email address.');
        return $result;
    }

    // ❌ Block common typo / fake domains
    $blocked_domains = array(
        'gm.cm','gmal.com','gmai.com','gmial.com','gmaill.com',
        'gmail.cm','gmail.con','gmail.co','gmail.om',
        'yaho.com','yahooo.com','yahoomail.com','yahoo.cm','yahoo.con','yahoo.co',
        'hotnail.com','hotmal.com','hotmial.com','hotmail.con','hotmail.co',
        'outlok.co', 'outllok.com', 'outlook.con',
        'test.com','example.com','abc.com','xyz.com'
    );

    if (in_array($domain, $blocked_domains, true)) {
        $result->invalidate($tag, 'Please enter a valid email address.');
        return $result;
    }

    // ❌ Block fake names like test/demo
    if (preg_match('/test|demo|fake|abc|xyz/i', $email)) {
        $result->invalidate($tag, 'Please enter a valid email address.');
        return $result;
    }

    // ❌ Check real domain via DNS (MX record)
    if (!checkdnsrr($domain, 'MX')) {
        $result->invalidate($tag, 'Please enter a real email address.');
        return $result;
    }

    return $result;
}



// VALIDATE PHONE NUMBER
add_filter('wpcf7_validate_tel*', 'validate_indian_phone_cf7', 20, 2);
add_filter('wpcf7_validate_tel', 'validate_indian_phone_cf7', 20, 2);

function validate_indian_phone_cf7($result, $tag) {
    $name = $tag->name;

    if ($name === 'your-phone') {
        $phone = isset($_POST[$name]) ? trim($_POST[$name]) : '';

        // Remove spaces, dashes, etc.
        $phone = preg_replace('/[^0-9]/', '', $phone);

        // Validate: starts with 6-9 and total 10 digits
        if (!preg_match('/^[6-9][0-9]{9}$/', $phone)) {
            $result->invalidate($tag, "Please enter a valid 10-digit Indian mobile number.");
        }
    }

    return $result;
}
?>