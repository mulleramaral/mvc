<?php

require_once '../vendor/autoload.php';


$pagina = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
switch ($pagina){
    case '/':
        $titulo = 'Home';
        break;
    case '/empresa':
        $titulo = 'Empresa';
        break;
    case '/nossotrabalho':
        $titulo = 'Nosso Trabalho';
        break;
    case '/localizacao':
        $titulo = 'Localizaчуo';
        break;
    case '/faleconosco':
        $titulo = 'Fale Conosco';
        break;
    default :
        $titulo = 'Pсgina nуo encontrada';
}

require_once './cabecalho.php';
$Init = new \App\init();
require_once './rodape.php';
