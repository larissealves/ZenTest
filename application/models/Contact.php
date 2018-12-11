<?php

class Application_Model_DbTable_Contact extends Zend_Db_Table_Abstract { 

    protected $_name = 'contato';


    public function create(){
    	$front = Zend_controller_Front::getInstance();
    	$request = $front -> getRequest();
    	$data = array(
    		'name'  => $request->getPost('name'),
    		'number'=> $request->getPost('contact'),
            'email' => $request->getPost('email'),
            'endereco' => $request->getPost('endereco')
    	);
        $this->insert($data);
    	//$this->insert($data);
    }

    public function edit(){
        $front = Zend_controller_Front::getInstance();
        $request = $front->getRequest();
        $data = array(
            'name'     => $request->getPost('name'),
            'number'   => $request->getPost('contact'),
            'email'    => $request->getPost('email'),
            'endereco' => $request->getPost('endereco')
        );
        $where = array('id = ?'=> $request->getParam("id"));
        $this->update($data, $where);
    }
    

    public function deleteContact() {
        $front = Zend_controller_Front::getInstance();
        $request = $front->getRequest();
        $where = array(
            'id = ?' => $request->getParam("id")
        );
        $this->delete($where);

    }

    public function adicionar() {
       
    } 
}
