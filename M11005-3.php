<?php
// On déclare ici nos variables
$tv = [
    "ref" => "47LG1000",
    "name" => "téléviseur LED de 47",
    "brand" => "LG",
    "price" => 499,
    "stock" =>  [
        "Paris" => 14,
        "Lyon" => 7,
    ]
];
$robot = [
    "ref" => "ROB4000",
    "name" => "robot cuisine",
    "brand" => "KENWOOD",
    "price" => 679,
    "stock" =>  [
        "Paris" => 0,
        "Lyon" => 21,
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M11005-3 : Les conditions</title>
    <style>
        .red {
            color: red
        }
    </style>
</head>

<body>
    <div>
        <a href="/">Retour à l'index</a>
    </div>
    <div>

        <!-- PRODUIT 1 -->
        <div>
            <h2><?php echo $tv["name"]; ?></h2>
            <p>Stock à Paris :
                <?php
                if ($tv["stock"]["Paris"] === 0) {
                    echo "<span class='red'>Non disponible</span>";
                } else {
                    echo $tv["stock"]["Paris"];
                }
                ?>
            </p>
            <p>Stock à Lyon :
                <?php
                if ($tv["stock"]["Lyon"] === 0) {
                    echo "<span class='red'>Non disponible</span>";
                } else {
                    echo $tv["stock"]["Lyon"];
                }
                ?>
            </p>
        </div>

        <!-- PRODUIT 2 -->
        <div>
            <h2><?php echo $robot["name"]; ?></h2>
            <p>Stock à Paris :
                <?php
                if ($robot["stock"]["Paris"] === 0) {
                    echo "<span class='red'>Non disponible</span>";
                } else {
                    echo $robot["stock"]["Paris"];
                }
                ?>
            </p>
            <p>Stock à Lyon :
                <?php
                if ($robot["stock"]["Lyon"] === 0) {
                    echo "<span class='red'>Non disponible</span>";
                } else {
                    echo $robot["stock"]["Lyon"];
                }
                ?>
            </p>
        </div>
    </div>
</body>

</html>