<?php

namespace App\Views\Forms;

use topterm\Componente\Form;
use topterm\Componente\FormElement;

class Inserir extends Form{
    
    protected function Init() {
        $this->setName('Inserir Cliente')
                ->setMethod('post')
                ->setAction('/clientes/salvar');
        $id = new FormElement();
        $id->name = 'codigo';
        $id->label = 'Código:';
        $id->tipo = 'input';
        $id->type = 'text';
        $id->readonly = true;
        
        $nome = new FormElement();
        $nome->name = 'nome';
        $nome->label = "Nome:";
        $nome->tipo = 'input';
        $nome->type = 'text';
        
        $email = new FormElement();
        $email->name = 'email';
        $email->label = "E-mail:";
        $email->tipo = 'input';
        $email->type = 'email';
        
        $gravar = new FormElement();
        $gravar->name = 'Gravar';
        $gravar->label = 'Gravar';
        $gravar->tipo = 'submit';
        $gravar->type = 'submit';
        
        $elementos = array(
            $id,$nome,$email,$gravar
        );
        
        $this->setElementos($elementos);
    }
    
    public function __construct() {
        parent::__construct();
    }
}
