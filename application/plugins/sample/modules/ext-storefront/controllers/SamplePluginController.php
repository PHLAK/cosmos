<?php
class Storefront_SamplePluginController extends Zend_Controller_Action
{
    public function indexAction()
    {
        $this->view->content = Cosmos_Api::get()->content->read();
    }
    
}