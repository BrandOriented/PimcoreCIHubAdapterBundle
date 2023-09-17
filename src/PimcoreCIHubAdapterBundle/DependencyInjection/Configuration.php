<?php
/**
 * CI HUB Adapter.
 *
 * LICENSE
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2021 CI HUB GmbH (https://ci-hub.com)
 * @license    https://github.com/ci-hub-gmbh/PimcoreCIHubAdapterBundle/blob/master/gpl-3.0.txt GNU General Public License version 3 (GPLv3)
 */

namespace CIHub\Bundle\PimcoreCIHubAdapterBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('pimcore_ci_hub_adapter');
        $treeBuilder->getRootNode()
            ->addDefaultsIfNotSet()
            ->children()
                ->variableNode('default_preview_thumbnail')
                    ->info('Default image/document thumbnail settings.')
                    ->defaultValue([
                        'format' => 'PNG',
                        'width' => 300,
                        'height' => 300,
                        'frame' => true,
                        'forceResize' => true,
                    ])
                ->end()
            ->end();

        return $treeBuilder;
    }
}
