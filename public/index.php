<?php

require_once(__DIR__ . "/../vendor/autoload.php");

use App\Creational\Singleton\SignletonPattern;

$obj1 = SignletonPattern::getInstance();
$obj2 = SignletonPattern::getInstance();
