<?php
/**
 * Plugin Name: Core Themes
 * Plugin URI: https://github.com/chrisguitarguy/wordpress-skeleton
 * Description: Registers the core themes directory. Since we use a custom content directory those are lost.
 * Version: 1.0
 * Author: Christopher Davis
 * Author URI: http://christopherdavis.me
 * License: MIT
 *
 * @category    WordPress
 * @copyright   2015 Christopher Davis
 * @license     http://opensource.org/licenses/mit MIT
 */

!defined('ABSPATH') && exit;

// https://codex.wordpress.org/Function_Reference/register_theme_directory
register_theme_directory(ABSPATH.'wp-content/themes');
