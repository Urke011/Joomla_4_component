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
 /*
  The file DisplayController.php is the entry point for the Model View Controller part in the administration area of the Foo component. Name the class DisplayController. Joomla expects it like this. Extend BaseController to use many things out-of-the-box. The main task of this controller is to prepare the display. Therefore the default controller is called DisplayController. It calls the method display() of the parent class BaseController in the namespace
namespace Joomla\CMS\MVC\Controller - exactly this is the file libraries/src/MVC/Controller/ BaseController.php. In the Model-View-Controller model, controllers are often used to set up the start environment. Let's create the DisplayController. As always, we first create the DocBlock. Here is an example of a typical document block.
  */
