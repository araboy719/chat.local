<?php
    include "configs/db.php";
    include "configs/settings.php";
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
    include "parts/messages/display_messages.php";
    include "parts/add/add.php"
?>
	<script src="script.js"></script>    
</body>
</html>