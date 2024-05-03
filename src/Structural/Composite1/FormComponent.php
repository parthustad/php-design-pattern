<?php

namespace App\Structural\Composite1;

class FormComponent implements Component
{
    public string $method;
    public string $action;

    public $fields = [];



    public function __construct($method, $action)
    {
        $this->method = $method;
        $this->action = $action;
    }

    public function addFieldComponent(Component $fieldComponent)
    {
        $this->fields[] = $fieldComponent;
    }
    public function render(): string
    {
        $output = '';
        foreach ($this->fields as $field) {
            $output .= $field->render();
        }
        return "<form method=\"$this->method\" action=\"$this->action\">  $output </form>";
    }
}
