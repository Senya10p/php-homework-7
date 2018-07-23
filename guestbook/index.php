<?php

require __DIR__ . '/classes/GuestBook.php';

require __DIR__ . '/../classes/View.php';


$gb = new GuestBook(__DIR__ . '/guestbook1.txt');

if ( isset($_POST['msg']) ) {

    $gb->append( $_POST['msg'] )->save() ; //Добавляем запись в массив и сохраняем массив в файл с записями
}

$v = new View();

$v->assign('records', $gb->getData());

$v->display( __DIR__ . '/../templates/gbook/index.php');