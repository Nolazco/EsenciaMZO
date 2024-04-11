<?php

namespace ContainerGtDNFxz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\StandAPI::addProduct' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI::changeProduct' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI::createStand' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI::deleteStand' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI::getByCategory' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI::getMessages' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI::getOrders' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI::getOrders2' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI::getProducts' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI::getStand' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI::getStands' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI::newMessage' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI::newOrder' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI::updateStand' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\UserAPI::createSeller' => ['privates', '.service_locator.bGl6S9E', 'get_ServiceLocator_BGl6S9EService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\StandAPI:addProduct' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI:changeProduct' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI:createStand' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI:deleteStand' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI:getByCategory' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI:getMessages' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI:getOrders' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI:getOrders2' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI:getProducts' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI:getStand' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI:getStands' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI:newMessage' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI:newOrder' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\StandAPI:updateStand' => ['privates', '.service_locator.z225LaH', 'get_ServiceLocator_Z225LaHService', true],
            'App\\Controller\\UserAPI:createSeller' => ['privates', '.service_locator.bGl6S9E', 'get_ServiceLocator_BGl6S9EService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\StandAPI::addProduct' => '?',
            'App\\Controller\\StandAPI::changeProduct' => '?',
            'App\\Controller\\StandAPI::createStand' => '?',
            'App\\Controller\\StandAPI::deleteStand' => '?',
            'App\\Controller\\StandAPI::getByCategory' => '?',
            'App\\Controller\\StandAPI::getMessages' => '?',
            'App\\Controller\\StandAPI::getOrders' => '?',
            'App\\Controller\\StandAPI::getOrders2' => '?',
            'App\\Controller\\StandAPI::getProducts' => '?',
            'App\\Controller\\StandAPI::getStand' => '?',
            'App\\Controller\\StandAPI::getStands' => '?',
            'App\\Controller\\StandAPI::newMessage' => '?',
            'App\\Controller\\StandAPI::newOrder' => '?',
            'App\\Controller\\StandAPI::updateStand' => '?',
            'App\\Controller\\UserAPI::createSeller' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\StandAPI:addProduct' => '?',
            'App\\Controller\\StandAPI:changeProduct' => '?',
            'App\\Controller\\StandAPI:createStand' => '?',
            'App\\Controller\\StandAPI:deleteStand' => '?',
            'App\\Controller\\StandAPI:getByCategory' => '?',
            'App\\Controller\\StandAPI:getMessages' => '?',
            'App\\Controller\\StandAPI:getOrders' => '?',
            'App\\Controller\\StandAPI:getOrders2' => '?',
            'App\\Controller\\StandAPI:getProducts' => '?',
            'App\\Controller\\StandAPI:getStand' => '?',
            'App\\Controller\\StandAPI:getStands' => '?',
            'App\\Controller\\StandAPI:newMessage' => '?',
            'App\\Controller\\StandAPI:newOrder' => '?',
            'App\\Controller\\StandAPI:updateStand' => '?',
            'App\\Controller\\UserAPI:createSeller' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]));
    }
}
