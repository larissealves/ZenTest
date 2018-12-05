<?php

class Application_Model_DbTable_Contact extends Zend_Db_Table_Abstract
{
    protected $_name = 'contato';

    public function create(){
    	$front = Zend_controller_Front::getInstance();
    	$request = $front -> getRequest();
    	$data = array(
    		'name'=> $request->getPost('name'),
    		'number'=>$request->getPost('contact')
    	);
    	$this->insert($data);
    }
}
