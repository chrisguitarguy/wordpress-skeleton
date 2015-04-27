<?php

$db = parse_url(getenv('DATABASE_URL') ?: '');
if (false === $db) {
    throw new \UnexpectedValueException('Could not parse DATABASE_URL from environment');
}

$db = array_replace([
    'host'  => 'localhost',
    'user'  => 'root',
    'pass'  => null,
    'path'  => 'wordpress',
    'query' => '',
], array_filter($db));
parse_str($db['query'], $dbArgs);

$table_prefix = 'wp_';
define('DB_HOST', $db['host']);
define('DB_USER', $db['user']);
define('DB_PASSWORD', $db['pass']);
define('DB_NAME', trim($db['path'], '/'));
define('DB_CHARSET', empty($dbArgs['charset']) ? 'utf8' : $dbArgs['charset']);
define('DB_COLLATE', empty($dbArgs['collate']) ? '' : $dbargs['collate']);

define('WP_DEBUG', filter_var(getenv('DEBUG'), FILTER_VALIDATE_BOOLEAN));
define('DISALLOW_FILE_MODS', true);
define('AUTOMATIC_UPDATER_DISABLED', true);

$isSsl = filter_var(empty($_SERVER['HTTPS']) ? false : $_SERVER['HTTPS'], FILTER_VALIDATE_BOOLEAN);
define('WP_CONTENT_DIR', __DIR__.'/content');
define('WP_CONTENT_URL', sprintf('%s://%s/content', $isSsl ? 'https' : 'http', $_SERVER['HTTP_HOST']));
define('WP_SITEURL', sprintf('%s://%s/wp', $isSsl ? 'https' : 'http', $_SERVER['HTTP_HOST']));
define('WP_HOME', sprintf('%s://%s', $isSsl ? 'https' : 'http', $_SERVER['HTTP_HOST']));

unset($db, $dbArgs, $isSsl);

!defined('ABSPATH') && define('ABSPATH', __DIR__.'/wp/');

require __DIR__.'/../vendor/autoload.php';
require_once ABSPATH.'wp-settings.php';
