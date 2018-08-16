<?php   //3.3.1 Делаем страницу /article.php?=NNN отображает новость номер NNN
require __DIR__ . '/classes/News.php';

require __DIR__ . '/classes/View.php';

$news = new News(__DIR__ . '/news.txt');

$id = $_GET['id'];

if ( null !== $news->getArticleById($id) ) { //проверяем есть ли статьи с таким id
    $article = $news->getArticleById($id);

} else {
    die('Такой статьи не найдено');
}

$view = new View();

$view->assign('article', $article);

$view->display(__DIR__ . '/templates/art.php');