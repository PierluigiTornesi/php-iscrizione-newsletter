<?php 

    $email = '';
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    //var_dump($email);
    //var_dump(__DIR__)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Iscrizione Newsletter</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
</head>
<body>
    <form action="index.php" method="post">
        <label for="email">Inserisci la tua email</label>
        <input type="text" id="email" name="email" placeholder="email@example.com">

        <button class="btn btn-primary" type="submit">Invia</button>
    </form>

    <?php 
        include __DIR__ . "/functions.php";
    ?>
</body>
</html>