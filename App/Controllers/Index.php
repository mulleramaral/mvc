<?php

namespace App\Controllers;
use topterm\Controller\Action;
use App\Views\Index\formFaleConosco;
use topterm\Componente\FormElement;

class Index extends Action {

    public function index() {
        $this->view->titulo = "TopTerm - Home";
        $this->render('index');
    }

    public function empresa() {
        $this->view->titulo = "TopTerm - Empresa";
        $this->render('empresa');
    }

    public function nossotrabalho() {
        $this->view->titulo = "TopTerm - Nosso Trabalho";
        $this->render('nossotrabalho');
    }

    public function localizacao() {
        $this->view->titulo = "TopTerm - Localização";
        $this->render('localizacao');
    }

    public function faleconosco() {
        $this->view->titulo = "TopTerm - Fale Conosco";
        $form = new formFaleConosco();
        $this->view->form = $form->render();
        $this->render('faleconosco');
    }
    
    public function newsletter(){
        $this->view->titulo = "TopTerm - Newsletter";
        $email = new FormElement();
        $email->label = 'E-mail:';
        $email->tipo = 'input';
        $email->type = 'email';
        $email->name = 'email';
        $this->view->email = $email->render();
        $this->render('newsletter');
    }
    
    public function form($form){
        return $form;
    }
    
    public function formElement($element){
        return $element;
    }

}
