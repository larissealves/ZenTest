<?php

require_once (APPLICATION_PATH.'\form\Contact.php');
require_once (APPLICATION_PATH.'\models\Contact.php');


class ContactController extends Zend_Controller_Action
{
 
	public function init()
	{
	          
	}
	 
	public function indexAction(){
	    $contactModel = new Application_Model_DbTable_Contact();
	    $Contact = $contactModel->fetchALL();
	    $this->view->Contact = $Contact;
	}

	public function createAction(){
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

    public function editAction(){
	    $request = $this->getRequest();
	    $id = $request -> getParam('id');
	    $contactModel =  new Application_Model_DbTable_Contact();
	    $contact = $contactModel->fetchRow('id = '.$id);
	    $contactForm = new Application_Form_Contact();
	    if ($request->isPost()){
	     	$contactModel-> edit();
	     	$this->_redirect('contact');
	    }
	    $this->view->contact = $contact;
	    $this->view->contactForm = $contactForm;

    }

    public function deleteAction(){
     	$contactModel = new Application_Model_DbTable_Contact();
     	$contactModel-> deleteContact();
     	$this->_redirect('contact');

    }

    public function adicionarAction(){
    	$request = $this->getRequest();
	    $id = $request -> getParam('id');
	    $contactModel =  new Application_Model_DbTable_Contact();
	    $contact = $contactModel->fetchRow('id = '.$id);
	    $contactForm = new Application_Form_Contact();
	    if ($request->isPost()){
	     	$contactModel-> adicionar();
	     	$this->_redirect('contact');
	    }
	    $this->view->contact = $contact;
	    $this->view->contactForm = $contactForm;
	}
       
}


 
