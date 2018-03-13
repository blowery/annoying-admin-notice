<?php
/**
 * Plugin Name: Annoying Admin Notice
 * Plugin URI: https://github.com/coderkevin/annoying-admin-notice
 * Description: A very annoying admin notice, for testing only.
 * Version: 1.0.0
 * Author: coderkevin
 *
 * @package annoying-admin-notice
 */

defined( 'ABSPATH' ) or die( 'No direct access.' );

function annoying_admin_notice__hello() {
	$style = 'display: block; z-index: 65535; position: absolute; top: 10px; left: 10px;';
	echo '<div class="notice notice-error" style="' . $style . '">';
	echo   '<p>Hello! I am an annoying admin notice.</p>';
	echo   '<p>This notice does everything an admin notice shouldn\'t!</p>';
	echo   '<p>I\'m not going <em>anywhere.</em>';
	echo   '<p>Well, am I annoying enough for you?! 🤣</p>';
	echo   '<p>I\'m doing every terrible thing an admin notice should never do.</p>';
	echo   '<p>Just one more line of a really annoying notice.</p>';
	echo   '<p>Is this enough lines yet? Not a chance.</p>';
	echo   '<p>I will not be moved!</p>';
	echo   '<p>I make my own (CSS) rules!</p>';
	echo   '<pre>This has been a test of the annoying notice service. Thank you.</pre>';
	echo '</div>';
	echo '<div class="something else entirely">';
	echo   '<p>And here\'s an extraneous div just for good measure. 😉</p>';
	echo '</div>';
}

add_action( 'admin_notices', 'annoying_admin_notice__hello' );

