<?php

$sql = "SELECT * FROM users";

$result = mysqli_query($connect, $sql);
    // mysqli_num_rows -получить количество резултатов
$count_users = mysqli_num_rows($result);

if(isset($user_id)){
    // счетчик для подсчета пользователей
    $i = 0;
    while ($i < $count_users) {
        //mysqli_fetch_assoc преобразует полученные данные пользователя в массив
        $user = mysqli_fetch_assoc($result);
        if ($user["id"] != $user_id) { ?>
            <!-- // Вывод данных пользователей -->
            <li>
                <a href='/index.php?user=<?php echo $user["id"]?>'>
                    <div>
                        <img src='<?php echo $user["photo"]?>'>
                    </div>
                    <h2><?php echo $user["user_name"] ?></h2>
                </a>   
            </li>
        <?php }
        // Увеличиваем счетчик
    $i = $i + 1;
    }
}
?>