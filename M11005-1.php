<?php
// Déclarations de variables
$str = "Hello World";
$strUpper = strtoupper($str); // Version majuscule = HELLO WORLD
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>M11005-1 : Les variables</title>
    <style>
        .text-center {
            text-align: center;
        }

        h1 {
            color: #0a9396;
        }
    </style>
</head>

<body>
    <div>
        <a href="/">Retour à l'index</a>
    </div>
    <div class="text-center">
        <h1><?php echo $strUpper; ?></h1>
    </div>
</body>

</html>