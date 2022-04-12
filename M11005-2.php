<?php
// On déclare ici nos variables
// Tableau initial
$employees = [
    "EM001" => [
        "id"            => 3,
        "first_name"    => "Claude",
        "last_name"     => "Basset",
        "age"           => 54,
        "genre"         => "M"
    ],
    "EM005" => [
        "id"            => 6,
        "first_name"    => "Polly",
        "last_name"     => "Smith",
        "age"           => 41,
        "genre"         => "F"
    ],
    "EM065" => [
        "id"            => 13,
        "first_name"    => "Nabil",
        "last_name"     => "Bensaoud",
        "age"           => 34,
        "genre"         => "M"
    ]
];
// Ajout d'employés
$employees["EM078"]  = [
    "id"            => 24,
    "first_name"    => "Clyde",
    "last_name"     => "Powell",
    "age"           => 52,
    "genre"         => "M"
];
$employees["EM095"]  = [
    "id"            => 32,
    "first_name"    => "Emily",
    "last_name"     => "Goodwall",
    "age"           => 47,
    "genre"         => "F"
];

$clyde = $employees["EM078"];
$emily = $employees["EM095"];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M11005-2 : Les arrays</title>
</head>

<body>
    <div>
        <a href="/">Retour à l'index</a>
    </div>
    <ul>
        <li><?php echo $clyde["first_name"] . " " . $clyde["last_name"]; ?></li>
        <li><?php echo $emily["first_name"] . " " . $emily["last_name"]; ?></li>
    </ul>
</body>

</html>