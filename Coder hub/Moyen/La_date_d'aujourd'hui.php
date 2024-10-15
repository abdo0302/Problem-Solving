<!-- Description du défi :

Écrire une fonction qui prend une valeur textuelle de type string représentant la date d'aujourd'hui. La fonction doit retourner la date d'aujourd'hui dans trois formats différents. -->



<?php


function date_Format_($date) {
    $arryDates=explode('/',$date);
    return $date .' | '.str_replace('/','-',$date) .' | ' . $arryDates[1].'/'.$arryDates[2].'/'.$arryDates[0];

}

echo date_Format_('2013/11/29');
?>