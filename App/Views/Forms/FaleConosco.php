<?php

namespace App\Views\Forms;

use topterm\Componente\Form;
use topterm\Componente\FormElement;

class FaleConosco extends Form {

    public function Init() {
        $this->setName('Fale Conosco')
                ->setMethod('post')
                ->setAction('entrar/enviar');

        $nome = new FormElement();
        $nome->name = 'nome';
        $nome->label = 'Nome:';
        $nome->tipo = 'input';
        $nome->type = 'text';

        $email = new FormElement();
        $email->name = 'email';
        $email->label = 'E-mail:';
        $email->tipo = 'input';
        $email->type = 'email';

        $mensagem = new FormElement();
        $mensagem->name = 'mensagem';
        $mensagem->label = 'Mensagem:';
        $mensagem->tipo = 'textarea';
        $mensagem->type = '';

        $submit = new FormElement();
        $submit->name = 'submit';
        $submit->label = 'Enviar';
        $submit->tipo = 'submit';
        $submit->type = 'submit';

        $elementos = array(
            $nome, $email,$mensagem,$submit
        );

        $this->setElementos($elementos);
    }

}

?>