<?php
    $name = "Усанов Максим";
    $age = 35;
    $email = "max.usanov@gmail.com";
    $city = "Казань";
    $about = "Будущий WEB-разработчик";
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= "$name - $about" ?></title>
</head>
<body>
<h1>Моя страница</h1>
<table>
    <tr>
        <td width="150px">Имя:</td>
        <td><?= $name ?></td>
    </tr>
    <tr>
        <td>Возраст:</td>
        <td><?= $age ?></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><?= $email ?></td>
    </tr>
    <tr>
        <td>Город:</td>
        <td><?= $city ?></td>
    </tr>
    <tr>
        <td>Обо мне:</td>
        <td><?= $about ?></td>
    </tr>
</table>
</body>
</html>
