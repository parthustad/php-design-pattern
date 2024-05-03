<?php

namespace App\Structural\Composite1;

class FieldComponent implements Component
{
    public string $label;
    public string $name;
    public string $type;
    public string $val;



    public function __construct($label,$name,$type,$val)
    {
        $this->label = $label;
        $this->name = $name; 
        $this->type = $type;
         $this->val = $val;
    }
    public function render(): string
    {
        return  "<lable>$this->label</label><input type=\"$this->type\" name=\" $this->name\" value=\" $this->val\">";
    }
}
