<?php

namespace App\Structural\Composite;

class FolderComponent implements Component
{
    public string $name;
    private  array $storage = [];
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        $content =  $this->name;
        foreach ($this->storage as $item) {
            $content .= " " .  $item->getName() . " ";
        }
        return $content;
    }
    public function addStorage(Component $storage): void
    {
        $this->storage[] = $storage;
    }
}
