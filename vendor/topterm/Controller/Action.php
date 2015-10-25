<?php

namespace topterm\Controller;

class Action {
    protected $view;
    protected $action;
    protected $form;
    
    public function __construct__(){
        $this->view = new \stdClass();
    }
    
    public function render($action, $layout = true){
        $this->action = $action;
        if($layout == true && file_exists("../App/Views/Layout.phtml")){
            include_once '../App/Views/Layout.phtml';
        } 
        else{
            $this->content();
        }
    }
    
    public function content(){
        $class = get_class($this);
        $singleClassName = strtolower(str_replace("App\\Controllers\\", "", $class));
        include_once '../App/Views/' . $singleClassName . "/". $this->action . ".phtml";
    }
}
