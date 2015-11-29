<?php

namespace App\Views\Forms;

use topterm\Componente\Form;
use topterm\Componente\FormElement;

class Editar extends Form{
    
    protected $cliente;
    
    protected function Init() {
        $this->setName('Editando Cliente')
                ->setMethod('post')
                ->setAction('/clientes/salvar');
        $id = new FormElement();
        $id->name = 'codigo';
        $id->label = 'Código:';
        $id->tipo = 'input';
        $id->type = 'text';
        $id->readonly = true;
        $id->valor = $this->cliente->getId();
        
        $nome = new FormElement();
        $nome->name = 'nome';
        $nome->label = "Nome:";
        $nome->tipo = 'input';
        $nome->type = 'text';
        $nome->valor = $this->cliente->getNome();
        
        $email = new FormElement();
        $email->name = 'email';
        $email->label = "E-mail:";
        $email->tipo = 'input';
        $email->type = 'email';
        $email->valor = $this->cliente->getEmail();
        
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
    
    public function __construct($cliente) {
        $this->cliente = $cliente;
        parent::__construct();
    }
}
