<?php
/*
 * Plugin Name:       Auto Load Next Post: Hooks Example
 * Plugin URI:        https://github.com/AutoLoadNextPost/Auto-Load-Next-Post-Hooks-Example
 * Description:       Demonstrates where content can be shown before and after the loop or content of the next loaded post that is called. Requires v1.4.1 of Auto Load Next Post.
 * Version:           1.1.0
 * Author:            Auto Load Next Post
 * Author URI:        https://autoloadnextpost.com
 * Developer:         Sébastien Dumont
 * Developer URI:     https://sebastiendumont.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       auto-load-next-post-hooks
 * Domain Path:       languages
 * Network:           false
 * GitHub Plugin URI: https://github.com/seb86/Auto-Load-Next-Post-Hooks-Example
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Demo content box for before.
function alnp_ex_before_box( $content ) {
	echo '<div style="width:100%; height:120px; background-color:#000; color:#fff; text-align:center; border-bottom: 2px solid #524D4D; padding: 7.4% 4%;"><p>' . $content . '</p></div>';
}

// Demo content box for after.
function alnp_ex_after_box( $content ) {
	echo '<div style="width:100%; height:120px; background-color:#fff; color:#000; text-align:center; border-bottom: 2px solid #524D4D; padding: 7.4% 4%;"><p>' . $content . '</p></div>';
}

// The action hooks available in the default Auto Load Next Post template.
$action_hooks = array(
	'load_before_loop',
	'load_before_content',
	'load_before_content_type_standard',
	'load_before_content_type_aside',
	'load_before_content_type_chat',
	'load_before_content_type_gallery',
	'load_before_content_type_link',
	'load_before_content_type_image',
	'load_before_content_type_quote',
	'load_before_content_type_status',
	'load_before_content_type_video',
	'load_before_content_type_audio',
	'load_after_loop',
	'load_after_content',
	'load_after_content_type_standard',
	'load_after_content_type_aside',
	'load_after_content_type_chat',
	'load_after_content_type_gallery',
	'load_after_content_type_link',
	'load_after_content_type_image',
	'load_after_content_type_quote',
	'load_after_content_type_status',
	'load_after_content_type_video',
	'load_after_content_type_audio',
	'no_more_posts'
);

// Hooks each action hook listed above.
foreach ( $action_hooks as $hook ) {
	add_action( 'alnp_' . $hook, 'alnp_ex_' . $hook );
}

// Load content before the loop.
function alnp_ex_load_before_loop() {
	alnp_ex_before_box( sprintf( __( 'This box was added before the loop using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_load_before_loop</em>' ) );
}

// Load content after the loop.
function alnp_ex_load_after_loop() {
	alnp_ex_after_box( sprintf( __( 'This box was added after the loop using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_load_after_loop</em>' ) );
}

// Load content before the content.
function alnp_ex_load_before_content() {
	alnp_ex_before_box( sprintf( __( 'This box was added before the content using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_load_before_content</em>' ) );
}

// Load content before the content for standard posts.
function alnp_ex_load_before_content_type_standard() {
	alnp_ex_before_box( sprintf( __( 'This box was added before the content for standard posts using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_load_before_content_type_standard</em>' ) );
}

// Load content before the content for posts without a title.
function alnp_ex_load_before_content_type_aside() {
	alnp_ex_before_box( sprintf( __( 'This box was added before the content for posts without a title!', 'auto-load-next-post-hooks' ), '<em>alnp_load_before_content_type_aside</em>' ) );
}

// Load content before the content for chat transcript posts.
function alnp_ex_load_before_content_type_chat() {
	alnp_ex_before_box( sprintf( __( 'This box was added before the content for chat transcript posts using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_load_before_content_type_chat</em>' ) );
}

// Load content before the content for posts that contain a gallery.
function alnp_ex_load_before_content_type_gallery() {
	alnp_ex_before_box( sprintf( __( 'This box was added before the content for posts that contain a gallery using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_load_before_content_type_gallery</em>' ) );
}

// Load content before the content for posts that link to another site.
function alnp_ex_load_before_content_type_link() {
	alnp_ex_before_box( sprintf( __( 'This box was added before the content for posts that link to another site using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_load_before_content_type_link</em>' ) );
}

// Load content before the content for posts that contain an image.
function alnp_ex_load_before_content_type_image() {
	alnp_ex_before_box( sprintf( __( 'This box was added before the content for posts that contain an image using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_load_before_content_type_image</em>' ) );
}

// Load content before the content for posts that contain a quote.
function alnp_ex_load_before_content_type_quote() {
	alnp_ex_before_box( sprintf( __( 'This box was added before the content for posts that contain a quote using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_load_before_content_type_quote</em>' ) );
}

// Load content before the content for posts that contains a short status update.
function alnp_ex_load_before_content_type_status() {
	alnp_ex_before_box( sprintf( __( 'This box was added before the content for posts that contains a short status update!', 'auto-load-next-post-hooks' ), '<em>alnp_load_before_content_type_status</em>' ) );
}

// Load content before the content for posts with a video or a video playlist.
function alnp_ex_load_before_content_type_video() {
	alnp_ex_before_box( sprintf( __( 'This box was added before the content for posts with a video or a video playlist using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_load_before_content_type_video</em>' ) );
}

// Load content before the content for posts with an audio file or a audio playlist.
function alnp_ex_load_before_content_type_audio() {
	alnp_ex_before_box( sprintf( __( 'This box was added before the content for posts with an audio file or a audio playlist using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_load_before_content_type_audio</em>' ) );
}

// Load content after the content.
function alnp_ex_load_after_content() {
	alnp_ex_after_box( sprintf( __( 'This box was added after the content using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_load_after_content</em>' ) );
}

// Load content after the content for standard posts.
function alnp_ex_load_after_content_type_standard() {
	alnp_ex_after_box( sprintf( __( 'This box was added after the content for standard posts using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_load_after_content_type_standard</em>' ) );
}

// Load content after the content for posts without a title.
function alnp_ex_load_after_content_type_aside() {
	alnp_ex_after_box( sprintf( __( 'This box was added after the content for posts without a title using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_load_after_content_type_aside</em>' ) );
}

// Load content after the content for chat transcript posts.
function alnp_ex_load_after_content_type_chat() {
	alnp_ex_after_box( sprintf( __( 'This box was added after the content for chat transcript posts using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_load_after_content_type_chat</em>' ) );
}

// Load content after the content for posts that contain a gallery.
function alnp_ex_load_after_content_type_gallery() {
	alnp_ex_after_box( sprintf( __( 'This box was added after the content for posts that contain a gallery using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_load_after_content_type_gallery</em>' ) );
}

// Load content after the content for posts that link to another site.
function alnp_ex_load_after_content_type_link() {
	alnp_ex_after_box( sprintf( __( 'This box was added after the content for posts that link to another site using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_load_after_content_type_link</em>' ) );
}

// Load content after the content for posts that contain an image.
function alnp_ex_load_after_content_type_image() {
	alnp_ex_after_box( sprintf( __( 'This box was added after the content for posts that contain an image using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_load_after_content_type_image</em>' ) );
}

// Load content after the content for posts that contain a quote.
function alnp_ex_load_after_content_type_quote() {
	alnp_ex_after_box( sprintf( __( 'This box was added after the content for posts that contain a quote using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_load_after_content_type_quote</em>' ) );
}

// Load content after the content for posts that contains a short status update.
function alnp_ex_load_after_content_type_status() {
	alnp_ex_after_box( sprintf( __( 'This box was added after the content for posts that contains a short status update using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_load_after_content_type_status</em>' ) );
}

// Load content after the content for posts with a video or a video playlist.
function alnp_ex_load_after_content_type_video() {
	alnp_ex_after_box( sprintf( __( 'This box was added after the content for posts with a video or a video playlist using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_load_after_content_type_video</em>' ) );
}

// Load content after the content for posts with an audio file or a audio playlist.
function alnp_ex_load_after_content_type_audio() {
	alnp_ex_after_box( sprintf( __( 'This box was added after the content for posts with an audio file or a audio playlist using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_load_after_content_type_audio</em>' ) );
}

// No more content to load.
function alnp_ex_no_more_posts() {
	alnp_ex_after_box( sprintf( __( 'This box was added because there are no more posts to load using "%s"', 'auto-load-next-post-hooks' ), '<em>alnp_no_more_posts</em>' ) );
}
