<?php

namespace FooNamespace\Component\Foos\Administrator\Controller;

\defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\BaseController;

class DisplayController extends BaseController
{
    protected $default_view = 'foos';

    public function display($cachable = false, $urlparams = [])
    {
        return parent::display();
    }
}
 
