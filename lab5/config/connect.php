<?php
$connect = mysqli_connect('localhost', 'mysql', 'mysql', 'weblaba5');
if(!$connect) {
    die('Ошибка подключения к БД');
}