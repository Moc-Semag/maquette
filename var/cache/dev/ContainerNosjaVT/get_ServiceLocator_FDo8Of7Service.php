<?php

namespace ContainerNosjaVT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FDo8Of7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fDo8Of7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fDo8Of7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'levelRepository' => ['privates', 'App\\Repository\\LevelRepository', 'getLevelRepositoryService', true],
        ], [
            'levelRepository' => 'App\\Repository\\LevelRepository',
        ]);
    }
}
