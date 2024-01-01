<?php

namespace Container5UVf2GH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Doctrine_Orm_State_PersistProcessorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.doctrine.orm.state.persist_processor' shared service.
     *
     * @return \ApiPlatform\Doctrine\Common\State\PersistProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/State/ProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Common/State/LinksHandlerTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Common/State/PersistProcessor.php';

        return $container->privates['api_platform.doctrine.orm.state.persist_processor'] = new \ApiPlatform\Doctrine\Common\State\PersistProcessor(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
