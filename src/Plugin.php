<?php

/*
 * minii vendor configuration for HiDev
 *
 * @link      https://github.com/hiqdev/minii-hidev-vendor
 * @package   hidev-vendor
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, minii (http://hiqdev.com/minii)
 */

namespace minii\hidev\vendor;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'configFiles' => [
            '@minii/hidev/vendor/config.yml',
        ],
        'views' => [
            '@minii/hidev/vendor/views',
        ],
    ];
}
