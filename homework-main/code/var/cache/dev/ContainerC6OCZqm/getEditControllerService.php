<?php

namespace ContainerC6OCZqm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEditControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EditController' shared autowired service.
     *
     * @return \App\Controller\EditController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/EditController.php';

        $container->services['App\\Controller\\EditController'] = $instance = new \App\Controller\EditController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\EditController', $container));

        return $instance;
    }
}
