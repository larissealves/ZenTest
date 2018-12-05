<?php
class Application_Form_Contact extends Zend_Form{

	public function init()
	{
		$this->addElement('text','name', array('label'=>'Digite seu nome: ','required'=>true));
		$this->addElement('text','contact', array('label'=>'Telefone para Contato: ', 'required'=>true));
		$this->addElement('submit','submit', array('label'=> 'Adicionar Contato'));

	}
}