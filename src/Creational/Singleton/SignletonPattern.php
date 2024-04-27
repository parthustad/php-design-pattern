<?php

namespace App\Creational\Singleton;

class SignletonPattern
{
    private static SignletonPattern|null $instance = null;
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __construct()
    {
        echo "Object Created";
    }
}
