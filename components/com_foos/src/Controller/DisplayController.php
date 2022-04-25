<?php

namespace FooNamespace\Component\Foos\Site\Controller;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\BaseController;
use Joomla\CMS\MVC\Factory\MVCFactoryInterface;

class DisplayController extends BaseController
{
    public function __construct($config = [], MVCFactoryInterface $factory = null, $app = null, $input = null)
    {
        parent::__construct($config, $factory, $app, $input);
    }

    public function display($cachable = false, $urlparams = [])
    {
        parent::display($cachable);

        return $this;
    }
}
