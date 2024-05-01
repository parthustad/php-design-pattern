<?php

namespace App\Creational\Builder;

class BuilderPattern
{

    private string $name;
    private string $age;
    private string $address;
    private string $phone;

    
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setAge(string $age): self
    {
        $this->age = $age;
        return $this;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    public function build(): string
    {
        return "User " . $this->name . $this->age . $this->address . $this->phone;
    }
}
