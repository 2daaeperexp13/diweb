<?php

namespace ContainerQje50I2;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DZoILeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dZo_iLe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dZo_iLe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pedidoRepository' => ['privates', 'App\\Repository\\PedidoRepository', 'getPedidoRepositoryService', true],
        ], [
            'pedidoRepository' => 'App\\Repository\\PedidoRepository',
        ]);
    }
}
