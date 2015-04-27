<?php
/**
 * This file is part of Example Plugin
 *
 * @category    WordPress
 * @copyright   2015 Christopher Davis
 * @license     http://opensource.org/licenses/mit MIT
 */

namespace Chrisguitarguy\Skeleton\ExamplePlugin;

final class Example
{
    use \Chrisguitarguy\Skeleton\Hooks;

    /**
     * {@inheritdoc}
     */
    public function hook()
    {
        add_action('init', [$this, 'registerType']);
    }

    public function registerType()
    {
        register_post_type(Types::TYPE_CUSTOM, [
            'label'     => __('Example Type', 'example'),
            'public'    => true,
        ]);
    }
}
