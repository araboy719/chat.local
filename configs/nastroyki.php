<?php
/*
Файл для настройки сайта
*/

// Названия сайта
$nameSite = "CHAT";


// Проверяем Авторизацию пользователя 
$polzovatel_id = null;

if(isset($_COOKIE["user_id"])){
	$user_id = $_COOKIE["user_id"];
}
if($user_id == null) {
    header("Location: /login.php");    
}

?>