<?php

namespace topterm\Componente;

class FormElement {

    public $tipo;
    public $type;
    public $name;
    public $label;

    public function render() {
        switch ($this->tipo) {
            case 'input':
                return "<Label>{$this->label}<{$this->tipo} type='{$this->type}' name='{$this->name}'></label><br/>";
            case 'textarea':
                return "<Label>{$this->label}<{$this->tipo} name='{$this->name}'></{$this->tipo}></label><br/>";
            case 'submit':
                return "<input type='{$this->tipo}' name='{$this->name}'><br/>";
            default:
                break;
        }
    }

}