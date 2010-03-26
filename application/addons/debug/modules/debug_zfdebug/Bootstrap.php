<?php
class Debug_Zfdebug_Bootstrap extends Cosmos_Bootstrap_Module
{
    protected $_file = __FILE__;
    
    protected function _initZfDebug()
    {
        if ($this->hasOption('zfdebug'))
        {
            $autoloader = Zend_Loader_Autoloader::getInstance();
            $autoloader->registerNamespace('ZFDebug');
            $this->bootstrap('FrontController');
            $zfdebug = new ZFDebug_Controller_Plugin_Debug($this->getOption('zfdebug'));
            $this->getResource('FrontController')->registerPlugin($zfdebug);
        }
    }
}