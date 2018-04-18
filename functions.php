<?php
require get_template_directory() . '/options/options.php';

add_action( 'after_setup_theme', 'toilamit_setup' );
function toilamit_setup()
{
load_theme_textdomain( 'toilamit', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'toilamit' ) )
);
}

add_action( 'wp_enqueue_scripts', 'toilamit_load_scripts' );
function toilamit_load_scripts() {
	// Scripts
	// wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js' );
	wp_enqueue_script( 'clean-blog', get_template_directory_uri() . '/assets/js/clean-blog.min.js' );

	// Style
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/vendor/font-awesome/css/font-awesome.min.css' );	
	wp_enqueue_style( 'font-lora', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' );
	wp_enqueue_style( 'font-open-san', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' );
	wp_enqueue_style( 'clean-blog', get_template_directory_uri() . '/assets/css/clean-blog.min.css' );
}

add_action( 'comment_form_before', 'toilamit_enqueue_comment_reply_script' );
function toilamit_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'toilamit_title' );
function toilamit_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'toilamit_filter_wp_title' );
function toilamit_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'toilamit_widgets_init' );
function toilamit_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'toilamit' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function toilamit_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'toilamit_comments_number' );
function toilamit_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}