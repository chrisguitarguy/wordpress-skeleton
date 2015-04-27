<?php
/**
 * This file is part of Example Plugin
 *
 * @category    WordPress
 * @copyright   2015 Christopher Davis
 * @license     http://opensource.org/licenses/mit MIT
 */

use Chrisguitarguy\Skeleton\ExamplePlugin;

function acme_example_load()
{
    ExamplePlugin\Example::init();
    do_action('acme_example_loaded');
}
