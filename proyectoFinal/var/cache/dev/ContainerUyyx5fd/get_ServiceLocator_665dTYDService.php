<?php

namespace ContainerUyyx5fd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_665dTYDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.665dTYD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.665dTYD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'provinciarep' => ['privates', 'App\\Repository\\ProvinciaRepository', 'getProvinciaRepositoryService', true],
        ], [
            'provinciarep' => 'App\\Repository\\ProvinciaRepository',
        ]);
    }
}
