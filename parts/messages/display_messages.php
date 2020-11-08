
<div id="message">
    <ul>
        <?php
            // Если в запросе есть выбранный пользователь
            if(isset($_GET["user"]) && isset($user_id)) {

                // Получить все сообщения, которые были отправлены пользователю

                $sql = " SELECT * FROM messages " . // Выбираем все сообщения

                    " WHERE (addressee=". $_GET["user"] . // ГДЕ id отправляемому пользователю = $_GET["user"]
                    " AND sender = " . $user_id . ") " . // И отправлено от пользователя с id = 3
                    " OR (addressee = " . $user_id . " AND sender=" . $_GET["user"] . ")";

                $result = mysqli_query($connect, $sql);
            
                $count_messages = mysqli_num_rows($result);


                $i = 0;
                
                // пока переменная i < количества сообщений sms
                while ($i < $count_messages) {

                    $messages = mysqli_fetch_assoc($result);
                    ?>        
                    <li>
                    
                        <?php
                        
                            //Вывести имя конкретного пользователя
                            $sql = "SELECT * FROM users WHERE id=" . $messages["sender"];
                            // Выполняем запрос
                            $user = mysqli_query($connect, $sql);
                            // Записываем в переменную массив с данными пользователя
                            $user = mysqli_fetch_assoc($user);
                        ?>
                        <div class="sender">
                            <div>
                                <p><?php echo $user["user_name"]; ?></p>
                                <img src="<?php echo $user["photo"]; ?>">
                                
                            </div>
                            <p><?php echo $messages["text"]; ?></p>
                            <p class="time"><?php echo $messages["time"]; ?></p>
                        </div>
                    </li>
                            
                    <?php                          
                    $i = $i + 1;
                }
            }
            ?>
    </ul>
<?php
include "send_message.php"
?>
</div>