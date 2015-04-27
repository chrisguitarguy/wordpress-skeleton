# Modern WordPress Skeleton

A *modern* (whatever that means) WordPress skeleton to use for creating
[Composer](http://getcomposer.org/) based WordPress installations.

## Gettings Started

Create a new project with composer:

```shell
$ composer create-project chrisguitarguy/wordpress-skeleton new-site ~1.0
$ cd new-site
```

From here you can add new dependencies to `composer.json`, remove the example
plugins and themes and do any modifications you need.

## Autoloading

The plugins and themes you build should be autoloaded with `composer.json`. See
the example plugin line there right now:

```json
{
    "autoload": {
        "psr-4": {
            "Chrisguitarguy\\Skeleton\\ExamplePlugin\\": "web/content/plugins/example/inc/"
        },
        "files": [
            "web/content/plugins/example/inc/functions.php"
        ]
    }
}
```

Only autoload file that declare symbols (functions, contants, classes)! Not
files that cause side effects.

## Excluding Files from Version Control

Because not all packages can go in `/vendor`, you'll need to manually exclude
things via `.gitignore` (or `.hgignore`, `.svnignore`, etc). There's an example
here with the WordPress SEO plugin which is ignored in `.gitignore`:

```
/web/content/plugins/wordpress-seo
```

## You're Missing {X} From `wp-config.php`

Correct. This is meant to get you started, not make all the choices for you.

The various [salts](https://api.wordpress.org/secret-key/1.1/salt/) are missing,
for example. You could add those yourself to another file and `include` it from
`wp-config.php` or let WordPress generated them for you and save them in the
database (what happens when they are missing).

## WHY?!

Because composer is nice and WordPress needs a good dose of modern development
practices.

## License

MIT. See the `LICENSE` file.
