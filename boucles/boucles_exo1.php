<?php

$pronouns = array ('I', 'You', 'He/She', 'We', 'You', 'They');
$code = ' code<br>';
$codes = ' codes<br>';

foreach ($pronouns as $pronoun) {

    if ($pronoun == $pronouns[2]) {
            echo $pronoun . $codes;
    } else{
    echo $pronoun . $code;
}
}

?>
