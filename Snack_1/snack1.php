<?php
$partite = [
    [
        "squadra_casa" => "Olimpia Milano",
        "squadra_ospite" => "Cantù",
        "punti_casa" => 55,
        "punti_ospite" => 60,
    ],
    [
        "squadra_casa" => "Virtus Bologna",
        "squadra_ospite" => "Reyer Venezia",
        "punti_casa" => 80,
        "punti_ospite" => 75,
    ],
    [
        "squadra_casa" => "Fortitudo Bologna",
        "squadra_ospite" => "AX Armani Exchange Milano",
        "punti_casa" => 70,
        "punti_ospite" => 75,
    ],
    [
        "squadra_casa" => "Virtus Roma",
        "squadra_ospite" => "Dinamo Sassari",
        "punti_casa" => 75,
        "punti_ospite" => 80,
    ],
    [
        "squadra_casa" => "Happy Casa Brindisi",
        "squadra_ospite" => "Germani Basket Brescia",
        "punti_casa" => 65,
        "punti_ospite" => 60,
    ],
];

// Stampiamo a schermo tutte le partite
foreach ($partite as $indice => $partita) {
    if (isset($partita)) {
        echo $partita["squadra_casa"] . " - " . $partita["squadra_ospite"] . " | " . $partita["punti_casa"] . "-" . $partita["punti_ospite"] . "\n";
    }
}
?>