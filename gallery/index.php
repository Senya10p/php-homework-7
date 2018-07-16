<?php
session_start();

require __DIR__ . '/../classes/View.php';

require (__DIR__ . '/Uploader.php');

//$login = $_POST['login'];
//$password = $_POST['password'];
include_once (__DIR__ . '/functions.php');


$v = new View();

//$galUp->assign('list', $list);


if (null !== getCurrentUser()) {

    $gal = new Uploader('upl');

    $gal->isUploaded();
    $gal->upload(__DIR__ . '/images/', ['image/jpg', 'image/png', 'image/jpeg']); //в качестве аргументов передаём путь до файла и тип загружаемого файла
    $gal->addLog(__DIR__ . '/log.txt');

    $v->display( __DIR__ . '/../templates/gal/upl.php');
    //  echo password_hash('891', PASSWORD_DEFAULT);//PASSWORD_DEFAULT - берёт наиболее стойкий по умолчанию алгоритм
    //  $hash = '$2y$10$ZyYlqBMmi9qEWcgnR10pqOCxRQABUoDhu6mHmm8iOzlHPv//RBosS';
}else {
    header('Location: /gallery/login.php');
}
?>