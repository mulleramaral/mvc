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
                'action' => 'newsletter'
            )
             
        );
        $this->setRoutes($rotas);
    }
}
