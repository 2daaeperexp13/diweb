<?php

namespace ContainerMM5ke3Z;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YVT0fTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YVT_0fT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YVT_0fT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'localidad' => ['privates', '.errored..service_locator.YVT_0fT.App\\Entity\\Localidad', NULL, 'Cannot autowire service ".service_locator.YVT_0fT": it references class "App\\Entity\\Localidad" but no such service exists.'],
        ], [
            'localidad' => 'App\\Entity\\Localidad',
        ]);
    }
}
