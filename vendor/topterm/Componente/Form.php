<?php

namespace topterm\Componente;

abstract class Form {

    private $name;
    private $method;
    private $action;
    private $elementos;

    public function __construct() {
        $this->Init();
    }

    protected abstract function Init();

    public function setMethod($method) {
        $this->method = $method;
        return $this;
    }

    public function setAction($action) {
        $this->action = $action;
        return $this;
    }

    public function getAction() {
        return $this->action;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    protected function setElementos($elementos) {
        $this->elementos = $elementos;
    }

    public function render() {
        $formulario = "<form method='{$this->method}' action='{$this->action}'>"
                . "<fieldset>"
                . "<legend>{$this->name}</legend>";

        foreach ($this->elementos as $elemento) {
            $formulario .= $elemento->render();
        }

        $formulario .= "</fieldset>"
                . "</form>";
        return $formulario;
    }

}
