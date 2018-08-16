<?php
//3.3.1 Делаем страницу /news.php
require __DIR__ . '/classes/News.php';

require __DIR__ . '/classes/View.php';

$news = new News(__DIR__ . '/news.txt');

$articles = $news->getArticles();

$view = new View();

$view->assign('articles', $articles );

$view->display(__DIR__ . '/templates/news.php');