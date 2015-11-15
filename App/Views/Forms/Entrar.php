<?php

namespace App\Views\Forms;

use topterm\Componente\Form;
use topterm\Componente\FormElement;

class entrar extends Form {

    public function Init() {
        $this->setName('Entrar')
                ->setMethod('post')
                ->setAction('/entrar/login');

        $usuario = new FormElement();
        $usuario->name = 'usuario';
        $usuario->label = 'Usuario:';
        $usuario->tipo = 'input';
        $usuario->type = 'text';

        $senha = new FormElement();
        $senha->name = 'senha';
        $senha->label = 'Senha:';
        $senha->tipo = 'input';
        $senha->type = 'password';

        $submit = new FormElement();
        $submit->name = 'submit';
        $submit->label = 'Enviar';
        $submit->tipo = 'submit';
        $submit->type = 'submit';

        $elementos = array(
            $usuario,$senha,$submit
        );

        $this->setElementos($elementos);
    }
}

?>