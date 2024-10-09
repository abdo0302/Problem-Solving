<!-- 
Description du défi :
Écrivez une fonction qui prend en entrée un tableau contenant des nombres entiers. Votre tâche consiste à modifier le tableau de sorte que les nombres soient en ordre croissant, c'est-à-dire que chaque élément du tableau soit supérieur ou égal à l'élément qui le précède.

Pour chaque élément, vous pouvez augmenter le nombre de un, et chaque augmentation est comptabilisée en points. Quel est le nombre minimum de points nécessaires pour accomplir votre tâche ? -->


<?php


function increasing_array($arr) {
    $Output=0;
    for ($i=0; $i <count($arr)-1 ; $i++) { 
        if ($arr[$i]>$arr[$i+1]) {
            $Output+=$arr[$i] - $arr[$i+1];
            $arr[$i+1]=$arr[$i];
        }
    }
    return $Output;

}

echo increasing_array( [3, 2, 5, 1, 7])
?>