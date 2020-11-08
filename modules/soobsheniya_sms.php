

<div id="soobsheniya_sms">
        
   <ul>
        <?php
        // Если в запросе есть выбранный пользователь
        if(isset($_GET["user"]) && isset($_COOKIE["polzovatel_id"])) {
            // Получить все сообщения, которые были отправлены пользователю
            $sql = " SELECT * FROM soobsheniya " . // Выбираем все сообщения
               " WHERE (komu_polzovatel_id=". $_GET["user"] . // ГДЕ id отправляемому пользователю = $_GET["user"]
               " AND ot_polzovatel_id = " . $_COOKIE["polzovatel_id"] . ") " . // И отправлено от пользователя с id = 3
               " OR (komu_polzovatel_id=3 AND ot_polzovatel_id=" . $_GET["user"] . ")"; // ИЛИ отправлено пользователю с id = 3 И от пользователя с id = $_GET["user"]
            $resultat = mysqli_query($connect, $sql);
            //var_dump($resultat);
            //die();
        
            $col_soobsheniy = mysqli_num_rows($resultat);


            $i = 0;
            // пока переменная i < количества сообщений sms
            while ($i < $col_soobsheniy) {
                $soobshenie = mysqli_fetch_assoc($resultat);
                ?>        
                    <li>
                        <!--<a href='/index.php?user=" . $polzovatel["id"] . "'>";-->
                        <div class="user">
                            <img src="images/user.png">
                        </div>
                        <?php
                            //Вывести имя конкретного пользователя
                            $sql = "SELECT name FROM polzovateli WHERE id=" . $soobshenie["ot_polzovatel_id"];
                            // Выполняем запрос
                            $polzovatel = mysqli_query($connect, $sql);
                            // Записываем в переменную массив с данными пользователя
                            $polzovatel = mysqli_fetch_assoc($polzovatel);
                        ?>
                        <h2><?php echo $polzovatel["name"]; ?></h2>
                        <p><?php echo $soobshenie["text"]; ?></p>
                        <div class="time"><?php echo $soobshenie["time"]; ?></div>
                        <!--echo "</a>";-->
                    </li> 
                <?php                          
                $i = $i + 1;
            }
        }
        ?>
    </ul>
</div>