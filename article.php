<?php   //3.3.1 Делаем страницу /article.php?=NNN отображает новость номер NNN
require __DIR__ . '/classes/News.php';

require __DIR__ . '/classes/View.php';

if ( isset($_GET['id']) ) {

    $new = new News( __DIR__ . '/new.txt');

    $arr = $new->getArticles()[ $_GET['id'] ];

    $caption = $arr->getCaption();
    $fText = $arr->getFText();

}

$v = new View();

$v->assign('caption', $caption );
$v->assign('fText', $fText );

$v->display( __DIR__ . '/templates/art.php');

?>