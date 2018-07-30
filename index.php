<?php       //Главная страница

require __DIR__ . '/classes/View.php';

$v = new View;

$v->display( __DIR__ . '/templates/index.php');
