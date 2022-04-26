<?php


namespace FooNamespace\Component\Foos\Site\Model;

defined('_JEXEC') or die;
use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Model\BaseDatabaseModel;

class FooModel extends BaseDatabaseModel
{
    protected $message;

    public function getMsg()
    {
        /*
        if (!isset($this->message)) {
            $this->message = 'Hello Foo!';
        }
        */
        $app = Factory::getApplication();
        $this->message = $app->input->get('show_text', "Hi");
        return $this->message;
    }
}
/*
 You can do without the check if (!isset($this->message)) in the new variant because the statement get('show_text', "Hi");
catches the error that occurs when the parameter show_text is not set. Whenever the value show_text is not set, the second parameter "Hi" is used as default.

 */
