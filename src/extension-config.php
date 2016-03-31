<?php

/*
 * minii vendor configuration for HiDev
 *
 * @link      https://github.com/hiqdev/minii-hidev-vendor
 * @package   hidev-vendor
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, minii (http://hiqdev.com/minii)
 */

return [
    'components' => [
        'config' => [
            'include' => [
                '@minii/hidev/vendor/config.yml',
            ],
            'views' => [
                '@minii/hidev/vendor/views',
            ],
        ],
    ],
];
