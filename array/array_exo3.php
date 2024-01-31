<?php

$me = array(
    'firstname' => 'dam',
    'age' => '29',
    'foot' => 'false',
    'hobbies' => ["sport", "informatique", "voyages"]
);

$soulmate = array(
    'firstname' => 'lou',
    'age' => '25',
    'foot' => 'false',
    'hobbies' => ["informatique", "musique", "voyages"]
);


$possible_hobbies_via_intersection = array_intersect($me['hobbies'], $soulmate['hobbies']);
$possible_hobbies_via_merge = array_merge($me['hobbies'], $soulmate['hobbies']);

echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';
?>
