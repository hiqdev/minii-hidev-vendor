<?php

/*
 * minii vendor configuration for HiDev
 *
 * @link      https://github.com/hiqdev/minii-hidev-vendor
 * @package   hidev-vendor
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, minii (http://hiqdev.com/minii)
 */

error_reporting(-1);

define('YII_ENABLE_ERROR_HANDLER', false);
define('YII_DEBUG', true);
$_SERVER['SCRIPT_NAME']     = '/' . __DIR__;
$_SERVER['SCRIPT_FILENAME'] = __FILE__;
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
