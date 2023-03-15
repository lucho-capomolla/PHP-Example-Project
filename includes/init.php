<?php

// Detecta la clase que hace falta para continuar con el script
/*
 * Initialization
 *
 * Register an autoloader, start or resume the session etc.
 */
spl_autoload_register(function ($class) {
    require dirname(__DIR__) . "/classes/{$class}.php";
});

session_start();

require dirname(__DIR__) . '/config.php';
