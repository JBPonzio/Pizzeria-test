<?php

namespace ContainerYo7vf6a;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BQL9fNUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bQL9fNU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bQL9fNU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pizzeriaDao' => ['privates', 'App\\Service\\Dao\\PizzeriaDao', 'getPizzeriaDaoService', true],
        ], [
            'pizzeriaDao' => 'App\\Service\\Dao\\PizzeriaDao',
        ]);
    }
}
