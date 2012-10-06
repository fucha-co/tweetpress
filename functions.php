<?php

//include_once( get_stylesheet_directory() . '/ozh-tweet-archiver/ozh-ta.php');

define('template_url', '/wp-content/themes/TweetPress/');
define('stylesheet_url', '/wp-content/themes/TweetPress/style.css');

define('tp_URL', get_option('home'));
define('tp_NAME', get_bloginfo('domain'));//get_current_site_name('get_current_site'));
define('tp_DESC', get_bloginfo('description'));
define('tp_TEMPURL', get_bloginfo('template_url'));

function tp_blog_path() {
$url = get_option('home');
echo parse_url($url, PHP_URL_PATH);
}

add_filter( 'show_admin_bar', '__return_false' );

//remove_filter('the_content', 'wptexturize');
remove_filter( 'the_content', 'wpautop' );
//remove_filter('the_excerpt', 'wptexturize');
//remove_filter('comment_text', 'wptexturize');
//remove_filter('the_title', 'wptexturize');


function tp_linkuser($content) {
    $pattern = '/@([a-zA-Z0-9_]+)*/'; //'/(\W)@(\w+)/',
    $name = '$1';
    $atname = '@$1';
    //$Name = ozh_ta_reply_to_name( false );
    $profileImg = sprintf( "<img src='http://avatars.io/twitter/%s?size=small' alt='#' class='img-polaroid pull-left'/> <div class=''>$1 is from Australia</div>", $name, $name );
    $link = sprintf( '<a href="//twitter.com/$1" class="username" rel="popover" data-original-title="$1">@$1</a><div id="username_popover" style="display: none">
        <img src="http://avatars.io/twitter/$1?size=small" alt="#" class="img-polaroid pull-left"/>
        <div class="">
          <script>Chirp({
              user:"$1",
              max:1,
              templates: {
                base: \'<div class="chirp2">{{tweets}}</div>\',
                tweet: \'<p><strong>{{user.statuses_count}} Tweets<br/>{{user.followers_count}} Followers <br/>{{user.friends_count}} Following</strong><br>{{user.description}}<br><strong>{{user.location}}</strong></p>\'
              }
            })</script>
          </div>
      </div>');
				$replace = $link;

    $content = preg_replace($pattern, $replace, $content);
    return $content;
}
add_filter( 'the_content', 'tp_linkuser', 10);



/*** Ozh Twitter Archiver _________________________________________________________________________ ***/


remove_action( 'ozh_ta_tweet_link', 'ozh_ta_tweet_link', 10, 0 );

			// Template tag: tweet link (http://twitter.com/ozh/statuses/13456464123)
			function mtm_tweet_link( $echo = true ) {
				global $ozh_ta;
				$link = 'http://twitter.com/'.$ozh_ta['screen_name'].'/statuses/'.ozh_ta_get_meta( 'id' );
				if( $echo )
					echo $link;
				return $link;
			}

add_action( 'mtm_tweet_link', 'mtm_tweet_link', 10, 0 );


remove_action( 'ozh_ta_in_reply_to_tweet', 'ozh_ta_in_reply_to_tweet', 10, 0 );

				// Template tag: "in reply to Ozh"
				function mtm_in_reply_to_tweet( $text = '%name%', $echo = true ) {
					$tweet = ozh_ta_reply_to_tweet( false );
					$name = ozh_ta_reply_to_name( false );
					if( $tweet && $name ) {
						$text = str_replace( '%name%', $name, $text );
						$profileImg = sprintf( "<img src='http://avatars.io/twitter/%s?size=small' alt='#' class='img-polaroid pull-left'/> <div class=''>%s is from Australia</div>", $name, $name );
						$link = sprintf( '<span class="glyph general">[</span> a reply to <a href="//twitter.com/%s" class="stats" rel="popover" data-content="%s" data-original-title="%s">%s</a> <span class="spacer">&nbsp;</span><span class="hidden-desktop"><br></span>', $name, $profileImg, $name, $text );
						$link = apply_filters( 'ozh_ta_in_reply_to_tweet_link', $link );
						if( $echo )
							echo $link;
						return $link;
					}
				}

add_action( 'mtm_in_reply_to_tweet', 'mtm_in_reply_to_tweet', 10, 0 );



// Time Ago (Relative Time)
function time_ago( $type = 'post' ) {
	$d = 'comment' == $type ? 'get_comment_time' : 'get_post_time';
	return human_time_diff($d('U'), current_time('timestamp')) . " " . __('ago');
}

// Extend Time Ago for weeks, months & years
//http://www.jasonbobich.com/wordpress/a-better-way-to-add-time-ago-to-your-wordpress-theme
function mtm_time_ago() {

	global $post;

	$date = get_post_time('G', true, $post);


	// Array of time period chunks
	$chunks = array(
		array( 60 * 60 * 24 * 365 , __( 'year', 'mtm' ), __( 'years', 'mtm' ) ),
		array( 60 * 60 * 24 * 30 , __( 'month', 'mtm' ), __( 'months', 'mtm' ) ),
		array( 60 * 60 * 24 * 7, __( 'week', 'mtm' ), __( 'weeks', 'mtm' ) ),
		array( 60 * 60 * 24 , __( 'day', 'mtm' ), __( 'days', 'mtm' ) ),
		array( 60 * 60 , __( 'hour', 'mtm' ), __( 'hours', 'mtm' ) ),
		array( 60 , __( 'minute', 'mtm' ), __( 'minutes', 'mtm' ) ),
		array( 1, __( 'second', 'mtm' ), __( 'seconds', 'mtm' ) )
	);

	if ( !is_numeric( $date ) ) {
		$time_chunks = explode( ':', str_replace( ' ', ':', $date ) );
		$date_chunks = explode( '-', str_replace( ' ', '-', $date ) );
		$date = gmmktime( (int)$time_chunks[1], (int)$time_chunks[2], (int)$time_chunks[3], (int)$date_chunks[1], (int)$date_chunks[2], (int)$date_chunks[0] );
	}

	$current_time = current_time( 'mysql', $gmt = 0 );
	$newer_date = strtotime( $current_time );

	// Difference in seconds
	$since = $newer_date - $date;

	// Something went wrong with date calculation and we ended up with a negative date.
	if ( 0 > $since )
		return __( 'sometime', 'mtm' );

	/**
	 * We only want to output one chunks of time here, eg:
	 * x years
	 * xx months
	 * so there's only one bit of calculation below:
	 */

	//Step one: the first chunk
	for ( $i = 0, $j = count($chunks); $i < $j; $i++) {
		$seconds = $chunks[$i][0];

		// Finding the biggest chunk (if the chunk fits, break)
		if ( ( $count = floor($since / $seconds) ) != 0 )
			break;
	}

	// Set output var
	$output = ( 1 == $count ) ? '1 '. $chunks[$i][1] : $count . ' ' . $chunks[$i][2];


	if ( !(int)trim($output) ){
		$output = '0 ' . __( 'seconds', 'mtm' );
	}

	$output .= __(' ago', 'mtm');

	return $output;
}

// Filter mtm_time_ago() into WP's the_time() function
//add_filter('time_ago', 'mtm_time_ago');



// Add tweak numbers
function TweakNumbers() {
  	global $wpdb;
  	$querystr = "SELECT $wpdb->posts.* FROM $wpdb->posts WHERE $wpdb->posts.post_status = 'publish' AND $wpdb->posts.post_type = 'post' ";
	$pageposts = $wpdb->get_results($querystr, OBJECT);
  	$counter = 0 ;
  	if ($pageposts):
    	foreach ($pageposts as $post):
      		setup_postdata($post);
      		$counter++;
      		add_post_meta($post->ID, 'incr_number', $counter, true);
      		update_post_meta($post->ID, 'incr_number', $counter);
    	endforeach;
  endif;
}
add_action ( 'publish_post', 'TweakNumbers' );
add_action ( 'deleted_post', 'TweakNumbers' );
add_action ( 'edit_post', 'TweakNumbers' );



/***  _____________________________________________________________________________________________ ***/



/***  _____________________________________________________________________________________________ ***/



/**
 * _s functions and definitions
 *
 * @package _s
 * @since _s 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since _s 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( '_s_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since _s 1.0
 */
function _s_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/tweaks.php' );

	/**
	 * Custom Theme Options
	 */
	require( get_template_directory() . '/inc/theme-options/theme-options.php' );

	/**
	 * WordPress.com-specific functions and definitions
	 */
	//require( get_template_directory() . '/inc/wpcom.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on _s, use a find and replace
	 * to change '_s' to the name of your theme in all the template files
	 */
	load_theme_textdomain( '_s', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	//add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', '_s' ),
	) );

	/**
	 * Add support for the Aside Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', ) );
}
endif; // _s_setup
add_action( 'after_setup_theme', '_s_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since _s 1.0
 */
//function _s_widgets_init() {
//	register_sidebar( array(
//		'name' => __( 'Sidebar', '_s' ),
//		'id' => 'sidebar-1',
//		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
//		'after_widget' => "</aside>",
//		'before_title' => '<h1 class="widget-title">',
//		'after_title' => '</h1>',
//	) );
//}
//add_action( 'widgets_init', '_s_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function _s_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );

/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );
