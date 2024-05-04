<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Файлы</title>
</head>

<body>
<div>
    <form action="save.php" method="post">
        <label for="email">E-mail:</label>
        <input type="email" name="email" required>

        <label for="category">Категория:</label>
        <select name="category">
            <?php
            $folders = array("Игры", "Фильмы", "Картины", "Книги");
            foreach ($folders as $folder) {
                echo "<option value='$folder'>$folder</option>";
            }
            ?>
        </select>

        <label for="title">Заголовок:</label>
        <input type="text" name="title" required>

        <label for="description">Текст:</label>
        <textarea name="description" rows="3" cols="20" required></textarea>

        <input type="submit" value="Сохранить">
    </form>
</div>

<div id="table">
    <table>
        <thead>
        <th>Категория</th>
        <th>Заголовок</th>
        <th>Текст</th>
        </thead>

        <tbody>
        <?php
        $categoriesDir = 'categories';
        $dir = opendir($categoriesDir);

        while (($category = readdir($dir)) !== false) {
            $categoryPath = $categoriesDir . '/' . $category;
            if ($category === '.' || $category === '..' || !is_dir($categoryPath)) {
                continue;
            }
            $subdir = opendir($categoryPath);
            while (($item = readdir($subdir)) !== false) {
                $itemPath = $categoryPath . '/' . $item;
                if ($item === '.' || $item === '..' || !is_file($itemPath)) {
                    continue;
                }
                $description = file_get_contents($itemPath);
                echo '<tr>';
                echo "<td>$category</td>";
                echo "<td>" . substr($item, 0) . "</td>";
                echo "<td>$description</td>";
                echo '</tr>';
            }
            closedir($subdir);
        }
        closedir($dir);
        ?>

        </tbody>
    </table>
</div>


</body>

</html>