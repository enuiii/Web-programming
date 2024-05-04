<?php
session_start();

if ("POST" === $_SERVER["REQUEST_METHOD"]) {
    $_SESSION["userData"] = array(
        "name" => $_POST["name"],
        "age" => $_POST["age"],
        "salary" => $_POST["salary"],
        "sport" => $_POST["sport"],
        "books" => $_POST["books"]
    );
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма. Сессии и куки</title>
</head>
<body>
<div id="person">
    <form method="post">
        <label>Имя: <input type="text" name="name"></label><br>
        <label>Возраст: <input type="number" name="age"></label><br>
        <label>Зарплата: <input type="number" name="salary"></label><br>
        <label>Любимый вид спорта: <input type="text" name="sport"></label><br>
        <label>Любимая книга: <input type="text" name="books"></label><br>
        <button type="submit">Записать</button>
    </form>

    <br>
    <a href="task2_c_output.php"><button>Вывести данные на экран</button></a>
</div>
</body>
</html>