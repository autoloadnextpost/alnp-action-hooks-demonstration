<?php
/*
 * Plugin Name: Auto Load Next Post: Action Hooks Demonstration
 * Plugin URI: https://github.com/AutoLoadNextPost/alnp-action-hooks-demonstration
 * Description: Demonstrates how to add content before and after the loop and content of the next loaded post that is called.
 * Author: Auto Load Next Post
 * Author URI: https://autoloadnextpost.com
 * Version: 1.2.1
 * Developer: Sébastien Dumont
 * Developer URI: https://sebastiendumont.com
 * Text Domain: alnp-action-hooks-demonstration
 * Domain Path: /languages/
 *
 * GitHub Plugin URI: https://github.com/AutoLoadNextPost/alnp-action-hooks-demonstration
 *
 * Copyright: © 2018 Sébastien Dumont
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @package   Auto Load Next Post: Action Hooks Demonstration
 * @author    Auto Load Next Post
 * @copyright Copyright © 2018, Auto Load Next Post
 * @license   GNU General Public License v3.0 http://www.gnu.org/licenses/gpl-3.0.html
 *
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Demo content box for before.
function alnp_hook_demo_before_box( $content ) {
	echo '<div style="width:100%; height:120px; background-color:#000; color:#fff; text-align:center; border-bottom: 2px solid #524D4D; padding: 7.4% 4%;"><p>' . $content . '</p></div>';
}

// Demo content box for after.
function alnp_hook_demo_after_box( $content ) {
	echo '<div style="width:100%; height:120px; background-color:#fff; color:#000; text-align:center; border-bottom: 2px solid #524D4D; padding: 7.4% 4%;"><p>' . $content . '</p></div>';
}

// The action hooks available in the default Auto Load Next Post template.
$action_hooks = array(
	'load_before_loop',
	'load_before_content',
	'load_before_content_post_format_standard',
	'load_before_content_post_format_aside',
	'load_before_content_post_format_chat',
	'load_before_content_post_format_gallery',
	'load_before_content_post_format_link',
	'load_before_content_post_format_image',
	'load_before_content_post_format_quote',
	'load_before_content_post_format_status',
	'load_before_content_post_format_video',
	'load_before_content_post_format_audio',
	'load_after_loop',
	'load_after_content',
	'load_after_content_post_format_standard',
	'load_after_content_post_format_aside',
	'load_after_content_post_format_chat',
	'load_after_content_post_format_gallery',
	'load_after_content_post_format_link',
	'load_after_content_post_format_image',
	'load_after_content_post_format_quote',
	'load_after_content_post_format_status',
	'load_after_content_post_format_video',
	'load_after_content_post_format_audio',
	'load_before_content_post_type_post',
	'load_after_content_post_type_post',
	'no_more_posts'
);

// Hooks each action hook listed above.
foreach ( $action_hooks as $hook ) {
	add_action( 'alnp_' . $hook, 'alnp_hook_demo_' . $hook );
}

// Load content before the loop.
function alnp_hook_demo_load_before_loop() {
	alnp_hook_demo_before_box( sprintf( __( 'This box was added before the loop using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_before_loop</em>' ) );
}

// Load content after the loop.
function alnp_hook_demo_load_after_loop() {
	alnp_hook_demo_after_box( sprintf( __( 'This box was added after the loop using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_after_loop</em>' ) );
}

// Load content before the content.
function alnp_hook_demo_load_before_content() {
	alnp_hook_demo_before_box( sprintf( __( 'This box was added before the content using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_before_content</em>' ) );
}

// Load content before the content for standard posts.
function alnp_hook_demo_load_before_content_post_format_standard() {
	alnp_hook_demo_before_box( sprintf( __( 'This box was added before the content for standard posts using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_before_content_post_format_standard</em>' ) );
}

// Load content before the content for posts without a title.
function alnp_hook_demo_load_before_content_post_format_aside() {
	alnp_hook_demo_before_box( sprintf( __( 'This box was added before the content for posts without a title!', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_before_content_post_format_aside</em>' ) );
}

// Load content before the content for chat transcript posts.
function alnp_hook_demo_load_before_content_post_format_chat() {
	alnp_hook_demo_before_box( sprintf( __( 'This box was added before the content for chat transcript posts using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_before_content_post_format_chat</em>' ) );
}

// Load content before the content for posts that contain a gallery.
function alnp_hook_demo_load_before_content_post_format_gallery() {
	alnp_hook_demo_before_box( sprintf( __( 'This box was added before the content for posts that contain a gallery using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_before_content_post_format_gallery</em>' ) );
}

// Load content before the content for posts that link to another site.
function alnp_hook_demo_load_before_content_post_format_link() {
	alnp_hook_demo_before_box( sprintf( __( 'This box was added before the content for posts that link to another site using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_before_content_post_format_link</em>' ) );
}

// Load content before the content for posts that contain an image.
function alnp_hook_demo_load_before_content_post_format_image() {
	alnp_hook_demo_before_box( sprintf( __( 'This box was added before the content for posts that contain an image using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_before_content_post_format_image</em>' ) );
}

// Load content before the content for posts that contain a quote.
function alnp_hook_demo_load_before_content_post_format_quote() {
	alnp_hook_demo_before_box( sprintf( __( 'This box was added before the content for posts that contain a quote using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_before_content_post_format_quote</em>' ) );
}

// Load content before the content for posts that contains a short status update.
function alnp_hook_demo_load_before_content_post_format_status() {
	alnp_hook_demo_before_box( sprintf( __( 'This box was added before the content for posts that contains a short status update!', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_before_content_post_format_status</em>' ) );
}

// Load content before the content for posts with a video or a video playlist.
function alnp_hook_demo_load_before_content_post_format_video() {
	alnp_hook_demo_before_box( sprintf( __( 'This box was added before the content for posts with a video or a video playlist using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_before_content_post_format_video</em>' ) );
}

// Load content before the content for posts with an audio file or a audio playlist.
function alnp_hook_demo_load_before_content_post_format_audio() {
	alnp_hook_demo_before_box( sprintf( __( 'This box was added before the content for posts with an audio file or a audio playlist using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_before_content_post_format_audio</em>' ) );
}

// Load content after the content.
function alnp_hook_demo_load_after_content() {
	alnp_hook_demo_after_box( sprintf( __( 'This box was added after the content using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_after_content</em>' ) );
}

// Load content after the content for standard posts.
function alnp_hook_demo_load_after_content_post_format_standard() {
	alnp_hook_demo_after_box( sprintf( __( 'This box was added after the content for standard posts using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_after_content_post_format_standard</em>' ) );
}

// Load content after the content for posts without a title.
function alnp_hook_demo_load_after_content_post_format_aside() {
	alnp_hook_demo_after_box( sprintf( __( 'This box was added after the content for posts without a title using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_after_content_post_format_aside</em>' ) );
}

// Load content after the content for chat transcript posts.
function alnp_hook_demo_load_after_content_post_format_chat() {
	alnp_hook_demo_after_box( sprintf( __( 'This box was added after the content for chat transcript posts using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_after_content_post_format_chat</em>' ) );
}

// Load content after the content for posts that contain a gallery.
function alnp_hook_demo_load_after_content_post_format_gallery() {
	alnp_hook_demo_after_box( sprintf( __( 'This box was added after the content for posts that contain a gallery using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_after_content_post_format_gallery</em>' ) );
}

// Load content after the content for posts that link to another site.
function alnp_hook_demo_load_after_content_post_format_link() {
	alnp_hook_demo_after_box( sprintf( __( 'This box was added after the content for posts that link to another site using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_after_content_post_format_link</em>' ) );
}

// Load content after the content for posts that contain an image.
function alnp_hook_demo_load_after_content_post_format_image() {
	alnp_hook_demo_after_box( sprintf( __( 'This box was added after the content for posts that contain an image using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_after_content_post_format_image</em>' ) );
}

// Load content after the content for posts that contain a quote.
function alnp_hook_demo_load_after_content_post_format_quote() {
	alnp_hook_demo_after_box( sprintf( __( 'This box was added after the content for posts that contain a quote using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_after_content_post_format_quote</em>' ) );
}

// Load content after the content for posts that contains a short status update.
function alnp_hook_demo_load_after_content_post_format_status() {
	alnp_hook_demo_after_box( sprintf( __( 'This box was added after the content for posts that contains a short status update using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_after_content_post_format_status</em>' ) );
}

// Load content after the content for posts with a video or a video playlist.
function alnp_hook_demo_load_after_content_post_format_video() {
	alnp_hook_demo_after_box( sprintf( __( 'This box was added after the content for posts with a video or a video playlist using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_after_content_post_format_video</em>' ) );
}

// Load content after the content for posts with an audio file or a audio playlist.
function alnp_hook_demo_load_after_content_post_format_audio() {
	alnp_hook_demo_after_box( sprintf( __( 'This box was added after the content for posts with an audio file or a audio playlist using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_after_content_post_format_audio</em>' ) );
}

// No more content to load.
function alnp_hook_demo_no_more_posts() {
	alnp_hook_demo_after_box( sprintf( __( 'This box was added because there are no more posts to load using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_no_more_posts</em>' ) );
}

// Load content before the content for post type "post".
function alnp_load_before_content_post_type_post() {
	alnp_hook_demo_before_box( sprintf( __( 'This box was added before content for post type "post" using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_before_content_post_type_post</em>' ) );
}

// Load content after the content for post type "post".
function alnp_load_after_content_post_type_post() {
	alnp_hook_demo_after_box( sprintf( __( 'This box was added after content for post type "post" using "%s"', 'alnp-action-hooks-demonstration' ), '<em>alnp_load_after_content_post_type_post</em>' ) );
}
