<?php

namespace ContainerLxBLwph;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AOEYXy4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.AOEYXy4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AOEYXy4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pedido' => ['privates', '.errored..service_locator.AOEYXy4.App\\Entity\\Pedido', NULL, 'Cannot autowire service ".service_locator.AOEYXy4": it references class "App\\Entity\\Pedido" but no such service exists.'],
        ], [
            'pedido' => 'App\\Entity\\Pedido',
        ]);
    }
}
