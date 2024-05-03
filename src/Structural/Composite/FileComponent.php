<?php

namespace App\Structural\Composite;

class FileComponent implements Component
{
    public string $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return  $this->name;
    }
}
