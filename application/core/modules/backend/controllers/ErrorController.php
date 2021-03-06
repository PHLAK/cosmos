<?php
class Backend_ErrorController extends Zend_Controller_Action
{
    public function errorAction()
    {
        $errors = $this->_getParam('error_handler');

        Zend_Registry::get('log')->err($errors['exception']);

        switch ($errors->type) {
        case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_CONTROLLER:
        case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_ACTION:
            // 404 error -- controller or action not found
            $this->getResponse()->setHttpResponseCode(404);
            $this->view->errorType = 404;
            break;
        default:
            // 500 error -- application error
            $this->getResponse()->setHttpResponseCode(500);
            $this->view->errorType = 500;
            break;
        }
    }
}
