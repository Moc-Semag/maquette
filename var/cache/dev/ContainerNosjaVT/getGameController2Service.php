<?php

namespace ContainerNosjaVT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGameController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Back\GameController' shared autowired service.
     *
     * @return \App\Controller\Back\GameController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Back/GameController.php';

        $container->services['App\\Controller\\Back\\GameController'] = $instance = new \App\Controller\Back\GameController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\Back\\GameController', $container));

        return $instance;
    }
}
