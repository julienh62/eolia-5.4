<?php

namespace Container9VBJ4II;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TJOfZmJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TJOfZmJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TJOfZmJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'mail' => ['privates', 'App\\Service\\SendMailService', 'getSendMailServiceService', true],
            'tokenGeneratorInterface' => ['privates', 'security.csrf.token_generator', 'getSecurity_Csrf_TokenGeneratorService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'entityManager' => '?',
            'mail' => 'App\\Service\\SendMailService',
            'tokenGeneratorInterface' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
