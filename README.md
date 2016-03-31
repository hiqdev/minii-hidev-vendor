HiDev minii vendor
==================

**minii vendor configuration for HiDev**

[![Latest Stable Version](https://poser.pugx.org/minii/hidev-vendor/v/stable)](https://packagist.org/packages/minii/hidev-vendor)
[![Total Downloads](https://poser.pugx.org/minii/hidev-vendor/downloads)](https://packagist.org/packages/minii/hidev-vendor)
[![Build Status](https://img.shields.io/travis/hiqdev/minii-hidev-vendor.svg)](https://travis-ci.org/hiqdev/minii-hidev-vendor)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqdev/minii-hidev-vendor.svg)](https://scrutinizer-ci.com/g/hiqdev/minii-hidev-vendor/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqdev/minii-hidev-vendor.svg)](https://scrutinizer-ci.com/g/hiqdev/minii-hidev-vendor/)

[HiDev](https://github.com/hiqdev/hidev) is a task runner, code generator and build tool for easier continuos integration.
This plugin provides [minii](https://github.com/hiqdev/minii) internal configuration for HiDev.
Used for minii packages. Can be used as template for configs of other vendors.

Provides minii vendor information and settings:

- general data: vendor name
- contact data: email, forum, github page
- authors data: names, roles, emails, github and home pages
- default license: BSD-3-Clause

See [src/config.yml](src/config.yml).

## Installation

The preferred way to install this yii2-extension is through [composer](http://getcomposer.org/download/).

Either run

```sh
php composer.phar require "minii/hidev-vendor"
```

or add

```json
"minii/hidev-vendor": "*"
```

to the require section of your composer.json.

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2015-2016, HiQDev (http://hiqdev.com/minii)
