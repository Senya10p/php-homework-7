<html>
<head>
    <title>PHP-1</title>
</head>
<body>
    <h1>PHP</h1>
    <h2>7 урок</h2>
    <h2>Объектно-ориентированный подход</h2>
    <h4>Домашняя работа</h4>

    <h2>Новости</h2>
    <?php

    foreach ( $articles as $id=>$article ) {
        ?>
        <h3><a href="/article.php?id=<?php echo $id; ?>"><?php echo $article->getCaption(); ?></a></h3>
        <p><?php echo $article->getSText(); ?></p>
        <hr>
        <?php } ?>
    <br><br>
    <a href="/index.php">Перейти на главную страницу</a>

</body>
</html>