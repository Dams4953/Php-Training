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
    'be' => 'Belgique', 
    'fr' => 'France', 
    'pb' => 'Pays-Bas', 
    'it' => 'Italie', 
    'es' => 'Espagne', 
    'ro' => 'Roumanie', 
    'no' => 'Norvège'
];
?>

<form action="traitement.php" method="post">
    <select id="pays" name="pays">
        <?php
        foreach ($pays as $ISO => $nomPays) {
            echo '<option value="' . $$ISO  . '">' . $nomPays . '</option>';
        }
        ?>
    </select>
</form>
