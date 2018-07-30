<?php
session_start();

require __DIR__ . '/Uploader.php';

require __DIR__ . '/../classes/View.php';

include_once __DIR__ . '/functions.php';

$view = new View();

$view->render(__DIR__ . '/../templates/gal/upl.php');

if ( null !== getCurrentUser() ) { //Если пользователь вошёл - то он может загружать файлы

    $upload = new Uploader('upl');

    $upload->isUploaded();
    $upload->upload(__DIR__ . '/images/', ['image/jpg', 'image/png', 'image/jpeg']); //в качестве аргументов передаём путь до файла и тип загружаемого файла
    $upload->addLog(__DIR__ . '/log.txt'); //Добавление лог

    header('Location: /gallery/index.php');
}