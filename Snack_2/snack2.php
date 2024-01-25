<?php
    if(isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['eta'])) {
        $name = $_GET['nome'];
        $email = $_GET['email'];
        $eta = $_GET['eta'];

        if(strlen($name) > 3 && str_contains($email, '@') && str_contains($email, '.') && is_numeric($eta)) {
            echo 'Accesso riuscito';
        } else {
            echo 'Accesso negato';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./snack2.php" method="GET">
        <label for="">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="">Email</label>
        <input type="text" name="email" id="email">
        <label for="">Età</label>
        <input type="text" name="eta" id="eta">
        <button type="submit">Invia</button>
    </form>
</body>
</html>