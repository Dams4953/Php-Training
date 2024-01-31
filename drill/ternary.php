<?php
// EXO 11
/*
// façon 1
if (isset($_GET["genre"])) {

    $genre = ($_GET["genre"]);


    $hello = "Bienvenue $genre !";

    echo "$hello";
}
*/
// façon 2
if (isset($_GET["genre"])) {
    
    $genre = ($_GET["genre"]);

    $hello = ($genre === "monsieur") ? "Bienvenue monsieur" : "Bienvenue madame";

    echo $hello;
}
?>

<form method="get" action="">
    <div>
        <label for="femme">Femme</label>
        <input type="radio" name="genre" value="madame">
    </div>
    <div>
        <label for="homme">Homme</label>
        <input type="radio" name="genre" value="monsieur">
    </div>

    <input type="submit" name="submit" value="valider">
</form>