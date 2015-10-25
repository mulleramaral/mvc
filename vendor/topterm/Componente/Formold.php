<?php

namespace topterm\View;

class Formold {

    private $form;
    private $formulario;

    public function __construct(array $form) {
        $this->setForm($form);
        $this->construir();
    }

    protected function setForm($form) {
        $this->form = $form;
    }

    protected function construir() {
        $this->formulario = "\n<form method='{$this->form['method']}' action='{$this->form['action']}'>"
                . "<fieldset>\n"
                . "<legend>{$this->form['legend']}</legend>";

        foreach ($this->form['controles'] as $controle => $campo) {
            $this->formulario .= "<Label>{$campo['label']}</label><br>";
        }
        $this->formulario .= "\n</fieldset></form>";
    }

    public function getFormulario() {
        return $this->formulario;
    }

}
