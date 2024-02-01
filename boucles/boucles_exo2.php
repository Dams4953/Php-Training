<?php
/*
$imprime = 1;

while ($imprime < 121) {
   
    echo $imprime;
    $imprime++;
   
}
*/

/*
for ($imprime = 1; $imprime < 121; $imprime++)
    echo $imprime;
*/

/*
$prenoms = ['nom', 'nom1', 'nom2', 'nom3', 'nom4'];

foreach($prenoms as $prenom) {
    echo $prenom . '<br>';
}
*/

$pays = [
    
    'be' =>'belgique', 
    'fr' => 'france', 
    'pb' => 'pays-bas', 
    'it' => 'italie', 
    'es' => 'espagne', 
    'ro' => 'roumanie', 
    'no' => 'norevge'
];




?>

<form action="traitement.php" method="post">
    <label for="pays">Sélectionnez un pays :</label>
    <select id="pays" name="pays">
        <?php
        foreach ($pays as $payss)
            echo '<option value="' . $pays . '">' . $payss . '</option>';
        ?>
    </select>
</form>