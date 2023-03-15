<?php

/*
Con la funcion 'spl_autoload_register' se puede inferir
que clase hace falta para que se ejecute el código
*/
spl_autoload_register(function ($class) {
  require "classes/{$class}.php";
});

$article = new Article();

var_dump($article);
