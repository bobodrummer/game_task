<?php
session_start();
unset($_SESSION['hp1']); // разрегистрировали переменную
unset($_SESSION['hp2']);
session_destroy(); // разрушаем сессию
echo "You loose!";
?>

<html>
<body>
<a href="game_start.php">Try again?</a>
</body>
</html>

