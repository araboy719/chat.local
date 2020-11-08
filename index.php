<?php
include "configs/db.php";
include "configs/nastroyki.php";
/*
==================================================================
Отправка сообщения выбранному пользователю
*/

if (
    isset($_POST["text"])  && $_POST["text"] != "" && isset($_COOKIE["user_id"])
            && isset($_POST["addressee"])) 
    {
                //==== Вставить в таблицу "название таблицы"===== ()
    $sql = "INSERT INTO 'message'( text, addressee, sender) VALUES ('" . $_POST["text"] . "', '"
     . $_POST["addressee"] . "', '" . $_POST["sender"] . "')";
    if (mysqli_query($connect, $sql)) {
        echo "<h2>Сообщение отправленно</h2>";
    }  

}

/*
==================================================================
*/

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $nameSite; ?></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <?php
        include "parts/header.php";
        include "parts/dialog_list/dialogs.php";
        include "parts/message/message.php";
    ?>
    <div id="add">
        some add
    </div>


	<script src="script.js"></script>    
</body>
</html>