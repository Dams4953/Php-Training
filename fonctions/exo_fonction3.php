<?php

$annee = date('d M Y H:i:s');

function annee_en_cours($annee){

    return $annee;
}

echo annee_en_cours($annee);

?>