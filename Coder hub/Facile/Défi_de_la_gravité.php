<!-- Description du défi
Écrivez une fonction : cette fonction doit recevoir un tableau d'entiers. Chaque cellule de ce tableau représente le nombre de cubes dans cette colonne. La fonction doit vérifier le nombre de cubes dans chaque colonne et les redistribuer vers les colonnes plus petites. -->

<?php

function gravity_flip($columns) {
    $newArray = [];

    while (!empty($columns)) {
        $min = min($columns);
        array_push($newArray, $min);
        $key = array_search($min, $columns);
        if ($key !== false) {
            array_splice($columns, $key, 1);
        }
    }
    
    return $newArray;
}

?>
