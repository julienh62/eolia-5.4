<?php

namespace Container97MnhJv;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDotenvDumpCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Symfony\Component\Dotenv\Command\DotenvDumpCommand' shared autowired service.
     *
     * @return \Symfony\Component\Dotenv\Command\DotenvDumpCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'dotenv'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DotenvDumpCommand.php';

        $container->privates['Symfony\\Component\\Dotenv\\Command\\DotenvDumpCommand'] = $instance = new \Symfony\Component\Dotenv\Command\DotenvDumpCommand(\dirname(__DIR__, 4), 'dev');

        $instance->setName('dotenv:dump');
        $instance->setDescription('Compiles .env files to .env.local.php');

        return $instance;
    }
}
