<?php
$loader = require __DIR__ . '/vendor/autoload.php';
$loader->addPsr4('App\\Wcs\\', __DIR__);

require_once 'Hello.php';
$hello = new Hello();
var_dump($hello);