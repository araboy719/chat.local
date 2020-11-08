<?php

include "configs/db.php"; //подключаем БД

include "parts/header.php";  // подключаем Header


if(
	isset($_POST["email"]) && isset($_POST["password"])
	&& $_POST["email"] != "" && $_POST["password"] != ""
) {
	
	$sql = "SELECT * FROM users WHERE email LIKE '" . $_POST["email"] . "' AND password LIKE '" . $_POST["password"] . "'";

	$result = mysqli_query($connect, $sql);
	//var_dump($connect);
	//die();
	
	$count_users = mysqli_num_rows($result);
	if($count_users == 1) {
		$user = mysqli_fetch_assoc($result);
		// Создаем куки для хранения данных пользователя
		setcookie("user_id", $user["id"], time() + 60*100 ); 
		//var_dump($polzovatel["id"]);
		//die();
		header("Location: /");
	} else {
		echo "<h2>Логин или пароль введены неверно!</h2>";
	}
} 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Авторизация</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id="authorization">

		<form action="login.php" method="POST">
			
			<h2>ENTER</h2>

			<p>Email<br/>

				<input type="text" name="email">
			
			<p>Password<br/>

				<input type="password" name="password">
			<div>
				<button type="submit">Войти</button>
			</div>
			<div>
				<a href="register.php">Регистрация</a>
			</div>

		</form>
	
	</div>

</body>
</html>