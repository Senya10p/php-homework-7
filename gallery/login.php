<?php
session_start();

include_once (__DIR__ . '/functions.php');  //подключаем файл с функциями

require __DIR__ . '/../classes/View.php';


if ( isset($_GET['do'] ) ){
    if ( $_GET['do'] == 'logout' ) {      //После нажатия на ссылку Выход уничтожаем все данные сессии
        session_destroy();
        session_start();                //Начинаем новую сессию
        // var_dump($_SESSION);
    }
}


if ( null !== getCurrentUser() ) {      //Если пользователь вошёл, то редирект на главную страницу
    header('Location: /gallery/index.php');
    exit;
} else {

    if ( isset( $_POST['login'] ) ) {
        if ( isset( $_POST['password'] ) ) { //ЕСЛИ введены данные в форму входа
            if ( checkPassword($_POST['login'], $_POST['password']) ) {
                $_SESSION['username'] = $_POST['login'];  //пометили клиента
                header('Location: /gallery/index.php');
                exit;

            }
        }
    }

    $v = new View();
    $v->display( __DIR__ . '/../templates/gal/log.php');
}



?>