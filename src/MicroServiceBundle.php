<?php
/**
 * Created by PhpStorm.
 * User: zogxray
 * Date: 12.09.18
 * Time: 15:43
 */

namespace Micseres\MicroServiceBundle;

use Micseres\MicroServiceBundle\DependencyInjection\MicroServiceExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class MicroServiceBundle
 * @package Micseres\MicroServiceBundle
 */
class MicroServiceBundle extends Bundle
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }

    /**
     * Register Bundle Extension
     *
     * @return MicroServiceExtension
     */
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new MicroServiceExtension();
        }

        return $this->extension;
    }
}