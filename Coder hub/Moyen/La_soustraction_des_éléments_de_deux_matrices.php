<!-- Description du défi :
Écrire une fonction qui prend deux matrices de type entier (integer) en entrée. La fonction doit soustraire les éléments de la première matrice des éléments de la deuxième matrice, puis renvoyer une matrice de type entier (integer). -->



<?php


function sub_arrays($arr1, $arr2) {
    $Soust=[];
    for ($i=0; $i <count($arr1) ; $i++) { 
        array_push($Soust,$arr1[$i]-$arr2[$i]);
    }
    
    return $Soust;
}


?>