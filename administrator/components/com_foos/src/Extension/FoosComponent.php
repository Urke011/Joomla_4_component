<?php

namespace FooNamespace\Component\Foos\Administrator\Extension;

defined('JPATH_PLATFORM') or die;

use Joomla\CMS\Categories\CategoryServiceInterface;
use Joomla\CMS\Categories\CategoryServiceTrait;
use Joomla\CMS\Extension\BootableExtensionInterface;
use Joomla\CMS\Extension\MVCComponent;
use Joomla\CMS\HTML\HTMLRegistryAwareTrait;
use FooNamespace\Component\Foos\Administrator\Service\HTML\AdministratorService;
use Psr\Container\ContainerInterface;

class FoosComponent extends MVCComponent implements BootableExtensionInterface, CategoryServiceInterface
{
use CategoryServiceTrait;
use HTMLRegistryAwareTrait;

public function boot(ContainerInterface $container)
{
$this->getRegistry()->register('foosadministrator', new AdministratorService);
}
}
/*
FoosComponent.php is the code for booting the extension. It is the first file that is called when Joomla loads the component. Boot' is the function to set up the environment of the extension, such as registering new classes. For more information, see the pull request github.com/joomla/joomla-cms/pull/20217. In the following we will expand the file FoosComponent.php.


*/