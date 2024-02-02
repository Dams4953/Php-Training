<?php

$mots = [
    "caecotrophie",
    "chaenichthys",
    "microsphaera",
    "sphaerotheca"
];

function remplace($mot)
{
    $mot = str_replace('ae', 'æ', $mot);

    $mot = str_replace('a', 'æ', $mot);

    $mot = str_replace('e', 'æ', $mot);

    return $mot;
}



foreach ($mots as $mot) {
    $resultat = remplace($mot);
    echo "$resultat\n";
}
?>
