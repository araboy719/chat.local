<div id="header">
    <div class="logo">
        <a href="/">
            <img src="/images/logo.png"><b>CHAT</b> 	     
        </a>
    </div>
    <div  class="enter">
        <?php
        if(isset($_COOKIE["user_id"])) {
            ?>
            <a href="exit.php" ><img src="/images/enter.png"></a>
        <?php } else { ?>
            <a href="login.php"><img src="/images/enter.png"></a>
        <?php } ?>
        
    </div>
</div>