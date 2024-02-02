<?php

$mots = [
    "cæcotrophiæ ",
    "chænichthys",
    "microsphæræ",
    "sphærothæcæ"
];

function remplace($mot)
{
    $mot = str_replace('æ', 'ae', $mot);

    return $mot;
}



foreach ($mots as $mot) {
    $resultat = remplace($mot);
    echo "$resultat\n";
}
?>
