<?php

$mots = [
    "In",
    "code",
    "we",
    "trust!"
];

function ICWT($mots)
{
    $acronyme = '';

    foreach ($mots as $mot) {
        $acronyme .= strtoupper($mot[0]);
    }

    return $acronyme;
}

echo ICWT($mots);
?>
