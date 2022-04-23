<?php
\defined('_JEXEC') or die;

use Joomla\CMS\Installer\InstallerAdapter;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Log\Log;

class Com_FoosInstallerScript
{
    private $minimumJoomlaVersion = '4.0';

    private $minimumPHPVersion = JOOMLA_MINIMUM_PHP;

    public function install($parent): bool
    {
        echo Text::_('COM_FOOS_INSTALLERSCRIPT_INSTALL');
        return true;
    }

    public function uninstall($parent): bool
    {
        echo Text::_('COM_FOOS_INSTALLERSCRIPT_UNINSTALL');

        return true;
    }

    public function update($parent): bool
    {
        echo Text::_('COM_FOOS_INSTALLERSCRIPT_UPDATE');

        return true;
    }

    public function preflight($type, $parent): bool
    {
        if ($type !== 'uninstall') {
            if (!empty($this->minimumPHPVersion) && version_compare(PHP_VERSION, $this->minimumPHPVersion, '<')) {
                Log::add(
                    Text::sprintf('JLIB_INSTALLER_MINIMUM_PHP', $this->minimumPHPVersion),
                    Log::WARNING,
                    'jerror'
                );

                return false;
            }

            if (!empty($this->minimumJoomlaVersion) && version_compare(JVERSION, $this->minimumJoomlaVersion, '<')) {
                Log::add(
                    Text::sprintf('JLIB_INSTALLER_MINIMUM_JOOMLA', $this->minimumJoomlaVersion),
                    Log::WARNING,
                    'jerror'
                );
                return false;
            }
        }

        echo Text::_('COM_FOOS_INSTALLERSCRIPT_PREFLIGHT');

        return true;
    }

    public function postflight($type, $parent)
    {
        echo Text::_('COM_FOOS_INSTALLERSCRIPT_POSTFLIGHT');

        return true;
    }
}
