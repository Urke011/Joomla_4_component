<?php


namespace FooNamespace\Component\Foos\Site\Model;

\defined('_JEXEC') or die;

use Joomla\CMS\MVC\Model\BaseDatabaseModel;

class FooModel extends BaseDatabaseModel
{
    protected $message;

    public function getMsg()
    {
        if (!isset($this->message)) {
            $this->message = 'Hello Foo!';
        }
        return $this->message;
    }
}
