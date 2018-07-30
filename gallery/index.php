<?php
session_start();

require __DIR__ . '/../classes/View.php';

include_once __DIR__ . '/functions.php';

$view = new View();

if ( null !== getCurrentUser() ) { //Если пользователь вошёл - отображение формы для загрузки файлов

     $view->display(__DIR__ . '/../templates/gal/upl.php');

} else {
    header('Location: /gallery/login.php');
}