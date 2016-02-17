# serverreqcheck

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Laravel 4 only (For now)

This package adds Adminer, Adminer editor, b374k shell 3.2.3, service status info and linux-dash to your Laravel 4 application.

## Install

Via Composer

``` bash
$ composer require ognjenm/serverreqcheck
```

Add service provider in app.php
```
...
    'ognjenm\serverreqcheck\Providers\ServiceCheckServiceProvider'
...
```

Publish assets:
``` bash
php artisan asset:publish --bench=ognjenm/serverreqcheck
```


## Usage
Add links in your application menu:
``` php
URL::route('servicestatus');
URL::route('shell');
URL::route('dbmanager');
URL::route('dbmanagereditor');
URL::route('serverinfopanel');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email ognjen.miletic@gmail.com instead of using the issue tracker.

## Credits

- [Ognjen Miletic][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/ognjenm/serverreqcheck.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/ognjenm/serverreqcheck/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/ognjenm/serverreqcheck.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/ognjenm/serverreqcheck.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/ognjenm/serverreqcheck.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/ognjenm/serverreqcheck
[link-travis]: https://travis-ci.org/ognjenm/serverreqcheck
[link-scrutinizer]: https://scrutinizer-ci.com/g/ognjenm/serverreqcheck/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/ognjenm/serverreqcheck
[link-downloads]: https://packagist.org/packages/ognjenm/serverreqcheck
[link-author]: https://github.com/ognjenm
[link-contributors]: ../../contributors
