<?php

require 'config.php';

spl_autoload_register(function($classname) {
    require 'libs/' . $classname . '.php';
});

$app = new Bootstrap();
