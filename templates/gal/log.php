<html>
<head>
    <title>Авторизация</title>
</head>
<body>
    <h4>Авторизация</h4>
    <!--. 3. Форма входа на сайт-->
    <form action="/gallery/login.php" method="post">
        Логин: <input type="text" name="login">
        Пароль: <input type="password" name="password">
        <button type="submit">Войти</button>
    </form>
    <p>Введите логин и пароль</p>

    <a href="/gallery/gallery.php">Перейти в фотогалерею без авторизации<br>(Добавление фото возможно только для авторизованных пользователей)</a>
    <br><br>
    <a href="/index.php">Перейти на главную страницу</a>
</body>
</html>