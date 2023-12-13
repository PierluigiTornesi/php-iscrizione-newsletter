<?php 

    $email = '';
    if(isset($_GET['email'])){
        $email = $_GET['email'];
        $flag = false;
    }
    var_dump($email);
    var_dump(__DIR__)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Iscrizione Newsletter</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="email">Inserisci la tua email</label>
        <input type="text" id="email" name="email" placeholder="email@example.com">

        <button type="submit">Invia</button>
    </form>

    <?php 
        include __DIR__ . "/functions.php";
    ?>
</body>
</html>