<?php
//3.3.1 Делаем страницу /news.php
require __DIR__ . '/classes/News.php';

require __DIR__ . '/classes/View.php';

$news = new News(__DIR__ . '/news.txt');

// Добавляем и сохраняем новости
/*
$news->add( new Article('Статья 1', 'Краткий текст 1', 'Полный текст 1') );
$news->add( new Article('Статья 2', 'Краткий текст 2', 'Полный текст 2') );
$news->add( new Article('Статья 3', 'Краткий текст 3', 'Полный текст 3') );
$news->add( new Article('Статья 4', 'Краткий текст 4', 'Полный текст 4') );
$news->add( new Article('Статья 5', 'Краткий текст 5', 'Полный текст 5') );
$news->add( new Article('Статья 6', 'Краткий текст 6', 'Полный текст 6') );

$news->save();
*/

$articles = $news->getArticles();

$view = new View();

$view->assign('articles', $articles );

$view->display(__DIR__ . '/templates/news.php');