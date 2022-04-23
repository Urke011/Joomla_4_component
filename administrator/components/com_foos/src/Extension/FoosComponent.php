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
