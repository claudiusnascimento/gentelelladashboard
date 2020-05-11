# Simple package to add Gentellela Dashboard in your admin laravel app.

## Installation

You can install the package via composer:

```bash
composer require claudiusnascimento/gentelelladashboard
```

## Usage

Add the GentelellaDashboardServiceProvider in your providers array

``` php
ClaudiusNascimento\GentelellaDashboard\GentelellaDashboardServiceProvider::class
```

Add the GentelellaDashboard in your alias array

``` php
'GentelellaDashboard' => ClaudiusNascimento\GentelellaDashboard\GentelellaDashboardFacade::class,
```

## Publishing assets

To work properly, you must to publish the assets and views. Publish the config file is optional.

``` php
php artisan vendor:publish --provider="ClaudiusNascimento\GentelellaDashboard\GentelellaDashboardServiceProvider" --tag=views
```

``` php
php artisan vendor:publish --provider="ClaudiusNascimento\GentelellaDashboard\GentelellaDashboardServiceProvider" --tag=assets
```

## Using

Extends the ClaudiusNascimento GentelellaDashboard layout in your view

``` php
@extends('gentelelladashboard::layouts.main')
```

## Note:

For the version 1.0.0 
 - You must to work with the views purely.
 - The config file is empty
 - There is no component

## See the Gentelella Docs:

[Gentelella Documentation](https://colorlibhq.github.io/gentelella/)
<br>
[Gentelella Template Demo](https://colorlib.com/polygon/gentelella/index.html)


### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email cau@claudiusnascimento.com instead of using the issue tracker.

## Credits

- [Claudius Nascimento](https://github.com/claudiusnascimento)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
