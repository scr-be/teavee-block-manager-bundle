<?php

/*
 * This file is part of the Teavee Block Manager Bundle.
 *
 * (c) Scribe Inc.     <oss@scr.be>
 * (c) Rob Frawley 2nd <rmf@scr.be>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Scribe\Teavee\BlockManagerBundle\Tests;

use Scribe\Wonka\Utility\UnitTest\WonkaTestCase;

/**
 * Class ScribeTeaveeBlockManagerBundleTest.
 */
class ScribeTeaveeBlockManagerBundleTest extends WonkaTestCase
{
    /**
     * @var \AppKernel
     */
    public static $kernel;

    public function setUp()
    {
        $kernel = new \AppKernel('test', true);
        $kernel->boot();

        self::$kernel = $kernel;
    }

    public function tearDown()
    {
        if (self::$kernel instanceof \AppKernel) {
            self::$kernel->shutdown();
        }
    }

    public function test_kernel_build_container()
    {
        static::assertInstanceOf('Symfony\Component\DependencyInjection\ContainerInterface', self::$kernel->getContainer());
    }
}

/* EOF */
