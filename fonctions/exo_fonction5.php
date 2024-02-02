<?php
$nombre1 = "fhd";
$nombre2 = "fg";

function somme($nombre1, $nombre2)
{
    // Vérifiez si les arguments sont des nombres
    if (!is_numeric($nombre1) || !is_numeric($nombre2)) {
        echo "Error: argument is not a number.";
    } else {
        // Calculez la somme
        $somme = $nombre1 + $nombre2;
        return $somme;
    }
}

echo somme($nombre1, $nombre2);
?>
