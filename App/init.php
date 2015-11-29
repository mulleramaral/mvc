<?php

namespace App;

use topterm\init\Bootstrap;

class init extends Bootstrap {

    public function initRoutes() {
        $rotas = array(
            'home' => array(
                'route' => '/',
                'controller' => 'index',
                'action' => 'index'
            ),
            'empresa' => array(
                'route' => '/empresa',
                'controller' => 'index',
                'action' => 'empresa'
            ),
            'nossotrabalho' => array(
                'route' => '/nossotrabalho',
                'controller' => 'index',
                'action' => 'nossotrabalho'
            ),
            'localizacao' => array(
                'route' => '/localizacao',
                'controller' => 'index',
                'action' => 'localizacao'
            ),
            'faleconosco' => array(
                'route' => '/faleconosco',
                'controller' => 'index',
                'action' => 'faleconosco'
            ),
            'newsletter' => array(
                'route' => '/newsletter',
                'controller' => 'index',
                'action' => 'newsletter'),
            'entrar' => array(
                'route' => '/entrar',
                'controller' => 'index',
                'action' => 'entrar'
            ),
            'entrarenviar' => array(
                'route' => '/entrar/login',
                'controller' => 'index',
                'action' => 'login'
            ),
            'sair'=> array(
                'route' => '/sair',
                'controller' => 'index',
                'action' => 'sair'
            ),
            'listarclientes' => array(
                'route' => '/clientes',
                'controller' => 'clientes',
                'action' => 'clientes'
            ),
            'clientesinserir' => array(
                'route'=> '/clientes/inserir',
                'controller' => 'clientes',
                'action' => 'inserir'
            ),
            'clientessalvar' => array(
                'route' => '/clientes/salvar',
                'controller' => 'clientes',
                'action' => 'salvar'
            ),
            'clienteseditar' => array(
                'route' => '/clientes/editar',
                'controller' => 'clientes',
                'action' => 'editar'
            ),
            'clientesremover' => array(
                'route' => '/clientes/remover',
                'controller' => 'clientes',
                'action' => 'remover'
            )
        );
        $this->setRoutes($rotas);
    }
}
