# php-dfp-wrapper

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]



This project is a wrapper around [googleads-php-lib](https://github.com/googleads/googleads-php-lib) aimed at facilitating repeated interactions with the DFP API.

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practises by being named the following.

```
bin/        
config/
src/
tests/
vendor/
```


## Install

Via Composer

``` bash
$ composer require pewpewu/php-dfp-wrapper
```

## Usage

``` php
$dfp = new Pewpewu/Dfp();
echo $dfp->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email ehernandez@vedigital.co instead of using the issue tracker.

## Credits

- [Ernest Hern ndez][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/pewpewu/php-dfp-wrapper.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pewpewu/php-dfp-wrapper/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/pewpewu/php-dfp-wrapper.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/pewpewu/php-dfp-wrapper.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pewpewu/php-dfp-wrapper.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pewpewu/php-dfp-wrapper
[link-travis]: https://travis-ci.org/pewpewu/php-dfp-wrapper
[link-scrutinizer]: https://scrutinizer-ci.com/g/pewpewu/php-dfp-wrapper/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/pewpewu/php-dfp-wrapper
[link-downloads]: https://packagist.org/packages/pewpewu/php-dfp-wrapper
[link-author]: https://github.com/pewpewu
[link-contributors]: ../../contributors
