<?php

namespace FooNamespace\Component\Foos\Site\View\Foo;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;

class HtmlView extends BaseHtmlView
{
    public function display($tpl = null)
    {
        return parent::display($tpl);
    }
}
