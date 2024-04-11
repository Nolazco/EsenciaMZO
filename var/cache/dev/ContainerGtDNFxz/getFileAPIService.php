<?php

namespace ContainerGtDNFxz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFileAPIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FileAPI' shared autowired service.
     *
     * @return \App\Controller\FileAPI
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/FileAPI.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        $container->services['App\\Controller\\FileAPI'] = $instance = new \App\Controller\FileAPI(($container->privates['filesystem'] ??= new \Symfony\Component\Filesystem\Filesystem()), ($container->privates['validator'] ?? $container->load('getValidatorService')));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\FileAPI', $container));

        return $instance;
    }
}
