<!-- Écris une fonction qui prend une valeur de type chaîne (string) et qui vérifie si la valeur représente une opération mathématique ou non, puis retourne le résultat sous forme de booléen. -->

<?php


function math_expr($expr) {
    return preg_match('/^[\d\s\+\-\*\/\(\)]+$/', $expr) === 1;
}

echo math_expr('j-4');
?>