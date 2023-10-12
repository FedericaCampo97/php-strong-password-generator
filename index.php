<?php
include 'functions.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h1 class="text-center">Strong Password Generator</h1>
    <h2 class="text-white text-center">Genera una password sicura</h2>

    <div class="container block_response bg-info-subtle p-3">
        <?php
        if ($password) {
            echo "<p>password generata: $password</p>";
        } else {
            echo "<p>Nessun parametro inserito</p>";
        }
        ?>
    </div>
    <div class="container bg-white p-3 block_options text-dark">
        <form action="index.php" method="GET">
            <div class="row g-3 align-items-center w-100">
                <div class="col-6">
                    <label for="inputPassword6" class="col-form-label">Lunghezza password</label>
                </div>
                <div class="col-6">
                    <input type="number" name="passwordLength" min=0 max=40 class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>
            <button type="submit" class="button_invia"> Invia </button>
            <br>

        </form>

    </div>


</body>

</html>