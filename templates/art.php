<html>
<head>
    <title><?php echo $article->getCaption(); ?></title>
</head>
<body>
    <h2>Новости</h2>
    <h3><?php echo $article->getCaption(); ?></h3>

    <article><?php echo $article->getFText();?></article>
    <br><br>
    <a href="/news.php">Назад</a>
    <br><br>
    <a href="/index.php">Перейти на главную страницу</a>

</body>
</html>