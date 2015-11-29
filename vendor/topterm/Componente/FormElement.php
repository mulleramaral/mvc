<?php

namespace topterm\Componente;

class FormElement {

    public $tipo;
    public $type;
    public $name;
    public $label;
    public $required;
    public $valor;
    public $readonly = "";
    
    public function render() {
        $componente = "";
        switch ($this->tipo) {
            case 'input':
                $componente = "<Label>{$this->label}<{$this->tipo} type='{$this->type}' name='{$this->name}' value='{$this->valor}'";
                if($this->readonly == true){
                    $componente .= " readonly ";
                }
                $componente .= "'></label><br/>";
                break;
            case 'textarea':
                $componente = "<Label>{$this->label}<{$this->tipo} name='{$this->name}'></{$this->tipo}></label><br/>";
                break;
            case 'submit':
                $componente = "<input type='{$this->tipo}' name='{$this->name}' value='{$this->label}'><br/>";
                break;
            default:
                break;
        }
        return $componente;
    }

}