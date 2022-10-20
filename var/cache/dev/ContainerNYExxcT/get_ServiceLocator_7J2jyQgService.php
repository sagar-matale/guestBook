<?php

namespace ContainerNYExxcT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7J2jyQgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7J2jyQg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7J2jyQg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'gbr' => ['privates', 'App\\Repository\\GuestbookRepository', 'getGuestbookRepositoryService', true],
        ], [
            'gbr' => 'App\\Repository\\GuestbookRepository',
        ]);
    }
}
