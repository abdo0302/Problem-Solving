<!-- Description du défi :

Écrivez une fonction qui reçoit une chaîne de caractères (string). La fonction doit supprimer la dernière lettre de la chaîne et retourner la valeur de la chaîne après la suppression. -->

<?php


function deleteLastChar($word) {
    $NowLettre='';
    for ($i=0; $i <strlen($word)-1 ; $i++) { 
        $NowLettre .= $word[$i];
    }
    return $NowLettre;
}
echo deleteLastChar('ffffs');

?>