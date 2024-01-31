<?php

$web_development = array(
    'frontend' => [],
    'backend' => []
   
);

$web_development['backend'][] = 'xhtml';
$web_development['backend'][] = 'Ruby on Rails';
$web_development['backend'][] = 'CSS';
$web_development['backend'][] = 'Flash';
$web_development['backend'][] = 'JavaScript';

// pour modifier
$modif = array_search('xhtml', $web_development['backend']);
$web_development['backend'][$modif] = 'html';

// pour supprimer
$modif = array_search('Flash', $web_development['backend']);
unset($web_development['backend'][$modif]);

echo '<pre>';
print_r($web_development);
echo '</pre>';
?>
