<?php
session_start();
if (isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["age"])) {
    $_SESSION["firstname"] = $_POST["firstname"];
    $_SESSION["lastname"] = $_POST["lastname"];
    $_SESSION["age"] = $_POST["age"];
}
?>

<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Форма. Сессии и куки</title>
</head>
<body>
<div id="user">
    <form method="post">
        <label>Имя: <input type="text" name="firstname"></label><br>
        <label>Фамилия: <input type="text" name="lastname"></label><br>
        <label>Возраст: <input type="text" name="age"></label><br>
        <button type="submit">Записать</button>
    </form>
    <a href="task2_b_output.php"><button>Вывести данные на экран</button></a>
</div>
</body>
</html>