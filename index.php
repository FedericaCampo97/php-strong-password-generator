<?php

$number = $_GET['passwordLength'];
if ($number) {
    $password = (generateRandomString($number));
}

function generateRandomString($length)
{
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="p-4">

    <form action="index.php" method="GET">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label">Password</label>
            </div>
            <div class="col-auto">
                <input type="number" name="passwordLength" min=0 max=40 class="form-control" aria-describedby="passwordHelpInline">
            </div>
        </div>
        <button type="submit"> Invia </button>
        <br>
        <?php
        if ($password) {
            echo "password generata: $password";
        }
        ?>
    </form>

</body>

</html>