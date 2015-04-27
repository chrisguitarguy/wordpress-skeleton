<?php
/**
 * Plugin Name: Hooks Support
 * Plugin URI: https://github.com/chrisguitarguy/wordpress-skeleton
 * Description: A PHP trait that adds support for the `instance` `init` scheme prefered for hooking into WordPress
 * Version: 1.0
 * Author: Christopher Davis
 * Author URI: http://christopherdavis.me
 * License: MIT
 *
 * @category    WordPress
 * @copyright   2015 Christopher Davis
 * @license     http://opensource.org/licenses/mit MIT
 */

namespace Chrisguitarguy\Skeleton;

/**
 * A trait that adds ways to hook into WordPress. It's a psuedo-singleton set
 * up with an `instance` method to retreive the instance being used in the plugin.
 *
 * This is done so things can be unhooked easily:
 *
 *      use Acme\ExamplePlugin\SomeClass;
 *
 *      remove_action('init', [SomeClass::instance(), 'someMethod']);
 *
 * Despite having an `instance` method, classes that use this trait are not singletons.
 *
 * @since   1.0
 */
trait Hooks
{
    /**
     * @var     object
     */
    private static $instance = null;

    /**
     * Get the instance of the class, creating it if not present.
     *
     * @return   object
     */
    public static function instance()
    {
        if (null === self::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Create an instance an and add its hooks to WordPress.
     *
     * @return  void
     */
    public static function init()
    {
        static::instance()->hook();
    }

    /**
     * Make calls to add_{action,filter} to hook into WordPress.
     *
     * @return  void
     */
    abstract public function hook();
}
