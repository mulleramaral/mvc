<?php

namespace App\Controllers;

use topterm\Controller\Action;
use App\Views\Forms\Inserir;
use App\Views\Forms\Editar;
use topterm\Di\Container;

class Clientes extends Action{
    
    public function clientes() {
        $this->verificaSessao();
        $this->view->titulo = "TopTerm - Clientes";
        $cliente = Container::getClass('clientes');
        $clientes = $cliente->fetchAll();
        $this->view->clientes = $clientes;
        $this->render('clientes');
    }
    
    public function inserir() {
        $this->verificaSessao();
        $this->view->titulo = "TopTerm - Inserir";
        $inserir = new Inserir();
        $this->view->form = $inserir->render();
        $this->render('inserir');
    }
    
    public function salvar(){
        $cliente = Container::getClass('clientes');
        $cliente->setId($_POST['codigo'])
                ->setNome($_POST['nome'])
                ->setEmail($_POST['email']);
        $cliente->salvar();
        header("location:/clientes");
    }

    public function editar($id) {
        $this->verificaSessao();
        $this->view->titulo = "TopTerm = Editar";
        $cliente = Container::getClass('clientes');
        $c = $cliente->find($id);
        $cliente->setId($c['id'])
                ->setNome($c['nome'])
                ->setEmail($c['email']);
        $editar = new Editar($cliente);
        $this->view->form = $editar->render();
        $this->render('inserir');
    }

    public function remover($id = 0) {
        $this->verificaSessao();
        $cliente = Container::getClass('clientes');
        $cliente->remover($id);
        header("location:/clientes");
    }
    
    public function verificaSessao() {
        if (!isset($_SESSION['logado'])) {
            $this->render('erro');
        }
    }
}
