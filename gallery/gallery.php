<?php

require __DIR__ . '/../classes/View.php';


$list = scandir(__DIR__ . '/images');
$list = array_diff($list, ['.', '..']);
//   var_dump($list);

$v = new View();

$v->assign('list', $list);

$v->display( __DIR__ . '/../templates/gal/index.php');