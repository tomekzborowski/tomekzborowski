<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Witaj w naszym świecie</h1>
    <h1>Jesteś zalogowany jako: <?php echo $_SESSION['login_uzytkownika']?></h1>

    <a href="wyloguj.php">Wyloguj się</a>
</body>
</html>