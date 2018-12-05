<?php

require_once (APPLICATION_PATH.'\form\Contact.php');

class ContactController extends Zend_Controller_Action {
 
     public function init()
     {
          /* Initialize action controller here */
     }
 
     public function indexAction()
     {
         $contactModel = new Application_Model_DbTable_Contact();
         $ContactS = $contactModel->fetchALL();
         $this->view->Contact = $contacts;
     }

     public function createAction()
     {
     	$contactForm = new Application_Form_Contact();
     	$request = $this->getRequest();
     	if ($request->isPost()) {
     		if($contactForm->isValid($request->getPost())) {
     			$contactModel = new Application_Model_DbTable_Contact();
     			$contactModel-> create();
     			$this->_redirect('contact');

     		}
    	}
    	$this->view->contactForm = $contactForm;
     }
 
}