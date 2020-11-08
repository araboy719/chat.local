<?php
// Данные для подключения к базе данных chat
$server = "localhost";
$username = "root";
$password = "";
$dbname = "chat.local";

// Подключение к базе данных chat
$connect = mysqli_connect($server, $username, $password, $dbname);
// Кодировка базы данных
mysqli_set_charset($connect,'utf8');

?> 