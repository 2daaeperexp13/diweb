<?php

namespace ContainerP7nsyLt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_U9Yew3LService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.u9Yew3L' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.u9Yew3L'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mensaje' => ['privates', '.errored..service_locator.u9Yew3L.App\\Entity\\Mensaje', NULL, 'Cannot autowire service ".service_locator.u9Yew3L": it references class "App\\Entity\\Mensaje" but no such service exists.'],
        ], [
            'mensaje' => 'App\\Entity\\Mensaje',
        ]);
    }
}
