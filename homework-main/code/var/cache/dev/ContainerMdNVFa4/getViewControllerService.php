<?php

namespace ContainerMdNVFa4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getViewControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ViewController' shared autowired service.
     *
     * @return \App\Controller\ViewController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ViewController.php';

        $container->services['App\\Controller\\ViewController'] = $instance = new \App\Controller\ViewController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\ViewController', $container));

        return $instance;
    }
}
