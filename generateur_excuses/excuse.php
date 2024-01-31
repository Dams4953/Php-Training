<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>générateur d'excuses</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #6666;
        }

        .container {
            display: flex;
            width: 100%;
            height: 150px;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        form{
            margin-top: 50px;
        }

        .container_input {
            margin-bottom: 10px;
        }

        .divExcuse {
            display: flex;
            width: 100%;
            height: 200px;
            align-items: center;
        }

        .paragrapheExcuse{

            padding: 100px;
        }
    </style>
</head>

<body>
    <form method="get" action="">
        <div class="container">
            <div class="container_input">
                <label for="nomEnfant">Nom de l'enfant</label>
                <input type="text" name="nomEnfant">
            </div>
            <div class="container_input">
                <label for="garçon">garçon</label>
                <input type="radio" name="genre" value="garçon">

                <label for="fille">fille</label>
                <input type="radio" name="genre" value="fille">
            </div>
            <div class="container_input">
                <label for="nomProf">Nom du professeur</label>
                <input type="text" name="nomProf">
            </div>
            <div class="container_input">
                <label for="maladie">maladie</label>
                <input type="radio" name="excuse" value="maladie">

                <label for="décès">décès</label>
                <input type="radio" name="excuse" value="décès">

                <label for="activitéExtrascolaireImportante">activité extrascolaire importante</label>
                <input type="radio" name="excuse" value="activitéExtrascolaireImportante">

                <label for="grève">grève</label>
                <input type="radio" name="excuse" value="grève">
            </div>

            <input type="submit" name="submit" value="valider">
        </div>
    </form>
    <?php

    if (isset($_GET["nomEnfant"]) && isset($_GET["genre"]) && isset($_GET["nomProf"]) && isset($_GET["excuse"])) {

        $nomEnfant = $_GET["nomEnfant"];
        $genre = $_GET["genre"];
        $nomProf = $_GET["nomProf"];
        $excuse = $_GET["excuse"];

        echo '<div class="divExcuse">';
        echo '<p class="paragrapheExcuse">';

        switch ($excuse) {
            case "maladie":

                echo "Monsieur le principal

            $nomEnfant, élève en classe de 4ième dans votre collège, ne pourra pas assister au cours aujourd’hui.
            Son état de santé justifie cette absence. Le médecin de famille lui a préconisé une période de repos.
            
            Notre enfant devrait reprendre la classe dans une semaine, soit le lundi 20 septembre 2018.
            Pour tout complément d’informations n’hésitez surtout pas à nous contacter.
            
            Nos plus sincères salutations
            Signature des parents (mère ou père).";

                break;

            case "décès":
                echo "Madame, Monsieur
    
            Je vous prie de bien vouloir excuser l’absence de $nomEnfant qui a eu/aura lieu le (date).
            
            En effet, il n’a pas pu/ne pourra pas se rendre en classe à cause d'un décès.
            
            Je vous saurais gré d’en prendre note et m’en remets à votre compréhension.
            
            Je vous prie de croire, Madame, Monsieur, à l’assurance de mes salutations les plus sincères.";

                break;

            case "activitéExtrascolaireImportante":
                echo "Monsieur le Proviseur,

            Notre enfant, $nomEnfant, sera absent (absente) et n’assistera donc pas aux cours de la journée du 13 septembre 2018.
            Notre fille (fils) sera absente et n’ira pas au lycée pour des raisons familiales et personnelles.
            
            Si vous souhaitez avoir des précisions sur le motif de cette absence scolaire vous pouvez me contacter sur mon téléphone portable.
            
            Cordialement
            Signature parentale.";

                break;

            case "grève":
                echo "Monsieur le Proviseur,
    
                Notre enfant, $nomEnfant, sera absent (absente) et n’assistera donc pas aux cours de la journée du 13 septembre 2018.
                Notre fille (fils) sera absente et n’ira pas au lycée pour des raisons de grèves.
                
                Si vous souhaitez avoir des précisions sur le motif de cette absence scolaire vous pouvez me contacter sur mon téléphone portable.
                
                Cordialement
                Signature parentale.";

                break;
        }
    }
    ?>
</body>

</html>