<?php

\defined('_JEXEC') or die;

use Joomla\CMS\Dispatcher\ComponentDispatcherFactoryInterface;
use Joomla\CMS\Extension\ComponentInterface;
use Joomla\CMS\Extension\Service\Provider\CategoryFactory;
use Joomla\CMS\Extension\Service\Provider\ComponentDispatcherFactory;
use Joomla\CMS\Extension\Service\Provider\MVCFactory;
use Joomla\CMS\HTML\Registry;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use FooNamespace\Component\Foos\Administrator\Extension\FoosComponent;

return new class implements ServiceProviderInterface {
    public function register(Container $container)
    {
        $container->registerServiceProvider(new CategoryFactory('\\FooNamespace\\Component\\Foos'));
        $container->registerServiceProvider(new MVCFactory('\\FooNamespace\\Component\\Foos'));
        $container->registerServiceProvider(new ComponentDispatcherFactory('\\FooNamespace\\Component\\Foos'));

        $container->set(
            ComponentInterface::class,
            function (Container $container) {
                $component = new FoosComponent($container->get(ComponentDispatcherFactoryInterface::class));

                $component->setRegistry($container->get(Registry::class));

                return $component;
            }

        );
    }
};
/*
 provider.php is used to implement the component services. Via an interface, the component class defines which services it provides. A dependency injection container or DI container is used for this. To register, ComponentDispatcherFactory and MVCFactory are mandatory for each component. Registering CategoryFactory is at this place optional, we need CategoryFactory when we integrate categories later.

 */