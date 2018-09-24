<?php
/**
 * Created by PhpStorm.
 * User: zogxray
 * Date: 12.09.18
 * Time: 15:45
 */

namespace Micseres\MicroServiceBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package Micseres\MicroServiceBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree builder.
     *
     * @return TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('micro_service');

        $rootNode
            ->children()
                ->arrayNode('connections')
                    ->prototype('array')
                        ->children()
                            ->scalarNode('ip')
                                ->isRequired()
                                ->cannotBeEmpty()
                            ->end()
                            ->scalarNode('port')
                                ->isRequired()
                                ->cannotBeEmpty()
                            ->end()
                            ->scalarNode('route')
                                ->isRequired()
                                ->cannotBeEmpty()
                            ->end()
                            ->scalarNode('apiKey')
                                ->isRequired()
                                ->cannotBeEmpty()
                            ->end()
                            ->scalarNode('algorithm')
                                ->isRequired()
                                ->cannotBeEmpty()
                                ->defaultNull()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
