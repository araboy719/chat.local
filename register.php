<?php
/*
1. Дизайн/мокап - готов(условно)
2. Сделать отправку формы
3. Проверить пользователя, есть ли пользователь с таким email
4. Проверить заполнил ли пользователь поля формы (email, password)
5. Если предыдущие (3 и 4) шаги пройдены - идем дальше:
	5.1 Добавить пользователя в базу данных

*/

include "configs/db.php";

if(
	isset($_POST["email"]) && isset($_POST["password"])
	&& $_POST["email"] != "" && $_POST["password"] != ""
) {
	// Вставить в таблицу "название таблицы" ()
	$sql = "INSERT INTO polzovateli (email, password, name) VALUES ('" . $_POST["email"] . "','" . $_POST["password"] . "','" . $_POST["name"] . "')";
	if(mysqli_query($connect, $sql)) {
		echo "<h2>Пользователь добавлен</h2>";
	}
} 

//else {
	//echo "<h2>Произошла ошибка</h2>";
//}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php
        include "chasty_site/shapka.php";
    ?>


    <div id="content">
	<form action="register.php" method="POST">
		<p>
			Введите Ваше имя:<br/>
			<input type="text" name="name">
		</p>

		<p>
			Введите свой email:<br/>
			<input type="text" name="email">
		</p>

		<p> 
			Введите свой пароль:<br/>
			<input type="password" name="password">
		</p>
		<p>
			<button type="submit">Зарегистрироваться</button>
		</p>

	</form>
	<a href="login.php">Авторизация</a>
</div>

</body>
</html>
