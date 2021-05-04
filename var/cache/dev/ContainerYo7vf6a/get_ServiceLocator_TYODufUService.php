<?php

namespace ContainerYo7vf6a;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TYODufUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tYODufU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tYODufU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pizzaioloDao' => ['privates', 'App\\Service\\Dao\\PizzaioloDao', 'getPizzaioloDaoService', true],
        ], [
            'pizzaioloDao' => 'App\\Service\\Dao\\PizzaioloDao',
        ]);
    }
}