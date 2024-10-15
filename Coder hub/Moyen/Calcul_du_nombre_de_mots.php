<!-- Description du défi :

Écrire une fonction qui prend une valeur textuelle de type string. Cette fonction doit calculer le nombre de mots dans la valeur textuelle, puis retourner le nombre de mots sous forme de integer. -->



<?php 

function countWords($txt) {
    return count(explode(' ',$txt));

}

echo countWords('ff fff ffff');
?>