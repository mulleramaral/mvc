<?php
namespace App\Controllers;

class Index {
    
    public function index() {
        require '../App/Views/index.php';
    }

    public function empresa() {
        require '../App/Views/empresa.php';
    }

    public function nossotrabalho() {
        require '../App/Views/nossotrabalho.php';
    }

    public function localizacao() {
        require '../App/Views/localizacao.php';
    }
    
    public function faleconosco(){
        require '../App/Views/faleconosco.php';
    }
}