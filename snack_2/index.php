<?php
    if(isset($_GET["name"]) && isset($_GET["mail"]) && isset($_GET["age"])){
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];
        if(strlen($name)>=3 && preg_match("/.@/",$mail) && is_numeric($age)){
            echo 'Accesso riuscito :)';
        }else{
            echo 'Accesso negato!!';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 2</title>
    </head>
    <body>
        <form action="./index.php" method="get">
            <input type="text" name="name" placeholder="Nome">
            <input type="text" name="mail" placeholder="Email">
            <input type="text" name="age" placeholder="Età">
            <button type="submit">Invia</button>
        </form>
    </body>
</html>