<?php
//3.3.1 Делаем страницу /news.php
require __DIR__ . '/classes/News.php';

require __DIR__ . '/classes/View.php';

//$arts = news();

$nw = new News(__DIR__ . '/new.txt');
$arr = new Article('Статья 1', 'Краткий текст 1', 'Полный текст 1');
$nw->__construct(__DIR__ . '/../new.txt');

/* Добавляем и сохраняем новости
$nw->add( new Article('Статья 1', 'Краткий текст 1', 'Полный текст 1') );
$nw->add( new Article('Статья 2', 'Краткий текст 2', 'Полный текст 2') );
$nw->add( new Article('Статья 3', 'Краткий текст 3', 'Полный текст 3') );
$nw->add( new Article('Статья 4', 'Краткий текст 4', 'Полный текст 4') );
$nw->add( new Article('Статья 5', 'Краткий текст 5', 'Полный текст 5') );

$nw->save();
*/

$nww = $nw->getArticles();

//var_dump($nww);

$v = new View();

$v->assign('nww', $nww );

$v->display( __DIR__ . '/templates/news.php');


?>
