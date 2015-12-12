<?php

/*
 * minii vendor configuration for HiDev
 *
 * @link      https://github.com/hiqdev/minii-hidev-vendor
 * @package   hidev-vendor
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, minii (http://hiqdev.com/minii)
 */

namespace minii\hidev\vendor\tests\unit;

use minii\hidev\vendor\Plugin;

class PluginTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Plugin
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new Plugin();
    }

    protected function tearDown()
    {
    }

    public function testConstructor()
    {
        $this->assertTrue(is_object($this->object));
    }
}
