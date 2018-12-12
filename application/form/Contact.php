<?php
class Application_Form_Contact extends Zend_Form{

	public function init()
	{
	 	$this->setDecorators(array( 'FormElements', 'Form'));
        $this->setMethod('post');
        $this->setAttrib('class', 'form-horizontal');

		$name = new Zend_Form_Element_Text('name');
        $name -> clearDecorators();
        $name -> addDecorators($this->getBootstrapDecorator());
        $name->setAttrib('class', 'form-control');
        $name->setAttrib('type', 'text');
        $name->setAttrib('placeholder', 'Nome de usuário');
        $name->setLabel("Nome:")->setRequired(true);

        $contact = new Zend_Form_Element_Text('contact');
        $contact -> clearDecorators();
        $contact -> addDecorators($this->getBootstrapDecorator());
        $contact->setAttrib('class', 'form-control');
        $contact->setAttrib('placeholder', 'Contato');
        $contact->setLabel("Contato:")->setRequired(true);
 
        $endereco = new Zend_Form_Element_Text('endereco');
        $endereco -> clearDecorators();
        $endereco -> addDecorators($this->getBootstrapDecorator());
        $endereco ->setAttrib('endereco', 'form-control');
        $endereco->setAttrib('placeholder', 'Endereco');
        $endereco  ->setLabel("Endereço:")->setRequired(true);

        $email = new Zend_Form_Element_Text('email');
        $email -> clearDecorators();
        $email -> addDecorators($this->getBootstrapDecorator());
        $email -> setAttrib('class','form-control');
        $email->setAttrib('placeholder', 'Email');
        $email -> setLabel("Email:")->setRequired(true);

        $submit = new Zend_Form_Element_Submit('submit');
        $submit -> setAttrib('id', 'submit');
        $submit -> clearDecorators();
        $submit -> setDecorators(array('ViewHelper'));
        $name->setAttrib('type', 'submit');
        $submit->setAttrib('class', 'btn btn-default');
        
		$this->addElements(array($name, $contact, $email, $endereco, $submit));
	}

	private function getBootstrapDecorator(){
        return array(
            'ViewHelper',
            'Errors',
            'Description',
            
            array(
                array('col' => 'HtmlTag'), array('tag' => 'div','class' => 'col-sm-4'),
            ),
            array(
                'Label', array('class' => 'control-label col-sm-2')
            ),
            array(
                array('form-group' => 'HtmlTag'), array('tag' => 'div','class' => 'form-group')
            )
        );
    }
}



