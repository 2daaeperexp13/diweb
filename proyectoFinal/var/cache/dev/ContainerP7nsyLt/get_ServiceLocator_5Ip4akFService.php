<?php

namespace ContainerP7nsyLt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5Ip4akFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5Ip4akF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5Ip4akF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mensajeRepository' => ['privates', 'App\\Repository\\MensajeRepository', 'getMensajeRepositoryService', true],
        ], [
            'mensajeRepository' => 'App\\Repository\\MensajeRepository',
        ]);
    }
}
