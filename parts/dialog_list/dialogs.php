<div id="dialogs">

    <?php

    // Выполнить sql запрос в базе данных
    $sql = "SELECT * FROM `users` WHERE `id` =" . $user_id . " ";
    $result = mysqli_query($connect, $sql);

    // Получаем - нашего User
    $user = mysqli_fetch_assoc($result);

    ?>


    <!-- Наш COOKIE user +++++++++++++++++======== -->
    
    <div class="user">
        
        <img src="images/user.png">
        <h2><?php echo $user['user_name'] ?></h2>
            <a href="#" class="active">All chats</a>
        
            <a href="#">Opened</a>
        
            <a href="#">Closed</a>
    </div>
    <ul>
    <!-- Список и поиск контактов -->
    <?php
    // include "search-dialogs.php";
    include "listdialogs.php"
    ?>
    </ul>

</div>