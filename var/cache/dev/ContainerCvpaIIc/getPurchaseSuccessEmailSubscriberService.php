<?php

namespace ContainerCvpaIIc;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPurchaseSuccessEmailSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventDispatcher\PurchaseSuccessEmailSubscriber' shared autowired service.
     *
     * @return \App\EventDispatcher\PurchaseSuccessEmailSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventDispatcher'.\DIRECTORY_SEPARATOR.'PurchaseSuccessEmailSubscriber.php';

        $a = ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService'));

        if (isset($container->privates['App\\EventDispatcher\\PurchaseSuccessEmailSubscriber'])) {
            return $container->privates['App\\EventDispatcher\\PurchaseSuccessEmailSubscriber'];
        }
        $b = ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService'));

        if (isset($container->privates['App\\EventDispatcher\\PurchaseSuccessEmailSubscriber'])) {
            return $container->privates['App\\EventDispatcher\\PurchaseSuccessEmailSubscriber'];
        }

        return $container->privates['App\\EventDispatcher\\PurchaseSuccessEmailSubscriber'] = new \App\EventDispatcher\PurchaseSuccessEmailSubscriber(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), $a, $b, ($container->privates['App\\Repository\\PurchaseRepository'] ?? $container->load('getPurchaseRepositoryService')));
    }
}
