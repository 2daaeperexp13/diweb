<?php

namespace ContainerKlWTX8F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2OM4LFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2OM4L_f' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2OM4L_f'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorium' => ['privates', '.errored..service_locator.2OM4L_f.App\\Entity\\Categoria', NULL, 'Cannot autowire service ".service_locator.2OM4L_f": it references class "App\\Entity\\Categoria" but no such service exists.'],
        ], [
            'categorium' => 'App\\Entity\\Categoria',
        ]);
    }
}
