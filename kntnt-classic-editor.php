<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Classic Editor
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Disables the block editor (Gutenberg) and enables the classic editor.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

defined( 'ABSPATH' ) || die;

add_filter('use_block_editor_for_post', '__return_false', 5);
