<!-- Description du défi
Écrivez une fonction qui reçoit deux valeurs de type string. La fonction doit concaténer les deux valeurs en une seule, en les séparant par une virgule et en les inversant, de manière à ce que la deuxième valeur se trouve avant la virgule et la première après la virgule. -->


<?php


function reverse_words($str1, $str2) {
    return $str2 . ", ". $str1;
}


?>