<?php
    $name = "Курылёв Алексей";
    $age = 29;
    $email = "alekseykurylev@gmail.com";
    $city = "Нижний Новгород";
    $about = "Будущий Back-end разработчик";
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "$name - $about" ?></title>
    <meta name="description" content="Нетология - урок 1.1">
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
