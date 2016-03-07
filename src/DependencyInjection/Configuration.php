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

namespace Scribe\Teavee\BlockManagerBundle\DependencyInjection;

use Scribe\WonkaBundle\Component\DependencyInjection\AbstractConfiguration;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

/**
 * Class Configuration.
 */
class Configuration extends AbstractConfiguration
{
    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $this
            ->getBuilderRoot()
            ->getNodeDefinition()
            ->canBeEnabled();

        return $this
            ->getBuilderRoot()
            ->getTreeBuilder();
    }
}

/* EOF */
