<?php
/*
 * Plugin Name:       Auto Load Next Post Hooks Example
 * Plugin URI:        https://github.com/seb86/Auto-Load-Next-Post-Hooks-Example
 * Description:       This demonstrates how to add content before and after the loop and content of the next loaded post that is called. Requires v1.4.1 of Auto Load Next Post
 * Version:           1.0.0
 * Author:            Sébastien Dumont
 * Author URI:        http://www.sebastiendumont.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       auto-load-next-post
 * Domain Path:       languages
 * Network:           false
 * GitHub Plugin URI: https://github.com/seb86/Auto-Load-Next-Post-Hooks-Example
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Demo content box before
function alnp_ex_before_box( $content ) {
	echo '<div style="width:100%; height:120px; background-color:#000; color:#fff; text-align:center; line-height: 120px; border-bottom: 2px solid #524D4D;"><p>' . $content . '</p></div>';
}

// Demo content box after
function alnp_ex_after_box( $content ) {
	echo '<div style="width:100%; height:120px; background-color:#fff; color:#000; text-align:center; line-height: 120px; border-bottom: 2px solid #524D4D;"><p>' . $content . '</p></div>';
}

// Load content before the loop
function alnp_ex_load_before_loop() {
	alnp_ex_before_box( 'This box was added before the loop!' );
}
add_action( 'alnp_load_before_loop', 'alnp_ex_load_before_loop' );

// Load content after the loop
function alnp_ex_load_after_loop() {
	alnp_ex_after_box( 'This box was added after the loop!' );
}
add_action( 'alnp_load_after_loop', 'alnp_ex_load_after_loop' );

// Load content before the content
function alnp_ex_load_before_content() {
	alnp_ex_before_box( 'This box was added before the content!' );
}
add_action( 'alnp_load_before_content', 'alnp_ex_load_before_content' );

// Load content before the content for standard posts
function alnp_ex_load_before_content_type_standard() {
	alnp_ex_before_box( 'This box was added before the content for standard posts!' );
}
add_action( 'alnp_load_before_content_type_standard', 'alnp_ex_load_before_content_type_standard' );

// Load content before the content for posts without a title
function alnp_ex_load_before_content_type_aside() {
	alnp_ex_before_box( 'This box was added before the content for posts without a title!' );
}
add_action( 'alnp_load_before_content_type_aside', 'alnp_ex_load_before_content_type_aside' );

// Load content before the content for chat transcript posts
function alnp_ex_load_before_content_type_chat() {
	alnp_ex_before_box( 'This box was added before the content for chat transcript posts!' );
}
add_action( 'alnp_load_before_content_type_chat', 'alnp_ex_load_before_content_type_chat' );

// Load content before the content for posts that contain a gallery
function alnp_ex_load_before_content_type_gallery() {
	alnp_ex_before_box( 'This box was added before the content for posts that contain a gallery!' );
}
add_action( 'alnp_load_before_content_type_gallery', 'alnp_ex_load_before_content_type_gallery' );

// Load content before the content for posts that link to another site
function alnp_ex_load_before_content_type_link() {
	alnp_ex_before_box( 'This box was added before the content for posts that link to another site!' );
}
add_action( 'alnp_load_before_content_type_link', 'alnp_ex_load_before_content_type_link' );

// Load content before the content for posts that contain an image
function alnp_ex_load_before_content_type_image() {
	alnp_ex_before_box( 'This box was added before the content for posts that contain an image!' );
}
add_action( 'alnp_load_before_content_type_image', 'alnp_ex_load_before_content_type_image' );

// Load content before the content for posts that contain a quote
function alnp_ex_load_before_content_type_quote() {
	alnp_ex_before_box( 'This box was added before the content for posts that contain a quote!' );
}
add_action( 'alnp_load_before_content_type_quote', 'alnp_ex_load_before_content_type_quote' );

// Load content before the content for posts that contains a short status update
function alnp_ex_load_before_content_type_status() {
	alnp_ex_before_box( 'This box was added before the content for posts that contains a short status update!' );
}
add_action( 'alnp_load_before_content_type_status', 'alnp_ex_load_before_content_type_status' );

// Load content before the content for posts with a video or a video playlist
function alnp_ex_load_before_content_type_video() {
	alnp_ex_before_box( 'This box was added before the content for posts with a video or a video playlist!' );
}
add_action( 'alnp_load_before_content_type_video', 'alnp_ex_load_before_content_type_video' );

// Load content before the content for posts with an audio file or a audio playlist
function alnp_ex_load_before_content_type_audio() {
	alnp_ex_before_box( 'This box was added before the content for posts with an audio file or a audio playlist!' );
}
add_action( 'alnp_load_before_content_type_audio', 'alnp_ex_load_before_content_type_audio' );

// Load content after the content
function alnp_ex_load_after_content() {
	alnp_ex_after_box( 'This box was added after the content!' );
}
add_action( 'alnp_load_after_content', 'alnp_ex_load_after_content' );

// Load content after the content for standard posts
function alnp_ex_load_after_content_type_standard() {
	alnp_ex_after_box( 'This box was added after the content for standard posts!' );
}
add_action( 'alnp_load_after_content_type_standard', 'alnp_ex_load_after_content_type_standard' );

// Load content after the content for posts without a title
function alnp_ex_load_after_content_type_aside() {
	alnp_ex_after_box( 'This box was added after the content for posts without a title!' );
}
add_action( 'alnp_load_after_content_type_aside', 'alnp_ex_load_after_content_type_aside' );

// Load content after the content for chat transcript posts
function alnp_ex_load_after_content_type_chat() {
	alnp_ex_after_box( 'This box was added after the content for chat transcript posts!' );
}
add_action( 'alnp_load_after_content_type_chat', 'alnp_ex_load_after_content_type_chat' );

// Load content after the content for posts that contain a gallery
function alnp_ex_load_after_content_type_gallery() {
	alnp_ex_after_box( 'This box was added after the content for posts that contain a gallery!' );
}
add_action( 'alnp_load_after_content_type_gallery', 'alnp_ex_load_after_content_type_gallery' );

// Load content after the content for posts that link to another site
function alnp_ex_load_after_content_type_link() {
	alnp_ex_after_box( 'This box was added after the content for posts that link to another site!' );
}
add_action( 'alnp_load_after_content_type_link', 'alnp_ex_load_after_content_type_link' );

// Load content after the content for posts that contain an image
function alnp_ex_load_after_content_type_image() {
	alnp_ex_after_box( 'This box was added after the content for posts that contain an image!' );
}
add_action( 'alnp_load_after_content_type_image', 'alnp_ex_load_after_content_type_image' );

// Load content after the content for posts that contain a quote
function alnp_ex_load_after_content_type_quote() {
	alnp_ex_after_box( 'This box was added after the content for posts that contain a quote!' );
}
add_action( 'alnp_load_after_content_type_quote', 'alnp_ex_load_after_content_type_quote' );

// Load content after the content for posts that contains a short status update
function alnp_ex_load_after_content_type_status() {
	alnp_ex_after_box( 'This box was added after the content for posts that contains a short status update!' );
}
add_action( 'alnp_load_after_content_type_status', 'alnp_ex_load_after_content_type_status' );

// Load content after the content for posts with a video or a video playlist
function alnp_ex_load_after_content_type_video() {
	alnp_ex_after_box( 'This box was added after the content for posts with a video or a video playlist!' );
}
add_action( 'alnp_load_after_content_type_video', 'alnp_ex_load_after_content_type_video' );

// Load content after the content for posts with an audio file or a audio playlist
function alnp_ex_load_after_content_type_audio() {
	alnp_ex_after_box( 'This box was added after the content for posts with an audio file or a audio playlist!' );
}
add_action( 'alnp_load_after_content_type_audio', 'alnp_ex_load_after_content_type_audio' );
