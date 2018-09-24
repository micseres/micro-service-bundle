<?php
/**
 * Created by PhpStorm.
 * User: zogxray
 * Date: 12.09.18
 * Time: 15:46
 */

namespace Micseres\MicroServiceBundle\DependencyInjection;

use Micseres\MicroServiceReactor\MicroServiceReactor;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

/**
 * Class MicroServiceExtension
 * @package Micseres\MicroServiceBundle\DependencyInjection
 */
class MicroServiceExtension extends Extension
{
    /**
     * {@inheritdoc}
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        foreach ($config['connections'] as $key => $connection) {
            $container->register("m_service.{$key}_reactor", MicroServiceReactor::class)
                ->addArgument($connection['ip'])
                ->addArgument($connection['port'])
                ->addArgument($connection['route'])
                ->addArgument($connection['apiKey'])
                ->addArgument($connection['algorithm'])
                ->setPublic(true);
        }
    }
}
