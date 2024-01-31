<?php

$me = array(
    
    'firstname' => 'dam',
    'age' => '29',
    'foot' => 'false',
    
);

$me['hobbies'] = ["sport", "informatique", "technologies"];

$me['hobbies'][] = 'taxidermy';



echo '<pre>';
print_r($me);
echo '</pre>';




$me['mother'] = array(
    
    'firstname' => 'karen',
    'age' => '55',
    'foot' => 'false',
    'hobbies' => ["music", "lecture", "dormir"]

);



echo '<pre>';
print_r($me);
echo '</pre>';


?>