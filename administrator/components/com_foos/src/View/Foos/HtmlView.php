<?php

namespace FooNamespace\Component\Foos\Administrator\View\Foos;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;

class HtmlView extends BaseHtmlView
{
public function display($tpl = null): void
{
parent::display($tpl);
}
}

/*
 The view administrator/components/com_foos/ src/View/Foos/HtmlView.php defines objects (toolbar, title) and calls the model (data). At the moment our component has a primitive view. Only a static text is shown. This will change soon! There are several files that work together to generate the view in the frontend. For example, the controller that calls the view is involved. We created the controller earlier in the current chapter. Later, we will add the model, which prepares the data. In the file HtmlView.php all buttons and titles of the toolbar are defined. The model is called to prepare the data for the view.

 */