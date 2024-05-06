<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>объявления</title>
</head>
<body>
<form action="save.php" method="post">
    <label for "email">E-mail: </label>
    <label>
        <input name="email" type="email">
    </label>
    <label for "category">Категория: </label>
    <label>
        <select  name="category" required>
            <option disabled>Выберите категорию</option>
            <option value="Games">Игры</option>
            <option value="Movies">Фильмы</option>
            <option value="Pictures">Картины</option>
            <option value="Books">Книги</option>
        </select>
    </label>
        <label for "name">Название: </label>
        <input type="text" name="name"">
        <label for "description">Описание: </label>
        <textarea name="description" rows="3"></textarea>
    <input type="submit" value="Сохранить">
</form>

<?php
require "../vendor/autoload.php";
$client = new Google_Client();
$client->setApplicationName('weblab4');
$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
try
{
    $client->setAuthConfig( '../credentials.json');
}
catch (\Google\Exception $e)
{
    echo "ERROR!\n";
}
$service = new Google_Service_Sheets($client);
$sheetID = "19A8ccVHzC4npn_rW6H6wFMu_QN01HJJ8VZVNXxvItp0";
?>

<table>
    <thead>
    <?php
    $range1 = "Sheet1!A1:D1";
    $result1 = null;
    try
    {
        $result1 = ($service->spreadsheets_values->get($sheetID, $range1))->getValues();
    }
    catch (\Google\Service\Exception $e)
    {
        echo "Data ERROR\n";
    }
    if (null != $result1)
        foreach ($result1 as $row)
            foreach ($row as $item)
                echo "<th>$item</th>";

    ?>
    </thead>
    <tbody>
    <?php
    $range2 = "Sheet1!A2:D";
    $result2 = null;
    try
    {
        $result2 = ($service->spreadsheets_values->get($sheetID, $range2))->getValues();
    }
    catch (\Google\Service\Exception $e)
    {
        echo "Data ERROR!\n";
    }
    if (null != $result2)
        foreach ($result2 as $row)
        {
            echo "<tr>";
            foreach ($row as $item)
                echo "<td>", $item, "</td>";
            echo "</tr>";
        }

    ?>
    </tbody>
</table>
</body>
</html>