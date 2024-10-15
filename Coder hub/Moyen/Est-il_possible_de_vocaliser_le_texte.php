<!-- Description du défi :

Écrire une fonction qui prend deux variables de type string. La fonction doit retourner "yes" s'il est possible de former le texte contenu dans la variable target à partir des lettres présentes dans source, sans tenir compte de l'ordre des lettres ni de la différence entre majuscules et minuscules. Elle doit retourner "no" dans le cas contraire. -->




<?php


function canForm($source, $target) {
    $source = strtolower($source);
    $target = strtolower($target);

    $source_array = str_split($source);

    for ($i = 0; $i < strlen($target); $i++) {
        $char = $target[$i];
        
        $key = array_search($char, $source_array);
        if ($key !== false) {
            unset($source_array[$key]); 
        } else {
            return 'no'; 
        }
    }
    
    return 'yes'; 
}
?>