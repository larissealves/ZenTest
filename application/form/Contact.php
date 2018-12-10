<?php
class Application_Form_Contact extends Zend_Form{
	public function init()
	{

	 	$this->setDecorators(array( 'FormElements', 'Form'));
        $this->setMethod('post');
        $this->setAttrib('class', 'form-horizontal');

		//$this->addElement('text','name', array('label'=>'Digite seu nome: ','required'=>true));
		//$this->addElement('text','contact', array('label'=>'Telefone para Contato: ', 'required'=>true));
		//$this->addElement('submit','submit', array('label'=> 'Adicionar Contato'));

		$name = new Zend_Form_Element_Text('name');
        $name -> clearDecorators();
        $name->setAttrib('class', 'form-control');
        $name -> addDecorators($this->getBootstrapDecorator());
        $name->setLabel("Nome:")->setRequired(true);

        $contact = new Zend_Form_Element_Text('contact');
        $contact -> clearDecorators();
        $contact->setAttrib('class', 'form-control');
        $contact -> addDecorators($this->getBootstrapDecorator());
        $contact->setLabel("contact:")->setRequired(true);


        $submit = new Zend_Form_Element_Submit('relatorio');
        $submit->setLabel('Pesquisar');
        $submit->setAttrib('class', 'btn btn-primary');
        $submit -> setAttrib('id', 'submitbutton');
        $submit->setAttrib('style', 'float:right;');
        $submit -> clearDecorators();
        $submit -> setDecorators(array('ViewHelper'));


		$this->addElements(array($name, $contact, $submit));

	}

	private function getBootstrapDecorator()
    {
        return array(
            'ViewHelper',
            'Errors',
            'Description',

            array(
                array('col' => 'HtmlTag'), array('tag' => 'div','class' => 'col-sm-6'),
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


