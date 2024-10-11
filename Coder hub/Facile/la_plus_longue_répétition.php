<!-- Description du défi :
Écrivez une fonction qui prend une chaîne de caractères (string) en entrée. Votre tâche est de trouver la plus longue répétition de lettres dans cette chaîne. -->


<?php

function repetitions($s) {
    $s1='';
    $length = strlen($s);
     for ($i = 0; $i < $length; $i++) {
        if ($i < $length - 1 && $s[$i] === $s[$i + 1]) { 
            $s1 .= $s[$i];
        } else {
            $s1 .= $s[$i] . ",";
        }
    }
    $s1 = rtrim($s1, ',');
    $t=explode(",",$s1);
    for ($i=0; $i <count($t) ; $i++) { 
        $t[$i]=strlen($t[$i]);
    }
    return  max($t);

} 


?>