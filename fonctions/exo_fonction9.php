<?php

function feedback($message, $classCss)
{

    $classesCssValides = ["info", "error", "warning"];
    $classe = in_array($classCss, $classesCssValides) ? $classCss : "Classe CSS invalide";

   
    return "<div class=\"$classe\">$classe: $message.</div>";
}

echo feedback("Incorrect email address", "error");

?>

