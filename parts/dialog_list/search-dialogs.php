<ul>
<?php
if(isset($user_id) && empty($_GET["poisk-text"])){ 
    ?>

    
    <?php $i = 0;
    // счетчик для подсчета пользователей
    while ($i < $count_users) {
        //mysqli_fetch_assoc преобразует полученные данные пользователя в массив
        $user = mysqli_fetch_assoc($result);
        if ($user["id"] != $user_id) {
            ?>
            <!-- Вывод данных пользователей -->
            <li>
                <a href="index.php?user= <?php echo $user["id"] ?> ">
                    <img src="<?php echo $user["photo"]; ?>">
                    <h2> <?php echo $user ["user_name"] ?> </h2>
                </a>                                   
            </li>
            <?php  }
            // Увеличиваем счетчик
            $i = $i + 1;
            } 
        } else {
            //echo "<h2>Надо авторизоваться</h2>";
            //echo "<h2>или зарегистрироваться</h2>";
        }
        ?>


    <!-- Вывод списка найденных пользователей-->

    <?php
        $i = 0;
        if(isset($_GET["poisk-text"]) && $_GET["poisk-text"] != "") {
            $sql = "SELECT * FROM polzovateli WHERE name LIKE '%" . $_GET["poisk-text"] . "%'";
            $resultat = mysqli_query($connect, $sql);
            $col_polzovateley = mysqli_num_rows($resultat);
            var_dump($col_polzovateley);
            while($i < $col_polzovateley) {  
            $polzovatel = mysqli_fetch_assoc($resultat);
    ?>
            <li>
                <a href="/index.php?user=<?php echo $polzovatel["id"]; ?>">
                    <div class="user">
                        <img src="<?php echo $polzovatel["photo"]; ?>">
                    </div>
                    <h3><?php echo $polzovatel["name"]; ?></h3>
                    <span><?php echo $polzovatel["email"]; ?></span>
                    <div class="time">09:10</div>
                </a>
            </li>            
    <?php
            $i = $i + 1;    
                }
            } else {
    ?>
            <!--<h3>Пользователь не выбран</h3>-->
    <?php    
            }
    ?>   
</ul>