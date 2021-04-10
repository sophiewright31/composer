<?php
require __DIR__ . '/vendor/autoload.php';
use HelloWorld\SayHello;

echo SayHello::world();

require_once 'Hello.php';
$hello = new Hello();
var_dump($hello);