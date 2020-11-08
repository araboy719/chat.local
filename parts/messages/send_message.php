<?php
include "configs/db.php";
    if (
        isset($_POST["text"])  && $_POST["text"] != "" && isset($user_id) ) 
        {
        $sql = "INSERT INTO messages( text, addressee, sender) VALUES ('" . $_POST["text"] . "', '"
        . $_GET["user"] . "', '" . $user_id . "')";
        if (mysqli_query($connect, $sql)) {
            echo "<h2>Сообщение отправленно</h2>";
        } else {
            var_dump ($sql);

            echo "<h2>Ошибка</h2>";
        }  

    }
?>

<div class="not-message">
        <img src="images/bg_for_chat.png">
        <b>
            No messege yet
        </b>
    </div>
    <form id="form" action="index.php?user=<?php echo $_GET["user"] ?>" method="POST">
        <div class="text-message">
            <textarea name="text"></textarea>
            <div class="button">
                <button type="submit">SEND</button>
            </div>
        </div>
    </form>
</div>

