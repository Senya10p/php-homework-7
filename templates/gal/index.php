<html>
<head>
    <title>PHP-1</title>
</head>
    <body>
        <h1>PHP</h1>
        <h2>7 урок</h2>
        <h2>Объектно-ориентированный подход</h2>
        <h4>Домашняя работа</h4>

        <h4>Фотогалерея</h4>

        <?php

        foreach ($list as $img) {
            ?>
            <img src="/gallery/images/<?php echo $img; ?>" height="30%">
            <?php
        }
        ?>
        <br><br>
        <a href="/gallery/index.php">Перейти в форму для загрузки изображений</a>
    </body>
</html>