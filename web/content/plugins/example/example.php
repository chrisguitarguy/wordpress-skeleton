<?php
/**
 * Plugin Name: Example Plugin
 * Plugin URI: https://github.com/chrisguitarguy/wordpress-skeleton
 * Description: An example plugin, feel free to remove.
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

add_action('plugins_loaded', 'acme_example_load');
