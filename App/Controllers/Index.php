<?php

namespace App\Controllers;

use topterm\Controller\Action;
use App\Views\Forms\FaleConosco;
use App\Views\Forms\entrar;
use topterm\Componente\FormElement;
use topterm\Di\Container;

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
        $form = new FaleConosco();
        $this->view->form = $form->render();
        $this->render('faleconosco');
    }

    public function newsletter() {
        $this->view->titulo = "TopTerm - Newsletter";
        $email = new FormElement();
        $email->label = 'E-mail:';
        $email->tipo = 'input';
        $email->type = 'email';
        $email->name = 'email';
        $this->view->email = $email->render();
        $this->render('newsletter');
    }

    public function entrar() {
        $this->view->titulo = "TopTerm - Efetuar Login";
        $entrar = new entrar();
        $this->view->form = $entrar->render();
        $this->render('entrar');
    }

    public function login() {
        $login = Container::getClass('Login');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $resultados = $login->validarLogin($usuario, $senha);
        if (empty($resultados)) {
            echo 'Usuario ou senha inválidos';
            header('Location:/entrar');
        } else {
            $_SESSION['logado'] = true;
            $_SESSION['usuario'] = $usuario;
            header('Location:/');
        }
    }

    public function sair() {
        unset($_SESSION['logado']);
        unset($_SESSION['usuario']);
        header("Location:/");
    }

    public function form($form) {
        return $form;
    }

    public function formElement($element) {
        return $element;
    }

}
