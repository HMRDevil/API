<?php

spl_autoload_register(function($classname) {
    include 'classes/' . $classname . '.php';
});

$kernel = new Kernel($_REQUEST, $_SERVER);
$kernel->run();