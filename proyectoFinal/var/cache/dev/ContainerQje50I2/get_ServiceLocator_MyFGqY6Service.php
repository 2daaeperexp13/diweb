<?php

namespace ContainerQje50I2;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MyFGqY6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MyFGqY6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MyFGqY6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'provincium' => ['privates', '.errored..service_locator.MyFGqY6.App\\Entity\\Provincia', NULL, 'Cannot autowire service ".service_locator.MyFGqY6": it references class "App\\Entity\\Provincia" but no such service exists.'],
        ], [
            'provincium' => 'App\\Entity\\Provincia',
        ]);
    }
}
