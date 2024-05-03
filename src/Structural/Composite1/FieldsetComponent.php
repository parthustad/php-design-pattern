<?php

namespace App\Structural\Composite1;

class FieldsetComponent implements Component
{
    public string $label;
    public string $name;

    public $fields = [];



    public function __construct($label, $name)
    {
        $this->name = $name;
        $this->label = $label;
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
        return "<fieldset><legend>$this->label</legend>  $output </fieldset>";
    }
}
